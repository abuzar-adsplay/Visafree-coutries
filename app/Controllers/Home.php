<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $countryName;
    protected $countryCode;
    protected $countryList;
    protected $countryData;
    protected $mobilityScore;
    protected $visaFreeCountries;
    protected $visaOnArrival;
    protected $evisa;
    protected $visaRequired;


    public function index(): string
    {
        $visafreeModel = new \App\Models\Countries_model();
        $data['countries'] = $visafreeModel->get_countries();
        return view('home', $data);
    }

    public function searchedCountry(string $country): string
    {
        $country = strtolower(url_title($country));
        $country = strtolower(str_replace('-', ' ', $country));
        if ($this->isValidCountry($country)) {
            $this->countryName = $country;
            $this->getData();

            $data = [
                'countryName' => ucwords($country),
                'countryCode' => $this->countryCode,
                'countriesListResult' => $this->countryList,
                'countriesListData' => $this->countryData,
                'mobilityScore' => $this->mobilityScore,
                'visaFreeCountries' => $this->visaFreeCountries,
                'visaOnArrival' => $this->visaOnArrival,
                'evisa' => $this->evisa,
                'visaRequired' => $this->visaRequired
            ];

            return view('visa', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    private function isValidCountry(string $country): bool
    {
        $countryModel = new \App\Models\Countries_model();
        $validCountries = $countryModel->getCountry();
        return in_array($country, $validCountries);
    }

    protected function getData()
    {
        $countryModel = new \App\Models\Countries_model();
        $currentCountry = $countryModel->where('name', $this->countryName)->first();

        $allCountrydb = $countryModel->findAll();

        $allCountries = [];

        foreach ($allCountrydb as $item) {
            $allCountries[$item['country_code']] = $item;
        }

        $this->countryCode = $currentCountry['country_code'];

        $csv_file_path = 'C:\xampp\htdocs\visafree-codeigniter4\public\data\passport.csv';
        $data = [];
        $allCounrtyCodes = [];

        if (($handle = fopen($csv_file_path, 'r')) !== FALSE) {
            while (($row = fgetcsv($handle)) !== FALSE) {
                if ($row[0] == 'Passport') $allCounrtyCodes = $row;
                if ($row[0] == $this->countryCode) {
                    foreach ($row as $k => $ccode) {
                        if ($k == 0) {
                            $data['country_code'] = $ccode;
                            $data['country_name'] = ucwords($this->countryName);
                        } else {
                            switch ($ccode) {
                                case "e-visa":
                                    $data['e-visa'][$allCounrtyCodes[$k]] = $ccode;
                                    break;
                                case "visa on arrival":
                                    $data['visa on arrival'][$allCounrtyCodes[$k]] = $ccode;
                                    break;
                                case "visa required":
                                    $data['visa required'][$allCounrtyCodes[$k]] = $ccode;
                                    break;
                                default:
                                    $data['visa free'][$allCounrtyCodes[$k]] = $ccode;
                                    break;
                            }
                        }
                    }
                }
            }
            fclose($handle);
        }
        
        $mobilityScore = 0;

        if (isset($data['visa free'])) {
            $visaFreeCountries = count($data['visa free']);
            $mobilityScore += $visaFreeCountries;
        }
    
        if (isset($data['visa on arrival'])) {
            $visaOnArrival = count($data['visa on arrival']);
            $mobilityScore += $visaOnArrival;
        }
    
        if (isset($data['e-visa'])) {
            $e_visa = count($data['e-visa']);
            $mobilityScore += $e_visa;
        }
        if (isset($data['visa required'])) {
            $visaRequired = count($data['visa required']);
        }

        $this->visaFreeCountries = $visaFreeCountries;
        $this->visaOnArrival = $visaOnArrival;
        $this->evisa = $e_visa;
        $this->mobilityScore = $mobilityScore;
        $this->countryList = $data;
        $this->countryData = $allCountries;
        $this->visaRequired = $visaRequired;
    }
}

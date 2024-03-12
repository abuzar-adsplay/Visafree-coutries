<?php

namespace App\Controllers;

class Details extends BaseController
{

    protected $countryName;
    
    public function index($country)
    {
        $country = strtolower(url_title($country));
         $country = strtolower(str_replace('-', ' ', $country));

        $countryModel = new \App\Models\Countries_model();

        $validCountries = $countryModel->getCountry();

        if (in_array($country, $validCountries)) {

            $this->countryName = $country;

            $data = [
                'countryName' => ucwords($country),
            ];

            return view('view-details', $data);
        } else {
             throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function holiday($country)
    {
        $country = strtolower(url_title($country));
         $country = strtolower(str_replace('-', ' ', $country));

        $countryModel = new \App\Models\Countries_model();

        $validCountries = $countryModel->getCountry();

        if (in_array($country, $validCountries)) {

            $this->countryName = $country;

            $data = [
                'countryName' => ucwords($country),
            ];

            return view('attraction', $data);
        } else {
             throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}

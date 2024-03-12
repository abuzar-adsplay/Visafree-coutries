<?php

namespace App\Models;

use CodeIgniter\Model;

class Countries_model extends Model
{
    protected $table = 'countries'; 
    public function get_countries()
    {
        return $this->findAll();
    }
    public function getCountry(): array
    {
        $query = $this->db->query("SELECT LOWER(name) AS name FROM countries;");
        $result = $query->getResultArray();
        return array_column($result, 'name');
    }
}

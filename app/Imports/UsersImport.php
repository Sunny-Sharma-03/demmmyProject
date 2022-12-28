<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;
use Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class UsersImport implements ToModel, WithHeadingRow

// class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
            return new Data([
                //  'id'       => $row('id'),
                'name'     => $row['name'],
                'father_name'     => $row['father_name'],
                'address'     => $row['address'],
                'contact'     => $row['contact'],
                'email'    => $row['email'], 
                 
             ]);
        
    }
}

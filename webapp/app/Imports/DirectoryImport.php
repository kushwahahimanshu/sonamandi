<?php

namespace App\Imports;

use App\Directory;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DirectoryImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //var_dump($row);
        // dd($row["user_id"]);
        return new Directory([
            'ms'=>$row['ms'],
            'name'=>$row['name'],
            'email'=>$row['email'],
            'phone1'=>$row['phone1'],
            'deals_in'=>$row['deals_in'],
            'type'=>$row['type'],
            'gst'=>$row['gst'],
            'timing'=>$row['timing'],
            'working_days'=>$row['working_days'],
            'address'=>$row['address'],
            'city'=>$row['city'],
            'gold_purchase'=>$row['gold_purchase'],
            'buy_back'=>$row['buy_back'],
        ]);
    }
}

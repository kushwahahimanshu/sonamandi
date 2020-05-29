<?php

namespace App\Imports;

use App\Job;
use Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class JobImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Job([
            'user_id'=>Auth::user()->id,
            'job_title'=>$row['job_title'],
            'salary'=>$row['salary'],
            'location'=>$row['location'],
            'timing'=>$row['timing'],
            'working_days'=>$row['working_days'],
            'gender'=>$row['gender'],
            'experience'=>$row['experiance'],
            'contact_person'=>$row['contact_person'],
            'phone'=>$row['phone'],
            'language'=>$row['language'],
            'time_to_call'=>$row['time_to_call'],
            'can_whatsapp'=>$row['can_whatsapp'],
        ]);
    }
}

<?php

namespace App\Imports;

use App\NewsBlog;
use Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BlogImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NewsBlog([
            'type'=>2,
            'title'=>$row['title'],
            'content'=>$row['content'],
            'categories'=>$row['categories'],
            'author'=>$row['author'],
            'user_id'=>Auth::user()->id,
        ]);
    }
}

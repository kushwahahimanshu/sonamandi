<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $table = 'diretory';
    Protected $fillable = ['user_id', 'ms', 'name','email','phone1','phone2','deals_in','type','gst','rating','timing','working_days','website','address','city','gold_purchase','buy_back','description','image1','image2','image3','image4','image5','active'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
     Protected $fillable = ['job_title', 'salary', 'location','timing','working_days','gender','experience','contact_person','phone','language','time_to_call','can_whatsapp','user_id'];
}

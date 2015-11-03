<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';

    protected $fillable = [
        'mainSkill_id','skill','level'
    ];

    /*public function separate(Model $mainSkills) {
        foreach($this->query as $main_id => $mainSkill_id)
        {

        }

        endforeach
        return $mainSkills->get();
    }*/
}

<?php

namespace App\Http\Controllers;

use App\Level;
use App\MainSkill;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Skill;

class SkillController extends Controller
{
    public function create()
    {
        $levels = Level::all();
        $mainSkills = MainSkill::all();
        $skillsAll = Skill::all();
        $skills = array();
        foreach ($mainSkills as $mainSkill) {
            $skills[$mainSkill->id] = $skillsAll->where('mainSkill_id', $mainSkill->id);
        }

        return view('skills.form', compact('skills', 'mainSkills', 'levels'));
    }
}

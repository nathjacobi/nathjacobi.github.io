<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Skill;
use App\MainSkill;
use App\Level;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(MainSkillsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        Model::reguard();
    }
}

class SkillsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('skills')->delete();
        Skill::create(['mainSkill_id' => 1, 'skill' => 'Use buttons, snaps, buckles and zips', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 1, 'skill' => 'Tell their name (first and last)', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 1, 'skill' => 'Write their name (first and last)', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 1, 'skill' => 'Know their birthday and age', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 1, 'skill' => 'Know the days of the week', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 1, 'skill' => 'Know the months of the year', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 1, 'skill' => 'Take care of physical needs (clothes and bathroom)', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Share toys and materials', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Finish work on time', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Use and cares for materials', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Accept rules and authority', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Participate in different activities', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Take turns willingly', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Stay on task without constant reminder', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Show respect for others', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Demonstrate ability to think and work independently', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Demonstrate interest in learning', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Separate from parents without stress', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 2, 'skill' => 'Say "please" and "thank you"', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Balance on right/left foot', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Catch a ball', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Kick a ball', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Color with control', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Hold pencil correctly', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Trace a line/simple shapes', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Cut out simple shapes', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Write 26 lower case letters', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Write 26 upper case letters', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Write 0-10 on a line', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Write a word correctly on a line', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Copy 5 word sentence correctly on a line', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Paste and glue appropriately', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Draw a person', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Assemble a 10 piece puzzle', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 3, 'skill' => 'Recognize right and left hand', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Hear likeness and difference in beginning sounds', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Follow simple 2-step directions', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Follow oral direction on one-on-one basis', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Follow oral direction in small groups', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Follow oral direction in large groups', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Speak clearly (articulation errors are developmentally appropriate)', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Speech is understood by unfamiliar listener', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Speak in complete sentences (at least 5 or more words)', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Use pronouns correctly', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Can verbally express needs', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Understands/uses position words (to, on, under, next to, between, over, above, top, bottom, before, after, behind)', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 4, 'skill' => 'Listens attentively to stories', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Recognize and name ten colors', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Recognize first and last name', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Identify upper case letters', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Identify lower case letters', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Know all letter sounds', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Match lower case letters to upper case letters', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Associate sounds with letters', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Identify opposites', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Begin to heart rhyming words', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Tell story suggested by pictures', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Recall parts of a story', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Place set of pictures in sequential order', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Use left to right directionality', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Recognize that print conveys a message', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 5, 'skill' => 'Identify details in a story in response to "wh" questions', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Recognizes square, triangle, circle, rectangle, and 3D shapes', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Copy square, circle, triangle, and rectangle', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Identify 8 shapes', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Understand size concepts (large, small, big, little)', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Recognize numbers 1 through 20', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Identify number words', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Write numbers 1 through 20', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Rote count to 100', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Count 1-25 objects with 1-1 correspondence', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Give a specified number of objects', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Count down number 10 to zero', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Identify 1st through 5th', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => "Count 10's up to 100", 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Identify coins', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Sort', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Understand the concept of "is more than"', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Understand the concept of "is less than"', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Understand the concept of "is equal to"', 'level_id' => 1]);

        Skill::create(['mainSkill_id' => 6, 'skill' => 'Continue a simple pattern', 'level_id' => 1]);

    }
}

class MainSkillsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mainSkills')->delete();
        MainSkill::create(['title' => 'Self-Help Skills']);
        MainSkill::create(['title' => 'Social and Emotional Development']);
        MainSkill::create(['title' => 'Fine and Gross Motor Skills']);
        MainSkill::create(['title' => 'Communication and Language Skills']);
        MainSkill::create(['title' => 'Cognitive/Reading Readiness Skills']);
        MainSkill::create(['title' => 'Cognitive/Math Readiness Skills']);
    }
}

class LevelsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('levels')->delete();
        Level::create(['levelName' => 'Mastered']);
        Level::create(['levelName' => 'Developing']);
        Level::create(['levelName' => 'Not Able']);
        Level::create(['levelName' => 'Not Introduced']);
        Level::create(['levelName' => 'No Feedback']);
    }
}

<?php

use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert(array(
            array('name'=>'Male'), 
            array('name'=>'Female'), 
            array('name'=>'Transgender'), 
        ));

        DB::table('castes')->insert(array(
            array('name'=>'General'), 
            array('name'=>'OBC'), 
            array('name'=>'ST(P)'), 
            array('name'=>'ST(H)'), 
            array('name'=>'SC'), 
            array('name'=>'MOBC'), 
        ));
        DB::table('religions')->insert(array(
            array('name'=>'Hindu'), 
            array('name'=>'Muslim'), 
            array('name'=>'Christianity'), 
            array('name'=>'Sikh'), 
            array('name'=>'Buddhisim'), 
            array('name'=>'Jainism'), 
            array('name'=>'Others'), 
        ));
        DB::table('status_master')->insert(array(
            array('code'=>'A:1', 'name'=>'Applied'), 
            array('code'=>'A:2', 'name'=>'Processing'), 
            array('code'=>'A:3', 'name'=>'Accepted'),   
            array('code'=>'A:4', 'name'=>'Payment Done'),   
            array('code'=>'A:5', 'name'=>'Admitted'),   
            array('code'=>'A:6', 'name'=>'Rejected'),  
        ));

        DB::table('academic_term_master')->insert(array(
            array('name'=>'1st Semester', 'total_month'=>'6'),   
            array('name'=>'2nd Semester', 'total_month'=>'6'),   
            array('name'=>'3rd Semester', 'total_month'=>'6'),   
            array('name'=>'4th Semester', 'total_month'=>'6'),   
            array('name'=>'5th Semester', 'total_month'=>'6'),   
            array('name'=>'6th Semester', 'total_month'=>'6'),   
        ));


        DB::table('course_master')->insert(array(
            array('abbr'=>'B.Sc', 'name'=>'Bachelore of Science (Honours)', 'total_term'=>'3'),   
            array('abbr'=>'B.A', 'name'=>'Bachelore of Arts (Honours)', 'total_term'=>'3'),   
            array('abbr'=>'B.Com', 'name'=>'Bachelore of commerce (Honours)', 'total_term'=>'3'),  
            array('abbr'=>'B.C.A', 'name'=>'Bachelore of Computer Applications', 'total_term'=>'3'),    
        ));
    }
}

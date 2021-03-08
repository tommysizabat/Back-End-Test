<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReporterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canvas_users')->insert([
	    	[
	    		'id' => "530e6563-54f9-reporter1",
	    		'name' => "Reporter 01",
	    		'email' => "reporter01@kompas.id",
	    		'username' => "reporter01kompasid",
		        'password' => bcrypt('reporter01kompasid'),
		        'summary' => '-',
		        'avatar' => NULL,
		        'dark_mode' => 0,
		        'digest' => NULL,
		        'locale' => 'en',
		        'role' => 3,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
	   		],
	   		[
	    		'id' => "530e6563-54f9-editor1",
	    		'name' => "Editor 01",
	    		'email' => "editor01@kompas.id",
	    		'username' => "editor01kompasid",
		        'password' => bcrypt('editor01kompasid'),
		        'summary' => '-',
		        'avatar' => NULL,
		        'dark_mode' => 0,
		        'digest' => NULL,
		        'locale' => 'en',
		        'role' => 2,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
	   		],
            
        ]);

    }
}

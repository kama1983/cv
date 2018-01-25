<?php 

class Migrate
{
	public function run()
	{
		 App::$db->rawQuery('
             create table if not exists `users`(
                `id` integer  PRIMARY KEY  AUTOINCREMENT not null,
                `username` varchar(200) not null,
                `password` varchar(200) not null
             );            
		 ');

         App::$db->rawQuery('
             create table if not exists `language`(
                `id` integer  PRIMARY KEY  AUTOINCREMENT not null,
                `lang` varchar(30) not null,
                `cv_id` int(10) not null
             );          
        ');

		 App::$db->rawQuery('
             create table if not exists `cv`(
                `id` integer  PRIMARY KEY  AUTOINCREMENT not null,
                `name` varchar(200) not null,
                `address` varchar(200) not null,
                `email` varchar(40) not null,
                `brithday` varchar(30) not null,
                `religion` varchar(40) not null,
                `gender` varchar(20) not null,
                `status` varchar(20) not null,
                `military` varchar(30) not null
             );            
		 ');

		 App::$db->rawQuery('
             create table if not exists `objective`(
                `id` integer PRIMARY KEY AUTOINCREMENT not null,
                `objective` varchar(200) not null,
                `cv_id` int(10) not null
             );            
		 ');


		 App::$db->rawQuery('
             create table if not exists `intersts`(
                `id` integer PRIMARY KEY  AUTOINCREMENT not null,
                `intersts` varchar(200) not null,
                `cv_id` int(10) not null
             );            
		 ');

		 App::$db->rawQuery('
             create table if not exists `work`(
                `id` integer  PRIMARY KEY AUTOINCREMENT not null,
                `company_name` varchar(200) not null,
                `from` varchar(20) not null,
				`to` varchar(20) not null,   
				`description` text not null,             
  				`cv_id` int(10) not null           
           );            
		 ');

 		App::$db->rawQuery('
             create table if not exists `skills`(
                `id` integer  PRIMARY KEY AUTOINCREMENT not null,
                `skill_name` varchar(200) not null,
				`description` text not null,  
				`cv_id` int(10) not null           
             );            
		 ');

		App::$db->rawQuery('
             create table if not exists `courses`(
                `id` integer  PRIMARY KEY AUTOINCREMENT not null,
                `course_place` varchar(200) not null,
                `from` varchar(20) not null,
				`to` varchar(20) not null,   
				`dgree` varchar(20) not null,   
				`description` text not null,  
				`cv_id` int(10) not null           
             );            
		 ');

		 App::$db->rawQuery('
             create table if not exists `education`(
                `id` integer  PRIMARY KEY AUTOINCREMENT not null,
                `education_place` varchar(200) not null,
                `from` varchar(20) not null,
				`to` varchar(20) not null,   
				`dgree` varchar(20) not null,   
				`description` text not null,  
				`cv_id` int(10) not null           
             );            
		 ');
	}

	public function seeds()
	{
		App::$db->insert('users',['username' => 'kama1983' , 'password' => sha1('kama1983')]) or die('Error Inserting');
	}
}
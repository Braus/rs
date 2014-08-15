<?php
	
class UserTableSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'firstName' => 'Jean',
			'lastName' => 'de Assis',
			'email' => 'jean_loureiro@hotmail.com',
			'mobile' => '0432264799',
			'password' => Hash::make('jlf0507'),
		));
	}
}
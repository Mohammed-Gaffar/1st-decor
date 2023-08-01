<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = \App\User::create([
            'u_nameAr' => 'محمد جعفر',
            'u_nameEn'=>'mohammed gaffer',
            'identity_number'=>'2426931883',
            'email' => 'mg@crm.com',
            'password' => bcrypt('123456'),
            'phone'=>'0551316566',
            'code'=>'3002',
            'department'=>'information technology',
            'job_position'=>'programmer',
            'recruitment_date'=>date(now()),
            'status'=>'1',

        ]);

        $user->attachrole('super_admin');


        $user2 = \App\User::create([
            'u_nameAr' => 'supervisor',
            'u_nameEn'=>'supervisor',
            'identity_number'=>'11329878',
            'email' => 'visor@crm.com',
            'password' => bcrypt('123'),
            'phone'=>'0546205458',
            'code'=>'3088',
            'department'=>'marketers',
            'job_position'=>'marketer',
            'recruitment_date'=>date(now()),
            'status'=>'1',

        ]);

        $user2 ->attachRole('super_visor');






        $user3 = \App\User::create([
            'u_nameAr' => 'test',
            'u_nameEn'=>'test',
            'identity_number'=>'11329878',
            'email' => 'test@test.com',
            'password' => bcrypt('123456'),
            'phone'=>'0546205458',
            'code'=>'3088',
            'department'=>'marketers',
            'job_position'=>'marketer',
            'recruitment_date'=>date(now()),
            'status'=>'1',

        ]);

        $user3 ->attachRole('user');

    }

}

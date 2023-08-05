<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\Admin\Admin::create([
            'Admin_Name' => 'Test',
            'Admin_Email' => 'Test',
            'Admin_Password' => 'Test'
        ]);
    }
}

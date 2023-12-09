<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            'name' => 'Hancie Phago',
            'email' => 'hanciephago@gmail.com',
            'password' => Hash::make('password'),
            'address'=>'Kathmandu',
            'mobile_no'=>'9825915122',
            'email_verified_at'=>Carbon::now()
            
        ];

        $user = User::firstOrCreate(['email' => $userData['email']], $userData);
        $user->assignRole(User::ADMIN);

        $url = asset('assets/img/bibek.jpg');
        $user->addMediaFromUrl($url)->toMediaCollection('profile_image');
    }
}
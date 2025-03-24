<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('username', '77a157d4-777e-40cf-9f8a-1e513127417c')->first();
        $contacts = [];

        for ($i = 1; $i <= 20; $i++) {
            $contacts[] = [
                'first_name' => 'First' . $i,
                'last_name' => 'Last' . $i,
                'email' => 'user' . $i . '@example.com',
                'phone' => '081234567' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('contacts')->insert($contacts);
    }
}

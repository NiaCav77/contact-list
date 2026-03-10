<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedMessages = [
            [
                'id' => 1,
                'name' => 'Jane',
                'email' => 'jane@example.com',
                'subject' => 'Hello',
                'topic_id' => 1,
                'message' => 'Hello World!'
            ],
            [
                'name' => 'John',
                'email' => 'john@example.com',
                'subject' => 'GRRR',
                'topic_id' => 101,
                'message' => 'The website is not working'
            ],
            [
                'name' => 'John',
                'email' => 'john@example.com',
                'subject' => 'GRRR',
                'topic_id' => 100,
                'message' => 'The website is not working'
            ],
            [
                'name' => 'Goofy',
                'email' => 'goofy@example.com',
                'subject' => 'Disney Feedback',
                'topic_id' => 102,
                'message' => 'Gawrsh, Good job! A-hyuck!'
            ]
        ];
    }
}

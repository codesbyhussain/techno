<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            ['name' => "Gig A Night 9.0",
            'description' => "A thrilling night that will never be forgotten",
            'poster' => "images/gig.jpg",
            'date' => "8/10/2022",
            'time' => "6:30 PM",
            'organizer' => "Roobaroo",
            'contact' => "Vishishtha: +91 96307 65080",
        ],
        ['name' => "SWAANG",
            'description' => "Fun filled games that will leave you wanting more",
            'poster' => "images/swaang.jpg",
            'date' => "8th and 9th October 2022",
            'time' => "9 AM - 5 PM",
            'organizer' => "Ae se Aenak",
            'contact' => "+91 12344 56789",
        ],
        ['name' => "RoboFiesta",
            'description' => "Brings to you Robo wrestling, smash akrts, bristle bot, momo game",
            'poster' => "images/robo.png",
            'date' => "8th and 9th October 2022",
            'time' => "9 AM - 5 PM",
            'organizer' => "Robotics Club",
            'contact' => "+91 83499 00295",
        ],
        ];

        DB::table('events')->insert($events);
    }
}

<?php 

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubs = [
            [
            'club_name' => 'ISTE',
            'description' => "Indian Society for Technical Education, formed in 1968, is the leading technical Society.",
            'faculty_coordinator' => "Dr. Prashant Baredar",
            'student_coordinator' => "Digant Maheshwari",
            'contact' => "+91 70472 09509",
            'image' => "images/iste.jpg",
            ],
            [
            'club_name' => 'IBC',
            'description' => "Intellect Browsers’ Consortium is the literary cum management society of NIT-Bhopal dedicated to broaden the literary knowledge base and enhance the managerial skills of the students.",
            'faculty_coordinator' => "Dr. K K Dhote",
            'student_coordinator' => "Kalyani Singh Bais",
            'contact' => "+91 89898 03800",
            'image' => "images/ibc.jpg",
            ],
            [
            'club_name' => 'Robotics CLub',
            'description' => "We are a society at MANIT Bhopal that strives to stimulate interest in robotics among the students of the institute.
            https://www.instagram.com/roboticsclubmanit
            https://www.facebook.com/roboticsclubmanit",
            'faculty_coordinator' => "Dr. Sushma Gupta",
            'student_coordinator' => "Fazil Khan",
            'contact' => "+91 88603 08636",
            'image' => "images/robotics.png",
            ],
            [
            'club_name' => 'Roobaroo',
            'description' => "Roobaroo is the cultural society of MANIT. A nexus of the variegated talent of the college.",
            'faculty_coordinator' => "Dr. Meena Agarwal",
            'student_coordinator' => "Vishishtha Gupta",
            'contact' => "+91 96307 65080",
            'image' => "images/roobaroo.png",
            ],
            [
            'club_name' => 'Drishtant',
            'description' => "Drishtant is a community dedicated to bringing together like-minded individuals who yearn to break the chains of mediocrity and strive for excellence. It is a knowledge sharing community where anyone can step up and let their voice be heard.",
            'faculty_coordinator' => "Dr. K K Dhote",
            'student_coordinator' => "Rooth Maria Joshi",
            'contact' => "+91 79024 43850",
            'image' => "images/drishtant.jpg",
            ],
            [
            'club_name' => 'Vision',
            'description' => "Vision provide a suitable platform for the students of MANIT to showcase their technical skills.",
            'faculty_coordinator' => "Dr. Sushma Gupta",
            'student_coordinator' => "Seshal Jain",
            'contact' => "+91 73890 61102",
            'image' => "images/vision.png",
            ],
        ];

        DB::table('clubs')->insert($clubs);
    }
}

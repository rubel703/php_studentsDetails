<?php


namespace App\classes;


class Home
{
    private $students;

    public function __construct()
    {
        $this->students = [
            0 => [
                "name"      => "Md. Rifat Khan",
                "address"   => "Dhaka, Bangladesh",
                "age"       => 16,
                "class"     => 9,
                "img"       => "assets/images/01.jpg",
                "mobile"    => [
                    0 => "01682698000",
                    1 => "01682698111"
                ]
            ],
            1 => [
                "name"      => "Md. Rohim Khan",
                "address"   => "Bandarban, Bangladesh",
                "age"       => 16,
                "class"     => 9,
                "img"       => "assets/images/02.jpg",
                "mobile"    => [
                    0 => "01682698222",
                    1 => "01682698222"
                ]
            ],
            2 => [
                "name"      => "Md. Karim Khan",
                "address"   => "Rajshai, Bangladesh",
                "age"       => 16,
                "class"     => 9,
                "img"       => "assets/images/03.jpg",
                "mobile"    => [
                    0 => "01682698333",
                    1 => "01682698333"
                ]
            ],
            3 => [
                "name"      => "Md. Samim Khan",
                "address"   => "Bandarban, Bangladesh",
                "age"       => 16,
                "class"     => 9,
                "img"       => "assets/images/04.jpg",
                "mobile"    => [
                    0 => "01682698444",
                    1 => "01682698444"
                ]
            ],
            4 => [
                "name"      => "Md. Samim Khan",
                "address"   => "Bandarban, Bangladesh",
                "age"       => 16,
                "class"     => 9,
                "img"       => "assets/images/01.jpg",
                "mobile"    => [
                    0 => "01682698444",
                    1 => "01682698444"
                ]
            ],
            5 => [
                "name"      => "Md. Samim Khan",
                "address"   => "Bandarban, Bangladesh",
                "age"       => 16,
                "class"     => 9,
                "img"       => "assets/images/02.jpg",
                "mobile"    => [
                    0 => "01682698444",
                    1 => "01682698444"
                ]
            ],
        ];
    }

    public function index()
    {
        return header('Location: route.php?page=home');
    }
    public function getAllStudents()
    {
        return $this->students;
    }

}
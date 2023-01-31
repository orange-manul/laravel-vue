<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'vasya',
                'age' => 20,
                'job' => 'developer',
            ],
            [
                'id' => 2,
                'name' => 'leh',
                'age' => 24,
                'job' => 'designer',
            ],
            [
                'id' => 3,
                'name' => 'horse',
                'age' => 17,
                'job' => 'pole',
            ]
        ];
        return $persons;
    }
}

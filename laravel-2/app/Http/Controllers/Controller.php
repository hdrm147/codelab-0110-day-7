<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function about()
    {
        $name = "Haidar";
        $age = 20;
        $bootcamp = "Codelab";
        $skills = ["HTMl", "CSS", "iOS", "PHP"];
        $smoker = true;
        $vegan = false;
        $title = "About us";
        $data = compact(
            'name',
            'age',
            'bootcamp',
            'skills',
            'smoker',
            'vegan',
            'title'
        );

        return view('about', $data);
    }
}

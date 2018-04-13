<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Website;
use App\Models\Graphic;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {
        $graphics = Graphic::all();
        $websites = Website::all();

        $data = [
            'graphics' => $graphics,
            'websites' => $websites,
        ];

        return view('webLanding', $data);
    }

    public function webProject($id) {
        $websites = Website::find($id);
        return view('webDesign.webProjects.webProject')->with('websites', $websites);
    }
}

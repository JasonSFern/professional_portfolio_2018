<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Website;
use App\Models\Graphic;

use Illuminate\Http\Request;

class GraphicController extends Controller
{
    public function index() {
        $graphics = Graphic::all();
        $websites = Website::all();

        $data = [
            'graphics' => $graphics,
            'websites' => $websites,
        ];

        return view('graphicLanding', $data);
    }

    public function graphicProject($id) {
        $graphics = Graphic::find($id);
        return view('graphicDesign.graphicProject')->with('graphics', $graphics);
    }
}

<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Website;
use App\Models\Graphic;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class WebsiteController extends Controller
{
    public function index() {
        $websites = Website::select()
                    ->whereNotIn('id', [5])
                    ->get();

        $data = [
            'websites' => $websites,
        ];

        return view('webLanding', $data);
    }

    public function webProject($id) {
        $websites = Website::find($id);
        return view('webDesign.webProjects.webProject')->with('websites', $websites);
    }
}

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

        return view('webd', $data);
    }

    // public function webProject($Id) {
    //     // $user = User::where('id', $userId)
    //     //     ->first();
    //     //
    //     // if (!$user) {
    //     //     abort(404);
    //     // }
    //
    //     $websites = $id->websites;
    //
    //     return view('webProject', [
    //         'id' => $id,
    //         'websites' => $websites
    //     ]);

    public function webProject($id) {
        $websites = Website::find($id);
        return view('webProject')->with('websites', $websites);
    }
}

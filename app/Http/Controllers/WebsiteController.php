<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $website = Website::find(1);

        $data = [
            'websites' => $website->category,
        ];

        return view('home', $data);
    }

    public function admin()
    {
        $data = [
            
        ];
        return view('admin/website', $data);
    }
}

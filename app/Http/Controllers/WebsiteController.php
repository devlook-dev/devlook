<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function __construct() {
        $this->website = new Website();
    }
    public function index()
    {
        $website = Website::has('category');

        $data = [
            'websites' => $website,
        ];

        return view('home', $data);
    }

    public function admin()
    {
        $website = Website::has('category')->with('category')->get();

        $data = [
            'websites' => $website,
        ];
        return view('admin/website', $data);
    }
    public function detail($id)
    {
        $data = [
            'websites' => $this->website->detailData($id),
        ];
        return view('admin/website', $data);
    }

    public function add()
    {
        return view('admin/create-website');
    }

    public function insert()
    {
        $data = [
            'name' => Request()->website_name,
            'links' => Request()->website_link,
            'description' => Request()->description,
        ];
        $this->website->addData($data);
        return redirect()->route('websites')->with('pesan', 'Data berahasil di tambahkan!');
    }
}

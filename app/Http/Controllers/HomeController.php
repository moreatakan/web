<?php

namespace App\Http\Controllers;

use App\Models\Categoryizin;
use App\Models\Post;
use App\Models\Izin;
use App\Models\Slide;
use App\Models\Spelayanan;
use App\Models\standarpelayanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('frontend/home',[
        'title' => 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu',
        'posts' => Post::latest()->limit(6)->get(),
        'slider' => Slide::all()
    ]);
    

    }

    public function show(Post $post)
    {

        return view('frontend/detail_post',[
            'title' => 'detail post',
            'post' => $post,
            'slider' => Slide::all()            
        ]);

    }

    public function perizinan()
    {
        return view('frontend.perizinan.jenis_izin',[
            'title' => 'jenis izin',
            'slider' => Slide::all(),
            'seluruhizin' => Izin::all()
        ]);
    }

    public function standarpelayanan()
    {
        $sp = Spelayanan::with('izin');
        return view('frontend.perizinan.standar_pelayanan',[
            'title' => 'jenis izin',
            'slider' => Slide::all(),            
            'spelayanan' => $sp
        ]);
    }

}

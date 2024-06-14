<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Beranda";
        $beritaTerbaru = Artikel::where('status', 'aktif')->orderBy('created_at', 'desc')->take(3)->get();
        // sendJson($beritaTerbaru);
        return view('pages.home', compact('title','beritaTerbaru'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function event()
    {
        return view('pages.event');
    }
    public function detailEvent($id)
    {
        $title = "Event";
        $event = Artikel::where('slug', $id)->firstOrfail();
        return view('pages.detail_event', compact('event', 'title'));
    }

    public function publicNews()
    {
        return view('pages.public_news');
    }
    public function detailPublicNews()
    {
        return view('pages.detail_public_news');
    }

    public function publicPers()
    {
        return view('pages.public_pers');
    }
    public function detailPublicPers()
    {
        return view('pages.detail_public_pers');
    }

    public function oaseOpini()
    {
        return view('pages.oase_opini');
    }
    public function detailOaseOpini()
    {
        return view('pages.detail_oase_opini');
    }

    public function oaseEsai()
    {
        return view('pages.oase_esai');
    }
    public function detailOaseEsai()
    {
        return view('pages.detail_oase_esai');
    }

    public function oasePustaka()
    {
        return view('pages.oase_pustaka');
    }
    public function detailOasePustaka()
    {
        return view('pages.detail_oase_pustaka');
    }

    public function oaseInfografis()
    {
        return view('pages.oase_infografis');
    }
    public function detailOaseInfografis()
    {
        return view('pages.detail_oase_infografis');
    }

}

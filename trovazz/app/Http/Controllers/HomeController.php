<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Destinasi;
use App\Event;
use App\Penginapan;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['berita']= Berita :: all();
        $data['destinasi']= Destinasi :: all();
        $data['event']= Event :: all();
        $data['penginapan']= Penginapan :: all();
        return view('home',$data);
    }
    
    public function adminHome()
    {
        $data['berita']= Berita :: all();
        $data['destinasi']= Destinasi :: all();
        $data['event']= Event :: all();
        $data['penginapan']= Penginapan :: all();
        return view('adminHome',$data);
    }
    public function adminDashboard()
    {
        return view('admin/admin');
    }
    public function detailevent($id) {
        $data['berita']= Berita :: all();
        $data['destinasi']= Destinasi :: all();
        $data['event']= Event :: all();
        $data['penginapan']= Penginapan :: all();
        $data = DB::select('select * from event where id = ?', [$id]);
        return view('detailevent',['event'=>$data]);
    }
    public function detailberita($id) {
        $data['berita']= Berita :: all();
        $data['destinasi']= Destinasi :: all();
        $data['event']= Event :: all();
        $data['penginapan']= Penginapan :: all();
        $data = DB::select('select * from berita where id = ?', [$id]);
        return view('detailberita',['berita'=>$data]);
    }
}

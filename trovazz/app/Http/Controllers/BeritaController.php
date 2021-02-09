<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;
use File;
use App\Berita;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['berita']= Berita::all();
        return view('admin/index/indexberita',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/forms/formberita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate ([
            'name'             => 'required',
            'date'             =>'required',
            'image'            => '',
            'description'         => 'required',
        ]);

        if($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'image-'.time().".".$extFile;
            $path = $request->image->move('img/berita', $namaFile);
            DB::table('berita')
                ->insert([
                    'name'         => $request->name,
                    'date'         => $request->date,
                    'image'        => $path,
                    'description'     => $request->description,
                ]);

                return redirect(route('berita.index'))->with('message','Data Berhasil ditambahkan');
                } else {
                    return redirect(route('berita.index'))->with('message','Data Gagal ditambahkan');
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $berita = Berita::find($id);
        return view('admin/forms/formeditberita',['berita'=>$berita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'image-'.time().".".$extFile;
            $path = $request->image->move('img/destinasi', $namaFile);
            DB::table('berita')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'date' => $request->date,
                'image' => $path,
                'description' => $request->description,
            ]);

           return redirect(route('berita.index'))->with('message','Data Berhasil diupdate');
            } else {
                return redirect(route('berita.index'))->with('message','Data Gagal diupdate');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $berita = Berita::find($id);
        $berita->delete();

        return redirect(route('berita.index'))->with('message','Data Berhasil Dihapus');
    }
}

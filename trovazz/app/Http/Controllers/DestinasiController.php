<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;
use File;
use App\Destinasi;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['destinasi']= Destinasi::all();
        return view('admin/index/indexdestinasi',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/forms/formdestinasi');
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
            'image'            => 'file|image',
            'description'         => 'required',
        ]);

        if($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'image-'.time().".".$extFile;
            $path = $request->image->move('img/destinasi', $namaFile);
            DB::table('destinasi')
                ->insert([
                    'name'         => $request->name,
                    'image'        => $path,
                    'description'     => $request->description,
                ]);

                return redirect(route('destinasi.index'))->with('message','Data Berhasil ditambahkan');
                } else {
                    return redirect(route('destinasi.index'))->with('message','Data Gagal ditambahkan');
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
        $destinasi = Destinasi::find($id);
        return view('admin/forms/formeditdestinasi',['destinasi'=>$destinasi]);
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
            DB::table('destinasi')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'image' => $path,
                'description' => $request->description,
            ]);

           return redirect(route('destinasi.index'))->with('message','Data Berhasil diupdate');
            } else {
                return redirect(route('destinasi.index'))->with('message','Data Gagal diupdate');
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
        $destinasi = Destinasi::find($id);
        $destinasi->delete();

        return redirect(route('destinasi.index'))->with('message','Data Berhasil Dihapus');
    } 
}

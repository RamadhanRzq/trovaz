<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;
use File;
use App\Penginapan;

class PenginapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['penginapan']= Penginapan::all();
        return view('admin/index/indexpenginapan',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/forms/formpenginapan');
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
            'price'             => 'required',
            'image'            => 'file|image',
            'description'         => 'required',
        ]);

        if($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'image-'.time().".".$extFile;
            $path = $request->image->move('img/event', $namaFile);
            DB::table('penginapan')
                ->insert([
                    'name'         => $request->name,
                    'price'         => $request->price,
                    'image'        => $path,
                    'description'     => $request->description,
                ]);

                return redirect(route('penginapan.index'))->with('message','Data Berhasil ditambahkan');
                } else {
                    return redirect(route('penginapan.index'))->with('message','Data Gagal ditambahkan');
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
        $penginapan = Penginapan::find($id);
        return view('admin/forms/formeditpenginapan',['penginapan'=>$penginapan]);
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
            DB::table('penginapan')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $path,
                'description' => $request->description,
            ]);

           return redirect(route('penginapan.index'))->with('message','Data Berhasil diupdate');
            } else {
                return redirect(route('penginapan.index'))->with('message','Data Gagal diupdate');
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
        $penginapan = Penginapan::find($id);
        $penginapan->delete();

        return redirect(route('penginapan.index'))->with('message','Data Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;
use File;
use App\Event;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['event']= Event::all();
        return view('admin/index/indexevent',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/forms/formevent');
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
            $path = $request->image->move('img/event', $namaFile);
            DB::table('event')
                ->insert([
                    'name'         => $request->name,
                    'image'        => $path,
                    'description'     => $request->description,
                ]);

                return redirect(route('event.index'))->with('message','Data Berhasil ditambahkan');
                } else {
                    return redirect(route('event.index'))->with('message','Data Gagal ditambahkan');
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
        $event = Event::find($id);
        return view('admin/forms/formeditevent',['event'=>$event]);
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
            DB::table('event')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'image' => $path,
                'description' => $request->description,
            ]);

           return redirect(route('event.index'))->with('message','Data Berhasil diupdate');
            } else {
                return redirect(route('event.index'))->with('message','Data Gagal diupdate');
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
        $event = Event::find($id);
        $event->delete();

        return redirect(route('event.index'))->with('message','Data Berhasil Dihapus');
    }
}

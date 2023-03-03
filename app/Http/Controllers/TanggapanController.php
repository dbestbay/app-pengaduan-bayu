<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tanggapan;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index', compact('tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tanggapan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'pengaduan_id' => 'required',
    	// 	'tgl_tanggapan' => 'required',
        //     'tanggapan' => 'required',
        //     'masyarakat_nik' => 'required'
    	// ]);
 
        // Tanggapan::create([
        //     'pengaduan_id' => $request->pengaduan_id,
    	// 	'tgl_tanggapan' => $request->tgl_tanggapan,
        //     'tanggapan' => $request->tanggapan,
        //     'masyarakat_nik' => $request->masyarakat_nik,
    	// ]);
 
    	// return redirect('/tanggapan');
        $this->validate($request,[
            'tgl_tanggapan'   =>  'required',
            'tanggapan'       =>  'required',
            'nik'             =>  'required',
        ]);

        Tanggapan::create($request->all());

        return redirect()->route('tanggapan.index');
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
        $tanggapan = Tanggapan::where('id',$id)->first();
        return view('tanggapan.edit', compact('tanggapan'));
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
        $this->validate($request,[
            'pengaduan_id' => 'required',
    		'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
            'masyarakat_nik' => 'required'
    	]);
 
        Tanggapan::where('id', $id)->update([
            'pengaduan_id' => $request->pengaduan_id,
    		'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'masyarakat_nik' => $request->masyarakat_nik,
    	]);
 
    	return redirect('/tanggapan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tanggapan::where('id_tanggapan', $id)->delete();
        return redirect()->route('tanggapan.index');
    }
}

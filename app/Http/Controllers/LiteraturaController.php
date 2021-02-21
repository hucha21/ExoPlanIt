<?php

namespace App\Http\Controllers;

use App\Literatura;
use Illuminate\Http\Request;
use DB;

class LiteraturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $literatura= DB::select('select * from literatura');
        return view('literatura.index',compact('literatura'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('literatura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'naziv_literature' => 'required',
            'slika_literature' => 'required',
            'link_literature' => 'required',
        ]);
  
        Literatura::create($request->all());
   
        return redirect()->route('literatura.index')
                        ->with('success','Uspješan unos literature');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Literatura  $literatura
     * @return \Illuminate\Http\Response
     */
    public function show(Literatura $literatura)
    {
       
        return view('literatura.show',compact('literatura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Literatura  $literatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Literatura $literatura)
    {

        return view('literatura.edit',compact('literatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Literatura  $literatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Literatura $literatura)
    {
        $request->validate([
            'naziv_literature' => 'required',
            'slika_literature' => 'required',
            'link_literature' => 'required',
        ]);
  
        $literatura->update($request->all());
  
        return redirect()->route('literatura.index')
                        ->with('success','Izmjene izvršene uspješno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Literatura  $literatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Literatura $literatura)
    {
        $literatura->delete();
  
        return redirect()->route('literatura.index')
                        ->with('success','Literatura obrisana uspješno');
    }
}

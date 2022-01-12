<?php

namespace App\Http\Controllers;

use App\Models\Tarsasjatek;
use Illuminate\Http\Request;


class TarsasjatekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarsasjatekok = Tarsasjatek::all();
        return view('tarsasjatek.index', ['tarsasjatekok' => $tarsasjatekok]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarsasjatek = new Tarsasjatek();  
        $tarsasjatek->nev_magyar = $request->nev_magyar;
        $tarsasjatek->nev_angol = $request->nev_angol;
        $tarsasjatek->tipus = $request->tipus;
        $tarsasjatek->ar=$request->ar;
        $tarsasjatek->jatekosok_szama = $request->jatekosok_szama;
        $tarsasjatek->jatekido = $request->jatekido;
        $tarsasjatek->vasarlas_ideje = $request->vasarlas_ideje;
        
        $tarsasjatek->save();
        return redirect('/api/tarsasjatekok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarsasjatek  $tarsasjatek
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarsasjatek = Tarsasjatek::find($id);              
        return $tarsasjatek;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarsasjatek  $tarsasjatek
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $tarsasjatek = Tarsasjatek::find($id); 
        return view('tarsasjatek.edit', ['tarsasjatekok' => $tarsasjatekok]);

    }

    public function newView()    
    {
        $tarsasjatekok = Tarsasjatek::all(); 
        return view('tarsasjatek.new');  
    }

    public function editView($id)
    {
        $tarsasjatek = Tarsasjatek::find($id);      
        return view('tarsasjatek.edit', ['tarsasjatek' => $tarsasjatek]);         
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarsasjatek  $tarsasjatek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarsasjatek = Tarsasjatek::find($id);        
        $tarsasjatek->nev_magyar = $request->nev_magyar;
        $tarsasjatek->nev_angol = $request->nev_angol;
        $tarsasjatek->tipus = $request->tipus;
        $tarsasjatek->ar=$request->ar;
        $tarsasjatek->jatekosok_szama = $request->jatekosok_szama;
        $tarsasjatek->jatekido = $request->jatekido;
        $tarsasjatek->vasarlas_ideje = $request->vasarlas_ideje;
       
        $tarsasjatek->save();
        return redirect('/api/tarsasjatekok');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarsasjatek  $tarsasjatek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tarsasjatek::find($id)->delete(); 
        return redirect('/api/tarsasjatekok'); 

    }
}

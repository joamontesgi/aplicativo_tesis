<?php

namespace App\Http\Controllers;
use App\Models\Result;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::where('user_id', auth()->user()->id)->get();
        return view('results.index', compact('results'));
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
        $result = new Result();
        $result->user_id = $request->user_id;
        $result->benigno_uno = $request->benigno_uno;
        $result->ddos_uno = $request->ddos_uno;
        $result->dosgoldeneye_uno = $request->dosgoldeneye_uno;
        $result->doshulk_uno = $request->doshulk_uno;
        $result->dosslowhttptest_uno = $request->dosslowhttptest_uno;
        $result->dossslowloris_uno = $request->dossslowloris_uno;
        $result->benigno_dos = $request->benigno_dos;
        $result->ddos_dos = $request->ddos_dos;
        $result->dosgoldeneye_dos = $request->dosgoldeneye_dos;
        $result->doshulk_dos = $request->doshulk_dos;
        $result->dosslowhttptest_dos = $request->dosslowhttptest_dos;
        $result->dossslowloris_dos = $request->dossslowloris_dos;
        $result->save();
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
    }

    public function graficos(Result $result)
    {
        
        return view('results.graficos', compact('result'));
        // return $result;

    }
}

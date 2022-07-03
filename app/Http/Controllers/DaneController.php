<?php

namespace App\Http\Controllers;

use App\Models\dane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dane = Dane::all();
        // $query = Dane::select(DB::raw('MAX(id) as max_id'))->groupBy('server')->get();
        // $dane = Dane::select('*')->whereIn('id', $query)->get(); // te 2 wyswietlenie ostatnich rekodrów po zgrupowaniu
        return view('index', [ 'dane' => $dane]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dane  $dane
     * @return \Illuminate\Http\Response
     */
    public function show(dane $dane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dane  $dane
     * @return \Illuminate\Http\Response
     */
    public function edit(dane $dane)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dane  $dane
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dane $dane)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dane  $dane
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Dane::find($id);
        $del->delete();
        // $del = Dane::where('server', $id)->delete(); po nazwie
        return response()->json(['status' => 'success']);
    }
}

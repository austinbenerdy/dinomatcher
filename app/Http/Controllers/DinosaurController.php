<?php

namespace App\Http\Controllers;

use App\Models\Dinosaur;
use Illuminate\Http\Request;

class DinosaurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response('Hello World','200');
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
     * @param  \App\Models\Dinosaur  $dinosaur
     * @return \Illuminate\Http\Response
     */
    public function show(Dinosaur $dinosaur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dinosaur  $dinosaur
     * @return \Illuminate\Http\Response
     */
    public function edit(Dinosaur $dinosaur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dinosaur  $dinosaur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dinosaur $dinosaur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dinosaur  $dinosaur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dinosaur $dinosaur)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Dinosaur;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DinosaurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Dinosaur::all(),'200');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dino = new Dinosaur([
            'name' => $request->get('name'),
            'imgUrl' => $request->get('image'),
            ]);
        $dino->save();
        return response($dino->toArray(), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dinosaur  $dinosaur
     * @return \Illuminate\Http\Response
     */
    public function show(Dinosaur $dinosaur)
    {
        return response($dinosaur, 200);
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

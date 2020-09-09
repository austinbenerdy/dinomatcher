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

    /**
     * @param Request $request
     * @return Response
     */
    public function smartSuggestion(Request $request)
    {
        $name = $request->get('name');
        $color = $request->get('color');

        $nameLength = strlen($name);

        if ($color === 'green') {
            $dino = Dinosaur::find(1);
        } else if ($nameLength > 30) {
            $dino = Dinosaur::find(2);
        } else if ($nameLength > 15 && $nameLength < 20 && in_array(['brown', 'yellow', 'orange'], $color)) {
            $dino = Dinosaur::find(3);
        } else if ($nameLength > 10 && $nameLength < 20 && in_array(['red', 'blue', 'pink'], $color)) {
            $dino = Dinosaur::find(5);
        } else {
            $dino = Dinosaur::find(4);
        }

        return response($dino, 200);
    }
}

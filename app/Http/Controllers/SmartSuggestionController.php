<?php


namespace App\Http\Controllers;


use App\Models\Dinosaur;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SmartSuggestionController extends Controller
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
     * @param Request $request
     * @return Response
     */
    public function smartSuggestion(Request $request)
    {
//        dd($request->get());
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

    /**
     * @param Request $request
     * @return Response
     */
    public function getSmartSuggestion(Request $request)
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

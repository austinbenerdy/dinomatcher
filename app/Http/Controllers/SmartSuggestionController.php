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
        $name = $request->get('name');
        $color = $request->get('color');

        $dino = $this->getMatch($name, $color);

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

        $dino = $this->getMatch($name, $color);

        return response($dino, 200);
    }

    /**
     * @param string $name
     * @param string $color
     * @return Dinosaur
     */
    private  function getMatch(string $name, string $color): Dinosaur
    {
        $color = mb_strtolower($color);
        $nameLength = strlen($name);

        if ($color === 'green') {
            $dino = Dinosaur::find(1);
        } else if ($nameLength > 30) {
            $dino = Dinosaur::find(2);
        } else if ($nameLength > 15 && $nameLength < 20 && in_array($color, ['brown', 'yellow', 'orange'])) {
            $dino = Dinosaur::find(3);
        } else if ($nameLength > 10 && $nameLength < 20 && in_array($color, ['red', 'blue', 'pink'])) {
            $dino = Dinosaur::find(5);
        } else {
            $dino = Dinosaur::find(4);
        }

        return $dino;
    }
}

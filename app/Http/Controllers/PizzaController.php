<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Http\Response;
use App\Http\Requests\StorePizzaRequest;

class PizzaController extends Controller
{
    public function index() {
        // $pizzas = Pizza::all();
        
        $pizzas = Pizza::orderBy('name')->get();
        
        return view('pizzas', compact('pizzas'));
    }

    public function getPizzas() {
        // $pizzas = Pizza::all();
        
        $pizzas = Pizza::orderBy('name')->get();
        
        return response()->json([
            'message'=>"Data retrieved successsfully",
            'data'=>$pizzas
        ], Response::HTTP_OK);
    }
    // Request(browser)->route->Controller method->Model->Controller->View->Output

    public function store(StorePizzaRequest $request)
    {

        //$pizza1 = Pizza::create([$validated]);
    // $pizza = Pizza::create($request->all());
        $pizza1 = Pizza::create([
            'name'=> $request->name,
            'base'=> $request->base,
            'type'=> $request->type,
        ]);

        return view('index');

    }



    public function show($id) {
         return view('details', ['id' => $id]);
    }
}

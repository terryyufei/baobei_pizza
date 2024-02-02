<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Http\Response;
// use App\Http\Requests\StorePizzaRequest;

class PizzaController extends Controller
{
    public function index() {
        // $pizzas = Pizza::all();
        
        // $pizzas = Pizza::orderBy('name')->get();

        // $pizzas = Pizza::where('type', 'hawaiian')->get();

        $pizzas = Pizza::latest()->get();
        
        return view('pizzas.index', compact('pizzas'));
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

    // public function store(StorePizzaRequest $request)
    // {

    //     //$pizza1 = Pizza::create([$validated]);
    // // $pizza = Pizza::create($request->all());
    //     $pizza1 = Pizza::create([
    //         'name'=> $request->name,
    //         'base'=> $request->base,
    //         'type'=> $request->type,
    //     ]);

    //     return view('pizzas.index');

    // }



    public function show($id) {

        $pizza = Pizza::findOrFail( $id );
         return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {

        error_log(request('name'));

        return redirect('/');
    }
}

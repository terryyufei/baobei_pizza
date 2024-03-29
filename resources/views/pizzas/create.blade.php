@extends('layouts.app')


@section('content')

<div class="wrapper create-pizza">
    <h1>Create a new Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">

        {{-- TYPE --}}
        <label for="type"> Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>

        {{-- BASE  --}}
        <label for="base"> Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crisp">Thin & Crisp</option>
            <option value="thick">Thick</option>
        </select>

        {{-- TOPPINGS --}}
        <fieldset>
            <label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
                <input type="checkbox" name="toppings[]" value="pepper">Pepper<br />
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
                <input type="checkbox" name="toppings[]" value="olives">Olives<br />
            </label>
        </fieldset>

        <input type="submit" value="Order Pizza">
    </form>
</div>

@endsection

@extends('layouts.layout')


@section('content')
    

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        {{-- <p>{{ $type }} - {{ $base }} - {{ $price }} </p> --}}

        {{-- @for ($i = 0; $i < 5; $i++) 
                <p>the value of i is {{ $i }}</p>
            @endfor --}}

        {{-- @for ($i = 0; $i < count($pizzas); $i++)
            <p> {{ $pizzas[$i]['type'] }} </p>
            @endfor --}}

        @foreach ($pizzas as $pizza)
            <div>
               {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
            </div>
        @endforeach




        {{--  

            @if ($price > 15)
                <p>this pizza is too expensive</p>
            @elseif($price < 5)
                <p>this pizza is cheap</p>
            @else
                <p>This Pizza is normally priced</p>
            @endif


            
            @unless ($base == 'cheesy crust')
                <p>You don't have a cheesy crust</p>
            @endunless

            
            @php
                $name = 'Gibson';
                echo($name);
            @endphp
            --}}
    </div>
</div>

@endsection

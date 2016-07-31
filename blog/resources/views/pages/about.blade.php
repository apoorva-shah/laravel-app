@extends('layout')

@section('content')

{{--<h1>About {{ $first }} {{ $last }}</h1>
@if ($first == 'test')
    <h1>Hi {{ $first }}</h1>
@endif--}}


    <p>
        Test about page content
    </p>


{{ count($people) }}
@if (count($people))
    <h3>Super batsmans:</h3>
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
@endif
@stop
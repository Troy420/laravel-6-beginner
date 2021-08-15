@extends('layout')

@section('title', 'Services Page')

@section('content')
    <h1>SERVICES PAGE</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam quam delectus provident perspiciatis vel quasi quis accusantium, exercitationem quidem. Beatae ex soluta iure corporis distinctio veniam eaque hic. Facilis consectetur, labore reprehenderit esse dolor odit recusandae autem quis ex provident? Tempora est quae saepe similique architecto. Nobis aperiam vel facilis?</p>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi repellat deserunt odio nisi consequatur fugit temporibus corrupti officia, placeat sequi, possimus commodi labore fugiat ipsum!</p>

    
    @forelse ($services as $service)
        <ul>
            <li>{{$service}}</li>
        </ul>
    @empty
        <p>No Services Found</p>
    @endforelse
@endsection
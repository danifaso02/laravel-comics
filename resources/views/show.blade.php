@extends('layout.main')

@section('page-content')

@include('partials.hero')

<section class="comics py-3">
    <div class="container">
        <img class="img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        <h1>{{$comic['series']}}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam explicabo quis temporibus doloribus, iste recusandae tenetur natus tempora, itaque corporis aliquid repellat porro exercitationem dolorem officia fuga sunt. Magni, totam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore a repudiandae modi voluptatibus! Natus delectus neque unde sed hic eius, voluptate quod. Laborum, voluptatem repellendus? Explicabo veritatis numquam accusamus a?</p>
    </div>

</section>

@endsection
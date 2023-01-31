@extends('layout.main')

@section('page-content')

@include('partials.hero')

<section class="comics py-3">
    <div class="container">
        <div class="row">
            @foreach ($comics as $index => $comic)
                <div class="col-6 col-md-3 col-lg-2">
                    <a href="{{route('show', $index)}}">
                        <img class="img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </a>
                    <h4>{{$comic['series']}}</h4>
                    <a class="btn btn-primary" href="{{route('show', $index)}}">Visualizza</a>
                </div>
            @endforeach
        </div>
    </div>

</section>

@endsection
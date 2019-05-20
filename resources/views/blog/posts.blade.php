@extends('layouts.app')


@section('content')
  <div class="container">
    @forelse ($posts as $post)

      <div class="row">
        <div class="col-sm-12">
          <div class="jumbotron jumbotron-fluid">
            <h2 class="ml-5 text-uppercase font-weight-bold text-secondary"><a href="{{route('post', $post->slug)}}">{{$post->title}}</a></h2>
              <hr class="my-2">
            <p class="ml-5 text-secondary">{!!$post->description_short!!}</p>
          </div>
        </div>

      </div>

    @empty
        <h2 class="text-center">Empty</h2>
    @endforelse


  </div>
@endsection

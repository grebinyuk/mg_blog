@extends('layouts.app')

{{-- @section('title', $posts->title)

@endsection --}}
@section('content')
  <div class="container">
    @forelse ($posts as $post)

      <div class="row">
        <div class="col-sm-12">
          <h2><a href="{{route('post', $post->slug)}}">{{$post->title}}</a></h2>
          <p>{!!$post->description_short!!}</p>
        </div>

      </div>

    @empty
        <h2 class="text-center">Empty</h2>
    @endforelse

    {{-- {{$posts->links()}} --}}
  </div>
@endsection

@extends('layouts.app')

@section('title', $post->meta_title)
@section('meta_keyword', $post->meta_keyword)
@section('meta_description', $post->meta_description)


@section('content')
  <div class="container">


      <div class="row">
        <div class="col-sm-12">
          <post :post="{{$post}}"></post>
      </div>



    {{-- {{$posts->links()}} --}}
  </div>
@endsection

@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
  

    <h2 class="text-secondary">Edit post</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a  href="{{route('admin.index')}}">Admin panel</a></li>
      <li class="breadcrumb-item active "> Edit</li>
    </ol>
    <hr/>

    <form class="form-horizontal" action="{{route('admin.article.update', $article)}}" method="post">
      <input type="hidden" name="_method" value="put">
        {{csrf_field()}}


      {{-- Form include --}}
      @include('admin.articles.chanks.form')
    </form>
  </div>

@endsection

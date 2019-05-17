@extends('admin.layouts.app_admin')

 @section('content')
  <div class="container">
    {{-- @component('admin.articles.chanks.form_title')
      @slot('title') Create post  @endslot
      @slot('parent') Main @endslot
      @slot('active') Posts @endslot
    @endcomponent --}}

    <h2 class="text-secondary">Create post</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a  href="{{route('admin.index')}}">Admin panel</a></li>
      <li class="breadcrumb-item active "> Post</li>
    </ol>

    <hr/>

    <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
        {{csrf_field()}}


      {{-- Form include --}}
      @include('admin.articles.chanks.form')

      <input type="hidden" name="created_by" value="{{Auth::id()}}">
    </form>
  </div>

@endsection

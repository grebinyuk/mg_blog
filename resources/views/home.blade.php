@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          <div class="text-center text-uppercase  text-secondary h1 mb-4  mt-4">Welcom to test blog</div>
            <div class="card">


                <div class="card-body d-flex justify-content-between">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('admin.index')}}" type="button" name="button" class="btn btn-secondary">Admin panel</a>
                    <a href="{{route('post')}}" type="button" name="button" class="btn btn-secondary">Posts list</a>
                    <a href="{{route('admin.article.create')}}" type="button" name="button" class="btn btn-secondary">Create post</a>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

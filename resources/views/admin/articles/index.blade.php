@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    {{-- @component('admin.components.breadcrumb')
      @slot('title')Список новостей @endslot
      @slot('parent') Главная  @endslot
      @slot('active')новости @endslot
    @endcomponent --}}

    <h2 class="text-secondary">Posts lists</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a  href="{{route('admin.index')}}">Admin panel</a></li>
      <li class="breadcrumb-item active "> Posts</li>
    </ol>

<br>
    <hr>
<br>

    <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right">
      <i class="fa fa-plus-square-o"></i>
      Create post
    </a>

    <table class="table table-striped">
      <thead>
        <th>Name</th>
        <th>Publication</th>
        <th class="text-right">Action</th>
      </thead>
      <tbody>
        @forelse ($articles as $article)
          <tr>
            <td>{{$article->title}}</td>
            <td>{{$article->published}}</td>
            <td class="text-right">
              <form onsubmit="if(confirm('Удалить?')){return true}else{return false}"class="" action="{{route('admin.article.destroy', $article)}}" method="post">
                  <input type="hidden" name="_method" value="DELETE">
                  {{csrf_field()}}
                  <a class="btn btn-default" href="{{route('admin.article.edit', $article)}}"><i class="fa fa-edit"></i></a>
                  <button type="submit"class="btn"><i class="fa fa-trash-o"></i></button>
              </form>

            </td>
          </tr>

        @empty
          <tr>
            <td colspan="3" class="text-center">Is empty</td>
          </tr>
        @endforelse
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3">
            <ul class="pagination pull-right">
              {{$articles->links()}}
            </ul>
          </td>
        </tr>
      </tfoot>
    </table>

  </div>

@endsection

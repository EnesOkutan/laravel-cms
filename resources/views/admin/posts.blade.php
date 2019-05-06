@extends('layouts.admin')
@section('content')
<div class="col-sm-12 py-3 text-right">
  <a href="{{ url('admin/create/post') }}" class="btn btn-outline-primary" role="button">New Post</a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Worker</th>
      <th scope="col">Departman</th>
      <th scope="col">Title</th>
      <th scope="col">Düzenle / Sil</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->user()->first()->name . " " . $post->user()->first()->surname }}</td>
      <td>{{ $post->department()->first()->name }}</td>
      <td>{{ $post->title }}</td>
      <td colspan="2">
      	<a href="#" class="btn btn-success mr-2" role="button">Düzenle</a>
      	<a href="#" class="btn btn-danger" role="button">Sil</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="mx-auto" style="width: 200px;">
  {!! $posts->links(); !!}  
</div>
@endsection
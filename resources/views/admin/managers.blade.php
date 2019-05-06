@extends('layouts.admin')
@section('content')
<div class="col-sm-12 py-3 text-right">
  <a href="#" class="btn btn-outline-primary" role="button">New Manager</a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Worker</th>
      <th scope="col">Departman</th>
      <th scope="col">Düzenle / Sil</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($managers as $manager)
    <tr>
      <th scope="row">{{ $manager->id }}</th>
      <td>{{ $manager->user()->first()->name . " " . $manager->user()->first()->surname }}</td>
      <td>{{ $manager->department()->first()->name }}</td>
      <td colspan="2">
      	<a href="#" class="btn btn-success mr-2" role="button">Düzenle</a>
      	<a href="#" class="btn btn-danger" role="button">Sil</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="mx-auto" style="width: 200px;">
  {!! $managers->links(); !!}  
</div>
@endsection
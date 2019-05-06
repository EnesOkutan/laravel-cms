@extends('layouts.admin')
@section('content')
<div class="col-sm-12 py-3 text-right">
  <button type="button" class="btn btn-outline-primary">New Manager</button>
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
      	<button type="button" class="btn btn-success mr-2">Düzenle</button>
      	<button type="button" class="btn btn-danger">Sil</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="mx-auto" style="width: 200px;">
  {!! $managers->links(); !!}  
</div>
@endsection
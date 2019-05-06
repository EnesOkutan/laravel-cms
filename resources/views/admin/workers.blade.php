@extends('layouts.admin')
@section('content')
<div class="col-sm-12 py-3 text-right">
  <a href="#" class="btn btn-outline-primary" role="button">New Worker</a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Department</th>
      <th scope="col">Düzenle / Sil</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($workers as $worker)
    <tr>
      <th scope="row">{{ $worker->id }}</th>
      <td>{{ $worker->name }}</td>
      <td>{{ $worker->surname }}</td>
      <td>{{ $worker->email }}</td>
      <td>{{ $worker->role()->first()->name }}</td>
      <td>{{ $worker->department()->first()->name }}</td>
      <td colspan="2">
        <a href="#" class="btn btn-success mr-2" role="button">Düzenle</a>
        <a href="#" class="btn btn-danger" role="button">Sil</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="mx-auto" style="width: 200px;">
  {!! $workers->links(); !!}  
</div>
@endsection
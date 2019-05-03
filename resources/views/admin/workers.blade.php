@extends('layouts.admin')
@section('content')
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
      <td colspan="2"><button type="button" class="btn btn-success mr-2">Düzenle</button><button type="button" class="btn btn-danger">Sil</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="mx-auto" style="width: 200px;">
  {!! $workers->links(); !!}  
</div>
@endsection
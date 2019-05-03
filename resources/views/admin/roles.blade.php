@extends('layouts.admin')
@section('content')
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Düzenle / Sil</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($roles as $role)
    <tr>
      <th scope="row">{{ $role->id }}</th>
      <td>{{ $role->name }}</td>
      <td>{{ $role->description }}</td>
      <td colspan="2"><button type="button" class="btn btn-success mr-2">Düzenle</button><button type="button" class="btn btn-danger">Sil</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="mx-auto" style="width: 200px;">
  {!! $roles->links(); !!}  
</div>
@endsection
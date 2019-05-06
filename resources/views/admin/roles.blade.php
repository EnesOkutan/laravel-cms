@extends('layouts.admin')
@section('content')
<div class="col-sm-12 py-3 text-right">
  <a href="{{ url('admin/create/role') }}" class="btn btn-outline-primary" role="button">New Role</a>
</div>
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
      <td colspan="2">
        <a href="#" class="btn btn-success mr-2" role="button">Düzenle</a>
        <a href="#" class="btn btn-danger" role="button">Sil</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="mx-auto" style="width: 200px;">
  {!! $roles->links(); !!}  
</div>
@endsection
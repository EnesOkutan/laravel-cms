@extends('layouts.admin')
@section('content')
<div class="col-sm-12 py-3 text-right">
  <a href="{{ url('admin/create/department') }}" class="btn btn-outline-primary" role="button">New Department</a>
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
  	@foreach($departments as $department)
    <tr>
      <th scope="row">{{ $department->id }}</th>
      <td>{{ $department->name }}</td>
      <td>{{ $department->description }}</td>
      <td colspan="2">
        <a href="#" class="btn btn-success mr-2" role="button">Düzenle</a>
        <a href="#" class="btn btn-danger" role="button">Sil</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="mx-auto" style="width: 200px;">
  {!! $departments->links(); !!}  
</div>
@endsection
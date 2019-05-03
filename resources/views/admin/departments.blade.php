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
  	@foreach($departments as $department)
    <tr>
      <th scope="row">{{ $department->id }}</th>
      <td>{{ $department->name }}</td>
      <td>{{ $department->description }}</td>
      <td colspan="2"><button type="button" class="btn btn-success mr-2">Düzenle</button><button type="button" class="btn btn-danger">Sil</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
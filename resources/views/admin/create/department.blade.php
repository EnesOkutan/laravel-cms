@extends('layouts.admin')
@section('content')
<form class="py-3" action="{{ url('admin/create/department') }}" method="POST">
  @csrf
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label">Description:</label>
    <div class="col-sm-10">
      <textarea style="height: 200px;" type="text" class="form-control" id="description" placeholder="Description"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-12 text-right">
      <button type="submit" class="btn btn-primary col-sm-10">Create</button>
    </div>
  </div>
</form>
@endsection
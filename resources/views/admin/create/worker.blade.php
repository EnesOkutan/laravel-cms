@extends('layouts.admin')
@section('content')
<form class="py-5" action="{{ url('admin/create/worker') }}" method="POST">
  <div class="form-group row">
    <label for="role" class="col-sm-2 col-form-label">Role:</label>
    <div class="col-sm-10">
      <select name="role" class="form-control" id="role">
        <option>Select role</option>
        @foreach($roles as $role)
        <option value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="department" class="col-sm-2 col-form-label">Department:</label>
    <div class="col-sm-10">
      <select name="department" class="form-control" id="department">
        <option>Select department</option>
        @foreach($departments as $department)
        <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="surname" class="col-sm-2 col-form-label">Surname:</label>
    <div class="col-sm-10">
      <input name="surname" type="text" class="form-control" id="surname" placeholder="Surname">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
      <input name="email" type="Email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="completePassword" class="col-sm-2 col-form-label">Complete password:</label>
    <div class="col-sm-10">
      <input name="completePassword" type="password" class="form-control" id="completePassword" placeholder="Password complete">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-12 text-right">
      <button type="submit" class="btn btn-primary col-sm-10">Create</button>
    </div>
  </div>
</form>
@endsection
@extends('layouts.admin')
@section('content')
<form class="py-5">
  <div class="form-group row">
    <label for="users" class="col-sm-2 col-form-label">Users:</label>
    <div class="col-sm-10">
      <select name="user" class="form-control" id="users">
        <option>Select users</option>
        @foreach($users as $user)
        <option value="{{ $user->id }}">{{ $user->name . " " . $user->surname }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="departments" class="col-sm-2 col-form-label">Departments:</label>
    <div class="col-sm-10">
      <select name="department" class="form-control" id="departments">
        <option>Select departments</option>
        @foreach($departments as $department)
        <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-12 text-right">
      <button type="submit" class="btn btn-primary col-sm-10">Create</button>
    </div>
  </div>
</form>
@endsection
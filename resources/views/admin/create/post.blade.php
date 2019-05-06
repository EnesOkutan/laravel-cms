@extends('layouts.admin')
@section('content')
<form class="py-5">
  <div class="form-group row">
    <label for="departments" class="col-sm-2 col-form-label">Department:</label>
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
    <label for="title" class="col-sm-2 col-form-label">Title:</label>
    <div class="col-sm-10">
      <input name="title" type="text" class="form-control" id="title" placeholder="Title">
    </div>
  </div>
  <div class="form-group row">
    <label for="body" class="col-sm-2 col-form-label">Body:</label>
    <div class="col-sm-10">
      <textarea style="height: 200px;" type="text" class="form-control" id="body" placeholder="Body"></textarea>
    </div>
  </div>
  <div class="form-group row">
      <div class="col-sm-10" style="margin-left: auto;margin-right: 0;">
        <div class="custom-file">
          <input type="file" class="form-control custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
      </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-12 text-right">
      <button type="submit" class="btn btn-primary col-sm-10">Create</button>
    </div>
  </div>
</form>
@endsection
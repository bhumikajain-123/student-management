@extends('layout')

@section('content')

<div class="container">
    <h2>Add Student</h2>

        <form action="/students/{{ $student->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value = "{{$student->name}}">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value = "{{$student->address}}">
        </div>

        <div class="mb-3">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control" value = "{{$student->mobile}}">
        </div>

        <button type="submit" class="btn btn-primary">
            Update Student
        </button>

        <a href="/students" class="btn btn-secondary">
            Back
        </a>

    </form>
</div>

@endsection
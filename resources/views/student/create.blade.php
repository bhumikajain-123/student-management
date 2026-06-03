@extends('layout')

@section('content')

<div class="container">
    <h2>Add Student</h2>

    <form action="/students" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>

        <div class="mb-3">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Save Student
        </button>

        <a href="/students" class="btn btn-secondary">
            Back
        </a>

    </form>
</div>

@endsection
@extends('layout')

@section('content')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Student Management System</h2>
        <a href="{{'/students/create'}}" class="btn btn-primary">
            Add Student
        </a>
    </div>  

    <div class="card">
        <div class="card-header">
            Student List
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th width="200px">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->mobile }}</td>

                        <td>
                            <a href="students/{{$student->id}}" class="btn btn-info btn-sm">
                                View
                            </a>

                            <a href="/students/{{$student->id}}/edit" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="students/{{$student->id}}/delete" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection
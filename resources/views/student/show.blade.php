@extends('layout')
@section('content')

<h2>student Details</h2>


<p><strong>ID: </strong>{{$student->id}}</p>
<p><strong>Name: </strong>{{$student->name}}</p>
<p><strong>Address: </strong>{{$student->address}}</p>
<p><strong>Mobile: </strong>{{$student->mobile}}</p>



<a href = "/students" class = "btn btn-secondary"> Back </a>

@endsection
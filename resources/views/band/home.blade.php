@extends('layouts.main')

@section('content')

<h1>Welcome!</h1>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Band List</h3>
  </div>
  <div class="panel-body">
     
 <table class="table">
   <tr>
     <th>Band Name</th>
     <th>Edit</th>
     <th>Delete</th>
   </tr>
  

  @foreach($bands as $band)
   <tr>
     <td><a href="#">{{ $band->name }}</a></td>
     <td><a href="{{ route('edit-band', $band->id) }}" class="btn btn-xs btn-warning">Edit</a></td>
     <td><a href="#" class="btn btn-xs btn-danger">Delete</a></td>
   </tr>
  @endforeach

  </table>
  </div>
</div>

@endsection
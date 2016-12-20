@extends('layouts.main')

@section('content')

<div class="row">
 <div class="col-md-6"> 
    <h1>Welcome!</h1>
 </div>

  <div class="col-md-6">
     <a href="{{ route('create-band') }}" class="pull-right btn btn-sm btn-success">Add Band</a>
  </div>
</div>

@include('includes.flash.success')

@include('includes.flash.delete')

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
     <td><a href="{{ route('show-band', $band->id) }}">{{ $band->name }}</a></td>
     <td><a href="{{ route('edit-band', $band->id) }}" class="btn btn-xs btn-warning">Edit</a></td>
     <td><a href="{{ route('delete-band', $band->id) }}" class="btn btn-xs btn-danger">Delete</a></td>
   </tr>
  @endforeach

  </table>
  </div>
</div>

@endsection
@extends('layouts.main')

@section('content')

@include('includes.flash.success')
@include('includes.flash.delete')

<div class="row">
  <div class="col-md-6"> 
    <select name="filter_band">
      <option selected="true" disabled="disabled">Filter by Band</option>
       <!-- Band::where('name', $name)->first(); -->
       @foreach($bands as $band)
         
          <option value="{{ $band->name }}">{{ $band->name }}</option>
   
       @endforeach
    </select>
   </div>


   <div class="col-md-6">
      <a href="{{ route('create-album') }}" class="pull-right btn btn-sm btn-success">Add Album</a>
   </div>
</div>

<br>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Album List</h3>
  </div>
  <div class="panel-body">
     
 <table class="table">
   <tr>
     <th>Album Name</th>
     <th>Edit</th>
     <th>Delete</th>
   </tr>
  

  @foreach($albums as $album)
   <tr>
     <td><a href="{{ route('show-album', $album->id) }}">{{ $album->name }}</a></td>
     <td><a href="{{ route('edit-album', $album->id) }}" class="btn btn-xs btn-warning">Edit</a></td>
     <td><a href="{{ route('delete-album', $album->id) }}" class="btn btn-xs btn-danger">Delete</a></td>
   </tr>
  @endforeach

  </table>
  </div>
</div>

@endsection
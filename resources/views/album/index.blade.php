@extends('layouts.main')

@section('content')


<div class="row">
  <div class="col-md-6"> 
    <select>
      <option value="">Filter by Band</option>
    </select>
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
     <td><a href="#">{{ $album->name }}</a></td>
     <td><a href="{{ route('edit-album', $album->id) }}" class="btn btn-xs btn-warning">Edit</a></td>
     <td><a href="#" class="btn btn-xs btn-danger">Delete</a></td>
   </tr>
  @endforeach

  </table>
  </div>
</div>

@endsection
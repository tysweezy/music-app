@extends('layouts.main')

@section('content')

@include('includes.flash.success')
@include('includes.flash.delete')


<div class="row">
  <div class="col-md-6"> 
    <form method="get">
        <select name="filter_band" onchange="this.form.submit()">
            <option selected="true" disabled="disabled">Filter by Band</option>
            <!-- Band::where('name', $name)->first(); -->
            @foreach($bands as $band)
                
                <option value="{{ $band->id }}">{{ $band->name }}</option>
        
            @endforeach
        </select>
    </form>
   </div>




   <div class="col-md-6">
      <a href="{{ route('create-album') }}" class="pull-right btn btn-sm btn-success">Add Album</a>
   </div>
</div>

<br>


@if (count($albums) == 0)
  <div class="alert alert-info">There are no Albums to be shown. :(</div>
@else
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Album List</h3>
  </div>
  <div class="panel-body">
     
 <table class="table">
   <tr>
     <th>

      <a href="{{ url('albums?') . http_build_query([
          'sort'   => 'name',
          'order'  => $order == 'asc' ? 'desc' : 'asc'     
        ]) }}">
        Album Name
      </a>


       

     </th>
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

@endif

@endsection
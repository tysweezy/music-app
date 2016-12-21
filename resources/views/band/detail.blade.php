@extends('layouts.main')

@section('content')

   <h1>{{ $band->name }}</h1>

   <div class="data">
      <p>Start Date:  <span> {{ $band->start_date  }}  </span></p>
      <p>Website: <span><a href="#">{{ $band->website }}</a></span></p>
      <p>
      Still Active: 
        
        @if($band->still_active == 1)
          <span>Yes</span>
        @else
          <span>No</span>
        @endif
      </p>
   </div>


<h2>Albums</h2>

<table class="table">
    <tr>
       <th>Name</th>
       <th>Recorded Date</th>
       <th>Release Date</th>
       <th>Track Number</th>
       <th>Label</th>
       <th>Producer</th>
       <th>Genre</th>
    </tr>

    @foreach($band->albums as $album)
      <tr>
       <td><a href="{{ route('show-album', $album->id) }}">{{ $album->name }}</a></td>
       <td>{{ $album->recorded_date }}</td>
       <td>{{ $album->release_date }}</td>
       <td>{{ $album->number_of_tracks }}</td> 
       <td>{{ $album->label }}</td>
       <td>{{ $album->producer }}</td>
       <td>{{ $album->genre }}</td>
      </tr>
    @endforeach
 
</table>

@endsection
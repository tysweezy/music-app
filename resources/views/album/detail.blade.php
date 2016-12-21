@extends('layouts.main')

@section('content')

   <h1>{{ $album->name }}</h1>

   <!-- show band name -->
   <em>By {{ $album->band->name }}</em>

    <h2>Here are the details</h2>
    <hr>

    <ul class="album-details">
      <li>Recorded Date: {{ $album->recorded_date }}</li>
      <li>Release Date: {{ $album->release_date }}</li>
      <li>Track Number: {{ $album->number_of_tracks }}</li>
      <li>Label: {{ $album->label }}</li>
      <li>Producer: {{ $album->producer }}</li>
      <li>Genre: {{ $album->genre }}</li>
    </ul>

@endsection
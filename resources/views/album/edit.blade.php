@extends('layouts.main')

@section('content')
  
    <h2>Edit {{ $album->name }} Album</h2>

     <form action="{{ route('update-album', $album->id) }}" method="post">

        {!! csrf_field() !!} 

        <div class="form-group">
           <label for="name">Album Name</label>
           <input type="text" name="name" value="{{ $album->name }}" class="form-control">
        </div>


        <!-- where the select dropdown of bands will go -->
        <!-- todo: might use laravel collections to exclude selected option -->
        <div class="form-group">
           <label for="select_band">Choose Band</label>
           <select name="select_band" class="form-control">
             <option selected="true" value="{{ $album->band_id }}">{{ $album->band->name }}</option>

             @foreach($bands as $band)
                <option value="{{ $band->id }}">{{ $band->name }}</option>
             @endforeach
           </select>
        </div>

        <div class="form-group">
           <label for="name">Recorded Date</label>
           <input type="date" name="recorded_date" value="{{ $album->recorded_date }}" class="form-control">
        </div>

        <div class="form-group">
           <label for="release_date">Release Date</label>
           <input type="date" name="release_date" value="{{ $album->release_date }}" class="form-control">
        </div>

        <div class="form-group">
           <label for="number_of_tracks">Number of Tracks</label>
           <input type="text" name="number_of_tracks" value="{{ $album->number_of_tracks }}" class="form-control">
        </div>        

        <div class="form-group">
           <label for="label">Label</label>
           <input type="text" name="label" value="{{ $album->label }}" class="form-control">
        </div>     

        <div class="form-group">
           <label for="producer">Producer</label>
           <input type="text" name="producer" value="{{ $album->producer }}" class="form-control">
        </div>     

        <div class="form-group">
           <label for="genre">Genre</label>
           <input type="text" name="genre" value="{{ $album->genre }}" class="form-control">
        </div>     

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>     

     </form>

@endsection
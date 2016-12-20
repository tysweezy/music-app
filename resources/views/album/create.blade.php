@extends('layouts.main')

@section('content')
  
    <h2>Create Album</h2>

     @include('includes.flash.errors')
    

     <form action="{{ route('store-album') }}" method="post">

       {!! csrf_field() !!} 

        <div class="form-group">
           <label for="name">Album Name</label>
           <input type="text" name="name" class="form-control" placeholder="Album Name">
        </div>


        <!-- where the select dropdown of bands will go -->
        <div class="form-group">
           <label for="select_band">Choose Band</label>
           <select name="select_band" class="form-control">
             <option selected="true" disabled="disabled">Choose a band</option>

             @foreach($bands as $band)
               <option value="{{ $band->id }}">{{ $band->name }}</option>
             @endforeach
           </select>
        </div>

        <div class="form-group">
           <label for="name">Recorded Date</label>
           <input type="date" name="recorded_date" class="form-control">
        </div>

        <div class="form-group">
           <label for="release_date">Release Date</label>
           <input type="date" name="release_date"  class="form-control">
        </div>

        <div class="form-group">
           <label for="number_of_tracks">Number of Tracks</label>
           <input type="text" name="number_of_tracks"  class="form-control" placeholder="Track Number">
        </div>        

        <div class="form-group">
           <label for="label">Label</label>
           <input type="text" name="label"  class="form-control" placeholder="Record Label">
        </div>     

        <div class="form-group">
           <label for="producer">Producer</label>
           <input type="text" name="producer"  class="form-control" placeholder="Producer">
        </div>     

        <div class="form-group">
           <label for="genre">Genre</label>
           <input type="text" name="genre"  class="form-control" placeholder="Genre">
        </div>     

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>     

     </form>

@endsection
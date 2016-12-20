@extends('layouts.main')

@section('content')
  
    <h2>Create Album</h2>

     <form action="{{ route('create-album') }}" method="post">

       {!! csrf_field() !!} 

        <div class="form-group">
           <label for="name">Album Name</label>
           <input type="text" name="name" class="form-control">
        </div>


        <!-- where the select dropdown of bands will go -->
        <div class="form-group">
           <label for="band">Choose Band</label>
           <select name="band" class="form-control">
             <option value="">Choose a band</option>
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
           <input type="text" name="number_of_tracks"  class="form-control">
        </div>        

        <div class="form-group">
           <label for="label">Label</label>
           <input type="text" name="label"  class="form-control">
        </div>     

        <div class="form-group">
           <label for="producer">Producer</label>
           <input type="text" name="producer"  class="form-control">
        </div>     

        <div class="form-group">
           <label for="genre">Genre</label>
           <input type="text" name="genre"  class="form-control">
        </div>     

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>     

     </form>

@endsection
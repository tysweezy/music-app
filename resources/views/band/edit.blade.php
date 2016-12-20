@extends('layouts.main')

@section('content')
  
    <h2>Edit Band</h2>

     <form action="{{ route('update-band', $band->id) }}" method="post">

       {!! csrf_field() !!} 

        <div class="form-group">
           <label for="name">Band Name</label>
           <input type="text" name="name" class="form-control" value="{{ $band->name }}">
        </div>


        <div class="form-group">
           <label for="start_date">Start Date</label>
           <input type="date" name="start_date" class="form-control" value="{{ $band->start_date }}">
        </div>

        <div class="form-group">
           <label for="website">Website</label>
           <input type="text" name="website" class="form-control" value="{{ $band->website }}">
        </div>

        <div class="form-group">
           <label for="still_active">Still Active?</label>
           <select name="still_active" class="form-control">
             <option selected="true" disabled="disabled">Choose Yes or No</option>
             <option value="1">Yes</option>
             <option value="0">No</option>
           </select>
        </div>           

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>     

     </form>

@endsection
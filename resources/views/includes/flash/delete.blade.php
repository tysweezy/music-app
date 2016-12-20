@if(Session::has('delete'))
    <div class="alert alert-danger">{{ Session::get('delete') }} </div>
@endif
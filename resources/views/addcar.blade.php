@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Car</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('car')}}">
   {{csrf_field()}}
   <div class="links">
                    <a href="{{url('/adminhome')}}">Homepage</a>
                    <a href="{{url('/car/index')}}">Back</a>
                    <a href={{url('/delete')}}>Delete</a>
                </div>
   <div class="form-group">
    <input type="text" name="carname" class="form-control" placeholder="Enter Car Name" />
   </div>
   <div class="form-group">
    <input type="text" name="type" class="form-control" placeholder="Enter Type" />
   </div>
   <div class="form-group">
    <input type="text" name="price" class="form-control" placeholder="Cost" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection
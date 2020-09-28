@extends('layouts.master')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <h1>Mon profile</h1>
           	<form method="post" action="{{url('EditProfile')}}">
           		{{csrf_field()}}
           		
           			<img class="col-md-5" src="ImagePrfl/{{$LUsr[0]->image}}" width="250" height="340">
           	
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nom : </label>
			    <label for="exampleInputEmail1">{{ $LUsr[0]->name }}</label>
			  </div>
			  <hr>
			   <div class="form-group">
			    <label for="exampleInputEmail1">Email : </label>
			    <label for="exampleInputEmail1">{{ $LUsr[0]->email }}</label>
			  </div>
			  <hr>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Date d'inscription : </label>
			    <label for="exampleInputEmail1">{{Carbon\Carbon::parse($LUsr[0]->created_at)->format('d/m/Y')  }}</label>
			  </div>
			  <button type="submit" name="submit" class="btn btn-primary">Mettre à jour mon profile</button>
			</form>

        </div>

</div>
@endsection
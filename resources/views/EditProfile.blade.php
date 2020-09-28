@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter Projet</div>

                <div class="panel-body">
                    <form action="{{ url('EditProfile') }}" method="post" enctype="multipart/form-data">

                    	{{csrf_field()}}

                    	<input type="hidden" name="_method" value="PUT">
                    	<div class="form-group">
					    <label for="exampleInputEmail1">Photo de profile : </label>
					    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nom : </label>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomU" value="{{$usr[0]->name}}" placeholder="Entrer votre nom">
					     @if ($errors->has('nomU'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nomU') }}</strong>
                                </span>
						 @endif
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email : </label>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailU" value="{{$usr[0]->email}}" placeholder="Entrer votre email">
					    @if ($errors->has('emailU'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emailU') }}</strong>
                                    </span>
						 @endif
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nouveux mot de passe : </label>
					    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="PassU"  placeholder="Entrer votre mot de passe">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Confirmer le mot de passe : </label>
					    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="PassU_confirmation" placeholder="Confirmer votre mot de passe">
					  </div>
					  <button type="submit" name="submit" class="btn btn-primary">Valider</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
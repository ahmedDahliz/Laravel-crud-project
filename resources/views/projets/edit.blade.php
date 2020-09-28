@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier le Projet <strong>{{$prj->Nom}}</strong></div>

                <div class="panel-body">
                    <form action="{{ url('projets/'.$prj->id) }}" method="post">
                    	 <input type="hidden" name="_method" value="PUT">
                    	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nom de projet</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomP" placeholder="Entrer le nom projet" value="{{$prj->Nom}}">
					   <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					  </div>
					   <div class="form-group">
					    <label for="exampleInputEmail1">Description</label>
					    <textarea class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="descP" placeholder="Entrer la discription">{{ $prj->Description }}</textarea>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Language</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="langP" placeholder="Entrer le language désiré" value="{{ $prj->language }}">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Date prévu</label>
					    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dateP" value="{{ Carbon\Carbon::parse($prj->Date)->format('Y-m-d') }}" placeholder="Entrer la date prévu">
					  </div>
					  <button type="submit" name="submit" class="btn btn-primary">Modifier</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
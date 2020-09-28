@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter Projet</div>

                <div class="panel-body">
                    <form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nom de projet</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nomP" placeholder="Entrer le nom projet">
					   <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					  </div>
					   <div class="form-group">
					    <label for="exampleInputEmail1">Description</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="descP" placeholder="Entrer la discription">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Language</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="langP" placeholder="Entrer le language désiré">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Date prévu</label>
					    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dateP" placeholder="Entrer la date prévu">
					  </div>
					  <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
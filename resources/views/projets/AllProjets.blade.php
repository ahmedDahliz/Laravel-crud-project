@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sd-12 col-xs-12">
        	<h1>Tous les Projets</h1>
			<table class="table">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">Nom</th>
			      <th scope="col">Propritaire</th>
			      <th scope="col">Déscription</th>
			      <th scope="col">Language</th>
			      <th scope="col">Date prévu</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($Prjs as $prj)
			    <tr>
			      <th>{{ $prj->Nom }}</th>
			      <td>{{ $prj->name }}</td>
			      <td>{{ $prj->Description }}</td>
			      <td>{{ $prj->language  }}</td>
			      <td>{{ Carbon\Carbon::parse($prj->Date)->format('d/m/Y') }}</td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>
@endsection
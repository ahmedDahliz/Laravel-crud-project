@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sd-12 col-xs-12">
        	<h1>Mes Projets</h1>
			<table class="table">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">Nom</th>
			      <th scope="col">Déscription</th>
			      <th scope="col">Language</th>
			      <th scope="col">Date prévu</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($Prjs as $prj)
				    <tr>
				      <th>{{ $prj->Nom }}</th>
				      <td>{{ $prj->Description }}</td>
				      <td>{{ $prj->language  }}</td>
				      <td>{{ Carbon\Carbon::parse($prj->Date)->format('d/m/Y') }}</td>

				      <td>
				      	<form action="{{url('projets/'.$prj->id)}}" method="post">
			      		    {{csrf_field()}}
	                    	{{method_field('DELETE')}}
					      	<a href="{{url('projets/'.$prj->id.'/edit')}}" class="btn btn-outline-info">modifier</a>
					      	<button type="submit" class="btn btn-outline-danger">supprimer</button>
				      	</form>
				      </td>
				    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>
@endsection
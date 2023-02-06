@extends('devoir')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Liste Classe</h3>
	</div>
	<div class="col-12 col-md-2 text-end">
		<a class="btn btn-primary" href="{{route('homepage')}}">Ajouter Etudiant</a>
	</div>

</div>
<div class="row">
	


    <div class="row">
	<div class="col-12">
		<table class="table table-primary">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nom</th>
		      <th scope="col">Prenom</th>
		      <th scope="col">Matiere</th>
		      <th scope="col">Matiere</th>
		      <th scope="col">Note</th>
		      <th scope="col">Examen</th>
		    </tr>
		  	</thead>
		  	<tbody>
	  		@if($etudiants->count() > 0)
			  	@foreach($etudiants as $projet)
			    <tr>
			      <td>{{$loop->index + 1}}</td>
			      <td>{{$projet->nom}}</td>
			      <td>{{$projet->prenom}}</td>
			      <td>{{$projet->matiere}}</td>
			      <td>{{$projet->note}}</td>
			      <td>{{$projet->examen}}</td>
			      <td>{{$projet->semestre}}</td>
			      <td>
  	                
			      </td>
			    </tr>
			    @endforeach
		    @else
		    <tr>
		      <td colspan="4">Pas d'etudiant!</td>
		    </tr>
		    @endif
		  	</tbody>
		</table>
		
	</div>
</div>

    
</div>
@endsection
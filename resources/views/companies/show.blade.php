@extends('layouts.app') @section('content')
<div class="col-md-6 col-lg-6 col-md-offset-2">
	<div class="panel panel-primary ">
		<div class="panel-body">
			<h2>{{$company->name}}</h2>
			<h6>{{$company->description}}</h6>
			<div class="row">
				@foreach($company->projects as $project)
				<div class="col-lg-4">
					<h3><a href="/blog/public/index.php/projects/{{$project->id}}">{{$project->name}}</a></h3>
					<h6>{{$project->description}}</h6>
				</div>
				@endforeach
			</div>
			</dev>			
		</div>

	</div>
</div>
<div class="col-md-2 col-lg-2">
<div class="panel panel-default ">
	<ul class="list-group">
		<li class="list-group-item"><a href="/blog/public/index.php/companies">List companies</a></li>
		<li class="list-group-item"><a href="/blog/public/index.php/companies/{{$company->id}}/edit">Edit company</a></li>
		<li class="list-group-item"><a href="/blog/public/index.php/projects/create">Add new project</a></li>
		<li class="list-group-item"><a href="/blog/public/index.php/companies/create">Create new company</a></li>
		<br />
		<li class="list-group-item">
			<a href="#"
			onclick="
				var result = confirm('Do you really want to delete this Project?');
					if(result){
						event.preventDefault();
						document.getElementById('form-delete').submit();
						}
				">
			Delete
			</a>
			<form action="{{ route('companies.destroy',[$company->id]) }}"
			method="post" style="display: none;"
			 id="form-delete">
			{{csrf_field()}}
			<input name="_method" value="delete" type="hidden" />
			</form>
		</li>
	</ul>
</div>
<div class="panel panel-default ">
<div class="panel-heading">Members</div>
<div class="panel-body">
	<ul class="list-group">
		<li class="list-group-item"><a href="/blog/public/index.php/user">User</a></li>
	</ul>
</div>
</div>
</div>
@endsection

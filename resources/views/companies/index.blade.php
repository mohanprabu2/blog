@extends('layouts.app') 
@section('content')
<div class="col-md-6 col-lg-6 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Companies</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					@foreach($companies as $company)
					<tr>
						<td><a href="/blog/public/index.php/companies/{{$company->id}}">{{$company->name}}</a></td>
						<td>{{$company->description}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="col-md-2 col-lg-2">
<div class="panel panel-default ">
	<ul class="list-group">
		<li class="list-group-item"><a href="/blog/public/index.php/companies/create" class="btn btn-info" role="button">Create new company</a></li>
	</ul>
</div>
</div>
@endsection

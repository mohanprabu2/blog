@extends('layouts.app') @section('content')
<div class="col-md-6 col-lg-6 col-md-offset-2">
	<div class="panel panel-primary ">
		<div class="panel-body">
			<form class="form-horizontal" method="POST"
				action="{{ route('companies.store') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name" class="col-md-4 control-label">Name</label>

					<div class="col-md-6">
						<input id="name" type="text" class="form-control" name="name"
							value="" required>
					</div>
				</div>

				<div class="form-group">
					<label for="description" class="col-md-4 control-label">description</label>

					<div class="col-md-6">
						<input id="description" type="text" class="form-control"
							name="description" value="" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>
<div class="col-md-2 col-lg-2">
	<div class="panel panel-default ">
		<ul class="list-group">
			<li class="list-group-item"><a href="/blog/public/index.php/companies">List companies</a></li>
		</ul>
	</div>
</div>
@endsection

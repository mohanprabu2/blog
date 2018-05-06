@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger alert-dismissible col-md-6 col-lg-6 col-md-offset-2">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  @foreach($errors as $error)
  <strong>{{ $error }}</strong>
  @endforeach
</div>
@endif
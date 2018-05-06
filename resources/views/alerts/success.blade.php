@if(session()->has('success'))
<div class="alert alert-success alert-dismissible col-md-6 col-lg-6 col-md-offset-2">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{!! session()->get('success') !!}</strong>
</div>
@endif
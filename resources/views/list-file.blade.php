@extends('templates.default')

@section('content')
	
	@include('errors.form-errors')
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-success">
					<div class="panel-heading">Upload File</div>
					<div class="panel-body">
						<form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data">
						  <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
						  
						  <div class="form-group">
						    <label>Key</label>
						    <input type="password" class="form-control" placeholder="Key" name="key">
						  </div>
						  <div class="form-group">
						    <label>confirm Key</label>
						    <input type="password" class="form-control" placeholder="confirm key" name="key_confirmation">
						  </div>
						  <div class="form-group">
						    <label>File input</label>
						    <input type="file" id="inputFile" name="uploaded_file">
						  </div>
						  <button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
@endsection
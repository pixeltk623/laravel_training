
	



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <!--  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"> -->
</head>
<body>

<div class="container">

	{{-- @if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif --}}


	<form method="post" action="{{ route('create.manage_process') }}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="Title" class="form-control @error('Title') is-invalid @enderror">

			@error('Title')
				<div class="alert alert-danger">
					{{$message}}
				</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Source</label>
			<select class="form-control" name="source">
				<option value="">Select</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
			</select>
			@error('source')
				<div class="alert alert-danger">
					{{$message}}
				</div>
			@enderror
		</div>
		<div class="form-group">
			<label>File</label>
			<input type="file" name="fileUpload" class="form-control-file">
			@error('fileUpload')
				<div class="alert alert-danger">
					{{$message}}
				</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"></textarea>
			@error('description')
				<div class="alert alert-danger">
					{{$message}}
				</div>
			@enderror
		</div>
		<input type="submit" name="submit" class="btn btn-primary">
	</form>


  
</div>

</body>
</html>

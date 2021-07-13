<?php 
	
#	echo "<pre>";

#	print_r($data);

#	die;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<h1>Login Page</h1>

	{{-- {{ count($data) }}

	The current UNIX timestamp is {{ time() }}.

	@if (count($data) === 1)
    I have one record!
	@elseif (count($data) > 1)
	    I have multiple records!
	@else
	    I don't have any records!
	@endif --}}

	<div class="container">
        <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $key => $value)
    		<tr>
    			<td>{{ ++$key }}</td>
    			<td>{{ $value['name'] }}</td>
    			<td>{{ $value['email'] }}</td>
    			<td>{{ $value['mobile'] }}</td>
    		</tr>
		@endforeach
      </tbody>
    </table>
    </div>

</body>
</html>
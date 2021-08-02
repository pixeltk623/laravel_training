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




  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>    
  <a href="{{url('create')}}" class="btn btn-success">Add Blog</a>

  {{-- {{ route('brand.manage_brand_process') }}   --}}   

@if(session()->has('message'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
    <span class="badge badge-pill badge-success">Success</span>
    {{session('message')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif


  <br><br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Title</th>
        <th>Source</th>
        <th>Image</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    @foreach($data as $key => $value)
      <tr>
        <td>{{++$key}}</td>
        <td><img src="{{ asset('storage/media/'.$value['file']) }}" class="img-thumbnail" width="75" /></td>
        <td>{{ $value['title'] }}</td>
        <td>{{ $value['source'] }}</td>
        <td><img src="{{ asset('storage/media/'.$value['image']) }}" width="80"></td>
        <td>{{ $value['description'] }}</td>
       {{--  <td>{{ $value['created_at'] }}</td> --}}

         <td>{{ $value['created_at']->format('d/m/Y') }}</td>

         <td><a href="{{ url("edit_blog") }}/{{$value['id']}}" class="btn btn-warning">Edit</a></td>

         <td><a href="{{ url("delete") }}/{{$value['id']}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

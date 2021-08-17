
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
        <button class="btn btn-primary">Cart</button>
    </div>
</div>
  
<br/>
<div class="container">
  
      
        
<div class="row">

        @foreach($data as $key => $value)
            <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{$value['image']}}" alt="" width="200" height="200">
                <div class="caption">
                    <h4>{{ $value['name'] }}</h4>
                    <p>ABC</p>
                    <p><strong>Price: </strong> {{$value['price']}}$</p>
                    <p class="btn-holder"><a href="http://127.0.0.1:8000/add-to-cart/{{$value['id']}}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</div>
  
     
</body>
</html>
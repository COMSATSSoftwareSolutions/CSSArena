<!DOCTYPE html>
<html>
<head>
    <title>CSS Areena</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  
<div class="container-fluid" style="margin-top: 25px;;">
    @yield('content')
</div>
   
</body>
</html>
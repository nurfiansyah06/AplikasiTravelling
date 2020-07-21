<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}">
    <link
    href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap"
    rel="stylesheet"
    />
    <link
    href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap"
    rel="stylesheet"
    />
   
<body>
    

   @yield('content')

    
    
    <script src="frontend/libraries/retina/retina.min.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
</body>
</html>
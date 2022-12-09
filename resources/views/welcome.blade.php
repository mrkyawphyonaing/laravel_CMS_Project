<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('welcome/css/style.css')}}">
</head>
<body>
    This is Home Page
    <hr>
    <a href="{{url('about')}}">go to about page</a>
    <br>
    <a href="{{route('contact')}}">go to contact page </a>
    <br>
    <h1>Author_ID : {{$author_id}}</h1>
    <h1>Blog_ID : {{$blog_id}}</h1>
    <a href="{{url('blogs/'.$author_id.'/authors/'.$blog_id)}}">go to blog</a>
    <img src="{{url('welcome/images/flower.jpg')}}" alt="" style="width: 300px; height:300px">
    <script src="{{url('welcome/js/index.js')}}"></script>
</body>
</html>

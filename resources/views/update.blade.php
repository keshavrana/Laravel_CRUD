<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keshav Rana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<style>
body
    {
        background-color:maroon;
    }
#h1{
padding-top:30px;
 color: Yellow;
 background-color:black;
 height: 250px;
 width:100%;
 text-align:center;
    }
    form{
        background-color:black;
        text-align:center;
        border: 1px solid yellow;
        height:210px;
        padding-top:10px;
    }
    p{
        color:yellow;
    }
    input{
        width:40%;
        background-color:yellow;
        color:green;
    }
    button{
        color:black;
        background-color:yellow;
    }
    table{
        border:2px solid red;
        text-align:center;
        width:100%;
        color:yellow;
        background-color:black;
    }
    #file{
        width:300px;
        height:40px;
        padding-left:40px;
    }
</style>
<body>
    <h1>CRUD operation in Laravel 8</h1>
    <form action="" method="post">
        @csrf
        <p>Name: <input type="text" name="name" value="{{$data['name']}}"></p>
        <p>Email: <input type="text" name="email" value="{{$data['email']}}"></p>
        <p>Password: <input type="text" name="password" value="{{$data['password']}}"></p>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
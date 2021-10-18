<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>
<style>
    body{
background-color:maroon;
    }
h1{
padding-top:30px;
 color: Yellow;
 background-color:black;
 height: 100px;
 width:100%;
 text-align:center;
 border: 1px solid yellow;
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
    <h1>Login Here</h1>
    @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
    <form action="login1" method="post">
        @csrf
    <p>Name: <input type="text" name="name"></p>
    <p>Password: <input type="text" name="password"></p>
    <button type="submit" value="submit">Submit</button>
    </form>

</body>
</html>
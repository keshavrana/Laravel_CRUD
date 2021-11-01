<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</script>
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
        height:230px;
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
    #canva{
        margin:10px;
    }
    select{
        color:black;
        background-color:yellow;
    }
    option{
        background-color:yellow;
    }
    img{
    width: 225px;
    height: 229px;
    border: 5px solid yellow;
    background-color:black;
    }
    marquee{
        color:black;
        background-color:yellow;
    }
    #msg{
        width:600px;
        height:100%;
        color: red;
        background-color:yellow;
    }
</style>
<body>
<h1>Data insert with the help of ajax</h1>
    {{session('message')}}
    <form  id="form" >
        @csrf
        <p>Name <input type="text" name="name" id="name"></p>
        <p>Email <input type="text" name="email" id="email"></p>
        <p>Password <input type="text" name="password" id="password"></p>
        <button type="submit" id="btn">Submit</button>
    </form>
    <div id="msg">

    </div>
</body>
</html>
<script>
    $(document).ready(function(){
    $('#form').submit(function(e){
        e.preventDefault();
        $.ajax({
            url:"{{route('data.insert')}}",
            data:$('#form').serialize(),
            type:'post',
            success:function(result){
                $('#msg').html(result.message);
                $('#form')['0'].reset();
            }


        });
    });
    });


</script>
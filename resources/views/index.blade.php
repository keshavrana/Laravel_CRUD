<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
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
    <div id="h1">
    <canvas id="canvas"></canvas>
    <h1>CRUD operation in Laravel 8</h1>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <p>Name: <input type="text" name="name" required placeholder="Enter Your Name"></p>
        <p>Email: <input type="text" name="email" required placeholder="Enter Your Email"></p>
        <p>Password: <input type="text" name="password" required placeholder="Enter Your Password"></p>
        <input id="file" required type="file" name="file">
        <button type="submit" name="submit">Submit</button>
    </form>

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('success1'))
    <div class="alert alert-danger">
        {{ session()->get('success1') }}
    </div>
@endif
    <br><br>
    <table border="2px">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>File</th>
            <th>Password</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            @foreach($members as $member)
           <tr>
               <td>{{$member['name']}}</td>
               <td>{{$member['email']}}</td>
               <td>{{$member['file']}}</td>
               <td>{{$member['password']}}</td>
               <td><a href="update/{{$member['id']}}"><i class="fa fa-edit fa-2x" style="color:green" aria-hidden="true"></i></a></td>
               <td><a href="delete/{{$member['id']}}"><i class="fa fa-trash fa-2x" style="color:red" aria-hidden="true"></i></a></td>
           </tr>
           @endforeach
        </tbody>
    </table>
</body>
</html>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
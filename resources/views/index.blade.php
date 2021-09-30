<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keshav Rana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    <h1>CRUD operation in Laravel 8</h1>
    <form action="" method="post">
        @csrf
        <p>Name: <input type="text" name="name"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Password: <input type="text" name="password"></p>
        <button type="submit" name="submit">Submit</button>
    </form>

    <br><br>
    <table border="2px">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            @foreach($members as $member)
           <tr>
               <td>{{$member['name']}}</td>
               <td>{{$member['email']}}</td>
               <td>{{$member['password']}}</td>
               <td><a href="update/{{$member['id']}}"><i class="fa fa-edit fa-2x" style="color:green" aria-hidden="true"></i></a></td>
               <td><a href="delete/{{$member['id']}}"><i class="fa fa-trash fa-2x" style="color:red" aria-hidden="true"></i></a></td>
           </tr>
           @endforeach
        </tbody>
    </table>
</body>
</html>
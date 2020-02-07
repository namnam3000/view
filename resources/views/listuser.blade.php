<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    td:first-child {
        width: 15px;
        text-align: center;
    }
</style>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <h2>List All User</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <a href="{{route('register')}}">Add</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value -> name}}</td>
                <td>{{$value->email}}</td>
                <td>
                    <a href="{{route('edit_user',$value->id)}}">Edit</a>
                    <a href="{{route('delete_user',$value->id)}}">Delete</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="pull-right">{{$user->links()}}</div>
    </div>
</div>

</body>
</html>

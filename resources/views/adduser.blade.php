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
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="{{route('add_user')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      @if($errors -> has('name'))
        <div class="alert alert-warning">{{$errors->first('name')}}</div>
      @endif
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      @if($errors -> has('email'))
        <div class="alert alert-warning">{{$errors->first('email')}}</div>
      @endif
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      @if($errors -> has('pwd'))
        <div class="alert alert-warning">{{$errors->first('pwd')}}</div>
      @endif
    </div>

    <button type="submit" class="btn btn-default">Dang ky</button>
  </form>
</div>

</body>
</html>

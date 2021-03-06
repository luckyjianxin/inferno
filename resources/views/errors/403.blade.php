<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Access Denied</title>
  <link rel="stylesheet" href="{{ url('adminlte/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('adminlte/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  <style>
    h1 {
      font-size: 5em;
      color: #dd4b39;
    }
    p {
      font-size: 2em;
    }
    .error-wrapper {
      text-align: left;
      width: 50%;
      margin: 0px auto;
      margin-top: 5em;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="error-wrapper">
          <h1>Access Denied</h1>
          @if($exception->getMessage())
            <p>{{$exception->getMessage()}}</p>
          @else
            <p>You tried to do some action which you are not allowed.</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</body>
</html>
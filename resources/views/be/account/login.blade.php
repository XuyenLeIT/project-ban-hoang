<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 class="text-center text-primary fw-bold">Login form</h2>
  <div class="row">
    <div class="col-lg-6 d-block m-auto">
      @if (session('error'))
      <div class="alert alert-danger">
        <strong>Danger!</strong> {{session('error')}}
      </div>
      @elseif(session('success'))
      <div class="alert alert-success">
        <strong>Success!</strong> {{session('success')}}
      </div>
      @endif
      <form action="{{route('login.check')}}" method="POST">
        @csrf
        <div class="mb-3 mt-3">
          <label for="email">Email:</label>
          <input type="email" class="form-control" 
            value="{{old('email')}}"
            id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" 
          placeholder="Enter password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

</div>

</body>
</html>

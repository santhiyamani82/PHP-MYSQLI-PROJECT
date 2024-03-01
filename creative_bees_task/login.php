<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container" action="/index.php">
    <div class="row">
        <div class="col-sm-4">

    <!--===== Registration Form ============-->
    <h3 class="mt-3 text-success text-center">Login Form</h3>
    <p class="text-center" id="msg"></p>
    <form id="loginForm" method="post">
    
      <div class="mb-3 mt-3">
          <input type="email" class="form-control" placeholder="Email Address" name="emailAddress">
        </div>
        <div class="mb-3 mt-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
      

      <button type="submit" class="btn btn-primary">Login</button>
<div id="displaydata"></div>

    </form>
        <!--===== Registration Form ============-->

        </div>
        <div class="col-sm-8">

        </div>
    </div>
 
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="main.js"></script>
</body>
</html>
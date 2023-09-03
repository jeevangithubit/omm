<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
  body {

    background-size: cover;
}

*[role="form"] {
    max-width: 600px;
    padding: 15px;
    margin: 100px auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
#button{
  width: 100px;
  margin-left: 250px;
}


</style>
</head>
<body>
	<div class="container" >
<form class="form-control" role="form" action="<?php echo base_url()?>index.php/auth/login" method="post">
    <h2>Login</h2>
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="username"  id="username" class="form-control" placeholder="Username" required="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" id="button">Login</button>
  <a style="margin-top: 10px" href="<?php echo base_url()?>index.php/auth/forword" class="btn btn-info">Reset Password</a>

</form>
</div>
</body>
</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
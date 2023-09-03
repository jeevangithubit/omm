<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
  body {

    background-size: cover;
}

*[role="form"] {
    max-width: 400px;
    padding: 15px;
    margin: 100px auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 20px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
#button{
  width: 100px;
    text-align: center;
    margin: auto;
}
</style>
</head>
<body>

<?php echo @$error; ?>
<br>
<form class="form-control" role="form" method="post" action='<?php echo base_url()?>index.php/auth/forword'>
<h2>Forgot Password</h2>

		<label>Email ID :</label>
		<div class="form-group">
		<input type="password" name="email" id="name" placeholder="Email ID" class="form-control"/>
		</div>
        <button type="submit" class="btn btn-primary btn-block" id="button">Submit</button>
</form>
</div>
</div>
</body>
</html>

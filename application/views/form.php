

<?php

foreach($get as $value){}

?>


<!DOCTYPE html>

<html>
<head>
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-2.1.3.min.js"></script> -->
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
    text-align: center;
    margin: auto;
}


</style>
</head>
<body>
<div class="container">
            <form class="form-control" role="form" action="<?php echo base_url()?>index.php/web/save" method="post" >
                <h2>Registration</h2>
                <div class="form-group">
                    <label>User Name</label>
                        <input type="text" id="username" name="username" placeholder="Username" class="form-control" autofocus required="">
                </div>
               
                <div class="form-group">
                    <label>Email* </label>
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Password*</label>
                        <input type="password" id="myInput" value="" name="password" placeholder="Password" class="form-control" required="">
                     <input type="checkbox" onclick="myFunction()">Show Password

                </div>
               
                <div class="form-group">
                    <label>Date of Birth*</label>
                        <input type="date" id="dob" name="dob" class="form-control" required="">
                </div>
               
                <button type="submit" class="btn btn-primary btn-block" id="button">Register</button>
                <td>
                 <a style="margin-top: 10px" href="<?php echo base_url()?>index.php/auth/login" class="btn btn-primary btn-block">User login</a>
                </td>
            </form> 
        </div>
        <script type="text/javascript">
          function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        </script> 
        
</body>
</html>

<script type="text/javascript">


// function myFunction() {
//   var x = document.getElementById("myInput");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
// }

  $(function(){
  $.validator.setDefaults({
    highlight: function(element){
      $(element)
      .closest('.form-group')
      .addClass('has-error')
    },
    unhighlight: function(element){
      $(element)
      .closest('.form-group')
      .removeClass('has-error')
    }
  });
  
  $.validate({
    rules:
    { 
        password: "required",
      birthDate: "required",
      weight: {
          required:true,
          number:true
      },
      height:  {
          required:true,
          number:true
      },
      email: {
        required: true,
        email: true
      }
    },
      messages:{      
        email: {
        required: true,
        email: true
      }
    },
        password: {
          required: " Please enter password"
        },
        birthDate: {
          required: " Please enter birthdate"
        },
        email: {
          required: ' Please enter email',
          email: ' Please enter valid email'
        },
        weight: {
          required: " Please enter your weight",
          number: " Only numbers allowed"
        },
        height: {
          required: " Please enter your height",
          number: " Only numbers allowed"
        },
      }
      
  });

</script>
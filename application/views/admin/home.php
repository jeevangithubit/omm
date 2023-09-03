<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style type="text/css">
  #table{
    width: 800px;
    margin: auto;
    margin-top: 30px;
    border: 1px solid;
  }
  #button{
  width: 100px;
  margin-left: 750px;
  margin-top: 10px
 
}

</style>


</head>
<body>

<table class="table table-striped" id="table" >
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col" >DOB</th>
      <th scope="col" >action</th>
    
    </tr>
  </thead>
 <?php foreach ($get as $value) { ?>
  <tbody>
    <tr>
      <th><?php echo $value['id']?></th>
      <td><?php echo $value['username']?></td>
      <td><?php echo $value['email']?></td>
      <td><?php echo $value['password']?></td>
      <td><?php echo $value['dob']?></td>


       <td>
         <a style="padding: 10px;" href="<?php echo base_url()?>index.php/user/home_delete/<?php echo $value['id']?>" onclick="return conform ('Are you sure?')" class="btn btn-danger"> Delete</a>
        <a href="<?php echo base_url()?>index.php/user/update/<?php echo $value['id']?>"  id="edit" onclick="document.getElementById('id02').style.cssText='display:block; overflow:auto;'"  class="btn btn-success">Update</a>
       </td>
                                         



    </tr>
   
  </tbody>
<?php } ?>
       
         

</table>


       <td>
         <a id="button" href="<?php echo base_url()?>index.php/user/logout" class="btn btn-info">Logout</a>
      </td>
         <td>
           <a style="margin-top: 10px" href="<?php echo base_url()?>index.php/web/form" class="btn btn-info">Add New User</a>
         </td>


<div id="id02" class="modal" style="overflow: auto !iportant;">

      <div class="container-fluid px-1 py-5 mx-auto">

    <div class="row d-flex justify-content-center">

        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

            <div class="card">
<?php foreach ($get as $value){} ?>
                <form action="<?php echo base_url();?>index.php/user/update" enctype="multipart/form-data" method="post" class="form-card">

                    <input type="hidden" id="id" name="id" value="<?php echo $value['id']?>" onblur="validate(1)">


                    <div class="row justify-content-between text-left">
                                               <div class="form-group col-sm-6 flex-column d-flex">

                            <label class="form-control-label px-3">username<span class="text-danger"> *</span></label>

                            <input type="text" id="username" name="username" value="<?php echo $value['username']?>" onblur="validate(1)">

                            </div>
                        <div class="form-group col-sm-6 flex-column d-flex">

                            <label class="form-control-label px-3">email<span class="text-danger"> *</span></label>

                            <input type="email" id="email" name="email" value="<?php echo $value['email']?>" onblur="validate(1)">

                            </div>


                    </div>

                    

                    

                    <div class="row justify-content-between text-left">

                        <div class="form-group col-sm-6 flex-column d-flex">

                            <label class="form-control-label px-3">password<span class="text-danger"> *</span></label>

                            <input type="password" id="password" name="password" value="<?php echo $value['password']?>" multiple="multiple" onblur="validate(4)">

                            </div>

                            <div class="form-group col-sm-6 flex-column d-flex">

                            <label class="form-control-label px-3">dob<span class="text-danger"> *</span></label>

                            <input type="date" id="dob" name="dob" value="<?php echo $value['dob']?>" multiple="multiple" onblur="validate(4)">

                            </div>

                    </div>

                    

                    

                    
                    

                    <div class="row justify-content-between text-left">
                    </div>
                    <div class="row justify-content-end">

                        <div class="form-group col-sm-6">

                            <button type="submit" value="Update" id="update" class="btn btn-success" onclick="document.gbtn btn-block btn-dangeretElementById('id02').style.display='none'">Update</button>

                            </div>

                            <div class="form-group col-sm-6">

                            <p onclick="document.getElementById('id02').style.display='none'" class="btn btn-dark">Cancel</p>

                            </div>

                    </div>

                    

                </form>

            </div>

        </div>

    </div>

</div>

</div>











<style>

    body{color: #000;overflow-x: hidden;height: 100%;background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}

</style>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script>  

$(document).ready(function(e){
    $('.edit').on('click',function(e){
    var id=$(this).attr('href');  

//   var status=$(this).attr('href');  

//   alert(id);

  // $('#msg').html("");  

        $.ajax({
            type:'POST',
            url:'<?php echo base_url()?>user/edit',  
            dataType: 'json',  
            data:{
              id:id
            },

             success: function(data){

                $('#username').val(data['0']['username']);

                $('#email').val(data['0']['email']);

                $('#password').val(data['0']['password']);

                $('#dob').val(data['0']['dob']);

      }

        });
    });

});



</script>
</body>
</html>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
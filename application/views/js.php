<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("p").click(function(){
    alert("The paragraph was clicked.");
  });
});
</script>
</head>
<body>

<p>Click on this paragraph.</p>

</body>
</html>
<!-- <!DOCTYPE html>
<html>
<body>
<h1>HTML DOM Events</h1>
<h2>The onclick Event</h2>

<p>The onclick event triggers a function when an element is clicked on.</p>
<p>Click to trigger a function that will output "Hello World":</p>

<button onclick="myFunction()">Click me</button>

<p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script>

</body>
</html> -->

<?php  
for($i=0;$i<=5;$i++){  
for($j=5-$i;$j>=1;$j--){  
echo "* ";  
}  
echo "<br>";  
}  
?>  


<?php  
for($i=0;$i<=5;$i++){  
for($j=1;$j<=$i;$j++){  
echo "* ";  
}  
echo "<br>";  
}  
?>  

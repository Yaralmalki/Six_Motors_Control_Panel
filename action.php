<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.input {
 text-align: center;
border: 7px rgb(30, 52, 124);
width: 140px;
height: 70px;
padding: top 2px;
}
.input {
  background-color: white; 
  color: black; 
  border: 2px solid gray;
}
.input:hover {
  background-color: gray;
  color: white;
}
.slidecontainer {
  width: 100%;
}
.rang {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}
.rang:hover {
  opacity: 1;
}
.rang::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: gray;
  cursor: pointer;
}
.rang::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}
</style>
</head>
<body>
<div class="slidecontainer">
<form action="action.php" method="POST">
<label for="fname"> motor 1 </label> 
<div class = "motor1"> 
<input type="range" class = "rang" id="moto1" name="motor1" min="0" max="180" value="0" >
<p>Value: <span id = "value1"></span></p>
</div>
<label for="fname"> motor 2 </label>
<div class = "motor2"> 
<input type="range" class = "rang" id="moto2" name="motor2" min="0" max="180" value="0" >
<p>Value: <span id = "value2"></span></p>
</div>
<label for="fname"> motor 3 </label>
<div class = "motor3"> 
<input type="range" class = "rang" id="moto3" name="motor3" min="0" max="180" value="0" >
<p>Value: <span id = "value3"></span></p>
</div>
<label for="fname"> motor 4 </label>
<div class = "motor4"> 
<input type="range" class = "rang" id="moto4" name="motor4" min="0" max="180" value="0" >
<p>Value: <span id = "value4"></span></p>
</div> 
<label for="fname"> motor 5 </label>
<div class = "motor5"> 
<input type="range" class = "rang" id="moto5" name="motor5" min="0" max="180" value="0" >
<p>Value: <span id = "value5"></span></p>
</div>
<label for="fname"> motor 6</label>
<div class = "motor6"> 
<input type="range" class = "rang" id="moto6" name="motor6" min="0" max="180" value="0" >
<p>Value: <span id = "value6"></span></p>
</div>
 <input type="submit" value = "on" name = on class ="input" >
 <input type="submit" value = "off" name = off  class ="input" >
 <input type="submit" value="save"name = save class ="input" >
</form>
 </div>
<script>
var rang1 = document.getElementById("moto1");
var output1 = document.getElementById("value1");
output1.innerHTML = rang1.value;
rang1.oninput = function() {
    output1.innerHTML = this.value;    
}
var rang2 = document.getElementById("moto2");
var output2 = document.getElementById("value2");
output2.innerHTML = rang2.value;
rang2.oninput = function() {
    output2.innerHTML = this.value;   
}
var rang3 = document.getElementById("moto3");
var output3 = document.getElementById("value3");
output3.innerHTML = rang3.value;
rang3.oninput = function() {
    output3.innerHTML = this.value;    
}
var rang4 = document.getElementById("moto4");
var output4 = document.getElementById("value4");
output4.innerHTML = rang4.value;
rang4.oninput = function() {
    output4.innerHTML = this.value;   
}
var rang5 = document.getElementById("moto5");
var output5 = document.getElementById("value5");
output5.innerHTML = rang5.value;
rang5.oninput = function() {
    output5.innerHTML = this.value;   
}
var rang6 = document.getElementById("moto6");
var  output6 = document.getElementById("value6");
output6.innerHTML = rang6.value;
rang6.oninput = function() {
    output6.innerHTML = this.value;    
}
</script>
<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'control';
  $conn = new mysqli($host, $user, $password, $db );
if (!$conn){
die('Could not connect: ' .myaql_error());
}
if(isset($_POST['save'])){
$motor1 = $_POST['motor1'];
$motor2 = $_POST['motor2'];
$motor3 = $_POST['motor3'];
$motor4 = $_POST['motor4'];
$motor5 = $_POST['motor5'];
$motor6 = $_POST['motor6'];
$sql = "select * from motors WHERE 1 ";
$sql = "INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6)VALUES ('$motor1', '$motor2', '$motor3' , '$motor4', '$motor5' , '$motor6')";
$result = mysqli_query($conn, $sql);
    if($result){
        echo "Item successfuly Added";
    }
    else{
        echo "error unable to past ". $sql . ":-" . mysqli_error($conn);
    }
}else if(isset($_POST['on'])) {
    $sql = "select * from onn WHERE 1";
    $sql = "INSERT INTO onn (ison) VALUES ('1')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Item successfuly Added ";
    }
    else{
        echo "error unable to past ". $sql . ":-" . mysqli_error($conn);
    }
}else if(isset($_POST['off'])) {
    $sql = "select * from off WHERE 1";
    $sql = "INSERT INTO off (isoff) VALUES ('0')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Item successfuly Added ";
    }
    else{
        echo "error unable to past ". $sql . ":-" . mysqli_error($conn);
    }}?>

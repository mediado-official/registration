<?php
$title = 'Index';
require_once 'includes/header.php';
?>
<!--
    -First name
    -Last name
    -Date of Birth (Use DatePicker)
    -Specialty (Database Admin, Software Developer, Web Administrator)
    -Email Address
    -Contact
-->
<h1 class="text-center">Registrationfor IT Conference </h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Date of Birth</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Specialty</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
<div class="form-group">
    <label for="exampleInputEmail1">Contact Number</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
</div> 
    <html>
<head>
    <title></title>
</head>
<body>
<div class="form-group">
    <label for="bdaymonth">Date</label>
    <input type="month" id="bdaymonth">
    <input type="submit" value="Submit">
</div>

</body>
</html><div class="form-group">    
<label for="exampleInputSpecialty1">Specialty:</label>   
<div class="form-group form-check">    
<input type="checkbox" class="form-check-input" id="exampleCheck1">    
<label class="form-check-label" for="exampleCheck1">Database Admin</label>  
</div>  

<div class="form-group form-check">    
<input type="checkbox" class="form-check-input" id="exampleCheck1">    
<label class="form-check-label" for="exampleCheck1">Software Developer</label>
</div>  

<div class="form-group form-check">    
<input type="checkbox" class="form-check-input" id="exampleCheck1">    
<label class="form-check-label" for="exampleCheck1">Web Administrator</label>
</div>
<div class="form-group form-check">    
<input type="checkbox" class="form-check-input" id="exampleCheck1">    
<label class="form-check-label" for="exampleCheck1"></label>
<select class="form-select" aria-label="Default select example">
  <option selected>Others</option>
  <option value="1">Senior Programmer</option>
  <option value="2">Student</option>
  <option value="3">Faculty</option>
</select>
</div>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <label for="submit" class="btn-primary btn-block">Submit</label>
</form>
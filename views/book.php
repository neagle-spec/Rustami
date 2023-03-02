<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rustami Auto Maintenance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="../js/script.js"></script>
  <link rel="stylesheet" href="../css/styles.css">

</head>
<body>

<?php include('includes/header.php') ?>


  
<div class="container">

<h2 class="text-center py-4">Book Appointment</h2>


<div style="display:flex;
  flex-flow:column wrap;
  align-content: center;">
  
 <!-- Mount calendar on root--> 
  <div id="root"></div>
  

<br/>
<input id="input-date" name="date" placeholder="MM/DD/YYYY" class="form-control" required/>
<br>
<select name="time" class="form-control" required>
  <option>8:00</option>
  <option>9:00</option>
  <option>10:00</option>
  <option>11:00</option>
  <option>12:00</option>
  <option>1:00</option>
  <option>2:00</option>
  <option>3:00</option>
  <option>4:00</option>
  <option>5:00</option>
</select>
<br>
<input name="name" class="form-control" placeholder="Your Full Name" required/>
<br>
<input name="email" class="form-control" placeholder="Your Email Address" required/>


</div>

<div style="width:30em">
 
</div>

<div id="root2"></div>
</div>

</body>
</html>

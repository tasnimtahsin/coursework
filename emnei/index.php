<?php include("dbConfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .space{
	  margin:10px 0px;
  }
  </style>
</head>
<body>
<div class="container">
<div class="row" style="background-color: lightblue; height: 100px;">

</div>
<div clas="row">
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open Modal</button>
<table class="table">
<tr>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>PHONE</th>
<th>GENDER</th>
<th>ADDRESS</th>
<th>AGE</th>
<th>CREATE DATE</th>
<th>ACTION</th>
</tr>
<?php

$query = mysql_query("SELECT * FROM students ORDER BY id DESC");

while($data = mysql_fetch_array($query)){
	?>
	<tr>
	<td><?php echo $data['id']; ?></td>
	<td><?php echo $data['name']; ?></td>
	<td><?php echo $data['email']; ?></td>
	<td><?php echo $data['phone']; ?></td>
	<td><?php echo $data['gender']; ?></td>
	<td><?php echo $data['address']; ?></td>
	<td><?php echo $data['age']; ?></td>
	<td><?php echo $data['create_date']; ?></td>
	<td><a href="update.php?id=<?php echo $data['id'];  ?>" class="btn btn-primary btn-sm">Update</a> &nbsp; <a href="deleteProcess.php?id=<?php echo $data['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete Your all information')">Delete</a></td>
	
	</tr>
	<?php

}

?>
</div>
</div>
</table>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Form</h4>
        </div>
        <div class="modal-body">

         <!-- FORM START-->
         <form method="post" action="saveProcess.php">
           <div class="form-group">
           <label for="usr">Name:</label>
           <input type="text" class="form-control" id="name" name="name" value="">
           </div>
           <div class="form-group">
           <label for="pwd">E-mail:</label>
           <input type="email" class="form-control" id="email" name="email" value="">
           </div>
		   
		   <div class="form-group">
           <label for="pwd">Phone:</label>
           <input type="text" class="form-control" id="phone" name="phone" value="">
           </div>
		   
		   <div class="form-group">
           <label for="pwd">Address:</label>
           <input type="text" class="form-control" id="text" name="address" value="">
           </div>
		   
         
           <div class="form-group">
           <h4>Gender:</h4>
           <label class="checkbox-inline">
           <input type="radio" name="gender" value="Male">Male
           </label>
           <label class="checkbox-inline">
           <input type="radio" name="gender" value="Female">Female
           </label>
           </div>
           <div class="form-group">
           <label for="pwd">Age:</label>
           <input type="text" class="form-control" id="text" name="age" value="">
           </div>
           <div class="form-group">
           <button class="btn btn-success cls" type="submit">Submit</button> <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Close</button>
		   </div>
        </form>

        <!--Form End-->
        </div>
      
      </div>
      
    </div>
  </div>
  
</div>
        <script>
            $(document).ready(function() {
                $('.cls').click(function() {
                    alert("success!");
                });
            });
        </script>
</body>
</html>

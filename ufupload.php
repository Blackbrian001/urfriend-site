<html>

<head>
<link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css”  crossorigin=”anonymous”>

<script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js”  crossorigin=”anonymous”></script>

<script type=”text/javascript” src=”//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js”></script>

<script type=”text/javascript” src=”js/bootstrap-filestyle.min.js”> </script>
  <link rel="stylesheet" href="ufcss.css">
</head>
<body style="background-color:orange">

	<nav class="navbar navbar-expand-sm bg-green ">
	
<a class="navbar-brand" >UrFriend</a>
<form class=”form-horizontal” role=”form” action=”signprocessing.php” method=”post” enctype=”multipart/form-data”>
<div class="container">
<h1>Upload Your Story</h1>
    <form class="form-horizontal" role="form" action="process.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name1" class="col-sm-2 control-label">Name:</label>
        <div class="col-sm-4">
          <input type="name" class="form-control inputstl" id="name1" placeholder="Enter Your Full Name">
        </div>
      </div>
      <div class="form-group">
        <label for="gender1" class="col-sm-2 control-label">Gender:</label>
        <div class="col-sm-2">
        <select class="form-control inputstl" id="gender1">
          <option>Male</option>
          <option>Female</option>
        </select>          
          
        </div>
      </div>      
      <div class="form-group">
        <label for="email1" class="col-sm-2 control-label">Email:</label>
        <div class="col-sm-5">
          <input type="email" class="form-control inputstl" id="email1" placeholder="Enter Email">
        </div>
      </div>
      <div class="form-group">
        <label for="password1" class="col-sm-2 control-label">Password:</label>
        <div class="col-sm-3">
          <input type="password" class="form-control inputstl" id="password1" placeholder="Password here">
        </div>
      </div>
      <div class="form-group">
        <label for="address1" class="col-sm-2 control-label">Address:</label>
        <div class="col-sm-5">
          <input type="address" class="form-control inputstl" id="address1" placeholder="Full Address">
        </div>
      </div>            

      <div class="form-group">
        <label for="selphoto" class="col-sm-2 control-label">Select a File to upload:</label>
        <div class="col-sm-5">
          <input type="file" class="inputstl" id="selphoto" name="sentfile">
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" class="inputstl"> Remember me
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit" class="btn btn-lg btn-block btn-primary">Create Account</button>
        </div>
      </div>
    </form>
   </div> 
<script>
			$('#selphoto').filestyle({
				buttonName : 'btn-primary',
                buttonText : ' Upload an Image',
                iconName : 'glyphicon glyphicon-upload'
			});
</script> 

</footer> 
<script src="jquery.js" ></script>
<script src="css/bootstrap.min.css"></script>
</body>
</html>
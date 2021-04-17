<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <style>
            /* Full-width input fields */
.input100  {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.input100 input[type=text]:focus,input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
   .login100-form-btn  {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
            }
        
        
        </style>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="resource/normalize.css">
        <link rel="stylesheet" type="text/css" href="resource/Grid.css">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Parisienne&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="resource/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/util.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        
<nav class="navbar navbar-inverse" style="margin:0 0 0 0;background-image:linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
     
      
      <li><a href="adminlogin.php" >Admin Login</a></li>
        <li><a href="about.html" >About Us</a></li>
      <!--<li><a href="#" data-toggle="modal" data-target="#adminmodal">Admin</a></li>-->
      
    </ul>
  </div>
</nav>
<div class="poss">
<header>
 <div class="container-fluid"> 
 <!--   function proper -->        <!--when page         loads -->
 <div class="row">
    <h1 style="font-size:90px;font-family: 'Amatic SC', cursive;">ASK SAPTHAGIRI</h1>
     <h3 style="font-size:25px;font-family:sans-sarif ;padding:0 0 0 0">Clarify Your Doubts Now!</h3>
     	<div class="flex-col-c p-t-40 p-b-40">

						<a href="#" data-toggle="modal" data-target="#userregmodal" class="arjun arjun-full" style="font-family:'lato'">
							Sign up
						</a>
					</div>
    
</div>
     <div class="poss1">
     

             <form class="login100-form validate-form p-l-35 p-r-25 p-t-138" action="validation.php" method="post">
                  <span class="login100-form-title" >
					</span>
                                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<?php 
                                                if(isset($_GET['status'])){
                                                    if($_GET['status']=='invalid'){
                                                        echo '<span>Invalid Username or Password</span>';
                                                    }
                                                }
                                                ?>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="Name" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							
						</span>

						<a href="#" class="txt2">
							
						</a>
					</div>

					<div class="container-login100-form-btn">
                                            <button class="login100-form-btn" type="submit">
							Sign in
						</button>
					</div>

				
				</form>
			</div>
     
      
  
 


        
        <!-- User Login Modal -->


        
        <!-- Admin Login Modal -->
<div id="adminmodal" class="modal fade" role="dialog" >
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Admin Login</h4>
      </div>
      <div class="modal-body">
         
          <div class="row" style="text-align: center">
               <form action="Adminvalidation.php" method="post">
                   
                        <div class="col-xs-8 col-xs-offset-2"> 
                            
                            

                           
                                   <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></label>
                                       <input type="text" name="Name" class="form-control" placeholder="enter email id here">
                                   </div>
                            <br>
                                     <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></label>
                                       <input type="password" name="password" class="form-control" placeholder="enter password here">
                                     </div>
                            <br>
                                    <button type="submit"class="btn btn-primary"> Login </button>
                                    
                          </div>
                  
</form>
                      </div>
        
        
      </div>
      
    </div>

  </div>
</div>
    </div>

        
         <!-- registration Modal -->
<div id="userregmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button id="regCloseBtn" type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Registration</h4>
      </div>
      <div class="modal-body">
         <div id="msg"></div>
          <div class="rowl" style="text-align: center">
              
                   
                        <div class="col-xs-8 col-xs-offset-2"> 
                            
                            

                           
                                   <div class="input-group">
                                       
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-user"></i></label>
                                       
                                       <input type="text" id="name" name="name" class="form-control" required placeholder="enter name here">
                                      
                                   </div>
                         <!-- <select>
                            <option value="name">enter name here</option>
                                       </select>  -->
                            
                            <br><div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></label>
                                       
                                       <input type="email" id="email" name="email" class="form-control" required placeholder="enter email id here">
                                     </div>
                            <br>
                            <span>Password Minimum 8 character's Long</span>
                                     <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></label>
                                       <input type="password" id="password" name="password" class="form-control" required placeholder="enter password here">
                                       
                                     </div>
                            <br>
                             <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></label>
                                       <input type="date" name="dob" id="dob" class="form-control" required placeholder="enter date-of-birth here">
                                     </div>
                            <br>
                             <span>Mobile number must be of 10 digits</span>
                            <div class="input-group">
                                       <label class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></label>
                                       <input type="number"  name="mobile" id="mobile" class="form-control" required placeholder="enter mobile no here">
                                     </div>
                            <br>
                                    <button id="stdRegBtn" class="btn btn-primary"> Register </button>
                                    
                                    
                                   
                            
                                    
                          </div>
                  

                      </div>
        
        
      </div>
      
    </div>

  </div>
</div>
         
         <script>
             
             $('#stdRegBtn').click(function(){
                 console.log('reached');
                 
          $.post("userreg.php", 
          {
          name: $('#name').val(),
          email: $('#email').val(),
          password : $('#password').val(),
          dob : $('#dob').val(),
          mobile : $('#mobile').val()
          },
          
        function(result){
             console.log(result);
//           $('#regCloseBtn').click();

           $("#msg").hide().html(result).slideDown();
          
           });       
                
                 
                 
     
                 
                 
                 
             });
             
             </script>
         
         
    </body>
</html>
<html>
    <head>
        <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                    <div class="col-lg-6"> 
                        <h2> Login form </h2>
                        <form action="validationphp.php" method="post">
                               <div class="form-group">
                                   <label>Name</label>
                                   <input type="text" name="Name" class="form-control">
                               </div>
                                 <div class="form-group">
                                   <label>Email</label>
                                   <input type="Email" name="Email" class="form-control">
                                 </div>
                                   
                                <button type="submit"class="btn btn-primary"> Login </button>
                                </form>
                      </div>
                        
                <div class="col-lg-6"> 
                    <h2> Signin form </h2>
                    
                    
                    <form action="registration.php" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                    <input type="text" name="Name" class="form-control">
                            </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="Email" name="Email" class="form-control">
                                        </div>
                                    <button type="submit"class="btn btn-primary"> Signin </button>
                        </form>
                            
                </div>
                  </div>
            </div>
    </body>
</html>

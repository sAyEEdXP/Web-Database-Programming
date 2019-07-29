<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="../res/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="../res/jquery.min.js"></script>

    <script src="../res/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-warning">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="../index.php">KenaBecha.com</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="../index.php">Home</a></li>
              <li><a href="#">About us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"  data-toggle="modal" data-target="#signUpModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
              <!-- Modal -->
            <div id="signUpModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registration info</h4>
                  </div>
                  <div class="modal-body">
                    <form action="../model/register.php" method="post" name="regForm">
                      <div class="form-group">
                        <label for="username">Name:</label>
                        <input type="text" class="form-control" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="username">Email:</label>
                        <input type="email" class="form-control" name="email"  required>
                      </div>
                      <div class="form-group">
                        <label for="username">Role:</label>
                        <select class="form-control"  name="role" id="role">
                            <option value="admin">Admin</option>
                            <option value="student">Student</option>
                            <option value="user">User</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="password" required>
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
              
              
              <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login info</h4>
                  </div>
                  <div class="modal-body">
                    <form action="../model/login.php" method="post">
                      <div class="form-group">
                        <label for="username">Email:</label>
                        <input type="email" class="form-control" name="email"  required>
                      </div>
                      
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="password" required>
                      </div>
                      <div class="form-group">
                        <label for="username">Role:</label>
                        <select class="form-control"  name="role" id="role">
                            <option value="admin">Admin</option>
                            <option value="student">Student</option>
                            <option value="user">User</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </nav>
        <!--        Navigation End here-->
        
         <div class="row">
             <div class="col-md-3 col-sm-3"></div>
             <div class="col-md-6 col-sm-6">
                 
                 <h2>Please Login to visit site.</h2>
                <form action="../model/login.php" method="post">
                  <div class="form-group">
                    <label for="username">Email:</label>
                    <input type="email" class="form-control" name="email"  required>
                  </div>

                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                  </div>
                  <div class="form-group">
                    <label for="username">Role:</label>
                    <select class="form-control"  name="role" id="role">
                        <option value="admin">Admin</option>
                        <option value="student">Student</option>
                        <option value="user">User</option>
                    </select>
                  </div>
                  <input type="submit" class="btn btn-default" value="Login">
                </form>
             </div>
             <div class="col-md-3 col-sm-3"></div>
         </div>
        <footer class="container-fluid bg-4 text-center">
          <p>Copyrighted By <a href="https://www.facebook.com/farhadhossain683">Farhad Hossain</a></p> 
        </footer>
    </div>
</body>
</html>
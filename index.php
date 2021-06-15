<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>index</title>
    <style>
      
      input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


     .loginbody{
	 display: flex;
     height: 80vh;
     justify-content: center;
     align-items: center;
     }
     .modal-content {
     background-color: #fefefe;
     border: 1px solid #888;
     width: 500px; /* Could be more or less, depending on screen size */
}

  </style>
  </head>
  <body>
     
  <header>
       <nav>
             <ul>
              <li> <a href="#">Contact Us </a></li>
              <li> <a href="#">About </a></li>
             </ul>
        </nav>
  </header>

  <div class="loginbody">
  
  <form class="modal-content animate" action="#" method="post">
    <div style="padding:16px 16px 0 16px,text-align: center">
      <b>User Login</b>
    </div>
    <hr/>
    <div class="container">
      <label><b>Username</b></label>
      <input class="form-control" type="text"  placeholder="Enter Username" name="uname">

      <label><b>Password</b></label>
      <input  class="form-control" type="password" placeholder="Enter Password" name="psw">
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <a href="register.php" style="text-decoration:none;"><button type="button"  class="cancelbtn">Register</button></a>
       <span class="psw"><a href="forgotpassword.php">Forgot password</a></span>
    </div>
  </form>
</div>
 



     <footer>
          <p> Copyright &copy; onlineshope.All Right Reserved </p>
     </footer>     
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
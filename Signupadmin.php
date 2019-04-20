<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="Signupadmin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >
    
 <?php
if (isset($_POST['email']) == true && empty ($_POST['email']) == false)
{
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false )
    {
        echo ' Invalid Email Address';
    }
}
?>
   
     <header>
     <div class="main">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="login.html">USER LOGIN</a></li>
            <li><a href="loginadmin.html">ADMIN LOGIN</a></li>
            <li><a href="Signup%20(1).html">USER SIGNUP</a></li>
            <li><a href="Signupadmin.html">ADMIN SIGNUP</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">CONTACT US</a></li>
        </ul>
         
    </div>
    </header>
       <div class="login-box"> 
           
     <form action="/action_page.php" method="post" >
     <div class= "left-box">
         <h1 align="center"> Sign Up as an Admin</h1>
         <p>Please fill in this form to create an account as an Admin.</p>
         
        <table>
            <tr>
                <td>
            First name: 
           <input type="text" name="firstname" placeholder="Enter First Name" required >
                </td>
      
               <td>
            Last name:      
           <input type="text" name="lastname" placeholder="Enter Last Name" required >
               </td>
            </tr>
            <tr>
                <td>
            Phone Number:
            <input type="tel" name="usrtel" placeholder="Enter Phone Number" required >
                </td>
                <td>
            E-mail:
            <input type="email" name="email" placeholder="Enter Email" required >
                </td>
            </tr>
	        <tr>
                <td colspan="2">
            Address:<br>
                <textarea cols="55" rows="4">Enter Address....
                </textarea>
                </td>
             </tr>
            <tr>
                <td>
            Birthday:
            <input type="date" name="bday" required >
                </td>
                <td>
             Gender:<br>
	         Male<input type="radio" name="gender" value="male" checked><br>
             Female<input type="radio" name="gender" value="female"><br>
             Other<input type="radio" name="gender" value="other"><br><br>
                </td>
            </tr>
            <tr>
                <td>
            Admin name:
	   <input type="text" name="userid" placeholder="Enter Username" required >
                </td>
                <td>
	      Admin password:
	   <input type="password" name="psw" placeholder="Enter Password" required >
                </td>
            </tr>
       <tr>
            <td colspan="2">
	   <input type="checkbox" name="robot1" value="Robot" required>I am not a robot
       <br><br>
           </td>
            </tr>
           <tr>
            <td colspan="2">
                <p>By creating an account you agree to our <a href="#">Terms & Conditions</a> and <a href='#'>Privacy Policy</a>.</p><br>
               </td>
            </tr>
            
             <tr>
            <td>
	   <input type="submit" value="Sign Up">
                 </td>
                 <td>
	   <input type="reset">
                </td>
            </tr>
          <tr>
            <td colspan="2">
    <p>Already have an account? <a href="#">Log in</a>.</p>

              </td>
            </tr>
          </table>
       </div>
         </form>


	  <div class="right-box">
	    <span class="Signinwth"> <h1 align="center">Sign Up with <br><br/> Social Networking Sites
            </h1></span><br><br><br>

	    <button class="facebook"> Sign Up with Facebook</button> <br><br>
	    <button class="twitter"> Sign Up with Twitter</button> <br><br>
	    <button class="google"> Sign Up with Google+</button> <br><br>

	   </div>
    <div class="or">OR</div>
    </div>
  </body>
</html>
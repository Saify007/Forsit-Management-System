<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Registration Form</title>
    <link rel="stylesheet" href="css\lawyerReg.css"
  
</head>
<body>
  <div class="container">
    <div class="title">
    Lawyer Registration Form
    </div>
    <form action="#">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Full Name</span>
          <input type="text" placeholder="Enter your full name" required >
        </div>
        <div class="input-box">
          <span class="details">Username</span>
          <input type="text" placeholder="Enter your Username" required >
        </div>
        <div class="input-box">
          <span class="details">Email Add</span>
          <input type="text" placeholder="Enter your email" required >
        </div>
        <div class="input-box">
          <span class="details">Phone Number</span>
          <input type="text" placeholder="Enter your phone number" required >
        </div>
        <div class="input-box">
          <span class="details">PassWord</span>
          <input type="password" placeholder="Enter your password" required >
        </div>
        <div class="input-box">
          <span class="details">Confirm Password</span>
          <input type="password" placeholder="Re-enter your password" required >
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" >
          <input type="radio" name="gender" id="dot-2" >
          <input type="radio" name="gender" id="dot-3" >

          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Other</span>
            </label>
          </div>
        </div>
      </div>
      <div class="button">
        <input type="submit" value="Register" >
      </div>
    </form>

  </div>

</body>
</html>

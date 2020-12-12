<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>

<body>
  <div class="container">
    <div class="main">
      <h2>Login Form</h2>
      <form id="form_id" method="post" name="myform">
        <label>User Name :</label>
        <input type="text" name="username" id="username" />
        <label>Password :</label>
        <input type="password" name="password" id="password" />
        <input type="button" value="Login" id="submit" onclick="validate()" />
      </form>
      <!-- <span><b class="note">Note : </b>For this demo use following username and password. <br /><b class="valid">User Name : username<br />Password : password</b></span> -->
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>
    // Below function Executes on click of login button.
    function validate() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (username == "student" && password == "studentpw") {
          //alert("Login successfully");
          window.location.href = "student.php";
          //window.location = "success.html"; // Redirecting to other page.
          //return false;
        } else {
          alert("Please input the correct Username and Password");
        }
      }
    // Below function Executes on click of login button.
    function validate() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if (username == "student" && password == "studentpw") {
          window.location.href = "student.php";
        } 
        else if(username == "admin" && password == "adminpw"){
          window.location.href = "admin.php";
        }
        else if(username == "lecturer" && password == "lecturerpw"){
          window.location.href = "lecturer.php";
        }
        else {
          alert("Please input the correct Username and Password");
        }
      }
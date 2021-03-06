<?php ?>

<div class="container-fluid">
    <br/>
  <script>
            function validateForm() {
                var frm = document.forms[0];
                var nameRegex = /^[A-Za-z ]{3,20}$/;
                var emailRegex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                var usernameRegex = /^[A-Za-z0-9_]{1,20}$/;
                var passwordRegex = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
                var fname = frm.fname.value;
                var lname = frm.lname.value;
                var email = frm.email.value;
                var username = frm.uname.value;
                var pword1 = frm.pword1.value;
                var pword2 = frm.pword2.value;
                if (!nameRegex.test(fname)) {
                    document.getElementById("errorregister").innerHTML = "Enter a valid First Name .";
                    return false;
                }
                if (!nameRegex.test(lname)) {
                    document.getElementById("errorregister").innerHTML = "Enter a valid Last Name .";
                    return false;
                }
                if (!emailRegex.test(email)) {
                    document.getElementById("errorregister").innerHTML = "Enter a valid email";
                    return false;
                }
                if (!usernameRegex.test(username)) {
                    document.getElementById("errorregister").innerHTML = "Enter a valid username";
                    return false;
                }
                if (!passwordRegex.test(pword1)) {
                    document.getElementById("errorregister").innerHTML = "Enter a valid password";
                    return false;
                }
                if (pword1 === pword2) {

                } else {
                    document.getElementById("errorregister").innerHTML = "The passwords do not match";
                    return false;
                }

            }
        </script>

  <br/><br/>
    <script>
        function validate() {
            if (document.getElementById("username").value.length < 3) {
                document.getElementById("errormessage").innerHTML = "Username can not be less than 3 characters long";
                return false;
            }
            if (document.getElementById("username").value.length > 30) {
                document.getElementById("errormessage").innerHTML = "Username can not be more than 30 characters long";
                return false;
            }
            var Regex = /^[A-Za-z0-9_]{3,20}$/;
            var PasswordRegex = /^[A-Za-z0-9!+@#$%^&*()_]{6,20}$/;
            if (!Regex.test(document.getElementById("username").value)) {
                document.getElementById("errormessage").innerHTML = "Username contains invalid characters";
                document.forms[0].username.focus();
                return false;
            }

            document.getElementById("errormessage").value = "";
        }
    </script>
    <div class="container-fluid">
        <br/>
        <br/><br/>
        <div class="row-fluid">
            <div class="col-md-4">

            </div>
            <div class="col-md-4" style="background-color:#ededed;border-radius: 10px" >
                <img src="img/logo.png" width="60%" height="60%"/><h1></h1>
                <div id="header"><h1 style="font-family: sans-serif">Incident Report Portal</h1></div>
                <br/><br/><br/>
                <p id="errormessage" class="<?php
                if ($_SESSION["successOrFailure"] === "true") {
                    echo 'text-success';
                }else {
                    echo 'text-danger';
                }
                ?>"><?php if($_SESSION["successOrFailure"]==="true"){
                    echo "Successfully registered kindly login with your details";
                }else{
                    echo $_SESSION["errorMsg"];
                }?></p>
                <form method="post" action="login.php" role="form" onsubmit="return validate();">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id ="username" type="text" class="form-control" placeholder="Enter Username" name="username" required maxlength="20">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" required maxlength="20"><br/>
                    </div>


                    <button class="btn btn-primary" type="submit">Log In</button>
                </form>
                <div>or <a href="register.php">register</a> for an account</div>
                <br/> <br/><br/><br/>

            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>

</div>

</body>
</html>

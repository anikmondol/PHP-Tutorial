<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/styes.css">
</head>

<body>
    <div>
        <form action="register_post.php" method="post">

            <div class="common_div">
                <h4>Name</h4>
                <div>
                    <input name="name" type="text" placeholder="Enter Name">
                </div>
                <!-- name error start -->
                <p style="color: red">
                    <?php

                    if (isset($_SESSION["name_error"])) {
                        echo $_SESSION["name_error"];
                    }
                    unset($_SESSION["name_error"]);

                    ?>
                </p>
                <!-- name error end -->
            </div>
            <div class="common_div">
                <h4>Email</h4>
                <div>
                    <input name="email" type="text" placeholder="Enter email">
                </div>
                <!-- email error start -->
                <p style="color: red">
                    <?php

                    if (isset($_SESSION["email_error"])) {
                        echo $_SESSION["email_error"];
                    }
                    unset($_SESSION["email_error"]);

                    ?>
                </p>
                <!-- email error end -->
            </div>
            <div class="common_div">
                <h4>Password</h4>
                <div class="password_div">
                    <input id="myInput" name="password" type="password" placeholder="Enter Password">
                    <br>
                    <input style="margin-top: 6px;" type="checkbox" onclick="myFunction()"> Show Password
                </div>
                 <!-- password error start -->
                 <p style="color: red">
                    <?php

                    if (isset($_SESSION["password_error"])) {
                        echo $_SESSION["password_error"];
                    }
                    unset($_SESSION["password_error"]);

                    ?>
                </p>
                <!-- password error end -->
            </div>
            <div class="common_div">
                <h4>Confirm Password</h4>
                <div>
                    <input name="c_password" type="password" placeholder="Confirm Password">
                     <!-- confirm_password error start -->
                 <p style="color: red; margin-top: 3px;">
                    <?php

                    if (isset($_SESSION["confirm_password_error"])) {
                        echo $_SESSION["confirm_password_error"];
                    }
                    unset($_SESSION["confirm_password_error"]);

                    ?>
                </p>
                <!-- confirm_password error end -->
                </div>
            </div>

            <div>
                <button name="submit" type="submit">submit</button>
            </div>

        </form>
    </div>
    <script>
        function myFunction(){
            var x = document.getElementById("myInput");
            if(x.type === "password"){
                x.type = "text";
            }else{
                x.type = "password"; 
            }
        }
    </script>
</body>


</html>
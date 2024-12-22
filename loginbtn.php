<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div style="display:flex;">
        <div class="nav-item" >
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Admin Login
            </button>
        </div>
    </div>
    <style>
        .modal-backdrop {
            /* backdrop-filter: blur(2px); */
        }
        .modal-dialog {
            position: absolute;
            top: 20%;
            right: 5%;
            transform: translate(-50%, -50%);
            margin: 0;
            z-index: 9999;
        }
    </style>
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="psw">Password</label>
                            <input type="password" class="form-control" id="psw" name="psw" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['psw'];
        $con=  mysqli_connect("localhost","root", "","evoting");
        $q="select * from admin where email='$email' and  password='$pass'";
        $result=mysqli_query($con,$q);
        if($row = mysqli_fetch_assoc($result))
        { 
            echo "signed in";
        }
        else 
        {
            echo"invalid aadhar or password";
        }
        mysqli_close($con);
    } 
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .justify-content-end {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    <div class="justify-content-end" >
        <div class="p-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Admin Login
            </button>
        </div>
        <?php include 'searchbox.php'; ?>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="email">Email</label>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uQbjeZj/4tMI4dnQqcqo5g7ZS7YmXN1x8mT/2Jy4u/4JU6hO+WV6k=" crossorigin="anonymous"></script>
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

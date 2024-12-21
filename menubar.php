<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .navbar-nav > li {
            position: relative;
            padding: 15px;
        }
        .dropdown-menu {
            position: absolute;
            display: none;
            background-color: white;
            border: 1px solid #ccc;
            z-index: 1000;
        }
        .nav-item:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default" >
        <div class="container-fluid">
            <div class="navbar-header" >
                <a class="navbar-brand" href="#">Voting System</a>
            </div>
            <ul class="nav navbar-nav" style="display: flex; flex-direction: row;justify-content: space-between,align-items: center">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Voter</a>
                            <ul class="dropdown-menu">
                                <li><a href="votersearchnm.php">By Voter Name</a></li>
                                <li><a href="votersearchaadh.php">By Aadhar Number</a></li>
                                <li><a href="votersearchid.php">By Voter Id</a></li>
                                <li><a href="votersearchmob.php">By Mobile No.</a></li>
                                <li><a href="votersearchemail.php">By Email ID</a></li>
                                <li><a href="#">By Address</a></li>
                            </ul>
                        </li>
                        <li><a href="voterentry.php">Register</a></li>
                        <li><a href="voterupdate.php">Update</a></li>
                        <li><a href="voterdelete.php">Delete</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Candidate <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Search</a>
                            <ul class="dropdown-menu">
                                <li><a href="candsearchnm.php">By Candidate Name</a></li>
                                <li><a href="candsearchid.php">By Candidate ID</a></li>
                                <li><a href="candsearchmob.php">By Candidate Mobile</a></li>
                                <li><a href="candsearchadd.php">By Address</a></li>
                                <li><a href="candsearchemail.php">By Email</a></li>
                            </ul>
                        </li>
                        <li><a href="candidateentry.php">Register</a></li>
                        <li><a href="candupdate.php">Update</a></li>
                        <li><a href="canddelete.php">Delete</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="voterlogin.php">Voter Login</a></li>
                        <li><a href="Candidatelogin.php">Candidate Login</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Voter</a>
                            <ul class="dropdown-menu">
                                <li><a href="votersearch.php">Search</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="votersearchnm.php">By Voter Name</a></li>
                                        <li><a href="votersearchaadh.php">By Aadhar Number</a></li>
                                        <li><a href="votersearchid.php">By Voter Id</a></li>
                                        <li><a href="votersearchmob.php">By Mobile No.</a></li>
                                        <li><a href="votersearchemail.php">By Email ID</a></li>
                                        <li><a href="#">By Address</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Candidate</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Search</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="candsearchnm.php">By Candidate Name</a></li>
                                        <li><a href="candsearchid.php">By Candidate ID</a></li>
                                        <li><a href="candsearchmob.php">By Candidate Mobile</a></li>
                                        <li><a href="candsearchadd.php">By Address</a></li>
                                        <li><a href="candsearchemail.php">By Email</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="Aboutus.php">About Us</a></li>
               <li> <?php include 'loginbtn.php'; ?></li>
            </ul>
        </div>
    </nav>
</body>
</html>
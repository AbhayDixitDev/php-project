<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .navbar-nav>div {
            margin-left: 10px;
            margin-right: 10px;
            width: 150px;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar " >
        <div class="container-fluid">
            <div class="navbar-nav" style="display: flex !important;flex-direction: row">
                <div class="nav-item active bold" style="background-color: white;text-align: center;align-content: center;color: black"><a href="index.php" style="color: black;text-decoration: none">Home</a></div>
                <div class="nav-item dropdown bold" style="margin-left: 10px;margin-right: 10px">
                    <select class="form-control" onchange="if (this.value) window.location.href=this.value;">
                        <option value="" style="background-color: white;text-align: center;align-content: center;font-weight: bold;"><h1>Admin</h1></option>
                        <option value="votersearchnm.php">Voter Search By Name</option>
                        <option value="votersearchaadh.php">Voter Search By Aadhar Number</option>
                        <option value="votersearchid.php">Voter Search By Voter Id</option>
                        <option value="votersearchmob.php">Voter Search By Mobile No.</option>
                        <option value="votersearchemail.php">Voter Search By Email ID</option>
                        <option value="#">Voter Search By Address</option>
                        <option value="voterentry.php">Register</option>
                        <option value="voterupdate.php">Update</option>
                        <option value="voterdelete.php">Delete</option>
                    </select>
                </div>
                <div class="nav-item dropdown bold" style="margin-left: 10px;margin-right: 10px;">
                    <select class="form-control" onchange="if (this.value) window.location.href=this.value;">
                        <option value="">Candidate</option>
                        <option value="candsearchnm.php">Candidate Search By Name</option>
                        <option value="candsearchid.php">Candidate Search By Candidate ID</option>
                        <option value="candsearchmob.php">Candidate Search By Candidate Mobile</option>
                        <option value="candsearchadd.php">Candidate Search By Address</option>
                        <option value="candsearchemail.php">Candidate Search By Email</option>
                        <option value="candidateentry.php">Register</option>
                        <option value="candupdate.php">Update</option>
                        <option value="canddelete.php">Delete</option>
                    </select>
                </div>
                <div class="nav-item dropdown bold" style="margin-left: 10px;margin-right: 10px;">
                    <select class="form-control" onchange="if (this.value) window.location.href=this.value;">
                        <option value="">Login</option>
                        <option value="voterlogin.php">Voter Login</option>
                        <option value="Candidatelogin.php">Candidate Login</option>
                    </select>
                </div>
                <div class="nav-item dropdown pull-right bold" style="margin-left: 10px;margin-right: 10px;">
                    <select class="form-control" onchange="if (this.value) window.location.href=this.value;">
                        <option value="">Voter Search</option>
                        <option value="votersearch.php">--By Name</option>
                        <option value="votersearchaadh.php">--By Aadhar Number</option>
                        <option value="votersearchid.php">--By Voter ID</option>
                        <option value="votersearchmob.php">--By Mobile No.</option>
                        <option value="votersearchemail.php">--By Email ID</option>
                    </select>
                </div>
                <div class="nav-item dropdown pull-right bold" style="margin-left: 10px;margin-right: 10px;">
                    <select class="form-control" onchange="if (this.value) window.location.href=this.value;">
                        <option value="">Candidate Search</option>
                        <option value="candsearchnm.php">--By Name</option>
                        <option value="candsearchid.php">--By Candidate ID</option>
                        <option value="candsearchmob.php">--By Mobile</option>
                        <option value="candsearchadd.php">--By Address</option>
                        <option value="candsearchemail.php">--By Email</option>
                    </select>
                </div>
                <div class="nav-item bold" style="background-color: white;text-align: center;align-content: center;"><a href="Aboutus.php" style="color: black;text-decoration: none">About Us</a></div>
                <div class="nav-item"><?php include 'loginbtn.php'; ?></div>
                
                
            </div>
        </div>
    </nav>
</body>
</html>

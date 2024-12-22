<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Multi-Level Drop Down Menu with Pure CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <script src="js/jquery-2.0.3.min.js" type="text/javascript" ></script>
        <script src="js/bootstrap.min.js" type="text/javascript" ></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >

<style>
    body {
        background-color: #212529;
        color: #fff;
    }

    .container-fluid {
        background-color: #343a40;
    }

    .navbar-brand {
        color: #fff;
    }

    .navbar-inverse .navbar-nav>li>a {
        color: #fff;
    }

    .navbar-inverse .navbar-nav>li>a:hover {
        color: #fff;
    }

    .navbar-inverse .navbar-nav>.active>a {
        color: #fff;
    }

    .navbar-inverse .navbar-nav>.active>a:hover {
        color: #fff;
    }

    .navbar-inverse .navbar-nav>.open>a {
        color: #fff;
    }

    .navbar-inverse .navbar-nav>.open>a:hover {
        color: #fff;
    }

    .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover {
        background-color: #212529;
    }

    .navbar-inverse .navbar-toggle {
        border-color: #fff;
    }

    .navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus {
        background-color: #343a40;
    }

    .navbar-inverse .navbar-toggle .icon-bar {
        background-color: #fff;
    }

    .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
        border-color: #fff;
    }

    .navbar-inverse .navbar-nav>.dropdown-menu {
        background-color: #343a40;
    }

    .navbar-inverse .navbar-nav>.dropdown-menu>li>a {
        color: #fff;
    }

    .navbar-inverse .navbar-nav>.dropdown-menu>li>a:hover {
        color: #fff;
    }

    .navbar-inverse .navbar-nav>.dropdown-menu>.active>a {
        color: #fff;
    }

    .navbar-inverse .navbar-nav>.dropdown-menu>.active>a:hover {
        color: #fff;
    }
</style>

<body>
    <div class="container-fluid" style="background-color:#343a40; ">
        <div class="row">
            <div class="col-md-4">
                <h1 style="font-family:algerian ; margin-left: 5px; font-size:30pt; color:#fff">E-Voting</h1>
            </div>
            <div class="col-md-8" style="text-align:right;">
                <img src="Images/fb1.png"  width="60px" alt="Facebook"/>
                <img src="Images/youtube.png"  width="60px" alt="Youtube"/>
                <img src="Images/linkedin.png"  width="60px" alt="LinkedIn"/>
            </div>
        </div>
    </div>
    <div style="background-color:#343a40;">
        <?php include 'menubar.php'; ?>     
    </div>
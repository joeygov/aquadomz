<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Aquadomz</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .navbar{
        margin-bottom: 1rem;
    }
</style>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#"><img src="https://i.pinimg.com/originals/9e/94/32/9e943235b13f41afb284b22b08c86fa4.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link " id="sales" href="#" >Sales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id ="operator" href="{{ url('/operator/list') }}" >Operators</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="customer" href="{{ url('/customer/list') }}" >Customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id ="products" href="{{ url('/product/list') }}">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id ="logs" href="#">Logs</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:strong">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Update Profile</a>
            <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>
        </ul>
    </div>
    </nav>
    <div id="profile_pic"class="row">
        <div class="col-sm">
            <img id="profile_image" src="https://cdn.iconscout.com/icon/free/png-256/avatar-372-456324.png" alt="Avatar">
        </div>
    </div>
</div>
</body>
<style>
.navbar-nav{
    padding-left:50%;
}
.nav-item{
    padding-left:50px;
    text-decoration:underline;
    
}
.nav-item:hover{
    color:red!important;
}

img{
    width:150px;
    height:100px
}
.nav-link{
    color:#ebe7df !important;
    font-size:24px;
}

#profile_image{
    border-radius: 50%;
}

#profile_pic{
    margin-bottom:2%;
}
a:active {
    color: black !important;
}
</style>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href=".././dist/styles.css">
    <link rel="stylesheet" href=".././dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Dashboard |  Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <meta charset='utf-8'>
    <script type='text/javascript' src='../vendors/jquery.min.js'></script>
                                <script type='text/javascript' src='../vendors/popper.min.js'></script>
                                <script type='text/javascript' src='../vendors/bootstrap.min.js'></script>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <script type='text/javascript' src='../vendors/jquery.min.js'></script>
                                <script type='text/javascript' src='../vendors/popper.min.js'></script>
                                <script type='text/javascript' src='../vendors/bootstrap.min.js'></script>
                                <script type='text/javascript' src='../vendors/jquery.min.js'></script>
                                <script type='text/javascript' src='../vendors/popper.min.js'></script>
                                <script type='text/javascript' src='../vendors/bootstrap.min.js'></script>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <style>
  .register {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 5%;
    margin-left:5%;
    margin-bottom:15%;
    margin-right:7%;

    padding: 3%;
}


.register-left {
    text-align: center;
    color: #fff;
    margin-top: 4%;
}

.register-left input {
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}

.register-right {
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}

.register-left img {
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite alternate;
    animation: mover 1s infinite alternate;
}

@-webkit-keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-20px);
    }
}

@keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-20px);
    }
}

.register-left p {
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}

.register .register-form {
    padding: 10%;
    margin-top: 10%;
}

.btnRegister {
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 90%;
    cursor: pointer;
}
.btnReg{
    margin-top: 10%;
    border: none;
    border-radius: 2.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 60%;
    cursor: pointer;
}
.register .nav-tabs {
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 48%;
    float: right;
}

.register .nav-tabs .nav-link {
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}

.register .nav-tabs .nav-link:hover {
    border: none;
}

.register .nav-tabs .nav-link.active {
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.nav-link.active {
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading {
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
table{
    width:70%;
}</style>
                            </head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">ViSites</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <a href="https://github.com/safa-abdi" class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Github</a>


                    <img onclick="" class="inline-block h-8 w-8 rounded-full" src="../photos/myim.jpg" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">Safa Abdi</a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->


            <!--/Sidebar-->
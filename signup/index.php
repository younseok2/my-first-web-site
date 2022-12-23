<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .row {
            margin: 10px;
        }

        .col-2 {
            border: 1px solid blue;
        }

        .col-10 {
            border: 1px solid red;
        }
    </style>

</head>

<body class="container">
    <!-- Header -->
    <ul class="nav justify-content-end">
        <?php
        if (isset($_SESSION['userld'])) {
            echo "{$_SESSION['userld']}님 환영합니다.";
        ?>
            <li class="nav-item d-flex align-items-center" onclick="logout()">로그아웃</li>
        <?php
        } else {
        ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="main_signup.php">회원가입</a>
            </li>

            <li>
                <a class="nav-link" href="main_login.php">로그인</a>
            </li>
        <?php
        }
        ?>
    </ul>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <form>
        <!-- SideNav -->
        <div class="row">
            <div class="col-2">
                <nav class="nav flex-column">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </nav>
            </div>
            <!-- Section -->
            <!-- Article -->
            <div class="col-10">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sint culpa quibusdam quasi.
                Unde accusamus eos vel consequuntur placeat fugit quidem, explicabo tempora tenetur, nobis omnis corporis, laborum pariatur enim.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sint culpa quibusdam quasi.
                Unde accusamus eos vel consequuntur placeat fugit quidem, explicabo tempora tenetur, nobis omnis corporis, laborum pariatur enim.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sint culpa quibusdam quasi.
                Unde accusamus eos vel consequuntur placeat fugit quidem, explicabo tempora tenetur, nobis omnis corporis, laborum pariatur enim.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sint culpa quibusdam quasi.
                Unde accusamus eos vel consequuntur placeat fugit quidem, explicabo tempora tenetur, nobis omnis corporis, laborum pariatur enim.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sint culpa quibusdam quasi.
                Unde accusamus eos vel consequuntur placeat fugit quidem, explicabo tempora tenetur, nobis omnis corporis, laborum pariatur enim.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sint culpa quibusdam quasi.
                Unde accusamus eos vel consequuntur placeat fugit quidem, explicabo tempora tenetur, nobis omnis corporis, laborum pariatur enim.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sint culpa quibusdam quasi.
                Unde accusamus eos vel consequuntur placeat fugit quidem, explicabo tempora tenetur, nobis omnis corporis, laborum pariatur enim.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sint culpa quibusdam quasi.
                Unde accusamus eos vel consequuntur placeat fugit quidem, explicabo tempora tenetur, nobis omnis corporis, laborum pariatur enim.

            </div>
        </div>
    </form>
    <!-- Footer -->
    <section class="">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: gray;">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Register for free</span>
                        <button type="button" class="btn btn-outline-light btn-rounded">
                            Sign up!
                        </button>
                    </p>
                </section>
                <!-- Section: CTA -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: gray;">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
    
    <!-- Logout -->
    <script>
        function logout() {
            console.log("hello");
            const data = confirm("로그아웃 하시겠습니까?");
            if (data) {
                location.href = "main_login.php";
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
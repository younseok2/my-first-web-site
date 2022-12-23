<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--bootstrap5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--Style-->
    <style>
        /* .contents {
            border: 1px solid black;
        }

        .col-sm-1 {
            border: 1px solid black;
        }

        .col-sm-2 {
            border: 1px solid black;
        }

        .col-sm-9 {
            border: 1px solid black;
        } */
    </style>
</head>

<body>
    <!--Header-->
    <div class="jumbotron text-center">
        <h1>Fist HomePage</h1>
        <p>Homepage by Bootstrap5</p>
    </div>
    <!-- Nav Bar 양쪽 정렬 -->
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
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
            </div>
        </div>
    </nav>
    <!--content-->
    <div class="contents" style="border-top: 1px solid black; padding-top: 10px">
        <div class="row">
            <!--side menu-->
            <!-- <div class="col-sm-1">
                <h4>Side Menu</h4>
                <ul class="list-group">
                    <li><a href="#">Link 1</a></li>
                   <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </div> -->
            <!--left content-->
            <div class="col-sm-2" style="border-right: 1px solid black;">
                <h3>Left side Content</h3>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action"><a href="#">Link 1</a></li>
                    <li class="list-group-item list-group-item-action"><a href="#">Link 2</a></li>
                    <li class="list-group-item list-group-item-action"><a href="#">Link 3</a></li>
                </ul>
            </div>

            <!--right content-->
            <div class="col-sm-10">
                <h2>Right side Content</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione explicabo totam aliquid impedit, vitae temporibus nostrum at quia sequi, beatae, possimus nobis. Soluta, provident repellendus fuga consectetur ad eveniet exercitationem?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum eveniet delectus maxime cumque, quidem omnis laborum nemo exercitationem commodi! Maxime aliquam sit fuga tempora illo eligendi vel? Vitae, temporibus consectetur!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non sint inventore, id ullam architecto incidunt numquam fugit quia rerum ipsum quae et esse commodi consectetur debitis nobis, doloribus explicabo est.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, asperiores magni. Sit, distinctio. Ut dignissimos quisquam repudiandae velit vel cumque suscipit, blanditiis id itaque optio iste quasi in explicabo dolore!</p>
            </div>
        </div>
    </div>
    <!--pagenation-->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </ul>
    </nav>
    <!--footer-->
    <div class="jumbotron text-center mt-5 mb-0" style="border-top: 1px solid black; padding-top: 30px">
        <h4 class="text-secondary">HOME PAGE</h4>
        <span class="text-primary">© 2020 Copyright</span>
    </div>
    <!--bootstrap5 CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>


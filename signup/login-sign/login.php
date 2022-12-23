<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .container{
            border : 1px solid red;
        }
    </style>
</head>

<body class="container">
    <form method="POST" action="loginProcess.php">
    <div class="w-50 ml-auto mr-auto mt-5">
        <div class="mb-3">
            <label for="exampleFormControllnput1" class="form-label">아이디</label>
            <input name="email" type="text" class="form-control" id="exampleFormContollnput1" placeholder="id">
        </div>
        <div class="mb-3">
            <label for="exampleFormControllnput1" class="form-lable">비밀번호</label>
            <input name="password" type="password" class="form-control" id="exampleFormControllnput1" placeholder="password">
        </div>

        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<?php
header('Content-Type: text/html; charset=UTF-8');

?>
<?php
    $conn = mysqli_connect("localhost", "root", "qwe123", "SIGNUP", 3306);
    //아이디 비교와 비밀번호 비교가 필요한 시점이다.
    // 1차로 DB에서 비밀번호를 가져온다
    // 평문의 비밀번호와 암호화된 비밀번호를 비교해서 검증한다.
    $email = $_POST['email'];
    $password = $_POST['password'];

    //DB 정보 가져오기
    $sql = "SELECT * FROM signup WHERE email = '{$email}'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
    $hashedPassword = $row['password'];
    $row['id'];

    foreach($row as $key => $r){
        echo "{$key} : {$r} <br>";
    }
    
    // echo $row['id'];
    // DB 정보를 가져왔으니 비밀번호 검증 로직을 실행.
    $passwordResult = password_verify($password, $hashedPassword);
    if ($passwordResult === true){
        //로그인 성공
        //세션에 id 저장
        session_start();
        $_SESSION['userld'] = $row['id'];
        print_r($_SESSION);
        echo $_SESSION['userld'];
    
?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "index.php";
    </script>

<?php
    }else {
        //로그인 실패
?>
        <script>
            alert("로그인에 실패하였습니다.");
            location.href = "main_login.php";
        </script>   
<?php
    }
?>
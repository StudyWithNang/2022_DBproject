<?php

$conn = mysqli_connect('localhost','root','111111','DBproject');
$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];

// DB 정보 가져오기 
$sql = "SELECT * FROM user WHERE userID ='{$userID}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
// $hashedPassword = $row['userPW'];
$userPW = $row['userPW'];
$row['userID'];

foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}


// $passwordResult = password_verify($userPassword, $hashedPassword);


if ($userPassword === $userPW) {

    session_start();
    $_SESSION['userID'] = $row['userID'];
    print_r($_SESSION);
    echo $_SESSION['userID'];
    
?>
    <script>
        alert("success")
        location.href = "index.html";
    </script>
<?php
} else {
    // fail
?>
    <script>
        alert("fail");
    </script>
<?php
}
?>

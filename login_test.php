ZZ<?php
$conn = mysqli_connect('localhost','root','111111','DBproject');

$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];


$sql = "SELECT * FROM user WHERE userID ='{$userID}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$hashedPassword = $row['userPW'];
// $userPW = $row['userPW'];
$row['userID'];

foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}

$passwordResult = password_verify($userPassword, $hashedPassword);
if ($passwordResult === true) {

    session_start();
    $_SESSION['userID'] = $row['userID'];
    print_r($_SESSION);
    echo $_SESSION['userID'];
    
?>
    <script>
        alert("success.")
        location.href = "index.html";
    </script>
<?php
} else {

?>
    <script>
        alert("fail");
        location.href = "login.html";
    </script>
<?php
}
?>

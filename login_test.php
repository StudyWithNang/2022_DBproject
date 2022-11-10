<?php
$conn = mysqli_connect('localhost','root','111111','keya');

$userID = $_POST['userID'];
$userPassword = $_POST['userPassword'];


$sql = "SELECT * FROM user WHERE id ='{$userID}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$hashedPassword = $row['pw'];
// $userPW = $row['userPW'];
$row['id'];

foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}

$passwordResult = password_verify($userPassword, $hashedPassword);
if ($passwordResult === true) {

    session_start();
    $_SESSION['id'] = $row['id'];
    print_r($_SESSION);
    echo $_SESSION['id'];

?>
    <script>
        alert("success.")
        location.href = "recent-news.php";
    </script>
<?php
} else {

?>
    <script>
        alert("fail");
        location.href = "main.html";
    </script>
<?php
}
?>

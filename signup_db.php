<?php
$conn = mysqli_connect('localhost','root','111111','DBproject');
$hashedPassword = password_hash($_POST['inputPassword'], PASSWORD_DEFAULT);
echo $hashedPassword;

if($conn->connect_error){
    ?>
    <script>
        alert("server connect");
        return;
    </script>
    <?php
}

$userId = $_POST['inputID'];
$userEMAIL = $_POST['inputEMAIL'];

$sql = "SELECT * FROM user WHERE userID ='{$userId}'";

echo $sql;

$result = $conn->query($sql);

if($result->num_rows > 0){
    ?>
        <script>
            alert("same ID.");
            location.href = "register.html";
        </script>
    <?php
}

$sql2 = "
    INSERT INTO user
    (userID, userPW, email)
    VALUES('{$userId}', '{$hashedPassword}', '{$userEMAIL}'
    )";

echo $sql2;

$result2 = mysqli_query($conn, $sql2);

if ($result == false) {
    echo "ask admin.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("succuess");
        location.href = "login.html";
    </script>
<?php
}
?>

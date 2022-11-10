<?php
$conn = mysqli_connect('localhost','root','111111','keya');
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

$key1 = $_POST['inputkey1'];
$key2 = $_POST['inputkey2'];
$key3 = $_POST['inputkey3'];
$key4 = $_POST['inputkey4'];
$key5 = $_POST['inputkey5'];
$key6 = $_POST['inputkey6'];


$sql = "SELECT * FROM user WHERE id ='{$userId}'";

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
    (id, pw, email, my_key1, my_key2, my_key3, my_key4, my_key5, my_key6)
    VALUES('{$userId}', '{$hashedPassword}', '{$userEMAIL}', '{$key1}', '{$key2}', '{$key3}', '{$key4}', '{$key5}', '{$key6}'
    )";

echo $sql2;

// $result2 = mysqli_query($conn, $sql2);
$result = $conn->query($sql2);

if ($result == false) {
    echo "ask admin.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("succuess");
        location.href = "main.html";
    </script>
<?php
}
?>

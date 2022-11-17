<?php
$conn = mysqli_connect('localhost','root','111111','keya');

if($conn->connect_error){
    ?>
    <script>
        alert("server connect");
        return;
    </script>
    <?php
}
$chat = $_POST['chat'];


// $sql = "INSERT INTO diary (chat) VALUES('{$chat}')";

$sql = "
    INSERT INTO diary
    (scrap_id, id, news_id, chat)
    VALUES('22222', 'aheun', '2022_11_13_22_15_section_society', '{$chat}'
    )";

echo $sql;

$result = $conn->query($sql);

if ($result) {
?>
    <script>
        alert("<?php echo "글이 등록되었습니다."?>");
        
    </script>
<?php
} 
else {
    echo "FAIL";
}
?>
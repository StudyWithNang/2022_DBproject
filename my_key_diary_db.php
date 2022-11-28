<!DOCTYPE html>
<?php
        session_start();
        //echo $_SESSION['id'];
        $prevPage = $_SERVER['HTTP_REFERER'];
?>
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
$mini = $_SESSION['id'];
$news_id = $_POST['news_id'];
$scrap_id = $mini."_".$news_id;

//echo $mini;
//echo $news_id;
// $sql = "INSERT INTO diary (chat) VALUES('{$chat}')";

$sql = "
    INSERT INTO diary
    (scrap_id, id, news_id, chat)
    VALUES('$scrap_id', '$mini', '$news_id', '$chat'
    )";

//echo $sql;



$result = $conn->query($sql);

if ($result) {
?>
    <script>
        alert("<?php echo "글이 등록되었습니다."?>");
        history.back();
    </script>

<?php
} 
else {
    ?>
    <script>
        alert("<?php echo "등록되지 않았습니다."?>");
        history.back();
    </script>
    <?php
}
?>

</html>

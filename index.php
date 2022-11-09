<?php session_start();
if(!isset($_SESSION['id'])) {
	?>
	<script>
		location.href="login.html";
	</script>
<?php
            } else {
?>
        <script>
                location.href="main.html";
        </script>
<?php
	    }
?>

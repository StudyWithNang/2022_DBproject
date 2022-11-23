<!DOCTYPE html>
<?php
        session_start();
        echo $_SESSION['id'];
?>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<style>

	@import url('https://fonts.googleapis.com/css?family=Abel');

	html, body {
	  background: #FCEEB5;
	  font-family: Abel, Arial, Verdana, sans-serif;
	}

	.center {
	  position: absolute;
	  top: 30%;
	  left: 50%;
	  -webkit-transform: translate(-50%, -50%);
	}

	.card {
	  width: 450px;
	  height: 250px;
	  background-color: #fff;
	  background: linear-gradient(#f8f8f8, #fff);
	  box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
	  border-radius: 6px;
	  overflow: hidden;
	  position: relative;
	  margin: 1.5rem;
	}

	.card h1 {
	  text-align: center;
	}

	.card .additional {
	  position: absolute;
	  width: 150px;
	  height: 100%;
	  background: linear-gradient(#dE685E, #EE786E);
	  transition: width 0.4s;
	  overflow: hidden;
	  z-index: 2;
	}

	.card.green .additional {
	  background: linear-gradient(#92bCa6, #A2CCB6);
	}


	.card:hover .additional {
	  width: 100%;
	  border-radius: 0 5px 5px 0;
	}

	.card .additional .user-card {
	  width: 150px;
	  height: 100%;
	  position: relative;
	  float: left;
	}

	.card .additional .user-card::after {
	  content: "";
	  display: block;
	  position: absolute;
	  top: 10%;
	  right: -2px;
	  height: 80%;
	  border-left: 2px solid rgba(0,0,0,0.025);*/
	}

	.card .additional .user-card .level,
	.card .additional .user-card .points {
	  top: 15%;
	  color: #fff;
	  text-transform: uppercase;
	  font-size: 0.75em;
	  font-weight: bold;
	  background: rgba(0,0,0,0.15);
	  padding: 0.125rem 0.75rem;
	  border-radius: 100px;
	  white-space: nowrap;
	}

	.card .additional .user-card .points {
	  top: 85%;
	}

	.card .additional .user-card svg {
	  top: 50%;
	}

	.card .additional .more-info {
	  width: 300px;
	  float: left;
	  position: absolute;
	  left: 150px;
	  height: 100%;
	}

	.card .additional .more-info h1 {
	  color: #fff;
	  margin-bottom: 0;
	}

	.card.green .additional .more-info h1 {
	  color: #224C36;
	}

	.card .additional .coords {
	  margin: 0 1rem;
	  color: #fff;
	  font-size: 1rem;
	}

	.card.green .additional .coords {
	  color: #325C46;
	}

	.card .additional .coords span + span {
	  float: right;
	}

	.card .additional .stats {
	  font-size: 2rem;
	  display: flex;
	  position: absolute;
	  bottom: 1rem;
	  left: 1rem;
	  right: 1rem;
	  top: auto;
	  color: #fff;
	}

	.card.green .additional .stats {
	  color: #325C46;
	}

	.card .additional .stats > div {
	  flex: 1;
	  text-align: center;
	}

	.card .additional .stats i {
	  display: block;
	}

	.card .additional .stats div.title {
	  font-size: 0.75rem;
	  font-weight: bold;
	  text-transform: uppercase;
	}

	.card .additional .stats div.value {
	  font-size: 1.5rem;
	  font-weight: bold;
	  line-height: 1.5rem;
	}

	.card .additional .stats div.value.infinity {
	  font-size: 2.5rem;
	}

	.card .general {
	  width: 300px;
	  height: 100%;
	  position: absolute;
	  top: 0;
	  right: 0;
	  z-index: 1;
	  box-sizing: border-box;
	  padding: 1rem;
	  padding-top: 0;
	}

	.card .general .more {
	  position: absolute;
	  bottom: 1rem;
	  right: 1rem;
	  font-size: 0.9em;
	}


*{
  line-height:1.3;
}
ul{list-style:none;}
.tabmenu{ 
  max-width:600px; 
  margin: 0 auto; 
  position:relative; 
}
.tabmenu ul{
  position: relative;
}
.tabmenu ul li{
  display:  inline-block;
  width:33.33%; 
  float:left;  
  text-align:center; 
  background :#f9f9f9;
  line-height:40px;
}
.tabmenu label{
  display:block;
  width:100%; 
  height:40px;
  line-height:40px;
}
.tabmenu input{display:none;}
.tabCon{
  display:none; 
  width: 100%;
  text-align:left; 
  padding: 20px;
  position:absolute; 
  left:0; top:40px; 
  box-sizing: border-box; 
  border : 5px solid #f9f9f9;
}
.tabmenu input:checked ~ label{
  background:#ccc;
}
.tabmenu input:checked ~ .tabCon{
  display:block;
}

.img_news img{
	width: 80px;
	-webkit-transform: translate(45%, 100%);
}
	</style>
</head>

<body>
<div class="center">
  <div class="logo" style="text-align: center">
    <a href="recent-news.php"><img src="images/logo.png" width=150px alt=""></a>
  </div><!-- end logo -->

  <div class="card green">
    <div class="additional">
      <div class="user-card">
        <div class="level center">
          PRESS
        </div>
		<div class="img_news">
			<img src="./images/img_news.png"/>
		</div>
      </div>

      <?php $pname = $_GET[press]; $categ = $_GET[c]; 
		$mysql_host = 'localhost';
        $mysql_user = 'root';
        $mysql_password = '111111';
        $mysql_db = 'keya';

		$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
		if(mysqli_connect_error($con)) {
			echo "mysql connect fail!!"."<br>";
			echo mysqli_connect_error();
			exit(); }
		
		$press = mysqli_query($con, "select * from press where press_id='$pname'");
		$prow = mysqli_fetch_row($press);

		$editor = mysqli_query($con, "select count(editor_id) from editor where press_id='$pname'");
		$erow = mysqli_fetch_row($editor);

	  ?>
	

      <div class="more-info">
        <h1><?php echo $pname; ?></h1>
        <div class="coords">
          <span>Group Name</span>
          <span><?php echo $pname; ?></span>
        </div>
        <div class="coords">
          <span>Category</span>
          <span><?php echo $categ; ?></span>
        </div>
        <div class="stats">
          <div>
            <div class="title">Reporters</div>
            <i class="fa fa-trophy"></i>
            <div class="value"><?php echo $erow[0]; ?></div>
          </div>
          <div>
            <div class="title">Articles</div>
            <i class="fa fa-gamepad"></i>
            <div class="value"><?php echo $prow[1]; ?></div>
          </div>
          <div>
            <div class="title">Goods</div>
            <i class="fa fa-group"></i>
            <div class="value"><?php echo $prow[2]; ?></div>
          </div>
          <div>
            <div class="title"></div>
            <i class="fa fa-coffee"></i>
            <div class="value infinity">♥</div>
          </div>
        </div>
      </div>
    </div>
    <div class="general">
      <h1><?php echo $pname; ?></h1>
      <p>설명을 뭘 넣어야 할까?</p>
      <span class="more">Mouse over the card for more info</span>
    </div>
  </div>


<div class="tabmenu out-tabmenu">
  <ul>
    <li id="tab1" class="btnCon"> 
      <input type="radio" checked name="tabmenu" id="tabmenu1">
      <label for="tabmenu1">Article</label>
      <div class="tabCon" >
	<?php
	        $articles = mysqli_query($con, "select title from raw_news where press_id='$pname'");

		$i = 0;
		while ($i<5) {
			echo "- ".mysqli_fetch_assoc($articles)['title']."<br>";
			echo "<br>";
			$i++;
		}
	?>
      </div>
    </li>

    <li id="tab2" class="btnCon"><input type="radio" name="tabmenu" id="tabmenu2">
      <label for="tabmenu2">Reporter</label>
      <div class="tabCon" >
	<?php
                $reporters = mysqli_query($con, "select editor_id from editor where press_id='$pname'");

                $i = 0;
                while ($i<5) {
                        echo "- ".mysqli_fetch_assoc($reporters)['editor_id']."<br>";
                        echo "<br>";
                        $i++;
                }
        ?>

      </div>
    </li>

    <li id="tab3" class="btnCon"><input type="radio" name="tabmenu" id="tabmenu3">
      <label for="tabmenu3">Etc</label>
      <div class="tabCon" >
	<p> wow </p>
      </div>
    </li>

  </ul>
</div>

</body>
</html>

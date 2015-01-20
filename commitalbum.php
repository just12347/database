<!-- 設定網頁編碼為UTF-8 -->
<!DOCTYPE html>

<html lang="en">
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	</head>	
	
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">Index</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li >
							<a href="sec.php">Sec</a>
						</li>
						<li >
							<a href="guide.php">Guide</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ranking<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="Ranking-chi.php">國語</a>
								</li>
								<li>
									<a href="Ranking-tai.php">台語</a>
								</li>
								<li>
									<a href="Ranking-kor.php">韓語</a>
								</li>
								<li>
									<a href="Ranking.php">English</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="search" action="search.php">
						<div class="form-group">
							<input type="text" class="form-control" />
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-left">
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Style<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="express.php">抒情</a>
								</li>
								<li>
									<a href="rock.php">搖滾</a>
								</li>
								<li>
									<a href="rnb.php">R&B</a>
								</li>
								<li>
									<a href="brainwash.php">洗腦</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Update<strong class="caret"></strong></a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="insertsong.php">歌曲</a>
                                                            </li>
                                                            <li>
                                                                <a href="insertsinger.php">歌手</a>
                                                            </li>
                                                            <li>
                                                                <a href="insertcomposer.php">作曲人</a>
                                                            </li>
                                                            <li>
                                                                <a href="insertlyricist.php">作詞人</a>
                                                            </li>
                                                            <li>
                                                                <a href="insertalbum.php">專輯</a>
                                                            </li>
                                                            <li>
                                                                <a href="insertstyle.php">風格</a>
                                                            </li>
                                                            <li>
                                                                <a href="insertcompany.php">公司</a>
                                                            </li>
                                                        </ul>
                                                </li>
					</ul>
				</div>
				
			</nav>
		<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				hello
			</h3>
                        <?php
                        include("mysql_connect.inc.php");

                        $M_name = @$_POST['M_name'];
                        $singer = @$_POST['singer'];
                        $S_name = @$_POST['S_name'];
                        $S_country = @$_POST['S_country'];
                        $company = @$_POST['company'];
                        $C_name = @$_POST['C_name'];
                        $C_country = @$_POST['C_country'];
                        $lyricist = @$_POST['lyricist'];
                        $L_name = @$_POST['L_name'];
                        $L_country = @$_POST['L_country'];
                        $composer = @$_POST['composer'];
                        $date = @$_POST['date'];
                        $Cr_name = @$_POST['Cr_name'];
                        $Cr_country = @$_POST['Cr_country'];
                        $style = @$_POST['style'];
                        $length = @$_POST['length'];

                        if($company == 0){
                                $str="SELECT 公司ID, 公司名稱 FROM 公司 ";
                                $list = mysql_query($str);
                                $n = mysql_num_rows($list);
                                $n = $n + 1;
                                $sql = "insert into 公司 (公司ID, 公司名稱, 國籍) values ('$n', '$C_name', '$C_country')";
                                if(!mysql_query($sql))
                                {
                                        echo '新增公司失敗!<br>';
                                }
                        }
                        if($singer == 0){
                                $str="SELECT 演唱者ID FROM 歌手或團體 ";
                                $list = mysql_query($str);
                                $n = mysql_num_rows($list);
                                $n = $n + 1;
                                $sql = "insert into 歌手或團體 (演唱者ID, 名稱, 國籍, 公司ID) values ('$n', '$S_name', '$S_country', '$company')";
                                if(!mysql_query($sql))
                                {
                                        echo '新增歌手失敗!<br>';
                                }
                        }
                        if($lyricist == 0){
                                $str="SELECT 作詞人ID FROM 作詞人 ";
                                $list = mysql_query($str);
                                $n = mysql_num_rows($list);
                                $n = $n + 1;
                                $sql = "insert into 作詞人 (作詞人ID, 名稱, 國籍) values ('$n', '$L_name', '$L_country')";
                                if(!mysql_query($sql))
                                {
                                        echo '新增作詞人失敗!<br>';
                                }
                        }
                        if($composer == 0){
                                $str="SELECT 作曲人ID FROM 作曲人 ";
                                $list = mysql_query($str);
                                $n = mysql_num_rows($list);
                                $n = $n + 1;
                                $sql = "insert into 作曲人 (作曲人ID, 名稱, 國籍) values ('$n', '$S_name', '$S_country')";
                                if(!mysql_query($sql))
                                {
                                        echo '新增作曲人失敗!<br>';
                                }
                        }

                        if($M_name != null && $date != null && $length != null)
                        {
                                //新增資料進資料庫語法
                                $str="SELECT 歌曲ID FROM 歌曲 ";
                                $list = mysql_query($str);
                                $n = mysql_num_rows($list);
                                $n = $n + 1;
                                $sql = "insert into 歌曲 (歌曲ID, 歌名, 演唱者ID, 作詞人ID, 作曲人ID, 風格ID, 發行時間, 歌曲長度) values ('$n', '$M_name', '$singer', '$lyricist', '$composer', '$style', '$date', '$length')";
                                if(mysql_query($sql))
                                {
                                        echo '<h3>Insertion success!</h3>';
                                        $sql = "insert into 作曲 (作曲人ID, 歌曲ID) values ('$composer', '$n')";
                                        if(!mysql_query($sql)){
                                                echo '新增作曲失敗!<br>';
                                        }
                                        $sql = "insert into 作詞 (作詞人ID, 歌曲ID) values ('$lyricist', '$n')";
                                        if(!mysql_query($sql)){
                                                echo '新增作詞失敗!<br>';
                                        }
                                        $sql = "insert into 演唱 (歌ID, 演唱者ID) values ('$n', '$singer')";
                                        if(!mysql_query($sql)){
                                                echo '新增演唱失敗!<br>';
                                        }
                                }
                                else
                                {
                                        echo '新增歌曲失敗!<br>';
                                }
                        }
                        else
                        {
                                echo '主要資料(歌名, 發行時間, 長度) 不可為空!<br>';
                        }
                        ?>
			<a href="index.php" class="btn" type="button">Back to Index</a>
			<a href="update.php" class="btn" type="button">Continue Insertion</a>
			</div>
		</div>


			
		
	
	


</div>



		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!-- 設定網頁編碼為UTF-8 -->
<!DOCTYPE html>

<html lang="en">
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>	
<body>
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
					<form class="navbar-form navbar-right" role="search" method="POST" action="search.php">
						<div class="form-group">
							<input type="text" class="form-control" name="search"/>
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Insert<strong class="caret"></strong></a>
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
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Update<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="updatesong.php">歌曲</a>
								</li>
								<li>
									<a href="updatesinger.php">歌手</a>
								</li>
								<li>
									<a href="updatecomposer.php">作曲人</a>
								</li>
								<li>
									<a href="updatelyricist.php">作詞人</a>
								</li>
								<li>
									<a href="updatealbum.php">專輯</a>
								</li>
								<li>
									<a href="updatestyle.php">風格</a>
								</li>
								<li>
									<a href="updatecompany.php">公司</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Delete<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="deletesong.php">歌曲</a>
								</li>
								<li>
									<a href="deletesinger.php">歌手</a>
								</li>
								<li>
									<a href="deletecomposer.php">作曲人</a>
								</li>
								<li>
									<a href="deletelyricist.php">作詞人</a>
								</li>
								<li>
									<a href="deletealbum.php">專輯</a>
								</li>
								<li>
									<a href="deletestyle.php">風格</a>
								</li>
								<li>
									<a href="deletecompany.php">公司</a>
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
				</div>
			</div>

            <?php
            include("mysql_connect.inc.php");
            $company = @$_POST['company'];
          
            $C_name = @$_POST['C_name'];
            $C_country = @$_POST['C_country'];
            if($company!=0)
            {
            $sql = "update 公司 set  公司名 = '$C_name', 國籍 = $C_country where 公司ID=$company";
            if(mysql_query($sql)){
                echo '<h3>Update Success!</h3>';
            }else{
            	echo '修改公司失敗!<br>';
            }
        	}
        	else
        	{
        		
        		echo  '<h3>Please choose what company to update!!</h3><br>';

        	}
            ?>
			<a href="index.php" class="btn" type="button">Back to Index</a>
			<a href="updatecompany.php" class="btn" type="button">Continue Update</a>
			</div>
		</div>
</div>
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>
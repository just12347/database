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
						<li>
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
					<form class="navbar-form navbar-right" role="search">
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
						<li>
							<a href="#">Update</a>
						</li>
					</ul>
				</div>
				
			</nav>
			
		</div>
	</div>
	<div class="row clearfix">
		<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				hello
			</h3>
			</div>
		<div class="col-md-12 column">
			<h3>
				國語 top rank
			</h3>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							Rank
						</th>
						<th>
							Music name
						</th>
						<th>
							Singer
						</th>
						<th>
							Style
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include("mysql_connect.inc.php");
				    $str="SELECT R.排名, M.歌名, S.名稱, ST.名稱  FROM 國語排行榜 AS R, 歌曲 AS M, 歌手或團體 AS S, 風格 AS ST WHERE R.歌曲ID = M.歌曲ID AND M.演唱者ID = S.演唱者ID AND M.風格ID = ST.風格ID";
				    $list =mysql_query($str);
				    while($va = mysql_fetch_row($list))
				    {
				    	echo    '<tr><td>';
						echo 	$va[0];
						echo    '</td><td>';
						echo	$va[1];
						echo    '</td><td>';
						echo	$va[2];
						echo    '</td><td>';
						echo    $va[3];
						echo	'</td></tr>';
				    }
					?>
				</tbody>
			</table>
		</div>

	</div>
</div>

</div>



		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>
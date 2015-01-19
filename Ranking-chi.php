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
							<a href="Ranking.php">Ranking</a>
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
									<a href="#">抒情</a>
								</li>
								<li>
									<a href="#">搖滾</a>
								</li>
								<li>
									<a href="#">R&B</a>
								</li>
								<li>
									<a href="#">洗腦</a>
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
				國語 top10
			</h3>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Product
						</th>
						<th>
							Payment Taken
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
					for($i=0;$i<5;$i++)
					{

					echo    '<tr><td>';
					echo 	$i+1;		
					echo    '</td><td>';
					echo	'TB - Monthly';
					echo    '</td><td>';
					echo	'01/04/2012';
					echo    '</td><td>';
					echo    'Default';
					echo	'</td></tr>';
					} ?>
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
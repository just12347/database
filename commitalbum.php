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
                        <?php
                        include("mysql_connect.inc.php");

                        $A_name = @$_POST['A_name'];
                        $A_date = @$_POST['A_date'];
                        $A_sale = @$_POST['A_sale'];
                        $singer = @$_POST['singer'];
                        $S_name = @$_POST['S_name'];
                        $S_country = @$_POST['S_country'];
                        $company = @$_POST['company'];
                        $C_name = @$_POST['C_name'];
                        $C_country = @$_POST['C_country'];
                        $err = '請輸入 ';
                        $chk = 0;
                         if($company==0 && $C_name!=null){
                                $str="SELECT 公司ID, 公司名稱 FROM 公司 ";
                                $list = mysql_query($str);
                                $n = mysql_num_rows($list);
                                $n = $n + 1;
                                $company =$n;
                                $sql = "insert into 公司 (公司ID, 公司名稱, 國籍) values ('$n', '$C_name', '$C_country')";
                                if(!mysql_query($sql))
                                {
                                        echo '新增公司失敗!<br>';
                                }   
                        }
                        elseif($company==0 && $singer==0)
                        {
                            $chk=1;
                            $err=$err.'公司名稱 ';
                        }
                        if($singer == 0 && $S_name!=null){
                                $str="SELECT 演唱者ID FROM 歌手或團體 ";
                                $list = mysql_query($str);
                                $n = mysql_num_rows($list);
                                $n = $n + 1;
                                $singer = $n;
                                $sql = "insert into 歌手或團體 (演唱者ID, 名稱, 國籍, 公司ID) values ('$n', '$S_name', '$S_country', '$company')";
                                if(!mysql_query($sql))
                                {
                                        echo '新增歌手失敗!<br>';
                                }
                        }
                        elseif($singer==0)
                        {

                            $chk=1;
                            $err=$err.'歌手名稱 ';
                        }
                        if($A_name != null && $A_date != null && $A_sale != null && $chk==0)
                        {
                                //新增資料進資料庫語法
                                $str="SELECT 專輯ID FROM 專輯 ";
                                $list = mysql_query($str);
                                $n = mysql_num_rows($list);
                                $n = $n + 1;
                                $sql = "insert into 專輯 (專輯ID, 專輯名稱, 發行時間, 銷售量) values ('$n', '$A_name', '$A_date', '$A_sale')";
                                if(mysql_query($sql))
                                {
                                        echo '<h3>Insertion success!</h3>';
                                        $sql = "insert into 專輯歌手 (專輯ID, 歌手ID) values ('$n', '$singer')";
                                        if(!mysql_query($sql)){
                                                echo '新增專輯歌手失敗!<br>';
                                        }
                                }
                                else
                                {
                                        echo '新增專輯失敗!<br>';
                                }
                        }
                        else
                        {
                                $chk=1;
                                $err=$err."專輯資訊";
                        }
                        if($chk==1)
                        {
                            echo "<h3>Insertion Fail</h3><br>";
                            echo $err."<br>";
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

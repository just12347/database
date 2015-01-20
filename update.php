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
                                            <li>
                                                <a href="update.php">Update</a>
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
            <div class="row clearfix">
                <div class="col-md-6 column">
                    <form role="form" action="success.php">
                        <h3>
                        Song Insertion
                        </h3>

                        <div class="form-group">
                            <label for="exampleInputSong">Song Name</label><input type="song" class="form-control" id="exampleInputSong" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputSinger">Singer</label><input type="singer" class="form-control" id="exampleInputSinger" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputlyric">Lyricist</label><input type="lyricist" class="form-control" id="exampleInputlyric" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputcomposer">Composer</label><input type="composer" class="form-control" id="exampleInputcomposer" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputstyle">Style</label><input type="style" class="form-control" id="exampleInputstyle" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpublish">Publish Date</label><input type="date" class="form-control" id="exampleInputpublish" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputlength">Song Length</label><input type="length" class="form-control" id="exampleInputlength " />
                        </div>
                        <label for="gender1">Gender</label>
                        <select class="form-control" id="gender1">
                        <option>Male</option>
                        <option>Female</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-default">Submit</button>
                        <br>
                        </form>

                </div>
                <div class="col-md-6 column">
                </div>
            </div>
        </div>

                        
                
        
        


</div>



                <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/bootstrap-select.js"></script> 
</body>
</html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$M_name = $_POST['M_name'];
$singer = $_POST['singer'];
$S_name = $_POST['S_name'];
$S_country = $_POST['S_country'];
$company = $_POST['company'];
$C_name = $_POST['C_name'];
$C_country = $_POST['C_country'];
$lyricist = $_POST['lyricist'];
$L_name = $_POST['L_name'];
$L_country = $_POST['L_country'];
$composer = $_POST['composer'];
$Cr_name = $_POST['Cr_name'];
$Cr_country = $_POST['Cr_country'];
$style = $_POST['style'];
$date = $_POST['date'];
$length = $_POST['length'];

if($company == 0){
        $str="SELECT 公司ID, 公司名稱 FROM 公司 ";
        $list = mysql_query($str);
        $n = mysql_num_rows($list);
        $n = $n + 1;
        $sql = "insert into 公司 (公司ID, 公司名稱, 國籍) values ('$n', '$C_name', '$C_country')";
        if(mysql_query($sql))
        {
                echo '新增公司成功!';
                $company = $n;
        }
        else
        {
                echo '新增公司失敗!';
        }
}
if($singer == 0){
        $str="SELECT 演唱者ID FROM 歌手或團體 ";
        $list = mysql_query($str);
        $n = mysql_num_rows($list);
        $n = $n + 1;
        $sql = "insert into 歌手或團體 (演唱者ID, 名稱, 國籍, 公司ID) values ('$n', '$S_name', '$S_country', '$company')";
        if(mysql_query($sql))
        {
                echo '新增歌手成功!';
                $singer = $n;
        }
        else
        {
                echo '新增歌手失敗!';
        }
}
if($lyricist == 0){
        $str="SELECT 作詞人ID FROM 作詞人 ";
        $list = mysql_query($str);
        $n = mysql_num_rows($list);
        $n = $n + 1;
        $sql = "insert into 作詞人 (作詞人ID, 名稱, 國籍) values ('$n', '$L_name', '$L_country')";
        if(mysql_query($sql))
        {
                echo '新增作詞人成功!';
                $lyricist = $n;
        }
        else
        {
                echo '新增作詞人失敗!';
        }
}
if($composer == 0){
        $str="SELECT 作曲人ID FROM 作曲人 ";
        $list = mysql_query($str);
        $n = mysql_num_rows($list);
        $n = $n + 1;
        $sql = "insert into 作曲人 (作曲人ID, 名稱, 國籍) values ('$n', '$S_name', '$S_country')";
        if(mysql_query($sql))
        {
                echo '新增作曲人成功!';
                $composer = $n;
        }
        else
        {
                echo '新增作曲人失敗!';
        }
}



//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($M_name != null && $date != null && $length != null)
{
        //新增資料進資料庫語法
        $str="SELECT 歌曲ID FROM 歌曲 ";
        $list = mysql_query($str);
        $n = mysql_num_rows($list);
        $n = $n + 1;
        $sql = "insert into 歌曲 (歌曲ID, 名稱, 演唱者ID, 作詞人ID, 作曲人ID, 風格ID, 發行時間, 歌曲長度) values ('$n', '$M_name', '$singer', '$lyricist', '$composer', '$style', '$date', '$length')";
        if(mysql_query($sql))
        {
                echo '新增歌曲成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=update.php>';
        }
        else
        {
                echo '新增歌曲失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=update.php>';
        }
}
else
{
        echo '主要資料(歌名, 發行時間, 長度) 不可為空!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=update.php>';
}
?>
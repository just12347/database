<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$M_name = $_POST['M_name'];
$company = $_POST['company'];
$C_name = $_POST['C_name'];
$C_country = $_POST['C_country'];
$singer = $_POST['singer'];
$S_name = $_POST['S_name'];
$S_country = $_POST['S_country'];
$lyricist = $_POST['lyricist'];
$L_name = $_POST['L_name'];
$L_country = $_POST['L_country'];
$composer = $_POST['composer'];
$Cr_name = $_POST['Cr_name'];
$Cr_country = $_POST['Cr_country'];
$date = $_POST['date'];
$length = $_POST['length'];

if(){
        pp
}



//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        //新增資料進資料庫語法
        $sql = "insert into member_table (username, password, telephone, address, other) values ('$id', '$pw', '$telephone', '$address', '$other')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
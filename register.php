<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="register_finish.php">
歌名：<input type="text" name="M_name" /> <br>
歌手： <select name="singer">
<?php
include("mysql_connect.inc.php");
$str="SELECT 演唱者ID, 名稱 FROM 歌手或團體 ";
$list =mysql_query($str);
echo "<option value=0>新歌手</option>\n";
while($va = mysql_fetch_row($list))
{
	echo "<option value=$va[0]>$va[1]</option>\n";
}
?>
</select>
名字：<input type="text" name="S_name" />
國籍：<input type="text" name="S_country" />
公司： <select name="company">
<?php
$str="SELECT 公司ID, 公司名稱 FROM 公司 ";
$list =mysql_query($str);
echo "<option value=0>新公司</option>\n";
while($va = mysql_fetch_row($list))
{
	echo "<option value=$va[0]>$va[1]</option>\n";
}
?>
</select>

名字：<input type="text" name="C_name" />
國籍：<input type="text" name="C_country" />

<br>
作詞： <select name="lyricist">
<?php
$str="SELECT 作詞人ID, 名稱 FROM 作詞人";
$list =mysql_query($str);
echo "<option value=0>新作詞人</option>\n";
while($va = mysql_fetch_row($list))
{
echo "<option value=$va[0]>$va[1]</option>\n";
}
?>
</select>
名字：<input type="text" name="L_name" />
國籍：<input type="text" name="L_country" />
<br>
作曲： <select name="composer">
<?php
$str="SELECT 作曲人ID, 名稱 FROM 作曲人 ";
$list =mysql_query($str);
echo "<option value=0>新作曲人</option>\n";
while($va = mysql_fetch_row($list))
{
echo "<option value=$va[0]>$va[1]</option>\n";
}
?>
</select>
名字：<input type="text" name="Cr_name" />
國籍：<input type="text" name="Cr_country" />
<br>
風格： <select name="style">
<?php
$str="SELECT 風格ID, 名稱 FROM 風格 ";
$list =mysql_query($str);
echo "<option value=0>請選擇</option>\n";
while($va = mysql_fetch_row($list))
{
echo "<option value=$va[0]>$va[1]</option>\n";
}
?>
</select>
<br>
發行時間：<input type="text" name="date" /> <br>
歌曲長度：<input type="text" name="length" /> <br>
<input type="submit" name="button" value="確定" />
</form>
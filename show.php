<?php
$problem_id=$_GET["pid"];
$cover="./problems/" . $problem_id . "/cover.html";//导入封面的html
if(!is_file($cover)){
    exit("Error: Wrong problem id.");
}
$cover_html=fopen($cover,"r") or exit("Error: Wrong cover.");
echo "<h3>Problem id:" . (string)($problem_id) . "</h3>";
while(!feof($cover_html)){
    echo fgets($cover_html);//导入html文件里的数据，并输出
}
fclose($cover_html);
echo "<a href=\"judge/submit.html\">Submit</a>";//提交摁扭，转向submit.html
?>
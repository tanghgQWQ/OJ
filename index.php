<?php
exec("ls ./problems",$prbs);
$cur=[];
foreach ($prbs as $cur){
    echo "<a href=\"show.php?pid=" . $cur ."\">" . $cur . "</a>";
}
?>

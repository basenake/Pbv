<?php
//isset 才可以使用 判斷 變數是否存在才可以用
//$a=5;
//$t=(isset($a))?:52;;
//$t                  =$a?       ?52;
//if判斷是否存在(條件):成立時顯示 ? 不成立顯示空值

?>
<a href="./style.css"></a>
</style>
<?php
$today=strtotime("now");    //取得當前的月份
$month=date("n",$today);    //取得年份;
$days=date("t",$today);     //取得當前月份第一天
$frd=date("Y-n-1",$today);  //取得當前月份的總天數
$fnd=date("Y-n-t",$today);  //取得當前月份最後一天
$frdw=date("w",strtotime($frd));   //取得當前月份第一天的星期
$fndw=date("w",strtotime($fnd));    //取得當前月份最後一天的星期
$weeks=ceil(($days+$frdw)/7);   //計算當前月份的天數會佔幾周
$frws=$frdw-1;  //計算當前月份第一周的空白日(或前一個月份佔幾天)
echo $month;


$days=[];
for($i=0;$i<$weeks;$i++){
    for($j=0;$j<7;$j++){
        if(($i==0 && $j<$frdw)||(($i==$weeks-1)&&$j>$fndw)){
            echo "&nbsp;";
        }else{
            $days[]=$j+7*$i-$frws;
        }
    }
}
echo "<hr>";
echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
for($i=0;$i<count($days);$i++){
    echo ($i % 7==0 )?"<tr>":'';
    echo "<td>";
    echo $days[$i];
    echo "</td>";
    echo ($i % 7==6 )?"</tr>":'';
}

echo "</table>";


?>
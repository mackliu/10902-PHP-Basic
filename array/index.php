<h1>陣列的宣告</h1>
<hr>
<p>$a=array();</p>
<p>print_r($a);</p>
<p>var_dump($a);</p>

<?php

$a=array();
$b=[];
echo "print_r=";
print_r($b);
echo "<br>";
echo "var_dump=";
var_dump($b);
echo "<br>";


?>

<hr>
<h1>陣列宣告並給值</h1>
<hr>
<p>$a=[1,2,3];</p>
<p>$a[]=1;</p>
<p>$a[]=2;</p>
<p>$a[]=3;</p>
<p></p>
<?php

$a=[1,2,3];
print_r($a);
echo "<br>";
$b[]=1;
$b[]=2;
$b[]=3;
print_r($b);
echo "<br>";
$c['A01']="張大同";
$c['A02']="王小明";
$c['B07']="趟自強";
print_r($c)

?>
<h1>陣列的使用</h1>
<hr>
<?php

echo $a[1];
$a[1]=12231231;
echo "<br>";
echo $a[1];
echo "<br>";
echo $c['B07'];



?>

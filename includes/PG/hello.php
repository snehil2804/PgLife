<? php
public function FunctionName(&$num, $num1, $num2)
{
    # code...
    if ($num1) {
        $num = $num + $num1;
        }
        if ($num2) {
        $num = $num + $num2;
        }
}

$x = 20;
FunctionName($x,3,4);
echo $x;
?>
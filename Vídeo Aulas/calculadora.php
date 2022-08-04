<?php
$page_title = "Calculadora";
include("header.php");
echo("<h1>calculadora</h1>");
echo('<form method="post">
  <label for="num1">Digite um número</label>
<input type="number" name="numb1" id="num1">
<label for="num2">Digite o segundo número</label>
<input type="number" name="numb2" id="num2"> 
    <div>
        <button type="submit" name="op" value="+">+</button>
        <button type="submit" name="op" value="-">-</button>
        <button type="submit" name="op" value="*">*</button>
        <button type="submit" name="op" value="/">/</button>
        <button type="submit" name="op" value="!">!</button> 
    </div>
</form>');
$op = isset($_POST['op'])?$_POST['op']:null;
$numb1 = isset($_POST['numb1'])?$_POST['numb1']:0;
$numb2 = isset($_POST['numb2'])?$_POST['numb2']:0;
function soma($numb1, $numb2){
    global $numb1, $numb2;
    $res = $numb1 + $numb2;
    echo"<p>$numb1 + $numb2 = $res </p>";
}
function subt($numb1, $numb2){
    global $numb1, $numb2;
    $res = $numb1 - $numb2;
    echo"<p>$numb1 - $numb2 = $res </p>";
}
function mult($numb1, $numb2){
    global $numb1, $num2;
    $res = $numb1 * $numb2;
    echo"<p>$numb1 x $numb2 = $res </p>";
}
function divi($numb1, $numb2){
    global $numb1, $num2;
    $res = $numb1 / $numb2;
    echo"<p>$numb1 / $numb2 = $res </p>";
}
function fat($numb1, $numb2){
    global $numb1, $num2;
    $res1 = $numb1;
    for($i = 1; $i< $numb1 && $numb1!== 0; $i++){
        $res1 *= $i;
    }
    $res2 = $numb2;
    for($j = 1; $j< $numb2 && $numb2 !== 0; $j++){
        $res2 *= $j;
    }
    echo ("$numb1! =$res1  e $numb2! =$res2 ");
}
echo('<div class="result">');
    if($op !== "!"){
        if($op == "+"){
            soma($numb1, $numb2);
        }elseif($op == "-"){
            subt($numb1, $numb2);
        }elseif($op =="*"){
            mult($numb1, $numb2);
        }elseif($op == "/"){
            divi($numb1, $numb2);
        }
    }else{
        fat($numb1, $numb2);
    }
echo('</div>');

include("footer.php");
?>






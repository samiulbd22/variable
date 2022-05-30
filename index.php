<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Variable</title>
</head>
<body>
    <h1>Variable Scope</h1>
    <p>There are 3 type of php variable</p>
    <h3>Global variable scope</h3>
    <?php
        $var1 ="Shakina";
        $var2 =1000;
        $var3 =5.3987;
        $var4 = true;
        $var5 =5.4321;

        var_dump($var1);
        echo "</br>";
        var_dump($var2);
    echo "</br>";
        var_dump($var3);
    echo "</br>";
        var_dump($var4);
    echo "</br>";
        var_dump($var5);
    ?>
    <h3>Local variable scope</h3>
    <?php
        function localVariable(){
            $var = "my local variable";
            echo $var;
        }
        $result =localVariable();
        echo $result;
    ?>
    <h3>Parameter Variable</h3>
<?php //localVariable();?>
    <?php
        function add($a,$b){

            return $a+$b;
        }
        $result2 =add(10,30);
        echo $result2;
    ?>
    <h3>Static variable Scope</h3>
    <?php
        function staticVariable(){
            static $x =0;
            $x++;
            echo $x;
        }
    ?>
    <?php staticVariable();?>
    <?php staticVariable();?>
    <?php staticVariable();?>
    <?php staticVariable();?>
    <?php staticVariable();?>
</body>
</html>
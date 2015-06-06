<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo 'Hello world!'?>
        <br/>
        <?php         
        /*
         Throwing a comment in here. Looking through a syntax book and messing around
         */        
        EcHo 'Case insensitive echo';        
        ?>       
        <br/>
        <?php
        require_once 'variables.php';
        echo $tempInt * $tempInt;        
        ?>
        <br/>
        <?php
        require_once 'TestClass.php';
        $obj = new TestClass();
        $obj->testMethod();
        ?>
    </body>
</html>

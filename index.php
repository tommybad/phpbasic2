<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            $array1=['a'=>23,'b'=>34,'c'=>45];
            
            print_r($array1);
            echo '<hr>';
            
            echo $array1['c'].'<hr>';
            
            foreach ($array1 as $key => $value) {
            echo $key.':'.$value.'<hr>';
            }
            
            $array2=['su','thawat','tommy'];
            print_r($array2);
            echo '<hr>';
            
            echo $array2[2].'<hr>';
            
            for($aaa=0;$aaa<=10;$aaa++){
                echo $aaa.'<br>';
            } echo '<hr>';
            
        ?>
    </body>
</html>

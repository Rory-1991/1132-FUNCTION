<!-- 
<form action="">
<input type="number" name="line" id="">
<button type="submit">Submit</button>

</form> -->

<style>
    *{
        font-family:'courier new';
    }
</style>
    
<?php
/* $line = (isset($_GET['line']))?$_GET['line']:5;

starts($line); */

function starts($shape,$line){
    switch($shape){
        case "正三角形":
        for($i=0;$i<$line;$i++){
        
            for($k=0;$k<$line-1-$i;$k++){
                echo "&nbsp;";
            }
        
            for($j=0;$j<(2*$i+1);$j++){
                echo "*";
            }
            echo "<br>";
        }
        break;
        case "菱形":
        for($i=0;$i<$line;$i++){
            if($i>floor($line/2)){
                $k1=$i-(floor($line/2));
                $j1=2*($i-(2*($i-(floor($line/2)))))+1;
            }else{
                $k1=(floor($line/2))-$i;
                $j1=(2*$i+1);
            }
        
            for($k=0;$k<$k1;$k++){
                echo "&nbsp;";
            }
        
            for($j=0;$j<$j1;$j++){
                echo "*";
            }
            echo "<br>";
        
        }
        break;  
    }
    }

    function all($table){
        $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
        $pdo=new PDO($dsn,'root','');
        $sql="select * from $table";
        $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
        
    }
?>
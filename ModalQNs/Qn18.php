<?php
//Exception handling

function divide($n, $d){
    try{
        if($d == 0){
            throw new EXCEPTION("Cannot be divided by 0.<br>");
        }else{
            $ans = $n/$d;
            echo "The division of ". $n ." and ".$d." is: ".$ans."<br>";
        }
    }catch(Exception $e){
        echo $e->getMessage()."<br>";
    }finally{
        echo "Execution Completed. <br>";
    }
}

divide(4,2);
divide(9,0);
?>
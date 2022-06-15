<form action="" method="POST">
    <input type="number" name="angka" value="">
    <button type="submit" name="cek" >cek bilangan</button>
<?php

if (isset($_POST['cek'])){

    $ang = $_POST['angka'];
    if ($ang == $ang){
        //echo $ang;
    
    for ($i=$ang; $i <= $ang; $i++){
        $counter=0;
        for ($a=1; $a <= $i; $a++){
            if ($i % $a == 0){
                $counter++;
            }
        }
        if ($counter==2){
            echo "<pre>";
            echo $i. " bilangan prima";
        }else{
            echo "<pre>";
            echo $i. " Bukan bilangan prima"; 
        }
    }
}
}
    
?>
</form>
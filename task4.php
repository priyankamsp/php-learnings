
<?php
if(isset($_POST['add']))
{
 
    
    $words = $_POST['snum'];
    // echo $words.'<br>';
    $vow_length = strlen($words);
    // echo $vow_length.'<br>';
   
    for($i= 0; $i< $vow_length; $i++){
        // echo $i.'<br>';
        for($j=$i+1; $j< $vow_length; $j++){
            // echo $j.'<br>';
            if( $words[$i] == $words[$j]){
                echo  $words[$j]."<br/>";
            }
        break;
        
        }
    }
}
?>
<body>
<form method="post">
 <input type="text" name="snum"/><hr/>	   		   
<input type="submit"  name="add" value="ADD"/>
</form>
</body>






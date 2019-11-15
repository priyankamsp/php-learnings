
<?php
if(isset($_POST['add']))
{
    $vowels = array('a','e','i','o','u');
    $vow_length = count($vowels);
    $words = $_POST['snum'];
    $length = strlen($words);
    // echo $vow_length;
    // // echo $words;
    for($i=0; $i<$length; $i++) 
    {
        // echo $i;
        for($j=0;$j<$vow_length;$j++)
        {
            // echo $j;
            if( $words[$i] == $vowels[$j] )
            {
               
                if(!isset( $count[$vowels[$j]]['count'] ))
                {

                    $count[$vowels[$j]]['count'] = 1;
                }
                else
                {
                $count[$vowels[$j]]['count'] =  $count[$vowels[$j]]['count'] + 1;
                }
                
            }
        
        }
   
    }
  foreach ( $count as $value)
    { 
    echo '<pre>';
    print_r( $count);
    }
    
}
?>
<body>
<form method="post">
 <input type="text" name="snum"/><hr/>	   		   
<input type="submit"  name="add" value="ADD"/>
</form>
</body>






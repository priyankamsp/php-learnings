<?php
if(isset($_POST['add']))
{
    $vowels = array("a","e","i","o","u");
    $words = $_POST['snum'];
    $length = strlen($words);
    $count = 0;
    for($i=0;$i< $length; $i++) {
        $count = (in_array(strtolower($words{$i}),$vowels)) ? ($count + 1 ) : ($count + 0);
    }
    echo "There are {$count} vowels in given words";
}
?>
<body>
<form method="post">
 <input type="text" name="snum"/><hr/>	   		   
<input type="submit"  name="add" value="ADD"/>
</form>
</body>







4 minutes


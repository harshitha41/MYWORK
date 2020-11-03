<?php
$k=1;
for ($i=0; $i<5; $i++)
{
    for ($l=4; $l>$i; $l--)
    {
    echo "&nbsp&nbsp";
  }
   
    for ($j=1; $j<=$i; $j++)
    {
        echo $k. "&nbsp";
        $k++;
    }
    echo "<br/>";
}
?>
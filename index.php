 <?php 
 #    echo "  " ;
#        test
 $AUTHOR = getenv('DEMO_TEXT') ;
 echo "app-a V2 by $AUTHOR   " ;
 echo "Pod IP: ".$_SERVER['SERVER_ADDR'] ;
 $fh = fopen($myFile, 'r');
 $theData = fread($fh, 1);
 fclose($fh);
 echo $theData;
 ?>

 <?php 
$dbname="demodb";
$dbuser="developer";
$dbpass="developer";
$dbhost="mariadb-101-centos7";

$version = 1;
$author = "unknown";
$author  = getenv('DEMO_TEXT') ;

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");
$test_query = "select email FROM email where `id` = $version";
$result = mysqli_query($link, $test_query);
$row = mysqli_fetch_assoc($result);

echo "v$version ";
echo "   pod: ".$_SERVER['SERVER_ADDR'];
echo "   email: ";
echo $row['email'];
echo "   user: $AUTHOR";
echo "\n\32";

 ?>

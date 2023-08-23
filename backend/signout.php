
<?PHP

session_start();
session_destroy();
header('location:index.php');
//header('location:dashboard.php');

?>
<?php
include_once("./header.php");
session_start();
if(!isset($_SESSION['is_login'])){
  header("Location: ../index.php");
  die();
}
?>
  <h1>Welcome to User Dashboard: <?php echo $_SESSION['is_email']; ?> .</h1>
<a class="btn btn-danger" href="logout.php">Lgout ?</a>

<?php
include_once("./footer.php");
?>

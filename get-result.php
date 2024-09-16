<?php
$pageTitle = "Get Result";
include "view-header.php";
?>
    <h1>Get Result</h1>
<?php
if (isset($_GET['input-name'])) {
  ?>
  <p>The value sent is: </p>
  <?php
  echo $_GET['input-name'];
}
else {
  ?>
  <p>Nothing sent to the page.</p>
  <?php
}
include "view-footer.php";
?>

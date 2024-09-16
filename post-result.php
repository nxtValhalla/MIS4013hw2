<?php
$pageTitle = "Post Result";
include "view-header.php";
?>
    <h1>Post Result</h1>
<?php
if (isset($_POST['input-name'])) {
  ?>
  <p>The value sent is: </p>
  <?php
  echo $_POST['input-name'];
}
else {
  ?>
  <p>Nothing posted to the page.</p>
  <?php
}
include "view-footer.php";
?>

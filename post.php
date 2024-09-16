<?php
$pageTitle = "Post";
include "view-header.php";
?>
    <h1>Post</h1>
<form method="post" action="post-result.php">
  <input type="text" name="input-name">
  <input type="submit" value="Post Data">
</form>
<?php
include "view-footer.php";
?>

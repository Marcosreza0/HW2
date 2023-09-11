<?php
$pageTitle = "Get result";
include "view-header.php";
?>
    <h1>Get result</h1>
<?php
  if (isset($_Get['my-name'])) {
  ?>
    <p>The value sent is:</p>
  <?php
    echo $_Get['my-name'];
  } else {
    ?>
    <p>Nothing sent to the page.</p>
    <?php
  }
  include "view-footer.php";
?>

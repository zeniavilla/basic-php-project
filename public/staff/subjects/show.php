<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1';

?>

<?php $page_title = "Show Subject"; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <a href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a><br />

  Page ID: <?php echo h($id); ?><br />

  <a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br />
  <a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a><br />
  <a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br />
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

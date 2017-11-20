<?php require_once('../../../private/initialize.php'); ?>

<?php
  $pages = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Contact'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Listings'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Blog']
  ];
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="pages listing">
    <h1>Pages</h1>

    <div class="actions">
      <div class="action">Create New Page</div>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($pages as $page) { ?>
        <tr>
          <td><?php echo h($page['id']); ?></td>
          <td><?php echo h($page['position']); ?></td>
          <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
          <td><?php echo h($page['menu_name']); ?></td>
          <td><a href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
          <td><a href="">Edit</a></td>
          <td><a href="">Delete</a></td>
        </tr>
      <?php } ?>
    </table>

  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

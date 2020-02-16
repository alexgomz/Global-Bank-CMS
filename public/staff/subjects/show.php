<?php require_once('../../../private/initialize.php'); ?>

<?php
    //$id = $_GET['id'];
    $id = $_GET['id'] ?? '1'; //This makes sure there's a value there, if not default to 1. It's a terniary operation (uses the ? symbol)

    echo h($id);
?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php') ?>
<br/>
<div id="content">
    <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

    <div class="subject show">
        Subject ID: <?php echo h($id); ?>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
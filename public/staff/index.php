<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>
<!--  
    This include path used "../../private/shared/staff_header.php" but using constants in the main 
    initialize.php we can shorten it to this way. Cool trick. Same with footer. Can't do it with the require
    one at the top because that's where those constants are initialized.
-->
        <div id="content">
            <div id="main-menu">
                <h2>Main Menu</h2>
                <ul>
                    <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subjects</a></li>
                    <li><a href="<?php echo url_for('/staff/pages/index.php'); ?>">Pages</a></li>
                </ul>
            </div>

        </div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>

<!-- This had a basic website outline that we cut and placed in 'include' files and now we can add it to 
every page without retyping it all. PHP is great that way -->



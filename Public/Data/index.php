<?php require_once('../../PRIVATE/Initialize.php'); ?>


<?php $page_title = ' Menu'; ?>
<?php include(DESIGN_PATH . '/header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
	<mark><strong><b>We Do Secure (WDS)</b></mark> - <i>One of the largest life insurance provider company in the United States.</i> </strong>
    <ul>
      <li><a href="<?php echo url_wds('/data/registration/login.php'); ?>">LOGIN</a></li>
      <li><a href="<?php echo url_wds('/data/registration/register.php'); ?>">REGISTER</a></li>
    </ul>
  </div>

</div>


<?php include(DESIGN_PATH . '/footer.php'); ?>

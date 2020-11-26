<!DOCTYPE html>
<html>
    <?php 
        $basedir = dirname($_SERVER["SCRIPT_FILENAME"]).'/';
        include("_head.php");
    ?>
</html>
<body>
	<div class="wrapper">
		<div class="main-header">
            <?php include("_header.php"); ?>
        </div>
        <?php include("_sidebar.php"); ?>
        <div class="main-panel">
			<div class="content">
				<div class="container-fluid">
                    <?php if (isset($View)) include $basedir.'application/views/'.$View.'.php'; ?>
                </div>
            </div>
            <?php include "_footer.php"; ?>
        </div>
    </div>
</body>
<?php include("_corejs.php") ?>
</html>

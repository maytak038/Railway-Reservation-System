<?php
session_start();
session_destroy();
	echo '<script type="text/javascript" language="javascript">window.location.href="index.php";</script>';
?>
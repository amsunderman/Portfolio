<?php
header("Content-disposition: attachment; filename=ethics.pdf");
header("Content-type: application/pdf");
readfile("ethics.pdf");
?>

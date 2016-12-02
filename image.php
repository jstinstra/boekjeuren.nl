<?php

if ($row['check']  === 1){
	$checkimg = "img/check.png";
} elseif ($row['check']  === 2) {
	$checkimg = "img/uncheck.png";
} elseif ($row['check']  === 0) {
	$checkimg = "img.empty.png";
}
?>
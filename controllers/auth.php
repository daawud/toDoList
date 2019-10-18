<?php
 
if ($_POST) {
    require (MDL_DIR . '/auth.php');
} else {
    require VIEW_DIR . '/auth.php';
}


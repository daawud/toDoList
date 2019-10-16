<?php

require_once('../config/config.php');
if (isset($_GET['action'])) {

    $action = $_GET['action'];
}

if (isset($action)) {
    include (CTL_DIR . '/' . $action . '.php');
} elseif (isset($_POST['taskadd'])) {
    require (CTL_DIR . '/task_add.php');
} else {
    include_once (CTL_DIR . '/start_page.php');
}




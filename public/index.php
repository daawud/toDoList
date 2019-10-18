<?php

session_start();

require_once('../config/config.php');
if (isset($_GET['action'])) {

    $action = $_GET['action'];
}

if (isset($_SESSION['admin_session'])) {
    require CTL_DIR . '/' . 'admin_page.php';
} elseif (isset($action)) {
    require (CTL_DIR . '/' . $action . '.php');
} elseif (isset($_POST['taskadd'])) {
    require (CTL_DIR . '/task_add.php');
} elseif (isset($_POST['signin'])) {
    require (CTL_DIR . '/auth.php');
} elseif (isset($_POST['change'])) {
    require (CTL_DIR . '/admin_page.php');
} else {
    require (CTL_DIR . '/start_page.php');
}




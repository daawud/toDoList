<?php

if ($_GET) {
    unset($_SESSION['admin_session']);
    die('Сеанс администратора был завершен. Для продолжения работы осуществите вход повторно.');
} else {

require (MDL_DIR.'/admin_page.php');
require (VIEW_DIR.'/admin_page.php');

}



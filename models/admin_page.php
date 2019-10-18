<?php

if (!isset($_SESSION['admin_session'])) {
    die('Сеанс администратора был завершен. Для продолжения работы осуществите вход повторно.');
} else {

    require_once 'DB.php';

    $pdo = DB::getInstance();

    function get_tasks($pdo) {
        $sql = "SELECT id, name, email, task, status FROM tasks";
        $tasks = $pdo->query($sql)->fetchAll();
        $_SESSION['old_tasks'] = $tasks;
        return $tasks;
    }

    function secure_input(&$task, $key) {
        $task = htmlspecialchars(trim($task));
    }

    if ($_POST) {

        $checkboxes = $_POST['checkboxes'];
        $new_tasks = $_POST['tasks'];
        array_walk($new_tasks, 'secure_input');
        $old_tasks = array_column($_SESSION['old_tasks'], 'task', 'id');
        $result = array_diff_assoc($new_tasks, $old_tasks);
        $prepared_sql = DB::getInstance()->prepare("UPDATE tasks SET task = :task, status = :status WHERE id = :id");
        if ($result) {
            $old_stat = array_column($_SESSION['old_tasks'], 'status', 'id');
            foreach ($result as $id => $value) {
                $prepared_sql->bindParam(':id', $id);
                $prepared_sql->bindParam(':task', $value);
                $new_stat = $old_stat['status'] . ' Отред.адм-ом';
                if ($checkboxes) {
                    if (isset($checkboxes[$id])) {
                        $new_stat = 'Выполнено. Отред.адм-ом';
                        unset($checkboxes[$id]);
                    }
                }
                $prepared_sql->bindParam(':status', $new_stat);
                $prepared_sql->execute();
            }
        }

        $prepared_sql = DB::getInstance()->prepare("UPDATE tasks SET status = :status WHERE id = :id");
        if ($checkboxes) {
            foreach ($checkboxes as $id => $value) {
                $new_stat = 'Выполнено';
                $prepared_sql->bindParam(':id', $id);
                $prepared_sql->bindParam(':status', $new_stat);
                $prepared_sql->execute();
            }
        }
        $tasks = get_tasks($pdo);
    } else {
        $tasks = get_tasks($pdo);
    }
}




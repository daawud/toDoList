<?php require SITE_ROOT . 'components/header.php'; ?>

<div class="col-md-12">
    <form action="index.php" method="post">
    <div class="row col-md-10">
        <div>
            <table class="table table-bordered" name="mytable">
                <thead>
                    <tr>
                        <th class="col-md-1">id</th>
                        <th class="col-md-2">Имя пользователя</th>
                        <th class="col-md-1">Email</th>
                        <th class="col-md-4">Задача</th>
                        <th class="col-md-2">Статус</th>
                        <th class="col-md-1">Вып.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($tasks as $row) {
                        print "<tr>";
                        print "<td>" . $row['id'] . "</td>" . "\n";
                        print "<td>" . $row['name'] . "</td>" . "\n";
                        print "<td>" . $row['email'] . "</td>" . "\n";             
                        print "<td><textarea type=\"text\" class=\"form-control\" name= \"tasks[" . $row['id'] . "]\" required>" . $row['task'] . "</textarea></td>" . "\n";
                        print "<td>" . $row['status'] . "</td>" . "\n";
                        print "<td><input class=\"form-check-input\" name= \"checkboxes[" . $row['id'] . "]\" type=\"checkbox\"></td>" . "\n";
                        print "</tr>";
                    }
                    ?>             
                </tbody>
            </table>
        </div> 
    </div>    
    <div class="col-md-1">
        <button type="submit" name="change" class="btn btn-success">Применить</button>
    </div>
    </form>
    <div class="col-md-1">
        <a class="btn btn btn-primary" href="index.php?action=logout" role="button">Выйти</a>
    </div>
</div> 


<?php require SITE_ROOT . 'components/footer.php' ?>


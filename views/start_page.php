
<?php include 'header.php' ?>

<div class="col-md-12">
    <div class="row col-md-10">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-2">Имя пользователя</th>
                        <th class="col-md-2">Email</th>
                        <th class="col-md-5">Задача</th>
                        <th class="col-md-2">Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($tasks as $row) {
                        print "<tr>";
                        print "<td>" . ++$i . "</td>" . "\n";
                        print "<td>" . $row['name'] . "</td>" . "\n";
                        print "<td>" . $row['email'] . "</td>" . "\n";
                        print "<td>" . $row['task'] . "</td>" . "\n";
                        print "<td>" . $row['status'] . "</td>" . "\n";
                        print "</tr>";
                    }
                    ?>             
                </tbody>
            </table>
        </div>
    </div>    
    <div class="col-md-1">
        <a id="but1" class="btn btn-success" href= "index.php?action=task_add" role="button">Добавить</a>
    </div>
    <div class="col-md-1">
        <a class="btn btn btn-primary" href="#" role="button">Войти</a>
    </div>
</div>    
    
<?php include 'footer.php' ?>
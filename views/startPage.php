
<!-- Последняя компиляция и сжатый CSS -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Дополнение к теме -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Последняя компиляция и сжатый JavaScript -->  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class="col-md-12">
    <div class="row col-md-10">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-2">Имя пользователя</th>
                        <th class="col-md-2">E-mail</th>
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
        <button type="button" class="btn btn-success">Добавить</button>
    </div>
    <div class="col-md-1">
        <button type="button" class="btn btn btn-primary">Войти</button>
    </div>
</div>    
    



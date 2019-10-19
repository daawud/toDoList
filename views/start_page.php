
<?php require SITE_ROOT . 'components/header.php'; ?>

<div class="col-md-12">
    <div class="row col-md-10">
        
        <form action="index.php" method="post">
            <label for="sortValue">Сортировать по: </label>
            <select name="sort_value" id="sortValue">
                <?php 
                $idcol = ($_SESSION['sort_field'] == 'id')? "<option value=\"id\" selected>Номеру</option>":"<option value=\"id\">Номеру</option>";
                $namecol = ($_SESSION['sort_field'] == 'name')? "<option value=\"name\" selected>Имени пользователя</option>": "<option value=\"name\">Имени пользователя</option>";
                $emailcol = ($_SESSION['sort_field'] == 'email')? "<option value=\"email\" selected>Адресу эл.почты</option>": "<option value=\"email\">Адресу эл.почты</option>";
                $statuscol = ($_SESSION['sort_field'] == 'status')? "<option value=\"status\" selected>Статусу</option>": "<option value=\"status\">Статусу</option>";
                print $idcol;
                print $namecol;
                print $emailcol;
                print $statuscol;
                ?>
            </select>
            <select name="sort_direction" id="sortDirection">
                <?php 
                $asc = ($_SESSION['sort_direction'] == 'ASC')? "<option value=\"ASC\" selected>возр.</option>":"<option value=\"ASC\">возр.</option>";
                $desc = ($_SESSION['sort_direction'] == 'DESC')? "<option value=\"DESC\" selected>убыв.</option>": "<option value=\"DESC\">убыв.</option>";
                print $asc;
                print $desc;             
                ?>
            </select>
            <input type="submit" name="sort" value="Применить">
        </form>

        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="col-md-2">Имя пользователя</th>
                        <th class="col-md-2">Email</th>
                        <th class="col-md-5">Задача</th>
                        <th class="col-md-2">Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $lastrec = $art + 2;
                      for ($i = $art; $i <= $lastrec; $i++) {  
                        if (!$tasks[$i]) break;
                        print "<tr>";
                        print "<td>" . $tasks[$i]['name'] . "</td>" . "\n";
                        print "<td>" . $tasks[$i]['email'] . "</td>" . "\n";
                        print "<td>" . $tasks[$i]['task'] . "</td>" . "\n";
                        print "<td>" . $tasks[$i]['status'] . "</td>" . "\n";
                        print "</tr>";
                    }
                    ?>             
                </tbody>
            </table>
        </div>

        <ul class="pagination">
            <?php $curpage = $_GET['page']; ?>
            <li><a href="<?= "index.php?page=" . (($curpage == 1 || !isset($curpage)) ? '1' :  --$curpage); ?>">&laquo;</a></li>
            <?php
            for ($j = 1; $j <= $str_pag; $j++) {
                echo "<li><a href=index.php?page=" . $j . "> Страница " . $j . " </a></li>";
            }
            ?>
            <?php $curpage = isset($_GET['page'])? $_GET['page']:1; ?>
            <li><a href="<?= "index.php?page=" . (($curpage == $_SESSION['str_pag']) ? $curpage : ++$curpage); ?>">&raquo;</a></li>
        </ul> 

    </div>    
    <div class="col-md-1">
        <a id="but1" class="btn btn-success" href= "index.php?action=task_add" role="button">Добавить</a>
    </div>
    <div class="col-md-1">
        <a class="btn btn btn-primary" href="index.php?action=auth" role="button">Войти</a>
    </div>
</div>  
    
<?php require SITE_ROOT . 'components/footer.php' ?>

<?php include 'header.php' ?>

<form action="index.php" method="post">
    <div class="col-md-10">
        <div class="form-group">
            <label for="example-text-input">Имя</label>
            <input class="form-control" type="text" id="example-text-input" name="name" placeholder="Ваше имя" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Ваш email" required>
        </div>
        <div class="form-group">
            <label for="exampleTextarea">Задача</label>
            <textarea class="form-control" id="exampleTextarea" name="task" rows="2" required></textarea>
        </div>
        <button type="submit" name="taskadd" class="btn btn-primary">Добавить</button>
    </div>
</form>

<?php include 'footer.php' ?>


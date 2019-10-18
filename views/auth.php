<?php require SITE_ROOT . 'components/header.php'; ?>


<div class="container">
  <form action="index.php" method="post">
    <div class="form-group row">
      <label for="inputLogin3" class="col-sm-2 col-form-label">Логин</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="inputLogin3" name= "login" placeholder="Логин" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" name= "password" placeholder="Пароль" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" name="signin" class="btn btn-primary">Войти</button>
      </div>
    </div>
  </form>
</div>



<?php require SITE_ROOT . 'components/footer.php' ?>


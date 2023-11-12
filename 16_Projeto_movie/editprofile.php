<?php
require_once("templates/header.php");
require_once("models/User.php");

require_once("dao/UserDAO.php");

$user = new User();
$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

$fulName = $user->getFullName($userData);

if ($userData->image == "") {
  $userData->image = "user.png";
}

?>
<div id="main-container" class="container-fluid edit-profile-page">
  <div class="col-md-12">
    <form action="<?= $BASE_URL ?>user_process.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="type" value="update">
      <div class="row">
        <div class="col-md-4">
          <h1><?= $fulName ?></h1>
          <p class="page-description">Altere seus dados no formulário abaixo:</p>
          <div class="form-group mb-2">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome" value="<?= $userData->name ?>">
          </div>
          <div class="form-group mb-2">
            <label for="lastname">Sobrenome:</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Digite seu sobrenome" value="<?= $userData->lastname ?>">
          </div>
          <div class="form-group mb-2">
            <label for="email">E-mail:</label>
            <input type="text" readonly class="form-control disabled" name="email" id="email" placeholder="Digite seu email" value="<?= $userData->email ?>">
          </div>
          <input type="submit" class="btn card-btn" value="Alterar">
        </div>
        <div class="col-md-4">
          <div id="profile-image-container" style='background-image: url("<?= $BASE_URL ?>img/users/<?= $userData->image ?>");'>
          </div>
          <div class="form-group mb-2">
            <label for="image">Foto:</label>
            <input type="file" name="image" id="image" class="form-control-file">
          </div>
          <div class="form-group mb-2">
            <label for="bio">Sobre você:</label>
            <textarea class="form-control" name="bio" id="bio" rows="5" placeholder="Conte quem você é, o que faz e onde trabalha..."><?= $userData->bio ?></textarea>
          </div>
        </div>
      </div>
    </form>
    <div class="row mt-3" id="change-password-container">
    <div class="col-md-4">
      <h2>Alterar a senha:</h2>
      <p class="page-description">
        Digite a nova senha e confirme, para alterar sua senha:
      </p>
      <form action="<?= $BASE_URL ?>user_process.php" method="post">
        <input type="hidden" name="type" value="changepassword">
        <div class="form-group mb-2">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" 
            name="password" id="password" placeholder="Digite sua nova senha!">
        </div>
        <div class="form-group mb-2">
            <label for="confirmpassword">Confirme senha:</label>
            <input type="password" class="form-control" 
            name="confirmpassword" id="confirmpassword" placeholder="Confirme a sua nova senha!">
        </div>
        <input type="submit" class="btn card-btn" value="Alterar Senha">
      </form>
    </div>
    </div>
  </div>
</div>

<?php
require_once("templates/footer.php");
?>
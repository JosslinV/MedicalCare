<?php
function requestUser($login,$pdo){
  echo("oui");
  $res = $pdo->query('SELECT * FROM identifiants WHERE login=\''.$login.'\';');
  while ($data = $res->fetch()) {
    $user = array('login' => $data['login'], 'mdp' => $data['mdp']);
  }
  return $user;
}
?>

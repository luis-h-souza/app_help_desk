<?php

require_once "DataBase.php";

class Login
{
  private $db;

  public function __construct()
  {
    $this->db = DataBase::getConexao();
  }

  public function getByUsuarioESenha($email, $senhaDoUsuario, $manter_logado)
  {
    $sql = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $sql->execute([$email]);
    $resultado = $sql->fetch(PDO::FETCH_ASSOC);

    if($resultado) {
      $senhaDoBanco = $resultado['senha'];

      if (password_verify ($senhaDoUsuario, $senhaDoBanco)) {
        $_SESSION['email'] = $resultado['email'];

        var_dump($_SESSION['email']);

        $_SESSION['nivel_acesso'] = $_SESSION['nivelAcesso'];
        if ($manter_logado) {
          setcookie('usuario', $resultado['email'], time() + 86400, "/");
          setcookie('nivelAcesso', $resultado['nivelAcesso'], time() + 86400, "/");
        }
        return true;
      }
    }
    $_SESSION['erro'] = "Falha no login.";
    return false;
  }

  public function inserir($nome, $email, $senha, $nivelAcesso)
  {
    $senhaCriptografada = password_hash($senha, PASSWORD_BCRYPT);

    $sql = $this->db->prepare('INSERT INTO usuario (nome, email, senha, nivelAcesso) VALUES (?, ?, ?, ?)');
    return $sql -> execute([$nome, $email, $senha, $nivelAcesso]);
  }
}
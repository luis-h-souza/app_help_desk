<?php

require_once "DataBase.php";

class Acesso
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

    print_r($resultado);
    print_r($resultado['senha']);

    # se encontrou o usuário
    if($resultado) {
      $senhaDoBanco = $resultado['senha'];

      # Verifica se as senhas são iguais aos olhos do algorítmo de criptografia
      if (password_verify ($senhaDoUsuario, $senhaDoBanco)) {
        $_SESSION['email'] = $resultado['email'];

        # cria o cookie
        $_SESSION['nivel_acesso'] = $_SESSION['nivelAcesso'];
        if ($manter_logado) {
          setcookie('usuario', $resultado['email'], time() + 86400, "/");
          # nome do cookie, valor, tempo de expiração (segundos), escopo global "/"
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
    # Criptografar a senha
    $senhaCriptografada = password_hash($senha, PASSWORD_BCRYPT);

    $sql = $this->db->prepare('INSERT INTO usuario (nome, email, senha, nivelAcesso) VALUES (?, ?, ?, ?)');
    return $sql -> execute([$nome, $email, $senhaCriptografada, $nivelAcesso]);
  }
}
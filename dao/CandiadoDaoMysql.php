<?php
require 'modal/Candidado.php';

class CandiadoDaoMysql implements CandidatoDao
{
  private $conn;
  public function __construct(PDO $driver)
  {
    $this->conn = $driver;
  }
  public function create(Candidato $c)
  {
    $sql = "INSERT INTO candidato (nome, cpf, email, celular, area, tipotrabalho, opcao, descricao) VALUES( :nome, :cpf, :email, :celular, :area, :tipotrabalho, :opcao, :descricao)";
    $sql = $this->conn->prepare($sql);
    $sql->bindValue(':nome', $c->getNome());
    $sql->bindValue(':cpf', $c->getCpf());
    $sql->bindValue(':email', $c->getEmail());
    $sql->bindValue(':celular', $c->getCelular());
    $sql->bindValue(':area', $c->getArea());
    $sql->bindValue(':tipotrabalho', $c->getTipoTrabalho());
    $sql->bindValue(':opcao', $c->getOpcao());
    $sql->bindValue(':descricao', $c->getDescricao());

    if (isset($_FILES['curriculo'])) {
      $ext = strtolower(substr($_FILES['curriculo']['name'], -4));
      $new_name = date("Y.m.d-H.i.s") . $ext;
      $dir = './assets/curriculo';
      move_uploaded_file($_FILES['curriculo']['tmp_name'], $dir . $new_name);

      if ($sql->execute()) {
        header('Location: index.php');
        $_SESSION['msg'] = 'Dados enviado com sucesso';
      }
    } else {
      header('Location: index.php');
      $_SESSION['msg'] = 'Erro ao enviar!';
    }




  }
}
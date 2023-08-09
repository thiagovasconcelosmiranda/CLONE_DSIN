<?php
   session_start();
   require('./Conexao.php');
 
   $conn = new Conexao();
   $info = filter_input_array(INPUT_POST, FILTER_DEFAULT); 
   $curriculo = $_FILES['curriculo']['name'];


    
    $sql = "INSERT INTO candidato(nome, cpf, email, celular, area, tipotrabalho, opcao, descricao, arquivo) VALUES( :nome, :cpf, :email, :celular, :area, :tipotrabalho, :opcao, :descricao, :arquivo)";
    $sql =  $conn->connection()->prepare($sql);
    $sql->bindValue(':nome', $info['nome']);
    $sql->bindValue(':cpf', $info['cpf']);
    $sql->bindValue(':email', $info['email']);
    $sql->bindValue(':celular', $info['celular']);
    $sql->bindValue(':area', $info['area']);
    $sql->bindValue(':tipotrabalho', $info['tipotrabalho']);
    $sql->bindValue(':opcao', $info['opcao']);
    $sql->bindValue(':descricao', $info['descricao']);
    $sql->bindValue(':arquivo', $curriculo);
   
      if(isset($_FILES['curriculo'])) {
        $arquivo = $_FILES['curriculo'];
        $ext = strtolower(substr($_FILES['curriculo']['name'],-4)); 
        $new_name = date("Y.m.d-H.i.s") . $ext; 
        $dir = './assets/curriculo';
        move_uploaded_file($_FILES['curriculo']['tmp_name'], $dir.$new_name);
       
       if($sql->execute()){
         header('Location: index.php');
         $_SESSION['msg'] = 'Dados enviado com sucesso';
       }
    }else{
      header('Location: index.php');
      $_SESSION['msg'] = 'Erro ao enviar!';
    }






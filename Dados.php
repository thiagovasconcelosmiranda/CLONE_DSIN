<?php
session_start();
require_once 'conexao.php';
require_once 'dao/CandiadoDaoMysql.php';


if (
   !empty($_POST['nome']) && !empty($_POST['cpf']) &&
   !empty($_POST['email']) && !empty($_POST['celular']) &&
   !empty($_POST['area']) && !empty($_POST['tipotrabalho']) &&
   !empty($_POST['opcao'])
) {

   $c = new CandiadoDaoMysql($conn);
   $cand = new Candidato();
   $cand->setNome($_POST['nome']);
   $cand->setCpf($_POST['cpf']);
   $cand->setEmail($_POST['email']);
   $cand->setCelular($_POST['celular']);
   $cand->setArea($_POST['area']);
   $cand->setTipoTrabalho($_POST['tipotrabalho']);
   $cand->setOpcao($_POST['opcao']);
   $cand->setDescricao($_POST['descricao']);

   $c->create($cand);
}




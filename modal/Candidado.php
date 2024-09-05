<?php

class Candidato
{
    private $nome;
    private $cpf;
    private $email;
    private $celular;
    private $area;
    private $tipotrabalho;
    private $opcao;
    private $descriçao;
    private $arquivo;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setArea($area)
    {
        $this->area = $area;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setTipoTrabalho($tipotrabalho)
    {
        $this->tipotrabalho = $tipotrabalho;
    }

    public function getTipoTrabalho()
    {
        return $this->tipotrabalho;
    }

    public function setOpcao($opcao)
    {
        $this->opcao = $opcao;
    }

    public function getOpcao()
    {
        return $this->opcao;
    }

    public function setDescricao($descricao)
    {
        $this->descriçao = $descricao;
    }

    public function getDescricao()
    {
        return $this->descriçao;
    }

    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function getArquivo()
    {
        return $this->arquivo;
    }
}

interface CandidatoDao{
    public function create(Candidato $c);
    
}



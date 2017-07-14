<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Setor
 *
 * @author JonasJr
 */
class Setor {
  private $id;
  private $sigla;
  private $senha;
  private $numeroMemorando;
  
  public function __construct($sigla, $senha, $numeroMemorando) {
      $this->sigla = $sigla;
      $this->senha = $senha;
      $this->numeroMemorando = $numeroMemorando;
  }
  
  function getId() {
      return $this->id;
  }

  function getSigla() {
      return $this->sigla;
  }

  function getSenha() {
      return $this->senha;
  }

  function getNumeroMemorando() {
      return $this->numeroMemorando;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setSigla($sigla) {
      $this->sigla = $sigla;
  }

  function setSenha($senha) {
      $this->senha = $senha;
  }

  function setNumeroMemorando($numeroMemorando) {
      $this->numeroMemorando = $numeroMemorando;
  }


}

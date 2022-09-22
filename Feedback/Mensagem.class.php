<?php
    class Mensagem{
        private $mensagem;
        private $nome;

        public function enviar(){
            echo "<br />";
            echo "Muito obrigada " . $nome . " sua mensagem foi enviada! ";
            echo "<br />";
        }

        public function __construct($mensagem, $nome){
            $this->mensagem = $mensagem;
            $this->nome = $nome;
        }

        public function setMensagem(){
            $this->mensagem = $mensagem;
        }

        public function getMensagem(){
           return $this->mensagem;
        }

        public function setNome(){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

    }
?>
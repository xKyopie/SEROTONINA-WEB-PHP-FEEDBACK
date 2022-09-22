<?php
    class Mensagem{
        private $mensagem;
        private $nome;
        private $email;

        public function enviar(){
            echo "<br />";
            echo "<strong>Muito obrigada ". $this->nome ." sua mensagem foi enviada! <strong/>";
            echo "<br />";
        }

        public function __construct($mensagem, $nome){
            $this->mensagem = $mensagem;
            $this->nome = $nome;
        }

        public function setMensagem($mensagem){
            $this->mensagem = $mensagem;
        }

        public function getMensagem(){
           return $this->mensagem;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

    }
?>


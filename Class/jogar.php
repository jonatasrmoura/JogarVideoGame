<?php
class Jogar {
    var $comecar;
    var $jogo;
    var $pause;
    var $trocarJogo;
    var $parardeJogar;
    var $videoGameDesligado;

    function Play() {
        if ($this->videoGameDesligado == false) {
            echo "<h2>Vídeo Game Ligado!</h2>";
        }else {
            echo "<h2>Droga, esqueci de ligar meu X-Station :p</h2>";
        }
    }

    function Desligado() {
        $this->videoGameDesligado = true;
    }
}
?>
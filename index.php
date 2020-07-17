<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Habits with PHP OOP</title>
</head>
<body>
    <?php
        require_once "Class/jogar.php";

        $partida01 = new Jogar;
        $partida01->Play(); // Retorna 1 se true
        $partida01->comecar = "10 h";
        $partida01->jogo = "God of War";
        $partida01->pause = "Ir no tomar um sol";
        $partida01->parardeJogar = "16 h";
        print_r($partida01);

        echo "<br/><br/>";

        $partida02 = new Jogar;
        $partida02->Play();
        $partida02->trocarJogo = "Red Dead 2";    
        $partida02->jogo  = "God of War";
        $partida02->comecar = "17h";  
        $partida02->parardeJogar = "22 h";
        $partida02->pause = "Beber Água";
        print_r($partida02);

        echo "<br/><br/>";

        $partida03 = new Jogar;
        $partida03->Desligado();
        $partida03->Play();
        $partida03->parardeJogar = "Agora";
        
        print_r($partida03);
        
    ?> 
</body>
</html>
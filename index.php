<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 013</title>
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="1" required value="<?=$saque?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2 e moeda de R$1</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $resto = $saque;
        // Saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;
        // Saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;
        // Saque de R$20
        $tot20 = floor($resto / 20);
        $resto %= 20;
        // Saque de R$10
        $tot10 = floor($resto / 10);
        $resto %= 10;
        // Saque de R$5
        $tot5 = floor($resto / 5);
        $resto %= 5;
        // Saque de R$2
        $tot2 = floor($resto / 2);
        $resto %= 2;
        // Saque de R$1
        $tot1 = floor($resto / 1);
        $resto %= 1;
    ?>
    <section>        
        <h2>Saque de R$<?=$saque?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="100" class="nota"> x <?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="50" class="nota"> x <?=$tot50?></li>
            <li><img src="imagens/20-reais.jpg" alt="20" class="nota"> x <?=$tot20?></li>
            <li><img src="imagens/10-reais.jpg" alt="10" class="nota"> x <?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="5" class="nota"> x <?=$tot5?></li>
            <li><img src="imagens/2-reais.jpg" alt="2" class="nota"> x <?=$tot2?></li>
            <li><img src="imagens/1-real.jpg" alt="1" class="nota"> x <?=$tot1?></li>
        </ul>    
    </section>    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Porcentagem (%)</title>
</head>
<body>
    <?php 
        $preco = $_REQUEST["porc"] ??'0';
        $reaj = $_REQUEST['reaj'] ?? '0';
    ?>
    <main>
        <h1>Calculadora de Porcentagem (%)</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="porc">Adicione um Valor</label>
        <input type="number" name="porc" id="porc" min="0.10" step="0.01" value="<?=$preco?>">
        <label for="reaj">Indique o porcentual do reajuste (<strong><span id="p">?</span>%</strong>)</label>
        <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $reaj?>">
        <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $aumento = $preco * $reaj / 100;
        $novo = $preco + $aumento;  
    ?>
    <section>
        <h2>Valor como o Reajuste</h2>
        <p>Com o reajuste o valor final será de: <strong><?= $novo?></strong></p>
    </section>
    <script>
        mudaValor()
        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>
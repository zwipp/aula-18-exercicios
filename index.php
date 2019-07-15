<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ol>
        <li>
            <p> 1. Utilizando um for, imprimir os números de 1 a 100. </p>
            <div>
                <?php for($i = 1; $i <= 100; $i++){
                    echo $i . " ";
                } ?>
            </div>
        </li>

        <li>
            <p> 2. Modificar o exercício anterior para que, em vez de parar no número 100, pare em um número gerado aleatoriamente entre 0 e 100. </p>
            <div>
                <?php for($i = 1; $i <= mt_rand(1,100); $i++){
                    echo $i . " ";
                } ?>
            </div>
        </li>

        <li>
            <p> 3. Mostrar a tabela de multiplicação do 2 utilizando um for </p>
            <div>
                <table>
                    <?php for($i = 0; $i <= 10; $i++){
                        echo('<tr>');
                        echo(' <td>');
                        echo (2 . " x " . $i . " = " .(2*$i));
                        echo(' </td>');
                        echo('</tr>');
                    } ?>
                </table>
            </div>
        </li>

        <li>
            <p> 4. Utilizando um while, fazer um programa que lance uma moeda (escolhendo um número aleatório que pode ser 0 ou 1) até tirar 5 vezes cara (o número 1). Ao terminar, imprimir o número de lançamentos da moeda até tirar 5 vezes cara. </p>
            <div>
                <?php 
                    
                $cont = 0;
                $cont2 = 0;
                while ($cont != 5) {
                    $cont2++;
                    $resultado = mt_rand(0,1);
                    if ($resultado == 1){
                        $cont++;
                    }
                    else{
                        $cont = 0;
                    }
                }
                echo "lançou a moeda " . $cont2;
                ?>
            </div>
        </li>

        <li>
            <p> 5. Utilizando um do/while, realizar um programa que lance a moeda até tirar cara (o número 1). No final do programa, imprimir quantos lançamentos da moeda forem necessários </p>
            <div>
                <?php 
                    
                $cont = 0;
                
                do {
                    $resultado = mt_rand(0,1);
                    $cont++;
                } while ($resultado != 1);
                echo $cont . "veze(s)";
                ?>
            </div>
        </li>

        <li>
            <p> 6. Definir um array com 5 strings que sejam nomes. Percorrer esse array para imprimir todos os nomes na tela. <br>
                a. Resolver este problema com um for. <br>
                b. Resolver este problema com while. <br>
                c. Resolver este problema com um do/while. <br>
            </p>
            <div>
                <?php 
                    
                    $nomes = [
                        'Sergio',
                        'Thomaz',
                        'Ana',
                        'Joao',
                        'Luci',
                    ];
                    
                    echo 'A- ';
                    for ($i=0; $i < count($nomes); $i++) { 
                        echo $nomes[$i] . '<br>';
                    }

                    echo '<br>' . 'B-';
                    $i = 0;
                    while($i<count($nomes)){
                        echo $nomes[$i] . '<br>';
                        $i++;
                    }

                    echo '<br>' . 'C-';
                    $i = count($nomes)-1;
                    do {
                        echo $nomes[$i] . '<br>';
                        $i--;
                    } while ($i >= 0);
                ?>
            </div>
        </li>

        <li>
            <p> 7. Definir um array com 10 números aleatórios entre 0 e 10. Percorrer esse array para imprimir todos os números. A execução deve terminar se algum dos números encontrados for 5 (a mensagem impressa deve ser “Encontramos um 5!”). <br>
            a. Resolver este problema com um for. <br>
            b. Resolver este problema com um while. <br>
            c. Resolver este problema com um do/while. <br>
 </p>
            <div>
                <?php 
                $array = [];
                    for ($i=0; $i < 10; $i++) { 
                        $array[$i] = mt_rand(0,10);
                    }

                    for ($i=0; $i < count($array); $i++) { 
                        echo $array[$i] . '<br>';
                        if($array[$i] == 5){
                            break;
                        }
                    }
                ?>
            </div>
        </li>
    </ol>
</body>
</html>
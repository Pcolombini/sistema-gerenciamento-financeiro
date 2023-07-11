<?php require_once 'Classes/dividas.php';

$d = new Dividas();
$meses = $d->get_meses();
print_r($meses);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,600;1,200;1,600;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/home.css">
    <title>Home</title>
</head>
<body>
    <header class="meses">
        <section class="caixa">
             <a href="">
                <div class="mes">
                    Janeiro
                </div>
             </a>
        </section>
    </header>
    <main>
        <section class="sair">
            <a href="">Sair</a>
        </section>
        <section class="conteudo">
            <h2>Dívidas</h2>
            <section class="adicionar">+</section>
                <table class="tabela">
                <tr>
                    <td class="titulo"></td>
                    <td class="titulo">Origem</td>
                    <td class="titulo">Descrição</td>
                    <td class="titulo">Valor</td>
                    <td class="titulo">Vencimento</td>
                </tr>
                <tr>
                    <td><a href="" class="apagar">-</a></td>
                    <td>Boleto</td>
                    <td>Compras</td>
                    <td>150,00</td>
                    <td>05/04/2022</td>
                </tr>
                <tr>
                    <td><a href="" class="apagar">-</a></td>
                    <td>Boleto</td>
                    <td>Compras</td>
                    <td>150,00</td>
                    <td>05/04/2022</td>
                </tr>
                <tr>
                    <td><a href="" class="apagar">-</a></td>
                    <td>Boleto</td>
                    <td>Compras</td>
                    <td>150,00</td>
                    <td>05/04/2022</td>
                </tr>
                <tr class="rodape">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total"><strong>1000,00</strong></td>
                    <td></td>
                </tr>
            </table>
            <h2>Entradas</h2>
            <section class="adicionar">+</section>
                <table class="tabela">
                <tr>
                    <td class="titulo"></td>
                    <td class="titulo">Origem</td>
                    <td class="titulo">Valor</td>
                    <td class="titulo">Dia Recebimeto</td>
                </tr>
                <tr>
                    <td><a href="" class="apagar">-</a></td>
                    <td>Pagamento</td>
                    <td>150,00</td>
                    <td>05/04/2022</td>
                </tr>
                <tr>
                    <td><a href="" class="apagar">-</a></td>
                    <td>Pagamento</td>
                    <td>150,00</td>
                    <td>05/04/2022</td>
                </tr>
                <tr>
                    <td><a href="" class="apagar">-</a></td>
                    <td>Pagamento</td>
                    <td>150,00</td>
                    <td>05/04/2022</td>
                </tr>
                <tr class="rodape">
                    <td></td>
                    <td></td>
                    <td class="total"><strong>1000,00</strong></td>
                    <td></td>
                </tr>
            </table>
            <h3 id="green">Saldo Total: 00,00</h3>
        </section>     
    </main>
    

</body>
</html>
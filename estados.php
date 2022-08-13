<html>
<head>
    
<meta charset="UTF-8"/>


<title>Estado do Brasil</title>

</head>  

<body>
<div>


    <?php

    $estado = isset ($_POST["estado"])?$_POST["estado"]:["nenhuma dessas"];


    switch($estado) {

        case 'RR':
        case 'AP':
        case 'PA':
        case 'AM':
        case 'AC':
        case 'RO':
        case 'TO':
            echo "Você nasceu na Região Norte";
            break;

        case 'MA':
        case 'PI':
        case 'CE':
        case 'BA':
        case 'PE':
        case 'RN':
        case 'PB':
        case 'AL':
        case 'SE':
            echo "Você nasceu na Região Nordeste";
            break;

        case 'MT':
        case 'MS':
        case 'GO':
            echo "Você nasceu na Região Centro-Oeste";
            break;

        case 'MG':
        case 'SP':
        case 'RJ':
        case 'ES':
            echo "Você nasceu na Região Sudeste";
            break;

        case 'RS':
        case 'SC':
        case 'PR':
            echo "Você nasceu na Região Sul";
            break;

        default:
        echo "Região desconhecida";
           
        
    }
    
    ?>
<br/>
<br/>
    <!-- Aqui volta a página -->
    <a href="javascript:history.go(-1)"><button>Voltar</button</a>
</div>

</body>


</html>
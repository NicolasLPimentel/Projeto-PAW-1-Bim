<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CPF</title>
</head>
<style>
    .a{
        padding-top:5px ;
        padding-bottom:5px;
        margin-top: 300px;
        text-align: center;
        border-color: #7a5230 ;
        font-size:30px;
        width: 250px;
        border-radius:10px;
    }

    .b{
        margin-left: 800px;
        text-align: center;
        font-size:30px;
        width: 250px;
    }

    .c{
        background-color: #e0e0e0;
    }
</style>
<body class="c">
    <?php
        $dv1 = 0;
        $dv2 = 0;
        $cpf = $_POST['txtcpf']; 

        if (strlen($cpf) == 11){
            $vetorcpf = str_split($cpf);

            for($x = 1, $y = 10, $soma = 0; $y >=2; $x++, $y--){
                $soma += $vetorcpf[$x-1] * $y;
            }

            $resto = $soma % 11;
            if($resto < 2 ){
                $dv1 = 0;
            }else{
                $dv1 = 11 - $resto;
            }

            $vetorverifcpf = $vetorcpf;
            $vetorverifcpf[9] = $dv1;

            for($x = 1, $y = 11, $soma = 0; $y >=2; $x++, $y--){
                $soma += $vetorcpf[$x-1] * $y;
            }

            $resto = $soma % 11;
            if($resto < 2 ){
                $dv2 = 0;
            }else{
                $dv2 = 11 - $resto;
            }
    ?>
    <div class="container border border-1 border-dark bg-white a">
        <?php
                if($vetorcpf[9] == $dv1 and $vetorcpf[10] == $dv2){
                    echo "<span style='color: green'>$cpf</span>";
                }else{ 
                    echo "<span style='color: red'>$cpf</span>"; 
                }
            }else{
                echo "<span class='b' style='color: red'>ERRO: Valor inválido!</span>";
            }
        ?>
    </div>
    
</body>
</html>

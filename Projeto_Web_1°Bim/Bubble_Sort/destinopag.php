<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .c{
        background-color: rgb(236, 233, 233);
    }

    .g{
        font-size: 50px;
        text-align: center;
        width:700px;
        margin-top: 30px;
        color: white;
        border-radius: 10px;
    }

    .d{
        background-color: rgb(255, 249, 224);
    }

    .tit{
        margin-top: 50px;
        font-size: 35px;
        width: 900px;
        text-align: center;
    }

    .num{
        margin-top: 20px;
        text-align: center;
        font-size: 35px;
        width: 400px
    }
</style>
<body class="c">
    <div class="container g bg-danger">
        ORDENADOR DE NÚMEROS    
    </div>
    <?php
        $vetornums = explode(",",$_GET['txtnums']);
        $y = count($vetornums)-1;
        for($z = 0; $z < $y; $z++){                        #primeiro for é necessario para realizar o maximo de testes no vetor, formando do menor p o maior
            for($x = 0; $x < $y-$z; $x++ ){                #segundo for é necessario para realizar os testes para ver qual o maior de todos 
                if($vetornums[$x] > $vetornums[$x+1] ){    #a condiçao do 2o for precisa ser "<" senao o ultimo elemento do vetor vai testar com "nada "
                    $aux = $vetornums[$x+1];               #variavel aux sendo usada para nao perder o valor do proximo elemento do vetor
                    $vetornums[$x+1] = $vetornums[$x];              
                    $vetornums[$x] = $aux;
                }
            }
        }
        $cont = 0;
        $y = count($vetornums);
    ?>
    <div class="container tit">
        <?php
            echo "<span class = 'a'><strong>Os números em ordem crescente são:<br></strong></span>";
        ?>  
    </div>
    
    <div class="container border border-1 border-black num d">
        <?php
            foreach($vetornums as $ordem){                  #apresentaçao do vetor ja ordenado
                if($ordem != 0 and $ordem != ""){
                    $cont ++;
                    if($cont == $y){     
                        echo "<span class = 'b'> e $ordem</span>";        
                    }elseif($cont == $y-1){
                        echo "<span class = 'b'>$ordem </span>";       
                    }else{
                        echo "<span class = 'b'>$ordem, </span>";
                    }
                }
            }   
        ?>
    </div>
</body>
</html>


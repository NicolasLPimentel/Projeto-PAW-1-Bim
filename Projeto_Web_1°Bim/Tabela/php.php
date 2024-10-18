<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabela</title>
</head>
<style>
    .body{
        background-color: #eee;
    }
    .container{
        width: 900px;
        text-align: left;
        margin-top: 200px;
        font-size: 50px;
    }

    .a{
        background-color: #fff8e2;
        border: 1px solid black;
    }

    .b{
        font-weight: bold;
        color: white;
        border: 1px solid black;
    }

    .c{
        text-align: center;
    }

    .sim{
        
        color: green;              
    }

    .nao{
        color: red;
    }

    .d{
        color: orange;
    }

    .erro{
        text-align: center;
        font-size: 50px;
        margin-top: 100px;
        color: red;
    }

    
</style>
<body class = "body">
    <?php
        $perfeito = 0;
        $cp = 0;
        $qdiv = 0;
        $num = $_GET['txtnum'];

        if($num >= 0){  
            if($num % 2 == 0){
                $par = "<span class='sim'>sim</span>";
                $impar = "<span class='nao'>não</span>";
            }else{
                $par = "<span class='nao'>não</span>";
                $impar = "<span class='sim'>sim</span>";
            }
    
            for ($x = 1; $x < $num; $x++){
                if($num % $x == 0){
                    $divisores[$x] = $x;                 #atribui os divisores
                    $cp += $x;      
                }else{
                    $divisores[$x] = 0;                  #tira as mensagens de erro quando um elemento do vetor é utilizado e nao tem valor nenhum
                }
            }
    
            for ($x = 1; $x < $num; $x++){
                $perfeito += $divisores[$x];
            }
    
            if($perfeito == $num){
                $perfeito = "<span class='sim'>sim</span>";
            }else{
                $perfeito = "<span class='nao'>não</span>";
            }
    
            $primo = "<span class='nao'>não</span>";
    
            if($num > 1){
                if($num % $num == 0 and $cp - 1 == 0){
                    $primo = "<span class='sim'>sim</span>";
                }
            }
    
            foreach ($divisores as $x){
                if($x != 0){                         
                    $qdiv ++;                      #conta os divisores validos antes do echo "divisores: $qdiv(......)"
                }
            }
        }else{
            echo "<div class='erro'><strong>Número invalido</strong></div>";
        }
    ?>
    <div class = "container ">
        <div class="row"> 
            <div class="col bg-primary b">
                <?php
                    if($num >= 0){
                        echo "Número";
                    } 
                ?>
            </div>
            <div class="col-sm-6 bg-primary b c">
                <?php 
                    if($num >= 0){
                        echo "$num";
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col a">
                <?php
                    if($num >= 0){
                        echo "Par";
                    }
                ?>
            </div>
            <div class="col-sm-6 a">
                <?php
                    if($num >= 0){
                        echo "$par";
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col a">
                <?php
                    if($num >= 0){
                        echo "Ímpar";
                    }
                ?>
            </div>
            <div class="col-sm-6 a">
                <?php 
                    if($num >= 0){
                        echo "$impar";
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col a">
                <?php
                    if($num >= 0){
                        echo "Perfeito";
                    } 
                ?>
            </div>
            <div class="col-sm-6 a">
                <?php
                    if($num >= 0){ 
                        echo "$perfeito";
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col a">
                <?php
                    if($num >= 0){ 
                        echo "Divisores";
                    }
                ?>
            </div>
            <div class="col-sm-6 a">
                <?php
                    if($num >= 0){
                        echo "<span class = 'd' >$qdiv(</span>"; 
                        $cont = 0;
                        foreach ($divisores as $x){
                            if($x != 0){
                                $cont ++;
                                if($cont == $qdiv){     
                                    echo "<span class = 'd'>e $x</span>";        
                                }elseif($cont == $qdiv-1){
                                    echo "<span class = 'd'>$x </span>";       
                                }else{
                                    echo "<span class = 'd'>$x,</span>";
                                }
                            }
                        }
                        echo "<span class = 'd'>)</span>";
                    }
                ?>
            </div>
        </div>
        <div class = "row">
            <div class = "col a">
                <?php
                    if($num >= 0){
                        echo "Primo";
                    }
                ?>
            </div>
            <div class = "col-sm-6 a">
                <?php
                    if($num >= 0){
                        echo "$primo";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
        $nome = $_POST ["nome"];
        $matricula =$_POST ["matricula"];
        $livro = $_POST ["livro"];
        $tipo = $_POST ["tipo"];
        $prazo = $_POST["prazo"];
        $entrega = $_POST["entrega"];
    


        echo "<center><h1>Nome: $nome</h1></center>";
        $prazo = date("d-m-y", strtotime($prazo));
        echo "<center><h1>Data de Entrega: $prazo</h1></center>";
        echo "<center><h1>Número da matrícula: $matricula</h1></center>";
        echo "<center><h1>Nome do Livro: $livro</h1></center>";
        if ($tipo == "professor"){
            echo "<center><h1>Tipo de usuário: Professor</h1></center>";   
        }else if($tipo == "aluno") {
            echo "<center><h1>Tipo de usuário: Aluno</h1></center>";    
        }
        
        if (isset($_POST["devolucao"])){
            if (strtotime($entrega) <> strtotime($prazo)){
                $diferenca = strtotime($entrega) - strtotime($prazo);
                $dias = floor($diferenca / (60 * 60 * 24));

                $multa = $dias * 1;
                
                echo "<center><h1>Será cobrado uma mulda de R$ $multa  devido ao atraso.</h1></center>";

        }

    }
?>
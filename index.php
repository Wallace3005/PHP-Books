<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="page-index.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    
    <title>Empréstimo de livros</title>
</head>
<body>
        <h2>Empréstimo de livros</h2>
    <div>
    <form method="POST" action="processa.php">
        <fieldset>
            <legend class="title">Informe seus dados</legend>
            <div>
                <legend>Nome:</legend>
                    <input class="campo"type="text" name=nome>
                <legend>Matrícula:</legend>
                    <input class="campo" type="text" name=matricula>
                <legend>Nome do Livro:</legend>
                    <input class="campo" type="text" name=livro>   
                <br>
                <label>Tipo de usuário</label>
                <br>
                    <select name="tipo">
                        <option>Selecionar...</option>
                        <option value="professor">Professor</option>
                        <option value="aluno"> Aluno </option> 
                    </select>
                <br>
                
                <legend>Data para entrega:</legend>       
                    <input class="campo" type="date" name=prazo>
                
                <legend>Caso esteja fazendo a devolução,<br> Selecione a opção abaixo <br> e informe a data em que está entregando: <br> <p class="obs"> (OBS: Em caso de atraso na devolução será cobrado um valor de R$ 1,00 por cada dia de atraso.) </P></legend>       
                <input type="checkbox" name="devolucao" value="devolver">  
                <input class="campo" type="date" name=entrega>

                <input class="button" type="submit" name="salvar" value="Salvar Dados">
                <input class="buttonReset" type="reset" name="limpar" value="Limpar Dados">
            </div>
        </fieldset>
    </form>
</body>
</html>
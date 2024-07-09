<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - farmácia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Farmácia</h2>

    <div class="formulario">

    <form action="post.php" method="post"> 
    <p> Nome do Produto: <input type="text" name="nome"/> </p> 
    <p> Código de barras: <input type="text" name="codigo"/> </p>
    <label for="marca">Marca: </label>
             <select id="marca" name="marca">
         <option value="select">Selecione</option>
         <option value="ems">EMS Pharma</option>
         <option value="neo">NeoQuímica</option>
         <option value="teuto">Teuto Brasileiro</option>
         <option value="medley">Medley</option>
         <option value="euro">Eurofarma</option>
         <option value="germed">Germed Pharma</option>
         <option value="cimed">Cimed</option>
         <option value="ache">Aché</option>
         <option value="sandoz">Sandoz do Brasil</option>
         <option value="prati">Prati-Donaduzzi</option>
              </select>
    <p> Laboratório: <input type="text" name="lab"/> </p>
    <p> Preço de venda: <input type="number" name="preco"/> </p>
    <p> Preço de compra: <input type="number" name="precoc"/> </p>
    <p> Quantidade: <input type="number" name="quant"/> </p>
    <p> Data de fabricação: <input type="date" name="dat"/> </p>
    <p> Data de validade: <input type="date" name="dataa"/> </p>
    <p> Fornecedor: <input type="text" name="forn"/> </p>
    <p> Exige receita: <br> <input type="radio" id="sim" name="sim" value="sim">
        <label for="sim">SIM</label>
        <input type="radio" id="nao" name="nao" value="nao">
        <label for="nao">NÃO</label><br> </p>

    <input id="button" type="submit" value="Cadastrar Produto" >

    </form>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post.css">
    <title>Remédios cadastrados</title>
</head>
<body>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #ffff;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color:  rgb(0, 0, 0);
}
</style>

    <h2>Remédios Cadastrados</h2>

    <table>
  <tr>
    <th>Nome do produto</th>
    <th>Código de barras</th>
    <th>Marca</th>
    <th>Laboratório</th>
    <th>Preço de venda</th>
    <th>Preço de compra</th>
    <th>Quantidade</th>
    <th>Data de fabricaçao</th>
    <th>Data de validade</th>
    <th>Fornecedor</th>
    <th>Exige receita</th>
  </tr>

  <tr>
    <td> <?php echo $_POST['nome']; ?> </td>
    <td> <?php echo $_POST['codigo']; ?> </td>
    <td> <?php echo $_POST['marca']; ?></td>
    <td> <?php echo $_POST['lab']; ?></td>
    <td> <?php echo $_POST['preco']; ?></td>
    <td> <?php echo $_POST['precoc']; ?></td>
    <td> <?php echo $_POST['quant']; ?></td>
    <td> <?php echo $_POST['dat']; ?></td>
    <td> <?php echo $_POST['dataa']; ?></td>
    <td> <?php echo $_POST['forn']; ?></td>
    <td> <?php echo $_POST['lab']; ?></td>
  </tr>

</table>
    
</body>
</html>
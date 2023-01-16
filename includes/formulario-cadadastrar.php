<main>

    <h2>Cadastro de Produtos</h2>

    <form action="cadastra_produto.php" method="post">

        <label for="nome_produto">Nome do Produto</label>
        <input type="text" name="nome_produto" id="nome_produto">
        <br>
        <label for="descricao_produto">Descrição do Produto</label>
        <input type="text" name="descricao_Produto" id="descricao_produto">
        <br>
        <label for="preco_produto">Preço</label>
        <input type="number" name="preco_produto" id="preco_produto">
         
        <label for="imposto_percentual">Imposto %</label>
        <input type="number" name="imposto_percentual" id="imposto_percentual">
        <br>

        <button type="submit">Cadastrar Produto</button>

    </form>

</main>
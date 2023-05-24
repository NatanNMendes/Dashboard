
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
            <h5 class="card-title">Produtos Cadastrados</h5>
            <p class="card-category">Adicione Novos Produtos</p>
        </div>
        <div class="card-body ">
            <table  class="table display" id="example" style="width:100%">
                <thead>
                    <tr>
                        <th>Data do Cadastro</th>
                        <th>Nome do Produto</th>
                        <th>Valor</th>
                        <th>Fornecedor</th>
                        <th>Funcionário que Cadastrou</th>
                        <th>Código De Barras</th>
                        <th>Alterar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM cad_produto";
                        $query = $mysqli->query($sql);
                        while($dados = $query->fetch_array()){
                        $id = $dados ['id'];
                    ?>
                    <tr>
                        <td><?php echo $dados ['data_cadastro']?></td>
                        <td><?php echo $dados ['nome']?></td>
                        <td><?php echo $dados ['valor']?></td>
                        <td><?php echo $dados ['fornecedor']?></td>
                        <td><?php echo $dados ['funcionario_cadastrou']?></td>
                        <td><?php echo $dados ['codigo_barras']?></td>
                        <td></td>
                        <td class="text-center"><a href="_scripts/deletar_prod.php?id=<?php echo $id;?>"><i class="nc-icon nc-simple-remove"></i></td>                           
                    </tr>
                    
                    <?php } ?>
                
                </tbody>
                <tfooter>
                    <tr>
                        <td>Data do Cadastro</td>
                        <td>Nome do Produto</td>
                        <td>Valor</td>
                        <td>Fornecedor</td>
                        <td>Funcionário Que Cadastrou</td>
                        <td>Código De Barras</td>
                        <th>Alterar</th>
                        <th>Deletar</th>
                    </tr>
                </tfooter>
            </table>
        </div>
    </div>
</div>


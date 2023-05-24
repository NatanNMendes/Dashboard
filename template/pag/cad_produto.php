
<div class="row">
  <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Cadastrar Produtos</h5>
          <p class="card-category">Adicione Novos Produtos</p>
        </div>
        <div class="card-body ">
          <form method="post" action="_scripts/salvar_prod.php">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nome Do Produto</label>
              <input type="text" class="form-control" name="produto">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Valor</label>
              <input type="text" class="form-control valor" name="valor">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Fornecedor</label>
              <input type="text" class="form-control" name="fornecedor">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Funcionário que Cadastrou</label>
              <input type="text" class="form-control" name="funcionario_cadastrou">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Código de Barras</label>
              <input type="text" class="form-control codigo_barras" name="codigo_barras" maxlength="15">
            </div>
            <div class="mb-3 text-center">
              <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php if(!class_exists('Rain\Tpl')){exit;}?><main>
      <div class="container text-center">

      <!-- Cadastrar -->
      

        <h1 class="py-4 rounded"><i class="fas fa-store"></i>LOJA DAS FRUTAS</h1>

        <!-- Atualizar dados -->

      

        <!-- Deletar -->
      
        <!-- editar -->
        
        <div class="d-flex justify-content-center">
          <form action="" method="post" class="w-50">
            <div class="py-2">
                
                <div class="col-md-12 mb-2">
                  <label for="validationDefault01">Nome da Fruta</label>
                  <input type="text" name="nome" 
                  value="&lt;?php echo $resultado->nome; ?&gt;" 
                  placeholder="Nome da fruta" 
                  class="form-control" 
                  id="validationDefault01" required>
                </div>
                
                <div class="col-md-12 mb-2">
                <label for="validationDefault02">Código da Fruta</label>
                  <input type="Number" name="codigo" 
                  value="&lt;?php echo $resultado->codigo; ?&gt;" 
                  placeholder="Código da fruta" 
                  class="form-control" 
                  id="validationDefault02" required>
                </div>
                
                <div class="col-md-12 mb-2">
                <label for="validationDefault03">Data do registro</label>
                  <input type="Date" name="dataRegistro" 
                  value="&lt;?php echo $resultado->dataRegistro; ?&gt;" 
                  placeholder="Data do registro" 
                  class="form-control" 
                  id="validationDefault03" required>
                </div>

                <div class="col-md-12 mb-2">
                  <label for="validationDefault04">Data do validade</label>
                    <input type="Date" name="dataValidade" 
                    value="&lt;?php echo $resultado->dataValidade; ?&gt;" 
                    placeholder="Data do validade" 
                    class="form-control" 
                    id="validationDefault04" required>
                </div>

                <div class="col-md-12 mb-2">
                <label for="validationDefault05">Preço da fruta</label>
                    <input type="Number" name="preco" 
                    value="&lt;?php echo $resultado->preco; ?&gt;" 
                    placeholder="Preço da fruta" 
                    class="form-control" 
                    id="validationDefault05" required>
                </div>
            
                <!-- <div class="form-row">
                  <div class="col-md-6 mb-2">
                    <label for="validationDefault03">City</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="validationDefault04">State</label>
                    <select class="custom-select" id="validationDefault04" required>
                      <option selected disabled value="">Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="col-md-3 mb-2">
                    <label for="validationDefault05">Zip</label>
                    <input type="text" class="form-control" id="validationDefault05" required>
                  </div>
                </div> -->
                <input type="hidden" name="id" value="&lt;?php echo $resultado->id; ?&gt;">
                <br />
                <input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">
            <!--   <button class="btn btn-primary" type="submit">Submit form</button>
            --></div>

          </form>
        </div>
        <div class="d-flex table-data">
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th>Nome</th>
                <th>Código</th>
                <th>Registro</th>
                <th>Validade</th>
                <th>Preço</th>
              <tr>
            </thead>
          

            <!-- https://www.youtube.com/watch?v=GO_GFl7X6Ew&t=147s -->

            <tbody>
              <tr>
                <th>&lt;?php echo $value->nome; ?&gt;</th>
                <th>&lt;?php echo $value->codigo; ?&gt;</th>
                <th>&lt;?php echo $value->dataRegistro; ?&gt;</th>
                <th>&lt;?php echo $value->dataValidade; ?&gt;</th>
                <th>&lt;?php echo $value->preco; ?&gt;</th>
                <!-- <th>
                  &lt;?php echo "<a href='index.php?acao=editar$id=" . $value->id . "'>Editar</a>"; ?&gt;
                  &lt;?php echo "<a href='index.php?acao=deletar$id=" . $value->id . "' onclick='return confirm (\"
                  Deseja deletar?\")'>Deletar</a>"; ?&gt;
                </th> -->
              </tr>
            </tbody>
            
            <!-- -->

          </table>
        </div>
      </div>
    </main>
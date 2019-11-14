<?php ?>
<form>
    Nome do Produto: <input name="" id="" class="form-control" /><br>
    Descrição: <textarea name="descricao" class="form-control" rows="2" cols="35%"></textarea><br>
    Preço: <input name="preco" id="preco" type="text" class="form-control" /><br>
    Data: <input name="data" id="data" type="text" class="form-control" readonly="" value="<?php echo  date('d-m-Y H:i:s') ?>"/><br>
    Capa:<input name="capa" id="capa" class="form-control" /><br>
    Usuario:<input name="user" id="user" class="form-control" /><br>
    
    <button type="submit">Enviar</button>
    <button type="reset">Corrigir</button>
</form>
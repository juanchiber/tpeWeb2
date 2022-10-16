{if isset($smarty.session.USER_ID)}

    <p>
        <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Agregar un nuevo producto
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <h5>Agrega un nuevo producto:</h5>
            <form action="add" method="POST" class="my-4">
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Producto</label>
                            <input name="product" type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
        
                <div class="form-group">
                    <label>Detalle</label>
                    <textarea name="detail" class="form-control" rows="3" required></textarea>
                </div>
        
                <div class="form-group">
                    <label>Precio</label>
                    <input name="price" type="number" class="form-control" required>
                </div>
        
                <div class="form-group">
                    <label>Categoria</label><br>
                    <select name="id_category">
                        {foreach from=$categories item=$category}
                            <option value="{$category->id_category}" required>{$category->category}</option>
                        {/foreach}
                    </select>
                </div><br>
        
                <button type="submit" class="btn btn-dark">Agregar</button>
            </form>
        </div>
    </div>

{/if}
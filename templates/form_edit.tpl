{include file="header.tpl"}

<a href="products" type="button" class="btn btn-dark"> << Volver</a><br>

<br><h5>Modifica un producto:</h5>

    <form action="update/{$product->id_product}" method="POST" class="my-4">
        <div class="row">
            <div class="form-group">
                    <input name="id_product" type="hidden" class="form-control" value="{$product->id_product}">
            </div>
            <div class="col-9">
                <div class="form-group">
                    <label>Producto</label>
                    <input name="product" type="text" class="form-control" value="{$product->product}" required>
                </div>
            </div>

        </div>

        <div class="form-group">
            <label>Detalle</label>
            <input name="detail" type="text" class="form-control" value="{$product->detail}" required>
        </div>

        <div class="form-group">
            <label>Precio</label>
            <input name="price" type="number" class="form-control" value="{$product->price}"required>
        </div>
       
        <div>
            <label>Categoria</label>
            <select name="id_category" class="form-control" required>
            {foreach from=$categories item=$category}
                <option value="{$category->id_category}">{$category->category}</option>
            {/foreach}
        </select>
        </div><br>

        <input value="Modificar" type="submit" class="btn btn-dark">
</form>


{include file="footer.tpl"}
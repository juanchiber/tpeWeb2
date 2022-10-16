{include file="header.tpl"}

<a href="show_categories" type="button" class="btn btn-dark"> << Volver</a><br>

<br><h5>Modifica una categoria:</h5>

    <form action="update_category" method="POST" class="my-4">
        <div class="row">
            <div class="form-group">
                    <input name="id_category" type="hidden" class="form-control" value="{$category->id_category}">
            </div>
            <div class="col-9">
                <div class="form-group">
                    <label>Categoria: </label>
                    <input name="category" type="text" class="form-control" value="{$category->category}" required>
                </div>
            </div>
        </div><br>

        <input value="Modificar" type="submit" class="btn btn-dark">
</form>


{include file="footer.tpl"}
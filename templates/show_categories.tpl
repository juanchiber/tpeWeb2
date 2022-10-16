{include file="header.tpl"}
{include file="form_alta_category.tpl"}

<br><h5>Listado de categorias:</h5><br>
<ul class="list-group">
    {foreach from=$categories item=$category}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <p>Categoria: <b>{$category->category}</b></p></span>
            <div>
                <a href="show_products_by_category/{$category->id_category}" type="button" class="btn btn-dark">Ver productos</a>
                {if isset($smarty.session.USER_ID)}
                    <a href="delete_category/{$category->id_category}" type="button" class="btn btn-dark">Eliminar</a>
                    <a href="edit_category/{$category->id_category}" type="button" class="btn btn-dark">Editar</a>
                {/if}
            </div>
        </li>
    {/foreach}
</ul>
<br>
{include file="footer.tpl"}

{include file="header.tpl"}

<a href="show_categories" type="button" class="btn btn-dark"> << Volver</a><br>

<br><h5>Listado de productos:</h5><br>
<ul class="list-group">
    {foreach from=$products item=$product}
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$product->product}</b> - {" $"}{$product->price}</span>
            <div>
                <a href="show/{$product->id_product}" type="button" class="btn btn-dark">Ver detalle</a>
                {if isset($smarty.session.USER_ID)}
                    <a href="delete/{$product->id_product}" type="button" class="btn btn-dark">Eliminar</a>
                    <a href="edit/{$product->id_product}" type="button" class="btn btn-dark">Editar</a>
                {/if}
            </div>
        </li>
    {/foreach}
</ul>
<br>

{include file="footer.tpl"}
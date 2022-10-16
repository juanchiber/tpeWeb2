{include file="header.tpl"}

<a href="products" type="button" class="btn btn-dark"> << Volver</a><br>

<br><div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="images/footer/publi4.png" class="img-fluid rounded-start" alt="Producto (no use imagen)">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{$product->product}</h5>
                <p class="card-text">Categoria: {$product->category}</p>
                <p class="card-text">{$product->detail}</p>
                <p class="card-text"><small class="text-muted">${$product->price}</small></p>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}
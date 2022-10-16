{if isset($smarty.session.USER_ID)} 
    
    <p>
        <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Agrega una nueva categoria
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <h5>Agrega una nueva categoria:</h5>
            <form action="add_category" method="POST" class="my-4">
                <div class="row">
                    <div class="col-9">
                        <div class="form-group">
                            <label>Categoria:</label>
                            <input name="category" type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-dark">Agregar</button>
            </form>
        </div>
    </div>

{/if}

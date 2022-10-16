{include file="header.tpl"}
<br>
    <div class="mt-5 w-25 mx-auto">
        <h5>Registrate:</h5><br>

        <form action="validate" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required  >
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password"  required>
            </div><br>
            {if $error} 
                <div class="alert alert-danger mt-3">
                    {$error}
                </div>
            {/if}
            <input value="Enviar" type="submit" class="btn btn-dark">        
        </form>
    </div>
<br>
{include file="footer.tpl"}
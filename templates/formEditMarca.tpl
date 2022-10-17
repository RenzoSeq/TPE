{include file="header.tpl"}

<form action="editarMarca/{$marca}" method="POST" > 
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control">
      
                <label>Descripcion</label>
                <input name="descripcion" type="text" class="form-control">
            

                <label>Origen</label>
                <input name="origen" type="number" class="form-control">
      
    
                   
       
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
 
</form>
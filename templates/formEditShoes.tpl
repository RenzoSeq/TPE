{include file="header.tpl"}

<form action="editarShoe/{$shoe}" method="POST" > 
   <label>Modelo</label>
                <input name="modelo" type="text" class="form-control">
      
                <label>Color</label>
                <input name="color" type="text" class="form-control">
            

                <label>Talle</label>
                <input name="talle" type="number" class="form-control">
      
    
                <label>Precio</label>
                <input name="precio" type="number" class="form-control">
      
                   
       
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
 
</form>
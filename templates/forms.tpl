
<div>
<form action="add" method="POST" class="my-4 p-3 mb-2 bg-secondary text-white ">
    
    <div class="row">
        <h3>Agregar unas zapatillas </h3>
        <div class="col-5">
            <div class="form-group">
                <label>Modelo</label>
                <input name="modelo" type="text" class="form-control">
            </div>
        </div>
        <div class="col-5">
            <div class="form-group">
                <label>Color</label>
                <input name="color" type="text" class="form-control">
            </div>
        </div>
        <div class="col-5">
            <div class="form-group">
                <label>Talle</label>
                <input name="talle" type="number" class="form-control">
            </div>
        </div>
        <div class="col-5">
            <div class="form-group">
                <label>Precio</label>
                <input name="precio" type="number" class="form-control">
            </div>
        </div>
        <div class="col-5">
            <div class="form-group">
                <label>Id-MARCA</label>
                    <select name="marcaid" class="form-select">
                    {foreach from=$marcas item=$marca}
                        <option value="{$marca->id}">{$marca->nombre}</option>
                    {/foreach} 
                    </select>               
            </div>
        </div>
        <div class="col-5">
        <div class="form-group">
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </div>
    </div>
</form>
</div>

<div>
<form action="addMarca" method="POST" class="my-4 p-3 mb-2 bg-secondary text-white">

    <div class="row">
    <h3>Agregar una marca Nueva</h3>
   
    <div class="col-5">
        <div class="form-group">
            <label>Nombre</label>
            <input name="nombre" type="text" class="form-control">
        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            <label>Descripcion</label>
            <input name="descripcion" type="text" class="form-control">
        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            <label>Origen</label>
            <input name="origen" type="text" class="form-control">
        </div>
    </div>
 
    <div class="col-5">
        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </div>
        
    </div>  
</form>
</div>



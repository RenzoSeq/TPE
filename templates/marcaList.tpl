  {include file="header.tpl"}   
    
{foreach from=$marcas item=$marca}
 
 <div class="col-md-3 mt-5">
 <div class="card bg-light shadow">
    <ul>
     <li>
        <div class="card-body">
            <p class="card-title">Nombre: {$marca->nombre}<p>
            <p class="card-title">Descripcion: {$marca->descripcion}<p>
            <p class="card-title">Origen: {$marca->origen}<p>         
         </div>
     </li>
    </ul>
    {if isset($smarty.session.USER_EMAIL)}
     <a href="categoria/{$marca->id}" class="btn btn-success">Editar Marca</a>
    {/if}
 </div>
</div>
{/foreach}   

{include file="footer.tpl"}



<div class="row">

    <h2 class="text-center">Observa el nuevo catalogo de nuestra tienda Online:</h2>
    <div>
    <h6>Haz Click aqui para ver todas las Marcas con las que trabajamos: <a class="nav-link active" aria-current="page" href="marcas">Marcas</a></h6> 
    </div>
    <div>
    <p>Bienvenido, nosotros somos Shoestreet y queremos contarles un poco sobre nosotros, este proyecto/emprendimiento arranca durante la pandemia cuando no teniamos nuestros ingresos decidimos a base de que nos gustan las zapatillas (de todo tipo de estilo y marca) poder arrancan con nuestro emprendimiento ya planeado unos años antes. Decidimos buscar distintos proveedores y desp de unos meses de reuniones por meet y charlas con mi compañero decidimos cerrar contrato con ellos. Para poder ofrecerles a nuestrps clientes nuestro mejor calzado y que cada uno pueda disfrutarlos contetos y con la mejor calidad posible. Somos dos hermanos que disfrutamos de lo que hacemos y que queremos seguir creciendo mucho mas, a lo largo de la pandemia fue dificil pero de a poco gracias a ustedes el negocio fue creciendo </p>
    </div>
    {foreach from=$shoes item=$shoe}
        

        <div class="col-md-3 mt-5">
            <div class="card bg-light shadow">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZCBkvqhnBNRAsljLBLih5X4WGY9DfmgYdQJSP01W6ZZX3mOrKo-dsmWpzYO_WNC8vLvo&usqp=CAU" alt="Title">
                <div class="card-body">
                    <p class="card-title">Modelo: {$shoe->modelo}<p>
                    <p class="card-title">Color: {$shoe->color}<p>
                    <p class="card-title">Talle: {$shoe->talle}<p>
                    <p class="card-text"> Precio: ${$shoe->precio}</p>
                    
                </div>
                
                <a href="item/{$shoe->id}" class="btn bg-dark btn-outline-light">Ver mas</a>
                {if isset($smarty.session.USER_EMAIL)}
                    <a href="shoeEdit/{$shoe->id}" class="btn btn-success">Editar</a>
                    <a href="delete/{$shoe->id}" class="btn bg-danger btn-outline-light">Eliminar</a>
                {/if}
            </div>
        </div>

        
    {/foreach}
</div>


{include file="footer.tpl"}



<div class="row">
    <div class="col-md-6 mt-5">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZCBkvqhnBNRAsljLBLih5X4WGY9DfmgYdQJSP01W6ZZX3mOrKo-dsmWpzYO_WNC8vLvo&usqp=CAU" alt="imagenProducto">
    </div>
    <div class="col-md-6 mt-5">

    <p class="card-title">Modelo: {$shoe->modelo}<p>
    <p class="card-title">Color: {$shoe->color}<p>
    <p class="card-title">Talle: {$shoe->talle}<p>
    <p class="card-text"> Precio: ${$shoe->precio}</p>

    </div>
</div>


{include file = "footer.tpl"}
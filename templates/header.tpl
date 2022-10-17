<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <title>Shoes</title>
</head>
<body  >
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm" >
        <div class="container-fluid">    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Inicio</a>
            </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Marcas
               </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="sortby">Todo</a></li>
              {foreach from=$marcas item=$marca}
                
                <li><a class="dropdown-item" href="sortby/{$marca->id}">{$marca->nombre}</a></li>

              {/foreach}
            </ul>
          </li>
          {if isset($smarty.session.USER_EMAIL)}
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="admin">Admin</a>
            </li>
          {/if}
        </ul>  
        {if !isset($smarty.session.USER_EMAIL)}
          <a class="nav-link nav-item navbar-nav mb-2 mb-lg-0" href="login">Login</a>
        {else}
          <a class="nav-link nav-item navbar-nav mb-2 mb-lg-0" href="logout">Logout {$smarty.session.USER_EMAIL}</a>
        {/if}
      </div>
    </div>
  </nav>
  </header>
      
  <main class="container">
    


     
  
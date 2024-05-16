<!-- TRACCIA 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti,
 come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando
  (prodotto, cibo, gioco, cuccia). -->


<!-- sito ecommerce  
  che vende prodotti per animali --- classe principale Prodotti con (informazioni generali)
  ci sono due categorie cani e gatti 
  i prodotti variano cibo,giochi,cucce,saponi,accessori ecc..
 -->
<?php

require_once __DIR__ . '/Models/Products.php';
require_once __DIR__ . '/Models/Kennel_pet.php';
require_once __DIR__ . '/Models/Food_pet.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Game_pet.php';



$food= new Food_pet('Croccantini',10.99,'categoria',['carne','carote','patate','uova','acqua']);
$kennel = new Kennel_pet('Cuccia',90.00,'categoria');
var_dump( $kennel);
// $produts = [

//     $food_pet,
//     $kennel_pet,
//     $game_pet,
// ];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link css  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body >
    <header >
        <nav class="navbar  navbar-expand-lg bg-body-tertiary mb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pet Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center ">
                        <div class="col-3 m-2">
                            <div class="card ms_card" style="width:250px ">
                                <img src="" class="card-img-top" alt="...">
                                <div class="card-header bg-success text-white">
        
                                </div>
                                <ul class="list-group list-group-flush text-white bg-success">
                                    <li class="list-group-item text-white bg-success">
                                        
                                    </li>
                                    <li class="list-group-item text-white bg-success">
                                        
                                    </li>
                                    <li class="list-group-item text-white bg-success">
                                       
                                    </li>
                                </ul>
                            </div>
                        </div>
                   
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>
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
require_once __DIR__ . '/Models/ProductDog.php';
require_once __DIR__ . '/Models/ProductCat.php';

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
</head>

<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <section>
            <!-- <div class="container">
                <div class="row row-cols-4 ">
                    <div class="col " >
                        <div class="card" style="width:250px ">
                            <img  src="https://shop-cdn-m.mediazs.com/bilder/royal/canin/mini/starter/mother/babydog/crocchette/cane/9/400/rc_spt_dry_ministart_mv_2_it_it_9.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-header">
                                Featured
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>
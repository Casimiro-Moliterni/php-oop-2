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

$dog = new Category('Cani', 'fa-solid fa-dog');
$cat = new Category('Gatti', 'fa-solid fa-cat');

$food = new Food_pet('Croccantini', 10.99, $dog, ['carne', 'carote', 'patate', 'uova', 'acqua']);
$food->image = './img/croccantini_cani.jpeg';
$food->description='Croccantini gustosi per cani';
$food->made_in='USA';

$kennel = new Kennel_pet('Cuccia', 90.00, $dog);
$kennel->size = 'XL';
$kennel->image = './img/cuccia_cani.jpeg';
$kennel->description='Cuccia confortevole per cani';
$kennel->made_in='ITA';

$game = new Game_pet('Corda', 7.99, $dog);
$game->image = './img/giochi_cani.jpeg';
$game->description='Gioco perfetto per il tuo animaletto a 4 zampe';
$game->made_in='USA';

$food_cat = new Food_pet('Croccantini', 5.99, $cat, [ 'carote', 'patate', 'acqua']);
$food_cat->image = './img/croccantini_gatti.jpg';
$food_cat->description='Croccantini gustosi per gatti';
$food_cat->made_in='ITA';

$kennel_cat = new Kennel_pet('Cat house', 40.00, $cat);
$kennel_cat->size = 'XL';
$kennel_cat->image = './img/cuccia_gatti.jpg';
$kennel_cat->description='Cuccia confortevole per gatti';
$kennel_cat->made_in='USA';

$game_cat = new Game_pet('Palla di pelo', 7.99, $cat);
$game_cat->image = './img/giochi_gatti.jpeg';
$game_cat->description='Gioco perfetto per il tuo animaletto a 4 zampe';
$game_cat->made_in='CHINA';


$produts = [

    $food,
    $kennel,
    $game,
    $food_cat,
    $kennel_cat,
    $game_cat
];

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
    <!-- link font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
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
                    <?php foreach ($produts as $single_product) { ?>
                        <?php
                        $class_name = get_class($single_product);
                        $product_type = 'Prodotto Generico';
                        if ($class_name == 'Food_pet') {
                            $product_type = 'Cibo';
                        } elseif ($class_name === 'Kennel_pet') {
                            $product_type = 'Cuccia';
                        } elseif ($class_name == 'Game_pet') {
                            $product_type = 'Gioco';
                        }
                        ?>
                        <div class="col-3 m-2">
                            <div class="card ms_card bg-success" style="width:250px ;height:550px;">
                                <img src="<?php echo $single_product->image; ?>" class="card-img-top" alt="...">
                                <div class="card-header bg-success text-white">
                                    <?php echo $single_product->name; ?>
                                </div>
                                <ul class="list-group list-group-flush text-white bg-success">
                                    <?php if ($single_product->description) { ?>
                                        <li class="list-group-item text-white bg-success">
                                        Descrizione : <?php echo $single_product->description; ?>
                                        </li>
                                    <?php } ?>
                                    <li class="list-group-item text-white bg-success">
                                        Prezzo: <?php echo $single_product->price . ' '. 'Euro'; ?>
                                    </li>
                                    <li class="list-group-item text-white bg-success">
                                        Genere di Prodotto: <?php echo $product_type; ?>
                                    </li>
                                    <li class="list-group-item text-white bg-success">
                                        Categoria : <?php echo $single_product->category->name; ?>
                                        <span>
                                            <i class=" <?php echo $single_product->category->img; ?>"></i>
                                        </span>
                                    </li>
                                    <?php if ($class_name === 'Food_pet') { ?>
                                        <li class="list-group-item text-white bg-success">
                                         Ingredienti : <?php echo implode(', ', $single_product->ingredients); ?>
                                        </li>
                                    <?php } ?>
                                    <li class="list-group-item text-white bg-success">
                                        Paese di Provenienza: 
                                        <small><?php echo $single_product->made_in; ?></small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>
<?php

include __DIR__ . '/models/Product.php';
include __DIR__ . '/models/Category.php';
include __DIR__ . '/models/Food.php';
include __DIR__ . '/models/Game.php';
include __DIR__ . '/models/Accessory.php';


$product_1 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1762092882', 'Monge All Breeds Adult Salmone e Riso', '45,90', new Category('Dog'), 'Peso Netto: 12kg', 'Ingredienti: riso e salmone');
$product_2 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/257887/manzo-800.jpg?v=1762090665', 'Stuzzy Dog Monoproteico Lattina 800G', '3,75', new Category('Dog'), 'Peso Netto: 800g', 'Ingredienti: Manzo al vapore');
$product_3 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/263982/8059149247618_124050_AFF_TRA33_21_Sterilized_Salmon_10Kg_AAFF_3D.jpg?v=1762093510', 'Natural Trainer Gatto Sterilised Salmone', '56,99', new Category('Cat'), 'Peso Netto: 10kg', 'Ingredienti: Salmone e Piselli');
$product_4 = new Accessory('https://arcaplanet.vtexassets.com/arquivos/ids/269653/lovedi-cuccia-rettangolare-catene-verde-smeraldo.jpg?v=1762080705', 'Cuccia Rettangolare Catene Verde Smeraldo', '47,95', new Category('Cat'), 'Materiale: policotone', 'Dimensioni: 45X60X17');
$product_5 = new Game('https://arcaplanet.vtexassets.com/arquivos/ids/224877/camon-cane-gioco-dental-fun-palla-baseball.jpg?v=1762109063', 'Palla Baseball Dental Fun', '2,70', new Category('Dog'), 'Caratteristiche: robusta e resistente', 'Dimensioni: 5 cm');
$product_6 = new Game('https://arcaplanet.vtexassets.com/arquivos/ids/223859/trixie-cane-gioco-palle-calcio-morbida.jpg?v=1762074984', 'Palla per Cane Calcio Morbida', '2,70', new Category('Dog'), 'Caratteristiche: robusta e resistente', 'Dimensioni: 5 cm');
$product_7 = new Accessory('https://arcaplanet.vtexassets.com/arquivos/ids/253163/Ferplast-gabbia-uccelli-giulietta-.jpg?v=1762089471', 'Ferplast Gabbia Uccelli Giulietta Nera', '99,00', new Category('Bird'), 'Materiale:  legno', 'Dimensioni: TG.4: 57 x 30 x h 50 cm');
$product_8 = new Game('https://arcaplanet.vtexassets.com/arquivos/ids/227366/pollaio-hen-house-30.jpg?v=1761441211', 'Pollaio Hen House Ferplast', '303,20', new Category('Bird'), 'Materiali: egno di pino nordico di prima qualità', 'Dimensioni: 30 galline');
$product_9 = new Game('https://arcaplanet.vtexassets.com/arquivos/ids/272715/TETRA-A.-ALGU-MIN-ML100-PZ12.jpg?v=1761700206', 'Tetra Algu Min 100ML', '4,67', new Category('Fish'), 'Caratteristiche: adatto a tutti gli acquari di acqua dolce', 'Dimensioni: ND');
$product_10 = new Game('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg?v=1762083756', 'Cartucce Filtranti per Filtro EasyCrystal', '5,90', new Category('Fish'), 'Caratteristiche: acqua cristallina', 'Dimensioni: ND');

$arrayproducts = [
    $product_1,
    $product_2,
    $product_3,
    $product_4,
    $product_5,
    $product_6,
    $product_7,
    $product_8,
    $product_9,
    $product_10,
];

function setTypology($typology)
{
    if ($typology == 'Dog') {
        return '<i class="fa-solid fa-dog"></i>';
    } elseif ($typology == 'Cat') {
        return '<i class="fa-solid fa-cat"></i>';
    } elseif ($typology == 'Bird') {
        return '<i class="fa-solid fa-dove"></i>';
    } else {
        return '<i class="fa-solid fa-fish-fins"></i>';
    }
};

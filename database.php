<?php

include __DIR__ . '/models/Products.php';
include __DIR__ . '/models/Category.php';
include __DIR__ . '/models/Type.php';
include __DIR__ . '/models/Food.php';
include __DIR__ . '/models/Game.php';
include __DIR__ . '/models/Accessory.php';

$product_1 = new Products('https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1762092882', 'Monge All Breeds Adult Salmone e Riso', '45,90', new Category('Dog'), new Type(new food(12, 'Salmone e Riso')));

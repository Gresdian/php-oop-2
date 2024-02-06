<?php
class Product
{
    public $name;
    public $price;
    public $image;
    public $is_available;
    public $category;

    function __construct(String $_name, Float $_price, String $_image, Bool $_is_available, Category $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->is_available = $_is_available;
        $this->category = $_category;
    }

    public function getPrice()
    {
        return $this->price . "€";
    }
}

class Food extends Product
{
    public $weight;
    public $ingredients;

    function __construct(String $_name, Float $_price, String $_image, Bool $_is_available, Category $_category, $_weight, array $_ingredients)
    {
        parent::__construct($_name, $_price, $_image, $_is_available, $_category);
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}

class Toy extends Product
{
    public $features;
    public $size;

    function __construct(String $_name, Float $_price, String $_image, Bool $_is_available, Category $_category, String $_features, $_size)
    {
        parent::__construct($_name, $_price, $_image, $_is_available, $_category);
        $this->features = $_features;
        $this->size = $_size;
    }
}

class Accessory extends Product
{
    public $material;
    public $size;


    function __construct(String $_name, Float $_price, String $_image, Bool $_is_available, Category $_category, String $_material, $_size)
    {
        parent::__construct($_name, $_price, $_image, $_is_available, $_category);
        $this->material = $_material;
        $this->size = $_size;
    }
}

class Category
{
    public $name;
    public $icon;

    public function __construct(String $_name, String $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }
}

$categories = [
    'cane' => new Category('Cane', 'fas fa-dog'),
    'gatto' => new Category('Gatto', 'fas fa-cat'),
    'uccello' => new Category('Uccello', 'fas fa-dove'),
    'pesce' => new Category('Pesce', 'fas fa-fish'),
];

$cane = new Category('Cane', 'fas fa-dog');

$products = [
    new Food('Royal Canin Mini Adult', 47.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', true, $categories['cane'], '500g', ['Manzo', 'Tacchino', 'Riso']),

    new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 47.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', true, $categories['cane'], '1000g', ['Manzo', 'Cereali']),

    new Food('Almo Nature Cat Daily Lattina', 47.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', true, $categories['gatto'], '400g', ['Tonno', 'Pollo', 'Prosciutto']),

    new Food('Mangime per Pesci Guppy in Fiocchi', 47.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', true, $categories['pesce'], '30g', ['Pesci e sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'alghe']),

    new Accessory('Voliera Wilma in Legno', 47.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', true, $categories['uccello'], 'Legno', 'M: L 83 x P 67 x H 153 cm'),

    new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 47.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', true, $categories['pesce'], 'Materiale espanso', 'ND'),

    new Toy('Kong Classic', 47.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', true, $categories['cane'], 'Galleggia e rimbalza', '8,5 cm x 10 cm'),

    new Toy('Topini di peluche Trixie', 47.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', true, $categories['gatto'], 'Morbido con codina in corda', '8,5 cm x 10 cm'),

]

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5">Shop</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php
                    foreach ($products as $product) {
                    ?>
                        <div class="col-4 col-md-4 p-3">
                            <div class="card h-100 ">
                                <img src="<?php echo $product->image; ?>" alt="<?php echo $product->name; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <?php echo $product->name; ?>
                                    </h2>
                                    <div class="card-text">
                                        <p>
                                            <i class="<?php echo $product->category->icon; ?>"></i> <?php echo $product->category->name; ?>
                                        </p>
                                    </div>
                                    <div class="card-text">
                                        <p>
                                            Price: <strong><?php echo $product->price; ?></strong>
                                        </p>
                                    </div>
                                    <div class="card-text">
                                        <?php if (get_class($product) == 'Food') { ?>
                                            <p>
                                                peso netto: <?php echo $product->weight . 'g'; ?>
                                            </p>
                                            <p>
                                                ingredienti: <?php echo implode(',', $product->ingredients); ?>
                                            </p>
                                        <?php } ?>
                                        <?php if (get_class($product) == 'Toy') { ?>
                                            <p>
                                                caratteristiche: <?php echo $product->features; ?>
                                            </p>
                                            <p>
                                                dimensioni: <?php echo $product->size; ?>
                                            </p>
                                        <?php } ?>
                                        <?php if (get_class($product) == 'Accessory') { ?>
                                            <p>
                                                materiale: <?php echo $product->material; ?>
                                            </p>
                                            <p>
                                                dimensioni: <?php echo $product->size; ?>
                                            </p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
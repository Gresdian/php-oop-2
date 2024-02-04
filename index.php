<?php
class Product
{
    public $name;
    public $price;
    public $image;
    public $is_available;

    function __construct(String $_name, Float $_price, String $_image, Bool $_is_available)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->is_available = $_is_available;
    }
}

class Food extends Product
{
    public $weight;
    public $ingredients;

    function __construct(String $_name, Float $_price, String $_image, Bool $_is_available, Float $_weight, array $_ingredinets)
    {
        parent::__construct($_name, $_price, $_image, $_is_available);
        $this->weight = $_weight;
        $this->ingredients = $_ingredinets;
    }
}

class Toy extends Product
{
    public $features;
    public $size;

    function __construct(String $_name, Float $_price, String $_image, Bool $_is_available, String $_features, Float $_size)
    {
        parent::__construct($_name, $_price, $_image, $_is_available);
        $this->features = $_features;
        $this->size = $_size;
    }
}

class Accessory extends Product
{
    public $material;
    public $size;


    function __construct(String $_name, Float $_price, String $_image, Bool $_is_available, String $_material, Float $_size)
    {
        parent::__construct($_name, $_price, $_image, $_is_available);
        $this->material = $_material;
        $this->size = $_size;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    $product = new Product('Royal Canin Mini Adult', '23,90', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', true);
    ?>
</body>

</html>
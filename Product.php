class Product
{
public $id = 0;
public $name = "Default";


function __construct($product_json)
{
$this->id = $product_json[0];
}
}
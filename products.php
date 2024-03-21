<head>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<?php


// Read the JSON file
$json = file_get_contents("products.json");

// Decode the JSON file
$json_data = json_decode($json, true)["data"];

?>

<table class="w3-striped">
    <tr>
        <th colspan="6">Look at our lovely products!</th>
    </tr>

    <?php
    // Display data
    foreach ($json_data as $product) {

        $attributes = $product["attributes"];
        $image_url = $attributes["media"][0]["url"];
        $description = $attributes["description"];
        $price = "£" . $attributes["prices"][0]["price_pennies"] / 100.00;

        ?>
        <tr>
            <th><?php print_r($attributes["name"]); ?></th>
            <th><?php echo $price; ?></th>
            <td><img src="<?php echo $image_url; ?>" width="100"></td>
            <td><?php echo $description; ?></td>
            <td>Product code: <?php echo($product["id"]); ?></td>

        </tr>

        <?php
    }

    ?>
</table>

</body>


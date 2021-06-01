<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Premium.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Prime.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>
</head>
<body>
    
    <header>
        <h1>Eshop</h1>
    </header>

    <main>
        <section>
            <h2>Users</h2>
            <?php
            $user1 = new User('Giuseppe', 'Rossi', 40); ?>

            <h3><?php echo $user1->getFullName(); ?></h3>
            <div>
                <p>Site discount: <?php echo $user1->getSale(); ?></p>
            </div>
            <?php
            $user2 = new User('Riccardo', 'Alti', 25); ?>

            <h3><?php echo $user2->getFullName(); ?></h3>
            <div>
                <p>Site discount: <?php echo $user2->getSale(); ?></p>
            </div>
            <?php
            $premium1 = new Premium('Maria', 'Gialli', 29, 3); ?>

            <h3><?php echo $premium1->getFullName(); ?></h3>
            <div>
                <p>Site discount: <?php echo $premium1->getSale(); ?></p>
            </div>
            <?php
            $premium2 = new Premium('Veronica', 'Resi', 50, 1); ?>

            <h3><?php echo $premium2->getFullName(); ?></h3>
            <div>
                <p>Site discount: <?php echo $premium2->getSale(); ?></p>
            </div>
        </section>

        <section>
            <h2>Products</h2>

            <?php
            $product1 = new Product('Computer-X101', 'Lorem ipsum'); ?>

            <h3><?php echo $product1->getName(); ?></h3>
            <div>
                <?php echo $product1->setPrice(500)?>
                <p><?php echo $product1->getPrice() . '€'; ?></p>
            </div>
            <?php
            $prime1 = new Prime('Cellulare-S1', 'Lorem', 300); ?>

            <h3><?php echo $prime1->getName(); ?></h3>
            <div>
                <p><?php echo $prime1->specialPrice; ?></p>
            </div>
            <?php
            $product2 = new Product('Cellulare-S8', 'Ipsum'); ?>

            <h3><?php echo $product2->getName(); ?></h3>
            <div>
                <p><?php try {
                    echo $product2->setPrice('ciao');
                } catch(Exception $e) {
                    echo 'Exception: '.$e->getMessage();
                } ?></p>
            </div>
        </section>
    </main>

</body>
</html>
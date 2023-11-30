<?php include "header.php" ?>
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <img src ="<?php echo $product['image']; ?>" height="368" alt=""/>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="card card-body">
                                <h4>Product Name:<?php echo $product['name']; ?></h4>
                                <p>TK:<?php echo $product['price']; ?></p>
                                <p>Description:<?php echo $product['description']; ?></p>
                            </div>
                    </div>
            </div>
        </div>
    </section>
<?php include "footer.php"?>
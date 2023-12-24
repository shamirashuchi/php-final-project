<?php include "header.php"; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) {  ?>
            <div class="col-md-4">
                <div class="card">
                    <img src ="<?php echo $product['image']; ?>" height="368" alt=""/>
                    <div class="card-body">
                        <h4>Product Name:<?php echo $product['name']; ?></h4>
                        <p>TK.<?php echo $product['price']; ?></p>
                        <hr/>
                        <a href="web.php?page=product-detail&id=<?php echo $product['id']; ?>" class="btn btn-success">Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>

<?php include 'header.php'; ?>
<section class="py-5 bg-primary-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="<?php echo $student['image']; ?>"alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1>Student name:<?php echo $student['name']; ?></h1>
                    <h1>Roll:<?php echo $student['roll']; ?></h1>
                    <h1>Mobile:<?php echo $student['mobile']; ?></h1>
                    <h1>Email:<?php echo $student['email']; ?></h1>
                    <p><?php echo $student['biography']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
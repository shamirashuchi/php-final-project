<?php include "header.php"; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                           Login Form
                        </div>
                        <div class="card-body">
                            <p class="text-danger text-center"><?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?></p>
                            <form action="web.php" method="post">
                                <div class="row mb-3">
                                    <label class="col-lg-3">User name</label>
                                    <div class="row mb-9">
                                        <input type="text" class="form-control" name="user_name"/>
                                </div>
                                    <div class="row mb-3">
                                        <label class="col-lg-3">Password</label>
                                        <div class="row mb-9">
                                            <input type="password" class="form-control" name="password"/>
                                        </div>
                                </div>
                                    <div class="row mb-3">
                                        <label class="col-lg-3"></label>
                                        <div class="row mb-9">
                                            <input type="submit" class="btn btn-success" name="login_btn" value="login"/>
                                        </div>
                                    </div>
                            </form>
                    </div>
                </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>

<?php include "header.php"; ?>
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">My Series</div>
                        <div class="card-body">
                            <form action="web.php" method="POST">
                                <div class="row mb-3">
                                    <label class="col-lg-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number"  class="form-control" name="starting-number"
                                </div>
                                </div>
                                    <div class="row mb-3">
                                        <label class="col-lg-3">Ending Number</label>
                                        <div class="col-md-9">
                                            <input type="number"  class="form-control" name="ending-number"
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-lg-3">Result</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-lg-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit"  class="btn btn-success" value="Make Series" name="series-btn"/>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </section>
<?php include "footer.php"; ?>
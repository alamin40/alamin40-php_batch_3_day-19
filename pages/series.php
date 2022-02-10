<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Sum of Series</div>
                    <div class="card-body">



                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo isset($result['starting_number']) ? $result['starting_number']: '' ?>" required class="form-control" name="starting_number" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo isset($result['ending_number']) ? $result['ending_number']: '' ?>" required class="form-control" name="ending_number" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5"> <?php echo isset($result['result']) ? $result['result']: '' ?> </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="series_btn" value="Submit" />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>

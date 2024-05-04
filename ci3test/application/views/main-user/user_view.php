<?php $this->load->view('includes/header'); ?>
<div class="container" style="margin-top: 40px; ">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="heading">
                    <h5 class="card-title text-center">
                        Add Details </h5>
                </div>


                <form action="<?php echo base_url(); ?>user/add" method="post">

                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">Tenders</option>
                            <option value="2">Circulars</option>
                            <option value="3">Online RTI</option>
                        </select>
                      </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Enter date here...">
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary float-end"><i class="fa fa-paper-plane"
                        aria-hidden="true"></i> Submit </button>
            </div>
            </form>

        </div>
        <div class="mb-3">
            <?php
            if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success" role="alert">
                    User added successfully!!
                </div>
            <?php }
            ?>

            <?php
            if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger" role="alert">
                    Failed!!
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>
</div>
<?php $this->load->view('includes/footer'); ?>
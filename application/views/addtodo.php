<?php $this->load->view('inc/header'); ?>

    <br>
    <div class="row">
        <div class="col-md-4 offset-4">
            <!--            --><?php //echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
            <form action="<?php echo base_url('User/insert');?>" method="post">
                <div class="form-group">
                    <label for="label-control">Todo List</label>
                    <input type="text" name="todotext" class="form-control" required>
                    <button type="submit" class="btn btn-primary">Add Todo</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 offset-4">
            <p></p>
            <p></p>
        </div>
    </div>

<?php $this->load->view('inc/footer'); ?>





<?php $this->load->view('inc/header'); ?>

<br>
    <div class="row">
        <div class="col-md-4 offset-4">
<!--            --><?php //echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
            <form action="<?php echo base_url('User/insert');?>" method="post">
                <div class="form-group">
                    <label for="label-control">Todo List</label>
                    <input type="text" name="todotext" class="form-control" required>
                    <button type="submit" class="btn btn-primary" style="margin-top: 3px;">Add Todo</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 offset-4">
            <?php foreach($posts as $post):?>
            <p><?php echo $post->todotext?></p>
            <p>
                <a href="<?php echo base_url('/User/showpost/'.$post->id);?>" type="submit" class="btn btn-primary" style="border: transparent;">Edit</a>
                |
                <a href="<?php echo base_url('/User/delete/'.$post->id);?>" type="submit" class="btn btn-danger" style="border: transparent;">Delete</a>
            </p>
            <?php endforeach; ?>
        </div>
    </div>

<?php $this->load->view('inc/footer'); ?>




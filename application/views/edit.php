<?php $this->load->view('inc/header'); ?>

<br>
<div class="row">
    <div class="col-md-4 offset-4">
        <form action="<?php echo base_url();?>User/edit/" method="post">
            <div class="form-group">
                <input type="hidden"  name="id" value="<?php echo $post->id;?>">
                <label for="label-control">Todo List</label>
                <input type="text" name="todotext" class="form-control" value="<?php echo set_value('todotext', $post->todotext)?>" required>
                <button type="submit" class="btn btn-primary" style="margin-top: 3px;">Update Todo</button>
            </div>
        </form>
    </div>
</div>


<?php $this->load->view('inc/footer'); ?>




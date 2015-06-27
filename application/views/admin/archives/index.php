<div class="span9">
    <div class="row-fluid">
        <h1>Archives</h1>
        <hr/>
        
        <?php echo $this->session->flashdata('message'); ?>
        <?php if (isset($message) && $message): echo $message; endif; ?>
        <?php echo validation_errors(); ?>
    
        <?php echo form_open('admin/archives/dates', array('class' => 'well')); ?>
            <label for="start">Start Date</label>
            <input type="text" id="start" name="start" value="<?php echo set_value('start'); ?>">
            <label for="end">End Date</label>
            <input type="text" id="end" name="end" value="<?php echo set_value('end'); ?>">

            <div>
                <button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Ok</button>
                <button class="btn" type="reset"><i class="icon-ok icon-remove"></i> Cancel</button>
            </div>
        </form>
    </div>
</div><!--/span-->
<script>
    $(function() {
        $( "#start" ).datepicker({ dateFormat: "yy-mm-dd"});
        $( "#end" ).datepicker({ dateFormat: "yy-mm-dd"});
    });
</script>
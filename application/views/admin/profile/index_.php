<div class="midr">
    <div class="midrt tal t4a">Account information for <?php echo ucfirst($user->last_name); ?>,&nbsp;<?php echo ucfirst($user->first_name); ?></div>
        <h1></h1>
        <hr/>
        
        <?php echo $this->session->flashdata('message'); ?>
        <?php if (isset($message) && $message): echo $message; endif; ?>
        <?php echo validation_errors(); ?>
    
        <?php echo form_open('admin/profile', array('class' => 'well')); ?>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="<?php echo $user->last_name; ?>">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="<?php echo $user->first_name; ?>">
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo $user->email; ?>">
            <label for="username">Username</label>
            <input type="text" name="username" value="<?php echo $user->username; ?>">
            <label for="old_password">Old Password</label>
            <input type="password" name="old_password">
            <label for="password">New Password</label>
            <input type="password" name="password">
            <label for="retype_password">Retype New Password</label>
            <input type="password" name="retype_password">

            <div>
                <button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Save changes</button>
                <button class="btn" type="reset"><i class="icon-ok icon-remove"></i> Cancel</button>
            </div>
        </form>
    <!--/div-->
</div><!--/span-->
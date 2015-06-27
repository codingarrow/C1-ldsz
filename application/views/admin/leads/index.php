<?php ini_set('date.timezone', 'America/Los_Angeles'); ?>
<!--div class="span9"-->
<!--div class="midr"-->
	<div class="midmrtitle t3">Leads Registration</div>
	<!--div class="midrc"><div class="midrca2">
	   <div class="midrc2c t5"-->
    
        <?php echo validation_errors(); ?>
    
        <?php echo form_open('admin/leads', array('name' => 'form2', 'id' => 'form2')); ?>
		<div class="midmrc">
          <div class="midrca t4">
            <div class="cul">
		<!--div class="cul t5"-->
            <strong>First Name</strong><br>
            <input type="text" name="firstname" id="firstname" value="<?php echo set_value('firstname'); ?>" class="f3 t5c" tabindex="1"><br>
			<strong>Last Name</strong><br>
            <input type="text" name="lastname" value="<?php echo set_value('lastname'); ?>" class="f3 t5c" tabindex="3"><br>
            <strong>Street Address</strong><br>
                <input type="text" name="address" value="<?php echo $address; ?>" class="f3 t5c" tabindex="5"><br>
            <strong>State/Province</strong><br>
            	<input type="text" name="state_province" value="<?php echo $state_province; ?>" class="f3 t5c" tabindex="7"><br>
            <strong>Zip Code/Postal Code</strong><br>
				<input type="text" name="zip" id="zip" value="<?php echo $zip; /*set_value('member_zip')*/ ?>" maxlength="6" class="f3 t5c" tabindex="9"><br>
			<strong>Home Phone</strong><br>
				<input type="text" name="home_phone" value="<?php echo $home_phone; //echo $phonenumber1; /*set_value('member_alternatephone')*/; ?>" class="f3 t5c" tabindex="11"><br>
			<strong>Mobile Phone</strong><br>
				<input type="text" name="phonenumber3" value="<?php //echo $phonenumber3; /*set_value('member_alternatephone')*/; ?>" class="f3 t5c" tabindex="13"><br>
            <strong>Ethnicity</strong><br>
				<?php echo form_dropdown('ethnicity', $print_country,'1','tabindex=15, class="f3 t5c"'); ?>
				<!--select name="ethnicity" class="f3 t5c" tabindex="15">
					<option value="Caucasian" <?php echo set_select('ethnicity', 'Caucasian'); ?>>Caucasian</option>
					<option value="African American" <?php echo set_select('ethnicity', 'African American'); ?>>African American</option>
					<option value="Latino/Hispanic" <?php echo set_select('ethnicity', 'Latino/Hispanic'); ?>>Latino/Hispanic</option>
                    <option value="Native American" <?php echo set_select('ethnicity', 'Native American'); ?>>Native American</option>
                    <option value="Asian" <?php echo set_select('ethnicity', 'Asian'); ?>>Asian</option>
                    <option value="Pacific Islander" <?php echo set_select('ethnicity', 'Pacific Islander'); ?>>Pacific Islander</option>
                    <option value="Other" <?php echo set_select('ethnicity', 'Other'); ?>>Other</option>
				</select--><br>	
            <strong>Time Zone</strong><br>
				<!--input type="text" name="name_on_card" value="<?php //echo set_value('name_on_card'); ?>" class="f3 t5c" tabindex="24"><br-->
                <?php echo form_dropdown('timezone', $print_timezone,'1','tabindex=17, class="f3 t5c"'); ?><br />
            <strong>Lead Source</strong><br>
            <input type="text" name="lead_source" value="<?php echo $lead_source; //set_value('member_company'); ?>" class="f3 t5c" tabindex="19">
			<!--select name="lead_source" class="f3 t5c" tabindex="19">
            	<option value="Inquiry" <?php echo set_select('lead_source', 'Inquiry'); ?>>Inquiry</option>
				<option value="Referral" <?php echo set_select('lead_source', 'Referral'); ?>>Referral</option>
                <option value="Website" <?php echo set_select('lead_source', 'Website'); ?>>Website</option>
			</select--><br>
			<!--/div-->
			<strong>Lead Quality</strong><br>
				<select name="lead_quality" class="f3 t5c" tabindex="21">
					<option value="Unknown" <?php echo set_select('lead_quality', 'Unknown'); ?>>Unknown</option>
					<option value="Low" <?php echo set_select('lead_quality', 'Low'); ?>>Low</option>
					<option value="Premium" <?php echo set_select('lead_quality', 'Premium'); ?>>Premium</option>
				</select>
				<br>
			
			<br>
		</div>	
			
		<div class="cur2">
          <div class="cura2">
            <div class="curb">
				<strong>Lead Import Date</strong><br>
				<input type="text" name="signupdate" id="signupdate" value="<?php echo date("m-d-Y");/*set_value('member_signupdate')*/; ?>" class="f3 t5c" tabindex="2"><br>
				<strong>Company</strong><br>
				<input type="text" name="company" value="<?php echo $company; //set_value('member_company'); ?>" class="f3 t5c" tabindex="4"><br>
				<strong>Apartment Number</strong><br>
                <input type="text" name="apartment_num" value="<?php echo $apartment_num; //set_value('address'); ?>" class="f3 t5c" tabindex="6"><br>
                <strong>City</strong><br>
            	<input type="text" name="city" value="<?php echo $city; ?>" class="f3 t5c" tabindex="8"><br>
                <strong>Country</strong><br>
                <?php echo form_dropdown('country', $print_country,'1','tabindex=10, class="f3 t5c"'); ?><br />
				<strong>Work Phone</strong><br>
				<input type="text" name="work_phone" value="<?php echo $work_phone; ?>" class="f3 t5c" tabindex="12"><br> 
				<strong>Email</strong><br>
                <input type="text" name="email" value="<?php echo $email; ?>" class="f3 t5c" tabindex="14"><br>
				<strong>Website</strong><br>
				<input type="text" name="website" value="<?php //echo $member_website /*set_value('member_website')*/ ; ?>" class="f3 t5c" tabindex="16"><br>			
            	<strong>Language</strong><br>
            	<?php echo form_dropdown('language', $print_language,'1','tabindex=18, class="f3 t5c"'); ?><br />
				<strong>Lead Type</strong><br>
				<select name="lead_type" class="f3 t5c" tabindex="20">
					<option value="Residential" <?php echo set_select('lead_type', 'Residential'); ?>>Residential</option>
					<option value="Business" <?php echo set_select('lead_type', 'Business'); ?>>Business</option>
				</select><br>
		</div></div></div>
		
		<div style="clear: both;"></div><br>
            <div>
                <!--button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Save changes</button-->
				<input type="hidden" name="addlead" value="1">
				<input type="submit" name="submit" value="Submit" class="btn_send" />
                <!--button class="btn" type="reset"><i class="icon-ok icon-remove"></i> Cancel</button-->
            </div>
        </form>
	</div></div></div>
   <!--/div-->
<!--/div--><!--/span-->
<script>
    $(function() {
        $( "#member_signupdate" ).datepicker({ dateFormat: "yy-mm-dd"});
    });
</script>
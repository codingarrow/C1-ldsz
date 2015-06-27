		<div class="midmrtitle t3">Edit Membership</div>
						<?php echo validation_errors(); ?>
    
        <?php echo form_open('admin/leads/edit', array('name' => 'form2', 'id' => 'form2')); ?>
		<div class="midmrc">
          <div class="midrca t4">
            <div class="cul">
		<!--div class="cul t5"-->
            <strong>First Name</strong><br>
            <input type="text" name="firstname" id="firstname" value="<?php echo $lead->first_name ?>" class="f3 t5c" tabindex="1"><br>
			<strong>Last Name</strong><br>
            <input type="text" name="lastname" value="<?php echo $lead->last_name; ?>" class="f3 t5c" tabindex="3"><br>
            <strong>Street Address</strong><br>
                <input type="text" name="address" value="<?php echo $lead->address; ?>" class="f3 t5c" tabindex="5"><br>
            <strong>State/Province</strong><br>
            	<input type="text" name="state_province" value="<?php echo $lead->state_province; ?>" class="f3 t5c" tabindex="7"><br>
            <strong>Zip Code/Postal Code</strong><br>
				<input type="text" name="zip" id="zip" value="<?php echo $lead->zip /*set_value('member_zip')*/ ?>" maxlength="6" class="f3 t5c" tabindex="9"><br>
			<strong>Home Phone</strong><br>
				<input type="text" name="home_phone" value="<?php echo $lead->home_phone;//echo $phonenumber1; /*set_value('member_alternatephone')*/; ?>" class="f3 t5c" tabindex="11"><br>
			<strong>Mobile Phone</strong><br>
				<input type="text" name="mobile_phone" value="<?php echo $lead->mobile_phone;//echo $phonenumber3; /*set_value('member_alternatephone')*/; ?>" class="f3 t5c" tabindex="13"><br>
            <strong>Ethnicity</strong><br>
				<!--select name="ethnicity" class="f3 t5c" tabindex="15">
					<option value="Caucasian" <?php if($lead->ethnicity == "Caucasian") { echo "selected"; } ?>>Caucasian</option>
					<option value="African American" <?php if($lead->ethnicity == "African American") { echo "selected"; } ?>>African American</option>
					<option value="Latino/Hispanic" <?php if($lead->ethnicity == "Latino/Hispanic") { echo "selected"; } ?>>Latino/Hispanic</option>
                    <option value="Native American" <?php if($lead->ethnicity == "Native American") { echo "selected"; } ?>>Native American</option>
                    <option value="Asian" <?php if($lead->ethnicity == "Asian") { echo "selected"; } ?>>Asian</option>
                    <option value="Pacific Islander" <?php if($lead->ethnicity == "Pacific Islander") { echo "selected"; } ?>>Pacific Islander</option>
                    <option value="Other" <?php if($lead->ethnicity == "Other") { echo "selected"; } ?>>Other</option>
				</select-->
				<?php echo form_dropdown('ethnicity', $print_country, $lead->ethnicity,'tabindex=15, class="f3 t5c"'); ?>
				<br>	
            <strong>Time Zone</strong><br>
				<!--input type="text" name="name_on_card" value="<?php //echo set_value('name_on_card'); ?>" class="f3 t5c" tabindex="24"><br-->
                <?php echo form_dropdown('timezone', $print_timezone, $lead->timezone,'tabindex=17, class="f3 t5c"'); ?><br />
            <strong>Lead Source</strong><br>
			<input type="text" name="lead_source" value="<?php echo $lead->lead_source; //set_value('member_company'); ?>" class="f3 t5c" tabindex="19">
            <!--select name="lead_source" class="f3 t5c" tabindex="19">
            	<option value="Inquiry" <?php if($lead->lead_source == "Inquiry") { echo "selected"; } ?>>Inquiry</option>
				<option value="Referral" <?php if($lead->lead_source == "Referral") { echo "selected"; } ?>>Referral</option>
                <option value="Website" <?php if($lead->lead_source == "Website") { echo "selected"; } ?>>Website</option>
			</select--><br>
			<!--/div-->
			<strong>Lead Quality</strong><br>
				<select name="lead_quality" class="f3 t5c" tabindex="21">
					<option value="Unknown" <?php if($lead->lead_quality == "Unknown") { echo "selected"; } ?>>Unknown</option>
					<option value="Low" <?php if($lead->lead_quality == "Low") { echo "selected"; } ?>>Low</option>
					<option value="Premium" <?php if($lead->lead_quality == "Premium") { echo "selected"; } ?>>Premium</option>
				</select>
				<!--input type="text" name="lead_quality" value="<?php echo $lead->lead_quality /*set_value('member_website')*/ ; ?>" class="f3 t5c" tabindex="20"--><br>
		</div>	
			
		<div class="cur2">
          <div class="cura2">
            <div class="curb">
				<strong>Lead Import Date</strong><br>
				<input type="text" name="signupdate" id="signupdate" value="<?php echo $lead->date_encoded;/*set_value('member_signupdate')*/; ?>" class="f3 t5c" tabindex="2"><br>
				<strong>Company</strong><br>
				<input type="text" name="company" value="<?php echo $lead->company; //set_value('member_company'); ?>" class="f3 t5c" tabindex="4"><br>
				<strong>Apartment Number</strong><br>
				<input type="text" name="apartment_num" value="<?php echo $lead->apartment_num; //set_value('member_company'); ?>" class="f3 t5c" tabindex="6"><br>
                <strong>City</strong><br>
            	<input type="text" name="city" value="<?php echo $lead->city; ?>" class="f3 t5c" tabindex="8"><br>
                <strong>Country</strong><br>
                <?php echo form_dropdown('country', $print_country, $lead->country,'tabindex=10, class="f3 t5c"'); ?><br />
				<strong>Work Phone</strong><br>
				<input type="text" name="work_phone" value="<?php echo $lead->work_phone; ?>" class="f3 t5c" tabindex="12"><br>
				<strong>Email</strong><br>
                <input type="text" name="email" value="<?php echo $lead->email; ?>" class="f3 t5c" tabindex="14"><br>			
                <strong>Website</strong><br>
				<input type="text" name="website" value="<?php echo $lead->website;//echo $member_website /*set_value('member_website')*/ ; ?>" class="f3 t5c" tabindex="16"><br>			
            	<strong>Language</strong><br>
            	<?php echo form_dropdown('language', $print_language, $lead->language,'tabindex=18, class="f3 t5c"'); ?><br />
				<strong>Lead Type</strong><br>
				<select name="lead_type" class="f3 t5c" tabindex="20">
					<option value="Residential" <?php if($lead->lead_type == "Residential") { echo "selected"; } ?>>Residential</option>
					<option value="Business" <?php if($lead->lead_type == "Business") { echo "selected"; } ?>>Business</option>
				</select><br>
            	
						</div></div></div>
				
				<div style="clear: both;"></div>
				<br>
				<div>
					<!--button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Save changes</button-->
					<input type="hidden" name="editlead" value="1">
					<input type="hidden" name="leadid" value="<?php echo $lead->id; ?>">
					<input type="submit" name="submit" value="Submit" class="btn_send" />
					<!--button class="btn" type="reset"><i class="icon-ok icon-remove"></i> Cancel</button-->
				</div>
			</form>
			<div style="clear: both;"></div>
		</div></div>

<script>
    $(function() {
        $( "#member_signupdate" ).datepicker({ dateFormat: "yy-mm-dd"});
    });
</script>
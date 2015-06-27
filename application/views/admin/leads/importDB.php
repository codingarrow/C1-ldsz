<div class="midmrtitle t3">Import Data From Excel</div>
<br><br>

<?php echo form_open_multipart('admin/leads/importDB'); ?>
            <label for="thumbnail">Select File to Upload:</label><br><br>
            <input type="file" name="fileupload">&nbsp;&nbsp;&nbsp;<input type="checkbox" name="chk_fileupload" value="1">&nbsp;Upload<br>
			<i>Note: Upload only with .xls or .xlsx file type and click checkbox</i>
			<input type="hidden" name="fupload" value="1">
            <br><br>
			<hr/>
			<br><br>
            <div>
				<input type="submit" name="submit" value="Upload" class="btn btn-success" />
            </div>
</form>
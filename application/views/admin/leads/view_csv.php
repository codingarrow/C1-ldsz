<table cellpadding="0" cellspacing="0" width="100%">
    <tr>
             <td width = "30%">ID</td>
			<td width = "10%">LAST NAME</td>
            <td width = "20%">FIRST NAME</td>
            <td width = "20%">EMAIL</td>
    </tr>

            <?php 
				//var_dump($csvData);
				foreach($csvData as $field){
					
			?>
                <tr>
					<td><?php echo $field['id']?></td>
                    <td><?php echo $field['last_name']?></td>
                    <td><?php echo $field['first_name']?></td>
                    <td><?php echo $field['email']?></td>
                </tr>
            <?php } ?>
</table>

<!--table cellpadding="0" cellspacing="0">
    <thead>
    <th>
            <td>PRODUCT ID</td>
            <td>PRODUCT NAME</td>
            <td>CATEGORY</td>
            <td>PRICE</td>
    </th>
    </thead>
 
    <tbody>
            <?php /*foreach($csvData as $field){
					echo $csvData;
			?>
                <tr>
                    <td><?=$field['id']?></td>
                    <td><?=$field['name']?></td>
                    <td><?=$field['category']?></td>
                    <td><?=$field['price']?></td>
                </tr>
            <?php }*/?>
    </tbody>
 
</table-->
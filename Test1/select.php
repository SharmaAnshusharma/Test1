
 <br><br><br>
<?php
	error_reporting(0);
		include('dbconnection.php');
		 $page = $_GET['page_no']; 
		if($page=="" || $page=="1")
		{
			$page1=0;
		}
		else
		{
			$page1 = ($page*5)-5;
		}

		?>


<div class="container">
	<h1 class="text-center"><b>Transaction</b></h1>
	<hr>
<table class="table  table-hover">
	<thead>
		<tr>
			<th>Description</th>
			<th>Amount</th>
			<th>Balance</th>
		</tr>
	</thead>
			<?php
		$query = mysqli_query($con,"SELECT * FROM `custom_tbl` LIMIT $page1,5 ");
		$sno =1;
		while($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['Description']; ?></td>
					<td>
						<?php 
						if($row['Amount']>0)
						{
							echo "<span style='color:green'> ".$row['Amount']."</span>";
						}
						else
						{
						echo "<span style='color:red'> ".trim($row['Amount'],'-')."</span>";	
						}
						?>
							
					</td>
					<td><?php echo $row['Balance'];?></td>
				</tr>
		<?php
		}
		?>
				</tbody>

</table>
<?php
			$query = mysqli_query($con,"SELECT * FROM `custom_tbl`");
			$count = mysqli_num_rows($query);
			$num_of_record_per_page = $count/5;
			$total_pages = ceil($num_of_record_per_page);
?>
<div id="pagination" class="pagination" align="center">
<?php 
        for($i=1; $i <= $total_pages; $i++){
            if($i == $page){
               $class_name = "active";
           }else{
              $class_name = "";
            } ?>
          <li class="page-item"><a class="page-link"  id="<?php echo $i; ?>" href=''><?php echo $i; ?></a></li>
      <?php } ?>

	</div>

</div> 
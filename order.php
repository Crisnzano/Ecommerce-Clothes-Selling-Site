<?php include("db_connect.php");

if (isset($_GET['action']) && $_GET['action']=='order' && $_GET['id']) {
	?>
	<div class="container">
		<h6><?php ?></h6>
		<div class="input-row">
			<a href="order.php" class="">Back</a>
			<table class="container"></table>
			<thead class="container">
				<thead>
					<tr>
						<th><thead>Productc Image</th>
						<th>Id</th>
						<th>Order Id</th>
						<th>Product Name</th>
						<th>Product Price</th>
						<th>Product Qty</th>
						<th>Product GST</th>
						<th>Total Pay</th>
						<th class=" container">Status</th>

					</tr>

				</thead>
				<?php

			$query = "SELECT * FROM confirm_order_product WHERE order_id = ".$_GET['id']."";
					$result = $db -> query($query);
					if ($result-> num_rows > 0) {
						while ($rows = $result-> fetch_assoc())_{
							$id = $rows['id'];
							$Order_id= $rows['order_id'];
							$Product_Image= $rows['product_image'];
							$Product_Name = $rows['product_name'];
							$Product_Price = $rows['product_price'];
							$Product_Qty = $rows['product_qty'];
							$Product_GST =$rows['product_gst_rate'];
							$Product_Tex =$rows['product_tex'];
							$Total_Pay = $rows['product_total'];
							$status= $rows['status'];
						?>
			<tbody>
				<tr>
					<form method="post" enctype=""> 
						<td><img src="../<php echo $Product_Image; ?>" name="" class="" style="width: 100px;"></td>
							<td><?php echo $id; ?></td>
							<td><?php echo $Product_Id; ?></td>
							<td><?php echo $Product_Name; ?></td>
							<td><?php echo $Product_Price; ?></td>
							<td><?php echo $Product_Qty; ?></td>
							<td><?php echo $Product_GST; ?></td>
							<td><?php echo $Product_Tex; ?></td>
							<td><?php echo $Total_Pay; ?></td>
							<td class="card"><?php echo $status; ?></td>
					</form>
				</div>
				</tr>
			</tbody>
						}
					}

			</thead>
		</div>
	</div>
}
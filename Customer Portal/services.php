


<div class="card" >
	<div class="card-header text-center text-white" style=" background-color: #facc15;" >
		<h1 class="">Product List</h1>
		<div class="card-tools">
			<!-- <a href="javascript:void(0)" id="create_new" class="btn btn-flat btn-primary"><span class="fas fa-plus"></span>  Create New</a> -->
		</div>
	</div>
	<div class="card-body">
		<div class="container-fluid">
        <div class="container-fluid">
			<table class="table table-bordered table-striped">
				<colgroup>
					<col width="5%">
					
					<col width="20%">
					<col width="20%">
					<col width="10%">
					<col width="15%">
					
				</colgroup>
				<thead>
					<tr>
						<th>#</th>
						
						<th>Product Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Status</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
						$qry = $conn->query("SELECT * from `services_list`  order by `name` asc ");
						while($row = $qry->fetch_assoc()):
					?>
						<tr>
							<td class="text-center"><?php echo $i++; ?></td>
							
							<td><?php echo $row['name'] ?></td>
							<td class="truncate-1"><?php echo $row['description'] ?></td>
							<td class="text-right"><?php echo number_format($row['price'],2) ?></td>
							<td class="text-center">
                                <?php if($row['status'] == 1): ?>
                                    <span class="badge badge-success rounded-pill">Available</span>
                                <?php else: ?>
                                    <span class="badge badge-danger rounded-pill">Out of Stock</span>
                                <?php endif; ?>
                            </td>
							
							</td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('.delete_data').click(function(){
			_conf("Are you sure to delete this Service permanently?","delete_service",[$(this).attr('data-id')])
		})
		$('#create_new').click(function(){
			uni_modal("<i class='fa fa-plus'></i> Add New Service","maintenance/manage_service.php","mid-large")
		})
		$('.edit_data').click(function(){
			uni_modal("<i class='fa fa-edit'></i> Edit Service Details","maintenance/manage_service.php?id="+$(this).attr('data-id'),"mid-large")
		})
		$('.view_data').click(function(){
			uni_modal("<i class='fa fa-list'></i> Service Details","maintenance/view_service.php?id="+$(this).attr('data-id'),"")
		})
		$('.table td,.table th').addClass('py-1 px-2 align-middle')
		$('.table').dataTable();
	})
	function delete_service($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=delete_service",
			method:"POST",
			data:{id: $id},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.reload();
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
</script>
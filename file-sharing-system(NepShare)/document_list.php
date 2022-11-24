<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-primary" style="background-color: #fff;box-shadow: 0px 7px 20px #08010196;width:100%;border-radius: 5px;min-height: 50vh;padding: 20px;text-align: center;">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_document"><i class="fa fa-plus"></i> Add New</a>
			</div>
		</div>
		<div class="card-body"style="background-color: #fff;box-shadow: 0px 7px 20px #08010196;width:100%;border-radius: 5px;min-height: 50vh;padding: 20px;text-align: center;">
			<table class="table tabe-hover table-bordered" id="list">
			     <?php if($_SESSION['login_type'] == 1 ): ?>
				<colgroup>
					<col width="10%">
					<col width="25%">
					<col width="35%">
					<col width="20%">
					<col width="10%">
				</colgroup>
			    <?php else: ?>
				<colgroup>
					<col width="10%">
					<col width="30%">
					<col width="50%">
					<col width="10%">
				</colgroup>
			    <?php endif; ?>

				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Title</th>
						<th>Description</th>
					     <?php if($_SESSION['login_type'] == 1 ): ?>
						<th>User</th>
					    <?php endif; ?>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$where = '';
					if($_SESSION['login_type'] == 1 ):
					$user = $conn->query("SELECT * FROM users where id in (SELECT user_id FROM documents) ");
					while($row = $user->fetch_assoc()){
						$uname[$row['id']] = ucwords($row['lastname'].', '.$row['firstname'].' '.$row['middlename']);
					}
					else:
						$where = " where user_id = '{$_SESSION['login_id']}' ";
					endif;
					$qry = $conn->query("SELECT * FROM documents $where order by unix_timestamp(date_created) desc ");
					while($row= $qry->fetch_assoc()):
						$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
						unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
						$desc = strtr(html_entity_decode($row['description']),$trans);
						$desc=str_replace(array("<li>","</li>"), array("",", "), $desc);
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ucwords($row['title']) ?></b></td>
						<td><b class="truncate"><?php echo strip_tags($desc) ?></b></td>
						  <?php if($_SESSION['login_type'] == 1 ): ?>
						<td><?php echo isset($uname[$row['user_id']]) ? $uname[$row['user_id']] : "Deleted User" ?></td>
					    <?php endif; ?>
						<td class="text-center">
							
		                    <div class="btn-group">
		                        <a href="./index.php?page=edit_document&id=<?php echo $row['id'] ?>" class="btn btn-primary btn-flat">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <a  href="./index.php?page=view_document&id=<?php echo md5($row['id']) ?>" class="btn btn-info btn-flat">
		                          <i class="fas fa-eye"></i>
		                        </a>
		                        <button type="button" class="btn btn-danger btn-flat delete_document" data-id="<?php echo $row['id'] ?>">
		                          <i class="fas fa-trash"></i>
		                        </button>
	                      </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('.delete_document').click(function(){
	_conf("Are you sure to delete this document?","delete_document",[$(this).attr('data-id')])
	})
	})
	function delete_document($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_file',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>
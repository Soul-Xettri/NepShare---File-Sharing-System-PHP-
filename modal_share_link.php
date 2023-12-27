<?php
function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    $base = explode("/",$_SERVER['REQUEST_URI'],3);
    $base = $base[1];
    return $protocol . "://" . $_SERVER['HTTP_HOST'] .'/'. $base;
}
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="d-flex w-100">
			<blockquote class="bg-gray-dark" id="link"><?php echo url().'/share.php?id='.$_GET['did'] ?></blockquote>
		</div>
	</div>	

</div>
<div class="modal-footer display p-0 m-0">
        <button type="button" class="btn bg-gradient-primary" type="button" onclick="copyToClipboard('#link')"><i class="fa fa-copy"></i> Copy to Clip Board</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
<style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
</style>
<script>
	
	function copyToClipboard(element) {
	  var $temp = $("<input>");
	  $("body").append($temp);
	  $temp.val($(element).text()).select();
	  document.execCommand("copy");
	  $temp.remove();
	  alert_toast("Link Copied",'success','top')
	}

</script>
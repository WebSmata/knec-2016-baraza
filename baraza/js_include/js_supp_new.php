<?php include JS_THEME."js_header.php"; ?>
	<div id="site_content">	

	  <div id="content"> 
        <?php include JS_THEME."js_sidebar.php" ?>
	  
        <div class="content_item">
		<br>
		  <h1>Add a Supplier</h1> 
          <br><hr><br>
			<div class="main_content">
				<form role="form" method="post" name="PostSupplier" action="index.php?action=supp_new" enctype="multipart/form-data" >
                <table style="width:100%;font-size:20px;">
				
				<tr>
					<td>Full Name:</td>
					<td><input type="text" autocomplete="off" name="fullname"></td>
				</tr>
				
				<tr>
					<td>Supplier Avatar:</td>
					<td><input name="avatar" autocomplete="off" type="file" accept="image/*"></td>
				</tr>
                
				<tr>
					<td>Email Address:</td>
					<td><input type="text" autocomplete="off" name="email"></td>
				</tr>
				
				<tr>
					<td>Mobile (Optional):</td>
					<td><input type="text" autocomplete="off" name="mobile"></td>
				</tr>
				
				<tr>
					<td>Physical Address</td>
					<td><input type="text" autocomplete="off" name="address"></td>
				</tr>
								
				</table><br>
                        <center><input type="submit" class="submit_this" name="AddSupp" value="Save and Add Another Supplier">
						<input type="submit" class="submit_this" name="AddClose" value="Save and Close">
			  </center><br></form>
				
			</div>
		<br>
      <h2><center></center></h2>
		<br>  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  </div><!--close main-->
<?php include JS_THEME."js_footer.php" ?>
    

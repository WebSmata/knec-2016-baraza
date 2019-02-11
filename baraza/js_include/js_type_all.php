<?php include JS_THEME."js_header.php"; ?>
	<div id="site_content">	
		
		<?php $js_db_query = "SELECT * FROM js_type ORDER BY typeid DESC LIMIT 20";
			$database = new Js_Dbconn();			
			$results = $database->get_results( $js_db_query );
		?>
	  <div id="content"> 
        <?php include JS_THEME."js_sidebar.php" ?>
	  
        <div class="content_item">
		<br>
		  <h1><?php echo $database->js_num_rows( $js_db_query ) ?> Cereal Types
		  <a style="float:right;width:300px;text-align:center;" href="index.php?action=type_new">Add New Type</a> </h1> 
          <br><hr><br>
			<div class="main_content" align="center">
			
			   <table class="tt_tb">
				<thead><tr class="tt_tr">
				  <th style="width:70px;"></th>
				  <th>Cereal Type</th>
				  <th>Description</th>
				  <th>No of Items</th>
				</tr></thead>
				<tbody>
                <?php foreach( $results as $row ) { ?>
		        <tr onclick="location='index.php?action=type_view&amp;js_typeid=<?php echo $row['typeid'] ?>'">
				   <td><img class="iconic" src="js_media/<?php echo $row['type_icon'] ?>" /></td>
				   <td><?php echo $row['type_title'] ?></td>
		          <td style="max-width: 300px;"><?php echo $row['type_content'] ?></td>
		          <td>
				  <?php 
					$typeid = $row['typeid'];
					$js_db_qry = "SELECT * FROM js_item WHERE item_type = '$typeid'";
					echo $database->js_num_rows( $js_db_qry )
					?>
				  </td>
		        </tr>
			
			<?php } ?>
			
                      </tbody>
                    </table>
			</div>
		<br>
      <h2><center></center></h2>
		<br>  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  </div><!--close main-->
<?php include JS_THEME."js_footer.php" ?>
    

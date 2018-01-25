<div class='form-group'>
 	 <h3 class='heading-h3'>Courses</h3>
     <label>Courses</label>
	 <a href='#' class='btn btn-warning' id='ebb' onclick="secadd('#ebb','.addcourse',courses())">+ Add Course </a>
	 <a href='#' id='eabb' onclick="secdel('#eabb','.aaa')" class='btn btn-danger'>- delete Course </a>
	 <div class='addcourse'>
	      <?php 
	      if(is_array($_SESSION['post']['coursea'])) 
	      for($i=0;$i < count($_SESSION['post']['coursea']);$i++){?>
		  	   <div class="aaa" style="margin:20px 0px;">
			   	<div class="form-inline">
	 			<label> Course Place </label><input class="form-control" type="text" name="coursea[]" value='<?php echo sess('coursea',$i); ?>'> 
				<label> From </label><input class="form-control" type="date" name="courseb[]"  value='<?php echo sess('courseb',$i); ?>'>  
				<label> To </label><input class="form-control" type="date" name="coursec[]" value='<?php echo sess('coursec',$i); ?>'></div>
				<div class="form-group"><label>Dgree</label><input class="form-control" type="text" name="coursed[]" value='<?php echo sess('coursed',$i); ?>'></div>
				<div class="form-group"><label>Description</label><textarea class="tinymcstextarea form-control"   name="coursef[]"><?php echo sess('coursef',$i); ?></textarea></div>
		</div>
		<?php } ?>
    </div>
 </div>
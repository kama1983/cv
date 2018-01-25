<div class='form-group'>
 	 <h3 class='heading-h3'>Education</h3>
     <label>Education</label>
	 <a href='#' class='btn btn-warning' id='clc' onclick="secadd('#clc','.educ',education())">+ Add Education</a>
	 <a href='#' id='deud' onclick="secdel('#deud','.educ')" class='btn btn-danger'>- delete Education </a>
	 <div class='educ'>
	    <?php 
		if(is_array($_SESSION['post']['edua'])) 
	    for($i=0;$i < count($_SESSION['post']['edua']);$i++){?>
			<div class="educ" style="margin:20px 0px;"><div class="form-inline ">
			 <label> Education Place </label> <input class="form-control" type="text" name="edua[]" value='<?php echo sess('edua',$i); ?>'>
			<label> From </label> <input  class="form-control" type="date" name="edub[]" value='<?php echo sess('edub',$i); ?>'>  
			<label> To </label> <input  class="form-control" type="date" name="educ[]" value='<?php echo sess('educ',$i); ?>'></div> 
			<div class="form-group"><label>Dgree</label><input class="form-control" type="text" name="edud[]" value='<?php echo sess('edud',$i); ?>'></div>
			<div class="form-group"><label>Description</label><textarea class="tinymcstextarea form-control"  name="eduf[]"><?php echo sess('eduf',$i); ?></textarea></div>
			</div>
   		 <?php } ?>
   </div>
</div>   
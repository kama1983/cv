<div class='form-group'>
 	 <h3 class='heading-h3'>Work</h3>
     <label>Work</label>
	 <a href='#' class='btn btn-warning' id='ewbb' onclick="secadd('#ewbb','.ava',work())">+ Add Work </a>
	 <a href='#' id='eawbb' onclick="secdel('#eawbb','.addwork')" class='btn btn-danger'>- delete Work </a>
	 <div class='ava'>
	   <?php  
		if(is_array($_SESSION['post']['worka'])) 
	    for($i=0;$i < count($_SESSION['post']['worka']);$i++){?>
			<div class="addwork" style="margin:20px 0px;"><div class="form-inline">
			<label> Company Name </label><input class="form-control" type="text" name="worka[]"  value='<?php echo sess('worka',$i); ?>'>
			<label> From </label><input  class="form-control" type="date" name="workb[]" value='<?php echo sess('workb',$i); ?>'> - 
			<label> To </label><input  class="form-control" type="date" name="workc[]" value='<?php echo sess('workc',$i); ?>'></div>
			<div class="form-group">
			<label> Description </label><textarea  class="tinymcstextarea form-control"  name="workd[]"><?php echo sess('workd',$i);?></textarea>
			</div></div>
		<?php } ?>
	 </div>
</div>   
tinymcstextarea <div class='form-group'>
 	 <h3 class='heading-h3'>Skills</h3>
     <label>Skills</label>
	 <a href='#' class='btn btn-warning' id='sss' onclick="secadd('#sss','.addskill',skills())">+ Add skill </a>
	 <a href='#' id='sasa' onclick="secdel('#sasa','.vava')" class='btn btn-danger'>- delete skill </a>
	 <div class='addskill'>
	    <?php if(is_array($_SESSION['post']['skilla'])) 
	     for($i=0;$i < count($_SESSION['post']['skilla']);$i++){?>
        <div class="vava" style="margin:20px 0px;"><div class="form-group">
	   <label> Skill Name </label><input class="form-control" type="text" name="skilla[]"  value='<?php echo sess('skilla',$i); ?>'>
		<label> Description </label><textarea  class="tinymcstextarea form-control"  name="skillb[]"><?php echo sess('skillb',$i); ?></textarea>
		</div></div>
	  <?php }; ?>
	 </div>
</div>   
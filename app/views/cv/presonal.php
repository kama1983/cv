<h3 class='heading-h3'>Personal Information</h3>
<div class='form-group'>
   <label>Langauge</label>
   <select name='lang' class='form-control'>
       <option>-----</option>
       <option <?php echo sess('lang') == 'ar' ? 'selected':null ; ?>  value='ar'>Arabic</option>
       <option <?php echo sess('lang') == 'en' ? 'selected':null ; ?> value='en'>English</option>
   </select>
</div>
<div class='form-group'>
	<label>Name</label>
	<input class='form-control' type="text" name="name" value='<?php echo sess('name'); ?>'>
</div>
<div class='form-group'>
	<label>Address</label>
	<input class='form-control' type="text" name="address" value='<?php echo sess('address'); ?>'>
</div>
<div class='form-group'>
	<label>Mobile</label>
	<input class='form-control' type="text" name="mobile"  value='<?php echo sess('mobile'); ?>'>
</div>
<div class='form-group'>
	<label>Email</label>
	<input class='form-control' type="text" name="email"   value='<?php echo sess('email'); ?>'>
</div>  
<div class='form-group'>
<label>Birthday</label>
<input class='form-control' type="date" name="birthday" value='<?php echo sess('birthday'); ?>'>
</div> 
<div class='form-group'>
<label>Religion</label>
<select class='form-control' name='religion'>

   <option value=''>----</option>
   <option <?php echo sess('religion') == 'islam' ? 'selected':null ; ?> value='islam'>Islam</option>
   <option <?php echo sess('religion') == 'chirstan' ? 'selected':null ; ?>  value='chirstan'>Chirstan</option>
</select>
</div> 
<div class='form-group'>
<label>Gender</label>
<select class='form-control'  name='gender'>
   <option value=''>----</option>
   <option <?php echo sess('gender') == 'male' ? 'selected':null ; ?> value='male'>Male</option>
   <option  <?php echo sess('gender') == 'Female' ? 'selected':null ; ?> value='Female'>Female</option>
</select>
</div> 
<div class='form-group'>
<label>Status</label>
<select class='form-control' name='status'>
   <option value=''>----</option>
   <option <?php echo sess('status') == 'single' ? 'selected':null ; ?> value='single'>Single</option>
   <option  <?php echo sess('status') == 'married' ? 'selected':null ; ?> value='married'>Married</option>
   <option  <?php echo sess('status') == 'divorced' ? 'selected':null ; ?>  value='divorced'>Divorced</option>
</select>
</div> 
<div class='form-group'>
<label>Military</label>
<select class='form-control' name='military'>
   <option value=''>----</option>
   <option  <?php echo sess('military') == 'complete' ? 'selected':null ; ?> value='complete'>Complete</option>
   <option <?php echo sess('military') == 'suspensions' ? 'selected':null ; ?>  value='suspensions'>Suspension</option>
   <option <?php echo sess('military') == 'exempted' ? 'selected':null ; ?> value='exempted'>Exempted</option>
</select>
</div> 

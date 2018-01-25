<?php 

class Cv 
{
     function index()
     {
        echo App::render('cv/cv',['title' => 'Hack Me Again','files' => ['gray' => 'cv1-gray','default' => 'cv1-default','brown' => 'cv1-brown','oliva' => 'cv1-oliva','bluedark' => 'cv1-bluedark','lightblue' => 'cv1-lightblue','default2' => 'cv2-default' ]]);
     }


     function upload()
     {
      //print_r($_FILES);
      if(isset($_FILES['image']))
      {
          $errors=array();
          $allowed_ext= array('jpg','jpeg','png','gif');
          $file_name =$_FILES['image']['name'];
       //   $file_name =$_FILES['image']['tmp_name'];
          $file_ext = strtolower( end(explode('.',$file_name)));


          $file_size=$_FILES['image']['size'];
          $file_tmp= $_FILES['image']['tmp_name'];

          $type = pathinfo($file_name, PATHINFO_EXTENSION);
          $data = file_get_contents($file_tmp);
          $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
          return $base64;
      }
     }

     function post()
     {     	 	
        if (is_array($_POST)) {
           $_SESSION['post'] = $_POST;
           $_SESSION['image'] = $this->upload();
        }
     	  if (!empty($_POST['print']) and $_POST['print'] == 'View') {
     	   if ($_POST['theme'] == '---select---') {
     	      echo App::view('cvtemplates/view/cv1-default');
     	   }else if($_POST['theme'] == 'cv1-gray')
     	   {
            echo App::view('cvtemplates/view/cv1-gray');
     	   }else if($_POST['theme'] == 'cv1-brown')
           {
                echo App::view('cvtemplates/view/cv1-brown');
           }else if($_POST['theme'] == 'cv1-oliva'){
               echo App::view('cvtemplates/view/cv1-oliva');
           }else if($_POST['theme'] == 'cv1-bluedark'){
               echo App::view('cvtemplates/view/cv1-bluedark');
           }else if($_POST['theme'] == 'cv1-lightblue'){
               echo App::view('cvtemplates/view/cv1-lightblue');
           }else if($_POST['theme'] == 'cv2-default'){
               echo App::view('cvtemplates/view/cv2-default');
           }
     	}else if(!empty($_POST['word']) and $_POST['word'] == 'Word')
     	{
             if($_POST['theme'] == '---select---') {
                word(view.'cvtemplates/view/cv1-bluedark');
             }else if($_POST['theme'] == 'cv1-gray')
             {
                word(view.'cvtemplates/view/cv1-gray');
             }else if($_POST['theme'] == 'cv1-brown')
             {
                  word(view.'cvtemplates/view/cv1-brown');
             }else if($_POST['theme'] == 'cv1-oliva'){
                 word(view.'cvtemplates/view/cv1-oliva');
             }else if($_POST['theme'] == 'cv1-bluedark'){
                 word(view.'cvtemplates/view/cv1-bluedark');
             }else if($_POST['theme'] == 'cv1-lightblue'){
                 word(view.'cvtemplates/view/cv1-lightblue');
             }
     	}
     }
}
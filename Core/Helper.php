<?php 

if (!function_exists('post')) {
  function  post($field)
  {
      return !empty($_POST[$field]) ? $_POST[$field]: null; 
  }
}

if(!function_exists('tags')) {
   function tags($before,$after,$data)
   {
     $ul = []; 
     foreach($data as $v)
     {
         $ul[] = $before.$v.$after;
     }
     return implode(' ',$ul);
   }
}

if (!function_exists('presonal')) {
  function presonal($field,$lang){
      $en = ['b' =>  'Address' , 'c' => 'Mobile','em'=> 'Email','e' => 'Birthday' , 'd' => 'Religion' ,'g' => 'Gender', 'h' => 'Status','p' => 'Military'];
      $ar = [ 'b' =>  'العنوان' , 'c' => 'الموبايل','em'=> 'الأيميل','e' => 'تاريخ الميلاد','d' => 'الديانة' ,'g' => 'الجنس', 'h' => 'الحالة الإجتماعية','p' => 'الحالة العسكرية'];
      if (is_array($en) || is_array($ar)) {
         $lang = post($lang);      
         if ($lang == 'ar') {
            foreach ($ar as $k => $v) {
               if($k == $field) {
                   return $v;             
               }
            } 
          }

          if ($lang == 'en') {
            foreach ($en as $ee => $bb) {
               if($ee == $field) {
                  return $bb;                   
               }
            } 
          }
      }
  }
}


if (!function_exists('posts')) {
   function posts($start,$end,$b,$f,$post=[])
   {
      $b = [$start] ;
      for ($i=0; $i < count($_POST[$post]); $i++) { 
           $b[] = $b.$_POSTS[$post][$i].$f;
      }
      $b[] = $end; 
      return implode(' ',$b);
   }
}

if (!function_exists('rep')) {
  function rep($h)
  {
     $en = [ 'islamf','chirstanf','singlef','marriedf','divorcedf','male','female',
      'islam','chirstan','exempted','single' ,'married','divorced' ,'complete' ,'suspensions','dgree'];
     $ar = ['مسلمة','مسيحية','عزباء','متزوجة','مطلقة','ذكر','أنثى',
      'مسلم','مسيحى','تأجيل الخدمة العسكرية','أعزب','متزوج' ,'مطلقة','أكملت الخدمة العسكرية','معاف من الخدمة العسكرية','الدرجة'];
     $ardate = ['٠' , '١' ,'٢','٣', '٤'  ,'٥' ,'٦','٧' ,'٨', '٩','/']; 
     $endate = ['0', '1','2','3', '4', '5','6','7', '8', '9','-']; 
     $ard = ['يناير','فبراير','مارس','ابريل',
     'مايو','يونيو','يوليو','أغسطس','سبتمبر','أكتوبر','نوفمبر','ديسمبر'];
     $end = ['Jan','Feb','Mar','Apr',
     'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
     if (post('lang') == 'ar') {
        if (intval($h)) {
            return str_replace($endate,$ardate,$h);
        }elseif(array_search('e',$end) && array_search('a',$end) && array_search('o',$end) && array_search('u',$end)) {
            return str_replace($end,$ard,$h);
        }else{
            return str_replace($en,$ar,$h);
        }
     }else{
      return str_replace('-','/',$h);
     }
  }
}

if (!function_exists('datemonth')) {
   function datemonth($date,$format='M Y')
   {
     if (date_create($date)) {
       if (post('lang') == 'ar') {
        $ard = ['يناير',"فبراير",'مارس','ابريل','مايو','يونيو','يوليو','أغسطس','سبتمبر','أكتوبر','نوفمبر','ديسمبر','٠' , '١' ,'٢','٣', '٤'  ,'٥' ,'٦','٧' ,'٨', '٩','/'];
        $end = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec','0', '1','2','3', '4', '5','6','7', '8', '9','-'];
        } 
        $a = date_create($date);
        return str_replace($end,$ard,date_format($a,$format));
     }else{
      if (post('lang') == 'ar') {
         $en = ['0', '1','2','3', '4', '5','6','7', '8', '9','-'];
         $ar = ['٠' , '١' ,'٢','٣', '٤'  ,'٥' ,'٦','٧' ,'٨', '٩','/'];
         return str_replace($en,$ar,$date);
      }else{
         return $date;
      }

     }
   }
}


if (!function_exists('heading')) {
  function heading($field,$lang)
  {
      $en = ['a' => 'Objective' , 'b' =>  'Personal Information' , 'c' => 'Education','d' => 'Work Experience' ,'g' => 'Courses', 'h' => 'Skills','p' => 'Interests'];
      $ar = ['a' => 'الصفة الوظيفية','b' =>  'المعلومات الشخصية', 'c' =>'المرحلة التعليمية','d' => 'الخبرة العملية','g' => 'الدورات التدريبية','h' =>'المهارات الشخصية','p' => 'الاهتمامات'];
      if (is_array($en) || is_array($ar)) {
         $lang = post($lang);
         if ($lang == 'ar') {
            foreach ($ar as $k => $v) {
               if($k == $field) {
                   return $v;             
               }
            } 
          }

          if ($lang == 'en') {
            foreach ($en as $ee => $bb) {
               if($ee == $field) {
                  return $bb;                   
               }
            } 
          }
      }
  }
}


if (!function_exists('pdf')) {
  function pdf($filepath)
  {
    if (file_exists($filepath)) {
       // We'll be outputting a PDF
      header('Content-Type: application/pdf');

      // It will be called downloaded.pdf
      header('Content-Disposition: attachment; filename="downloaded.pdf"');

      // The PDF source is in original.pdf
      include_once($filepath);
    }
  }
}

if (!function_exists('excel')) {
  function excel($filepath)
  {
    if (file_exists($filepath)) {
       // We'll be outputting a PDF
      header('Content-Type: application/vnd.ms-excel');

      // It will be called downloaded.pdf
      header('Content-Disposition: attachment; filename="downloaded.xls"');

      // The PDF source is in original.pdf
      include_once($filepath);
    }
  }
}

if(!function_exists('word')) {
  function word($filepath,$ext='.phtml')
  {      

    if (file_exists($filepath.$ext)) {       

       // We'll be outputting a PDF
      header('Content-Type: application/msword');

      // It will be called downloaded.pdf
      header('Content-Disposition: attachment; filename="downloaded.doc"');
      // The PDF source is in original.pdf
      include_once($filepath.$ext);
    }
  }
}


if (!function_exists('sess')) {
   function sess($field,$i='')
   {
      if (is_string($_SESSION['post'][$field])) {
          return $_SESSION['post'][$field];
      }
      return !empty($_SESSION['post'][$field][$i]) ? $_SESSION['post'][$field][$i] : null;
   }
}

if (!function_exists('post2')) {
   function post2($field,$i)
   {
      return !empty($_POST[$field][$i])?$_POST[$field][$i] : null;
   }
}

if (!function_exists('maketag')) {
	 //counts values , $data = ['key' => ['afterhtml' => 'beforehtml']]
	 function maketag($count,$data = [],$fun=[])
	 {
	 	 if(is_array($count))
	 	  $d = [];
          for($i=0; $i < count($count); $i++) {
          	 foreach($data as $key => $array2){ 
          	 	 if (is_array($array2)) {
          	 	 	foreach ($array2 as $k => $v) {
                  foreach ($fun as $eq) {
                    if(!empty(sess($key,$i)))
                      if($eq == 'rep' && intval(sess($key,$i))) {
                        $d[] = $k.rep(sess($key,$i)).$v; 
                     }elseif($eq == 'datemonth' && intval(sess($key,$i))) {
                        $d[] = $k.datemonth(sess($key,$i)).$v; 
                     }elseif(!is_numeric(sess($key,$i))){
                        $d[] = $k.sess($key,$i).$v; 
                     }
                  }
          	 	 	}
          	 	 }
          	 }
          }
          return implode(' ',$d);
	 }
}

if (!function_exists('tagone')) {
   //counts values , $data = ['key' => ['afterhtml' => 'beforehtml']]
   function tagone($count,$data = [])
   {
     if(is_array($count))
      $d = [];
          for($i=0; $i < count($count); $i++) {
             foreach($data as $key => $array2){ 
               if (is_array($array2)) {
                foreach ($array2 as $k => $v) {
                     $d[] = $k.sess($key,$i).$v; 
                }
               }
             }
          }
      return implode(' ',$d);
   }
}



if (!function_exists('tcpdf')) {
   function tcpdf($filename,$output,$ext='.phtml')
   {
     $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    // remove default header/footer
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);

    // Add a page
    // This method has several options, check the source code documentation for more information.
    $pdf->AddPage();

    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

    // Set some content to print
    $html = App::view($filename);
    // Print text using writeHTMLCell()
    $pdf->Write(0, 0, '', '', $html, 0, 1, 0, true, '', true);
    // ---------------------------------------------------------
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output($output, 'I'); 
   }
}
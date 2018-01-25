<?php 
class App
{
	  static $setcontrollerpath;
    static $db;

    public function sqlite($data = [])
    {
       self::$db = new Db($data,'','');
       return self;
    }

    public function mysql($data = [])
    {
       self::$db = new Db($data);
       return self;
    }

	static function view($index,$data=[],$ext='.phtml')
	{
         extract($data,EXTR_SKIP);
         $view = view.$index.$ext;
         if (file_exists($view)) {
             ob_start();
             $get = include_once $view;
             return ob_get_contents($get);
         }
	}

    static function url($num)
    {
        $server = !empty($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:null;
        $url = explode('/',$server,4);
        if (is_array($url)) {
           try {
               return $url[intval($num)];
           } catch (Exception $e) {
               throw new Exception("Error uri segment is error ".$num,1);
           }
        }
    }


	static function render($index,$data=[],$template='template',$ext='.phtml')
	{
		 $d = [];
         $d['content'] = self::view($index,$data);
         return self::view($template,$data);
	}

	static function route()
	{
		$server = !empty($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:null;
        list($i,$control,$method,$params) = explode('/',$server,5);
        var_dump(explode('/',$server,4));
        $file = self::$setcontrollerpath .$control.'.php';
        if (file_exists($file)) {
        	include_once $file;
        	if (class_exists($control) && method_exists(new $control,$method))
        	{
	            $exp = @explode('/',$params);
	        	if (count($exp)) {
	        	  call_user_func_array([new $control ,$method],$exp);
	        	}else{
	        	  call_user_func_array([new $control ,$method],[]);
	        	}
           }else{
              throw new Exception("Error Method Not Found ".$method.' !!!', 1);  
           }
        }else{
        	throw new Exception("Error Control  Not Found  ".$control.' !!!', 1);  
        }
	}
}

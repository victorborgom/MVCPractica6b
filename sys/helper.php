<?php
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	//to acces filesystem
	define('APP',ROOT.'app'.DS);
	define('APP_W',basename($_SERVER['SCRIPT_NAME']));
	// if could be in another file
	//now the section for autoloading classes
	//first of all nullify previous autoload
	spl_autoload_register(null, false);

	spl_autoload_register('KAutoloader::Sysloader');
	//this class helps in class autoload
	class KAutoloader{
		static function SysLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'sys/' . $filename;
			if (!file_exists($file))
			{
				return false;
			}
			include $file;
		}
		static function AppLoader($class){

		}


		}
		
            class Coder{

                static function code($var){
                    echo '<pre>'.$var.'</pre>';
                    }
                static function code_var($var){
                            echo '<pre>'.var_dump($var).'</pre>';
                    }
            }


	





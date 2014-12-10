<?php
    require 'sys/request.php';

    class Core{
        
        static function init(){
            //echo "BIENVENIDO, CORE ARRANCADO";
            //recuperar la request
            //echo $_SERVER['REQUEST_URI'];
            echo var_dump(Request::retrieve());
            echo"</br>";echo"</br>";
            //echo var_dump(Request::getCont());
           /*
            if((Request::getCont())!= NULL)
            {  
            print_r(Request::getCont());  
            }*/
            print_r(Request::getCont()); //con print_r solo muestra el valor del array
            echo"</br>";echo"</br>";
            
            print_r(Request::getAction());  

            //print_r(Request::getAction());
            echo"</br>";echo"</br>";
            if((Request::getParams()!=-1))
            {
            echo var_dump(Request::getParams());
            }else
            {
            echo"TIENE QUE HABER DOS VARIABLES";   
            }
            //print_r(Request::getParams());            
        }
        
        
    }
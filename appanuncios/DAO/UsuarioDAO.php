<?php
require_once "../UTIL/ConexionBD.php";
require_once '../BEAN/UsuarioBean.php';
class    UsuarioDAO 
{     
 public function validarUsuario(UsuarioBEAN  $objUsuBean){
     $estado=0;
      try{                
            $sql = "select  *  from    usuario    where "
                 . "   cuenta='$objUsuBean->cuenta' and "
                 . "   password='$objUsuBean->password' ;  "; 
            
            $objc = new ConexionBD();
            $cn=$objc->getConexionBD();            
            $rs = mysql_query($sql,$cn);             
            $lista = array();
            while( $fila = mysql_fetch_assoc($rs) ){
            	$lista[] = $fila;
            }                        
            if( count($lista) == 1 ){
            	 $estado=1;                 
            }
            mysql_close();
        }catch(Exception $e){
             $estado=0;
        }
     return $estado;
    }  
    
    
  public    function   cargardatos($codigo )
   {  try {
$sql="select   *  from  usuario where    codusu='$codigo'";  
           $objc = new ConexionBD();
            $cn=$objc->getConexion();   
           $rs= mysql_query($sql,$cn);
           $lista=  array(); 
           while ($fila=  mysql_fetch_assoc($rs))
           {$lista[]=$fila;               
           }     
       } catch (Exception $e) {     
            
       }     
     return  $lista;  
   }     
    
    
    
    
    
    
    
    
    
    
    
}
?>

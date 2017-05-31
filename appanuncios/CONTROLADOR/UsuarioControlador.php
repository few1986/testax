<?php
    require_once '../BEAN/UsuarioBEAN.php';
    require_once '../DAO/UsuarioDAO.php';
   $op=$_REQUEST['op'];
   $pagina="";
   switch ($op)
   {   
       case 1:
       {  
          $cuenta=$_REQUEST['txtusu'];
          $password=$_REQUEST['txtcla'];
          $objUsuarioBean=new UsuarioBEAN;
          $objUsuarioBean->setCuenta($cuenta);
          $objUsuarioBean->setPassword($password);
          $objUsuarioDAO=new UsuarioDAO();
          $estado=$objUsuarioDAO->validarUsuario($objUsuarioBean);
          
          if($estado==1)
          {    
            $pagina="../Seguridad/LoginAcceso/Principal.php";
                    
             
          }else
          {
              $mensaje="Usuario y Clave Incorrecto !!!!!!";
              $pagina="../index.php";
          }
         
        break;   
       }   
   }
   header('Location:'.$pagina)
?>
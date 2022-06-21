<?php
    class usuario{
        public $miConexion;
        function __construct($conexion){
            $this->miConexion = $conexion;
        }
        function login($usuario, $clave){
            $lista = array();
            $sql = "SELECT * FROM microsec.administrador WHERE email = '$usuario'
                    AND clave = '$clave'";
                     "SELECT * FROM microsec.usuario WHERE email = '$usuario'
                    AND clave = '$clave'";
            $this->miConexion->consulta($sql);
            $resultado = $this->miConexion->cuentaFilas();
            if($resultado > 0){
                $lista = $this->miConexion->extraerRegistros();
            }else{
                $lista = null;
            }
            return $lista;
        }

        function agregar($nombre, $apellido, $usuario, $clave){
            $sql = "INSERT INTO microsec.usuario (nombre,apellido,email, clave)
                VALUES('$nombre','$apellido','$usuario', '$clave' )";
             $this->miConexion->consulta($sql);
            if($this->miConexion->filasAfectadas()){
                return true; 
            }else{
                return false;
            }
        }
        

        function agregarsensor($id_ubicacion){
            $sql = "INSERT INTO microsec.sensor (id_ubicacion,fecha_creacion)
                VALUES('$id_ubicacion',current_timestamp)";
             $this->miConexion->consulta($sql);
            if($this->miConexion->filasAfectadas()){
                return true;
            }else{
                return false;
            }
        }

        function listarsensor(){
            $lista = array();
            $sql = "select * from microsec.sensor;";
            $this->miConexion->consulta($sql);
            $resultado = $this->miConexion->cuentaFilas();
            if($resultado > 0){
               while($fila= $listar = $this->miConexion->extraerRegistros()){
               $lista[] = $fila;    
               }
               }else{
                $lista = null;
            }
            return $lista;
        }

        /*FUNCÓN PARA ELIMINAR CLIENTES*/
        function eliminar_sensor($id){
            $sql="DELETE FROM microsec.sensor WHERE id_sensor = '$id'";
         $this->miConexion->consulta($sql);
          if($this->miConexion->filasAfectadas()){
          return true;
          }else{
          return false;
          }
        }

        /*FUNCIÓN PARA LA EDICIÓN DE CLIENTES*/
        function editar_sensor($id_sensor_e,$id_ubicacion_e){
            /*echo "codigo= $codigo_e,  nombre= $nombre_e, marca= $marca_e,  cantidad= $cantidad_e,consecutivo= $consecutivo_e";*/
            $sql="UPDATE microsec.sensor SET id_sensor='$id_sensor_e', id_ubicacion='$id_ubicacion_e', fecha_creacion=current_timestamp
            WHERE id_sensor = '$id_sensor_e';";
            $this->miConexion->consulta($sql); 
            if($this->miConexion->filasAfectadas()){
                 return true;
                }else{
                 return false;
            }
        }

        function listarnotificacion(){
            $lista = array();
            $sql = "select * from notificacion;";
            $this->miConexion->consulta($sql);
            $resultado = $this->miConexion->cuentaFilas();
            if($resultado > 0){
               while($fila= $listar = $this->miConexion->extraerRegistros()){
               $lista[] = $fila;    
               }
               }else{
                $lista = null;
            }
            return $lista;
        }

        function agregarnotificacion($id_sensor,$id_ubicacion,$nivel_db){
            $sql = "INSERT INTO notificacion (id_sensor,id_ubicacion,fecha_hora,nivel_db)
                VALUES ('$id_sensor','$id_ubicacion',current_timestamp,'$nivel_db')";
             $this->miConexion->consulta($sql);
            if($this->miConexion->filasAfectadas()){
                return true; 
            }else{
                return false;
            }
        }
                  /*FUNCÓN PARA ELIMINAR CLIENTES*/
        function eliminar_notificacion($id){
            $sql="DELETE FROM microsec.notificacion WHERE id_notificacion = '$id'";
         $this->miConexion->consulta($sql); 
          if($this->miConexion->filasAfectadas()){
          return true;
          }else{
          return false;
          }
        }

         /*FUNCIÓN PARA LA EDICIÓN DE CLIENTES*/
         function editar_notificacion($id_notificacion_e,$id_sensor_e,$id_ubicacion_e,$nivel_db_e){
            /*echo "nombre= $nombre_e, apellido= $apellido_e, telefono= $telefono_e,  correo= $correo_e,consecutivo= $consecutivo_e";*/
            $sql="UPDATE microsec.notificacion SET id_sensor='$id_sensor_e', id_ubicacion='$id_ubicacion_e',
                 fecha_hora=current_timestamp, nivel_db='$nivel_db_e' WHERE id_notificacion='$id_notificacion_e';";
            $this->miConexion->consulta($sql); 
            if($this->miConexion->filasAfectadas()){
                 return true;
                }else{
                 return false;
            }
        }

        function listarubicacion(){
            $lista = array();
            $sql = "select * from microsec.ubicacion;";
            $this->miConexion->consulta($sql);
            $resultado = $this->miConexion->cuentaFilas();
            if($resultado > 0){
               while($fila= $listar = $this->miConexion->extraerRegistros()){
               $lista[] = $fila;    
               }
               }else{
                $lista = null;
            }
            return $lista;
        }

        function agregarubicacion($nombre,$direccion,$cod_pais,$cod_departamento,$cod_ciudad){
            $sql = "INSERT INTO microsec.ubicacion (nombre,direccion,fecha_creacion,cod_pais,cod_departamento,cod_ciudad)
                VALUES ('$nombre','$direccion',current_timestamp,'$cod_pais','$cod_departamento','$cod_ciudad')";
             $this->miConexion->consulta($sql);
            if($this->miConexion->filasAfectadas()){
                return true; 
            }else{
                return false;
            }
        }
                  /*FUNCÓN PARA ELIMINAR CLIENTES*/
        function eliminar_ubicacion($id){
            $sql="DELETE FROM microsec.ubicacion WHERE id_ubicacion = '$id'";
         $this->miConexion->consulta($sql); 
          if($this->miConexion->filasAfectadas()){
          return true;
          }else{
          return false;
          }
        }


         /*FUNCIÓN PARA LA EDICIÓN DE CLIENTES*/
         function editar_ubicacion($id_ubicacion_e,$nombre_e,$direccion_e,$cod_pais_e,$cod_departamento_e,$cod_ciudad_e){
            /*echo "nombre= $nombre_e, apellido= $apellido_e, telefono= $telefono_e,  correo= $correo_e,consecutivo= $consecutivo_e";*/
            $sql="UPDATE microsec.ubicacion SET nombre='$nombre_e', 
                 direccion='$direccion_e', fecha_creacion=current_timestamp, cod_pais='$cod_pais_e', cod_departamento='$cod_departamento_e', cod_ciudad='$cod_ciudad_e'
                 WHERE id_ubicacion='$id_ubicacion_e';";
            $this->miConexion->consulta($sql); 
            if($this->miConexion->filasAfectadas()){
                 return true;
                }else{
                 return false;
            }
        }


        
        function agregarperturbacion($barrio){
            $sql = "INSERT INTO microsec.perturbaciones (barrio,fecha_hora)
                VALUES('$barrio',current_timestamp)";
             $this->miConexion->consulta($sql);
            if($this->miConexion->filasAfectadas()){
                return true;
            }else{
                return false;
            }
        }


        function listarperturbacion(){
            $lista = array();
            $sql = "select * from microsec.perturbaciones;";
            $this->miConexion->consulta($sql);
            $resultado = $this->miConexion->cuentaFilas();
            if($resultado > 0){
               while($fila= $listar = $this->miConexion->extraerRegistros()){
               $lista[] = $fila;    
               }
               }else{
                $lista = null;
            }
            return $lista;
        }


        /*
        function listar(){
            $lista = array();
            $sql = "select *from principal.usuario";
            $this->miConexion->consulta($sql);
            $resultado = $this->miConexion->cuentaFilas();
            if($resultado > 0){
                
               while($fila= $listar = $this->miConexion->extraerRegistros()){
               $lista[] = $fila;    
               }
               
            }
            else{
                $lista = null;
            }
            return $lista;
        }
        
        
        
         function agregar($nombre,$apellido,$telefono,$usuario,$clave){
             
             $sql="INSERT INTO principal.usuario (nombre, apellido, telefono, usuario, clave)
             VALUES('$nombre','$apellido','$telefono','$usuario','$clave')
               ";
              $this->miConexion->consulta($sql);
             
             if($this->miConexion->filasAfectadas()){
                 return true;
                 
             } else{
                 return false;
             }
             
         }
        
        */
        
    }
?>

<?php
	/*Funcion para abrir un conexión a la base de datos*/
	function conectar(){

        $mysqli = new mysqli("localhost","root","1neesf_","bbddhelpdesk");
        $mysqli->set_charset("utf8");
        /*Intentamos seleccionar el usuario que se quiere añadir a la base de datos*/
        $query = $mysqli->query("SELECT `email`, `contrasenya`, `permiso`, `icono`, `departamento`, `telefono` FROM `usuario` WHERE email = '$email'");
        /*Obtenemos la fila de la consulta*/
        $fila = $query->fetch_array(MYSQLI_NUM);

        return $fila;

    }

?>

<?php
	/*Se declara una clase usuario con sus respetivos getters y setters, se le crean las variables de fecha y hora por comodidad de uso en el código*/
	class Usuario{

		private $email;
		private $contrasenya;
		private $permiso;
		private $icono;
		private $departamento;
		private $telefono;

			public function setEmail($email){
				$this->email = $email;
			}
			public function setContrasenya($contrasenya){
				$this->contrasenya = $contrasenya;
			}
			public function setPermiso($permiso){
				$this->permiso = $permiso;
			}
			public function setIcono($icono){
				$this->icono = $icono;
			}
			public function setDepartamento($departamento){
				$this->departamento = $departamento;
			}
			public function setTelefono($telefono){
				$this->telefono = $telefono;
			}
			

			public function getEmail(){
				return $this->email;
			}
			public function getContrasenya(){
				return $this->contrasenya;
			}
			public function getPermiso(){
				return $this->permiso;
			}
			public function getIcono(){
				return $this->icono;
			}
			public function getDepartamento(){
				return $this->departamento;
			}
			public function getTelefono(){
				return $this->telefono;
			}
			
		}
?>


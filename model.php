<?php
class Model
{
	private $resultado;

	public function __construct()
	{
	}

	function conectar()
	{
		$host = "127.0.0.1";
		$port = "5432";
		$user = "postgres";
		$pass = "root";
		$dbname = "loginAjax";

		$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$pass";

		$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());

		return $conexion;
	}

	function ejecutar($sql)
	{
		$resultado = pg_query($this->conectar(),$sql) or die("Error al ejecutar: ".pg_last_error());
		return $resultado;
	}

	function login($user, $password)
	{

		$sql = "SELECT * FROM public.usuarios WHERE usuario = '$user' AND credencial = '$password';";

		$resultado = pg_num_rows($this->ejecutar($sql));
		/*
		if($resultado > 0)
		{
			$i = 0;
			while($reg = pg_fetch_assoc($resultado))
			{
				$listado[$i]['referencia'] = $reg['referencia'];
				$listado[$i]['valor'] = $reg['valor'];
				$i++;
			}
		}
		*/
		return $resultado;
	}
}
?>

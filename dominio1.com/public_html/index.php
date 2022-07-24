<?php

$var1="hola mundo cruel";
$var2=5;
$var3=["hola","mundo"];

$var4 = new stdClass();
$var4->nombres="Luis Curo";
$var4->dni="12345678";
$var4->telefonos=["96485875","225255"];


$var5= 9 % 4;

$var6=["var1"=>"valor 1"];

$var7=["orden1"];

$var8=[["11","12"],["21","22"]];


//echo $var6["var1"] ;

//echo $var7[0] ;

//echo print_r($var8);


$persona = new Persona();

$persona->setApellidos("Curo");

$alumno = new Alumno();
$alumno->setApellidos("ZARATE");
$alumno->setCodigoAlumno("01258");

//echo $persona->getApellidos();
echo $alumno->getApellidos()." ".$alumno->getCodigoAlumno();


function suma($n1,$n2)
{
	return $n1+$n2;
}




/**
 * 
 */
class Persona
{
	private $apellidos;
	
	public function getApellidos()
	{
		return $this->apellidos;
	}

	public function setApellidos($_apellidos)
	{

		$this->apellidos=$_apellidos;
	}

	function __construct()
	{
		
	}
}


class Alumno extends Persona
{
	private $codigo_alumno;

	public function getCodigoAlumno()
	{
		return $this->codigo_alumno;	
	}

	public function setCodigoAlumno($codigo_alumno)
	{
		$this->codigo_alumno=$codigo_alumno;
	}

	public function matricularAlumno($alumno,$seccion)
	{

	}
}
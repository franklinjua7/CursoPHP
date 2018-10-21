<?php 
	
class Empleado{
	var $codigo;
	var $apellidoNombre;
	var $fechaIngreso;
	var $fechaCese;
	var $sueldo;
	var $docIdentidad;
	var $seguroSalud;
	var $regPensiones;
	var $sede;
	var $area;
	var $cargo;
	var $centroCosto;
	var $diasTrab;
	var $horasTrab;
	var $horasExt25;
	var $horasExt35;
	var $horasExt100;
	var $calificacion;

	function __construct(){

	}

	function imprimir(){

		?>
		<table border="1">
		<tr>
			<?php 
			echo "<td>Codigo: <br>".$this->codigo."</td>";
			echo "<td>Apellidos y Nombres: <br>".$this->apellidoNombre."</td>";
			echo "<td>Fecha Ing: <br>".$this->fechaIngreso."</td>";
			echo "<td>Fecha Cese: <br>".$this->fechaCese."</td>";
			echo "<td>Sueldo: <br>".$this->sueldo."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>DOC. IDENTIDIDA: <br>".$this->docIdentidad."</td>";
			echo "<td>SEG. SALUD: <br>".$this->seguroSalud."</td>";
			echo "<td>REG. PENSIONES: <br>".$this->regPensiones."</td>";
			echo "<td>SEDE: <br>".$this->sede."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>AREA: <br>".$this->area."</td>";
			echo "<td>CARGO: <br>".$this->cargo."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>CENTRO DE COSTO (PRINCIPAL): <br>".$this->centroCosto."</td>";
			echo "<td>DIAS TRAB: <br>".$this->diasTrab."</td>";
			echo "<td>HORAS TRAB: <br>".$this->horasTrab."</td>";
			echo "<td>H. EX 25%: <br>".$this->horasExt25."</td>";
			echo "<td>H. EX 35%: <br>".$this->horasExt35."</td>";
			echo "<td>H. EX 100%: <br>".$this->horasExt100."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>CALIFICACION: <br>".$this->calificacion."</td>";
			?>
		</tr>
		</table>
		<?php
	}

	function imprimirDetalle(){
		
	}

}

echo "PERUANA DE COMBUSTIBLE S.A. <br>";
echo "RUC: 20259033072 <br>";
echo "Calle Coronel Andrés Reyes N° 360 Lima <br>";
echo "Boleta de Pago";
echo "Del 01.09.2016 al 30.09.2016 <br>";

$empleado = new Empleado();

	$empleado->codigo = '10000292';
	$empleado->apellidoNombre='FRANKLIN JUAREZ ROMAN';
	$empleado->fechaIngreso ='01.11.2014';
	$empleado->fechaCese='28.02.2017';
	$empleado->sueldo='4,250.00';
	$empleado->docIdentidad='DNI-44577092';
	$empleado->seguroSalud='ESSALUD';
	$empleado->regPensiones='SPP PRIMA COM. MIXTA / 62047MELRE3';
	$empleado->sede='OFICINA CENTRAL';
	$empleado->area='JEFATURA DE DESARROLLO DE SISTEMAS';
	$empleado->cargo='ANALISTA PROGRAMADOR DE SISTEMAS';
	$empleado->centroCosto='Desarrollo';
	$empleado->diasTrab='0.00';
	$empleado->horasTrab='0.00';
	$empleado->horasExt25='0.00';
	$empleado->horasExt35='0.00';
	$empleado->horasExt100='0.00';
	$empleado->calificacion='FISCALIZABLE';

	$empleado->imprimir();
	$empleado->imprimirDetalle();

 ?>
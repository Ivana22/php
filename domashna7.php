<?php

class File 
{
	private $file;
	private $filename;
	
	function __construct($filename)
	{
		
		$this->file = fopen($filename, 'a+');
		$this->filename = $filename;
	
	}

	function write($text){
		
		fwrite($this->file, $text); // zapis vo fajl
	}

	function read(){
		rewind($this->file);
		$size = filesize($this->filename); 
		$text=fread($this->file, $size); 
		return $text;

	}

	function delete(){
		fclose($this->file); // zatovoranje na fajlot
		unlink($this->filename); // brishenje na fajlot
	}

	public function __destruct(){
		echo "DESTRUCTORRRR!";
	}
}


$f1 = new File('zelena.txt');
$f1->write('Ivanaaaa');

echo $f1->read(); 

$f1->delete();

unset ($f1);


class Laptop {
	// osobini - properties
	private $brand = 'Lenovo';
	private $tip = 'Z50';
	// funkcionalnosti - methods
	public function setDisplej($d){
		$procesori = ['i7', 'i5', 'i3'];
		if(in_array($d, $procesori)){
			$this->procesori = $d;
		}else{
			echo "$d is not a predefined procsessor!";
		}
	}
	public function getProcessor(){
		return $this->procesori;
	}
}

class Prekrivka {
	private $boja = zelena;
	private $golemina = 'edinechna';
	private $materijal = 'pamuchna';
}

class Maica {
	private $Golemina = 'XS';
	private $boja = 'bela';
	private $Brand = 'Zara';
}

class Avtomobil {
	private $Brand = 'BMW';
	private $Tip = 'X1';
	private $Boja= 'Siva';
}

class Televizor {
	private $Golemina = 22;
	private $Dimenzii = 'inch';
	private $Brand = 'Samsung';
}
?>

<?php

class Foto
{
    //Atributos
	public $link;
    public $info;

    //Constructor
	function __construct($link)
    {
        $this->link=$link;
    }

    static function RetornarLista($path)
    {
        $len=filesize($path);
		$archivo=fopen($path, "r");
		$lista=array();

		if(!(is_null($path)))
		{
			if($len>0)
			{
                while(!feof($archivo))
                {
                  $dato=fgets($archivo,$len);
                  $fotoAux=new Foto($dato);
                  array_push($lista,$fotoAux);
                }
			}
		}

        fclose($archivo);

		return $lista;
    }


	public static function SerializarJson($lista,$path)
	{
		$retorno=0;

		if(!(is_null($lista) || is_null($path)))
		{
			//printf(json_encode($usuarios));
			Foto::GuardarArchivo($path,json_encode($lista,JSON_PRETTY_PRINT),"w");
			$retorno=1;
		}

		return $retorno;
	}

    public static function DeserializarJson($path)
	{
		$len=filesize($path);
		$archivo=fopen($path, "r");
		$objeto=array();

		if(!(is_null($path)))
		{
			if($len>0)
			{
				$dato = fread($archivo,$len);
				$objeto=json_decode($dato);
			}
		}

		return $objeto;
	}

    public static function GuardarArchivo($path,$contenido,$modo)
	{
		$retorno=0;

		if(!(is_null($path)) && !(is_null($contenido)))
		{
			$archivo=fopen($path, $modo);
			fwrite($archivo, $contenido);
			$retorno=1;
		}

		fclose($archivo);

		return $retorno;
	}

    


    
}

?>
<?php

/* Classe Metainfos
* Classe de gestion des fichiers d'inclusions CSS et JS.
* Pour affichage dans le template principal.
* 
*/

class Metafile {
	
	private $isLocal;
	private $file;

	public function __construct($f, $l) {
		$this->file = $f;
		$this->isLocal = $l;
	}

	public function isLocal() {
		return $this->isLocal;
	}

	public function getFile() {
		return $this->file;
	}
}

?>
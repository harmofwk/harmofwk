<?php 

/* Classe Metainfos
* Gère les inclusions de CSS et de JS dans la page ainsi que les métainformations de la page.
* Evite les inclusions inutiles sur toutes les pages. 
* Chaque controlleur définit ses besoins. 
* 
*/

class Metainfos {
	
	private $css;
	private $js;
	private $html_lang;
	private $meta_charset;
	private $description;
	private $keywords;
	private $author;

	public function __construct() {
		$this->css = array();
		$this->js = array();

		$this->html_lang = HTML_LANG;
		$this->meta_charset = META_CHARSET;
		$this->description = SITE_DESCRIPTION;
		$this->keywords = SITE_KEYWORDS;
		$this->author = SITE_AUTHOR;
	}

	public function addCSS($css) {
		if((substr($css, 0, 4) === "http")) {
			$this->css[] = new Metafile($css, false);
		}
		elseif(file_exists("styles/$css")) {
			$this->css[] = new Metafile($css, true);
		}
		else {
			throw new Exception("Fichier CSS inexistant ($css) !");
		}
	}

	public function addJS($js) {
		if((substr($js, 0, 4) === "http")) {
			$this->js[] = new Metafile($js, false);
		}
		elseif(file_exists("js/$js")) {
			$this->js[] = new Metafile($js, true);
		}
		else {
			throw new Exception("Fichier JS inexistant ($js) !");
		}
	}

	public function getCSS() {
		return $this->css;
	}

	public function getJS() {
		return $this->js;
	}

	public function getLang() {
		return $this->html_lang;
	}

	public function getCharset() {
		return $this->meta_charset;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getKeywords() {
		return $this->keywords;
	}

	public function getAuthor() {
		return $this->author;
	}
}

?>
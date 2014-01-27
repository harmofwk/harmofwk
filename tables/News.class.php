<?php
class News extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('news');
		
        $this->hasColumn('id', 'integer', 8, array('primary' => true, 'autoincrement' => true));
        $this->hasColumn('titre', 'string', 100);
	    $this->hasColumn('auteur', 'string', 100);
	    $this->hasColumn('contenu', 'string', 4000);
    }
}
?>
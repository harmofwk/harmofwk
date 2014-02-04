<h3> Documentation </h3>

<p> Quelques élèments de docs pour utiliser Kickstart, Doctrine, et Zebra_Form. </p>

<h4> Kickstart </h4>

<p> Kickstart est une librairie CSS/JS, doc complète : <a href="http://www.99lime.com/elements/">ici</a>. </p>

<h4> Doctrine </h4>

<p> Doctrine est un ORM, une couche d'abstraction entre le framework et la base de données qui simplifient grandement les accès et les requêtes. </p>

<p> Exemple de création de deux tables Membres et Articles, avec clé étrangère, définition des colonnes, etc... </p>
<pre>
class BaseUser extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('member');
        $this->hasColumn('id', 'integer', 8, array('primary' => true, 'autoincrement' => true));
        $this->hasColumn('login', 'string', 255, array('unique' => true, 'notnull' => true));
        $this->hasColumn('password', 'string', 255, array('notnull' => true));
    }

    public function setUp()
    {
        $this->hasMany('Article as Articles', array('local' => 'id', 'foreign' => 'user_id'));
    }
}
</pre>

<pre>
class BaseArticle extends Doctrine_Record
{
    public function setTableDefinition()
    {
		$this->hasColumn('id', 'integer', 8, array('primary' => true, 'autoincrement' => true));
        $this->hasColumn('title',   'string',  255,  array('notnull' => true));
        $this->hasColumn('content', 'string',  null, array('notnull' => true));
        $this->hasColumn('user_id', 'integer', null, array());
    }

    public function setUp()
    {
        $this->hasOne('User as User', array('local' => 'user_id', 'foreign' => 'id'));
    }
}
</pre>

<p> Requête simple pour récupérer tous les enregistrements d'une table. </p>

<pre> 
$articles = Doctrine_Core::getTable('Article')->findAll();
</pre>

<p> Requête Doctrine_Query... La condition LeftJoin est bien géré si on définit bien les relation HasOne et HasMany. <br />
Voir <a href="http://fr.openclassrooms.com/informatique/cours/apprendre-a-utiliser-doctrine/le-langage-dql">ici</a>. </p>

<pre>
$q = Doctrine_Query::create()
  ->from('Article a')
  ->leftJoin('a.User u')
  ->where('a.id = ?', 1)
  ->limit(10);

$article = $q->fetchOne();
</pre>

<p> Créer un nouvel enregistrement. </p>

<pre>
$article = new Article();
$article->title = $_POST['title'];
$article->content = $_POST['content'];
$article->User = $iduser;
$article->save();
</pre>

<p> Modifier un enregistrement. </p>

<pre>
$article = Doctrine_Core::getTable('Article')->find($id);
$article->title = $_POST['title'];
$article->content = $_POST['content'];
$article->User = $iduser;
$article->save();
</pre>

<p> Supprimer un enregistrement. </p>

<pre>
$article->delete();
</pre>

<h4> Zebra_Form </h4>

<p> ZebraForm est une librairie PHP et jQuery très puissante qui permet la création de formulaires HTML complet et sécurisé de manière automatisé et rapide. Gère les dépendances, les règles de validations, etc. <br />
Documentations complètes <a href="http://stefangabos.ro/wp-content/docs/Zebra_Form/Zebra_Form/Zebra_Form.html">ici</a>.</p>

<pre>
$form = new Zebra_Form('form');

$form->add('label', 'label_email', 'email', 'Email');
$obj = $form->add('text', 'email', '', array('autocomplete' => 'off'));
$obj->set_rule(array(
    'required'  =>  array('error', 'Email is required!'),
    'email'     =>  array('error', 'Email address seems to be invalid!'),
));

$form->add('label', 'label_password', 'password', 'Password');
$obj = $form->add('password', 'password', '', array('autocomplete' => 'off'));
$obj->set_rule(array(
    'required'  => array('error', 'Password is required!'),
    'length'    => array(6, 10, 'error', 'The password must have between 6 and 10 characters'),
));

$form->add('checkbox', 'remember_me', 'yes');

$form->add('label', 'label_remember_me_yes', 'remember_me_yes', 'Remember me');

$form->add('submit', 'btnsubmit', 'Submit');

if ($form->validate()) {

    // do stuff here
    // Submission du formulaire
}

$render = $form->render();
$this->site->assign("form", $render);
</pre>

<h4> HarmoFWK </h4>

<p> Quelques notions sur le framework en lui-même. </p>

<p> Vous pouvez utilisez la fonction plugin de Smarty getLien pour générer vos liens, selon l'activation ou non de l'URL Rewriting. Cette fonction écrit vos liens dans vos templates et vous permet d'envoyer deux paramètres en GET. </p>

<pre>
&lt;a href="&#123;getLien module=index action=index}"&gt; Index &lt;/a&gt;
&lt;a href="&#123;getLien module=install action=doc arg1=test val1=1 arg2=test2 val2=2}"&gt; Tests &lt;/a&gt;
</pre>
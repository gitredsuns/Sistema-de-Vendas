<? 

class CometnariosController extends AppController
{
	public $helpers = array( 'Html', 'Form' );
	
	public function index()
	{
		$this->redirect( array( 'action' => 'lista_usuarios' ) );
	}
}

?>
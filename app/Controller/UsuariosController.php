<? 

class UsuariosController extends AppController
{
	public $helpers = array( 'Html', 'Form' );
	
	public function index()
	{
		$this->redirect( array( 'action' => 'lista_usuarios' ) );
	}
	
	public function lista_usuarios()
	{
		$this->set('users', $this->Usuario->find( 'all' ) );
	}
}

?>
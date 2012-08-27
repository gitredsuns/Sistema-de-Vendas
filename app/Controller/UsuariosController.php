<? 

class UsuariosController extends AppController
{
	public $helpers = array( 'Html', 'Form', 'Javascript' );
	
	public function index()
	{
		$this->redirect( array( 'action' => 'lista_usuarios' ) );
	}
	
	public function lista_usuarios()
	{
		$this->set('users', $this->Usuario->find( 'all' ) );
	}
	
	public function deletar()
	{
		if ($this->request->is('get')) {
			throw
			new MethodNotAllowedException();
		}
		if ($this->Post->delete($id)) 
		{
		$this->Session->setFlash('The post with id: '
				.
				$id
				.
				'has been deleted.');
				$this->redirect(array('action' => 'index'));
		}
	}

}

?>
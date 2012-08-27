<? 

class VendasController extends AppController
{
	public $helpers = array( 'Html', 'Form' );
	public $uses = array( 'Venda', 'Usuario', 'Comentario' );
	
	public function index()
	{
		$projetos = $this->Venda->find('all');
		$html_lead = '';
		$html_contactado = '';
		$html_briefing = '';
		$html_enviada = '';
		
		foreach( $projetos as $item )
		{
			if( $item['Venda']['status'] == 'lead' )
			{
				$html_lead .= ' <div class="box" id="'.$item['Venda']['id'].'">
					            	<h3>'.$item['Venda']['nome_projeto'].'</h3>
					            	<p>'.$item['Venda']['descricao'].'</p>
					                <a class="btn" href="'.$this->webroot.'vendas/detalhes/'.$item['Venda']['id'].'">Detalhes</a>
					            </div>';
			}
			if( $item['Venda']['status'] == 'contactado' )
			{
				$html_contactado .= ' <div class="box" id="'.$item['Venda']['id'].'">
										<h3>Nome do Projeto</h3>
										<p>'.$item['Venda']['descricao'].'</p>
										<a class="btn" href="'.$this->webroot.'vendas/detalhes/'.$item['Venda']['id'].'">Detalhes</a>
									</div>';
			}
			if( $item['Venda']['status'] == 'briefing' )
			{
				$html_briefing .= ' <div class="box" id="'.$item['Venda']['id'].'">
										<h3>Nome do Projeto</h3>
										<p>'.$item['Venda']['descricao'].'</p>
										<a class="btn" href="'.$this->webroot.'vendas/detalhes/'.$item['Venda']['id'].'">Detalhes</a>
									</div>';
			}
			if( $item['Venda']['status'] == 'enviado' )
			{
				if( $item['Venda']['status_proposta'] == 'aguardando' )
				{
					$msg = '';
					$btn = ' 	<a class="btn" href="'.$this->webroot.'vendas/detalhes/'.$item['Venda']['id'].'">Detalhes</a>
				                <a class="btn btn-success" href="">Fechado</a>
								<a class="btn btn-warning" href="">Cancelado</a>';
				}
				else if( $item['Venda']['status_proposta'] == 'fechado' ) 
				{
					$msg = '<span class="label label-warning">Cancelado</span>';
					$btn = '<a class="btn" href="'.$this->webroot.'vendas/detalhes/'.$item['Venda']['id'].'">Detalhes</a>';
				}
				else 
				{
					$msg = '<span class="label label-success">Fechado</span>';
					$btn = '<a class="btn"  href="'.$this->webroot.'vendas/detalhes/'.$item['Venda']['id'].'">Detalhes</a>';
				}
				
				$html_enviada .= ' <div class="box" id="'.$item['Venda']['id'].'">
										<h3>'.$msg.'Nome do Projeto</h3>
										<p>'.$item['Venda']['descricao'].'</p>
										'.$btn.'
									</div>';
			}
			
			$this->set( 'lead', $html_lead );
			$this->set( 'contactado', $html_contactado );
			$this->set( 'briefing', $html_briefing );
			$this->set( 'enviada', $html_enviada );
		}
		
		//$this->set('Vendas', $this->Post->find( 'all' ));
	}
	
	public function detalhes($id) 
	{
		$this->Venda->id = $id;
		$query_vendas = $this->Venda->read();
		$this->set('vendas', $query_vendas );
		
		$this->Usuario->id = $query_vendas['Venda']['id'];
		$this->set('user', $this->Usuario->read() );
		
		$condition = array('Comentario.id_venda' => $id );
		$comments = $this->Comentario->find( 'all', $condition );
		
		$html_comentarios = '';
		
		foreach( $comments as $item )
		{
			$this->Usuario->id = $item['Comentario']['id_usuario'];
			$user = $this->Usuario->read();
			
			$html_comentarios .= '	<h4>'.$user['Usuario']['nome'].':</h4>
					                    <p><small>'.$item['Comentario']['data'].'</small></p>
					                    <p>'.$item['Comentario']['texto'].'</p>
					                <hr>';
		}
		
		$this->set('comentarios', $html_comentarios );
	}
	
	public function salvar() 
	{
		if ( $this->request->is('post') ) 
		{	
			$id_user = 1;
			
			if( $this->Session->read('ID_USER') )
			{
				$id_user = $this->Session->read('ID_USER');
			}
			
			$this->request->data['criado_por'] = $id_user;
			$this->request->data['status'] = 'lead';
			$this->request->data['data_criacao'] = date('Y-m-d');
			
			if ($this->Venda->save( $this->request->data )) 
			{
				$this->Session->setFlash('Seu projeto foi salvo');
				$this->redirect(array('action' => 'index'));
			} 
			else 
			{
				$this->Session->setFlash('Unable to add your post.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	function editar_status( $id = null )
	{	
		 $this->Venda->id = $this->data['id'];    
		 
		 if( $this->Venda->id != 'undefined' )
		 {
			 if (empty($this->data)) 
			 {       
			 		$this->data = $this->Venda->read();    
			 } 
			 else 
			 {    
			 	if ($this->Venda->save($this->data)) 
			 	{            
			 		die( 'salvo' );    
			 	}    
			 }
		 }
	}
}

?>
<? 

class VendasModel extends AppModel
{
	public $validate = array( 
								'nome_projeto' => array( 'rule' => 'notEmpty' ),
								'email'=> array( 'rule' => 'notEmpty' ) 
							);
	
	function selecionarTudo()
	{
		return $this->Venda->find('all');
	}
}

?>
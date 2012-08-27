<?

App::import('Model','Vendas');    

class ArticleTestCase extends CakeTestCase 
{           
	var $fixtures = array( 'app.vendas' );
	
	function testSelecionarTudo()
	{
		$this->Vendas = ClassRegistry::init('Vendas');
		$result = $this->Vendas->selecionarTudo();
		$expeted = array( 'Vendas' => array( 'id' => 1, 'nome_projeto' => 'redsuns', 'data_criacao' => '2012-08-27', 'nome_cliente' => 'Redsuns', 'email' => 'contato@redsuns.com.br', 'status' => 'lead', 'status_projeto' => 'aguardando', 'valor' => '150.00', 'telefone' => '30303030', 'celular' => '88888888', 'descricao' => 'teste de testes' ) );
	
		$this->assertEqual($result, $expected);
	}
}

?>
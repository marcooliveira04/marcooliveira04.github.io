<?php

/**
* 
*/
class CadastroController
{
	private $dao;
	private $pessoa;

	function __construct(string $tipo)
	{
		require_once "../model/".$tipo.".php";
		require_once "../model/".$tipo."Dao.php";
		$objDao = $tipo."Dao";
		$this->pessoa = new $tipo;
		$this->dao = new $objDao;
	}



	public function cadastro($post){
		$this->pessoa = $this->dao->setter($post, $this->pessoa);
		$create = $this->dao->create($this->pessoa);
		if (!$create) {
			return false;
		} else {
			$this->pessoa->setId($create);
			return true;
		}
	}

	public function atualiza($post){
		$this->pessoa = $this->dao->setter($post, $this->pessoa);
		$update = $this->dao->update($this->pessoa);
		if (!$update) {
			return false;
		} else {
			return true;
		}		
	}

    /**
     * @return mixed
     */
    public function getPessoa(){
        return $this->pessoa;
    }

}

?>
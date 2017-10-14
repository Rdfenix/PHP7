<?php

	class Usuario
	{
		private $id_usuario;
		private $des_login;
		private $senha;
		private $dt_cadastro;
	
	    /**
	     * @return mixed
	     */
	    public function getIdUsuario()
	    {
	        return $this->id_usuario;
	    }

	    /**
	     * @param mixed $id_usuario
	     *
	     * @return self
	     */
	    public function setIdUsuario($id_usuario)
	    {
	        $this->id_usuario = $id_usuario;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDesLogin()
	    {
	        return $this->des_login;
	    }

	    /**
	     * @param mixed $des_login
	     *
	     * @return self
	     */
	    public function setDesLogin($des_login)
	    {
	        $this->des_login = $des_login;
	    }

	    /**
	     * @return mixed
	     */
	    public function getSenha()
	    {
	        return $this->senha;
	    }

	    /**
	     * @param mixed $senha
	     *
	     * @return self
	     */
	    public function setSenha($senha)
	    {
	        $this->senha = $senha;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDtCadastro()
	    {
	        return $this->dt_cadastro;
	    }

	    /**
	     * @param mixed $dt_cadastro
	     *
	     * @return self
	     */
	    public function setDtCadastro($dt_cadastro)
	    {
	        $this->dt_cadastro = $dt_cadastro;
	    }

	    public function loadById($id)
	    {
	    	$sql = new SQL();
	    	$results = $sql->Select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID", array(
	    		":ID" => $id
	    	));

	    	if (count($results) > 0) {
	    		$row = $results[0];
	    		$this->setIdUsuario($row['id_usuario']);
	    		$this->setDesLogin($row['des_login']);
	    		$this->setSenha($row['senha']);
	    		$this->setDtCadastro(new DateTime($row['dt_cadastro']));
	    	}
	    }

	    public function __toString()
	    {
	    	return json_encode(array(
	    		"id_usuario" => $this->getIdUsuario(),
	    		"des_login" => $this->getDesLogin(),
	    		"senha" => $this->getSenha(),
	    		"dt_cadastro" => $this->getDtCadastro()->format("d/m/Y H:i:s")
	    	));
	    }
	}

?>
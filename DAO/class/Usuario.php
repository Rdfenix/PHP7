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
	    		$this->setData($results[0]);
	    	}
	    }

	    public static function getList()
	    {
	    	$sql = new SQL();

	    	return $sql->Select("SELECT * FROM tb_usuarios ORDER BY des_login");
	    }

	    public static function Search($login)
	    {
	    	$sql = new SQL();

	    	return $sql->Select("SELECT * FROM tb_usuarios WHERE des_login LIKE :SEARCH ORDER BY des_login", array(
	    		':SEARCH' => "%".$login."%"
	    	));
	    }

	    public function Login($login, $password)
	    {
	    	$sql = new SQL();
	    	$results = $sql->Select("SELECT * FROM tb_usuarios WHERE des_login = :LOGIN AND senha = :PASSWORD", array(
	    		":LOGIN" => $login,
	    		":PASSWORD" => $password
	    	));

	    	if (count($results) > 0) {
	    		$this->setData($results[0]);
	    	} else {
	    		throw new Exception("Login e Senha Invalidos");
	    	}
	    }

	    public function setData($data)
	    {
	    	$this->setIdUsuario($data['id_usuario']);
	    	$this->setDesLogin($data['des_login']);
	    	$this->setSenha($data['senha']);
	    	$this->setDtCadastro(new DateTime($data['dt_cadastro']));
	    }

	    public function Insert()
	    {
	    	$sql = new SQL();

	    	$results = $sql->Select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
	    		':LOGIN' => $this->getDesLogin(),
	    		':PASSWORD' => $this->getSenha()
	    	));

	    	if (count($results) > 0) {
	    		$this->setData($results[0]);
	    	}
	    }

	    public function Update($login, $password)
	    {
	    	$this->setDesLogin($login);
	    	$this->setSenha($password);
	    	$sql = new SQL();
	    	$sql->query("UPDATE tb_usuarios SET des_login = :LOGIN, senha = :PASSWORD WHERE id_usuario = :ID", array(
	    		':LOGIN' => $this->getDesLogin(),
	    		':PASSWORD' => $this->getSenha(),
	    		'ID' => $this->getIdUsuario()
	    	));
	    }

	    public function Delete()
	    {
	    	$sql = new SQL();
	    	$sql->query("DELETE FROM tb_usuarios WHERE id_usuario = :ID", array(
	    		':ID' => $this->getIdUsuario()
	    	));
	    	$this->setIdUsuario(0);
	    	$this->setDesLogin("");
	    	$this->setSenha("");
	    	$this->setDtCadastro(new DateTime());
	    }

	    public function __construct($login = "", $password = "")
	    {
	    	$this->setDesLogin($login);
	    	$this->setSenha($password);
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
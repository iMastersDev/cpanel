<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Modifica a senha
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class PasswdOperation extends cPanelOperation {
	/**
	 * @var	boolean
	 */
	private $db_pass_update;

	/**
	 * @var	string
	 */
	private $pass;

	/**
	 * @var	string
	 */
	private $user;

	/**
	 * Recupera o valor de $db_pass_update
	 * @return	boolean
	 */
	public function getDbPassUpdate() {
		return $this->db_pass_update;
	}

	/**
	 * @see	cPanelOperation::getOperationName()
	 */
	public function getOperationName() {
		return 'passwd';
	}

	/**
	 * Recupera o valor de $pass
	 * @return	string
	 */
	public function getPass() {
		return $this->pass;
	}

	/**
	 * Recupera o valor de $user
	 * @return	string
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param boolean $db_pass_update
	 */
	public function setDbPassUpdate( $db_pass_update ) {
		$this->db_pass_update = $db_pass_update;
		$this->httpConnection->setParam( 'db_pass_update' , $db_pass_update );
	}

	/**
	 * @param string $pass
	 */
	public function setPass( $pass ) {
		$this->pass = $pass;
		$this->httpConnection->setParam( 'pass' , $pass );
	}

	/**
	 * @param string $user
	 */
	public function setUser( $user ) {
		$this->user = $user;
		$this->httpConnection->setParam( 'user' , $user );
	}
}
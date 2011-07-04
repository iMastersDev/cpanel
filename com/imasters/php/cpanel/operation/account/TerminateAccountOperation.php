<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Remove uma conta
 * @details	Essa operação permite que você remova permanentemente uma
 * 			conta.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class TerminateAccountOperation extends cPanelOperation {
	/**
	 * @var	boolean
	 */
	private $keepdns;

	/**
	 * @var	integer
	 */
	private $user;

	/**
	 * Recupera o valor de $keepdns
	 * @return	boolean
	 */
	public function getKeepdns() {
		return $this->keepdns;
	}

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'removeacct';
	}

	/**
	 * Recupera o valor de $user
	 * @return	integer
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param boolean $keepdns
	 */
	public function setKeepdns( $keepdns ) {
		$this->keepdns = $keepdns;
		$this->httpConnection->setParam( 'keepdns' , $keepdns );
	}

	/**
	 * @param integer $user
	 */
	public function setUser( $user ) {
		$this->user = $user;
		$this->httpConnection->setParam( 'user' , $user );
	}
}
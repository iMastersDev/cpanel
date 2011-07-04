<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Remove a suspenção de uma conta
 * @details	Essa operação permite que você permita que um usuário
 * 			volte a acessar a conta dele, após tê-la suspendido.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class UnsuspendAccountOperation extends cPanelOperation {
	/**
	 * @var	string
	 */
	private $user;

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'unsuspendacct';
	}

	/**
	 * Recupera o valor de $user
	 * @return	string
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param string $user
	 */
	public function setUser( $user ) {
		$this->user = $user;
		$this->httpConnection->setParam( 'user' , $user );
	}
}
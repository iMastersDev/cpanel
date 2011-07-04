<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Suspende uma conta
 * @details	Essa operação permite que você suspenda uma conta de usuário
 * 			impedindo-o de acessar o painel.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class SuspendAccountOperation extends cPanelOperation {
	/**
	 * @var	string
	 */
	private $reason;

	/**
	 * @var	string
	 */
	private $user;

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'suspendacct';
	}

	/**
	 * Recupera o valor de $reason
	 * @return	string
	 */
	public function getReason() {
		return $this->reason;
	}

	/**
	 * Recupera o valor de $user
	 * @return	string
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param string $reason
	 */
	public function setReason( $reason ) {
		$this->reason = $reason;
		$this->httpConnection->setParam( 'reason' , $reason );
	}

	/**
	 * @param string $user
	 */
	public function setUser( $user ) {
		$this->user = $user;
		$this->httpConnection->setParam( 'user' , $user );
	}
}
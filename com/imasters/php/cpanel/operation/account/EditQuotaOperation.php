<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Edição de quota
 * @details	Essa operação permite que você modifique quota de espaço
 * 			em disco.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class EditQuotaOperation extends cPanelOperation {
	/**
	 * @var	integer
	 */
	private $quota;

	/**
	 * @var	string
	 */
	private $user;

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'editquota';
	}

	/**
	 * Recupera o valor de $quota
	 * @return	integer
	 */
	public function getQuota() {
		return $this->quota;
	}

	/**
	 * Recupera o valor de $user
	 * @return	string
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param integer $quota
	 */
	public function setQuota( $quota ) {
		$this->quota = $quota;
		$this->httpConnection->setParam( 'quota' , $quota );
	}

	/**
	 * @param string $user
	 */
	public function setUser( $user ) {
		$this->user = $user;
		$this->httpConnection->setParam( 'user' , $user );
	}
}
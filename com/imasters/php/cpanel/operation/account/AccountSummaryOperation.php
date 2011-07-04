<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Informações sobre a conta
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class AccountSummaryOperation extends cPanelOperation{
	/**
	 * @var	string
	 */
	private $domain;

	/**
	 * @var	string
	 */
	private $user;

	/**
	 * @brief	Recupera o domínio
	 * @return	string
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * @brief	Recupera o usuário
	 * @return	string
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @see cPanelOperation::getOperationName()
	 */
	public function getOperationName() {
		return 'accountsummary';
	}

	/**
	 * @brief	Define o domínio
	 * @param	string $domain
	 */
	public function setDomain( $domain ) {
		$this->domain = $domain;
		$this->httpConnection->setParam( 'domain' , $domain );
	}

	/**
	 * @brief	Define o usuário
	 * @param	string $user
	 */
	public function setUser( $user ) {
		$this->user = $user;
		$this->httpConnection->setParam( 'user' , $user );
	}
}
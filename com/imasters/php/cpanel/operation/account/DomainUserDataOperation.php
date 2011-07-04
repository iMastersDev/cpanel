<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Obtém informações sobre um domínio
 * @details	Essa operação recupera informações sobre um determinado
 * 			domínio.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class DomainUserDataOperation extends cPanelOperation {
	/**
	 * @var	string
	 */
	private $domain;

	/**
	 * Recupera o valor de $domain
	 * @return	string
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'domainuserdata';
	}

	/**
	 * @param string $domain
	 */
	public function setDomain( $domain ) {
		$this->domain = $domain;
	}
}
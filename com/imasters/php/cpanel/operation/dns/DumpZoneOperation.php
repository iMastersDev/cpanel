<?php
/**
 * @brief	Módulo de DNS
 * @details	Implementação das operações de DNS da API do cPanel
 * @package com.imasters.php.cpanel.operation.dns
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Exibe as configurações de uma zona de DNS para um domínio
 * 			específico.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class DumpZoneOperation extends cPanelOperation {
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
		return 'dumpzone';
	}

	/**
	 * @param string $domain
	 */
	public function setDomain( $domain ) {
		$this->domain = $domain;
	}
}
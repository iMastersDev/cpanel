<?php
/**
 * @brief	Módulo de DNS
 * @details	Implementação das operações de DNS da API do cPanel
 * @package com.imasters.php.cpanel.operation.dns
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Recupera registros de zona de DNS de um determinado domínio
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class GetZoneRecordOperation extends cPanelOperation {
	/**
	 * @var	string
	 */
	private $domain;

	/**
	 * @var	string
	 */
	private $Line;

	/**
	 * Recupera o valor de $domain
	 * @return	string
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * Recupera o valor de $Line
	 * @return	string
	 */
	public function getLine() {
		return $this->Line;
	}

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'getzonerecord';
	}

	/**
	 * @param string $domain
	 */
	public function setDomain( $domain ) {
		$this->domain = $domain;
		$this->httpConnection->setParam( 'domain' , $domain );
	}

	/**
	 * @param string $Line
	 */
	public function setLine( $Line ) {
		$this->Line = $Line;
		$this->httpConnection->setParam( 'Line' , $Line );
	}
}
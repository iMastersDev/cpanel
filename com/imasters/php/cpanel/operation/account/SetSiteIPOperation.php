<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Modifica o IP de um site
 * @details	Essa operação permite que você modifique o IP ou conta de
 * 			usuário associado com um site hospedado em seu servidor.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class SetSiteIPOperation extends cPanelOperation {
	/**
	 * @var	string
	 */
	private $domain;

	/**
	 * @var	string
	 */
	private $ip;

	/**
	 * @var	string
	 */
	private $user;

	/**
	 * Recupera o valor de $domain
	 * @return	string
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * Recupera o valor de $ip
	 * @return	string
	 */
	public function getIp() {
		return $this->ip;
	}

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'setsiteip';
	}

	/**
	 * Recupera o valor de $user
	 * @return	string
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param string $domain
	 */
	public function setDomain( $domain ) {
		$this->domain = $domain;
		$this->httpConnection->setParam( 'domain' , $domain );
	}

	/**
	 * @param string $ip
	 */
	public function setIp( $ip ) {
		$this->ip = $ip;
		$this->httpConnection->setParam( 'ip' , $ip );
	}

	/**
	 * @param string $user
	 */
	public function setUser( $user ) {
		$this->user = $user;
		$this->httpConnection->setParam( 'user' , $user );
	}
}
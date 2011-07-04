<?php
/**
 * @brief	Módulo de DNS
 * @details	Implementação das operações de DNS da API do cPanel
 * @package com.imasters.php.cpanel.operation.dns
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Adiciona uma zona de DNS
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class AddDNSOperation extends cPanelOperation {
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
	private $template;

	/**
	 * @var	string
	 */
	private $trueowner;

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
		return 'adddns';
	}

	/**
	 * Recupera o valor de $template
	 * @return	string
	 */
	public function getTemplate() {
		return $this->template;
	}

	/**
	 * Recupera o valor de $trueowner
	 * @return	string
	 */
	public function getTrueowner() {
		return $this->trueowner;
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
	 * @param string $template
	 */
	public function setTemplate( $template ) {
		$this->template = $template;
		$this->httpConnection->setParam( 'template' , $template );
	}

	/**
	 * @param string $trueowner
	 */
	public function setTrueowner( $trueowner ) {
		$this->trueowner = $trueowner;
		$this->httpConnection->setParam( 'trueowner' , $trueowner );
	}
}
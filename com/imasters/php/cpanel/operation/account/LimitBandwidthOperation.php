<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Limita a largura de banda de uma conta
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class LimitBandwidthOperation extends cPanelOperation {
	/**
	 * @var	string
	 */
	private $bwlimit;

	/**
	 * @var	string
	 */
	private $user;

	/**
	 * Recupera o valor de $bwlimit
	 * @return	string
	 */
	public function getBwlimit() {
		return $this->bwlimit;
	}

	/**
	 * @see cPanelOperation::getOperationName()
	 */
	public function getOperationName() {
		return 'limitbw';
	}

	/**
	 * Recupera o valor de $user
	 * @return	string
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param string $bwlimit
	 */
	public function setBwlimit( $bwlimit ) {
		$this->bwlimit = $bwlimit;
		$this->httpConnection->setParam( 'bwlimit' , $bwlimit );
	}

	/**
	 * @param string $user
	 */
	public function setUser( $user ) {
		$this->user = $user;
		$this->httpConnection->setParam( 'user' , $user );
	}
}
<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Troca o pacote de hospedagem
 * @details	Essa operação permite que você troque o pacote de
 * 			hospedagem associado com uma conta do cPanel
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class ChangePackageOperation extends cPanelOperation {
	/**
	 * @var	string
	 */
	private $pkg;

	/**
	 * @var	string
	 */
	private $user;

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'changepackage';
	}

	/**
	 * Recupera o valor de $pkg
	 * @return	string
	 */
	public function getPkg() {
		return $this->pkg;
	}

	/**
	 * Recupera o valor de $user
	 * @return	string
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param string $pkg
	 */
	public function setPkg( $pkg ) {
		$this->pkg = $pkg;
	}

	/**
	 * @param string $user
	 */
	public function setUser( $user ) {
		$this->user = $user;
	}
}
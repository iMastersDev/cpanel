<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Lista as contas
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class ListAccountsOperation extends cPanelOperation {
	/**
	 * @var	string
	 */
	private $searchtype;

	/**
	 * @var	string
	 */
	private $search;

	/**
	 * @see	cPanelOperation::getOperationName()
	 */
	public function getOperationName() {
		return 'listaccts';
	}

	/**
	 * Recupera o valor de $searchtype
	 * @return	string
	 */
	public function getSearchtype() {
		return $this->searchtype;
	}

	/**
	 * Recupera o valor de $search
	 * @return	string
	 */
	public function getSearch() {
		return $this->search;
	}

	/**
	 * @param string $searchtype
	 */
	public function setSearchtype( $searchtype ) {
		$this->searchtype = $searchtype;
		$this->httpConnection->setParam( 'searchtype' , $searchtype );
	}

	/**
	 * @param string $search
	 */
	public function setSearch( $search ) {
		$this->search = $search;
		$this->httpConnection->setParam( 'search' , $search );
	}
}
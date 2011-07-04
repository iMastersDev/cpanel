<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Lista contas suspenças
 * @details	Essa operação permite que você liste as contas que foram
 * 			suspenças.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class ListSuspendedAccountsOperation extends cPanelOperation {
	/**
	 *
	 * @see cPanelOperation::getOperationName()
	 */
	public function getOperationName() {
		return 'listsuspended';
	}
}
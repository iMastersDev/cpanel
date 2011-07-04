<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Visualiza os privilégios do usuário atual.
 * @details	Essa operação permite que você visualize a lista de recursos
 * 			que você pode utilizar no WHM, cada recurso será exibido com
 * 			0 ou 1, indicando a permissão de uso ou não.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class ViewPrivilegesOperation extends cPanelOperation {
	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'myprivs';
	}
}
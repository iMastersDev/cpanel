<?php
/**
 * @brief	Módulo de DNS
 * @details	Implementação das operações de DNS da API do cPanel
 * @package com.imasters.php.cpanel.operation.dns
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Lista todas as zonas de DNS
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class ListZonesOperation extends cPanelOperation {
	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'listzones';
	}
}
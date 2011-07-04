<?php
/**
 * @brief	Biblioteca cPanel
 * @details	Classes e interfaces para integração com a API do cPanel
 * @package com.imasters.php.cpanel
 */

/**
 * @brief	Interface para implementação de um módulo
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
abstract class cPanelModule {
	/**
	 * @var	cPanel
	 */
	protected $cpanel;

	final public function __construct( cPanel $cpanel ) {
		$this->cpanel = $cpanel;
	}
}
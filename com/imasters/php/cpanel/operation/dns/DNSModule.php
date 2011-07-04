<?php
/**
 * @brief	Módulo de DNS
 * @details	Implementação das operações de DNS da API do cPanel
 * @package com.imasters.php.cpanel.operation.dns
 */

require_once 'com/imasters/php/cpanel/cPanelModule.php';
require_once 'com/imasters/php/cpanel/operation/dns/AddDNSOperation.php';

/**
 * @brief	Módulo de DNS
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class DNSModule extends cPanelModule {
	/**
	 * @param	string $domain
	 * @param	string $ip
	 * @return	AddDNSOperation
	 */
	public function addDNS( $domain , $ip ) {
		$addDNSOperation = new AddDNSOperation( $this->cpanel );
		$addDNSOperation->setDomain( $domain );
		$addDNSOperation->setIp( $ip );

		return $addDNSOperation;
	}
}
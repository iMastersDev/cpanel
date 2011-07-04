<?php
/**
 * @brief	Biblioteca cPanel
 * @details	Classes e interfaces para integração com a API do cPanel
 * @package com.imasters.php.cpanel
 */

require_once 'com/imasters/php/http/HTTPCookieManager.php';
require_once 'com/imasters/php/cpanel/operation/account/AccountModule.php';

/**
 * @brief	Implementação da API do cPanel
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class cPanel {
	const UNSECURED_PORT = 2086;
	const SECURED_PORT = 2087;

	/**
	 * @var	string
	 */
	private $host;

	/**
	 * @var	HTTPAuthenticator
	 */
	private $httpAuthenticator;

	/**
	 * @var	integer
	 */
	private $port = cPanel::SECURED_PORT;

	/**
	 * @var	boolean
	 */
	private $secure = true;

	/**
	 * @brief	Constroi o objeto para integração com a API do cPanel
	 * @param	string $host
	 * @param	HTTPAuthenticator $httpAuthenticator
	 */
	public function __construct( $host , HTTPAuthenticator $httpAuthenticator ) {
		$this->host = $host;
		$this->httpAuthenticator = $httpAuthenticator;
		$this->useSecureConnection();
	}

	/**
	 * @brief	Módulo para gerenciamento de contas.
	 * @return	AccountModule
	 */
	public function account() {
		return new AccountModule( $this );
	}

	/**
	 * @brief	Conexão HTTP
	 * @details	Recupera um objeto de conexão HTTP para ser utilizado
	 * nas chamadas às operações da API.
	 * @return	HTTPConnection
	 */
	public function getHTTPConnection() {
		$httpConnection = new HTTPConnection();
		$httpConnection->setAuthenticator( $this->httpAuthenticator );
		$httpConnection->setCookieManager( new HTTPCookieManager() );
		$httpConnection->initialize( $this->host , $this->secure , $this->port );

		return $httpConnection;
	}

	/**
	 * @brief	Define a porta HTTP utilizada na conexão.
	 * @param	integer $port
	 */
	public function setHTTPPort( $port ) {
		$this->port = (int) $port;
	}

	/**
	 * @brief	Define se será utilizado conexão segura (https).
	 * @param	boolean $secure
	 */
	public function useSecureConnection( $secure = true ) {
		$this->secure = !!$secure;
		$this->port = $this->secure ? cPanel::SECURED_PORT : cPanel::UNSECURED_PORT;
	}
}
<?php
/**
 * @brief	Biblioteca cPanel
 * @details	Classes e interfaces para integração com a API do cPanel
 * @package com.imasters.php.cpanel
 */

/**
 * @brief	Interface para implementação de uma operação
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
abstract class cPanelOperation {
	/**
	 * @var	cPanel
	 */
	protected $cpanel;

	/**
	 * @var	HTTPConnection
	 */
	protected $httpConnection;

	/**
	 * @var	HTTPResponse
	 */
	private $httpResponse;

	/**
	 * @brief	Constroi o objeto que representa uma operação
	 * @param	cPanel $cpanel
	 */
	public final function __construct( cPanel $cpanel ) {
		$this->cpanel = $cpanel;
		$this->httpConnection = $cpanel->getHTTPConnection();
	}

	/**
	 * @return	HTTPResponse
	 */
	public function __getLastResponse() {
		return $this->httpResponse;
	}

	/**
	 * @brief	Efetua a chamada à operação da API
	 * @return	stdClass
	 */
	public function call() {
		$this->httpResponse = $this->httpConnection->execute( '/json-api/' . $this->getOperationName() );

		return json_decode( $this->httpResponse->getContent() );
	}

	/**
	 * @brief	Recupera o nome da operação
	 * @return	string
	 */
	public abstract function getOperationName();
}
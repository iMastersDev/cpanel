<?php
/**
 * @brief	Biblioteca cPanel
 * @details	Classes e interfaces para integração com a API do cPanel
 * @package com.imasters.php.cpanel
 */

require_once 'com/imasters/php/http/HTTPAuthenticator.php';

/**
 * @brief	Autenticação HTTP utilizando hash
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class cPanelHashAuthentication implements HTTPAuthenticator {
	/**
	 * @var	string
	 */
	private $hash;

	/**
	 * @var	string
	 */
	private $username;

	/**
	 * @brief	Constroi o objeto de autenticação
	 * @param	string $username Nome do usuário do cPanel
	 * @param	string $hash O hash
	 */
	public function __construct( $username , $hash ) {
		$this->setUsername( $username );
		$this->setHash( $hash );
	}

	/**
	 * @param	HTTPRequest $httpRequest
	 * @see		HTTPAuthenticator::authenticate()
	 */
	public function authenticate( HTTPRequest $httpRequest ) {
		$httpRequest->addRequestHeader( 'Authorization' , sprintf(
			'WHM %s:%s' , $this->username , preg_replace( "/(\r|\n)/" , null,
				$this->hash
			) )
		);
	}

	/**
	 * @brief	Recupera o hash
	 * @return	string
	 */
	public function getHash() {
		return $this->password;
	}

	/**
	 * @brief	Recupera o nome do usuário
	 * @return	string
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * @brief	Define o hash
	 * @param	string $hash O hash que será definido
	 */
	public function setHash( $hash ) {
		$this->hash = $hash;
	}

	/**
	 * @brief	Define o nome do usuário
	 * @param	string $username O nome que será definido
	 */
	public function setUsername( $username ) {
		$this->username = $username;
	}
}
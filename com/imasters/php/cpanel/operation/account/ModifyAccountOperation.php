<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Modifica uma conta
 * @details	Essa operação permite que você modifique atributos específicos
 * 			de uma conta do cPanel, como tema ou domínio.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class ModifyAccountOperation extends cPanelOperation {
	/**
	 * @var	string
	 */
	private $CPTHEME;

	/**
	 * @var	string
	 */
	private $domain;

	/**
	 * @var	string
	 */
	private $HASCGI;

	/**
	 * @var	string
	 */
	private $LANG;

	/**
	 * @var	string
	 */
	private $LOCALE;

	/**
	 * @var	string
	 */
	private $MAXADDON;

	/**
	 * @var	string
	 */
	private $MAXFTP;

	/**
	 * @var	string
	 */
	private $MAXLST;

	/**
	 * @var	string
	 */
	private $MAXPARK;

	/**
	 * @var	string
	 */
	private $MAXPOP;

	/**
	 * @var	string
	 */
	private $MAXSQL;

	/**
	 * @var	string
	 */
	private $MAXSUB;

	/**
	 * @var	string
	 */
	private $newuser;

	/**
	 * @var	string
	 */
	private $owner;

	/**
	 * @var	string
	 */
	private $shell;

	/**
	 * @var	string
	 */
	private $user;

	/**
	 * Recupera o valor de $CPTHEME
	 * @return	string
	 */
	public function getCPTHEME() {
		return $this->CPTHEME;
	}

	/**
	 * Recupera o valor de $domain
	 * @return	string
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * Recupera o valor de $HASCGI
	 * @return	string
	 */
	public function getHASCGI() {
		return $this->HASCGI;
	}

	/**
	 * Recupera o valor de $LANG
	 * @return	string
	 */
	public function getLANG() {
		return $this->LANG;
	}

	/**
	 * Recupera o valor de $LOCALE
	 * @return	string
	 */
	public function getLOCALE() {
		return $this->LOCALE;
	}

	/**
	 * Recupera o valor de $MAXADDON
	 * @return	string
	 */
	public function getMAXADDON() {
		return $this->MAXADDON;
	}

	/**
	 * Recupera o valor de $MAXFTP
	 * @return	string
	 */
	public function getMAXFTP() {
		return $this->MAXFTP;
	}

	/**
	 * Recupera o valor de $MAXLST
	 * @return	string
	 */
	public function getMAXLST() {
		return $this->MAXLST;
	}

	/**
	 * Recupera o valor de $MAXPARK
	 * @return	string
	 */
	public function getMAXPARK() {
		return $this->MAXPARK;
	}

	/**
	 * Recupera o valor de $MAXPOP
	 * @return	string
	 */
	public function getMAXPOP() {
		return $this->MAXPOP;
	}

	/**
	 * Recupera o valor de $MAXSQL
	 * @return	string
	 */
	public function getMAXSQL() {
		return $this->MAXSQL;
	}

	/**
	 * Recupera o valor de $MAXSUB
	 * @return	string
	 */
	public function getMAXSUB() {
		return $this->MAXSUB;
	}

	/**
	 * Recupera o valor de $newuser
	 * @return	string
	 */
	public function getNewuser() {
		return $this->newuser;
	}

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'modifyacct';
	}

	/**
	 * Recupera o valor de $owner
	 * @return	string
	 */
	public function getOwner() {
		return $this->owner;
	}

	/**
	 * Recupera o valor de $shell
	 * @return	string
	 */
	public function getShell() {
		return $this->shell;
	}

	/**
	 * Recupera o valor de $user
	 * @return	string
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param string $CPTHEME
	 */
	public function setCPTHEME( $CPTHEME ) {
		$this->CPTHEME = $CPTHEME;
		$this->httpConnection->setParam( 'CPTHEME' , $CPTHEME );
	}

	/**
	 * @param string $domain
	 */
	public function setDomain( $domain ) {
		$this->domain = $domain;
		$this->httpConnection->setParam( 'domain' , $domain );
	}

	/**
	 * @param string $HASCGI
	 */
	public function setHASCGI( $HASCGI ) {
		$this->HASCGI = $HASCGI;
		$this->httpConnection->setParam( 'HASCGI' , $HASCGI );
	}

	/**
	 * @param string $LANG
	 */
	public function setLANG( $LANG ) {
		$this->LANG = $LANG;
		$this->httpConnection->setParam( 'LANG' , $LANG );
	}

	/**
	 * @param string $LOCALE
	 */
	public function setLOCALE( $LOCALE ) {
		$this->LOCALE = $LOCALE;
		$this->httpConnection->setParam( 'LOCALE' , $LOCALE );
	}

	/**
	 * @param string $MAXADDON
	 */
	public function setMAXADDON( $MAXADDON ) {
		$this->MAXADDON = $MAXADDON;
		$this->httpConnection->setParam( 'MAXADDON' , $MAXADDON );
	}

	/**
	 * @param string $MAXFTP
	 */
	public function setMAXFTP( $MAXFTP ) {
		$this->MAXFTP = $MAXFTP;
		$this->httpConnection->setParam( 'MAXFTP' , $MAXFTP );
	}

	/**
	 * @param string $MAXLST
	 */
	public function setMAXLST( $MAXLST ) {
		$this->MAXLST = $MAXLST;
		$this->httpConnection->setParam( 'MAXLST' , $MAXLST );
	}

	/**
	 * @param string $MAXPARK
	 */
	public function setMAXPARK( $MAXPARK ) {
		$this->MAXPARK = $MAXPARK;
		$this->httpConnection->setParam( 'MAXPARK' , $MAXPARK );
	}

	/**
	 * @param string $MAXPOP
	 */
	public function setMAXPOP( $MAXPOP ) {
		$this->MAXPOP = $MAXPOP;
		$this->httpConnection->setParam( 'MAXPOP' , $MAXPOP );
	}

	/**
	 * @param string $MAXSQL
	 */
	public function setMAXSQL( $MAXSQL ) {
		$this->MAXSQL = $MAXSQL;
		$this->httpConnection->setParam( 'MAXSQL' , $MAXSQL );
	}

	/**
	 * @param string $MAXSUB
	 */
	public function setMAXSUB( $MAXSUB ) {
		$this->MAXSUB = $MAXSUB;
		$this->httpConnection->setParam( 'MAXSUB' , $MAXSUB );
	}

	/**
	 * @param string $newuser
	 */
	public function setNewuser( $newuser ) {
		$this->newuser = $newuser;
		$this->httpConnection->setParam( 'newuser' , $newuser );
	}

	/**
	 * @param string $owner
	 */
	public function setOwner( $owner ) {
		$this->owner = $owner;
		$this->httpConnection->setParam( 'owner' , $owner );
	}

	/**
	 * @param string $shell
	 */
	public function setShell( $shell ) {
		$this->shell = $shell;
		$this->httpConnection->setParam( 'shell' , $shell );
	}

	/**
	 * @param string $user
	 */
	public function setUser( $user ) {
		$this->user = $user;
		$this->httpConnection->setParam( 'user' , $user );
	}
}
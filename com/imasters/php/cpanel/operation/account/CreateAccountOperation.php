<?php
/**
 * @brief	Módulo de contas
 * @details	Implementação das operações de contas da API do cPanel
 * @package com.imasters.php.cpanel.operation.account
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Cria uma conta
 * @details	Essa operação cria uma conta de hospedagem e configura
 * 			o domínio associado.
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class CreateAccountOperation extends cPanelOperation {
	/**
	 * @var	integer
	 */
	private $bwlimit;

	/**
	 * @var	boolean
	 */
	private $cgi;

	/**
	 * @var	string
	 */
	private $contactemail;

	/**
	 * @var	string
	 */
	private $cpmod;

	/**
	 * @var	string
	 */
	private $customip;

	/**
	 * @var	string
	 */
	private $domain;

	/**
	 * @var	string
	 */
	private $featurelist;

	/**
	 * @var	boolean
	 */
	private $forcedns;

	/**
	 * @var	boolean
	 */
	private $frontpage;

	/**
	 * @var	boolean
	 */
	private $hasshell;

	/**
	 * @var	boolean
	 */
	private $hasuseregns;

	/**
	 * @var	string
	 */
	private $ip;

	/**
	 * @var	string
	 */
	private $language;

	/**
	 * @var	integer
	 */
	private $maxaddon;

	/**
	 * @var	integer
	 */
	private $maxftp;

	/**
	 * @var	integer
	 */
	private $maxlst;

	/**
	 * @var	integer
	 */
	private $maxpark;

	/**
	 * @var	integer
	 */
	private $maxpop;

	/**
	 * @var	integer
	 */
	private $maxsql;

	/**
	 * @var	integer
	 */
	private $maxsub;

	/**
	 * @var string
	 */
	private $mxcheck;

	/**
	 * @var	string
	 */
	private $password;

	/**
	 * @var	string
	 */
	private $pkgname;

	/**
	 * @var	string
	 */
	private $plan;

	/**
	 * @var	integer
	 */
	private $quota;

	/**
	 * @var boolean
	 */
	private $reseller;

	/**
	 * @var	boolean
	 */
	private $savepkg;

	/**
	 * @var	boolean
	 */
	private $useregns;

	/**
	 * @var	string
	 */
	private $username;

	/**
	 * Recupera o valor de $bwlimit
	 * @return	integer
	 */
	public function getBwlimit() {
		return $this->bwlimit;
	}

	/**
	 * Recupera o valor de $cgi
	 * @return	boolean
	 */
	public function getCgi() {
		return $this->cgi;
	}

	/**
	 * Recupera o valor de $contactemail
	 * @return	string
	 */
	public function getContactemail() {
		return $this->contactemail;
	}

	/**
	 * Recupera o valor de $cpmod
	 * @return	string
	 */
	public function getCpmod() {
		return $this->cpmod;
	}

	/**
	 * Recupera o valor de $customip
	 * @return	string
	 */
	public function getCustomip() {
		return $this->customip;
	}

	/**
	 * Recupera o valor de $domain
	 * @return	string
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * Recupera o valor de $featurelist
	 * @return	string
	 */
	public function getFeaturelist() {
		return $this->featurelist;
	}

	/**
	 * Recupera o valor de $forcedns
	 * @return	boolean
	 */
	public function getForcedns() {
		return $this->forcedns;
	}

	/**
	 * Recupera o valor de $frontpage
	 * @return	boolean
	 */
	public function getFrontpage() {
		return $this->frontpage;
	}

	/**
	 * Recupera o valor de $hasshell
	 * @return	boolean
	 */
	public function getHasshell() {
		return $this->hasshell;
	}

	/**
	 * Recupera o valor de $hasuseregns
	 * @return	boolean
	 */
	public function getHasuseregns() {
		return $this->hasuseregns;
	}

	/**
	 * Recupera o valor de $ip
	 * @return	string
	 */
	public function getIp() {
		return $this->ip;
	}

	/**
	 * Recupera o valor de $language
	 * @return	string
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Recupera o valor de $maxaddon
	 * @return	integer
	 */
	public function getMaxaddon() {
		return $this->maxaddon;
	}

	/**
	 * Recupera o valor de $maxftp
	 * @return	integer
	 */
	public function getMaxftp() {
		return $this->maxftp;
	}

	/**
	 * Recupera o valor de $maxlst
	 * @return	integer
	 */
	public function getMaxlst() {
		return $this->maxlst;
	}

	/**
	 * Recupera o valor de $maxpark
	 * @return	integer
	 */
	public function getMaxpark() {
		return $this->maxpark;
	}

	/**
	 * Recupera o valor de $maxpop
	 * @return	integer
	 */
	public function getMaxpop() {
		return $this->maxpop;
	}

	/**
	 * Recupera o valor de $maxsql
	 * @return	integer
	 */
	public function getMaxsql() {
		return $this->maxsql;
	}

	/**
	 * Recupera o valor de $maxsub
	 * @return	integer
	 */
	public function getMaxsub() {
		return $this->maxsub;
	}

	/**
	 * Recupera o valor de $mxcheck
	 * @return	string
	 */
	public function getMxcheck() {
		return $this->mxcheck;
	}

	/**
	 * @see		cPanelOperation::getOperationPath()
	 * @return	string
	 */
	public function getOperationName() {
		return 'createacct';
	}

	/**
	 * Recupera o valor de $password
	 * @return	string
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * Recupera o valor de $pkgname
	 * @return	string
	 */
	public function getPkgname() {
		return $this->pkgname;
	}

	/**
	 * Recupera o valor de $plan
	 * @return	string
	 */
	public function getPlan() {
		return $this->plan;
	}

	/**
	 * Recupera o valor de $quota
	 * @return	integer
	 */
	public function getQuota() {
		return $this->quota;
	}

	/**
	 * Recupera o valor de $reseller
	 * @return	boolean
	 */
	public function getReseller() {
		return $this->reseller;
	}

	/**
	 * Recupera o valor de $savepkg
	 * @return	boolean
	 */
	public function getSavepkg() {
		return $this->savepkg;
	}

	/**
	 * Recupera o valor de $useregns
	 * @return	boolean
	 */
	public function getUseregns() {
		return $this->useregns;
	}

	/**
	 * Recupera o valor de $username
	 * @return	string
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * @param integer $bwlimit
	 */
	public function setBwlimit( $bwlimit ) {
		$this->bwlimit = $bwlimit;
		$this->httpConnection->setParam( 'bwlimit' , $bwlimit );
	}

	/**
	 * @param boolean $cgi
	 */
	public function setCgi( $cgi ) {
		$this->cgi = $cgi;
		$this->httpConnection->setParam( 'cgi' , $cgi );
	}

	/**
	 * @param string $contactemail
	 */
	public function setContactemail( $contactemail ) {
		$this->contactemail = $contactemail;
		$this->httpConnection->setParam( 'contactemail' , $contactemail );
	}

	/**
	 * @param string $cpmod
	 */
	public function setCpmod( $cpmod ) {
		$this->cpmod = $cpmod;
		$this->httpConnection->setParam( 'cpmod' , $cpmod );
	}

	/**
	 * @param string $customip
	 */
	public function setCustomip( $customip ) {
		$this->customip = $customip;
		$this->httpConnection->setParam( 'customip' , $customip );
	}

	/**
	 * @param string $domain
	 */
	public function setDomain( $domain ) {
		$this->domain = $domain;
		$this->httpConnection->setParam( 'domain' , $domain );
	}

	/**
	 * @param string $featurelist
	 */
	public function setFeaturelist( $featurelist ) {
		$this->featurelist = $featurelist;
		$this->httpConnection->setParam( 'featurelist' , $featurelist );
	}

	/**
	 * @param boolean $forcedns
	 */
	public function setForcedns( $forcedns ) {
		$this->forcedns = $forcedns;
		$this->httpConnection->setParam( 'forcedns' , $forcedns );
	}

	/**
	 * @param boolean $frontpage
	 */
	public function setFrontpage( $frontpage ) {
		$this->frontpage = $frontpage;
		$this->httpConnection->setParam( 'frontpage' , $frontpage );
	}

	/**
	 * @param boolean $hasshell
	 */
	public function setHasshell( $hasshell ) {
		$this->hasshell = $hasshell;
		$this->httpConnection->setParam( 'hasshell' , $hasshell );
	}

	/**
	 * @param boolean $hasuseregns
	 */
	public function setHasuseregns( $hasuseregns ) {
		$this->hasuseregns = $hasuseregns;
		$this->httpConnection->setParam( 'hasuseregns' , $hasuseregns );
	}

	/**
	 * @param string $ip
	 */
	public function setIp( $ip ) {
		$this->ip = $ip;
		$this->httpConnection->setParam( 'ip' , $ip );
	}

	/**
	 * @param string $language
	 */
	public function setLanguage( $language ) {
		$this->language = $language;
		$this->httpConnection->setParam( 'language' , $language );
	}

	/**
	 * @param integer $maxaddon
	 */
	public function setMaxaddon( $maxaddon ) {
		$this->maxaddon = $maxaddon;
		$this->httpConnection->setParam( 'maxaddon' , $maxaddon );
	}

	/**
	 * @param integer $maxftp
	 */
	public function setMaxftp( $maxftp ) {
		$this->maxftp = $maxftp;
		$this->httpConnection->setParam( 'maxftp' , $maxftp );
	}

	/**
	 * @param integer $maxlst
	 */
	public function setMaxlst( $maxlst ) {
		$this->maxlst = $maxlst;
		$this->httpConnection->setParam( 'maxlst' , $maxlst );
	}

	/**
	 * @param integer $maxpark
	 */
	public function setMaxpark( $maxpark ) {
		$this->maxpark = $maxpark;
		$this->httpConnection->setParam( 'maxpark' , $maxpark );
	}

	/**
	 * @param integer $maxpop
	 */
	public function setMaxpop( $maxpop ) {
		$this->maxpop = $maxpop;
		$this->httpConnection->setParam( 'maxpop' , $maxpop );
	}

	/**
	 * @param integer $maxsql
	 */
	public function setMaxsql( $maxsql ) {
		$this->maxsql = $maxsql;
		$this->httpConnection->setParam( 'maxsql' , $maxsql );
	}

	/**
	 * @param integer $maxsub
	 */
	public function setMaxsub( $maxsub ) {
		$this->maxsub = $maxsub;
		$this->httpConnection->setParam( 'maxsub' , $maxsub );
	}

	/**
	 * @param string $mxcheck
	 */
	public function setMxcheck( $mxcheck ) {
		$this->mxcheck = $mxcheck;
		$this->httpConnection->setParam( 'mxcheck' , $mxcheck );
	}

	/**
	 * @param string $password
	 */
	public function setPassword( $password ) {
		$this->password = $password;
		$this->httpConnection->setParam( 'password' , $password );
	}

	/**
	 * @param string $pkgname
	 */
	public function setPkgname( $pkgname ) {
		$this->pkgname = $pkgname;
		$this->httpConnection->setParam( 'pkgname' , $pkgname );
	}

	/**
	 * @param string $plan
	 */
	public function setPlan( $plan ) {
		$this->plan = $plan;
		$this->httpConnection->setParam( 'plan' , $plan );
	}

	/**
	 * @param integer $quota
	 */
	public function setQuota( $quota ) {
		$this->quota = $quota;
		$this->httpConnection->setParam( 'quota' , $quota );
	}

	/**
	 * @param boolean $reseller
	 */
	public function setReseller( $reseller ) {
		$this->reseller = $reseller;
		$this->httpConnection->setParam( 'reseller' , $reseller );
	}

	/**
	 * @param boolean $savepkg
	 */
	public function setSavepkg( $savepkg ) {
		$this->savepkg = $savepkg;
		$this->httpConnection->setParam( 'savepkg' , $savepkg );
	}

	/**
	 * @param boolean $useregns
	 */
	public function setUseregns( $useregns ) {
		$this->useregns = $useregns;
		$this->httpConnection->setParam( 'useregns' , $useregns );
	}

	/**
	 * @param string $username
	 */
	public function setUsername( $username ) {
		$this->username = $username;
		$this->httpConnection->setParam( 'username' , $username );
	}

}
<?php
/**
 * @brief	Módulo de DNS
 * @details	Implementação das operações de DNS da API do cPanel
 * @package com.imasters.php.cpanel.operation.dns
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Edita um registro de zona de DNS
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class EditZoneRecordOperation extends cPanelOperation {
	/**
	 * @var	string
	 */
	private $address;

	/**
	 * @var	string
	 */
	private $class;

	/**
	 * @var	string
	 */
	private $cname;

	/**
	 * @var	string
	 */
	private $domain;

	/**
	 * @var	string
	 */
	private $exchange;

	/**
	 * @var	string
	 */
	private $expire;

	/**
	 * @var	string
	 */
	private $Line;

	/**
	 * @var	integer
	 */
	private $minimum;

	/**
	 * @var	integer
	 */
	private $mname;

	/**
	 * @var	string
	 */
	private $name;

	/**
	 * @var	string
	 */
	private $nsdname;

	/**
	 * @var	integer
	 */
	private $preference;

	/**
	 * @var	string
	 */
	private $raw;

	/**
	 * @var	integer
	 */
	private $refresh;

	/**
	 * @var	integer
	 */
	private $retry;

	/**
	 * @var	string
	 */
	private $rname;

	/**
	 * @var	integer
	 */
	private $serial;

	/**
	 * @var	string
	 */
	private $ttl;

	/**
	 * @var	string
	 */
	private $txtdata;

	/**
	 * @var	string
	 */
	private $type;

	/**
	 * Recupera o valor de $address
	 * @return	string
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Recupera o valor de $class
	 * @return	string
	 */
	public function getClass() {
		return $this->class;
	}

	/**
	 * Recupera o valor de $cname
	 * @return	string
	 */
	public function getCname() {
		return $this->cname;
	}

	/**
	 * Recupera o valor de $domain
	 * @return	string
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * Recupera o valor de $exchange
	 * @return	string
	 */
	public function getExchange() {
		return $this->exchange;
	}

	/**
	 * Recupera o valor de $expire
	 * @return	string
	 */
	public function getExpire() {
		return $this->expire;
	}

	/**
	 * Recupera o valor de $Line
	 * @return	string
	 */
	public function getLine() {
		return $this->Line;
	}

	/**
	 * Recupera o valor de $minimum
	 * @return	integer
	 */
	public function getMinimum() {
		return $this->minimum;
	}

	/**
	 * Recupera o valor de $mname
	 * @return	integer
	 */
	public function getMname() {
		return $this->mname;
	}

	/**
	 * Recupera o valor de $name
	 * @return	string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Recupera o valor de $nsdname
	 * @return	string
	 */
	public function getNsdname() {
		return $this->nsdname;
	}

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'editzonerecord';
	}

	/**
	 * Recupera o valor de $preference
	 * @return	integer
	 */
	public function getPreference() {
		return $this->preference;
	}

	/**
	 * Recupera o valor de $raw
	 * @return	string
	 */
	public function getRaw() {
		return $this->raw;
	}

	/**
	 * Recupera o valor de $refresh
	 * @return	integer
	 */
	public function getRefresh() {
		return $this->refresh;
	}

	/**
	 * Recupera o valor de $retry
	 * @return	integer
	 */
	public function getRetry() {
		return $this->retry;
	}

	/**
	 * Recupera o valor de $rname
	 * @return	string
	 */
	public function getRname() {
		return $this->rname;
	}

	/**
	 * Recupera o valor de $serial
	 * @return	integer
	 */
	public function getSerial() {
		return $this->serial;
	}

	/**
	 * Recupera o valor de $ttl
	 * @return	string
	 */
	public function getTtl() {
		return $this->ttl;
	}

	/**
	 * Recupera o valor de $txtdata
	 * @return	string
	 */
	public function getTxtdata() {
		return $this->txtdata;
	}

	/**
	 * Recupera o valor de $type
	 * @return	string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param string $address
	 */
	public function setAddress( $address ) {
		$this->address = $address;
		$this->httpConnection->setParam( 'address' , $address );
	}

	/**
	 * @param string $class
	 */
	public function setClass( $class ) {
		$this->class = $class;
		$this->httpConnection->setParam( 'class' , $class );
	}

	/**
	 * @param string $cname
	 */
	public function setCname( $cname ) {
		$this->cname = $cname;
		$this->httpConnection->setParam( 'cname' , $cname );
	}

	/**
	 * @param string $domain
	 */
	public function setDomain( $domain ) {
		$this->domain = $domain;
		$this->httpConnection->setParam( 'domain' , $domain );
	}

	/**
	 * @param string $exchange
	 */
	public function setExchange( $exchange ) {
		$this->exchange = $exchange;
		$this->httpConnection->setParam( 'exchange' , $exchange );
	}

	/**
	 * @param string $expire
	 */
	public function setExpire( $expire ) {
		$this->expire = $expire;
		$this->httpConnection->setParam( 'expire' , $expire );
	}

	/**
	 * @param string $Line
	 */
	public function setLine( $Line ) {
		$this->Line = $Line;
		$this->httpConnection->setParam( 'Line' , $Line );
	}

	/**
	 * @param integer $minimum
	 */
	public function setMinimum( $minimum ) {
		$this->minimum = $minimum;
		$this->httpConnection->setParam( 'minimum' , $minimum );
	}

	/**
	 * @param integer $mname
	 */
	public function setMname( $mname ) {
		$this->mname = $mname;
		$this->httpConnection->setParam( 'mname' , $mname );
	}

	/**
	 * @param string $name
	 */
	public function setName( $name ) {
		$this->name = $name;
		$this->httpConnection->setParam( 'name' , $name );
	}

	/**
	 * @param string $nsdname
	 */
	public function setNsdname( $nsdname ) {
		$this->nsdname = $nsdname;
		$this->httpConnection->setParam( 'nsdname' , $nsdname );
	}

	/**
	 * @param integer $preference
	 */
	public function setPreference( $preference ) {
		$this->preference = $preference;
		$this->httpConnection->setParam( 'preference' , $preference );
	}

	/**
	 * @param string $raw
	 */
	public function setRaw( $raw ) {
		$this->raw = $raw;
		$this->httpConnection->setParam( 'raw' , $raw );
	}

	/**
	 * @param integer $refresh
	 */
	public function setRefresh( $refresh ) {
		$this->refresh = $refresh;
		$this->httpConnection->setParam( 'refresh' , $refresh );
	}

	/**
	 * @param integer $retry
	 */
	public function setRetry( $retry ) {
		$this->retry = $retry;
		$this->httpConnection->setParam( 'retry' , $retry );
	}

	/**
	 * @param string $rname
	 */
	public function setRname( $rname ) {
		$this->rname = $rname;
		$this->httpConnection->setParam( 'rname' , $rname );
	}

	/**
	 * @param integer $serial
	 */
	public function setSerial( $serial ) {
		$this->serial = $serial;
		$this->httpConnection->setParam( 'serial' , $serial );
	}

	/**
	 * @param string $ttl
	 */
	public function setTtl( $ttl ) {
		$this->ttl = $ttl;
		$this->httpConnection->setParam( 'ttl' , $ttl );
	}

	/**
	 * @param string $txtdata
	 */
	public function setTxtdata( $txtdata ) {
		$this->txtdata = $txtdata;
		$this->httpConnection->setParam( 'txtdata' , $txtdata );
	}

	/**
	 * @param string $type
	 */
	public function setType( $type ) {
		$this->type = $type;
		$this->httpConnection->setParam( 'type' , $type );
	}
}
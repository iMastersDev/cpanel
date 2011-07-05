<?php
/**
 * @brief	Módulo de DNS
 * @details	Implementação das operações de DNS da API do cPanel
 * @package com.imasters.php.cpanel.operation.dns
 */

require_once 'com/imasters/php/cpanel/cPanelOperation.php';

/**
 * @brief	Adiciona um registro de zona de DNS
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 */
class AddZoneRecordOperation extends cPanelOperation {
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
	private $exchange;

	/**
	 * @var	string
	 */
	private $name;

	/**
	 * @var	string
	 */
	private $nsname;

	/**
	 * @var	integer
	 */
	private $port;

	/**
	 * @var	integer
	 */
	private $preference;

	/**
	 * @var	string
	 */
	private $ptdrname;

	/**
	 * @var	string
	 */
	private $target;

	/**
	 * @var	integer
	 */
	private $ttl;

	/**
	 * @var	string
	 */
	private $type;

	/**
	 * @var	integer
	 */
	private $weight;

	/**
	 * @var	string
	 */
	private $zone;

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
	 * Recupera o valor de $exchange
	 * @return	string
	 */
	public function getExchange() {
		return $this->exchange;
	}

	/**
	 * Recupera o valor de $name
	 * @return	string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Recupera o valor de $nsname
	 * @return	string
	 */
	public function getNsname() {
		return $this->nsname;
	}

	/**
	 * @see		cPanelOperation::getOperationName()
	 * @return	string
	 */
	public function getOperationName() {
		return 'addzonerecord';
	}

	/**
	 * Recupera o valor de $port
	 * @return	integer
	 */
	public function getPort() {
		return $this->port;
	}

	/**
	 * Recupera o valor de $preference
	 * @return	integer
	 */
	public function getPreference() {
		return $this->preference;
	}

	/**
	 * Recupera o valor de $ptdrname
	 * @return	string
	 */
	public function getPtdrname() {
		return $this->ptdrname;
	}

	/**
	 * Recupera o valor de $target
	 * @return	string
	 */
	public function getTarget() {
		return $this->target;
	}

	/**
	 * Recupera o valor de $ttl
	 * @return	integer
	 */
	public function getTtl() {
		return $this->ttl;
	}

	/**
	 * Recupera o valor de $type
	 * @return	string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Recupera o valor de $weight
	 * @return	integer
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Recupera o valor de $zone
	 * @return	string
	 */
	public function getZone() {
		return $this->zone;
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
	 * @param string $exchange
	 */
	public function setExchange( $exchange ) {
		$this->exchange = $exchange;
		$this->httpConnection->setParam( 'exchange' , $exchange );
	}

	/**
	 * @param string $name
	 */
	public function setName( $name ) {
		$this->name = $name;
		$this->httpConnection->setParam( 'name' , $name );
	}

	/**
	 * @param string $nsname
	 */
	public function setNsname( $nsname ) {
		$this->nsname = $nsname;
		$this->httpConnection->setParam( 'nsname' , $nsname );
	}

	/**
	 * @param integer $port
	 */
	public function setPort( $port ) {
		$this->port = $port;
		$this->httpConnection->setParam( 'port' , $port );
	}

	/**
	 * @param integer $preference
	 */
	public function setPreference( $preference ) {
		$this->preference = $preference;
		$this->httpConnection->setParam( 'preference' , $preference );
	}

	/**
	 * @param string $ptdrname
	 */
	public function setPtdrname( $ptdrname ) {
		$this->ptdrname = $ptdrname;
		$this->httpConnection->setParam( 'ptdrname' , $ptdrname );
	}

	/**
	 * @param string $target
	 */
	public function setTarget( $target ) {
		$this->target = $target;
		$this->httpConnection->setParam( 'target' , $target );
	}

	/**
	 * @param integer $ttl
	 */
	public function setTtl( $ttl ) {
		$this->ttl = $ttl;
		$this->httpConnection->setParam( 'ttl' , $ttl );
	}

	/**
	 * @param string $type
	 */
	public function setType( $type ) {
		$this->type = $type;
		$this->httpConnection->setParam( 'type' , $type );
	}

	/**
	 * @param integer $weight
	 */
	public function setWeight( $weight ) {
		$this->weight = $weight;
		$this->httpConnection->setParam( 'weight' , $weight );
	}

	/**
	 * @param string $zone
	 */
	public function setZone( $zone ) {
		$this->zone = $zone;
		$this->httpConnection->setParam( 'zone' , $zone );
	}
}
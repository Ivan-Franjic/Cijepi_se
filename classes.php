<?php
ini_set('memory_limit', '2048M');
header('Content-type: text/json');
header('Content-type: application/json; charset=utf-8');

	class Pacijent
	{
		public $ime="N/A";
		public $prezime="N/A";
		public $adresa="N/A";
		public $grad="N/A";
		public $zupanija="N/A";
		public $oib="N/A";
		public $datum_rodenja="N/A";
		public $god="N/A";
		public $token="N/A";
		public $cjepivo="N/A";
		public $prva_doza_datum="N/A";
		public $prva_doza_status="N/A";
		public $druga_doza_datum="N/A";
		public $druga_doza_status="N/A";
		

		public function __construct($ime=null,$prezime=null,$adresa=null,$grad=null,$zupanija=null,$oib=null,$datum_rodenja=null,$god=null,$token=null,$cjepivo=null,$prva_doza_datum=null,$prva_doza_status=null,$druga_doza_datum=null,$druga_doza_status=null)
		{
			if($ime) $this->ime=$ime;
			if($prezime) $this->prezime=$prezime;
			if($adresa) $this->adresa=$adresa;
			if($grad) $this->grad=$grad;
			if($zupanija) $this->zupanija=$zupanija;
			if($oib) $this->oib=$oib;
			if($datum_rodenja) $this->datum_rodenja=$datum_rodenja;
			if($god) $this->god=$god;
			if($token) $this->token=$token;
			if($cjepivo) $this->cjepivo=$cjepivo;
			if($prva_doza_datum) $this->prva_doza_datum=$prva_doza_datum;
			if($prva_doza_status) $this->prva_doza_status=$prva_doza_status;
			if($druga_doza_datum) $this->druga_doza_datum=$druga_doza_datum;
			if($druga_doza_status) $this->druga_doza_status=$druga_doza_status;
		}
	}

	class Cjepivo
	{
		public $id="N/A";
		public $naziv_cjepiva="N/A";

		public function __construct($id=null,$naziv_cjepiva=null)
		{
			if($id) $this->id=$id;
			if($naziv_cjepiva) $this->naziv_cjepiva=$naziv_cjepiva;
		}
	}

	class Zupanija
	{
		public $id="N/A";
		public $naziv_zupanije="N/A";

		public function __construct($id=null,$naziv_zupanije=null)
		{
			if($id) $this->id=$id;
			if($naziv_zupanije) $this->naziv_zupanije=$naziv_zupanije;
		}
	}

	class Testiranje
	{
		public $id="N/A";
		public $ime="N/A";
		public $prezime="N/A";
		public $adresa="N/A";
		public $grad="N/A";
		public $zupanija="N/A";
		public $oib="N/A";
		public $datum_rodenja="N/A";
		public $god="N/A";
		public $test="N/A";
		public $datum="N/A";
		public $rezultat="Na čekanju";
		public $token="N/A";

		public function __construct($id=null,$ime=null,$prezime=null,$adresa=null,$grad=null,$zupanija=null,$oib=null,$datum_rodenja=null,$god=null,$test=null,$datum=null,$rezultat=null,$token=null)
		{
			if($id) $this->id=$id;
			if($ime) $this->ime=$ime;
			if($prezime) $this->prezime=$prezime;
			if($adresa) $this->adresa=$adresa;
			if($grad) $this->grad=$grad;
			if($zupanija) $this->zupanija=$zupanija;
			if($oib) $this->oib=$oib;
			if($datum_rodenja) $this->datum_rodenja=$datum_rodenja;
			if($god) $this->god=$god;
			if($test) $this->test=$test;
			if($datum) $this->datum=$datum;
			if($rezultat) $this->rezultat=$rezultat;
			if($token) $this->token=$token;
		}
	}

	class PovijestTestiranja
	{
		public $ime="N/A";
		public $prezime="N/A";
		public $adresa="N/A";
		public $grad="N/A";
		public $zupanija="N/A";
		public $oib="N/A";
		public $datum_rodenja="N/A";
		public $god="N/A";

		public function __construct($ime=null,$prezime=null,$adresa=null,$grad=null,$zupanija=null,$oib=null,$datum_rodenja=null,$god=null)
		{
			if($ime) $this->ime=$ime;
			if($prezime) $this->prezime=$prezime;
			if($adresa) $this->adresa=$adresa;
			if($grad) $this->grad=$grad;
			if($zupanija) $this->zupanija=$zupanija;
			if($oib) $this->oib=$oib;
			if($datum_rodenja) $this->datum_rodenja=$datum_rodenja;
			if($god) $this->god=$god;
		}
	}

	class Rezultat
	{
		public $oib="N/A";
		public $test="N/A";
		public $datum="N/A";
		public $rezultat="N/A";

		public function __construct($oib=null,$test=null,$datum=null,$rezultat=null)
		{
			if($oib) $this->oib=$oib;
			if($test) $this->test=$test;
			if($datum) $this->datum=$datum;
			if($rezultat) $this->rezultat=$rezultat;
		}
	}


?>
<?php

    session_start();



    class Conectar{

        protected $dbh;



        protected function Conexion(){

            try {

                //Local

				//$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=andercode_helpdesk1","root","");

                //Produccion

        $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=tlaquepa_andercode_helpdesk1","","");//quite usuario y contraseña por motivos de seguridad si se requieren aviseme profe

				return $conectar;

			} catch (Exception $e) {

				print "¡Error BD!: " . $e->getMessage() . "<br/>";

				die();

			}

        }



        public function set_names(){

			return $this->dbh->query("SET NAMES 'utf8'");

        }



        public static function ruta(){

            //Local

			//return "https://localhost/PERSONAL_HelpDesk/";

            //Produccion

            return "https://helpdesk.tlaquepaqueescolar.com.mx/";

		}



    }

?>
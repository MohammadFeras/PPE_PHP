<?php

namespace DB\Connexion {

    use PDOException;

	class Connexion {
		static function getInstance() {
			static $dbh = NULL;
			if ($dbh==NULL) {
                                $dbn="ppe_php";
				$dsn = "127.0.0.1";
				$username = "root";
				$password = "";
				//Goto project -> properties -> Project Facets and enable both facets
				//pour expliciter le namespace, on préfixe la classe avec \
				$options = array (
						\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" 
				);
				try {
					$dbh = new \PDO ( $dsn,$dbn, $username, $password, $options );
				} catch ( PDOException $e ) {
                                     print "Erreur de connexion PDO ";
                                     die();
				}
			}
			return $dbh;
		}
		
	}
}
?>
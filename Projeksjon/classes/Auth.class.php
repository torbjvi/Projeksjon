<?PHP

class Auth {
	public $person;
	private $dbh;
	function __construct($dbh) {
		$this->level = 0;
		$this->dbh = $dbh;
		$this->check();
	}
	function check() {
		if(isset($_SESSION['username'])){
			$this->logIn($_SESSION['username'],$this->dbh);
		}
		return $this->level;
	}
	function isLoggedIn() {
		return isset($_SESSION['username']);
	}
	private function verifyWithFK() {
		
	}
	function logIn($user,$dbh) {
		$query = sprintf("SELECT * FROM `persons` WHERE `username` = '%s' LIMIT 1;", mysql_real_escape_string($user));
		
		foreach ($dbh->query($query) as $row) {
			$bruker = $row;
		}
		if(!$bruker['id']){
			$_SESSION['username'] = '';
			$_SESSION['name'] = '';
			$_SESSION['user_flags'] = '';
			$_SESSION['userid'] = '';
			return false;
		}
		else {
			$_SESSION['username'] = $bruker['username'];
			$_SESSION['name'] = $bruker['name'];
			$_SESSION['user_flags'] = $bruker['user_flags'];
			$_SESSION['userid'] = $bruker['id'];
			$this->person = new Person($bruker['name'],$bruker['username'], $bruker['email'], $bruker['graduateYear'], $bruker['user_flags'], $bruker['picture'], $bruker['birthday']);
			return true;
		}
		
		
			
		
		
	}
	function logOut() {
			$_SESSION['username'] = '';
			$_SESSION['user_flags'] = 0;
			$_session['userid'] = '';
	}
	function getPasswordSalt()
	{
		return substr( str_pad( dechex( mt_rand() ), 8, '0',
											   STR_PAD_LEFT ), -8 );
	}

	// calculate the hash from a salt and a password
	function getPasswordHash( $salt, $password )
	{
		return $salt . ( hash( 'whirlpool', $salt . $password ) );
	}

	// compare a password to a hash
	function comparePassword( $password, $hash )
	{
		$salt = substr( $hash, 0, 8 );
		return $hash == $this->getPasswordHash( $salt, $password );
	}



}

?>
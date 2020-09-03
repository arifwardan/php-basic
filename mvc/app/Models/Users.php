<?php 

class Users extends Model {
    private $_isLoggedIn, $_sessionName, $_cookieName;
    public static   $currentLoggedInUser = null;

    public function __construct($user = '') {
        $table = 'users';
        parent::__construct($table);
        $this->_sessionName = CURRENT_USER_SESSION_NAME;
        $this->_cookieName  = REMEMBER_ME_COOKIE_NAME;
        $this->_softDelete  = true;
    }
}
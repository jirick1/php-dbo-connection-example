<?php

/**
 * Description of SQLPreparedQuery
 *
 * @author James Irick
 */
class SQLPreparedQuery {
    //all of our sql code should be in a centralized location
    public static $EMAIL_EXIST = "SELECT email FROM user WHERE email=? LIMIT 1";
    public static $USER_ADD = "INSET INTO tblUser (username, email, first, last) VALUES(?,?,?,?)";
}
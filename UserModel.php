<?php

/**
 * Description of UserModel
 *
 * @author James Irick
 */
require_once './Database.php';
require_once './SQLPreparedQuery.php';
class UserModel {
    public function doesEmailExist($email) {
        $doesEmailExist = false;
        try {
            $dbh = Database::getInstance();
            
            $stmt = $dbh->prepare(SQLPreparedQuery::$EMAIL_EXIST);
            $stmt->bindParam(1, $email, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $doesEmailExist = (empty($result) ? false : true);
        }
        catch (PDOException $ex) { 
            echo "An Error occured!" . $ex;
        }
        return $doesEmailExist;
    }
    
    public function addUser($email, $first, $last, $saltedPwd) {
        
    }
}

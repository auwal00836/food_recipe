
<?php
    
    function getAdmin($dbconn, $username){

        return getChef($dbconn, 'users', 'username', $username);
    }

    function getChef($dbconn, $table, $field, $key){

        $sql = "SELECT * FROM $table WHERE $field='$key';";
        $result = $dbconn->query($sql);
        $row = mysqli_fetch_assoc($result); 
        $userData = array();
        array_push($userData, $row);

        return count($userData) > 0 ? $userData[0] : 0;
    }

    function login($dbconn, $username = null, $password = null, $userType){
    // $user = getUser($dbconn, 'admin', 'user_name', $username);

        if($userType == 'admin'){
            $user = getAdmin($dbconn, $username);
        }
        else if($userType == 'chef'){
            $user = getChef($dbconn,'chefs','email',$username);
        }
        else
        {
            $user = null;
        }

        if ($user) {
            if ($password == $user['password']){
                return true;
            }
        }
        return false;
    }

?>
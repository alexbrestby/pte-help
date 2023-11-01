<?php

class User
{
    public static function getAllUsers()
    {

        $db = Database::getConnection();

        $sql = 'SELECT * FROM users LIMIT 5';
        $result = $db->prepare($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        $i = 0;
        $userList = array();
        while ($row = $result->fetch()) {
            $userList[$i]['mail'] = $row['mail'];
            $userList[$i]['unique_id'] = $row['unique_id'];
            $i++;
        }
        return $userList;
    }
}

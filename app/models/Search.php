<?php
class Search
{
    public static function getSearch($query)
    {

        $db = Database::getConnection();

        $sql = "SELECT * FROM quest WHERE q_text LIKE '%$query%'";
        $stmt = $db->prepare($sql);

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->execute();

        $i = 0;
        $userList = array();
        while ($row = $stmt->fetch()) {
            $userList[$i]['quest'] = $row['q_text'];
            $userList[$i]['quest_img'] = $row['q_img'];
            $userList[$i]['ans_1'] = $row['ans_1_text'];
            $userList[$i]['ans_1_is_true'] = $row['ans_1_is_true'];
            $userList[$i]['img_1'] = $row['ans_1_img'];
            $userList[$i]['ans_2'] = $row['ans_2_text'];
            $userList[$i]['ans_2_is_true'] = $row['ans_2_is_true'];
            $userList[$i]['img_2'] = $row['ans_2_img'];
            $userList[$i]['ans_3'] = $row['ans_3_text'];
            $userList[$i]['ans_3_is_true'] = $row['ans_3_is_true'];
            $userList[$i]['img_3'] = $row['ans_3_img'];
            $userList[$i]['ans_4'] = $row['ans_4_text'];
            $userList[$i]['ans_4_is_true'] = $row['ans_4_is_true'];
            $userList[$i]['img_4'] = $row['ans_4_img'];
            $userList[$i]['ans_5'] = $row['ans_5_text'];
            $userList[$i]['ans_5_is_true'] = $row['ans_5_is_true'];
            $userList[$i]['img_5'] = $row['ans_5_img'];
            $userList[$i]['ans_6'] = $row['ans_6_text'];
            $userList[$i]['ans_6_is_true'] = $row['ans_6_is_true'];
            $userList[$i]['img_6'] = $row['ans_6_img'];
            $i++;
        }
        return $userList;
    }
}

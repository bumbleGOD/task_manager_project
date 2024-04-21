<?php

require_once(__DIR__ . "/../../../config/connection/connection.php");

class classes extends connectionDB
{
    public function read_users()
    {
        $connect = parent::getConnection();
        $contador = 0;

        $stmt = $connect->prepare("SELECT * from users");
        $stmt->execute();
        $res = $stmt->get_result();

        while ($row = mysqli_fetch_assoc($res)) {
            $contador++; ?>
            <tr>
                <td scope="row"><?= $contador ?></td>
                <td><?= $row['name_user'] ?></td>
                <td><?= $row['lastName_user'] ?></td>
                <td><?= $row['age_user'] ?></td>
                <td><?= $row['username_user'] ?></td>
                <td><?= $row['email_user'] ?></td>
                <td><?= $row['number_user'] ?></td>
                <td><?= substr($row['password_user'], 0, 10) . "..." ?></td>
            </tr>
    <?php }
    }
}

?>
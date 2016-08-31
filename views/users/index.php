<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28-Aug-16
 * Time: 5:31 PM
 */
?>

<?php $this->title = "Users"; ?>

<h1><?= htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Full name</th>
    </tr>

    <?php foreach ($this->users as $user) : ?>
        <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['username']?></td>
            <td><?=$user['full_name']?></td>
        </tr>
    <?php endforeach; ?>
</table>



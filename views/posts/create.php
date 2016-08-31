<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28-Aug-16
 * Time: 5:31 PM
 */
?>

<?php $this->title = 'Create new post'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title">
    <div>Content:</div>
    <textarea rows="10" name="post_content"></textarea>
    <div><input type="submit" value="Create post">
        <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
</form>


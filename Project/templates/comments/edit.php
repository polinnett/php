<?php include __DIR__ . "/../header.php";
?>
<form action="/phplabs/Project/www/comments/update/<?= $comment->getId(); ?>" method="post">
    <select name="authorId" id="">
        <?php foreach ($users as $user): ?>
            <option value="<?= $user->getId(); ?>" <?php if($user->getId()==$comment->getAuthorId()){ echo 'selected';} ?>><?= $user->getNickname();?></option>
        <?php endforeach; ?>
    </select>
    <input type="text" required name="text" id="" value=<?= $comment->getCommentText(); ?> >
    <button type="submit">Обновить</button>
</form>

<?php include __DIR__ . "/../footer.html"; ?>
<main>
    <h1>Cập nhật thông tin
        <?= $name ?>
    </h1>

    <?php
        if (isset($_SESSION["status"])) {
            echo $_SESSION["status"];
        }
    ?>

    <form action="updateUserProfile_" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div><label for="">Họ và tên</label><input type="text" name="name" value="<?= $name ?>"></div>
        <div><label for="">Email</label><input type="text" name="email" value="<?= $email ?>"></div>
        <div><label for="">Năm sinh</label><input type="date" name="birthday" value="<?= $birthday ?>"></div>
        <div><label for=""></label><input type="submit" value="Cập nhật"></div>
    </form>
</main>
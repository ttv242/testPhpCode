<section>
    <h1>Hồ sơ người dùng</h1>
    <h3>Họ và tên <?= $name ?></h3>
    <h3>Tài khoản <?= $username ?></h3>
    <h3>Email <?= $email ?></h3>
    <h3>Tuổi <?= $age ?></h3>
</section>

<section>
    <h1>Danh sách bạn bè</h1>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Tuổi</th>
                <th>Phân quyền</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($friends as $key => $friend) {
                    ?>
                    <tr>
                        <td>
                            <?= $key+1 ?>
                        </td>
                        <td>
                            <?= $friend['name'] ?>
                        </td>
                        <td>
                            <?= $friend['email'] ?>
                        </td>
                        <td>
                            <?= $friend['age'] ?>
                        </td>
                        <td>
                            <?= $friend['role'] ?>
                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</section>
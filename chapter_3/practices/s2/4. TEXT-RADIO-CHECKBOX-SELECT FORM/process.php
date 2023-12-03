<?php
require_once 'templates/header.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $message = $_POST['message'];
    $province = $_POST['province'];
    $gender = $_POST['gender'];
    $languages = $_POST['languages'];
}
?>

<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <tr>
        <td><?= $name ?></td>
        <td><?= $email ?></td>
        <td><?= $pass ?></td>
        <td><?= $phone ?></td>
        <td><?= $message ?></td>
        <td><?= $province ?></td>
        <td><?= $gender ?></td>
        <td><?= implode('|', $languages) ?></td>
    </tr>
</table>

<?php require_once 'templates/footer.php' ?>

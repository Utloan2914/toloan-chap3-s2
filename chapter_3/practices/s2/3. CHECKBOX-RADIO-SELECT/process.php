<?php
// Include header
require 'templates/header.php';

// Process form data
$province = '';
if (isset($_POST['province'])) {
    $province = $_POST['province'];
}

$gender = '';
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
}

$subjects = [];
if (isset($_POST['subject'])) {
    $subjects = $_POST['subject'];
}
?>

<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo $province; ?></h2>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php if ($gender === 'Male') { ?>
            <img src="images/male.png" alt="Male">
        <?php } else { ?>
            <img src="images/female.png" alt="Female">
        <?php } ?>
    </div>
</div>


<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
        for ($i = 0; $i < count($subjects); $i++) {
            echo $subjects[$i];
            if ($i < count($subjects) - 1) {
                echo ', ';
            }
        }
        ?>
    </div>
</div>

<?php
// Include footer
require 'templates/footer.php';
?>

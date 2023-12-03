<?php require_once 'templates/header.php'; ?>

<?php
$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];

if (isset($_GET['subject']) && is_array($_GET['subject'])) {
    $subjectCount = count($_GET['subject']);
    for ($i = 0; $i < $subjectCount; $i++) {
        $value = $_GET['subject'][$i];
        $randomColor = $colors[array_rand($colors)];
        echo "<button class='btn btn-$randomColor' type='button'>$value</button>";
    }
}
?>

<?php require_once 'templates/footer.php'; ?>

<?php include('variables.php'); ?>

<div class="container">
    <img src="./assets/features.png" alt="features image">
</div>
<div class="container">
    <h2>We provide Many Features You Can Use</h2>
    <p>You can explore the features that we provide with fun and have their own functions each feature.</p>
    <ul>
        <?php for ($i=0; $i < count($list_features); $i++) {
            echo '<li class="section-feature-list-item">' .$list_features[$i]. '</li>';
        };
        ?>
    </ul>
</div>
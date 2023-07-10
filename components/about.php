<?php include 'variables.php'; ?>

<?php foreach ($about_section as $section) { ?>
    <div class="<?php echo $section['name_class']; ?>">
        <div class="icon">
            <img src="./assets/<?php echo $section['image']; ?>" alt="Icon">
        </div>
        <div class="text">
            <p><?php echo $section['number']; ?><br><?php echo $section['name']; ?></p>
        </div>
    </div>
<?php } ?>

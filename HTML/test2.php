<form action="your-php-handler.php" method="POST">
    <div class="image-container">
        <label for="image1" class="image-label">Label for Image 1</label>
        <input type="hidden" name="image_label" value="Label for Image 1" />
        <button type="submit" name="image" value="image1">
            <img id="image1" src="../Media/f2.png" alt="Clickable Image 1" class="clickable-image" />
        </button>
    </div>
</form>

<form action="your-php-handler.php" method="POST">
    <div class="image-container">
        <label for="image2" class="image-label">Label for Image 2</label>
        <input type="hidden" name="image_label" value="Label for Image 2" />
        <button type="submit" name="image" value="image2">
            <img id="image2" src="../Media/f3.png" alt="Clickable Image 2" class="clickable-image" />
        </button>
    </div>
</form>

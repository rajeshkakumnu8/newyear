<?php
include('db.php');

$product_id = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;

if ($product_id > 0) {
    $query = "SELECT colour_name, colorwise_img FROM colours WHERE product_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $colors = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
} else {
    $colors = []; // No product ID provided
}

?>

<div>
    <h4>Available Colors</h4>
    <?php if (empty($colors)): ?>
        <p>No colors available for this product.</p>
    <?php else: ?>
        <div id="color-buttons" class="d-flex flex-wrap gap-2">
            <?php foreach ($colors as $index => $color): ?>
                <button class="btn btn-outline-primary color-button <?php echo $index === 0 ? 'active' : ''; ?>"
                    data-color="<?php echo htmlspecialchars($color['colour_name']); ?>">
                    <?php echo htmlspecialchars($color['colour_name']); ?>
                </button>
            <?php endforeach; ?>
        </div>

        <div id="color-images">
            <?php foreach ($colors as $index => $color): ?>
                <div class="color-images-wrapper"
                    data-color="<?php echo htmlspecialchars($color['colour_name']); ?>"
                    style="display: <?php echo $index === 0 ? 'block' : 'none'; ?>;">
                    <h5>Images for <?php echo htmlspecialchars($color['colour_name']); ?>:</h5>
                    <?php $images = explode(',', $color['colorwise_img']); ?>
                    <?php foreach ($images as $image): ?>
                        <div class="image-container">
                            <img src="../assets/images/products/<?php echo trim($image); ?>"
                                alt="<?php echo htmlspecialchars($color['colour_name']); ?>"
                                class="img-fluid mb-2">
                            <button class="btn btn-danger btn-sm delete-image" 
                                data-image="<?php echo trim($image); ?>" 
                                data-color="<?php echo htmlspecialchars($color['colour_name']); ?>">Delete</button>
                        </div>
                    <?php endforeach; ?>

                    <!-- Upload Form -->
                    <form action="upload_images.php" method="POST" enctype="multipart/form-data" class="mt-3">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                        <input type="hidden" name="color_name" value="<?php echo htmlspecialchars($color['colour_name']); ?>">
                        <label for="new_image">Upload New Images:</label>
                        <input type="file" name="new_images[]" id="new_image" multiple accept="image/*" required>
                        <button type="submit" class="btn btn-success btn-sm mt-2">Upload</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const colorButtons = document.querySelectorAll(".color-button");
    const colorImageWrappers = document.querySelectorAll(".color-images-wrapper");

    // Add click event listener to each color button
    colorButtons.forEach(button => {
        button.addEventListener("click", function() {
            const selectedColor = this.getAttribute("data-color");

            // Remove active class from all buttons and add to the clicked button
            colorButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            // Show the images corresponding to the selected color
            colorImageWrappers.forEach(wrapper => {
                if (wrapper.getAttribute("data-color") === selectedColor) {
                    wrapper.style.display = "block";
                } else {
                    wrapper.style.display = "none";
                }
            });
        });
    });

    // Auto-select the first color on page load
    if (colorButtons.length > 0) {
        colorButtons[0].click();
    }
});
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-image").forEach((button) => {
        button.addEventListener("click", function () {
            const image = this.getAttribute("data-image");
            const colorName = this.getAttribute("data-color");
            const productId = <?php echo $product_id; ?>;

            if (confirm("Are you sure you want to delete this image?")) {
                fetch("delete_image.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: `product_id=${productId}&color_name=${encodeURIComponent(
                        colorName
                    )}&image=${encodeURIComponent(image)}`,
                })
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.status === "success") {
                            alert("Image deleted successfully.");
                            location.reload();
                        } else {
                            alert("Failed to delete image.");
                        }
                    });
            }
        });
    });
});

</script>



delete image 


<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = intval($_POST['product_id']);
    $color_name = $_POST['color_name'];
    $image_to_delete = $_POST['image'];

    // Fetch current images for the color
    $query = "SELECT colorwise_img FROM colours WHERE product_id = ? AND colour_name = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('is', $product_id, $color_name);
    $stmt->execute();
    $stmt->bind_result($colorwise_img);
    $stmt->fetch();
    $stmt->close();

    // Remove the image from the database and folder
    $images = explode(',', $colorwise_img);
    $updated_images = array_filter($images, function ($img) use ($image_to_delete) {
        return trim($img) !== $image_to_delete;
    });

    $new_image_list = implode(',', $updated_images);
    $update_query = "UPDATE colours SET colorwise_img = ? WHERE product_id = ? AND colour_name = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param('sis', $new_image_list, $product_id, $color_name);
    $update_stmt->execute();
    $update_stmt->close();

    // Delete the physical file
    $file_path = "../assets/images/products/" . $image_to_delete;
    if (file_exists($file_path)) {
        unlink($file_path);
    }

    echo json_encode(['status' => 'success']);
    exit;
}
?>

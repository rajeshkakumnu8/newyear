<?php
// Database connection
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'boutique';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : ''; // Get product_id from URL or default to empty
$product_details = [];
$categories = [];
$subcategories = [];
$product_images = [];

// Handle POST request to update product details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $subcategory_id = $_POST['subcategory_id'];
    $discount = $_POST['discount'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $stmt_update = $conn->prepare("UPDATE products SET product_name = ?, category_id = ?, subcategory_id = ?, discount = ?, price = ?, description = ? WHERE product_id = ?");
    $stmt_update->bind_param("siiddsi", $product_name, $category_id, $subcategory_id, $discount, $price, $description, $product_id);
    if ($stmt_update->execute()) {
        echo "<script>alert('Product details updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating product details: " . $stmt_update->error . "');</script>";
    }
    $stmt_update->close();
}

// Fetch product details for display
if ($product_id) {
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product_details = $result->fetch_assoc();
    $stmt->close();

    // Query to get categories
    $categories_query = "SELECT * FROM categorie";
    $categories_result = $conn->query($categories_query);
    while ($row = $categories_result->fetch_assoc()) {
        $categories[] = $row;
    }

    // Query to get subcategories based on category_id
    if (!empty($product_details['category_id'])) {
        $subcategories_query = "SELECT * FROM sub_category WHERE category_id = ?";
        $stmt_subcategory = $conn->prepare($subcategories_query);
        $stmt_subcategory->bind_param("i", $product_details['category_id']);
        $stmt_subcategory->execute();
        $subcategories_result = $stmt_subcategory->get_result();
        while ($row = $subcategories_result->fetch_assoc()) {
            $subcategories[] = $row;
        }
        $stmt_subcategory->close();
    }

    // Fetch product images
    if (!empty($product_details['product_images'])) {
        $image_files = explode(',', $product_details['product_images']);
        foreach ($image_files as $image) {
            $product_images[] = "../assets/images/products/" . trim($image);
        }
    }
}
?>
<!-- HTML form -->
<div class="page-content">
    <div class="container-xxl">
        <form method="POST">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Product Details</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Product Name -->
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Product Name</label>
                                <input type="text" id="product-name" name="product_name" class="form-control"
                                    value="<?php echo isset($product_details['product_name']) ? htmlspecialchars($product_details['product_name']) : ''; ?>" required>
                            </div>
                        </div>

                        <!-- Category -->
                        <div class="col-lg-4">
                            <label for="product-category" class="form-label">Product Category</label>
                            <select id="product-category" name="category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?php echo $category['category_id']; ?>"
                                        <?php echo ($category['category_id'] == $product_details['category_id']) ? 'selected' : ''; ?>>
                                        <?php echo $category['category_name']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <!-- Subcategory -->
                        <div class="col-lg-4">
                            <label for="product-subcategory" class="form-label">Product Subcategory</label>
                            <select id="product-subcategory" name="subcategory_id" class="form-control" required>
                                <option value="">Select Subcategory</option>
                                <?php foreach ($subcategories as $subcategory) { ?>
                                    <option value="<?php echo $subcategory['subcategory_id']; ?>"
                                        <?php echo ($subcategory['subcategory_id'] == $product_details['subcategory_id']) ? 'selected' : ''; ?>>
                                        <?php echo $subcategory['sub_name']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <!-- Discount and Price -->
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="product-discount" class="form-label">Discount</label>
                            <input type="number" id="product-discount" name="discount" class="form-control"
                                value="<?php echo isset($product_details['discount']) ? $product_details['discount'] : ''; ?>" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="product-price" class="form-label">Price</label>
                            <input type="number" id="product-price" name="price" class="form-control"
                                value="<?php echo isset($product_details['price']) ? $product_details['price'] : ''; ?>" required>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="4" required><?php echo isset($product_details['description']) ? htmlspecialchars($product_details['description']) : ''; ?></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

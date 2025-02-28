<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Colors and Stock</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Manage Colors and Stock</h3>

        <!-- Add New Color -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Add New Color</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="new_color_name">Color Name:</label>
                        <input type="text" name="new_color_name" id="new_color_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="new_stock_available">Stock Available:</label>
                        <input type="number" name="new_stock_available" id="new_stock_available" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="new_color_images">Upload Images:</label>
                        <input type="file" name="new_color_images[]" id="new_color_images" class="form-control" multiple accept="image/*" required>
                    </div>
                    <button type="submit" name="add_color" class="btn btn-success">Add Color</button>
                </form>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

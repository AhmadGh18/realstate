<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Property Information Form</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Rubik", sans-serif;
        }

        body {
            background-color: #f5f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background-color: #ffffff;
            width: 60%;
            min-width: 450px;
            position: relative;
            margin: 50px auto;
            padding: 50px 20px;
            border-radius: 7px;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.05);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        textarea,
        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 16px;
        }

        .checkbox-group div {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        input[type="checkbox"] {
            padding: 10px;
            height: 15px;
            width: 15px;
        }

        #imagePreview img {
            width: 100%;
            height: auto;
            margin-top: 8px;
        }

        #images {
            width: 90%;
            margin: auto;
            display: flex;
            justify-content: space-evenly;
            gap: 20px;
            flex-wrap: wrap;
        }

        figure {
            width: 45%;
        }

        img {
            width: 100%;
            border-radius: 5px;
        }

        figcaption {
            text-align: center;
            font-size: 14px;
            margin-top: 8px;
        }
    </style>
</head>

<body>
    <form method="post" action="handleupload.php" enctype="multipart/form-data">
        <h2>Property Information</h2>

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required>

        <label for="kitchen">Number of Kitchens:</label>
        <input type="number" id="kitchen" name="kitchens" required min="1">

        <label for="bedroom">Number of Bedrooms:</label>
        <input type="number" id="bedroom" name="bedrooms" required min="1">

        <label for="bathroom">Number of Bathrooms:</label>
        <input type="number" id="bathroom" name="bathrooms" required min="1">

        <label for="area">Area:</label>
        <input type="text" id="area" name="area" required>
        <label for="rent">For </label>
        <select id="rent" name="forwhat" required>
            <option value="rent">rent</option>
            <option value="sale">sale</option>
        </select>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="available">Available</option>
            <option value="sold">Sold</option>
        </select>

        <label for="propertyType">Property Type:</label>
        <select id="propertyType" name="PropertyType" required>
            <option value="apartment">Apartment</option>
            <option value="house">House</option>
            <option value="school">school</option>

            <!-- Add more options as needed -->
        </select>

        <label>Options:</label>
        <div class="checkbox-group">
            <div>
                <input type="checkbox" id="garage" name="options[]" value="garage">
                <label for="garage">Garage</label>
            </div>
            <div>
                <input type="checkbox" id="seaview" name="options[]" value="seaview">
                <label for="seaview">Sea View</label>
            </div>
            <div>
                <input type="checkbox" id="mountainview" name="options[]" value="mountainview">
                <label for="mountainview">Mountain View</label>
            </div>
            <div>
                <input type="checkbox" id="cinema" name="options[]" value="cinema">
                <label for="cinema">Cinema</label>
            </div>
            <div>
                <input type="checkbox" id="cinema" name="options[]" value="indoor gym">
                <label for="gym">Indoor gym</label>
            </div>
            <div>
                <input type="checkbox" id="duplex" name="options[]" value="Duplex">

                <label for="duplex">Duplex</label>
            </div>

            <div>
                <input type="checkbox" id="triplex" name="options[]" value="Triplex">

                <label for="triplex">Triplex</label>
            </div>


            <div>
                <input type="checkbox" id="shopping_center" name="options[]" value="Shopping Center">

                <label for="shopping_center">Shopping Center</label>

            </div>
            <div>
                <input type="checkbox" id="theater" name="options[]" value="Theater">

                <label for="theater">Theater</label>
            </div>




        </div>

        <label for="image">Thumbnail Image:</label>
        <input type="file" id="thumbnail" name="thumbnail" accept="image/*" onchange="previewImage(event)">
        <div id="imagePreview"></div>

        <p>Upload more images:</p>
        <input type="file" id="file-input" name="file-input[]" accept="image/png, image/jpeg" onchange="preview()" multiple>
        <div id="images"></div>

        <p id="num-of-files"></p>

        <button type="submit">Submit</button>

        <!-- JavaScript functions for image preview -->

        <script>
            function previewImage(event) {
                const input = event.target;
                const preview = document.getElementById('imagePreview');
                const file = input.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.width = '100%';
                        img.style.height = 'auto';
                        preview.innerHTML = '';
                        preview.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                } else {
                    preview.innerHTML = ''; // Clear preview if no file selected
                }
            }
        </script>

        <script>
            let fileInput = document.getElementById("file-input");
            let imageContainer = document.getElementById("images");
            let numOfFiles = document.getElementById("num-of-files");

            function preview() {
                imageContainer.innerHTML = "";
                numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

                for (i of fileInput.files) {
                    let reader = new FileReader();
                    let figure = document.createElement("figure");
                    let figCap = document.createElement("figcaption");
                    figCap.innerText = i.name;
                    figure.appendChild(figCap);
                    reader.onload = () => {
                        let img = document.createElement("img");
                        img.setAttribute("src", reader.result);
                        figure.insertBefore(img, figCap);
                    }
                    imageContainer.appendChild(figure);
                    reader.readAsDataURL(i);
                }
            }
        </script>
    </form>
</body>

</html>
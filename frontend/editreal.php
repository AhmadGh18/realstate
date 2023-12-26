<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts.css">
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
    <?php
    include("connection.php");

    // Check if the 'id' parameter is set and is a valid integer
    if (isset($_GET['id'])) {
        // Sanitize the input to prevent SQL injection
        $realstateId = $_GET['id'];

        $sql = "SELECT * FROM realstate WHERE id = $realstateId";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            // Check if any rows were returned
            if (mysqli_num_rows($res) > 0) {
                $data = mysqli_fetch_assoc($res);
                $optionsString = $data['options'];
                $optionsArray = explode(',', $optionsString);
            } else {
                echo "No record found for the specified ID.";
            }
        } else {
            echo "Error executing the query: " . mysqli_error($con);
        }
    } else {
        echo "Invalid or missing 'id' parameter.";
    }

    // Close the database connection
    ?>

    <form method="post" action="handleupdate.php?id=<?php echo $_GET["id"] ?>" enctype="multipart/form-data">
        <h2>Property Information</h2>

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required value="<?php echo $data["title"] ?>">

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required> <?php echo $data["description"] ?></textarea>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required value=" <?php echo $data["location"] ?>">

        <label for=" price">Price:</label>
        <input type="text" id="price" name="price" required value=" <?php echo $data["price"] ?>">

        <label for="kitchen">Number of Kitchens:</label>
        <input type="number" id="kitchen" name="kitchens" required min="1" value="<?php echo $data["kitchens"] ?>">

        <label for="bedroom">Number of Bedrooms:</label>
        <input type="number" id="bedroom" name="bedrooms" required min="1" value="<?php echo $data["bedrooms"] ?>">

        <label for="bathroom">Number of Bathrooms:</label>
        <input type="number" id="bathroom" name="bathrooms" required min="1" value="<?php echo $data["bathrooms"] ?>">

        <label for="area">Area:</label>
        <input type="text" id="area" name="area" required value="<?php echo $data["area"] ?>">
        <label for="rent">For </label>
        <select id="rent" name="forwhat" required value="<?php $data['forwhat'] ?>">
            <option value="rent">rent</option>
            <option value="sale">sale</option>
        </select>


        <label for="status">Status:</label>
        <select id="status" name="status" required value="<?php echo $data["status"]  ?>">
            <option value="available">Available</option>
            <option value="sold">Sold</option>
            <option value="under_contract">Under contract</option>

        </select>

        <label for="propertyType">Property Type:</label>
        <select id="propertyType" name="PropertyType" required value="<?php echo $data["PropertyType"]  ?>">
            <option value="apartment">Apartment</option>
            <option value="house">House</option>
            <!-- Add more options as needed -->
        </select>

        <label>Options:</label>
        <div class="checkbox-group">
            <div>
                <input type="checkbox" id="garage" name="options[]" value="garage" <?php echo (in_array('garage', $optionsArray) ? 'checked' : ''); ?>>
                <label for="garage">Garage</label>
            </div>
            <div>
                <input type="checkbox" id="seaview" name="options[]" value="seaview" <?php echo (in_array('seaview', $optionsArray) ? 'checked' : ''); ?>>
                <label for="seaview">Sea View</label>
            </div>
            <div>
                <input type="checkbox" id="mountainview" name="options[]" value="mountainview" <?php echo (in_array('mountainview', $optionsArray) ? 'checked' : ''); ?>>
                <label for="mountainview">Mountain View</label>
            </div>
            <div>
                <input type="checkbox" id="cinema" name="options[]" value="cinema" <?php echo (in_array('cinema', $optionsArray) ? 'checked' : ''); ?>>
                <label for="cinema">Cinema</label>
            </div>
            <div>
                <input type="checkbox" id="duplex" name="options[]" value="Duplex" <?php echo (in_array('Duplex', $optionsArray) ? 'checked' : ''); ?>>

                <label for="duplex">Duplex</label>
            </div>

            <div>
                <input type="checkbox" id="triplex" name="options[]" value="Triplex" <?php echo (in_array('Triplex', $optionsArray) ? 'checked' : ''); ?>>

                <label for="triplex">Triplex</label>
            </div>

            <div>
                <input type="checkbox" id="shopping_center" name="options[]" value="Shopping Center" <?php echo (in_array('Shopping Center', $optionsArray) ? 'checked' : ''); ?>>


                <label for="shopping_center">Shopping Center</label>

            </div>
            <div>
                <input type="checkbox" id="theater" name="options[]" value="Theater" <?php echo (in_array('Theater', $optionsArray) ? 'checked' : ''); ?>>


                <label for="theater">Theater</label>
            </div>
        </div>



        <label for="image">Thumbnail Image:</label>
        <input type="file" id="thumbnail" name="thumbnail" accept="image/*" onchange="previewImage(event)">
        <div id="imagePreview">
            <img src="<?php echo $data['thumbnail'] ?>" alt="dd">
        </div>

        <p>Upload more images:</p>
        <input type="file" id="file-input" name="file-input[]" accept="image/png, image/jpeg" onchange="preview()" multiple>
        <div id="images">



        </div>
        <div>
            <?php
            $sql = "SELECT * FROM images WHERE realstate_id = $realstateId";
            $res = mysqli_query($conn, $sql);

            while ($data = mysqli_fetch_assoc($res)) {
                echo "<img src='{$data["imgurl"]}' alt=''>";
                echo "<a href='deleimg.php?id={$data["id"]}&realid={$_GET["id"]}'>Delete</a>";
            }
            ?>
        </div>

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
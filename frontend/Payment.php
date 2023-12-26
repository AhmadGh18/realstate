<?php
session_start();

if (!isset($_SESSION['role'])) {
    header("location:login.php");
}
?>



<head>
    <link rel="stylesheet" href="font.css">

</head>
<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
        <form action="handleupdatepayment.php" method="POST" enctype="multipart/form-data">
            <?php if (isset($_GET['error']) && $_GET['error'] == true) {

                // Add your error message or content here
                echo $_GET['error'];
            }
            ?>

            <div class="formbold-input-flex">

                <div>
                    <input type="password" name="creditcard" required id="phone" placeholder="11-555-0115" class="formbold-form-input" />
                    <label for="phone" class="formbold-form-label"> Credit card </label>
                </div>
            </div>
            <div class="formbold-textarea">
                <input type="password" rows="6" name="password" required id="password" placeholder="password" class="formbold-form-input" />
                <label for="message" class="formbold-form-label"> Current password </label>
            </div>





            <button class="formbold-btn">
                Send Message
            </button>
        </form>
    </div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Inter", sans-serif;
    }

    .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
    }

    .formbold-form-wrapper {
        margin: 0 auto;
        max-width: 550px;
        width: 100%;
        background: white;
    }

    .formbold-input-flex {
        display: flex;
        gap: 20px;
        margin-bottom: 22px;
    }

    .formbold-input-flex>div {
        width: 50%;
        display: flex;
        flex-direction: column-reverse;
    }

    .formbold-textarea {
        display: flex;
        flex-direction: column-reverse;
    }

    .formbold-form-input {
        width: 100%;
        padding-bottom: 10px;
        border: none;
        border-bottom: 1px solid #DDE3EC;
        background: #FFFFFF;
        font-weight: 500;
        font-size: 16px;
        color: #07074D;
        outline: none;
        resize: none;
    }

    .formbold-form-input::placeholder {
        color: #536387;
    }

    .formbold-form-input:focus {
        border-color: #6A64F1;
    }

    .formbold-form-label {
        color: #07074D;
        font-weight: 500;
        font-size: 14px;
        line-height: 24px;
        display: block;
        margin-bottom: 18px;
    }

    .formbold-form-input:focus+.formbold-form-label {
        color: #6A64F1;
    }

    .formbold-input-file {
        margin-top: 30px;
    }

    .formbold-input-file input[type="file"] {
        position: absolute;
        top: 6px;
        left: 0;
        z-index: -1;
    }

    .formbold-input-file .formbold-input-label {
        display: flex;
        align-items: center;
        gap: 10px;
        position: relative;
    }

    .formbold-filename-wrapper {
        display: flex;
        flex-direction: column;
        gap: 6px;
        margin-bottom: 22px;
    }

    .formbold-filename {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 14px;
        line-height: 24px;
        color: #536387;
    }

    .formbold-filename svg {
        cursor: pointer;
    }

    .formbold-btn {
        font-size: 16px;
        border-radius: 5px;
        padding: 12px 25px;
        border: none;
        font-weight: 500;
        background-color: #6A64F1;
        color: white;
        cursor: pointer;
        margin-top: 25px;
    }

    .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
</style>
<?php include './require.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Report a Problem</title>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php include './sidebar.php' ?>

    <section class="home-section">

        <?php include './navbar.php';

       
        ?>
        <h3 class="i-name">
            Change Password
        </h3>
        <div class="board1" style="width: 900px; margin:0 200px;padding:5%">
            <div class="profile_div">

                <div class="profile_input">
                    <form action="" method="post">

                        <div class="input-group">
                            <label>Current Password<span class="required" style="color: red;">*</span></label>
                            <input type="password" name="old_password" id="current_password">
                            <br><span id="police_officer_id_error" style="color:red;"></span>
                        </div>
                        <div class="input-group">
                            <label>New Password<span class="required" style="color: red;">*</span></label>
                            <input type="password" name="new_password" id="new_password">
                            <br><span id="name_error" style="color:red;"></span>
                        </div>
                        <div class="input-group">
                            <label>Confirm_password<span class="required" style="color: red;">*</span></label>
                            <input type="password" name="confirm_password" id="confirm_password">
                            <br><span id="name_error" style="color:red;"></span>
                        </div>
                        <input type="submit" value="Change Password" name="submit" class="court_update" id="submit">
                    </form>
                </div>

            </div>

        </div>
    </section>
    <script src="../js/script.js"></script>

</body>

</html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Ensure session is started
}
?>
<header class="navbar navbar-expand-lg transparent-navbar" style="background-color: rgba(0, 0, 0, 0.7); font-family:'Josefin Sans';">
    <div class="container" style="margin-left: 20px; padding-top: 1%">
        <a class="navbar-brand" href="#" style="margin-right: 20%;">
            <img class="img-fluid" src="barangay_stacruz_logo.png" width="50" height="50" alt="Logo">
            <span style="font-weight: bold; font-size: 17px; color: white; margin-left: 0px;">BARANGAY STA. CRUZ</span>
            
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_mainmenu">
            <span class="navbar-toggler-icon" ></span>
        </button>

        <div class="collapse navbar-collapse" id="nav_mainmenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="../../hpuser.php" class="nav-link" style="font-style: normal;font-weight:500; color: white; font-size: 16px; padding: 8px 12px; border-radius: 5px; margin-right: 5px; text-decoration: none;">Home</a>
                </li>
                <li class="nav-item">
                    <a href="../announce/announcements.php" class="nav-link" style="font-style: normal;font-weight:500; color: white; font-size: 16px; padding: 8px 12px; border-radius: 5px; margin-right: 5px; text-decoration: none;">Announcement</a>
                </li>
                <li class="nav-item">
                    <a href="../program/program1.php" class="nav-link" style="font-style: normal;font-weight:500; color: white; font-size: 16px; padding: 8px 12px; border-radius: 5px; margin-right: 5px; text-decoration: none;">Programs</a>
                </li>
                <li class="nav-item">
                    <a href="../event/events.php" class="nav-link" style="font-style: normal;font-weight:500; color: white; font-size: 16px; padding: 8px 12px; border-radius: 5px; margin-right: 5px; text-decoration: none;">Event</a>
                </li>
                <li class="nav-item">
                    <a href="../feedback/feedbacks.php" class="nav-link" style="font-style: normal;font-weight:500; color: white; font-size: 16px; padding: 8px 12px; border-radius: 5px; margin-right: 5px; text-decoration: none;">Feedback</a>
                </li>
                <li class="nav-item">
                    <a href="../official/officials.php" class="nav-link" style="font-style: normal;font-weight:500; color: white; font-size: 16px; padding: 8px 12px; border-radius: 5px; margin-right: 5px; text-decoration: none;">Officials</a>
                </li>
                <li class="nav-item">
                    <a href="../about/abouts.php" class="nav-link" style="font-style: normal;font-weight:500; color: white; font-size: 16px; padding: 8px 12px; border-radius: 5px; margin-right: 5px; text-decoration: none;">About</a>
                </li>
                <li class="nav-item">
                    <a href="../services/services.php" class="nav-link" style="font-style: normal;font-weight:500; color: white; font-size: 16px; padding: 8px 12px; border-radius: 5px; margin-right: 5px; text-decoration: none;">Services</a>
                </li>
                <?php
                if (isset($_SESSION['user_id'])) {
                    // Retrieve the user's name from the database based on their user_id
                    $user_id = $_SESSION['user_id'];
                    $query = "SELECT `full_name` FROM `users` WHERE `id` = $user_id";
                    $result = mysqli_query($con, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $user_name = $row['full_name'];
                        echo '<li class="nav-item" style = "padding-top: 1px"><span class="nav-link" style="color: white; font-weight: 500;font-style: italic; font-size: 16px;">Welcome, ' . htmlspecialchars($user_name) . '</span></li>'; //Use htmlspecialchars to prevent XSS
                        echo '<li class="nav-item" style = "padding-top: 1px"><a href="../../Logout.php" class="nav-link" style="font-style: normal; color: black; font-size: 16px; background-color: white; border: 1px solid #ccc; border-radius: 25px; padding: 5px 10px; margin-left: 5px; text-decoration: none; ">Logout</a></li>';
                    } else {
                        // Handle error if user's name cannot be retrieved
                        echo '<li class="nav-item" style = "padding-top: 1px><a href="../../Login Page.php" class="nav-link" style="font-style: normal; color: font-weight: 500;black; font-size: 16px; background-color: white; border: 1px solid #ccc; border-radius: 25px; padding: 5px 10px; margin-left: 5px; text-decoration: none; ">Login</a></li>';
                        echo '<li class="nav-item" style = "padding-top: 1px"><a href="../../Register Form.php" class="nav-link"  style="font-style: normal; font-weight: 500;color: black; font-size: 16px; background-color: white; border: 1px solid #ccc; border-radius: 25px; padding: 5px 10px; margin-left: 5px; text-decoration: none; ">Register</a></li>';
                    }
                } else {
                    // User is not logged in, show login/register option
                    echo '<li class="nav-item" style = "padding-top: 1px"><a href="../../Login Page.php" class="nav-link"  style="font-style: normal; font-weight: 500;color: black; font-size: 16px; background-color: white; border: 1px solid #ccc; border-radius: 25px; padding: 5px 10px; margin-left: 5px; text-decoration: none;">Login</a></li>';
                    echo '<li class="nav-item" style = "padding-top: 1px"><a href="../../Register Form.php" class="nav-link"  style="font-style: normal; font-weight: 500;color: black; font-size: 16px; background-color: white; border: 1px solid #ccc; border-radius: 25px; padding: 5px 10px; margin-left: 5px; text-decoration: none; ">Register</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</header>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Ensure session is started
}
?>
<footer class="footer-area" style="background-color: rgba(0, 0, 0, 0.7); color: white; padding: 20px 0; text-align: center; font-family:'Josefin Sans';"">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul style="list-style: none; padding: 0; margin: 0; display: inline-block;">
                    <li style="display: inline-block; margin: 0 10px;">
                        <a href="../../hpadmin.php" style="color: white; text-decoration: none; font-size: 16px; font-style: italic;">Home</a>
                    </li>
                    <li style="display: inline-block; margin: 0 10px;">
                        <a href="../announce/announcements.php" style="color: white; text-decoration: none; font-size: 16px; font-style: italic;">Announcement</a>
                    </li>
                    <li style="display: inline-block; margin: 0 10px;">
                        <a href="../program/program1.php" style="color: white; text-decoration: none; font-size: 16px; font-style: italic;">Programs</a>
                    </li>
                    <li style="display: inline-block; margin: 0 10px;">
                        <a href="../event/events.php" style="color: white; text-decoration: none; font-size: 16px; font-style: italic;">Events</a>
                    </li>
                    <li style="display: inline-block; margin: 0 10px;">
                        <a href="../feedback/feedbacks.php" style="color: white; text-decoration: none; font-size: 16px; font-style: italic;">Feedback</a>
                    </li>
                    <li style="display: inline-block; margin: 0 10px;">
                        <a href="../official/officials.php" style="color: white; text-decoration: none; font-size: 16px; font-style: italic;">Officials</a>
                    </li>
                    <li style="display: inline-block; margin: 0 10px;">
                        <a href="../about/abouts.php" style="color: white; text-decoration: none; font-size: 16px; font-style: italic;">About</a>
                    </li>
                    <li style="display: inline-block; margin: 0 10px;">
                        <a href="../services/service_requests.php" style="color: white; text-decoration: none; font-size: 16px; font-style: italic;">Services</a>
                    </li>
                </ul>
                <div class="logo-area" style="margin-top: 10px;">
                    <a class="footer-logo" href="#" >
                        <img class="img-fluid" src="barangay_stacruz_logo.png" alt="Footer Logo" style="max-width: 100px;">
                    </a>
                </div>
                <p class="smaller-font" style="font-size: 14px;">The Barangay Information System is designed and developed to effectively assist the Barangay Government officials in Barangay Data Management.
                </p>
            </div>
        </div>
    </div>
    <div class="footer__copyright" style="background-color: rgba(0, 0, 0, 0.2); padding: 15px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center" style="margin: 0;">© 2025 BARANGAY STA. CRUZ</p>
                </div>
            </div>
        </div>
    </div>
</footer>
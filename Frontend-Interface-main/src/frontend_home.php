<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laces - Home</title>
    <link rel="stylesheet" href="/frontend_style.css">
    <script src="/frontend_script.js"></script>
</head>

<body>

    <!-- Background Image -->
    <div id="BackgroundImageSection">
        <img src="/Images/background img1.png" alt="Background Image">
    </div>

    <!-- Sidebar -->
    <div id="Sidebar">
        <button id="CloseButton" onclick="sideBarClose()">Close Sidebar</button>
        <a href="/login.php" class="sidebar-link">Account</a>
    </div>

    <!-- Main Content -->
    <div id="Content">
        <div id="OpenSidebar">
            <button id="OpenButton" onclick="sideBarOpen()">Open Sidebar</button>
        </div>
        <div id="Title">
            <img src="/Images/Logo.png" alt="Logo" id="Logo">
        </div>
    </div>

    <!-- Latest Stock Section -->
    <div id="LatestStockSection">
        <h2>Latest Stock</h2>
        <div id="ScrollBarContainer">
            <div id="HorizontalScrollBar">
                <div id="ScrollBarHandle"></div>
            </div>
        </div>
        <div id="ImageGalleryContainer">
            <div id="ImageGallery">
                <img src="/Images/Gallery/Shoe.png" alt="Image 1">
                <img src="/Images/Gallery/Shoe.png" alt="Image 2">
                <img src="/Images/Gallery/Shoe.png" alt="Image 3">
                <img src="/Images/Gallery/Shoe.png" alt="Image 4">
                <img src="/Images/Gallery/Shoe.png" alt="Image 5">
                <img src="/Images/Gallery/Shoe.png" alt="Image 6">
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div id="Content">
        <div id="AboutUsSection">
            <div class="about-us-content">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Turpis cursus in hac habitasse platea dictumst quisque sagittis. Rhoncus
                    aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque.</p>
                <button id="AboutUsButton">Click here to learn more</button>
            </div>
            <div class="about-us-image">
                <img src="/Images/About us/aboutus1.png" alt="About Us Image">
            </div>
        </div>
    </div>

    <!-- Cookies Notification -->
    <div id="Cookies" class="transitionFade active">
        <p>In order to comply with GDPR Guidelines, we ask that you allow cookies to be stored on your system. You may
            accept or decline.</p>
        <p>We only store functional cookies that our website requires to use.</p>
        <button id="AcceptCookie" onclick="allowCookies()">Accept</button>
        <button id="DeclineCookie" onclick="declineCookies()">Decline</button>
    </div>

    <!-- Delete Cookies Box -->
    <div id="DeleteCookies" class="transitionFade">
        <button id="DelCookie" onclick="deleteCookies()">Delete Existing Cookies</button>
        <p>Want to delete existing cookies? Use the above button, and it'll remove them!</p>
        <button id="HideDel" onclick="hideDelBox()">Hide</button>
    </div>

    <!-- Show Delete Cookies Box Button -->
    <button id="ShowDel" onclick="showDelBox()">Show</button>

</body>

</html>
// Check if stored cookie is already there
if (document.cookie === "yes; path=/") {
    document.getElementById("Cookies").style.display = "none";
}

// Sidebar functions
function sideBarOpen() {
    var sidebar = document.getElementById("Sidebar");
    sidebar.style.display = "block";
    sidebar.style.borderRadius = "25px";
    sidebar.style.width = "15%";
    sidebar.style.right = "0"; 
    document.getElementById("Content").style.marginRight = "15%";
    document.getElementById("OpenSidebar").style.display = "none";
}

function sideBarClose() {
    var sidebar = document.getElementById("Sidebar");
    sidebar.style.display = "none";
    sidebar.style.width = "0";
    sidebar.style.right = "-15%";
    document.getElementById("Content").style.marginRight = "0"; 
    document.getElementById("OpenSidebar").style.display = "block";
}

// Cookies functions
function allowCookies() {
    document.getElementById("Cookies").classList.remove("active");
    document.cookie = "accepted=yes; path=/";
}

function declineCookies() {
    document.getElementById("Cookies").classList.remove("active");
}

function deleteCookies() {
    document.getElementById("DeleteCookies").style.display = "none";
    document.cookie = "accepted=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;"; // Corrected line
}

function hideDelBox() {
    document.getElementById("DeleteCookies").classList.remove("active");
    document.getElementById("showDel").style.display = "block";
}

function showDelBox() {
    document.getElementById("DeleteCookies").classList.add("active");
    document.getElementById("showDel").style.display = "none";
}

// Scrollbar code
document.addEventListener("DOMContentLoaded", function () {
    var isDragging = false;

    document.getElementById("ScrollBarHandle").addEventListener("mousedown", function (e) {
        isDragging = true;
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", function () {
            isDragging = false;
            document.removeEventListener("mousemove", handleMouseMove);
        });
    });

    function handleMouseMove(e) {
        if (!isDragging) return;

        var container = document.getElementById("ScrollBarContainer");
        var scrollBar = document.getElementById("HorizontalScrollBar");
        var handle = document.getElementById("ScrollBarHandle");
        var imageGalleryContainer = document.getElementById("ImageGalleryContainer");

        var containerRect = container.getBoundingClientRect();
        var mouseX = e.clientX - containerRect.left;

        var maxHandleX = container.clientWidth - handle.clientWidth;

        var handleX = Math.min(Math.max(0, mouseX - handle.clientWidth / 2), maxHandleX);

        handle.style.left = handleX + "px";

        var scrollPercent = handleX / maxHandleX;

        var maxScroll = scrollBar.clientWidth - container.clientWidth;
        var scrollAmount = scrollPercent * maxScroll;

        container.scrollLeft = scrollAmount;

        var maxImageScroll = imageGalleryContainer.scrollWidth - imageGalleryContainer.clientWidth;
        imageGalleryContainer.scrollLeft = scrollPercent * maxImageScroll;
    }
});

// Title disappear on scroll
var lastScrollTop = 0;
var scrollThreshold = 300;

window.addEventListener("scroll", function () {
    var st = window.scrollY;

    if (Math.abs(st - lastScrollTop) > scrollThreshold) {
        // Check if the user has scrolled more than the threshold
        if (st > lastScrollTop) {
            // Scroll down
            document.getElementById("Title").classList.add("hidden");
        } else {
            // Scroll up
            document.getElementById("Title").classList.remove("hidden");
        }

        lastScrollTop = st;
    }
});

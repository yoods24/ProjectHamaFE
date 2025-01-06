<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sales.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <div class="wrapper">
        @include('partials.sidebar')
    <!-- Navbar -->
        <div class="main">
            @include('partials.navbar')

    <!-- Main Content -->
    <div id="main-content">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <script>
        console.log(window.innerWidth)
        document.addEventListener("DOMContentLoaded", function () {
            flatpickr("#datePicker", {
                dateFormat: "d-m-Y",
            });
        });

        const hamBurger = document.querySelector(".toggle-btn");
        hamBurger.addEventListener("click", function () {
        if (window.innerWidth <= 768) {
        hamBurger.style.display = "none";
        document.getElementById("sidebar").style.display = "block";
        sidebar.classList.toggle('mobile-expand');
        sidebar.classList.toggle('expand');
        } else {
            sidebar.classList.toggle('expand');
        }
        });
        // Function to check the window width 
function checkWindowWidth() { 
    const width = window.innerWidth; // Get the current window width 
    const threshold = 768; // Set your threshold for comparison 
 
    if (width > threshold) { 
        
    } else { 

    } 
} 
 
// Add an event listener for the resize event 
window.addEventListener('resize', checkWindowWidth); 
 
// Initial check when the script runs 
checkWindowWidth(); 

function togglePasswordVisibility(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling.querySelector("i");
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }


    function changeInformation() {

    const informationAreas = document.querySelectorAll("[id='informationChange']");
    

    informationAreas.forEach((informationArea) => {
        if (informationArea.disabled) {
            informationArea.disabled = false; 
        } else {
            informationArea.disabled = true; 
            informationArea.value = ""; 
        }
    });
}

const toggleTags = document.getElementById("toggle-tags");
const tagsContainer = document.getElementById("tags-container");
const tagsInput = document.getElementById("tags-input");
const placeholderText = document.getElementById("placeholder-text");

// Toggle visibility of the tags container
toggleTags.addEventListener("change", () => {
    if (toggleTags.checked) {
        tagsContainer.classList.remove("d-none");
        tagsInput.focus();
    } else {
        tagsContainer.classList.add("d-none");
    }
});

tagsInput.addEventListener("keydown", (e) => {
    if (e.key === "Enter" && tagsInput.value.trim() !== "") {
        e.preventDefault();

        const tagText = tagsInput.value.trim();

        const tag = document.createElement("span");
        tag.className = "tag";
        tag.innerHTML = `${tagText} <span class="remove-tag">✕</span>`;

        tagsContainer.insertBefore(tag, tagsInput);
        tagsInput.value = "";

        tag.querySelector(".remove-tag").addEventListener("click", () => {
            tagsContainer.removeChild(tag);
        });

        placeholderText?.remove();
    }
});
    </script>
</body>
</html>

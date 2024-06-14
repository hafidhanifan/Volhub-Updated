document.addEventListener("DOMContentLoaded", (event) => {
    const drawerButton = document.querySelector("#drawerButton");
    const navigation = document.querySelector(".mobile-nav");
    const sidebar = document.querySelector(".sidebar");
    const showUserToggle = document.querySelector("#showUser");
    const overlay = document.querySelector("#overlay");

    function drawer(event) {
        if (navigation) {
            navigation.classList.toggle("open");
            event.stopPropagation();
        }
    }

    function toggleSidebar(event) {
        if (sidebar && overlay) {
            sidebar.classList.toggle("open");
            overlay.classList.toggle("visible");
            event.stopPropagation();
        }
    }

    function hideSidebar() {
        if (sidebar && overlay) {
            sidebar.classList.remove("open");
            overlay.classList.remove("visible");
        }
    }

    if (drawerButton) {
        drawerButton.addEventListener("click", drawer);
    }

    if (showUserToggle) {
        showUserToggle.addEventListener("click", toggleSidebar);
    }

    if (overlay) {
        overlay.addEventListener("click", hideSidebar);
    }

    // Modal
    const openModalBtn = document.getElementById("openModalBtn");
    const modal = document.getElementById("modal");
    const closeModalBtn = document.getElementById("closeModalBtn");

    if (openModalBtn) {
        openModalBtn.addEventListener("click", () => {
            modal.style.display = "block";
        });
    }

    if (closeModalBtn) {
        closeModalBtn.addEventListener("click", () => {
            modal.style.display = "none";
        });
    }

    window.addEventListener("click", (event) => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });

    const dropdownMenu = document.querySelector(".dropdown");
    const dropdown = document.querySelector(".app-bar__user-icon");

    if (dropdown) {
        dropdown.addEventListener("click", () => {
            if (dropdownMenu.style.visibility === "visible") {
                dropdownMenu.style.visibility = "hidden";
            } else {
                dropdownMenu.style.visibility = "visible";
            }
        });
    }
});

// JS untuk upload file
document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("uploadInput");
    const form = document.getElementById("editFotoProfileForm");
    const img = document.querySelector(".edit-profile__picture img");

    input.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                img.src = e.target.result;
            };
            reader.readAsDataURL(file);

            // Submit form secara otomatis setelah memilih gambar
            form.submit();
        }
    });
});

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
  });
  
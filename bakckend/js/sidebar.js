document.addEventListener("DOMContentLoaded", function () {
  // Get all sidebar links
  var sidebarLinks = document.querySelectorAll(".nav-link");

  // Add click event listener to each link
  sidebarLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      // Remove 'active' class from all links
      sidebarLinks.forEach(function (innerLink) {
        innerLink.classList.remove("active");
      });

      // Add 'active' class to the clicked link
      link.classList.add("active");
    });
  });

  // Activate dropdown functionality
  var dropdownElementList = [].slice.call(
    document.querySelectorAll(".dropdown-toggle")
  );
  var dropdownList = dropdownElementList.map(function (dropdownToggle) {
    return new bootstrap.Dropdown(dropdownToggle);
  });
});

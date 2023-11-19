document.addEventListener("DOMContentLoaded", function() {
    window.onscroll = function() {
      if (window.innerWidth > 768) { // Check the window width
        scrollFunction();
      }
    };
  });
  
  
  function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.getElementById("shownav").style.top = "0";
    } else {
      document.getElementById("shownav").style.top = "-80px";
    }
  }

  function closeMenu() {
    document.getElementById('menu__toggle').checked = false;
  }

  function myFunction() {
    // Get the text field
    var copyText = document.getElementById("myInput");
  
    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
  
    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
    
    // Alert the copied text
    alert("Copied the text: " + copyText.value);
  }
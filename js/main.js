  function toggleMoreText(event) {
    event.preventDefault();
    const moreText = document.getElementById("more-text");
    const link = event.target;

    moreText.classList.toggle("show");

    if (moreText.classList.contains("show")) {
      link.textContent = "READ LESS";
    } else {
      link.textContent = "READ MORE";
    }
  }

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


function toggleMoreTeam(event) {
  event.preventDefault();
  const moreTeam = document.getElementById("more_team");
  const link = event.target;

  moreTeam.classList.toggle("show");

  if (moreTeam.classList.contains("show")) {
    link.textContent = "View Less";
  } else {
    link.textContent = "View More";
  }
}

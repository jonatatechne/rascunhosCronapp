function main() {
  let videos = document.querySelectorAll(".wp-video");
  for (var i = 0; i < videos.length; i++) {
    videos[i].style.width = "100%";
  }
}

window.addEventListener("load", main);

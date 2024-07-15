let isDown = false;
let isDrag = false;
let delay = false;
let startX;
let scrollLeft;
let moved = false;
var slider = document.querySelector(".facility-list-table");
  
slider.click(function () {
  console.log("clicked");
  $(".facility-list-table").each(function () {
    this.classList.remove("selected-item");
  });
  slider.classList.add("selected-item");
});

slider.addEventListener("mousedown", e => {
  isDown = true;
  slider.classList.add("active");
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
  moved = false;
});

slider.addEventListener("mouseleave", () => {
  isDown = false;
  slider.classList.remove("active");
  moved = true;
});

slider.addEventListener("mouseup", (e) => {
  isDown = false;
  slider.classList.remove("active");
  isDrag = false;
});
    
slider.addEventListener("mousemove", e => {
  if (!isDown) return;
  isDrag = true;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 2;
  slider.scrollLeft = scrollLeft - walk;
  moved = true;
});
$(".facility-list-table li div").click(function () {
  if (!moved) {
    if (delay) return;
    delay = true;
    $(".facility-list-table>li.selected-item").removeClass("selected-item");
    $(".facility-list-table li").eq($(this).closest("li").index()).addClass("selected-item");
    $(".facility-detil").removeClass("selected");
    setTimeout(function() {
      delay = false;
      $(".facility-detil img").attr("src", data_fasilitas[$(".selected-item").index()]["image"]);
      $(".facility-detil").addClass("selected");
    }, 250);
  } else {
    moved = false;
  };
});
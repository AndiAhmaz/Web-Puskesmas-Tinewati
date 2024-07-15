$(".doctor-list").each(function () {
  var slider = this;
  let isDown = false;
  let isDrag = false;
  let startX;
  let scrollLeft;
  
  slider.addEventListener("mousedown", e => {
    isDown = true;
    slider.classList.add("active");
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
  });
  
  slider.addEventListener("mouseleave", () => {
    isDown = false;
    slider.classList.remove("active");
  });
  
  slider.addEventListener("mouseup", (e) => {
    isDown = false;
    slider.classList.remove("active");
    isDragged =  false;
  });
  slider.addEventListener("mousemove", e => {
    if (!isDown) return;
    isDragged =  true;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2;
    slider.scrollLeft = scrollLeft - walk;
    // console.log(walk);
  });
})
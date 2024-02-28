/*ハンバーガーメニュー */
document.querySelector(".hamburger").addEventListener("click", function () {
  this.classList.toggle("active");
  document.querySelector(".hamburger-menu").classList.toggle("active");
});

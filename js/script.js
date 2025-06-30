$(function () {
  abrirMenu();
  cerrarMenu();
});

const abrirMenu = () => {
  $(".btn-menu").click(function (e) {
    e.preventDefault();
    $("#contenedor-navbar").toggleClass("active");
  });
};
const cerrarMenu = () => {
  $(".cierra-menu").on("click", function () {
    $("#contenedor-navbar").removeClass("active");
  });
};


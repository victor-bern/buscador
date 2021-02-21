var totalPaginas = 20;
var buscador;
var categoria;
var button = document.querySelector("#Buscar");

button.addEventListener("click", () => {
  buscador = $(".Buscador option:selected").text();
  categoria = $(".Categoria option:selected").val();
  console.log(categoria);
  document.querySelector(".pagination").innerHTML = "";
  $.ajax({
    async: true,
    method: "GET",
    url: `https://api.mercadolibre.com/sites/MLB/search?category=${categoria}&offset=0`,
    success: (data) => {
      var result = data.results;
      console.log(result);
      document.querySelector("#names").innerHTML = "";
      result.map((item) => {
        $("#names").append(`<h1>${item.title}</h1>`);
      });
    },
  });
  showPagination();
});

function showPagination() {
  for (var i = 1; i <= totalPaginas; i++) {
    document.querySelector(
      ".pagination"
    ).innerHTML += `<button onClick=paginar(${i})> ${i}</button>`;
  }
}

function paginar(i) {
  var paginacao = i * 50;
  $.ajax({
    async: true,
    method: "GET",
    url: `https://api.mercadolibre.com/sites/MLB/search?category=${categoria}&offset=${paginacao}`,
    success: (data) => {
      var result = data.results;
      document.querySelector("#names").innerHTML = "";

      result.map((item) => {
        $("#names").append(`<h1>${item.title}</h1>`);
      });
    },
  });
}

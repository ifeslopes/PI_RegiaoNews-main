$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

  $("#confirm-delete").on("show.bs.modal", function (e) {
      $(this).find(".btn-ok").attr("href", $(e.relatedTarget).data("href"));

      $(".debug-url").html(
          "Deletar  item no endereço: <strong>" +
              $(this).find(".btn-ok").attr("href") +
              "</strong>"
      );
  });

var campoFiltro = document.querySelector("#filtro");
campoFiltro.addEventListener("input",function(){
 
  var noticias = document.querySelectorAll(".noticias");

  if(this.value.length > 0){
   
    for (let i = 0; i < noticias.length; i++) {

     var  noticia = noticias[i];
     var  titulo = noticia.querySelector(".titulo").textContent;
     var  expressao = new RegExp(this.value, "i");
     

     if(!expressao.test(titulo)){
       noticia.classList.add("invisivel");
       
      }else{
       noticia.classList.remove("invisivel");
       

     }
      
    }
  }
  else{
    for (let i = 0; i < noticias.length; i++) {
      var noticia = noticias[i];
       noticia.classList.remove("invisivel");

    }


  }
})
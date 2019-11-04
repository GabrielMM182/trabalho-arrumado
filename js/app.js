$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  if(window.SimpleSlide) {
    
    new SimpleSlide({
        slide: "quote", // nome do atributo data-slide="principal"
        auto: true,
        time: 4000 // tempo de transição dos slides
    });
    
    }
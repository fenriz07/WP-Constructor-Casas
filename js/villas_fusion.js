jQuery(document).ready(function($) {


  //Funcion que permite ocultar los tabs y abrir el tab.
  $('.titulo_row_opcion').click(function(event) {
    var tab = $(this).data('tab');
    $(".tab").hide();
    $(".titulo_row_opcion").removeClass("active");
    $(this).addClass('active');
    $("#"+tab).show('400');
    //$("#"+tab).css({display: 'flex'});
    console.log(tab);
  });


  //Click en las imagenes..

  //Scroll 1
  $('.solados_alicatados_vivienda').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#planta_primera').css({
      background: 'url('+url_img+')'
    });
    var madera = $(this).data('madera');
    if(madera != "si"){
      $('#cocina').css({
        background: 'url('+url_img+')'
      });
    }
  });

  $('.solados_alicatados_dormitorios').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#planta_baja').css({
      background: 'url('+url_img+')'
    });
  });

  $('.solados_alicatados_solarium_terrazas').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#solarium_y_terrazas').css({
      background: 'url('+url_img+')'
    });
  });

  $('.solados_alicatados_semi_sotano').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#semi_sotano').css({
      background: 'url('+url_img+')'
    });
  });

  $('.solados_alicatados_vivienda_techos_doble_altura').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#solados_alicatados_planta_primera_techos_doble_altura_img').css({
      background: 'url('+url_img+')'
    });
  });

  $('.solados_alicatados_dormitorio_techos_doble_altura').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#solados_alicatados_planta_baja_techos_doble_altura_img').css({
      background: 'url('+url_img+')'
    });
  });

  //Scroll 2
  $('.cocina_planta_baja_encimera').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#encimera_cocina_planta_baja_img').css({
      background: 'url('+url_img+')'
    });
  });

  $('.cocina_planta_baja_muebles').click(function(event) {
    var padre = $(this).parent().attr('class');
    var url_img = $(this).find('img').attr('src');
    switch (padre) {
      case 'contendor_cocina_lacados':
        $('#muebles_de_cocina_lacados_planta_baja').css({
          background: 'url('+url_img+')'
        });
        break;
      case 'contendor_cocina_maderas':
        $('#muebles_de_cocina_madera_planta_baja').css({
          background: 'url('+url_img+')'
        });
        break;
    }
  });

  $('.cocina_sistema_frio_planta_baja').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#sistema_frio_planta_baja_img').css({
      background: 'url('+url_img+')'
    });
    $('#sistema_frio_planta_baja_img').addClass('producto');
  });


  $('.cocina_vinoteca_planta_baja').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#vinoteca_planta_baja_img').css({
      background: 'url('+url_img+')'
    });
    $('#vinoteca_planta_baja_img').addClass('producto');
  });

  $('.cocina_semi_sotano_encimera').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#encimera_cocina_semi_sotano_img').css({
      background: 'url('+url_img+')'
    });
  });

  $('.cocina_semi_sotano_muebles').click(function(event) {
    var padre = $(this).parent().attr('class');
    var url_img = $(this).find('img').attr('src');
    switch (padre) {
      case 'contendor_cocina_lacados':
        $('#muebles_de_cocina_lacados_semi_sotano').css({
          background: 'url('+url_img+')'
        });
        break;
      case 'contendor_cocina_maderas':
        $('#muebles_de_cocina_madera_semi_sotano').css({
          background: 'url('+url_img+')'
        });
        break;
    }
  });

  $('.cocina_sistema_frio_semi_sotano').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#sistema_frio_semi_sotano_img').css({
      background: 'url('+url_img+')'
    });
    $('#sistema_frio_semi_sotano_img').addClass('producto');
  });


  $('.cocina_vinoteca_semi_sotano').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#vinoteca_semi_sotano_img').css({
      background: 'url('+url_img+')'
    });
    $('#vinoteca_semi_sotano_img').addClass('producto');
  });

  $('.banos_diseno_lavados').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#banos_disenos_lavados_img').css({
      background: 'url('+url_img+')'
    });
    $('#banos_disenos_lavados_img').addClass('producto');
  });


  $('.banos_hidro_masaje_principal').click(function(event) {
    var n_check = $(this).data('check');
    $('input[name=hmp][value='+ n_check +']').prop("checked", true);
  });

  $('.banos_hidro_masaje_secundario').click(function(event) {
    var n_check = $(this).data('check');
    $('input[name=hms][value='+ n_check +']').prop("checked", true);
  });

  $('.carpinteria_interior_puerta_paso').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#puerta_paso_img').css({
      background: 'url('+url_img+')'
    });
  });

  $('.carpinteria_interior_fondo_armario').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#fondo_carpinteria_detalles').css({
      background: 'url('+url_img+')'
    });
  });

  $('.carpinteria_interior_vaso_piscina').click(function(event) {
    var url_img = $(this).find('img').attr('src');
    $('#vaso_piscina_img').css({
      background: 'url('+url_img+')'
    });
  });


});

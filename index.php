<?php
/*
Plugin Name: VillasFusion Calidad
Description: Selector de Calidad
Author: CmantikWeb - Dev. Servio Zambrano
Author URI: http://cmantikweb.com/
Version: 0.1
License: GPLv2
*/

$pluginDir = pathinfo( __FILE__ );
$pluginDir = $pluginDir['dirname'];

$url_plugin_js  =   plugins_url('villas_calidad/js/');
$url_plugin_css  =   plugins_url('villas_calidad/css/');

wp_register_style( 'villa_calidad_css', $url_plugin_css . 'villas_calidad.css');
wp_register_script('villas_fusion_js', $url_plugin_js . 'villas_fusion.js');


/**
 *
 */
class AppVillasFusion{


  private $uri_img_marmol;
  private $uri_img_suelos_madera;
  private $uri_img_suelos_porcelanico;
  private $uri_img_suelos_tarima_ceramica;
  private $uri_img_suelos_madera_exterior;
  private $uri_img_techos_madera;
  private $uri_img_cocina_silestone;
  private $uri_img_cocina_lacados;
  private $uri_img_cocina_madera;
  private $uri_img_sistema_frio;
  private $uri_img_vinoteca;
  private $uri_img_diseno_lavado;
  private $uri_img_hidro_masaje;
  private $uri_img_puertas_paso_maderas;
  private $uri_img_puertas_paso_lacados;
  private $uri_img_fondo_armario;
  private $uri_img_piscina;
  private $uri_img_griferia;

  //Pirmer Scroll
  private $lista_marmol;
  private $lista_suelos_madera;
  private $lista_suelos_porcelanico;
  private $lista_suelos_tarima_ceramica;
  private $lista_suelos_madera_exterior;
  private $lista_techos_madera;



  //Segundo Scroll
  private $lista_cocina_silestone;
  private $lista_cocina_lacados;
  private $lista_cocina_madera;
  private $lista_sistema_frio;
  private $lista_vinoteca;
  private $lista_diseno_lavado;
  private $lista_hidro_masaje;
  private $lista_puerta_paso_maderas;
  private $lista_puerta_paso_lacados;
  private $lista_fondo_armario;
  private $lista_piscina;
  private $lista_griferia;

  function __construct(){
    $this->uri_img_marmol = plugins_url('villas_calidad/img/marmol/');
    $this->uri_img_suelos_madera = plugins_url('villas_calidad/img/suelos_madera/');
    $this->uri_img_suelos_porcelanico = plugins_url('villas_calidad/img/suelos_porcelanicos/');
    $this->uri_img_suelos_tarima_ceramica = plugins_url('villas_calidad/img/suelos_tarima_ceramica/');
    $this->uri_img_suelos_madera_exterior = plugins_url('villas_calidad/img/suelos_madera_exteriores/');
    $this->uri_img_techos_madera = plugins_url('villas_calidad/img/techos_madera/');
    $this->uri_img_cocina_silestone = plugins_url('villas_calidad/img/cocina_silestone/');
    $this->uri_img_cocina_lacados = plugins_url('villas_calidad/img/cocina_lacados/');
    $this->uri_img_cocina_madera = plugins_url('villas_calidad/img/cocina_madera/');
    $this->uri_img_sistema_frio = plugins_url('villas_calidad/img/sistema_frio/');
    $this->uri_img_vinoteca = plugins_url('villas_calidad/img/vinoteca/');
    $this->uri_img_diseno_lavado = plugins_url('villas_calidad/img/diseno_lavados/');
    $this->uri_img_hidro_masaje = plugins_url('villas_calidad/img/hidromasaje/');
    $this->uri_img_puertas_paso_maderas = plugins_url('villas_calidad/img/puertas_paso/maderas/');
    $this->uri_img_puertas_paso_lacados = plugins_url('villas_calidad/img/puertas_paso/lacados/');
    $this->uri_img_fondo_armario = plugins_url('villas_calidad/img/fondo_armario/');
    $this->uri_img_piscina = plugins_url('villas_calidad/img/piscina/');
    $this->uri_img_griferia = plugins_url('villas_calidad/img/griferia/');




    $this->lista_marmol = array('ibiza',
                                'crema',
                                'marron_emperador',
                                'negro_marquina',
                                'rojo_levantina',
                                'snapish_gold',
                                'travertino',
                                'verde_indio',
                                'victory');

    $this->lista_suelos_madera = array(5,6,7,9,10,11,13);

    $this->lista_suelos_porcelanico = array('beige',
                                'blanco',
                                'bronce',
                                'ceniza',
                                'grafito',
                                'gris',
                                'negro');

    $this->lista_suelos_tarima_ceramica = array('vancouver_nogal',
                                                'vancouver_ceniza',
                                                'vancouver_arce',
                                                'nogal');

    $this->lista_suelos_madera_exterior = array('ipe',
                                                'iroko',
                                                'teka');

   $this->lista_techos_madera =  array(5,6,7,9,10,11,13,'sin_techo');

   $this->lista_cocina_silestone = array(1,2,3,4,5,6,7,14,15,16,17,81,91,101,111);

   $this->lista_cocina_lacados = array('blanco',
                                       'chocolate',
                                       'gris',
                                       'moka',
                                       'naranja',
                                       'negro',
                                       'pistacho',
                                       'rojo',
                                       'vidrio-plateado-espejo');

   $this->lista_cocina_madera = array('cerezo_seda',
                                      'nogal',
                                      'roble_blanco',
                                      'roble_cambrian',
                                      'roble_grafito',
                                      'roble_jerez',
                                      'roble_modena'
                                      );

   $this->lista_sistema_frio = array('congelador',
                                  'congelador_bajo_encimera',
                                  'frigorifico',
                                  'neff-combi'
                                 );

   $this->lista_vinoteca = array('vinoteca_1','vinoteca_2');

   $this->lista_diseno_lavado = array('casablanca','qube','redondo');

   $this->lista_hidro_masaje = array('hidro_1',
                                     'hidro_2',
                                     'hidro_3',
                                     'hidro_4',
                                     'hidro_5',
                                     'hidro_6',
                                     'hidro_7'
                                   );

   $this->lista_puerta_paso_maderas = array('madera_puerta_1','madera_puerta_2',
                                            'madera_puerta_3','madera_puerta_4',
                                            'madera_puerta_5','madera_puerta_6',
                                            'madera_puerta_7','madera_puerta_8',
                                            'madera_puerta_9','madera_puerta_10');

   $this->lista_puerta_paso_lacados = array('lacados8','lacados7','lacados12',
                                            'lacados11','lacados1','lacados9');

   $this->lista_fondo_armario = array('fondo_armario_1','fondo_armario_2',
                                       'fondo_armario_3','fondo_armario_4',
                                       'fondo_armario_5');

   $this->lista_piscina = array(100,110,501,503,507,509,510);

   $this->lista_griferia = array('griferia_1','griferia_2');

  }

  //Opciones del Aside
  private function AsideSoladosAlicatos(){

    /* 0 = Sin subopciones
       1=  Con subopcion
       2 = Sin subopcion pero disponible alicatados y solados
    */

   $opciones = array('planta primera' => 1,
                    'planta baja' => 1,
                    'solarium y terrazas' => 0,
                    'semi sotano' =>0,
                    'cocina' =>0,
                    'baños' => 2,
                    'aseos' => 2
    );

    echo '<h4 class="partner_option">Solados y Alicatados</h4>';
    //Titulos de la columna
    echo '<div class="row_title">
      <div class=s_a_c_1>
      </div>
      <div class=s_a_c_2>
        <h5 class="titulo_row">ALICATADOS</h5>
      </div>
      <div class=s_a_c_3>
        <h5 class="titulo_row">SOLADOS</h5>
      </div>
    </div>';

    //Opciones:
    $contenedor_opcion = '<div class="contenedor_opcion">
      <div class=s_a_o_1>
        <h5 class="titulo_row_opcion" data-tab="%s"><a>%s</a></h5>
      </div>
      <div class=s_a_o_2>
      </div>
      <div class=s_a_o_3>
        <div id="%s" class="img_option" src="#"></div>
      </div>
    </div>';

    $contenedor_opcion_1 = '<div class="contenedor_opcion">
        <div class=s_a_o_1>
          <h5 class="titulo_row_opcion" data-tab="%s"><a>%s</a></h5>
        </div>
        <div class=s_a_o_2>
        </div>
        <div class=s_a_o_3>
            <div id="%s" class="img_option_father"></div>
        </div>
      </div>
      <div class="contenedor_opcion">
        <div class=s_a_o_1>
          <h5 class="titulo_row_opcion sub_option" data-tab="%s"><a>%s</a></h5>
        </div>
        <div class=s_a_o_2>
        </div>
        <div class=s_a_o_3>
            <div id="%s" class="img_option" src=""></div>
        </div>
    </div>';

    $contenedor_opcion_2 = '<div class="contenedor_opcion">
      <div class=s_a_o_1>
        <h5 class="titulo_row_opcion" data-tab="%s"><a>%s</a></h5>
      </div>
      <div class=s_a_o_2>
            <div class="img_option"></div>
      </div>
      <div class=s_a_o_3>
          <div class="img_option"></div>
      </div>
    </div>';

    foreach ($opciones as $key => $opcion) {
      switch ($opcion) {
        case 0:
          echo sprintf($contenedor_opcion,'solados_alicatados_' . str_replace(' ','_',$key),$key,str_replace(' ','_',$key));
          break;
        case 1:
          echo sprintf($contenedor_opcion_1,'solados_alicatados_' . str_replace(' ','_',$key),$key,str_replace(' ','_',$key),'solados_alicatados_' . str_replace(' ','_',$key).'_techos_doble_altura','Techos Doble Altura','solados_alicatados_' . str_replace(' ','_',$key).'_techos_doble_altura_img');
          break;
        case 2:
          echo sprintf($contenedor_opcion_2,'solados_alicatados_' . str_replace(' ','_',$key),$key);
          break;
        default:
          break;
      }
    }


  }
  private function AsideTerminaciones(){


    $titulo = '<h4 class="partner_option top_border">%s</h4>';
    $contenedor_opcion = '<div class="contenedor_opcion">
      <div class=s_a_o_1>
        <h5 class="titulo_row_opcion" data-tab="%s"><a>%s</a></h5>
      </div>
      <div class=s_a_o_2>
      </div>
      <div class=s_a_o_3>
        <div id="%s" class="img_option" src="#"></div>
      </div>
    </div>';

    $contenedor_opcion_2 = '<div class="contenedor_opcion">
      <div class=s_a_o_1>
        <h5 class="titulo_row_opcion" data-tab="%s"><a>%s</a></h5>
      </div>
      <div class=s_a_o_2>
            <div id="%s" class="img_option"></div>
      </div>
      <div class=s_a_o_3>
          <div id="%s"class="img_option"></div>
      </div>
    </div>';

    $contenedor_opcion_2_titles = '<div class="contenedor_opcion">
      <div class=s_a_o_1>
        <h5 class="titulo_row_opcion titulo_filadb" data-tab="%s"><a>%s</a></h5>
      </div>
      <div class=s_a_o_2>
            <div id="%s" class="img_option"></div>
      </div>
      <div class=s_a_o_3>
          <div id="%s"class="img_option"></div>
      </div>
    </div>';

    $contenedor_opcion_1_titles = '<div class="contenedor_opcion">
      <div class=s_a_o_1>
        <h5 class="titulo_row_opcion titulo_filadb" data-tab="%s"><a>%s</a></h5>
      </div>
      <div class=s_a_o_2>
      </div>
      <div class=s_a_o_3>
          <div id="%s"class="img_option"></div>
      </div>
    </div>';

    $opciones_2 = '<div class="contenedor_opcion subopcion">
        <div class="s_a_o_1">
          %s <input type="radio" name="%s" value="%s">
        </div>
        <div class="s_a_o_2">
         %s  <input type="radio" name="%s" value="%s">
        </div>
      </div>';

    $opcion_1 = '<div class="contenedor_opcion">
      <div class=s_a_o_1>
        <h5 class="titulo_row_opcion"><a>%s</a></h5>
      </div>
      <div class=s_a_o_2>
      </div>
      <div class=s_a_o_3>
          <input type="radio" name="%s" value="%s">
      </div>
    </div>';

    $sub_opcion_1 = '<div class="contenedor_opcion">
      <div class=s_a_o_1>
        <h5 class="titulo_row_opcion titulo_right"><a>%s</a></h5>
      </div>
      <div class=s_a_o_2>
      </div>
      <div class=s_a_o_3>
          <input type="radio" name="%s" value="%s">
      </div>
    </div>';

    $opcion_7 = '<div class="contenedor_opcion">
      <div class=s_a_o_1>
        <h5 class="titulo_row_opcion" data-tab="%s"><a>%s</a></h5>
      </div>
      <div class=s_a_o_2>
      </div>
      <div class=s_a_o_3>
          <input type="radio" name="%s" value="1">
          <input type="radio" name="%s" value="2">
          <input type="radio" name="%s" value="3">
          <input type="radio" name="%s" value="4">
          <input type="radio" name="%s" value="5">
          <input type="radio" name="%s" value="6">
          <input type="radio" name="%s" value="7">
      </div>
    </div>';

    $fila_3_titulos = '<div class="contenedor_opcion">
      <div class=s_a_o_1>
        <h5 class="titulo_row_opcion "><a>%s</a></h5>
      </div>
      <div class=s_a_o_2>
        <h5 class="titulo_row_opcion titulo_filadb" ><a>%s</a></h5>
      </div>
      <div class=s_a_o_3>
        <h5 class="titulo_row_opcion titulo_filadb" ><a>%s</a></h5>
      </div>
    </div>';



    //Seccion Cocina Planta Baja
    echo sprintf($titulo,'COCINA PLANTA BAJA');
    echo sprintf($contenedor_opcion,'encimera_cocina_planta_baja','ENCIMERA COCINA','encimera_cocina_planta_baja_img');
    echo sprintf($contenedor_opcion_2,'muebles_de_cocina_planta_baja','MUEBLES DE COCINA','muebles_de_cocina_lacados_planta_baja','muebles_de_cocina_madera_planta_baja');
    echo sprintf($opciones_2,'MATE','terminaciones_mate_brillo_cocina_planta_baja','mate','BRILLO','terminaciones_mate_brillo_cocina_planta_baja','brillo');
    echo sprintf($contenedor_opcion,'sistema_frio_planta_baja','SISTEMA DE FRIO','sistema_frio_planta_baja_img');
    echo sprintf($contenedor_opcion,'vinoteca_planta_baja','VINOTECA','vinoteca_planta_baja_img');
    echo sprintf($opciones_2,'CAFETERA','terminaciones_cafetera_osmosis_cocina_planta_baja','cafetera','OSMOSIS','terminaciones_cafetera_osmosis_cocina_planta_baja','osmosis');

    //Seccion SemiSotano
    echo sprintf($titulo,'COCINA SEMI-SOTANO');
    echo sprintf($contenedor_opcion,'encimera_cocina_semi_sotano','ENCIMERA COCINA','encimera_cocina_semi_sotano_img');
    echo sprintf($contenedor_opcion_2,'muebles_de_cocina_semi_sotano','MUEBLES DE COCINA','muebles_de_cocina_lacados_semi_sotano','muebles_de_cocina_madera_semi_sotano');
    echo sprintf($opciones_2,'MATE','terminaciones_mate_brillo_cocina_semi_sotano','mate','BRILLO','terminaciones_mate_brillo_cocina_semi_sotano','brillo');
    echo sprintf($contenedor_opcion,'sistema_frio_semi_sotano','SISTEMA DE FRIO','sistema_frio_semi_sotano_img');
    echo sprintf($contenedor_opcion,'vinoteca_semi_sotano','VINOTECA','vinoteca_semi_sotano_img');
    echo sprintf($opciones_2,'CAFETERA','terminaciones_cafetera_osmosis_cocina_semi_sotano','cafetera','OSMOSIS','terminaciones_cafetera_osmosis_cocina_semi_sotano','osmosis');

    //Seccion Baños
    echo sprintf($titulo,'BAÑOS');
    echo sprintf($opcion_1,'CISTERNA OPCIONAL','terminacones_banos_cisterna_opcional','si');
    echo sprintf($contenedor_opcion,'banos_griferia','GRIFERÍA','banos_griferia_img');
    echo sprintf($contenedor_opcion,'banos_disenos_muebles','DISEÑO MUEBLE','banos_disenos_muebles_img');
    echo sprintf($contenedor_opcion,'banos_disenos_lavados','DISEÑOS LAVADOS','banos_disenos_lavados_img');
    echo sprintf($opcion_7,'hidromasaje_principal','HIDROMASAJE PRINCIPAL','hmp','hmp','hmp','hmp','hmp','hmp','hmp');
    echo sprintf($opcion_7,'hidromasaje_secundario','HIDROMASAJE SECUNDARIO','hms','hms','hms','hms','hms','hms','hms');

    //Carpinteria Interior
    echo sprintf($titulo,'CARPINTERÍA INTERIOR');
    echo sprintf($contenedor_opcion,'puerta_paso','PUERTA DE PASO','puerta_paso_img');
    echo sprintf($fila_3_titulos,'ARMARIOS','DETALLE','BASE');
    echo sprintf($contenedor_opcion_2_titles,'puertas_carpinteria','PUERTAS','puertas_carpinteria_detalles','puertas_carpinteria_base');
    echo sprintf($contenedor_opcion_1_titles,'fondo_carpinteria','FONDO','fondo_carpinteria_detalles');

    //PISCINA
    echo sprintf($titulo,'PISCINA');
    echo sprintf($contenedor_opcion,'vaso_piscina','VASO DE PISCINA','vaso_piscina_img');
    echo sprintf($sub_opcion_1,'PROFUNDIDAD ÚNICA','profundidad_unica','si');
    echo sprintf($sub_opcion_1,'MISMA PROFUNDIDAD EN EL MISMO VASO PISCINA','mpvp','si');
    echo sprintf($sub_opcion_1,'METACRILATO','metacrilato','si');









  }

  //Aside como tal
  public function Aside(){
    echo '<div id="aside">';
     $this->AsideSoladosAlicatos();
     $this->AsideTerminaciones();
    echo '</div>';
  }

  /*Generador de Materiales*/
  private function GenerarMarmoles($class){
    //Generando Marmoles
    $html .= '<h4>Marmol</h4>';
    $lista_img_1 = "";
    $lista_img_2 = "";
    $formato = '<div class="'.$class.' marmol"><img   src="'.$this->uri_img_marmol.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_marmol">%s</div>';


    for ($i=0; $i < 5 ; $i++) {
      $lista_img_1.= sprintf($formato,$this->lista_marmol[$i]);
    }
    $html.= sprintf($formato_div_c,$lista_img_1);

    for ($i=5; $i <= 9 ; $i++) {
      if ($i==9) {$lista_img_2.='<div class="'.$class.'"></div>';}else{$lista_img_2.= sprintf($formato,$this->lista_marmol[$i]);}
    }
    $html.= sprintf($formato_div_c,$lista_img_2);
    return $html;
  }

  private function GenerarSuelosMaderas($class){
    $html = '<h4>Maderas</h4>';
    $lista_img_1 = "";
    $lista_img_2 = "";
    $formato = '<div class="'.$class.'" data-madera="si"><img  src="'.$this->uri_img_suelos_madera.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_suelos_madera">%s</div>';

    for ($i=0; $i < 4 ; $i++) {
      $lista_img_1.= sprintf($formato,$this->lista_suelos_madera[$i]);
    }
    $html.= sprintf($formato_div_c,$lista_img_1);

    for ($i=4; $i <= 7 ; $i++) {
      if ($i==7) {$lista_img_2.='<div class="solados_alicatados_vivienda"></div>';}else{$lista_img_2.= sprintf($formato,$this->lista_suelos_madera[$i]);}
    }
    $html.= sprintf($formato_div_c,$lista_img_2);

    return $html;
  }

  private function GenerarSuelosPorcelanico($class){
    $html = '<h4>Porcelanicó</h4>';
    $lista_img = "";
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_suelos_porcelanico.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_suelos_porcelanicos">%s</div>';
    foreach ($this->lista_suelos_porcelanico as $key => $value) {
      $lista_img.= sprintf($formato,$value);
    }
    $html.= sprintf($formato_div_c,$lista_img);
    return $html;
  }

  private function GenerarSuelosTarimaCeramica($class){
    $html = '<h4>Tarima Ceramica</h4>';
    $lista_img_1 = "";
    $lista_img_2 = "";
    $formato = '<div class="'.$class.'"><img  src="'.$this->uri_img_suelos_tarima_ceramica.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_suelos_tarima_ceramica">%s</div>';

    $i =1;
    foreach ($this->lista_suelos_tarima_ceramica as $key => $value) {
      if($i<3){
        $lista_img_1.= sprintf($formato,$value);
      }else{
        $lista_img_2.= sprintf($formato,$value);
      }
      $i++;
    }
    $html.= sprintf($formato_div_c,$lista_img_1);
    $html.= sprintf($formato_div_c,$lista_img_2);

    return $html;
  }

  private function GenerarSuelosMaderasExterior($class){
    $html .= '<h4>Maderas exteriores</h4>';
    $lista_img = "";
    $formato = '<div class="'.$class.'"><img class="suelos_madera_exterior" src="'.$this->uri_img_suelos_madera_exterior.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_suelo_maderas_exterior">%s</div>';

    foreach ($this->lista_suelos_madera_exterior as $key => $value) {
      $lista_img.= sprintf($formato,$value);
    }
    $html.= sprintf($formato_div_c,$lista_img);
    return $html;

  }

  private function GenerarTechosDobleAltura($class){
    $html .= '<h4>TECHOS A DOBLE ALTURA</h4>';
    $formato_div_c = '<div class="contendor_techos_doble_altura_img">%s</div>';
    $formato_left_right_img = '<div class="'.$class.'lr"><img class="techos_doble_altura_img_rl" src="'.$this->uri_img_techos_madera.'left_techo_madera.jpg"/></div><div class="'.$class.'lr"><img class="techos_doble_altura_img_rl" src="'.$this->uri_img_techos_madera.'right_techo_madera.jpg"/></div>';
    $html .= sprintf($formato_div_c,$formato_left_right_img);

    $lista_img_1 = "";
    $lista_img_2 = "";
    $formato_div_c = '<div class="contendor_techos_doble_altura_img">%s</div>';
    $formato = '<div class="'.$class.'"><img  src="'.$this->uri_img_techos_madera.'%s.jpg"/></div>';
    $i = 0;
    foreach($this->lista_techos_madera as $key => $value){
      if($i<4){
        $lista_img_1.= sprintf($formato,$value);
      }else{
        $lista_img_2.= sprintf($formato,$value);
      }
      $i++;
    }
    $html.= sprintf($formato_div_c,$lista_img_1);
    $html.= sprintf($formato_div_c,$lista_img_2);

    return $html;
  }

  private function GenerarEncimeras($class){
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_cocina_silestone.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_encimeras">%s</div>';
    $lista_img_1 = '';
    $i = 0;
    foreach ($this->lista_cocina_silestone as $key => $silestone) {
      if ($i<5) {
        $lista_img_1 .= sprintf($formato,$silestone);
      }
      $i++;
      if($i==5){$html.=sprintf($formato_div_c,$lista_img_1);$lista_img_1 = "";$i=0;}
    }
    //$html.=sprintf($formato_div_c,$lista_img_1);
    return $html;

  }

  private function GenerarCocinaLacados($class){
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_cocina_lacados.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_cocina_lacados">%s</div>';
    $lista_img_1 = '';
    $lista_img_2 = '';
    $i = 0;
    foreach ($this->lista_cocina_lacados as $key => $lacados) {
      if($i<7){
        $lista_img_1 .= sprintf($formato,$lacados);
      }else{
        $lista_img_2 .= sprintf($formato,$lacados);
      }
      $i++;
    }
    $lista_img_2.='<div class="'.$class.' ncurpoi"></div><div class="'.$class.' ncurpoi"></div><div class="'.$class.' ncurpoi"></div><div class="'.$class.' ncurpoi"></div><div class="'.$class.' ncurpoi"></div>';
    $html.= sprintf($formato_div_c,$lista_img_1);
    $html.= sprintf($formato_div_c,$lista_img_2);

    return $html;
  }

  private function GenerarMaderasMuebles($class){
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_cocina_madera.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_cocina_maderas">%s</div>';
    $lista_img_1 = '';
    $lista_img_2 = '';
    $i=0;
    foreach ($this->lista_cocina_madera as $key => $madera) {
      if($i<4){
        $lista_img_1 .= sprintf($formato,$madera);
      }else{
        $lista_img_2 .= sprintf($formato,$madera);
      }
      $i++;
    }
    $lista_img_2.='<div class="'.$class.' ncurpoi"></div>';

    $html.= sprintf($formato_div_c,$lista_img_1);
    $html.= sprintf($formato_div_c,$lista_img_2);

    return $html;
  }

  private function GenerarSistemaFrio($class){
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_sistema_frio.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_sistema_frio">%s</div>';
    $lista_img_1 = '';
    foreach ($this->lista_sistema_frio as $key => $sistema_frio) {
      $lista_img_1.= sprintf($formato,$sistema_frio);
    }
    $html.= sprintf($formato_div_c,$lista_img_1);
    return $html;
  }

  private function GenerarVinoteca($class){
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_vinoteca.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_vinoteca">%s</div>';
    $lista_img_1 = '';
    foreach ($this->lista_vinoteca as $key => $vinoteca) {
      $lista_img_1.= sprintf($formato,$vinoteca);
    }
    $html.= sprintf($formato_div_c,$lista_img_1);
    return $html;
  }

  private function GenerarDisenosLavados($class){
    $html .= '<h4>Lavados</h4>';
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_diseno_lavado.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_diseno_lavados">%s</div>';
    $lista_img_1 = '';
    foreach ($this->lista_diseno_lavado as $key => $diseno) {
      $lista_img_1.= sprintf($formato,$diseno);
    }
    $html.= sprintf($formato_div_c,$lista_img_1);
    return $html;
  }

  private function GenerarHidroMasaje($class){
    $html .= '<h4>HIDROMASAJE</h4>';
    $formato_div_c = '<div class="contendor_hidromasaje">%s</div>';
    $formato_left_right_img = '<div class="'.$class.'lr"><img class="techos_doble_altura_img_rl" src="'.$this->uri_img_hidro_masaje.'banera_casterllo.jpg"/></div><div class="'.$class.'lr"><img class="techos_doble_altura_img_rl" src="'.$this->uri_img_hidro_masaje.'banera_denia.jpg"/></div>';
    $html .= sprintf($formato_div_c,$formato_left_right_img);

    $lista_img_1 = "";
    $formato = '<div data-check="%s" class="'.$class.'"><p class="p_nivel_hidromasaje">Nivel %s</p><img src="'.$this->uri_img_hidro_masaje.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_niveles_hidro_masaje">%s</div>';
    $i = 1;
    foreach ($this->lista_hidro_masaje as $key => $nivel) {
      $lista_img_1 .= sprintf($formato,$i,$i,$nivel);
      $i++;
    }
    $html.= sprintf($formato_div_c,$lista_img_1);

    return $html;


  }

  private function GenerarPuertasPaso($class){
    $html .= '<h4>PUERTAS DE PASO</h4>';
    $lista_img_1 = "";
    $lista_img_2 = "";
    $html .= '<h5>Maderas</h5>';
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_puertas_paso_maderas.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_puertas_paso">%s</div>';

    $i=0;
    foreach ($this->lista_puerta_paso_maderas as $key => $puerta) {
      if($i<5){
        $lista_img_1.= sprintf($formato,$puerta);
      }else{
        $lista_img_2.= sprintf($formato,$puerta);
      }
      $i++;
    }

    $html .= sprintf($formato_div_c,$lista_img_1);
    $html .= sprintf($formato_div_c,$lista_img_2);

    $html .= '<h5>Lacados</h5>';
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_puertas_paso_lacados.'%s.jpg"/></div>';
    $lista_img_1 = "";
    foreach ($this->lista_puerta_paso_lacados as $key => $lacados) {
      $lista_img_1.= sprintf($formato,$lacados);
    }

    $html .= sprintf($formato_div_c,$lista_img_1);

    return $html;


  }

  private function GenerarFondoArmario($class){
    $html = '<h4>FONDO DE ARMARIOS</h4>';
    $lista_img_1 = "";
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_fondo_armario.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_fondo_armario">%s</div>';
    foreach ($this->lista_fondo_armario as $key => $fondo) {
      $lista_img_1.= sprintf($formato,$fondo);
    }
    $html .= sprintf($formato_div_c,$lista_img_1);

    return $html;
  }

  private function GenerarVasoPiscina($class){
    $html = '<h4>VASO DE PISCINA</h4>';
    $lista_img_1 = "";
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_piscina.'%s.PNG"/></div>';
    $formato_div_c = '<div class="contendor_vaso_piscina">%s</div>';
    foreach ($this->lista_piscina as $key => $piscina) {
      $lista_img_1.= sprintf($formato,$piscina);
    }
    $html .= sprintf($formato_div_c,$lista_img_1);

    $formato_div_c = '<div class="contendor_vaso_piscina_not_select">%s</div>';
    $formato_left_right_img = '<div class="'.$class.'lr"><img class="techos_doble_altura_img_rl" src="'.$this->uri_img_piscina.'piscina_1.jpg"/></div><div class="'.$class.'lr"><img class="techos_doble_altura_img_rl" src="'.$this->uri_img_piscina.'piscina_2.jpg"/></div>';
    $html .= sprintf($formato_div_c,$formato_left_right_img);

    return $html;
  }

  private function GenerarGriferia($class){
    $html = '<h4>GRIFERIA</h4>';
    $lista_img_1 = "";
    $formato = '<div class="'.$class.'"><img src="'.$this->uri_img_griferia.'%s.jpg"/></div>';
    $formato_div_c = '<div class="contendor_griferia">%s</div>';
    foreach ($this->lista_griferia as $key => $griferia) {
      $lista_img_1.= sprintf($formato,$griferia);
    }
    $html .= sprintf($formato_div_c,$lista_img_1);
  }

  /*Fin de los generadores*/


  /*Opciones dentro del contenedor: solados_atlicatos*/
  private function SoladosAlicatadosVivienda(){
    $class = 'solados_alicatados_vivienda';
    $html = $this->GenerarMarmoles($class);
    $html .= $this->GenerarSuelosMaderas($class);
    $html .= $this->GenerarSuelosPorcelanico($class);
    $html .= $this->GenerarSuelosTarimaCeramica($class);
    return $html;
  }

  private function SoladosAlicatadosDormitorios(){
    $class = 'solados_alicatados_dormitorios';
    $html  = $this->GenerarMarmoles($class);
    $html .= $this->GenerarSuelosMaderas($class);
    $html .= $this->GenerarSuelosPorcelanico($class);
    $html .= $this->GenerarSuelosTarimaCeramica($class);
    return $html;
  }

  private function SoladosAlicatadosSolariumTerrazas(){
    $class = 'solados_alicatados_solarium_terrazas';
    $html .= $this->GenerarSuelosTarimaCeramica($class);
    $html .= $this->GenerarMarmoles($class);
    $html .= $this->GenerarSuelosMaderasExterior($class);
    return $html;
  }

  private function SoladosAlicatadosSemiSotano(){
    $class = 'solados_alicatados_semi_sotano';
    $html .= $this->GenerarSuelosPorcelanico($class);
    $html .= $this->GenerarSuelosTarimaCeramica($class);
    return $html;
  }

  private function SoladosAlicatadosViviendaTechosDobleAltura(){
    $class = 'solados_alicatados_vivienda_techos_doble_altura';
    $html .= $this->GenerarTechosDobleAltura($class);
    return $html;
  }

  private function SoladosAlicatadosDormitoriosTechosDobleAltura(){
    $class = 'solados_alicatados_dormitorio_techos_doble_altura';
    $html .= $this->GenerarTechosDobleAltura($class);
    return $html;
  }

  private function SoladosAlicatadosBanos(){
    $class = 'solados_alicatados_banos';
    $html = $this->GenerarMarmoles($class);
    $html .= $this->GenerarSuelosMaderas($class);
    $html .= $this->GenerarSuelosPorcelanico($class);
    $html .= $this->GenerarSuelosTarimaCeramica($class);
    return $html;
  }

  /*Opciones del Segundo Scroll*/
  private function CocinaPlantaBajaEncimera(){
    $class = 'cocina_planta_baja_encimera';
    $html .= $this->GenerarEncimeras($class);
    return $html;
  }

  private function CocinaPlantaBajaMuebles(){
    $class = 'cocina_planta_baja_muebles';
    $html .= $this->GenerarCocinaLacados($class);
    $html .= $this->GenerarMaderasMuebles($class);
    return $html;
  }

  private function CocinaSistemaFrioPlantaBaja(){
    $class = 'cocina_sistema_frio_planta_baja';
    $html.= $this->GenerarSistemaFrio($class);
    return $html;
  }

  private function CocinaVinotecaPlantaBaja(){
    $class = 'cocina_vinoteca_planta_baja';
    $html .= $this->GenerarVinoteca($class);
    return $html;
  }

  private function CocinaSemiSotanoEncimera(){
    $class = 'cocina_semi_sotano_encimera';
    $html .= $this->GenerarEncimeras($class);
    return $html;
  }

  private function CocinaSemiSotanoMuebles(){
    $class = 'cocina_semi_sotano_muebles';
    $html .= $this->GenerarCocinaLacados($class);
    $html .= $this->GenerarMaderasMuebles($class);
    return $html;
  }

  private function CocinaSistemaFrioSemiSotano(){
    $class = 'cocina_sistema_frio_semi_sotano';
    $html.= $this->GenerarSistemaFrio($class);
    return $html;
  }

  private function CocinaVinotecaSemiSotano(){
    $class = 'cocina_vinoteca_semi_sotano';
    $html .= $this->GenerarVinoteca($class);
    return $html;
  }

  private function BanosGriferia(){
    $html = $this->GenerarGriferia('banos_griferia');
    return $html;
  }

  private function BanosHidroMasajePrincipal(){
    $html = $this->GenerarHidroMasaje('banos_hidro_masaje_principal');
    return $html;
  }

  private function BanosHidroMasajeSecundario(){
    $html = $this->GenerarHidroMasaje('banos_hidro_masaje_secundario');
    return $html;
  }

  private function CarpinteriaInteriorPuertasPaso(){
    $html = $this->GenerarPuertasPaso('carpinteria_interior_puerta_paso');
    return $html;
  }

  private function CarpinteriaInteriorFondoArmario(){
    $html = $this->GenerarFondoArmario('carpinteria_interior_fondo_armario');
    return $html;
  }

  private function CarpinteriaInteriorVasoPiscina(){
    $html .= $this->GenerarVasoPiscina('carpinteria_interior_vaso_piscina');
    return $html;
  }

  //Contenedor del aside
  public function Contenedor(){
    echo '<div id="contenedor" overflow-y: scroll;>';
      //Primer Scroll
      echo '<div class="tab" id="solados_alicatados_planta_primera">'.$this->SoladosAlicatadosVivienda().'</div>';
      echo '<div class="tab" id="solados_alicatados_planta_primera_techos_doble_altura">'.$this->SoladosAlicatadosViviendaTechosDobleAltura().'</div>';
      echo '<div class="tab" id="solados_alicatados_planta_baja">'.$this->SoladosAlicatadosDormitorios().'</div>';
      echo '<div class="tab" id="solados_alicatados_planta_baja_techos_doble_altura">'.$this->SoladosAlicatadosDormitoriosTechosDobleAltura().'</div>';
      echo '<div class="tab" id="solados_alicatados_solarium_y_terrazas">'.$this->SoladosAlicatadosSolariumTerrazas().'</div>';
      echo '<div class="tab" id="solados_alicatados_semi_sotano">'.$this->SoladosAlicatadosSemiSotano().'</div>';
      echo '<div class="tab" id="solados_alicatados_cocina"></div>';
      echo '<div class="tab" id="solados_alicatados_baños">'.$this->SoladosAlicatadosBanos().'</div>';
      //Segundo Scroll
      echo '<div class="tab" id="encimera_cocina_planta_baja">'.$this->CocinaPlantaBajaEncimera().'</div>';
      echo '<div class="tab" id="muebles_de_cocina_planta_baja">'.$this->CocinaPlantaBajaMuebles().'</div>';
      echo '<div class="tab" id="sistema_frio_planta_baja">'.$this->CocinaSistemaFrioPlantaBaja().'</div>';
      echo '<div class="tab" id="vinoteca_planta_baja">'.$this->CocinaVinotecaPlantaBaja().'</div>';

      echo '<div class="tab" id="encimera_cocina_semi_sotano">'.$this->CocinaSemiSotanoEncimera().'</div>';
      echo '<div class="tab" id="muebles_de_cocina_semi_sotano">'.$this->CocinaSemiSotanoMuebles().'</div>';
      echo '<div class="tab" id="sistema_frio_semi_sotano">'.$this->CocinaSistemaFrioSemiSotano().'</div>';
      echo '<div class="tab" id="vinoteca_semi_sotano">'.$this->CocinaVinotecaSemiSotano().'</div>';


      echo '<div class="tab" id="banos_griferia">'.$this->BanosGriferia().'</div>';
      echo '<div class="tab" id="banos_disenos_lavados">'.$this->GenerarDisenosLavados('banos_diseno_lavados').'</div>';
      echo '<div class="tab" id="hidromasaje_principal">'.$this->BanosHidroMasajePrincipal().'</div>';
      echo '<div class="tab" id="hidromasaje_secundario">'.$this->BanosHidroMasajeSecundario().'</div>';

      echo '<div class="tab" id="puerta_paso">'.$this->CarpinteriaInteriorPuertasPaso().'</div>';
      echo '<div class="tab" id="fondo_carpinteria">'.$this->CarpinteriaInteriorFondoArmario().'</div>';

      echo '<div class="tab" id="vaso_piscina">'.$this->CarpinteriaInteriorVasoPiscina().'</div>';






    echo '</div>';
  }
}


function AplicacionCalidadVillasFusion() {
  wp_enqueue_style('villa_calidad_css');
  wp_enqueue_script('villas_fusion_js');
  $appvf = new AppVillasFusion;
  echo '<div id="app">';

    $appvf->Contenedor();
    $appvf->Aside();

  echo '</div>';
  // do shortcode actions here
}

add_shortcode('aplicacion_calidad_villas_fusion','AplicacionCalidadVillasFusion');

?>

<?php

function clima(){
  $key="f1b0da42465c18fc";
  $string = "http://api.wunderground.com/api/".$key."/geolookup/conditions/q/Venezuela/Chacao.json";
  $json_string = file_get_contents($string);
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'city'};
  $temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
  //$humedad = $parsed_json->{'current_observation'}->{'relative_humidity'};
  //$dir_viento = $parsed_json->{'current_observation'}->{'wind_dir'};
  //$ang_viento = $parsed_json->{'current_observation'}->{'wind_degrees'};
  //$vel_viento = $parsed_json->{'current_observation'}->{'wind_kph'};
  //$max_vel_viento = $parsed_json->{'current_observation'}->{'wind_gust_kph'};
  //$presion = $parsed_json->{'current_observation'}->{'pressure_mb'};
  //$dir_presion = $parsed_json->{'current_observation'}->{'pressure_trend'};
  //$se_siente_como = $parsed_json->{'current_observation'}->{'feelslike_c'};
  //$lluvia_mm = $parsed_json->{'current_observation'}->{'precip_today_metric'};
  $icono = $parsed_json->{'current_observation'}->{'icon'};
  $icono_url = 'http://icons.wxug.com/i/c/i/'.$icono.'.gif';
  echo '<div style="float:left;padding:0 0 5px 5px;vertical-align:middle;">
          <div style="background-color:rgba(245,245,245,.5);padding:5px;">
            <div style="overflow:hidden;height:50px;">
              <img style="display:inline-block;vertical-align:middle;margin-bottom:30px;" src="'.$icono_url.'">
              <h1 style="display:inline-block;vertical-align:middle;margin-bottom:30px;">'.$temp_c.'&#176 | '.$location.'</h1>
            </div>';

  $f_string = "http://api.wunderground.com/api/f1b0da42465c18fc/geolookup/forecast/q/Venezuela/Chacao.json";
  $f_json_string = file_get_contents($f_string);
  $f_parsed_json = json_decode($f_json_string);
  echo      '<div style="text-align:right;background-color:rgba(135,206,250,.1);">';
  for ($i=0; $i < 4; $i++) { 
      $f_dia_ingles = $f_parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$i]->{'date'}->{'weekday'}; 
      switch ($f_dia_ingles) {
        case 'Monday':
          $f_dia='Lunes';
          break;
        case 'Tuesday':
          $f_dia='Martes';
          break;
        case 'Wednesday':
          $f_dia='Miercoles';
          break;
        case 'Thursday':
          $f_dia='Jueves';
          break;
        case 'Friday':
          $f_dia='Viernes';
          break;
        case 'Saturday':
          $f_dia='Sabado';
          break;
        case 'Sunday':
          $f_dia='Domingo';
          break;
        default:
          $f_dia='';
          break;
      }
      $f_temp_c_alta = $f_parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$i]->{'high'}->{'celsius'};
      $f_temp_c_baja = $f_parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$i]->{'low'}->{'celsius'};
      $f_icono = $f_parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$i]->{'icon'};
      $f_icono_url = 'http://icons.wxug.com/i/c/i/'.$f_icono.'.gif';
      echo '<div style="display:block;"><h3 style="display:inline-block;">'.$f_dia.' '.$f_temp_c_baja.'&#176/ '.$f_temp_c_alta.'&#176</h3><img src="'.$f_icono_url.'"></div>';
    }
  echo      '</div>
          </div>
        </div>';
}
?>
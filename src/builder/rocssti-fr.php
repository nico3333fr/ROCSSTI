<?php

function round_em ( $value ) {

  return round($value, 5);

} 


function rem($value, $reset_applied, $user_default_font_size) {

  if ( $reset_applied == true ) {
      return ($value / 10);
  }
  else {
        return ($value / $user_default_font_size);
		}

}


function line_height($font_size, $base_height, $basefont) {

  $coef = ceil(1 / ($base_height * $basefont / $font_size));
  $height = ($basefont * $base_height / $font_size) ;

  return ($height * $coef) ;

}

function margin_em($font_size, $base_height, $basefont, $verticalrythm) {

  $coef = ceil(1 / ($base_height * $basefont / $font_size));
  $other_coef = ceil($base_height * $basefont / $font_size);
  $height = ($basefont * $base_height / $font_size) ;
  $margin = ($height * $coef );
    
  if ( $verticalrythm == 'top_bottom' ) {
     return ( ''.remove_zero_inutile(round_em($margin * $other_coef)).'em 0 '.remove_zero_inutile(round_em($margin/2*$other_coef)).'em 0');
  }
  else if ( $verticalrythm == 'bottom' ) {
     return ('0 0 '.remove_zero_inutile(round_em( ($margin/2) * $other_coef)).'em 0');
  }
  else if ( $verticalrythm  == 'top' ) {
     return (''.remove_zero_inutile(round_em(($margin/2) * $other_coef)).'em 0 0 0');
  }

}

function margin_em_other ($font_size, $base_height, $basefont, $verticalrythm){

  $coef = ceil(1 / ($base_height * $basefont / $font_size));
  $height = ($basefont * $base_height / $font_size) ;
  $margin = ($height * $coef );

  return (''.remove_zero_inutile(round_em($margin)).'em 0');

}



function remove_zero_inutile ( $value ) {

  if (abs($value) == $value){
     if (substr($value, 0, 2) == '0.' ) {
        return substr($value, 1, strlen($value));
        }
        else return $value;
     }
     else return $value;

} 


function rocssti_quote () {

	srand ((float)microtime()*100000);
	// entre 1 et 300
	$nb=rand(1,300);
	$nb=$nb%42; //dernier case +1
	switch ($nb)
	                        { case 0 : return '« Röcssti, tu es si sexy ! » — Clara Morgane';
	                          	   	   break;
	                          case 1 : return '« À propos, chérieke, tu n’as jamais pensé à faire frire des Röcssti ? » — Gueuselambix';
	                          	   	   break;
	                          case 2 : return '« I’m Barack Obama, and I approve this Röcssti. » — Barack Obama';
	                        	     	   break;
	                          case 3 : return '« Röcssti, c’est comme des pommes mais ça pousse dans la terre. » — Mannekenpix le Belge';
	                        	     	   break;
	                          case 4 : return '« Röcssti, Hodor. » — Hodor';
	                        	     	   break;
	                          case 5 : return '« I did not have sex with Röcssti. » — Bill Clinton';
	                        	     	   break;
	                          case 6 : return '« Röcssti donne vraiment la patate. » — Antoine Parmentier';
	                        	     	   break;
	                          case 7 : return '« Habemus Röcssti ! » — François';
	                        	     	   break;
	                          case 8 : return '« La montagne est tellement jolie, quand on mange du Röcssti… » — Heidi';
	                        	     	   break;
	                          case 9 : return '« ♫ Like a Röcssti, touch for the very first time… ♪ » — Madonna';
	                        	     	   break;
	                          case 10 : return '« Il n’existe que deux choses infinies, l’Univers et les possibilités de Röcssti… mais pour l’Univers, je n’ai pas de certitude absolue.  » — Albert Einstein';
	                        	     	   break;
	                          case 11 : return '« Röcssti is a revolution. » — Steeve Jobs';
	                        	     	   break;
	                          case 12 : return '« Cogito ergo sum Röcssti » — René Descartes';
	                        	     	   break;
	                          case 13 : return '« Ma foi, ce micro-framework ne manque pas de saveur. » — Paul Bocuse';
	                        	     	   break;
	                          case 14 : return '« Je crois que nous avons trouvé le micro-framework. » — Horatio Caine';
	                        	     	   break;
	                          case 15 : return '« Je suis aware, j’utilise Röcssti. » — Jean-Claude Van Damme';
	                        	     	   break;
	                          case 16 : return '« Röcsssssssti, mon préciiiiiiiiiiiiiiiiiieux. » — Gollum';
	                        	     	   break;
	                          case 17 : return '« Tu vois, le monde se divise en deux catégories : ceux qui ont Röcssti et ceux qui creusent. Toi, tu creuses. » — Clint Eastwood';
	                        	     	   break;
	                          case 18 : return '« THIS IS RÖCSSTI! » — Leonidas';
	                        	     	   break;
	                          case 19 : return '« Supercaliröcssticexpialidocious » — Mary Poppins';
	                        	     	   break;
	                          case 20 : return '« 2,21 Ko gzippé ? Nom de Zeus ! » — Emmett Lathrop « Doc » Brown';
	                        	     	   break;
	                          case 21 : return '« C’est un Röcssti ! C’est un pic ! C’est un cap ! Que dis-je, c’est un cap ? C’est une péninsule ! » — Cyrano';
	                        	     	   break;
	                          case 22 : return '« Un petit pas pour l’intégration, un grand pas pour l’humanité. » — Neil Armstrong';
	  	                               break;
	  	                      case 23 : return '« ♪ ’Cause this is Röcssti, Röcssti night ♫ » — Michael Jackson';
	  	                               break;
	                          case 24 : return '« Merci pour ce moment… d’intégration. » — Valérie Trierweiler';
	  	                               break;
                            case 25 : return '« Il est petit, mais il a tout d’un grand. » — Carla Bruni';
	  	                               break;
                            case 26 : return '« Röcssti, formidable ! » — Philippe Gildas';
	  	                               break;
                            case 27 : return '« Avant Röcssti, les CSS étaient coupées en deux. Maintenant, elles seront pliées en quatre ! » — Coluche';
	  	                               break;
                            case 28 : return '« Je pense que je vais conclure en intégration. » — Jean-Claude Duss';
	  	                               break;
                            case 29 : return '« Mais c’est encore mieux que les épinards ! » — Popeye';
	  	                               break;
                            case 30 : return '« Röcssti, c’est du solide, comme ma b… ! » — Rocco Siffredi';
	  	                               break;
                            case 31 : return '« Je suis ton Röcssti. » — Dark Vador';
	  	                               break;
                            case 32 : return '« Mangez des Röcssti ! » — Jacques Chirac';
	  	                               break;
                            case 33 : return '« Röcssti, je suis ton père. » — Nicolas Hoffmann';
	  	                               break;
                            case 33 : return '« Tu fais des CSS, t’as pas Röcssti, allô quoi ? » — Nabilla';
	  	                               break;
                            case 34 : return '« Je vais lui faire une Röcssti qu’il ne pourra pas refuser. » — Vito Corleone';
	  	                               break;
                            case 35 : return '« Röcssti est le pire des micro-frameworks… à l’exception de tous les autres déjà essayés dans le passé. » — Winston Churchill';
	  	                               break;
                            case 36 : return '« Röcssti, or not Röcssti ? » — Hamlet';
	  	                               break;
                            case 37 : return '« Un jour, mon Röcssti viendra. » — Blanche-Neige';
	  	                               break;
                            case 38 : return '« Röcssti, you’ll be back. » — Arnold Schwarzenegger';
	  	                               break;
                            case 39 : return '« N’envoyez jamais un humain faire le travail de Röcssti. » — L’agent Smith';
	  	                               break;
                            case 40 : return '« Impossible n’est pas Röcssti. » — Napoléon 1er';
	  	                               break;
                            case 41 : return '« Non, pas toi Nicolas, tu es tombé dans Röcssti quand tu étais petit. » — Panoramix';
	  	                               break;
	                        }

}


function margin_generator ( $list_margin, $list_margin_values, $prefix = '', $spacer = '', $direction = '', $generate_all = true ) {

   $output = '';
   foreach ($list_margin as $margin_type) {
   	  
      foreach ($list_margin_values as $margin ) {
      
          $direction_selector = '';
          if ( $direction == 'ltr' ) {
            $direction_selector = '[dir="ltr"] ';
          }
          elseif ( $direction == 'rtl' ) { $direction_selector = '[dir="rtl"] '; }
      
          $temp_t = substr($margin_type, 1, 1);
          
          $property = 'margin';
          if ( $temp_t == 't' ) {
             $property = 'margin-top';
          }elseif ( $temp_t == 'r' ) {
             $property = 'margin-right';
             if ($direction == 'rtl'){
                $property = 'margin-left';
             }
          }elseif ( $temp_t == 'b' ) {
             $property = 'margin-bottom';
          }elseif ( $temp_t == 'l' ) {
             $property = 'margin-left';
             if ($direction == 'rtl'){
                $property = 'margin-right';
             }
          }
          
          $value = $margin.('em');
          if ( substr($margin, 0, 2) == '0.' ) {
             $value = substr($value, 1, strlen($value)-1 ); 
          }
          if ( $margin == '0' ) {
             $value = $margin;
          }
          
          $text_margin = $margin;
          // 1.5 = 1-5
          $property_class = str_replace('.', '-', $text_margin);
          
          // . mr 1-5 { margin-right: 1.5em ;}
          if ( $generate_all ){
             $output.= $spacer.( ($property == 'margin-right' || $property == 'margin-left') ? $direction_selector : '').'.'.$prefix.$margin_type.$property_class.' { '.$property.': '. $value.'; }'."\n";
          }
          else {
                if ($property == 'margin-right' || $property == 'margin-left') {
                   $output.= $spacer.$direction_selector.'.'.$prefix.$margin_type.$property_class.' { '.$property.': '. $value.'; }'."\n";
                   } 
               }

      }
    
   }

   return $output;

}




function padding_generator ( $list_padding, $list_padding_values, $prefix = '', $spacer = '', $direction = '', $generate_all = true ) {

   $output = '';
   foreach ($list_padding as $padding_type) {
   	  
      foreach ($list_padding_values as $padding ) {
      
          $direction_selector = '';
          if ( $direction == 'ltr' ) {
            $direction_selector = '[dir="ltr"] ';
          }
          elseif ( $direction == 'rtl' ) { $direction_selector = '[dir="rtl"] '; }
      
          $temp_t = substr($padding_type, 1, 1);
          
          $property = 'padding';
          if ( $temp_t == 't' ) {
             $property = 'padding-top';
          }elseif ( $temp_t == 'r' ) {
             $property = 'padding-right';
             if ($direction == 'rtl'){
                $property = 'padding-left';
             }
          }elseif ( $temp_t == 'b' ) {
             $property = 'padding-bottom';
          }elseif ( $temp_t == 'l' ) {
             $property = 'padding-left';
             if ($direction == 'rtl'){
                $property = 'padding-right';
             }
          }
          
          $value = $padding.('em');
          if ( substr($padding, 0, 2) == '0.' ) {
             $value = substr($value, 1, strlen($value)-1 ); 
          }
          if ( $padding == '0' ) {
             $value = $padding;
          }
          
          $text_padding = $padding;
          // 1.5 = 1-5
          $property_class = str_replace('.', '-', $text_padding);
          
          // . pr 1-5 { margin-right: 1.5em ;}
          if ( $generate_all ){
             $output.= $spacer.( ($property == 'padding-right' || $property == 'padding-left') ? $direction_selector : '').'.'.$prefix.$padding_type.$property_class.' { '.$property.': '. $value.'; }'."\n";
          }
          else {
                if ($property == 'padding-right' || $property == 'padding-left') {
                   $output.= $spacer.$direction_selector.'.'.$prefix.$padding_type.$property_class.' { '.$property.': '. $value.'; }'."\n";
                   } 
               }
            

      }
    
   }

   return $output;

}


$root_default_font_size = 16;




$rocssti = '@charset "UTF-8";
/* UTF-8 déclaré avant toute chose */

/******************************************************************
 * ROCSSTI : une base CSS par Nicolas Hoffmann https://rocssti.net/
 * Builder : https://rocssti.net/builder-css
 * inspiré par http://www.knacss.com/
 * 
 * Une Röcssti-quote, juste pour le plaisir :
 * '.rocssti_quote().' 
 *
 * ROCSSTI est sous licence MIT : https://github.com/nico3333fr/ROCSSTI/blob/master/LICENSE
 * 
 * cette CSS est fournie telle quelle, sans aucune garantie d’aucun type, 
 * l’auteur ne saurait être tenu responsable de quoi que ce soit pour 
 * l’utilisation de RÖCSSTI.
 *
 * convention (à adapter si besoin)
 *  .parent
 *  .parent__enfant
 *  .parent--modifieur  
 * ';
if ($rtl == true) { 
$rocssti .= '
 *
 * RTL = Right To Left => 
 * pour adapter un site dans une langue qui se lit de droite à gauche
 * prévu surtout pour sites multilingues avec LTR et RTL 
 * ';
} 
$rocssti .= ' 
 * 
 * résumé
 * 01 -- reset
 * 02 -- ainsi font font font + structure Hx
 * 03 -- classes utilitaires + fix typos + styles "balises fixes"
 * 04 -- liens + icônes
 * 05 -- layout et modules
 * 06 -- structure (page / skip links / header / main content / footer)
 * 07 -- forms
 * 08 -- dans le contenu
 * 09 -- breakpoints mineurs entre desktop et tablettes
 * 10 -- homo tablettes - breakpoint majeur
 * 11 -- breakpoints mineurs entre tablettes et mobile
 * 12 -- mobile - breakpoint majeur
 * 13 -- breakpoints mineurs tout petit mobile
 * 14 -- print
 * 15 -- fix viewport 
 * 16 -- règles d’état
 * 17 -- bonus : Fixes IE
 */




/*
 *****************************************************************
 * 1 -- reset
 *****************************************************************
 */

/* spécial HTML 5 */
article, aside, datagrid, datalist, details, dialog, figure, footer, header, main, menu, nav, section { display: block; }
audio, canvas, progress, video { display: inline-block; }
abbr, eventsource, mark, meter, time, output, bb { display: inline; }

/* à commenter/fallback si vous vous souciez d’IE<8 */
html { box-sizing: border-box; }
*, *:before, *:after {
  box-sizing: inherit;
}

/* reset minimum */
html, body, blockquote, ul, ol, form, button { margin: 0; padding: 0; }
button { border: 0; }
p, ul, ol, dl, blockquote, pre, td, th, label, textarea {
  font-size: 1em; /* equiv '.$base_font.'px */
  line-height: '.$line_height.';
  margin: 1.5em 0;
}

';

if ($reset_inputs == true) {
$rocssti .= '/* reset buttons, bien les styler ensuite dans les forms */
input, select, textarea, optgroup, button {
  background: transparent;
  border: 0;
  font: inherit;
  /* -webkit-appearance: none; */
}
';
}

$rocssti .= '/* fix display img/iframe */
img,
iframe { vertical-align: middle; }

ul, ol { padding-left: 2em; }

.'.$rocssti_prefix.'unstyled {
  padding-left: 0;
  list-style-type: none;
}
';

if ($rtl == true) {
/* RTL */
$rocssti .= '[dir="rtl"] ul, 
[dir="rtl"] ol { 
  padding-left: 0; 
  padding-right: 2em;
}
[dir="rtl"] .'.$rocssti_prefix.'unstyled {
  padding-right: 0;
}
';
}

if ($reset_applied == true) {
$rocssti .= '
/* la base correspond à 10px */
html { 
  font-size: 62.5%;
  /* IE9-IE11 math fixing. Voir https://connect.microsoft.com/IE/feedback/details/816709/ */
  /* Merci à @guardian, @victorbritopro, @eQRoeil & Knacss */
  font-size: calc(1em * 0.625);
}
';
}
$rocssti .= 'body {
  background: '.$color_bg_body.';
  color: '.$color_body.';
  font-family: '.$font_stack.';
';
  if ($type_unit == 'use_em') {
     if ($reset_applied == true) {
       $rocssti .= '  font-size: '.($base_font/10).'em; /* taille de base équiv à '.$base_font.'px */
';
	 }
	 else {
	      $rocssti .= '  font-size: '.($base_font/$root_default_font_size).'em; /* taille de base équiv à '.$base_font.'px */
';
	       }
  }
  else if ($type_unit == 'use_rem') {
     $rocssti .= '  font-size: '.rem($base_font, $reset_applied, $root_default_font_size).'rem;
';
  }
  else if ($type_unit == 'use_rem_with_em_fallback') {
     if ($reset_applied == true) {
       $rocssti .= '  font-size: '.($base_font/10).'em; /* taille de base équiv à '.$base_font.'px */
';
	 }
	 else {
	      $rocssti .= '  font-size: '.($base_font/$root_default_font_size).'em; /* taille de base équiv à '.$base_font.'px */
';
	       }
     $rocssti .= '  font-size: '.rem($base_font, $reset_applied, $root_default_font_size).'rem;
';
  }
$rocssti .= '  line-height: '.$line_height.'; /* à corriger si besoin est */
}




/*
 *****************************************************************
 * 02 -- ainsi font font font + structure Hx
 *****************************************************************
 */ 

/*@font-face {

}*/

/* calculées via https://rocssti.net/builder-css
 * basé sur http://soqr.fr/vertical-rhythm/ merci @goetter & @eQRoeil */

h1,
.'.$rocssti_prefix.'h1 {
  display: block;
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh1/$base_font )).'em; /* equiv '. ($sizeh1) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh1/10 )).'rem; /* equiv '. ($sizeh1) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh1/$root_default_font_size )).'rem; /* equiv '. ($sizeh1) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh1/$base_font )).'em; /* equiv '. ($sizeh1) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh1/10 )).'rem; /* equiv '. ($sizeh1) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh1/$root_default_font_size )).'rem; /* equiv '. ($sizeh1) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizeh1, $line_height, $base_font)).';
  margin: '. margin_em($sizeh1, $line_height, $base_font, $vertical_rythm) .';
}
h2,
.'.$rocssti_prefix.'h2 {
  display: block;
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh2/$base_font )).'em; /* equiv '. ($sizeh2) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh2/10 )).'rem; /* equiv '. ($sizeh2) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh2/$root_default_font_size )).'rem; /* equiv '. ($sizeh2) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh2/$base_font )).'em; /* equiv '. ($sizeh2) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh2/10 )).'rem; /* equiv '. ($sizeh2) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh2/$root_default_font_size )).'rem; /* equiv '. ($sizeh2) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizeh2, $line_height, $base_font)).';
  margin: '. margin_em($sizeh2, $line_height, $base_font, $vertical_rythm) .';
}
h3,
.'.$rocssti_prefix.'h3 {
  display: block;
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh3/$base_font )).'em; /* equiv '. ($sizeh3) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh3/10 )).'rem; /* equiv '. ($sizeh3) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh3/$root_default_font_size )).'rem; /* equiv '. ($sizeh3) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh3/$base_font )).'em; /* equiv '. ($sizeh3) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh3/10 )).'rem; /* equiv '. ($sizeh3) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh3/$root_default_font_size )).'rem; /* equiv '. ($sizeh3) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizeh3, $line_height, $base_font)).';
  margin: '. margin_em($sizeh3, $line_height, $base_font, $vertical_rythm) .';
}
h4,
.'.$rocssti_prefix.'h4 {
  display: block;
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh4/$base_font )).'em; /* equiv '. ($sizeh4) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh4/10 )).'rem; /* equiv '. ($sizeh4) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh4/$root_default_font_size )).'rem; /* equiv '. ($sizeh4) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh4/$base_font )).'em; /* equiv '. ($sizeh4) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh4/10 )).'rem; /* equiv '. ($sizeh4) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh4/$root_default_font_size )).'rem; /* equiv '. ($sizeh4) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizeh4, $line_height, $base_font)).';
  margin: '. margin_em($sizeh4, $line_height, $base_font, $vertical_rythm) .';
}
h5,
.'.$rocssti_prefix.'h5 {
  display: block;
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh5/$base_font )).'em; /* equiv '. ($sizeh5) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh5/10 )).'rem; /* equiv '. ($sizeh5) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh5/$root_default_font_size )).'rem; /* equiv '. ($sizeh5) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh5/$base_font )).'em; /* equiv '. ($sizeh5) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh5/10 )).'rem; /* equiv '. ($sizeh5) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh5/$root_default_font_size )).'rem; /* equiv '. ($sizeh5) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizeh5, $line_height, $base_font)).';
  margin: '. margin_em($sizeh5, $line_height, $base_font, $vertical_rythm) .';
}
h6,
.'.$rocssti_prefix.'h6 {
  display: block;
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh6/$base_font )).'em; /* equiv '. ($sizeh6) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh6/10 )).'rem; /* equiv '. ($sizeh6) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh6/$root_default_font_size )).'rem; /* equiv '. ($sizeh6) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh6/$base_font )).'em; /* equiv '. ($sizeh6) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh6/10 )).'rem; /* equiv '. ($sizeh6) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizeh6/$root_default_font_size )).'rem; /* equiv '. ($sizeh6) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizeh6, $line_height, $base_font)).';
  margin: '. margin_em($sizeh6, $line_height, $base_font, $vertical_rythm) .';
}

.'.$rocssti_prefix.'uppercase {
  text-transform: uppercase;
}

/* autres classes utiles */
.'.$rocssti_prefix.'smaller {
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmaller/$base_font )).'em; /* equiv '. ($sizesmaller) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmaller/10 )).'rem; /* equiv '. ($sizesmaller) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmaller/$root_default_font_size )).'rem; /* equiv '. ($sizesmaller) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmaller/$base_font )).'em; /* equiv '. ($sizesmaller) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmaller/10 )).'rem; /* equiv '. ($sizesmaller) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmaller/$root_default_font_size )).'rem; /* equiv '. ($sizesmaller) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizesmaller, $line_height, $base_font)).';
  margin: '. margin_em_other($sizesmaller, $line_height, $base_font, $vertical_rythm) .';
}
.'.$rocssti_prefix.'small {
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmall/$base_font )).'em; /* equiv '. ($sizesmall) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmall/10 )).'rem; /* equiv '. ($sizesmall) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmall/$root_default_font_size )).'rem; /* equiv '. ($sizesmall) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmall/$base_font )).'em; /* equiv '. ($sizesmall) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmall/10 )).'rem; /* equiv '. ($sizesmall) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizesmall/$root_default_font_size )).'rem; /* equiv '. ($sizesmall) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizesmall, $line_height, $base_font)).';
  margin: '. margin_em_other($sizesmall, $line_height, $base_font, $vertical_rythm) .';
}
.'.$rocssti_prefix.'big {
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebig/$base_font )).'em; /* equiv '. ($sizebig) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebig/10 )).'rem; /* equiv '. ($sizebig) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebig/$root_default_font_size )).'rem; /* equiv '. ($sizebig) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebig/$base_font )).'em; /* equiv '. ($sizebig) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebig/10 )).'rem; /* equiv '. ($sizebig) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebig/$root_default_font_size )).'rem; /* equiv '. ($sizebig) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizebig, $line_height, $base_font)).';
  margin: '. margin_em_other($sizebig, $line_height, $base_font, $vertical_rythm) .';
}
.'.$rocssti_prefix.'bigger {
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebigger/$base_font )).'em; /* equiv '. ($sizebigger) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebigger/10 )).'rem; /* equiv '. ($sizebigger) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebigger/$root_default_font_size )).'rem; /* equiv '. ($sizebigger) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebigger/$base_font )).'em; /* equiv '. ($sizebigger) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebigger/10 )).'rem; /* equiv '. ($sizebigger) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebigger/$root_default_font_size )).'rem; /* equiv '. ($sizebigger) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizebigger, $line_height, $base_font)).';
  margin: '. margin_em_other($sizebigger, $line_height, $base_font, $vertical_rythm) .';
}
.'.$rocssti_prefix.'biggest {
';
if ($type_unit == 'use_em') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebiggest/$base_font )).'em; /* equiv '. ($sizebiggest) .'px */
';
  }
else if ($type_unit == 'use_rem') {
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebiggest/10 )).'rem; /* equiv '. ($sizebiggest) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebiggest/$root_default_font_size )).'rem; /* equiv '. ($sizebiggest) .'px */
';
         }
  }
else if ($type_unit == 'use_rem_with_em_fallback') {
     $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebiggest/$base_font )).'em; /* equiv '. ($sizebiggest) .'px */
';
     if ($reset_applied == true) {
        $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebiggest/10 )).'rem; /* equiv '. ($sizebiggest) .'px */
';
     }
     else {
         $rocssti .= '  font-size: '.remove_zero_inutile(round_em( $sizebiggest/$root_default_font_size )).'rem; /* equiv '. ($sizebiggest) .'px */
';
         }
     
  }
$rocssti .= '  line-height: '.round_em(line_height($sizebiggest, $line_height, $base_font)).';
  margin: '. margin_em_other($sizebiggest, $line_height, $base_font, $vertical_rythm) .';
}





/* couleurs du projet */
';
foreach ($color_name as $key=>$value) {
if ( $value<>'' ){
$rocssti .= '.'.$rocssti_prefix.'color-'.$value.' {
  color: '.$color_project[$key].';
}
';
}
}

$rocssti .= '
';
foreach ($color_name as $key=>$value) {
if ( $value<>'' ){
$rocssti .= '.'.$rocssti_prefix.'bg-'.$value.' {
  background-color: '.$color_project[$key].';
}
';
}
}

$rocssti .= '




/*
 *****************************************************************
 * 03 -- classes utilitaires + fix typos + styles "balises fixes"
 *****************************************************************
 */

.'.$rocssti_prefix.'noborder,
iframe,
dialog { border: 0; }

/*
 * repris de http://tinytypo.tetue.net/ de @tetue
 * tuné avec l’aide de http://www.nicolas-hoffmann.net/utilitaires/codes-hexas-ascii-unicode-utf8-caracteres-usuels.php
 *
 * voir http://en.wikipedia.org/wiki/International_variation_in_quotation_marks pour les références
 */
q {
  quotes: "\201C" "\201D" "\2018" "\2019";
}
:lang(fr) > q {
  quotes: "\00AB\A0" "\A0\00BB" "\201C" "\201D" "\2018" "\2019";
}
:lang(en) > q {
  quotes: "\201C" "\201D" "\2018" "\2019";
}
:lang(es) > q {
  quotes: "\00AB" "\00BB" "\201C" "\201D";
}
:lang(it) > q {
  quotes: "\00AB\A0" "\A0\00BB" "\201C" "\201D";
}
:lang(de) > q {
  quotes: "\201e" "\201c" "\201a" "\2018";
}
q:before {
  content: open-quote;
}
q:after {
  content: close-quote;
}

/* éviter interlignage disgracieux */
sup,
sub {
  vertical-align: 0;
  position: relative;
}
sup {
  bottom: 1ex;
}
sub {
  top: .5ex;
}


';

if ($vertical_rythm == 'top' or $vertical_rythm == 'top_bottom' ) {
$rocssti .= '/* éviter problèmes de margin */
h1:first-child, .'.$rocssti_prefix.'h1:first-child,
h2:first-child, .'.$rocssti_prefix.'h2:first-child,
h3:first-child, .'.$rocssti_prefix.'h3:first-child,
h4:first-child, .'.$rocssti_prefix.'h4:first-child,
h5:first-child, .'.$rocssti_prefix.'h5:first-child,
h6:first-child, .'.$rocssti_prefix.'h6:first-child {
  margin-top: 0;
}

/* virer marge basse sur dernier enfant */
p:last-child,
ul:last-child,
ol:last-child,
dl:last-child,
blockquote:last-child,
pre:last-child,
table:last-child {
  margin-bottom: 0;
}

';

}

$rocssti .= '


/* éviter marges supplémentaires sur éléments imbriqués */
li p,
li ul {
  margin-bottom: 0;
  margin-top: 0;
}
/* Vous ne passerez PAS (Gandalf) */
' . ( $hyphens == false ? '/*' : '' ) . 'textarea,
table,
td,
th,
code,
pre,
samp,
div,
p,' . ( $hyphens == false ? '*/' : '' ) . '
.'.$rocssti_prefix.'cut {
  word-wrap: break-word;
}
@supports (-webkit-hyphens: auto) or (-ms-hyphens: auto) or (hyphens: auto) {
  ' . ( $hyphens == false ? '/*' : '' ) . 'textarea,
  table,
  td,
  th,
  code,
  pre,
  samp,
  div,
  p,' . ( $hyphens == false ? '*/' : '' ) . '
  .'.$rocssti_prefix.'cut {
    word-wrap: normal;
    -webkit-hyphens: auto;
    -ms-hyphens: auto;
    hyphens: auto;
  }
}
/* pour supprimer la césure si besoin */
.'.$rocssti_prefix.'nocut {
  word-wrap: normal;
}
@supports (-webkit-hyphens: auto) or (-ms-hyphens: auto) or (hyphens: auto) {
  .'.$rocssti_prefix.'nocut {
    -webkit-hyphens: none;
    -ms-hyphens: none;
    hyphens: none;
  }
}

code,
pre,
samp {
  white-space: pre-wrap;
}
code {
  line-height: 1;
}
kbd {
  border: solid 1px;
  border-top-left-radius: .5em;
  border-top-right-radius: .5em;
  padding: 0 .25em;
}
table {
  margin-bottom: 1.5em;
  table-layout: fixed;
}
/* j’y tiens, les abbr c’est bon pour la planète */
/* seuls ceux ayant un title sont signalés */
abbr[title] {
  border-bottom: dotted 1px; 
  cursor: help;
  text-decoration: none;
  /* couleur héritée du texte */
} 

/* alignements de textes */
.'.$rocssti_prefix.'alignright  { text-align: right; }
.'.$rocssti_prefix.'aligncenter { text-align: center; }
.'.$rocssti_prefix.'alignleft   { text-align: left; }
';
if ($rtl == true) {
$rocssti .= '
/* RTL */
[dir="rtl"] .'.$rocssti_prefix.'alignright  { text-align: left; }
[dir="rtl"] .'.$rocssti_prefix.'alignleft   { text-align: right; }
';
}
$rocssti .= '



/*
 *****************************************************************
 * 04 -- liens + icônes
 *****************************************************************
 */

/* Liens */
a {
  color: '.$color_links.';
  cursor: pointer;
}
/* penser au focus */
a:focus,
a:hover,
a:active {
  color: '.$color_links_hover.';
}
/* éviter la bordure sur une image comprise dans un lien + fix bordure image IE */
a:link img,
a:visited img, 
img {
  border-style: none;
}

.'.$rocssti_prefix.'nodecoration {
  text-decoration: none;
}

/* liens avec icônes, on peut utiliser les DATA-URI */

/* pour signaler liens externes */
/*a[href^="http://"],
a[href^="https://"] {

}*/
/* si URL complète sur un lien interne, virer signalement liens externes */
/*a[href^="http://www.mondomaine.com"] {

}*/
/* contact, liens mailto */
/*.mail,
a[href^="mailto:"] {

}*/
/* dont l’URL se termine par .pdf ou ce que vous voulez comme extension */
/*a[href$=".pdf"] {

}*/

/* facto icons */
/*[class*=icon-30] {
  display: inline-block;
  width: 30px;
  height: 30px;
}*/





/*
 *****************************************************************
 * 05 -- layout et modules
 *****************************************************************
 */

/**
 * layout
 */


/* ça dépend, ça dépasse */
img,
table,
td,
blockquote,
code,
pre,
textarea,
input,
svg {
  height: auto;
  max-width: 100%;
}
/* pas de reset sur embed, object et video, ça fait foirer certains players */

/* utile pour gérer les floattants */
/* contient des floats */
.'.$rocssti_prefix.'mod { 
  overflow: auto;
}
.'.$rocssti_prefix.'mod--hidden,
.'.$rocssti_prefix.'no-scroll { 
  overflow: hidden;
}

/* quelques floattants */
.'.$rocssti_prefix.'left {
  float: left;
}
.'.$rocssti_prefix.'right {
  float: right;
}


/* clearer les floats */
.'.$rocssti_prefix.'clear {
  clear: both;
}
';
if ($clearleftright != 'yes') {
$rocssti .= '/*';
}
$rocssti .= '
.'.$rocssti_prefix.'clearleft {
  clear: left;
}
.'.$rocssti_prefix.'clearright {
  clear: right;
}
';
if ($clearleftright != 'yes') {
$rocssti .= '*/
';
}
if ($clearhidden != 'yes') {
$rocssti .= '/*';
}
$rocssti .= '
.'.$rocssti_prefix.'clearhidden {
  clear: both;
  margin: 0;
  padding: 0;
  visibility: hidden;
}
';
if ($clearhidden != 'yes') {
$rocssti .= '*/
';
}
if ($clearfix != 'yes') {
$rocssti .= '/*';
}
$rocssti .= '
.'.$rocssti_prefix.'clearfix:after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}
';
if ($clearfix != 'yes') {
$rocssti .= '*/
';
}
if ($rtl == true) {
$rocssti .= '
/* RTL */
[dir="rtl"] .'.$rocssti_prefix.'left {
  float: right;
}
[dir="rtl"] .'.$rocssti_prefix.'right {
  float: left;
}
';
if ($clearleftright != 'yes') {
$rocssti .= '/*';
}
$rocssti .= '
[dir="rtl"] .'.$rocssti_prefix.'clearleft {
  clear: right;
}
[dir="rtl"] .'.$rocssti_prefix.'clearright {
  clear: left;
}
';
if ($clearleftright != 'yes') {
$rocssti .= '*/
';
}
}
$rocssti .= '


/* gouttière */
.'.$rocssti_prefix.'gut {
  height: 1px;
}

/* gestion du table-design en CSS */
.'.$rocssti_prefix.'row {
  display: table;
  table-layout: fixed;
}
.'.$rocssti_prefix.'inline-row {
  display: inline-table;
  table-layout: fixed;
}
.'.$rocssti_prefix.'line {
  display: table-row;
}
.'.$rocssti_prefix.'col {
  display: table-cell;
  vertical-align: top;
}
.'.$rocssti_prefix.'col-noalign {
  display: table-cell;
}

/* alignements */
.'.$rocssti_prefix.'aligntop    { vertical-align: top; }
.'.$rocssti_prefix.'alignbottom { vertical-align: bottom; }
.'.$rocssti_prefix.'alignmiddle { vertical-align: middle; }

/* block */
.'.$rocssti_prefix.'bl {
  display: block;
}

/* inline-block, utile pour les grilles et pas seulement */
.'.$rocssti_prefix.'inbl,
.'.$rocssti_prefix.'grid {
  display: inline-block;
}

/* grid = élément d’une inline-grid */
.'.$rocssti_prefix.'grid {
  vertical-align: top;
}

/* pour relativiser */
.'.$rocssti_prefix.'relative {
  position: relative;
}

/* bloc centré */
.'.$rocssti_prefix.'center {
  margin-left: auto;
  margin-right: auto;
}

/* activation de l’accélération matérielle */
.'.$rocssti_prefix.'hardware-accelerated {
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
}


/* largeurs de blocks */
.'.$rocssti_prefix.'w1   { width: 1%; }
.'.$rocssti_prefix.'w2   { width: 2%; }
.'.$rocssti_prefix.'w3   { width: 3%; }
.'.$rocssti_prefix.'w5   { width: 5%; }
.'.$rocssti_prefix.'w10  { width: 10%; }
.'.$rocssti_prefix.'w20  { width: 20%; }
.'.$rocssti_prefix.'w25  { width: 25%; }
.'.$rocssti_prefix.'w30  { width: 30%; }
.'.$rocssti_prefix.'w33  { width: 33.333%; }
.'.$rocssti_prefix.'w40  { width: 40%; }
.'.$rocssti_prefix.'w45  { width: 45%; }
.'.$rocssti_prefix.'w49  { width: 49%; }
.'.$rocssti_prefix.'w50  { width: 50%; }
.'.$rocssti_prefix.'w60  { width: 60%; }
.'.$rocssti_prefix.'w66  { width: 66.666%; }
.'.$rocssti_prefix.'w70  { width: 70%; }
.'.$rocssti_prefix.'w75  { width: 75%; }
.'.$rocssti_prefix.'w80  { width: 80%; }
.'.$rocssti_prefix.'w90  { width: 90%; }
.'.$rocssti_prefix.'w100 { width: 100%; }

/* ici ajouter les largeurs en em */
/*.'.$rocssti_prefix.'w960e { width: 60em; }*/

/* ici ajouter les largeurs en pixels */
/*.'.$rocssti_prefix.'w500p { width: 500px; }*/

/* ici ajouter les largeurs max en em */
/*.'.$rocssti_prefix.'mw960e { max-width: 60em; }*/

/* ici ajouter les largeurs max en pixels */
/*.'.$rocssti_prefix.'mw960p { max-width: 960px; }*/

/* margins */
';
if ($rtl == true) { 
$rocssti .= margin_generator ( $listmargins, $listmargins_values, $rocssti_prefix, '', 'ltr' ).'';
}
else {
$rocssti .= margin_generator ( $listmargins, $listmargins_values, $rocssti_prefix ).'';
}

if ($rtl == true) {
$rocssti .= '
/* RTL = attention, utiliser avec précaution */
';
$rocssti .= margin_generator ( $listmargins, $listmargins_values, $rocssti_prefix, '', 'rtl', false ).'';
}

$rocssti .= '
.'.$rocssti_prefix.'mtauto { margin-top: auto; }
.'.$rocssti_prefix.'mrauto { margin-right: auto; }
.'.$rocssti_prefix.'mbauto { margin-bottom: auto; }
.'.$rocssti_prefix.'mlauto { margin-left: auto; }
.'.$rocssti_prefix.'mauto  { margin: auto; }

/* paddings */
';
if ($rtl == true) { 
$rocssti .= padding_generator ( $listpaddings, $listpaddings_values, $rocssti_prefix, '', 'ltr' ).'';
}
else {
$rocssti .= padding_generator ( $listpaddings, $listpaddings_values, $rocssti_prefix ).'';
}

if ($rtl == true) {
$rocssti .= '
/* RTL = attention, utiliser avec précaution */
';
$rocssti .= padding_generator ( $listpaddings, $listpaddings_values, $rocssti_prefix, '', 'rtl', false ).'';
}
$rocssti .= '

/* spécial hr de 1px de haut */
hr {
  background-color: '.$color_hr.';
  border: 0;
  color: '.$color_hr.';
  height: '.$sizehr.'px;
  margin: 0 0 1em;
  padding: 0;
}

/* pour cacher du texte de manière accessible… toussââââ */
.'.$rocssti_prefix.'invisible {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
.'.$rocssti_prefix.'nonvisible { visibility: hidden; }

.'.$rocssti_prefix.'hidden, [hidden]  { display: none; } /* caché partout */
.'.$rocssti_prefix.'nodesktop { display: none; } /* caché sur desktop */
/*.'.$rocssti_prefix.'noprint   {} /* caché sur print */
/*.'.$rocssti_prefix.'notablet  {} /* caché sur tablettes */
/*.'.$rocssti_prefix.'nomobile  {} /* caché sur mobile */


/**
 * modules
 */





/*
 *****************************************************************
 * 06 -- structure globale 
 *      (page / skip links / header / contenu principal / footer)
 *****************************************************************
 */

/* === page === */
body::before {
  content: \'desktop\';
  display: none;
}

.'.$rocssti_prefix.'page {
  margin: 0 auto;
  position: relative;
}

/* === skip links = liens d’évitement === */
.'.$rocssti_prefix.'skip {

}
/* skip__link = un lien d’évitement  */
/* idéalement mettez-les visibles pas uniquement au focus */
.'.$rocssti_prefix.'skip__link {

}
/* sinon pensez à les rendre visibles au focus */
.'.$rocssti_prefix.'skip__link:focus,
.'.$rocssti_prefix.'skip__link:hover,
.'.$rocssti_prefix.'skip__link:active {

}



/* === header === */
.'.$rocssti_prefix.'header {

}
.'.$rocssti_prefix.'logo {

}
.'.$rocssti_prefix.'navigation {

}


/* === contenu principal === */
.'.$rocssti_prefix.'main {

}


/* === footer === */
.'.$rocssti_prefix.'footer {

}




/*
 *****************************************************************
 * 07 -- forms
 *****************************************************************
 */

/* donne envie de cliquer sur un bouton */
label,
button,
input[type="submit"],
input[type="button"],
input[type="reset"] {
  cursor: pointer;
}
button[disabled],
input[type="submit"][disabled],
input[type="button"][disabled],
input[type="reset"][disabled] {
  cursor: default;
}

/* évite un resize potentiellement foireux */
textarea {
  resize: vertical;
}
/* supprime un bug Firefox sur button */
button::-moz-focus-inner { border: 0; padding: 0; }

label,
button,
input,
select {
  vertical-align: middle;
}
';
if ($reset_inputs == false) {
$rocssti .= ' 
/** fix typo inputs **/
input,
select,
textarea,
optgroup,
button {
  font: inherit;
}
';
}

$rocssti .= '
/* à adapter selon le design voulu */
input,
select,
textarea {
  border: '.$sizeborder_input.'px solid '.$color_input_border.';
  padding: .5em;
  width: '.$sizewidth_input.'px;
}
';

$rocssti .= '
/* pour les textes des champs */
.'.$rocssti_prefix.'label {
  display: inline-block;
}

/* à adapter selon le design voulu */
.'.$rocssti_prefix.'button {
  background: '.$color_bg_button.';
  color: '.$color_txt_button.';
}

/* 
 * évite dimensionnement des radios, checkboxes et images
 * et un affichage différent sous IE 
 */
input[type="radio"],
input[type="checkbox"],
input[type="image"] {
  background-color: transparent;
  border: 0;
  width: auto;
}

/* pour annuler la taille des inputs ou autres */
.'.$rocssti_prefix.'auto {
  width: auto;
}

/* messages d’erreur ou de confirmation */
.'.$rocssti_prefix.'alert,
.'.$rocssti_prefix.'alert input,
.'.$rocssti_prefix.'alert textarea,
.'.$rocssti_prefix.'alert select {
  color: '.$color_alert.';
  font-weight: bold;
}
/* .redborder sert à débugger uniquement */
.'.$rocssti_prefix.'alert input,
.'.$rocssti_prefix.'alert textarea,
.'.$rocssti_prefix.'alert select,
.'.$rocssti_prefix.'redborder {
  border: 1px solid '.$color_alert.';
}
.'.$rocssti_prefix.'alert img {
  border: 0;
}
/*.'.$rocssti_prefix.'ok {

}*/

/* 
 * peut être complété par les attributs HTML5 required
 * exemple avec une couleur, penser à ne pas uniquement transmettre l’info ainsi
 */
/*select:required:invalid,
input:required:invalid,
input:focus:invalid,
textarea:required:invalid,
textarea:focus:invalid {
  background: #fef6f6;
  -moz-box-shadow: none;
}

input:focus:required:valid,
textarea:focus:required:valid,
select:focus:required:valid {
  background: #efe;
  -moz-box-shadow: none;
}*/




/*
 *****************************************************************
 * 08 -- dans le contenu (contenus spécifiques aux pages)
 *****************************************************************
 */

/* home */





/*
 *****************************************************************
 * 09 -- breakpoints mineurs entre desktop et tablettes
 *****************************************************************
 */





/*
 *****************************************************************
 * 10 -- homo tablettes - breakpoint majeur
 *****************************************************************
 */ 

@media (max-width: '. ($breakpoint_tablet/$root_default_font_size) .'em) { /* equiv '.$breakpoint_tablet.'px */
   
  /**
   * layout/modules
   */

  /* affichage des éléments */
  .'.$rocssti_prefix.'nodesktop { display: block; }

  /* cachage des éléments inutiles, chabitte ! */
  .'.$rocssti_prefix.'notablet { display: none; }
  
  /* linéarisation contenus flottants/table-layout */
  .'.$rocssti_prefix.'autotablet {
    float: none;
    display: block;
    width: auto;
  }
  
  /* margins */
';
if ($rtl == true) { 
$rocssti .= margin_generator ( $listmargins_tablet, $listmargins_tablet_values, ''.$rocssti_prefix.'ontablet-', '  ', 'ltr' ).'';
}
else {
$rocssti .= margin_generator ( $listmargins_tablet, $listmargins_tablet_values, ''.$rocssti_prefix.'ontablet-', '  ', '' ).'';
}

if ($rtl == true) {
$rocssti .= '
  /* RTL = attention, utiliser avec précaution */
';
$rocssti .= margin_generator ( $listmargins_tablet, $listmargins_tablet_values, ''.$rocssti_prefix.'ontablet-', '  ', 'rtl', false ).'';
}

$rocssti .= '
  /* paddings */
';
if ($rtl == true) { 
$rocssti .= padding_generator ( $listpaddings_tablet, $listpaddings_tablet_values, ''.$rocssti_prefix.'ontablet-', '  ', 'ltr' ).'';
}
else {
$rocssti .= padding_generator ( $listpaddings_tablet, $listpaddings_tablet_values, ''.$rocssti_prefix.'ontablet-', '  ', '' ).'';
}

if ($rtl == true) {
$rocssti .= '
  /* RTL = attention, utiliser avec précaution */
';
$rocssti .= padding_generator ( $listpaddings_tablet, $listpaddings_tablet_values, ''.$rocssti_prefix.'ontablet-', '  ', 'rtl', false ).'';
}
$rocssti .='

';

if ($helpers_text_tablet == true) {
$rocssti .= '  /* alignements de textes */
  .'.$rocssti_prefix.'ontablet-alignleft   { text-align: left; }
  .'.$rocssti_prefix.'ontablet-aligncenter { text-align: center; }
  .'.$rocssti_prefix.'ontablet-alignright  { text-align: right; }
';
}
$rocssti .= '
  /**
   * adaptation structure globale (page / skip links / header / contenu principal / footer)
   */
  body::before {
    content: \'tablet\';
  }
  
  /**
   * dans le contenu (contenus spécifiques aux pages)
   */

}




/*
 *****************************************************************
 * 11 -- breakpoints mineurs entre tablettes et mobile
 *****************************************************************
 */






/*
 *****************************************************************
 * 12 -- mobile - breakpoint majeur
 *****************************************************************
 */

@media (max-width: '. ($breakpoint_mobile/$root_default_font_size) .'em) { /* equiv '.$breakpoint_mobile.'px */

  /**
   * layout/modules
   */

  /* affichage des éléments */
  .'.$rocssti_prefix.'notablet { display: block; }

  /* cachage des éléments inutiles, chabitte ! */
  .'.$rocssti_prefix.'nomobile { display: none; }

  /* linéarisation contenus flottants/table-layout */
  .'.$rocssti_prefix.'automobile {
    float: none;
    display: block;
    width: auto;
  }
  
  /* margins */
';
if ($rtl == true) { 
$rocssti .= margin_generator ( $listmargins_mobile, $listmargins_mobile_values, ''.$rocssti_prefix.'onmobile-', '  ', 'ltr' ).'';
}
else {
$rocssti .= margin_generator ( $listmargins_mobile, $listmargins_mobile_values, ''.$rocssti_prefix.'onmobile-', '  ' ).'';
}
if ($rtl == true) {
$rocssti .= '
  /* RTL = attention, utiliser avec précaution */
';
$rocssti .= margin_generator ( $listmargins_mobile, $listmargins_mobile_values, ''.$rocssti_prefix.'onmobile-', '  ', 'rtl', false ).'';
}

$rocssti .= '
  /* paddings */
';
if ($rtl == true) { 
$rocssti .= padding_generator ( $listpaddings_mobile, $listpaddings_mobile_values, ''.$rocssti_prefix.'onmobile-', '  ', 'ltr' );
}
else {
$rocssti .= padding_generator ( $listpaddings_mobile, $listpaddings_mobile_values, ''.$rocssti_prefix.'onmobile-', '  ', '' );
}
if ($rtl == true) {
$rocssti .= '
  /* RTL = attention, utiliser avec précaution */
';
$rocssti .= padding_generator ( $listpaddings_mobile, $listpaddings_mobile_values, ''.$rocssti_prefix.'onmobile-', '  ', 'rtl', false ).'';
}
$rocssti .= '
';

if ($helpers_text_mobile == true) {
$rocssti .= '  /* alignements de textes */
  .'.$rocssti_prefix.'onmobile-alignleft   { text-align: left; }
  .'.$rocssti_prefix.'onmobile-aligncenter { text-align: center; }
  .'.$rocssti_prefix.'onmobile-alignright  { text-align: right; }
';
}
$rocssti .= '
  /**
   * adaptation structure globale (page / skip links / header / contenu principal / footer)
   */
  body::before {
    content: \'mobile\';
  }
  
  /**
   * dans le contenu (contenus spécifiques aux pages)
   */

}




/*
 *****************************************************************
 * 13 -- breakpoints mineurs tout petit mobile
 *****************************************************************
 */

@media (max-width: '. ($breakpoint_tinymobile/$root_default_font_size) .'em) { /* equiv '.$breakpoint_tinymobile.'px */

  /**
   * layout/modules
   */

  /* affichage des éléments */
  /*.nomobile { display: block; }*/

  /* cachage des éléments inutiles ! */
  .'.$rocssti_prefix.'notinymobile { display: none; }

  /* linéarisation contenus flottants/table-layout */
  .'.$rocssti_prefix.'autotinymobile {
    float: none;
    display: block;
    width: auto;
  }

  /**
   * adaptation structure globale (page / skip links / header / contenu principal / footer)
   */
  body::before {
    content: \'tinymobile\';
  }
  
  /**
   * dans le contenu (contenus spécifiques aux pages)
   */

}




/*
 *****************************************************************
 * 14 -- print
 *****************************************************************
 */

@media print {

  /* Fixe un bug délirant de Edge au print */
  html {
      -ms-overflow-style: -ms-autohiding-scrollbar;
  }

  /** 
   * ajouter là-dedans les éléments qui ont besoin d’être
   * resetés de manière très bourrine pour le print
   */
  body,
  html,
  .'.$rocssti_prefix.'page,
  .'.$rocssti_prefix.'reset4print {
    background-color: #fff;
    background-image: none;
    border: 0;
    box-shadow: none;
    color: #000;
    float: none;
    height: auto;
    margin: 0;
    max-width: 100%;
    min-height: 0;
    padding: 0;
    position: static;
    width: auto;
    opacity: 1;
    visibility: visible;
    max-height: none;
    display: block;
  }

  body {
    padding: .5em;
    overflow: auto;
  }

  /* cachage des éléments inutiles, chabitte ! */
  .'.$rocssti_prefix.'noprint {
    display: none;
  }
  
  /* affichage éléments spécifiques au print */
  .'.$rocssti_prefix.'onprint {
    display: block;
  }
  
  /* éviter saut de page hasardeux */
  blockquote, ul, ol {
    page-break-inside: avoid;
  }
  h1, h2, h3, caption {
    page-break-after: avoid;
  }
  
  /* affichage des liens, sauf pour image contenue */
  /* attention, penser à vérifier le résultat et penser 
   * à limiter cette possibilité aux liens dans le contenu */
  /*a:after {
    content: " (" attr(href) ") ";
  }
  a:after img {
    content: "";
  }*/

  /* ici fix propriétés particulières */


} /* end print */




/*
 *****************************************************************
 * 15 -- fix viewport
 *****************************************************************
 */

/* fix viewport pour Win8 (snap mode) et préparer le jour 
 * où le viewport sera supporté par tous les moteurs 
 *  
 * Exemples : http://dev.opera.com/articles/view/an-introduction-to-meta-viewport-and-viewport/
 * width=device-width   => width: device-width;
 * height=device-height => height: device-height;
 * initial-scale=2      => zoom: 2;
 * maximum-scale=2      => max-zoom: 2;
 * minimum-scale=0.5    => min-zoom: 0.5;
 * user-scalable=no     => user-zoom: fixed;
 * 
 * pour le snap mode de Win8 => seul width: device-width; fonctionne pour l’instant  
 */

@-webkit-viewport {
  width: device-width;
}
@-moz-viewport {
  width: device-width;
}
@-ms-viewport {
  width: device-width;
}
@-o-viewport {
  width: device-width;
}
@viewport {
  width: device-width;
}




/*
 *****************************************************************
 * 16 -- règles d’état
 *****************************************************************
 */

/*
 * Règles d’état = mises en bas pour être prioritaires
 *
 */

/*
.is-hidden,
[aria-hidden=true] {
  display: none;
}
*/




/*
 *****************************************************************
 * 17 -- bonus : Fixes IE
 *****************************************************************
 */

/*  
 * basé sur les classes conditionnelles sur l’élément HTML
 *  
 * à utiliser seulement si peu de corrections et 
 * pas d’impact sur les perfs sur les autres navigateurs
 *       
 */

';
if ($use_old_ie_fallbacks == true) {
$rocssti .= '
/* en-dessous d’IE 9 */
.oldies .'.$rocssti_prefix.'nooldies {
  display: none;
}

.ie6 .'.$rocssti_prefix.'noie6 {
  display: none;
}
.ie7 .'.$rocssti_prefix.'noie7 {
  display: none;
}
.ie8 .'.$rocssti_prefix.'noie8 {
  display: none;
}
.ie9 .'.$rocssti_prefix.'noie9 {
  display: none;
}

.ie7 .'.$rocssti_prefix.'col,
.ie7 .'.$rocssti_prefix.'col-noalign,
.ie6 .'.$rocssti_prefix.'col,
.ie6 .'.$rocssti_prefix.'col-noalign {
  float: left;
}
.ie7 .'.$rocssti_prefix.'row,
.ie6 .'.$rocssti_prefix.'row {
  overflow: auto;
}
';
if ($rtl == true) {
$rocssti .= '
/* RTL */
[dir="rtl"] .ie7 .'.$rocssti_prefix.'col,
[dir="rtl"] .ie7 .'.$rocssti_prefix.'col-noalign,
[dir="rtl"] .ie6 .'.$rocssti_prefix.'col,
[dir="rtl"] .ie6 .'.$rocssti_prefix.'col-noalign {
  float: right;
}
';}

}
?>
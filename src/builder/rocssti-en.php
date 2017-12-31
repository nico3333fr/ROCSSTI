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
	                        { case 0 : return '“Röcssti, you are so sexy!” — Clara Morgane';
	                          	   	   break;
	                          case 1 : return '“I should be so Röcssti… ♪♫” — Kylie Minogue';
	                          	   	   break;
	                          case 2 : return '“I’m Barack Obama, and I approve this Röcssti.” — Barack Obama';
	                        	     	   break;
	                          case 3 : return '“♫ What a wonderful micro-framework… ♪” — Louis Armstrong';
	                        	     	   break;
	                          case 4 : return '“Röcssti, Hodor.” — Hodor';
	                        	     	   break;
	                          case 5 : return '“I did not have sex with Röcssti.” — Bill Clinton';
	                        	     	   break;
	                          case 6 : return '“Gooooooooooooooood morning Rööööööööööööcsti!” — Robin Williams';
	                        	     	   break;
	                          case 7 : return '“Habemus Röcssti !” — François';
	                        	     	   break;
	                          case 8 : return '“Cssti. Rö-cssti.” — 007';
	                        	     	   break;
	                          case 9 : return '“♫ Like a Röcssti, touch for the very first time… ♪” — Madonna';
	                        	     	   break;
	                          case 10 : return '“Only two things are infinite, the universe and Röcssti capabilities, and I’m not sure about the universe.” — Albert Einstein';
	                        	     	   break;
	                          case 11 : return '“Röcssti is a revolution.” — Steeve Jobs';
	                        	     	   break;
	                          case 12 : return '“Cogito ergo sum Röcssti” — René Descartes';
	                        	     	   break;
	                          case 13 : return '“♪ Happy Röcssti, Mister President ♫” — Marilyn Monroe';
	                        	     	   break;
	                          case 14 : return '“Well I guess weeeeeeeeeeee’ve… found our micro-framework.” — Horatio Caine';
	                        	     	   break;
	                          case 15 : return '“I’m aware, I’m using Röcssti.” — Jean-Claude Van Damme';
	                        	     	   break;
	                          case 16 : return '“Röcsssssssti, my preciiiiiiiiiiiiiiiiious.” — Gollum';
	                        	     	   break;
	                          case 17 : return '“You see, in this world there’s two kinds of people, my friend: those with Röcssti, and those who dig. You dig.” — Clint Eastwood';
	                        	     	   break;
	                          case 18 : return '“THIS IS RÖCSSTI!” — Leonidas';
	                        	     	   break;
	                          case 19 : return '“Supercaliröcssticexpialidocious” — Mary Poppins';
	                        	     	   break;
	                          case 20 : return '“2.21 Kb gzipped? Great Scott!” — Emmett Lathrop “Doc” Brown';
	                        	     	   break;
	                          case 21 : return '“Elementary, my dear Röcssti.” — Sherlock Holmes';
	                        	     	   break;
	                          case 22 : return '“That’s one small step for a man, one giant leap for mankind.” — Neil Armstrong';
	  	                               break;
	  	                      case 23 : return '“♪ ’Cause this is Röcssti, Röcssti night ♫” — Michael Jackson';
	  	                               break;
	                          case 24 : return '“With great power comes great Röcssti.” — Uncle Ben';
	  	                               break;
                            case 25 : return '“♪ See that girl, watch that scene, diggin’ the Röcssti Queen ♫” — ABBA';
	  	                               break;
                            case 26 : return '“♪ Run, Röcssti run ♫” — Woodkid';
	  	                               break;
                            case 27 : return '“Ich bin ein Röcsstier.” — John Fitzgerald Kennedy';
	  	                               break;
                            case 28 : return '“With Röcssti, yes we can!” — Barack Obama';
	  	                               break;
                            case 29 : return '“But it’s even better than spinach!” — Popeye';
	  	                               break;
                            case 30 : return '“Not using Röcssti? D’oh!” — Homer Simpson';
	  	                               break;
                            case 31 : return '“I’m your Röcssti.” — Dark Vador';
	  	                               break;
                            case 32 : return '“Röcssti is like magic!” — Harry Houdini';
	  	                               break;
                            case 33 : return '“Röcssti, I am your father.” — Nicolas Hoffmann';
	  	                               break;
                            case 33 : return '“Röcssti has to be seen to be believed.” — Elizabeth II';
	  	                               break;
                            case 34 : return '“In Röcssti we trust.” — Motto of the United States';
	  	                               break;
                            case 35 : return '“Indeed, it has been said that Röcssti is the worst micro-framework, except all those others that have been tried from time to time.” — Winston Churchill';
	  	                               break;
                            case 36 : return '“Röcssti, or not Röcssti?” — Hamlet';
	  	                               break;
                            case 37 : return '“One day my Röcssti will come.” — Snow White';
	  	                               break;
                            case 38 : return '“Röcssti, you’ll be back.” — Arnold Schwarzenegger';
	  	                               break;
                            case 39 : return '“Never send a human to do Röcssti’s job.” — The Agent Smith';
	  	                               break;
                            case 40 : return '“Impossible is not Röcssti.” — Napoléon 1st';
	  	                               break;
                            case 41 : return '“♫ All in Röcssti was just another brick in the wall.♪” — Pink Floyd';
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







$rocssti = '@charset "UTF-8";
/* UTF-8 before doing anything */

/**
 * ROCSSTI: a CSS base by Nicolas Hoffmann https://rocssti.net/en/
 * Builder: https://rocssti.net/en/builder-css 
 * inspired by http://www.knacss.com/
 * 
 * A Röcssti-quote, only for pleasure:
 * '.rocssti_quote().' 
 *
 * ROCSSTI is under MIT license: https://github.com/nico3333fr/ROCSSTI/blob/master/LICENSE
 *
 * this CSS is provided "as is", without any warranty of any type,
 * author can’t be responsible of anything you might do with RÖCSSTI
 *
 * convention (adapt if needed)
 *  .parent
 *  .parent__child
 *  .parent--modifier 
 * ';
if ($rtl == true) { 
$rocssti .= '
 *
 * RTL = Right To Left =>
 * to adapt a website in a language that is written from right to left
 * designed for multilingual websites with LTR et RTL
 * ';
} 
$rocssti .= ' 
 * 
 * summary
 * 01 -- reset
 * 02 -- webfonts + Hx structure
 * 03 -- useful classes (utils) + typo fix + styles for "fixed tags"
 * 04 -- links + icons
 * 05 -- layout & modules
 * 06 -- structure (page / skip links / header / main content / footer)
 * 07 -- forms
 * 08 -- inside content
 * 09 -- minor breakpoints between desktop and tablets
 * 10 -- tablets - major breakpoint
 * 11 -- minor breakpoints between tablets and mobile
 * 12 -- mobile - major breakpoint
 * 13 -- minor breakpoints for very small mobiles
 * 14 -- print
 * 15 -- fix viewport
 * 16 -- state classes
 * 17 -- bonus: Fixes IE
 */




/*
 *****************************************************************
 * 1 -- reset
 *****************************************************************
 */

/* for HTML 5 */
article, aside, datagrid, datalist, details, dialog, figure, footer, header, main, menu, nav, section { display: block; }
audio, canvas, progress, video { display: inline-block; }
abbr, eventsource, mark, meter, time, output, bb { display: inline; }

/* to comment/fallback if you care about IE<8 */
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
$rocssti .= '/* reset buttons, remember to style them in forms */
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

.unstyled {
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
[dir="rtl"] .unstyled {
  padding-right: 0;
}
';
}

if ($reset_applied == true) {
$rocssti .= '
/* base font size at 10px */
html { 
  font-size: 62.5%;
  /* IE9-IE11 math fixing. See https://connect.microsoft.com/IE/feedback/details/816709/ */
  /* Thanks to @guardian, @victorbritopro, @eQRoeil & Knacss */
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
       $rocssti .= '  font-size: '.($base_font/10).'em; /* equiv '.$base_font.'px */
';
	 }
	 else {
	      $rocssti .= '  font-size: '.($base_font/$root_default_font_size).'em; /* equiv '.$base_font.'px */
';
	       }
  }
  else if ($type_unit == 'use_rem') {
     $rocssti .= '  font-size: '.rem($base_font, $reset_applied, $root_default_font_size).'rem;
';
  }
  else if ($type_unit == 'use_rem_with_em_fallback') {
     if ($reset_applied == true) {
       $rocssti .= '  font-size: '.($base_font/10).'em; /* equiv '.$base_font.'px */
';
	 }
	 else {
	      $rocssti .= '  font-size: '.($base_font/$root_default_font_size).'em; /* equiv '.$base_font.'px */
';
	       }
     $rocssti .= '  font-size: '.rem($base_font, $reset_applied, $root_default_font_size).'rem;
';
  }
$rocssti .= '  line-height: '.$line_height.'; /* to update if needed */
}





/*
 *****************************************************************
 * 02 -- webfonts + Hx structure 
 *****************************************************************
 */ 

/*@font-face {

}*/

/* calculated via https://rocssti.net/en/builder-css
 * based on http://soqr.fr/vertical-rhythm/ thanks @goetter & @eQRoeil */

h1,
.h1 {
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
.h2 {
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
.h3 {
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
.h4 {
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
.h5 {
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
.h6 {
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

.uppercase {
  text-transform: uppercase;
}

/*  other useful classes */
.smaller {
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
.small {
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
.big {
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
.bigger {
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
.biggest {
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




/*
 *****************************************************************
 * 03 -- useful classes (utils) + typo fix + styles for "fixed tags"
 *****************************************************************
 */

.noborder,
iframe,
dialog { border: 0; }

/*
 * taken from http://tinytypo.tetue.net/ made by @tetue
 * tuned with the help of http://www.nicolas-hoffmann.net/utilitaires/codes-hexas-ascii-unicode-utf8-caracteres-usuels.php
 *
 * see http://en.wikipedia.org/wiki/International_variation_in_quotation_marks for reference
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

/* avoid ugly line-height */
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
$rocssti .= '/* avoid margin problems */
h1:first-child, .h1:first-child,
h2:first-child, .h2:first-child,
h3:first-child, .h3:first-child,
h4:first-child, .h4:first-child,
h5:first-child, .h5:first-child,
h6:first-child, .h6:first-child {
  margin-top: 0;
}

/* remove bottom margin on last child */
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


/* avoid margin on nested elements */
li p,
li ul {
  margin-bottom: 0;
  margin-top: 0;
}
/* Thou shalt not pass (Moïse or Gandalf, don’t remember) */
' . ( $hyphens == false ? '/*' : '' ) . 'textarea,
table,
td,
th,
code,
pre,
samp,
div,
p,' . ( $hyphens == false ? '*/' : '' ) . '
.cut {
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
  .cut {
    word-wrap: normal;
    -webkit-hyphens: auto;
    -ms-hyphens: auto;
    hyphens: auto;
  }
}
/* remove hyphenation if needed */
.nocut {
  word-wrap: normal;
}
@supports (-webkit-hyphens: auto) or (-ms-hyphens: auto) or (hyphens: auto) {
  .nocut {
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
/* important, abbr are good */
/* only those with a title are shown */
abbr[title] {
  border-bottom: dotted 1px; 
  cursor: help;
  text-decoration: none;
  /* color inherited from text */
} 

/* text aligns */
.alignright  { text-align: right; }
.aligncenter { text-align: center; }
.alignleft   { text-align: left; }
';
if ($rtl == true) {
$rocssti .= '
/* RTL */
[dir="rtl"] .alignright  { text-align: left; }
[dir="rtl"] .alignleft   { text-align: right; }
';
}
$rocssti .= '



/*
 *****************************************************************
 * 04 -- links + icons
 *****************************************************************
 */

/* links */
a {
  color: '.$color_links.';
  cursor: pointer;
}
/* remember focus */
a:focus,
a:hover,
a:active {
  color: '.$color_links_hover.';
}
/* avoid border on images in links + fix border image IE */
a:link img,
a:visited img, 
img {
  border-style: none;
}

.nodecoration {
  text-decoration: none;
}

/* links with icons, may use DATA-URI */

/* external links */
/*a[href^="http://"],
a[href^="https://"] {

}*/
/* if full URL of the website in an internal link, remove icon */
/*a[href^="http://www.mydomaine.com"] {

}*/
/* contact, mailto links */
/*.mail,
a[href^="mailto:"] {

}*/
/* if URL ends with .pdf or whatever */
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
 * 05 -- layout & modules
 *****************************************************************
 */

/**
 * layout
 */


/* it depends, it exceeds (french joke) */
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
/* no reset on embed, object & video, some players don’t like */

/* useful to manage floats */
/* containing floats */
.mod {
  overflow: auto;
}
.mod--hidden,
.no-scroll { 
  overflow: hidden;
}

/* some floattings */
.left {
  float: left;
}
.right {
  float: right;
}

/* clear floats */
.clear {
  clear: both;
}
';
if ($clearleftright != 'yes') {
$rocssti .= '/*';
}
$rocssti .= '
.clearleft {
  clear: left;
}
.clearright {
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
.clearhidden {
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
.clearfix:after {
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
[dir="rtl"] .left {
  float: right;
}
[dir="rtl"] .right {
  float: left;
}
';
if ($clearleftright != 'yes') {
$rocssti .= '/*';
}
$rocssti .= '
[dir="rtl"] .clearleft {
  clear: right;
}
[dir="rtl"] .clearright {
  clear: left;
}
';
if ($clearleftright != 'yes') {
$rocssti .= '*/
';
}
}
$rocssti .= '


/* gut : "spacing" empty div */
.gut {
  height: 1px;
}

/* table-design in CSS */
.row {
  display: table;
  table-layout: fixed;
}
.inline-row {
  display: inline-table;
  table-layout: fixed;
}
.line {
  display: table-row;
}
.col {
  display: table-cell;
  vertical-align: top;
}
.col-noalign {
  display: table-cell;
}

/* alignments */
.aligntop    { vertical-align: top; }
.alignbottom { vertical-align: bottom; }
.alignmiddle { vertical-align: middle; }

/* block */
.bl {
  display: block;
}

/* inline-block, useful for grids, and not only */
.inbl,
.grid {
  display: inline-block;
}

/* grid = element of inline-grid */
.grid {
  vertical-align: top;
}

/* to relativize */
.relative {
  position: relative;
}

/* centered block */
.center {
  margin-left: auto;
  margin-right: auto;
}

/* hardware-acceleration activation */
.hardware-accelerated {
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
}


/* block widths */
.w1   { width: 1%; }
.w2   { width: 2%; }
.w3   { width: 3%; }
.w5   { width: 5%; }
.w10  { width: 10%; }
.w20  { width: 20%; }
.w25  { width: 25%; }
.w30  { width: 30%; }
.w33  { width: 33.333%; }
.w40  { width: 40%; }
.w45  { width: 45%; }
.w49  { width: 49%; }
.w50  { width: 50%; }
.w60  { width: 60%; }
.w66  { width: 66.666%; }
.w70  { width: 70%; }
.w75  { width: 75%; }
.w80  { width: 80%; }
.w90  { width: 90%; }
.w100 { width: 100%; }

/* here you may add em widths */
/*.w960e { width: 60em; }*/

/* here you may add pixel widths */
/*.w500p { width: 500px; }*/

/* here you may add em max-widths */
/*.mw960e { max-width: 60em; }*/

/* here you may add pixel max-widths */
/*.mw960p { max-width: 960px; }*/

/* margins */
';
if ($rtl == true) { 
$rocssti .= margin_generator ( $listmargins, $listmargins_values, '', '', 'ltr' ).'';
}
else {
$rocssti .= margin_generator ( $listmargins, $listmargins_values ).'';
}

if ($rtl == true) {
$rocssti .= '
/* RTL = warning, use with caution */
';
$rocssti .= margin_generator ( $listmargins, $listmargins_values, '', '', 'rtl', false ).'';
}
$rocssti .= '
/* paddings */
';
if ($rtl == true) { 
$rocssti .= padding_generator ( $listpaddings, $listpaddings_values, '', '', 'ltr' ).'';
}
else {
$rocssti .= padding_generator ( $listpaddings, $listpaddings_values ).'';
}

if ($rtl == true) {
$rocssti .= '
/* RTL = warning, use with caution */
';
$rocssti .= padding_generator ( $listpaddings, $listpaddings_values, '', '', 'rtl', false ).'';
}
$rocssti .= '

/* for 1px-high hr */
hr {
  background-color: '.$color_hr.';
  border: 0;
  color: '.$color_hr.';
  height: '.$sizehr.'px;
  margin: 0 0 1em;
  padding: 0;
}

/* to hide text with accessibility… a11y */
.invisible {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
.nonvisible { visibility: hidden; }

.hidden, [hidden]  { display: none; } /* hidden everywhere */
.nodesktop { display: none; } /* hidden on desktop */
/*.noprint   {} /* hidden on print */
/*.notablet  {} /* hidden on tablets */
/*.nomobile  {} /* hidden on mobile */


/**
 * modules
 */





/*
 *****************************************************************
 * 06 -- structure (page / skip links / header / main content / footer)
 *****************************************************************
 */

/* === page === */
body::before {
  content: \'desktop\';
  display: none;
}

.page {
  margin: 0 auto;
  position: relative;
}

/* --- skip links --- */
.skip {

}
/* .skip__link = 1 skip link  */
/* they should be visible not only on focus */
.skip__link {

}
/* anyway remember making them visible on focus */
.skip__link:focus,
.skip__link:hover,
.skip__link:active {

}



/* === header === */
.header {

}
.logo {

}
.navigation {

}


/* === main content === */
.main {

}


/* === footer === */
.footer {

}




/*
 *****************************************************************
 * 07 -- forms
 *****************************************************************
 */

/* makes you want to click on */
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

/* avoid dummy resize */
textarea {
  resize: vertical;
}
/* remove a Firefox difference on button tag */
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
/* to adapt to your design */
input,
select,
textarea {
  border: '.$sizeborder_input.'px solid '.$color_input_border.';
  padding: .5em;
  width: '.$sizewidth_input.'px;
}

/* for field texts */
.label {
  display: inline-block;
}

/* to adapt to your design */
.button {
  background: '.$color_bg_button.';
  color: '.$color_txt_button.';
}

/*
 * avoids dimensioning for radio, checkboxes and images
 * and a different display on IE
 */
input[type="radio"],
input[type="checkbox"],
input[type="image"] {
  background-color: transparent;
  border: 0;
  width: auto;
}

/* to cancel input sizing or other if needed */
.auto {
  width: auto;
}

/* error or confirmation messages */
.alert,
.alert input,
.alert textarea,
.alert select {
  color: '.$color_alert.';
  font-weight: bold;
}
/* .redborder is only used to debug */
.alert input,
.alert textarea,
.alert select,
.redborder {
  border: 1px solid '.$color_alert.';
}
.alert img {
  border: 0;
}
/*.ok {

}*/

/* can be completed with HTML5 required attribute
 * example with a color, remember not only displaying information with it
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
 * 08 -- inside content (other styles for pages)
 *****************************************************************
 */

/* home */





/*
 *****************************************************************
 * 09 -- minor breakpoints between desktop and tablets
 *****************************************************************
 */





/*
 *****************************************************************
 * 10 -- tablets - major breakpoint
 *****************************************************************
 */ 

@media (max-width: '. ($breakpoint_tablet/16) .'em) { /* equiv '.$breakpoint_tablet.'px */
   
  /**
   * layout/modules
   */

  /* display elements */
  .nodesktop { display: block; }

  /* hide unnecessary elements */
  .notablet { display: none; }
  
  /* linearization of floating content/table-layout */
  .autotablet {
    float: none;
    display: block;
    width: auto;
  }
  
  /* margins */
';
if ($rtl == true) { 
$rocssti .= margin_generator ( $listmargins_tablet, $listmargins_tablet_values, 'ontablet-', '  ', 'ltr' ).'';
}
else {
$rocssti .= margin_generator ( $listmargins_tablet, $listmargins_tablet_values, 'ontablet-', '  ', '' ).'';
}

if ($rtl == true) {
$rocssti .= '
  /* RTL = warning, use with caution */
';
$rocssti .= margin_generator ( $listmargins_tablet, $listmargins_tablet_values, 'ontablet-', '  ', 'rtl', false ).'';
}

$rocssti .= '
  /* paddings */
';
if ($rtl == true) { 
$rocssti .= padding_generator ( $listpaddings_tablet, $listpaddings_tablet_values, 'ontablet-', '  ', 'ltr' ).'';
}
else {
$rocssti .= padding_generator ( $listpaddings_tablet, $listpaddings_tablet_values, 'ontablet-', '  ', '' ).'';
}

if ($rtl == true) {
$rocssti .= '
  /* RTL = warning, use with caution */
';
$rocssti .= padding_generator ( $listpaddings_tablet, $listpaddings_tablet_values, 'ontablet-', '  ', 'rtl', false ).'';
}
$rocssti .='

';

if ($helpers_text_tablet == true) {
$rocssti .= '  /* text aligns */
  .ontablet-alignleft   { text-align: left; }
  .ontablet-aligncenter { text-align: center; }
  .ontablet-alignright  { text-align: right; }
';
}
$rocssti .= '
  /**
   * global structure adaptation (page / skip links / header / main content / footer)
   */
  body::before {
    content: \'tablet\';
  }
  
  /**
   * inside content (other styles for pages)
   */

}




/*
 *****************************************************************
 * 11 -- minor breakpoints between tablets and mobile
 *****************************************************************
 */







/*
 *****************************************************************
 * 12 -- mobile - major breakpoint
 *****************************************************************
 */

@media (max-width: '. ($breakpoint_mobile/16) .'em) { /* equiv '.$breakpoint_mobile.'px */

  /**
   * layout/modules
   */

  /* display elements */
  .notablet { display: block; }

  /* hide unnecessary elements */
  .nomobile { display: none; }

  /* linearization of floating content/table-layout */
  .automobile {
    float: none;
    display: block;
    width: auto;
  }
  
  /* margins */
';
if ($rtl == true) { 
$rocssti .= margin_generator ( $listmargins_mobile, $listmargins_mobile_values, 'onmobile-', '  ', 'ltr' ).'';
}
else {
$rocssti .= margin_generator ( $listmargins_mobile, $listmargins_mobile_values, 'onmobile-', '  ' ).'';
}
if ($rtl == true) {
$rocssti .= '
  /* RTL = warning, use with caution */
';
$rocssti .= margin_generator ( $listmargins_mobile, $listmargins_mobile_values, 'onmobile-', '  ', 'rtl', false ).'';
}

$rocssti .= '
  /* paddings */
';
if ($rtl == true) { 
$rocssti .= padding_generator ( $listpaddings_mobile, $listpaddings_mobile_values, 'onmobile-', '  ', 'ltr' );
}
else {
$rocssti .= padding_generator ( $listpaddings_mobile, $listpaddings_mobile_values, 'onmobile-', '  ', '' );
}
if ($rtl == true) {
$rocssti .= '
  /* RTL = warning, use with caution */
';
$rocssti .= padding_generator ( $listpaddings_mobile, $listpaddings_mobile_values, 'onmobile-', '  ', 'rtl', false ).'';
}
$rocssti .= '
';

if ($helpers_text_mobile == true) {
$rocssti .= '  /* text aligns */
  .onmobile-alignleft   { text-align: left; }
  .onmobile-aligncenter { text-align: center; }
  .onmobile-alignright  { text-align: right; }
';
}
$rocssti .= '
  /**
   * global structure adaptation (page / skip links / header / main content / footer)
   */
  body::before {
    content: \'mobile\';
  }
  
  /**
   * inside content (other styles for pages)
   */

}




/*
 *****************************************************************
 * 13 -- minor breakpoints for very small mobiles
 *****************************************************************
 */

@media (max-width: '. ($breakpoint_tinymobile/16) .'em) { /* equiv '.$breakpoint_tinymobile.'px */

  /**
   * layout/modules
   */

  /* display elements */
  /*.nomobile { display: block; }*/

  /* hide unnecessary elements */
  .notinymobile { display: none; }

  /* linearization of floating content/table-layout */
  .autotinymobile {
    float: none;
    display: block;
    width: auto;
  }

  /**
   * global structure adaptation (page / skip links / header / main content / footer)
   */
  body::before {
    content: \'tinymobile\';
  }
  
  /**
   * inside content (other styles for pages)
   */


}






/*
 *****************************************************************
 * 14 -- print
 *****************************************************************
 */

@media print {
  /**
   * add in this all elements which need to be hardly reseted for print
   */
  body,
  html,
  .page,
  .reset4print {
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
  }

  /* hide unnecessary elements */
  .noprint {
    display: none;
  }
  
  /* display specific elements for print */
  .onprint {
    display: block;
  }
  
  /* avoid problematic page break */
  blockquote, ul, ol {
    page-break-inside: avoid;
  }
  h1, h2, h3, caption {
    page-break-after: avoid;
  }
  
  /* display links, except for those containing images */
  /* warning, remember checking the result & think to limitate
   * this option only for inside content links */
  /*a:after {
    content: " (" attr(href) ") ";
  }
  a:after img {
    content: "";
  }*/

  /* fix particular properties */


} /* end print */




/*
 *****************************************************************
 * 15 -- fix viewport
 *****************************************************************
 */

/* fix viewport for Win8 (snap mode) and preparing day
 * when viewport will be supported by all render engines
 *
 * Examples: http://dev.opera.com/articles/view/an-introduction-to-meta-viewport-and-viewport/
 * width=device-width => width: device-width;
 * height=device-height => height: device-height;
 * initial-scale=2 => zoom: 2;
 * maximum-scale=2 => max-zoom: 2;
 * minimum-scale=0.5 => min-zoom: 0.5;
 * user-scalable=no => user-zoom: fixed;
 *
 * for Win8 snap mode => only width: device-width; works for the moment
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
 * 16 -- state classes
 *****************************************************************
 */

/*
 * State classes = put here to take priority on all classes
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
 * 17 -- Bonus: Fixes IE
 *****************************************************************
 */

/*
 * based on conditional classes on HTML element
 *
 * to be used only if there are not to many fixes &
 * small impact on webperfs for other browsers
 *
 */

';
if ($use_old_ie_fallbacks == true) {
$rocssti .= '
/* less than IE 9 */
.oldies .nooldies {
  display: none;
}

.ie6 .noie6 {
  display: none;
}
.ie7 .noie7 {
  display: none;
}
.ie8 .noie8 {
  display: none;
}
.ie9 .noie9 {
  display: none;
}

.ie7 .col,
.ie7 .col-noalign,
.ie6 .col,
.ie6 .col-noalign {
  float: left;
}
.ie7 .row,
.ie6 .row {
  overflow: auto;
}
';
if ($rtl == true) {
$rocssti .= '
/* RTL */
[dir="rtl"] .ie7 .col,
[dir="rtl"] .ie7 .col-noalign,
[dir="rtl"] .ie6 .col,
[dir="rtl"] .ie6 .col-noalign {
  float: right;
}
';}

}
?>

<?php
function render( $id = 'splide01', $number = 10, $text = false ) {
  printf( '<div id="%s" class="splide">', $id );
  echo '<div class="splide__track">';
  echo '<ul class="splide__list">';
  for ( $i = 0; $i < $number; $i++ ) {
    echo '<li class="splide__slide">';

    if ( $text ) {
      printf( '<span>%s</span>', $i + 1 );
    } else {
      printf( '<img src="../../assets/images/pics/slide%02d.jpg">', $i + 1 );
    }

    echo '</li>' . PHP_EOL;
  }
  echo '</ul>';
  echo '</div>';
  echo '</div>';
}

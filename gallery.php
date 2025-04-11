<?php
function generateIndicators ($total, $labels) {
  $count = 0;
	$active = "class=\"active\"";
  echo "  <div class=\"carousel-indicators\">";
  while ($count < $total) {
		$label = $labels[$count];
    echo "    <button data-bs-button-init type=\"button\" data-bs-target=\"#carouselIndicator\" data-bs-slide-to=\"$count\" $active aria-current=\"true\" aria-label=\"$label Slide\"></button>";
    $count++;
		$active = "";
  }
	echo "  </div> <!-- Indicators -->";
}

function generateSlides ($total, $imgdir, $images, $labels, $captions) {
  $count = 0;
  $active = "active";
  echo "  <div class=\"carousel-inner\">";
  while ($count < $total) {
		$image = $images[$count];
		$label = $labels[$count];
		$caption = $captions[$count];
    echo <<<END
    <div class="carousel-item $active" data-bs-interval="20000">
      <img class="d-block w-100" src="$imgdir/$image.jpg" alt="$label" />
      <div class="carousel-caption">
			  <h5>$label</h5>
			  <p>$caption</p>
      </div>
    </div>
END;
    $active = "";
    $count++;
  }
	echo "  </div> <!-- Slides -->";
}

function generateButtons () {
  echo <<<END
      <button data-bs-button-init class="carousel-control-prev" type="button" data-bs-target="#carouselIndicator" data-bs-slide="prev">
		    <span aria-hidden="true">
          <i class="carousel-control fa-solid fa-circle-chevron-left"></i>
        </span>
		    <!-- span class="carousel-control-prev-icon" aria-hidden="true"></span -->
        <span class="visually-hidden">Previous</span>
      </button>
      <button data-bs-button-init class="carousel-control-next" type="button" data-bs-target="#carouselIndicator" data-bs-slide="next">
		    <span aria-hidden="true">
          <i class="carousel-control fa-solid fa-circle-chevron-right"></i>
        </span>
        <span class="visually-hidden">Next</span>
      </button>
END;
}

function generateGallery ($datafile, $imgdir) {
  $count = 0;
  $images = $labels = $captions = array();
  $handle = fopen($datafile, "r");
  if ($handle) {
    while (($line = fgets($handle)) !== false) {
      $data = array_map('trim', explode("|", $line));
	    [$images[], $labels[], $captions[]] = $data;
      $count++;
    }
  }
  fclose ($handle);
  echo "<div id=\"carouselIndicator\" class=\"carousel slide carousel-fade carousel-dark\" data-bs-ride=\"carousel\">";
  generateIndicators ($count, $labels);
  generateSlides ($count, $imgdir, $images, $labels, $captions);
  generateButtons ();
  echo "</div> <!-- Gallery -->";
}
?>

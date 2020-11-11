<!-- credits: https://gist.github.com/JaymesKat/2fa879149bbd2cf9390641db563f49dd -->
<div class="container my-5">
  <a href="grt-products.php"><h3 class="text-center mb-3 orange">GRT Products</h3></a>
  <div id="myCarousel" class="carousel slide p-5" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item col-md-4 active">
        <div class="card">
          <div class="card-body py-0">
            <h6 class="card-title badge badge-danger my-3">Dust Control</h6><hr>
          </div>
          <a href="wetloc.php"><img class="card-img-bottom img-fluid p-3" src="img/grt/wetloct.png" alt="GRT WetLoc"></a>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <div class="card-body py-0">
            <h6 class="card-title badge badge-danger my-3">Dust Control</h6><hr>
          </div>
          <a href="haulloc.php"><img class="card-img-bottom img-fluid p-3" src="img/grt/haulloct.png" alt="GRT HaulLoc"></a>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <div class="card-body py-0">
            <h6 class="card-title badge badge-primary my-3">Stabilization</h6><hr>
          </div>
          <a href="grt7000.php"><img class="card-img-bottom img-fluid p-3" src="img/grt/7000t.png" alt="GRT 7000"></a>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <div class="card-body py-0">
            <h6 class="card-title badge badge-primary my-3">Stabilization</h6><hr>
          </div>
          <a href="grt9000.php"><img class="card-img-bottom img-fluid p-3" src="img/grt/9000t.png" alt="GRT 9000"></a>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <div class="card-body py-0">
            <h6 class="card-title badge badge-primary my-3">Stabilization</h6><hr>
          </div>
          <a href="grtpcm.php"><img class="card-img-bottom img-fluid p-3" src="img/grt/pcmt.png" alt="GRT PCM"></a>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <div class="card-body py-0">
            <h6 class="card-title badge badge-success my-3">Erosion Control</h6><hr>
          </div>
          <a href="envirobinder.php"><img class="card-img-bottom img-fluid p-3" src="img/grt/envirobindert.png" alt="GRT Enviro Binder"></a>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <div class="card-body py-0">
            <h6 class="card-title badge badge-warning my-3">Rural</h6><hr>
          </div>
          <a href="soilloc.php"><img class="card-img-bottom img-fluid p-3" src="img/grt/soilloct.png" alt="GRT SoilLoc"></a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<script>
    // carousel control
    $(document).ready(function() {
    $("#myCarousel").on("slide.bs.carousel", function(e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 3;
        var totalItems = $(".carousel-item").length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
            // append slides to end
            if (e.direction == "left") {
            $(".carousel-item")
                .eq(i)
                .appendTo(".carousel-inner");
            } else {
            $(".carousel-item")
                .eq(0)
                .appendTo($(this).find(".carousel-inner"));
            }
        }
        }
    });
    });

    // Carousel control for mobile
    if ($(window).width() < 700){
        $(".carousel").on("touchstart", function(event){
                var xClick = event.originalEvent.touches[0].pageX;
            $(this).one("touchmove", function(event){
                var xMove = event.originalEvent.touches[0].pageX;
                if( Math.floor(xClick - xMove) > 5 ){
                    $(this).carousel('next');
                }
                else if( Math.floor(xClick - xMove) < -5 ){
                    $(this).carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                    $(this).off("touchmove");
            });
        });
    }

</script>
<?php /*
<!-- <style>
    @media (min-width: 768px) {
        // show 3 items 
        .carousel-inner .active,
        .carousel-inner .active + .carousel-item,
        .carousel-inner .active + .carousel-item + .carousel-item {
            display: block;
        }

        .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
        .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
        .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
            transition: none;
        }

        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            position: relative;
            transform: translate3d(0, 0, 0);
        }

        .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
            position: absolute;
            top: 0;
            right: -33.3333%;
            z-index: -1;
            display: block;
            visibility: visible;
        }

        // left or forward direction
        .active.carousel-item-left + .carousel-item-next.carousel-item-left,
        .carousel-item-next.carousel-item-left + .carousel-item,
        .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
        .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
            position: relative;
            transform: translate3d(-100%, 0, 0);
            visibility: visible;
        }

        // farthest right hidden item must be also position for animations
        .carousel-inner .carousel-item-prev.carousel-item-right {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            display: block;
            visibility: visible;
        }

        // right or prev direction
        .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
        .carousel-item-prev.carousel-item-right + .carousel-item,
        .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
        .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
            position: relative;
            transform: translate3d(100%, 0, 0);
            visibility: visible;
            display: block;
            visibility: visible;
        }
    }
</style> --> */ ?>
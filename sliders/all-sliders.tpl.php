<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<div id="sliders-app" ng-controller="slidersCtrl">
  <div id="carouselSliders" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li ng-repeat="slider in sliders" data-target="#carouselSliders" data-slide-to="{{ slider.id }}" class="{{ slider.active }}"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div ng-repeat="slider in sliders" class="item {{ slider.active }}">
          <img src="{{ slider.image  }}" alt="{{ slider.alt }}">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#carouselSliders" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carouselSliders" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</div>
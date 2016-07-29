<div id="sliders-app" ng-controller="twitterCtrl" >
    <div id="carouselTwitter" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li ng-repeat="tweet in tweets" data-target="#carouselTwitter" data-slide-to="{{ tweet.id }}" class="{{ tweet.active }}"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div ng-repeat="tweet in tweets" class="item {{ slider.active }}">
            <p> {{ tweet.text }} </p>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#carouselTwitter" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carouselTwitter" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
    <!--tr ng-repeat="tweet in tweets">
        <td><img ng-src="{{tweet.profile_image_url}}" width="48" height="48" /></td>
        <td ng-bind-html="tweet.text | linky"></td>
        </tr-->
</div> 

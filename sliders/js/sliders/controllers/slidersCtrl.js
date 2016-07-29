app.controller('slidersCtrl', function($scope, $http){
    $scope.foobar = 'All Sliders';
    $scope.sliders = [];
    
    $http.get('/drupal74/json/pru').success(
        function(result){
            var temp = result.nodes;
            for(var i = 0; i < temp.length; i++){
                $scope.sliders.push({
                    id : i,
                    image : temp[i].node.SliderImage.src,
                    alt : temp[i].node.SliderImage.alt,
                    active : (i == 0 ? 'active' : ''),
                    url : temp[i].node.SliderLink,
                });
            }           
        }
    );
});

app.controller('twitterCtrl', function(){
    $scope.tweets = [];
    $scope.query = '';
    
    
    $http.jsonp('https://search.twitter.com/search.json?q=' + encodeURIComponent($scope.query) + '&callback=JSON_CALLBACK')
      .success(function(data){
        $scope.tweets = data.results;
            var temp = result.nodes;
            for(var i = 0; i < temp.length; i++){
                $scope.tweets.push({
                    id : i,
                    image : temp[i].node.SliderImage.src,
                    alt : temp[i].node.SliderImage.alt,
                    active : (i == 0 ? 'active' : ''),
                    url : temp[i].node.SliderLink,
                });
            }      
    });
    
    $http.get('/drupal74/json/pru').success(
        function(result){
                 
        }
    );
});
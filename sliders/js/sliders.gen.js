var app = angular.module('sliders', []);

jQuery(document).ready(function(){
   angular.bootstrap(document.getElementById('sliders-app'), ['sliders']);
});

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

app.controller('twitterCtrl', function($scope, $http){
    $scope.tweets = [];
    $scope.query = '';

    $scope.tweets = [
        { id : 1, profile_image_url : 'asdasd', text : 'asdasdasd', active : 'active'},
        { id : 2, profile_image_url : 'asdasd', text : 'asdasdasd', active : ''},
        { id : 3, profile_image_url : 'asdasd', text : 'asdasdasd', active : ''},
        { id : 4, profile_image_url : 'asdasd', text : 'asdasdasd', active : ''},
    ];    

    
    /*$http.jsonp('https://search.twitter.com/search.json?q=' + encodeURIComponent($scope.query) + '&callback=JSON_CALLBACK')
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
    });*/
    
    /*$http.get('/drupal74/json/pru').success(
        function(result){
                 
        }
    );*/
});
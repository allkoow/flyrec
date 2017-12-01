var app = angular.module("myApp",[]);

app.controller("controller", function($scope,$http) 
{
	var getData = function()
	{
		$http.get("query.php").then( function(response) 
		{
			$scope.covers = response.data;
			//console.log(response.data);
		}, function(response) 
		{
			$scope.content = "Something went wrong.";
		});
	}

	var checkVariable = function(variable,text)
	{
		if(variable==1)
			return text;
		else
			return "";
	}

	$scope.hoverIn = function()
	{
		$scope.show = true;
		$scope.title = this.x.title;
		$scope.year = this.x.year;
		
		$scope.record = checkVariable(this.x.record,"Nagranie");
		$scope.edition = checkVariable(this.x.edition,"Edycja");
		$scope.mixing = checkVariable(this.x.mix,"Mix");
		$scope.mastering = checkVariable(this.x.mastering,"Mastering");
	};

	$scope.hoverOut = function()
	{
		$scope.show = false;
	};

	$scope.iconClass = "icon-play-1";
	$scope.MouseDown = function($event,src)
	{
		$target = angular.element($event.currentTarget).children()[1];
		$icon = angular.element($target).children()[0];
		iconClass = angular.element($icon).attr("class");

		$audio = angular.element(document).find("audio")[0];
		console.log($audio);

		if(iconClass === "icon-play-1")
		{
			angular.element($icon).removeClass("icon-play-1");
			angular.element($icon).addClass("icon-stop");

			$audio.src = "http://flyrec.pl/audio/"+src;
			$audio.play();
			
		}
		else
		{
			angular.element($icon).removeClass("icon-stop");
			angular.element($icon).addClass("icon-play-1");
			
			$audio.pause();
			$audio.currentTime = 0;
		}

		
	};

 	getData();

});

 // app.directive('domDirective', function () {
 //      return {
 //          restrict: 'A',
 //          scope: {
 //          	model: '='
 //          },
 //          link: function ($scope, element) 
 //          {
 //              element.on('click', function () {
 //              	$play = element.find("div")[0];
                
 //              });
 //          }
 //      };
 //  });
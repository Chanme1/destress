$(document).ready(function(){
		    function EarRotation(e, angle) {
		    	var ang = angle;

			    setInterval(function () {
			    	
			        	e.css({'transition': 'all 1s ease-in-out',
			        	'transform': 'rotate(' + ang + 'deg)'});
			        	ang = -ang;
			        }, 1000);
			}

			function ArmRotation(e, angle) {
		    	var ang = angle;

			    setInterval(function () {
			    	
			        	e.css({'transition': 'all 1s ease-in-out',
			        	'transform': 'rotate(' + ang + 'deg)'});
			        	ang = -ang;
			        }, 1000);
			}

			 EarRotation($("#earL"), 5);
			 EarRotation($("#earR"),-5);
			 ArmRotation($("#armL"),5);
			 ArmRotation($("#armR"),-5);
		    
		});

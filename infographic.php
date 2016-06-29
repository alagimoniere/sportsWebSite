<?php include("php/header.php"); ?>




<div id = "player">Nick Chubb</div>
<hr>

<div class="doughnut" style="margin: 0 auto;"> </div>
<script>
var mediumDoughnutData = [
				{value:81,color:"#4bc584"},
				{value:100-81,color:"#dce0df"}
			];

		$( ".doughnut" ).doughnutit({
			dnData: mediumDoughnutData,
		    dnSize: 230,
		    dnInnerCutout: 60,
		    dnAnimation: true,
			dnAnimationSteps: 60,
			dnAnimationEasing: 'linear',
			dnStroke: false,
			dnShowText: true,
			dnFontSize: '50px',
			dnFontOffset: 30,
			dnFontColor: "#dce0df",
			dnText: '8.1',
			dnStartAngle: 0,
			dnCounterClockwise: false,
			dnRightCanvas: {
				rcRadius: 5,
				rcPreMargin: 20,
				rcMargin: 20,
				rcHeight: 40,
				rcOffset: 5,
				rcLineWidth: 170,
				rcSphereColor: '#819596',
				rcSphereStroke: '#819596',				
				rcTop:{
					rcTopLineColor: '#dce0df',
					rcTopDashLine: 0,
					rcTopFontSize: '13px',
					rcStrokeWidth: 1,

					rcTopPreMargin: 30,
		        	rcTopMargin: 20,
		        	rcTopHeight: 70,

					rctAbove: {						
						rctText: 'AVG',
						rctOffset: 2,
						rctImageOffsetRight: 5,
						rctImageOffsetBottom: 0,
						rctFontSize: '40px',
					},
					rctBelow: {
						rctText: 'Yards per attempt',
						rctFontSize: '15px',
						rctFontStyle: 'bold',
						rctOffset: 2,
						rctImageOffsetRight: 5,
						rctImageOffsetBottom: 0,
					}		        		        	
				}
			}
		});// End Doughnut
</script>

<div class="run" style="position:relative; margin: auto; width: 50%;"><img src="img/running.png" height="100" width="100"></div>
<script>
$(document).ready(function() {
    $(".run").animate({left: "+=70"}, 1000);
});
runRight();
</script>

<div class="yards" style="position:relative">747 Rushing Yards</div>
<script>
$(document).ready(function() {
    $(".yards").animate({left: "+=130"}, 2000);
});
runRight();
</script>

<img class="others" src="img/others.png" width="406" height="193" style="position:relative"></div>

</body>

<?php include("php/footer.php"); ?>
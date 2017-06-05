<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minifed CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!-- [if lt IE9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery v3.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

		<link href="http://getbootstrap.com/examples/justified-nav/justified-nav.css" rel="stylesheet">

		<!-- Latest compiled and minifed JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<style>
			.axis path {
				fill: none;
				stroke: #777;
				shape-rendering: crispEdges;
			}
			.axis text {
				font-family: Arial;
				font-size: 13px;
			}
		</style>

	</head>

	<body>
		<div class="container">
			<div class="jumbotron">
				<svg id="visualization" width="1000" height="500"></svg>
				<!-- Latest version of D3.js -->
				<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
				<script>
					function InitChart() {
						/*** Carbon Monoxide data ***/
						var carbonMonoxide = [{
							"amount": "1.2",
							"time": "00:00"
						}, {
							"amount": "1",
							"time": "1:00"
						}, {
							"amount": "0.9",
							"time": "2:00"
						}, {
							"amount": "0.6",
							"time": "3:00"
						}, {
							"amount": "-200",
							"time": "4:00"
						}, {
							"amount": "0.7",
							"time": "5:00"
						}, {
							"amount": "0.7",
							"time": "6:00"
						}, {
							"amount": "1.1",
							"time": "7:00"
						}, {
							"amount": "2",
							"time": "8:00"
						}, {
							"amount": "2.2",
							"time": "9:00"
						}, {
							"amount": "1.7",
							"time": "10:00"
						}, {
							"amount": "1.5",
							"time": "11:00"
						}, {
							"amount": "1.6",
							"time": "12:00"
						}, {
							"amount": "1.9",
							"time": "13:00"
						}, {
							"amount": "2.9",
							"time": "14:00"
						}, {
							"amount": "2.2",
							"time": "15:00"
						}, {
							"amount": "2.2",
							"time": "16:00"
						}, {
							"amount": "2.9",
							"time": "17:00"
						}, {
							"amount": "4.8",
							"time": "18:00"
						}, {
							"amount": "6.9",
							"time": "19:00"
						}, {
							"amount": "6.1",
							"time": "20:00"
						}, {
							"amount": "3.9",
							"time": "21:00"
						}, {
							"amount": "1.5",
							"time": "22:00"
						}, {
							"amount": "1.1",
							"time": "23:00"
						}
						}];

						/*** Nitrogen Dioxide data ***/
						var nitrogenDioxide = [{
							"amount": "77",
							"time": "00:00"
						}, {
							"amount": "76",
							"time": "1:00"
						}, {
							"amount": "60",
							"time": "2:00"
						}, {
							"amount": "-200",
							"time": "3:00"
						}, {
							"amount": "34",
							"time": "4:00"
						}, {
							"amount": "28",
							"time": "5:00"
						}, {
							"amount": "48",
							"time": "6:00"
						}, {
							"amount": "82",
							"time": "7:00"
						}, {
							"amount": "112",
							"time": "8:00"
						}, {
							"amount": "101",
							"time": "9:00"
						}, {
							"amount": "98",
							"time": "10:00"
						}, {
							"amount": "92",
							"time": "11:00"
						}, {
							"amount": "95",
							"time": "12:00"
						}, {
							"amount": "112",
							"time": "13:00"
						}, {
							"amount": "128",
							"time": "14:00"
						}, {
							"amount": "126",
							"time": "15:00"
						}, {
							"amount": "131",
							"time": "16:00"
						}, {
							"amount": "135",
							"time": "17:00"
						}, {
							"amount": "151",
							"time": "18:00"
						}, {
							"amount": "172",
							"time": "19:00"
						}, {
							"amount": "165",
							"time": "20:00"
						}, {
							"amount": "136",
							"time": "21:00"
						}, {
							"amount": "85",
							"time": "22:00"
						}, {
							"amount": "53",
							"time": "23:00"
						}
					}];

						var vis = d3.select("#visualisation"),
							WIDTH = 1000,
							HEIGHT = 500,
							MARGINS = {
								top: 20,
								right: 20,
								bottom: 20,
								left: 50
							},

							xScale = d3.scale.linear().range([MARGINS.left, WIDTH - MARGINS.right]).domain([0,23),

							yScale = d3.scale.linear().range([HEIGHT - MARGINS.top, MARGINS.bottom]).domain([-200, 200]),

							xAxis = d3.svg.axis()
								.scale(xScale),
							yAxis = d3.svg.axis()
								.scale(yScale)
								.orient("left");


					}
					InitChart();
				</script>
			</div>
		</div>
	</body>
</html>
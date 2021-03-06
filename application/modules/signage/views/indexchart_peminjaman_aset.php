<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Animated infographics using CSS3 and jQuery</title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets_codepen/2/css/style.css">

  
</head>

<body>
  <!DOCTYPE HTML>
<html>
  <head>
  </head>
	<body>
		<div id="container">
			<div id="data">
				<h1>AIDS infections versus Foreign Aid</h1>
				<h2>Note this is dummy data</h2>
				<table id="datasource">
					<tr>
						<th id="td1_1">&nbsp;</th>
						<th id="td1_2">2009</th>
						<th id="td1_3">2010</th>
					</tr>
					<tr>
						<th id="td2_1">Male</th>
						<td id="td2_2">97565</td>
						<td id="td2_3">57128</td>
					</tr>
					<tr>
						<th id="td3_1">Female</th>
						<td id="td3_2">130312</td>
						<td id="td3_3">82312</td>
					</tr>
					<tr>
						<th id="td4_1">Foreign Aid</th>
						<td id="td4_2">30.2</td>
						<td id="td4_3">42.6</td>
					</tr>
				</table>
			</div>
			<div id="infographic">
				<h1>Rate</h1>
				<h2>In the African continent</h2>
				<h3>Versus foreign Aid</h3>
				<div id="barcharts">
					<div id="chart1label">
						<h2><span>New infections</span> 2009</h2>
					</div>
					<div id="chart2label">
						<h2><span>New infections</span> 2010</h2>
					</div>
					<div id="chart1">
						<div id="chart1_bar1" class="women">
							<div class="label">XXXX</div>
						</div>
						<div id="chart1_bar2" class="men">
							<div class="label">XXXX</div>
						</div>
					</div>
					<div id="chart2">
						<div id="chart2_bar1" class="women">
							<div class="label">XXXX</div>
						</div>
						<div id="chart2_bar2" class="men">
							<div class="label">XXXX</div>
						</div>
					</div>
					<div id="percentchange"></div>
				</div>
				<div id="areacharts">
					<h2>Foreign Aid (HIV)</h2>
					<div id="chart3">
						<div id="chart3_area1" class="money">
							<div class="label">2009</div>
						</div>
						<div id="chart3_area2" class="money">
							<div class="label">2010</div>
						</div>
					</div>
					<div class="datavalue">
						<div class="label">2009 Infections</div>
						<div id="2009total">XXXXXX</div>
					</div>
					<div class="datavalue">
						<div class="label">2010 Infections</div>
						<div id="2010total">XXXXXX</div>
					</div>
					<div class="datavalue">
						<div class="label">2009 Aid received</div>
						<div id="2009aid">XXXXXX</div>
					</div>
					<div class="datavalue">
						<div class="label">2010 Aid received</div>
						<div id="2010aid">XXXXXX</div>
					</div>
				</div>
				<div id="attribution">
					<h6>SOURCE: UNITED NATIONS, WORLD BANK, IMF</h6>
				</div>
			</div>
		</div>
	</body>
</html>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url(); ?>assets/assets_codepen/2/js/index.js"></script>

</body>
</html>

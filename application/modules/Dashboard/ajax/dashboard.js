	$(document).ajaxStart(function() {
	document.getElementById("loader").style.display = "block";
	// $('#coba').css({"-webkit-filter": "blur(2px)",
	// "-moz-filter": "blur(2px)",
	// "-o-filter": "blur(2px)",
	// "-ms-filter": "blur(2px)",
	// "filter": "blur(2px)"});
}).ajaxStop(function() {
	document.getElementById("loader").style.display = "none";
	// $('#coba').css({"-webkit-filter": "", "filter" : ""});
});

$(document).ready(function ($) {
  Chart.defaults.global.defaultFontColor = '#c8d9de';
  var ctx = document.getElementById("line-chart").getContext('2d');
  var myChart = new Chart(ctx, {
  type: 'line',
  data: {
        labels: [
          <?php
            if (count($chart)>0) {
              foreach ($chart as $data) {
                echo "'" .$data->tahun ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Jumlah Entitas Terlibat',
            borderColor: '#5e72e4',
			borderDash: [2, 2],
			pointRadius: 5,
			pointHoverRadius: 15,
            data: [
              <?php
                if (count($chart)>0) {
                   foreach ($chart as $data) {
                    echo $data->jumlah . ", ";
                  }
                }
              ?>
            ]
        }]
	},
  options: {
    scales: {
       xAxes: [{
          gridLines: {
             display: true,
             color:"black"
          }
       }],
       yAxes: [{
          gridLines: {
             display: true,
             color:"black"
          }
       }],

    },
		hover: {
		mode: 'index'
	},
  }
});
	var ctxbar = document.getElementById("bar-chart").getContext('2d');
	var myChart = new Chart(ctxbar, {
		type: 'bar',
		data: {
			labels: [
				<?php
					if (count($bar)>0) {
						foreach ($bar as $data) {
							echo "'" .$data->tahun ."',";
						}
					}
				?>
			],
			datasets: [{
				label: 'Jumlah Entitas Terlibat',
				borderColor: '#d35400',
				data: [
					<?php
						if (count($bar)>0) {
							foreach ($bar as $data) {
								echo $data->jumlah . ", ";
							}
						}
					?>
				]
			}]
			},
			options: {
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						gridLines: {
							display: true,
						},
						ticks: {
							display: true,
							beginAtZero:true,
							fontColor: '#7d8e96'
						},
					}],
					yAxes: [{
						gridLines: {
							display: true,
						},
						ticks: {
							display: true,
							beginAtZero:true,
							fontColor: '#7d8e96'
						},
					}],

				},
			}
	});
	var ctx_se = document.getElementById("line-chart-se").getContext('2d');
	var myChart = new Chart(ctx_se, {
		type: 'line',
		data: {
			labels: [
			<?php
				if (count($line_se)>0) {
					foreach ($line_se as $data) {
						echo "'" .$data->tahun ."',";
					}
				}
				?>
			],
			datasets: [{
				label: 'Jumlah Entitas Terlibat',
				borderColor: '#172b4d',
				borderDash: [2, 2],
				pointRadius: 5,
				pointHoverRadius: 15,
				data: [
				<?php
					if (count($line_se)>0) {
						foreach ($line_se as $data) {
							echo $data->jumlah . ", ";
						}
					}
				?>
				]
			}]
		},
		options: {
			scales: {
				xAxes: [{
					gridLines: {
						display: true,
						color:"black"
					}
				}],
				yAxes: [{
					gridLines: {
						display: true,
						color:"black"
					}
				}],
			},
			hover: {
				mode: 'index'
			},
		}
	});
});

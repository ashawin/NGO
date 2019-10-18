(function($) {
    "use strict";

	/*---ChartJS ---*/
	var ctx = document.getElementById("chart");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["2012", "2013", "2014", "2015", "2016", "2017", "2018"],
			type: 'line',
			datasets: [{
				label: "Vistors",
				data: [10, 60, 30, 90, 120, 76, 35],
				backgroundColor: 'transparent',
				borderColor: '#53127F',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#53127F',
			}, {
				label: "PageViews",
				data: [15, 70, 80, 120, 45, 68, 78],
				backgroundColor: 'transparent',
				borderColor: '#f2574c',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#f2574c',
			},
			 {
				label: "Clients",
				data: [22, 88, 68, 140, 60, 80, 95],
				backgroundColor: 'transparent',
				borderColor: '#45aaf2',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#45aaf2',
			}
			]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Montserrat',
				},
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#7886a0",
					 },
					display: true,
					gridLines: {
						display: true,
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'Month',
						fontColor: '#7886a0'
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#7886a0",
					 },
					display: true,
					gridLines: {
						display: true,
						drawBorder: false
					},
					scaleLabel: {
						display: true,
						labelString: 'Value',
						fontColor: '#7886a0'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/*---ChartJS (#sales-chart) closed---*/
	
	//Team chart
    var ctx = document.getElementById( "team-chart" );
	 ctx.height = 185;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "M", "T", "W", "TH", "F", "SA", "S" ],
            type: 'line',
            defaultFontFamily: 'Montserrat',
            datasets: [ {
                data: [ 0, 7, 3, 5, 2, 10, 7 ],
                label: "Task",
                backgroundColor: 'rgb(127,18,117,0.2)',
                borderColor: 'rgba(127,18,117,0.5)',
                borderWidth: 3.5,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(127,18,117,0.5)',
                    }, ]
        },
        options: {
            responsive: true,
			maintainAspectRatio: false,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: true,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Month'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: true,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Value'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
	 } );
	/*-----AreaChart1-----*/
    var ctx = document.getElementById( "AreaChart1" );
	ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
                data: [45, 55, 32, 67, 49, 72, 52],
                label: 'Sales',
                backgroundColor: 'rgb(245, 54, 92,0.6)',
                borderColor: 'rgba(245, 54, 92, 0.9)',
            },
			{
                data: [50, 63, 50, 85, 76, 90, 150],
                label: 'Profit',
                backgroundColor: 'rgb(83, 18, 127,0.6)',
                borderColor: 'rgba(83, 18, 127, 0.9)',
            }
			]
        },
        options: {

            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#7886a0',
                bodyFontColor: '#7886a0',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    } );
	
})(jQuery);


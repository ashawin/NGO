(function($) {
    "use strict";
	
	/*----ApexCharts----*/
	var options = {
		chart: {
			height: 300,
			type: 'bar',
		},
		plotOptions: {
			bar: {
				horizontal: false,
				endingShape: 'rounded',
				columnWidth: '55%',
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 2,
			colors: ['transparent']
		},
		series: [{
			name: 'Net Profit',

			data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
		}, {
			name: 'Revenue',

			data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
		}, {
			name: 'Free Cash Flow',
			data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
		}],
		xaxis: {
			categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		},
		yaxis: {

		},
		fill: {
			opacity: 1

		},
		colors: ['#45aaf2', '#53127F', '#f2574c' ],
		tooltip: {
			y: {
				formatter: function (val) {
					return "$ " + val + " "
				}
			}
		}
	}

	var chart = new ApexCharts(
		document.querySelector("#chart"),
		options
	);
	chart.render();
	
	/*-----BarChart-----*/
	var ctx = document.getElementById( "barChart" );
    var myChart = new Chart( ctx, {
        type: 'horizontalBar',
        data: {
            labels: [ "January", "February", "March", "April", "May", "June", "July" ],
            datasets: [
                {
                    label: "Credits",
                    data: [ 65, 59, 80, 81, 56, 55, 40 ],
                    borderColor: "rgba(83,18,127, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(83,18,127, 0.7)"
                            },
                {
                    label: "Debits",
                    data: [ 28, 48, 40, 19, 86, 27, 90 ],
                    borderColor: "rgba(242,87,76,0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(242,87,76,0.7)"
                            },
							{
                    label: "Income",
                    data: [ 70, 68, 95, 120, 69, 64, 78],
                    borderColor: "rgba(36, 226, 113, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(36, 226, 113, 0.7)"
                            },
                {
                    label: "Net Profit",
                    data: [ 80, 78, 120, 114, 85, 76, 69 ],
                    borderColor: "rgba(69, 170, 242, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(69, 170, 242, 0.7)"
                            }
                        ]
        },
        options: {
			maintainAspectRatio: false,
			
			responsive: true,
            scales: {
                yAxes: [ {
					barPercentage: 0.3,
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
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
                label: 'views',
                backgroundColor: 'rgb(245, 54, 92,0.6)',
                borderColor: 'rgba(245, 54, 92, 0.9)',
            }, ]
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

	/*-----AreaChart2-----*/
    var ctx = document.getElementById( "AreaChart2" );
	ctx.height = 50;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
                data: [0, 83, 43, 67, 35, 76, 0],
                label: 'Conversion',
                backgroundColor: 'rgba(83, 18, 127,0.1)',
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'transparent',
                borderColor: 'rgba(83, 18, 127)',
            }, ]
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

	/*-----AreaChart3-----*/
    var ctx = document.getElementById( "AreaChart3" );
	ctx.height = 50;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
                data: [0, 67, 76, 83 ,35, 43, 0],
                label: 'Conversion',
                backgroundColor: 'rgba(245, 54, 92,0.1)',
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'transparent',
                borderColor: 'rgba(245, 54, 92)',
            }, ]
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

	/*-----AreaChart4-----*/
    var ctx = document.getElementById( "AreaChart4" );
	ctx.height = 50;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
                data: [0, 46, 55, 76, 63, 23,0],
                label: 'Conversion',
                backgroundColor: 'rgba(36, 226, 113,0.1)',
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'transparent',
                borderColor: 'rgba(36, 226, 113)',
            }, ]
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
	/*-----AreaChart4-----*/
    var ctx = document.getElementById( "AreaChart5" );
	ctx.height = 50;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
                data: [0, 67, 35, 76, 83, 43, 0],
                label: 'Conversion',
                backgroundColor: 'rgba(69, 170, 242,0.1)',
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'transparent',
                borderColor: 'rgba(69, 170, 242)',
            }, ]
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
(function($) {
    "use strict";

	/*---ChartJS ---*/
	var ctx = document.getElementById("chart");
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			type: 'bar',
			datasets: [{
				label: "Sales",
				data: [10, 60, 30, 90, 120, 76, 35, 42, 63, 45, 55, 75],
				backgroundColor: '#f2574c',
				borderColor: '#f2574c',
				borderWidth: 0,
				pointStyle: 'circle',
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#f2574c',

			}]
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
				cornerRadius: 0,
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
					barPercentage: 0.2,
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
						fontColor: '#efefff'
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
						display: false,
						labelString: 'sales',
						fontColor: '#efefff'
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
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "M", "T", "W", "TH", "F", "SA", "S" ],
            type: 'line',
            defaultFontFamily: 'Montserrat',
            datasets: [ {
                data: [ 0, 7, 3, 5, 2, 10, 7 ],
                label: "Task",
                backgroundColor: 'rgb(127,18,117,0.05)',
                borderColor: 'rgba(127,18,117)',
                borderWidth: 3.5,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(127,18,117,0.5)',
            }, 
			{
				label: "PageViews",
				data: [0, 10, 2, 9, 8, 14, 3],
				backgroundColor: 'rgb(242, 87, 76, 0.05)',
				borderColor: 'rgb(242, 87, 76)',
				borderWidth: 3,
				pointStyle: 'circle',
				pointRadius: 5,
				pointBorderColor: 'transparent',
				pointBackgroundColor: 'rgb(242, 87, 76)',
			},]
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


	 //bar chart
    var ctx = document.getElementById( "barChart" );
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "2012", "2013", "2014", "2015", "2016", "2017", "2018" ],
            datasets: [
                {
                    label: "New Customer",
                    data: [ 20,35,25,42,30,48,47],
                    borderColor: "rgb(83,18,127,0.9)",
                    borderWidth: "3",
					pointRadius:"8",
					pointBorderColor: 'transparent',
					pointBackgroundColor: 'rgb(83,18,127,0.9)',
                    backgroundColor: "rgb(83,18,127,0.05)"
                }]
        },
        options: {
			responsive: true,
			maintainAspectRatio: false,
			barRoundness: 1,
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
						}
                    }]
            }
        }
    } );

})(jQuery);


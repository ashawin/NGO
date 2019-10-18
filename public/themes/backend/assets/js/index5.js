(function($) {
    "use strict";
	
	//doughut chart
    var ctx = document.getElementById( "doughutChart" );
    var myChart = new Chart( ctx, {
        type: 'doughnut',
        data: {
            datasets: [ {
                data: [ 9187, 3654, 7319, 1875 ],
                backgroundColor: [
                                    "#53127F",
                                    "#4cf257",
                                    "#f2574c",
                                    "#f2aa4c"
                                ],
                hoverBackgroundColor: [
                                    "#53127F",
                                    "#4cf257",
                                    "#f2574c",
                                    "#f2aa4c"
                                ]

                            } ],
            labels: [
                            "FaceBook",
                            "Instragram",
                            "Twitter",
                            "LinkedIn",
                        ]
        },
        options: {
            responsive: true,
			maintainAspectRatio: false,
        }
    } );
	
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
                    columnWidth: '70%',
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

                name: 'likes',

                data: [286, 498, 834, 589, 426, 683, 489, 289]
            }, {
                name: 'Clicks',

                data: [734, 392, 528, 628, 839, 382, 489, 894]
            }, {
                name: 'Comments',
                data: [163, 493, 836, 389, 592, 653, 894, 482]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
            },
            yaxis: {

            },
            fill: {
                opacity: 1

            },
			colors: ['#f2574c', '#53127F', '#f2aa4c'],
            tooltip: {
                y: {
                    formatter: function (val) {
                        return " " + val + " "
                    }
                }
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#social"),
            options
        );

        chart.render();

	/*--impression charts--*/
	var options = {
		chart: {
			height: 300,
			type: 'bar',
		},
		plotOptions: {
			bar: {
				horizontal: true,
			}
		},
		dataLabels: {
			enabled: false
		},
		series: [{
			 name: 'Imperssions',
			data: [895, 378, 892, 392, 937, 639, 467, 839, 927, 672]
		}],
		xaxis: {
			categories: ['2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018'],
		},
		yaxis: {

		},
		colors: ['#53127F'],
		tooltip: {

		}
	}

   var chart = new ApexCharts(
		document.querySelector("#chart"),
		options
	);

	chart.render();
})(jQuery);
(function($) {
    "use strict";

	$(".sparkline_bar1").sparkline([5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 2], {
		type: 'bar',
		height: 50,
		width:120,
		barSpacing: 4,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#4c94f2'
	});

	$(".sparkline_bar").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5], {
		type: 'bar',
		height: 50,
		height: 50,
		width:120,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#f2574c',
		barSpacing: 4
	});

	$(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
		type: 'line',
		height: '50',
		width: '110',
		lineColor: '#00a441',
		fillColor: '#ffffff',
		lineWidth: 3,
		spotColor: '#ffb209',
		minSpotColor: '#ffb209'
	});

	$(".sparkline23").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
		type: 'line',
		height: '50',
		width: '110',
		lineColor: '#53127F',
		fillColor: '#ffffff',
		lineWidth: 3,
		spotColor: '#ffb209',
		minSpotColor: '#ffa22b'
	});

	//line chart
    var ctx = document.getElementById( "lineChart" );
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun" ],
            datasets: [
                {
                    label: "Visitors",
                    borderColor: "rgb(83, 18, 127,0.9)",
                    borderWidth: "2",
                    backgroundColor: "rgb(83, 18, 127,0.1)",
                    data: [ 10, 60, 30, 90, 120, 76, 35]
                            },
                {
                    label: "Returning Visitors",
                    borderColor: "rgb(242,87,76,0.9)",
                    borderWidth: "2",
                    backgroundColor: "rgb(242,87,76,0.1)",
                    pointHighlightStroke: "rgb(242,87,76)",
                    data: [22, 88, 68, 140, 60, 80, 95]
                            }
                        ]
        },
        options: {
            responsive: true,
			maintainAspectRatio: false,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    } );


	//pie chart
    var ctx = document.getElementById( "pieChart" );
    ctx.height = 290;
    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ 25, 48, 89, 37 ],
                backgroundColor: [
                                    "#4c94f2",
                                    "#53127F",
                                    "#f2574c",
                                    "#f2aa4c"
                                ],
                hoverBackgroundColor: [
                                    "#4c94f2",
                                    "#53127F",
                                    "#f2574c",
                                    "#f2aa4c"
                                ]

                            } ],
            labels: [
                            "Google",
                            "IE",
                            "Firefox",
							"Opera"
                        ]
        },
        options: {
            responsive: true,
			maintainAspectRatio: false,
        }
    } );

	/*---Morris (#graph5)---*/
	Morris.Bar({
		barGap:4,
		barSizeRatio:0.33,
		element: 'graph5',
		data: [{
			x: '2012',
			y: 3407,
			z: 2660
		}, {
			x: '2013',
			y: 3351,
			z: 3629
		}, {
			x: '2014',
			y: 3269,
			z: 2618
		}, {
			x: '2015',
			y: 3246,
			z: 1661
		}, {
			x: '2016',
			y: 3517,
			z: 2660
		}, {
			x: '2017',
			y: 3051,
			z: 2620

		}, {
			x: '2018',
			y: 3276,
			z: 2661
		}],
		barThickness : 10,
		xkey: 'x',
		ykeys: ['y', 'z'],
		labels: ['Expenses', 'Earning'],
		barColors: ['#53127F', '#f2574c']
	});
	/*---Morris (#graph5) closed---*/

})(jQuery);


$(document).ready(function () {
    if($('.datatable-1').length>0){
        $('.datatable-1').dataTable();
        $('.dataTables_paginate').addClass('btn-group datatable-pagination');
        $('.dataTables_paginate > a').wrapInner('<span />');
        $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
        $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    
        $( '.slider-range').slider({
			    range: true,
			    min: 0,
			    max: 20000,
			    values: [ 3000, 12000 ],			
			    slide: function(event, ui) {
				    $(this).find('.ui-slider-handle').attr('title', ui.value);
			    },
	    });
	
        $( '#amount' ).val( '$' + $( '.slider-range' ).slider( 'values', 0 ) + ' - $' + $( '.slider-range' ).slider( 'values', 1 ) );
    

    //Graph/Chart index.html

    var d1 = [ [0, 60], [1, 54], [2, 55], [3, 44], [4, 45], [5, 41], [6, 34], [7, 25],  [8, 25] ];
    var d2 = [ [0, 8], [1, 10], [2, 12], [3, 15], [4, 17],  [5, 19], [6, 20], [7, 16], [8, 18] ];
    var d3 = [ [0, 55], [1, 52], [2, 50], [3, 51], [4, 59],  [5, 55], [6, 52], [7, 51], [8, 58] ];
    var d4 = [ [0, 20], [1, 25], [2, 30], [3, 40], [4, 45],  [5, 44], [6, 50], [7, 40], [8, 43] ];

		var plot = $.plot($('#placeholder2'),
			   [ { data: d1, label: 'FPS'}, { data: d2, label: 'Players' }, { data: d3, label: 'Zombies' }, { data: d4, label: 'Memory(%)' } ], {
					lines: {
						show: true,
						fill: true, /*SWITCHED*/
						lineWidth: 2
					},
					points: {
						show: true,
						lineWidth: 5
					},
					grid: {
						clickable: true,
						hoverable: true,
						autoHighlight: true,
						mouseActiveRadius: 10,
						aboveData: true,
						backgroundColor: '#fff',
						borderWidth: 0,
						minBorderMargin: 25,
					},
					colors: [ '#55f3c0', '#0db37e',  '#b4fae3', '#e0d1cb'],
					shadowSize: 0
				 });

		function showTooltip(x, y, contents) {
			$('<div id="gridtip">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo('body').fadeIn(300);
		}

		var previousPoint = null;
		$('#placeholder2').bind('plothover', function (event, pos, item) {
			$('#x').text(pos.x.toFixed(2));
			$('#y').text(pos.y.toFixed(2));

			if (item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;

					$('#gridtip').remove();
					var x = item.datapoint[0].toFixed(0),
						y = item.datapoint[1].toFixed(0);

					showTooltip(item.pageX, item.pageY,
								'x : ' + x + '&nbsp;&nbsp;&nbsp; y : ' + y);
				}
			}
			else {
				$('#gridtip').remove();
				previousPoint = null;
			}
		});
    }

    else
    {
        var d1 = [ [0, 1], [1, 14], [2, 5], [3, 4], [4, 5], [5, 1], [6, 14], [7, 5],  [8, 5] ];
		var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2], [7, 10], [8, 8] ];

		var plot = $.plot($("#placeholder"), 
		[ { data: d1, label: "Data A" }, { data: d2, label: "Data B" } ], {
			lines: { 
				show: true, 
				fill: false, 
				lineWidth: 2 
			},
			points: { 
				show: true, 
				lineWidth: 5 
			},
			grid: {
				clickable: true,
				hoverable: true,
				autoHighlight: true,
				mouseActiveRadius: 10,
				aboveData: true,
				backgroundColor: "#fafafa",
				borderWidth: 0,
				minBorderMargin: 25,
			},
			colors: [ "#090", "#099",  "#609", "#900"],
			shadowSize: 0
		});

        var d1 = [ [0, 1], [1, 14], [2, 5], [3, 4], [4, 5], [5, 1], [6, 14], [7, 5],  [8, 5] ];
		var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2], [7, 10], [8, 8] ];

		var plot = $.plot($("#placeholder2"),
			   [ { data: d1, label: "Data Y"}, { data: d2, label: "Data X" } ], {
					lines: { 
						show: true, 
						fill: true, /*SWITCHED*/
						lineWidth: 2 
					},
					points: { 
						show: true, 
						lineWidth: 5 
					},
					grid: {
						clickable: true,
						hoverable: true,
						autoHighlight: true,
						mouseActiveRadius: 10,
						aboveData: true,
						backgroundColor: "#fafafa",
						borderWidth: 0,
						minBorderMargin: 25,
					},
					colors: [ "#090", "#099",  "#609", "#900"],
					shadowSize: 0
				 });

		function showTooltip(x, y, contents) {
			$('<div id="gridtip">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(300);
		}

		var previousPoint = null;
		$("#placeholder2").bind("plothover", function (event, pos, item) {
			$("#x").text(pos.x.toFixed(2));
			$("#y").text(pos.y.toFixed(2));

			if (item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
					
					$("#gridtip").remove();
					var x = item.datapoint[0].toFixed(0),
						y = item.datapoint[1].toFixed(0);
					
					showTooltip(item.pageX, item.pageY,
								"x : " + x + "&nbsp;&nbsp;&nbsp; y : " + y);
				}
			}
			else {
				$("#gridtip").remove();
				previousPoint = null;            
			}
		});

          // PREDEFINED DATA
        var data = [
						{ label: "Series1", data: [[1, 10]] },
						{ label: "Series2", data: [[1, 30]] },
						{ label: "Series3", data: [[1, 90]] }
					];

        // DEFAULT
        $.plot($("#pie-default"), data,
		{
		    series: {
		        pie: {
		            show: true
		        }
		    }
		});

        // DEFINE ACTIONS FOR pieHover & pieClick
        function pieHover(event, pos, obj) {
            if (!obj)
                return;
            percent = parseFloat(obj.series.percent).toFixed(2);
            $("#hover").html('<span>' + obj.series.label + ' - ' + percent + '%</span>');
        }

        function pieClick(event, pos, obj) {
            if (!obj)
                return;
            percent = parseFloat(obj.series.percent).toFixed(2);
            alert('' + obj.series.label + ': ' + percent + '%');
        }

        // DONUT
        $.plot($("#pie-donut"), data,
		{
		    series: {
		        pie: {
		            innerRadius: 50,
		            show: true
		        }
		    }
		});

        // DONUT + INTERACTIVE
        $.plot($("#pie-interactive"), data,
		{
		    series: {
		        pie: {
		            innerRadius: 50,
		            show: true
		        }
		    },
		    grid: {
		        hoverable: true,
		        clickable: true
		    }
		});

        $("#pie-interactive").bind("plothover", pieHover);
        $("#pie-interactive").bind("plotclick", pieClick);
    }
});

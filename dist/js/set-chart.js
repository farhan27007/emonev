    /* defined datas */
        var dataTargetProfit = [
        [1354586000000, 153,],
        [1364587000000, 658],
        [1374588000000, 198],
        [1384589000000, 663],
        [1394590000000, 801],
        [1404591000000, 1080],
        [1414592000000, 353],
        [1424593000000, 749],
        [1434594000000, 523],
        [1444595000000, 258],
        [1454596000000, 688],
        [1464597000000, 364]
        ]
        var dataProfit = [
        [1354586000000, 53],
        [1364587000000, 65],
        [1374588000000, 98],
        [1384589000000, 83],
        [1394590000000, 980],
        [1404591000000, 808],
        [1414592000000, 720],
        [1424593000000, 674],
        [1434594000000, 23],
        [1444595000000, 79],
        [1454596000000, 88],
        [1464597000000, 36]
        ]
        var dataSignups = [
        [1354586000000, 647],
        [1364587000000, 435],
        [1374588000000, 784],
        [1384589000000, 346],
        [1394590000000, 487],
        [1404591000000, 463],
        [1414592000000, 479],
        [1424593000000, 236],
        [1434594000000, 843],
        [1444595000000, 657],
        [1454596000000, 241],
        [1464597000000, 341]
        ];

        /* flot toggle example */
        var flot_toggle = function()
        {

            var data = [
            {
                label: "Data realisasi",
                data: dataTargetProfit,
                color: myapp_get_color.info_400,
                bars:
                {
                    show: true,
                    align: "center",
                    barWidth: 30 * 30 * 60 * 1000 * 80,
                    lineWidth: 0,
                            /*fillColor: {
                            	colors: [myapp_get_color.primary_500, myapp_get_color.primary_900]
                            },*/
                            fillColor:
                            {
                                colors: [
                                {
                                    opacity: 0.9
                                },
                                {
                                    opacity: 0.1
                                }]
                            }
                        },
                        highlightColor: 'rgba(255,255,255,0.3)',
                        shadowSize: 0
                    },
                    {
                        label: "Actual Profit",
                        data: dataProfit,
                        color: myapp_get_color.warning_500,
                        lines:
                        {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points:
                        {
                            show: true
                        }
                    },
                    {
                        label: "User Signups",
                        data: dataSignups,
                        color: myapp_get_color.success_500,
                        lines:
                        {
                            show: true,
                            lineWidth: 2
                        },
                        shadowSize: 0,
                        points:
                        {
                            show: true
                        }
                    }]

                    var options = {
                        grid:
                        {
                            hoverable: true,
                            clickable: true,
                            tickColor: '#f2f2f2',
                            borderWidth: 1,
                            borderColor: '#f2f2f2'
                        },
                        tooltip: true,
                        tooltipOpts:
                        {
                            cssClass: 'tooltip-inner',
                            defaultTheme: false
                        },
                        xaxis:
                        {
                            mode: "time"
                        },
                        yaxes:
                        {
                            tickFormatter: function(val, axis)
                            {
                                return "$" + val;
                            },
                            max: 1200
                        }

                    };

                    var plot2 = null;

                    function plotNow()
                    {
                        var d = [];
                        $("#js-checkbox-toggles").find(':checkbox').each(function()
                        {
                            if ($(this).is(':checked'))
                            {
                                d.push(data[$(this).attr("name").substr(4, 1)]);
                            }
                        });
                        if (d.length > 0)
                        {
                            if (plot2)
                            {
                                plot2.setData(d);
                                plot2.draw();
                            }
                            else
                            {
                                plot2 = $.plot($("#flot-toggles"), d, options);
                            }
                        }

                    };

                    $("#js-checkbox-toggles").find(':checkbox').on('change', function()
                    {
                        plotNow();
                    });
                    plotNow()
                }
                flot_toggle();
                /* flot toggle example -- end*/

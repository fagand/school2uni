<?php
include 'database/getData.php';
?>
<html>

<head>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];

    </script>
    <style>
        .zc-ref {
            display: none;
        }

    </style>
</head>

<body>
    <div id="myChart"><a class="zc-ref" href="https://www.zingchart.com">Powered by ZingChart</a></div>
    <script>
        var data = <?php echo $dataJSON; ?>;

        var arrayS = [];
        var text = [];
        var count = [];

        for (var i = 0; i < data.length; i++) {
            arrayS.push('"text"' + ':' + '"' + [data[i].search + '"', '"count"' + ':' + (data[i].id)]);
            text.push(data[i].search);
            count.push(data[i].id);


        }
        var myConfig = {
            "graphset": [{
                "type": "wordcloud",

                "options": {
                    "style": {
                        "tooltip": {
                            visible: true,
                            text: '%text: %hits'
                        }
                    },
                    "text": String(text),
                    "rotate": false,
                    "colorType": 'palette',
                    //                    "color": '#4286f4'
                    palette: ['#4286f4', '#3F51B5', '#42A5F5', '#5C6BC0', '#64B5F6', '#7986CB', '#90CAF9', '#9FA8DA', '#BBDEFB', '#C5CAE9', 'darkgrey'],
                    minLength: 4,
                    aspect: 'spiral',
                    rotate: true,
                    minFontSize: 10

                } // End of options
            }] // End of graphset
        } // End of myConfig

        zingchart.render({
            id: 'myChart',
            data: myConfig,
            height: '300vh',
            width: '100vw'
        });

    </script>
</body>

</html>

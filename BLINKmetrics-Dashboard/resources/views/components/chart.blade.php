@props(['color' => '', 'data' => [], 'chartype' => [], 'charColor' => []])

<div>
    <div class="Map-header">
        <div id="widgetTitle">Chart Container</div>
        
        <div id="edit-button" class="button-image">
            <img src="/images/edit.png"/>
        </div>
    </div>
    <div class="component-body">
        <canvas id="outer-chart" height="230px"  width="390px"></canvas>
    </div>
    <div id="modal" class="model-background" draggable=false>
        <div class="modal-pane">
            <div class="Map-header">
                <div class="modal-edit">Edit widget</div>
                <div id='close-button' class="button-image btn-close">
                    <img src="/images/close.png"/>
                </div>
            </div>
            <div class="modal-body-container">
                <div id="modal-left" class="modal-left">
                </div>
                <div class="modal-right">
                    <div class="row">
                        <label for="chartTypeSelector">Chart type</label>
                        <select id='chartTypeSelector' class="box-input">
                            @foreach($chartype as $optionValue)
                                <option $value=`{{ $optionValue[`id`] }}`>{{ $optionValue['name'] }}</options>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <label for="chartColorSelector">Chart color</label>
                        <div id='chartColorSelector' class="color-selector">
                            @foreach($charColor as $colorValue)
                                <div id='{{ $colorValue[`id`] }}' class="square" style="background-color: #{{ $colorValue['color'] }}" data-color="#{{ $colorValue['color'] }}"></div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <label for="title">Title</label>
                        <input id="title" class="box-input padding-left" type="text" value=""/>
                    </div>
                    <div class="row">
                        <label for="X-label">X-axis</label>
                        <input id="X-label" class="box-input padding-left" type="text" value=""/>
                    </div>
                    <div class="row">
                        <label for="Y-label">Y-axis</label>
                        <input id="Y-label" class="box-input padding-left" type="text" value=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var initialType = 'bar';

    document.addEventListener('DOMContentLoaded', function () {
        var selectElement = document.getElementById('chartTypeSelector');
        var colorSquares = document.querySelectorAll('.color-selector .square');
        var xAxisLabel = null;
        var yAxisLabel = null;
        var selectedValue = initialType;
        var selectedColor = '#4ECBC4';

        createChart(initialType, selectedColor, 'outer-chart');

        $("#close-button").click(function(){
          var x = document.getElementById("modal");
            x.style.display = "none";
        });
        
        $("#edit-button").click(function(){
            var mainChart = $("#outer-chart").clone();
            mainChart.removeAttr('data-chartjs');
            mainChart.attr("id", "modalChart");
            $("#modal-left").html(mainChart);
            
            var x = document.getElementById("modal");
                x.style.display = "flex";
        });

        $("#title").change(function(e){
            var titleElement = e.target.value;
            $('#widgetTitle').html(titleElement);
        })

        $("#X-label").change(function(e){
            xAxisLabel = e.target.value;
            updateChart(selectedValue, selectedColor, 'modalChart');
            updateChart(selectedValue, selectedColor, 'outer-chart');
        })

        $("#Y-label").change(function(e){
            yAxisLabel = e.target.value;
            updateChart(selectedValue, selectedColor, 'modalChart');
            updateChart(selectedValue, selectedColor, 'outer-chart');
        })

        colorSquares.forEach(function(square) {
            square.addEventListener('click', function(e) {
                selectedColor = e.target.getAttribute('data-color');

                updateChart(selectedValue, selectedColor, 'modalChart');
                updateChart(selectedValue, selectedColor, 'outer-chart');
            });
        });

        selectElement.addEventListener('change', function() {
            selectedValue = this.value;

            updateChart(selectedValue, selectedColor, 'modalChart');
            updateChart(selectedValue, selectedColor, 'outer-chart');
        });

        updateChart(selectedValue, selectedColor, 'outer-chart');

        function createChart(selectedValue, selectedColor, chartId){

        var labels = [];
        
        <?php foreach ($data['days'] as $day): ?>
            var initialDate = ("<?= $day['datetime'] ?>");
            var transformedDate = moment(initialDate).format('dddd').substring(0,3); 
            labels.push(transformedDate)
        <?php endforeach; ?>
        
        var dataArray = [];

        <?php foreach ($data['days'] as $day): ?>
            dataArray.push("<?= $day['temp'] ?>");
        <?php endforeach; ?>

        const data = {
            labels: labels,
            datasets: [{
                label: 'temp',
                backgroundColor: selectedColor,
                data: dataArray,
            }]
        };

        const config = {
        type: selectedValue ? selectedValue : initialType,
        data: data,
        responsive: true,
        options:{
            scales: {
            x: {
                title: {
                    display: true,
                    text: xAxisLabel ? xAxisLabel : ''
                }
            },
            y: {
                title: {
                    display: true,
                    text: yAxisLabel ? yAxisLabel : ''
                }
            }
        },
        plugins: {
          legend: {
            position: 'bottom-right',
          },
          title: {
            display: false,
            text: 'Temperature in U.S',
          },
          backgroundColor: 'red',
        },}
      };

        const myChart = new Chart(
            document.getElementById(chartId),
            config
        );
            
    }

    function updateChart(selectedValue, selectedColor, chartId) {
        const existingChart = Chart.getChart(chartId);
        if (existingChart) {
            existingChart.destroy();
        }

        createChart(selectedValue, selectedColor, chartId);
    }
});
</script>

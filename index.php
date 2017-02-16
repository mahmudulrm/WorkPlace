<?php
include 'include/header.php';

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12"> <br />


					<div id="chart"></div>

		</div><!-- End col-lg-12--->
	</div> <!--End main row--->
</div><!--End main container--->


<?php
	require_once('api.php');
?>
<script>

var chart = c3.generate({
    bindto: '#chart',
    data: {
	x: 'Date',
	xFormat: '%d-%b-%y',
        url: './chart.csv',
        type: 'line',
        labels: false,
    },

        grid: {
                y: {
                        lines: [{value: 120, text: 'APH 120'}]
                }
            },

    
    axis: {
	x: {
	    type: 'timeseries',
	    localtime: true,
    
	    tick: {
		format: '%Y-%m-%d',
	    }
	}
    
    },



});

</script>

<?php
include 'include/footer.php';
?>

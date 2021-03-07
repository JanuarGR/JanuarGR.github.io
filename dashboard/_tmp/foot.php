
<!-- Tutup Container -->
</div>
<!-- Tutup Wrapper -->
</div>

<!-- Jquery -->
<script src="../assets/dashboard-toko/plugins/jquery-3.2.1.slim.min.js"></script>
  <script src="../assets/dashboard-toko/plugins/popper.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/dashboard-toko/plugins/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<!-- Chart -->
<script	src="../assets/dashboard-toko/plugins/chartjs/chart.min.js"></script>
<script>
var ctx = document.getElementById('Chart1');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3,1,2,100,100,100,20],
            backgroundColor: [
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1'
            ],
            borderColor: [
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1'
            ],
            borderWidth: 1
        }]
    },
    options: {
    	 legend: {
    	 	display:false
    	 }
    	,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


var ctx = document.getElementById('Chart2');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3,1,2,100,100,100,20],
            backgroundColor: [
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1'
            ],
            borderColor: [
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1',
                '#2177B1'
            ],
            borderWidth: 1
        }]
    },
    options: {
    	 legend: {
    	 	display:false
    	 },

        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<!-- Datatable -->
<!-- <script src="../assets/dashboard-toko/plugins/jquery.dataTables.min.js"></script>
<script src="../assets/dashboard-toko/plugins/dataTables.bootstrap4.min.js"></script>
<script src="../assets/dashboard-toko/plugins/slick/slick.min.js"></script> -->
<!-- Slick -->
<!-- <script>
	$(document).ready(function(){
  $('.category-menu').slick({
    slidesToShow: 9,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  });
});
</script> -->
<!-- Fab -->
<script>
    var $yourSideCategory = $(".side-fab");
$(document).on("click.toggleNav touch.toggleNav", ".show-fab-button", function(){ 
 $yourSideCategory.toggleClass("side-menu-open");
});
</script>
</body>
</html>
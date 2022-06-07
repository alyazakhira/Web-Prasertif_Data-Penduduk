<!DOCTYPE html>
<html>
    <head>
        <title>Statistic Show Section</title>
        <!--Framework CSS-->
        <link rel="stylesheet" href="framework/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
        <!--CSS custom-->
        <link rel="stylesheet" href="stylesheet/stylesheet.css">
        <!--Framework Javascript-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="framework/bootstrap-5.2.0-beta1-dist/js/bootstrap.js"></script>
    </head>
    <body>
        <!--Navbar-->
        <div class="container sticky-top">
            <nav class="row nav navbar-expand-lg">
                <div class="col text-center nav-side nav-item">
                    <a class="nav-link" href="index.php" target="_self">03 Statistic Website</a>
                </div>
                <div class="col-6 nav-menu text-center" id="#navbar">
                    <ul class="nav nav-fill nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#education">Pendidikan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gender">Jenis Kelamin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#status">Status Kawin</a>
                        </li>

                    </ul>
                </div>
                <div class="col nav-side nav-item text-center">
                    <a class="nav-link" href="index2.php" target="_blank">Admin Section</a>
                </div>
            </nav>
        </div>
        <!--End of navbar-->

        <!--Banner-->
        <div class="container">
            <div class="container banner vh-100">
                <div class="row align-items-center text-center h-75">
                    <div class="banner-text">
                        <p class="display-1 fw-bold">Welcome</p>
                        <p class="display-6">03 Statistic Website</p>
                    </div>
                </div>
            </div>
        </div>
        <!--End of banner-->

        <!--Content-->
        <div class="container">
        <div class="row article wrapper-sign">
            <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                
                <!--Education-->
                <div class="container text-center content-head display-6" id="edu_head">
                    <p>Tingkat Pendidikan Warga</p>
                </div>
                <div class="col">
                    <div class="chart" id="education">
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Education', 'Person_count'],
                                <?php
                                    $conn = mysqli_connect('localhost','root','','penduduk_db');
                                    $edu_data = mysqli_query($conn,"SELECT Pendidikan, COUNT(ID_Penduduk) as Jumlah from data_penduduk GROUP BY Pendidikan");
                                    while($result = mysqli_fetch_assoc($edu_data)){
                                        echo "['".$result['Pendidikan']."',".$result['Jumlah']."],";
                                    }
                                ?>
                            ]);
                            var options = {
                                title: 'Pendidikan',
                                width: 'auto', 
                                height: 'auto'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('education'));
                            chart.draw(data, options);
                        }
                    </script>
                    </div>
                </div>
                <!--End of education-->

                <!--Gender-->
                <div class="container text-center content-head display-6" id="edu_head">
                    <p>Jumlah Warga berdasarkan Jenis Kelamin</p>
                </div>
                <div class="col">
                    <div class="chart" id="gender">
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Gender', 'Person_count'],
                                <?php
                                    $conn = mysqli_connect('localhost','root','','penduduk_db');
                                    $edu_data = mysqli_query($conn,"SELECT Jenis_Kelamin, COUNT(ID_Penduduk) as Jumlah from data_penduduk GROUP BY Jenis_Kelamin");
                                    while($result = mysqli_fetch_assoc($edu_data)){
                                        echo "['".$result['Jenis_Kelamin']."',".$result['Jumlah']."],";
                                    }
                                ?>
                            ]);
                            var options = {
                                title: 'Jenis Kelamin'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('gender'));
                            chart.draw(data, options);
                        }
                    </script>
                    </div>
                </div>
                <!--End of gender-->

                <!--Status-->
                <div class="container text-center content-head display-6" id="edu_head">
                    <p>Status Perkawinan Warga</p>
                </div>
                <div class="col">
                    <div class="chart" id="status">
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Status', 'Person_count'],
                                <?php
                                    $conn = mysqli_connect('localhost','root','','penduduk_db');
                                    $edu_data = mysqli_query($conn,"SELECT Status_kawin, COUNT(ID_Penduduk) as Jumlah from data_penduduk GROUP BY Status_kawin");
                                    while($result = mysqli_fetch_assoc($edu_data)){
                                        echo "['".$result['Status_kawin']."',".$result['Jumlah']."],";
                                    }
                                ?>
                            ]);
                            var options = {
                                title: 'Status Perkawinan'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('status'));
                            chart.draw(data, options);
                        }
                    </script>
                    </div>
                </div>
                <!--End of status-->

            </div>    
        </div>
        </div>
        <!--End of ontent-->

        <!--Footer-->
        <footer class="container">
            <div class="row footer-content">
                <div class="col m-3 text-center" id="copyright">
                    <p>&copy; 2022 Alya Zakhira Anjani</p>
                </div>
            </div>
        </footer>
        <!--End of footer-->
    </body>
</html>
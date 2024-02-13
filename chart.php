<!DOCTYPE html>
<html lang="en">
    <head>
        <title>aivr ka</title>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <meta content="" name="description">
        <meta content="" name="keywords">

        <link href="assets/bootstrap.min.css" rel="stylesheet">
        <link href="assets/style.css" rel="stylesheet">
    </head>
    <body>
          <main id="main" class="main">
            <section class="section">
              <div class="row">
        
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"></h5>
        
                      <!-- Line Chart -->
                      <div id="lineChart"></div>
        
                      <script>
                        let dataArray = [];

                        for (let i = 1; i <= 12; i++) 
                        { 
                            dataArray.push(Math.floor(Math.random() * (35001 - 30000) + 30000));
                        }

                        document.addEventListener("DOMContentLoaded", () => {
                          new ApexCharts(document.querySelector("#lineChart"), {
                            series:[{
                              name:"Desktops",
                              data:dataArray
                            }],
                            chart: {
                              height: 350,
                              type: 'line',
                              zoom: {
                                enabled: false
                              }
                            },
                            dataLabels: {
                              enabled: true
                            },
                            stroke: {
                              curve: 'straight'
                            },
                            grid: {
                              row: {
                                colors: ['#f3f3f3', 'transparent'],
                                opacity: 0.5
                              },
                            },
                            xaxis: {
                              categories: ['Janvier', 'Février', 'Mars', 'Avril', 'May', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                            }
                          }).render();
                        });
                      </script>
        
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </main>
    </body>
  <script src="assets/apexcharts.min.js"></script>
</html>
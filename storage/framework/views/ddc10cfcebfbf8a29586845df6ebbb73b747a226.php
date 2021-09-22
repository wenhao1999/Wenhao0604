<!doctype html>

<html lang="en">
  <head>
 <style>
   h3 {
    border-radius: 10px;
    text-align: left;
    width: 49%;
    display: inline-block;
    font-size: 50px;
    height: 100px;
    margin-bottom: -225px;
    margin-top: -226px;
    
   }
   body {
     background-color: #F5F5DC;
    
   }
   h4 {
    border-radius: 15px;
    width:50%;
    display: inline-block;
    font-size: 50px;
    height: 100px;
    margin-bottom: 5px;
    margin-top: -150px;
    text-align: left;
    font-variant: small-caps;
   }
   
  h2 {
    border-radius: 15px;
  }
  a {
  cursor: pointer;
  color: black;
}


a.b {
  padding: 10px 15px;
  border: 2px solid black;
  border-radius: 100px;
  text-decoration: none;
  
 
}


a.b:hover{
  background-color: lightblue;
  color: black;
  
}
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
 
  text-align: right;
  width:100%;
  border-radius: 15px;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 10px;
  text-decoration: none;
}

div.scrollmenu a:hove {
  background-color: #777;
}
.dash {
  color: white;
  text-align: left;
  font-size: 45px;
  margin: auto;
}

.dash {
  width: 91%;
}
 </style>
    <title >Electricity Consumption and Electricity Bill</title>
    
 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
</head>
  <body>
  <div class="scrollmenu">
   <h3 class="dash">Dashboard kWh</h3>
  <a href="google-bars-chart">Previous page</a>
  </div>
         
        </div>
    <h2 style="text-align: center; background-color: #778899; font-size: 40px;">Electricity Consumption and Electricity Bill</h2>

    <h3 style="background-color: #5F9EA0; ">TOTAL kWh: 3731</h3>
    <h4 style="background-color:  #6495ED;">MONTH: JAN-DEC</h4>
 
    <div class="container-fluid p-5">
      
    <div id="barchart_material" style="width: 1500px%; height: 600px;"></div>
    
    </div>
   
    <script type="text/javascript">
 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
 
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['month', 'kWh'],
 
            <?php
              foreach($bases as $base) {
                  echo "['".$base->month."', ".$base->kWh."],";
              }
            ?>
        ]);
 
        var options = {
          chart: {
            title: 'Electricity Consumption and Electricity Bill',
            
          },
          bars: 'horizontal'
        };
        var chart = new google.charts.Bar(document.getElementById('barchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\newlogin\Blog\resources\views/google-a-chart.blade.php ENDPATH**/ ?>
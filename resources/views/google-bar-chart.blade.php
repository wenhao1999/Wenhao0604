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

div.scrollmenu a:hover {
  background-color: #777;
}
.dash {
  color: white;
  text-align: left;
  font-size: 45px;
  margin: auto;
}

.aaa {

  border-radius: 10px;
  cursor: pointer;
}
.dash {
  width:70%;
}


 </style>
    <title >Electricity Consumption and Electricity Bill</title>
    
 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
</head>
  <body>
  
  <div class="scrollmenu">
   <h3 class="dash">Dashboard</h3>
   <a href="google-ba-chart">kWh</a>
   <a href="google-b-chart">(RM) Total Amount</a>
   <a href="google-bars-chart">Year 2020 Jul - Dec</a>
  <a href="login">Log Out</a>
   
</div>
         
        </div>
    <h2 style="text-align: center; background-color: #7FFFD4; font-size: 40px;">Electricity Consumption and Electricity Bill</h2>

    <h3 style="background-color: lightblue; ">TOTAL kWh: 3200</h3>
    <h4 style="background-color: lightblue;">MONTH: JAN - Sep</h4>
    
  </div>
    <div class="container-fluid p-5">
      
    <div id="barchart_material" style="width: 1500px; height: 600px;"></div>
    
    </div>
   
    <script type="text/javascript">
 
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
 
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['month', 'kWh', '(RM)Totalamount'],
 
            @php
              foreach($orders as $order) {
                  echo "['".$order->month."', ".$order->kWh.", ".$order->totalamount."],";
              }
            @endphp
        ]);
 
        var options = {
          chart: {
            title: 'Electricity Consumption and Electricity Bill',
            
          },
          bars: 'vertical'
        };
        var chart = new google.charts.Bar(document.getElementById('barchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
 
</body>
</html>
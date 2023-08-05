<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="calc.css">
  <link href='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/codemirror.css' rel='stylesheet'>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/codemirror.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/htmlmixed/htmlmixed.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/javascript/javascript.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.16.0/mode/xml/xml.js'></script>
</head>

<body>
  <div class="calories-cal">
    <div class="container">
      <div class="row">
     <div class="col">
        <div class="left-data">
  <div class="one">     <h1>Know Yourself!</h1> </div>
       <h5>Weight(kg)</h5>
       <input type="text" id="we">
       <h5>Height(cm)</h5>
       <input type="text" id="hi">
       <h5>Age</h5>
       <input type="text" id="age">
       <p id="resultcal"></p>
       <button class="btn-primary" onclick="Calo()">Calories Intake</button>

          <div class="bmi-value">
            <h4>BMI Value: </h4>
            <div id="bmi-output"></div>
        </div>
        <div class="status">
            <h4>Status: </h4>
            <div id="bmi-status"></div>
        </div>
          <button class="btn-primary" onclick="Bmi()">Bmi</button>
<p> Please Enter your weight,height and age</p>

       </div>
       </div>
      <div class="col">
        <div class="pie-chart">
          <h1>Pie chart</h1>
          <canvas id="myChart"></canvas>
          </div>
        </div>
   </div>
    </div>
  </div>
</body>
<script>
function Calo(){
var h=document.getElementById('hi').value;
var w=document.getElementById('we').value;
var age=document.getElementById('age').value;

var calo= (10* w/1+ 6.25 * h/1 - 5 * age/1 + 5);
var calom = calo * 1.4;

document.getElementById("resultcal").innerHTML="Your daily calories intake :"+calom;

//for showing protein fats carbs in pie chart
const proteins =calom*0.12;
const carbs =calom*0.60;
const fats =calom*0.27;

let data2= [proteins, fats, carbs];
const ctx = document.getElementById('myChart').getContext('2d');
let mychart = new Chart(ctx,{
  type:'doughnut',
  data:{
  labels: ['proteins', 'fats', 'carbs'],
  datasets : [
      {
         label : '# of votes',
         data : data2,
         backgroundColor:['#2adece', '#dd3b79', '#ff766b'],
         borderwidth:1
      }
  ]
}
});
}
function Bmi(){
var h=document.getElementById('hi').value;
var w=document.getElementById('we').value;
var result = parseFloat(w) /(parseFloat(h)/100)**2;

    if(!isNaN(result)){
        document.getElementById("bmi-output").innerHTML = result;
        if(result < 18.5){
            document.getElementById("bmi-status").innerHTML = " You are Underweight";
        }
        else if(result < 25){
            document.getElementById("bmi-status").innerHTML = " You are Healthy";
        }
        else if(result < 30){
            document.getElementById("bmi-status").innerHTML = "You are Overweight";
        }
        else{
            document.getElementById("bmi-status").innerHTML = "You have Obesity";
        }
    }
}
</script>
</html>

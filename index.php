<html>

<style>


body{
background-image:url('images/bg.jpg');
height:150%;


}
.content {
background-image:url('images/bg3.jpg');

box-shadow: 0 0 10px rgba(0,0,0,0.3);


}
fieldset{
border-radius:10px;

}

table{
font-family: verdana,arial,sans-serif;
font-size:13px;
background-image:url('images/table.jpg');

border-width: 1px;
border-color: #666666;
border-collapse: collapse;

}

table {
border-width: 1px;
padding: 8px;
border-style: solid;
border-color: #666666;
background-color: #ffffff;
margin-top:5px;
margin-left: auto;
margin-right: auto;

margin-bottom:5px;

}
.tablesize

{

width:1000px;
}

.tdsize{

width:200px;

}
fieldset{

margin-left: auto;
margin-right: auto;

}
h2{

font-style:Andale Mono;


}
div {vertical-align: middle; margin-left: 300px;
}

.text{
padding: 5px;   
border: 1px solid #DDDDDD;

/*Applying CSS3 gradient*/
background: -moz-linear-gradient(center top , #FFFFFF,  #EEEEEE 1px, #FFFFFF 20px);    
background: -webkit-gradient(linear, left top, left 20, from(#FFFFFF), color-stop(5%, #EEEEEE) to(#FFFFFF));
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FBFBFB', endColorstr='#FFFFFF');

/*Applying CSS 3radius*/   
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;

/*Applying CSS3 box shadow*/
-moz-box-shadow: 0 0 2px #DDDDDD;
-webkit-box-shadow: 0 0 2px #DDDDDD;
box-shadow: 0 0 2px #DDDDDD;

}
input[type="text"]:hover
{
border:1px solid #cccccc;
}
input[type="text"]:focus
{
box-shadow:0 0 2px #FFFE00;
}
.label{


}
.inputresize
{
text-align:center;
width:200px;
}
.mac{

background-image: -webkit-radial-gradient(cover, #437dd6, #3960a6);

}
</style>

<script type="text/javascript">

var totalsA = new Array();
var totalsB = new Array();
var totalsC = new Array();
var totalsD = new Array();
totalsA['sec1'] = 0;
totalsB['sec2'] = 0;
totalsC['sec3'] = 0;
totalsD['sec4'] = 0;
function ADD(sec,val) {

totalsA[sec] += new Number(val);
//alert(totalsA[sec]);
document.getElementById("sum").innerHTML = totalsA[sec];
}
function ADD1(seca,val1) {
totalsB[seca] += new Number(val1);
//alert(totalsA[sec]);
document.getElementById("sum1").innerHTML = totalsB[seca];
}
function ADD2(secb,val2) {
totalsC[secb] += new Number(val2);
//alert(totalsA[sec]);
document.getElementById("sum2").innerHTML = totalsC[secb];
}
function ADD3(secc,val3) {
totalsD[secc] += new Number(val3);
//alert(totalsA[sec]);
document.getElementById("sum3").innerHTML = totalsD[secc];
}
</script>

<body>
<form method="post">
<h2 align="center">The QCE of the NBC NO.461<br>
Instrument for instruction/Teaching Effectiveness</h2>
<fieldset class="content" style="width:1000px;" ><br>

<tr >
<td></td>
<td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Rating Period

</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Semester SY <input name="sem" type="text" ></input></td>
</tr><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Name of Faculty:





&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Subjects Tought:
<br>
Evaluators:<br>
<div class="cs">
<input class="checkbox" type="checkbox" name="evaluators" value="Self" >Self&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;</input><input class="checkbox" type="checkbox" name="evaluators" value="Peer" >Peer</input><br>
<input class="checkbox" name="evaluators" type="checkbox" name="d" value="Student" >Student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</input> <input class="checkbox" name="evaluators" type="checkbox" name="evaluators" value="Supervisor" >Supervisor</input><br>
</div>

<table border="1" class="" width="50%">
<tr>
<td ><b>Scale</b></td>
<td><b>Descriptive Rating</b></td>
<td><b>Qualitative Description</b></td>
</tr>

<tr>
<td>5</td>
<td>Outstanding</td>
<td>The performance almost always exceeds the job requirements.The faculty is an exceptional role model.</td>
</tr>
<tr>
<td>4</td>
<td>Very Satisfactory</td>
<td>The performance meets and often exceeds the job requirements.</td>
</tr>
<tr>
<td>3</td>
<td>Satisfactory</td>
<td>The performance meets job requirements.</td>
</tr>
<tr>
<td>2</td>
<td>Fair</td>
<td>The performance needs some development to meet job requirements.</td>
</tr>
<tr>
<td>1</td>
<td>Poor</td>
<td>Th faculty fails to meet job requirements.</td>
</tr>
</table>

<table  border="1" class="tablesize">





<tr>

<td class="left">A.Commitment</td>
<td colspan="5" align="center"> Scale </td>

</tr>
<tr>

<td class="left">1. Demonstrates sensitivity to students ability to attend and absorb content information.</td>
<td class="tdsize">
<input name="a" type="radio" value="5" onclick="ADD('sec1',this.value)" required>5&nbsp;</input>
<input name="a" type="radio" value="4" onclick="ADD('sec1',this.value)" required>4&nbsp;</input>
<input name="a" type="radio" value="3"onclick="ADD('sec1',this.value)" required>3&nbsp;</input>
<input name="a"  type="radio" value="2"onclick="ADD('sec1',this.value)" required>2&nbsp;</input>
<input  name="a" type="radio" value="1"onclick="ADD('sec1',this.value)" required>1</input>
</td>

</tr><tr>
<td class="left">2. Integrates sensitivity his/her learning objectives with those of the students in a collaborative process.</td>
<td class="tdsize" > 
<input name="b" value="5" onclick="ADD(this.value)" type="radio" required>5&nbsp;</input>
<input name="b" type="radio" value="4" onclick="ADD('sec1',this.value)" required>4&nbsp;</input>
<input name="b" type="radio" value="3"onclick="ADD('sec1',this.value)" required>3&nbsp;</input>
<input name="b" type="radio" value="2"onclick="ADD('sec1',this.value)" required>2&nbsp;</input>
<input name="b" type="radio" value="1"onclick="ADD('sec1',this.value)" required>1</input> </td>

</tr>
<tr>
<td class="left">3. Makes self available to students beyond official time. </td>
<td class="tdsize">
<input name="c" onclick="ADD(this.value)" value="5" type="radio" required>5&nbsp;</input>
<input name="c" type="radio" value="4"onclick="ADD('sec1',this.value)" required>4&nbsp;</input>
<input name="c" type="radio" value="3" onclick="ADD('sec1',this.value)" required>3&nbsp;</input>
<input name="c" type="radio" value="2" onclick="ADD('sec1',this.value)" required>2&nbsp;</input>
<input name="c" type="radio" value="1" onclick="ADD('sec1',this.value)" required>1</input> </td>

</tr>
<tr>
<td class="left">4. Regularly comes to class on time,well-groomed and well-prepared to complete assigned responsibilities.</td>
<td class="tdsize">
<input name="d" onclick="ADD(this.value)" value="5" type="radio" required>5&nbsp;</input>
<input name="d" type="radio" value="4" onclick="ADD('sec1',this.value)" required>4&nbsp;</input>
<input name="d" type="radio" value="3" onclick="ADD('sec1',this.value)" required>3&nbsp;</input>
<input name="d" type="radio" value="2" onclick="ADD('sec1',this.value)" required>2&nbsp;</input>
<input name="d" type="radio"  value="1" onclick="ADD('sec1',this.value)" required>1</input> </td>

</tr><tr>

<td class="left">5. Keeps accurate records of students performance and prompt submission of the same.</td>
<td class="tdsize" >
<input name="e" value="5" onclick="ADD(this.value)" type="radio" required>5&nbsp;</input>
<input name="e" type="radio" value="4" onclick="ADD('sec1',this.value)" required>4&nbsp;</input>
<input name="e" type="radio" value="3" onclick="ADD('sec1',this.value)" required>3&nbsp;</input>
<input name="e" type="radio" value="2" onclick="ADD('sec1',this.value)" required>2&nbsp;</input>
<input name="e" type="radio" value="1" onclick="ADD('sec1',this.value)" required>1</input> </td>
</tr>


</table><BR><BR>

<!--NEXT TABLE-->

<table border="1" class="tablesize">
<tr>
<td class="left">B. Knowledge Subject</td>
<td colspan="5" align="center"> Scale </td>
</tr>
<tr>
<td class="left">1. Demonstrate mastery of the subject matter(explain the subject matter without relying solely on the prescribed textbook).</td>
<td class="tdsize">
<input name="a2" type="radio" onclick="ADD1('sec2',this.value)" value="5" required>5&nbsp;</input>
<input name="a2" type="radio"onclick="ADD1('sec2',this.value)" value="4"  required>4&nbsp;</input>
<input name="a2" type="radio"onclick="ADD1('sec2',this.value)" value="3" required>3&nbsp;</input>
<input name="a2" type="radio"onclick="ADD1('sec2',this.value)" value="2" required >2&nbsp;</input>
<input name="a2" type="radio"onclick="ADD1('sec2',this.value)" value="1" required>1</input> </td>
</tr><tr>
<td class="left">2. Draws and share information on the state on the art of theory and practice in his/her discipline </td>
<td class="tdsize"
><input name="b2" type="radio" onclick="ADD1('sec2',this.value)" value="5" required>5&nbsp;</input>
<input name="b2" type="radio" onclick="ADD1('sec2',this.value)" value="4" required>4&nbsp;</input>
<input  name="b2"type="radio"onclick="ADD1('sec2',this.value)" value="3" required>3&nbsp;</input>
<input name="b2" type="radio"onclick="ADD1('sec2',this.value)" value="2" required>2&nbsp;</input>
<input name="b2" type="radio"onclick="ADD1('sec2',this.value)" value="1" required>1</input> </td>
</tr><tr>
<td class="left">3. Integrates subject to practical circumstances and learning intents/purposes of students </td>
<td class="tdsize">
<input  name="c2" type="radio" onclick="ADD1('sec2',this.value)" value="5" required>5&nbsp;</input>
<input name="c2"  type="radio"onclick="ADD1('sec2',this.value)" value="4"  required>4&nbsp;</input>
<input name="c2"  type="radio" onclick="ADD1('sec2',this.value)" value="3" required>3&nbsp;</input>
<input name="c2"  type="radio" onclick="ADD1('sec2',this.value)" value="2" required>2&nbsp;</input>
<input name="c2"  type="radio" onclick="ADD1('sec2',this.value)" value="1" required>1</input> </td>
</tr>
<tr>
<td class="left">4. Explains the relevance of present topics to the previous lessons, and relates the subject matter to relevant current issues and/or daily life activities.</td>
<td class="tdsize">
<input name="d2"  type="radio" onclick="ADD1('sec2',this.value)" value="5" required>5&nbsp;</input>
<input name="d2"  type="radio" onclick="ADD1('sec2',this.value)" value="4" required>4&nbsp;</input>
<input name="d2"  type="radio" onclick="ADD1('sec2',this.value)" value="3" required>3&nbsp;</input>
<input name="d2"  type="radio"onclick="ADD1('sec2',this.value)" value="2" required>2&nbsp;</input>
<input name="d2"  type="radio" onclick="ADD1('sec2',this.value)" value="1" required>1</input> </td>
</tr>
<tr>
<td class="left">5. Demonstrates up-to-date knowledge and/or awareness on current trends and issues of the subject.</td>
<td class="tdsize">
<input name="e2"  type="radio" onclick="ADD1('sec2',this.value)" value="5" required>5&nbsp;</input>
<input name="e2"  type="radio" onclick="ADD1('sec2',this.value)" value="4" required>4&nbsp;</input>
<input name="e2"  type="radio" onclick="ADD1('sec2',this.value)" value="3" required>3&nbsp;</input>
<input name="e2"  type="radio" onclick="ADD1('sec2',this.value)" value="2" required>2&nbsp;</input>
<input name="e2"  type="radio" onclick="ADD1('sec2',this.value)" value="1" required>1</input></td>
</tr>

</table><BR><BR>

<!--NEXT TABLE-->

<table border="1" class="tablesize">
<tr>
<td class="left">C. Teaching of independent Learnings</td>
<td colspan="5" align="center"> Scale </td>
</tr>
<tr>
<td class="left">1. Creates teaching strategies that allow students to practice using concepts they need to understand (interactive discussion).</td>
<td class="tdsize">
<input name="a3" type="radio"  onclick="ADD2('sec3',this.value)" value="5"  required>5&nbsp;</input>
<input name="a3" type="radio"  onclick="ADD2('sec3',this.value)" value="4" required>4&nbsp;</input>
<input name="a3" type="radio"  onclick="ADD2('sec3',this.value)" value="3" required>3&nbsp;</input>
<input name="a3" type="radio"  onclick="ADD2('sec3',this.value)" value="2" required>2&nbsp;</input>
<input name="a3" type="radio"  onclick="ADD2('sec3',this.value)" value="1" required>1</input>
</td>
</tr><tr>
<td class="left">2. Enhances student self-steem and/or gives due recognition to students performance/potentials. </td>
<td class="tdsize">
<input type="radio"  onclick="ADD2('sec3',this.value)" value="5"  >5&nbsp;</input>
<input name="b3" type="radio"  onclick="ADD2('sec3',this.value)" value="4" required>4&nbsp;</input>
<input name="b3" type="radio"  onclick="ADD2('sec3',this.value)" value="3" required>3&nbsp;</input>
<input name="b3" type="radio"  onclick="ADD2('sec3',this.value)" value="2" required>2&nbsp;</input>
<input  name="b3"type="radio"  onclick="ADD2('sec3',this.value)" value="1" required>1</input> </td>
</tr><tr>
<td class="left">3. Allows students to create their own course with objectives and realistically defined student-professor rules and make them accountable for their performance.</td>
<td class="tdsize">
<input name="c3" type="radio"  onclick="ADD2('sec3',this.value)" value="5" required >5&nbsp;</input>
<input name="c3" type="radio"  onclick="ADD2('sec3',this.value)" value="4" required>4&nbsp;</input>
<input name="c3" type="radio"  onclick="ADD2('sec3',this.value)" value="3" required>3&nbsp;</input>
<input name="c3" type="radio"  onclick="ADD2('sec3',this.value)" value="2" required>2&nbsp;</input>
<input name="c3" type="radio"  onclick="ADD2('sec3',this.value)" value="1" required>1</input>

</td>
</tr>
<tr>
<td class="left">4. Allows Students to think independently and make their own decisions and holding them accountable for their perfomance based largely on their success in executing decisions.</td>
<td class="tdsize">
<input name="d3" type="radio"  onclick="ADD2('sec3',this.value)" value="5"  required>5&nbsp;</input>
<input name="d3" type="radio"  onclick="ADD2('sec3',this.value)" value="4" required>4&nbsp;</input>
<input name="d3" type="radio"  onclick="ADD2('sec3',this.value)" value="3" required>3&nbsp;</input>
<input name="d3" type="radio"  onclick="ADD2('sec3',this.value)" value="2" required>2&nbsp;</input>
<input name="d3" type="radio"  onclick="ADD2('sec3',this.value)" value="1" required>1</input>
</td>
</tr>
<tr>
<td class="left">5. Encourages students to learn beyond what is required and help/guide the students how to apply the concepts learned.</td>
<td class="tdsize">
<input name="e3" type="radio"  onclick="ADD2('sec3',this.value)" value="5" required >5&nbsp;</input>
<input name="e3" type="radio"  onclick="ADD2('sec3',this.value)" value="4" required>4&nbsp;</input>
<input name="e3" type="radio"  onclick="ADD2('sec3',this.value)" value="3" required>3&nbsp;</input>
<input name="e3" type="radio"  onclick="ADD2('sec3',this.value)" value="2" required>2&nbsp;</input>
<input name="e3" type="radio"  onclick="ADD2('sec3',this.value)" value="1" required>1</input>
</td>
</tr>

</table><BR><BR>
<!--NEXT TABLE-->

<table border="1" class="tablesize">
<tr>
<td class="left">D. Management of Learning</td>
<td colspan="5" align="center"> Scale </td>
</tr>
<tr>
<td class="left">1. Creates opportunities  for intensive and/or extensive contribution of students in the class activities(e.g. breaks class into dyads ,triads , or buzz/task groups).</td>
<td class="tdsize">
<input name="a4" type="radio"  onclick="ADD3('sec4',this.value)" value="5"  required>5&nbsp;</input>
<input name="a4"  type="radio"  onclick="ADD3('sec4',this.value)" value="4" required >4&nbsp;</input>
<input name="a4"  type="radio"  onclick="ADD3('sec4',this.value)" value="3" required>3&nbsp;</input>
<input name="a4"  type="radio"  onclick="ADD3('sec4',this.value)" value="2" required>2&nbsp;</input>
<input name="a4"  type="radio"  onclick="ADD3('sec4',this.value)" value="1" required>1</input>
</td>
</tr><tr>
<td class="left">2. Assumes roles as facilitator , resource  person , coach , inquisitor , integrator , referee in drawing students to contribute to knowledge and understanding of the concepts at hands.</td>
<td class="tdsize">
<input name="b4"  type="radio"  onclick="ADD3('sec4',this.value)" value="5"  required>5&nbsp;</input>
<input name="b4" type="radio"  onclick="ADD3('sec4',this.value)" value="4" required>4&nbsp;</input>
<input name="b4" type="radio"  onclick="ADD3('sec4',this.value)" value="3" required>3&nbsp;</input>
<input name="b4" type="radio"  onclick="ADD3('sec4',this.value)" value="2" required>2&nbsp;</input>
<input name="b4" type="radio"  onclick="ADD3('sec4',this.value)" value="1" required>1</input>
</td>
</tr><tr>
<td class="left">3. Designs and implements learning conditions and experience that promotes healthy exchange and/or confrontations.</td>
<td>
<input name="c4" type="radio"  onclick="ADD3('sec4',this.value)" value="5"  required>5&nbsp;</input>
<input name="c4" type="radio"  onclick="ADD3('sec4',this.value)" value="4" required>4&nbsp;</input>
<input name="c4" type="radio"  onclick="ADD3('sec4',this.value)" value="3" required >3&nbsp;</input>
<input name="c4" type="radio"  onclick="ADD3('sec4',this.value)" value="2" required>2&nbsp;</input>
<input name="c4" type="radio"  onclick="ADD3('sec4',this.value)" value="1" required>1</input>
</td>
</tr>
<tr>
<td class="left">4. Stuctures / re-structures learning and teaching-learning context to enhance attainment of collective learning objectives.</td>
<td  class="tdsize">
<input name="d4" type="radio"  onclick="ADD3('sec4',this.value)" value="5"  required  >5&nbsp;</input>
<input name="d4" type="radio"  onclick="ADD3('sec4',this.value)" value="4" required>4&nbsp;</input>
<input name="d4" type="radio"  onclick="ADD3('sec4',this.value)" value="3" required>3&nbsp;</input>
<input name="d4" type="radio"  onclick="ADD3('sec4',this.value)" value="2" required>2&nbsp;</input>
<input name="d4" type="radio"  onclick="ADD3('sec4',this.value)" value="1" required>1</input>
</td>
</tr>
<tr>
<td class="left">5. Use of Instructional Materials (audio/video materials : fieldtrips , film showing , computer aided instruction and etc. )to reinforces learning processes</td>
<td class="tdsize">
<input name="e4" type="radio"  onclick="ADD3('sec4',this.value)" value="5"  required>5&nbsp;</input>
<input name="e4"  type="radio"  onclick="ADD3('sec4',this.value)" value="4" required>4&nbsp;</input>
<input name="e4"  type="radio"  onclick="ADD3('sec4',this.value)" value="3" required>3&nbsp;</input>
<input name="e4"  type="radio"  onclick="ADD3('sec4',this.value)" value="2" required>2&nbsp;</input>
<input name="e4"  type="radio"  onclick="ADD3('sec4',this.value)" value="1" required>1</input>
</td>
</tr>

</table><BR><BR>
<table border="1" class="tablesize">
<tr>
<td>
<?php

$date=date("Y-m-d");

?>
Name of evaluator:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="noe"   type="text" ></input><br>
</td>
</tr>
<tr>
<td>
Position of evaluators:&nbsp; <input name="poe"   type="text" ></input><br>
</td>
</tr>
<tr>
<td>
Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text"  ></input>

</td>
</tr>

</table><BR><BR>
<input style="float:right" type="submit" name="submit" id="submit" value="Evaluate"></input>

<!--inserting data from evaluation form to a database called evaluation_data -->


</form>




</fieldset>

<fieldset class="mac" >
<a  name="print" href="home.php" style="cursor:pointer;"><img style="margin-left:600px;margin-top:5px" src="images/back.png" title="Back" width="70px"></img></a>


</fieldset>

</body>



</html>
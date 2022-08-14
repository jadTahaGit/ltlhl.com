<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>LTLHL - Team Finance</title>
<script src="LTLHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Kris Nissen - STHS - Version : 3.3.3.3 - LTLHL-STHS.bin - LTLHL-STHSCareerStat.bin"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 960px) {.STHSWarning {display:block;}
.STHSFinance_FarmSalaryTable {display:none;}
.STHSFinance_TeamTable tr > td:nth-child(6){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(7){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(8){display:none;}}
@media screen and (max-width: 720px) {.STHSFinance_ProSalaryTable{display:none}}
</style>
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Team1">Team 1</a> | <a href="#Team10">Team 10</a> | <a href="#Team11">Team 11</a> | <a href="#Team12">Team 12</a> | <a href="#Team13">Team 13</a> | <a href="#Team14">Team 14</a> | <a href="#Team15">Team 15</a> | <a href="#Team16">Team 16</a> | <a href="#Team17">Team 17</a> | <a href="#Team18">Team 18</a> | <a href="#Team19">Team 19</a> | <a href="#Team2">Team 2</a> | <a href="#Team20">Team 20</a> | <a href="#Team21">Team 21</a> | <a href="#Team22">Team 22</a> | <a href="#Team23">Team 23</a> | <a href="#Team24">Team 24</a> | <a href="#Team3">Team 3</a> | <a href="#Team4">Team 4</a> | <a href="#Team5">Team 5</a> | <a href="#Team6">Team 6</a> | <a href="#Team7">Team 7</a> | <a href="#Team8">Team 8</a> | <a href="#Team9">Team 9</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamFinancePro_TM1"><a id="Team1">Team 1</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team1">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team1">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team1');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team1" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,675 - 94.58%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,797 - 95.93%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,869 - 93.47%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,788 - 94.71%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 940 - 94.04%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,888 - 94.39%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 953 - 95.31%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,070 - 94.83%</td></tr>
<tr><td>Average Income per Game</td><td>$1,504,396</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,175,828</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,841 - 94.70%</td></tr>
<tr><td>Average Income per Game</td><td>$100,465</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,018,606</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$62,167,274</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,064,839</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$63,167,202</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,113,013</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$62,167,203</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$334,218</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$48,217</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$118,392,735</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$118,392,735</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Dwayne Vallee</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Aleksey Makarenko</td>
<td>$3,922,000 (1)</td></tr>
<tr><td>Guy Kunzli</td>
<td>$3,893,000 (3)</td></tr>
<tr><td>Ernest Castro</td>
<td>$3,843,000 (5)</td></tr>
<tr><td>Imants Ozols</td>
<td>$3,832,000 (3)</td></tr>
<tr><td>Ilari Nousiainen</td>
<td>$3,726,000 (3)</td></tr>
<tr><td>Elmir Alekseeva</td>
<td>$3,657,000 (3)</td></tr>
<tr><td>Sylvain Welsh</td>
<td>$3,619,000 (4)</td></tr>
<tr><td>Aleksander Fomenko</td>
<td>$3,262,000 (4)</td></tr>
<tr><td>Owen Mcconnell</td>
<td>$3,253,000 (2)</td></tr>
<tr><td>Wallace Gould</td>
<td>$3,071,000 (4)</td></tr>
<tr><td>Carl Turnbull</td>
<td>$2,988,274 (3)</td></tr>
<tr><td>Vladimir Dhillon</td>
<td>$2,938,000 (4)</td></tr>
<tr><td>Donald Lamarche</td>
<td>$2,742,000 (1)</td></tr>
<tr><td>Pontus Frid</td>
<td>$2,701,000 (3)</td></tr>
<tr><td>Ben Pitre</td>
<td>$2,634,000 (2)</td></tr>
<tr><td>Valto Tirkkonen</td>
<td>$2,582,000 (2)</td></tr>
<tr><td>Kalervo Suni</td>
<td>$1,864,000 (2)</td></tr>
<tr><td>Francisco Kim</td>
<td>$1,862,000 (2)</td></tr>
<tr><td>Andrzej Berggren</td>
<td>$1,778,000 (3)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $62,167,274</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $55,503,274</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $43,308,274</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $16,733,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $62,167,274</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $55,503,274</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $43,308,274</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $16,733,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $62,167,274</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $55,503,274</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $43,308,274</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $16,733,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>David Jones</td>
<td>$400,000 (1)</td></tr>
<tr><td>Rolland Charron</td>
<td>$365,650 (4)</td></tr>
<tr><td>Wes Maltais</td>
<td>$351,261 (4)</td></tr>
<tr><td>Will Orr</td>
<td>$325,100 (4)</td></tr>
<tr><td>Eetu Ruuskanen</td>
<td>$318,527 (4)</td></tr>
<tr><td>Noel Reeves</td>
<td>$310,900 (3)</td></tr>
<tr><td>Wolfgang Hampel</td>
<td>$310,300 (4)</td></tr>
<tr><td>Edgar Gaudreau</td>
<td>$248,800 (2)</td></tr>
<tr><td>Walter Mcfarland</td>
<td>$242,500 (3)</td></tr>
<tr><td>Akim Rusakov</td>
<td>$239,700 (4)</td></tr>
<tr><td>Kenny Davies</td>
<td>$238,500 (3)</td></tr>
<tr><td>Joey Beaupre</td>
<td>$234,900 (2)</td></tr>
<tr><td>Jean-Paul Hebert</td>
<td>$226,000 (3)</td></tr>
<tr><td>Jose Gregory</td>
<td>$222,400 (3)</td></tr>
<tr><td>Erik Malmberg</td>
<td>$211,800 (2)</td></tr>
<tr><td>Fred Huang</td>
<td>$209,100 (5)</td></tr>
<tr><td>Pat Todd</td>
<td>$204,700 (4)</td></tr>
<tr><td>Raphael Kaser</td>
<td>$191,000 (5)</td></tr>
<tr><td>Dan Davidova</td>
<td>$190,800 (3)</td></tr>
<tr><td>Cary Boone</td>
<td>$188,200 (2)</td></tr>
<tr><td>Marvin Fowler</td>
<td>$187,600 (4)</td></tr>
<tr><td>Joey Black</td>
<td>$185,000 (4)</td></tr>
<tr><td>Gordon Landry</td>
<td>$180,300 (4)</td></tr>
<tr><td>Terry Orr</td>
<td>$176,900 (5)</td></tr>
<tr><td>Aloizs Smilga</td>
<td>$174,900 (3)</td></tr>
<tr><td>Otto Huseby</td>
<td>$169,800 (2)</td></tr>
<tr><td>Timofey Afonina</td>
<td>$163,900 (1)</td></tr>
<tr><td>Isaac Jacques</td>
<td>$148,200 (3)</td></tr>
<tr><td>Timothy Carriere</td>
<td>$141,000 (2)</td></tr>
<tr><td>Al Simpson</td>
<td>$125,600 (5)</td></tr>
<tr><td>Noel Garcia</td>
<td>$123,000 (2)</td></tr>
<tr><td>Gilbert Revel</td>
<td>$120,400 (4)</td></tr>
<tr><td>Tony Huynh</td>
<td>$120,200 (5)</td></tr>
<tr><td>Alex Bell</td>
<td>$110,100 (5)</td></tr>
<tr><td>Trevor Gauthier</td>
<td>$105,900 (2)</td></tr>
<tr><td>Andrzej Ladouceur</td>
<td>$104,500 (1)</td></tr>
<tr><td>Paul Dennis</td>
<td>$102,000 (4)</td></tr>
<tr><td>Bruno Turnbull</td>
<td>$100,200 (4)</td></tr>
<tr><td>Javier Humphrey</td>
<td>$85,900 (1)</td></tr>
<tr><td>Kevin Peterson</td>
<td>$73,800 (1)</td></tr>
<tr><td>Arslan Milaya</td>
<td>$68,500 (4)</td></tr>
<tr><td>Jussi Pellinen</td>
<td>$67,000 (5)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,064,838</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,236,738</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,813,338</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $4,059,138</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,064,838</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,236,738</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,813,338</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $4,059,138</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T10"><a id="Team10">Team 10</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team10">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team10">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team10');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team10" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,650 - 94.17%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,678 - 93.56%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,885 - 94.24%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,852 - 96.30%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 946 - 94.57%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,881 - 94.07%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 940 - 93.99%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,011 - 94.50%</td></tr>
<tr><td>Average Income per Game</td><td>$1,496,364</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,854,572</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,821 - 94.04%</td></tr>
<tr><td>Average Income per Game</td><td>$99,935</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,997,417</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$57,569,292</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,113,438</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$58,569,210</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,161,964</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$57,569,211</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$309,890</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$48,476</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$152,416,639</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$152,416,639</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Edmond Gregory</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Jeff Henderson</td>
<td>$4,000,000 (1)</td></tr>
<tr><td>Cliff Nixon</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Dwayne Lawson</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>Niyaz Ignatenko</td>
<td>$3,443,292 (5)</td></tr>
<tr><td>Stephen Padilla</td>
<td>$3,336,000 (2)</td></tr>
<tr><td>Veli-Matti Kannisto</td>
<td>$3,309,000 (2)</td></tr>
<tr><td>Stephen Thibault</td>
<td>$2,899,000 (1)</td></tr>
<tr><td>Platon Egorova</td>
<td>$2,785,000 (2)</td></tr>
<tr><td>Rodney Watt</td>
<td>$2,780,000 (2)</td></tr>
<tr><td>Albert Burda</td>
<td>$2,769,000 (5)</td></tr>
<tr><td>Charles Beland</td>
<td>$2,735,000 (2)</td></tr>
<tr><td>Rafael Sharipova</td>
<td>$2,578,000 (2)</td></tr>
<tr><td>Art Adams</td>
<td>$2,534,000 (3)</td></tr>
<tr><td>Cliff Massey</td>
<td>$2,510,000 (4)</td></tr>
<tr><td>Eldar Walle</td>
<td>$2,404,000 (4)</td></tr>
<tr><td>Afanasiy Antipova</td>
<td>$2,324,000 (4)</td></tr>
<tr><td>Antonio Richard</td>
<td>$1,970,000 (4)</td></tr>
<tr><td>Ross Perron</td>
<td>$1,729,000 (2)</td></tr>
<tr><td>Or Thomson</td>
<td>$1,464,000 (3)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,569,292</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $50,670,292</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $23,418,292</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $19,420,292</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,569,292</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $50,670,292</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $23,418,292</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $19,420,292</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,569,292</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $50,670,292</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $23,418,292</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $19,420,292</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alex Bergman</td>
<td>$400,000 (1)</td></tr>
<tr><td>Aslan Afonina</td>
<td>$400,000 (3)</td></tr>
<tr><td>Juha Simonen</td>
<td>$365,600 (3)</td></tr>
<tr><td>Verners Krastins</td>
<td>$364,374 (4)</td></tr>
<tr><td>Jean-Paul Langevin</td>
<td>$310,100 (3)</td></tr>
<tr><td>Andrej Lazareva</td>
<td>$300,000 (4)</td></tr>
<tr><td>Adam Garza</td>
<td>$287,100 (1)</td></tr>
<tr><td>Rainer Juhola</td>
<td>$271,500 (2)</td></tr>
<tr><td>Njal Boll</td>
<td>$261,200 (4)</td></tr>
<tr><td>Anar Rumyantsev</td>
<td>$256,700 (2)</td></tr>
<tr><td>Jean-Pierre Nadeau</td>
<td>$254,100 (4)</td></tr>
<tr><td>Yusup Filimonov</td>
<td>$245,800 (3)</td></tr>
<tr><td>Vadim Usmanov</td>
<td>$241,700 (4)</td></tr>
<tr><td>Mohammed Corriveau</td>
<td>$239,800 (4)</td></tr>
<tr><td>Ken Corriveau</td>
<td>$238,465 (5)</td></tr>
<tr><td>Leon Janzen</td>
<td>$237,700 (1)</td></tr>
<tr><td>Byron Kelley</td>
<td>$226,100 (3)</td></tr>
<tr><td>Anton Harris</td>
<td>$214,700 (5)</td></tr>
<tr><td>Jean-Francois Lafrance</td>
<td>$187,700 (3)</td></tr>
<tr><td>Edward Barnes</td>
<td>$182,400 (3)</td></tr>
<tr><td>Wesley Atkinson</td>
<td>$177,000 (3)</td></tr>
<tr><td>Marc-Andre Jenkins</td>
<td>$172,100 (4)</td></tr>
<tr><td>Kurt Calderon</td>
<td>$160,500 (3)</td></tr>
<tr><td>Jody Persaud</td>
<td>$156,800 (4)</td></tr>
<tr><td>Stephan Chiu</td>
<td>$154,500 (3)</td></tr>
<tr><td>Tuukka Katajamaki</td>
<td>$152,700 (3)</td></tr>
<tr><td>Geoff Howell</td>
<td>$148,400 (4)</td></tr>
<tr><td>Eddy Briere</td>
<td>$144,800 (3)</td></tr>
<tr><td>Antonio Keller</td>
<td>$142,900 (3)</td></tr>
<tr><td>Ashot Kiselyova</td>
<td>$141,500 (4)</td></tr>
<tr><td>Paul Laflamme</td>
<td>$118,400 (4)</td></tr>
<tr><td>Ricky Dhillon</td>
<td>$115,100 (2)</td></tr>
<tr><td>Benoit Boutin</td>
<td>$111,000 (4)</td></tr>
<tr><td>Voldemars Laizane</td>
<td>$108,100 (3)</td></tr>
<tr><td>Robin Vepsalainen</td>
<td>$106,900 (2)</td></tr>
<tr><td>Roman Hanna</td>
<td>$95,600 (3)</td></tr>
<tr><td>Joel Hancock</td>
<td>$89,100 (1)</td></tr>
<tr><td>Shaun Lucas</td>
<td>$75,700 (1)</td></tr>
<tr><td>Ayur Semenova</td>
<td>$74,700 (4)</td></tr>
<tr><td>Fernando Chapman</td>
<td>$71,900 (3)</td></tr>
<tr><td>Joe Gardner</td>
<td>$57,000 (1)</td></tr>
<tr><td>Jean-Claude Hillier</td>
<td>$53,700 (3)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,113,439</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,966,839</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $6,216,639</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,037,239</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,113,439</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,966,839</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $6,216,639</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,037,239</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T11"><a id="Team11">Team 11</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team11">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team11">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team11');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team11" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,619 - 93.66%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,721 - 94.42%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,897 - 94.83%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,811 - 95.27%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 947 - 94.66%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,891 - 94.55%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 950 - 94.96%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,994 - 94.41%</td></tr>
<tr><td>Average Income per Game</td><td>$1,495,215</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,808,607</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,841 - 94.69%</td></tr>
<tr><td>Average Income per Game</td><td>$100,534</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,021,365</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$56,518,929</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,362,266</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$57,518,937</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,412,011</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$56,518,938</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$304,333</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$49,799</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$151,570,317</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$151,570,317</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Cory Giguere</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Archie St-Laurent</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>John Bradley</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Todd Griffin</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Reginald Higgins</td>
<td>$3,792,000 (3)</td></tr>
<tr><td>Craig Leonard</td>
<td>$3,553,000 (5)</td></tr>
<tr><td>Peter Norlander</td>
<td>$3,294,000 (2)</td></tr>
<tr><td>Brian Bautista</td>
<td>$3,276,000 (2)</td></tr>
<tr><td>Niilo Mertanen</td>
<td>$2,788,000 (2)</td></tr>
<tr><td>Thord Ahlin</td>
<td>$2,754,000 (2)</td></tr>
<tr><td>Henrihs Aleksejevs</td>
<td>$2,641,000 (5)</td></tr>
<tr><td>Marvin Stewart</td>
<td>$2,569,000 (4)</td></tr>
<tr><td>Milan Macak</td>
<td>$2,365,000 (4)</td></tr>
<tr><td>Gerry Mooney</td>
<td>$2,315,929 (4)</td></tr>
<tr><td>Jean Morissette</td>
<td>$2,272,000 (4)</td></tr>
<tr><td>Freddy Matter</td>
<td>$2,155,000 (1)</td></tr>
<tr><td>Pelle Gudmundsson</td>
<td>$1,945,000 (3)</td></tr>
<tr><td>Garry Asselin</td>
<td>$1,777,000 (4)</td></tr>
<tr><td>Raino Olli</td>
<td>$1,523,000 (3)</td></tr>
<tr><td>Philip Evdokimova</td>
<td>$1,499,000 (4)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,518,929</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $54,363,929</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $38,251,929</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $18,991,929</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,518,929</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $54,363,929</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $38,251,929</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $18,991,929</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,518,929</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $54,363,929</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $38,251,929</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $18,991,929</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Gerardo Ferguson</td>
<td>$400,000 (2)</td></tr>
<tr><td>Gabriel Henn</td>
<td>$400,000 (1)</td></tr>
<tr><td>Derek Hayden</td>
<td>$349,500 (4)</td></tr>
<tr><td>Wilson Piche</td>
<td>$328,300 (3)</td></tr>
<tr><td>Ernest Deschenes</td>
<td>$322,011 (3)</td></tr>
<tr><td>Evgeniy Davydova</td>
<td>$319,300 (1)</td></tr>
<tr><td>Bruno Richardson</td>
<td>$300,800 (4)</td></tr>
<tr><td>Young Steeves</td>
<td>$294,400 (5)</td></tr>
<tr><td>Slavomir Nagyova</td>
<td>$281,700 (3)</td></tr>
<tr><td>Taneli Hirvonen</td>
<td>$258,000 (4)</td></tr>
<tr><td>Ricky Lake</td>
<td>$252,100 (3)</td></tr>
<tr><td>Aynur Antipov</td>
<td>$241,300 (3)</td></tr>
<tr><td>Chingis Kharchenko</td>
<td>$218,754 (5)</td></tr>
<tr><td>Lorenzo Wood</td>
<td>$218,200 (2)</td></tr>
<tr><td>Ayan Maksimova</td>
<td>$216,900 (3)</td></tr>
<tr><td>Dusan Jelinkova</td>
<td>$211,300 (4)</td></tr>
<tr><td>Ken Mcdonald</td>
<td>$207,400 (2)</td></tr>
<tr><td>Marko Burkhard</td>
<td>$204,800 (1)</td></tr>
<tr><td>Manuel Ohlsson</td>
<td>$198,100 (3)</td></tr>
<tr><td>Olivier Duchesne</td>
<td>$194,800 (2)</td></tr>
<tr><td>Edward Svedin</td>
<td>$190,000 (3)</td></tr>
<tr><td>Ronald Klingberg</td>
<td>$179,700 (4)</td></tr>
<tr><td>Al Berube</td>
<td>$179,300 (2)</td></tr>
<tr><td>Scott Durand</td>
<td>$174,600 (4)</td></tr>
<tr><td>Thore Bergsten</td>
<td>$174,100 (4)</td></tr>
<tr><td>Bronislavs Strazdina</td>
<td>$162,000 (3)</td></tr>
<tr><td>Elmar Liedtke</td>
<td>$153,300 (5)</td></tr>
<tr><td>Edwin Raymond</td>
<td>$147,500 (4)</td></tr>
<tr><td>Ross Hamelin</td>
<td>$145,300 (3)</td></tr>
<tr><td>Gregory Bennett</td>
<td>$145,200 (1)</td></tr>
<tr><td>Salvatore Wyatt</td>
<td>$140,200 (4)</td></tr>
<tr><td>Pat Gonzalez</td>
<td>$138,500 (4)</td></tr>
<tr><td>Guy Caron</td>
<td>$122,800 (4)</td></tr>
<tr><td>Clifford Jenkins</td>
<td>$118,300 (4)</td></tr>
<tr><td>Giovanni Lawson</td>
<td>$111,800 (5)</td></tr>
<tr><td>Howard Richardson</td>
<td>$110,400 (2)</td></tr>
<tr><td>James Harder</td>
<td>$105,500 (3)</td></tr>
<tr><td>Francis St-Laurent</td>
<td>$102,400 (3)</td></tr>
<tr><td>Jean-Pierre Chapman</td>
<td>$90,500 (4)</td></tr>
<tr><td>Tariq Golding</td>
<td>$88,800 (5)</td></tr>
<tr><td>Ibrahim Lerch</td>
<td>$88,500 (3)</td></tr>
<tr><td>Bernt Ronnow</td>
<td>$75,900 (4)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,362,265</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,292,965</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,982,865</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,348,754</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,362,265</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,292,965</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,982,865</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,348,754</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T12"><a id="Team12">Team 12</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team12">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team12">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team12');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team12" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,678 - 94.63%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,636 - 92.73%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,909 - 95.45%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,768 - 94.19%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 948 - 94.81%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,859 - 92.97%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 933 - 93.34%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,939 - 94.11%</td></tr>
<tr><td>Average Income per Game</td><td>$1,495,736</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,829,446</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,793 - 93.09%</td></tr>
<tr><td>Average Income per Game</td><td>$98,847</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,953,886</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$62,599,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,620,013</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$63,599,067</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,671,130</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$62,599,068</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$336,503</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$51,170</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$126,779,491</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$126,779,491</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Bruno Gillberg</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>Nick Clements</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>Billy Peterson</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>Travis Allison</td>
<td>$4,000,000 (1)</td></tr>
<tr><td>Jared Malone</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>Dominic Riemer</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Roy Patterson</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Byron Bryant</td>
<td>$3,951,000 (4)</td></tr>
<tr><td>Toby Goldberg</td>
<td>$3,711,000 (3)</td></tr>
<tr><td>Jerry Mueller</td>
<td>$3,494,000 (4)</td></tr>
<tr><td>Al Solis</td>
<td>$3,226,000 (3)</td></tr>
<tr><td>Valentin Korolev</td>
<td>$3,174,000 (1)</td></tr>
<tr><td>Curtis John</td>
<td>$2,595,000 (2)</td></tr>
<tr><td>Bjorn Boe</td>
<td>$2,479,000 (3)</td></tr>
<tr><td>Roland Poirier</td>
<td>$2,419,000 (1)</td></tr>
<tr><td>Wai Stanley</td>
<td>$2,144,000 (3)</td></tr>
<tr><td>Randy Boudreault</td>
<td>$2,075,000 (5)</td></tr>
<tr><td>Harold Bradley</td>
<td>$1,912,000 (2)</td></tr>
<tr><td>Stewart West</td>
<td>$1,804,000 (5)</td></tr>
<tr><td>Nicolas Guilbert</td>
<td>$1,615,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $62,599,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $51,391,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $42,884,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $27,324,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $62,599,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $51,391,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $42,884,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $27,324,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $62,599,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $51,391,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $42,884,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $27,324,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Isaac Yoder</td>
<td>$400,000 (2)</td></tr>
<tr><td>Elaman Alieva</td>
<td>$400,000 (2)</td></tr>
<tr><td>Terry Gingras</td>
<td>$373,264 (2)</td></tr>
<tr><td>Serafim Abdullina</td>
<td>$353,100 (2)</td></tr>
<tr><td>George Huynh</td>
<td>$322,700 (4)</td></tr>
<tr><td>Edward Bourassa</td>
<td>$315,800 (3)</td></tr>
<tr><td>Martin Roth</td>
<td>$303,300 (4)</td></tr>
<tr><td>Ali Gavrilov</td>
<td>$296,003 (5)</td></tr>
<tr><td>Bedrich Mrazek</td>
<td>$283,800 (3)</td></tr>
<tr><td>Gerardo Roach</td>
<td>$282,900 (5)</td></tr>
<tr><td>Nikola Thulin</td>
<td>$274,500 (4)</td></tr>
<tr><td>Luc Stone</td>
<td>$261,345 (2)</td></tr>
<tr><td>Francisco Nielsen</td>
<td>$246,800 (2)</td></tr>
<tr><td>Jaime Bailey</td>
<td>$236,500 (2)</td></tr>
<tr><td>Antoine Asselin</td>
<td>$232,700 (3)</td></tr>
<tr><td>Roman Will</td>
<td>$221,800 (4)</td></tr>
<tr><td>Klim Nikonov</td>
<td>$202,000 (5)</td></tr>
<tr><td>Les Pellerin</td>
<td>$201,400 (4)</td></tr>
<tr><td>Guillaume Irwin</td>
<td>$195,300 (5)</td></tr>
<tr><td>Zaurbek Kulagina</td>
<td>$191,600 (3)</td></tr>
<tr><td>Arturo Rios</td>
<td>$191,400 (2)</td></tr>
<tr><td>Teuvo Launonen</td>
<td>$190,000 (1)</td></tr>
<tr><td>Steeve Huard</td>
<td>$188,100 (5)</td></tr>
<tr><td>Yanis Shadrin</td>
<td>$187,600 (2)</td></tr>
<tr><td>Antosha Galimov</td>
<td>$185,500 (1)</td></tr>
<tr><td>Muhammed Webb</td>
<td>$182,600 (4)</td></tr>
<tr><td>Ghislain Boulet</td>
<td>$176,900 (3)</td></tr>
<tr><td>Tomas Callahan</td>
<td>$173,300 (5)</td></tr>
<tr><td>Clarence Christie</td>
<td>$164,100 (4)</td></tr>
<tr><td>Byron Hache</td>
<td>$161,000 (3)</td></tr>
<tr><td>Albert Larocque</td>
<td>$157,500 (3)</td></tr>
<tr><td>Mikhail Pozdnyakov</td>
<td>$143,200 (4)</td></tr>
<tr><td>Anton Merilainen</td>
<td>$137,900 (4)</td></tr>
<tr><td>Jeffrey Theriault</td>
<td>$117,300 (5)</td></tr>
<tr><td>Ken Naslund</td>
<td>$114,200 (4)</td></tr>
<tr><td>Richard Pham</td>
<td>$109,400 (3)</td></tr>
<tr><td>Wilson Sinclair</td>
<td>$104,800 (2)</td></tr>
<tr><td>Olivier Davidson</td>
<td>$77,300 (2)</td></tr>
<tr><td>Owe Stalnacke</td>
<td>$71,800 (2)</td></tr>
<tr><td>Cody Lamarre</td>
<td>$68,800 (2)</td></tr>
<tr><td>Viliam Fialova</td>
<td>$66,900 (5)</td></tr>
<tr><td>Alim Simonova</td>
<td>$55,600 (2)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,620,012</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $8,244,512</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,216,203</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,587,503</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,620,012</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $8,244,512</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,216,203</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,587,503</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T13"><a id="Team13">Team 13</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team13">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team13">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team13');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team13" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,670 - 94.49%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,740 - 94.81%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,902 - 95.09%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,794 - 94.85%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 952 - 95.19%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,892 - 94.60%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 952 - 95.20%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,058 - 94.76%</td></tr>
<tr><td>Average Income per Game</td><td>$1,503,955</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,158,195</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,844 - 94.80%</td></tr>
<tr><td>Average Income per Game</td><td>$100,627</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,025,096</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$59,125,260</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,484,722</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$60,125,247</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,535,239</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$59,125,248</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$318,123</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$50,451</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$134,829,038</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$134,829,038</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Vasek Voronin</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Christopher Abbott</td>
<td>$3,886,260 (1)</td></tr>
<tr><td>Owen Stevens</td>
<td>$3,875,000 (3)</td></tr>
<tr><td>Darryl Avery</td>
<td>$3,776,000 (5)</td></tr>
<tr><td>Gabriel Lane</td>
<td>$3,701,000 (3)</td></tr>
<tr><td>Or Fox</td>
<td>$3,637,000 (4)</td></tr>
<tr><td>Oscar Trujillo</td>
<td>$3,578,000 (2)</td></tr>
<tr><td>Markus Karlen</td>
<td>$3,557,000 (2)</td></tr>
<tr><td>Charles Neufeld</td>
<td>$3,478,000 (2)</td></tr>
<tr><td>Ismael Swanson</td>
<td>$3,281,000 (1)</td></tr>
<tr><td>Arthur Sabourin</td>
<td>$3,280,000 (5)</td></tr>
<tr><td>Taylor Loewen</td>
<td>$2,999,000 (3)</td></tr>
<tr><td>Andy Dickson</td>
<td>$2,608,000 (4)</td></tr>
<tr><td>Sergio Cantu</td>
<td>$2,321,000 (1)</td></tr>
<tr><td>Archie Watson</td>
<td>$2,163,000 (5)</td></tr>
<tr><td>Albert Jakobsson</td>
<td>$2,098,000 (5)</td></tr>
<tr><td>Raymond Contreras</td>
<td>$2,046,000 (1)</td></tr>
<tr><td>Lassi Ristola</td>
<td>$1,923,000 (1)</td></tr>
<tr><td>Alan Dick</td>
<td>$1,603,000 (5)</td></tr>
<tr><td>Isaac Mckinnon</td>
<td>$1,315,000 (3)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $59,125,260</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $45,668,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $35,055,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $19,165,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $59,125,260</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $45,668,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $35,055,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $19,165,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $59,125,260</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $45,668,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $35,055,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $19,165,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Paul Kesti</td>
<td>$400,000 (4)</td></tr>
<tr><td>Murad Petukhov</td>
<td>$379,460 (3)</td></tr>
<tr><td>Akezhan Litvinov</td>
<td>$377,238 (4)</td></tr>
<tr><td>Kurt Brisson</td>
<td>$340,123 (2)</td></tr>
<tr><td>Armand Taylor</td>
<td>$323,200 (4)</td></tr>
<tr><td>Raymond Sonderegger</td>
<td>$305,200 (4)</td></tr>
<tr><td>Jani Malmberg</td>
<td>$299,400 (5)</td></tr>
<tr><td>Karim Lofgren</td>
<td>$297,800 (2)</td></tr>
<tr><td>Edmunds Solovjovs</td>
<td>$271,500 (2)</td></tr>
<tr><td>Stephane Felder</td>
<td>$267,600 (4)</td></tr>
<tr><td>Miguel Miles</td>
<td>$266,700 (2)</td></tr>
<tr><td>Madi Geffroy</td>
<td>$265,500 (1)</td></tr>
<tr><td>Jaime Russo</td>
<td>$260,300 (1)</td></tr>
<tr><td>Roberto Stamm</td>
<td>$258,000 (5)</td></tr>
<tr><td>Aydar Mongush</td>
<td>$229,800 (4)</td></tr>
<tr><td>Shaun Berthiaume</td>
<td>$228,800 (2)</td></tr>
<tr><td>Pedro Watkins</td>
<td>$227,400 (3)</td></tr>
<tr><td>Leonard Robert</td>
<td>$226,700 (2)</td></tr>
<tr><td>Marc-Andre Schultz</td>
<td>$214,800 (5)</td></tr>
<tr><td>Tyrone Macdonald</td>
<td>$211,600 (2)</td></tr>
<tr><td>Stephan Matthews</td>
<td>$197,600 (3)</td></tr>
<tr><td>Craig Corbeil</td>
<td>$185,900 (5)</td></tr>
<tr><td>Young Pearce</td>
<td>$176,600 (2)</td></tr>
<tr><td>Ruben Cooley</td>
<td>$166,400 (1)</td></tr>
<tr><td>Vanka Noskova</td>
<td>$160,200 (2)</td></tr>
<tr><td>Russell Leger</td>
<td>$159,000 (5)</td></tr>
<tr><td>Jerry Langevin</td>
<td>$147,200 (5)</td></tr>
<tr><td>Will Ibarra</td>
<td>$145,800 (3)</td></tr>
<tr><td>Ricardo Whitaker</td>
<td>$138,500 (3)</td></tr>
<tr><td>Len Wells</td>
<td>$133,700 (5)</td></tr>
<tr><td>Jay Matheson</td>
<td>$131,800 (5)</td></tr>
<tr><td>Derrick Noel</td>
<td>$131,000 (4)</td></tr>
<tr><td>Harold Mercado</td>
<td>$130,300 (2)</td></tr>
<tr><td>Preston Poole</td>
<td>$129,900 (3)</td></tr>
<tr><td>Salvatore Wall</td>
<td>$121,400 (1)</td></tr>
<tr><td>Kristoffer Hammarlund</td>
<td>$113,100 (5)</td></tr>
<tr><td>Richard Hellsten</td>
<td>$109,800 (3)</td></tr>
<tr><td>Wallace Major</td>
<td>$107,000 (2)</td></tr>
<tr><td>Steven Liu</td>
<td>$73,900 (3)</td></tr>
<tr><td>Bo Meyer</td>
<td>$62,500 (2)</td></tr>
<tr><td>Erik Carpenter</td>
<td>$58,600 (2)</td></tr>
<tr><td>Tommy Klein</td>
<td>$53,400 (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,484,721</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,617,721</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,079,298</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,676,938</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,484,721</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,617,721</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,079,298</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,676,938</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T14"><a id="Team14">Team 14</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team14">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team14">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team14');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team14" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,737 - 95.62%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,732 - 94.64%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,881 - 94.03%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,736 - 93.41%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 942 - 94.22%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,900 - 95.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 953 - 95.28%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,028 - 94.60%</td></tr>
<tr><td>Average Income per Game</td><td>$1,506,619</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,264,777</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,853 - 95.09%</td></tr>
<tr><td>Average Income per Game</td><td>$100,988</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,039,533</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$56,979,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,416,933</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$57,978,963</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,467,010</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$56,978,964</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$306,767</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$50,090</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$131,218,220</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$131,218,220</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Peter Granstrom</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Artemiy Kotova</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Todd Ramos</td>
<td>$4,000,000 (1)</td></tr>
<tr><td>Wai Nguyen</td>
<td>$3,888,000 (2)</td></tr>
<tr><td>Alberto Small</td>
<td>$3,825,000 (4)</td></tr>
<tr><td>Danny Benton</td>
<td>$3,248,000 (2)</td></tr>
<tr><td>Pasi Piippo</td>
<td>$3,214,000 (4)</td></tr>
<tr><td>Musa Ulyanov</td>
<td>$3,169,000 (4)</td></tr>
<tr><td>Lionel Lee</td>
<td>$3,071,000 (4)</td></tr>
<tr><td>Marcel Provencher</td>
<td>$2,766,000 (2)</td></tr>
<tr><td>Carlos Keller</td>
<td>$2,745,000 (1)</td></tr>
<tr><td>Claude Fox</td>
<td>$2,546,000 (5)</td></tr>
<tr><td>Bert Aguilar</td>
<td>$2,466,000 (1)</td></tr>
<tr><td>Mathias Bichsel</td>
<td>$2,417,000 (2)</td></tr>
<tr><td>Lowell Melton</td>
<td>$2,376,000 (2)</td></tr>
<tr><td>Cory Mcpherson</td>
<td>$2,235,000 (1)</td></tr>
<tr><td>Dylan Levasseur</td>
<td>$1,977,000 (4)</td></tr>
<tr><td>Edgar Miezis</td>
<td>$1,850,000 (2)</td></tr>
<tr><td>Jean-Luc Medeiros</td>
<td>$1,670,000 (4)</td></tr>
<tr><td>Roland Cook</td>
<td>$1,516,000 (2)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,979,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $45,533,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $23,472,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $19,472,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,979,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $45,533,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $23,472,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $19,472,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,979,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $45,533,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $23,472,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $19,472,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Cecil Frechette</td>
<td>$400,000 (3)</td></tr>
<tr><td>Jeff Berger</td>
<td>$326,700 (4)</td></tr>
<tr><td>Jerry Barnes</td>
<td>$322,502 (3)</td></tr>
<tr><td>Arsen Kozhevnikova</td>
<td>$302,800 (3)</td></tr>
<tr><td>Valtteri Lappi</td>
<td>$287,100 (5)</td></tr>
<tr><td>Julian Vaughn</td>
<td>$285,300 (1)</td></tr>
<tr><td>Ed Baranova</td>
<td>$280,727 (2)</td></tr>
<tr><td>Ben O'Neill</td>
<td>$262,500 (4)</td></tr>
<tr><td>Daryl Gaudreault</td>
<td>$258,500 (3)</td></tr>
<tr><td>Walter Kennedy</td>
<td>$247,100 (2)</td></tr>
<tr><td>Kim Tarasova</td>
<td>$223,400 (5)</td></tr>
<tr><td>Vern Watt</td>
<td>$219,900 (5)</td></tr>
<tr><td>Blake Barnett</td>
<td>$218,600 (4)</td></tr>
<tr><td>Bruno Kolacek</td>
<td>$218,100 (3)</td></tr>
<tr><td>Mohamad Bengtsson</td>
<td>$217,900 (2)</td></tr>
<tr><td>Sam Dupuis</td>
<td>$216,900 (4)</td></tr>
<tr><td>Dave Thibodeau</td>
<td>$210,600 (4)</td></tr>
<tr><td>Tommy Preston</td>
<td>$208,300 (4)</td></tr>
<tr><td>Gottfried Ludtke</td>
<td>$206,200 (3)</td></tr>
<tr><td>Donald Yu</td>
<td>$203,900 (1)</td></tr>
<tr><td>Sebastien Becker</td>
<td>$200,400 (3)</td></tr>
<tr><td>Erik Kihlberg</td>
<td>$193,000 (5)</td></tr>
<tr><td>Freddie Leblanc</td>
<td>$187,400 (2)</td></tr>
<tr><td>Grant Gray</td>
<td>$178,300 (1)</td></tr>
<tr><td>Dimitriy Rodionova</td>
<td>$176,000 (2)</td></tr>
<tr><td>Jonatan Mohammad</td>
<td>$174,000 (1)</td></tr>
<tr><td>Colin Bonner</td>
<td>$171,800 (4)</td></tr>
<tr><td>Arttu Kontkanen</td>
<td>$170,400 (3)</td></tr>
<tr><td>Dick Potts</td>
<td>$160,400 (1)</td></tr>
<tr><td>Malcolm Baril</td>
<td>$157,900 (2)</td></tr>
<tr><td>Geo Lavigne</td>
<td>$157,500 (2)</td></tr>
<tr><td>Ludvik Jandova</td>
<td>$145,500 (2)</td></tr>
<tr><td>Steven Ekstrom</td>
<td>$144,500 (4)</td></tr>
<tr><td>Roch Lafreniere</td>
<td>$138,500 (4)</td></tr>
<tr><td>Gerard Dixon</td>
<td>$133,800 (3)</td></tr>
<tr><td>Askar Tokarev</td>
<td>$124,000 (2)</td></tr>
<tr><td>Ed Miranda</td>
<td>$122,800 (4)</td></tr>
<tr><td>Xaver Probst</td>
<td>$115,900 (3)</td></tr>
<tr><td>Jesper Hietikko</td>
<td>$115,700 (4)</td></tr>
<tr><td>Leonard Smith</td>
<td>$115,000 (2)</td></tr>
<tr><td>Malcolm Fernandez</td>
<td>$109,800 (2)</td></tr>
<tr><td>Abdul Drolet</td>
<td>$107,304 (5)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,416,933</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,415,033</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,496,206</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,167,604</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,416,933</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,415,033</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,496,206</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,167,604</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T15"><a id="Team15">Team 15</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team15">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team15">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team15');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team15" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,609 - 93.48%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,726 - 94.52%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,848 - 92.40%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,775 - 94.38%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 941 - 94.08%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,920 - 96.02%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 951 - 95.09%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,898 - 93.88%</td></tr>
<tr><td>Average Income per Game</td><td>$1,489,530</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,581,193</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,871 - 95.71%</td></tr>
<tr><td>Average Income per Game</td><td>$101,842</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,073,662</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$57,350,933</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$9,047,454</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$58,350,915</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$10,100,916</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$57,350,916</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$308,735</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$53,444</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$144,909,740</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$144,909,740</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ludovit Kadlec</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Szilard Haluska</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Greg Lyons</td>
<td>$4,000,000 (1)</td></tr>
<tr><td>Nurik Tazhibaeva</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Barry St-Laurent</td>
<td>$3,347,000 (3)</td></tr>
<tr><td>Duane Fehr</td>
<td>$3,184,933 (4)</td></tr>
<tr><td>Ferenc Letko</td>
<td>$3,142,000 (3)</td></tr>
<tr><td>Michael Lebrun</td>
<td>$3,010,000 (2)</td></tr>
<tr><td>Dino Carlson</td>
<td>$2,910,000 (1)</td></tr>
<tr><td>Philippe Cousineau</td>
<td>$2,896,000 (4)</td></tr>
<tr><td>Earl Montgomery</td>
<td>$2,834,000 (2)</td></tr>
<tr><td>Edgar Erickson</td>
<td>$2,757,000 (5)</td></tr>
<tr><td>Taylor Macdougall</td>
<td>$2,537,000 (1)</td></tr>
<tr><td>Atagishi Kalinina</td>
<td>$2,490,000 (4)</td></tr>
<tr><td>Kazbek Pronina</td>
<td>$2,251,000 (1)</td></tr>
<tr><td>Elias Cerveny</td>
<td>$2,236,000 (5)</td></tr>
<tr><td>Demid Volk</td>
<td>$2,142,000 (4)</td></tr>
<tr><td>Kelvin Jordan</td>
<td>$2,033,000 (1)</td></tr>
<tr><td>Aleksei Malkova</td>
<td>$1,907,000 (2)</td></tr>
<tr><td>Sven Kaikkonen</td>
<td>$1,674,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,350,933</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $41,945,933</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $22,194,933</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $15,705,933</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,350,933</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $41,945,933</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $22,194,933</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $15,705,933</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,350,933</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $41,945,933</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $22,194,933</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $15,705,933</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Kent Navarro</td>
<td>$400,000 (5)</td></tr>
<tr><td>Ilnaz Dyomin</td>
<td>$378,700 (4)</td></tr>
<tr><td>Armand Signer</td>
<td>$370,700 (3)</td></tr>
<tr><td>Zdenek Vician</td>
<td>$360,400 (5)</td></tr>
<tr><td>Kim Khokhlov</td>
<td>$346,100 (1)</td></tr>
<tr><td>Carl Hu</td>
<td>$336,900 (1)</td></tr>
<tr><td>Claude Pham</td>
<td>$323,500 (2)</td></tr>
<tr><td>Randy Daigle</td>
<td>$317,592 (3)</td></tr>
<tr><td>Ottmar Langer</td>
<td>$317,300 (2)</td></tr>
<tr><td>Kyle Carter</td>
<td>$312,100 (1)</td></tr>
<tr><td>Rihards Grinberga</td>
<td>$293,100 (4)</td></tr>
<tr><td>Valerka Zotov</td>
<td>$254,300 (4)</td></tr>
<tr><td>Domenic Simmons</td>
<td>$252,500 (2)</td></tr>
<tr><td>Hannu Pirhonen</td>
<td>$251,800 (2)</td></tr>
<tr><td>Ramon Mahoney</td>
<td>$245,996 (2)</td></tr>
<tr><td>Randy Ma</td>
<td>$224,200 (4)</td></tr>
<tr><td>Yaroslav Ryzhkova</td>
<td>$215,600 (3)</td></tr>
<tr><td>Kenneth Christensen</td>
<td>$206,600 (2)</td></tr>
<tr><td>Benno Liedtke</td>
<td>$200,900 (2)</td></tr>
<tr><td>Karl Mccarthy</td>
<td>$198,300 (1)</td></tr>
<tr><td>Vasek Aleksandrovich</td>
<td>$195,500 (3)</td></tr>
<tr><td>Hugo Nickel</td>
<td>$193,000 (5)</td></tr>
<tr><td>Gilbert Lozano</td>
<td>$181,800 (2)</td></tr>
<tr><td>Philip Chung</td>
<td>$173,100 (4)</td></tr>
<tr><td>Laurent Viala</td>
<td>$172,100 (2)</td></tr>
<tr><td>Marcin Mather</td>
<td>$160,800 (2)</td></tr>
<tr><td>Wai Toews</td>
<td>$157,900 (5)</td></tr>
<tr><td>Patric Engqvist</td>
<td>$157,300 (3)</td></tr>
<tr><td>Tigran Doroshenko</td>
<td>$155,900 (4)</td></tr>
<tr><td>Noel Theriault</td>
<td>$155,100 (3)</td></tr>
<tr><td>Yilmaz Hoch</td>
<td>$154,300 (4)</td></tr>
<tr><td>Lloyd Ayotte</td>
<td>$153,400 (4)</td></tr>
<tr><td>Romchik Akimov</td>
<td>$148,200 (4)</td></tr>
<tr><td>Lucien Funk</td>
<td>$146,305 (4)</td></tr>
<tr><td>Alexander Shah</td>
<td>$145,700 (2)</td></tr>
<tr><td>Jerome Fowler</td>
<td>$145,000 (3)</td></tr>
<tr><td>Ayan Emelyanov</td>
<td>$142,400 (5)</td></tr>
<tr><td>Nathan Lamb</td>
<td>$139,562 (4)</td></tr>
<tr><td>Manuel Nuttall</td>
<td>$131,800 (5)</td></tr>
<tr><td>Giovanni Larochelle</td>
<td>$102,600 (5)</td></tr>
<tr><td>Samuel Theis</td>
<td>$85,500 (3)</td></tr>
<tr><td>Aldo Grandjean</td>
<td>$43,600 (2)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $9,047,455</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,854,055</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,351,459</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,709,167</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $9,047,455</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,854,055</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,351,459</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,709,167</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T16"><a id="Team16">Team 16</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team16">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team16">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team16');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team16" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,652 - 94.20%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,628 - 92.57%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,903 - 95.14%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,756 - 93.89%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 939 - 93.92%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,891 - 94.53%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 931 - 93.14%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,878 - 93.77%</td></tr>
<tr><td>Average Income per Game</td><td>$1,489,035</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,561,385</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,822 - 94.07%</td></tr>
<tr><td>Average Income per Game</td><td>$100,175</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,007,012</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$56,855,105</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,072,174</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$57,855,168</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,120,384</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$56,855,169</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$306,112</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$48,256</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$126,136,489</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$126,136,489</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Romchik Borodin</td>
<td>$4,000,000 (1)</td></tr>
<tr><td>Anthony Duke</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>Klim Golovko</td>
<td>$3,997,000 (2)</td></tr>
<tr><td>Blair Dean</td>
<td>$3,887,000 (2)</td></tr>
<tr><td>Gaetan Brennan</td>
<td>$3,699,000 (4)</td></tr>
<tr><td>Valerka Usova</td>
<td>$3,635,105 (5)</td></tr>
<tr><td>Sheldon Lebel</td>
<td>$3,464,000 (5)</td></tr>
<tr><td>Thanh Beland</td>
<td>$3,443,000 (3)</td></tr>
<tr><td>Josh Theriault</td>
<td>$3,267,000 (4)</td></tr>
<tr><td>Bruce Gratton</td>
<td>$2,946,000 (4)</td></tr>
<tr><td>Steve Blanchette</td>
<td>$2,530,000 (3)</td></tr>
<tr><td>Vladislav Polyakov</td>
<td>$2,525,000 (3)</td></tr>
<tr><td>Keith Copeland</td>
<td>$2,274,000 (1)</td></tr>
<tr><td>Tom Kerr</td>
<td>$2,110,000 (1)</td></tr>
<tr><td>Vyacheslav Martynenko</td>
<td>$2,088,000 (1)</td></tr>
<tr><td>Barry Young</td>
<td>$2,025,000 (4)</td></tr>
<tr><td>Sven Aijala</td>
<td>$1,976,000 (3)</td></tr>
<tr><td>Mario Pepin</td>
<td>$1,827,000 (3)</td></tr>
<tr><td>Morris Lyons</td>
<td>$1,733,000 (4)</td></tr>
<tr><td>Floyd Norman</td>
<td>$1,429,000 (3)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,855,105</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $46,383,105</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $38,499,105</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $24,769,105</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,855,105</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $46,383,105</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $38,499,105</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $24,769,105</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,855,105</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $46,383,105</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $38,499,105</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $24,769,105</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jean-Marc Zeller</td>
<td>$400,000 (4)</td></tr>
<tr><td>Elias Sanchez</td>
<td>$360,000 (3)</td></tr>
<tr><td>Nick Monette</td>
<td>$322,500 (3)</td></tr>
<tr><td>Bastian Wittmann</td>
<td>$318,600 (3)</td></tr>
<tr><td>Suleyman Valeev</td>
<td>$275,800 (5)</td></tr>
<tr><td>Brandon Poole</td>
<td>$267,600 (3)</td></tr>
<tr><td>Gustav Hruby</td>
<td>$255,800 (2)</td></tr>
<tr><td>Evan Tucker</td>
<td>$247,266 (4)</td></tr>
<tr><td>Leon English</td>
<td>$246,961 (5)</td></tr>
<tr><td>Rashit Berezin</td>
<td>$245,700 (3)</td></tr>
<tr><td>Miguel Singh</td>
<td>$238,300 (3)</td></tr>
<tr><td>Kenneth Kelly</td>
<td>$232,300 (3)</td></tr>
<tr><td>Herbert Lara</td>
<td>$231,300 (2)</td></tr>
<tr><td>Pascal Berthiaume</td>
<td>$230,800 (3)</td></tr>
<tr><td>Mohammad Desrochers</td>
<td>$230,600 (4)</td></tr>
<tr><td>Rune Berntsson</td>
<td>$224,000 (2)</td></tr>
<tr><td>Etr Linnik</td>
<td>$209,400 (2)</td></tr>
<tr><td>Ed Leonard</td>
<td>$204,800 (2)</td></tr>
<tr><td>Harold Yang</td>
<td>$201,600 (3)</td></tr>
<tr><td>Cameron Ford</td>
<td>$198,400 (1)</td></tr>
<tr><td>Ruslans Ozolins</td>
<td>$187,100 (3)</td></tr>
<tr><td>Kevin Rempel</td>
<td>$185,800 (4)</td></tr>
<tr><td>Jan Rydberg</td>
<td>$179,800 (4)</td></tr>
<tr><td>Marcus Asselin</td>
<td>$179,500 (4)</td></tr>
<tr><td>Terrance Coleman</td>
<td>$176,100 (3)</td></tr>
<tr><td>Bruce Larsen</td>
<td>$172,900 (5)</td></tr>
<tr><td>Antonio Thiessen</td>
<td>$154,900 (3)</td></tr>
<tr><td>Eugene Perron</td>
<td>$149,100 (4)</td></tr>
<tr><td>Tibor Kasparkova</td>
<td>$147,100 (5)</td></tr>
<tr><td>Luc Mckay</td>
<td>$146,000 (1)</td></tr>
<tr><td>Garth Allard</td>
<td>$139,900 (4)</td></tr>
<tr><td>Mohammad Joseph</td>
<td>$139,000 (2)</td></tr>
<tr><td>Rob Dickson</td>
<td>$137,447 (3)</td></tr>
<tr><td>Alexander Norman</td>
<td>$136,800 (2)</td></tr>
<tr><td>Patrik Kovacova</td>
<td>$119,900 (1)</td></tr>
<tr><td>Raduz Gallova</td>
<td>$106,500 (3)</td></tr>
<tr><td>Ossi Utriainen</td>
<td>$100,100 (1)</td></tr>
<tr><td>Jarno Nenonen</td>
<td>$97,400 (2)</td></tr>
<tr><td>Mel Brewer</td>
<td>$78,600 (2)</td></tr>
<tr><td>Gennadiy Lebedev</td>
<td>$68,200 (3)</td></tr>
<tr><td>Jean-Francois Peters</td>
<td>$67,300 (1)</td></tr>
<tr><td>Arnold Walsh</td>
<td>$61,000 (2)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,072,174</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,440,474</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,802,374</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,554,727</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,072,174</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,440,474</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,802,374</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,554,727</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T17"><a id="Team17">Team 17</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team17">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team17">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team17');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team17" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,602 - 93.37%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,686 - 93.73%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,860 - 93.00%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,772 - 94.29%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 942 - 94.22%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,903 - 95.16%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 949 - 94.85%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,862 - 93.68%</td></tr>
<tr><td>Average Income per Game</td><td>$1,486,501</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,460,039</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,852 - 95.06%</td></tr>
<tr><td>Average Income per Game</td><td>$101,050</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,041,993</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$62,484,325</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,234,115</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$63,484,344</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,283,302</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$62,484,345</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$335,896</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$49,118</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$116,014,315</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$116,014,315</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Hannes Hofmann</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>Shyngyskhan Goncharova</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Arvid Tonnesen</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>Daniel Gerasimova</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Aleksandr Shvetsova</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>Paul Watts</td>
<td>$3,915,000 (3)</td></tr>
<tr><td>Angus Olson</td>
<td>$3,876,000 (4)</td></tr>
<tr><td>Kris Wright</td>
<td>$3,819,000 (4)</td></tr>
<tr><td>Walter Turnbull</td>
<td>$3,774,000 (5)</td></tr>
<tr><td>Robert Thompson</td>
<td>$3,714,000 (2)</td></tr>
<tr><td>Herb Macmillan</td>
<td>$3,336,000 (3)</td></tr>
<tr><td>Pentti Puttonen</td>
<td>$3,170,000 (3)</td></tr>
<tr><td>Aysen Sadykov</td>
<td>$3,091,000 (2)</td></tr>
<tr><td>Vladislav Horvathova</td>
<td>$2,342,000 (4)</td></tr>
<tr><td>Pertti Molander</td>
<td>$2,247,000 (2)</td></tr>
<tr><td>Thanh Marcoux</td>
<td>$2,093,325 (3)</td></tr>
<tr><td>Kyosti Matilainen</td>
<td>$1,950,000 (5)</td></tr>
<tr><td>Earl Lyons</td>
<td>$1,934,000 (5)</td></tr>
<tr><td>Sam Mcdaniel</td>
<td>$1,884,000 (2)</td></tr>
<tr><td>Kevin Whalen</td>
<td>$1,339,000 (2)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $62,484,325</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $62,484,325</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $46,209,325</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $29,695,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $62,484,325</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $62,484,325</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $46,209,325</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $29,695,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $62,484,325</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $62,484,325</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $46,209,325</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $29,695,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Drew Tremblay</td>
<td>$400,000 (4)</td></tr>
<tr><td>Herbert Roberts</td>
<td>$400,000 (2)</td></tr>
<tr><td>Reg Newman</td>
<td>$400,000 (3)</td></tr>
<tr><td>Jude Turner</td>
<td>$383,600 (4)</td></tr>
<tr><td>Ted Dunlop</td>
<td>$338,917 (3)</td></tr>
<tr><td>Glen Sampson</td>
<td>$315,100 (3)</td></tr>
<tr><td>Jose Jovanovic</td>
<td>$297,600 (5)</td></tr>
<tr><td>Voitto Backlund</td>
<td>$280,200 (1)</td></tr>
<tr><td>Aleksandr Borisenko</td>
<td>$259,500 (5)</td></tr>
<tr><td>Libor Cervenka</td>
<td>$248,000 (5)</td></tr>
<tr><td>Bob Carriere</td>
<td>$247,400 (5)</td></tr>
<tr><td>Djamel Baudin</td>
<td>$240,800 (3)</td></tr>
<tr><td>Gavin Lagace</td>
<td>$214,700 (1)</td></tr>
<tr><td>Igor Gromova</td>
<td>$209,600 (1)</td></tr>
<tr><td>Brett Taylor</td>
<td>$208,300 (2)</td></tr>
<tr><td>Noel St Pierre</td>
<td>$201,400 (2)</td></tr>
<tr><td>Vojta Stransky</td>
<td>$194,000 (2)</td></tr>
<tr><td>Stepan Akhmetov</td>
<td>$187,700 (4)</td></tr>
<tr><td>Serge Mcbride</td>
<td>$185,700 (1)</td></tr>
<tr><td>Carsten Fricke</td>
<td>$181,200 (2)</td></tr>
<tr><td>Anatolij Mayorov</td>
<td>$177,800 (1)</td></tr>
<tr><td>Attila Krupova</td>
<td>$173,800 (2)</td></tr>
<tr><td>Grant Faucher</td>
<td>$173,500 (3)</td></tr>
<tr><td>Stanislav Gromova</td>
<td>$172,000 (3)</td></tr>
<tr><td>Tony Juel</td>
<td>$166,700 (4)</td></tr>
<tr><td>Troy Steeves</td>
<td>$145,900 (5)</td></tr>
<tr><td>Alan Summers</td>
<td>$143,700 (2)</td></tr>
<tr><td>Oliver Martinez</td>
<td>$139,700 (4)</td></tr>
<tr><td>Jakub Sokolova</td>
<td>$139,299 (2)</td></tr>
<tr><td>Glen Stone</td>
<td>$133,900 (4)</td></tr>
<tr><td>Ben Provost</td>
<td>$128,200 (3)</td></tr>
<tr><td>Yan Mikhaylichenko</td>
<td>$124,400 (3)</td></tr>
<tr><td>Adam Xu</td>
<td>$119,100 (3)</td></tr>
<tr><td>Georges Lepine</td>
<td>$116,900 (1)</td></tr>
<tr><td>Jean-Luc Larson</td>
<td>$114,500 (3)</td></tr>
<tr><td>Eugene Huot</td>
<td>$109,800 (2)</td></tr>
<tr><td>Isaac Lo</td>
<td>$108,500 (4)</td></tr>
<tr><td>Jim Denis</td>
<td>$107,700 (1)</td></tr>
<tr><td>Gino Larson</td>
<td>$106,700 (2)</td></tr>
<tr><td>Jouni Korhonen</td>
<td>$100,000 (4)</td></tr>
<tr><td>Jerome Woodard</td>
<td>$73,900 (3)</td></tr>
<tr><td>Milton Abbott</td>
<td>$64,400 (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,234,116</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,877,116</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,018,917</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,818,500</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,234,116</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,877,116</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,018,917</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,818,500</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T18"><a id="Team18">Team 18</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team18">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team18">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team18');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team18" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,661 - 94.34%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,664 - 93.28%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,894 - 94.72%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,794 - 94.84%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 928 - 92.82%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,862 - 93.11%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 945 - 94.53%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,941 - 94.12%</td></tr>
<tr><td>Average Income per Game</td><td>$1,490,833</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,633,306</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,808 - 93.58%</td></tr>
<tr><td>Average Income per Game</td><td>$99,197</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,967,895</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$57,812,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$7,877,499</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$58,812,075</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$8,924,769</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$57,812,076</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$311,175</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$47,221</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$149,971,853</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$149,971,853</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Robt Mcmahon</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>Joachim Norin</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Gilles Winter</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>Phil Browning</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Jason Trujillo</td>
<td>$3,894,000 (1)</td></tr>
<tr><td>Fredric Klingberg</td>
<td>$3,435,000 (1)</td></tr>
<tr><td>Mohammad Raymond</td>
<td>$3,430,000 (1)</td></tr>
<tr><td>Andy Henry</td>
<td>$2,836,000 (3)</td></tr>
<tr><td>Lee Hu</td>
<td>$2,765,000 (4)</td></tr>
<tr><td>Francis Franklin</td>
<td>$2,728,000 (2)</td></tr>
<tr><td>Geo Monette</td>
<td>$2,678,000 (4)</td></tr>
<tr><td>Jesse Suutari</td>
<td>$2,586,000 (4)</td></tr>
<tr><td>Ildar Morozova</td>
<td>$2,408,000 (4)</td></tr>
<tr><td>Thomas Fuentes</td>
<td>$2,403,000 (5)</td></tr>
<tr><td>Max Fletcher</td>
<td>$2,380,000 (3)</td></tr>
<tr><td>Max Rodgers</td>
<td>$2,348,000 (3)</td></tr>
<tr><td>Alexandr Kazakov</td>
<td>$2,300,000 (2)</td></tr>
<tr><td>Serge Pollock</td>
<td>$2,237,000 (4)</td></tr>
<tr><td>Vladislav Rakhmanianov</td>
<td>$1,792,000 (2)</td></tr>
<tr><td>Lester Farmer</td>
<td>$1,592,000 (4)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,812,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $47,053,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $36,233,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $24,669,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,812,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $47,053,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $36,233,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $24,669,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,812,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $47,053,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $36,233,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $24,669,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Norm Sanderson</td>
<td>$400,000 (2)</td></tr>
<tr><td>Lukas Sterbova</td>
<td>$400,000 (4)</td></tr>
<tr><td>Angel Erickson</td>
<td>$400,000 (5)</td></tr>
<tr><td>Billy Christensson</td>
<td>$346,600 (5)</td></tr>
<tr><td>Julian Cochrane</td>
<td>$308,700 (5)</td></tr>
<tr><td>Wilfried Stahl</td>
<td>$275,600 (4)</td></tr>
<tr><td>Omar Lariviere</td>
<td>$257,400 (1)</td></tr>
<tr><td>Yves Ricard</td>
<td>$238,000 (2)</td></tr>
<tr><td>Sigvard Sjoo</td>
<td>$232,100 (2)</td></tr>
<tr><td>Rafael Riemer</td>
<td>$227,000 (1)</td></tr>
<tr><td>Zelim Ivanov</td>
<td>$222,900 (3)</td></tr>
<tr><td>Geoff Sharma</td>
<td>$216,300 (3)</td></tr>
<tr><td>Stephen Cordova</td>
<td>$214,600 (5)</td></tr>
<tr><td>Ullrich Dreyer</td>
<td>$209,600 (3)</td></tr>
<tr><td>Gerardo Grimes</td>
<td>$204,700 (1)</td></tr>
<tr><td>Francis Houle</td>
<td>$203,700 (1)</td></tr>
<tr><td>Randall Dyck</td>
<td>$194,800 (3)</td></tr>
<tr><td>Batyrbek Kadyrov</td>
<td>$193,700 (3)</td></tr>
<tr><td>Gerald Han</td>
<td>$192,900 (2)</td></tr>
<tr><td>Jim Orr</td>
<td>$188,100 (3)</td></tr>
<tr><td>Juergen Wolf</td>
<td>$168,300 (5)</td></tr>
<tr><td>Mathew Wood</td>
<td>$168,000 (2)</td></tr>
<tr><td>Gran Nordgren</td>
<td>$166,899 (4)</td></tr>
<tr><td>Jonathan Beauregard</td>
<td>$165,600 (2)</td></tr>
<tr><td>Vern Zhou</td>
<td>$165,400 (4)</td></tr>
<tr><td>Chuck Mitchell</td>
<td>$161,300 (2)</td></tr>
<tr><td>Charlie Choi</td>
<td>$155,500 (3)</td></tr>
<tr><td>Patrick Holmes</td>
<td>$154,500 (2)</td></tr>
<tr><td>Roman Zeidler</td>
<td>$141,800 (5)</td></tr>
<tr><td>Hector Vasquez</td>
<td>$137,900 (4)</td></tr>
<tr><td>Lasse Wihlborg</td>
<td>$126,700 (5)</td></tr>
<tr><td>Clint Lewis</td>
<td>$125,600 (1)</td></tr>
<tr><td>Phillip Mcintosh</td>
<td>$123,500 (3)</td></tr>
<tr><td>Roberto Pittman</td>
<td>$121,100 (3)</td></tr>
<tr><td>Chermen Ponomarev</td>
<td>$107,000 (4)</td></tr>
<tr><td>Lars-Goran Ahlberg</td>
<td>$100,400 (4)</td></tr>
<tr><td>Hugo Hesse</td>
<td>$99,000 (4)</td></tr>
<tr><td>Arnold Rohner</td>
<td>$92,400 (2)</td></tr>
<tr><td>Jan Kallinen</td>
<td>$80,200 (4)</td></tr>
<tr><td>Saul Page</td>
<td>$67,200 (2)</td></tr>
<tr><td>Ray Hogan</td>
<td>$65,700 (4)</td></tr>
<tr><td>Maurice Ramos</td>
<td>$56,800 (4)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,877,499</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,859,099</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,987,099</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,361,599</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,877,499</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,859,099</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,987,099</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,361,599</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T19"><a id="Team19">Team 19</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team19">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team19">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team19');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team19" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,596 - 93.27%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,809 - 96.19%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,872 - 93.58%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,736 - 93.39%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 948 - 94.76%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,892 - 94.58%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 955 - 95.55%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,961 - 94.23%</td></tr>
<tr><td>Average Income per Game</td><td>$1,495,764</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,830,571</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,847 - 94.90%</td></tr>
<tr><td>Average Income per Game</td><td>$100,669</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,026,755</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$49,417,865</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,198,204</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$50,417,829</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,247,203</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$49,417,830</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$266,761</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$48,927</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$140,984,570</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$140,984,570</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Lance Dagenais</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>Bertil Malmgren</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>Marc-Andre Trepanier</td>
<td>$3,847,000 (4)</td></tr>
<tr><td>Mihail Savchuk</td>
<td>$3,332,000 (3)</td></tr>
<tr><td>Joey Sabourin</td>
<td>$3,233,000 (2)</td></tr>
<tr><td>Pertti Rydberg</td>
<td>$2,975,000 (3)</td></tr>
<tr><td>Jerry Sabourin</td>
<td>$2,808,000 (5)</td></tr>
<tr><td>David Huffman</td>
<td>$2,789,000 (3)</td></tr>
<tr><td>Rolf Karhu</td>
<td>$2,444,865 (4)</td></tr>
<tr><td>Jaime Huang</td>
<td>$2,165,000 (3)</td></tr>
<tr><td>Harri Naumanen</td>
<td>$2,073,000 (4)</td></tr>
<tr><td>Bobby Poulin</td>
<td>$2,021,000 (2)</td></tr>
<tr><td>Jacob Rogers</td>
<td>$1,935,000 (4)</td></tr>
<tr><td>Ben Diallo</td>
<td>$1,850,000 (3)</td></tr>
<tr><td>Mario Pavelkova</td>
<td>$1,842,000 (3)</td></tr>
<tr><td>Giuseppe Palmer</td>
<td>$1,832,000 (2)</td></tr>
<tr><td>Heimo Kivela</td>
<td>$1,622,000 (1)</td></tr>
<tr><td>Dave Galvan</td>
<td>$1,611,000 (3)</td></tr>
<tr><td>Alfred Engblom</td>
<td>$1,532,000 (3)</td></tr>
<tr><td>Radko Kaspar</td>
<td>$1,506,000 (3)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $49,417,865</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $47,795,865</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $40,709,865</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $21,107,865</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $49,417,865</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $47,795,865</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $40,709,865</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $21,107,865</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $49,417,865</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $47,795,865</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $40,709,865</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $21,107,865</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Antonio Hynes</td>
<td>$400,000 (2)</td></tr>
<tr><td>Vlas Popov</td>
<td>$400,000 (2)</td></tr>
<tr><td>Francis Lawrence</td>
<td>$295,700 (2)</td></tr>
<tr><td>Warren Vallee</td>
<td>$294,600 (2)</td></tr>
<tr><td>Dale Barton</td>
<td>$286,700 (3)</td></tr>
<tr><td>Andres Bright</td>
<td>$270,683 (4)</td></tr>
<tr><td>Mike Fong</td>
<td>$267,900 (4)</td></tr>
<tr><td>Gabriel Lewis</td>
<td>$263,200 (2)</td></tr>
<tr><td>Greg Mah</td>
<td>$259,700 (5)</td></tr>
<tr><td>Yannick Park</td>
<td>$255,200 (3)</td></tr>
<tr><td>Kenneth Nousiainen</td>
<td>$254,100 (4)</td></tr>
<tr><td>Joerg Miller</td>
<td>$230,000 (2)</td></tr>
<tr><td>Blake Huang</td>
<td>$221,200 (3)</td></tr>
<tr><td>Urad Balint</td>
<td>$220,921 (2)</td></tr>
<tr><td>Alexei Boyko</td>
<td>$213,300 (4)</td></tr>
<tr><td>Olavi Tammi</td>
<td>$201,600 (4)</td></tr>
<tr><td>Artur Wolfova</td>
<td>$199,700 (2)</td></tr>
<tr><td>Gerald Baker</td>
<td>$196,400 (5)</td></tr>
<tr><td>Grant Bean</td>
<td>$186,800 (3)</td></tr>
<tr><td>Mika Karlberg</td>
<td>$186,400 (4)</td></tr>
<tr><td>Tom Navarro</td>
<td>$183,400 (5)</td></tr>
<tr><td>Christian Janovsky</td>
<td>$182,200 (4)</td></tr>
<tr><td>Jean-Luc Huard</td>
<td>$177,400 (4)</td></tr>
<tr><td>David Haapasalo</td>
<td>$177,300 (2)</td></tr>
<tr><td>Luc St Pierre</td>
<td>$176,100 (3)</td></tr>
<tr><td>Rusya Abubakarov</td>
<td>$166,800 (2)</td></tr>
<tr><td>Ervin Kocisova</td>
<td>$161,900 (5)</td></tr>
<tr><td>Nurtas Nurpeisov</td>
<td>$152,800 (1)</td></tr>
<tr><td>Arkadiy Rakhimzhanova</td>
<td>$151,100 (4)</td></tr>
<tr><td>Kenny Wang</td>
<td>$149,400 (3)</td></tr>
<tr><td>Charles Middleton</td>
<td>$145,600 (5)</td></tr>
<tr><td>Bernard Olsen</td>
<td>$132,600 (2)</td></tr>
<tr><td>Olavi Juhola</td>
<td>$129,500 (1)</td></tr>
<tr><td>Oscar Lariviere</td>
<td>$123,800 (4)</td></tr>
<tr><td>Stefan Farrell</td>
<td>$123,100 (1)</td></tr>
<tr><td>Mark Tikhonova</td>
<td>$122,700 (3)</td></tr>
<tr><td>Jean-Marc Kay</td>
<td>$120,300 (4)</td></tr>
<tr><td>Syed Chamberland</td>
<td>$110,300 (3)</td></tr>
<tr><td>Oscar Cantin</td>
<td>$109,600 (2)</td></tr>
<tr><td>Aldo Breton</td>
<td>$107,800 (2)</td></tr>
<tr><td>Hugh Laberge</td>
<td>$98,200 (3)</td></tr>
<tr><td>Geoff Thibeault</td>
<td>$92,200 (4)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,198,204</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,792,804</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,794,583</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,187,983</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,198,204</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,792,804</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,794,583</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,187,983</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TM2"><a id="Team2">Team 2</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team2">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team2">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team2');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team2" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,731 - 95.52%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,744 - 94.89%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,905 - 95.27%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,800 - 94.99%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 937 - 93.68%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,895 - 94.77%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 936 - 93.63%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,117 - 95.10%</td></tr>
<tr><td>Average Income per Game</td><td>$1,508,531</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,341,248</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,832 - 94.39%</td></tr>
<tr><td>Average Income per Game</td><td>$100,483</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,019,306</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$55,455,264</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,205,717</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$56,455,245</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,254,763</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$55,455,246</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$298,705</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$48,967</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$156,354,948</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$156,354,948</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Yvon Prince</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Ian Zhao</td>
<td>$3,840,199 (2)</td></tr>
<tr><td>Blake Hansen</td>
<td>$3,812,065 (4)</td></tr>
<tr><td>Dustin Rodrigue</td>
<td>$3,539,000 (3)</td></tr>
<tr><td>Fernando Chan</td>
<td>$3,491,000 (3)</td></tr>
<tr><td>Rickey Blanchard</td>
<td>$3,302,000 (1)</td></tr>
<tr><td>Teijo Himanen</td>
<td>$3,241,000 (4)</td></tr>
<tr><td>Jan-Erik Toivola</td>
<td>$2,979,000 (2)</td></tr>
<tr><td>Tikhon Bocharova</td>
<td>$2,971,000 (4)</td></tr>
<tr><td>Kai Becker</td>
<td>$2,622,000 (3)</td></tr>
<tr><td>Rogelio Donovan</td>
<td>$2,601,000 (3)</td></tr>
<tr><td>Richard Mcintosh</td>
<td>$2,514,000 (4)</td></tr>
<tr><td>Jim Morris</td>
<td>$2,433,000 (3)</td></tr>
<tr><td>Laurent Michaud</td>
<td>$2,294,000 (1)</td></tr>
<tr><td>Gregory Theriault</td>
<td>$2,125,000 (4)</td></tr>
<tr><td>Rob Copeland</td>
<td>$2,120,000 (5)</td></tr>
<tr><td>Remi Provencher</td>
<td>$2,062,000 (1)</td></tr>
<tr><td>Eldar Grigoryev</td>
<td>$1,918,000 (4)</td></tr>
<tr><td>Gerhard Kratz</td>
<td>$1,889,000 (4)</td></tr>
<tr><td>Chi Cantin</td>
<td>$1,702,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $55,455,264</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $46,095,264</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $35,276,065</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $20,590,065</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $55,455,264</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $46,095,264</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $35,276,065</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $20,590,065</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $55,455,264</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $46,095,264</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $35,276,065</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $20,590,065</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ronald Jansson</td>
<td>$400,000 (4)</td></tr>
<tr><td>Gregory Horner</td>
<td>$400,000 (2)</td></tr>
<tr><td>Antonio Day</td>
<td>$396,565 (3)</td></tr>
<tr><td>Rodney Hall</td>
<td>$354,600 (5)</td></tr>
<tr><td>Matvey Kryukov</td>
<td>$295,700 (1)</td></tr>
<tr><td>Henrik Parkkonen</td>
<td>$285,200 (4)</td></tr>
<tr><td>Andre St-Jean</td>
<td>$280,400 (2)</td></tr>
<tr><td>Ravshan Solnyshko</td>
<td>$257,200 (1)</td></tr>
<tr><td>Carl Johnson</td>
<td>$250,100 (1)</td></tr>
<tr><td>Vasek Vinokurov</td>
<td>$237,200 (2)</td></tr>
<tr><td>Milos Polacek</td>
<td>$235,300 (2)</td></tr>
<tr><td>Peter Chabot</td>
<td>$227,000 (4)</td></tr>
<tr><td>Bob Cooke</td>
<td>$226,100 (3)</td></tr>
<tr><td>Clyde Krause</td>
<td>$213,300 (2)</td></tr>
<tr><td>Aydyn Karpov</td>
<td>$211,500 (3)</td></tr>
<tr><td>Mikko Westerholm</td>
<td>$202,100 (1)</td></tr>
<tr><td>Ed Simonova</td>
<td>$199,700 (5)</td></tr>
<tr><td>Mitchell Fitzgerald</td>
<td>$199,200 (4)</td></tr>
<tr><td>Geo Cook</td>
<td>$198,000 (1)</td></tr>
<tr><td>Nicolas Houston</td>
<td>$196,100 (2)</td></tr>
<tr><td>Randolph Weiss</td>
<td>$183,700 (3)</td></tr>
<tr><td>Alain Trudeau</td>
<td>$175,900 (3)</td></tr>
<tr><td>Genadiy Zinchenko</td>
<td>$169,600 (2)</td></tr>
<tr><td>Ken Aguirre</td>
<td>$168,200 (4)</td></tr>
<tr><td>Wade Mclellan</td>
<td>$167,400 (3)</td></tr>
<tr><td>Oliver Laberge</td>
<td>$166,400 (3)</td></tr>
<tr><td>Aulis Tuukkanen</td>
<td>$150,000 (2)</td></tr>
<tr><td>Yan Eryomina</td>
<td>$148,200 (1)</td></tr>
<tr><td>Mel Mccormick</td>
<td>$145,600 (2)</td></tr>
<tr><td>Ludovit Kohoutova</td>
<td>$144,100 (3)</td></tr>
<tr><td>Brent Auclair</td>
<td>$137,600 (3)</td></tr>
<tr><td>Ross Orozco</td>
<td>$136,000 (3)</td></tr>
<tr><td>Chad Colon</td>
<td>$135,600 (3)</td></tr>
<tr><td>Jyrki Takala</td>
<td>$134,800 (3)</td></tr>
<tr><td>Nigel Morrison</td>
<td>$133,453 (3)</td></tr>
<tr><td>Angus Harwood</td>
<td>$112,100 (3)</td></tr>
<tr><td>Jeffrey Beck</td>
<td>$111,700 (1)</td></tr>
<tr><td>Ali Sabitov</td>
<td>$107,300 (1)</td></tr>
<tr><td>Ernie Roach</td>
<td>$106,400 (4)</td></tr>
<tr><td>Yvon Mcneil</td>
<td>$79,600 (2)</td></tr>
<tr><td>Luis Oman</td>
<td>$66,000 (4)</td></tr>
<tr><td>Clifford Sun</td>
<td>$60,800 (3)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,205,718</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,635,418</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,528,318</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,006,300</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,205,718</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,635,418</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,528,318</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,006,300</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T20"><a id="Team20">Team 20</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team20">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team20">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team20');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team20" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,712 - 95.20%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,730 - 94.60%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,912 - 95.61%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,774 - 94.36%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 936 - 93.58%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,882 - 94.11%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 945 - 94.47%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,064 - 94.80%</td></tr>
<tr><td>Average Income per Game</td><td>$1,504,298</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,171,926</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,827 - 94.23%</td></tr>
<tr><td>Average Income per Game</td><td>$100,056</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,002,226</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$56,874,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,872,032</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$57,874,068</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,924,579</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$56,874,069</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$306,212</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$52,511</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$122,785,952</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$122,785,952</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Francis St-Pierre</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Valto Pekkarinen</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Juha Borg</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>Georg Hedstrom</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Max Groth</td>
<td>$3,836,000 (1)</td></tr>
<tr><td>Perry Chabot</td>
<td>$3,343,000 (2)</td></tr>
<tr><td>Barry Curtis</td>
<td>$3,155,000 (2)</td></tr>
<tr><td>Gustav Buchta</td>
<td>$2,892,000 (3)</td></tr>
<tr><td>Raymond Vetsch</td>
<td>$2,860,000 (4)</td></tr>
<tr><td>Ian Hill</td>
<td>$2,716,000 (3)</td></tr>
<tr><td>Dick Boden</td>
<td>$2,632,000 (2)</td></tr>
<tr><td>Henric Fahlgren</td>
<td>$2,624,000 (2)</td></tr>
<tr><td>Cesar Gorman</td>
<td>$2,544,000 (4)</td></tr>
<tr><td>Herberts Vasiljevs</td>
<td>$2,441,000 (3)</td></tr>
<tr><td>Henric Petersen</td>
<td>$2,405,000 (2)</td></tr>
<tr><td>Philip Breton</td>
<td>$2,182,000 (4)</td></tr>
<tr><td>Charlie Lange</td>
<td>$2,020,000 (4)</td></tr>
<tr><td>Wilson Brunet</td>
<td>$1,867,000 (2)</td></tr>
<tr><td>Robert Bruce</td>
<td>$1,738,000 (1)</td></tr>
<tr><td>Gabriel Kvist</td>
<td>$1,619,000 (3)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,874,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $51,300,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $31,274,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $13,606,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,874,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $51,300,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $31,274,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $13,606,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,874,000</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $51,300,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $31,274,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $13,606,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Rich Donnelly</td>
<td>$400,000 (1)</td></tr>
<tr><td>Wilfred Cook</td>
<td>$400,000 (3)</td></tr>
<tr><td>Justin Tessier</td>
<td>$330,300 (1)</td></tr>
<tr><td>Rex Foster</td>
<td>$317,100 (3)</td></tr>
<tr><td>Shaun Deslauriers</td>
<td>$306,500 (3)</td></tr>
<tr><td>Wilfred Roberge</td>
<td>$300,000 (4)</td></tr>
<tr><td>Ruzil Sidorova</td>
<td>$298,400 (4)</td></tr>
<tr><td>Darren Anderson</td>
<td>$298,000 (4)</td></tr>
<tr><td>Mustafa Bolatov</td>
<td>$295,037 (1)</td></tr>
<tr><td>Benoit Grant</td>
<td>$278,200 (2)</td></tr>
<tr><td>Erlan Ryzhkov</td>
<td>$250,900 (4)</td></tr>
<tr><td>Jerome Glover</td>
<td>$250,800 (5)</td></tr>
<tr><td>Mark Flores</td>
<td>$237,711 (3)</td></tr>
<tr><td>Ilja Klimova</td>
<td>$234,400 (4)</td></tr>
<tr><td>Vaclav Pospisilova</td>
<td>$223,500 (1)</td></tr>
<tr><td>Volker Hahn</td>
<td>$222,700 (4)</td></tr>
<tr><td>Denis Kalnina</td>
<td>$222,200 (4)</td></tr>
<tr><td>Marco Lapointe</td>
<td>$220,500 (3)</td></tr>
<tr><td>Erich Linder</td>
<td>$216,600 (1)</td></tr>
<tr><td>Lance Mcclain</td>
<td>$212,600 (1)</td></tr>
<tr><td>Danil Vershinin</td>
<td>$206,600 (4)</td></tr>
<tr><td>Volkmar Engels</td>
<td>$201,384 (3)</td></tr>
<tr><td>Tyrone Mccall</td>
<td>$191,300 (2)</td></tr>
<tr><td>Abdul Lundahl</td>
<td>$184,100 (2)</td></tr>
<tr><td>Kenny Houle</td>
<td>$173,000 (4)</td></tr>
<tr><td>Jonathan Brennan</td>
<td>$172,800 (2)</td></tr>
<tr><td>Shaun Tan</td>
<td>$172,300 (5)</td></tr>
<tr><td>Ivan Giroux</td>
<td>$167,400 (3)</td></tr>
<tr><td>Andre Giles</td>
<td>$166,300 (2)</td></tr>
<tr><td>Antonio Buchanan</td>
<td>$165,500 (4)</td></tr>
<tr><td>Zachary Thornton</td>
<td>$164,100 (1)</td></tr>
<tr><td>Samuel Dupont</td>
<td>$159,800 (2)</td></tr>
<tr><td>Jimmy Doyle</td>
<td>$154,800 (4)</td></tr>
<tr><td>Ilyar Ilina</td>
<td>$154,600 (3)</td></tr>
<tr><td>Hubert Obrien</td>
<td>$151,000 (3)</td></tr>
<tr><td>Esbol Chernova</td>
<td>$148,600 (3)</td></tr>
<tr><td>Karl Fitzgerald</td>
<td>$145,100 (4)</td></tr>
<tr><td>Kevin Love</td>
<td>$128,800 (5)</td></tr>
<tr><td>Darrell Austin</td>
<td>$118,800 (1)</td></tr>
<tr><td>Ilez Tsvetkov</td>
<td>$106,200 (4)</td></tr>
<tr><td>Mike Cross</td>
<td>$64,600 (4)</td></tr>
<tr><td>Seth Mcintosh</td>
<td>$59,500 (4)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,872,032</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,911,095</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,758,595</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,453,800</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,872,032</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,911,095</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,758,595</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,453,800</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T21"><a id="Team21">Team 21</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team21">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team21">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team21');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team21" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,618 - 93.63%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,714 - 94.29%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,878 - 93.90%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,797 - 94.93%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 938 - 93.81%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,882 - 94.12%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 947 - 94.74%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,946 - 94.14%</td></tr>
<tr><td>Average Income per Game</td><td>$1,491,174</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,646,956</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,830 - 94.33%</td></tr>
<tr><td>Average Income per Game</td><td>$100,118</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,004,731</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$51,257,157</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,543,164</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$52,257,177</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,594,018</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$51,257,178</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$276,493</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$50,762</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$135,114,594</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$135,114,594</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Josh Hutchinson</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>Fred Montgomery</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Teuvo Kulju</td>
<td>$3,411,157 (5)</td></tr>
<tr><td>Spencer Horton</td>
<td>$3,119,000 (2)</td></tr>
<tr><td>Cliff Sabourin</td>
<td>$3,077,000 (5)</td></tr>
<tr><td>Josh Bolduc</td>
<td>$3,045,000 (2)</td></tr>
<tr><td>Grant Hardy</td>
<td>$2,995,000 (2)</td></tr>
<tr><td>Ken Mora</td>
<td>$2,972,000 (1)</td></tr>
<tr><td>Kyosti Kaasinen</td>
<td>$2,678,000 (4)</td></tr>
<tr><td>Ravshan Konstantinova</td>
<td>$2,470,000 (5)</td></tr>
<tr><td>Svante Soderqvist</td>
<td>$2,470,000 (5)</td></tr>
<tr><td>Erkki Josefsson</td>
<td>$2,243,000 (4)</td></tr>
<tr><td>Byron Bernard</td>
<td>$2,166,000 (4)</td></tr>
<tr><td>Milan Marcin</td>
<td>$2,125,000 (2)</td></tr>
<tr><td>Seppo Tyni</td>
<td>$2,063,000 (1)</td></tr>
<tr><td>Corey Ouimet</td>
<td>$1,898,000 (2)</td></tr>
<tr><td>Remi Leclerc</td>
<td>$1,811,000 (2)</td></tr>
<tr><td>Harvey Gilbert</td>
<td>$1,770,000 (4)</td></tr>
<tr><td>Samat Grigoryan</td>
<td>$1,487,000 (4)</td></tr>
<tr><td>Stewart Laflamme</td>
<td>$1,457,000 (3)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $51,257,157</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $46,222,157</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $27,229,157</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $25,772,157</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $51,257,157</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $46,222,157</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $27,229,157</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $25,772,157</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $51,257,157</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $46,222,157</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $27,229,157</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $25,772,157</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Tim Raymond</td>
<td>$400,000 (4)</td></tr>
<tr><td>Tadeas Vit</td>
<td>$400,000 (1)</td></tr>
<tr><td>Donald Lynch</td>
<td>$363,900 (3)</td></tr>
<tr><td>Ingvar Gulliksen</td>
<td>$329,000 (3)</td></tr>
<tr><td>Carlo Hansen</td>
<td>$308,500 (1)</td></tr>
<tr><td>Rolf Sigrist</td>
<td>$300,400 (4)</td></tr>
<tr><td>Lyle Duffy</td>
<td>$287,000 (3)</td></tr>
<tr><td>Johnny Tardif</td>
<td>$262,400 (4)</td></tr>
<tr><td>Drew Kerr</td>
<td>$246,000 (2)</td></tr>
<tr><td>Oscar Carroll</td>
<td>$243,800 (3)</td></tr>
<tr><td>Karl-Peter Heuer</td>
<td>$239,460 (4)</td></tr>
<tr><td>Ruslan Mikhaylov</td>
<td>$226,700 (3)</td></tr>
<tr><td>Ildar Sultanov</td>
<td>$223,600 (4)</td></tr>
<tr><td>Hakan Vesterlund</td>
<td>$223,400 (4)</td></tr>
<tr><td>Saveliy Subbotin</td>
<td>$218,500 (2)</td></tr>
<tr><td>Andrzej Fagerberg</td>
<td>$211,200 (3)</td></tr>
<tr><td>Said Nesterenko</td>
<td>$201,700 (3)</td></tr>
<tr><td>Rustam Mironov</td>
<td>$200,300 (2)</td></tr>
<tr><td>Domenic Boulet</td>
<td>$199,400 (3)</td></tr>
<tr><td>Ismael Baxter</td>
<td>$198,300 (2)</td></tr>
<tr><td>Anton Mackinnon</td>
<td>$197,600 (4)</td></tr>
<tr><td>Darren Cruz</td>
<td>$193,800 (1)</td></tr>
<tr><td>Max Lawrence</td>
<td>$190,000 (2)</td></tr>
<tr><td>Grant Durocher</td>
<td>$187,903 (3)</td></tr>
<tr><td>Joseph Lachapelle</td>
<td>$187,700 (3)</td></tr>
<tr><td>Carlos Duncan</td>
<td>$178,200 (1)</td></tr>
<tr><td>Herman Adamcikova</td>
<td>$174,800 (2)</td></tr>
<tr><td>Rasmus Lahdenpera</td>
<td>$171,400 (3)</td></tr>
<tr><td>Ildus Latypova</td>
<td>$162,200 (4)</td></tr>
<tr><td>Zbysek Vitkova</td>
<td>$160,000 (3)</td></tr>
<tr><td>Stephan Wold</td>
<td>$152,100 (2)</td></tr>
<tr><td>Batyr Tretyakova</td>
<td>$145,000 (2)</td></tr>
<tr><td>Evan Turcotte</td>
<td>$142,500 (3)</td></tr>
<tr><td>Stefan Gonda</td>
<td>$140,500 (4)</td></tr>
<tr><td>Love Forss</td>
<td>$140,200 (5)</td></tr>
<tr><td>Ralph Girard</td>
<td>$134,400 (3)</td></tr>
<tr><td>Hubertus Eggers</td>
<td>$133,200 (2)</td></tr>
<tr><td>Gabriel Green</td>
<td>$116,200 (1)</td></tr>
<tr><td>Alfons Staub</td>
<td>$96,100 (5)</td></tr>
<tr><td>Fabian Nystrom</td>
<td>$91,800 (2)</td></tr>
<tr><td>Samvel Vorontsov</td>
<td>$88,600 (3)</td></tr>
<tr><td>Vakha Kapustin</td>
<td>$75,400 (4)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,543,163</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,346,463</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,596,463</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,461,260</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,543,163</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,346,463</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,596,463</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,461,260</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T22"><a id="Team22">Team 22</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team22">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team22">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team22');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team22" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,700 - 95.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,727 - 94.53%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,896 - 94.82%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,794 - 94.85%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 936 - 93.58%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,898 - 94.90%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 940 - 93.96%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,053 - 94.74%</td></tr>
<tr><td>Average Income per Game</td><td>$1,502,486</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,099,451</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,838 - 94.59%</td></tr>
<tr><td>Average Income per Game</td><td>$100,657</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,026,285</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$58,101,239</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$7,832,946</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$59,101,245</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$8,879,976</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$58,101,246</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$312,705</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$46,984</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$109,746,650</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$109,746,650</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Eino Julkunen</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>Vovik Klimova</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Bror Remes</td>
<td>$3,954,000 (3)</td></tr>
<tr><td>Farid Litvinov</td>
<td>$3,708,000 (1)</td></tr>
<tr><td>Erik Robinson</td>
<td>$3,481,000 (3)</td></tr>
<tr><td>Odd Ost</td>
<td>$3,413,000 (3)</td></tr>
<tr><td>Brandon Moon</td>
<td>$3,386,000 (2)</td></tr>
<tr><td>Orlando Levy</td>
<td>$3,373,000 (2)</td></tr>
<tr><td>Filipp Kudryavtsev</td>
<td>$3,296,000 (2)</td></tr>
<tr><td>Herbert Soukup</td>
<td>$2,746,000 (2)</td></tr>
<tr><td>Roberto Prevost</td>
<td>$2,691,868 (4)</td></tr>
<tr><td>Zach Norton</td>
<td>$2,527,000 (2)</td></tr>
<tr><td>Oscar Jacobs</td>
<td>$2,459,371 (4)</td></tr>
<tr><td>Norbert Fiserova</td>
<td>$2,456,000 (4)</td></tr>
<tr><td>Paul Perkins</td>
<td>$2,349,000 (5)</td></tr>
<tr><td>Fredi Gehrmann</td>
<td>$2,320,000 (2)</td></tr>
<tr><td>Charlie Corbeil</td>
<td>$2,309,000 (3)</td></tr>
<tr><td>Jarle Frandsen</td>
<td>$2,158,000 (3)</td></tr>
<tr><td>Eddie Spence</td>
<td>$2,128,000 (2)</td></tr>
<tr><td>Drew Patenaude</td>
<td>$1,346,000 (5)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,101,239</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $54,393,239</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $30,617,239</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $15,302,239</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,101,239</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $54,393,239</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $30,617,239</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $15,302,239</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,101,239</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $54,393,239</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $30,617,239</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $15,302,239</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alfredo Curtis</td>
<td>$379,800 (4)</td></tr>
<tr><td>Gregory O'Connor</td>
<td>$328,200 (1)</td></tr>
<tr><td>Dmitriy Samsonov</td>
<td>$319,605 (5)</td></tr>
<tr><td>Samuel Sims</td>
<td>$301,500 (3)</td></tr>
<tr><td>Cory Salinas</td>
<td>$292,700 (4)</td></tr>
<tr><td>Rustik Mikheeva</td>
<td>$264,500 (2)</td></tr>
<tr><td>Angel Soto</td>
<td>$262,373 (5)</td></tr>
<tr><td>Akezhan Kadyrova</td>
<td>$253,000 (5)</td></tr>
<tr><td>Billy Price</td>
<td>$252,000 (4)</td></tr>
<tr><td>Roman Marchenko</td>
<td>$238,700 (3)</td></tr>
<tr><td>Tommy Juutilainen</td>
<td>$234,900 (2)</td></tr>
<tr><td>Jesse Zhao</td>
<td>$223,100 (3)</td></tr>
<tr><td>Aleksejs Upeniece</td>
<td>$217,000 (4)</td></tr>
<tr><td>Carey Martel</td>
<td>$204,800 (3)</td></tr>
<tr><td>Carlo Mckee</td>
<td>$202,800 (3)</td></tr>
<tr><td>Felipe Barber</td>
<td>$200,900 (2)</td></tr>
<tr><td>Borre Michaelsen</td>
<td>$197,300 (2)</td></tr>
<tr><td>Clinton Cunningham</td>
<td>$188,500 (2)</td></tr>
<tr><td>Philip Allan</td>
<td>$187,500 (3)</td></tr>
<tr><td>Stepan Alieva</td>
<td>$185,800 (4)</td></tr>
<tr><td>Adnan Froberg</td>
<td>$185,700 (2)</td></tr>
<tr><td>Bernard Greene</td>
<td>$182,200 (1)</td></tr>
<tr><td>Gus Leblanc</td>
<td>$181,400 (4)</td></tr>
<tr><td>Grigoriy Blinov</td>
<td>$178,545 (2)</td></tr>
<tr><td>Paul Lang</td>
<td>$175,124 (1)</td></tr>
<tr><td>Michael Hache</td>
<td>$175,100 (3)</td></tr>
<tr><td>Jonathan Valdez</td>
<td>$168,600 (4)</td></tr>
<tr><td>Matt Enns</td>
<td>$164,800 (3)</td></tr>
<tr><td>Igor Rose</td>
<td>$151,800 (5)</td></tr>
<tr><td>Benedikt Leu</td>
<td>$135,400 (3)</td></tr>
<tr><td>Jas Hamilton</td>
<td>$134,200 (1)</td></tr>
<tr><td>Jesse Garrett</td>
<td>$132,600 (5)</td></tr>
<tr><td>Tim Moland</td>
<td>$126,800 (2)</td></tr>
<tr><td>Craig Christensen</td>
<td>$124,600 (3)</td></tr>
<tr><td>Amir Ramstrom</td>
<td>$114,300 (3)</td></tr>
<tr><td>Kamal Mishina</td>
<td>$108,900 (4)</td></tr>
<tr><td>Slavko Vankova</td>
<td>$106,200 (4)</td></tr>
<tr><td>Brian Saethre</td>
<td>$82,100 (4)</td></tr>
<tr><td>Angus Gosselin</td>
<td>$77,900 (4)</td></tr>
<tr><td>George Ho</td>
<td>$72,100 (4)</td></tr>
<tr><td>Lasse Lundberg</td>
<td>$65,100 (3)</td></tr>
<tr><td>Geo Hamilton</td>
<td>$54,500 (3)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,832,947</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,013,223</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,436,078</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,243,878</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,832,947</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,013,223</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,436,078</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,243,878</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T23"><a id="Team23">Team 23</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team23">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team23">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team23');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team23" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,679 - 94.64%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,675 - 93.50%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,881 - 94.03%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,779 - 94.48%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 942 - 94.24%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,885 - 94.25%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 941 - 94.05%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,956 - 94.20%</td></tr>
<tr><td>Average Income per Game</td><td>$1,496,433</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,857,336</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,825 - 94.18%</td></tr>
<tr><td>Average Income per Game</td><td>$100,100</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,003,994</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$64,623,597</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,206,959</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$65,623,635</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,255,897</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$64,623,636</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$347,215</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$48,973</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$125,945,558</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$125,945,558</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Justin Charron</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Jerome Richard</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Mel George</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Arkadiusz Brenden</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>George Skinner</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Vic Ho</td>
<td>$3,945,597 (4)</td></tr>
<tr><td>Alex Shaffer</td>
<td>$3,774,000 (5)</td></tr>
<tr><td>Ricardo Booth</td>
<td>$3,581,000 (3)</td></tr>
<tr><td>Dave Kerr</td>
<td>$3,560,000 (3)</td></tr>
<tr><td>Vladimir Peter</td>
<td>$3,444,000 (3)</td></tr>
<tr><td>Amir Sanderson</td>
<td>$3,294,000 (3)</td></tr>
<tr><td>Garrett Calhoun</td>
<td>$3,205,000 (5)</td></tr>
<tr><td>Mehdi Lindqvist</td>
<td>$3,192,000 (4)</td></tr>
<tr><td>Nicolas Millar</td>
<td>$2,889,000 (3)</td></tr>
<tr><td>Ming Allen</td>
<td>$2,688,000 (1)</td></tr>
<tr><td>Trevor Kang</td>
<td>$2,385,000 (4)</td></tr>
<tr><td>Tommy Price</td>
<td>$2,320,000 (2)</td></tr>
<tr><td>Ruben Espinoza</td>
<td>$2,251,000 (2)</td></tr>
<tr><td>Vic Sandhu</td>
<td>$2,172,000 (2)</td></tr>
<tr><td>Dino Larson</td>
<td>$1,923,000 (5)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $64,623,597</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $61,935,597</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $39,192,597</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $22,424,597</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $64,623,597</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $61,935,597</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $39,192,597</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $22,424,597</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $64,623,597</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $61,935,597</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $39,192,597</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $22,424,597</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ilnaz Vinogradov</td>
<td>$400,000 (4)</td></tr>
<tr><td>Ulli Barthel</td>
<td>$385,500 (1)</td></tr>
<tr><td>Harry Macmillan</td>
<td>$381,000 (1)</td></tr>
<tr><td>Henri Bond</td>
<td>$371,430 (2)</td></tr>
<tr><td>Boris Ponomarev</td>
<td>$321,100 (2)</td></tr>
<tr><td>Michel Chapman</td>
<td>$317,224 (4)</td></tr>
<tr><td>Amir Brisebois</td>
<td>$316,505 (4)</td></tr>
<tr><td>Scott Dunlap</td>
<td>$241,200 (5)</td></tr>
<tr><td>Elias Siltanen</td>
<td>$239,900 (3)</td></tr>
<tr><td>Derrick Stone</td>
<td>$226,400 (4)</td></tr>
<tr><td>Donats Vilcane</td>
<td>$224,800 (4)</td></tr>
<tr><td>Hans Dube</td>
<td>$224,000 (3)</td></tr>
<tr><td>Jimmy Gibson</td>
<td>$218,000 (1)</td></tr>
<tr><td>Sonny Hagberg</td>
<td>$213,300 (4)</td></tr>
<tr><td>Teuvo Pyykkonen</td>
<td>$207,300 (5)</td></tr>
<tr><td>Omar Aman</td>
<td>$203,300 (2)</td></tr>
<tr><td>Robert Compton</td>
<td>$203,200 (5)</td></tr>
<tr><td>Jean-Francois Fisher</td>
<td>$193,700 (4)</td></tr>
<tr><td>Kir Nazarova</td>
<td>$184,900 (5)</td></tr>
<tr><td>Medard Jankovicova</td>
<td>$179,700 (2)</td></tr>
<tr><td>Roland Love</td>
<td>$176,100 (1)</td></tr>
<tr><td>Irek Pankratov</td>
<td>$173,300 (4)</td></tr>
<tr><td>Bator Golovko</td>
<td>$172,400 (4)</td></tr>
<tr><td>Alan Kramer</td>
<td>$171,800 (4)</td></tr>
<tr><td>Casey Mckee</td>
<td>$156,800 (3)</td></tr>
<tr><td>Lasse Forss</td>
<td>$155,800 (3)</td></tr>
<tr><td>Dinislam Shapovalova</td>
<td>$154,000 (4)</td></tr>
<tr><td>Radomir Malek</td>
<td>$153,100 (2)</td></tr>
<tr><td>Thord Oskarsson</td>
<td>$151,000 (3)</td></tr>
<tr><td>Ted Leroux</td>
<td>$150,800 (1)</td></tr>
<tr><td>Douglas Doiron</td>
<td>$146,900 (1)</td></tr>
<tr><td>Bill Paradis</td>
<td>$146,600 (1)</td></tr>
<tr><td>Ake Sjoberg</td>
<td>$142,500 (5)</td></tr>
<tr><td>Roch Boisvert</td>
<td>$139,700 (3)</td></tr>
<tr><td>Lasse Ulriksen</td>
<td>$138,300 (4)</td></tr>
<tr><td>Gabriel Mccarthy</td>
<td>$110,800 (2)</td></tr>
<tr><td>Bob Jacobs</td>
<td>$106,000 (2)</td></tr>
<tr><td>Zurab Agafonov</td>
<td>$100,300 (5)</td></tr>
<tr><td>Demyan Maltsev</td>
<td>$98,600 (3)</td></tr>
<tr><td>Kazbek Naumenko</td>
<td>$96,500 (3)</td></tr>
<tr><td>Stig Lundstrom</td>
<td>$58,900 (2)</td></tr>
<tr><td>Remi Bernard</td>
<td>$54,300 (2)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,206,959</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,602,059</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,043,429</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,781,129</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,206,959</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,602,059</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,043,429</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,781,129</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_T24"><a id="Team24">Team 24</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team24">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team24">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team24');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team24" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,765 - 96.09%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,734 - 94.68%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,897 - 94.86%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,776 - 94.40%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 942 - 94.18%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,904 - 95.22%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 949 - 94.86%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,114 - 95.08%</td></tr>
<tr><td>Average Income per Game</td><td>$1,512,150</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,486,011</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,853 - 95.10%</td></tr>
<tr><td>Average Income per Game</td><td>$101,102</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,044,079</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$60,747,150</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$7,876,014</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$61,747,056</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$8,923,257</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$60,747,057</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$326,704</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$47,213</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$134,465,017</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$134,465,017</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Anssi Hujanen</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Alfred Kumar</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Jonathan Kristiansson</td>
<td>$4,000,000 (1)</td></tr>
<tr><td>Etienne Santos</td>
<td>$3,970,000 (2)</td></tr>
<tr><td>Wilson Solomon</td>
<td>$3,869,000 (2)</td></tr>
<tr><td>Esa Tervo</td>
<td>$3,696,000 (5)</td></tr>
<tr><td>Alan Holmberg</td>
<td>$3,626,933 (4)</td></tr>
<tr><td>Harvey Walker</td>
<td>$3,580,000 (3)</td></tr>
<tr><td>Pierre-Emmanuel Bianchi</td>
<td>$3,527,000 (4)</td></tr>
<tr><td>Laurence Rowe</td>
<td>$2,983,000 (1)</td></tr>
<tr><td>Jack Gray</td>
<td>$2,969,000 (1)</td></tr>
<tr><td>Dwayne Chase</td>
<td>$2,933,000 (2)</td></tr>
<tr><td>Ferenc Medved</td>
<td>$2,887,217 (4)</td></tr>
<tr><td>Curtis Daniels</td>
<td>$2,871,000 (4)</td></tr>
<tr><td>Jonas Sevcik</td>
<td>$2,341,000 (5)</td></tr>
<tr><td>Barry Ellison</td>
<td>$2,299,000 (4)</td></tr>
<tr><td>Bert Archambault</td>
<td>$1,995,000 (2)</td></tr>
<tr><td>Derek Russo</td>
<td>$1,953,000 (3)</td></tr>
<tr><td>Fernando Harding</td>
<td>$1,905,000 (5)</td></tr>
<tr><td>Antonio Chevalier</td>
<td>$1,342,000 (1)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $60,747,150</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $49,453,150</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $36,686,150</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $23,153,150</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $60,747,150</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $49,453,150</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $36,686,150</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $23,153,150</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $60,747,150</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $49,453,150</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $36,686,150</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $23,153,150</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alfred Fields</td>
<td>$400,000 (5)</td></tr>
<tr><td>Winston Rondeau</td>
<td>$322,500 (2)</td></tr>
<tr><td>George Charlebois</td>
<td>$318,338 (2)</td></tr>
<tr><td>Craig Hickey</td>
<td>$314,400 (3)</td></tr>
<tr><td>Esa Hallen</td>
<td>$310,800 (2)</td></tr>
<tr><td>Oliver Lane</td>
<td>$304,600 (3)</td></tr>
<tr><td>Dallas Durand</td>
<td>$279,700 (1)</td></tr>
<tr><td>Josef Ramstrom</td>
<td>$274,000 (2)</td></tr>
<tr><td>Friedrich Noll</td>
<td>$253,100 (2)</td></tr>
<tr><td>Carl Poutiainen</td>
<td>$248,700 (3)</td></tr>
<tr><td>Peter Maclean</td>
<td>$239,990 (2)</td></tr>
<tr><td>Leopold Roos</td>
<td>$234,500 (5)</td></tr>
<tr><td>Dick Hallqvist</td>
<td>$221,400 (4)</td></tr>
<tr><td>Albert Kellermann</td>
<td>$210,900 (3)</td></tr>
<tr><td>Martin Vachon</td>
<td>$204,200 (5)</td></tr>
<tr><td>Anton Jackson</td>
<td>$203,600 (5)</td></tr>
<tr><td>Francois Beaudin</td>
<td>$189,900 (1)</td></tr>
<tr><td>Pierre Steele</td>
<td>$189,200 (4)</td></tr>
<tr><td>Dmitry Kholod</td>
<td>$176,900 (1)</td></tr>
<tr><td>Zhanserik Abdraimova</td>
<td>$176,600 (3)</td></tr>
<tr><td>Dallas Cole</td>
<td>$176,100 (4)</td></tr>
<tr><td>Johnny Hughes</td>
<td>$173,500 (2)</td></tr>
<tr><td>Roman Rondeau</td>
<td>$163,500 (3)</td></tr>
<tr><td>Jonas Seppa</td>
<td>$159,800 (3)</td></tr>
<tr><td>Warren Leger</td>
<td>$155,600 (5)</td></tr>
<tr><td>Oleg Scholl</td>
<td>$155,500 (5)</td></tr>
<tr><td>Felix Piche</td>
<td>$154,800 (4)</td></tr>
<tr><td>Jan Jindra</td>
<td>$146,700 (5)</td></tr>
<tr><td>Greg Vallieres</td>
<td>$145,000 (1)</td></tr>
<tr><td>Art Yu</td>
<td>$141,400 (3)</td></tr>
<tr><td>Ryan Reeves</td>
<td>$137,400 (4)</td></tr>
<tr><td>Steeve Ladouceur</td>
<td>$125,300 (4)</td></tr>
<tr><td>Brandon Hall</td>
<td>$124,500 (2)</td></tr>
<tr><td>Jarmo Bjorling</td>
<td>$111,300 (4)</td></tr>
<tr><td>Franklin Byers</td>
<td>$108,100 (4)</td></tr>
<tr><td>Matthew Mcbride</td>
<td>$107,487 (3)</td></tr>
<tr><td>Frieder Langer</td>
<td>$107,000 (4)</td></tr>
<tr><td>Vladimir Pankova</td>
<td>$103,200 (3)</td></tr>
<tr><td>Adrien Steele</td>
<td>$100,500 (1)</td></tr>
<tr><td>Wilfred Shah</td>
<td>$78,000 (3)</td></tr>
<tr><td>Romeo Brisebois</td>
<td>$65,600 (3)</td></tr>
<tr><td>Darren Castillo</td>
<td>$62,400 (3)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,876,015</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,984,015</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,967,287</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,830,700</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,876,015</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,984,015</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,967,287</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,830,700</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TM3"><a id="Team3">Team 3</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team3">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team3">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team3');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team3" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,700 - 95.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,687 - 93.74%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,899 - 94.95%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,772 - 94.30%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 940 - 94.00%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,868 - 93.42%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 942 - 94.20%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,998 - 94.43%</td></tr>
<tr><td>Average Income per Game</td><td>$1,499,930</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,997,212</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,810 - 93.68%</td></tr>
<tr><td>Average Income per Game</td><td>$99,400</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,976,008</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$58,592,730</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$7,942,174</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$59,592,645</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$8,989,785</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$58,592,646</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$315,305</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$47,565</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$143,509,073</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$143,509,073</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Angus Penner</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Jean Straub</td>
<td>$4,000,000 (1)</td></tr>
<tr><td>Daniel Russell</td>
<td>$3,965,000 (5)</td></tr>
<tr><td>Ingvar Borgstrom</td>
<td>$3,783,000 (1)</td></tr>
<tr><td>Pasquale Ruf</td>
<td>$3,657,579 (3)</td></tr>
<tr><td>Joacim Magnusson</td>
<td>$3,412,151 (4)</td></tr>
<tr><td>Cameron George</td>
<td>$3,099,000 (5)</td></tr>
<tr><td>Magomed Kazantsev</td>
<td>$3,069,000 (4)</td></tr>
<tr><td>Ali Ermakovich</td>
<td>$2,905,000 (5)</td></tr>
<tr><td>Cody Jimenez</td>
<td>$2,903,000 (3)</td></tr>
<tr><td>Robert Maloney</td>
<td>$2,861,000 (2)</td></tr>
<tr><td>Ramin Semenova</td>
<td>$2,853,000 (3)</td></tr>
<tr><td>Martti Dahl</td>
<td>$2,824,000 (1)</td></tr>
<tr><td>John Holma</td>
<td>$2,504,000 (4)</td></tr>
<tr><td>Yury Rogov</td>
<td>$2,407,000 (3)</td></tr>
<tr><td>Edwin Nielsen</td>
<td>$2,326,000 (3)</td></tr>
<tr><td>Dale Henderson</td>
<td>$2,201,000 (3)</td></tr>
<tr><td>Rinat Sizova</td>
<td>$2,166,000 (3)</td></tr>
<tr><td>Osman Clemens</td>
<td>$1,969,000 (3)</td></tr>
<tr><td>Hans Heimonen</td>
<td>$1,688,000 (2)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,592,730</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $47,985,730</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $39,436,730</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $18,954,151</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,592,730</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $47,985,730</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $39,436,730</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $18,954,151</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,592,730</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $47,985,730</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $39,436,730</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $18,954,151</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Dennis Jacob</td>
<td>$349,800 (4)</td></tr>
<tr><td>Corey Kennedy</td>
<td>$342,895 (3)</td></tr>
<tr><td>Ousseni Lemarchand</td>
<td>$313,600 (2)</td></tr>
<tr><td>Roy Granberg</td>
<td>$305,503 (2)</td></tr>
<tr><td>Javier Schneider</td>
<td>$295,708 (3)</td></tr>
<tr><td>Jussi Piipponen</td>
<td>$288,569 (5)</td></tr>
<tr><td>Matt Tran</td>
<td>$267,800 (2)</td></tr>
<tr><td>Russ Baker</td>
<td>$239,000 (1)</td></tr>
<tr><td>Melvin Lara</td>
<td>$234,700 (5)</td></tr>
<tr><td>Leif Hammarlund</td>
<td>$228,200 (3)</td></tr>
<tr><td>Jake Knight</td>
<td>$227,100 (3)</td></tr>
<tr><td>Ilmo Kinnunen</td>
<td>$223,800 (1)</td></tr>
<tr><td>Danila Lavrov</td>
<td>$222,600 (4)</td></tr>
<tr><td>Dan Miller</td>
<td>$216,900 (4)</td></tr>
<tr><td>Alan Beattie</td>
<td>$205,200 (2)</td></tr>
<tr><td>Geoffrey Hickey</td>
<td>$205,200 (2)</td></tr>
<tr><td>Doug Marquez</td>
<td>$201,600 (4)</td></tr>
<tr><td>Gavin Brisebois</td>
<td>$199,300 (4)</td></tr>
<tr><td>Mukhamed Mikhaylenko</td>
<td>$199,100 (3)</td></tr>
<tr><td>Frank Lagergren</td>
<td>$196,900 (2)</td></tr>
<tr><td>Vasek Fokin</td>
<td>$194,600 (5)</td></tr>
<tr><td>Norm Lambert</td>
<td>$188,600 (2)</td></tr>
<tr><td>Graham Chouinard</td>
<td>$188,000 (3)</td></tr>
<tr><td>Ghislain Robertson</td>
<td>$183,200 (1)</td></tr>
<tr><td>Armen Minko</td>
<td>$179,700 (2)</td></tr>
<tr><td>Dmitri Starovoytov</td>
<td>$169,400 (4)</td></tr>
<tr><td>Dron Nikiforova</td>
<td>$164,800 (3)</td></tr>
<tr><td>Jan Laitinen</td>
<td>$150,200 (4)</td></tr>
<tr><td>Kirk Prince</td>
<td>$148,600 (4)</td></tr>
<tr><td>Veli-Matti Janhunen</td>
<td>$134,800 (5)</td></tr>
<tr><td>Rene Nixon</td>
<td>$133,900 (3)</td></tr>
<tr><td>Ted Rush</td>
<td>$133,300 (1)</td></tr>
<tr><td>Anders Niemela</td>
<td>$131,900 (4)</td></tr>
<tr><td>Anton Palko</td>
<td>$127,700 (2)</td></tr>
<tr><td>Trent Marshall</td>
<td>$116,200 (1)</td></tr>
<tr><td>Adrien Yu</td>
<td>$114,800 (2)</td></tr>
<tr><td>Joacim Heden</td>
<td>$112,300 (2)</td></tr>
<tr><td>Pat Mooney</td>
<td>$102,200 (3)</td></tr>
<tr><td>Jere Rahkonen</td>
<td>$98,800 (3)</td></tr>
<tr><td>Kamil Vershinina</td>
<td>$80,800 (5)</td></tr>
<tr><td>Kris Bell</td>
<td>$76,200 (3)</td></tr>
<tr><td>Arthur Albert</td>
<td>$48,700 (2)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,942,175</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,046,675</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,780,672</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,723,769</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,942,175</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,046,675</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,780,672</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,723,769</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TM4"><a id="Team4">Team 4</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team4">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team4">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team4');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team4" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,676 - 94.59%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,678 - 93.57%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,890 - 94.50%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,805 - 95.12%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 946 - 94.57%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,873 - 93.66%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 941 - 94.09%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,994 - 94.41%</td></tr>
<tr><td>Average Income per Game</td><td>$1,498,324</td></tr>
<tr><td>Year to Date Revenue</td><td>$59,932,954</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,814 - 93.80%</td></tr>
<tr><td>Average Income per Game</td><td>$99,590</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,983,607</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$57,790,906</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,473,230</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$58,790,907</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,523,710</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$57,790,908</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$311,063</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$50,390</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$118,639,121</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$118,639,121</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Klemens Schone</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>Sylvain Russell</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Juho Suonpaa</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Al Guzman</td>
<td>$3,984,906 (1)</td></tr>
<tr><td>Jose Mcgrath</td>
<td>$3,885,000 (2)</td></tr>
<tr><td>Maximilian Kraus</td>
<td>$3,404,000 (1)</td></tr>
<tr><td>Joseph Potter</td>
<td>$3,231,000 (3)</td></tr>
<tr><td>Ingo Schaller</td>
<td>$3,157,000 (3)</td></tr>
<tr><td>Alex Klassen</td>
<td>$3,113,000 (3)</td></tr>
<tr><td>Simon Francis</td>
<td>$2,760,000 (3)</td></tr>
<tr><td>Mathew Tan</td>
<td>$2,599,000 (2)</td></tr>
<tr><td>Andras Miko</td>
<td>$2,493,000 (3)</td></tr>
<tr><td>Radim Hosek</td>
<td>$2,491,000 (4)</td></tr>
<tr><td>Sammy Bright</td>
<td>$2,387,000 (2)</td></tr>
<tr><td>Dmitrijs Riekstins</td>
<td>$2,325,000 (5)</td></tr>
<tr><td>Remi Maillard</td>
<td>$2,272,000 (4)</td></tr>
<tr><td>Colin Doyon</td>
<td>$2,051,000 (2)</td></tr>
<tr><td>Rod Trudel</td>
<td>$1,905,000 (2)</td></tr>
<tr><td>Ahmad Doyon</td>
<td>$1,868,000 (4)</td></tr>
<tr><td>Taylor Potvin</td>
<td>$1,865,000 (2)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,790,906</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $50,402,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $31,710,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $12,956,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,790,906</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $50,402,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $31,710,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $12,956,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $57,790,906</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $50,402,000</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $31,710,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $12,956,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Tyler Hewitt</td>
<td>$400,000 (4)</td></tr>
<tr><td>Karim Ferguson</td>
<td>$369,600 (4)</td></tr>
<tr><td>Zhaxylyk Kolesnikova</td>
<td>$349,889 (4)</td></tr>
<tr><td>Justin John</td>
<td>$297,000 (2)</td></tr>
<tr><td>Yan Weir</td>
<td>$285,500 (3)</td></tr>
<tr><td>Kasper Juutilainen</td>
<td>$284,753 (3)</td></tr>
<tr><td>Sylvain Rice</td>
<td>$279,800 (2)</td></tr>
<tr><td>Thomas Ask</td>
<td>$278,200 (3)</td></tr>
<tr><td>Kurt Heinze</td>
<td>$269,717 (1)</td></tr>
<tr><td>Oskari Simola</td>
<td>$263,600 (2)</td></tr>
<tr><td>Marc Shannon</td>
<td>$244,700 (2)</td></tr>
<tr><td>Timothy Bennett</td>
<td>$243,800 (2)</td></tr>
<tr><td>Owen Richards</td>
<td>$239,800 (2)</td></tr>
<tr><td>Jari-Pekka Koivistoinen</td>
<td>$238,100 (3)</td></tr>
<tr><td>Eddie Dunn</td>
<td>$232,800 (1)</td></tr>
<tr><td>Pedro Ford</td>
<td>$228,900 (3)</td></tr>
<tr><td>Josh Garcia</td>
<td>$222,900 (1)</td></tr>
<tr><td>Almir Yusupov</td>
<td>$219,300 (2)</td></tr>
<tr><td>Sylvain Herger</td>
<td>$214,800 (5)</td></tr>
<tr><td>Renat Khachukaev</td>
<td>$206,900 (4)</td></tr>
<tr><td>Joey Rioux</td>
<td>$202,900 (2)</td></tr>
<tr><td>Tapani Sihvonen</td>
<td>$197,800 (3)</td></tr>
<tr><td>Malik Mikhaylenko</td>
<td>$187,100 (4)</td></tr>
<tr><td>Johnny Gordon</td>
<td>$178,700 (4)</td></tr>
<tr><td>Dick Mills</td>
<td>$176,500 (2)</td></tr>
<tr><td>Danny Boyle</td>
<td>$174,100 (2)</td></tr>
<tr><td>Steve Jean</td>
<td>$169,500 (5)</td></tr>
<tr><td>Angelo Maldonado</td>
<td>$167,500 (2)</td></tr>
<tr><td>Doug Benson</td>
<td>$159,100 (2)</td></tr>
<tr><td>Felipe Farley</td>
<td>$153,300 (4)</td></tr>
<tr><td>Levs Silins</td>
<td>$147,872 (2)</td></tr>
<tr><td>Beslan Bazhenov</td>
<td>$144,600 (4)</td></tr>
<tr><td>Georges Piche</td>
<td>$130,900 (4)</td></tr>
<tr><td>Clyde Webster</td>
<td>$129,400 (4)</td></tr>
<tr><td>Kesha Koval</td>
<td>$128,000 (3)</td></tr>
<tr><td>Luigi Lamothe</td>
<td>$123,700 (2)</td></tr>
<tr><td>Erik Sirois</td>
<td>$106,800 (1)</td></tr>
<tr><td>Ravil Kirillov</td>
<td>$105,700 (2)</td></tr>
<tr><td>Eskil Elfstrom</td>
<td>$103,500 (4)</td></tr>
<tr><td>Vladimir Popovicova</td>
<td>$100,600 (3)</td></tr>
<tr><td>Dwayne Higgins</td>
<td>$75,700 (2)</td></tr>
<tr><td>Tony Salomaa</td>
<td>$39,900 (2)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,473,231</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,641,014</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,480,042</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,738,189</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,473,231</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,641,014</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,480,042</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $2,738,189</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TM5"><a id="Team5">Team 5</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team5">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team5">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team5');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team5" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,664 - 94.40%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,790 - 95.80%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,867 - 93.34%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,816 - 95.41%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 935 - 93.53%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,899 - 94.96%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 945 - 94.50%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,073 - 94.85%</td></tr>
<tr><td>Average Income per Game</td><td>$1,502,028</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,081,135</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,844 - 94.80%</td></tr>
<tr><td>Average Income per Game</td><td>$100,803</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,032,138</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$58,386,937</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$7,779,540</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$59,387,013</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$8,826,300</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$58,387,014</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$314,217</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$46,700</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$131,236,740</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$131,236,740</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ignacio Kirk</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Alf Kiuru</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>Phillip Gratton</td>
<td>$3,984,000 (3)</td></tr>
<tr><td>Nathaniel Hess</td>
<td>$3,641,000 (3)</td></tr>
<tr><td>Sammy Quinn</td>
<td>$3,591,000 (3)</td></tr>
<tr><td>Herwig Ries</td>
<td>$3,485,000 (3)</td></tr>
<tr><td>Gene Lawson</td>
<td>$3,184,000 (4)</td></tr>
<tr><td>Jean-Philippe Nash</td>
<td>$3,064,000 (2)</td></tr>
<tr><td>Carlo Legare</td>
<td>$3,009,000 (4)</td></tr>
<tr><td>Mikhail Tasboltaev</td>
<td>$2,904,937 (2)</td></tr>
<tr><td>Karl Janhunen</td>
<td>$2,815,000 (1)</td></tr>
<tr><td>Hans-Olof Rosberg</td>
<td>$2,784,000 (2)</td></tr>
<tr><td>Gosta Melin</td>
<td>$2,745,000 (1)</td></tr>
<tr><td>Christophe Harrison</td>
<td>$2,537,000 (3)</td></tr>
<tr><td>Corey Holland</td>
<td>$2,430,000 (2)</td></tr>
<tr><td>Pete Wilkerson</td>
<td>$2,398,000 (5)</td></tr>
<tr><td>Alexander Cohen</td>
<td>$2,381,000 (5)</td></tr>
<tr><td>Pascal Plamondon</td>
<td>$1,991,000 (3)</td></tr>
<tr><td>Mike Jean</td>
<td>$1,930,000 (5)</td></tr>
<tr><td>Alikhan Khazhmuradov</td>
<td>$1,513,000 (5)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,386,937</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $52,826,937</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $37,644,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $18,415,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,386,937</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $52,826,937</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $37,644,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $18,415,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,386,937</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $52,826,937</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $37,644,000</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $18,415,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Israel Espinoza</td>
<td>$400,000 (1)</td></tr>
<tr><td>Asker Kirillov</td>
<td>$363,300 (4)</td></tr>
<tr><td>Ted Flores</td>
<td>$318,400 (3)</td></tr>
<tr><td>Ainis Zarins</td>
<td>$314,632 (5)</td></tr>
<tr><td>Wilson Simon</td>
<td>$292,211 (3)</td></tr>
<tr><td>Donald Allan</td>
<td>$268,000 (3)</td></tr>
<tr><td>Byron Li</td>
<td>$256,000 (2)</td></tr>
<tr><td>Carlton Riddle</td>
<td>$255,500 (4)</td></tr>
<tr><td>Francois Pike</td>
<td>$251,700 (3)</td></tr>
<tr><td>Ramil Kostina</td>
<td>$241,300 (4)</td></tr>
<tr><td>Shalkar Ushakova</td>
<td>$236,000 (5)</td></tr>
<tr><td>Elmeri Lintula</td>
<td>$215,500 (4)</td></tr>
<tr><td>Reimund Henn</td>
<td>$212,000 (3)</td></tr>
<tr><td>Jan-Ake Back</td>
<td>$203,000 (5)</td></tr>
<tr><td>Harry Hogan</td>
<td>$198,400 (4)</td></tr>
<tr><td>Tural Reshetnikov</td>
<td>$190,300 (2)</td></tr>
<tr><td>Martti Tuppurainen</td>
<td>$187,300 (2)</td></tr>
<tr><td>Chad Rochon</td>
<td>$183,300 (4)</td></tr>
<tr><td>Thanh Hall</td>
<td>$182,900 (4)</td></tr>
<tr><td>Ivan Karimov</td>
<td>$181,700 (3)</td></tr>
<tr><td>Harry Schnyder</td>
<td>$180,700 (3)</td></tr>
<tr><td>Vic Mcmahon</td>
<td>$179,500 (3)</td></tr>
<tr><td>Ahti Nikula</td>
<td>$169,300 (4)</td></tr>
<tr><td>Simon Hellstrom</td>
<td>$164,800 (2)</td></tr>
<tr><td>Donald Spencer</td>
<td>$164,000 (2)</td></tr>
<tr><td>Joshua Welch</td>
<td>$152,100 (4)</td></tr>
<tr><td>Jorge Abbott</td>
<td>$145,700 (2)</td></tr>
<tr><td>Trent Lemieux</td>
<td>$144,300 (3)</td></tr>
<tr><td>Philip Soderlind</td>
<td>$138,400 (4)</td></tr>
<tr><td>Grzegorz Nordkvist</td>
<td>$135,900 (1)</td></tr>
<tr><td>Russell Dixon</td>
<td>$128,300 (1)</td></tr>
<tr><td>Reinhard Sommer</td>
<td>$127,597 (4)</td></tr>
<tr><td>Bennie Simmons</td>
<td>$125,900 (5)</td></tr>
<tr><td>Jay Millar</td>
<td>$120,800 (2)</td></tr>
<tr><td>Kurt Johnstone</td>
<td>$115,300 (5)</td></tr>
<tr><td>Michael Sun</td>
<td>$113,500 (2)</td></tr>
<tr><td>Isaac Power</td>
<td>$98,700 (4)</td></tr>
<tr><td>Jesper Leinonen</td>
<td>$95,400 (3)</td></tr>
<tr><td>Felix Little</td>
<td>$91,800 (4)</td></tr>
<tr><td>Roland Noble</td>
<td>$83,200 (4)</td></tr>
<tr><td>Nathan Blanchet</td>
<td>$82,300 (2)</td></tr>
<tr><td>Devin Beauregard</td>
<td>$70,600 (3)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,779,540</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,115,340</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,690,640</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,496,129</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,779,540</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,115,340</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $5,690,640</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,496,129</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TM6"><a id="Team6">Team 6</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team6">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team6">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team6');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team6" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,689 - 94.82%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,724 - 94.49%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,888 - 94.38%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,760 - 93.99%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 942 - 94.18%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,869 - 93.46%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 943 - 94.31%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,002 - 94.46%</td></tr>
<tr><td>Average Income per Game</td><td>$1,500,983</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,039,312</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,812 - 93.74%</td></tr>
<tr><td>Average Income per Game</td><td>$99,461</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,978,432</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$58,775,662</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$9,245,382</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$59,775,597</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$10,299,933</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$58,775,598</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$316,273</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$54,497</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$124,492,240</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$124,492,240</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Gene Galvan</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>David Gaudet</td>
<td>$4,000,000 (1)</td></tr>
<tr><td>Aleksander Leonteva</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Johnny Fry</td>
<td>$3,844,000 (4)</td></tr>
<tr><td>Khaled Mohammadi</td>
<td>$3,831,691 (3)</td></tr>
<tr><td>Marc-Andre Rousseau</td>
<td>$3,611,000 (3)</td></tr>
<tr><td>Linar Erokhina</td>
<td>$3,448,000 (2)</td></tr>
<tr><td>Abdulla Subbotina</td>
<td>$3,385,000 (4)</td></tr>
<tr><td>Gus Richard</td>
<td>$3,363,000 (4)</td></tr>
<tr><td>Mitchell Allard</td>
<td>$3,293,000 (5)</td></tr>
<tr><td>Steven Borjesson</td>
<td>$2,545,000 (4)</td></tr>
<tr><td>Hubert Kraus</td>
<td>$2,436,971 (4)</td></tr>
<tr><td>Samuel Grenier</td>
<td>$2,415,000 (4)</td></tr>
<tr><td>Zelim Tokarev</td>
<td>$2,319,000 (5)</td></tr>
<tr><td>Rami Dahlgren</td>
<td>$2,177,000 (3)</td></tr>
<tr><td>Daryl Robson</td>
<td>$2,167,000 (4)</td></tr>
<tr><td>Ilsur Sarkisyan</td>
<td>$2,105,000 (3)</td></tr>
<tr><td>Dylan Racine</td>
<td>$2,039,000 (1)</td></tr>
<tr><td>Hans Mcintyre</td>
<td>$2,030,000 (1)</td></tr>
<tr><td>Nicholas Selander</td>
<td>$1,766,000 (4)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,775,662</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $50,706,662</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $43,258,662</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $31,533,971</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,775,662</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $50,706,662</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $43,258,662</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $31,533,971</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $58,775,662</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $50,706,662</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $43,258,662</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $31,533,971</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Esa Veijalainen</td>
<td>$400,000 (2)</td></tr>
<tr><td>At Akzhigitov</td>
<td>$400,000 (1)</td></tr>
<tr><td>Marsel Fedorov</td>
<td>$348,400 (2)</td></tr>
<tr><td>Mauri Tuomela</td>
<td>$314,403 (2)</td></tr>
<tr><td>Russ Stanton</td>
<td>$305,700 (3)</td></tr>
<tr><td>Tony Murray</td>
<td>$301,700 (5)</td></tr>
<tr><td>Owe Nygren</td>
<td>$289,600 (3)</td></tr>
<tr><td>Stanley Chambers</td>
<td>$271,519 (5)</td></tr>
<tr><td>Emmanuel Buckley</td>
<td>$271,500 (1)</td></tr>
<tr><td>Jonas Kravec</td>
<td>$254,100 (4)</td></tr>
<tr><td>Wilfred Saunders</td>
<td>$251,400 (4)</td></tr>
<tr><td>Yannick Chung</td>
<td>$250,900 (2)</td></tr>
<tr><td>Jean-Marc Lepage</td>
<td>$247,000 (3)</td></tr>
<tr><td>Oliver Ahmad</td>
<td>$244,500 (4)</td></tr>
<tr><td>Ove Widmark</td>
<td>$237,900 (2)</td></tr>
<tr><td>Gabriel Stanley</td>
<td>$235,100 (4)</td></tr>
<tr><td>Keith Dufour</td>
<td>$234,700 (1)</td></tr>
<tr><td>Eugene Savage</td>
<td>$232,200 (2)</td></tr>
<tr><td>Gerald Fuller</td>
<td>$228,600 (4)</td></tr>
<tr><td>Andrew Clarke</td>
<td>$228,300 (4)</td></tr>
<tr><td>Jean-Guy Munro</td>
<td>$225,700 (2)</td></tr>
<tr><td>Perry Sawyer</td>
<td>$225,300 (1)</td></tr>
<tr><td>Jimmie Conley</td>
<td>$221,100 (4)</td></tr>
<tr><td>Fanis Kononov</td>
<td>$220,400 (2)</td></tr>
<tr><td>Elias Erichsen</td>
<td>$212,900 (2)</td></tr>
<tr><td>Veniamin Petrosyan</td>
<td>$212,800 (1)</td></tr>
<tr><td>Felix Ekberg</td>
<td>$205,200 (3)</td></tr>
<tr><td>Rasul Rumyantsev</td>
<td>$200,600 (4)</td></tr>
<tr><td>Germain Mcleod</td>
<td>$188,500 (2)</td></tr>
<tr><td>Dim Bogomolova</td>
<td>$185,600 (1)</td></tr>
<tr><td>Cecil Rivard</td>
<td>$185,200 (5)</td></tr>
<tr><td>Kristian Yarosh</td>
<td>$185,000 (4)</td></tr>
<tr><td>Marc Lejeune</td>
<td>$167,500 (2)</td></tr>
<tr><td>Henri Leclerc</td>
<td>$166,000 (5)</td></tr>
<tr><td>Dimarik Soboleva</td>
<td>$157,760 (2)</td></tr>
<tr><td>Fred Zhao</td>
<td>$137,900 (5)</td></tr>
<tr><td>Sema Permyakov</td>
<td>$137,800 (2)</td></tr>
<tr><td>Carlo Carlson</td>
<td>$123,500 (3)</td></tr>
<tr><td>Daryn Sydykov</td>
<td>$99,200 (2)</td></tr>
<tr><td>Francois Roques</td>
<td>$96,300 (3)</td></tr>
<tr><td>Joel Phelps</td>
<td>$88,500 (5)</td></tr>
<tr><td>Mark Simon</td>
<td>$55,100 (1)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $9,245,382</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,660,382</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,466,819</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,199,519</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $9,245,382</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $7,660,382</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,466,819</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,199,519</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TM7"><a id="Team7">Team 7</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team7">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team7">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team7');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team7" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,671 - 94.51%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,710 - 94.19%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,874 - 93.70%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,780 - 94.50%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 953 - 95.30%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,900 - 95.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 956 - 95.65%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,987 - 94.37%</td></tr>
<tr><td>Average Income per Game</td><td>$1,500,389</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,015,566</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,856 - 95.21%</td></tr>
<tr><td>Average Income per Game</td><td>$101,055</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,042,183</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$56,560,667</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$7,303,256</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$57,560,706</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$8,347,374</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$56,560,707</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$304,554</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$44,166</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$134,868,771</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$134,868,771</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Tatu Ruuska</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Luke Whitney</td>
<td>$3,804,667 (3)</td></tr>
<tr><td>Harold Daniel</td>
<td>$3,396,000 (5)</td></tr>
<tr><td>Billy Dionne</td>
<td>$3,298,000 (4)</td></tr>
<tr><td>Jules Graham</td>
<td>$3,243,000 (4)</td></tr>
<tr><td>Jorge Day</td>
<td>$3,161,000 (3)</td></tr>
<tr><td>Jarno Kopra</td>
<td>$3,068,000 (4)</td></tr>
<tr><td>Radko Klimes</td>
<td>$3,036,000 (4)</td></tr>
<tr><td>Norman Lacroix</td>
<td>$2,961,000 (1)</td></tr>
<tr><td>Server Zakharova</td>
<td>$2,924,000 (3)</td></tr>
<tr><td>Karl Patterson</td>
<td>$2,890,000 (1)</td></tr>
<tr><td>Garth Charest</td>
<td>$2,848,000 (3)</td></tr>
<tr><td>Ron Clay</td>
<td>$2,758,000 (5)</td></tr>
<tr><td>Frieder Frohlich</td>
<td>$2,535,000 (3)</td></tr>
<tr><td>Rafael Dragun</td>
<td>$2,483,000 (4)</td></tr>
<tr><td>Pehr Ekholm</td>
<td>$2,413,000 (3)</td></tr>
<tr><td>Valentin Klimenko</td>
<td>$2,246,000 (2)</td></tr>
<tr><td>Brian Beaulieu</td>
<td>$2,229,000 (4)</td></tr>
<tr><td>Archie Bradley</td>
<td>$1,865,000 (1)</td></tr>
<tr><td>Ernest Tuma</td>
<td>$1,402,000 (2)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,560,667</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $48,844,667</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $41,196,667</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $23,511,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,560,667</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $48,844,667</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $41,196,667</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $23,511,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $56,560,667</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $48,844,667</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $41,196,667</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $23,511,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>David Terekhov</td>
<td>$400,000 (4)</td></tr>
<tr><td>Leevi Juntunen</td>
<td>$400,000 (3)</td></tr>
<tr><td>Marcus Mckenzie</td>
<td>$354,500 (1)</td></tr>
<tr><td>Ira Chambers</td>
<td>$327,200 (3)</td></tr>
<tr><td>Tomas Nikkanen</td>
<td>$293,100 (1)</td></tr>
<tr><td>Laurent St-Pierre</td>
<td>$262,070 (2)</td></tr>
<tr><td>Pedro Herrera</td>
<td>$247,586 (2)</td></tr>
<tr><td>Nicholas Strong</td>
<td>$244,300 (4)</td></tr>
<tr><td>Matteo Mettler</td>
<td>$210,300 (3)</td></tr>
<tr><td>Gene Baril</td>
<td>$204,300 (4)</td></tr>
<tr><td>Jean-Marc Penner</td>
<td>$193,900 (5)</td></tr>
<tr><td>Vince Berg</td>
<td>$193,500 (2)</td></tr>
<tr><td>Isaac Lowe</td>
<td>$191,800 (2)</td></tr>
<tr><td>Damir Melnik</td>
<td>$187,200 (5)</td></tr>
<tr><td>Kayrat Sviridov</td>
<td>$182,800 (3)</td></tr>
<tr><td>Hermann Rorvik</td>
<td>$182,300 (4)</td></tr>
<tr><td>Yan O'Connor</td>
<td>$181,600 (5)</td></tr>
<tr><td>Nadir Mamedov</td>
<td>$180,600 (5)</td></tr>
<tr><td>Tapio Kontio</td>
<td>$176,100 (1)</td></tr>
<tr><td>Rosaire Mckee</td>
<td>$175,700 (4)</td></tr>
<tr><td>Robert Zetterberg</td>
<td>$173,600 (4)</td></tr>
<tr><td>Harald Fluck</td>
<td>$161,600 (2)</td></tr>
<tr><td>Paul Wilkins</td>
<td>$159,800 (2)</td></tr>
<tr><td>Lance Miles</td>
<td>$159,000 (2)</td></tr>
<tr><td>Max Ekdahl</td>
<td>$154,400 (4)</td></tr>
<tr><td>Jimmie Lundborg</td>
<td>$151,400 (1)</td></tr>
<tr><td>Semyon Anisimova</td>
<td>$127,900 (3)</td></tr>
<tr><td>Matous Kos</td>
<td>$122,800 (4)</td></tr>
<tr><td>Olle Kruse</td>
<td>$122,200 (3)</td></tr>
<tr><td>Bill Mcneil</td>
<td>$115,200 (4)</td></tr>
<tr><td>Sam Ricard</td>
<td>$114,200 (4)</td></tr>
<tr><td>Jimmie Murphy</td>
<td>$109,500 (2)</td></tr>
<tr><td>Norman Hughes</td>
<td>$108,900 (5)</td></tr>
<tr><td>Thomas Westberg</td>
<td>$106,300 (4)</td></tr>
<tr><td>Hubert Savage</td>
<td>$99,700 (3)</td></tr>
<tr><td>Leon Herman</td>
<td>$98,600 (5)</td></tr>
<tr><td>Lauri Hyyrylainen</td>
<td>$83,600 (4)</td></tr>
<tr><td>Les Mann</td>
<td>$79,600 (3)</td></tr>
<tr><td>Philip Andrews</td>
<td>$77,200 (2)</td></tr>
<tr><td>Terrance Cooke</td>
<td>$67,600 (3)</td></tr>
<tr><td>Karri Turunen</td>
<td>$61,800 (4)</td></tr>
<tr><td>Serik Vasilyev</td>
<td>$59,500 (2)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,303,256</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,328,156</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,706,600</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,089,300</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $7,303,256</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,328,156</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,706,600</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,089,300</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TM8"><a id="Team8">Team 8</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team8">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team8">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team8');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team8" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,651 - 94.18%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,754 - 95.09%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,894 - 94.72%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,775 - 94.37%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 946 - 94.57%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,916 - 95.80%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 950 - 94.97%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,020 - 94.56%</td></tr>
<tr><td>Average Income per Game</td><td>$1,500,231</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,009,220</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,866 - 95.52%</td></tr>
<tr><td>Average Income per Game</td><td>$101,630</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,065,214</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$51,385,319</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,039,088</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$52,385,319</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,087,120</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$51,385,320</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$277,171</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$48,080</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$138,287,318</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$138,287,318</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Albert Vincent</td>
<td>$4,000,000 (3)</td></tr>
<tr><td>Leonard Mcmahon</td>
<td>$4,000,000 (1)</td></tr>
<tr><td>Eerik Sorsa</td>
<td>$3,946,000 (4)</td></tr>
<tr><td>Aaron Durocher</td>
<td>$3,724,902 (2)</td></tr>
<tr><td>Jose Hess</td>
<td>$3,278,000 (1)</td></tr>
<tr><td>Brandon Davis</td>
<td>$3,153,000 (3)</td></tr>
<tr><td>Thomas Ahlstrom</td>
<td>$2,818,000 (3)</td></tr>
<tr><td>Clarence Harper</td>
<td>$2,756,000 (1)</td></tr>
<tr><td>Andreyka Malysheva</td>
<td>$2,625,417 (3)</td></tr>
<tr><td>Razil Afanasyev</td>
<td>$2,463,000 (2)</td></tr>
<tr><td>Adrien Bolduc</td>
<td>$2,342,000 (2)</td></tr>
<tr><td>Muhammad Rice</td>
<td>$2,274,000 (3)</td></tr>
<tr><td>Joseph Holloway</td>
<td>$2,272,000 (4)</td></tr>
<tr><td>Tomas Zikmundova</td>
<td>$2,177,000 (2)</td></tr>
<tr><td>Adrian Godbout</td>
<td>$1,709,000 (4)</td></tr>
<tr><td>Jiri Filip</td>
<td>$1,680,000 (3)</td></tr>
<tr><td>Mitchell Hassan</td>
<td>$1,598,000 (5)</td></tr>
<tr><td>Garry Nelson</td>
<td>$1,565,000 (1)</td></tr>
<tr><td>Milton Yates</td>
<td>$1,515,000 (2)</td></tr>
<tr><td>Stan Brisebois</td>
<td>$1,489,000 (3)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $51,385,319</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $39,786,319</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $27,564,417</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $9,525,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $51,385,319</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $39,786,319</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $27,564,417</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $9,525,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $51,385,319</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $39,786,319</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $27,564,417</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $9,525,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Maksim Belyy</td>
<td>$400,000 (2)</td></tr>
<tr><td>Yves Pellerin</td>
<td>$334,763 (1)</td></tr>
<tr><td>Karl-Erik Sand</td>
<td>$323,900 (2)</td></tr>
<tr><td>Gavin Cole</td>
<td>$321,428 (2)</td></tr>
<tr><td>Claes Abrahamsson</td>
<td>$308,600 (2)</td></tr>
<tr><td>Robin Grundmann</td>
<td>$308,000 (1)</td></tr>
<tr><td>Ahmet Moller</td>
<td>$298,996 (2)</td></tr>
<tr><td>Mario Hosseini</td>
<td>$298,100 (2)</td></tr>
<tr><td>Stano Galko</td>
<td>$272,600 (1)</td></tr>
<tr><td>Adrien Williamson</td>
<td>$250,200 (4)</td></tr>
<tr><td>Clive Armitage</td>
<td>$241,600 (3)</td></tr>
<tr><td>Jean-Marc Mcdonald</td>
<td>$231,300 (3)</td></tr>
<tr><td>Andy Barker</td>
<td>$223,700 (1)</td></tr>
<tr><td>Bair Ermolenko</td>
<td>$221,100 (3)</td></tr>
<tr><td>Jesus Waller</td>
<td>$220,300 (1)</td></tr>
<tr><td>Anssi Mikkola</td>
<td>$220,000 (2)</td></tr>
<tr><td>Jason Paquette</td>
<td>$211,100 (2)</td></tr>
<tr><td>Olof Dahlin</td>
<td>$198,300 (4)</td></tr>
<tr><td>Ben Roberge</td>
<td>$197,300 (5)</td></tr>
<tr><td>Clarence Power</td>
<td>$189,000 (2)</td></tr>
<tr><td>Thomas Tuomainen</td>
<td>$188,800 (2)</td></tr>
<tr><td>Barry Ferguson</td>
<td>$180,800 (1)</td></tr>
<tr><td>Pierre-Olivier Larcher</td>
<td>$178,300 (2)</td></tr>
<tr><td>Ernest Caron</td>
<td>$174,500 (2)</td></tr>
<tr><td>Siegmar Eichler</td>
<td>$172,500 (1)</td></tr>
<tr><td>Philip Shvetsov</td>
<td>$155,800 (2)</td></tr>
<tr><td>Kennet Lovgren</td>
<td>$145,300 (2)</td></tr>
<tr><td>Billy Stark</td>
<td>$138,700 (2)</td></tr>
<tr><td>Dirk Jahnke</td>
<td>$134,900 (4)</td></tr>
<tr><td>Elling Enoksen</td>
<td>$129,400 (2)</td></tr>
<tr><td>Wallace Boyle</td>
<td>$128,500 (3)</td></tr>
<tr><td>Aarne Suvanto</td>
<td>$126,800 (1)</td></tr>
<tr><td>James Kim</td>
<td>$124,700 (4)</td></tr>
<tr><td>Jean-Philippe Brunel</td>
<td>$120,400 (2)</td></tr>
<tr><td>Robert Sundqvist</td>
<td>$119,900 (3)</td></tr>
<tr><td>Vern Perry</td>
<td>$109,600 (3)</td></tr>
<tr><td>Marks Vevere</td>
<td>$94,100 (3)</td></tr>
<tr><td>Greg Khan</td>
<td>$91,800 (5)</td></tr>
<tr><td>Ivan Jiang</td>
<td>$79,900 (3)</td></tr>
<tr><td>Grzegorz Kjellsson</td>
<td>$69,900 (3)</td></tr>
<tr><td>Alfonso Fuentes</td>
<td>$60,100 (4)</td></tr>
<tr><td>Jerry Melanson</td>
<td>$44,100 (3)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,039,086</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,199,624</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $2,397,300</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $1,057,300</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,039,086</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,199,624</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $2,397,300</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $1,057,300</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TM9"><a id="Team9">Team 9</a></h1>
<div class="STHSTeamLink">
[ <a href="LTLHL-TeamFinance.php#Team9">Team Finance</a> ]
[ <a href="LTLHL-TeamRecords.php#Team9">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Team9');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Team9" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200"></td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,722 - 95.36%</td></tr>
<tr><td>Level 2: </td><td>5000 - $60 - 4,803 - 96.06%</td></tr>
<tr><td>Level 3: </td><td>2000 - $35 - 1,891 - 94.54%</td></tr>
<tr><td>Level 4: </td><td>4000 - $25 - 3,742 - 93.54%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 944 - 94.43%</td></tr>
<tr><td>Total Capacity :</td><td>18000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,892 - 94.60%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $15 - 951 - 95.12%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,101 - 95.01%</td></tr>
<tr><td>Average Income per Game</td><td>$1,511,147</td></tr>
<tr><td>Year to Date Revenue</td><td>$60,445,877</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,843 - 94.77%</td></tr>
<tr><td>Average Income per Game</td><td>$100,608</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,024,313</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$61,573,532</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$8,233,680</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$62,573,553</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$9,282,735</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$61,573,554</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$331,077</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$49,115</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$112,025,911</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$112,025,911</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Doug Erickson</td>
<td>$4,000,000 (4)</td></tr>
<tr><td>Hans-Otto Baumgart</td>
<td>$4,000,000 (2)</td></tr>
<tr><td>Idris Kostenko</td>
<td>$4,000,000 (5)</td></tr>
<tr><td>Rui Aeberhard</td>
<td>$4,000,000 (1)</td></tr>
<tr><td>Joakim Sundell</td>
<td>$3,804,363 (3)</td></tr>
<tr><td>Stephane Zuger</td>
<td>$3,804,000 (5)</td></tr>
<tr><td>Lars-Olov Sonesson</td>
<td>$3,716,000 (3)</td></tr>
<tr><td>Gregory Deschamps</td>
<td>$3,366,169 (2)</td></tr>
<tr><td>Tommy Sullivan</td>
<td>$3,323,000 (4)</td></tr>
<tr><td>Ahmed Ouimet</td>
<td>$3,312,000 (1)</td></tr>
<tr><td>Andrew Duffy</td>
<td>$2,887,000 (3)</td></tr>
<tr><td>Vern Bouffard</td>
<td>$2,730,000 (1)</td></tr>
<tr><td>Per Siltala</td>
<td>$2,695,000 (2)</td></tr>
<tr><td>Cliff Belisle</td>
<td>$2,588,000 (2)</td></tr>
<tr><td>Mark Lundquist</td>
<td>$2,512,000 (2)</td></tr>
<tr><td>Marco Stephenson</td>
<td>$2,481,000 (4)</td></tr>
<tr><td>Cecil Colon</td>
<td>$2,461,000 (2)</td></tr>
<tr><td>Darcy Allard</td>
<td>$2,294,000 (1)</td></tr>
<tr><td>Wesley Penner</td>
<td>$2,109,000 (2)</td></tr>
<tr><td>Juha Osterlund</td>
<td>$1,491,000 (2)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $61,573,532</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $49,237,532</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $28,015,363</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $17,608,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $61,573,532</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $49,237,532</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $28,015,363</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $17,608,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $61,573,532</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $49,237,532</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $28,015,363</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $17,608,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Neil Charette</td>
<td>$380,934 (4)</td></tr>
<tr><td>Al Zhang</td>
<td>$329,200 (1)</td></tr>
<tr><td>Harold Wang</td>
<td>$310,802 (4)</td></tr>
<tr><td>Jay Fischer</td>
<td>$297,200 (1)</td></tr>
<tr><td>Devon Cook</td>
<td>$275,500 (4)</td></tr>
<tr><td>Ramzan Kolesnik</td>
<td>$271,400 (4)</td></tr>
<tr><td>Aarne Kauppinen</td>
<td>$266,900 (2)</td></tr>
<tr><td>Dave Cherry</td>
<td>$262,725 (3)</td></tr>
<tr><td>Evgenij Konovalova</td>
<td>$249,500 (5)</td></tr>
<tr><td>Mehdi Kjellstrom</td>
<td>$234,200 (5)</td></tr>
<tr><td>Brian Navarro</td>
<td>$231,500 (1)</td></tr>
<tr><td>Tim Davidson</td>
<td>$225,600 (4)</td></tr>
<tr><td>Garnet Becker</td>
<td>$223,800 (1)</td></tr>
<tr><td>Niclas Akerlund</td>
<td>$221,200 (2)</td></tr>
<tr><td>Georgy Safonov</td>
<td>$217,720 (2)</td></tr>
<tr><td>Jukka Vepsalainen</td>
<td>$212,700 (3)</td></tr>
<tr><td>Manuel Lin</td>
<td>$210,300 (2)</td></tr>
<tr><td>Virgil Vasquez</td>
<td>$207,900 (1)</td></tr>
<tr><td>Colin Lopez</td>
<td>$202,800 (4)</td></tr>
<tr><td>Russ Stephens</td>
<td>$193,000 (2)</td></tr>
<tr><td>Akseli Hietamaki</td>
<td>$192,700 (1)</td></tr>
<tr><td>Onni Huusko</td>
<td>$191,200 (4)</td></tr>
<tr><td>Bobby Kumar</td>
<td>$188,800 (2)</td></tr>
<tr><td>Christopher Tremblay</td>
<td>$187,500 (4)</td></tr>
<tr><td>Ted Trudeau</td>
<td>$185,200 (2)</td></tr>
<tr><td>Stefan Melanson</td>
<td>$183,400 (2)</td></tr>
<tr><td>Max Wall</td>
<td>$175,100 (5)</td></tr>
<tr><td>Franklin Bolton</td>
<td>$174,100 (3)</td></tr>
<tr><td>Vincent Radova</td>
<td>$172,600 (4)</td></tr>
<tr><td>Mel Lim</td>
<td>$172,600 (4)</td></tr>
<tr><td>Christof Brun</td>
<td>$151,500 (4)</td></tr>
<tr><td>Isaac Short</td>
<td>$149,900 (1)</td></tr>
<tr><td>Ralf Appelgren</td>
<td>$148,100 (4)</td></tr>
<tr><td>Gary Chiu</td>
<td>$141,900 (4)</td></tr>
<tr><td>Hans-Werner Wachter</td>
<td>$128,600 (5)</td></tr>
<tr><td>Moritz Heck</td>
<td>$126,300 (2)</td></tr>
<tr><td>Aydar Shcherbakov</td>
<td>$123,900 (2)</td></tr>
<tr><td>Mitchell Russo</td>
<td>$109,400 (3)</td></tr>
<tr><td>Mikko Luoma</td>
<td>$97,900 (3)</td></tr>
<tr><td>Jamie Hewitt</td>
<td>$79,100 (4)</td></tr>
<tr><td>Olav Aarseth</td>
<td>$64,800 (3)</td></tr>
<tr><td>Emil Krasnov</td>
<td>$64,200 (3)</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>42</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,233,680</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,601,480</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,684,760</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,698,936</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 3 :</b> $8,233,680</td></tr>
<tr><td colspan="2"><b>Year 4 :</b> $6,601,480</td></tr>
<tr><td colspan="2"><b>Year 5 :</b> $4,684,760</td></tr>
<tr><td colspan="2"><b>Year 6 :</b> $3,698,936</td></tr>
</table>
</td></tr></table>
</div>
<?php include "Footer.php";?>

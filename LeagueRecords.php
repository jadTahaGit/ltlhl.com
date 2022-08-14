<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>LTLHL - League Records</title>
<script src="LTLHL-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Kris Nissen - STHS - Version : 3.3.3.3 - LTLHL-STHS.bin - LTLHL-STHSCareerStat.bin"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<h1 class="STHSLeagueRecord_TeamRecords">Team Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="6"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 18</td><td>2</td><td>378</td><td>10</td><td></td></tr>
<tr><td>2</td><td>Team 13</td><td>3</td><td>74</td><td>9</td><td><a href="LTLHL-PLF-74.php">Game Direct Link</a></td></tr><tr><td>3</td><td>Team 18</td><td>1</td><td>551</td><td>8</td><td></td></tr>
<tr><td>4</td><td>Team 18</td><td>2</td><td>608</td><td>8</td><td></td></tr>
<tr><td>5</td><td>Team 18</td><td>2</td><td>851</td><td>8</td><td></td></tr>
<tr><td>6</td><td>Team 2</td><td>3</td><td>128</td><td>8</td><td><a href="LTLHL-PLF-128.php">Game Direct Link</a></td></tr><tr><td>7</td><td>Team 2</td><td>3</td><td>152</td><td>8</td><td><a href="LTLHL-PLF-152.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Team 12</td><td>3</td><td>378</td><td>8</td><td><a href="LTLHL-PLF-378.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Team 18</td><td>3</td><td>544</td><td>8</td><td><a href="LTLHL-PLF-544.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Team 18</td><td>3</td><td>843</td><td>8</td><td><a href="LTLHL-PLF-843.php">Game Direct Link</a></td></tr>
<tr><td colspan="6"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 18</td><td>3</td><td>295</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 12</td><td>3</td><td>290</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 18</td><td>2</td><td>275</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 12</td><td>2</td><td>268</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 10</td><td>3</td><td>263</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 2</td><td>2</td><td>258</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 17</td><td>2</td><td>250</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 10</td><td>1</td><td>248</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 2</td><td>3</td><td>247</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 17</td><td>1</td><td>244</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 22</td><td>3</td><td>152</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 21</td><td>3</td><td>154</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 9</td><td>2</td><td>160</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 22</td><td>2</td><td>162</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 16</td><td>3</td><td>162</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 4</td><td>2</td><td>164</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 21</td><td>2</td><td>165</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 20</td><td>1</td><td>166</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 22</td><td>1</td><td>166</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 11</td><td>1</td><td>168</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 20</td><td>3</td><td>263</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 20</td><td>2</td><td>255</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 19</td><td>2</td><td>251</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 7</td><td>3</td><td>247</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 20</td><td>1</td><td>245</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 19</td><td>3</td><td>245</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 22</td><td>3</td><td>242</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 9</td><td>3</td><td>229</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 9</td><td>2</td><td>228</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 5</td><td>1</td><td>225</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 11</td><td>1</td><td>162</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 24</td><td>3</td><td>164</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 2</td><td>1</td><td>170</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 2</td><td>2</td><td>174</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 3</td><td>1</td><td>175</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 1</td><td>2</td><td>179</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 19</td><td>1</td><td>181</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 3</td><td>2</td><td>181</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 15</td><td>2</td><td>181</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 15</td><td>1</td><td>182</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 18</td><td>2</td><td>378</td><td>17</td><td></td></tr>
<tr><td>2</td><td>Team 13</td><td>3</td><td>74</td><td>17</td><td><a href="LTLHL-PLF-74.php">Game Direct Link</a></td></tr><tr><td>3</td><td>Team 18</td><td>2</td><td>608</td><td>16</td><td></td></tr>
<tr><td>4</td><td>Team 12</td><td>3</td><td>378</td><td>16</td><td><a href="LTLHL-PLF-378.php">Game Direct Link</a></td></tr><tr><td>5</td><td>Team 18</td><td>2</td><td>851</td><td>15</td><td></td></tr>
<tr><td>6</td><td>Team 18</td><td>1</td><td>551</td><td>14</td><td></td></tr>
<tr><td>7</td><td>Team 12</td><td>2</td><td>70</td><td>14</td><td></td></tr>
<tr><td>8</td><td>Team 18</td><td>2</td><td>301</td><td>14</td><td></td></tr>
<tr><td>9</td><td>Team 24</td><td>2</td><td>905</td><td>14</td><td></td></tr>
<tr><td>10</td><td>Team 2</td><td>3</td><td>128</td><td>14</td><td><a href="LTLHL-PLF-128.php">Game Direct Link</a></td></tr>
<tr><td colspan="6"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 18</td><td>3</td><td>524</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 12</td><td>3</td><td>508</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 18</td><td>2</td><td>488</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 10</td><td>3</td><td>487</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 12</td><td>2</td><td>480</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 2</td><td>2</td><td>459</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 10</td><td>1</td><td>444</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 17</td><td>1</td><td>443</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 2</td><td>3</td><td>443</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 17</td><td>2</td><td>435</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 21</td><td>3</td><td>257</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 22</td><td>3</td><td>272</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 22</td><td>1</td><td>279</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 9</td><td>2</td><td>282</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 21</td><td>2</td><td>284</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 22</td><td>2</td><td>284</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 16</td><td>3</td><td>286</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 20</td><td>1</td><td>292</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 4</td><td>2</td><td>292</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 11</td><td>1</td><td>294</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 18</td><td>2</td><td>378</td><td>27</td><td></td></tr>
<tr><td>2</td><td>Team 13</td><td>3</td><td>74</td><td>26</td><td><a href="LTLHL-PLF-74.php">Game Direct Link</a></td></tr><tr><td>3</td><td>Team 18</td><td>2</td><td>608</td><td>24</td><td></td></tr>
<tr><td>4</td><td>Team 12</td><td>3</td><td>378</td><td>24</td><td><a href="LTLHL-PLF-378.php">Game Direct Link</a></td></tr><tr><td>5</td><td>Team 18</td><td>2</td><td>851</td><td>23</td><td></td></tr>
<tr><td>6</td><td>Team 18</td><td>1</td><td>551</td><td>22</td><td></td></tr>
<tr><td>7</td><td>Team 2</td><td>3</td><td>128</td><td>22</td><td><a href="LTLHL-PLF-128.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Team 2</td><td>3</td><td>152</td><td>22</td><td><a href="LTLHL-PLF-152.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Team 18</td><td>3</td><td>843</td><td>22</td><td><a href="LTLHL-PLF-843.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Team 12</td><td>2</td><td>70</td><td>21</td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 18</td><td>3</td><td>819</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 12</td><td>3</td><td>798</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 18</td><td>2</td><td>763</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 10</td><td>3</td><td>750</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 12</td><td>2</td><td>748</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 2</td><td>2</td><td>717</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 10</td><td>1</td><td>692</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 2</td><td>3</td><td>690</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 17</td><td>1</td><td>687</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 17</td><td>2</td><td>685</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Game Points  in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 21</td><td>3</td><td>411</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 22</td><td>3</td><td>424</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 9</td><td>2</td><td>442</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 22</td><td>1</td><td>445</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 22</td><td>2</td><td>446</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 16</td><td>3</td><td>448</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 21</td><td>2</td><td>449</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 4</td><td>2</td><td>456</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 20</td><td>1</td><td>458</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 11</td><td>1</td><td>462</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 14</td><td>1</td><td>52</td><td>60</td><td></td></tr>
<tr><td>2</td><td>Team 2</td><td>1</td><td>819</td><td>60</td><td></td></tr>
<tr><td>3</td><td>Team 12</td><td>3</td><td>47</td><td>60</td><td><a href="LTLHL-PLF-47.php">Game Direct Link</a></td></tr><tr><td>4</td><td>Team 17</td><td>2</td><td>372</td><td>54</td><td></td></tr>
<tr><td>5</td><td>Team 2</td><td>2</td><td>532</td><td>54</td><td></td></tr>
<tr><td>6</td><td>Team 18</td><td>2</td><td>751</td><td>54</td><td></td></tr>
<tr><td>7</td><td>Team 12</td><td>3</td><td>446</td><td>54</td><td><a href="LTLHL-PLF-446.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Team 24</td><td>2</td><td>66</td><td>53</td><td></td></tr>
<tr><td>9</td><td>Team 18</td><td>2</td><td>562</td><td>53</td><td></td></tr>
<tr><td>10</td><td>Team 3</td><td>2</td><td>834</td><td>53</td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 18</td><td>2</td><td>2632</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 12</td><td>3</td><td>2614</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 2</td><td>2</td><td>2588</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 18</td><td>3</td><td>2567</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 2</td><td>1</td><td>2555</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 2</td><td>3</td><td>2550</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 12</td><td>2</td><td>2549</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 18</td><td>1</td><td>2536</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 10</td><td>3</td><td>2446</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 10</td><td>1</td><td>2433</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 21</td><td>3</td><td>1705</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 21</td><td>1</td><td>1715</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 22</td><td>1</td><td>1724</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 9</td><td>2</td><td>1731</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 11</td><td>1</td><td>1733</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 22</td><td>2</td><td>1765</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 4</td><td>2</td><td>1766</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 22</td><td>3</td><td>1799</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 21</td><td>2</td><td>1800</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 16</td><td>3</td><td>1829</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 7</td><td>3</td><td>333</td><td>23</td><td><a href="LTLHL-PLF-333.php">Game Direct Link</a></td></tr><tr><td>2</td><td>Team 9</td><td>3</td><td>3</td><td>22</td><td><a href="LTLHL-PLF-3.php">Game Direct Link</a></td></tr><tr><td>3</td><td>Team 8</td><td>1</td><td>536</td><td>21</td><td></td></tr>
<tr><td>4</td><td>Team 23</td><td>3</td><td>525</td><td>21</td><td><a href="LTLHL-PLF-525.php">Game Direct Link</a></td></tr><tr><td>5</td><td>Team 12</td><td>1</td><td>396</td><td>20</td><td></td></tr>
<tr><td>6</td><td>Team 14</td><td>1</td><td>681</td><td>20</td><td></td></tr>
<tr><td>7</td><td>Team 7</td><td>2</td><td>720</td><td>20</td><td></td></tr>
<tr><td>8</td><td>Team 12</td><td>3</td><td>663</td><td>20</td><td><a href="LTLHL-PLF-663.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Team 13</td><td>1</td><td>14</td><td>19</td><td></td></tr>
<tr><td>10</td><td>Team 6</td><td>1</td><td>294</td><td>19</td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 20</td><td>3</td><td>832</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 12</td><td>3</td><td>718</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 20</td><td>2</td><td>700</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 7</td><td>2</td><td>699</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 20</td><td>1</td><td>692</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 12</td><td>1</td><td>690</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 22</td><td>3</td><td>690</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 23</td><td>2</td><td>662</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 7</td><td>3</td><td>662</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 22</td><td>1</td><td>661</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 3</td><td>2</td><td>459</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 10</td><td>1</td><td>486</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 3</td><td>1</td><td>519</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 3</td><td>3</td><td>522</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 6</td><td>2</td><td>523</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 15</td><td>1</td><td>534</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 10</td><td>2</td><td>540</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 4</td><td>1</td><td>543</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 21</td><td>1</td><td>543</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 16</td><td>2</td><td>543</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 20</td><td>3</td><td>2615</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 20</td><td>2</td><td>2513</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 7</td><td>3</td><td>2347</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 12</td><td>1</td><td>2346</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 22</td><td>3</td><td>2329</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 20</td><td>1</td><td>2314</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 12</td><td>2</td><td>2298</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 7</td><td>2</td><td>2291</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 19</td><td>3</td><td>2284</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 5</td><td>3</td><td>2262</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 3</td><td>2</td><td>1683</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 3</td><td>3</td><td>1711</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 3</td><td>1</td><td>1769</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 15</td><td>3</td><td>1844</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 10</td><td>1</td><td>1853</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 15</td><td>1</td><td>1876</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 15</td><td>2</td><td>1881</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 11</td><td>1</td><td>1886</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 21</td><td>1</td><td>1898</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 10</td><td>3</td><td>1899</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 6</td><td>2</td><td>841</td><td>47</td><td></td></tr>
<tr><td>2</td><td>Team 15</td><td>2</td><td>321</td><td>43</td><td></td></tr>
<tr><td>3</td><td>Team 12</td><td>2</td><td>60</td><td>40</td><td></td></tr>
<tr><td>4</td><td>Team 1</td><td>2</td><td>620</td><td>39</td><td></td></tr>
<tr><td>5</td><td>Team 19</td><td>3</td><td>891</td><td>39</td><td><a href="LTLHL-PLF-891.php">Game Direct Link</a></td></tr><tr><td>6</td><td>Team 9</td><td>2</td><td>727</td><td>37</td><td></td></tr>
<tr><td>7</td><td>Team 21</td><td>2</td><td>913</td><td>37</td><td></td></tr>
<tr><td>8</td><td>Team 21</td><td>3</td><td>361</td><td>37</td><td><a href="LTLHL-PLF-361.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Team 23</td><td>3</td><td>779</td><td>37</td><td><a href="LTLHL-PLF-779.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Team 19</td><td>2</td><td>791</td><td>35</td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 12</td><td>2</td><td>925</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 17</td><td>2</td><td>820</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 12</td><td>1</td><td>808</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 17</td><td>3</td><td>788</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 13</td><td>2</td><td>781</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 6</td><td>2</td><td>780</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 19</td><td>3</td><td>780</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 12</td><td>3</td><td>777</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 13</td><td>1</td><td>774</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 6</td><td>1</td><td>766</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 1</td><td>1</td><td>469</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 1</td><td>3</td><td>471</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 18</td><td>2</td><td>493</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 3</td><td>3</td><td>500</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 10</td><td>3</td><td>504</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 10</td><td>2</td><td>522</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 3</td><td>2</td><td>529</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 8</td><td>2</td><td>530</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 10</td><td>1</td><td>534</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 1</td><td>2</td><td>539</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 18</td><td>2</td><td>491</td><td>48</td><td></td></tr>
<tr><td>2</td><td>Team 24</td><td>2</td><td>400</td><td>47</td><td></td></tr>
<tr><td>3</td><td>Team 5</td><td>1</td><td>501</td><td>44</td><td></td></tr>
<tr><td>4</td><td>Team 12</td><td>3</td><td>785</td><td>44</td><td><a href="LTLHL-PLF-785.php">Game Direct Link</a></td></tr><tr><td>5</td><td>Team 4</td><td>1</td><td>226</td><td>43</td><td></td></tr>
<tr><td>6</td><td>Team 13</td><td>2</td><td>856</td><td>42</td><td></td></tr>
<tr><td>7</td><td>Team 4</td><td>3</td><td>537</td><td>42</td><td><a href="LTLHL-PLF-537.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Team 15</td><td>1</td><td>17</td><td>41</td><td></td></tr>
<tr><td>9</td><td>Team 20</td><td>1</td><td>106</td><td>41</td><td></td></tr>
<tr><td>10</td><td>Team 8</td><td>1</td><td>342</td><td>41</td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 12</td><td>3</td><td>2114</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 12</td><td>1</td><td>2096</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 12</td><td>2</td><td>2091</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 13</td><td>2</td><td>2080</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 24</td><td>2</td><td>2050</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 6</td><td>3</td><td>2028</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 19</td><td>2</td><td>2013</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 17</td><td>2</td><td>2009</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 6</td><td>1</td><td>2007</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 24</td><td>1</td><td>2007</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 1</td><td>3</td><td>1588</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 1</td><td>2</td><td>1624</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 21</td><td>3</td><td>1650</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 16</td><td>2</td><td>1663</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 1</td><td>1</td><td>1708</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 9</td><td>3</td><td>1709</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 16</td><td>3</td><td>1713</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 3</td><td>2</td><td>1726</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 3</td><td>3</td><td>1733</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 14</td><td>2</td><td>1737</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 16</td><td>2</td><td>7</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 13</td><td>1</td><td>4</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 19</td><td>2</td><td>4</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 20</td><td>2</td><td>4</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 5</td><td>1</td><td>3</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 11</td><td>1</td><td>3</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 12</td><td>1</td><td>3</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 23</td><td>1</td><td>3</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 4</td><td>2</td><td>3</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 5</td><td>2</td><td>3</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 18</td><td>2</td><td>23.10%</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 2</td><td>2</td><td>22.80%</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 5</td><td>3</td><td>22.60%</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 23</td><td>2</td><td>21.40%</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 24</td><td>3</td><td>21.40%</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 22</td><td>1</td><td>21.10%</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 17</td><td>1</td><td>20.80%</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 2</td><td>1</td><td>20.70%</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 17</td><td>2</td><td>20.70%</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 10</td><td>1</td><td>20.50%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 2</td><td>1</td><td>88.60%</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 1</td><td>2</td><td>88.00%</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 15</td><td>2</td><td>87.80%</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 24</td><td>3</td><td>87.80%</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 17</td><td>2</td><td>87.60%</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 12</td><td>2</td><td>87.40%</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 2</td><td>2</td><td>86.20%</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 19</td><td>1</td><td>86.10%</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 11</td><td>1</td><td>86.00%</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 17</td><td>1</td><td>85.80%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 11</td><td>1</td><td>10.20%</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 4</td><td>2</td><td>10.50%</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 8</td><td>2</td><td>10.70%</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 8</td><td>3</td><td>10.90%</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 9</td><td>2</td><td>11.70%</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 14</td><td>1</td><td>12.00%</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 4</td><td>1</td><td>12.70%</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 9</td><td>3</td><td>12.90%</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 21</td><td>3</td><td>13.10%</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 20</td><td>1</td><td>13.30%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 9</td><td>2</td><td>76.50%</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 18</td><td>2</td><td>76.60%</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 5</td><td>2</td><td>76.90%</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 7</td><td>3</td><td>77.70%</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 5</td><td>1</td><td>78.20%</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 5</td><td>3</td><td>80.10%</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 10</td><td>3</td><td>80.30%</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 9</td><td>1</td><td>80.60%</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 12</td><td>1</td><td>80.60%</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 14</td><td>2</td><td>80.60%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 2</td><td>2</td><td>55</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 18</td><td>3</td><td>54</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 2</td><td>1</td><td>53</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 2</td><td>3</td><td>53</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 24</td><td>2</td><td>52</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 17</td><td>3</td><td>52</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 10</td><td>1</td><td>51</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 24</td><td>1</td><td>51</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 1</td><td>2</td><td>51</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 12</td><td>2</td><td>51</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 20</td><td>1</td><td>20</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 20</td><td>2</td><td>24</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 19</td><td>2</td><td>25</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 22</td><td>3</td><td>25</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 20</td><td>3</td><td>27</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 22</td><td>1</td><td>29</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 5</td><td>2</td><td>29</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 22</td><td>2</td><td>30</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 21</td><td>3</td><td>30</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 9</td><td>2</td><td>31</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 20</td><td>1</td><td>60</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 20</td><td>2</td><td>56</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 19</td><td>2</td><td>55</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 22</td><td>3</td><td>55</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 20</td><td>3</td><td>53</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 22</td><td>1</td><td>51</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 5</td><td>2</td><td>51</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 22</td><td>2</td><td>50</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 21</td><td>3</td><td>50</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 9</td><td>2</td><td>49</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 2</td><td>2</td><td>25</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 18</td><td>3</td><td>26</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 2</td><td>1</td><td>27</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 2</td><td>3</td><td>27</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 24</td><td>2</td><td>28</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 17</td><td>3</td><td>28</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 10</td><td>1</td><td>29</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 24</td><td>1</td><td>29</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 1</td><td>2</td><td>29</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 12</td><td>2</td><td>29</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 18</td><td>3</td><td>116</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 2</td><td>2</td><td>115</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 2</td><td>3</td><td>114</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 1</td><td>2</td><td>112</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 2</td><td>1</td><td>110</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 10</td><td>1</td><td>109</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 24</td><td>1</td><td>109</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 17</td><td>1</td><td>108</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 12</td><td>2</td><td>108</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 17</td><td>2</td><td>108</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 20</td><td>1</td><td>50</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 20</td><td>2</td><td>58</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 20</td><td>3</td><td>58</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 19</td><td>2</td><td>59</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 22</td><td>3</td><td>60</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 21</td><td>3</td><td>65</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 9</td><td>2</td><td>66</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 22</td><td>2</td><td>68</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 16</td><td>3</td><td>68</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 5</td><td>2</td><td>69</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 2</td><td>1</td><td>28</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 2</td><td>2</td><td>25</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 24</td><td>2</td><td>25</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 12</td><td>3</td><td>25</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 1</td><td>2</td><td>24</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 2</td><td>3</td><td>24</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 10</td><td>1</td><td>23</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 24</td><td>1</td><td>23</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 17</td><td>3</td><td>23</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 3</td><td>1</td><td>22</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Team 18</td><td>2</td><td>27</td><td></td><td></td></tr>
<tr><td>2</td><td>Team 2</td><td>2</td><td>26</td><td></td><td></td></tr>
<tr><td>3</td><td>Team 17</td><td>1</td><td>25</td><td></td><td></td></tr>
<tr><td>4</td><td>Team 12</td><td>2</td><td>24</td><td></td><td></td></tr>
<tr><td>5</td><td>Team 10</td><td>3</td><td>23</td><td></td><td></td></tr>
<tr><td>6</td><td>Team 17</td><td>3</td><td>23</td><td></td><td></td></tr>
<tr><td>7</td><td>Team 3</td><td>1</td><td>22</td><td></td><td></td></tr>
<tr><td>8</td><td>Team 15</td><td>2</td><td>22</td><td></td><td></td></tr>
<tr><td>9</td><td>Team 2</td><td>3</td><td>22</td><td></td><td></td></tr>
<tr><td>10</td><td>Team 1</td><td>1</td><td>21</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_PlayersRecords">Players Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Ice Time In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Ahmed Ouimet</td><td>Team 9</td><td>1</td><td>556</td><td>31:46</td><td></td></tr>
<tr><td>2</td><td>Gus Richard</td><td>Team 6</td><td>3</td><td>748</td><td>29:52</td><td><a href="LTLHL-PLF-748.php">Game Direct Link</a></td></tr><tr><td>3</td><td>Lee Hu</td><td>Team 18</td><td>2</td><td>654</td><td>29:46</td><td></td></tr>
<tr><td>4</td><td>Anthony Duke</td><td>Team 16</td><td>2</td><td>214</td><td>29:43</td><td></td></tr>
<tr><td>5</td><td>Pasi Piippo</td><td>Team 14</td><td>2</td><td>357</td><td>29:36</td><td></td></tr>
<tr><td>6</td><td>Gene Galvan</td><td>Team 6</td><td>1</td><td>453</td><td>29:31</td><td></td></tr>
<tr><td>7</td><td>Gene Galvan</td><td>Team 6</td><td>2</td><td>42</td><td>29:25</td><td></td></tr>
<tr><td>8</td><td>Gus Richard</td><td>Team 6</td><td>3</td><td>539</td><td>29:22</td><td><a href="LTLHL-PLF-539.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Gene Galvan</td><td>Team 6</td><td>1</td><td>664</td><td>29:12</td><td></td></tr>
<tr><td>10</td><td>Albert Burda</td><td>Team 10</td><td>2</td><td>232</td><td>29:12</td><td></td></tr>

<tr><td colspan="7"><b>Most Ice Time In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Pasi Piippo</td><td>Team 14</td><td>3</td><td>2084</td><td></td><td></td></tr>
<tr><td>2</td><td>Gene Galvan</td><td>Team 6</td><td>1</td><td>2083</td><td></td><td></td></tr>
<tr><td>3</td><td>Gus Richard</td><td>Team 6</td><td>3</td><td>2074</td><td></td><td></td></tr>
<tr><td>4</td><td>Herb Macmillan</td><td>Team 17</td><td>2</td><td>2069</td><td></td><td></td></tr>
<tr><td>5</td><td>Herb Macmillan</td><td>Team 17</td><td>3</td><td>2060</td><td></td><td></td></tr>
<tr><td>6</td><td>Pasi Piippo</td><td>Team 14</td><td>2</td><td>2059</td><td></td><td></td></tr>
<tr><td>7</td><td>Gene Galvan</td><td>Team 6</td><td>2</td><td>2057</td><td></td><td></td></tr>
<tr><td>8</td><td>Gene Galvan</td><td>Team 6</td><td>3</td><td>2052</td><td></td><td></td></tr>
<tr><td>9</td><td>Bruce Gratton</td><td>Team 16</td><td>3</td><td>2051</td><td></td><td></td></tr>
<tr><td>10</td><td>Bruce Gratton</td><td>Team 16</td><td>2</td><td>2049</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Goals In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Odd Ost</td><td>Team 22</td><td>1</td><td>868</td><td>4</td><td></td></tr>
<tr><td>2</td><td>Andy Henry</td><td>Team 18</td><td>2</td><td>378</td><td>4</td><td></td></tr>
<tr><td>3</td><td>Jorge Day</td><td>Team 7</td><td>2</td><td>614</td><td>4</td><td></td></tr>
<tr><td>4</td><td>Bert Archambault</td><td>Team 24</td><td>2</td><td>765</td><td>4</td><td></td></tr>
<tr><td>5</td><td>Jason Trujillo</td><td>Team 18</td><td>2</td><td>851</td><td>4</td><td></td></tr>
<tr><td>6</td><td>Gilles Winter</td><td>Team 18</td><td>2</td><td>873</td><td>4</td><td></td></tr>
<tr><td>7</td><td>Darryl Avery</td><td>Team 13</td><td>3</td><td>74</td><td>4</td><td><a href="LTLHL-PLF-74.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Billy Dionne</td><td>Team 7</td><td>3</td><td>683</td><td>4</td><td><a href="LTLHL-PLF-683.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Jerry Mueller</td><td>Team 12</td><td>3</td><td>843</td><td>4</td><td><a href="LTLHL-PLF-843.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Albert Vincent</td><td>Team 8</td><td>3</td><td>854</td><td>4</td><td><a href="LTLHL-PLF-854.php">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Goals In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jason Trujillo</td><td>Team 18</td><td>2</td><td>58</td><td></td><td></td></tr>
<tr><td>2</td><td>Donald Lamarche</td><td>Team 1</td><td>2</td><td>57</td><td></td><td></td></tr>
<tr><td>3</td><td>Walter Turnbull</td><td>Team 17</td><td>2</td><td>53</td><td></td><td></td></tr>
<tr><td>4</td><td>Jason Trujillo</td><td>Team 18</td><td>1</td><td>51</td><td></td><td></td></tr>
<tr><td>5</td><td>Donald Lamarche</td><td>Team 1</td><td>3</td><td>51</td><td></td><td></td></tr>
<tr><td>6</td><td>Jerry Mueller</td><td>Team 12</td><td>3</td><td>51</td><td></td><td></td></tr>
<tr><td>7</td><td>Bruce Gratton</td><td>Team 16</td><td>2</td><td>50</td><td></td><td></td></tr>
<tr><td>8</td><td>Jason Trujillo</td><td>Team 18</td><td>3</td><td>50</td><td></td><td></td></tr>
<tr><td>9</td><td>Darryl Avery</td><td>Team 13</td><td>3</td><td>50</td><td></td><td></td></tr>
<tr><td>10</td><td>Ricardo Booth</td><td>Team 23</td><td>3</td><td>47</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Lee Hu</td><td>Team 18</td><td>3</td><td>37</td><td>5</td><td><a href="LTLHL-PLF-37.php">Game Direct Link</a></td></tr><tr><td>2</td><td>Oscar Trujillo</td><td>Team 13</td><td>3</td><td>74</td><td>5</td><td><a href="LTLHL-PLF-74.php">Game Direct Link</a></td></tr><tr><td>3</td><td>Darryl Avery</td><td>Team 13</td><td>3</td><td>354</td><td>5</td><td><a href="LTLHL-PLF-354.php">Game Direct Link</a></td></tr><tr><td>4</td><td>Billy Peterson</td><td>Team 12</td><td>1</td><td>33</td><td>4</td><td></td></tr>
<tr><td>5</td><td>Jerry Sabourin</td><td>Team 19</td><td>1</td><td>118</td><td>4</td><td></td></tr>
<tr><td>6</td><td>David Huffman</td><td>Team 19</td><td>1</td><td>229</td><td>4</td><td></td></tr>
<tr><td>7</td><td>Pascal Plamondon</td><td>Team 5</td><td>1</td><td>288</td><td>4</td><td></td></tr>
<tr><td>8</td><td>Arvid Tonnesen</td><td>Team 17</td><td>1</td><td>317</td><td>4</td><td></td></tr>
<tr><td>9</td><td>Fernando Chan</td><td>Team 2</td><td>1</td><td>379</td><td>4</td><td></td></tr>
<tr><td>10</td><td>Jose Mcgrath</td><td>Team 4</td><td>1</td><td>442</td><td>4</td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lee Hu</td><td>Team 18</td><td>3</td><td>82</td><td></td><td></td></tr>
<tr><td>2</td><td>Jason Trujillo</td><td>Team 18</td><td>3</td><td>78</td><td></td><td></td></tr>
<tr><td>3</td><td>Jerry Mueller</td><td>Team 12</td><td>3</td><td>78</td><td></td><td></td></tr>
<tr><td>4</td><td>Jason Trujillo</td><td>Team 18</td><td>2</td><td>77</td><td></td><td></td></tr>
<tr><td>5</td><td>Oscar Trujillo</td><td>Team 13</td><td>3</td><td>73</td><td></td><td></td></tr>
<tr><td>6</td><td>Jason Trujillo</td><td>Team 18</td><td>1</td><td>70</td><td></td><td></td></tr>
<tr><td>7</td><td>Gilles Winter</td><td>Team 18</td><td>2</td><td>70</td><td></td><td></td></tr>
<tr><td>8</td><td>Harvey Walker</td><td>Team 24</td><td>3</td><td>68</td><td></td><td></td></tr>
<tr><td>9</td><td>Tomas Zikmundova</td><td>Team 8</td><td>1</td><td>66</td><td></td><td></td></tr>
<tr><td>10</td><td>Gilles Winter</td><td>Team 18</td><td>3</td><td>66</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Oscar Trujillo</td><td>Team 13</td><td>3</td><td>74</td><td>8</td><td><a href="LTLHL-PLF-74.php">Game Direct Link</a></td></tr><tr><td>2</td><td>Darryl Avery</td><td>Team 13</td><td>3</td><td>74</td><td>8</td><td><a href="LTLHL-PLF-74.php">Game Direct Link</a></td></tr><tr><td>3</td><td>Darryl Avery</td><td>Team 13</td><td>3</td><td>354</td><td>6</td><td><a href="LTLHL-PLF-354.php">Game Direct Link</a></td></tr><tr><td>4</td><td>Gilles Winter</td><td>Team 18</td><td>3</td><td>843</td><td>6</td><td><a href="LTLHL-PLF-843.php">Game Direct Link</a></td></tr><tr><td>5</td><td>Albert Vincent</td><td>Team 8</td><td>3</td><td>854</td><td>6</td><td><a href="LTLHL-PLF-854.php">Game Direct Link</a></td></tr><tr><td>6</td><td>Ingvar Borgstrom</td><td>Team 3</td><td>1</td><td>34</td><td>5</td><td></td></tr>
<tr><td>7</td><td>Gilles Winter</td><td>Team 18</td><td>1</td><td>234</td><td>5</td><td></td></tr>
<tr><td>8</td><td>Kris Wright</td><td>Team 17</td><td>1</td><td>317</td><td>5</td><td></td></tr>
<tr><td>9</td><td>Brandon Davis</td><td>Team 8</td><td>1</td><td>342</td><td>5</td><td></td></tr>
<tr><td>10</td><td>Billy Peterson</td><td>Team 12</td><td>2</td><td>70</td><td>5</td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jason Trujillo</td><td>Team 18</td><td>2</td><td>135</td><td></td><td></td></tr>
<tr><td>2</td><td>Jerry Mueller</td><td>Team 12</td><td>3</td><td>129</td><td></td><td></td></tr>
<tr><td>3</td><td>Jason Trujillo</td><td>Team 18</td><td>3</td><td>128</td><td></td><td></td></tr>
<tr><td>4</td><td>Jason Trujillo</td><td>Team 18</td><td>1</td><td>121</td><td></td><td></td></tr>
<tr><td>5</td><td>Lee Hu</td><td>Team 18</td><td>3</td><td>117</td><td></td><td></td></tr>
<tr><td>6</td><td>Donald Lamarche</td><td>Team 1</td><td>2</td><td>111</td><td></td><td></td></tr>
<tr><td>7</td><td>Darryl Avery</td><td>Team 13</td><td>3</td><td>111</td><td></td><td></td></tr>
<tr><td>8</td><td>Gilles Winter</td><td>Team 18</td><td>3</td><td>111</td><td></td><td></td></tr>
<tr><td>9</td><td>Gilles Winter</td><td>Team 18</td><td>2</td><td>110</td><td></td><td></td></tr>
<tr><td>10</td><td>Oscar Trujillo</td><td>Team 13</td><td>3</td><td>103</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Bruce Gratton</td><td>Team 16</td><td>2</td><td>61</td><td>18</td><td></td></tr>
<tr><td>2</td><td>Donald Lamarche</td><td>Team 1</td><td>1</td><td>296</td><td>15</td><td></td></tr>
<tr><td>3</td><td>Brian Bautista</td><td>Team 11</td><td>2</td><td>599</td><td>15</td><td></td></tr>
<tr><td>4</td><td>Bert Archambault</td><td>Team 24</td><td>3</td><td>21</td><td>15</td><td><a href="LTLHL-PLF-21.php">Game Direct Link</a></td></tr><tr><td>5</td><td>Walter Turnbull</td><td>Team 17</td><td>1</td><td>533</td><td>14</td><td></td></tr>
<tr><td>6</td><td>Donald Lamarche</td><td>Team 1</td><td>2</td><td>642</td><td>14</td><td></td></tr>
<tr><td>7</td><td>Jason Trujillo</td><td>Team 18</td><td>2</td><td>868</td><td>14</td><td></td></tr>
<tr><td>8</td><td>Bert Archambault</td><td>Team 24</td><td>3</td><td>117</td><td>14</td><td><a href="LTLHL-PLF-117.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Pierre-Emmanuel Bianchi</td><td>Team 24</td><td>3</td><td>275</td><td>14</td><td><a href="LTLHL-PLF-275.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Walter Turnbull</td><td>Team 17</td><td>3</td><td>457</td><td>14</td><td><a href="LTLHL-PLF-457.php">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Bruce Gratton</td><td>Team 16</td><td>2</td><td>459</td><td></td><td></td></tr>
<tr><td>2</td><td>Bruce Gratton</td><td>Team 16</td><td>3</td><td>441</td><td></td><td></td></tr>
<tr><td>3</td><td>Donald Lamarche</td><td>Team 1</td><td>2</td><td>433</td><td></td><td></td></tr>
<tr><td>4</td><td>Brian Bautista</td><td>Team 11</td><td>2</td><td>417</td><td></td><td></td></tr>
<tr><td>5</td><td>Jason Trujillo</td><td>Team 18</td><td>3</td><td>414</td><td></td><td></td></tr>
<tr><td>6</td><td>Jason Trujillo</td><td>Team 18</td><td>2</td><td>404</td><td></td><td></td></tr>
<tr><td>7</td><td>Walter Turnbull</td><td>Team 17</td><td>3</td><td>401</td><td></td><td></td></tr>
<tr><td>8</td><td>Ricardo Booth</td><td>Team 23</td><td>2</td><td>393</td><td></td><td></td></tr>
<tr><td>9</td><td>Donald Lamarche</td><td>Team 1</td><td>3</td><td>384</td><td></td><td></td></tr>
<tr><td>10</td><td>Ricardo Booth</td><td>Team 23</td><td>3</td><td>383</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Gene Galvan</td><td>Team 6</td><td>1</td><td>517</td><td>10</td><td></td></tr>
<tr><td>2</td><td>Hubert Obrien</td><td>Team 20</td><td>1</td><td>278</td><td>9</td><td></td></tr>
<tr><td>3</td><td>David Huffman</td><td>Team 19</td><td>2</td><td>394</td><td>9</td><td></td></tr>
<tr><td>4</td><td>Anthony Duke</td><td>Team 16</td><td>3</td><td>495</td><td>9</td><td><a href="LTLHL-PLF-495.php">Game Direct Link</a></td></tr><tr><td>5</td><td>Aleksander Leonteva</td><td>Team 6</td><td>3</td><td>791</td><td>9</td><td><a href="LTLHL-PLF-791.php">Game Direct Link</a></td></tr><tr><td>6</td><td>Orlando Levy</td><td>Team 22</td><td>1</td><td>372</td><td>8</td><td></td></tr>
<tr><td>7</td><td>Lee Hu</td><td>Team 18</td><td>3</td><td>420</td><td>8</td><td><a href="LTLHL-PLF-420.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Barry Curtis</td><td>Team 20</td><td>3</td><td>513</td><td>8</td><td><a href="LTLHL-PLF-513.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Corey Holland</td><td>Team 5</td><td>3</td><td>710</td><td>8</td><td><a href="LTLHL-PLF-710.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Jerry Sabourin</td><td>Team 19</td><td>1</td><td>215</td><td>7</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Eino Julkunen</td><td>Team 22</td><td>1</td><td>165</td><td></td><td></td></tr>
<tr><td>2</td><td>Raymond Vetsch</td><td>Team 20</td><td>3</td><td>164</td><td></td><td></td></tr>
<tr><td>3</td><td>Hubert Obrien</td><td>Team 20</td><td>1</td><td>159</td><td></td><td></td></tr>
<tr><td>4</td><td>Anthony Duke</td><td>Team 16</td><td>1</td><td>159</td><td></td><td></td></tr>
<tr><td>5</td><td>Gene Galvan</td><td>Team 6</td><td>1</td><td>155</td><td></td><td></td></tr>
<tr><td>6</td><td>Server Zakharova</td><td>Team 7</td><td>2</td><td>153</td><td></td><td></td></tr>
<tr><td>7</td><td>Lee Hu</td><td>Team 18</td><td>1</td><td>152</td><td></td><td></td></tr>
<tr><td>8</td><td>Raymond Vetsch</td><td>Team 20</td><td>2</td><td>152</td><td></td><td></td></tr>
<tr><td>9</td><td>Gene Galvan</td><td>Team 6</td><td>3</td><td>149</td><td></td><td></td></tr>
<tr><td>10</td><td>David Huffman</td><td>Team 19</td><td>2</td><td>147</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Billy Peterson</td><td>Team 12</td><td>2</td><td>70</td><td>5</td><td></td></tr>
<tr><td>2</td><td>Stewart West</td><td>Team 12</td><td>2</td><td>70</td><td>5</td><td></td></tr>
<tr><td>3</td><td>Ernest Castro</td><td>Team 1</td><td>2</td><td>154</td><td>5</td><td></td></tr>
<tr><td>4</td><td>Aleksander Fomenko</td><td>Team 1</td><td>2</td><td>154</td><td>5</td><td></td></tr>
<tr><td>5</td><td>Andy Henry</td><td>Team 18</td><td>2</td><td>378</td><td>5</td><td></td></tr>
<tr><td>6</td><td>Lester Farmer</td><td>Team 18</td><td>2</td><td>378</td><td>5</td><td></td></tr>
<tr><td>7</td><td>Mohammad Raymond</td><td>Team 18</td><td>2</td><td>378</td><td>5</td><td></td></tr>
<tr><td>8</td><td>Ernest Castro</td><td>Team 1</td><td>2</td><td>739</td><td>5</td><td></td></tr>
<tr><td>9</td><td>Donald Lamarche</td><td>Team 1</td><td>2</td><td>739</td><td>5</td><td></td></tr>
<tr><td>10</td><td>Aleksander Fomenko</td><td>Team 1</td><td>2</td><td>739</td><td>5</td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jason Trujillo</td><td>Team 18</td><td>3</td><td>60</td><td></td><td></td></tr>
<tr><td>2</td><td>Thomas Fuentes</td><td>Team 18</td><td>3</td><td>56</td><td></td><td></td></tr>
<tr><td>3</td><td>Jerry Mueller</td><td>Team 12</td><td>3</td><td>56</td><td></td><td></td></tr>
<tr><td>4</td><td>Lee Hu</td><td>Team 18</td><td>3</td><td>56</td><td></td><td></td></tr>
<tr><td>5</td><td>Gilles Winter</td><td>Team 18</td><td>3</td><td>54</td><td></td><td></td></tr>
<tr><td>6</td><td>Roy Patterson</td><td>Team 12</td><td>3</td><td>52</td><td></td><td></td></tr>
<tr><td>7</td><td>Joachim Norin</td><td>Team 18</td><td>3</td><td>51</td><td></td><td></td></tr>
<tr><td>8</td><td>Byron Bryant</td><td>Team 12</td><td>3</td><td>51</td><td></td><td></td></tr>
<tr><td>9</td><td>Dominic Riemer</td><td>Team 12</td><td>3</td><td>46</td><td></td><td></td></tr>
<tr><td>10</td><td>Roland Poirier</td><td>Team 12</td><td>3</td><td>46</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Worse Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Mitchell Hassan</td><td>Team 8</td><td>3</td><td>154</td><td>-6</td><td><a href="LTLHL-PLF-154.php">Game Direct Link</a></td></tr><tr><td>2</td><td>Jason Trujillo</td><td>Team 18</td><td>2</td><td>26</td><td>-5</td><td></td></tr>
<tr><td>3</td><td>Al Solis</td><td>Team 12</td><td>2</td><td>378</td><td>-5</td><td></td></tr>
<tr><td>4</td><td>Valentin Korolev</td><td>Team 12</td><td>2</td><td>378</td><td>-5</td><td></td></tr>
<tr><td>5</td><td>Curtis John</td><td>Team 12</td><td>2</td><td>378</td><td>-5</td><td></td></tr>
<tr><td>6</td><td>Tomas Zikmundova</td><td>Team 8</td><td>3</td><td>154</td><td>-5</td><td><a href="LTLHL-PLF-154.php">Game Direct Link</a></td></tr><tr><td>7</td><td>Raymond Vetsch</td><td>Team 20</td><td>3</td><td>198</td><td>-5</td><td><a href="LTLHL-PLF-198.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Charlie Lange</td><td>Team 20</td><td>3</td><td>198</td><td>-5</td><td><a href="LTLHL-PLF-198.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Magomed Kazantsev</td><td>Team 3</td><td>3</td><td>257</td><td>-5</td><td><a href="LTLHL-PLF-257.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Yury Rogov</td><td>Team 3</td><td>3</td><td>257</td><td>-5</td><td><a href="LTLHL-PLF-257.php">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Worse Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Philip Breton</td><td>Team 20</td><td>3</td><td>-45</td><td></td><td></td></tr>
<tr><td>2</td><td>Perry Chabot</td><td>Team 20</td><td>3</td><td>-45</td><td></td><td></td></tr>
<tr><td>3</td><td>Norbert Fiserova</td><td>Team 22</td><td>3</td><td>-42</td><td></td><td></td></tr>
<tr><td>4</td><td>Sven Aijala</td><td>Team 16</td><td>3</td><td>-42</td><td></td><td></td></tr>
<tr><td>5</td><td>Vladislav Polyakov</td><td>Team 16</td><td>3</td><td>-41</td><td></td><td></td></tr>
<tr><td>6</td><td>Blair Dean</td><td>Team 16</td><td>3</td><td>-41</td><td></td><td></td></tr>
<tr><td>7</td><td>Norbert Fiserova</td><td>Team 22</td><td>2</td><td>-40</td><td></td><td></td></tr>
<tr><td>8</td><td>Eddie Spence</td><td>Team 22</td><td>3</td><td>-40</td><td></td><td></td></tr>
<tr><td>9</td><td>Georg Hedstrom</td><td>Team 20</td><td>3</td><td>-40</td><td></td><td></td></tr>
<tr><td>10</td><td>Brandon Moon</td><td>Team 22</td><td>3</td><td>-40</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Claude Fox</td><td>Team 14</td><td>2</td><td>281</td><td>24</td><td></td></tr>
<tr><td>2</td><td>Server Zakharova</td><td>Team 7</td><td>3</td><td>142</td><td>23</td><td><a href="LTLHL-PLF-142.php">Game Direct Link</a></td></tr><tr><td>3</td><td>Remi Leclerc</td><td>Team 21</td><td>3</td><td>361</td><td>22</td><td><a href="LTLHL-PLF-361.php">Game Direct Link</a></td></tr><tr><td>4</td><td>Art Adams</td><td>Team 10</td><td>1</td><td>237</td><td>19</td><td></td></tr>
<tr><td>5</td><td>Sergio Cantu</td><td>Team 13</td><td>1</td><td>853</td><td>19</td><td></td></tr>
<tr><td>6</td><td>Barry St-Laurent</td><td>Team 15</td><td>2</td><td>321</td><td>19</td><td></td></tr>
<tr><td>7</td><td>Barry Curtis</td><td>Team 20</td><td>2</td><td>578</td><td>19</td><td></td></tr>
<tr><td>8</td><td>Donald Lamarche</td><td>Team 1</td><td>2</td><td>620</td><td>19</td><td></td></tr>
<tr><td>9</td><td>Kelvin Jordan</td><td>Team 15</td><td>2</td><td>623</td><td>19</td><td></td></tr>
<tr><td>10</td><td>Thomas Fuentes</td><td>Team 18</td><td>2</td><td>654</td><td>19</td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Sergio Cantu</td><td>Team 13</td><td>3</td><td>206</td><td></td><td></td></tr>
<tr><td>2</td><td>Nicholas Selander</td><td>Team 6</td><td>1</td><td>189</td><td></td><td></td></tr>
<tr><td>3</td><td>Sergio Cantu</td><td>Team 13</td><td>2</td><td>186</td><td></td><td></td></tr>
<tr><td>4</td><td>Thomas Fuentes</td><td>Team 18</td><td>2</td><td>183</td><td></td><td></td></tr>
<tr><td>5</td><td>Orlando Levy</td><td>Team 22</td><td>1</td><td>178</td><td></td><td></td></tr>
<tr><td>6</td><td>Sergio Cantu</td><td>Team 13</td><td>1</td><td>170</td><td></td><td></td></tr>
<tr><td>7</td><td>Claude Fox</td><td>Team 14</td><td>2</td><td>164</td><td></td><td></td></tr>
<tr><td>8</td><td>Jared Malone</td><td>Team 12</td><td>2</td><td>164</td><td></td><td></td></tr>
<tr><td>9</td><td>Server Zakharova</td><td>Team 7</td><td>3</td><td>163</td><td></td><td></td></tr>
<tr><td>10</td><td>Remi Leclerc</td><td>Team 21</td><td>2</td><td>158</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Mathew Tan</td><td>Team 4</td><td>2</td><td>89</td><td>14</td><td></td></tr>
<tr><td>2</td><td>Thomas Fuentes</td><td>Team 18</td><td>2</td><td>179</td><td>14</td><td></td></tr>
<tr><td>3</td><td>Donald Lamarche</td><td>Team 1</td><td>3</td><td>391</td><td>14</td><td><a href="LTLHL-PLF-391.php">Game Direct Link</a></td></tr><tr><td>4</td><td>Stephane Zuger</td><td>Team 9</td><td>3</td><td>413</td><td>14</td><td><a href="LTLHL-PLF-413.php">Game Direct Link</a></td></tr><tr><td>5</td><td>Jan-Erik Toivola</td><td>Team 2</td><td>2</td><td>36</td><td>13</td><td></td></tr>
<tr><td>6</td><td>Ilsur Sarkisyan</td><td>Team 6</td><td>2</td><td>721</td><td>13</td><td></td></tr>
<tr><td>7</td><td>Alikhan Khazhmuradov</td><td>Team 5</td><td>3</td><td>76</td><td>13</td><td><a href="LTLHL-PLF-76.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Sergio Cantu</td><td>Team 13</td><td>3</td><td>97</td><td>13</td><td><a href="LTLHL-PLF-97.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Curtis Daniels</td><td>Team 24</td><td>3</td><td>362</td><td>13</td><td><a href="LTLHL-PLF-362.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Claude Fox</td><td>Team 14</td><td>1</td><td>30</td><td>12</td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Curtis Daniels</td><td>Team 24</td><td>3</td><td>431</td><td></td><td></td></tr>
<tr><td>2</td><td>Curtis Daniels</td><td>Team 24</td><td>2</td><td>414</td><td></td><td></td></tr>
<tr><td>3</td><td>Jose Mcgrath</td><td>Team 4</td><td>2</td><td>392</td><td></td><td></td></tr>
<tr><td>4</td><td>Jose Mcgrath</td><td>Team 4</td><td>3</td><td>389</td><td></td><td></td></tr>
<tr><td>5</td><td>Marc-Andre Trepanier</td><td>Team 19</td><td>3</td><td>385</td><td></td><td></td></tr>
<tr><td>6</td><td>Rodney Watt</td><td>Team 10</td><td>3</td><td>372</td><td></td><td></td></tr>
<tr><td>7</td><td>Nicholas Selander</td><td>Team 6</td><td>1</td><td>367</td><td></td><td></td></tr>
<tr><td>8</td><td>Greg Lyons</td><td>Team 15</td><td>2</td><td>365</td><td></td><td></td></tr>
<tr><td>9</td><td>Thomas Fuentes</td><td>Team 18</td><td>3</td><td>363</td><td></td><td></td></tr>
<tr><td>10</td><td>Bruce Gratton</td><td>Team 16</td><td>3</td><td>359</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Todd Griffin</td><td>Team 11</td><td>1</td><td>2</td><td></td><td></td></tr>
<tr><td>2</td><td>Michael Lebrun</td><td>Team 15</td><td>1</td><td>2</td><td></td><td></td></tr>
<tr><td>3</td><td>Ernest Castro</td><td>Team 1</td><td>2</td><td>2</td><td></td><td></td></tr>
<tr><td>4</td><td>Ramin Semenova</td><td>Team 3</td><td>2</td><td>2</td><td></td><td></td></tr>
<tr><td>5</td><td>Dwayne Lawson</td><td>Team 10</td><td>2</td><td>2</td><td></td><td></td></tr>
<tr><td>6</td><td>Rodney Watt</td><td>Team 10</td><td>2</td><td>2</td><td></td><td></td></tr>
<tr><td>7</td><td>Fred Montgomery</td><td>Team 21</td><td>3</td><td>2</td><td></td><td></td></tr>
<tr><td>8</td><td>Jerry Mueller</td><td>Team 12</td><td>3</td><td>2</td><td></td><td></td></tr>
<tr><td>9</td><td>Erkki Josefsson</td><td>Team 21</td><td>1</td><td>1</td><td></td><td></td></tr>
<tr><td>10</td><td>Pierre-Emmanuel Bianchi</td><td>Team 24</td><td>1</td><td>1</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hat Trick In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Bruce Gratton</td><td>Team 16</td><td>2</td><td>5</td><td></td><td></td></tr>
<tr><td>2</td><td>Jerry Mueller</td><td>Team 12</td><td>3</td><td>5</td><td></td><td></td></tr>
<tr><td>3</td><td>Ricardo Booth</td><td>Team 23</td><td>2</td><td>4</td><td></td><td></td></tr>
<tr><td>4</td><td>Jason Trujillo</td><td>Team 18</td><td>2</td><td>3</td><td></td><td></td></tr>
<tr><td>5</td><td>Darryl Avery</td><td>Team 13</td><td>3</td><td>3</td><td></td><td></td></tr>
<tr><td>6</td><td>Walter Turnbull</td><td>Team 17</td><td>1</td><td>2</td><td></td><td></td></tr>
<tr><td>7</td><td>Ernest Castro</td><td>Team 1</td><td>1</td><td>2</td><td></td><td></td></tr>
<tr><td>8</td><td>Muhammad Rice</td><td>Team 8</td><td>1</td><td>2</td><td></td><td></td></tr>
<tr><td>9</td><td>Donald Lamarche</td><td>Team 1</td><td>1</td><td>2</td><td></td><td></td></tr>
<tr><td>10</td><td>Jason Trujillo</td><td>Team 18</td><td>1</td><td>2</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Best Faceoff in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Walter Turnbull</td><td>Team 17</td><td>2</td><td>59.80%</td><td></td><td></td></tr>
<tr><td>2</td><td>Herbert Soukup</td><td>Team 22</td><td>3</td><td>59.60%</td><td></td><td></td></tr>
<tr><td>3</td><td>Aleksey Makarenko</td><td>Team 1</td><td>3</td><td>59.20%</td><td></td><td></td></tr>
<tr><td>4</td><td>Stephen Padilla</td><td>Team 10</td><td>2</td><td>59.00%</td><td></td><td></td></tr>
<tr><td>5</td><td>Gaetan Brennan</td><td>Team 16</td><td>2</td><td>59.00%</td><td></td><td></td></tr>
<tr><td>6</td><td>Robert Thompson</td><td>Team 17</td><td>3</td><td>59.00%</td><td></td><td></td></tr>
<tr><td>7</td><td>Todd Ramos</td><td>Team 14</td><td>2</td><td>58.60%</td><td></td><td></td></tr>
<tr><td>8</td><td>Walter Turnbull</td><td>Team 17</td><td>3</td><td>58.40%</td><td></td><td></td></tr>
<tr><td>9</td><td>Lester Farmer</td><td>Team 18</td><td>1</td><td>58.30%</td><td></td><td></td></tr>
<tr><td>10</td><td>Ernest Castro</td><td>Team 1</td><td>3</td><td>58.00%</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GoaliesRecords">Goalies Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="7"><b>Shutout In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Pasquale Ruf</td><td>Team 3</td><td>1</td><td>12</td><td></td><td></td></tr>
<tr><td>2</td><td>Klemens Schone</td><td>Team 4</td><td>2</td><td>12</td><td></td><td></td></tr>
<tr><td>3</td><td>Khaled Mohammadi</td><td>Team 6</td><td>2</td><td>12</td><td></td><td></td></tr>
<tr><td>4</td><td>Alan Holmberg</td><td>Team 24</td><td>3</td><td>12</td><td></td><td></td></tr>
<tr><td>5</td><td>Niyaz Ignatenko</td><td>Team 10</td><td>2</td><td>11</td><td></td><td></td></tr>
<tr><td>6</td><td>Shyngyskhan Goncharova</td><td>Team 17</td><td>3</td><td>10</td><td></td><td></td></tr>
<tr><td>7</td><td>Shyngyskhan Goncharova</td><td>Team 17</td><td>1</td><td>9</td><td></td><td></td></tr>
<tr><td>8</td><td>Alan Holmberg</td><td>Team 24</td><td>1</td><td>9</td><td></td><td></td></tr>
<tr><td>9</td><td>Carl Turnbull</td><td>Team 1</td><td>1</td><td>9</td><td></td><td></td></tr>
<tr><td>10</td><td>Khaled Mohammadi</td><td>Team 6</td><td>1</td><td>9</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Shots Received In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Tatu Ruuska</td><td>Team 7</td><td>2</td><td>2123</td><td></td><td></td></tr>
<tr><td>2</td><td>Francis St-Pierre</td><td>Team 20</td><td>3</td><td>2100</td><td></td><td></td></tr>
<tr><td>3</td><td>Robt Mcmahon</td><td>Team 18</td><td>3</td><td>2085</td><td></td><td></td></tr>
<tr><td>4</td><td>Francis St-Pierre</td><td>Team 20</td><td>2</td><td>2077</td><td></td><td></td></tr>
<tr><td>5</td><td>Bruno Gillberg</td><td>Team 12</td><td>1</td><td>2067</td><td></td><td></td></tr>
<tr><td>6</td><td>Blake Hansen</td><td>Team 2</td><td>2</td><td>2033</td><td></td><td></td></tr>
<tr><td>7</td><td>Bruno Gillberg</td><td>Team 12</td><td>2</td><td>2031</td><td></td><td></td></tr>
<tr><td>8</td><td>Bruno Gillberg</td><td>Team 12</td><td>3</td><td>2026</td><td></td><td></td></tr>
<tr><td>9</td><td>Andreyka Malysheva</td><td>Team 8</td><td>3</td><td>1980</td><td></td><td></td></tr>
<tr><td>10</td><td>Christopher Abbott</td><td>Team 13</td><td>3</td><td>1975</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Blake Hansen</td><td>Team 2</td><td>2</td><td>54</td><td></td><td></td></tr>
<tr><td>2</td><td>Robt Mcmahon</td><td>Team 18</td><td>3</td><td>54</td><td></td><td></td></tr>
<tr><td>3</td><td>Blake Hansen</td><td>Team 2</td><td>1</td><td>52</td><td></td><td></td></tr>
<tr><td>4</td><td>Alan Holmberg</td><td>Team 24</td><td>2</td><td>52</td><td></td><td></td></tr>
<tr><td>5</td><td>Blake Hansen</td><td>Team 2</td><td>3</td><td>52</td><td></td><td></td></tr>
<tr><td>6</td><td>Dwayne Vallee</td><td>Team 1</td><td>2</td><td>51</td><td></td><td></td></tr>
<tr><td>7</td><td>Shyngyskhan Goncharova</td><td>Team 17</td><td>3</td><td>51</td><td></td><td></td></tr>
<tr><td>8</td><td>Niyaz Ignatenko</td><td>Team 10</td><td>3</td><td>50</td><td></td><td></td></tr>
<tr><td>9</td><td>Alan Holmberg</td><td>Team 24</td><td>1</td><td>49</td><td></td><td></td></tr>
<tr><td>10</td><td>Edmond Gregory</td><td>Team 10</td><td>1</td><td>49</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Josh Hutchinson</td><td>Team 21</td><td>3</td><td>45</td><td></td><td></td></tr>
<tr><td>2</td><td>Francis St-Pierre</td><td>Team 20</td><td>3</td><td>44</td><td></td><td></td></tr>
<tr><td>3</td><td>Valerka Usova</td><td>Team 16</td><td>3</td><td>44</td><td></td><td></td></tr>
<tr><td>4</td><td>Rolf Karhu</td><td>Team 19</td><td>2</td><td>43</td><td></td><td></td></tr>
<tr><td>5</td><td>Francis St-Pierre</td><td>Team 20</td><td>1</td><td>42</td><td></td><td></td></tr>
<tr><td>6</td><td>Gregory Deschamps</td><td>Team 9</td><td>2</td><td>42</td><td></td><td></td></tr>
<tr><td>7</td><td>Valerka Usova</td><td>Team 16</td><td>2</td><td>42</td><td></td><td></td></tr>
<tr><td>8</td><td>Oscar Jacobs</td><td>Team 22</td><td>3</td><td>42</td><td></td><td></td></tr>
<tr><td>9</td><td>Klemens Schone</td><td>Team 4</td><td>1</td><td>40</td><td></td><td></td></tr>
<tr><td>10</td><td>Oscar Jacobs</td><td>Team 22</td><td>2</td><td>40</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GameRecords">Game Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Goals</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 10</td><td>Team 17</td><td>1</td><td>718</td><td>13</td><td></td></tr>
<tr><td>2</td><td>Team 18</td><td>Team 12</td><td>2</td><td>608</td><td>13</td><td></td></tr>
<tr><td>3</td><td>Team 18</td><td>Team 10</td><td>2</td><td>654</td><td>13</td><td></td></tr>
<tr><td>4</td><td>Team 20</td><td>Team 12</td><td>2</td><td>843</td><td>13</td><td></td></tr>
<tr><td>5</td><td>Team 18</td><td>Team 12</td><td>3</td><td>843</td><td>13</td><td><a href="LTLHL-PLF-843.php">Game Direct Link</a></td></tr><tr><td>6</td><td>Team 3</td><td>Team 21</td><td>1</td><td>34</td><td>12</td><td></td></tr>
<tr><td>7</td><td>Team 1</td><td>Team 13</td><td>1</td><td>178</td><td>12</td><td></td></tr>
<tr><td>8</td><td>Team 5</td><td>Team 7</td><td>1</td><td>357</td><td>12</td><td></td></tr>
<tr><td>9</td><td>Team 12</td><td>Team 18</td><td>2</td><td>378</td><td>12</td><td></td></tr>
<tr><td>10</td><td>Team 23</td><td>Team 12</td><td>3</td><td>351</td><td>12</td><td><a href="LTLHL-PLF-351.php">Game Direct Link</a></td></tr>
<tr><td colspan="7"><b>Most Assists</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 12</td><td>Team 14</td><td>3</td><td>378</td><td>24</td><td><a href="LTLHL-PLF-378.php">Game Direct Link</a></td></tr><tr><td>2</td><td>Team 18</td><td>Team 10</td><td>2</td><td>654</td><td>23</td><td></td></tr>
<tr><td>3</td><td>Team 18</td><td>Team 12</td><td>3</td><td>843</td><td>23</td><td><a href="LTLHL-PLF-843.php">Game Direct Link</a></td></tr><tr><td>4</td><td>Team 18</td><td>Team 12</td><td>2</td><td>608</td><td>22</td><td></td></tr>
<tr><td>5</td><td>Team 17</td><td>Team 19</td><td>2</td><td>800</td><td>22</td><td></td></tr>
<tr><td>6</td><td>Team 20</td><td>Team 12</td><td>2</td><td>843</td><td>22</td><td></td></tr>
<tr><td>7</td><td>Team 3</td><td>Team 21</td><td>1</td><td>34</td><td>21</td><td></td></tr>
<tr><td>8</td><td>Team 1</td><td>Team 21</td><td>1</td><td>624</td><td>21</td><td></td></tr>
<tr><td>9</td><td>Team 7</td><td>Team 1</td><td>1</td><td>835</td><td>21</td><td></td></tr>
<tr><td>10</td><td>Team 3</td><td>Team 1</td><td>2</td><td>154</td><td>21</td><td></td></tr>

<tr><td colspan="7"><b>Most Points</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 18</td><td>Team 10</td><td>2</td><td>654</td><td>36</td><td></td></tr>
<tr><td>2</td><td>Team 12</td><td>Team 14</td><td>3</td><td>378</td><td>36</td><td><a href="LTLHL-PLF-378.php">Game Direct Link</a></td></tr><tr><td>3</td><td>Team 18</td><td>Team 12</td><td>3</td><td>843</td><td>36</td><td><a href="LTLHL-PLF-843.php">Game Direct Link</a></td></tr><tr><td>4</td><td>Team 18</td><td>Team 12</td><td>2</td><td>608</td><td>35</td><td></td></tr>
<tr><td>5</td><td>Team 20</td><td>Team 12</td><td>2</td><td>843</td><td>35</td><td></td></tr>
<tr><td>6</td><td>Team 3</td><td>Team 21</td><td>1</td><td>34</td><td>33</td><td></td></tr>
<tr><td>7</td><td>Team 12</td><td>Team 18</td><td>2</td><td>378</td><td>33</td><td></td></tr>
<tr><td>8</td><td>Team 17</td><td>Team 19</td><td>2</td><td>800</td><td>33</td><td></td></tr>
<tr><td>9</td><td>Team 2</td><td>Team 23</td><td>3</td><td>729</td><td>33</td><td><a href="LTLHL-PLF-729.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Team 1</td><td>Team 21</td><td>1</td><td>624</td><td>32</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 17</td><td>Team 5</td><td>2</td><td>372</td><td>91</td><td></td></tr>
<tr><td>2</td><td>Team 2</td><td>Team 19</td><td>2</td><td>532</td><td>91</td><td></td></tr>
<tr><td>3</td><td>Team 24</td><td>Team 2</td><td>2</td><td>400</td><td>89</td><td></td></tr>
<tr><td>4</td><td>Team 18</td><td>Team 2</td><td>1</td><td>764</td><td>85</td><td></td></tr>
<tr><td>5</td><td>Team 18</td><td>Team 6</td><td>3</td><td>210</td><td>85</td><td><a href="LTLHL-PLF-210.php">Game Direct Link</a></td></tr><tr><td>6</td><td>Team 18</td><td>Team 10</td><td>2</td><td>654</td><td>84</td><td></td></tr>
<tr><td>7</td><td>Team 18</td><td>Team 1</td><td>3</td><td>703</td><td>84</td><td><a href="LTLHL-PLF-703.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Team 1</td><td>Team 23</td><td>2</td><td>499</td><td>83</td><td></td></tr>
<tr><td>9</td><td>Team 8</td><td>Team 12</td><td>3</td><td>272</td><td>83</td><td><a href="LTLHL-PLF-272.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Team 14</td><td>Team 18</td><td>1</td><td>52</td><td>82</td><td></td></tr>

<tr><td colspan="7"><b>Most Pim</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 6</td><td>Team 5</td><td>2</td><td>841</td><td>74</td><td></td></tr>
<tr><td>2</td><td>Team 15</td><td>Team 5</td><td>2</td><td>321</td><td>72</td><td></td></tr>
<tr><td>3</td><td>Team 16</td><td>Team 1</td><td>2</td><td>620</td><td>66</td><td></td></tr>
<tr><td>4</td><td>Team 9</td><td>Team 3</td><td>2</td><td>727</td><td>64</td><td></td></tr>
<tr><td>5</td><td>Team 7</td><td>Team 18</td><td>1</td><td>225</td><td>62</td><td></td></tr>
<tr><td>6</td><td>Team 21</td><td>Team 1</td><td>2</td><td>913</td><td>62</td><td></td></tr>
<tr><td>7</td><td>Team 19</td><td>Team 15</td><td>3</td><td>891</td><td>62</td><td><a href="LTLHL-PLF-891.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Team 20</td><td>Team 23</td><td>3</td><td>779</td><td>60</td><td><a href="LTLHL-PLF-779.php">Game Direct Link</a></td></tr><tr><td>9</td><td>Team 17</td><td>Team 21</td><td>3</td><td>361</td><td>59</td><td><a href="LTLHL-PLF-361.php">Game Direct Link</a></td></tr><tr><td>10</td><td>Team 20</td><td>Team 22</td><td>2</td><td>578</td><td>58</td><td></td></tr>

<tr><td colspan="7"><b>Most Hits</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Team 7</td><td>Team 5</td><td>1</td><td>501</td><td>79</td><td></td></tr>
<tr><td>2</td><td>Team 12</td><td>Team 18</td><td>2</td><td>179</td><td>75</td><td></td></tr>
<tr><td>3</td><td>Team 8</td><td>Team 20</td><td>1</td><td>342</td><td>70</td><td></td></tr>
<tr><td>4</td><td>Team 13</td><td>Team 19</td><td>2</td><td>78</td><td>70</td><td></td></tr>
<tr><td>5</td><td>Team 17</td><td>Team 23</td><td>2</td><td>164</td><td>70</td><td></td></tr>
<tr><td>6</td><td>Team 16</td><td>Team 14</td><td>3</td><td>399</td><td>70</td><td><a href="LTLHL-PLF-399.php">Game Direct Link</a></td></tr><tr><td>7</td><td>Team 5</td><td>Team 6</td><td>3</td><td>468</td><td>70</td><td><a href="LTLHL-PLF-468.php">Game Direct Link</a></td></tr><tr><td>8</td><td>Team 18</td><td>Team 22</td><td>1</td><td>286</td><td>69</td><td></td></tr>
<tr><td>9</td><td>Team 15</td><td>Team 7</td><td>2</td><td>488</td><td>69</td><td></td></tr>
<tr><td>10</td><td>Team 7</td><td>Team 18</td><td>2</td><td>767</td><td>69</td><td></td></tr>

</table>
<?php include "Footer.php";?>

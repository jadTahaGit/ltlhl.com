<?php
$DatabaseFile = (string)"LTLHL-STHS.bin";
$CareerStatDatabaseFile = (string)"LTLHL-STHSCareerStat.bin";
$NewsDatabaseFile = (string)"LTLHL-STHSNews.bin";
$GameHTMLDatabaseFile = (string)"LTLHL-STHSGameHTML-@-@.bin";
$GameJSONDatabaseFile = (string)"LTLHL-STHSGameJSON-@-@.bin";
$Cookie_Name = (string)"STHS-LTLHL";
$CookieTeamNumberKey = (String)"e+ITmhwMgZYRhxubMSh3Qiq5eecx4ps++wT0+YGYZX/Lr04f2BBOFGYi9UtsYTbHqgJnUgqyuj9B2cfpZ4o8qA==";
$LeagueOwner = (String)"Kris Nissen";
$MetaContent = (String)"STHS - Version : 3.3.3.3 - LTLHL-STHS.bin - LTLHL-STHSCareerStat.bin";
$WebClientHeadCode = "<link href=\"STHSMain.css\" rel=\"stylesheet\" type=\"text/css\" />";
If (file_exists("STHSMain-CSSOverwrite.css") == true){$WebClientHeadCode = $WebClientHeadCode . "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}
$DoNotRequiredLoginDynamicWebsite = (boolean)FALSE;
$LangOverwrite = (boolean)FALSE;
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
require_once "Cookie.php";
?>

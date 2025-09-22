<?php 
if((isset($override) && $override == true)){
	$assessmentResults->overrides = $assessmentResults->overrides[0];
	$first_content = ucwords(strtolower($assessmentResults->overrides->details->rankedTemperaments[0]) );
	$sec_content = ucwords(strtolower($assessmentResults->overrides->details->rankedTemperaments[1]));
	$trd_content = ucwords(strtolower($assessmentResults->overrides->details->rankedTemperaments[2]));
}else{
	$first_content = ucwords(strtolower($assessmentResults->details->preferenceRankedTemperaments[0]) );
	$sec_content = ucwords(strtolower($assessmentResults->details->preferenceRankedTemperaments[1]));
	$trd_content = ucwords(strtolower($assessmentResults->details->preferenceRankedTemperaments[2]));
}

$report_pattern = (isset($override) && $override == true) ? ucwords(strtolower($assessmentResults->overrides->details->patternTitle)):  ucwords(strtolower($assessmentResults->details->preferencePatternTitle));


// D-I = Executive
$first_content = "Choleric";
$sec_content = "Sanguine";
$report_pattern = "Executive";

/*
// D-S = Director
$first_content = "Choleric";
$sec_content = "Phlegmatic";
$report_pattern = "Director";

// D-C = Strategist
$first_content = "Choleric";
$sec_content = "Melancholy";
$report_pattern = "Strategist";



// I-D = Negotiator
$first_content = "Sanguine";
$sec_content = "Choleric";
$report_pattern = "Negotiator";

// I-S = Relater
$first_content = "Sanguine";
$sec_content = "Phlegmatic";
$report_pattern = "Relater";

// I-C = Performer
$first_content = "Sanguine";
$sec_content = "Melancholy";
$report_pattern = "Performer";



// S-D = Inspector
$first_content = "Phlegmatic";
$sec_content = "Choleric";
$report_pattern = "Inspector";

// S-I = Harmonizer
$first_content = "Phlegmatic";
$sec_content = "Sanguine";
$report_pattern = "Harmonizer";

// S-C = Helper
$first_content = "Phlegmatic";
$sec_content = "Melancholy";
$report_pattern = "Helper";




// C-D = Instructor
$first_content = "Melancholy";
$sec_content = "Choleric";
$report_pattern = "Instructor";

// C-I = Diplomat
$first_content = "Melancholy";
$sec_content = "Sanguine";
$report_pattern = "Diplomat";

// C-S = Analyst
$first_content = "Melancholy";
$sec_content = "Phlegmatic";
$report_pattern = "Analyst";
/*
*/

$first_temperament = $second_temperament = '';
if($first_content=="Choleric"){
	$Top_one = "D";
	$Top_one_label = "Chol";
    $first_temperament = "Choleric";
}else if($first_content=="Sanguine"){
	$Top_one = "I";
    $Top_one_label = "San";
    $first_temperament = "Sanguine";
}else if($first_content=="Phlegmatic"){
	$Top_one = "S";
    $Top_one_label = "Phleg";
    $first_temperament = "Phlegmatic";
}else if($first_content=="Melancholy"){
	$Top_one = "C";
    $Top_one_label = "Mel";
    $first_temperament = "Melancholy";
}

if($sec_content=="Choleric"){
	$Top_two = "D";
    $Top_two_label = "Chol";
    $second_temperament = "Choleric";
}else if($sec_content=="Sanguine"){
	$Top_two = "I";
    $Top_two_label = "San";
    $second_temperament = "Sanguine";
}else if($sec_content=="Phlegmatic"){
	$Top_two = "S";
    $Top_two_label = "Phleg";
    $second_temperament = "Phlegmatic";
}else if($sec_content=="Melancholy"){
	$Top_two = "C";
    $Top_two_label = "Mel";
    $second_temperament = "Melancholy";
}

if($trd_content=="Choleric"){
	$Top_trd = "D";
    $Top_trd_label = "Chol";
}else if($trd_content=="Sanguine"){
	$Top_trd = "I";
    $Top_trd_label = "San";
}else if($trd_content=="Phlegmatic"){
	$Top_trd = "S";
    $Top_trd_label = "Phleg";
}else if($trd_content=="Melancholy"){
	$Top_trd = "C";
    $Top_trd_label = "Mel";
}


$particiapnt_name = $assessment->first_name.' '.$assessment->last_name;
$participant_first_name = trim(ucfirst($assessment->first_name));

$block_class = $Top_one ."_".$Top_two."_block";
$the_report_pattern = "The ".$report_pattern;
?>
<style>
    h2, h3, h4, b{ font-family: 'proxima_novabold';}
    h1 { font-family: 'proxima_novaextrabold'; }
    b {color:#000000;}
    p {color: #231f20;font-family: 'proxima_nova_light';font-size: 1.5em;line-height: 31px;}
    .border-box {border-top: 4px solid #186680;display: inline-block;border-bottom: 4px solid #186680;padding-top: 30px;padding-bottom: 30px;}
    .sidebar-box {background: #f2f2f2;padding: 15px 20px;float: left;margin-left: 0px;margin-top: 20px;}
    div.custom_image_added_page3 {position: relative;left: -33px;top: -20px;}
    div.custom_image_added_page4 {position: relative;left: -33px;top: -20px;}
    div.common_page_container {position: relative;left: 0px;top: -20px;}
    div.list-icon-bg {background: url(<?= MYTEMPERAMENT_PLUGIN_DIR . '/templates/report/images/rt-list-icon-03.png'; ?>);position: relative;background-repeat: no-repeat;width: 180px;padding-left: 15px;}
    div.temp_block {position: relative;top: 0px;display: block;left: -25.8px;width: 100%;font-size: 35px;}
    .temp_block_text {font-size: 33px;position: relative;top: 1px;width: 100%;padding: 0px;margin: 6px 0px;height: 70px;}
    ul{ padding-left:0px;}

    page_footer { font-family:'proxima_nova_light'; font-size:10pt; color:#fff; }
    .footer { background:#231f20; margin-top:10px; padding:10px 40px 15px 80px; display:flex; justify-content:space-between; }

    .page{height:1060px;float:left;width:100%;padding-left:0px;margin-left:0px;}
    .w-100{width: 100%; display:inline-block;}
    .w-80{width: 80%;}
    .w-20{width: 20%;}
    .text-left{ text-align:left;}
    .text-right{ text-align:right;}
    .text-center{ text-align:center;}

    .text-white{color:#fff}
    .text-dark{color:#231f20;}
    .text-light{ color:#9fa6ad}
    .text-uppercase{text-transform: uppercase}

    .fw-600{font-weight:600}

    .fs-14{font-size:14pt;}
    .fs-22{font-size:22pt;}
    .fs-30{font-size:30pt;}
    .fs-25{font-size:25pt}

    .mt-0{margin-top:0;}
    .mt-13{margin-top:13px;}
    .mt-80{margin-top:80px;}
    .mt-140{margin-top:140px;}

    .mb-5{ margin-bottom:5px}
    .mb-20{ margin-bottom:20px}

    .pt-0{ padding-top:0px;}
    .pb-0{ padding-bottom:0px;}

    .lh-45{ line-height:45px;}
    .lh-20{ line-height:20px;}
    .lh-28{ line-height:28px;}
    .ls-3{letter-spacing: 3px;}
</style>

<page_footer>
    <table style="width: 100%; margin-top:10px;background: #231f20;display:inline-block;padding-left:80px;padding-right:40px;padding-bottom:15px;">
        <tr>
            <td style="font-family: 'proxima_nova_light';font-size: 10pt;text-align: left;width: 80%;color:#ffffff;">Copyright &copy; 2018, <?= date("Y") ?> Temperament Dynamics, LLC.</td>
            <td style="font-family: 'proxima_novabold';font-size: 9pt;text-align: right;width: 20%;color:#ffffff;padding:10px">Page [[page_cu]] of [[page_nb]]</td>
        </tr>
    </table>
</page_footer>


<!--page1 starts here-->
<div class="page">
    <table class="w-100">
        <tr class="w-100">
            <td align="center">
                <h4>Prepared For</h4>
				<h2><?=$particiapnt_name?></h2> 
            </td>
        </tr>
        <tr>
            <td align="center"> <img src="<?= MYTEMPERAMENT_PLUGIN_DIR ?>/templates/report/images/border-line-02.png"> </td>
        </tr>
        <tr>
            <td align="center">
                <h2>The</h2>
                <h2><?=$report_pattern?></h2>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h3><?=$first_temperament."-".$second_temperament?></h3>

            </td>
        </tr>
        <tr>
            <td>
                <table align="center">
                    <tr>
                        <td align="center" style="width:79px;">
                            <div style="border: 2px solid #494949; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-43px;">
                                <div class="text-center" style="color:#123f67;position:relative; top:0px; display: block; left:-35.8px;  width:100%;background-color: #68ba4b; height:60px;">
                                    <h4 class="text-center" style="color:#123f67;font-size: 24px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:15px 0px; "><?=$Top_one_label?></h4>
                                </div>
                            </div>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:79px;">
                            <div style="border: 2px solid #494949; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-43px;">
                                <div class="text-center" style="color:#16191a;position:relative; top:0px; display: block; left:-35.8px;  width:100%;background-color: #aed2e0; height:60px;">
                                    <h4 class="text-center" style="color:#16191a;font-size: 24px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:15px 0px;"><?=$Top_two_label?></h4>
                                </div>
                            </div>                            
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                <img style="width: 250px; text-align:center; " src="<?= MYTEMPERAMENT_PLUGIN_DIR ?>/templates/report/images/4T-logo.png">
            </td>
        </tr>
        <tr>
            <td align="center">
                <div>Discovery Report</div>
            </td>
        </tr>

    </table>
</div>
<!--page1 ends here-->

<!--page2 starts here-->
<div class="page">    
    <table>
        <tr>
            <td align="left">
                <h2 class="text-left">Welcome</h2>
            </td>
        </tr>
    
        <tr>
            <td align="left">
                <table>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <p>
                                            <b><?=$participant_first_name?></b>, this special report is designed just for you! We are excited you are on this journey of discovering more about yourself, your natural
                                            tendencies, and why you do what you do.
                                        </p>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td>
                                                    <img style="width: 12px;" src="<?= MYTEMPERAMENT_PLUGIN_DIR ?>/templates/report/v2/left-arrow-page-3.png" />
                                                </td>
                                                <td>
                                                    <div >There is no one else on the planet like you. You are uniquely designed and wired to do certain things well.</div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>
                                            This DISCOVERY REPORT will help you identify your natural temperament strengths and what makes you unique. As you read through this report, you will see an accurate description of who you are most of the time in most
                                            situations.
                                        </p>
                                        <p>
                                            When you accurately see yourself, your needs, and what motivates you, you will realize you are normal and that it is okay to be you.
                                        </p>
                                        <p>
                                            The goal of this report is to help you better understand yourself, others, and equip you to make a difference in the world.
                                        </p>
                                        <p>
                                            Enjoy your report — and remember we're here to help you along your journey!
                                        </p>
                                        <p>
                                            Best wishes, <br /><b style="font-family:'proxima_novaregularitalic'">The Team at Four Temperaments<sup>TM</sup></b>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <img src="<?= MYTEMPERAMENT_PLUGIN_DIR ?>/templates/report/v2/step-07-image.jpg" />
                        </td>
                    </tr>
                </table>
                
            </td>
        </tr>
    </table>
</div>
<!--page2 ends here-->
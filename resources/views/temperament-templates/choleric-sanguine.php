<!--page12 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; background: #f0f4f7; margin-top: 0px; padding-bottom: 15px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
        </tr>
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width: 100%; display: inline-block; padding: 0px; margin: 0px; padding-top: 10px; text-align: left;">
                <h2 style="width:100%;font-family: 'proxima_novabold';font-size: 27pt;text-align: left;color:#231f20; font-stretch:110% !important;letter-spacing:+0.254mm !important; text-transform:uppercase;margin:0px; margin-top:15px;">Your Results</h2>
            </td>
        </tr>
    </table>

    
    <table style="width: 100%; margin-left: 0px; display: inline-block; padding-left: 80px; padding-right: 40px; padding-top: 20px;">
        <tr>
            <td style="width: 100%; display: inline-block;">
                <p style="color: #231f20; font-size: 13pt; margin: 0px; line-height: 24px;"><b style="color: #231f20;"><?=$participant_first_name?>,</b> based on your answers, you scored as:</p>
            </td>
        </tr>
        <tr>
            <td style="width: 100%; display: inline-block;">
                <table style="width: 100%; display: inline-block;">
                    <tr>
                        <td style="width: 50%; display: inline-block;">
                            <h3 style="color: #231f20; font-size: 25pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 5px; text-transform:uppercase;"><?=$the_report_pattern?></h3>
                        </td>
                        <td style="width: 50%; display: inline-block; padding-right:20px;" align="right">
                            <table style="width: 100%; margin: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 0px;" align="right">
                                <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px; text-align:right;">
                                    <td align="center" style="width:50px;">
                                        <?php if($Top_one == "D"){ ?>
                                            <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                                <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #f26868; ">
                                                    <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                                </div>
                                            </div>
                                        <?php }else if($Top_one == "I"){ ?>
                                            <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                                <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #faed85; ">
                                                    <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                                </div>
                                            </div>
                                        <?php }else if($Top_one == "S"){ ?>
                                            <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                                <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #aed2e0; ">
                                                    <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                                </div>
                                            </div>
                                        <?php }else if($Top_one == "C"){ ?>
                                            <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                                <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #68ba4b; ">
                                                    <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </td>
                                    <td align="center" style="width:5px;"> </td>
                                    <td align="center" style="width:50px;">
                                        <?php if($Top_two == "D"){ ?>
                                            <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                                <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #f16869; ">
                                                    <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                                </div>
                                            </div>
                                        <?php }else if($Top_two == "I"){ ?>
                                            <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                                <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #faed85; ">
                                                    <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                                </div>
                                            </div>
                                        <?php }else if($Top_two == "S"){ ?>
                                            <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                                <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #aed2e0; ">
                                                    <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                                </div>
                                            </div>
                                        <?php }else if($Top_two == "C"){ ?>
                                            <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                                <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #65BE4B; ">
                                                    <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </td>    
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    
    <table style="width: 100%; margin-left: 0px; display: inline-block; padding-left: 80px; padding-right: 40px; padding-top: 20px; padding-bottom: 20px; background: #f0f4f7;margin-top: 10px;">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width: 440px; display: inline-block; padding: 0px; margin: 0px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 10px;"><?=$first_temperament?>-<?=$second_temperament?></h4>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 10px;">
                    <?=$the_report_pattern?> is a combination of the <?=$first_content?> temperament being first and the <?=$sec_content?> temperament being second.
                </p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 10px;">
                    They are practical and uses direct methods to get quick results but still shows an interest in people.
                </p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 10px;">
                    <b><?=$the_report_pattern?> is goal and bottom-line oriented and can be very persuasive in promoting their ideas.</b>
                </p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 10px;">
                    They want to be in charge because of confidence in their ability to make decisions. 
                </p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;">
                    They have boundless energy and need activity and to see results or they become bored. They need daily challenges and for others to be willing to listen to them and carry out their plans.
                </p>
            </td>
            <td align="center" style="width: 200px; display: inline-block; padding: 0px; margin: 0px; padding-left: 30px; padding-top: 20px;">
                <img style="width: 180px; text-align: center;" src="<?=get_assessment_chart_image($assessment->assessment_id, 'single', 'dirpath')?>" />
                <table style="width: 100%; margin: 0px; padding:0px; display: inline-block; padding-left:55px;" align="left">
                    <tr>
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.65px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>    
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-top: 10px; display: inline-block; padding-left: 80px; padding-right: 80px; padding-top: 30px; padding-bottom: 0px; background: #fff;">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width: 245px; display: inline-block; padding: 0px; margin: 0px; padding-left: 0px; padding-top: 30px;">
                <img style="width: 300px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/behavior-<?=$Top_one.$Top_two?>.png" />
                <img style="width: 210px; text-align: left; margin-top: 40px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
            <td align="left" style="width: 320px; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px;">
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 13px;">
                    This versatile, eager, self-starter is very competitive. They may be impatient and take a win/lose approach to life.
                </p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 13px;">
                    <b>To be highly motivated, the <?=$report_pattern?> needs freedom, the opportunity for advancement, and information that will help them get results. They like having power and authority.</b>
                </p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;">
                    <?=$the_report_pattern?> fights for what they think is the right way to accomplish the goal, but he can accept momentary defeat and tends not to be a grudge holder. They dislike weakness.
                </p>
            </td>
        </tr>
    </table>
</div>
<!--page12 ends here-->


<!--page13 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    
    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top:50px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 87%; display: inline-block;padding: 20px 10px 15px 50px;background: #d9e4ec;">
                <h2 class="text-center" style="color: #231f20; font-size: 20pt; text-align: center; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; width: 100%; text-transform:uppercase;">The Needs of <?=$the_report_pattern?></h2>
            </td>
        </tr>
                                
        <tr>
            <td align="left" style="width: 87%; display: inline-block;padding: 10px 25px 20px 25px;background: #d9e4ec;">
                <table style="width:100%; display:inline-block;">
                    <tr>
                        <td style="width:50%; display:inline-block; padding-right:20px;">
                            <img style="width: 100%; text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-13-primary-need.png" />

                            <h4 style="width:100%; display:inline-block; color: #231f20; font-size: 12pt; text-align: center; padding: 0px; margin: 0px; line-height: 20px; margin-top: 20px; margin-bottom: 10px; text-transform:uppercase;">To Get Results!</h4>

                            <p style="width:100%; display:inline-block; color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 13px; text-align: center;">
                                <?=$report_pattern?>s shape their environment by overcoming opposition to accomplish results.
                            </p>
                        </td>
                        <td style="width:50%; display:inline-block;">

                            <img style="width: 100%; text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-13-secondary-need.png" />
                            
                            <h4 class="text-center" style="color: #231f20; font-size: 12pt; text-align: center; padding: 0px; margin: 0px; line-height: 20px; margin-top: 20px; margin-bottom: 10px; text-align: center; width: 100%;text-transform:uppercase;">To Be Accepted Socially!</h4>
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 0px; text-align: center;">
                                <?=$report_pattern?>s also shape their environment by bringing others together to accomplish results.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top:10px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 87%; display: inline-block;padding: 20px 50px 20px 50px;background: #d9e4ec;">
                <p style="color: #231f20; font-size: 15pt; margin: 0px; line-height: 22px; margin-bottom: 0px; padding-bottom: 0px; text-align: center;">Either <b>need</b> may dominate behavior depending on the requirements of the situation.</p>
            </td>
        </tr>
    </table>

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top:10px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 92%; display: inline-block;padding: 0px; margin: 0px;">
                <h4 style="color: #231f20; font-size: 12pt; padding: 0px; margin: 0px; line-height: 20px; margin-top: 20px; margin-bottom: 15px; text-align: left;text-transform:uppercase;">Description</h4>                        
            </td>
        </tr>

        <tr>
            <td align="left" style="width: 92%; display: inline-block; margin: 0px; padding: 0px; padding-bottom: 0px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="width:50%; display: inline-block; padding-top:0px;margin:0px; padding-right:15px;">
                            <table style="width:100%; display:inline-block;">
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left; padding-left:8px;">
                                        Drive to win, work, and control
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Needs some social involvement
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Firm expression
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Quickly annoyed but easily calmed down
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Impatient, likes quick results
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Risk-taker, may change careers often
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Requires little sleep
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Egotistical
                                        </p>
                                    </td>
                                </tr>                                   
                            </table>
                        </td>
                        <td style="width:50%; display: inline-block; padding-top:0px;margin:0px; padding-right:15px;">
                            <table style="width:100%; display:inline-block;">
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Can be overbearing
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Likes to influence others
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Very energetic
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Competitive
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Forceful, domineering
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Likes personal challenges
                                        </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 0px;"><b>•</b></p>
                                    </td>
                                    <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 0px; text-align: left;padding-left:8px;">
                                        Dislikes details
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; margin-right: 0px; margin-left: 0px; margin-top: 30px; display: inline-block; padding-left: 80px; padding-right: 40px; padding-top: 0px; padding-bottom: 30px; margin-bottom: 100px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; padding: 0px; margin: 0px; padding-right:150px;">
                <h4 style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 20px; margin-top: 30px; margin-bottom: 10px; text-align: left; width: 100%; text-transform:uppercase;">Uniqueness</h4>
                <p style="color: #231f20; font-size: 13pt; margin: 0px; line-height: 22px; margin-bottom: 13px;">
                    <?=$the_report_pattern?> is more forceful and sociable than the other Choleric blends.
                </p>
            </td>
        </tr>
    </table>

    
    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 85px; margin-right: 60px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top: 10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page13 ends here-->


<!--page14 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    
        <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 50px; padding-right: 45px; margin-top:50px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 87%; display: inline-block;padding: 20px 25px 10px 25px;background: #d9e4ec;">
                    <h2 class="text-center" style="color: #231f20; font-size: 20pt; text-align: center; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; width: 100%; text-transform:uppercase;">Strengths & Weaknesses</h2>
                </td>
            </tr>
                                    
            <tr>
                <td align="left" style="width: 87%; display: inline-block;padding: 10px 25px 20px 25px;background: #d9e4ec;">
                    <table style="width:100%; display:inline-block;">
                        <tr>
                            <td style="width:50%; display:inline-block; margin:0px; padding:0px;">
                                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="width:100%; display:inline-block; margin:0px; padding:0px; padding-right:20px;">
                                            <img style="width:95%; text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-14-strengths-image.png" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:100%; display:inline-block; margin:0px; padding:0px; padding-right:20px;">
                                            <p style="width:100%; display:inline-block; font-family:'proxima_nova_light'; text-align: left; font-size:12pt; line-height:20px; color: #231f20; padding-right:10px;">These tendencies promote the <?=$report_pattern?>’s effectiveness in relationships and productivity in their career:</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:100%; display:inline-block; margin:0px; padding:0px; padding-right:20px;">
                                            <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Directness</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Self-motivation</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Decisiveness</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Confidence</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Desire for results</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Practical problem solving</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Social skills</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td style="width:50%; display:inline-block; margin:0px;padding:0px;">
                                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="width:100%; display:inline-block; margin:0px; padding:0px; padding-right:20px;">
                                            <img style="width:95%;  text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-14-weaknesses-image.png" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:100%; display:inline-block; margin:0px; padding:0px; padding-right:20px;">
                                            <p style="width:100%; display:inline-block; font-family:'proxima_nova_light'; text-align: left; font-size:12pt; line-height:20px; color: #231f20; padding-right:10px;">Successful <?=$report_pattern?>s have learned to overcome these natural weaknesses to be more effective in relationships and productive in their career:</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:100%; display:inline-block; margin:0px; padding:0px; padding-right:20px;">
                                            <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Impatient</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Easily annoyed (but quickly calmed)</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Explosive</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Desire to dominate others</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">May be very abrupt and blunt</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">May lack compassion</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">May lack empathy</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        
        <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 140px; margin-top:50px; margin-bottom:170px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px;">
                    <h4 style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 20px; margin-top: 20px; margin-bottom: 10px; text-transform:uppercase;">Fears</h4>
                </td>
            </tr>
            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px;">
                    <p style="text-align:left; color: #231f20; font-size: 13pt; margin: 0px; line-height: 22px; margin-bottom: 13px; display:inline-block;">Fear tends to create anger. <span style="font-family:'proxima_novalightitalic';font-size: 13pt; margin: 0px; line-height: 22px;">Fear</span> is a primary emotion and <span style="font-family:'proxima_novalightitalic';font-size: 13pt; margin: 0px; line-height: 22px;">anger</span> is a secondary emotion. <?=$report_pattern?>s may respond with anger if any of the following fears are realized:</p>
                </td>
            </tr>
            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px; padding-bottom:30px;">                    
                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Others taking advantage of them (perceived or real)</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Lack of results</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Loss of influence</p>
                            </td>
                        </tr>
                    </table>                  
                </td>
            </tr>
        </table>
    

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top: 10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page14 ends here-->


<!--page15 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 20px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block;">
                <h2 class="text-center" style="color: #231f20; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Response to Pressure</h2>
            </td>
        </tr>
    </table>
    
    
        <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 15px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 85%; display: inline-block; padding:0px; margin:0px;">
                    <table style="width:100%; display:inline-block; padding:0px; margin:0px;">
                        <tr>
                            <td align="left" style="width: 55.5%; display: inline-block; padding:0px; margin:0px; padding-right:15px;">
                                <table style="width:100%; display:inline-block;">
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding:0px; margin:0px; padding-right:15px; padding-bottom:15px;">
                                            <img style="width:100%; display:inline-block; text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-15-image-1.png" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; margin:0; padding:0; padding-right:15px; padding-bottom:0px;">
                                            <p style="text-align:left; color: #231f20; font-size: 12pt; margin: 0px; padding-bottom:0px; line-height: 20px; display:inline-block; width:100%;"><?=$the_report_pattern?> may do one or more of the following:</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-right:15px;">
                                            <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                            Become abrasive and impatient
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                            Release frustration by a sudden outburst of anger or activity
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                            Be very abrupt or blunt
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                            Become very dictatorial
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td align="left" style="width: 44.5%; display: inline-block;">
                                <table style="width:100%; display:inline-block;">
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:10px; padding-bottom:15px;">
                                            <img style="width:100%; display:inline-block; text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-15-image-2.png" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; margin:0px; padding:0px; padding-right:10px;">
                                            <p style="width:100%; display:inline-block; text-align:left; color: #231f20; font-size: 12pt; margin: 0px; padding:0px; padding-bottom:0px; line-height: 20px;">To be a more balanced person, successful <?=$report_pattern?>s have incorporated the following into their behavior:</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-bottom:15px; padding-right:10px;">
                                            <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Accommodating attitude 
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Organization 
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Empathy and compassion
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        More consistent effort
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        More detail planning
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 150px; padding-top:30px; margin-top:0px; margin-bottom:20px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 100%; display: inline-block; margin: 0px; padding:0; padding-bottom:10px;">
                    <h2 class="text-center" style="color: #231f20; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; text-align: left; width: 100%; text-transform:uppercase;">Leadership Style</h2>
                </td>
            </tr>
            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px; padding:0; padding-bottom:10px;">
                    <p style="font-family: 'proxima_nova_light'; text-align:left; color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 15px; display:inline-block;"><b style="font-family:'proxima_novaregular';"><?=$the_report_pattern?> is a hard-driving, “think big,” take-charge, "get the job done now" person.</b> They are result-oriented. They will usually expect the same approach from those with whom they are associated.</p>
                </td>
            </tr>
            <tr>
                <td style="width:100%; display: inline-block; margin: 0px; padding:0px;">
                    <table style="width:100%; display:inline-block; padding-bottom:10px;">
                        <tr>
                            <td align="left" style="width: 64.5%; display: inline-block; padding-right:10px;">
                                <table style="width:100%; display:inline-block;">
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:10px; padding-bottom:10px;">
                                            <img style="width: 100%; text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-15-image-3.png" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:10px; padding-bottom:0px;">
                                            <p style="text-align:left; color: #231f20; font-size: 12pt; margin: 0px; padding:0px; line-height: 20px; display:inline-block; width:100%;"><?=$report_pattern?>s have a positive impact on others because they are:</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:10px; margin-top:12px;">
                                            <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Inspirational
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Self-motivated
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Direct and decisive
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Result oriented
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Confident
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Willing to take a risk
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Practical problem solver
                                                        </p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Competitive (high need to win)
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Pace-setter
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td align="left" style="width: 35.5%; display: inline-block; padding:0px; margin:0px; padding-right:10px;">
                                <table style="width:100%; display:inline-block; padding:0px; margin:0px;">
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:10px; padding-bottom:12px;">
                                            <img style="width: 100%; text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-15-image-4.png" />
                                        </td>
                                    </tr>
                                    <tr style="margin:0px;padding:0px;">
                                        <td align="left" style="width: 100%; display: inline-block; margin:0; padding:0px; padding-right:10px; padding-bottom:0px;">
                                            <p style="text-align:left; color: #231f20; font-size: 12pt; margin: 0px; padding: 0px; line-height: 20px; display:inline-block;">They will be confident and may...</p>
                                        </td>
                                    </tr>
                                    <tr style="margin:0px;padding:0px;">
                                        <td align="left" style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-right:10px;">
                                            <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Expect immediate results
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Not give sufficient details
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Tell and not instruct
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Talk but not listen
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Drive rather than guide
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Be too brief
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Be too direct
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Be domineering and antagonize others
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width:100%; display: inline-block; margin: 0px; padding:0px; padding-top:18px; padding-bottom:30px;">
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 20px; margin-top: 0px; text-align: left;">
                        <?=$the_report_pattern?> will usually try to run everything. They like to get others involved to do the actual work. They may select strong subordinates but not allow them to function freely.
                    </p>
                </td>
            </tr>
        </table>
    
</div>
<!--page15 ends here-->


<!--page16 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 25px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:20px;">
                <h2 class="text-center" style="color: #231f20; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">How to relate to <?=$the_report_pattern?></h2>
            </td>
        </tr>
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:20px;">
                <p style=" width: 100%; display: inline-block;color: #231f20; font-family: 'proxima_nova_light'; font-size: 14pt; line-height: 23px; margin: 0px; margin-bottom: 20px; padding: 0px;">
                    <img style="width:13px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-16-arrow.png" />
                <p style="color:#000000;margin-top: -70px; line-height: 24px; padding-left:28px; padding-top: 15px; width: 100%; display: inline-block; ">
                    If I meet the needs of your temperament, it will increase the possibility of a favorable response.
                </p>
                </p>
            </td>
        </tr>
    </table>

    
        <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 100%; display: inline-block; padding-bottom:15px;">
                    <p style="color:#231f20; line-height: 24px;; width: 100%; display: inline-block;font-size: 13pt;">
                        <b syle="color:#231f20; line-height:24px; font-size:13px;"><?=$report_pattern?>s will likely respond favorably if others meet their temperament needs by...</b>
                    </p>
                </td>
            </tr>                  

            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px; padding-bottom:30px;">                    
                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Being brief, direct, and to the point</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Asking "what" questions instead of "how"</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Speeding up your responses</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Being confident and practical</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Being result-oriented</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Helping them save time</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Focusing on goals, objectives, and ideas</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>

        <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 140px; margin-top:50px; margin-bottom:240px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px;">
                    <h4 style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 20px; margin-top: 20px; margin-bottom: 10px; text-transform:uppercase;">Also...</h4>
                </td>
            </tr>
            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px; padding-bottom:50px;">                    
                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Being organized when presenting a new idea: giving alternatives, stating your preference, then asking for their opinion</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Discussing how to get better and faster results</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Tolerating their assertive nature</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">Being prepared for aggressive responses, even explosive behavior</p>
                            </td>
                        </tr>
                    </table>                  
                </td>
            </tr>
        </table>
    
    

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top: 10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>

</div>
<!--page16 ends here-->


<!--page17 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 50px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:20px;">
                <h2 class="text-center" style="color: #231f20; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Key Words & Typical Responses:</h2>
            </td>
        </tr>
    </table>


    
        <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 85%; display: inline-block; padding-bottom:20px;">
                    <p style=" width: 100%; display: inline-block;color: #231f20; font-family: 'proxima_nova_light'; font-size: 12pt; line-height: 22px; margin: 0px; margin-bottom: 20px; padding: 0px;">
                    <?=$report_pattern?>s have a very strong determination to accomplish their goals. They use and respond well to words like…
                    </p>
                </td>
            </tr>
        </table>

        <table align="left" style="width: 75%; display: inline-block; margin: 0px; padding: 0px; padding-left: 145px; padding-right: 40px; margin-top:30px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 28%; display: inline-block;">
                    <div style="width: 100%; display:inline-block;background-color: #231f20;border-radius: 5px;padding: 10px 10px; margin-bottom:15px;">
                        <p style="color: #fff; font-size: 13pt; text-align: center; margin: 0px;">save time</p>
                    </div>
                </td>
                <td align="left" style="width: 8%; display: inline-block; ">
                </td>
                <td align="left" style="width: 28%; display: inline-block;">
                    <div style="width: 100%; display:inline-block;background-color: #231f20;border-radius: 5px;padding: 10px 10px; margin-bottom:15px;">
                    <p style="color: #fff; font-size: 13pt; text-align: center; margin: 0px;">results</p>
                    </div>
                </td>
                <td align="left" style="width: 8%; display: inline-block; ">
                </td>
                <td align="left" style="width: 28%; display: inline-block;">
                    <div style="width: 100%; display:inline-block;background-color: #231f20;border-radius: 5px;padding: 10px 10px; margin-bottom:15px;">
                    <p style="color: #fff; font-size: 13pt; text-align: center; margin: 0px;">productive</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="left" style="width: 28%; display: inline-block;">
                    <div style="width: 100%; display:inline-block;background-color: #231f20;border-radius: 5px;padding: 10px 10px; margin-bottom:15px;">
                        <p style="color: #fff; font-size: 13pt; text-align: center; margin: 0px;">goals</p>
                    </div>
                </td>
                <td align="left" style="width: 8%; display: inline-block; ">
                </td>
                <td align="left" style="width: 28%; display: inline-block;">
                    <div style="width: 100%; display:inline-block;background-color: #231f20;border-radius: 5px;padding: 10px 10px; margin-bottom:15px;">
                    <p style="color: #fff; font-size: 13pt; text-align: center; margin: 0px;">effective</p>
                    </div>
                </td>
                <td align="left" style="width: 8%; display: inline-block; ">
                </td>
                <td align="left" style="width: 28%; display: inline-block;">
                    <div style="width: 100%; display:inline-block;background-color: #231f20;border-radius: 5px;padding: 10px 10px; margin-bottom:15px;">
                    <p style="color: #fff; font-size: 13pt; text-align: center; margin: 0px;">quick</p>
                    </div>
                </td>
            </tr>
        </table>
        <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-top: 40px; padding-left: 80px; padding-right: 80px; padding-bottom: 25px; padding-top: 5px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 100%; display: inline-block; padding: 0px; margin: 0px; ">
                    <h4 style="color: #231f20; font-size: 12pt; text-align: left; padding: 0px; margin: 0px; line-height: 20px; margin-top: 20px; margin-bottom: 10px; text-align: left; width: 100%; text-transform:uppercase;"><?=$the_report_pattern?> will usually be...</h4>

                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;"><p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 2px;"><b>•</b></p></td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 2px; text-align: left;padding-left:8px;">
                                Be brief, direct, and to the point
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 8px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 8px; text-align: left;padding-left:8px;">
                                    Socially active
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 8px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 8px; text-align: left;padding-left:8px;">
                                    A risk-taker in personal and business life
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-top: 30px; margin-bottom: 270px; display: inline-block; padding-left: 80px; padding-right: 40px; padding-top: 15px; padding-bottom: 25px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 85%; display: inline-block; padding-right:50px;">
                    <p style=" width: 100%; display: inline-block;color: #000000; font-family: 'proxima_nova_light'; font-size: 15pt; line-height: 23px; margin: 0px; margin-bottom: 20px; padding: 0px;">
                        <img style="width:12px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-17-arrow.png" />
                        <p style="color:#000000;margin-top: -78px; line-height: 24px; padding-left:35px; padding-top: 0px; width: 100%; display: inline-block; ">
                            Emotions such as love, fear, anger, and sadness, etc., may cause a temporary change in the normal way they respond to others and events.
                        </p>
                    </p>
                </td>
            </tr>
        </table>

    

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page17 starts here-->


<!--page18 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 25px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:10px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Environment Needed:</h2>
            </td>
        </tr>
    </table>

    
        <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 15px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 85%; display: inline-block;">
                    <img style="width:100%; display:inline-block; text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/<?=$Top_one.$Top_two?>-Opportunities.png" />
                </td>
            </tr>
            <tr>
                <td align="left" style="width: 85%; display: inline-block;">
                    <table style="width:100%; display:inline-block;">
                        <tr>
                            <td align="left" style="width: 50%; display: inline-block; padding-right:20px;">
                                <table style="width:100%; display:inline-block;">
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:20px; margin-top:15px;">
                                            <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Have difficult assignments
                                                        </p>
                                                    </td>
                                                </tr>                                                
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Be challenged
                                                        </p>
                                                    </td>
                                                </tr>                                                
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Have lots of activity
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td align="left" style="width: 50%; display: inline-block;">
                                <table style="width:100%; display:inline-block;">
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:20px; margin-top:20px;">
                                            <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Have freedom from meticulous details
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Set their own goals
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 140px; padding-top:45px; padding-bottom:70px; margin-top:40px; margin-bottom:60px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 100%; display: inline-block; margin: 0px; padding:0; padding-bottom:15px;">
                    <h2 class="text-center" style="color: #231f20; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; text-align: left; width: 100%; text-transform:uppercase;">Suggestions for best Performance</h2>
                </td>
            </tr>
            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px; padding:0; padding-bottom:20px;">
                    <p style="text-align:left; color: #231f20; font-size: 13pt; margin: 0px; line-height: 22px; display:inline-block;">People work well in an environment where their ability and temperament match the task.</p>
                </td>
            </tr>
            
            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px; padding:0; padding-bottom:20px;">
                    <p style=" width: 100%; display: inline-block;color: #231f20; font-family: 'proxima_nova_light'; font-size: 15pt; line-height: 23px; margin: 0px; margin-bottom: 20px; padding: 0px;">
                        <img style="width:12px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-17-arrow.png" />
                        <p style="color:#231f20;margin-top: -78px; line-height: 24px; padding-left:35px; padding-top: 0px; width: 100%; display: inline-block; font-family: 'proxima_nova_light';">
                            <b><?=$report_pattern?>s work best with a direct, straight-forward supervisor with whom they can talk openly and negotiate.</b> They like options from which to select, and they usually respond well to a challenge.
                        </p>
                    </p>
                </td>
            </tr>            

            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px; padding:0;padding-bottom:15px;">
                    <h4 style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 20px; margin-top: 20px; text-transform:uppercase;"><?=$report_pattern?>s need:</h4>
                </td>
            </tr>
            <tr>
                <td style="width:100%; display: inline-block; margin: 0px; padding:0px; padding-bottom:15px;">
                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                A task that is challenging and has the possibility of getting quick results
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Diversification
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                A heavy workload
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Freedom and opportunity to improve procedures
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                To negotiate
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Options
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Incentives and material rewards
                                </p>
                            </td>
                        </tr>
                    </table>                
                </td>
            </tr>
        </table>
    
    

    
    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>

</div>
<!--page18 starts here-->


<!--page19 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 25px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:10px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Concerns & Procrastination:</h2>
            </td>
        </tr>
    </table>

    
        <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 15px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 85%; display: inline-block; padding-bottom:20px;">
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 20px;">
                        <b><?=$the_report_pattern?> may be impatient and irritable when things do not happen fast enough or go their way.</b> They tend to have little time for details, unless they believe it will help them accomplish results quicker. They may sulk and be trouble-makers when not in the limelight. They tend to overstep prerogatives.
                    </p>
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;">
                        They tend to suffer from high turnover early in their career because they are searching for something to keep them challenged. They may lose interest in a project once the challenge is gone or the results are not coming fast enough and may…
                    </p>
                </td>
            </tr>
            <tr>
                <td align="left" style="width: 85%; display: inline-block; padding-bottom:20px;">
                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Be too independent
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Lack sensitivity to others
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Be abrupt
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Not respect authority
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Have sudden outburst of anger
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Intimidate others
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Act without explaining why
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Operate on, "the end justifies the means"
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Try to change everything
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                            </td>
                            <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                Be easily annoyed
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 140px; padding-top:45px; margin-top:25px; padding-bottom:0px; margin-bottom:50px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
            <tr>
                <td style="width:100%; display: inline-block; margin: 0px; padding:0px;">
                    <table style="width:100%; display:inline-block; padding-bottom:20px;">
                        <tr>
                            <td align="left" style="width: 65.5%; display: inline-block; padding-right:20px;">
                                <table style="width:100%; display:inline-block;">
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:20px; padding-bottom:20px;">
                                            <img style="width: 100%; text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page19-image-1.png" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:20px;">
                                            <p style="text-align:left; color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 13px; display:inline-block;"><?=$report_pattern?>s may procrastinate if they fail to see how doing the activity will help them accomplish their goals or get results. They also tend to promise too much and forget to follow through.</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td align="left" style="width: 35.5%; display: inline-block; padding-right:20px;">
                                <div style="background: #fff; padding:20px 30px;width: 170px;">
                                    <p style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 23px; margin-top: 0px; margin-bottom: 0px; width: 100%;">To avoid procrastination, <?=$report_pattern?>s need to see how the activity will enable them to accomplish their goals and get better, faster results.</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page19 starts here-->


<!--page20 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 25px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:10px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">When Confronted:</h2>
            </td>
        </tr>
    </table>


    
        <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 15px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 85%; display: inline-block; padding-bottom:20px;">
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 20px;">
                        <b>When confronted, the <?=$report_pattern?> may have a sudden burst of anger.</b> This will often pass quickly and is usually not meant to be taken personally.
                    </p>
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom:20px;">
                        <b><?=$the_report_pattern?> responds best when a person is firm, direct, and to the point. They like others to demonstrate strength.</b>
                    </p>
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom:20px;">
                        <?=$the_report_pattern?> does not mind others taking issue with their work but will likely respond aggressively if they are criticized personally.
                    </p>
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 20px;">
                        <b>They respond well if they are shown that different behavior will get better, faster results.</b>
                    </p>
                </td>
            </tr>
            
            <tr>
                <td align="left" style="width: 85%; display: inline-block; padding-top:30px; padding-bottom:470px;">
                    <p style=" width: 100%; display: inline-block;color: #000000; font-family: 'proxima_nova_light'; font-size: 15pt; line-height: 23px; margin: 0px; margin-bottom: 20px; padding: 0px;">
                        <img style="width:12px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-17-arrow.png" />
                        <p style="color:#000000;margin-top: -65px; line-height: 24px; padding-left:35px; padding-top: 0px; width: 100%; display: inline-block; ">
                            When confronted, <?=$report_pattern?>s should consider if the information given to them can be used to improve something in their life!
                        </p>
                    </p>
                </td>
            </tr>
        </table>
    
    

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page20 starts here-->



<!--page21 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 25px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:10px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Style of relating to others</h2>
            </td>
        </tr>
    </table>
    
    
        <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 15px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 85%; display: inline-block; padding-bottom:20px;">
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 20px;">
                        A person's style of  relating to others is a reflection of their basic temperament blend. Just as in every other aspect of life, a person has both strengths and weaknesses in this area too.
                    </p>
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 20px;">
                        <b><?=$the_report_pattern?> tends to not take the time to build many relationships</b> that are strictly personal, although they will have a few close friends.
                    </p>
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 20px;">
                        They tend to build relationships that will benefit them professionally or personally. 
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width:85%; display: inline-block; margin: 0px; padding:0px; padding-bottom:15px;">
                    <table style="width:100%; display:inline-block; padding-bottom:25px;">
                        <tr>
                            <td align="left" style="width: 65.5%; display: inline-block; padding-right:20px;">
                                <table style="width:100%; display:inline-block;">
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:20px; padding-bottom:20px;">
                                            <img style="width: 100%; text-align: center; margin: 0px; padding: 0px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-21-image.png" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="width: 100%; display: inline-block; padding-right:20px;">
                                            <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Brief and direct about what they think and feel
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Too brief and do not give sufficient information
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Easily annoyed with others
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Intimidating to others
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Demanding of others
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Talkers but not listeners
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                                                    </td>
                                                    <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                                                        <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                                                        Impatient and blunt
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td align="left" style="width: 35.5%; display: inline-block; padding-right:20px;">
                                <div style="background: #b2cad9; padding:20px 30px;width: 170px;">
                                    <p style="color: #fff; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 23px; margin-top: 0px; margin-bottom: 0px; text-align: left; width: 100%; font-family:'proxima_novabold';">Because a person's temperament represents such dominant needs, no one can hide or deny their temperament for very long.</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>            
        </table>
    
    
    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 140px; padding-top:45px; padding-bottom:40px; margin-top:40px; margin-bottom:30px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; margin: 0px; padding:0; padding-bottom:25px;">
                <h2 class="text-center" style="color: #231f20; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; text-align: left; width: 100%; text-transform:uppercase;">Guidelines for Success</h2>
            </td>
        </tr>
        
        <tr>
            <td align="left" style="width:100%; display: inline-block; margin: 0px; padding:0; padding-bottom:25px;">
                <p style=" width: 100%; display: inline-block;color: #231f20; font-family: 'proxima_nova_light'; font-size: 15pt; line-height: 23px; margin: 0px; margin-bottom: 20px; padding: 0px;">
                    <img style="width:12px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-17-arrow.png" />
                    <p style="color:#231f20;margin-top: -80px; line-height: 24px; padding-left:35px; padding-top: 0px; width: 100%; display: inline-block; font-family: 'proxima_nova_light';"><b>Never use the information in this report to <span style="font-family:'proxima_nova_b_i'; color:#000000;">excuse</span> your behavior.</b> Instead, use it to <span style="font-family:'proxima_nova_b_i'; color:#000000;">identify</span> your natural tendencies so  you can <span style="font-family:'proxima_nova_b_i'; color:#000000;">develop a plan</span> to use your strengths and <span style="font-family:'proxima_nova_b_i'; color:#000000;">overcome</span> your weaknesses.
                    </p>
                </p>
            </td>
        </tr>            

        <tr>
            <td align="left" style="width:100%; display: inline-block; margin: 0px; padding:0; margin-top:25px padding-bottom:25px;">
                <div style="background: #b2cad9; padding:25px 30px;">
                    <p style="font-family:'proxima_novabold'; text-align:left; color: #fff; font-size: 13pt; margin: 0px; line-height: 22px; display:inline-block;">Understanding your temperament and why you do what you do can lead to a more purpose-driven life!</p>
                </div>
            </td>
        </tr>
    </table>
</div>
<!--page21 ends here-->

<?php if($Top_one == "I" && $Top_two == "D"){ ?>
<!--negotiator extra starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 25px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:30px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Avoiding Burnout</h2>
            </td>
        </tr>
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:10px;">
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 20px;">
                   <b><?=$the_report_pattern?> has a tendency to "burn out" frequently.</b> Typical symptoms include three to five weeks of excessive activity expending intense energy followed by one to three days of low energy with little or no activity and the need for rest. 
                </p>

                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 20px;"><?=$the_report_pattern?> uses energy quickly. This causes down time, which allows their body to restore the used energy.</p>
            </td>
        </tr>
    </table>

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 140px; padding-top:30px; padding-bottom:30px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; margin: 0px; padding:0; margin-bottom:0px;padding-bottom:0px;">
                <h4 class="text-center" style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 22px; text-align: left; width: 100%; text-transform:uppercase;margin-bottom:0px;padding-bottom:0px;">To control burnout, the <?=$report_pattern?> should consider...</h4>
            </td>
        </tr>
        
        <tr>
            <td style="width:100%; display: inline-block; margin: 0px; padding:0px; padding-bottom:15px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                        </td>
                        <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                            reducing their intensity level
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                        </td>
                        <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                            taking 5-minute pauses during the day
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                        </td>
                        <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                            becoming more organized
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                        </td>
                        <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                            establishing a schedule or routine
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                        </td>
                        <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                            having a variety of activities
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="width:8px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px;margin-top: 6px;"><b>•</b></p>
                        </td>
                        <td style="width: 100%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 6px; text-align: left; padding-left:8px;">
                            practicing relaxation techniques daily
                            </p>
                        </td>
                    </tr>
                </table>                
            </td>
        </tr>
    </table>

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 140px; padding-top:40px; padding-bottom:40px; margin-top:15px; margin-bottom:230px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="width: 100%; display: inline-block; margin: 0px; padding:0; padding-bottom:15px;">
                <h4 class="text-center" style="color: #231f20; font-size: 13pt; text-align: center; padding: 0px; margin: 0px; line-height: 22px; width: 100%; text-transform:uppercase; margin-bottom:15px;">Temperament influences everything you do, including your will, purpose and mode of achieving.</h4>

                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px; margin-bottom: 20px;">Knowing about your temperament will raise your awareness of what you are doing, the impact your behavior has on others and how others perceive you. Once you understand these things, you must decide to control your strengths and weakness or be controlled by them.</p>
            </td>
        </tr>
    </table>

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--negotiator extra ends here-->
<?php } ?>

<!--page22 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #b3cad9; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Next Steps</h3>
                </div>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 40px; margin-right: 40px; display: inline-block; padding-left: 60px; padding-right: 50px; padding-top: 350px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top: 65px;color:#231f20;">
                <h2 style="font-size: 30pt; margin: 0px; padding: 0px; line-height: 35px;text-transform:uppercase;">Next</h2>
                <h2 style="font-size: 75pt; margin: 0px; padding: 0px;text-transform:uppercase;">Steps</h2>
            </td>
        </tr>
        <tr>
            <td align="left" style="padding-top: 380px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page22 ends here-->


<!--page23 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #b3cad9; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Next Steps</h3>
                </div>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 25px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:10px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Questions for Reflection & Growth</h2>
            </td>
        </tr>
    </table>
    
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; padding-bottom: 40px;margin-top: 10px; margin-bottom: 10px;" cellpadding=" 0" cellspacing="0">        
        <tr>
            <td align="left" style="width: 100%; display: inline-block;">
			    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding: 0px; padding-top: 0px; margin-top: 0px; padding-bottom: 5px; padding-right: 0px; padding-left: 0px;" cellpadding="0" cellspacing="0">
				     <tr>
                        <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px;margin-top: 5px;">1.</p>
                        </td>
                        <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                           <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;">
                        What are three strengths that you appreciate the most about yourself?
                            </p>
                        </td>
                    </tr>
                </table>
			    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding: 0px; padding-top: 0px; margin-top: 30px; padding-bottom: 5px; padding-right: 0px; padding-left: 20px;" cellpadding="0" cellspacing="0">
				    <tr>
                       <td style="width: 100%; display: inline-block; padding-bottom:35px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
                
				    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:35px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
				    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:5px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
                </table>

			    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding: 0px; padding-top: 0px; margin-top: 12px; padding-bottom: 5px; padding-right: 0px; padding-left: 0px;" cellpadding="0" cellspacing="0">
				    <tr>
                        <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px;margin-top: 5px;">2.</p>
                        </td>
                        <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;">
                                How can expressing these strengths in a controlled manner help you be more effective?
                            </p>
                        </td>
                    </tr>
                </table>

                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding: 0px; padding-top: 0px; margin-top: 30px; padding-bottom: 5px; padding-right: 0px; padding-left: 20px;" cellpadding="0" cellspacing="0">
				    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:35px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
                
				    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:35px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
				    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:5px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
                </table>
			   
			    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding: 0px; padding-top: 0px; margin-top: 12px; padding-bottom: 5px; padding-right: 0px; padding-left: 0px;" cellpadding="0" cellspacing="0">
				    <tr>
                        <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px;margin-top: 5px;">3.</p>
                        </td>
                        <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;">
                                What are three weaknesses that you would like to control and overcome?
                            </p>
                        </td>
                    </tr>
                </table>

			    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding: 0px; padding-top: 0px; margin-top: 30px; padding-bottom: 5px; padding-right: 0px; padding-left: 20px;" cellpadding="0" cellspacing="0">
				    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:35px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
                
				    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:35px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
				    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:5px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
                </table>
			   
			    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding: 0px; padding-top: 0px; margin-top: 12px; padding-bottom: 5px; padding-right: 0px; padding-left: 0px;" cellpadding="0" cellspacing="0">
				    <tr>
                        <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px;margin-top: 5px;">4.</p>
                        </td>
                        <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;">
                                How do these weaknesses interfere with your effectiveness in your daily life?
                            </p>
                        </td>
                    </tr>
                </table>

                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding: 0px; padding-top: 0px; margin-top: 30px; padding-bottom: 5px; padding-right: 0px; padding-left: 20px;" cellpadding="0" cellspacing="0">
				    <tr>
                       <td style="width: 100%; display: inline-block; padding-bottom:35px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
                
				    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:35px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
				    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:5px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
                </table>
			   
			   
			    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding: 0px; padding-top: 0px; margin-top: 12px; padding-bottom: 5px; padding-right: 0px; padding-left: 0px;" cellpadding="0" cellspacing="0">
				    <tr>
                        <td align="left" style="width:3%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px;margin-top: 5px;">5.</p>
                        </td>
                        <td style="width: 97%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;">
                                What difference would it make if you developed a plan to address and control these weaknesses?
                            </p>
                        </td>
                    </tr>
                </table>

                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding: 0px; padding-top: 0px; margin-top: 30px; padding-bottom: 5px; padding-right: 0px; padding-left: 20px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:35px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:35px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 100%; display: inline-block; padding-bottom:5px;margin:0px;border-top: 1px solid #000000;">
                            <p style="color: #000000; font-size: 12pt; margin: 0px; line-height: 21px; margin-bottom: 0px; margin-top: 5px; text-align: left;"></p>
                        </td>
                    </tr>
                </table>
			</td>
        </tr>					
	</table>

	<table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:30px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page23 ends here-->


<!--page24 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #b3cad9; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Next Steps</h3>
                </div>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 25px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:25px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Continue Your Journey</h2>
            </td>
        </tr>
    
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding: 0px; margin: 0px; padding-bottom:10px;">
                <p style="color: #231f20; font-size: 13pt; margin: 0px; line-height: 24px;font-family: 'proxima_novabold';"><span style="color: #231f20;"><?=$participant_first_name?>,</span> what’s your plan?</p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 18px; margin-bottom: 0px; margin-top: 10px; text-align: left;">
                   Different people have different plans for how to effectively move ahead in their journey. 
                </p>
            </td>
        </tr>
    </table>

    <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-top: 40px; display: inline-block; padding-left: 80px; padding-right: 120px; padding-top:20px; padding-bottom: 40px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width: 650px; display: inline-block; padding: 0px; margin: 0px; ">
                <h4 style="color: #231f20; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 20px; margin-top: 20px; margin-bottom: 30px; text-align: left; width: 100%;text-transform: uppercase;">Here are three steps for you to consider:</h4>
            </td>
        </tr>

        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:40px;">
                <table style="width: 620px; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding:0px;margin-top: 0px; margin-bottom: 0px; padding-bottom: 0; padding-top: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="left" style="width:14px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px;"><b>1.</b></p>
                        </td>
                        <td style="width: 605px; display: inline-block; padding-top:0px;margin:0px;">
                            <h4 style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 20px; margin-bottom: 15px; margin-top: 0px; text-align: left; width: 100%;">Apply the information you have learned in this report.</h4>
                            <p style="color: #231f20; font-size: 13pt; margin: 0px; line-height: 22px; margin-bottom: 0px; margin-top: 0px; text-align: left;">
                               Some helpful resources are included in this “Next Steps” section as well as in the “Additional Resources” to help you live with a greater understanding of your design, your temperament-based needs, and how your temperament is expressed. 
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:40px;">
                <table style="width: 620px; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding:0px;margin-top: 0px; margin-bottom: 0px; padding-bottom: 0; padding-top: 30px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="left" style="width:14px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px;"><b>2.</b></p>
                        </td>
                        <td style="width: 605px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 13pt; margin: 0px; line-height: 22px; margin-bottom: 0px; margin-top: 0px; text-align: left;">
                            <p style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 24px; margin-bottom: 10px; margin-top: 0px; text-align: left; width: 100%;"><b>Enroll in our brand-new online course: “7 Steps to Unlock Your Strengths.”  </b> You’ll discover how to practically apply what you’ve learned in this DISCOVERY REPORT in order to play to your strengths, remove roadblocks to your success, and live more fulfilled in life, both personally and professionally.</p>

                            <p style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 24px; margin-bottom: 10px; margin-top: 10px; text-align: left; width: 100%;">Visit:<span style="font-family: 'proxima_novabold';color:#00aeef;"> <a style="color:#00aeef; text-decoration:none;" href="<?=get_settings_option('home')?>/7steps" target="_blank"><?=get_settings_option('home')?>/7steps</a></span></p>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:40px;">
                <table style="width: 620px; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; margin-right: 0px; padding:0px;margin-top: 0px; margin-bottom: 0px; padding-bottom: 0; padding-top: 30px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="left" style="width:14px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px;"><b>3.</b></p>
                        </td>
                        <td style="width: 605px; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 13pt; margin: 0px; line-height: 22px; margin-bottom: 0px; margin-top: 0px; text-align: left;">
                            <p style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 24px; margin-bottom: 10px; margin-top: 0px; text-align: left; width: 100%;"><b>Talk with one of our temperament coaches</b> and, together, create a personalized plan that helps you better understand yourself and how to achieve your goals. </p>

                            <p style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 24px; margin-bottom: 10px; margin-top: 10px; text-align: left; width: 100%;">Visit:<span style="font-family: 'proxima_novabold';color:#00aeef;"> <a style="color:#00aeef; text-decoration:none;" href="<?=get_settings_option('home')?>/coach" target="_blank"><?=get_settings_option('home')?>/coach</a></span></p>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>
    <table style="width:618px; display: inline-block; margin: 0px; padding: 0px; margin-left: 85px; margin-right: 60px; padding: 0px; background: #fff; margin-top: 0px;margin-bottom: 0px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:210px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>

</div>
<!--page24 starts here-->


<!--page25 starts here-->
<div class="" style="height: 1000px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 0px; padding-left: 80px; background: #f0f4f7; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="width:15%;display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 150px; background: #f6f282; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #942663; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Your Results</h3>
                </div>
            </td>
            <td align="left" style="width:35%; display: inline-block; padding: 0px; margin: 0px; padding-left: 20px; padding-top: 10px;">
                <h4 style="font-size: 14pt; margin: 0px; padding: 0px; margin-bottom: 0px; margin-top: 26px padding-left: 20px; text-transform:uppercase;"><?=$the_report_pattern?></h4>
            </td>
            <td style="width:50%; display:inline-block;" align="center">
                <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-right: 0px; display: inline-block; padding-left: 0px; padding-right: 0px; padding-top: 15px;" align="center">
                    <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;text-align:center;">
                        <td align="center" style="width:50px;">
                            <?php if($Top_one == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#633319;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f26868; ">
                                        <h4 class="text-center" style="color:#992253;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f26868; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#1c211f;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#1c211f;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_one == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#123f67;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #68ba4b; ">
                                        <h4 class="text-center" style="color:#123f67;font-size: 15px;position:relative; top:1px;width:100%;background-color: #68ba4b; padding:0px; margin:10px 0px; "><?=$Top_one_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                        <td align="center" style="width:5px;"> </td>
                        <td align="center" style="width:50px;">
                            <?php if($Top_two == "D"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#E8F2FD;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #f16869; ">
                                        <h4 class="text-center" style="color:#E8F2FD;font-size: 15px;position:relative; top:1px;width:100%;background-color: #f16869; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "I"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#6b3c23;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #faed85; ">
                                        <h4 class="text-center" style="color:#6b3c23;font-size: 15px;position:relative; top:1px;width:100%;background-color: #faed85; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "S"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#16191a;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #aed2e0; ">
                                        <h4 class="text-center" style="color:#16191a;font-size: 15px;position:relative; top:1px;width:100%;background-color: #aed2e0; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php }else if($Top_two == "C"){ ?>
                                <div style="border: 1px solid #000000; padding:3px;padding-top:2px; width:100%; display:inline-block;margin-left:-17px;">
                                    <div class="text-center" style="color:#084060;height:40px;position:relative; top:0px; display: block; left:-21.45px;  width:100%;background-color: #65BE4B; ">
                                        <h4 class="text-center" style="color:#084060;font-size: 15px;position:relative; top:1px;width:100%;background-color: #65BE4B; padding:0px; margin:10px 0px;"><?=$Top_two_label?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 15px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:10px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Conclusion</h2>
            </td>
        </tr>

        <tr>
            <td align="left" style="width: 85%; display: inline-block;">
                <p style="color: #231f20; font-size: 15pt; margin: 0px; line-height: 24px;font-family: 'proxima_novabold';margin-top:15px;">
                    <b style="color: #231f20;"><?=$participant_first_name?>,</b> congratulations on completing your report!
                </p>
            </td>
        </tr>

    </table>

    
    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 140px; margin-top:20px; background: #f0f4f7;padding-top:20px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; margin: 0px; padding:0; padding-bottom:15px;">
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 24px;margin-top: 16px;">We hope you discovered more about yourself in this report and what drives and motivates you. <b> This <span style="font-family:'proxima_nova_b_i'; color:#000000;">DISCOVERY REPORT</span> is just the beginning of a wonderful journey of discovering who you really are, playing to your strengths, and overcoming your weaknesses.</b> Remember, you are uniquely designed to do certain things well.</p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 24px;margin-top: 16px;">After reviewing your report, you should have a good idea of where you are doing your best, and some areas where you need to do some work.</p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 24px;margin-top: 16px;"> <b>It’s important to develop an actionable plan as you move forward in your journey so that you can measure success, identify areas of continued growth, and reach your full potential.</b> </p>
            </td>
        </tr>        

        <tr>
            <td align="left" style="width:100%; display: inline-block; margin: 0px; padding:0; padding-bottom:20px;">
                <div style="background: #b2cad9; margin-top:15px; padding:20px 30px;">
                    <p style="font-family:'proxima_novabold'; text-align:left; color: #fff; font-size: 13pt; margin: 0px; line-height: 22px; display:inline-block;">There are many factors that make up the total personality of a person. Temperament is only one of the many parts.</p>
                </div>
            </td>
        </tr>
    </table>
    
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; padding:0px; background: #fff; margin-top: 15px; margin-bottom: 0px; padding-bottom: 10px; padding-top: 0px;" cellpadding=" 0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block;">
                <p style=" width: 100%; display: inline-block;color: #000000; font-family: 'proxima_nova_light'; font-size: 14pt; line-height: 23px; margin: 0px; margin-bottom: 20px; padding: 0px;">
                    <img style="width:13px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/v2/page-16-arrow.png" />
                <p style="color:#000000;margin-top: -70px; line-height: 24px; padding-left:28px; padding-top: 15px; width: 100%; display: inline-block; ">
                    Temperament knowledge is to life what oil is to a machine... it makes it run smoother!
                </p>
                </p>
            </td>
        </tr>

        <?php // apply_filters('mytemp_pdf_report_conclusion_page_bottom', $participant_id); ?>
    </table>

    
    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page25 starts here-->

<!--page26 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr style="width: 100%; display: inline-block; margin: 0px; padding: 0px;">
            <td align="left" style="display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 250px; background: #66bd4d; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Additional Resources</h3>
                </div>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; margin-left: 40px; margin-right: 40px; display: inline-block; padding-left: 60px; padding-right: 50px; padding-top: 350px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top: 65px;color:#231f20;">
                <h2 style="font-size: 30pt; margin: 0px; padding: 0px; line-height: 35px;text-transform:uppercase;">Additional</h2>
                <h2 style="font-size: 75pt; margin: 0px; padding: 0px;text-transform:uppercase;">Resources</h2>
            </td>
        </tr>
        <tr>
            <td align="left" style="padding-top: 380px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page26 ends here-->

<!--page27 ends here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 250px; background: #66bd4d; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Additional Resources</h3>
                </div>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 15px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:10px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Temperament Assessment Results</h2>
            </td>
        </tr>

        <tr>
            <td style="width: 85%; display: inline-block;">
                <img style="width: 650px; text-align:center;margin-bottom:20px;" src="<?=get_assessment_chart_image($assessment->assessment_id, '', 'dirpath')?>">
            </td>
        </tr>

        <tr style="width:100%; display:inline-block;">
			<td style="width:100%; display:inline-block; padding:0px 30px;" align="center">
				<hr style="border-top: 3px solid #186680; color: #186680;">
				<h1 style="font-size:18pt;word-break: break-all; margin-top:8px;margin-bottom:8px; line-height:18pt;" align="center"><?= $participant_first_name?>, based on your selections, you scored as<br/><?=$the_report_pattern?><br/>(<?=$first_content."-".$sec_content?>)</h1>
				<hr style=" border-bottom: 3px solid #186680; color: #186680; margin-bottom:0px;"> 
			</td>
		</tr>
    
		<tr>
			<td style="width:85%; display:inline-block;" align="center">
				<p style="width:80%;color: #555655;font-family: 'proxima_novaregular';font-size: 12pt;line-height: 20px; margin-top:0px;margin-bottom:8px;padding:0px 8px; text-align:center; padding-top:10px;">The graphs above represent your self-assessment of your behavior. This information does not represent your character, nor should it be used for that purpose. The three graphs above suggest the following:</p>
			</td>
		</tr>
		<tr>
			<td style="width:85%; display:inline-block;" align="center"> <img style="width: 700px; text-align:center;margin-bottom:20px; margin-top:15px;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/graph-image-002.png"> </td>
		</tr>
        <tr>
            <td align="left" style="width:85%; display: inline-block; margin: 0px; padding:0; padding-right:50px;">
                <div style="background: #b2cad9; margin-top:10px; padding:20px 30px;">
                    <p style="font-family:'proxima_novabold'; text-align:left; color: #fff; font-size: 13pt; margin: 0px; line-height: 22px; display:inline-block;">
                        If you'd like to learn more about the graphs or your report, <a href="mailto:support@fourtemperament.com" style="font-family:'proxima_nova_b_i'; color:#fff;">click here</a> to schedule a session with our experienced coaches.
                    </p>
                </div>
            </td>
        </tr>
	</table>
</div>
<!--page27 ends here-->

<!--page28 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 15px;background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 250px; background: #66bd4d; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Additional Resources</h3>
                </div>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 10px; margin-bottom: 10px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:0px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 36px; margin-top: 0px; text-align: left; width: 80%; text-transform:uppercase;">Words you selected from the<br/>MyTemperament™ Assessment</h2>
            </td>
        </tr>
        <tr>
			<td>
				<table style="width:100%;margin-top:0px;">
					<tr>
						<td style="width:100%; display:inline-block; padding:10px 0px;" align="left">
							<div style="background-color:#f26868;">
								<h2 style="color:#9a2253; text-transform:uppercase; text-align:center;padding:5px; margin:6px 0px;"> Choleric </h2> 
							</div>
							<table style="background-color:#fee9e2;width:100%; padding:0px 10px; margin-top:5px;">
								<tr>
									<td style="width:50%; display:inline-block;" align="left">
										<div style="float:left; width:100%;display:block;">
											<h4 style=" color:#000; text-align:left;margin:0px; padding:0px;margin-bottom:5px;">Most words</h4>
											<?php if(!empty($dMostChoices)): ?>
												<table style="width:100%; diplay:inline-block;">
												<?php  
                                                $dMostChoices = array_chunk($dMostChoices,2);
												foreach($dMostChoices as $choices){ ?>
													<tr>
													<?php foreach($choices as $choice){ ?>
														<td style="width:48%; display:inline-block;" align="left">
															<p style=" margin:0px; padding-bottom:0px;margin-bottom:5px;color:#555655;font-size: 10pt;line-height: 16px;"> - <?=$choice->title?></p>
														</td>
													<?php } ?>
													</tr>
												<?php } ?>
												</table>
											<?php endif; ?>
										</div>
									</td>
									<td style="width:50%; display:inline-block;" align="left">
										<div style="float:left; width:100%;display:block;">
											<h4 style=" color:#000; text-align:left;margin:0px; padding:0px;margin-bottom:5px;">Least words</h4>
											<?php if(!empty($dLeastChoices)): ?>
												<table style="width:100%;diplay:inline-block;">
												<?php 
                                                $dLeastChoices = array_chunk($dLeastChoices,2);
												foreach($dLeastChoices as $choices){ ?>
													<tr>
													<?php foreach($choices as $choice){ ?>
														<td style="width:48%; display:inline-block;" align="left">
															<p style=" margin:0px; padding-bottom:0px;margin-bottom:5px;color:#555655;font-size: 10pt;line-height: 16px;"> - <?=$choice->title?></p>
														</td>
														<?php if(count($choices) ==1 ){ ?>
															<td style="width:48%; display:inline-block;" align="left">&nbsp;</td>
														<?php } ?>
													<?php } ?>
													</tr>
												<?php } ?>
												</table>
											<?php endif; ?>
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				
					<tr>
						<td style="width:100%; display:inline-block; padding:10px 0px;" align="left">
							<div style="background-color:#fdeb86; margin-top:5px;">
								<h2 style="color:#6e4120; text-transform:uppercase; text-align:center;padding:5px; margin:6px 0px;"> Sanguine </h2> 
							</div>
							
							<table style="background-color:#fcf5e3;width:100%; padding:0px 10px; margin-top:5px;">
								<tr>
									<td style="width:50%; display:inline-block;" align="left">
										<div style="">
											<h4 style=" color:#000; text-align:left;margin:0px; padding:0px;margin-bottom:5px;">Most words</h4>
											<?php if(!empty($iMostChoices)): ?>
												<table style="width:100%; display:inline-block;">
												<?php  
												$iMostChoices= array_chunk($iMostChoices,2);												
												foreach($iMostChoices as $choices){ ?>
													<tr style="width:100%; display:inline-block;">
													<?php foreach($choices as $choice){ ?>
														<td style="width:50%; float:left;display:inline-block;">
															<p style=" margin:0px; padding-bottom:0px;margin-bottom:5px;color:#555655;font-size: 10pt;line-height: 16px;"> - <?=$choice->title?></p>
														</td>
														<?php if(count($choices) ==1 ){ ?>
															<td style="width:50%; float:left;display:inline-block;">&nbsp;</td>
														<?php } ?>
													<?php } ?>
													</tr>
												<?php } ?>
												</table>											
											<?php endif; ?>
										</div>
									</td>
									<td style="width:50%; display:inline-block;" align="left">
										<div style="float:left; width:100%;display:inline-block;">
											<h4 style="color:#000 text-align:left; margin:0px; padding:0px; margin-bottom:5px;">Least words</h4>
											<?php if(!empty($iLeastChoices)): ?>
												<table style="width:100%;diplay:inline-block;">
												<?php  
												$iLeastChoices= array_chunk($iLeastChoices,2);
												foreach($iLeastChoices as $choices){ ?>
													<tr>
													<?php foreach($choices as $choice){ ?>
														<td style="width:50%; float:left;display:inline-block;">
															<p style=" margin:0px; padding-bottom:0px;margin-bottom:5px;color:#555655;font-size: 10pt;line-height: 16px;">- <?=$choice->title?></p>
														</td>
														<?php if(count($choices) ==1 ){ ?>
															<td style="width:50%; float:left;display:inline-block;">&nbsp;</td>
														<?php } ?>
													<?php } ?>
													</tr>
												<?php } ?>
												</table>
											<?php endif; ?>
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					
					<tr>
						<td style="width:100%; display:inline-block; padding:10px 0px;" align="left">
							<div style="background-color:#abcfdc; margin-top:5px;">
								<h2 style="color:#1b1a1a; text-transform:uppercase; text-align:center;padding:5px; margin:6px 0px;"> Phlegmatic </h2> 
							</div>
							
							<table style="background-color:#e8f0f3;width:100%; padding:0px 10px; margin-top:5px;">
								<tr>
									<td style="width:50%; display:inline-block;" align="left">
										<div style="">
											<h4 style=" color:#000; text-align:left;margin:0px; padding:0px;margin-bottom:5px;">Most words</h4>
											<?php if(!empty($sMostChoices)): ?>
												<table style="width:100%; display:inline-block;">
												<?php  
												$sMostChoices= array_chunk($sMostChoices,2);												
												foreach($sMostChoices as $choices){ ?>
													<tr style="width:100%; display:inline-block;">
													<?php foreach($choices as $choice){ ?>
														<td style="width:50%; float:left;display:inline-block;">
															<p style=" margin:0px; padding-bottom:0px;margin-bottom:5px;color:#555655;font-size: 10pt;line-height: 16px;"> - <?=$choice->title?></p>
														</td>
														<?php if(count($choices) ==1 ){ ?>
															<td style="width:50%; float:left;display:inline-block;">&nbsp;</td>
														<?php } ?>
													<?php } ?>
													</tr>
												<?php } ?>
												</table>											
											<?php endif; ?>
										</div>
									</td>
									<td style="width:50%; display:inline-block;" align="left">
										<div style="float:left; width:100%;display:inline-block;">
											<h4 style="color:#000 text-align:left; margin:0px; padding:0px; margin-bottom:5px;">Least words</h4>
											<?php if(!empty($sLeastChoices)): ?>
												<table style="width:100%;diplay:inline-block;">
												<?php  
												$sLeastChoices= array_chunk($sLeastChoices,2);
												foreach($sLeastChoices as $choices){ ?>
													<tr>
													<?php foreach($choices as $choice){ ?>
														<td style="width:50%; float:left;display:inline-block;">
															<p style=" margin:0px; padding-bottom:0px;margin-bottom:5px;color:#555655;font-size: 10pt;line-height: 16px;">- <?=$choice->title?></p>
														</td>
														<?php if(count($choices) ==1 ){ ?>
															<td style="width:50%; float:left;display:inline-block;">&nbsp;</td>
														<?php } ?>
													<?php } ?>
													</tr>
												<?php } ?>
												</table>
											<?php endif; ?>
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td style="width:100%; display:inline-block; padding:10px 0px;" align="left">
							<div style="background-color:#68bd4d; margin-top:5px;">
								<h2 style="color:#17405f; text-transform:uppercase; text-align:center;padding:5px; margin:5px 0px;"> Melancholy </h2> 
							</div>
							
							<table style="background-color:#e5f3e8;width:100%; padding:0px 10px; margin-top:5px;">
								<tr>
									<td style="width:50%; display:inline-block;" align="left">
										<div style="">
											<h4 style="color:#000; text-align:left;margin:0px; padding:0px;margin-bottom:5px;">Most words</h4>
											<?php if(!empty($cMostChoices)): ?>
												<table style="width:100%; display:inline-block;">
												<?php  
												$cMostChoices= array_chunk($cMostChoices,2);												
												foreach($cMostChoices as $choices){ ?>
													<tr style="width:100%; display:inline-block;">
													<?php foreach($choices as $choice){ ?>
														<td style="width:50%; float:left;display:inline-block;">
															<p style=" margin:0px; padding-bottom:0px;margin-bottom:5px;color:#555655;font-size: 10pt;line-height: 16px;"> - <?=$choice->title?></p>
														</td>
														<?php if(count($choices) ==1 ){ ?>
															<td style="width:50%; float:left;display:inline-block;">&nbsp;</td>
														<?php } ?>
													<?php } ?>
													</tr>
												<?php } ?>
												</table>											
											<?php endif; ?>
										</div>
									</td>
									<td style="width:50%; display:inline-block;" align="left">
										<div style="float:left; width:100%;display:inline-block;">
											<h4 style="color:#000 text-align:left; margin:0px; padding:0px; margin-bottom:5px;">Least words</h4>
											<?php if(!empty($cLeastChoices)): ?>
												<table style="width:100%;diplay:inline-block;">
												<?php  
												$cLeastChoices= array_chunk($cLeastChoices,2);
												foreach($cLeastChoices as $choices){ ?>
													<tr>
													<?php foreach($choices as $choice){ ?>
														<td style="width:50%; float:left;display:inline-block;">
															<p style=" margin:0px; padding-bottom:0px;margin-bottom:5px;color:#555655;font-size: 10pt;line-height: 16px;">- <?=$choice->title?></p>
														</td>
														<?php if(count($choices) ==1 ){ ?>
															<td style="width:50%; float:left;display:inline-block;">&nbsp;</td>
														<?php } ?>
													<?php } ?>
													</tr>
												<?php } ?>
												</table>
											<?php endif; ?>
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>

				</table>
			</td>
		</tr>
    </table>

</div>
<!--page28 ends here-->

<!--page29 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 250px; background: #66bd4d; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Additional Resources</h3>
                </div>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 15px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 85%; display: inline-block; padding-bottom:10px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 36px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Top 10 Temperament Needs<br/>For <?=$particiapnt_name?></h2>
            </td>
        </tr>
        <tr>
            <td align="left" style="width: 100%; display: inline-block;">
                <p style="color: #231f20; font-size: 13pt; margin: 0px; line-height: 24px;margin-top:30px;">
                    <b>First, give yourself permission to meet your own needs, and take the necessary steps to do so.</b>
                </p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 24px;margin-top: 20px;">
                    Then, give the list to those with whom you are in a trusting relationship to let them know you have these natural needs.
                </p>
                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 24px;margin-top: 20px;">
                    Next, discover the temperament needs of those whom you value and decide to meet their temperament needs.
                </p>
            </td>
        </tr>

    </table>

    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 140px; padding-top:45px; margin-top:40px; margin-bottom:50px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; margin: 0px; padding:0; padding-bottom:15px;">
                <h2 class="text-center" style="color: #231f20; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 36px; text-align: left; width: 100%; text-transform:uppercase;">Your Selections from the Temperament Needs Assessment</h2>
            </td>
        </tr>
        <?php if(isset($needsAssessmentChoices->data) && !empty($needsAssessmentChoices->data)): ?>
            <tr>
                <td align="left" style="width: 100%; display: inline-block; margin: 0px; padding:0; padding-bottom:15px;">
                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding="0" cellspacing="0">
                        <?php foreach($needsAssessmentChoices->data as $index=>$needChoice): ?>
                        <tr>
                            <td align="right" style="width:5%; display: inline-block; padding-top:0px;margin:0px; padding-bottom:15px;">
                                <p style="color: #231f20; font-size: 13pt; margin: 0px; line-height: 24px;margin-top: 6px;"><b><?=($index+1)?>.</b></p>
                            </td>
                            <td style="width: 95%; display: inline-block; padding-top:0px;margin:0px;">
                                <p style="color: #231f20; padding-left:10px; font-size: 13pt; margin: 0px; line-height: 24px; margin-bottom: 0px; margin-top: 6px; text-align: left;"><?php echo stripslashes($needChoice->title); ?></p>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </td>
            </tr>
        <?php endif; ?>
    </table>
    
    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page29 ends here-->


<!--page30 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 250px; background: #66bd4d; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Additional Resources</h3>
                </div>
            </td>
        </tr>
    </table>

    
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; padding-bottom: 190px; margin-top: 15px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; padding-bottom:10px;">
                <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">Factors that influence how a Temperament is Expressed</h2>
            </td>
        </tr>
        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:30px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px;"><b>1. </b></p>
                        </td>
                        <td style="width: 96%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px; padding-left:10px;"><b>Proximity </b>(closeness) of the <b style="font-family:'proxima_nova_b_i';">first</b> temperament to the <b style="font-family:'proxima_nova_b_i';">second</b> temperament has the most significant influence on how a temperament combination is expressed in behavior.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td align="left" style="width: 100%; display: inline-block; margin:0; padding:0; padding-left:50px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block;">
                            <p style="color: #231f20; font-size: 14pt; margin: 0px; line-height: 22px;margin-top: 10px;padding-right:5px;">•</p>
                        </td>
                        <td align="left" style="width: 96%; display: inline-block;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 10px;">The <b style="font-family:'proxima_nova_b_i';">closer</b> the <i style="font-family:'proxima_novalightitalic';">second</i> temperament is to the <b style="font-family:'proxima_nova_b_i';">primary</b> temperament, the <b style="font-family:'proxima_nova_b_i';">less</b> the primary temperament tendencies are visible in behavior. <b style="font-family:'proxima_nova_b_i';">More</b> of the <b style="font-family:'proxima_nova_b_i';">secondary</b> tendencies are observable.</p>
                        </td>
                    </tr>
                
                    <tr>
                        <td align="right" style="width:4%; display: inline-block;">
                            <p style="color: #231f20; font-size: 14pt; margin: 0px; line-height: 22px;margin-top: 10px;padding-right:5px;">•</p>
                        </td>
                        <td align="left" style="width:96%; display: inline-block;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 10px;">When there is a <b style="font-family:'proxima_nova_b_i';">moderate</b> separation between the <b style="font-family:'proxima_nova_b_i';">primary</b> and <b style="font-family:'proxima_nova_b_i';">secondary</b> temperaments, <b style="font-family:'proxima_nova_b_i';">both</b> are visible in a person’s normal behavior.</p>
                        </td>
                    </tr>
                
                    <tr>
                        <td align="right" style="width:4%; display: inline-block;">
                            <p style="color: #231f20; font-size: 14pt; margin: 0px; line-height: 22px;margin-top: 10px;padding-right:5px;">•</p>
                        </td>
                        <td align="left" style="width: 96%; display: inline-block;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 10px;">The <b style="font-family:'proxima_nova_b_i';">greater</b> the distance between the second temperament to the primary temperament, the <b style="font-family:'proxima_nova_b_i';">fewer</b> of the secondary tendencies are visible in behavior.</p>
                        </td>
                    </tr>
                
                    <tr>
                        <td align="right" style="width:4%; display: inline-block;">
                            <p style="color: #231f20; font-size: 14pt; margin: 0px; line-height: 22px;margin-top: 10px;padding-right:5px; ">•</p>
                        </td>
                        <td align="left" style="width: 96%; display: inline-block;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 10px;"> The primary temperament will be more <b style="font-family:'proxima_nova_b_i';">intensely</b> expressed the <b style="font-family:'proxima_nova_b_i';">greater</b> the separation from the second temperament.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:20px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px;"><b>2. </b></p>
                        </td>
                        <td style="width: 96%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px; padding-left:10px;"><b>Blending</b> refers to the <b style="font-family:'proxima_nova_b_i';">mixing</b> together of the natural tendencies from all four temperaments, especially the first and second temperaments. <i style="font-family:'proxima_novalightitalic';">More</i> traits of one temperament and <i style="font-family:'proxima_novalightitalic';">fewer</i> traits of another temperament changes how that particular combination is expressed in behavior.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:20px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px;"><b>3. </b></p>
                        </td>
                        <td style="width: 96%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px; padding-left:10px;"><b>The third and fourth</b> temperament alignment will have some influence on behavior in varying degrees. That is, which temperament is <i style="font-family:'proxima_novalightitalic';">third</i> and which temperament is <i style="font-family:'proxima_novalightitalic';">fourth</i> will influence behavior.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:20px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px;"><b>4. </b></p>
                        </td>
                        <td style="width: 96%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px; padding-left:10px;"><b>Self-control.</b> The difference in behavior may be explained by the <b style="font-family:'proxima_nova_b_i';">choices</b> you make to <i style="font-family:'proxima_novalightitalic';">use</i> your natural strengths and <i style="font-family:'proxima_novalightitalic';">overcome</i> your natural weaknesses.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:20px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px;"><b>5. </b></p>
                        </td>
                        <td style="width: 96%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px; padding-left:10px;"><b>Heart attitude.</b> The degree to which you are <b style="font-family:'proxima_nova_b_i';">motivated</b> to use your natural strengths and <i style="font-family:'proxima_novalightitalic';">overcome</i> your natural weaknesses influences your behavior.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:20px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px;"><b>6. </b></p>
                        </td>
                        <td style="width: 96%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px; padding-left:10px;"><b>Work ethic.</b> The degree to which you <b style="font-family:'proxima_nova_b_i';">apply</b> your natural tendencies to accomplish a task influences how you use your natural temperament tendencies.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page30 ends here-->



<!--page31 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width:100%; display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 250px; background: #66bd4d; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Additional Resources</h3>
                </div>
            </td>
        </tr>
    </table>

    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; padding-bottom: 150px; margin-top: 15px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:0px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 35px;"><b>7. </b></p>
                        </td>
                        <td style="width: 96%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 35px; padding-left:10px;"><b>Cultural Customs</b> may mask one’s natural tendencies; for example, some cultures de-emphasize assertive behavior.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:40px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px;"><b>8. </b></p>
                        </td>
                        <td style="width: 96%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px; padding-left:10px;"><b>Influence</b> from others can <i style="font-family:'proxima_novalightitalic';">positively</i> or <i style="font-family:'proxima_novalightitalic';">negatively</i> impact the choices you make to <i style="font-family:'proxima_novalightitalic';">use</i> your natural strengths and <i style="font-family:'proxima_novalightitalic';">overcome</i> your natural weaknesses.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:40px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px;"><b>9. </b></p>
                        </td>
                        <td style="width: 96%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px; padding-left:10px;"><b>Life events</b> can <i style="font-family:'proxima_novalightitalic';">temporarily</i> change the way you express your natural temperament combination.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
		<tr>
            <td align="left" style="width: 100%; display: inline-block; padding-left:50px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="left" style="width: 97%; display: inline-block;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 15px; padding-left:10px;">Circumstances can temporarily move you out of your usual, comfortable way of feeling and behaving. Dr. William M. Marston states the following in Emotions of Normal People (1928, p.12): “I do not regard you as a normal person, emotionally, when you are suffering from fear, rage, pain, shock, desire to deceive, or any other emotional state whatsoever containing turmoil and conflict. Your emotional responses are normal when they produce pleasantness and harmony.”</p>
                        
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 15px; padding-left:10px;">We may also <i style="font-family:'proxima_novalightitalic';">choose</i> to alter our behavior temporarily to meet a perceived need when, for example, we go to a social gathering, a job interview, or when we meet someone new, etc. We may <i style="font-family:'proxima_novalightitalic';">choose</i> to be more or less friendly or more or less assertive, depending on what we think the situation requires.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
		
        <tr>
            <td align="left" style="width: 100%; display: inline-block;  padding: 0px; margin: 0px; margin-top:40px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px;"><b>10. </b></p>
                        </td>
                        <td style="width: 96%; display: inline-block; padding-top:0px;margin:0px;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px; padding-left:10px;"><b>Medication</b> (psychotropic and possibly other drugs) can temporarily alter the expression of a temperament combination or for more extended periods. Psychotropic medications are tranquilizers that subdue the expression of emotions which changes a person’s normal feeling state.</p>
                        
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 15px; padding-left:10px;">Three levels of behavior will be identified on the following pages. Consider which level best describes your behavior as you read through the rest of the report.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

		<tr>
            <td align="left" style="width: 100%; display: inline-block; margin:0; padding:0; padding-left:50px;">
                <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                    <tr>
                        <td align="right" style="width:4%; display: inline-block;">
                            <p style="color: #231f20; font-size: 14pt; margin: 0px; line-height: 22px;margin-top: 10px;padding-right:5px;">•</p>
                        </td>
                        <td align="left" style="width: 96%; display: inline-block;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 15px;">Level <i style="font-family:'proxima_novalightitalic';">one</i> behavior represents a <b>close proximity</b> of the second temperament to the first.</p>
                        </td>
                    </tr>
                
                    <tr>
                        <td align="right" style="width:4%; display: inline-block;">
                            <p style="color: #231f20; font-size: 14pt; margin: 0px; line-height: 22px;margin-top: 10px;padding-right:5px;">•</p>
                        </td>
                        <td align="left" style="width: 96%; display: inline-block;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 15px;">Level <i style="font-family:'proxima_novalightitalic';">two</i> behavior represents a <b>moderate (classic) spread</b> between the first temperament and the second.</p>
                        </td>
                    </tr>
                
                    <tr>
                        <td align="right" style="width:4%; display: inline-block;">
                            <p style="color: #231f20; font-size: 14pt; margin: 0px; line-height: 22px;margin-top: 10px;padding-right:5px;">•</p>
                        </td>
                        <td align="left" style="width: 96%; display: inline-block;">
                            <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 15px;">Level <i style="font-family:'proxima_novalightitalic';">three</i> behavior represents a <b>widespread (distance)</b> between the first and the second temperament.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page31 end here-->


<!--page32 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 250px; background: #66bd4d; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Additional Resources</h3>
                </div>
            </td>
        </tr>
    </table>

    
    
        <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; padding-bottom: 20px; margin-top: 15px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 100%; display: inline-block; padding-bottom:10px;">
                    <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 30px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">The Different Expressions of <?=$the_report_pattern?></h2>
                </td>
            </tr>
            <tr>
                <td align="left" style="width: 100%; display: inline-block;">
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 15px;">
                        <b>This report represents the normal and natural behavior of the <?=$report_pattern?>.</b> However, some variables cause differences in the way this combination is expressed in individual behavior. Since people are infinitely complex, no two individuals are the same, even with the same temperament combination.
                    </p>
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 25px;">
                    These are three major expressions of the <?=$report_pattern?> behavioral pattern listed below. Remember, the <?=$report_pattern?>, in all three levels (expressions), will drive themselves and others to get quick results.
                    </p>
                </td>
            </tr>
        </table>

        <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 60px; padding-bottom: 25px; padding-top: 25px; margin-top:50px; background: #f0f4f7;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width:100%; display: inline-block; margin: 0px; padding-bottom: 20px;">
                    <h4 style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 20px; margin-top: 20px; margin-bottom: 10px; text-transform:uppercase;">Level 1</h4>
                </td>
            </tr>

            <tr>
                <td align="left" style="width: 100%; display: inline-block;">
                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                        <tr>
                            <td align="left" style="width: 70%; display: inline-block;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px; padding-right:10px;">
                                Represents a <b>narrow</b> proximity of the Sanguine to the Choleric. The closer these two temperaments are to each other, the more competition there is between the two for expression. When very close, the secondary Sanguine traits are clearly observable in behavior. The closeness of the Sanguine tendencies will speed up (intensify) the expression of the Choleric tendencies.
                                </p>
                            </td>
                            <td align="right" style="width: 30%; display: inline-block;">
                                <img style="width:100%; text-align: right;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/<?=$Top_one.$Top_two?>-1.jpg" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="left" style="width: 100%; display: inline-block; padding-bottom:25px;">
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 10px; padding-right:0px;">
                        This person will be more open and friendly. They will be more socially active than the other Choleric combinations and will smile naturally and more frequently. This person will be able to inspire and motivate others to take action easily. They will frequently seek to influence others in a social setting. They can be very charming and will have a powerful and sometimes overwhelming presence.
                    </p>
                </td>
            </tr>
        </table>  
    
</div>
<!--page32 ends here-->


<!--page33 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width:100%; display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 250px; background: #66bd4d; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Additional Resources</h3>
                </div>
            </td>
        </tr>
    </table>

    
        <table style="width: 100%; margin-left: 0px; margin-right: 0px; margin-left: 0px; margin-top: 35px; display: inline-block; padding-left: 80px; padding-right: 40px; padding-top:0px; padding-bottom: 480px; background: #ffffff;" cellpadding="0" cellspacing="0">

            <tr>
                <td align="left" style="width: 100%; display: inline-block;">
                    <h2 class="text-center" style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 35px; text-align: left; width: 100%;">LEVEL 2</h2>
                </td>
            </tr>

            <tr>
                <td align="left" style="width: 100%; display: inline-block;">
                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                        <tr>
                            <td align="left" style="width: 72%; display: inline-block;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px; padding-right:10px;">
                                Represents a <b style="color: #231f20; font-size: 12pt; line-height: 22px;">moderate</b> (classic) separation of the secondary Sanguine from the primary Choleric. In this alignment, the Sanguine tendencies of friendliness are seen with some but less smiling. The separation between the Choleric and Sanguine allows more of the Choleric tendencies to be expressed. When interacting with others, they will show confidence and command in their voice. They will be brief and direct without offending others.

                                </p>
                            </td>
                            <td align="left" style="width: 28%; display: inline-block;">
                                <img style="width:100%; text-align: right;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/<?=$Top_one.$Top_two?>-2.jpg" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr>
                <td align="left" style="width: 100%; display: inline-block;">
                    <h2 class="text-center" style="color: #231f20; font-size: 13pt; text-align: left; padding: 0px; margin: 0px; line-height: 35px; margin-top: 20px; margin-bottom: 0px; text-align: left; width: 100%;">LEVEL 3</h2>
                </td>
            </tr>

            <tr>
                <td align="left" style="width: 100%; display: inline-block;">
                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                        <tr>
                            <td align="left" style="width: 72%; display: inline-block;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px; padding-right:10px;">
                                    Represents a <b style="color: #231f20; font-size: 12pt; line-height: 22px;">wide</b> separation between the Sanguine from the Choleric. This produces a less sociable person, more driven to get results, and more controlling of others and events. Their facial expression is firmer and more unyielding. The primary Choleric temperament will be more intensely expressed the greater the separation from the Sanguine temperament. The Choleric tendencies of control and Choleric may be overwhelming. They can be very direct!
                                </p>
                            </td>
                            <td align="left" style="width: 28%; display: inline-block;">
                                <img style="width:100%; text-align: right;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/<?=$Top_one.$Top_two?>-3.jpg" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    


    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>

</div>
<!--page33 ends here-->


<!--page34 starts here-->
<div class="" style="height: 1060px; float: left; width: 100%; padding-left: 0px; margin-left: 0px;">
    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; margin-top: 0px; padding-bottom: 20px;background: #f0f4f7;" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="width: 100%; display: inline-block; padding: 0px; margin: 0px;">
                <div style="width: 250px; background: #66bd4d; padding-top: 27px; padding-bottom: 10px; text-align: center;padding-left:10px;padding-right:10px;">
                    <h3 style="color: #0e354e; font-size: 14pt; text-align: center; padding: 0px; margin: 0px; width: 150px;text-transform:uppercase;">Additional Resources</h3>
                </div>
            </td>
        </tr>
    </table>

    
    
        <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; padding-bottom: 20px; margin-top: 15px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 100%; display: inline-block; padding-bottom:10px;">
                    <h2 class="text-center" style="color: #231f20; margin:0px; font-size: 20pt; text-align: left; padding: 0px; margin: 0px; line-height: 34px; margin-top: 0px; text-align: left; width: 100%; text-transform:uppercase;">The Influence of the Third and Fourth Temperaments</h2>
                </td>
            </tr>
            <tr>
                <td align="left" style="width: 100%; display: inline-block;">
                    <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 15px;">
                    <?=$the_report_pattern?> pattern is produced when the Choleric is first and the Sanguine is second. <?=$the_report_pattern?> has a strong resistance to the Sanguine on behavior from the Phlegmatic and the <br/>Melancholy tendencies. There will, therefore, be only slight Sanguine from traits of these two temperaments based on their third and fourth positions.
                    </p>
                </td>
            </tr>
        </table>

        <table style="width: 100%; display: inline-block; margin:0px; padding:0px; padding-left: 80px; padding-right: 40px; padding-top:20px;padding-bottom:240px;" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left" style="width: 100%; display: inline-block; padding-bottom:20px;">
                    <table style="width: 100%; display: inline-block;" cellpadding=" 0" cellspacing="0">
                        <tr>
                            <td align="right" style="width:4%; display: inline-block; padding-left:15px;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px; padding-right:2px;">A.</p>
                            </td>
                            <td align="left" style="width: 68%; display: inline-block;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px; padding-left:10px; padding-right:10px;">
                                    When the Phlegmatic is third, this person will be slightly more steady but less compliant due to the Melancholy being the fourth (and least) tendency. They will firmly resist doing details or planning that is not directly related to getting their desired results.
                                </p>
                            </td>
                            <td align="left" style="width: 28%; display: inline-block;">
                                <img style="width:100%; text-align: right;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/<?=$Top_one.$Top_two?>-4.jpg" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="left" style="width: 100%; display: inline-block; padding-bottom:20px;">
                    <table style="width: 100%; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                        <tr>
                            <td align="right" style="width:4%; display: inline-block; padding-left:15px; ">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px; padding-right:2px;">B.</p>
                            </td>
                            <td align="left" style="width: 68%; display: inline-block;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px; padding-left:10px; padding-right:10px;">
                                    When the Melancholy is third, this person will be slightly more attentive to details, less willing to be loyal to others, and more impulsive due to the Phlegmatic being the fourth (and least) tendency.
                                </p>
                            </td>
                            <td align="left" style="width: 28%; display: inline-block;">
                                <img style="width:100%; text-align: right;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/<?=$Top_one.$Top_two?>-5.jpg" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td align="left" style="width: 100%; display: inline-block;">
                    <table style="width: 620px; display: inline-block; margin: 0px; padding: 0px;" cellpadding=" 0" cellspacing="0">
                        <tr>
                            <td align="left" style="width: 100%; display: inline-block;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 0px; padding-right:0px;">
                                    <b>Remember</b>
                                </p>
                            </td>

                        </tr>
                        <tr>
                            <td align="left" style="width: 100%; display: inline-block;">
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 15px; padding-right:10px;">
                                    As you read through this report, you may find a natural weakness that you have worked to control/overcome, and it is no longer a part of your behavior. It may not represent you now, but if it did at one time, then consider it as part of describing you.
                                </p>
                                <p style="color: #231f20; font-size: 12pt; margin: 0px; line-height: 22px;margin-top: 20px; padding-right:10px;">
                                    The proximity (closeness) of the second temperament, Sanguine, to the primary temperament, Choleric, makes the most significant difference and determines how this combination is expressed in normal, natural behavior.
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    


    <table style="width:100%; display: inline-block; margin: 0px; padding: 0px; padding-left: 80px; padding-right: 40px; " cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" style="padding-top:10px;">
                <img style="width: 230px; text-align: left;" src="<?=MYTEMPERAMENT_PLUGIN_DIR?>/templates/report/images/4T-logo.png" />
            </td>
        </tr>
    </table>
</div>
<!--page34 ends here-->


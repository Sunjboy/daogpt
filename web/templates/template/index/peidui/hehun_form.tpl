<{include file='./index/header.tpl'}>
<link type="text/css" rel="stylesheet" href="<{$web_url}>static/bazi/css/suanming/v2/hehun.css"/>
<div class="wrapper">
    <div class="main">
        <div class="menu_xy">
            <div class="menu_xy_inner">
                <ul class="clearfix">
                    <{include file='./index/public/top_nav.tpl'}>
                </ul>
            </div>
        </div>
        <div class="submenu">
            <{$topic}>
        </div>
<{include file='./index/public/path.tpl'}> 
 <div class="cont">
			<div class="col_left">

				<div class="mod_box_t1 fn_part fn_hehun">
					<div class="hd">
						<h1>八字合婚</h1>
					</div>

					<div class="bd">

						<div class="intro_area">
                      <p>合婚又称"合年命"、"合八字"，古称"卜吉"。八字合婚是中国传统婚配预测方法之一，有着悠久的历史文化渊源；依据传统的八字合婚算命命理，用生辰八字对两人进行八字合婚,合婚算命，预测两人发展结果，防患不幸的婚姻于未燃之际，从而提高婚姻质量。</p>
						</div>

						<div class="mod_box_t3 fn_box">

							<div class="box_con">

								<div class="mod_form">

									<form onSubmit="return chk_bzhh()" method="post" action="<{$web_url}>index.php">
									<input type="hidden" name="ac" value="hehun" />
                                    <input type="hidden" name="ct" value="peidui" />
                                    <input type="hidden" name="tid" value="383" />
                                    

									<div class="form_item">

										<span><img src="<{$web_url}>static/bazi/img/suanming/v2/boy_icon.png" alt="男人" class="item_imgIcon">男方姓名：</span>

										<input class="ipt_text" name="user" id="name2" type="text" />

									</div>

									<div class="form_item">

										出生日期（公历）&nbsp;

										<select class="select" name="year" id="gl2_year" onChange="chage_day('gl2');">

                                        <?php for($i=1930;$i<2014;$i++){ ?>

                                        <?php if($i==2013){$cat='selected="selected"';}else{$cat='';} ?>

                                         <option value="<?=$i?>" <?=$cat?>><?=$i?></option>

                     					<?php } ?>

                      

										</select> 年

										<select class="select" name="month" id="gl2_month" onChange="chage_day('gl2');">

                                        <?php for($i=1;$i<13;$i++){ ?>

                                        <?php if($i==date('m',time())){$cat='selected="selected"';}else{$cat='';} ?>

                                         <option value="<?=$i?>" <?=$cat?>><?=$i?></option>

                     					<?php } ?>

											

										</select> 月

										<select class="select" name="day" id="gl2_day">

										<?php for($i=1;$i<32;$i++){ ?>

                                        <?php if($i==date('d',time())){$cat='selected="selected"';}else{$cat='';} ?>

                                         <option value="<?=$i?>" <?=$cat?>><?=$i?></option>

                     					<?php } ?>

										</select> 日

										<select class="select" name="t_ime" id="hour2">

											 <option value="0">0&nbsp;子</option>
                                                <option value="1">1&nbsp;丑</option>
                                                <option value="2">2&nbsp;丑</option>
                                                <option value="3">3&nbsp;寅</option>
                                                <option value="4">4&nbsp;寅</option>
                                                <option value="5">5&nbsp;卯</option>
                                                <option value="6">6&nbsp;卯</option>
                                                <option value="7">7&nbsp;辰</option>
                                                <option value="8">8&nbsp;辰</option>
                                                <option value="9">9&nbsp;巳</option>
                                                <option value="10">10&nbsp;巳</option>
                                                <option value="11">11&nbsp;午</option>
                                                <option value="12">12&nbsp;午</option>
                                                <option value="13">13&nbsp;未</option>
                                                <option value="14">14&nbsp;未</option>
                                                <option value="15">15&nbsp;申</option>
                                                <option value="16">16&nbsp;申</option>
                                                <option value="17">17&nbsp;酉</option>
                                                <option value="18">18&nbsp;酉</option>
                                                <option value="19">19&nbsp;戌</option>
                                                <option value="20">20&nbsp;戌</option>
                                                <option value="21">21&nbsp;亥</option>
                                                <option value="22">22&nbsp;亥</option>
                                                <option value="23">23&nbsp;子</option>

										</select> 时

										

									</div>

									<div class="form_line"></div>

									<div class="form_item">

										<span><img src="<{$web_url}>static/bazi/img/suanming/v2/girl_icon.png" alt="女人" class="item_imgIcon">女方姓名：</span>

										<input class="ipt_text" name="user_a" id="name" type="text" />

									</div>

									<div class="form_item">

										出生日期（公历）&nbsp;

										<select class="select" name="year_a" id="gl_year" onChange="chage_day('gl');">

                                        <?php for($i=1930;$i<2014;$i++){ ?>

                                        <?php if($i==2013){$cat='selected="selected"';}else{$cat='';} ?>

                                         <option value="<?=$i?>" <?=$cat?>><?=$i?></option>

                     					<?php } ?>

										</select> 年

										<select class="select" name="month_a" id="gl_month" onChange="chage_day('gl');">

											 <?php for($i=1;$i<13;$i++){ ?>

                                        <?php if($i==date('m',time())){$cat='selected="selected"';}else{$cat='';} ?>

                                         <option value="<?=$i?>" <?=$cat?>><?=$i?></option>

                     					<?php } ?>

										</select> 月

										<select class="select" name="day_a" id="gl_day">

										<?php for($i=1;$i<32;$i++){ ?>

                                        <?php if($i==date('d',time())){$cat='selected="selected"';}else{$cat='';} ?>

                                         <option value="<?=$i?>" <?=$cat?>><?=$i?></option>

                     					<?php } ?>

										</select> 日

										<select class="select" name="t_ime_a" id="hour">

											 <option value="0">0&nbsp;子</option>
                                                <option value="1">1&nbsp;丑</option>
                                                <option value="2">2&nbsp;丑</option>
                                                <option value="3">3&nbsp;寅</option>
                                                <option value="4">4&nbsp;寅</option>
                                                <option value="5">5&nbsp;卯</option>
                                                <option value="6">6&nbsp;卯</option>
                                                <option value="7">7&nbsp;辰</option>
                                                <option value="8">8&nbsp;辰</option>
                                                <option value="9">9&nbsp;巳</option>
                                                <option value="10">10&nbsp;巳</option>
                                                <option value="11">11&nbsp;午</option>
                                                <option value="12">12&nbsp;午</option>
                                                <option value="13">13&nbsp;未</option>
                                                <option value="14">14&nbsp;未</option>
                                                <option value="15">15&nbsp;申</option>
                                                <option value="16">16&nbsp;申</option>
                                                <option value="17">17&nbsp;酉</option>
                                                <option value="18">18&nbsp;酉</option>
                                                <option value="19">19&nbsp;戌</option>
                                                <option value="20">20&nbsp;戌</option>
                                                <option value="21">21&nbsp;亥</option>
                                                <option value="22">22&nbsp;亥</option>
                                                <option value="23">23&nbsp;子</option>

										</select> 时

										

									</div>

									<div class="form_item btn_item">

										<button class="btn_orange2" type="submit" id="btn_begincs2">八字合婚</button>

									</div>

									<input name="type" type="hidden" value="6" />

									</form>

								</div>

								<div class="help_area">

									<span class="help_tit"><i></i>相关帮助：</span>

									<a target="_blank" href="<{$web_url}>hdjr/yinyangli/">[农历，公历转换]</a>

								</div>
							</div>
							<i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>

						</div>

					</div>
					<i class="flag_tl_t1"></i><i class="flag_tr_t1"></i><i class="flag_bl_t1"></i><i class="flag_br_t1"></i>
				</div>
                <{include file='./index/public/left_sx.tpl'}>
                </div>
                <div id="col_right" class="col_right">
                <{include file='./index/public/right.tpl'}> 
                    </div>
                </div>
            </div>
        </div>
         <?php   include('templates/public/footer.tpl.php'); ?>  

<{include file='./index/footer.tpl'}>


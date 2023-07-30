<{include file='./index/header.tpl'}>
<link type="text/css" rel="stylesheet" href="<{$web_url}>static/bazi/css/suanming/v2/match.css"/>
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

                        <div class="mod_box_t1 fn_part fn_shengxiao">

                            <div class="hd">

                                <h1>星座血型配对</h1>

                            </div>

                            <div class="bd">
                            
                            <div class="intro_area">

                                    <p>星座血型配对是指根据自己的血型（星座）和恋人的星座（血型）来大致分析下双方的性格特征，并给出两人的速配指数以及性格方面的相关建议和提醒。</p>

                                </div>						

                                <div class="mod_box_t3 fn_box">

                                    <div class="box_con">

                                        <div class="mod_form">

                                            <form method="post" action="<{$web_url}>index.php">
                                            <input type="hidden" name="ac" value="xingzuoxuexing" />
                                            <input type="hidden" name="ct" value="peidui" />
                                            <input type="hidden" name="tid" value="461" />

                                                <div class="form_item">

                                                    <div class="st_outer"><div class="st_inner"><select name="t1">

                                                                <option selected="" value="白羊座">白羊座</option>
                                                                <option value="金牛座">金牛座</option>

                                                                <option value="双子座">双子座</option>

                                                                <option value="巨蟹座">巨蟹座</option>

                                                                <option value="狮子座">狮子座</option>

                                                                <option value="处女座">处女座</option>

                                                                <option value="天秤座">天秤座</option>

                                                                <option value="天蝎座">天蝎座</option>

                                                                <option value="射手座">射手座</option>

                                                                <option value="摩羯座">摩羯座</option>

                                                                <option value="水瓶座">水瓶座</option>

                                                                <option value="双鱼座">双鱼座</option>

                                                            </select></div></div>

                                                    <span class="vs">VS</span>

                                                    <div class="st_outer"><div class="st_inner"><select name="t2">

                                                                <option value="AB型">AB型</option>

                                                                <option value="A型">A型</option>

                                                                <option value="B型">B型</option>

                                                                <option value="O型">O型</option>

                                                            </select></div></div>

                                                   

                                                </div>	

                                                <div class="form_item btn_item">

                                                    <button class="btn_orange2" type="submit" id="btn_begincs2">星座血型配对</button>

                                                   <span class="match_tips"><a target="_blank" href="/shengxiao/">查看生肖运程</a></span>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                    <i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>

                                </div>
                                
                                <{if $t1}>
                                 <div class="match_result">

                                    <dl class="clearfix">

                                        <dt>星座血型：<strong><{$t1}></strong>：<strong><{$t2}></strong></dt>
                                    </dl>

                                    <ul>

                                        <li><{$info.title}></li>

                                        <li></li>

                                        <li><{$info.content}></li>

                                        <li></li>

                                    </ul>

                                </div>

                                <{/if}>

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

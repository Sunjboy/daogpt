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

                                <h1>生肖血型</h1>

                            </div>

                            <div class="bd">
                            
                            <div class="intro_area">

                                    <p>生肖血型配对是指根据自己的生肖（血型）和恋人的血型（生肖）来大致分析下双方的性格特征，并给出两人的速配指数以及性格方面的相关建议和提醒。</p>

                                </div>						

                                <div class="mod_box_t3 fn_box">

                                    <div class="box_con">

                                        <div class="mod_form">

                                            <form method="post" action="<{$web_url}>index.php">
                                            <input type="hidden" name="ac" value="shengxiaoxuexing" />
                                            <input type="hidden" name="ct" value="peidui" />
                                            <input type="hidden" name="tid" value="462" />

                                                <div class="form_item">

                                                    <div class="st_outer"><div class="st_inner"><select name="t1">

                                                                <option selected="" value="鼠">鼠</option>

                                                                <option value="牛">牛</option>

                                                                <option value="虎">虎</option>

                                                                <option value="兔">兔</option>

                                                                <option value="龙">龙</option>

                                                                <option value="蛇">蛇</option>

                                                                <option value="马">马</option>

                                                                <option value="羊">羊</option>

                                                                <option value="猴">猴</option>

                                                                <option value="鸡">鸡</option>

                                                                <option value="狗">狗</option>

                                                                <option value="猪">猪</option>

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

                                                    <button class="btn_orange2" type="submit" id="btn_begincs2">生肖血型配对</button>

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

                                        <dt>生肖血型：<strong><{$t1}></strong>：<strong><{$t2}></strong></dt>
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


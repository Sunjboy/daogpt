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

                                <h1>星座生肖</h1>

                            </div>

                            <div class="bd">
                            
                            <div class="intro_area">

                                    <p>星座于生肖，相信大家一定不会陌生。每个星座、每个生肖都有属于自己的特性，所以我们并不是与所有的星座生肖组合般配，星座与生肖之间又有着怎么样的关系呢？</p>

                                </div>						

                                <div class="mod_box_t3 fn_box">

                                    <div class="box_con">

                                        <div class="mod_form">

                                            <form method="post" action="<{$web_url}>index.php">
                                            <input type="hidden" name="ac" value="xingzuoshengxiao" />
                                            <input type="hidden" name="ct" value="peidui" />
                                            <input type="hidden" name="tid" value="463" />

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

                                                   

                                                </div>	

                                                <div class="form_item btn_item">

                                                    <button class="btn_orange2" type="submit" id="btn_begincs2">星座生肖配对</button>

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

                                        <dt><{$t1}>男生和生肖<{$t2}>女生的缘分</dt>
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


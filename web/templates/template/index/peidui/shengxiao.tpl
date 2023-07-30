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

                                <h1>生肖配对</h1>

                            </div>

                            <div class="bd">
                            
                            <div class="intro_area">

                                    <p>生肖配对是依据古籍中的生肖五行理论衍生而来，属相有鼠、牛、虎、兔、龙、蛇、马、羊、猴、鸡、狗、猪十二种生肖，属相又都是由五行来区分的，生肖五行之间相生相克是如何分配属相配对的呢。生肖配对查询生肖相生的属相配对自然一路花好月圆，属相相克的配对组合就需要披荆斩棘结伴而行。希望了解一下你们的爱情姻缘路？输入你们的生肖属相信息在线速配一下吧。
</p>

                                </div>						

                                <div class="mod_box_t3 fn_box">

                                    <div class="box_con">

                                        <div class="mod_form">

                                            <form method="post" action="<{$web_url}>index.php">
                                            <input type="hidden" name="ac" value="shengxiao" />
                                            <input type="hidden" name="ct" value="peidui" />
                                            <input type="hidden" name="tid" value="386" />

                                                <div class="form_item">

                                                    <div class="st_outer"><div class="st_inner"><select name="sx1">

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

                                                    <div class="st_outer"><div class="st_inner"><select name="sx2">

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

                                                    <button class="btn_orange2" type="submit" id="btn_begincs2">生肖配对</button>

                                                   <span class="match_tips"><a target="_blank" href="/shengxiao/">查看生肖运程</a></span>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                    <i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>

                                </div>
                                
                                <{if $sx1}>
                                 <div class="match_result">

                                    <dl class="clearfix">

                                        <dt>双方生肖：<strong><{$sx1}></strong>：<strong><{$sx2}></strong></dt>
                                    </dl>

                                    <ul>

                                        <li>男鼠＋女鼠：<{$sx.shorttxt}></li>

                                        <li></li>

                                        <li>女鼠＋男鼠：<{$sx.content}></li>

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

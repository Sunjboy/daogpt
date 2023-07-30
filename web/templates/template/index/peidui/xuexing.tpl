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
                        <div class="mod_box_t1 fn_part fn_xuexing">

                            <div class="hd">

                                <h1>血型配对</h1>

                            </div>

                            <div class="bd">	
                            
                            <div class="intro_area">

                                    <p>血型配对，血型会造就情人，不同的血型不同的性格搭配，往往奇妙激荡同一电波；频道相同，当然就极易迸裂爱的火花了。根据有关血型配对的实际调查发现，B型男孩看O型女孩最对眼，A型男孩最容易对B型女孩萌生爱意，而同是O型者，较难产生爱的火焰，通过测试血型配对表查看究竟那个星座血型和你的最配对……</p>

                                </div>					

                                <div class="mod_box_t3 fn_box">

                                    <div class="box_con">

                                        <div class="mod_form">

                                            <form method="post" action="<{$web_url}>index.php">
                                            
                                            <input type="hidden" name="ac" value="xuexing" />
                                            <input type="hidden" name="ct" value="peidui" />
                                            <input type="hidden" name="tid" value="388" />

                                                <div class="form_item">

                                                    <div class="st_outer"><div class="st_inner"><select name="xx1">

                                                                <option value="AB">AB型</option>

                                                                <option value="A">A型</option>

                                                                <option value="B">B型</option>

                                                                <option value="O">O型</option>

                                                            </select></div></div>

                                                    <span class="vs">VS</span>

                                                    <div class="st_outer"><div class="st_inner"><select name="xx2">

                                                                <option value="AB">AB型</option>

                                                                <option value="A">A型</option>

                                                                <option value="B">B型</option>

                                                                <option value="O">O型</option>

                                                            </select></div></div>

                                                </div>	
                                                

                                                <div class="form_item btn_item">

                                                    <button class="btn_orange2" type="submit" id="btn_begincs2">血型配对</button>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                    <i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>

                                </div>

								<{if $xx.shorttxt!=''}>

                                <!---->

                                 <div class="match_result">

                                    <dl class="clearfix">

                                        <dt>双方血型：<strong><{$xx1}></strong>：<strong><{$xx2}></strong></dt>
                                    </dl>

                                    <ul>

                                        <li><{$xx.shorttxt}></li>

                                        <li><{$xx.shorttxt}></li>

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


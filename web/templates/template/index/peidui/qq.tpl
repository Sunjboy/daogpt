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
                        <div class="mod_box_t1 fn_part fn_qq">
                            <div class="hd">
                                <h1>QQ缘分配对</h1>
                            </div>
                            <div class="bd">
                             <div class="intro_area">
                                    <p>QQ号码究竟赋予了我们不一样样的命运，输入QQ号码测试缘分，QQ号码缘分配对两个人又会擦出什么样的火花呢？想知道QQ好友跟我的关系？马上进行这个趣味小测试吧提前揭晓....QQ配对查询，可测算出两人的关系哦。准得有点儿邪哦，快来试试吧。传说中最准的爱情测试，准确率最高达98%，不信您可以试试！</p>
                                </div>
                                <div class="mod_box_t3 fn_box">
                                    <div class="box_con">
                                        <div class="mod_form">
                                            <form action="<{$web_url}>index.php" method="post" onSubmit="return chkPeiDuiForm('qq');">
                                            <input type="hidden" name="ac" value="qq" />
                                            <input type="hidden" name="ct" value="peidui" />
                                            <input type="hidden" name="tid" value="384" />

                                                <div class="form_item">

                                                    <input type="text" name="qq1" id="pd_num1" onKeyUp="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" class="txt" />

                                                    <span class="vs">VS</span>

                                                    <input type="text" name="qq2" id="pd_num2"  onKeyUp="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" class="txt" />

                                                </div>	

                                                <div class="form_item btn_item">

                                                    <button class="btn_orange2" type="submit" id="btn_begincs2">缘分配对</button>

                                                 <span class="match_tips"><a target="_blank" href="/peidui/qq/">QQ号码吉凶查询</a></span>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                    <i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>

                                </div>

								<?php include('cache/gg/haoma_674x60.php'); ?>

                            </div>
                            <{if $qq.qq1}>
                             

                            <div class="match_result">

                            <dl class="clearfix">

                            <dt>双方QQ：<strong><{$qq.qq1}></strong>：<strong><{$qq.qq2}></strong></dt>

                            </dl>
                            <ul>
                            <li>关系揭密：<{$qqqy.intro}></li>

                            </ul>

                            </div>

                            <{/if}>

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


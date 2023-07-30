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
                        <div class="mod_box_t1 fn_part fn_xingming">
                            <div class="hd">
                                <h1>姓名配对关系</h1>
                            </div>

                            <div class="bd">	
                            
                            <div class="intro_area">
                                    <p>姓名配对是根据姓名天格、地格、人格、总格、外格等五格数理关系，神算网爱情测试姓名配对是依据《易经》的姓名三才五格理论爱情测试姓名配对关系高达80%准确，输入双方的姓名通过缘分测试打分并运用阴阳五行相生相克理论，来测试您和对方的爱情测试指数、姓名配对缘分测试、\通过姓名笔划数看看你和爱人的关系究竟怎样</p>

                                </div>					

                                <div class="mod_box_t3 fn_box">

                                    <div class="box_con">

                                        <div class="mod_form">

                                            <form method="post" action="<{$web_url}>index.php">
                                            <input type="hidden" name="ac" value="mingzi" />
                                            <input type="hidden" name="ct" value="peidui" />
                                            <input type="hidden" name="tid" value="387" />

                                                <div class="form_item">

                                                    <input name="xm1" id="pd_num1" value="" class="txt" type="text">

                                                    <span class="vs">VS</span>

                                                    <input name="xm2" id="pd_num2" value="" class="txt" type="text">

                                                </div>	

                                                <div class="form_item btn_item">

                                                    <button class="btn_orange2" type="submit" id="btn_begincs2">姓名配对</button>

                                                   <span class="match_tips"><a target="_blank" href="/peidui/mingzi/">名字分析</a></span>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                    <i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>

                                </div>
                                
                                 <{if $xm1}>

                                  <div class="match_result">

                                    <dl class="clearfix">

                                        <dt>双方姓名：<strong class="cRed"><{$xm1}>：<strong class="cRed"><{$xm2}></strong></dt>																													

                                    </dl>

                                    <ul>

                                        <li>关系揭密：<{$xxxy.intro}></li>

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


<{include file='./index/header.tpl'}>
<link type="text/css" rel="stylesheet" href="<{$web_url}>static/bazi/css/suanming/v2/number.css"/>
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
				<div class="fn_part fn_sfz mod_box_t1">
					<div class="hd">
						<h1>身份证号码吉凶</h1>
					</div>
					<div class="bd">
                    <div class="intro_area">
                     <p>身份证号码吉凶：身份证号码中隐藏着许多不为人知的命运密码，通过合理地解读查看身份证号码好不好，输入身份证查归属地，可以从中了解一个人的性格、事业、财运等一切与命运有关的信息。</p>
                      <p>人们经常随身携带的符号则具有特定的吉凶暗示力。我们的生活几乎不离号码，如身份证号码、身份证号码凶吉预测其实包含有一定的吉凶数理，电话号码测吉凶看结果就像姓名会影响运势命运的意义是一样的</p>
                     </div>
						<div class="mod_box_t3 fn_box">
							<div class="box_con">
								<div class="mod_form">
                                <form action="<{$web_url}>index.php" method="post">
                                    <input type="hidden" name="ac" value="shenfenzheng" />
                                    <input type="hidden" name="ct" value="haoma" />
                                    <input type="hidden" name="tid" value="391" />  
									<input type="text" name="xian" id="shenfenzheng_haoma_num" value="" class="ipt_text"/>
									<button class="btn_orange_1" type="submit">身份证测吉凶</button>
                                    </form>
								</div>
							</div>
							<i class="flag_tl_t3"></i>
							<i class="flag_tr_t3"></i>
							<i class="flag_bl_t3"></i>
							<i class="flag_br_t3"></i>
						</div>
					</div>
                    <{if $xian!='' && $sfz.DQ!=''}>
            <div class="result_area">
                <p><strong>所查号码：</strong><span><{$xian}></span></p>

                 <p><strong>原户籍地：</strong><span><{$sfz.DQ}></span></p>

                <p><strong>性别：</strong><span><{$xb}></span></p>

                <p><{$sfzjie.content}></p>
            </div>
           <{/if}>  
					<i class="flag_tl_t1"></i>
					<i class="flag_tr_t1"></i>
					<i class="flag_bl_t1"></i>
					<i class="flag_br_t1"></i>
				</div>
                <{include file='./index/public/left_sx.tpl'}>
                </div>
                <div id="col_right" class="col_right">
                <{include file='./index/public/right.tpl'}> 
                    </div>
                </div>
            </div>
        </div>  

<{include file='./index/footer.tpl'}>


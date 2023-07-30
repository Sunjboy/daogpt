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
				<div class="fn_haoma fn_part mod_box_t1">
					<div class="hd">
						<h1>号码吉凶</h1>
					</div>
					<div class="bd">
						<div class="mod_box">
							<div class="box_con clearfix">
								<div class="form_item mod_box_t3 form_sj">
									<h3>手机号码吉凶</h3>
									<form name="theform" onSubmit="return checkjx();" method="post" action="<{$web_url}>index.php">
                                    <input type="hidden" name="ct" value="haoma" />
                                    <input type="hidden" name="ac" value="shouji" />
                                    <input type="text" name="word" id="shouji_haoma_num" value="" onKeyUp="value=value.replace(/[^\d]/g,'') " class="ipt_text"/>
                                    <button class="btn_orange_1" onClick="get2Cha('shouji');" type="submit">查询</button>
                                </form>
									<i class="flag_tl_t3"></i>
									<i class="flag_tr_t3"></i>
									<i class="flag_bl_t3"></i>
									<i class="flag_br_t3"></i>
								</div>
								<div class="form_item mod_box_t3 form_dh">
									<h3>电话号码吉凶<em>（无需区号）</em></h3>
									 <form name="theform" onSubmit="return checkjx();" method="post" action="<{$web_url}>index.php">
                                     <input type="hidden" name="ct" value="haoma" />
                                     <input type="hidden" name="ac" value="dianhua" />
                                    <input type="text" name="word" id="shouji_haoma_num" value="" onKeyUp="value=value.replace(/[^\d]/g,'') " class="ipt_text"/>
                                    <button class="btn_orange_1" onClick="get2Cha('dianhua');" type="submit">查询</button>
                                </form>
									<i class="flag_tl_t3"></i>
									<i class="flag_tr_t3"></i>
									<i class="flag_bl_t3"></i>
									<i class="flag_br_t3"></i>
								</div>
								<div class="form_item mod_box_t3 form_cp">
									<h3>车牌号码吉凶</h3>
                                    <form name="theform" onSubmit="return che2Cha('chepai');" method="post" action="<{$web_url}>index.php">
                                    <input type="hidden" name="ct" value="haoma" />
                                     <input type="hidden" name="ac" value="chepai" />
									<div class="st_outer">
										<div class="st_inner">
											<select id="cp_dq" name="dq">
												<option value='京' selected>京</option>
												<option value='津'>津</option>
												<option value='沪'>沪</option>
												<option value='渝'>渝</option>
												<option value='冀'>冀</option>
												<option value='豫'>豫</option>
												<option value='云'>云</option>
												<option value='辽'>辽</option>
												<option value='黑'>黑</option>
												<option value='湘'>湘</option>
												<option value='皖'>皖</option>
												<option value='鲁'>鲁</option>
												<option value='新'>新</option>
												<option value='苏'>苏</option>
												<option value='浙'>浙</option>
												<option value='赣'>赣</option>
												<option value='鄂'>鄂</option>
												<option value='桂'>桂</option>
												<option value='甘'>甘</option>
												<option value='晋'>晋</option>
												<option value='蒙'>蒙</option>
												<option value='陕'>陕</option>
												<option value='吉'>吉</option>
												<option value='闽'>闽</option>
												<option value='贵'>贵</option>
												<option value='粤'>粤</option>
												<option value='青'>青</option>
												<option value='藏'>藏</option>
												<option value='川'>川</option>
												<option value='宁'>宁</option>
												<option value='琼'>琼</option>
											</select>
										</div>
									</div>
									<div class="st_outer">
										<div class="st_inner">
											<select id="cp_zm" name="zm">
												<option value='A' selected>A</option>
												<option value='B'>B</option>
												<option value='C'>C</option>
												<option value='D'>D</option>
												<option value='E'>E</option>
												<option value='F'>F</option>
												<option value='G'>G</option>
												<option value='H'>H</option>
												<option value='I'>I</option>
												<option value='J'>J</option>
												<option value='K'>K</option>
												<option value='L'>L</option>
												<option value='M'>M</option>
												<option value='N'>N</option>
												<option value='O'>O</option>
												<option value='P'>P</option>
												<option value='Q'>Q</option>
												<option value='R'>R</option>
												<option value='S'>S</option>
												<option value='T'>T</option>
												<option value='U'>U</option>
												<option value='V'>V</option>
												<option value='W'>W</option>
												<option value='X'>X</option>
												<option value='Y'>Y</option>
												<option value='Z'>Z</option>
											</select>
										</div>
									</div>
									<input type="text" name="word" id="chepai_haoma_num" style="color:#ccc;" class="ipt_text"/>
                                    <input class="btn_orange_1" type="submit" value="查询">
                                    </form>
								</div>
								<div class="form_item mod_box_t3 form_sfz">
									<h3>身份证号码吉凶</h3>
									<form action="<{$web_url}>index.php" name="form1" method="post">
                                    <input type="hidden" name="ct" value="haoma" />
                                    <input type="hidden" name="ac" value="shenfenzheng" />	
									<input type="text" name="xian" id="shenfenzheng_haoma_num" value="" class="ipt_text"/>
									<button class="btn_orange_1" type="submit">身份证测吉凶</button>
                                    </form>
									<i class="flag_tl_t3"></i>
									<i class="flag_tr_t3"></i>
									<i class="flag_bl_t3"></i>
									<i class="flag_br_t3"></i>
								</div>
								<div class="form_item mod_box_t3 form_qq">
									<h3>QQ号码吉凶</h3>
									 <form name="theform" onSubmit="return checkjx();" method="post" action="<{$web_url}>index.php">
                                    <input type="hidden" name="ct" value="haoma" />
                                    <input type="hidden" name="ac" value="qq" />	
                                    <input type="text" name="word" id="qq_haoma_num" value="" onKeyUp="value=value.replace(/[^\d]/g,'') " class="ipt_text"/>
                                    <button class="btn_orange_1" onClick="get2Cha('shouji');" type="submit">查询</button>
                                </form>			
									<i class="flag_tl_t3"></i>
									<i class="flag_tr_t3"></i>
									<i class="flag_bl_t3"></i>
									<i class="flag_br_t3"></i>
								</div>
								<div class="form_item mod_box_t3 form_remark">
									<p>号码，数也；故举凡号码，均与周易数理具有吉凶关联，就像风水、姓名会影响运势命运的意义是一样的。号码吉凶，是根据周易数理预测之原理，来测试手机号码对主人的运势影响。</p>									<i class="flag_tl_t3"></i>
									<i class="flag_tr_t3"></i>
									<i class="flag_bl_t3"></i>
									<i class="flag_br_t3"></i>
								</div>
							</div>
						</div>
					</div>
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


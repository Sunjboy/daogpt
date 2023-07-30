<?php /* Smarty version 2.6.25, created on 2017-11-29 23:42:04
         compiled from index/huangli/yinyangli.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/hdjr.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/num.css"/>
<div class="wrapper">
    <div class="main">
        <div class="menu_xy">
            <div class="menu_xy_inner">
                <ul class="clearfix">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/top_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </ul>
            </div>
        </div>
        <div class="submenu">
            <?php echo $this->_tpl_vars['topic']; ?>

        </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<div class="mod_2b">
					<h2><img src="/static/bazi/img/life/icon_yyl.png">神算网阴阳历转换</h2>
                    <p class="description">提供阴阳历转换的服务，让您在只知其一的情况下进行转换。</p>
					<div class="life clearfix">
						
						<div class="col_b">
							
                            <div class="yylFormCon">
                            	<div class="yylFormConBg">
                                	<form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" method="post" name="form_jisuan"> 
                                    <input type="hidden" name="ac" value="yinyangli" />
                                    <input type="hidden" name="ct" value="hdjr" />
                                    <input type="hidden" name="datetype" value="1" />
									<div class="formInput clearfix">
                                    	<div class="choiceCon clearfix">
                                    	<span>阳历（公历）</span>
                                    	<div class="select_outer selectYear">
                                            <div class="select_inner">
                                                 <select id="year2" name="yyear" onchange="chgy(this.options[this.selectedIndex].value,2)">
														<script>
															var now = new Date();
															var thisyear = now.getFullYear();
															for(var i=2028;i!=1937;i--)
															{
															if(thisyear ==i)
															document.write('<option selected value="'+i+'">'+i+'</option>');
															else
															document.write('<option value="'+i+'">'+i+'</option>');
															}
                                                        </script>
                                                        
											    </select>
                                            </div>
										</div>
                                    	<span>年</span>
                                    	<div class="select_outer selectMonth">
                                            <div class="select_inner">
                                                 <select id="month2" name="ymonth" onchange="chg(this.options[this.selectedIndex].value,2)">
														<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
																							</select>
                                            </div>
										</div>
                                        <span>月</span>
                                        <div class="select_outer selectDay">
                                            <div class="select_inner">
                                               	<select id="day2" name="yday">
														<script>
															for(var i=1;i!=32;i++)
															document.write('<option value="'+i+'">'+i+'</option>');
                                                        </script>
												</select>
                                            </div>
										</div>
                                        <span>日</span>
                                        <input type="submit" class="aSubmit aSubmitB" value="" />
                                        </div>
                                       </form>
                                       <?php if ($this->_tpl_vars['jiuli'] != ''): ?>
                                        	<p class="pResult" style="" id="yyl2"><?php echo $this->_tpl_vars['yDATATIME']; ?>
 农历/阴历为：<em><?php echo $this->_tpl_vars['jiuli']['0']; ?>
年 <?php echo $this->_tpl_vars['jiuli']['1']; ?>
 <?php echo $this->_tpl_vars['jiuli']['2']; ?>
 </em></p>
                                       <?php endif; ?>
                                    </div>
                                    
                                    
                                    <form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" method="post">
                                    <input type="hidden" name="ac" value="yinyangli" />
                                    <input type="hidden" name="ct" value="hdjr" />
                                    <input type="hidden" name="datetype" value="2" />
                                    <div class="formInput bordertop clearfix">
                                    	<div class="choiceCon clearfix">
                                    	<span>阴历（农历）</span>
                                    	<div class="select_outer selectYear">
                                            <div class="select_inner">
                                                <select id="year1" name="nyear" onchange="chgy(this.options[this.selectedIndex].value,1)">
													
                                                    <option value="2028">二〇二八</option><option value="2027">二〇二七</option><option value="2026">二〇二六</option><option value="2025">二〇二五</option><option value="2024">二〇二四</option><option value="2023">二〇二三</option><option value="2022">二〇二二</option><option value="2021">二〇二一</option><option value="2020">二〇二〇</option><option value="2019">二〇一九</option><option value="2018">二〇一八</option><option value="2017">二〇一七</option><option selected="" value="2016">二〇一六</option><option value="2015">二〇一五</option><option value="2014">二〇一四</option><option value="2013">二〇一三</option><option value="2012">二〇一二</option><option value="2011">二〇一一</option><option value="2010">二〇一〇</option><option value="2009">二〇〇九</option><option value="2008">二〇〇八</option><option value="2007">二〇〇七</option><option value="2006">二〇〇六</option><option value="2005">二〇〇五</option><option value="2004">二〇〇四</option><option value="2003">二〇〇三</option><option value="2002">二〇〇二</option><option value="2001">二〇〇一</option><option value="2000">二〇〇〇</option><option value="1999">一九九九</option><option value="1998">一九九八</option><option value="1997">一九九七</option><option value="1996">一九九六</option><option value="1995">一九九五</option><option value="1994">一九九四</option><option value="1993">一九九三</option><option value="1992">一九九二</option><option value="1991">一九九一</option><option value="1990">一九九〇</option><option value="1989">一九八九</option><option value="1988">一九八八</option><option value="1987">一九八七</option><option value="1986">一九八六</option><option value="1985">一九八五</option><option value="1984">一九八四</option><option value="1983">一九八三</option><option value="1982">一九八二</option><option value="1981">一九八一</option><option value="1980">一九八〇</option><option value="1979">一九七九</option><option value="1978">一九七八</option><option value="1977">一九七七</option><option value="1976">一九七六</option><option value="1975">一九七五</option><option value="1974">一九七四</option><option value="1973">一九七三</option><option value="1972">一九七二</option><option value="1971">一九七一</option><option value="1970">一九七〇</option><option value="1969">一九六九</option><option value="1968">一九六八</option><option value="1967">一九六七</option><option value="1966">一九六六</option><option value="1965">一九六五</option><option value="1964">一九六四</option><option value="1963">一九六三</option><option value="1962">一九六二</option><option value="1961">一九六一</option><option value="1960">一九六〇</option><option value="1959">一九五九</option><option value="1958">一九五八</option><option value="1957">一九五七</option><option value="1956">一九五六</option><option value="1955">一九五五</option><option value="1954">一九五四</option><option value="1953">一九五三</option><option value="1952">一九五二</option><option value="1951">一九五一</option><option value="1950">一九五〇</option><option value="1949">一九四九</option><option value="1948">一九四八</option><option value="1947">一九四七</option><option value="1946">一九四六</option><option value="1945">一九四五</option><option value="1944">一九四四</option><option value="1943">一九四三</option><option value="1942">一九四二</option><option value="1941">一九四一</option><option value="1940">一九四〇</option><option value="1939">一九三九</option><option value="1938">一九三八</option>
												</select>
                                            </div>
										</div>
                                    	<span>年</span>
                                    	<div class="select_outer selectMonth">
                                            <div class="select_inner">
                                                <select name="nmonth" id="month1">
																<option value="1">正</option><option value="2">二</option><option value="3">三</option><option value="4">四</option><option value="5">五</option><option value="6">六</option><option value="7">七</option><option value="8">八</option><option value="9">九</option><option value="10">十</option><option value="11">十一</option><option value="12">腊</option>
												</select>
                                            </div>
										</div>
                                        <span>月</span>
                                        <div class="select_outer selectDay">
                                            <div class="select_inner">
	                                                	<select id="day1" name="nday">
                                                                <option value="1">初一</option>
                                                                <option value="2">初二</option>
                                                                <option value="3">初三</option>
                                                                <option value="4">初四</option>
                                                                <option value="5">初五</option>
                                                                <option value="6">初六</option>
                                                                <option value="7">初七</option>
                                                                <option value="8">初八</option>
                                                                <option value="9">初九</option>
                                                                <option value="10">初十</option>
                                                                <option value="11">十一</option>
                                                                <option value="12">十二</option>
                                                                <option value="13">十三</option>
                                                                <option value="14">十四</option>
                                                                <option value="15">十五</option>
                                                                <option value="16">十六</option>
                                                                <option value="17">十七</option>
                                                                <option value="18">十八</option>
                                                                <option value="19">十九</option>
                                                                <option value="20">二十</option>
                                                                <option value="21">廿一</option>
                                                                <option value="22">廿二</option>
                                                                <option value="23">廿三</option>
                                                                <option value="24">廿四</option>
                                                                <option value="25">廿五</option>
                                                                <option value="26">廿六</option>
                                                                <option value="27">廿七</option>
                                                                <option value="28">廿八</option>
                                                                <option value="29">廿九</option>
                                                                <option value="30">三十</option>
                                                        </select>
                                            </div>
										</div>
                                        <span>&nbsp;&nbsp;</span>
                                        <input type="submit" value="" class="aSubmit aSubmitA" />
                                        <!--<a href="javascript:;" class="aSubmit aSubmitA" onclick="CalConv(1);return false;"></a>-->
                                        </div>
                                        </form>
                                        <?php if ($this->_tpl_vars['xinli'] != ''): ?>
                                        <p class="pResult" style="" id="yyl1"><?php echo $this->_tpl_vars['DATATIME']; ?>
 公历/阳历为：<em><?php echo $this->_tpl_vars['xinli']['0']; ?>
年 <?php echo $this->_tpl_vars['xinli']['1']; ?>
月 <?php echo $this->_tpl_vars['xinli']['2']; ?>
日 </em></p>
                                        <?php endif; ?>
                                    </div>                                    
                                    
                                </div>
                            </div>
							<!--相关工具 begin-->
                            <div class="relatedTool">
                              <h3>相关工具</h3>
                              <table class="relatedTool_table">
                                <tbody>
                                  <?php $_from = $this->_tpl_vars['hand']['hdjr_bot_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                                      <?php if ($this->_tpl_vars['k'] == 0): ?>
                                         <tr>
                                      <?php endif; ?>
                                    <th width="20%">
                                      <a <?php if ($this->_tpl_vars['v']['blank'] == 1): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['v']['url']; ?>
" <?php if ($this->_tpl_vars['v']['color'] == 1): ?>class="cRed"<?php elseif ($this->_tpl_vars['v']['color'] == 2): ?>class="cGreen"<?php elseif ($this->_tpl_vars['v']['color'] == 3): ?>class="cBlue"<?php endif; ?> title="<?php echo $this->_tpl_vars['v']['title']; ?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a>
                                    </th>
                                      <?php if ($this->_tpl_vars['k'] == 4): ?>
                                      </tr>
                                      <tr>
                                      <?php endif; ?> 
                                      
                                      <?php if ($this->_tpl_vars['k'] == 9): ?>
                                      </tr>
                                      <?php endif; ?>
                                   
                                  <?php endforeach; endif; unset($_from); ?> 
                                </tbody>
                              </table>
                            </div>
                            <!--相关工具 end-->
                            
						</div>
					</div>
				</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

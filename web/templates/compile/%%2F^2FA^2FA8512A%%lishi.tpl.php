<?php /* Smarty version 2.6.25, created on 2017-12-09 23:40:54
         compiled from index/huangli/lishi.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'index/huangli/lishi.tpl', 98, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/hdjr.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/lishi.css"/>
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
					<h2><img src="/static/bazi/img/life/icon_date.png">《神算网》历史上的今天 — <span class="cYellow" id="date_select"><?php if ($this->_tpl_vars['dateday']): ?><?php echo $this->_tpl_vars['dateday']; ?>
<?php else: ?><?php echo date('m月-d日',time());?><?php endif; ?></span></h2>
                    <p class="description">以史为鉴,可以知兴衰。回顾历史的今天，了解历史的这一天发生的事件。</p>
					<div class="life clearfix">
						
						<div class="col_b">
							<div class="date clearfix">
								<div class="date_a mod_1b">
                                	<form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" method="post">
                                    <input type="hidden" value="hdjr" name="ct" />
                                    <input type="hidden" value="lishi" name="ac" />
									<span>查看</span>
									<div class="st_outer">
										<div class="st_inner">
											<select id="month" onchange="changeMonthDay(_get('month'),_get('day'))" name="m">
												<option value="01">1</option>
												<option value="02">2</option>
												<option value="03">3</option>
												<option value="04">4</option>
												<option value="05">5</option>
												<option value="06">6</option>
												<option value="07">7</option>
												<option value="08">8</option>
												<option value="09">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
										</div>
									</div>
									<span>月</span>
									<div class="st_outer">
										<div class="st_inner">
											<select id="day" name="d"><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
										</div>
									</div>
									<span>日历史事件</span>
									<input type="submit" value="" class="btn" onclick="goDay(_get('month').value,_get('day').value)" onmouseover="this.className='btn btn_hover';" onmouseout="this.className='btn'">
									<a href="/hdjr/lishi/date/<?php echo $this->_tpl_vars['ZUOTIAN']; ?>
" id="prevDay">前一天</a>
									<a href="/hdjr/lishi/date/<?php echo $this->_tpl_vars['MINGTIAN']; ?>
" id="nextDay">后一天</a>
                                    </form>
								</div>
								<div class="date_b mod_1b">
									<div class="date_bt" onmouseover="this.className='date_bt date_b_hover'" onmouseout="this.className='date_bt'">
										<span id="xingzuo_box">
											<strong id="xingzuo_title"><a href="/xingzuo">星座运势</a></strong>
											<em id="xingzuo_his" class="">今日未查</em>
										</span>
										
									</div>
									<div class="date_bm" onmouseover="this.className='date_bm date_b_hover'" onmouseout="this.className='date_bm'">
										<span id="zhanbu_box" onclick="if($('#zhanbu_list')[0].style.display=='none'){$('#zhanbu_list').show();}else{$('#zhanbu_list').hide();}">
											<strong><a href="/suanming/scbz/">每日一卦</a></strong>
											<em id="zhanbu_his" class="">今日未算</em>
										</span>
										<ul id="zhanbu_list" class="clearfix" style="display: none;">
											<li><a href="/chouqian/guanyin" target="blank" onclick="search_zb()">观音灵签</a></li>
											<li><a href="/chouqian/lvzu" target="blank" onclick="search_zb()">吕祖灵签</a></li>
											<li><a href="/chouqian/huangdaxian" target="blank" onclick="search_zb()">大仙灵签</a></li>
											<li><a href="/chouqian/guandi" target="blank" onclick="search_zb()">关圣帝灵签</a></li>
											<li><a href="/chouqian/tianhou" target="blank" onclick="search_zb()">天后灵签</a></li>
											<li><a href="/chouqian/zhuge" target="blank" onclick="search_zb()">诸葛测字</a></li>
											<li class="last"><a href="/chouqian/" target="blank" onclick="search_zb()">更多算命工具</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- 百度推广 begin-->
     
<!-- 百度热词 end -->
							
							<ul class="date_list" id="date_his_list">
                            
                                <?php $_from = $this->_tpl_vars['lishidata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                                    <li class="clearfix">
                                        <a id="1889" name="1889" style="display:block;"></a>
                                        <div class="date_list_title">
                                        <a class="" id="date_li_1889" onclick="expand(1889);" href="<?php echo $this->_tpl_vars['web_url']; ?>
hdjr/lishi/<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['k']+1; ?>
.<?php echo $this->_tpl_vars['v']['title']; ?>
</a>
                                        </div>
                                        <?php if ($this->_tpl_vars['k'] == 0): ?>
                                            <div class="date_list_cont clearfix" id="date_1795" style="display:;">
                                            <?php echo ((is_array($_tmp=$this->_tpl_vars['v']['content'])) ? $this->_run_mod_handler('replace', true, $_tmp, "/upload/", "/up_img/lishi/upload/") : smarty_modifier_replace($_tmp, "/upload/", "/up_img/lishi/upload/")); ?>

                                            <p class="keyword">关键词：<?php echo $this->_tpl_vars['v']['keyword']; ?>
&nbsp;</p></div>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; endif; unset($_from); ?>
                            
                            </ul>
                            
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
                        
                           
                            
						</div>
					</div>
				</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

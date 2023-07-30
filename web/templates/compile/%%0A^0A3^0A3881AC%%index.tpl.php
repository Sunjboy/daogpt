<?php /* Smarty version 2.6.25, created on 2017-12-11 14:49:16
         compiled from index/xingzuo/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'index/xingzuo/index.tpl', 405, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/style.css">
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>         
        
        <div class="star_con">
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/baiyang/" class="star_icon star1 <?php if ($this->_tpl_vars['seo']['id'] == 401): ?>star_current<?php endif; ?>">
		<span class="star_name">白羊座</span>
		<span class="star_date">(3.21-4.19)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/jinniu/" class="star_icon star2 <?php if ($this->_tpl_vars['seo']['id'] == 402): ?>star_current<?php endif; ?>">
		<span class="star_name">金牛座</span>
		<span class="star_date">(4.20-5.20)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/shuangzi/" class="star_icon star3 <?php if ($this->_tpl_vars['seo']['id'] == 403): ?>star_current<?php endif; ?>">
		<span class="star_name">双子座</span>
		<span class="star_date">(5.21-6.21)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/juxie/" class="star_icon star4 <?php if ($this->_tpl_vars['seo']['id'] == 404): ?>star_current<?php endif; ?>">
		<span class="star_name">巨蟹座</span>
		<span class="star_date">(6.22-7.22)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/shizi/" class="star_icon star5 <?php if ($this->_tpl_vars['seo']['id'] == 405): ?>star_current<?php endif; ?>">
		<span class="star_name">狮子座</span>
		<span class="star_date">(7.23-8.22)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/chunv/" class="star_icon star6 <?php if ($this->_tpl_vars['seo']['id'] == 406): ?>star_current<?php endif; ?>">
		<span class="star_name">处女座</span>
		<span class="star_date">(8.23-9.22)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/tiancheng/" class="star_icon star7 <?php if ($this->_tpl_vars['seo']['id'] == 407): ?>star_current<?php endif; ?>">
		<span class="star_name">天秤座</span>
		<span class="star_date">(9.23-10.23)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/tianxie/" class="star_icon star8 <?php if ($this->_tpl_vars['seo']['id'] == 408): ?>star_current<?php endif; ?>">
		<span class="star_name">天蝎座</span>
		<span class="star_date">(10.24-11.22)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/sheshou/" class="star_icon star9 <?php if ($this->_tpl_vars['seo']['id'] == 409): ?>star_current<?php endif; ?>">
		<span class="star_name">射手座</span>
		<span class="star_date">(11.23-12.21)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/mojie/" class="star_icon star10 <?php if ($this->_tpl_vars['seo']['id'] == 410): ?>star_current<?php endif; ?>">
		<span class="star_name">摩羯座</span>
		<span class="star_date">(12.22-1.19)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/shuiping/" class="star_icon star11 <?php if ($this->_tpl_vars['seo']['id'] == 411): ?>star_current<?php endif; ?>">
		<span class="star_name">水瓶座</span>
		<span class="star_date">(1.20-2.18)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/shuangyu/" class="star_icon star12 <?php if ($this->_tpl_vars['seo']['id'] == 412): ?>star_current<?php endif; ?>">
		<span class="star_name">双鱼座</span>
		<span class="star_date">(2.19-3.20)</span>
	</a>
</div>

        <div class="main_top">
	<div class="leftcol fl">
		<h1 class="cbt cbt_1">星座</h1>
		<div class="querys_1">
			<h4>星座测算</h4>
			<div class="c">
				<table class="querys">
					<form method="POST" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" target="_blank">
                    <input type="hidden" name="ct" value="xingzuo">
                    <input type="hidden" name="ac" value="m_d_xz">
						<tr>
							<td>
								<select class="sels1 qa" name="m">
									<option value="01">1月</option>
									<option value="02">2月</option>
									<option value="03">3月</option>
									<option value="04">4月</option>
									<option value="05">5月</option>
									<option value="06">6月</option>
									<option value="07">7月</option>
									<option value="08">8月</option>
									<option value="09">9月</option>
									<option value="10">10月</option>
									<option value="11">11月</option>
									<option value="12">12月</option>
								</select>
							</td>
							<td>
								<select class="sels1 qb" name="d">
									<option value="01">1日</option>
									<option value="02">2日</option>
									<option value="03">3日</option>
									<option value="04">4日</option>
									<option value="05">5日</option>
									<option value="06">6日</option>
									<option value="07">7日</option>
									<option value="08">8日</option>
									<option value="09">9日</option>
									<option value="10">10日</option>
									<option value="11">11日</option>
									<option value="12">12日</option>
									<option value="13">13日</option>
									<option value="14">14日</option>
									<option value="15">15日</option>
									<option value="16">16日</option>
									<option value="17">17日</option>
									<option value="18">18日</option>
									<option value="19">19日</option>
									<option value="20">20日</option>
									<option value="21">21日</option>
									<option value="22">22日</option>
									<option value="23">23日</option>
									<option value="24">24日</option>
									<option value="25">25日</option>
									<option value="26">26日</option>
									<option value="27">27日</option>
									<option value="28">28日</option>
									<option value="29">29日</option>
									<option value="30">30日</option>
									<option value="31">31日</option>
								</select>
							</td>
							<td>
								<button class="button1" type=submit>星座查询</button>
							</td>
						</tr>
					</form>
					<form method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" target="_blank">
                    <input type="hidden" name="ct" value="xingzuo">
                    <input type="hidden" name="ac" value="date_xz">
						<tr>
							<td colspan=2>
								<select class="sels2 qa" name="xz">
									<option value="1">白羊座3月21-4月20</option>
									<option value="2">金牛座4月21-5月21</option>
									<option value="3">双子座5月22-6月21</option>
									<option value="4">巨蟹座6月22-7月22</option>
									<option value="5">狮子座7月23-8月23</option>
									<option value="6">处女座8月24-9月23</option>
									<option value="7">天秤座9月24-10月23</option>
									<option value="8">天蝎座10月24-11月22</option>
									<option value="9">射手座11月23-12月21</option>
									<option value="10">魔羯座12月22-1月20</option>
									<option value="11">水瓶座1月21-2月19</option>
									<option value="12">双鱼座2月20-3月20</option>
								</select>
							</td>
							<td>
								<button class="button1" type="submit">星座详解</button>
							</td>
						</tr>
					</form>
					<form method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" target="_blank">
                    <input type="hidden" name="ct" value="xingzuo">
                    <input type="hidden" name="ac" value="page">
						<tr>
							<td>
								<select class="sels1" id="q_astro" name="tid">
									<option value="401" selected="">白羊座</option>
                                    <option value="402">金牛座</option>
                                    <option value="403">双子座</option>
                                    <option value="404">巨蟹座</option>
                                    <option value="405">狮子座</option>
                                    <option value="406">处女座</option>
                                    <option value="407">天秤座</option>
                                    <option value="408">天蝎座</option>
                                    <option value="409">射手座</option>
                                    <option value="410">摩羯座</option>
                                    <option value="411">水瓶座</option>
                                    <option value="412">双鱼座</option>
								</select>
                                
							</td>
							<td>
								<select class="sels1" id="q_type" name="nid">
									<option value="1">今日运势</option>
									<option value="2">明日运势</option>
									<option value="3">本周运势</option>
									<option value="4">本月运势</option>
									<option value="5">本年运势</option>
									<option value="6">爱情运势</option>
								</select>
							</td>
							<td>
								<button class="button2" type=submit>运 势</button>
							</td>
						</tr>
					</form>
					<form method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" target="_blank">
                    <input type="hidden" name="ct" value="xingzuo" />
                    <input type="hidden" name="ac" value="date_xz" />
						<tr>
							<td>
								<select class="sels1 qa" name="xz">
									<option value="1">白羊座</option>
									<option value="2">金牛座</option>
									<option value="3">双子座</option>
									<option value="4">巨蟹座</option>
									<option value="5">狮子座</option>
									<option value="6">处女座</option>
									<option value="7">天秤座</option>
									<option value="8">天蝎座</option>
									<option value="9">射手座</option>
									<option value="10">魔羯座</option>
									<option value="11">水瓶座</option>
									<option value="12">双鱼座</option>
								</select>
							</td>
							<td>
								<select class="sels1 qb" name="xx">
									<option value="A">A型</option>
									<option value="B">B型</option>
									<option value="AB">AB型</option>
									<option value="O">O型</option>
								</select>
							</td>
							<td>
								<button class="button2" type="submit">解 读</button>
							</td>
						</tr>
					</form>
					<form method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" onSubmit="return formChaxun(2,this,'.qa','.qb')" target="_blank">
                      <input type="hidden" name="ct" value="peidui" />
                      <input type="hidden" name="ac" value="xingzuo" />
						<tr>
							<td>
								<select class="sels1 qa" name="xz1">
                                    <option selected="" value="白羊座">男白羊座</option>
                                    <option value="金牛座">男金牛座</option>
                                    <option value="双子座">男双子座</option>
                                    <option value="巨蟹座">男巨蟹座</option>
                                    <option value="狮子座">男狮子座</option>
                                    <option value="处女座">男处女座</option>
                                    <option value="天秤座">男天秤座</option>
                                    <option value="天蝎座">男天蝎座</option>
                                    <option value="射手座">男射手座</option>
                                    <option value="摩羯座">男摩羯座</option>
                                    <option value="水瓶座">男水瓶座</option>
                                    <option value="双鱼座">男双鱼座</option>
									
								</select>
							</td>
							<td>
								<select class="sels1 qb" name="xz2">
								 <option selected="" value="白羊座">女白羊座</option>
                                    <option value="金牛座">女金牛座</option>
                                    <option value="双子座">女双子座</option>
                                    <option value="巨蟹座">女巨蟹座</option>
                                    <option value="狮子座">女狮子座</option>
                                    <option value="处女座">女处女座</option>
                                    <option value="天秤座">女天秤座</option>
                                    <option value="天蝎座">女天蝎座</option>
                                    <option value="射手座">女射手座</option>
                                    <option value="摩羯座">女摩羯座</option>
                                    <option value="水瓶座">女水瓶座</option>
                                    <option value="双鱼座">女双鱼座</option>
								</select>
							</td>
							<td>
								<button class="button2" type=submit>配 对</button>
							</td>
						</tr>
					</form>
					<form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" method="post" onSubmit="return formChaxun(4,this,'.qa','.qb')" target="_blank">
                    <input type="hidden" name="ct" value="peidui" />
                    <input type="hidden" name="ac" value="shengxiao" />
						<tr>
							<td>
								<select class="sels1 qa" name="sx1">
									<option value="鼠">男子鼠</option>
									<option value="牛">男丑牛</option>
									<option value="虎">男寅虎</option>
									<option value="兔">男卯兔</option>
									<option value="龙">男辰龙</option>
									<option value="蛇">男巳蛇</option>
									<option value="马">男午马</option>
									<option value="羊">男未羊</option>
									<option value="猴">男申猴</option>
									<option value="鸡">男酉鸡</option>
									<option value="狗">男戌狗</option>
									<option value="猪">男亥猪</option>
								</select>
							</td>
							<td>
								<select class="sels1 qb" name="sx2">
									<option value="鼠">女子鼠</option>
									<option value="牛">女丑牛</option>
									<option value="虎">女寅虎</option>
									<option value="兔">女卯兔</option>
									<option value="龙">女辰龙</option>
									<option value="蛇">女巳蛇</option>
									<option value="马">女午马</option>
									<option value="羊">女未羊</option>
									<option value="猴">女申猴</option>
									<option value="鸡">女酉鸡</option>
									<option value="狗">女戌狗</option>
									<option value="猪">女亥猪</option>
								</select>
							</td>
							<td>
								<button class="button2" type="submit">配 对</button>
							</td>
						</tr>
					</form>
					<form method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" onSubmit="return formChaxun(3,this,'.qa','.qb')" target="_blank">
                     <input type="hidden" name="ct" value="peidui">
                     <input type="hidden" name="ac" value="xuexing">
						<tr>
							<td>
								<select class="sels1 qa" name="xx1">
									<option value="A">A型</option>
									<option value="B">B型</option>
									<option value="O">O型</option>
									<option value="AB">AB型</option>
								</select>
							</td>
							<td>
								<select class="sels1 qb" name="xx2">
									<option value="A">A型</option>
									<option value="B">B型</option>
									<option value="O">O型</option>
									<option value="AB">AB型</option>
								</select>
							</td>
							<td>
								<button class="button2" type="submit">配 对</button>
							</td>
						</tr>
					</form>
					<form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" method="post" onSubmit="return formChaxun(5,this,'.qa','.qb')" target="_blank">
                    <input type="hidden" value="shengrimima" name="ac">
                    <input type="hidden" value="haoma" name="ct">
						<tr>
							<td>
								<select class="sels1 qa" name="m">
									<option value="1">1月</option>
									<option value="2">2月</option>
									<option value="3">3月</option>
									<option value="4">4月</option>
									<option value="5">5月</option>
									<option value="6">6月</option>
									<option value="7">7月</option>
									<option value="8">8月</option>
									<option value="9">9月</option>
									<option value="10">10月</option>
									<option value="11">11月</option>
									<option value="12">12月</option>
								</select>
							</td>
							<td>
								<select class="sels1 qb" name="d">
									<option value="1">1日</option>
									<option value="2">2日</option>
									<option value="3">3日</option>
									<option value="4">4日</option>
									<option value="5">5日</option>
									<option value="6">6日</option>
									<option value="7">7日</option>
									<option value="8">8日</option>
									<option value="9">9日</option>
									<option value="10">10日</option>
									<option value="11">11日</option>
									<option value="12">12日</option>
									<option value="13">13日</option>
									<option value="14">14日</option>
									<option value="15">15日</option>
									<option value="16">16日</option>
									<option value="17">17日</option>
									<option value="18">18日</option>
									<option value="19">19日</option>
									<option value="20">20日</option>
									<option value="21">21日</option>
									<option value="22">22日</option>
									<option value="23">23日</option>
									<option value="24">24日</option>
									<option value="25">25日</option>
									<option value="26">26日</option>
									<option value="27">27日</option>
									<option value="28">28日</option>
									<option value="29">29日</option>
									<option value="30">30日</option>
									<option value="31">31日</option>
								</select>
							</td>
							<td>
								<button class="button1" type="submit">生日密码</button>
							</td>
						</tr>
					</form>
				</table>
			</div>
		</div>
	</div>
	<div class="toplist fl">
		<div class="headstr">
         
         <?php $_from = $this->_tpl_vars['hot_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>	
         
         	<?php if ($this->_tpl_vars['k'] == 0): ?>
            	<h2 class="fc1 headitem ffyh">
					<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 16) : smarty_modifier_truncate($_tmp, 16)); ?>
</a>
				</h2>
            <?php elseif ($this->_tpl_vars['k'] < 3 && $this->_tpl_vars['k'] > 0): ?>
            	<?php if ($this->_tpl_vars['k'] == 1): ?>
                   	<h3 class="fc1 srecitem">
                <?php endif; ?>     
                	<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a><?php if ($this->_tpl_vars['k'] == 1): ?>|<?php endif; ?>
                <?php if ($this->_tpl_vars['k'] == 2): ?>
                   	</h3><div class="recitem">
                <?php endif; ?>  
            <?php else: ?>
         		<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a><?php if ($this->_tpl_vars['k'] == 5): ?></div><?php else: ?>|<?php endif; ?>
            <?php endif; ?>
            
         <?php endforeach; endif; unset($_from); ?>
         
		</div>
        
		<div class="z line">
		</div>
		<dl>
			<dt>
				<a href="/list-345-25.html" class="fcWhite" target="_blank">爱情</a>
			</dt>
			<dd>
				<ul>
                <?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['25']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
               		 <li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 11) : smarty_modifier_truncate($_tmp, 11)); ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
				</ul>
			</dd>
		</dl>
		<dl>
			<dt>
				<a href="/list-345-26.html" class="fcWhite" target="_blank">性格</a>
			</dt>
			<dd>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['26']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
               		 <li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 11) : smarty_modifier_truncate($_tmp, 11)); ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
				</ul>
			</dd>
		</dl>
		<div class="z line">
		</div>
		<dl>
			<dt>
				<a href="/list-345-27.html" class="fcWhite" target="_blank">时尚</a>
			</dt>
			<dd>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['27']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
               		 <li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 11) : smarty_modifier_truncate($_tmp, 11)); ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
				</ul>
			</dd>
		</dl>
		<dl>
			<dt>
				<a href="/list-345-28.html" class="fcWhite" target="_blank">开运</a>
			</dt>
			<dd>
				<ul>
                    <?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['28']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
               		 <li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 11) : smarty_modifier_truncate($_tmp, 11)); ?>
</a></li>
                	<?php endforeach; endif; unset($_from); ?>				
                </ul>
			</dd>
		</dl>
		<div class="z line">
		</div>
		<dl>
			<dt>
				<a href="/list-345-29.html" class="fcWhite" target="_blank">知识</a>
			</dt>
			<dd>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['29']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
               		 <li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 11) : smarty_modifier_truncate($_tmp, 11)); ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
				</ul>
			</dd>
		</dl>
		<dl>
			<dt>
				<a href="/list-345-30.html" class="fcWhite" target="_blank">情感</a>
			</dt>
			<dd>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['30']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
               		 <li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 11) : smarty_modifier_truncate($_tmp, 11)); ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>				
                </ul>
			</dd>
		</dl>
        
	</div>
    
    
	<div class="rightcol fl">
		<div id="yunshi">
			<div id="fod1">
				<ul>
					<li class="on" rel="1">白羊</li>
					<li rel="2">金牛</li>
					<li rel="3">双子</li>
					<li rel="4">巨蟹</li>
					<li rel="5">狮子</li>
					<li rel="6">处女</li>
					<li rel="7">天秤</li>
					<li rel="8">天蝎</li>
					<li rel="9">射手</li>
					<li rel="10">摩羯</li>
					<li rel="11">水瓶</li>
					<li rel="12">双鱼</li>
				</ul>
			</div>
			<div id="fod1list">
				<div class="dis">
					<h3>双子座今日温馨提示</h3>
					<p><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi_baiyang']['jintian']['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 38) : smarty_modifier_truncate($_tmp, 38)); ?>
<span class="color_blue">[<a href="/xingzuo/baiyang/today/" target="_blank">详细</a>]</span> </p>
					<h4 class="color_blue"><span>·</span>本周运势</h4>
					<p><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi_baiyang']['zhou']['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 38) : smarty_modifier_truncate($_tmp, 38)); ?>
<span class="color_blue">[<a href="/xingzuo/baiyang/week" target="_blank">详细</a>]</span> </p>
					<h4 class="color_blue"><span>·</span>本月运势</h4>
					<p><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi_baiyang']['yue']['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 38) : smarty_modifier_truncate($_tmp, 38)); ?>
<span class="color_blue">[<a href="/xingzuo/baiyang/month" target="_blank">详细</a>]</span> </p>
					<h4 class="color_blue"><span>·</span>年度运势</h4>
					<p><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi_baiyang']['nian']['content'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 38) : smarty_modifier_truncate($_tmp, 38)); ?>
<span class="color_blue">[<a href="/xingzuo/baiyang/year" target="_blank">详细</a>]</span> </p>
				</div>
			</div>
            
        <script type="text/javascript" src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/js/jquery.min.js"></script>  
		<script type="text/javascript">
       $('#fod1 ul li').click(function(){
		   var rel=$(this).attr('rel');
		   $("#fod1 li").removeClass("on");
		   $(this).addClass("on");
				$.ajax({
				type: "GET",
				url: "/index.php?ct=xingzuo&ac=ajax",
				datatype:'text',
				data: {id:rel},
				success:function(text){
					if(text != ''){
					$('#fod1list').html(text);
					}
				
				}
				});
		});
        </script>
            
		</div>
	</div>
</div>

<div class="bd_ad990">
<iframe src="http://img.xa9t.com/html/click/4496_1244.html" width="960" height="90" marginheight="0" marginwidth="0" scrolling="no" frameborder="0"></iframe>
</div>

<div id="schannel" class="clearfix">
	<div class="fl">
		<div class="alb">
			<div class="al">
				<h4 class="al2">
					<a href="/list-345-1.html" target="_blank">白羊座</a>
				</h4>
				<ul>
                	<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="al">
				<h4 class="al3">
					<a href="/list-345-2.html" target="_blank">金牛座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="al">
				<h4 class="al4">
					<a href="/list-345-3.html" target="_blank">双子座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		<div class="alb mt10">
			<div class="al">
				<h4 class="al5">
					<a href="/list-345-4.html" target="_blank">巨蟹座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="al">
				<h4 class="al14">
					<a href="/list-345-5.html" target="_blank">狮子座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="al">
				<h4 class="al15">
					<a href="/list-345-6.html" target="_blank">处女座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['6']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		<div class="alb mt10">
			<div class="al">
				<h4 class="al16">
					<a href="/list-345-7.html" target="_blank">天秤座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['7']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="al">
				<h4 class="al17">
					<a href="/list-345-8.html" target="_blank">天蝎座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['8']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="al">
				<h4 class="al18">
					<a href="/list-345-9.html" target="_blank">射手座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['9']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		<div class="alb mt10">
			<div class="al">
				<h4 class="al19">
					<a href="/list-345-10.html" target="_blank">摩羯座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['10']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="al">
				<h4 class="al20">
					<a href="/list-345-11.html" target="_blank">水瓶座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['11']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="al">
				<h4 class="al21">
					<a href="/list-345-12.html" target="_blank">双鱼座</a>
				</h4>
				<ul>
					<?php $_from = $this->_tpl_vars['xingzuo_newsdata_list']['12']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                    	<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
	</div>
	<div id="col_right" class="col_right">
		<div class="bd_ad250">
			<iframe src="http://img.xa9t.com/html/click/4496_1279.html" width="250" height="250" marginheight="0" marginwidth="0" scrolling="no" frameborder="0"></iframe>
        </div>
        
		<div class="mod_box_t2 hot_tool_part buddhist_part mt10">
			<div class="hd hd_s1">
				<h3>
					百科导航
				</h3>
				<i class="flag_l_t2">
				</i>
				<i class="flag_r_t2">
				</i>
			</div>
			<div class="bd bd_s1">
				<ul class="mod_txt">
					<li>
						<a target="_blank" href="/zgjm/">
							周公解梦
						</a>
					</li>
					<li>
						<a target="_blank" href="/2016/">
							生肖运势
						</a>
					</li>
					<li>
						<a target="_blank" href="/peidui/hehun/">
							八字合婚
						</a>
					</li>
					<li>
						<a target="_blank" href="/xingzuo/zhuanqu/">
							星座专区
						</a>
					</li>
                    <li>
						<a target="_blank" href="/xingzuo/yunshi/">
							星座运势
						</a>
					</li>
					<li>
						<a target="_blank" href="/xingzuo/shangshengxingzuo/">
							上升星座
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="mod_box_t2 horoscope_part" style="border-top: 0 none;">
			<div class="hd hd_s1">
				<h3>
					应用推荐
				</h3>
				<i class="flag_l_t2">
				</i>
				<i class="flag_r_t2">
				</i>
			</div>
			<div class="bd bd_s1">
				<ul class="appList clearfix">
					<?php $_from = $this->_tpl_vars['public_hand_data']['public_right_yingyong']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            			<li><a <?php if ($this->_tpl_vars['v']['blank'] == 1): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['v']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['v']['listimg']; ?>
" width="64" height="64" alt="<?php echo $this->_tpl_vars['v']['title']; ?>
"><p><?php echo $this->_tpl_vars['v']['title']; ?>
</p></a></li>
            		<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		<div class="rcolboxl rcolbox mt10">
			<h4 class="stitle fc1">为您推荐</h4>
			<div class="c listtext">
				<ul class="hotli hotlit_1">
               	 <?php $_from = $this->_tpl_vars['tuijian_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
				 	<li><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14) : smarty_modifier_truncate($_tmp, 14)); ?>
</a></li>
		   		 <?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="b"></div>
		</div>
	</div>
</div>
<!--index-->

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php /* Smarty version 2.6.25, created on 2017-11-29 20:14:01
         compiled from index/chouqian/yuelao.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/divine.css"/>
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
<div class="cont">
<div class="col_left">
			  <div class="mod_box_t1 fn_part fn_yl">
					<div class="hd">
						<h1><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/images/suanming/tit/chouqian.png">月老灵签</h1>
					</div>
					<div class="bd">
                    <div class="divine_special result-con clearfix">
                    
                    <?php if ($this->_tpl_vars['qid'] != ''): ?>
                     	<img src="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['qian']['img']; ?>
" class="img-gyq" />
                        <div class="result-detail">
								<p class="title">您抽中了【第<span><?php echo $this->_tpl_vars['qian']['qid']; ?>
</span>签】</p>
								<table>
									<colgroup>
										<col width="77">
										<col width="375">
									</colgroup>
									<tbody><tr>
										<td class="col-1">吉凶</td>
										<td><strong><?php echo $this->_tpl_vars['qian']['jx']; ?>
</strong></td>
									</tr>
									<tr>
										<td class="col-1">解曰</td>
										<td><?php echo $this->_tpl_vars['qian']['jie']; ?>
</td>
									</tr>
									<tr>
										<td class="col-1">签语</td>
										<td><?php echo $this->_tpl_vars['qian']['qy']; ?>
</td>
									</tr>
								</tbody></table>
							</div>
                            
                        <div style="display:block; float:left; margin-top:30px;">
                        	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/yuelao/" class="btn_orange_1">重新抽签</a>
                        </div>
					<?php endif; ?>
					
                   
              <?php if ($this->_tpl_vars['rand'] != ''): ?>
              
                  <?php if ($this->_tpl_vars['gysmile'] != '4' && $this->_tpl_vars['clicknum'] < 3): ?>
                        
                        <p class="first">您刚抽了第 <strong class="cRed"><?php echo $this->_tpl_vars['rand']; ?>
</strong> 签</p>
                        <?php if ($this->_tpl_vars['clicknum'] == 2): ?>
                        <h5><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/good_cup.gif" /></h5>
                        <?php else: ?>
                        <h5><a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/yuelao/<?php echo $this->_tpl_vars['clicknum']+2; ?>
/<?php echo $this->_tpl_vars['rand']; ?>
"></a><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/good_cup.gif" /></h5>
                        <?php endif; ?>
                        <p class="last"><span class="cRed">您掷出<?php echo $this->_tpl_vars['clicknum']+1; ?>
次圣杯，请点击上图再次掷出！</span></p>
                        
                        <?php if ($this->_tpl_vars['clicknum'] == 2): ?>
                        	<p class="last"><span class="cRed">恭喜，您连续掷出了三次圣杯，<a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/yuelao/4/<?php echo $this->_tpl_vars['rand']; ?>
">请点这里察看签词！</a></span></p>
                        <?php else: ?>
                        	<p class="last">需连续掷出三次圣杯，才是灵签！目前，您已经掷出<strong class="cRed"><?php echo $this->_tpl_vars['clicknum']+1; ?>
</strong>次</p>    
                  		<?php endif; ?>
                  <?php else: ?>
                  
                        <p class="first">您刚抽了第 <strong class="cRed"><?php echo $this->_tpl_vars['rand']; ?>
</strong> 签</p>
                        <h5><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/bad_cup.gif" /></h5>
                        <p class="last"><span class="cRed">您掷出笑杯了，此签不准。<a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/yuelao/">请点这里重新抽签！</a></span></p>
                  
                  <?php endif; ?>
                  
              <?php endif; ?>
                    
              <?php if ($this->_tpl_vars['qid'] == '' && $this->_tpl_vars['rand'] == ''): ?>
                    <h6><a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/yuelao/1" title="首先请您心无杂念，然后点这里开始抽签"><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/v2/qian.gif" alt="灵签"></a></h6>
 <p>专业版月老灵签有100签，月老灵签为您提供解签，三种签的签文自古至今流传久远，各地观音灵签抽签略有不同。也有少数佛寺院使用这种签种观音灵签解签，首先要有一棵真诚的心态，闭上眼睛请求指点的爱情。如婚姻......所谓的心诚则灵啊，之后才开始。</p>
                   <ul>
                        <li>1. 抽签前先合手默念“月老灵签，指点迷经”三遍。</li>
                        <li>2. 默念自己姓名、出生日期，年龄、现在居住地址。</li>
                        <li>3. 请求指点事情，如：婚姻、爱情，恋人，流年，婚配，桃花运势……等。</li>
                        <li>4. 点上面的签筒开始月老在线抽签！</li>
                    </ul>
                <?php endif; ?>
                
                    </div>
                    
                    </div>
					<i class="flag_tl_t1"></i><i class="flag_tr_t1"></i><i class="flag_bl_t1"></i><i class="flag_br_t1"></i>
				</div>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_sx.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div id="col_right" class="col_right">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
                    </div>
                </div>
            </div>
        </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

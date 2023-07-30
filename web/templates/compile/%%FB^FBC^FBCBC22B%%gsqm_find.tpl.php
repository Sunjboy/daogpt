<?php /* Smarty version 2.6.25, created on 2017-11-29 01:17:17
         compiled from index/xingming/gsqm_find.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/xmfx.css"/>
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
<?php 
 include('cache/gg/12sx_top_730x15.php');
?>
<div class="fn_part fn_gsqm fn_gsqm_detailM mod_box_t1">
              <div class="hd">
                <h1><?=$ming?>名称评分</h1>
              </div>
              <div class="bd">
                <div class="box_con">
                    <div class="intro_area"><strong>「<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/xmfx/">神算网名称测试</a>」</strong>为您的企业、公司名称评分。名字是一个符号不假，但它却是一个非常特别、极其重要的符号。详细名字评分分析还须要配合个人八字五行匹配，名字评分信则灵不信则不灵。请在下面输入你要测试的名称进行<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/gsqm/">评分测试</a>吧！
</div>
                    <div class="mod_search_form clearfix">
                        <form id="company_submit"  target="_blank" method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
/index.php" onSubmit="return chk_submit();">
                        <input type="hidden" value="374" name="tid">
                        <input type="hidden" value="gsqm" name="ac" />
                        <input type="hidden" value="xingming" name="ct" />
                        <input type="text" value="" class="search_text" id="company_name" name="name">
                        <input type="submit" value="开始测试" onMouseOver="this.className='search89_btn search89_btnhover'" onMouseOut="this.className='search89_btn'" class="search89_btn">
						</form>
                    </div>
                    
                    <div class="mod_box_t3 fn_gsqm_detail">
                  <div class="box_con">
                        <div class="gsqm_detail_hd"><strong><?=$ming?></strong>的名字分析结果如下</div>
                        <div class="gsqm_detail_table">
                            <table>
                                <tr class="tr_th">
                                    <th><span>简体</span></th>
                                    <th><span>繁体</span></th>
                                    <th><span>拼音</span></th>
                                    <th><span>五行</span></th>
                                    <th><span>笔画</span></th>
                                    
                                </tr>
                                <?php if ($this->_tpl_vars['a1arr']['a1'] != ''): ?>
								<tr>
                                    <td><?php echo $this->_tpl_vars['a1arr']['a1']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a1arr']['a1gb']; ?>
</td>
                                    <td class="py"><?php echo $this->_tpl_vars['a1arr']['a1py']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a1arr']['hzwh1']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a1arr']['bihua1']; ?>
</td> 
                                </tr>
                               <?php endif; ?>
                               
                                <?php if ($this->_tpl_vars['a2arr']['a2'] != ''): ?>
								<tr>
                                    <td><?php echo $this->_tpl_vars['a2arr']['a2']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a2arr']['a2gb']; ?>
</td>
                                    <td class="py"><?php echo $this->_tpl_vars['a2arr']['a2py']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a2arr']['hzwh2']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a2arr']['bihua2']; ?>
</td> 
                                </tr>
                               <?php endif; ?>
                               
                                <?php if ($this->_tpl_vars['a3arr']['a3'] != ''): ?>
								<tr>
                                    <td><?php echo $this->_tpl_vars['a3arr']['a3']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a3arr']['a3gb']; ?>
</td>
                                    <td class="py"><?php echo $this->_tpl_vars['a3arr']['a3py']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a3arr']['hzwh3']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a3arr']['bihua3']; ?>
</td> 
                                </tr>
                               <?php endif; ?>
                               
                                <?php if ($this->_tpl_vars['a4arr']['a4'] != ''): ?>
								<tr>
                                    <td><?php echo $this->_tpl_vars['a4arr']['a4']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a4arr']['a4gb']; ?>
</td>
                                    <td class="py"><?php echo $this->_tpl_vars['a4arr']['a4py']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a4arr']['hzwh4']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a4arr']['bihua4']; ?>
</td> 
                                </tr>
                               <?php endif; ?>
                               
                                <?php if ($this->_tpl_vars['a5arr']['a5'] != ''): ?>
								<tr>
                                    <td><?php echo $this->_tpl_vars['a5arr']['a5']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a5arr']['a5gb']; ?>
</td>
                                    <td class="py"><?php echo $this->_tpl_vars['a5arr']['a5py']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a5arr']['hzwh5']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a5arr']['bihua5']; ?>
</td> 
                                </tr>
                               <?php endif; ?>
                               
                                <?php if ($this->_tpl_vars['a6arr']['a6'] != ''): ?>
								<tr>
                                    <td><?php echo $this->_tpl_vars['a6arr']['a6']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a6arr']['a6gb']; ?>
</td>
                                    <td class="py"><?php echo $this->_tpl_vars['a6arr']['a6py']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a6arr']['hzwh6']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['a6arr']['bihua6']; ?>
</td> 
                                </tr>
                               <?php endif; ?>                               
                            </table>
                        </div>
                        <div class="gsqm_detail_item">
                            <P><strong>数 理：</strong><?php echo $this->_tpl_vars['allbihua']; ?>
</P>
                            <p><strong>吉 凶：</strong><?php echo $this->_tpl_vars['company']['t1']; ?>
<em class="red"><?php echo $this->_tpl_vars['company']['j1']; ?>
</em></p>
                            <p><strong>诗 解：</strong><?php echo $this->_tpl_vars['company']['c1']; ?>
</p>
                            <p><strong>含 义：</strong><?php echo $this->_tpl_vars['company']['t2']; ?>
<br><?php echo $this->_tpl_vars['company']['c2']; ?>
</p>
                            <div class="tips_area">以上分析结果仅从数理上简单分析，没有考虑到其他企业法人个人信息等的配合。</div>
                            <a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/gsqm/" class="btn_orange_1">重新测算</a>
                        </div>
                  </div>
                  <i class="flag_tl_t3"></i>
                  <i class="flag_tr_t3"></i>
                  <i class="flag_bl_t3"></i>
                  <i class="flag_br_t3"></i>
                </div>
                 
                  </div>
                
                
              </div>
              <i class="flag_tl_t1"></i>
              <i class="flag_tr_t1"></i>
              <i class="flag_bl_t1"></i>
              <i class="flag_br_t1"></i>
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
         <?php   include('templates/public/footer.tpl.php'); ?>  

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php /* Smarty version 2.6.25, created on 2017-11-29 20:15:03
         compiled from h5/huangli/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>stepMenu();</script>
<div id="path">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<div class="detail">
  <h3>黄历查询：</h3>
  <dl>
    <dd class="form">提供最专业的黄历查询，覆盖吉凶宜忌、冲煞、吉神凶煞、值日、胎神、财神喜神福神方位等信息。</dd>
    <form name="sm" action="/index.php" method="post">
      <input type="hidden" name="ct" value="h5_hdjr" />
      <input type="hidden" name="ac" value="index" />
      <input type="hidden" name="tid" value="363" />

      <select name="y" id="nian" class="select">
        <?php echo $this->_tpl_vars['ymd_arr']['y']; ?>

      </select>年

      <select name="n" id="yue" class="select">
        <?php echo $this->_tpl_vars['ymd_arr']['m']; ?>

      </select>月

      <select name="j" id="ri" class="select">
        <?php echo $this->_tpl_vars['ymd_arr']['d']; ?>

      </select>日

      <div align="center"><input type="submit" name="submit" class="button" value="查询吉日"/></div>
    </form>
  </dl>
</div>

<div class="detail hdjr">

  <table cellspacing="0" cellpadding="0" border="0" class="tableData">

    <colgroup>

      <col width="22%">

      <col width="28%">

      <col width="22%">

      <col width="28%">

    </colgroup>

    <tbody>

    <tr class="trTit">

      <td colspan="4" id="gongli"><span class="solar"><?php echo $this->_tpl_vars['hdjr']['gongli']; ?>
</span></td>

    </tr>

    <!-- <tr class="bgBlack">

        <td class="thBg">黑道凶日</td>

        <td colspan="3">天刑（黑道）危日</td>

    </tr> -->

    <tr>

      <td class="thBg">农历/阴历</td>

      <td colspan="3" id="nongli"><?php echo $this->_tpl_vars['hdjr']['nongli']; ?>
</td>

    </tr>

    <tr class="bgOrange">

      <td class="thBg">节日</td>

      <td colspan="3" id="dao_title"><p id="dao_content"><?php echo $this->_tpl_vars['hdjr']['jieri']; ?>
</p></td>

    </tr>

    <tr>

      <td class="thBg">彭祖百忌</td>

      <td colspan="3" id="start"><?php echo $this->_tpl_vars['hdjr']['baiji']; ?>
</td>

    </tr>

    <tr class="tr-su">

      <td class="thBg"><span class="su-icon green"></span></td>

      <td colspan="3">

        <p class="pSuitable" id="yishi">
          <?php if ($this->_tpl_vars['hdjr']['yi'] != '-'): ?><?php echo $this->_tpl_vars['hdjr']['yi']; ?>
<?php else: ?>诸事不宜<?php endif; ?>
        </p>

      </td>

    </tr>

    <tr class="tr-su">

      <td class="thBg"><span class="su-icon red"></span></td>

      <td colspan="3">

        <p class="pUnsuitable" id="jishi">
          <?php if ($this->_tpl_vars['hdjr']['ji'] != '-'): ?><?php echo $this->_tpl_vars['hdjr']['ji']; ?>
<?php else: ?>诸事勿取<?php endif; ?>
        </p>

      </td>

    </tr>

    <tr class="tr-su">

      <td class="thBg"><span class="su-icon blue"></span></td>

      <td colspan="3">

        <p class="pAdversary" id="chong">
          <?php echo $this->_tpl_vars['hdjr']['chong']; ?>

        </p>

      </td>

    </tr>

    <tr>

      <td class="thBg">凶神宜忌</td>

      <td colspan="3">

        <p class="txt-center" id="xs">
          <?php echo $this->_tpl_vars['hdjr']['xiongshen']; ?>

        </p>

      </td>

    </tr>

    <tr>

      <td class="thBg">吉神宜趋</td>

      <td colspan="3">

        <p id="js">
          <?php echo $this->_tpl_vars['hdjr']['jishen']; ?>

        </p>

      </td>

    </tr>

    <tr>

      <td class="thBg">岁次</td>

      <td colspan="3">

        <p class="txt-center" id="suici">
          <?php echo $this->_tpl_vars['hdjr']['suici']; ?>

        </p>

      </td>

    </tr>

    <tr>

      <td class="thBg">胎神</td>

      <td colspan="3">

        <p class="txt-center" id="taishen">
          <?php echo $this->_tpl_vars['hdjr']['taishen']; ?>

        </p>

      </td>

    </tr>

    <tr class="custom-tr2">

      <td class="thBg">

        <span>财神</span>

      </td>

      <td>

        <span id="cai"><?php echo $this->_tpl_vars['hdjr']['caishen']; ?>
</span>

      </td>

      <td class="thBg">

        <span>五行</span>

      </td>

      <td>

        <span id="wuxing"><?php echo $this->_tpl_vars['hdjr']['wuxing']; ?>
</span>

      </td>

    </tr>

    <tr class="custom-tr2">

      <td class="thBg">

        <span>喜神</span>

      </td>

      <td>

        <span><?php echo $this->_tpl_vars['hdjr']['xishen']; ?>
</span>

      </td>

      <td class="thBg">

        <span>福神</span>

      </td>

      <td>

        <span><?php echo $this->_tpl_vars['hdjr']['fushen']; ?>
</span>

      </td>

    </tr>

    </tbody>

  </table>

</div>


<div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/more_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<div class="detail">
  <h3>生肖血型配对简介：</h3>
  <dl>
    <dd>星座于生肖，相信大家一定不会陌生。每个星座、每个生肖都有属于自己的特性，所以我们并不是与所有的星座生肖组合般配，星座与生肖之间又有着怎么样的关系呢？</dd>
  </dl>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="navi">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/h5_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
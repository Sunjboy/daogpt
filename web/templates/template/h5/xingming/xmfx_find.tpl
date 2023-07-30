<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>
<h1 class="title"><{$ming}>名称评分</h1>
<div class="detail">
    <div class="remark center"><{$xm_arr.xing1}><{$xm_arr.xing2}><{$xm_arr.ming1}><{$xm_arr.ming2}></strong>的名字分析结果如下 &nbsp; 来源：神算网</div>

    <dd>
        <strong><{$xm_arr.xing1}><{$xm_arr.xing2}><{$xm_arr.ming1}><{$xm_arr.ming2}>的姓名五格评分：</strong>	<strong class="red"><{$xmdf}>分</strong> &nbsp;
        <{if $xmdf<60}>
        <p>你的名字可能不是很好。强烈建议你换个名字试试，也许人生会因此而改变的。</p>

        <p>如果有条件，改个名字也未尝不可。</p>

        <{elseif $xmdf>=60 && $xmdf<70}>
        <p>你的名字可能不太好，如果可能的话，不妨尝试改变一下，也许会有事半功倍之效。</p>

        <p>如果有条件，改个名字也未尝不可。</p>

        <{elseif $xmdf>=70 && $xmdf<80}>
        <p>你的名字可能不太理想，要想赢得成功，必须比别人付出更多的艰辛和汗水。如果有条件，改个名字也未尝不可。</p>

        <p>如果有条件，改个名字也未尝不可。</p>
        <{elseif $xmdf>=80 && $xmdf<90}>
        <p>你的名字取得不错，如果与命理搭配得当，相信它会助你一生顺利的，祝你好运！</p>

        <{elseif $xmdf>=90}>
        <p>你的名字取得非常棒，如果与命理搭配得当，成功与惊喜将会伴随你的一生。但千万注意不要失去上进心。</p>
        <{/if}>
        <p><a href="/xingming/qiming/" style="color:red;">若想改名,查看起名大全>></a></p>

    </dd>



        <h2><{$xm_arr.xing1}><{$xm_arr.xing2}><{$xm_arr.ming1}><{$xm_arr.ming2}>的信息:</h2>


    <div class="h2_content">

        <table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#ddd" style="margin-top:10px;">

            <tbody>

            <tr>

                <td  width="100" align="center" bgcolor="#F5F8FD" class="suanming"><strong>繁体字</strong></td>

                <td  width="65" bgcolor="#F5F8FD" class="suanming"><{$xm_arr.xing1gb}></td>

                <td  width="65" bgcolor="#F5F8FD" class="suanming"><{$xm_arr.xing2gb}></td>

                <td  width="65" bgcolor="#F5F8FD" class="suanming"><{$xm_arr.ming1gb}></td>

                <td  width="70" bgcolor="#F5F8FD" class="suanming"><{$xm_arr.ming2gb}></td>

            </tr>

            <tr>

                <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>拼音</strong></td>

                <td bgcolor="#F5F8FD" class="suanming" ><{$xm_arr.xing1py}></td>

                <td bgcolor="#F5F8FD" class="suanming" ><{$xm_arr.xing2py}></td>

                <td bgcolor="#F5F8FD" class="suanming" ><{$xm_arr.ming1py}></td>

                <td bgcolor="#F5F8FD" class="suanming" ><{$xm_arr.ming2py}></td>

            </tr>

            <tr>

                <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>康熙笔画：</strong></td>

                <td bgcolor="#F5F8FD" class="suanming" ><{$bh_wh_arr.bihua1}>　</td>

                <td bgcolor="#F5F8FD" class="suanming" ><{$bh_wh_arr.bihua2}>　</td>

                <td bgcolor="#F5F8FD" class="suanming" ><{$bh_wh_arr.bihua3}>　</td>

                <td bgcolor="#F5F8FD" class="suanming" ><{$bh_wh_arr.bihua4}>　</td>

            </tr>

            <tr>

                <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>五格：</strong></td>

                <td bgcolor="#F5F8FD" class="suanming" >天格:<{$tdr_ge.tiange}> (<{$tdr_ge.tian_sancai}>)</td>

                <td bgcolor="#F5F8FD" class="suanming" >人格:<{$tdr_ge.renge}> (<{$tdr_ge.ren_sancai}>)</td>

                <td bgcolor="#F5F8FD" class="suanming" >地格:<{$tdr_ge.dige}> (<{$tdr_ge.di_sancai}>) </td>

                <td bgcolor="#F5F8FD" class="suanming" >外格:<{$tdr_ge.waige}> (<{$tdr_ge.waige_sancai}>)<br />总格 >> <{$tdr_ge.zongge}> (<{$tdr_ge.zongge_sancai}>) &nbsp;</td>

            </tr>

            </tbody>

        </table>

    </div>


    <h2>五格详解：</h2>

    <div class="h2_content">
        <span class="brown"><strong>天格<{$tiangearr.tiangee}>的解析:</strong></span> <p>天格数是先祖留传下来的，其数理对人影响不大。</p>
        <p class="cGrey bbg"><{$tiangearr.yy}><span class="cRed"><{$tiangearr.jx}></span></p>
        <span class="brown blue">〖详细解释〗:</span> <p><{$tiangearr.content}></p>
    </div>

    <div class="h2_content">
        <span class="brown"><strong>人格<{$rengearr.rengee}>的解析:</strong></span> <p>人格数是先祖留传下来的，其数理对人影响不大。</p>
        <p class="cGrey bbg"><{$rengearr.yy}><span class="cRed"><{$rengearr.jx}></span></p>
        <span class="brown blue">〖详细解释〗:</span> <p><{$rengearr.content}></p>
    </div>

    <div class="h2_content">
        <span class="brown"><strong>地格<{$digearr.rengee}>的解析:</strong></span> <p>地格数是先祖留传下来的，其数理对人影响不大。</p>
        <p class="cGrey bbg"><{$digearr.yy}><span class="cRed"><{$digearr.jx}></span></p>
        <span class="brown blue">〖详细解释〗:</span> <p><{$digearr.content}></p>
    </div>

    <div class="h2_content">
        <span class="brown"><strong>外格<{$waigearr.rengee}>的解析:</strong></span> <p>外格数是先祖留传下来的，其数理对人影响不大。</p>
        <p class="cGrey bbg"><{$waigearr.yy}><span class="cRed"><{$waigearr.jx}></span></p>
        <span class="brown blue">〖姓名命运〗:</span> <p><{$waigearr.content}></p>
    </div>


    <h2>对三才数理的影响：</h2>

    <div class="h2_content">
        <span class="brown"><strong>您的姓名三才配置为:</strong></span>
        <p><span class="red"> <{$rssancai.sancai}>。</span>它具有如下数理诱导力，据此会对人生产生一定的影响。</p>
        <p class="green bbg">
            <{$rssancai.yy}> 　　<span class="red">（<{$rssancai.jx}>）</span>
        </p>

        <span class="brown"><strong>详细解释:</strong></span><p><{$rssancai.content}></p>

        <span class="brown">〖对基础运的影响〗:</span> <p><{$rssancai.jcy}> <em class="red">（<{$rssancai.jx1}>）</em></p>
        <span class="brown">〖对成功运的影响〗:</span> <p><{$rssancai.cgy}> <em class="red">（<{$rssancai.jx2}>）</em></p>
        <span class="brown">〖对人际关系的影响〗:</span> <p><{$rssancai.rjgx}> <em class="red">（<{$rssancai.jx3}>）</em></p>
        <span class="brown">〖对性格的影响〗:</span> <p><{$rssancai.xg}></p>
    </div>

    <h2>八字姓名详批</h2>
    <div style="display: block;" id="fenxi">
        <div class="h2_content">
            <form id="sm" action="/index.php"  method="post" onSubmit="return checkbz();">

                <dd class="form">

                    <strong>姓</strong>：<input class="ipt" type="text" name="xing" id="word" maxLength=14 onBlur="if (value==''){value='请输入姓'}" onFocus="if (value=='请输入姓') {value=''}" value="<{$xm_arr.xing1}><{$xm_arr.xing2}>"><br /><br />
                    <strong>名</strong>：<input class="ipt" type="text" name="name" id="word2" maxLength=18 onBlur="if (value==''){value='请输入名'}" onFocus="if (value=='请输入名') {value=''}" value="<{$xm_arr.ming1}><{$xm_arr.ming2}>">
                </dd>
                <dd class="form">
                    <strong>生日(公历)</strong>：
                    <select name="y" id="nian" class="select">
                        <?php for($i=1910;$i<2017;$i++){ ?>
                        <?php if($i==1988){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </select>年
                    <SELECT name="m" id="yue" class="select">
                        <?php for($i=1;$i<13;$i++){ ?>
                        <?php if($i==date('m',time())){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </SELECT>月
                    <SELECT name="d" id="ri" class="select">
                        <?php for($i=1;$i<32;$i++){ ?>
                        <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </SELECT>日
                </dd>
                <dd class="form"><strong>时辰</strong>：<select size="1" name="h" id="hh" class="select">
                        <option value="0" >子&nbsp;0</option><option value="1" >丑&nbsp;1</option><option value="2"  >丑&nbsp;2</option><option value="3"  >寅&nbsp;3</option><option value="4" >寅&nbsp;4</option><option value="5"  >卯&nbsp;5</option><option value="6" >卯&nbsp;6</option><option value="7" >辰&nbsp;7</option><option value="8" >辰&nbsp;8</option><option value="9"  >巳&nbsp;9</option><option value="10"  >巳&nbsp;10</option><option value="11"  >午&nbsp;11</option><option value="12"  >午&nbsp;12</option><option value="13"  >未&nbsp;13</option><option value="14"  >未&nbsp;14</option><option value="15"  >申&nbsp;15</option><option value="16"  >申&nbsp;16</option><option value="17"  >酉&nbsp;17</option><option value="18"  >酉&nbsp;18</option><option value="19"  >戌&nbsp;19</option><option value="20"  >戌&nbsp;20</option><option value="21"  >亥&nbsp;21</option><option value="22"  >亥&nbsp;22</option><option value="23"  >子&nbsp;23</option>
                    </select>

                    <select class="select" name="i" id="minute">
                        <option value="0">未知</option>
                        <?php for($i=0;$i<60;$i++){ ?>
                        <option value="<?=$i?>"><?=$i?></option>
                        <?php }?>
                    </select>分钟
                </dd>

                <dd class="form"><strong>性别</strong>：<input type="radio" name="sex" id="mingtype1" value="0" checked>
                    <label for="mingtype1">男</label>
                    <input name="sex" type="radio" id="mingtype2" value="1" >
                    <label for="mingtype2">女</label>
                </dd>
                <dd>
                    <div align="center">
                        <input type="hidden" name=ct  value="h5_suanming">
                        <input type="hidden" name=ac  value="sm_form">
                        <input type="hidden" name=cY  value="">
                        <input type="hidden" name=cM  value="">
                        <input type="hidden" name=cD  value="">
                        <input type="hidden" name=cH  value="">
                        <input type="hidden" name=term1  value="">
                        <input type="hidden" name=term2  value="">
                        <input type="hidden" name=start_term  value="">
                        <input type="hidden" name=end_term  value="">
                        <input type="hidden" name=start_term1  value="">
                        <input type="hidden" name=end_term1  value="">
                        <input type="hidden" name=lDate  value="">
                        <input type="hidden" name="base" value="365">
                        <input type="submit" name="submit" class="button" value="马上算命" />
                        <input type="hidden" name="action" value="post">
                        <input type="hidden" name="st" value="2"></div>
                </dd>
            </form>
        </div>
    </div>


</div>
<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<{include file='./h5/public/news.tpl'}>
<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./index/footer.tpl'}>
<div class="mod_box_t2 hot_tool_part nobor_bom">
    <div class="hd hd_s1">
        <h3>算命大全</h3>
        <i class="flag_l_t2"></i>
        <i class="flag_r_t2"></i>
    </div>
    <div class="bd bd_s1">
        <ul class="mod_txt">
        <{foreach from=$public_hand_data.public_right_smdq item=v}>
   <li><a <{if $v.blank==1}>target="_blank"<{/if}> href="<{$v.url}>" <{if $v.color==1}>class="cRed"<{elseif $v.color==2}>class="cGreen"<{elseif $v.color==3}>class="cBlue"<{/if}> title="<{$v.title}>"><{$v.title}></a></li>
        <{/foreach}>    
        </ul>
    </div>
</div>

<div class="tps_zhgjm">
            <form action="<{$web_url}>" target="_blank" method="post">
            <input type="hidden" name="ct" value="zgjm" />
            <input type="hidden" name="ac" value="search" />
          <div class="dream_sc_zg clearfix">
                <span>梦见</span>
              <div class="search-text">
                <input type="text" class="dream_txt_zg" autocomplete="on" name="q" id="ser_key" value="">
              </div>
          </div>
          <input type="submit" class="btn_search" name="search_submit" value="解梦">
            </form>
    </div>

<div class="mod_box_t2 ecliptic_part nobor_bom">
    	<div class="hd hd_s1">
        <h3>今日黄历</h3>
            <i class="flag_l_t2"></i>
            <i class="flag_r_t2"></i>
        </div>
        
        <div class="bd bd_s1">
            <div class="mod_ecliptic">
                <div class="ecliptic_date">
                	<script type="text/javascript" src="/huangli.js"></script>
                </div>
            </div>
            <div class="query_btn"><a target="_blank" href="<{$web_url}>hdjr/zeri/">查吉日</a><a target="_blank" href="<{$web_url}>hdjr/lishi/">历史今天</a></div>
    	</div>
</div>
<!------>


<div class="mod_box_t2 hot_tool_part buddhist_part">
    <div class="hd hd_s1">
        <h3>星座测算</h3><i class="flag_l_t2"></i><i class="flag_r_t2"></i>
    </div>
    <div class="querys_1 querysBg">
        <table class="querys querys2">
            <form method="POST" action="<{$web_url}>index.php" target="_blank">
            <input type="hidden" name="ct" value="xingzuo" />
            <input type="hidden" name="ac" value="m_d_xz" />
                <tr>
                    <td>
                        <select class="sels1 sels3 qa" name="m">
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
                        <select class="sels1 sels3 qb" name="d">
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
                        <button class="button4" type=submit>星座查询</button>
                    </td>
                </tr>
            </form>

            <form method="post" action="<{$web_url}>index.php" target="_blank">
                <input type="hidden" name="ct" value="xingzuo">
                <input type="hidden" name="ac" value="date_xz" />
                <tr>
                    <td colspan=2>
                        <select class="sels2 sels4 qa" name="xz">
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
                        <button class="button4" type="submit">星座详解</button>
                    </td>
                </tr>
            </form>
            <form method="post" action="<{$web_url}>index.php" target="_blank">
                <input type="hidden" name="ct" value="xingzuo">
                <input type="hidden" name="ac" value="page">
                <tr>
                    <td>
                        <select class="sels1 sels3" id="q_astro" name="tid">
                            <option value="401"selected>白羊座</option>
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
                        <select class="sels1 sels3" id="q_type" name="nid">
                            <option value="1">今日运势</option>
                            <option value="2">明日运势</option>
                            <option value="3">本周运势</option>
                            <option value="4">本月运势</option>
                            <option value="5">本年运势</option>
                            <option value="6">爱情运势</option>
                        </select>
                    </td>
                    <td>
                        <button class="button3" type=submit>运 势</button>
                    </td>
                </tr>
            </form>
            <form method="post" action="<{$web_url}>index.php" target="_blank">
                <input type="hidden" name="ct" value="xingzuo">
                <input type="hidden" name="ac" value="date_xz">
                <tr>
                    <td>
                        <select class="sels1 sels3 qa" name="xz">
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
                        <select class="sels1 sels3 qb" name="xx">
                            <option value="A">A型</option>
                            <option value="B">B型</option>
                            <option value="AB">AB型</option>
                            <option value="O">O型</option>
                        </select>
                    </td>
                    <td>
                        <button class="button3" type="submit">解 读</button>
                    </td>
                </tr>
            </form>
            <form method="post" action="<{$web_url}>index.php" onSubmit="return formChaxun(2,this,'.qa','.qb')" target="_blank">
                <input type="hidden" name="ct" value="peidui" />
                <input type="hidden" name="ac" value="xingzuo" />
                <tr>
                    <td>
                        <select class="sels1 sels3 qa" name="xz1">
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
                        <select class="sels1 sels3 qb" name="xz2">
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
                        <button class="button3" type=submit>配 对</button>
                    </td>
                </tr>
            </form>
            <form action="<{$web_url}>index.php" method="post" onSubmit="return formChaxun(4,this,'.qa','.qb')" target="_blank">
                <input type="hidden" name="ac" value="shengxiao" />
                <input type="hidden" name="ct" value="peidui" />
                <tr>
                    <td>
                        <select class="sels1 sels3 qa" name="sx1">
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
                        <select class="sels1 sels3 qb" name="sx2">
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
                        <button class="button3" type="submit">配 对</button>
                    </td>
                </tr>
            </form>
            <form method="post" action="<{$web_url}>index.php" onSubmit="return formChaxun(3,this,'.qa','.qb')" target="_blank">
                <input type="hidden" name="ct" value="peidui">
                <input type="hidden" name="ac" value="xuexing">
                <tr>
                    <td>
                        <select class="sels1 sels3 qa" name="xx1">
                            <option value="A">A型</option>
                            <option value="B">B型</option>
                            <option value="O">O型</option>
                            <option value="AB">AB型</option>
                        </select>
                    </td>
                    <td>
                        <select class="sels1 sels3 qb" name="xx2">
                            <option value="A">A型</option>
                            <option value="B">B型</option>
                            <option value="O">O型</option>
                            <option value="AB">AB型</option>
                        </select>
                    </td>
                    <td>
                        <button class="button3" type="submit">配 对</button>
                    </td>
                </tr>
            </form>
            <form action="haoma.php" method="post" onSubmit="return formChaxun(5,this,'.qa','.qb')" target="_blank">
                <input type="hidden" value="haoma" name="ct">
                <input type="hidden" value="shengrimima" name="ac">
                <tr>
                    <td>
                        <select class="sels1 sels3 qa" name="m">
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
                        <select class="sels1 sels3 qb" name="d">
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
                        <button class="button4" type="submit">生日密码</button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</div>

<div class="mod_box_t2 sesx">
    <div class="hd hd_s1">
        <h3>2016十二生肖运程</h3>
        <i class="flag_l_t2"></i>
        <i class="flag_r_t2"></i>
    </div>
    <div class="bd bd_s1">
        <a href="<{$web_url}>2016/1.html" class="sx-1">鼠</a>
        <a href="<{$web_url}>2016/2.html" class="sx-2">牛</a>
        <a href="<{$web_url}>2016/3.html" class="sx-3">虎</a>
        <a href="<{$web_url}>2016/4.html" class="sx-4">兔</a>
        <a href="<{$web_url}>2016/5.html" class="sx-5">龙</a>
        <a href="<{$web_url}>2016/6.html" class="sx-6">蛇</a>
        <a href="<{$web_url}>2016/7.html" class="sx-7">马</a>
        <a href="<{$web_url}>2016/8.html" class="sx-8">羊</a>
        <a href="<{$web_url}>2016/9.html" class="sx-9">猴</a>
        <a href="<{$web_url}>2016/10.html" class="sx-10">鸡</a>
        <a href="<{$web_url}>2016/11.html" class="sx-11">狗</a>
        <a href="<{$web_url}>2016/12.html" class="sx-12">猪</a>
    </div>
</div>
<!--
<div class="mod_box_t2 horoscope_part">
    <div class="hd hd_s1">
        <h3>应用推荐</h3><i class="flag_l_t2"></i><i class="flag_r_t2"></i>
    </div>
    <div class="bd bd_s1">
        <ul class="appList clearfix">
        	<{foreach from=$public_hand_data.public_right_yingyong item=v}>
            	<li><a <{if $v.blank==1}>target="_blank"<{/if}> href="<{$v.url}>"><img src="<{$v.listimg}>" alt="<{$v.title}>" width="64" height="64"><p><{$v.title}></p></a></li>
            <{/foreach}>
        </ul>
    </div>
</div>-->
<div class="side_banner fixed">
</div>

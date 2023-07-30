<{if $topic.0}>
<dl class="mod_dl">
		<dd>
			<ul class="clearfix">
				<{foreach from=$topic item=v}>
					<li><a href="http://wp.xingyunyun.cn/<{$v.extra}>"><{$v.name}></a></li>
				<{/foreach}>
			</ul>
		</dd>
	</dl>
	<div class="clear"></div>
<{/if}>
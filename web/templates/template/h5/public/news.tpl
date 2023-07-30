<div class="detail">
	<h3>百科小知识：</h3>
	<dl>
		<ul>
			<{section loop=$public_hand_data.left_news.data_list name=news start=0 max=8}>
            	<li><a class="inlink" href="<{$public_hand_data.left_news.data_list[news].url}>"><{$public_hand_data.left_news.data_list[news].title}></a></li>
            <{/section}> 
		</ul>
	</dl>
</div>
<?php if(!defined("__XE__"))exit;
if($__Context->lang_type == 'ko'){ ?>
	<div class="search_wrap">
		<form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" class="seach_form" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
			<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
			<input type="hidden" name="search_target" value="extra_vars3" />
			<div class="search_box">
				<input type="text" name="search_keyword" id="bd_srch_btm_itx_<?php echo $__Context->mi->module_srl ?>" class="" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" placeholder="주소를 입력하세요." />
				<button type="submit" id="search_submit" class=""><i class="xi-magnifier"></i></button>
			</div>
		</form>
	</div>
	<?php if($__Context->search_keyword==''){ ?>
	<div class="li_map_box">
		<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=6e24ffcbf9915e991c16b77e488cd893&libraries=services,clusterer,drawing"></script>
		<div id="map_extra">Loading...</div>
		<script>
			jQuery(function($) {
				var mapObj = document.getElementById('map_extra'), mapOption = {center: new daum.maps.LatLng(33.450701, 126.570667),level: 3};  
				var map = new daum.maps.Map(mapObj, mapOption),geocoder = new daum.maps.services.Geocoder();
				var aftermark = function(){
					geocoder.addressSearch("대전 유성구 유성대로 1646", function(result, status) {
						if (status === daum.maps.services.Status.OK) {
						var coords = new daum.maps.LatLng(result[0].y, result[0].x);
						var marker = new daum.maps.Marker({
							map: map,
							position: coords
						});
						map.setCenter(coords);
						} 
					});
				}
				$('td.address').each(function(){
					var $add = $(this).children('p').text();
					geocoder.addressSearch($add, function(result, status) {
						if (status === daum.maps.services.Status.OK) {
						var coords = new daum.maps.LatLng(result[0].y, result[0].x);
						var marker = new daum.maps.Marker({
							map: map,
							position: coords
						});
						map.setCenter(coords);
						} 
					});
					aftermark();
				})
			});
		</script>
	</div>
	<?php }else{ ?>
	<div class="li_map_box">
		<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=6e24ffcbf9915e991c16b77e488cd893&libraries=services,clusterer,drawing"></script>
		<div id="map_extra">Loading...</div>
		<script>
			jQuery(function($) {
				var mapObj = document.getElementById('map_extra'), mapOption = {center: new daum.maps.LatLng(33.450701, 126.570667),level: 3};  
				var map = new daum.maps.Map(mapObj, mapOption),geocoder = new daum.maps.services.Geocoder();
				$('td.address').each(function(){
					var $add = $(this).children('p').text();
					geocoder.addressSearch($add, function(result, status) {
						if (status === daum.maps.services.Status.OK) {
						var coords = new daum.maps.LatLng(result[0].y, result[0].x);
						var marker = new daum.maps.Marker({
							map: map,
							position: coords
						});
						map.setCenter(coords);
						} 
					});
				})
			});
		</script>
	</div>
	<?php } ?>
<?php }else if($__Context->lang_type == 'en'){ ?>
	<div class="search_wrap">
		<form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" class="seach_form" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
			<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
			<input type="hidden" name="search_target" value="extra_vars3" />
			<div class="search_box">
				<input type="text" name="search_keyword" id="bd_srch_btm_itx_<?php echo $__Context->mi->module_srl ?>" class="" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" placeholder="Enter wanted address" />
				<button type="submit" id="search_submit" class=""><i class="xi-magnifier"></i></button>
			</div>
		</form>
	</div>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIV_FxXqVU1wl5Ol8RxyqRahRhyb97VmE&libraries=&v=weekly" defer ></script>
	<div class="li_map_box" id="li_map_box"></div>
	<?php if($__Context->search_keyword==''){ ?>
	<script>
		jQuery(function($){
			"use strict";
			const map = new google.maps.Map(document.getElementById("li_map_box"), { zoom: 16, center: { lat: -34.397, lng: 150.644 } });
			const geocoder = new google.maps.Geocoder();
			$('td.address').each(function(){
				var $add = $(this).children('p').text();
				geocodeAddress(geocoder, map);
				function geocodeAddress(geocoder, resultsMap) {
					geocoder.geocode(
						{
							address: $add
						},
						(results, status) => {
							if (status === "OK") {
								resultsMap.setCenter(results[0].geometry.location);
								new google.maps.Marker({
									map: resultsMap,
									position: results[0].geometry.location
								});
							} else {
								alert(
									"Geocode was not successful for the following reason: " + status
								);
							}
						}
					);
				}
			});
			aftermark();
			function aftermark(){
				$(window).load(function(){
					geocodeAddress(geocoder, map);
					function geocodeAddress(geocoder, resultsMap) {
						geocoder.geocode(
							{
								address: '461-6, Jeonmin-dong, Yuseong-gu, Daejeon, Republic of Korea'
							},
							(results, status) => {
								if (status === "OK") {
									resultsMap.setCenter(results[0].geometry.location);
									new google.maps.Marker({
										map: resultsMap,
										position: results[0].geometry.location
									});
								} else {
									alert(
										"Geocode was not successful for the following reason: " + status
									);
								}
							}
						);
					}
				})
			}
		})
	</script>
	<?php }else{ ?>
	<script>
		jQuery(function($){
			"use strict";
			const map = new google.maps.Map(document.getElementById("li_map_box"), { zoom: 16, center: { lat: -34.397, lng: 150.644 } });
			const geocoder = new google.maps.Geocoder();
			$('td.address').each(function(){
				var $add = $(this).children('p').text();
				geocodeAddress(geocoder, map);
				function geocodeAddress(geocoder, resultsMap) {
					geocoder.geocode(
						{
							address: $add
						},
						(results, status) => {
							if (status === "OK") {
								resultsMap.setCenter(results[0].geometry.location);
								new google.maps.Marker({
									map: resultsMap,
									position: results[0].geometry.location
								});
							} else {
								alert(
									"Geocode was not successful for the following reason: " + status
								);
							}
						}
					);
				}
			})
		})
	</script>
	<?php } ?>
<?php } ?>
<?php if($__Context->order_type=="desc"){ ?>
<?php 
$__Context->order_icon="down";
$__Context->order_type="asc";
 ?>
<?php }else{ ?>
<?php 
$__Context->order_icon="up";
$__Context->order_type="desc";
 ?>
<?php } ?>
<?php if(!$__Context->document_list && !$__Context->notice_list){ ?><p class="no_doc"><?php echo $__Context->lang->no_documents ?></p><?php } ?>
<?php if($__Context->document_list || $__Context->notice_list){ ?><table class="bd_lst bd_tb_lst bd_tb">
	<caption class="blind">List of Articles</caption>
	<thead class="bg_f_f9">
		
		<tr>
			<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
			<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><th scope="col" class="no"><span><a href="<?php echo getUrl('order_type',$__Context->order_type) ?>" title="<?php if($__Context->order_type=="desc"){;
echo $__Context->lang->order_desc;
}else{;
echo $__Context->lang->order_asc;
} ?>"><?php echo $__Context->lang->no ?></a></span></th><?php } ?>
			<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?>
			<?php if(!$__Context->mi->show_cate && $__Context->mi->use_category=='Y'){ ?><th scope="col" class="m_no"><span><?php echo $__Context->lang->category ?></span></th><?php } ?>
			<th scope="col" class="title"><span><a href="<?php echo getUrl('sort_index','title','order_type',$__Context->order_type) ?>"><?php if(!$__Context->mi->link_board){;
echo $__Context->lang->market;
}else{;
echo $__Context->lang->link_site;
};
if($__Context->sort_index=='title'){ ?><i class="arrow <?php echo $__Context->order_icon ?>"></i><?php } ?></a></span></th>
			<?php } ?>
			<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->writer ?></span></th><?php } ?>
			<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->user_id ?></span></th><?php } ?>
			<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><th scope="col"><span><?php echo $__Context->lang->user_name ?></span></th><?php } ?>
			<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><th scope="col"><span><a href="<?php echo getUrl('sort_index','regdate','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->date;
if($__Context->sort_index=='regdate'){ ?><i class="arrow <?php echo $__Context->order_icon ?>"></i><?php } ?></a></span></th><?php } ?>
			<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><th scope="col" class="m_no 1"><span><a href="<?php echo getUrl('sort_index','last_update','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->last_update;
if($__Context->sort_index=='last_update'){ ?><i class="arrow <?php echo $__Context->order_icon ?>"></i><?php } ?></a></span></th><?php } ?>
			<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><th scope="col" class="m_no 2"><span><?php echo $__Context->lang->last_post ?></span></th><?php } ?>
			<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><th scope="col" class="m_no 3"><span><a href="<?php echo getUrl('sort_index','readed_count','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->readed_count;
if($__Context->sort_index=='readed_count'){ ?><i class="arrow <?php echo $__Context->order_icon ?>"></i><?php } ?></a></span></th><?php } ?>
			<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><th scope="col" class="m_no 4"><span><a href="<?php echo getUrl('sort_index','voted_count','order_type',$__Context->order_type) ?>"><?php echo $__Context->lang->voted_count;
if($__Context->sort_index=='voted_count'){ ?><i class="arrow <?php echo $__Context->order_icon ?>"></i><?php } ?></a></span></th><?php } ?>
			<?php if($__Context->val->idx!=-1){ ?><th scope="col"<?php if($__Context->val->eid!='link_url'){ ?> class="m_no"<?php } ?>><span><a href="<?php echo getUrl('sort_index',$__Context->val->eid,'order_type',$__Context->order_type) ?>"><?php echo $__Context->val->name ?></a></span></th><?php } ?>
			<?php } ?>
			<?php if($__Context->grant->manager){ ?><th scope="col" class="m_no"><span><input type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" class="iCheck" title="Check All" /></span></th><?php } ?>
		</tr>
	</thead>
	<tbody>
		
		<?php if($__Context->notice_list&&count($__Context->notice_list))foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><tr class="notice">
			<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
			<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><td class="no">
				<?php if($__Context->document_srl==$__Context->document->document_srl){ ?>&raquo;<?php };
if($__Context->document_srl!=$__Context->document->document_srl){ ?><strong><?php echo $__Context->lang->notice ?></strong><?php } ?>
			</td><?php } ?>
			<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?>
			<?php if(!$__Context->mi->show_cate && $__Context->mi->use_category=='Y'){ ?><td class="cate"<?php if($__Context->category_list[$__Context->document->get('category_srl')]->color!='transparent'){ ?> style="color:<?php echo $__Context->category_list[$__Context->document->get('category_srl')]->color ?>"<?php } ?>><strong><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></strong></td><?php } ?>
			<td class="title">
				<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl, 'listStyle', $__Context->listStyle, 'cpage','') ?>"><strong><?php echo $__Context->document->getTitle($__Context->mi->subject_cut_size) ?></strong></a>
				<?php if(!$__Context->mi->link_board){ ?>
				<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#<?php echo $__Context->document->document_srl ?>_comment" class="replyNum" title="<?php echo $__Context->lang->comment ?>"><?php echo $__Context->document->getCommentCount() ?></a><?php } ?>
				<?php if($__Context->document->getTrackbackCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#<?php echo $__Context->document->document_srl ?>_trackback" class="trackbackNum" title="<?php echo $__Context->lang->trackback ?>"><?php echo $__Context->document->getTrackbackCount() ?></a><?php } ?>
				<?php } ?>
				<?php if($__Context->document->getExtraEidValue('event')){ ?>
				<?php if($__Context->document->getExtraEidValueHTML('event') == 'Y'){ ?><div class="event_ic">E</div><?php } ?>
				<?php } ?>
				<?php if($__Context->document->getExtraEidValue('new_open')){ ?>
				<?php if($__Context->document->getExtraEidValueHTML('new_open') == 'Y'){ ?><div class="open_ic">N</div><?php } ?>
				<?php } ?>
				<!-- <span class="extraimages"><?php echo $__Context->document->printExtraImages(60*60*$__Context->mi->duration_new) ?></span> -->
			</td>
			<?php } ?>
			<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><td class="author"><span><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></span></td><?php } ?>
			<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><td class="author"><span><?php echo $__Context->document->getUserID() ?></span></td><?php } ?>
			<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><td class="author"><span><?php echo $__Context->document->getUserName() ?></span></td><?php } ?>
			<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><td class="time"><?php echo $__Context->document->getRegdate('Y.m.d') ?></td><?php } ?>
			<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><td class="time m_no"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?></td><?php } ?>
			<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><td class="time last_post m_no">
				<?php if((int)($__Context->document->get('comment_count'))>0){ ?>
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl) ?>#<?php echo $__Context->document->document_srl ?>_comment" title="<?php echo getTimeGap($__Context->document->get('last_update'), "H:i") ?>"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d');
if($__Context->document->getLastUpdater()){ ?><small>(by <?php echo $__Context->document->getLastUpdater() ?>)</small><?php } ?></a>
				<?php } ?>
				<?php if((int)($__Context->document->get('comment_count'))==0){ ?>&nbsp;<?php } ?>
			</td><?php } ?>
			<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><td class="m_no"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></td><?php } ?>
			<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><td class="m_no"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></td><?php } ?>
			<?php if($__Context->val->idx!=-1){ ?><td<?php if($__Context->val->eid!='link_url'){ ?> class="m_no"<?php } ?>><?php if($__Context->val->eid=='rating'){ ?><span class="starRating" title="<?php echo $__Context->document->getExtraValueHTML($__Context->val->idx);
echo $__Context->lang->score ?>"><span style="width:<?php echo $__Context->document->getExtraValueHTML($__Context->val->idx)*10 ?>%"><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?></span></span><?php }else{;
echo $__Context->document->getExtraValueHTML($__Context->val->idx);
} ?></td><?php } ?>
			<?php } ?>
			<?php if($__Context->grant->manager){ ?><td class="check m_no"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /></td><?php } ?>
		</tr><?php } ?>
		
		<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><tr<?php if($__Context->document_srl==$__Context->document->document_srl){ ?> class="select"<?php } ?>>
			<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
			<?php if($__Context->val->type=='no' && $__Context->val->idx==-1){ ?><td class="no">
				<?php if($__Context->document_srl==$__Context->document->document_srl){ ?>&raquo;<?php } ?>
				<?php if($__Context->document_srl!=$__Context->document->document_srl){;
echo $__Context->no;
} ?>
			</td><?php } ?>
			<?php if($__Context->val->type=='title' && $__Context->val->idx==-1){ ?>
			<?php if(!$__Context->mi->show_cate && $__Context->mi->use_category=='Y'){ ?><td class="cate"><span<?php if($__Context->category_list[$__Context->document->get('category_srl')]->color!='transparent'){ ?> style="color:<?php echo $__Context->category_list[$__Context->document->get('category_srl')]->color ?>"<?php } ?>><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></span></td><?php } ?>
			<td class="title">
				
				<?php if(!$__Context->mi->preview || (@!in_array('tx',$__Context->mi->preview) && !$__Context->document->thumbnailExists())){ ?>
				<a <?php if(!$__Context->mi->link_board){ ?>href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle,'cpage','') ?>"<?php }else{ ?>href="<?php echo $__Context->document->getExtraEidValue('link_url') ?>" target="_blank"<?php } ?> class="hx" data-viewer="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle','viewer','page','') ?>">
					<?php echo $__Context->document->getTitle($__Context->mi->subject_cut_size) ?>
				</a>
				<?php }else{ ?>
				<a <?php if(!$__Context->mi->link_board){ ?>href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle',$__Context->listStyle,'cpage','') ?>"<?php }else{ ?>href="<?php echo $__Context->document->getExtraEidValue('link_url') ?>" target="_blank"<?php } ?> class="hx bubble no_bubble<?php if(@!in_array('tx',$__Context->mi->preview)){ ?> only_img<?php } ?>" data-viewer="<?php echo getUrl('document_srl',$__Context->document->document_srl,'listStyle','viewer','page','') ?>">
					<?php echo $__Context->document->getTitle($__Context->mi->subject_cut_size) ?>
					<?php if(!$__Context->document->isSecret()){ ?><span class="wrp">
						<?php if($__Context->document->thumbnailExists() && @in_array('img',$__Context->mi->preview)){ ?><img src="<?php echo $__Context->document->getThumbnail($__Context->mi->thumbnail_width,$__Context->mi->thumbnail_height,$__Context->mi->thumbnail_type) ?>" alt="" /><?php } ?>
						<span class="speech"><?php echo htmlspecialchars($__Context->document->getSummary($__Context->mi->preview_tx)) ?></span><i class="edge"></i>
						<i class="ie8_only bl"></i><i class="ie8_only br"></i>
					</span><?php } ?>
				</a>
				<?php } ?>
				<?php if(!$__Context->mi->link_board){ ?>
				<?php if($__Context->document->getCommentCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#<?php echo $__Context->document->document_srl ?>_comment" class="replyNum" title="<?php echo $__Context->lang->comment ?>"><?php echo $__Context->document->getCommentCount() ?></a><?php } ?>
				<?php if($__Context->document->getTrackbackCount()){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#<?php echo $__Context->document->document_srl ?>_trackback" class="trackbackNum" title="<?php echo $__Context->lang->trackback ?>"><?php echo $__Context->document->getTrackbackCount() ?></a><?php } ?>
				<?php } ?>
				<!-- <span class="extraimages"><?php echo $__Context->document->printExtraImages(60*60*$__Context->mi->duration_new);
if($__Context->document->thumbnailExists()){ ?><i class="attached_image" title="Image"></i><?php } ?></span> -->
				<?php if($__Context->mi->link_board && $__Context->document->isEditable()){ ?><a class="link_modify" href="<?php echo getUrl('document_srl',$__Context->document->document_srl) ?>"><?php echo $__Context->lang->cmd_modify ?></a><?php } ?>
				<?php if($__Context->document->getExtraEidValue('event')){ ?>
				<?php if($__Context->document->getExtraEidValueHTML('event') == 'Y'){ ?><div class="event_ic">E</div><?php } ?>
				<?php } ?>
				<?php if($__Context->document->getExtraEidValue('new_open')){ ?>
				<?php if($__Context->document->getExtraEidValueHTML('new_open') == 'Y'){ ?><div class="open_ic">N</div><?php } ?>
				<?php } ?>
			</td>
			<?php } ?>
			<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><td class="author"><span><a href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?>" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></span></td><?php } ?>
			<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><td class="author"><span><?php echo $__Context->document->getUserID() ?></span></td><?php } ?>
			<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><td class="author"><span><?php echo $__Context->document->getUserName() ?></span></td><?php } ?>
			<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><td class="time" title="<?php echo getTimeGap($__Context->document->get('regdate'), "H:i") ?>"><?php echo $__Context->document->getRegdate('Y.m.d') ?></td><?php } ?>
			<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><td class="time last_update m_no"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d') ?></td><?php } ?>
			<?php if($__Context->val->type=='last_post' && $__Context->val->idx==-1){ ?><td class="time last_post m_no">
				<?php if((int)($__Context->document->get('comment_count'))>0){ ?>
					<a href="<?php echo getUrl('document_srl',$__Context->document->document_srl) ?>#<?php echo $__Context->document->document_srl ?>_comment" title="<?php echo getTimeGap($__Context->document->get('last_update'), "H:i") ?>"><?php echo zdate($__Context->document->get('last_update'),'Y.m.d');
if($__Context->document->getLastUpdater()){ ?><small>(by <?php echo $__Context->document->getLastUpdater() ?>)</small><?php } ?></a>
				<?php } ?>
				<?php if((int)($__Context->document->get('comment_count'))==0){ ?>&nbsp;<?php } ?>
			</td><?php } ?>
			<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><td class="m_no"><?php echo $__Context->document->get('readed_count')>0?$__Context->document->get('readed_count'):'0' ?></td><?php } ?>
			<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><td class="m_no"><?php echo $__Context->document->get('voted_count')!=0?$__Context->document->get('voted_count'):'0' ?></td><?php } ?>
			<?php if($__Context->val->idx!=-1){ ?><td class="<?php echo $__Context->val->eid ?> <?php if($__Context->val->eid=='link_url'){ ?>link_url<?php }else{ ?>m_no<?php } ?>"><?php if($__Context->val->eid=='rating'){ ?><span class="starRating" title="<?php echo $__Context->document->getExtraValueHTML($__Context->val->idx);
echo $__Context->lang->score ?>"><span style="width:<?php echo $__Context->document->getExtraValueHTML($__Context->val->idx)*10 ?>%"><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?></span></span><?php }else{ ?><p><?php echo $__Context->document->getExtraValueHTML($__Context->val->idx) ?></p><?php } ?></td><?php } ?>
			<?php } ?>
			<?php if($__Context->grant->manager){ ?><td class="check m_no"><input type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" class="iCheck" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /></td><?php } ?>
		</tr><?php } ?>
	</tbody>
</table><?php } ?>
<? $update = aql::update('website_page',array('url_specific'=>1),$_POST['website_page_id']); if ($update === true) { ?>
This page is set to URL SPECIFIC. The URL is <?=$_SERVER['HTTP_HOST'].$_POST['uri']?>
<input type="hidden" id="uri_enabled" value="<?=$_POST['uri']?>" />
<? } ?>
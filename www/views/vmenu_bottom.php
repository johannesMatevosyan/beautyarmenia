<table border="0" cellpadding="0" cellspacing="0" class="tableMenu">
<tr>

<?foreach($vmenu as $uri => $link) :?>
<?;?> 
<?if(++$i !== 1) echo'<td class="mids">|</td>'; ?>          
<?if($link == $page['menu_name']):?>
				<td width=2 class="mbordl leftActive">&nbsp;</td>
				<td  class="mtditem midActive">	
				<a class="menu menuActive mitem_home" href="<?=$uri?>"><span class="TextActiveMenu"><?=$link?></span></a>
         <?else:?>
				<td width=2 class="mbordr rightActive">&nbsp;</td>
				<td width=2 class="mbordl">&nbsp;</td>
				<td  class="mtditem">
				<a class="menu mitem_services" href="<?=$uri?>"><span class="TextItemMenu"><?=$link?></span></a>
				
          <?endif?>
</td>
 <?endforeach?>

	<td width=2 class="mbordr">&nbsp;</td>
	
</tr>
</table>

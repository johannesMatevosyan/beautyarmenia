<td valign="top" width="280" align="left" id="td17">
                        <div id="content1">
                            <div class="content" id="cont_txt" style=""
                                 onDblClick="document.location.href='#edraz_1001';"><h3 class="contentTitle" style="">
 <? if($lang=='eng'): ?>
  <span class="contentTitleTxt" style="font-size:14px; font-weight:bold;">Ask experts</span>
                            </h3>

                                <div class="object" onDblClick="document.location.href='#edobjh_1001_1';"><img
                                    border="0" class="objectImage" src="views/images/closeup_portrait5_prev.jpg"
                                    border="0" alt=""/>

                                    <div id="objectNoteNews">Dear visitor experts will answer your questions.																	
									</div>
									<br/>
									<div style="width: 280px;">
									<a href="/contact">Ask experts</a>&nbsp;&nbsp;&nbsp;<a href="/answer">View аnswers</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div id="global6">
                            <div class="content" id="cont_news" style=""
                                 onDblClick="document.location.href='#edraz_106001';"><h3 class="contentTitle" style="">
                                <span class="contentTitleTxt"
                                      style="font-size:14px; font-weight:bold;">News</span></h3>
 <? elseif($lang=='rus'): ?>
  <span class="contentTitleTxt" style="font-size:14px; font-weight:bold;">Вопросы экспертам</span>
                            </h3>

                                <div class="object" onDblClick="document.location.href='#edobjh_1001_1';"><img
                                    border="0" class="objectImage" src="views/images/closeup_portrait5_prev.jpg"
                                    border="0" alt=""/>

                                    <div id="objectNoteNews">Уважаемый посетитель высококачественные специалисты ответят на ваши вопросы.												
									</div>
									<div style="width: 280px;">
									<br/> <a href="/contact">Вопросы экспертам</a>&nbsp;&nbsp;&nbsp;<a href="/answer">Показать ответы</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div id="global6">
                            <div class="content" id="cont_news" style=""
                                 onDblClick="document.location.href='#edraz_106001';"><h3 class="contentTitle" style="">
                                <span class="contentTitleTxt"
                                      style="font-size:14px; font-weight:bold;">Hовости</span></h3> 
 <? else: ?>
                                <span class="contentTitleTxt" style="font-size:14px; font-weight:bold;">Հարցնել մասնագետին</span>
                            </h3>

                                <div class="object" ><img border="0" class="objectImage" align="left" src="views/images/closeup_portrait5_prev.jpg"/>

                                    <div id="objectNoteNews">Հարգելի այցելու Ձեր հարցերին կպատասխանեն պատրաստված մասնագետները
																				
									</div>
									<br/>
									<div style="width: 280px;">
									<a href="/contact" style="color: #7C3015">Հարցնել մասնագետին</a>
																				&nbsp;&nbsp;&nbsp;<a href="/answer" style="color: #7C3015">Դիտել պատասխանները</a>
																				 </div>
                                </div>
                            </div>
                        </div>
                        <div id="global6">
                            <div class="content" id="cont_news" style=""
                                 onDblClick="document.location.href='#edraz_106001';"><h3 class="contentTitle" style="">
                                <span class="contentTitleTxt"
                                      style="font-size:14px; font-weight:bold;">Նորություններ</span></h3>
<? endif ?>	
<?
require_once "controllers/cmenunews.php" ;
	foreach($vmenu_news as $news_arrays) {
?>
		
                                <div class="object" onDblClick="document.location.href='<?=$news_arrays[uri]?>';">
								<h4 class="objectTitle">
								<a class="objectTitleTxt" style="font-size:14px;" href="<?=$news_arrays[uri]?>"><?=$news_arrays[menu_name]?></a><br/><br/>
								<span id="dataType_date"><?=$news_arrays[created]?>&nbsp;</span>
									</h4>
									<? if($news_arrays[picuri]): ?>
									<a href="<?=$news_arrays[uri]?>"> <img border="0" class="objectImage"
                                                                       src="<?=$news_arrays[picuri]?>"
                                                                       border="0" alt="Совершенный маникюр"
                                                                       title="Совершенный маникюр" > </a>
									<? endif ?>

                                    <div class="objectNote"><?=$news_arrays[heading]?></div>
                                </div>
<?
	}
?>

                                </div>
                            </div>
                        </div>
                    </td>
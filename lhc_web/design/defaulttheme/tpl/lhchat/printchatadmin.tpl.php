<div class="fs11">
<h2><?php echo htmlspecialchars($chat->nick)?><?php $chat->city != '' ? print ', '.htmlspecialchars($chat->city) : ''?>, <?php echo date('Y-m-d H:i:s',$chat->time)?> <div class="right">IP:<?php echo $chat->ip?>, ID: <?php echo $chat->id?></div></h2>
<?php include(erLhcoreClassDesign::designtpl('lhchat/lists/msg_obj_list_admin.tpl.php'));?>
</div>
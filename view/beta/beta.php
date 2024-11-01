<?php /* Visual beta-template v1.04 */
   $options = get_option('visualsound_options');
   if ($options['suplugin']) {
     $visualattribution = '<a href="http://visualsound.be" target="_blank" style="text-decoration:none" title="' . $visualsound_by . ' ">+</a>'; 
   }
   if ($param_mode == "playtrack" || $param_mode == "playset") {
     if ($options['no_caca'] == "true" && !is_single()) { $autostart = "false"; } else { $autostart = "true"; }
   } else { $autostart = "false"; } 
?>

<div style="font-size: 11px;">
Visual-Sound debug mode
<hr noshade>
<ul><li>Main parameters:</li>
<ul>
<li>Called mode: <?php echo $param_mode?></li>
<li>Through user: <?php echo $param_user?></li>
<li>Via location: <?php echo $param_loc?></li>
<li>Beta template: v0.1</li>
</ul>
<li>Sub parameters:</li>
<ul>
<li>Applet dimensions: <?php echo $options['appletwidth']?> x <?php echo $options['appletheight']?></li>
<li>Show Cloud comments: <?php echo $options['appletcomments']?></li>
<li>Applet Color: <?php echo $options['appletcolor']?> ; Theme Color: <?php echo $options['themecolor']?>; Comments Color: <?php echo $options['commentscolor']?></li>
<li>Autostart: (forced) <?php echo $options['no_caca']?> // (filtered) <?php echo $autostart?> // (is_single) <?php echo is_single() ?>
</ul>
<li>Important !
<ul>
<li>If any of these parameters don't show up, disable/re-enable the plug-in to reset the defaults
<li>The right syntax [provider command username location] should be used at all times!
<li>An example of this syntax with Soundcloud as provider is: [soundcloud playtrack wildchild trackname-to-play]
<li>Find the settings in Settings \\ VisualSound !
<li>If all debug parameters look correct, your applet "should" work ... 
</ul>
</ul>

</div> 

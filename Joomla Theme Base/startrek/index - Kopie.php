<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
JHtml::_('behavior.framework', true);

include_once (dirname(__FILE__).DS.'ja_vars.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>"dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<script language="JavaScript" type="text/javascript"><!--function MM_reloadPage(init) {  //reloads the window if Nav4 resized  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }} else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();} MM_reloadPage(true);//--></script>
<style type="text/css">
<!--
body {
	background-color: #000000;
}
-->
</style>

</head>





<body>
<?php echo "<link rel=\"stylesheet\" href=\"templates/<?php echo $this->template ?>/css/template.css\" type=\"text/css\">" ; ?>
<table width="980" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr align="center">
    <td width="160" height="2"></td>
    <td width="5"></td>
    <td width="650"></td>
    <td width="5"></td>
    <td width="160"></td>
  </tr>
  <tr align="center">
    <td height="85" colspan="5" valign="top" background="<?php echo $mosConfig_live_site;?>/templates/<?php echo $this->template ?>/images/lcars_r1_c1.gif">
<jdoc:include type="modules" name="banners" style="xhtml" />
<img border="0" src="/templates/<?php echo $this->template ?>/images/numbers.gif" width="493" height="73">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
  </tr>
  <tr align="left" valign="middle">
    <td height="20" colspan="5"><span class="pathway">

				<jdoc:include type="modules" name="breadcrumb" />

      
      </span></td>
  </tr>
  <tr>
    <td height="45" colspan="5" valign="top" background="<?php echo $mosConfig_live_site;?>/templates/<?php echo $this->template ?>/images/lcars_r3_c1.png"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr align="center">
    <td height="210" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">



        <tr>
          <td width="160" height="25" align="center" valign="middle"><span class="small"><?php 
DEFINE('_DATE_FORMAT_LC',"%A, %d %B %Y"); //Verwendet das PHP strftime Format
DEFINE('_DATE_FORMAT_LC2',"%A, %d %B %Y %H:%M");

echo (strftime (_DATE_FORMAT_LC)); ?>

</span></td>
        </tr>



        <tr>
          <td height="155" align="left" valign="top">
<jdoc:include type="modules" name="left" style="xhtml" />

        </tr>
        <tr>
          <td height="30" align="left" valign="top">
<jdoc:include type="modules" name="user1" style="xhtml" />
        </tr>
      </table></td>
    <td>&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="650" height="210" align="left" valign="top">

<jdoc:include type="modules" name="top" style="xhtml" />


<jdoc:include type="component" style="xhtml" />



<jdoc:include type="modules" name="bottom" style="xhtml" />
<jdoc:include type="modules" name="inset" style="xhtml" />
</td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="160" height="25" align="center" valign="middle">

<jdoc:include type="modules" name="search" style="xhtml" />
</td>
        </tr>
        <tr>
          <td height="155" align="left" valign="top">
<jdoc:include type="modules" name="right" style="xhtml" />


</td>
        </tr>
        <tr>
          <td height="30" align="left" valign="top">
<jdoc:include type="modules" name="user2" style="xhtml" />
</td>
        </tr>
      </table></td>
  </tr>




  <tr>
    <td height="20" colspan="5" valign="top">    


<div align="center">
	<jdoc:include type="modules" name="user3" style="xhtml" />
</div>




</td>
  </tr>






  <tr align="center" valign="middle">
    <td height="50" colspan="5" background="<?php echo $mosConfig_live_site;?>/templates/<?php echo $this->template ?>/images/lcars_r11_c1.gif">

      <div align="right"></div></td>
  </tr>
  <tr>
    <td height="20" colspan="5" valign="top">    


<div align="center">
	&copy; <?php echo JHTML::_('date',  'now', '%Y' ) . ' ' . $app->getCfg('sitename'); ?>
</div>




</td>
  </tr>
</table>
</body>
</html>
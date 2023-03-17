<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;




/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>



<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>"dir="<?php echo $this->direction; ?>" >
  
<head>
<jdoc:include type="metas" />
<jdoc:include type="styles" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

<jdoc:include type="scripts" />


<script language="JavaScript" type="text/javascript"><!--function MM_reloadPage(init) {  //reloads the window if Nav4 resized  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }} else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();} MM_reloadPage(true);//--></script> 

  
</head>




<body style="background-image:url(templates/<?php echo $this->template ?>/images/back.jpg); background-repeat:no-repeat">




  
  
  <table style="background-color:black; "width="1236" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr align="center">
    <td bgcolor="#000000" width="160" height="2"></td>
    <td bgcolor="#000000" width="10"></td>
    <td bgcolor="#000000" width="906"></td>
    <td bgcolor="#000000" width="10"></td>
    <td bgcolor="#000000" width="160"></td>
  </tr>
  <tr align="center">
    <td bgcolor="#000000" height="85" colspan="5" valign="top" background="<?php echo $url = JUri::base(true);?>/templates/<?php echo $this->template ?>/images/lcars_r1_c1.gif">
<jdoc:include type="modules" name="banners" style="xhtml" />
<img border="0" src="/templates/<?php echo $this->template ?>/images/numbers2.gif" width="400" height="60">
<img border="0" src="/templates/<?php echo $this->template ?>/images/numbers2.gif" width="400" height="60">

</td>
  </tr>
  <tr align="left" valign="middle">
    <td bgcolor="#000000" height="20" colspan="5"><span class="pathway">

        <jdoc:include type="modules" name="breadcrumb" />

      
      </span></td>
  </tr>
  <tr>
    <td bgcolor="#000000" height="45" colspan="5" valign="top" background="<?php echo $url = JUri::base(true);?>/templates/<?php echo $this->template ?>/images/lcars_r3_c1.png"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr align="center">
    <td bgcolor="#000000" height="210" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">



        <tr>
          <td bgcolor="#000000" bgcolor="#FFFFFF" width="160" height="25" align="center" valign="middle"><span class="small">

<?php 

setlocale(LC_TIME, "de_DE.UTF-8");

DEFINE('_DATE_FORMAT_LC', "%A, der %d. %B %Y"); //Verwendet das PHP strftime Format
DEFINE('_DATE_FORMAT_LC2', "%A, %d %B %Y %H:%M");

echo (strftime (_DATE_FORMAT_LC)); ?>

</span></td>
        </tr>



        <tr>
          <td bgcolor="#000000" height="155" align="center" valign="top">
<jdoc:include type="modules" name="left" style="xhtml" />

        </tr>
        <tr>
          <td bgcolor="#000000" height="30" align="left" valign="top">
<jdoc:include type="modules" name="user1" style="xhtml" />
        </tr>
      </table></td>
    <td bgcolor="#000000" >&nbsp;</td>
    <td bgcolor="#000000" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#000000" width="650" height="210" align="left" valign="top">

<jdoc:include type="modules" name="position-1" style="xhtml" />


<jdoc:include type="component" style="xhtml" />



<jdoc:include type="modules" name="bottom" style="xhtml" />
<jdoc:include type="modules" name="inset" style="xhtml" />
</td>
        </tr>
      </table></td>
    <td bgcolor="#000000" >&nbsp;</td>
    <td bgcolor="#000000" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#000000" width="160" align="center" valign="middle">

<jdoc:include type="modules" name="search" style="xhtml" />
</td>
        </tr>
        <tr>
          <td bgcolor="#000000" height="155" align="left" valign="top">
<jdoc:include type="modules" name="right" style="xhtml" />
            <p align="center">USS Defiant<br>NX-74205</p>
            
            <img src="templates/<?php echo $this->template ?>/images/anim01.gif" border="0" alt="Defiant" width="160" height="221" style="vertical-align: middle;" />

            <p align="right">
            
            <img src="templates/<?php echo $this->template ?>/images/mapbuttons.gif" border="0" alt="Defiant" width="141" height="378" style="vertical-align: middle;" />
</p>


</td>
        </tr>
        <tr>
          <td bgcolor="#000000" height="30" align="left" valign="top">
<jdoc:include type="modules" name="user2" style="xhtml" />
</td>
        </tr>
      </table></td>
  </tr>




  <tr>
    <td bgcolor="#000000" height="20" colspan="5" valign="top">    


<div align="center">
  <jdoc:include type="modules" name="user3" style="xhtml" />
</div>




</td>
  </tr>


  <tr align="center" valign="middle">
    <td bgcolor="#000000" height="50" colspan="5" >
      <div align="center"><img src="templates//<?php echo $this->template ?>/images/fwscan.gif" border="0" width="284" height="138" style="vertical-align: bottom; border: 0;" /><img src="templates//<?php echo $this->template ?>/images/placeholder.png" border="0" alt="placeholder" width="579" height="193" style="vertical-align: top;" /><img src="templates//<?php echo $this->template ?>/images/evolution.gif" border="0" alt="Evolution" width="373" height="193" style="vertical-align: top; border: 0;" /></div></td>
  </tr>


            
            
         

            


  <tr align="center" valign="middle">
    <td bgcolor="#000000" height="50" colspan="5" background="<?php echo $url = JUri::base(true);?>/templates/<?php echo $this->template ?>/images/lcars_r11_c1.gif">

      <div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#000000" height="20" colspan="5" valign="top">    

      

      

<div align="center">
  &copy; <?php echo JHTML::_('date',  'now', 'Y' ) . ' ' . $app->getCfg('sitename'); ?>
</div>

    
<div align="center">
Star Trek, Star Trek: The Animated Series, Star Trek: The Next Generation, Star Trek: Deep Space Nine, Star Trek: Voyager, <br/>
Star Trek: Enterprise, Star Trek: Discovery, Star Trek: Short Treks, and Star Trek: Picard <br/>
are all registered trademarks of <a target="_blank" href="//www.cbscorporation.com/">CBS Corporation</a>    
</div>
  <br/>

</td>
  </tr>
</table>
</body>
</html>
<?php if($results->autoresponder != '' && $results->showEmail == 'show') { ?>
<?php echo stripslashes($results->emailText); ?>
<!-- Autoresponder -->
<form action="" method="post" class="ARform">
<strong><i class="fa fa-user"></i> Your Name:</strong>
<input type="text" placeholder="Your Full Name" class="form-control name"  id="optinName" />
<strong><i class="fa fa-envelope"></i> Your Email Address:</strong>
<input type="email" <?php if($results->ar == "mailchimp") { echo 'name="EMAIL" '; } else { echo 'name="email" '; } ?> placeholder="Your Email Address" class="form-control email"  id="optinEmail" />

<button class="btn btn-<?php echo stripslashes($results->emailButtonColor); ?> btn-lg btn-block trackClick" style="margin-top: 20px"><?php echo stripslashes($results->emailButton); ?></button>
      <?php if($results->emailImage2 != '') { ?>
    <img src="<?php echo stripslashes($results->emailImage2); ?>" style="display: block;margin: 5px auto; max-width: 60%">  
    <?php } ?>
        <div class='ARhidden'></div>
    </form>
   <div id="autoresponder" style="display: none">
      <textarea id="autoresponderCode" name="autoresponderCode"><?php echo stripslashes($results->autoresponder); ?></textarea>
      <input type="text"  name="arname" id="arname" value="" />
      <input type="text"   name="aremail" id="aremail" value="" />
      <input type="text"   name="arform" id="arform" value="" />
      <textarea id="arhidden"   name="arhidden"></textarea>
      <div id="arcode_debug"><div id="arcode_hdn_div"></div><div id="arcode_hdn_div2"></div></div>
    </div>
    <br>
    <?php } else { ?>
    <?php echo stripslashes($results->emailText); ?>
    <a href="<?php echo stripslashes($results->emailURL); ?>#" class="btn btn-lg btn-block btn-<?php echo stripslashes($results->emailButtonColor); ?> trackClick"><?php echo stripslashes($results->emailButton); ?></a>
    <?php if($results->emailImage2 != '') { ?>
    <img src="<?php echo stripslashes($results->emailImage2); ?>" style="display: block;margin: 5px auto; max-width: 60%">  
    <?php } ?>
<?php } ?>
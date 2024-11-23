<!-- Pull data on members from the server using the $wpdb class -->

<?php
  $members = $wpdb->get_results("SELECT `ID`, `page_link`, `image_link`, `full_title`, `country` FROM `tag_members` WHERE `member_status` = 'active' ORDER BY `full_title` ");

  foreach($members as $member){
?>
    <div class="col-sm">
      <a href="<?php echo $member->page_link; ?>">
        <div class="member-card">
          <div class="member-image-holder">
            <img class="member-image" src="<?php echo $member->image_link; ?>" alt="" width="100%">
          </div>
<?php
if($member->ID == 43){
?>
          <p class="member-info"><b>TAG Chair</b></p><br><br>
<?php 
}
if($member->ID == 58){
?>
            <p class="member-info"><b>Webmaster</b></p><br><br>
<?php 
}
?>
          <p class="member-info">Country: <?php echo $member->country; ?> </p>
          <h4 class="member-title"> <?php echo $member->full_title; ?> </h4>
        </div>
      </a>
    </div>
<?php
  }
?>

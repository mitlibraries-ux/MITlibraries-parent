<?php
/**
 * Template Name: Location Hours *JSON* Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

$pageRoot = getRoot($post);
$section = get_post($pageRoot);
if (!$_GET["d"]) {
  $inDate = "Now";
} else {
  $inDate = $_GET["d"];
}

get_header();

$nextMon = "next monday";

$dt = strtotime($inDate);
$dtMo = date("n", $dt);
$dtDay = date("j", $dt);
$dtYear = date("Y", $dt);
$dtWeek = date("W", $dt);
$dtWeekday = date("N", $dt);

?>
<link rel='stylesheet' id='hours-css'  href='/wp-content/themes/libraries/libs/datepicker/styles/glDatePicker.default.css' type='text/css' media='all' />
<link rel='stylesheet' id='hours-css'  href='/wp-content/themes/libraries/css/build/minified/hours.min.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id=''  href='/wp-content/themes/libraries/css/mobile.css' type='text/css' media='all' />
<script src="<?php echo get_template_directory_uri(); ?>/libs/datepicker/glDatePicker.min.js"></script>
<script>
  todayDate = new Date(<?php echo $dtYear; ?>,<?php echo ($dtMo-1); ?>,<?php echo $dtDay; ?>);
</script>
<?php

//$today = strtotime($dtYear."W".$dtWeek.$dtWeekday);
$today = strtotime($inDate);
$dtTodayMo = date("n");
$dtTodayDay = date("j");
$dtTodayYear = date("Y");
$dtTodayWeek = date("W");
$dtTodayWeekday = date("N");


$now = strtotime($dtTodayYear."W".$dtTodayWeek.$dtTodayWeekday);

$wk = date("W", $dt);

if ($wk == "01" && $dtMo == "12") {
  $dtYear++;
} 

$mon = strtotime($dtYear."W".$wk."1");
$tue = strtotime($dtYear."W".$wk."2");
$wed = strtotime($dtYear."W".$wk."3");
$thu = strtotime($dtYear."W".$wk."4");
$fri = strtotime($dtYear."W".$wk."5");
$sat = strtotime($dtYear."W".$wk."6");
$sun = strtotime($dtYear."W".$wk."7");

$arDays = array();

$arDays[] = $mon;
$arDays[] = $tue;
$arDays[] = $wed;
$arDays[] = $thu;
$arDays[] = $fri;
$arDays[] = $sat;
$arDays[] = $sun;

$dfDow = "M j";
$dfDowMobile = 'M \<\b\r\\/> j';


$path = get_permalink();

$prevWeek = date("Y-n-j", strtotime("-7 day", $today));
$nextWeek = date("Y-n-j", strtotime("+7 day", $today));
$thisWeek = date("Y-n-j");

 ?>

<div id="stage" class="hoursHeader inner hours group" role="main">
  <div class="title-page flex-container">
    <div class="libraryContent">
      <h1>
        <?php showBreadTitle(); ?>
      </h1>
    </div>
    <div class="middleAlert">
      <?php
    if ( have_posts() ) :
  while ( have_posts() ) : the_post(); 
          the_content(); ?>
      <?php  endwhile;  endif; wp_reset_query();  ?>
    </div>
    <div class="wrap-cal-hours hidden-phone">
      <div id="hourCalendar" class="cal-hours"> </div>
    </div>
  </div>
  <!-- end div.title-page --> 
  
  <script type="text/javascript">
        jQuery(window).load(function(){
      
        jQuery("#hourCalendar").glDatePicker({
      cssName: "default",
      showAlways: true,
      selectedDate: todayDate,
      prevArrow: '<i class="icon-arrow-left"></i>',
      nextArrow: '<i class="icon-arrow-right"></i>',
      dowNames: "SMTWTFS",
      dowOffset: 1,
    onClick: function(target, cell, date, date2) {
    var newDate = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
    var path = window.location.pathname;
    var newUrl = path+"?d="+newDate;
    window.location = newUrl;
  }
  
});
      
      
      
        });
</script> 
</div>
<!--stage ends-->
<div id="content" class="content-main">
  <div id="hourContent" class="content-page">
    <div id="hourNav-sticky-wrapper" class="sticky-wrapper" style="height: 0px;">
      <div id="hourNav" style="width: 1008px;">
        <div id="prevWeek"> <i class="icon-arrow-left"></i> <a href="<?php echo $path."?d=".$prevWeek; ?>">Previous week</a> </div>
        <div id="thisWeek"> <a href="<?php echo $path."?d=".$thisWeek; ?>">This week</a> </div>
        <div id="nextWeek"> <a href="<?php echo $path."?d=".$nextWeek; ?>">Next week</a> <i class="icon-arrow-right"></i> </div>
      </div>
    </div>
    <style type="text/css">
.hrList td.loc {
  width:200px;
}
tr:nth-child(even) td {
  background: #eceaea; 
}
 </style>
    <!-- TABLE BEGINS -->
    
    <table class="hrList">
      <thead>
        <tr>
      <th class="name">Locations</th>
        <?php $next = ""; ?>
        <?php $i = 0; $day = $arDays[$i]; ?>
        <th class="fullDay firstDisplay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 1; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 2; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 3; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 4; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 5; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 6; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
          </thead>
        </tr>
      <tbody>
        <?php
$args = array(
'post_type' => 'location',
'meta_key' => 'primary_location',
'meta_value' => 1,
'posts_per_page' => -1,
/*'orderby' => 'menu_order',*/
'orderby' => 'name',
'order' => 'ASC'
);              
$libraryList = new WP_Query( $args );?>
        <?php while ( $libraryList->have_posts() ) : $libraryList->the_post(); 
$locationId = get_the_ID();
$slug = $post->post_name;
$mapPage = "/locations/#!";

?>
        <tr data-location="<?php the_title(); ?>">
          <td width="260" class="name"><div class="nameHolder">
              <h3> <a href="<?php $post_object = get_field('display_page');
              if( $post_object ): 
          // dont even ask why
            $post = $post_object;
            setup_postdata( $post ); 
            ?>
            <?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a></h3>
              <?php wp_reset_postdata();  ?>
              <?php endif; ?>
              <?php the_field('phone', $locationId); ?>
              <br />
              <a class="map" href="<?php echo $mapPage.$slug; ?>">Map:&nbsp;
              <?php  the_field('building', $locationId); ?>
              </a>
              <?php if(get_field('study_24', $locationId)){ ?>
              <span class="hidden">|</span> <a class="space247" href="/study/24x7/" alt="This location contains one or more study spaces available 24 hours a day, seven days a week. Click the link for more info." title="Study 24/7">Study 24/7</a>
              <?php } ?>
              <?php if(get_field('alert', $locationId)){ ?>
              <div class="libraryAlert"> <i class="icon-exclamation-sign"></i>
                <?php the_field('alert', $locationId); ?>
              </div>
              <?php } ?>
            </div></td>
          <?php for($i=0;$i<=6;$i++) { ?>
          <?php
      $curDay = $arDays[$i];
      
      if ($curDay == $now) {
        $class = "cur";
        $next = "curAfter";
      } else {
        $class = $next;
        $next = "";
      }
    ?>
          <td data-day="<?php echo $i; ?>" class="<?php echo $class.$firstDay; ?>" data-foo="bar"><span class="hidden-non-mobile date-label"><?php echo date("D", $curDay)."<br/>".date("n/j", $curDay); ?></span></td>
          <?php } ?>
        </tr>
        <?php wp_reset_postdata(); endwhile;    ?>
      </tbody>
      <thead>
        <tr>
      <th class="name">More Locations</th>
        <?php $next = ""; ?>
        <?php $i = 0; $day = $arDays[$i]; ?>
        <th class="fullDay firstDisplay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 1; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 2; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 3; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 4; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 5; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
        <?php $i = 6; $day = $arDays[$i]; ?>
        <th class="fullDay <?php echo $next; $next=""; if ($now == $day) { echo "cur"; $next="curAfter";} ?>"> <span class="fullDay"><?php echo date("l", $day); ?>
          <div class='date'><?php echo date($dfDow, $day);?></div>
          </span> <span class="mobileDay"><?php echo date("D", $day); ?>
          <div class='date'><?php echo date($dfDowMobile, $day);?></div>
          </span> </th>
          </tr>
          </thead>
        <?php

$args = array(
'post_type' => 'location',
'meta_key' => 'primary_location',
'meta_value' => 0,
'posts_per_page' => -1,
/*'orderby' => 'menu_order',*/
'orderby' => 'name',
'order' => 'ASC',
//excludes DIRC and Stata
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'no_hours',
      'value' => 0,
      'compare' => '='
      ),
    
    ) 
);              
$libraryList2 = new WP_Query( $args );?>
        <?php while ( $libraryList2->have_posts() ) : $libraryList2->the_post(); 
$locationId = get_the_ID();
$slug = $post->post_name;
$mapPage = "/locations/#!";

?>
      <tr class="moreLocs" data-location="<?php the_title(); ?>">
        <td width="260"  class="name"><div class="nameHolder">
          
    
<?php 
$displayPage = get_field("display_page");
$pageID = $displayPage->ID;
$pageLink = get_permalink($pageID);
              ?>
<h3><a href="<?php echo $pageLink; ?>"><?php the_title(); ?></a></h3>
  
              
              
              
              
            <?php the_field('phone', $locationId); ?>
            <br />
            <a class="map" href="<?php echo $mapPage.$slug; ?>">Map:&nbsp;
            <?php  the_field('building', $locationId); ?>
            </a>
            <?php if(get_field('study_location', $locationId)){ ?>
            <a class="space247" href="/study/24x7/" alt="This location contains one or more study spaces available 24 hours a day, seven days a week. Click the link for more info." title="Study 24/7"> | Study 24/7</a>
            <?php } ?>
            <?php if(get_field('alert', $locationId)){ ?>
            <div class="libraryAlert"> <i class="icon-exclamation-sign"></i>
              <?php the_field('alert', $locationId); ?>
            </div>
            <?php } ?>
          </div></td>
        <?php for($i=0;$i<=6;$i++) { ?>
        <?php
$curDay = $arDays[$i];

if ($curDay == $now) {
$class = "cur";
$next = "curAfter";
} else {
$class = $next;
$next = "";
}
?>
        <td data-day="<?php echo $i; ?>" class="<?php echo $class.$firstDay; ?> noPadding"><span class="hidden-non-mobile date-label"><?php echo date("D", $curDay)."<br/>".date("n/j", $curDay); ?></span></td>
        <?php } ?>
      </tr>
       <?php wp_reset_postdata();  ?>
      <?php endwhile;   ?>
        </tbody>
      
    </table>
    
    <!-- TABLE ENDS -->
    
    <div class="locations-more">
      <h3>Other locations</h3>
      <h4>Digital Instruction Resource Center (DIRC)</h4>
      <a href="/locations/#!digital-instruction-resource-center-dirc">Map:&nbsp; 14N-132</a>
      <h4>Information Intersection at Stata Center</h4>
      <a href="/locations/#!information-intersection">Map:&nbsp;  32-Student Street</a> </div>
  </div>
  <!-- end div.content-page --> 
  
</div>
<!-- end div.content-main -->

<?php get_footer(); ?>

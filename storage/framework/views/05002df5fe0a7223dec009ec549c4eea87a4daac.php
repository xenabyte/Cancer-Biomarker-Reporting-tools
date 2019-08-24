<?php

$right = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$right_long = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$right_short = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
?>
<!DOCTYPE html>
<html style="zoom: 110%" dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Cancer Reporting and Biomarker Reporting Protocols" />
<meta name="keywords" content=" clinic, cancer, doctor, health, hospital, medical, medical, medicine, therapy" />
<meta name="author" content="KoderiaNG" />

<!-- Page Title -->
<title>Breast Invasive, Resection</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.ico" rel="shortcut icon" type="image/png">


<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">


function Export2Doc(element, filename = ''){
    var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml+document.getElementById(element).innerHTML+postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });

    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);

    // Specify file name
    filename = filename?filename+'.doc':'document.doc';

    // Create download link element
    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if(navigator.msSaveOrOpenBlob ){
        navigator.msSaveOrOpenBlob(blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = url;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }

    document.body.removeChild(downloadLink);
}

</script>
<style>
    .right{
        float: right;
        text-align: justify;
        width: 33.33%;
    }
</style>
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="images/preloaders/1.gif" alt="">
    </div>
  </div>

  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
        <div class="container">
          <nav id="menuzord-right" class="menuzord blue bg-lightest">
            <a class="menuzord-brand flip text-center" href="">
              <!--<img src="reporting_images/path_logo.png" width="40%" />-->
            </a>
            <ul class="menuzord-menu">
              <li class="active"><a href="#home">Home</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
			    <br/>
              <h2 class="title">Breast Invasive, Resection</h2>
			    <br/>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div id="exportContent" class="container">
		<div Style="padding: 10px;" class="row">
			<div class="col-md-12">
                <!--<img src="reporting_images/path_logo.png" width="40%" />-->
                <p>CAP Approved</p>
                <h4>Surgical Pathology Cancer Case Summary</h4>
                <hr>
			    <h6 class="heading-title">Protocol Posting Date: February 2019 </h6>
			    <h6 class="heading-title">INVASIVE CARCINOMA OF THE BREAST: Resection</h6>
			</div>
		</div>
        <div class="col-md-12">

		     <?php if($procedure != ''): ?><p><strong>Procedure:</strong><span><?php if($procedure == 'Other'): ?> <?php echo e($procedure); ?>: <?php echo e($procedure_other); ?> <?php else: ?> <?php echo e($procedure); ?>  <?php endif; ?></span></p><?php endif; ?>
          <?php if($specimenl != ''): ?><p><strong>Specimen Laterality:</strong><span> <?php echo e($specimenl); ?> </span></p><?php endif; ?>

           <?php if($tumorsite_upper_outer != '' || $tumorsite_lower_outer != '' || $tumorsite_upper_inner != '' || $tumorsite_lower_inner != '' || $tumorsite_central != '' || $tumorsite_central != '' || $tumorsite_nipple != '' || $tumorsite_notspecified != '' ||  $tumorsite_clock != '' || $tumorsite_distance_fromnipple != '' || $tumorsite_other != ''): ?><p><strong>Tumor Site:</strong>
            <span>
            <?php if($tumorsite_upper_outer != ''): ?> <?php echo e($tumorsite_upper_outer); ?>, <?php endif; ?>
            <?php if($tumorsite_lower_outer != ''): ?> <?php echo e($tumorsite_lower_outer); ?>, <?php endif; ?>
            <?php if($tumorsite_upper_inner != ''): ?> <?php echo e($tumorsite_upper_inner); ?>, <?php endif; ?>
            <?php if($tumorsite_lower_inner != ''): ?> <?php echo e($tumorsite_lower_inner); ?>, <?php endif; ?>
            <?php if($tumorsite_central != ''): ?> <?php echo e($tumorsite_central); ?>, <?php endif; ?>
            <?php if($tumorsite_nipple != ''): ?> <?php echo e($tumorsite_nipple); ?>, <?php endif; ?>
            <?php if($tumorsite_notspecified != ''): ?> <?php echo e($tumorsite_notspecified); ?>, <?php endif; ?>
            <?php if($tumorsite_clock != ''): ?> <?php echo e($tumorsite_clock); ?> (<?php echo e($tumorsite_clock_position); ?> o'clock), <?php endif; ?>
            <?php if($tumorsite_distance_fromnipple != ''): ?> <?php echo e($tumorsite_distance_fromnipple); ?> (<?php echo e($tumorsite_distance_realdistance); ?> cm ), <?php endif; ?>
            <?php if($tumorsite_other != ''): ?> <?php echo e($tumorsite_other); ?> <?php echo e($tumorsite_specify); ?>, <?php endif; ?>
            </span>
         </p><?php endif; ?>
         <?php if($tumorsize != ''): ?> <p><strong>Tumor Size:</strong> <span><?php if($tumorsize == 'Greatest dimension of largest invasive focus >1 mm:'): ?> <?php echo e($tumorsize); ?> (<?php echo e($tumorsize_gmlength); ?> mm ),
         + Additional Dimension: <?php echo e($tumorsize_length); ?> X <?php echo e($tumorsize_width); ?> mm <?php elseif($tumorsize == 'Size of largest invasive focus cannot be determined'): ?> <?php echo e($tumorsize); ?>

         Explain Please: <?php echo e($tumorsize_explain); ?> <?php endif; ?>
         </span></p><?php endif; ?>
         <?php if($histologic != ''): ?> <p><strong>Histologic Type:</strong><span> <?php if($histologic == 'Other histologic type not listed'): ?> <?php echo e($histologic); ?>: <?php echo e($histologic_explain); ?> <?php else: ?> <?php echo e($histologic); ?> <?php endif; ?></span></p> <?php endif; ?>
         <?php if($histologic_grade != ''): ?><p><strong>Histologic Grade (Nottingham Histologic Score):</strong> <?php echo e($histologic_grade); ?></p><?php endif; ?>
         <?php if($glandular != ''): ?><p><strong>Glandular (Acinar)/Tubular Differentiation:</strong><span> <?php echo e($glandular); ?></span></p><?php endif; ?>
         <?php if($nuclear_pleomorphism != ''): ?><p><strong>Nuclear Pleomorphism:</strong><span> <?php echo e($nuclear_pleomorphism); ?></span></p><?php endif; ?>
         <?php if($mitotic_rate != ''): ?><p><strong>Mitotic_rate:</strong><span> <?php echo e($mitotic_rate); ?></span></p><?php endif; ?>

          <?php if($overall_grade != ''): ?><p><strong>Overall Grade:</strong><span> <?php if($overall_grade == 'Score cannot be determined'): ?> <?php echo e($overall_grade); ?>: (explain) <?php echo e($overall_gradeexplain); ?> <?php else: ?> <?php echo e($overall_grade); ?> <?php endif; ?></span></p> <?php endif; ?>
          <?php if($tumor_focality != ''): ?><p><strong>+Tumor Focality:</strong><span> <?php if($tumor_focality == 'Multiple foci of invasive carcinoma'): ?> <?php echo e($tumor_focality); ?> <br/><span> <?php if($foci_no != ''): ?> Number of foci: <?php echo e($foci_no); ?> <?php elseif($foci_atleast != ''): ?> >Number of foci is at least: <?php echo e($foci_atleast); ?> <?php elseif($foci_undetermined != '' ): ?> <?php echo e($foci_undetermined); ?> <?php elseif($foci_size != ''): ?> Sizes of individual foci (millimeters): <?php echo e($foci_size); ?> <?php endif; ?></span> <?php else: ?> <?php echo e($tumor_focality); ?> <?php endif; ?></span></p> <?php endif; ?>
          <?php if($dcis != ''): ?><p><strong>Ductal Carcinoma In Situ (DCIS):</strong><span> <?php if($dcis == 'Present'): ?> <?php echo e($dcis); ?> (<?php echo e($dcis_present); ?>) <?php else: ?> <?php echo e($dcis); ?> <?php endif; ?></span></p><?php endif; ?>
          <?php if($dcis_size != ''): ?><p><?php if($dcis_size != '' || $dcis_block != ''): ?><strong>Size (Extent) of DCIS:</strong><span><?php if($dcis_size != ''): ?>  Estimated size (extent) of DCIS is at least: <?php echo e($dcis_size); ?> mm + Additional Dimension (millimeters): <?php echo e($dcis_size_length); ?> X <?php echo e($dcis_size_width); ?> mm <?php endif; ?>  <?php if($dcis_block != ''): ?> Number of blocks with DCIS: <?php echo e($dcis_block); ?> +Number of blocks examined: <?php echo e($dcis_block_examined); ?> <?php endif; ?>  <?php endif; ?></span></p><?php endif; ?>
         <?php if($dcis != 'Present'): ?>
         <?php if($dcis_ap_comedo != '' || $dcis_ap_pd != '' || $dcis_ap_cribriform != '' || $dcis_ap_micropapillary != '' || $dcis_ap_micropapillary != '' || $dcis_ap_papillary != '' || $dcis_ap_solid != '' || $dcis_ap_other != ''): ?> <p><strong>+Architectural Patterns:</strong><span>
              <?php if($dcis_ap_comedo != ''): ?> <?php echo e($dcis_ap_comedo); ?>, <?php endif; ?>
              <?php if($dcis_ap_pd != ''): ?> <?php echo e($dcis_ap_pd); ?>, <?php endif; ?>
              <?php if($dcis_ap_cribriform != ''): ?> <?php echo e($dcis_ap_cribriform); ?>, <?php endif; ?>
              <?php if($dcis_ap_micropapillary != ''): ?> <?php echo e($dcis_ap_micropapillary); ?>, <?php endif; ?>
              <?php if($dcis_ap_papillary != ''): ?> <?php echo e($dcis_ap_papillary); ?>, <?php endif; ?>
              <?php if($dcis_ap_solid != ''): ?> <?php echo e($dcis_ap_solid); ?>, <?php endif; ?>
              <?php if($dcis_ap_other != ''): ?> <?php echo e($dcis_ap_other); ?> (<?php echo e($dcis_ap_otherspecify); ?>) <?php endif; ?>
         </span></p><?php endif; ?>
        <?php endif; ?>
         <?php if($dcis_nuclear_grade != ''): ?><p><strong>+Nuclear Grade: </strong><?php echo e($dcis_nuclear_grade); ?> </span></p><?php endif; ?>
          <?php if($dcis_necrosis != ''): ?><p><strong>+Necrosis: </strong><span> <?php echo e($dcis_necrosis); ?> </span></p><?php endif; ?>
          <?php if($lcis != ''): ?><p><strong>+Lobular Carcinoma In Situ (LCIS): </strong><span> <?php echo e($lcis); ?> </span></p><?php endif; ?>
          <?php if($tumor_extension_skin != '' || $tumor_extension_skin != '' || $tumor_extension_nipple != '' || $tumor_extension_sm != ''): ?> <h4><strong>Tumor Extension:</strong></h4><?php endif; ?>
         <?php if($tumor_extension_skin != ''): ?><p><strong>Skin: </strong><span> <?php echo e($tumor_extension_skin); ?> </span></p><?php endif; ?>
         <?php if($tumor_extension_nipple != ''): ?><p><strong>Nipple: </strong><span> <?php echo e($tumor_extension_nipple); ?> </span></p><?php endif; ?>
         <?php if($tumor_extension_sm != ''): ?><p><strong>Skeletal Muscle: </strong><span> <?php echo e($tumor_extension_sm); ?> </span></p><?php endif; ?>
         <?php if($lcis != ''): ?><h4><strong>Margins</strong></h4><?php endif; ?>

          <?php if($icm != ''): ?> <p><strong>Invasive Carcinoma Margins:</strong><span> <?php if($icm = 'Uninvolved by invasive carcinoma'): ?> <?php echo e($icm); ?> <?php endif; ?>
         <?php if($icm_distance_specify != ''): ?><strong>Distance from closest margin (millimeters):</strong> <?php echo e($icm_distance_specify); ?>mm <?php elseif($icm_distance_less_than != ''): ?> >Less than <?php echo e($icm_distance_less_than); ?> mm <?php elseif($icm_distance_greaterthan != '' ): ?> Greater than <?php echo e($icm_distance_greaterthan); ?>mm <?php elseif($icm_distance != ''): ?> <?php echo e($icm_distance); ?><?php echo e($icm_distance_explain); ?> <?php endif; ?>

         <?php if($icm_margins_specify != ''): ?> <strong>Specify closest margin: </strong>  <?php echo e($icm_margins_specify); ?> mm <?php endif; ?>

         <?php if($icm_margins == 'Cannot be determined'): ?> <strong><?php echo e(icm_margins); ?>:</strong> <?php echo e($icm_margins_explain); ?> <?php else: ?> <?php echo e($icm_margins); ?> mm <?php endif; ?>

         <p><strong>Distance from other margins:</strong>
         <?php if($icm_margins_distance_anterior != ''): ?>
         (Anterior: <?php echo e($icm_margins_distance_anterior); ?>mm), <?php endif; ?>
         <?php if($icm_margins_distance_posterior != ''): ?>
         (Posterior: <?php echo e($icm_margins_distance_posterior); ?>mm), <?php endif; ?>
         <?php if($icm_margins_distance_superior != ''): ?>
         (Superior: <?php echo e($icm_margins_distance_superior); ?>mm), <?php endif; ?>
         <?php if($icm_margins_distance_inferior != ''): ?>
         (Inferior: <?php echo e($icm_margins_distance_inferior); ?>mm), <?php endif; ?>
         <?php if($icm_margins_distance_medial != ''): ?>
         (Medial: <?php echo e($icm_margins_distance_medial); ?>mm), <?php endif; ?>
         <?php if($icm_margins_distance_lateral != ''): ?>
         (Lateral: <?php echo e($icm_margins_distance_lateral); ?>mm), <?php endif; ?>
         <?php if($icm_margins_distance_others != ''): ?>
         (Other: <?php echo e($icm_margins_distance_others); ?>), <?php endif; ?>
        </p>

         <?php elseif($icm == 'Positive for invasive carcinoma'): ?> <?php echo e($icm); ?>

         <?php if($pic_anterior != ''): ?>
         (<?php echo e($pic_anterior); ?>: <?php echo e($pic_anterior_ex); ?>mm), <?php endif; ?>
         <?php if($pic_posterior != ''): ?>
         (<?php echo e($pic_posterior); ?>: <?php echo e($pic_posterior_ex); ?>mm), <?php endif; ?>
         <?php if($pic_superior != ''): ?>
         (<?php echo e($pic_superior); ?>: <?php echo e($pic_superior_ex); ?>mm), <?php endif; ?>
         <?php if($pic_inferior != ''): ?>
         (<?php echo e($pic_inferior); ?>: <?php echo e($pic_inferior_ex); ?>mm), <?php endif; ?>
         <?php if($pic_medial != ''): ?>
         (<?php echo e($pic_medial); ?>: <?php echo e($pic_medial); ?>mm), <?php endif; ?>
         <?php if($pic_lateral != ''): ?>
         (<?php echo e($pic_lateral); ?>: <?php echo e($pic_lateral_ex); ?>mm), <?php endif; ?>
         <?php if($pic_others != ''): ?>
         (<?php echo e($pic_others); ?>: <?php echo e($pic_others_ex); ?>), <?php endif; ?>
         <?php if($pic_undertermined != ''): ?>
         (<?php echo e($pic_undertermined); ?>: <?php echo e($pic_undetermined_explain); ?>), <?php endif; ?>
         <?php else: ?>
         <?php echo e($icm); ?>

         <?php endif; ?>

         <?php if($dcism != ''): ?><p><strong>DCIS Margins:</strong><span> <?php if($dcism == 'Uninvolved by DCIS'): ?> <?php echo e($dcism); ?> <br/>
         <?php if($dcism_distance_specify != ''): ?> <strong>Distance from closest margin (millimeters):</strong> <?php if($dcism_distance_specify != ''): ?> <?php echo e($dcism_distance_specify); ?>mm <?php elseif($dcism_distance_less_than != ''): ?> >Less than <?php echo e($dcism_distance_less_than); ?> mm <?php elseif($dcism_distance_greaterthan != '' ): ?> Greater than <?php echo e($dcism_distance_greaterthan); ?>mm <?php elseif($dcism_distance != ''): ?> <?php echo e($dcism_distance); ?><?php echo e($dcism_distance_explain); ?> <?php endif; ?> <?php endif; ?>
         <?php if($dcism_margins != ''): ?> <strong>Specify closest margin: </strong> <?php if($dcism_margins == 'Cannot be determined'): ?> <?php echo e(dcism_margins); ?>: <?php echo e($dcism_margins_explain); ?> <?php else: ?> <?php echo e($dcism_margins); ?>mm <?php endif; ?> <?php endif; ?>
         <br/>
         <strong>Distance from other margins:</strong>
         <?php if($dcism_margins_distance_anterior != ''): ?>
         (Anterior: <?php echo e($dcism_margins_distance_anterior); ?>mm), <?php endif; ?>
         <?php if($dcism_margins_distance_posterior != ''): ?>
         (Posterior:  <?php echo e($dcism_margins_distance_posterior); ?>mm), <?php endif; ?>
         <?php if($dcism_margins_distance_superior != ''): ?>
         (Superior:  <?php echo e($dcism_margins_distance_superior); ?>mm), <?php endif; ?>
         <?php if($dcism_margins_distance_inferior != ''): ?>
         (Inferior:  <?php echo e($dcism_margins_distance_inferior); ?>mm), <?php endif; ?>
         <?php if($dcism_margins_distance_medial != ''): ?>
         (Medial:  <?php echo e($dcism_margins_distance_medial); ?>mm), <?php endif; ?>
         <?php if($dcism_margins_distance_lateral != ''): ?>
         (Lateral: <?php echo e($dcism_margins_distance_lateral); ?>mm), <?php endif; ?>
         <?php if($dcism_margins_distance_others != ''): ?>
         (Other:  <?php echo e($dcism_margins_distance_others); ?>), <?php endif; ?>
         <?php endif; ?>

         <?php elseif($dcism == 'Positive for invasive carcinoma'): ?> <?php echo e($dcism); ?>

         <?php if($pdcis_anterior != ''): ?>
         (<?php echo e($pdcis_anterior); ?>: <?php echo e($pdcis_anterior_ex); ?>mm), <?php endif; ?>
         <?php if($pdcis_posterior != ''): ?>
         (<?php echo e($pdcis_posterior); ?>: <?php echo e($pdcis_posterior_ex); ?>mm), <?php endif; ?>
         <?php if($pdcis_superior != ''): ?>
         (<?php echo e($pdcis_superior); ?>:  <?php echo e($pdcis_superior_ex); ?>mm), <?php endif; ?>
         <?php if($pdcis_inferior != ''): ?>
         (<?php echo e($pdcis_inferior); ?>:  <?php echo e($pdcis_inferior_ex); ?>mm), <?php endif; ?>
         <?php if($pdcis_medial != ''): ?>
         (<?php echo e($pdcis_medial); ?>:  <?php echo e($pdcis_medial_ex); ?>mm), <?php endif; ?>
         <?php if($pdcis_lateral != ''): ?>
         (<?php echo e($pdcis_lateral); ?>: <?php echo e($pdcis_lateral_ex); ?>mm), <?php endif; ?>
         <?php if($pdcis_others != ''): ?>
         (<?php echo e($pdcis_others); ?>:  <?php echo e($pdcis_others_ex); ?>), <?php endif; ?>
         <?php if($pdcis_undertermined != ''): ?>
         (<?php echo e($pdcis_undertermined); ?>: <?php echo e($pdcis_undetermined_explain); ?>), <?php endif; ?>
         <?php else: ?>
         <?php echo e($dcism); ?>

         <?php endif; ?>
        </span><br/></p>
        <?php if($rln != ''): ?><p><strong>Regional Lymph Nodes:</strong><span> <?php if($rln == 'Uninvolved by tumor cells'): ?> <?php echo e($rln); ?><br/>
        <?php if($rln_uninvolved_ln != ''): ?> <strong>Number of Lymph Nodes Examined:</strong> <?php echo e($rln_uninvolved_ln); ?> <br/> <?php endif; ?>
        <?php if($rln_uninvolved_sn != ''): ?> <strong>Number of Sentinel Nodes Examined:</strong> <?php echo e($rln_uninvolved_sn); ?> <?php endif; ?>
        <?php elseif($rln == 'Involved by tumor cells'): ?><br/>
        <?php if($rln_involved_ln_mac != ''): ?> <strong>Number of Lymph Nodes with Macrometastases:</strong> <?php echo e($rln_involved_ln_mac); ?> <br/> <?php endif; ?>
        <?php if($rln_involved_ln_mic != ''): ?> <strong>Number of Lymph Nodes with Micrometastases:</strong> <?php echo e($rln_involved_ln_mic); ?> <br/> <?php endif; ?>
        <?php if($rln_involved_ln_itc != ''): ?> <strong>Number of Lymph Nodes with Isolated Tumor Cells:</strong> <?php echo e($rln_involved_ln_itc); ?> <br/><?php endif; ?>
        <?php if($rln_deposit != ''): ?> <strong>Size of Largest Metastatic Deposit:</strong> <?php echo e($rln_deposit); ?> <br/> <?php endif; ?>
        <?php if($extranodal_ext != ''): ?> <strong>Extranodal Extension:</strong> <?php echo e($extranodal_ext); ?> <br/> <?php endif; ?>
        <?php if($ln_examined != ''): ?> <strong>Number of Lymph Nodes Examined:</strong> <?php echo e($ln_examined); ?> <br/> <?php endif; ?>
        <?php if($sn_examined != ''): ?> <strong>Number of Sentinel Nodes Examined:</strong> <?php echo e($sn_examined); ?> <?php endif; ?>
        <?php else: ?>
        <?php echo e($rln); ?>

        <?php endif; ?>
        </span></p><?php endif; ?>
         <?php if($presurgical_therapy != ''): ?><p><strong>Treatment Effect:</strong><span> <?php echo e($presurgical_therapy); ?></span></p><?php endif; ?>
        <?php if($presurgical_therapy == 'Known presurgical therapy'): ?>
        <p><strong>Treatment Effect in the Breast:</strong><span> <?php echo e($breast_treatment_effect); ?> </span></p>
        <p><strong>Treatment Effect in the Lymph Nodes:</strong><span> <?php echo e($ln_treatment_effect); ?> </span></p>
        <p><strong>Lymphovascular Invasion:</strong><span> <?php echo e($lymphovascular_invasion); ?> </span></p>
        <p><strong>Dermal Lymphovascular Invasion:</strong><span> <?php echo e($dermal_lymphovascular_invasion); ?> </span></p>
        <?php endif; ?>
        <?php if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != '' || $primary_tumor != '' || $distance_metastasis != ''): ?><p><strong>Pathologic Stage Classification (pTNM, AJCC 8th Edition)</strong> <br/><i>Note: Reporting of pT, pN, and (when applicable) pM categories is based on information available to the pathologist at the time the report is issued. Only the applicable T, N, or M category is required for reporting; their definitions need not be included in the report. The categories (with modifiers when applicable) can be listed on 1 line or more than 1 line. Assignment of Pathologic Prognostic Stage Group is the responsibility of the managing physician and not the pathologist.</i></p><?php endif; ?>
            <?php if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != ''): ?><p><strong>TNM Descriptors: </strong><span>
            <?php if($tnm_descriptors_m != ''): ?> <?php echo e($tnm_descriptors_m); ?>, <?php endif; ?>
            <?php if($tnm_descriptors_r != ''): ?> <?php echo e($tnm_descriptors_r); ?>, <?php endif; ?>
            <?php if($tnm_descriptors_y != ''): ?> <?php echo e($tnm_descriptors_y); ?>, <?php endif; ?>
            <?php endif; ?>
            </span></p>
        <?php if($primary_tumor != ''): ?><p><strong>Primary Tumor: </strong><span> <?php echo e($primary_tumor); ?> </span></p><?php endif; ?>
        <?php if($distance_metastasis != ''): ?><p><strong>Distance Metastasis: </strong><span> <?php if($distance_metastasis == 'pM1:  Histologically proven metastases larger than 0.2 mm'): ?> <?php echo e($distance_metastasis); ?> <?php if($distance_metastasis_site != ''): ?> Specify site: <?php echo e($distance_metastasis_site); ?> <?php endif; ?> <?php else: ?> <?php echo e($distance_metastasis); ?> <?php endif; ?> </span></p><?php endif; ?>

        <?php if($modifier != '' || $category != '' || $additional_finding != '' || $ancillary_studies != ''): ?> <p><strong>Regional Lymph Nodes (pN) (choose a category based on lymph nodes received with the specimen; immunohistochemistry and/or molecular studies are not required)</strong><br/> <i>Note: If internal mammary lymph nodes, infraclavicular lymph nodes, or supraclavicular lymph nodes are included in the specimen, consult the AJCC Staging Manual for additional lymph node categories</i></p> <?php endif; ?>
        <?php if($modifier != ''): ?><p><strong>Modifier:</strong><span> <?php echo e($modifier); ?></span></p><?php endif; ?>
        <?php if($category != ''): ?><p><strong>Category (pN):</strong><span> <?php echo e($category); ?></span></p><?php endif; ?>
        <?php if($additional_finding != ''): ?><p><strong><?php echo e($additional_finding); ?></strong><span> <?php echo e($additional_finding_note); ?></span></p><?php endif; ?>
        <?php if($ancillary_studies != ''): ?><p><strong><?php echo e($ancillary_studies); ?></strong><span><br/> <i>Note: For hormone receptor and HER2 reporting for this specimen, the CAP Breast Biomarker Template should be used. Pending biomarker studies should be listed in the Comments section of this report.</i></span></p><?php endif; ?>
        <?php if($estrogen_receptor != ''): ?><p><strong>+ Breast Biomarker Testing Performed on Previous Biopsy</strong></p><?php endif; ?>
        <?php if($estrogen_receptor != ''): ?><p><strong>+ Estrogen Receptor (ER):</strong><span> <?php if($estrogen_receptor == 'Positive'): ?> <?php echo e($estrogen_receptor); ?>: <?php echo e($estrogen_receptor_percent); ?> <?php else: ?> <?php echo e($estrogen_receptor); ?> <?php endif; ?></span></p>    <?php endif; ?>
        <?php if($estrogen_receptor != ''): ?><p><strong>+ Progesterone Receptor (PgR):</strong><span> <?php if($estrogen_receptor == 'Positive'): ?> <?php echo e($progesterone_receptor); ?>: <?php echo e($progesterone_receptor_percent); ?> <?php else: ?> <?php echo e($progesterone_receptor); ?> <?php endif; ?></span></p><?php endif; ?>
        <?php if($her2 != ''): ?><p><strong>+ HER2 (by immunohistochemistry):</strong><span> <?php echo e($her2); ?> </span></p><?php endif; ?>
        <?php if($her2_situ != ''): ?><p><strong>+ HER2 (by in situ hybridization):</strong><span> <?php echo e($her2_situ); ?> </span></p><?php endif; ?>
        <?php if($case_number != ''): ?><p><strong>+Testing Performed on Case Number:</strong><span> <?php echo e($case_number); ?> </span></p><?php endif; ?>

        <?php if($microcalcifications_notidentified != '' || $microcalcifications_present != '' || $microcalcifications_presentic != '' || $microcalcifications_presentnnt != '' || $microcalcifications_other != ''): ?><p><strong>Microcalcifications:</strong>
        <span>
            <?php if($microcalcifications_notidentified != ''): ?> <?php echo e($microcalcifications_notidentified); ?>, <?php endif; ?>
            <?php if($microcalcifications_present != ''): ?> <?php echo e($microcalcifications_present); ?>, <?php endif; ?>
            <?php if($microcalcifications_presentic != ''): ?> <?php echo e($microcalcifications_presentic); ?>, <?php endif; ?>
            <?php if($microcalcifications_presentnnt != ''): ?> <?php echo e($microcalcifications_presentnnt); ?>, <?php endif; ?>
            <?php if($microcalcifications_other != ''): ?> <?php echo e($microcalcifications_other); ?>: <?php echo e($microcalcifications_other_specify); ?>, <?php endif; ?>

        </span></p><?php endif; ?>
         <?php if($breast_finding_pm != '' || $breast_finding_nd != '' || $breast_finding_o != ''): ?><p><strong>Clinical History: <i>The current clinical/radiologic breast findings for which this surgery is performed include:</i></strong><?php endif; ?>
        <span>
        <?php if($breast_finding_pm != '' || $breast_finding_nd != '' || $breast_finding_o != ''): ?> <?php if($breast_finding_o == 'Other'): ?><?php echo e($breast_finding_o); ?>: <?php echo e($breast_finding_specify); ?>, <?php endif; ?> <?php if($breast_finding_pm != ''): ?> <?php echo e($breast_finding_pm); ?>, <?php endif; ?> <?php if($breast_finding_nd != ''): ?> <?php echo e($breast_finding_nd); ?>, <?php endif; ?> <?php endif; ?>
        <?php if($breast_history != ''): ?> <?php if($breast_finding == 'Prior history of breast cancer'): ?><?php echo e($breast_history); ?>, <?php echo e($breast_history_finding); ?>, <?php endif; ?> <?php endif; ?>
        <?php if($breast_prior_tx != ''): ?> <?php echo e($breast_prior_tx); ?> <?php endif; ?>
        </span></p>
         <?php if($radiologic_finding_mass != '' || $radiologic_finding_calc != '' || $radiologic_finding_other != ''): ?><p><strong>Radiologic Finding:</strong><?php endif; ?>
        <span>,
        <?php if($radiologic_finding_mass != '' || $radiologic_finding_calc != '' || $radiologic_finding_other != ''): ?> <?php if($radiologic_finding_other != ''): ?><?php echo e($radiologic_finding_other); ?>: <?php echo e($radiologic_finding_specify); ?> <?php endif; ?> <?php if($radiologic_finding_calc != ''): ?> <?php echo e($radiologic_finding_calc); ?> <?php endif; ?> <?php if($radiologic_finding_mass != ''): ?> <?php echo e($radiologic_finding_mass); ?><?php endif; ?> <?php endif; ?>
        </span></p>

          <?php if(($primary_tumor == 'pTX:	Primary tumor cannot be assessed' || $primary_tumor == 'pTis (DCIS):	Ductal carcinoma in situ#' ||  $primary_tumor == 'pTis (Paget):	Paget disease of the nipple not associated with invasive carcinoma and/or DCIS in the underlying breast parenchyma##') &&  ($category == 'pNX:	Regional lymph nodes cannot be assessed (eg, not removed for pathological study or previously removed)' || $category == 'pN0:	No regional lymph node metastasis identified or ITCs only#' || $category == 'pN0 (i+):	ITCs only (malignant cell clusters no larger than 0.2 mm) in regional lymph node(s)' || $category == 'pN0 (mol+):	Positive molecular findings by reverse transcriptase polymerase chain reaction (RT PCR); no ITCs detected') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> 0</span></p>
          <?php elseif(($primary_tumor == 'pT1mi: Tumor ≤1 mm in greatest dimension' || $primary_tumor == 'pT1a:	Tumor >1 mm but ≤5 mm in greatest dimension (round any measurement >1.0−1.9 mm to 2 mm)' || $primary_tumor == 'pT1b:	Tumor >5 mm but ≤10 mm in greatest dimension' || $primary_tumor == 'pT1c:	Tumor >10 mm but ≤20 mm in greatest dimension') && ($category == 'pNX:	Regional lymph nodes cannot be assessed (eg, not removed for pathological study or previously removed)' || $category == 'pN0:	No regional lymph node metastasis identified or ITCs only#' || $category == 'pN0 (i+):	ITCs only (malignant cell clusters no larger than 0.2 mm) in regional lymph node(s)' || $category == 'pN0 (mol+):	Positive molecular findings by reverse transcriptase polymerase chain reaction (RT PCR); no ITCs detected') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IA</span></p>
          <?php elseif(($primary_tumor == 'pT0:	No evidence of primary tumor#') && ($category == 'pN1mi:	Micrometastases (approximately 200 cells, larger than 0.2 mm, but none larger than 2.0 mm)') &&  ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IB</span></p>
          <?php elseif(($primary_tumor == 'pT1mi: Tumor ≤1 mm in greatest dimension' || $primary_tumor == 'pT1a:	Tumor >1 mm but ≤5 mm in greatest dimension (round any measurement >1.0−1.9 mm to 2 mm)' || $primary_tumor == 'pT1b:	Tumor >5 mm but ≤10 mm in greatest dimension' || $primary_tumor == 'pT1c:	Tumor >10 mm but ≤20 mm in greatest dimension') && ($category == 'pN1mi:	Micrometastases (approximately 200 cells, larger than 0.2 mm, but none larger than 2.0 mm)') &&  ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IB</span></p>
          <?php elseif(($primary_tumor == 'pT0:	No evidence of primary tumor#') && ($category == 'pN1mi:	Micrometastases (approximately 200 cells, larger than 0.2 mm, but none larger than 2.0 mm)' || $category == 'pN1a:	Metastases in 1 to 3 axillary lymph nodes, at least 1 metastasis larger than 2.0 mm##' || $category == 'pN1b:	Metastases in ipsilateral internal mammary sentinel nodes, excluding ITCs' || $category == 'pN1c:	pN1a and pN1b combined') &&  ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIA</span></p>
          <?php elseif(($primary_tumor == 'pT1mi: Tumor ≤1 mm in greatest dimension' || $primary_tumor == 'pT1a:	Tumor >1 mm but ≤5 mm in greatest dimension (round any measurement >1.0−1.9 mm to 2 mm)' || $primary_tumor == 'pT1b:	Tumor >5 mm but ≤10 mm in greatest dimension' || $primary_tumor == 'pT1c:	Tumor >10 mm but ≤20 mm in greatest dimension') && ($category == 'pN1mi:	Micrometastases (approximately 200 cells, larger than 0.2 mm, but none larger than 2.0 mm)' || $category == 'pN1a:	Metastases in 1 to 3 axillary lymph nodes, at least 1 metastasis larger than 2.0 mm##' || $category == 'pN1b:	Metastases in ipsilateral internal mammary sentinel nodes, excluding ITCs' || $category == 'pN1c:	pN1a and pN1b combined') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIA</span></p>
          <?php elseif(($primary_tumor == 'pT2:	Tumor >20 mm but ≤50 mm in greatest dimension') && ($category == 'pNX:	Regional lymph nodes cannot be assessed (eg, not removed for pathological study or previously removed)' || $category == 'pN0:	No regional lymph node metastasis identified or ITCs only#' || $category == 'pN0 (i+):	ITCs only (malignant cell clusters no larger than 0.2 mm) in regional lymph node(s)' || $category == 'pN0 (mol+):	Positive molecular findings by reverse transcriptase polymerase chain reaction (RT PCR); no ITCs detected') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIA</span></p>
          <?php elseif(($primary_tumor == 'pT2:	Tumor >20 mm but ≤50 mm in greatest dimension') && ($category == 'pN1mi:	Micrometastases (approximately 200 cells, larger than 0.2 mm, but none larger than 2.0 mm)' || $category == 'pN1a:	Metastases in 1 to 3 axillary lymph nodes, at least 1 metastasis larger than 2.0 mm##' || $category == 'pN1b:	Metastases in ipsilateral internal mammary sentinel nodes, excluding ITCs' || $category == 'pN1c:	pN1a and pN1b combined') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIB</span></p>
          <?php elseif(($primary_tumor == 'pT3:	Tumor >50 mm in greatest dimension') && ($category == 'pNX:	Regional lymph nodes cannot be assessed (eg, not removed for pathological study or previously removed)' || $category == 'pN0:	No regional lymph node metastasis identified or ITCs only#' || $category == 'pN0 (i+):	ITCs only (malignant cell clusters no larger than 0.2 mm) in regional lymph node(s)' || $category == 'pN0 (mol+):	Positive molecular findings by reverse transcriptase polymerase chain reaction (RT PCR); no ITCs detected') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIB</span></p>
          <?php elseif(($primary_tumor == 'pT3:	Tumor >50 mm in greatest dimension') && ($category == 'pNX:	Regional lymph nodes cannot be assessed (eg, not removed for pathological study or previously removed)' || $category == 'pN0:	No regional lymph node metastasis identified or ITCs only#' || $category == 'pN0 (i+):	ITCs only (malignant cell clusters no larger than 0.2 mm) in regional lymph node(s)' || $category == 'pN0 (mol+):	Positive molecular findings by reverse transcriptase polymerase chain reaction (RT PCR); no ITCs detected') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIB</span></p>
          <?php elseif(($primary_tumor == 'pT0:	No evidence of primary tumor#') && ($category == 'pN2a:	Metastases in 4 to 9 axillary lymph nodes (at least 1 tumor deposit larger than 2.0 mm)##' || $category == 'N2b:	Metastases in clinically detected internal mammary lymph nodes with or without microscopic confirmation; with pathologically negative axillary nodes')  &&  ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIIA</span></p>
          <?php elseif(($primary_tumor == 'pT1mi: Tumor ≤1 mm in greatest dimension' || $primary_tumor == 'pT1a:	Tumor >1 mm but ≤5 mm in greatest dimension (round any measurement >1.0−1.9 mm to 2 mm)' || $primary_tumor == 'pT1b:	Tumor >5 mm but ≤10 mm in greatest dimension' || $primary_tumor == 'pT1c:	Tumor >10 mm but ≤20 mm in greatest dimension')  && ($category == 'pN2a:	Metastases in 4 to 9 axillary lymph nodes (at least 1 tumor deposit larger than 2.0 mm)##' || $category == 'N2b:	Metastases in clinically detected internal mammary lymph nodes with or without microscopic confirmation; with pathologically negative axillary nodes')  &&  ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIIA</span></p>
          <?php elseif(($primary_tumor == 'pT2:	Tumor >20 mm but ≤50 mm in greatest dimension')  && ($category == 'pN2a:	Metastases in 4 to 9 axillary lymph nodes (at least 1 tumor deposit larger than 2.0 mm)##' || $category == 'N2b:	Metastases in clinically detected internal mammary lymph nodes with or without microscopic confirmation; with pathologically negative axillary nodes')  &&  ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIIA</span></p>
          <?php elseif(($primary_tumor == 'pT3:	Tumor >50 mm in greatest dimension') && ($category == 'pN1mi:	Micrometastases (approximately 200 cells, larger than 0.2 mm, but none larger than 2.0 mm)' || $category == 'pN1a:	Metastases in 1 to 3 axillary lymph nodes, at least 1 metastasis larger than 2.0 mm##' || $category == 'pN1b:	Metastases in ipsilateral internal mammary sentinel nodes, excluding ITCs' || $category == 'pN1c:	pN1a and pN1b combined') &&  ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIIA</span></p>
          <?php elseif(($primary_tumor == 'pT3:	Tumor >50 mm in greatest dimension')  && ($category == 'pN2a:	Metastases in 4 to 9 axillary lymph nodes (at least 1 tumor deposit larger than 2.0 mm)##' || $category == 'N2b:	Metastases in clinically detected internal mammary lymph nodes with or without microscopic confirmation; with pathologically negative axillary nodes')  &&  ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIIA</span></p>
          <?php elseif(($primary_tumor == 'pT4:  Tumor of any size with direct extension to the chest wall and/or to the skin (ulceration or skin nodules) ###' || $primary_tumor == 'pT4a:	Extension to the chest wall; invasion or adherence to pectoralis muscle in the absence of invasion of chest wall structures does not qualify as T4' || $primary_tumor == 'pT4b:	Ulceration and/or ipsilateral macroscopic satellite nodules and/or edema (including peau d’orange) of the skin that does not meet the criteria for inflammatory carcinoma' || $primary_tumor == 'pT4c:	Both T4a and T4b are present' || $primary_tumor == 'pT4d:	Inflammatory carcinoma####' ) && ($category == 'pNX:	Regional lymph nodes cannot be assessed (eg, not removed for pathological study or previously removed)' || $category == 'pN0:	No regional lymph node metastasis identified or ITCs only#' || $category == 'pN0 (i+):	ITCs only (malignant cell clusters no larger than 0.2 mm) in regional lymph node(s)' || $category == 'pN0 (mol+):	Positive molecular findings by reverse transcriptase polymerase chain reaction (RT PCR); no ITCs detected') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIIB</span></p>
          <?php elseif(($primary_tumor == 'pT4:  Tumor of any size with direct extension to the chest wall and/or to the skin (ulceration or skin nodules) ###' || $primary_tumor == 'pT4a:	Extension to the chest wall; invasion or adherence to pectoralis muscle in the absence of invasion of chest wall structures does not qualify as T4' || $primary_tumor == 'pT4b:	Ulceration and/or ipsilateral macroscopic satellite nodules and/or edema (including peau d’orange) of the skin that does not meet the criteria for inflammatory carcinoma' || $primary_tumor == 'pT4c:	Both T4a and T4b are present' || $primary_tumor == 'pT4d:	Inflammatory carcinoma####' ) && ($category == 'pN1mi:	Micrometastases (approximately 200 cells, larger than 0.2 mm, but none larger than 2.0 mm)' || $category == 'pN1a:	Metastases in 1 to 3 axillary lymph nodes, at least 1 metastasis larger than 2.0 mm##' || $category == 'pN1b:	Metastases in ipsilateral internal mammary sentinel nodes, excluding ITCs' || $category == 'pN1c:	pN1a and pN1b combined') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIIB</span></p>
          <?php elseif(($primary_tumor == 'pT4:  Tumor of any size with direct extension to the chest wall and/or to the skin (ulceration or skin nodules) ###' || $primary_tumor == 'pT4a:	Extension to the chest wall; invasion or adherence to pectoralis muscle in the absence of invasion of chest wall structures does not qualify as T4' || $primary_tumor == 'pT4b:	Ulceration and/or ipsilateral macroscopic satellite nodules and/or edema (including peau d’orange) of the skin that does not meet the criteria for inflammatory carcinoma' || $primary_tumor == 'pT4c:	Both T4a and T4b are present' || $primary_tumor == 'pT4d:	Inflammatory carcinoma####' ) && ($category == 'pN2a:	Metastases in 4 to 9 axillary lymph nodes (at least 1 tumor deposit larger than 2.0 mm)##' || $category == 'N2b:	Metastases in clinically detected internal mammary lymph nodes with or without microscopic confirmation; with pathologically negative axillary nodes') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIIB</span></p>
          <?php elseif(($primary_tumor != '') && ($category == 'pN3a:	Metastases in 10 or more axillary lymph nodes (at least 1 tumor deposit larger than 2.0 mm) or metastases to the infraclavicular (Level III axillary lymph) nodes##' || $category == 'pN3b:	pN1a or pN2a in the presence of cN2b (positive internal mammary nodes by imaging); or pN2a in the presence of pN1b' || $category == 'pN3c:	Metastases in ipsilateral supraclavicular lymph nodes') && ($distance_metastasis == 'pM0: No proven metastasis')): ?>
            <p><strong>Group Stage:</strong><span> IIIC</span></p>
          <?php elseif(($primary_tumor != '') && ($category != '') && ($distance_metastasis == 'pM1:  Histologically proven metastases larger than 0.2 mm')): ?>
            <p><strong>Group Stage:</strong><span> IV</span></p>
          <?php endif; ?>

       <?php if($comments != ''): ?> <p><strong> Comments</strong><br/> <?php echo e($comments); ?> <?php endif; ?>


      <?php if($all_notes != ''): ?>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">A.  Procedures</h4>
          </div>
          <div class="modal-body">
            <p>The following types of breast specimens and procedures may be reported with the case summary:<br/>
            <p><strong>Excisions:</strong> These procedures resect breast tissue without the intent of removing the entire breast. The nipple is usually not included with excisions. Excisions include specimens designated “partial mastectomies,” “lumpectomies,” and “quadrantectomies.”<br/>
            <p><strong>Total Mastectomy: </strong> Removal of all breast tissue, generally including the nipple and areola.<br/>
					  <ul>
						<li><strong>• Simple mastectomy: </strong> This procedure consists of a total mastectomy without removal of axillary lymph nodes. </li>
						<li><strong>• Skin sparing mastectomy: </strong> This is a total mastectomy with removal of the nipple and only a narrow surrounding rim of skin.</li>
						<li><strong>• Nipple sparing mastectomy:  </strong> This is a total mastectomy without removal of skin or nipple. The subareolar tissue is examined and the nipple later removed if involved by carcinoma </li>
						<li><strong>• Modified radical mastectomy:  </strong> This procedure consists of a total mastectomy with an axillary dissection. In the case summary, the breast and lymph node specimens are documented separately. A small portion of pectoralis muscle is sometimes removed.</li>
						<li><strong>• Radical mastectomy:  </strong> This procedure consists of a total mastectomy with removal of the pectoralis major and pectoralis minor muscles as well as axillary contents. This type of specimen and procedure can be indicated on the case summary as “Other.”</li>
					  </ul>
					  <br/>
					  <p style="align: justify"> The case summary is intended for reporting the patient’s specimen with the largest focus of invasive carcinoma. If additional margin excisions are performed in the same procedure, the findings for these specimens can be included in the margin evaluation. If additional smaller foci of invasive carcinoma are present in the main excision or in margin excisions, the characteristics of these carcinomas (ie, size, histologic type, and grade) should be recorded under “Additional Pathologic Findings.” Additional ancillary studies on smaller foci of carcinoma are recommended if the carcinomas are of different histologic type or grade. If additional margin excisions are performed in a subsequent procedure (eg, on another day), and a larger area of invasive carcinoma is not present, the case summary need not be used. <br/><br/>The case summary is intended for reporting the patient’s specimen with the largest focus of invasive carcinoma. If additional margin excisions are performed in the same procedure, the findings for these specimens can be included in the margin evaluation. If additional smaller foci of invasive carcinoma are present in the main excision or in margin excisions, the characteristics of these carcinomas (ie, size, histologic type, and grade) should be recorded under “Additional Pathologic Findings.” Additional ancillary studies on smaller foci of carcinoma are recommended if the carcinomas are of different histologic type or grade. If additional margin excisions are performed in a subsequent procedure (eg, on another day), and a larger area of invasive carcinoma is not present, the case summary need not be used.<br/><br/> If a patient has 2 ipsilateral invasive carcinomas removed in 2 separate excisions during the same procedure, the case summary should be used for the larger invasive carcinoma. The pathologic findings for the smaller cancer may be reported without using the case summary. If a patient has 2 ipsilateral invasive carcinomas removed in 2 separate excisions in procedures on different days, the case summary should be used for the larger carcinoma, and the American Joint Committee on Cancer (AJCC) T classification will pertain to this carcinoma. If a patient has bilateral breast carcinomas, the cancers are reported in separate case summaries. <br/><br/> If information from other specimens is included in completing the case summary (eg, the results of hormone receptors from a prior core needle biopsy or the finding of lymph node metastases on a previous lymph node biopsy), then this must be clearly stated in the “Comments” section, and the accession numbers of the other cases should be provided.<br/>
                      <p>The following types of specimens should not be reported by using this protocol:<br/>
					  <ul>
						<li>•	Very small incisional biopsies (including core needle biopsies)</li>
						<li>•	Re-excision of a biopsy site after removal of most of the carcinoma</li><br/>
						<p>Specimen sampling for specimens with invasive carcinoma has the following goals<br/>
						<li>•	The clinical or radiologic lesion for which the surgery was performed must be examined microscopically. If the lesion is a nonpalpable imaging finding, the specimen radiograph and/or additional radiologic studies may be necessary to identify the lesion. When practical, the entire lesion, or the entire area with the imaging finding, should be submitted in a sequential fashion for histologic examination.</li>
						<li>•	If the specimen consists predominantly of DCIS with microinvasion, complete submission of the entire specimen, or at a minimum the entire grossly involved area, is recommended to identify additional areas of invasion and/or lymphovascular invasion.</li>
						<li>•	All other gross lesions in the specimen must be sampled. </li>
						<li>•	Each designated margin must be evaluated for involvement by invasive carcinoma and DCIS. If the specimen is received sectioned or fragmented, this should be noted, as this will limit the ability to evaluate the status of margins. </li>
					  </ul>
					  <br/>
					  <p style="text-align: justify">Tissue may be taken for research studies or assays that do not involve the histologic examination of the tissue (eg, reverse transcriptase polymerase chain reaction [RT-PCR]) only when taken in such a way as to not compromise the evaluation of the invasive carcinoma and lymph nodes for prognostic factors and margin status.<br/><br/> It is preferable that the area of carcinoma be removed in a single intact specimen. If the specimen has been incised or is fragmented, then it may not be possible to accurately assess margins. If invasive carcinoma is present in more than 1 fragment, it may be difficult or impossible to determine the pathologic size of the invasive carcinoma or the number of invasive carcinomas present. Breast imaging correlation is recommended for these cases. When specimen fragmentation limits the evaluation of tumor size and/or margins, this information should be included under “Additional Pathologic Finding.”<br/><br/>The size of all specimens in 3 dimensions should be documented in the gross description. It is optional to also include specimen sizes in the final diagnosis. The volume of tissue removed can be helpful in estimating the extent of carcinoma present and determining the likely volume of tissue that would need to be removed to achieve tumor-free margins.<br/><br/>If separate oriented margin specimens are excised, the results of the final margin status can be included under “Margins” in the case summary. If not oriented, the findings can be reported under “Additional Pathologic Findings.”<br/>

					  <h4>References</h4>
                      <hr>
					  <ol>
						  <li>1. Association of Directors of Anatomic and Surgical Pathology. Immediate management of mammographically detected breast lesions. Hum Pathol. 1993;24:689-690.</li>
						  <li>2.	Connolly JL, Schnitt SJ. Evaluation of breast biopsy specimens in patients considered for treatment by conservative surgery and radiation therapy for early breast cancer. Pathol Annu. 1988;23(pt 1):1-23.</li>
						  <li>3.	Schnitt SJ, Wang HH. Histologic sampling of grossly benign breast biopsies: how much is enough? Am J Surg Pathol. 1989;13:505-512.</li>
						  <li>4.	Schnitt SJ, Connolly JL. Processing and evaluation of breast excision specimens: a clinically oriented approach. Am J Clin Pathol. 1992;98:125-137.</li>
						  <li>5.	Lester SC. Manual of Surgical Pathology. 3nd ed. New York, NY: Elsevier; 2010.</li>
					  </ol>
					</div>
        </div>

        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">B.  Tumor Site</h4>
          </div>
          <div class="modal-body">
            <p>TThe site of an invasive carcinoma is helpful to document, when provided by the surgeon, breast imaging, or previous pathology report, to correlate with prior studies (eg, a core needle biopsy) or with future biopsies or cancer events. The site can be indicated by quadrant and/or by a clock position.</p>
            <p>The approximate tumor site can be determined in a mastectomy. However, it is sometimes difficult to correlate exactly with the position as determined in vivo because of differences in how the specimen would be positioned on the chest wall (ie, the skin ellipse may be horizontal or point to the axilla). It is helpful to locate the carcinoma with respect to the clinical site or imaging site, when possible.</p>
            <p>If the patient has undergone presurgical (neoadjuvant) therapy and there is no residual invasive carcinoma, the tumor site refers to the location of the prior invasive carcinoma (ie, the tumor bed). </p>
					</div>
        </div>

        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">C.  Tumor Size (Size of Invasive Carcinoma)</h4>
            </div>
            <div class="modal-body">
              <p>The size of an invasive carcinoma is an important prognostic factor. The single greatest dimension of the largest invasive carcinoma is used to determine T classification (Figure 2, A through F). The best size for AJCC T classification should use information from imaging, gross examination, and microscopic evaluation. Visual determination of size is often unreliable, as carcinomas often blend into adjacent fibrous tissue. The size by palpation of a hard mass correlates better with invasion of tumor cells into stroma with a desmoplastic response. Sizes should be measured to the nearest millimeter. In some cases, the size may be difficult to determine.</p>
              <p><strong>Excisions:</strong> These procedures resect breast tissue without the intent of removing the entire breast. The nipple is usually not included with excisions. Excisions include specimens designated “partial mastectomies,” “lumpectomies,” and “quadrantectomies.”<br/>
					  <p><i><strong>Figure 2. Determining the size of an invasive carcinoma.</strong> A. Invasive carcinoma with surrounding ductal carcinoma in situ (DCIS). The size only includes the area of the invasive carcinoma and does not include the adjacent DCIS. The size should be measured to the closest 1 mm. B. Small invasive carcinoma with prior core needle biopsy. The size of the carcinoma in the core needle biopsy should not be added to the size of the carcinoma in the excisional specimen, as this will generally overestimate the true size. The best size for classification must take into consideration the largest dimension of the carcinoma in both specimens as well as the size by imaging before the core needle biopsy. C. Small invasive carcinomas with adjacent biopsy site changes. In some excisional specimens, a small carcinoma will be present adjacent to a relatively large area of biopsy site changes. The actual size cannot be determined with certainty. The size in the core needle biopsy, in the excisional specimen, and by imaging should be considered to determine the best size for classification. D. Multiple invasive carcinomas. If multiple carcinomas are present, the size of the largest invasive carcinoma is used for T classification. The modifier “m” is used to indicate that multiple invasive carcinomas are present. E. Multiple invasive carcinomas in close proximity. It may be difficult to distinguish multiple adjacent carcinomas from one large invasive carcinoma. Careful examination of the specimen with submission of tissue between grossly evident carcinomas is essential. Correlation with imaging findings can be helpful. Generally, microscopic size confirmation of the largest grossly identified invasive carcinoma is used for T classification. Exception to the size rule – if two histologically similar carcinomas are within 5.0 mm of each other, measure from outer edges of the two. F. Invasive carcinomas that have been transected. If an invasive carcinoma has been transected and is present in more than 1 tissue fragment, the sizes in each fragment should not be added together, as this may overestimate the true size. In many cases, correlation with the size on breast imaging will be helpful to choose the best size for classification. In other cases, the pathologist will need to use his or her judgment in assigning an AJCC T category. </i></p>
					  <p><strong>Invasive carcinoma and DCIS (Figure 2, A):</strong> The size measurement includes only the largest area of contiguous invasion of stroma. Surrounding DCIS is not included in the size measurement.</p>
					  <p><strong>Small invasive carcinoma with adjacent biopsy site changes (Figure 2, B and C):</strong> If the invasive carcinoma in the excision is small (ie, ≤10 mm) and is adjacent to a prior biopsy site, it is possible that the original size of the carcinoma was larger before biopsy. In such cases it is helpful to compare the largest size on the previous biopsy with the size of the tumor by imaging before biopsy to determine the best size for T classification. However, the sizes on the biopsy and in the excision should not be added together, as this will generally overestimate the size of the carcinoma. Generally, the larger of the sizes as determined from the core biopsy or excision is used for T classification.</p>
					  <p><strong>Multiple invasive carcinomas (Figure 2, D):</strong>  The size of the largest carcinoma is used for T classification. The sizes of multiple invasive carcinomas should not be added together. The modifier “m” is used to indicate the presence of multiple invasive carcinomas. Exception to the size rule – if two histologically similar carcinomas are within 5.0 mm of each other, measure from outer edges of the two.</p>
					  <p><br/><strong>Figure 2Bb Exception to the size rule, used by permission J Connolly.</strong> Exception to the size rule: if 2 histologically similar carcinomas are within 5mm of each other, measure from the outer edges of the two.</p>
					  <p><strong>Multiple invasive carcinomas in close proximity (Figure 2, E):</strong> It can sometimes be difficult to distinguish a single invasive carcinoma from multiple carcinomas very close to one another. Careful gross examination and examination of tissue between grossly evident carcinomas are required. Contiguous and uniform tumor density in the intervening tissue between 2 macroscopic carcinomas is required to use the combined overall size for T classification. Correlation with imaging can also be helpful. In some cases, diffusely invasive carcinoma (eg, lobular carcinoma) is not easily defined by gross examination or by imaging. The extent of invasion may be indicated by the number of blocks involved and/or the involvement of opposing margins. In some cases, the pathologist will need to use his or her best judgment in assigning the T classification.</p>
					  <p><strong>Invasive carcinomas that have been transected (Figure 2, F):</strong> If an invasive carcinoma is transected during a procedure and is present in more than 1 fragment of tissue, it may be difficult or impossible to determine the size and/or the number of carcinomas present. If the carcinoma is present at the margin of the resection over a broad front by macroscopic examination, the carcinoma could be coded as pTX because the total extent of tumor cannot be assessed. Alternatively, a minimal T size could be provided with a notation that the actual size may be larger. The sizes in multiple specimens of a transected carcinoma should not be added together. In such cases, the size on breast imaging may be helpful in determining the best T classification. Size should always be determined before tissue is taken for clinical assays or for investigational studies.</p>
					  <p><strong>DCIS with microinvasion:</strong> Microinvasion is defined by the AJCC as invasion measuring 1 mm or less in size. If more than 1 focus of microinvasion is present, the number of foci present, an estimate of the number, or a note that the number of foci is too numerous to quantify should be reported. In some cases, immunoperoxidase studies for myoepithelial cells may be helpful to document areas of invasion and the size of the invasive foci. Invasive tumors that are larger than 1.0 mm but less than 2.0 mm are rounded up to 2.0 mm.</p>
					</div>
      </div>

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">D.  Histologic Type</h4>
        </div>
        <div class="modal-body">
          <p>This protocol applies to all invasive carcinomas of the breast. The World Health Organization (WHO) classification of breast carcinoma is presented below, although the protocol does not preclude the use of other classifications or histologic types. Carcinomas may be classified based on the H&E appearance without the use of immunohistochemical studies. </p>
          <p>A modified list is presented in the protocol, based on the most frequent types of invasive carcinomas and terminology that is in widespread usage. The modified list is intended to capture the majority of tumors and reduce the classification of tumors being reported as “other.” The WHO classification is presented for completeness. </p>
          <p><strong>WHO Classification of Invasive Carcinoma of the Breast</strong></p>
        <p>Microinvasive carcinoma</p>
        <p>Invasive carcinoma of no special type (NST)</p>
        <ul style="padding-left: 20px">
        <li>Pleomorphic carcinoma</li>
        <li>Carcinoma with osteoclast-like stromal giant cells</li>
        <li>Carcinoma with choriocarcinomatous features</li>
        <li>Carcinoma with melanotic features</li>
        </ul>
        <p>Invasive lobular carcinoma</p>
        <ul style="padding-left: 20px">
        <li>Classic lobular carcinoma</li>
        <li>Solid lobular carcinoma</li>
        <li>Alveolar lobular carcinoma</li>
        <li>Pleomorphic lobular carcinoma</li>
        <li>Classic lobular carcinoma</li>
        <li>Tubulolobular carcinoma</li>
        <li>Mixed lobular carcinoma</li>
        </ul>
        <p>Tubular carcinoma</p>
        <p>Cribriform carcinoma</p>
        <p>Mucinous carcinoma</p>
        <p>Carcinoma with medullary features</p>
        <ul style="padding-left: 20px">
        <li>Medullary carcinoma</li>
        <li>Atypical medullary carcinoma</li>
        <li>Invasive carcinoma NST with medullary features</li>
        </ul>
        <p>Carcinoma with apocrine differentiation</p>
        <p>Carcinoma with signet-ring-cell differentiation</p>
        <p>Invasive micropapillary carcinoma</p>
        <p>Metaplastic carcinoma of no special type</p>
          <ul style="padding-left: 20px">
        <li>Low-grade adenosquamous carcinoma</li>
        <li>Fibromatosis-like metaplastic carcinoma</li>
        <li>Squamous cell carcinoma</li>
        <li>Spindle cell carcinoma</li>
        <li>Metaplastic carcinoma with mesenchymal differentiation</li>
        </ul>
        <ul style="padding-left: 40px">
        <li>Chondroid differentiation</li>
        <li>Osseous differentiation</li>
        <li>Other types of mesenchymal differentiation</li>
        </ul>
        <ul style="padding-left: 20px">
        <li>Mixed metaplastic carcinoma</li>
        <li>Myoepithelial carcinoma</li>
        </ul>
        <p>Papillary carcinoma</p>
          <ul style="padding-left: 20px">
        <li>Encapsulated papillary carcinoma with invasion</li>
        <li>Solid papillary carcinoma, invasive</li>
        </ul>
        <br/>
        <p>Epithelial-myoepithelial tumors</p>
        <p>Adenomyoepithelioma with carcinoma</p>
        <p>Adenoid cystic carcinoma</p>
        <p><strong>Rare Types</strong></p>
        <p>Carcinoma with neuroendocrine features</p>
        <ul style="padding-left: 20px">
        <li>Neuroendocrine tumor, well-differentiated</li>
        <li>Neuroendocrine carcinoma poorly differentiated (small cell carcinoma)</li>
        <li>Carcinoma with neuroendocrine differentiation</li>
        </ul>
        <p>Secretory carcinoma</p>
        <p>Invasive papillary carcinoma</p>
        <p>Acinic cell carcinoma</p>
        <p>Mucoepidermoid carcinoma</p>
        <p>Polymorphous carcinoma</p>
        <p>Oncocytic carcinoma</p>
        <p>Lipid-rich carcinoma</p>
        <p>Glycogen-rich clear cell carcinoma</p>
        <p>Sebaceous carcinoma</p>

        <h4>References</h4>
                  <hr>
        <ol>
          <li>1. Lakhani SR, Ellis IO, Schnitt SJ, Tan PH, van de Vijver MJ. WHO Classification of Tumours of the Breast, Fourth ed. Geneva, Switzerland: WHO Press; 2012.</li>
        </ol>
      </div>
    </div>


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">E.  Histologic Grade (Nottingham Histologic Score)</h4>
      </div>
      <div class="modal-body">
        <p>The following types of breast specimens and procedures may be reported with the case summary:<br/>All invasive breast carcinomas should be graded.1 The Nottingham combined histologic grade (Elston-Ellis modification of Scarff-Bloom-Richardson grading system) should be used for reporting. Within each stage grouping there is a relation between histologic grade and outcome </p>
        <p>The Nottingham combined histologic grade evaluates the amount of tubule formation, the extent of nuclear pleomorphism, and the mitotic count (or mitotic rate). Each variable is given a score of 1, 2, or 3, and the scores are added to produce a grade. The mitotic score is determined by the number of mitotic figures found in 10 consecutive high-power fields (HPF) in the most mitotically active part of the tumor. Only clearly identifiable mitotic figures should be counted; hyperchromatic, karyorrhectic, or apoptotic nuclei are excluded. Because of variations in field size, the HPF size must be determined for each microscope and the appropriate point score determined accordingly. It is recommended that the size be measured by using a micrometer. However, the diameter of an HPF can also be calculated by using the method below.</p>
        <p><strong>Measuring the Size of a High-Power Field (HPF) With a Ruler</strong></p>
        <p>Use a clear ruler to measure the diameter of a low-power field. This number can be used to calculate a constant based on the following formula</p>
        <p><u>Eyepiece Magnification x Objective Magnification x Microscopic Field Diameter = A Constant</u></p>
        <p>When the value of the constant is known, the diameter of an HPF can be calculated for other objectives by using the following formula:</p>
        <p><u>Unknown Field Diameter = Constant / (Eyepiece Magnification x Objective Magnification)</u></p>
        <p>Half of the field diameter is the radius of the field (r), which can then be used to calculate the area of the HPF:</p>
        <p><u>3.1415 x r<sup>2</sup> = Area of Microscopic Field</u></p>
        <p>If the microscopic field diameter or the area of the field is known, Table 1 can be used to determine the number of mitoses corresponding to different scores.</p>
        <h4>References</h4>
                  <hr>
        <ol>
          <li>1.    Ellis IO, Elston CW. Histologic grade. In: O’Malley FP, Pinder SE, eds. Breast Pathology. Philadelphia, PA: Elsevier; 2006:225-233.</li>
          <li>2.	Royal College of Pathologists. Pathology reporting of breast disease in surgical excision specimens incorporating the dataset for histological reporting of breast cancer. June 2016. https://www.rcpath.org/profession/publications/cancer-datasets.html.  Accessed September 18, 2018.</li>
        </ol>
      </div>
    </div>

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">F.  Tumor Focality(Single or Multiple Foci of Invasive Carcinoma)</h4>
      </div>
      <div class="modal-body">
        <p>Focality need not be specifically stated if there is only a single area of invasive carcinoma. If multiple invasive carcinomas are present, focality should be reported. Patients with multiple foci of invasion may be divided into the following 6 groups:<br/>
        <ul>
        <li><strong>• Extensive carcinoma in situ (CIS) with multiple foci of invasion (Figure 3, A).</strong> Extensive DCIS is sometimes associated with multiple areas of invasion. The invasive carcinomas are usually similar in histologic appearance and immunophenotype, unless the DCIS shows marked heterogeneity. This is the most common etiology of multiple invasive carcinomas.</li>
        <li><strong>• Invasive carcinoma with smaller satellite foci of invasion (Figure 3, B).</strong> A large carcinoma is sometimes surrounded by smaller adjacent foci of invasion. In such cases, the appearance of multiple foci may be due to irregular extensions of the carcinoma into stroma, which in 2 dimensions give the appearance of multiple foci. In such cases, the smaller foci are usually identical in histologic appearance and immunophenotype to the dominant carcinoma. Small microscopic satellite foci of tumor around the primary tumor do not appreciably alter tumor volume and are not added to or included in the maximum tumor size</li>
        <li><strong>• Invasive carcinoma with extensive lymphovascular invasion (LVI) (Figure 3, C).</strong> Additional foci of invasion may arise from areas of LVI (ie, an intramammary metastasis). The multiple carcinomas are usually identical in histologic appearance and immunophenotype. The origin of satellite skin nodules classified as T4b is generally due to invasion arising from foci of dermal lymphovascular invasion</li>
        <li><strong>• Multiple biologically separate invasive carcinomas (Figure 3, D). </strong> Some patients have multiple, synchronous, biologically independent carcinomas. Patients with germ-line mutations are at increased risk for developing multiple carcinomas. The carcinomas may or may not be similar in appearance and immunophenotype. </li>
        <li><strong>• Invasive carcinomas after neoadjuvant therapy (Figure 3, E).</strong>  Cancers with a significant response to chemotherapy typically present as multiple residual foci within a fibrotic tumor bed (see Note K). The foci of invasion are usually identical in appearance and immunophenotype.</li>
        <li><strong>• Transection of a single carcinoma into multiple fragments (Figure 3, F).</strong> If invasive carcinoma is present in multiple fragments of a fragmented specimen, transection of 1 carcinoma should be considered. Correlation with clinical and imaging findings can sometimes be helpful to determine the best size for T classification and to determine whether or not multiple foci were present.</p>
        </ul>
        <p>
        <br/><i>Figure 3. Multiple Invasive Carcinomas. A. Extensive carcinoma in situ with multiple foci of invasion. The invasive carcinomas are usually similar in histologic appearance and immunoprofile unless the ductal carcinoma in situ (DCIS) shows marked heterogeneity. B. Invasive carcinoma with smaller satellite foci. The smaller foci are generally within 1 to 5 mm of the main carcinoma and are most likely due to extensions of the main carcinoma that would be connected in another plane of section. The carcinomas are usually identical in appearance and immunoprofile. C. Invasive carcinoma with extensive lymphovascular invasion. Areas of lymphovascular invasion can give rise to additional foci of invasive carcinoma (ie, intramammary metastasis). The carcinomas are usually identical in appearance and immunoprofile. D. Multiple biologically separate invasive carcinomas. These carcinomas are usually widely separated and may be histologically and immunophenotypically distinct. E. Invasive carcinomas after presurgical (neoadjuvant) therapy. If there is a marked response to treatment, multiple foci of carcinoma may be scattered over a fibrotic tumor bed. The residual carcinoma is usually similar in appearance and immunoprofile to the pretreatment carcinoma, but in some cases alterations due to treatment may be present. F. Transection of a single carcinoma into multiple fragments. If a carcinoma is transected during excision, it may be difficult to determine if 1 or multiple carcinomas are present. The carcinomas should be identical in appearance and immunoprofile</i></p>
        <p>Features pertaining to a specific cancer (ie, histologic type, grade, size, and the results of ER, PgR, and HER2 studies) should be provided for the largest invasive carcinoma in the case summary. If smaller carcinomas differ in histologic type or grade, this information should be included under “Additional Pathologic Findings,” and additional ancillary tests are recommended for these carcinomas. Features pertaining to all carcinomas (eg, margins, lymph node status) can be reported in the body of the case summary.</p>
        <p>Patients with multiple grossly evident invasive carcinomas have a higher risk of having lymph node metastases.1 However, it has not been shown that multiple invasive carcinomas increase the risk of distant metastases for patients with lymph node-negative disease. </p>
        <p>The overall AJCC T classification is based on the carcinoma with the highest individual T classification. If there are bilateral cancers, the stage is based on the carcinoma with the higher stage. Cases with multiple foci of invasive carcinoma are indicated by the modifier “m” in AJCC classification to distinguish them from cases with a single focus of invasion. </p>

        <h4>References</h4>
                  <hr>
        <ol>
          <li>1. Andea AA, Wallis T, Newman LA, Bouwman D, Dey J, Visscher DW. Pathologic analysis of tumor size and lymph node status in multifocal/multicentric breast carcinoma. Cancer. 2002;94:1383-1390.</li>
      </div>
    </div>

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">G. Ductal Carcinoma In Situ (DCIS)</h4>
      </div>
      <div class="modal-body">
        <p>undergoing breast-conserving surgery. It is more important to report the features of DCIS when in situ disease is predominant (eg, cases of DCIS with microinvasion or extensive DCIS associated with T1a carcinoma). If DCIS is a minimal component of the invasive carcinoma, the features of the DCIS have less clinical relevance. Therefore, most of the reporting elements for DCIS are optional and should be used at the discretion of the pathologist.</p>
        <p>The pathology report should specify whether extensive DCIS is present. Extensive intraductal component (EIC)-positive carcinomas are defined in 2 ways (Figure 4, A through D)</p>
        <p>
        <i>Figure 4. Extensive Intraductal Component (EIC). A. Extensive intraductal component (EIC)-positive carcinomas are defined by the following criteria: (1) ≥25% of the area within the invasive carcinoma is ductal carcinoma in situ (DCIS) and (2) DCIS is also present outside the area of invasive carcinoma. B. EIC-positive carcinomas also include carcinomas in which DCIS is associated with a “small” (approximately 10 mm or less) invasive carcinoma or carcinomas. C. EIC-negative carcinomas do not fulfill the criteria for being positive for EIC. D. Some carcinomas do not strictly fulfill the criteria for EIC but are associated with extensive DCIS in the surrounding tissue. In such cases it is helpful to provide some measure of the extent of DCIS in the specimen.</i>
        </p>
        <p>1.	Ductal carcinoma in situ is a major component within the area of invasive carcinoma (approximately 25%) and DCIS is also present in the surrounding breast parenchyma.</p>
        <p>2.	There is extensive DCIS associated with a small (~10 mm or less) invasive carcinoma (ie, the invasive carcinoma is too small for DCIS to comprise 25% of the area).</p>
        <p>Extensive intraductal component-positive carcinomas are associated with an increased risk of local recurrence when the surgical margins are not evaluated or focally involved. The finding of EIC positivity has less significance when DCIS does not extend close to margins.</p>
        <p>In some cases, extensive DCIS can be present outside the area of invasive carcinoma although the carcinoma does not technically fulfill the criteria for EIC positivity. In such cases, quantification of the amount of DCIS present is helpful for planning radiation therapy.</p>
        <p>The extent of DCIS will be most relevant for cases of extensive DCIS with microinvasion and least relevant for large EIC-negative invasive carcinomas. Methods for estimating the extent of DCIS include directly measuring the lesion when confined to a single histologic slide, determining size by submitting the entire specimen in sequence and in sections of uniform thickness, or counting the number of blocks with DCIS. The College of American Pathologists (CAP) DCIS protocol2 provides additional information on determining the extent of DCIS.</p>
        <p><strong>Architectural Pattern of DCIS</strong><br/>The architectural pattern has traditionally been reported for DCIS. However, nuclear grade and the presence of necrosis are more predictive of clinical outcome</p>
        <p><strong>Nuclear Grade of DCIS</strong><br/>The nuclear grade of DCIS is determined using 6 morphologic features (Table 1)</p>




        <p><strong>Necrosis</strong><br/>TThe presence of necrosis is correlated with the finding of mammographic calcifications (ie, most areas of necrosis will calcify). Ductal carcinoma in situ that presents as mammographic calcifications often recurs as calcifications. Necrosis can be classified as follows:</p>
        <ul>
        <li><u>• Central (“comedo”)</u>: The central portion of an involved ductal space is replaced by an area of expansive necrosis that is easily detected at low magnification. Ghost cells and karyorrhectic debris are generally present. Although central necrosis is generally associated with high-grade nuclei (ie, comedo DCIS), it can also occur with DCIS of low or intermediate nuclear grade.</li>
        <li><u>• Focal: </u> Small foci, indistinct at low magnification, or single cell necrosis. <br/>Necrosis should be distinguished from secretory material, which can also be associated with calcifications, but does not include nuclear debris</li>
        </ul>

        <h4>References</h4>
                  <hr>
        <ol>
          <li>1.	Morrow M, Harris JR. Local management of invasive breast cancer (chapter 33). In: Harris JR, Lippman ME, Morrow M, Osborne KE, eds. Diseases of the Breast. 2nd ed. Philadelphia, PA: Lippincott Williams & Wilkins; 2000:522-523</li>
          <li>2.	Fitzgibbons PL, Bose S, Chen Y, et al. Protocol for the Examination of Specimens From Patients with Ductal Carcinoma In Situ (DCIS) of the Breast. 2019; www.cap.org/cancerprotocols.</li>
          <li>3.	Schwartz GF, Lagios MD, Carter D, et al. Consensus conference on the classification of ductal carcinoma in situ. Cancer. 1997;80:1798-1802..</li>
      </div>
    </div>

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">H.  Tumor Extension</h4>
      </div>
      <div class="modal-body">
        <p>Breast cancers can invade into the overlying skin or into the chest wall, depending on their size and location. Extension into skin and muscle is used for AJCC classification, and these findings may be used for making decisions about local treatment. If skin or muscle are part of a specimen, their presence should always be included in the gross description and the relationship of these structures to the carcinoma reported in the final diagnosis. The extent of associated DCIS is important for determining the type of surgery that will be necessary to obtain free margins.</p>
        <p><strong>Skin</strong><br/> There are multiple ways that breast carcinoma can involve the skin:</p>
        <ul>
        <li><u>• DCIS involving nipple skin (Paget disease of the nipple) (Figure 5, A):</u> DCIS can extend from the lactiferous sinuses into the contiguous skin without crossing the basement membrane. This finding does not change the T classification of the invasive carcinoma.</li>
        <li><u>• Invasive carcinoma invading into dermis or epidermis, without ulceration (Figure 5, B): </u> Skin invasion correlates with the clinical finding of a carcinoma fixed to the skin and may be associated with skin or nipple retraction. This finding does not change the T classification.</li>

        <li><u>• Invasive carcinoma invading into dermis and epidermis with skin ulceration (Figure 5, C):</u> In the past, skin ulceration was associated with very large, locally advanced carcinomas. However, skin ulceration can also be associated with superficially located small carcinomas. It is unknown if skin involvement confers a worse prognosis as compared to carcinomas of similar size without skin invasion. Carcinomas with skin ulceration are classified as T4b.</li>
        <li><u>• Ipsilateral satellite skin nodules (Figure 5, D):</u> An area of invasive carcinoma within the dermis, separate from the main carcinoma, is usually associated with lymphovascular invasion. The satellite nodules should be macroscopically evident and confirmed microscopically. This finding is classified as T4b. The clinical significance of incidental microscopic satellite nodules in the dermis has not been investigated </li>
        <li><u>• Dermal lymphovascular invasion (Figure 5, E): </u> Carcinoma present within lymphatic spaces in the dermis is often correlated with the clinical features of inflammatory carcinoma (diffuse erythema and edema involving one-third or more of the breast), and such cases would be classified as T4d. In the absence of the clinical features of inflammatory carcinoma, this finding remains a poor prognostic factor but is insufficient to classify a cancer as T4d. This finding is separately documented under “Dermal Lymphovascular Invasion.”</li>
        </ul>
        <p>Figure 5. Invasive Carcinoma: Skin Involvement. A. Ductal carcinoma in situ (DCIS) involving nipple skin (Paget disease of the nipple) associated with an invasive carcinoma. DCIS can traverse the lactiferous sinuses into the epidermis without crossing a basement membrane. This finding does not change the T classification of an underlying invasive carcinoma. B. Invasive carcinoma invading into dermis or epidermis, without ulceration. This finding does not change the T classification of the invasive carcinoma. C. Invasive carcinoma invading into dermis and epidermis with skin ulceration. This carcinoma would be classified as T4b, unless additional features warrant classification as T4c (chest wall invasion) or T4d (inflammatory carcinoma). D. Ipsilateral satellite skin nodules. An area of invasive carcinoma in the skin, separate from the main carcinoma, is usually associated with lymphovascular invasion. This finding is classified as T4b, unless additional features warrant classification as T4c (chest wall invasion) or T4d (inflammatory carcinoma). E. Dermal lymphovascular invasion. If carcinoma within lymphatic spaces in the dermis is correlated with the clinical features of inflammatory carcinoma (diffuse erythema and edema involving one-third or more of the breast), the carcinoma is classified as T4d. If clinical signs are not present, this finding does not change the T classification, but is an indicator of a poor prognosis.</i></p>
        <p><strong>Muscle</strong><br/>Skeletal muscle may be present at the deep/posterior margin. The presence of muscle documents that the excision has extended to the deep fascia. Invasion into skeletal muscle should be reported, as this finding may be used as an indication for postmastectomy radiation therapy <br/> The skeletal muscle present is generally pectoralis muscle. Invasion into this muscle is not included as T4a. Invasion must extend through this muscle into the chest wall (intercostal muscles or deeper) in order to be classified as T4a. However, chest wall muscles are rarely removed in mastectomy specimens. The T4a classification is generally established with imaging of locally advanced carcinomas</p>

        <h4>References</h4>
                  <hr>
        <ol>
          <li>1. Association of Directors of Anatomic and Surgical Pathology. Immediate management of mammographically detected breast lesions. Hum Pathol. 1993;24:689-690.</li>
          <li>2.	Connolly JL, Schnitt SJ. Evaluation of breast biopsy specimens in patients considered for treatment by conservative surgery and radiation therapy for early breast cancer. Pathol Annu. 1988;23(pt 1):1-23.</li>
          <li>3.	Schnitt SJ, Wang HH. Histologic sampling of grossly benign breast biopsies: how much is enough? Am J Surg Pathol. 1989;13:505-512.</li>
          <li>4.	Schnitt SJ, Connolly JL. Processing and evaluation of breast excision specimens: a clinically oriented approach. Am J Clin Pathol. 1992;98:125-137.</li>
          <li>5.	Lester SC. Manual of Surgical Pathology. 3nd ed. New York, NY: Elsevier; 2010.</li>
        </ol>
      </div>
    </div>

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">I.  Margins</h4>
      </div>
      <div class="modal-body">
        <p>Whenever feasible, the specimen should be oriented in order for the pathologist to identify specific margins. This is particularly important for excisions less than total mastectomy, where it may be necessary for the surgeon to excise residual tumor at a specific margin (eg, superior, inferior, medial, lateral, anterior, or deep). Identification of surgical margins also allows measurement of the distance between the carcinoma and specific margins. All identifiable margins should be evaluated for involvement by carcinoma both grossly and microscopically.<br/> Orientation may be done by sutures or clips placed on the specimen surface or by other means of communication between surgeon and pathologist and should be documented in the pathology report. Margins can be identified in several ways, including the use of multiple colored inks, by submitting the margins in specific cassettes, or by the surgeon submitting each margin as a separately excised specimen. Inks should be applied carefully to avoid penetration deep into the specimen. <br/> Macroscopic or microscopic involvement of surgical margins by invasive carcinoma or DCIS should be noted in the report. If the specimen is oriented, the specific site(s) of involvement should also be reported. When possible, the pathologist should report the distance from the tumor to the closest margin. <br/> If margins are sampled with perpendicular sections, the pathologist should report the distance of the invasive carcinoma and DCIS to the closest margin, whenever possible. Because of the growth pattern of DCIS in the ductal system, a negative but close margin does not ensure the absence of DCIS in the adjacent tissue <br/> A positive margin requires ink on carcinoma. If the specimen is oriented, the specific site(s) of involvement (eg, superior margin) should also be reported <br/> The deep margin may be at muscle fascia. If so, the likelihood of additional breast tissue beyond this margin (and therefore possible involvement by DCIS) is extremely small. A deep muscle fascial margin (eg, on a mastectomy specimen) positive for DCIS is unlikely to have clinical significance. However, invasive carcinoma at the deep margin, especially if associated with muscle invasion, is often an indication for postmastectomy radiation. <br/> A superficial (generally anterior) margin may be immediately below the skin, and there may not be additional breast tissue beyond this margin. However, some breast tissue can be left in skin flaps, and the likelihood of residual breast tissue is related to the thickness of the flap <br/> Specimen radiography is important to assess the adequacy of excision. Compression of the specimen should be minimized, as it can severely compromise the ability to assess the distance of the DCIS from the surgical margin. Mechanical compression devices should be used with caution and preferably reserved for nonpalpable lesions that require this technique for imaging (eg, microcalcifications).<br/>It is helpful to report the approximate extent of margin involvement:</p>
        <p><strong>Excisions:</strong> These procedures resect breast tissue without the intent of removing the entire breast. The nipple is usually not included with excisions. Excisions include specimens designated “partial mastectomies,” “lumpectomies,” and “quadrantectomies.”<br/>
        <ul>
        <li>•  Unifocal: 1 focal area of carcinoma at the margin, <4 mm </li>
        <li>•  Multifocal: 2 or more foci of carcinoma at the margin</li>
        <li>•  Extensive: carcinoma present at the margin over a broad front (>5 mm)</li>
        </ul>

        <h4>References</h4>
                  <hr>
        <ol>
          <li>1. Torresan RZ, dos Santos CC, Okamura H, Alvarenga M. Evaluation of residual glandular tissue after skin-sparing mastectomies. Ann Surg Oncol. 2005;12(12):1037-1044.</li>
        </ol>
      </div>
    </div>

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">J.  Regional Lymph Nodes</h4>
      </div>
      <div class="modal-body">
        <p>Most patients with invasive carcinoma will have lymph nodes sampled.</p>
        <p>Types of lymph nodes:</p>
        <ul>
        <li><strong>• Sentinel lymph nodes </strong> are identified by the surgeon by uptake of radiotracer or dye or both. Adjacent palpable nonsentinel nodes may also be removed. </li>
        <li><strong>• Axillary lymph nodes </strong> are removed by en bloc resection of axillary tissue. The nodes are divided into levels: I (low-axilla: lateral to the lateral border of the pectoralis minor muscle); II (mid-axilla: between the medial and lateral borders of the pectoralis minor muscle and the interpectoral [Rotter’s] lymph nodes); and III (apical axilla or infraclavicular nodes: medial to the medial margin of the pectoralis minor muscle and inferior to the clavicle). A surgeon may choose to remove 1 or more of these levels. Levels I and II are typically removed in the axillary dissection, with level III nodes only removed if considered suspicious by the surgeon intraoperatively. Level III nodes must be specifically identified, as there are additional AJCC N categories for these nodes. </li>
        <li><strong>• Intramammary nodes </strong> are present within breast tissue and are most commonly found in the upper outer quadrant. Intramammary nodes may rarely be sentinel lymph nodes. These nodes are included with axillary nodes for AJCC N classification.</li>
        <li><strong>• Internal mammary nodes, supraclavicular nodes, and infraclavicular nodes </strong> are rarely removed for breast cancer staging. If metastases are present in these nodes, there are specific AJCC N categories (see AJCC Cancer Staging Manual).</li>
        <li><strong>• Radical mastectomy:  </strong> This procedure consists of a total mastectomy with removal of the pectoralis major and pectoralis minor muscles as well as axillary contents. This type of specimen and procedure can be indicated on the case summary as “Other.”</li>
        </ul>
        <p>Lymph node sampling:</p>
        <ul>
        <li><strong>• Grossly positive nodes: </strong> The size of grossly positive nodes should be recorded. One section to include any areas suggestive of extranodal invasion is sufficient. Cancerous nodules in the axillary fat adjacent to the breast, without histologic evidence of residual lymph node tissue, are classified as regional lymph node metastasis.</li>
        <li><strong>• Grossly negative nodes: </strong> Sampling must be adequate to detect all macrometastases, as they are known to have prognostic importance (ie, all metastatic deposits >2 mm). Thus, each node should be thinly sliced along the long axis of the node at 2 mm, and all slices should be submitted for microscopic examination. At least 1 representative hematoxylin-and-eosin (H&E) level must be examined. Additional methods of sampling, such as additional H&E levels or immunohistochemical studies, may detect isolated tumor cells or micrometastases. However, the clinical impact on outcome of these small metastases is minimal.</li>
        </ul>
        <p>Reverse transcriptase polymerase chain reaction has been developed as an alternative method for examining lymph nodes.3,4 The tissue used for this assay cannot be examined microscopically. All macrometastases must be identified histologically. Therefore, nodal tissue can only be used for other assays if all macrometastases can be identified by H&E examination. False-positive and false-negative results can occur with RT-PCR. The significance of a positive RT-PCR result for a histologically negative lymph node is unknown.</p>

        <p>Reporting lymph nodes</p>
        <ul>
        <li><strong>• Number of nodes examined:  : </strong> The total number of nodes includes sentinel nodes, nonsentinel nodes, nodes from axillary dissections, and intramammary nodes. When the number of sentinel and nonsentinel nodes removed is less than 6 nodes, the AJCC “sn” modifier is used.</li>
        <li><strong>• Size of metastases: </strong>Metastases are classified into 3 groups: <br/> - Isolated tumor cell clusters (ITCs) are defined as small clusters of cells not larger than 0.2 mm, or single cells, or fewer than 200 cells in a single cross-section. ITCs may be detected by routine histology or by immunohistochemical (IHC) methods. Nodes containing only ITCs are not included in the total number of positive nodes for N classification. <br/> - Micrometastases measure more than 0.2 mm, but not more than 2 mm, and/or comprise more than 200 cells in a single cross-section. If only micrometastases are present, the N classification is pN1mi. If at least 1 macrometastasis is present, nodes with micrometastases are included in the total node count for N classification. <br/> - Macrometastases measure more than 2 mm.</li>
        </ul>
        <p>In most cases, if metastases are present, the sentinel node will be involved. In rare cases, only nonsentinel nodes contain metastases. These cases can occur if the true sentinel node is completely replaced by tumor (and therefore is not detected by radioactive tracer or dye), if there is unusual lymphatic drainage, or if there is failure of the technique to identify the node. This finding should be included in the report</p>
        <p>In some cases, the best N classification can be difficult to determine (Figure 1).</p>
        <p><br/> Figure 1. Classification of Lymph Node Metastases. A. Multiple clusters of tumor cells. Classification is based on the size of the largest contiguous cluster of tumor cells. The distance between clusters should not be included in the size measurement. However, if the overall volume of tumor is similar to the next highest nodal category, it is recommended that the pathologist use his or her judgment to assign the best N category and to include the reason for the difficulty in classification in a note. B. Dispersed pattern of lymph node metastasis. Some carcinomas, in particular lobular carcinomas, metastasize as single cells and do not form cohesive clusters. In such cases, the “size” of the metastasis is difficult to determine. If more than 200 tumor cells are present in 1 cross-section of the node, then the category of isolated tumor cells should not be used. If there is difficulty in assigning the N classification, it is recommended that the reason be provided in a note. C. Extranodal invasion. The area of invasion outside the lymph node capsule is included in the overall size of the lymph node metastasis. The size of the metastasis includes the tumor cells and the desmoplastic response (ie, the cells do not need to be contiguous, but the cells plus fibrosis should be contiguous). The finding of extranodal invasion is also reported. D. Cancerous nodules in axillary fat. Areas of carcinoma invading into the stroma in axillary adipose tissue, without residual nodal tissue, are considered to be positive lymph nodes. However, if there is surrounding breast tissue or ductal carcinoma in situ, then the invasive carcinoma should be classified as an invasive carcinoma and not as a lymph node metastasis. </p>
        <p>Reporting lymph nodes</p>
        <ul>
        <li><strong>• Multiple clusters of tumor cells within a lymph node (Figure 1, A):</strong> The “size” of the metastatic deposit for N classification is based on the largest contiguous cluster of tumor cells. However, when the overall volume of tumor is similar to that of the higher nodal category (eg, a node with 9 clusters of tumor cells, each measuring 1 mm), then the pathologist must use his or her judgment in assigning the N category. The size and number of cells used for AJCC classification are meant to be guidelines and not absolute cutoffs. It is recommended that the reason for the difficulty in assigning the N classification be stated in a note</li>
        <li><strong>• Dispersed pattern of lymph node metastasis (Figure 1, B):</strong> Some invasive carcinomas, particularly lobular carcinomas, may metastasize as individual tumor cells and not as cohesive clusters. It can be difficult to estimate the volume of tumor present for N classification. To avoid underclassification of such cases, an upper limit of 200 cells in 1 node cross-section for “isolated tumor cells” is recommended. Pathologist judgment is required to determine the best N classification.</li>
        <li><strong>• Extranodal (or extracapsular) tumor invasion (Figure 1, C): </strong> Metastatic carcinoma may invade through the lymph node capsule into adjacent adipose tissue. This finding correlates with the clinical impression of fixed or matted nodes when extensive and is a risk factor for recurrence. Extranodal extension should be included when determining the size of a lymph node metastasis. The size of the metastasis includes the tumor cells and the surrounding desmoplastic response (ie, the tumor cells need not be touching). Tumor within lymphatic spaces in the axillary tissue without invasion of adipose tissue is not considered extranodal invasion. </li>
        <li><strong>• Cancerous nodules in axillary adipose tissue (Figure 1, D): </strong> Metastatic carcinoma can completely replace a lymph node. Foci of invasive carcinoma in axillary adipose tissue can be counted as positive lymph nodes. There must be stromal invasion, and carcinoma limited to lymphatic channels is not included. If the carcinoma is surrounded by breast tissue and/or DCIS is present, the area of invasion is more likely to be a carcinoma arising in axillary breast tissue and should not be counted as metastatic carcinoma to a lymph node</li>
        <li><strong>• Nodes after neoadjuvant therapy: </strong> The response of metastatic carcinoma in lymph nodes after treatment is an important prognostic factor. In addition to the information described above, evidence of treatment response (eg, small tumor deposits within an area of fibrosis) should also be reported (see Note K). Only the largest contiguous focus of residual tumor in the node evaluation is used for classification; any treatment-associated fibrosis is not included</li>
        </ul>

        <h4>References</h4>
                  <hr>
        <ol>
          <li>1. Amin MB, Edge SB, Greene FL, et al, eds. AJCC Cancer Staging Manual. 8th ed. New York, NY: Springer; 2017.</li>
          <li>2. Weaver DL, Ashikaga T, Krag DN, et al, Effect of occult metastases on survival in node-negative breast cancer. N Engl J Med. 2011;364:412-421.</li>
          <li>3. Viale G, Dell’Orto P, Biasi MO, et al, Comparative evaluation of an extensive histopathologic examination and a real-time reverse-transcription-polymerase chain reaction assay for mammaglobin and cytokeratin 19 on axillary sentinel lymph nodes of breast carcinoma patients. Ann Surg. 2008;247:136-142.</li>
          <li>4. Julian TB, Blumencranz P, Deck K, et al. Novel intraoperative molecular test for sentinel lymph node metastases in patients with early-stage breast cancer. J Clin Oncol. 2008;26:3338-3345.</li>
        </ol>
      </div>
    </div>

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">K. Treatment Effect</h4>
      </div>
      <div class="modal-body">
      <p>Patients may be treated with endocrine therapy or chemotherapy before surgical excision (termed presurgical or neoadjuvant therapy). The response of the invasive carcinoma to therapy is a strong prognostic factor for disease-free and overall survival. Special attention to finding and evaluating the tumor bed is necessary for these specimens.<br/> Numerous classification systems have been developed to evaluate response.1,2 Institutions or treatment protocols may require evaluation by one of these systems. The AJCC stage after treatment is also associated with prognosis. T and N categories determined after treatment are indicated by the prefix “yp.” <br/> Invasive carcinomas with a minor response may show little or no change in size. With greater degrees of response, the carcinoma shows decreased cellularity and may be present as multiple foci of invasion scattered over a larger tumor bed. The post-neoadjuvant therapy pathologic T-category (ypT) is based on the largest single focus of residual tumor, if present. Treatment-related fibrosis adjacent to residual invasive carcinoma is not included in the ypT maximum dimension. The “m” modifier is used to indicate that multiple foci of invasive carcinoma are present. The inclusion of additional information, such as the distance over which invasive carcinoma is present, the number of foci of invasive carcinoma, or the number of slides or blocks with invasive carcinoma, may be helpful in estimating the extent of residual disease. If no residual invasive carcinoma is present in the breast, the case summary can be used to report residual DCIS and/or metastatic carcinoma in lymph nodes. If there is no residual carcinoma in the breast or in the lymph nodes, then a CAP protocol case summary need not be used for reporting. Cases with no residual invasive carcinoma after neoadjuvant therapy are categorized as ypTis if there is residual DCIS or ypT0 if there is no residual cancer (not ypTX). Cases categorized as M1 before neoadjuvant therapy stay that way (ie, they remain Stage IV even if there is complete pathologic response). <br/> Most carcinomas are of the same grade after treatment. In a few cases, the grade will be higher because of marked nuclear pleomorphism. In very rare cases, the carcinoma will be of lower grade. The prognostic significance of a change in grade after treatment has not been determined.
      If negative prior to treatment, it is recommended that ER, PgR, and HER2 be repeated on invasive carcinomas after treatment, as significant changes may occur in a subset of carcinomas, sometimes due to tumor heterogeneity and limited sampling prior to treatment.</p>

      <h4>References</h4>
              <hr>
      <ol>
      <li>1. Sahoo S, Lester SC. Pathology of breast carcinomas after neoadjuvant chemotherapy: an overview with recommendations on specimen processing and reporting. Arch Pathol Lab Med. 2009;133:633-642.</li>
      <li>2. Kuroi K, Toi M, Tsuda H, Kurosumi M, Akiyama F. Issues in the assessment of the pathologic effect of primary systemic therapy for breast cancer. Breast Cancer. 2006;13:38-48.</li>
      <li>3. Pinder SE, Provenzano E, Earl H, Ellis IO. Laboratory handling and histology reporting of breast specimens from patients who have received neoadjuvant chemotherapy. Histopathology. 2007;50:409-417.</li>
      </ol>
      </div>
    </div>

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">L. Lymphovascular Invasion</h4>
      </div>
      <div class="modal-body">
        <p>Lymphovascular invasion (LVI) is associated with local recurrence and reduced survival.1-3 Distinguishing lymphatic channels from blood vessels is unnecessary. Documenting the presence of dermal lymphovascular invasion is particularly important because of its strong association with the clinical findings of inflammatory breast carcinoma. Reporting the LVI status for stage IIA and IIB patients who have an axillary lymph node dissection (ALND) may influence the use of radiotherapy.4 <br/> Strict criteria have been proposed for the diagnosis of LVI5 (Table 3). Lymphovascular invasion may be seen in stroma between uninvolved lobules and can sometimes be mistaken for DCIS if the cells completely fill the lymphatic space. <br/> Guidelines issued by the St. Gallen International Expert Consensus Conference6 include recommendations based on the presence of “extensive” LVI but do not define the term “extensive.” There are conflicting results on the significance of the number of foci of LVI.2,3  Pathologists may report the number of foci or the number of blocks with LVI as a measure of extent.</p>

        <h4>References</h4>
                  <hr>
        <ol>
          <li>1. Gonzalez MA, Pinder SE. Invasive carcinoma: other histologic prognostic factors – size, vascular invasion and prognostic index. In: O’Malley FP, Pinder SE, eds. Breast Pathology. Philadelphia, PA: Elsevier; 2006: 235-240</li>
          <li>2. Colleoni M, Rotmensz N, Maisonneuve P, et al. Prognostic role of the extent of peritumoral vascular invasion in operable breast cancer. Ann Oncol. 2007;18:1632-1640</li>
          <li>3. Mohammed RA, Martin SG, Mahmmod AM, et al. Objective assessment of lymphatic and blood vessel invasion in lymph node-negative breast carcinoma: findings from a large case series with long-term follow-up. J Pathol. 2011;223:358-365.</li>
          <li>4. Recht A, Comen EA, Fine RE, et al. Postmastectomy Radiotherapy: An American Society of Clinical Oncology, American Society for Radiation Oncology, and Society of Surgical Oncology Focused Guideline Update. Journal of Clinical Oncology. 2016 34:36, 4437. DOI: 10.1200/JCO.2016.69.1188</li>
          <li>5. Rosen PP. Tumor emboli in intramammary lymphatics in breast carcinoma: pathologic criteria for diagnosis and clinical significance. Pathol Annu. 1983;18 Pt 2:215-232.</li>
          <li>6. Goldhirsch A, Wood WC, Coates AS, et al. Strategies for subtypes-dealing with the diversity of breast cancer: highlights of the St. Gallen International Expert Consensus on the primary therapy of early breast cancer 2011. Ann Oncol. 2011;22:1736-1747.</p>
        </ol>
      </div>
    </div>

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">M. Pathologic Stage Classification (pTNM, AJCC 8th Edition)</h4>
      </div>
      <div class="modal-body">
        <p>The tumor-node-metastasis (TNM) staging system maintained collaboratively by the American Joint Committee on Cancer (AJCC) and the International Union Against Cancer (UICC) is recommended. Assignment of Pathologic Prognostic Stage Group is the responsibility of the managing physician <br/> <strong>Pathologic Classification</strong><br/>The pathologic classification of a cancer is based on information acquired before treatment supplemented and modified by the additional evidence acquired during and from surgery, particularly from pathologic examination of resected tissues. The pathologic classification provides additional precise and objective data. Classification of T, N, and M by pathologic means is denoted by use of a lower case “p” prefix (pT, pN, pM).<br/>Pathologic T (pT): The pathologic assessment of the primary tumor (pT) generally is based on resection of the primary tumor generally from a single specimen. Resection of the tumor with several partial removals at the same or separate operations necessitates an effort at reasonable estimates of the size and extension of the tumor to assign the correct or highest pT category. On rare occasions, the tumor size is obtained from a previous core needle biopsy specimen, as the tumor in the core may be larger than the tumor in the excision specimen.<br/> AJCC/UICC definition of inflammatory carcinoma (T4d): Inflammatory carcinoma is a clinical-pathologic entity characterized by diffuse erythema and edema (peau d’orange) involving one-third or more of the skin of the breast. The skin changes are due to lymphedema caused by tumor emboli within dermal lymphatics, which may or may not be obvious in a small skin biopsy. However, a tissue diagnosis is still necessary to demonstrate an invasive carcinoma in the underlying breast parenchyma or at least in the dermal lymphatics, as well as to determine biological markers, such as ER, PgR, and HER2 status. Tumor emboli in dermal lymphatics without the clinical skin changes described above do not qualify as inflammatory carcinoma. Locally advanced breast cancers directly invading the dermis or ulcerating the skin without the clinical skin changes also do not qualify as inflammatory carcinoma. Thus, the term inflammatory carcinoma should not be applied to neglected locally advanced cancer of the breast presenting late in the course of a patient’s disease. The rare case that exhibits all the features of inflammatory carcinoma, but in which skin changes involve less than one-third of the skin, should be classified by the size and extent of the underlying carcinoma. <br/> Pathologic N (pN): The pathologic assessment of regional lymph nodes (pN) ideally requires resection of a minimum number of lymph nodes to assure that there is sufficient sampling to identify positive nodes if present. The recommended number generally does not apply in cases where sentinel node has been accepted as accurate for defining regional node involvement and a sentinel node procedure has been performed. At least 1 node with presence or absence of cancer documented by pathologic examination is required for pathologic N classification. <br/> Direct extension of primary tumor into a regional node is classified as node positive. A tumor nodule with a smooth contour in a regional node area is classified as a positive node. The size of the metastasis, not the size of the node, is used for the criterion for the N category.<br/> Specialized pathologic techniques such as immunohistochemistry or molecular techniques may identify limited metastases in lymph nodes that may not have been identified without the use of the special diagnostic techniques. Single tumor cells or small clusters of cells are classified as isolated tumor cells (ITCs). The standard definition for ITCs is a cluster of cells not more than 0.2 mm in greatest diameter. Cases with ITCs only in lymph nodes are classified as pN0. This rule also generally applies to cases with findings of tumor cells or their components by nonmorphologic techniques such as flow cytometry or DNA analysis. <br/>AJCC/UICC definition of isolated tumor cells: Isolated tumor cell clusters (ITC) are defined as small clusters of cells not greater than 0.2 mm or single tumor cells, or fewer than 200 cells in a single histologic cross-section. ITCs may be detected by routine histology or by immunohistochemical (IHC) methods. Nodes containing only ITCs are excluded from the total positive node count for purposes of N classification but should be included in the total number of nodes evaluated <br/> Approximately 1000 tumor cells are contained in a 3-dimensional 0.2-mm cluster. Thus, if more than 200 individual tumor cells are identified as single dispersed tumor cells or as a nearly confluent elliptical or spherical focus in a single histologic section of a lymph node, there is a high probability that more than 1000 cells are present in the lymph node. In these situations, the node should be classified as containing a micrometastasis (pN1mi). Cells in different lymph node cross-sections or longitudinal sections or levels of the block are not added together; the 200 cells must be in a single node profile even if the node has been thinly sectioned into multiple slices. It is recognized that there is substantial overlap between the upper limit of the ITC and the lower limit of the micrometastasis categories due to inherent limitations in pathologic nodal evaluation and detection of minimal tumor burden in lymph nodes. Thus, the threshold of 200 cells in a single cross-section is a guideline to help pathologists distinguish between these 2 categories. The pathologist should use judgment regarding whether it is likely that the cluster of cells represents a true micrometastasis or is simply a small group of isolated tumor cells. <br/> Pathologic M (pM): The pathologic assignment of the presence of metastases (pM1) requires histologic confirmation of cancer at the metastatic site. The designation MX has been eliminated from the AJCC/UICC TNM system. Pathologic M0 is an undefined concept, and the category “pM0” may not be used. Pathologic classification of the absence of distant metastases can only be made at autopsy. Cases with a biopsy of a possible metastatic site that shows ITCs such as circulating tumor cells (CTCs) or disseminated tumor cells (DTCs), or bone marrow micrometastases detected by IHC or molecular techniques, are classified as M0(i+) to denote the uncertain prognostic significance of these findings, and to classify the stage group according to the T and N and M0. <br/> Posttherapy or post-neoadjuvant therapy classification (yTNM): Cases for which systemic and/or radiation therapy are given before surgery (“neoadjuvant”) or for which no surgery is performed may have the extent of disease assessed at the conclusion of the therapy by clinical or pathologic means (if resection performed). This classification is useful to clinicians because the extent of response to therapy may provide important prognostic information to patients and help direct the extent of surgery or subsequent systemic and/or radiation therapy. T and N are classified by using the same categories as for clinical or pathologic staging for the disease type, and the findings are recorded by using the prefix designator “y” (eg, ycT; ycN; ypT; ypN). The “yc” prefix is used for the clinical stage after therapy, and the “yp” prefix is used for the pathologic stage for those cases that have surgical resection after neoadjuvant therapy. The M component should be classified by the M status defined pathologically prior to therapy. <br/> Retreatment classification (rTNM): This classification is assigned when further treatment is planned for a cancer that recurs after a disease-free interval. The original stage assigned at the time of initial diagnosis and treatment does not change when the cancer recurs or progresses. The use of this staging for retreatment or recurrence is denoted with the "r" prefix (rTNM). All information available at the time of retreatment should be used in determining the rTNM stage. <br/>Multiple tumors: When there are multiple simultaneous tumors of the same histology in 1 organ, the tumor with the highest T category is the one selected for classification and staging, and the multiplicity or the number of tumors is indicated in parentheses: for example, T2(m) or T2(5). For simultaneous bilateral cancers in paired organs, the tumors are classified separately as independent tumors in different organs. <br/> Metachronous primaries: Second or subsequent primary cancers occurring in the same organ or in different organs are staged as a new cancer with the TNM system. Second cancers are not staged using the “y” prefix unless the treatment of the second cancer warrants this use. <br/> Residual tumor and surgical margins: The absence or presence of residual tumor after treatment is described by the symbol “R.”  cTNM and pTNM describe the extent of cancer in general without consideration of treatment. cTNM and pTNM can be supplemented by the R classification, which deals with the tumor status after treatment. In some cases treated with surgery and/or with neoadjuvant therapy, there will be residual tumor at the primary site after treatment because of incomplete resection or local and regional disease that extends beyond the limit or ability of resection. The presence of residual tumor may indicate the effect of therapy, influence further therapy, and be a strong predictor of prognosis. In addition, the presence or absence of disease at the margin of resection may be a predictor of the risk of recurrent cancer. The presence of residual disease or positive margins may be more likely with more advanced T or N category tumors. The R category is not incorporated into TNM staging itself. However, the absence or presence of residual tumor and status of the margins may be recorded in the medical record and cancer registry.</p>

        <p>The R categories for the primary tumor site are: <br/>R0	No residual tumor <br/>R1	Microscopic residual tumor <br/>R2	Macroscopic residual tumor <br/>RX	Presence of residual tumor cannot be assessed </p>

        <p>The margin status may be recorded using the following categories:<br/>
        <ul>
        <li>Negative margins (tumor not present at surgical margin)</li>
        <li>Microscopic positive margin (tumor not identified grossly at the margin, but present microscopically at the margin)</li>
        <li>Macroscopic positive margin (tumor identified grossly at the margin)</li>
        <li>Margin not assessed</li>
        </ul>

        <h4>References</h4>
                  <hr>
        <ol>
          <li>1. Amin MB, Edge SB, Greene FL, et al, eds. AJCC Cancer Staging Manual. 8th ed. New York, NY: Springer; 2017.</li>
      </div>
    </div>

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">N. Additional Pathologic Findings</h4>
      </div>
        <div class="modal-body">
        <p>In some cases, additional pathologic findings are important for the clinical management of patients. <br/>If the biopsy was performed for a benign lesion and the invasive carcinoma is an incidental finding, this should be documented. An example would be the finding of DCIS with microinvasion in an excision for a large palpable fibroadenoma.<br/>If there has been a prior core needle biopsy or excisional biopsy, the biopsy site should be sampled and documented in the report. If the intention was to completely re-excise a prior surgical site, the report should document biopsy changes at the margin that could indicate an incomplete excision. This protocol should not be used if the main area of carcinoma has been previously removed and the current specimen is a re-excision of the margins. <br/>If multiple invasive carcinomas are present and differ in histologic type, grade, or the expression of ER, PgR, or HER2, this information should be included as text in this section.</p>
      </div>
    </div>
     <?php endif; ?>
		</div>
 </div>
      <hr><hr>
      <div class="container">
        <div class="row">
                <button type="button"  class="btn btn-primary btn-block" onclick="Export2Doc('exportContent', 'Brest Invasive Resection Report');">Export as .doc</button>
            </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
    <div class="container-fluid bg-theme-colored p-20">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="text-white font-11 m-0">Copyright &copy;2019 All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>

<?php /* C:\Users\DELL INSPIRON 15\Desktop\Laravel Projects\CBReporting\resources\views/preview_bir.blade.php */ ?>
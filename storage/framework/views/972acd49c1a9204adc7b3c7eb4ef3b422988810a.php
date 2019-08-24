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
<title>GASTROINTESTINAL TRACT || PANCREAS (EXOCRINE)</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">


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
              <h2 class="title">PANCREAS (EXOCRINE)</h2>
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
			    <h6 class="heading-title">Protocol Posting Date: June 2017 </h6>
			    <h6 class="heading-title">PANCREAS (EXOCRINE)</h6>
			</div>

		</div>
        <div style="margin-bottom: 100px;" class="col-md-12">
            <?php if($procedure != ''): ?>
                <p><strong>Procedure:</strong><span><?php if($procedure == 'Other (specify):'): ?> <?php echo e($procedure); ?> (<?php echo e($procedure_other); ?>) <?php else: ?> <?php echo e($procedure); ?> <?php endif; ?></span></p>
            <?php endif; ?>
            <?php if($tumorsite_ph != '' || $tumorsite_up != '' || $tumorsite_pb != '' || $tumorsite_pt != '' || $tumorsite_cd != '' || $tumorsite_ns != '' || $tumorsite_ot != '' ): ?>
                <p><strong>Tumor Site:</strong><span>
                <?php if($tumorsite_ph != ''): ?> <?php echo e($tumorsite_ph); ?>, <?php endif; ?>
                <?php if($tumorsite_up != ''): ?> <?php echo e($tumorsite_up); ?>, <?php endif; ?>
                <?php if($tumorsite_pb != ''): ?> <?php echo e($tumorsite_pb); ?>, <?php endif; ?>
                <?php if($tumorsite_pt != ''): ?> <?php echo e($tumorsite_pt); ?>, <?php endif; ?>
                <?php if($tumorsite_cd != ''): ?> <?php echo e($tumorsite_cd); ?>, <?php endif; ?>
                <?php if($tumorsite_ns != ''): ?> <?php echo e($tumorsite_ns); ?>, <?php endif; ?>
                <?php if($tumorsite_ot != ''): ?> <?php echo e($tumorsite_ot); ?> (<?php if($tumorsite_ot_specify != ''): ?> <?php echo e($tumorsite_ot_specify); ?>). <?php endif; ?> <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($tumorsize_cd != '' || $tumorsize_gd != ''): ?>
            <p><strong>Tumor Size:</strong><?php if($tumorsize_cd != ''): ?> Cannot be determined (explain): <?php echo e($tumorsize_cd); ?> <?php else: ?>  Greatest dimension (centimeters): <?php echo e($tumorsize_gd); ?>cm <?php if($tumorsize_length != '' && $tumorsize_width != ''): ?> => Additional dimensions (centimeters): <?php echo e($tumorsize_length); ?>cm X <?php echo e($tumorsize_width); ?>cm  <?php endif; ?>  <?php endif; ?><span></span></p>
            <?php endif; ?>
            <?php if($histologic != ''): ?>
                <p><strong>Histologic Type:</strong><?php if($histologic == 'Other histologic type not listed (specify):'): ?> <?php echo e($histologic); ?> <?php echo e($histologic_explain); ?> <?php else: ?>  <?php echo e($histologic); ?>  <?php endif; ?><span></span></p>
            <?php endif; ?>
            <?php if($histologic_grade != ''): ?>
                <p><strong>Histologic Grade:</strong><?php if($histologic_grade == 'Other '): ?> <?php echo e($histologic_grade); ?>: <?php echo e($histologic_grade_other); ?> <?php else: ?>  <?php echo e($histologic_grade); ?>  <?php endif; ?><span></span></p>
            <?php endif; ?>
            <?php if($tumor_extension_ne != '' || $tumor_extension_nc != '' || $tumor_extension_tp != '' || $tumor_extension_to != '' || $tumor_extension_td != '' || $tumor_extension_ts != '' || $tumor_extension_ta != '' || $tumor_extension_tm != '' || $tumor_extension_tip != '' || $tumor_extension_tia != '' || $tumor_extension_tv != '' || $tumor_extension_ca != '' ): ?>
                <p><strong>Tumor Extension:</strong><span>
                <?php if($tumor_extension_ne != ''): ?> <?php echo e($tumor_extension_ne); ?>, <?php endif; ?>
                <?php if($tumor_extension_nc != ''): ?> <?php echo e($tumor_extension_nc); ?>, <?php endif; ?>
                <?php if($tumor_extension_tp != ''): ?> <?php echo e($tumor_extension_tp); ?>, <?php endif; ?>
                <?php if($tumor_extension_to != ''): ?> <?php echo e($tumor_extension_to); ?>, <?php endif; ?>
                <?php if($tumor_extension_td != ''): ?> <?php echo e($tumor_extension_td); ?>, <?php endif; ?>
                <?php if($tumor_extension_ts != ''): ?> <?php echo e($tumor_extension_ts); ?>

                <?php if($tumor_extension_ts_tir != ''): ?> (<?php echo e($tumor_extension_ts_tir); ?>), <?php endif; ?>
                <?php if($tumor_extension_ts_tim != ''): ?> (<?php echo e($tumor_extension_ts_tim); ?>), <?php endif; ?>
                <?php if($tumor_extension_ts_tie != ''): ?> (<?php echo e($tumor_extension_ts_tie); ?>), <?php endif; ?>
                <?php if($tumor_extension_ts_tip != ''): ?> (<?php echo e($tumor_extension_ts_tip); ?>). <?php if($tumor_extension_ts_tip_specify != ''): ?> Specify: <?php echo e($tumor_extension_ts_tip_specify); ?>, <?php endif; ?> <?php endif; ?>
                <?php endif; ?>
                <?php if($tumor_extension_ta != ''): ?> <?php echo e($tumor_extension_ta); ?>, <?php endif; ?>
                <?php if($tumor_extension_tm != ''): ?> <?php echo e($tumor_extension_tm); ?>, <?php endif; ?>
                <?php if($tumor_extension_tip != ''): ?> <?php echo e($tumor_extension_tip); ?>, <?php endif; ?>
                <?php if($tumor_extension_tia != ''): ?> <?php echo e($tumor_extension_tia); ?>, <?php endif; ?>
                <?php if($tumor_extension_tv != ''): ?> <?php echo e($tumor_extension_tv); ?>, <?php endif; ?>
                <?php if($tumor_extension_ca != ''): ?> <?php echo e($tumor_extension_ca); ?>. <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm != ''): ?>
                <p><strong>Margins:</strong><span><?php echo e($icm); ?> </span></p>
            <?php endif; ?>
            <?php if($margin_examined != ''): ?>
                <p><strong>Margins:</strong><span><?php echo e($margin_examined); ?> </span></p>
            <?php endif; ?>
            <?php if($icm_distance != ''): ?>
                <p><strong>Distance of invasive carcinoma from margin(millimeters):</strong><span><?php echo e($icm_distance); ?> </span></p>
            <?php endif; ?>
            <?php if($icm_closest_margin != ''): ?>
                <p><strong>Specify closest margin:</strong><span><?php echo e($icm_closest_margin); ?> </span></p>
            <?php endif; ?>
            <?php if($icm_tumor_distance != ''): ?>
                <p><strong>Distance of invasive carcinoma from closest margin(millimeters):</strong><span><?php echo e($icm_tumor_distance); ?>mm </span></p>
            <?php endif; ?>
            <?php if($icm_pppm != '' || $icm_dppm != '' || $icm_om != ''): ?>
            <h5><em><u>For segmental resection (including distal pancreatectomy) specimens only:</u></em></h5>
            <?php endif; ?>
            <?php if($icm_pppm != ''): ?>
                <p><strong>Proximal Pancreatic Parenchymal Margin:</strong><span>
                <?php if($icm_pppm == 'Uninvolved by invasive carcinoma and pancreatic high-grade intraepithelial neoplasia'): ?>
                <?php echo e($icm_pppm); ?> <?php if($icm_pppm_distance != ''): ?> => (Distance of invasive carcinoma from margin (mm): <?php echo e($icm_pppm_distance); ?>mm)  <?php endif; ?>
                <?php elseif($icm_pppm == 'Uninvolved by invasive carcinoma'): ?>
                <?php echo e($icm_pppm); ?> <?php if($icm_pppm_distance != ''): ?> => (Distance of invasive carcinoma from margin (mm): <?php echo e($icm_pppm_distance); ?>mm)  <?php endif; ?>
                <?php else: ?>
                <?php echo e($icm_pppm); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_dppm != ''): ?>
                <p><strong>Distal Pancreatic Parenchymal Margin:</strong><span>
                <?php if($icm_dppm == 'Uninvolved by invasive carcinoma and pancreatic high-grade intraepithelial neoplasia'): ?>
                <?php echo e($icm_dppm); ?> <?php if($icm_dppm_distance != ''): ?> => (Distance of invasive carcinoma from margin (mm): <?php echo e($icm_dppm_distance); ?>mm)  <?php endif; ?>
                <?php elseif($icm_dppm == 'Uninvolved by invasive carcinoma'): ?>
                <?php echo e($icm_dppm); ?> <?php if($icm_dppm_distance != ''): ?> => (Distance of invasive carcinoma from margin (mm): <?php echo e($icm_dppm_distance); ?>mm)  <?php endif; ?>
                <?php else: ?>
                <?php echo e($icm_dppm); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_om_specify != ''): ?>
                <p><strong>Other Margin(s):</strong><span>
                <?php if($icm_om_specify != ''): ?> <?php echo e($icm_om_specify); ?>  (<?php echo e($icm_om); ?>)   <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_euppm != '' || $icm_euom != ''): ?>
            <h5><em><u>For enucleation specimens only: </u></em></h5>
            <?php endif; ?>
            <?php if($icm_euppm != ''): ?>
                <p><strong>Pancreatic Parenchymal Margin:</strong><span>
                <?php if($icm_euppm == 'Uninvolved by tumor'): ?> <?php echo e($icm_euppm); ?> <?php if($icm_euppm_distance != ''): ?> => (Distance of tumor from margin (mm): <?php echo e($icm_euppm_distance); ?>mm)  <?php endif; ?>
                <?php else: ?>
                <?php echo e($icm_euppm); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_om_specify != ''): ?>
                <p><strong>Other Margin(s): </strong><span>
                <?php if($icm_om_specify != ''): ?>  <?php echo e($icm_om_specify); ?>  (<?php echo e($icm_euom); ?>)   <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_nppm != '' || $icm_prupm != '' || $icm_bdm != '' || $icm_pmg != '' || $icm_dmj != ''): ?>
            <h5><em><u>For pancreaticoduodenal resection specimens only:</u></em></h5>
            <?php endif; ?>
            <?php if($icm_nppm != ''): ?>
                <p><strong>Pancreatic Neck/Parenchymal Margin:</strong><span>
                <?php if($icm_nppm == 'Uninvolved by invasive carcinoma and pancreatic high-grade intraepithelial neoplasia'): ?>
                <?php echo e($icm_nppm); ?> <?php if($icm_nppm_distance != ''): ?> => (Distance of invasive carcinoma from margin (mm): <?php echo e($icm_nppm_distance); ?>mm)  <?php endif; ?>
                <?php elseif($icm_nppm == 'Uninvolved by invasive carcinoma'): ?>
                <?php echo e($icm_nppm); ?> <?php if($icm_nppm_distance != ''): ?> => (Distance of invasive carcinoma from margin (mm): <?php echo e($icm_nppm_distance); ?>mm)  <?php endif; ?>
                <?php else: ?>
                <?php echo e($icm_nppm); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_prupm != ''): ?>
                <p><strong>Uncinate (Retroperitoneal/Superior Mesenteric Artery) Margin: </strong><span>
                <?php if($icm_prupm == 'Uninvolved by invasive carcinoma '): ?> <?php echo e($icm_prupm); ?> <?php if($icm_prupm_distance != ''): ?> => (Distance of invasive carcinoma from margin (mm): <?php echo e($icm_prupm_distance); ?>mm)  <?php endif; ?>
                <?php else: ?>
                <?php echo e($icm_prupm); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_bdm != ''): ?>
                <p><strong>Bile Duct Margin: </strong><span>
                <?php if($icm_bdm == 'Uninvolved by invasive carcinoma and pancreatic high-grade intraepithelial neoplasia'): ?>
                <?php echo e($icm_bdm); ?> <?php if($icm_bdm_distance != ''): ?> => (Distance of invasive carcinoma from margin (mm): <?php echo e($icm_bdm_distance); ?>mm)  <?php endif; ?>
                <?php elseif($icm_bdm == 'Uninvolved by invasive carcinoma'): ?>
                <?php echo e($icm_bdm); ?> <?php if($icm_bdm_distance != ''): ?> => (Distance of invasive carcinoma from margin (mm): <?php echo e($icm_bdm_distance); ?>mm)  <?php endif; ?>
                <?php else: ?>
                <?php echo e($icm_bdm); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_dmj != ''): ?>
                <p><strong>Distal Margin (Distal Duodenal or Jejunal): </strong><span><?php echo e($icm_dmj); ?></span></p>
            <?php endif; ?>
            <?php if($icm_pmom_specify != ''): ?>
                <p><strong>Other Margin(s):</strong><span>
                <?php if($icm_pmom_specify != ''): ?> <?php echo e($icm_pmom_specify); ?>  (<?php echo e($icm_pmom); ?>)   <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($treatment_effect != ''): ?>
                <p><strong>Treatment Effect: </strong><span>
                <?php if($treatment_effect == 'Present'): ?>
                <?php echo e($treatment_effect); ?> <?php if($treatment_effect_pre != ''): ?>  <?php echo e($treatment_effect_pre); ?> <?php endif; ?>
                <?php elseif($treatment_effect == 'Absent'): ?>
                <?php echo e($treatment_effect); ?> <?php if($treatment_effect_pre != ''): ?>  <?php echo e($treatment_effect_pre); ?> <?php endif; ?>
                <?php else: ?> <?php echo e($treatment_effect); ?>  <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($lymphovascular_invasion != ''): ?>
                <p><strong>Lymphovascular Invasion:</strong><span>(<?php echo e($lymphovascular_invasion); ?>)</span></p>
            <?php endif; ?>
            <?php if($perineural_invasion != ''): ?>
                <p><strong>Perineural Invasion:</strong><span>(<?php echo e($perineural_invasion); ?>)</span></p>
            <?php endif; ?>
            <?php if($ln != ''): ?>
                <p><strong>Regional Lymph Nodes:</strong><span><?php echo e($ln); ?> </span></p>
            <?php endif; ?>
            <?php if($ln_involved != ''): ?>
                <p><strong>Number of Lymph Nodes Involved:</strong><span><?php echo e($ln_involved); ?> </span></p>
                <p><strong>Number cannot be determined (explain):</strong><span><?php echo e($ln_involved_explain); ?> </span></p>
            <?php endif; ?>
            <?php if($ln_examined != ''): ?>
                <p><strong>Number of Lymph Nodes Examined: </strong><span><?php echo e($ln_examined); ?> </span></p>
                <p><strong>Number cannot be determined (explain):  </strong><span><?php echo e($ln_examined_explain); ?> </span></p>
            <?php endif; ?>
            <?php if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != '' || $primary_tumor != '' || $distance_metastasis != ''): ?><p><strong>Pathologic Stage Classification (pTNM, AJCC 8th Edition)</strong> <br/><i>Note: Reporting of pT, pN, and (when applicable) pM categories is based on information available to the pathologist at the time the report is issued. Only the applicable T, N, or M category is required for reporting; their definitions need not be included in the report. The categories (with modifiers when applicable) can be listed on 1 line or more than 1 line. Assignment of Pathologic Prognostic Stage Group is the responsibility of the managing physician and not the pathologist.</i></p><?php endif; ?>
            <?php if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != ''): ?><p><strong>TNM Descriptors: </strong><span>
            <?php if($tnm_descriptors_m != ''): ?> <?php echo e($tnm_descriptors_m); ?>, <?php endif; ?>
            <?php if($tnm_descriptors_r != ''): ?> <?php echo e($tnm_descriptors_r); ?>, <?php endif; ?>
            <?php if($tnm_descriptors_y != ''): ?> <?php echo e($tnm_descriptors_y); ?>, <?php endif; ?>
            <?php endif; ?>
            </span></p>
            <?php if($primary_tumor != ''): ?><p><strong>Primary Tumor: </strong><span> <?php echo e($primary_tumor); ?> </span></p><?php endif; ?>
            <?php if($distance_metastasis != ''): ?><p><strong>Distance Metastasis: </strong><span> <?php if($distance_metastasis == 'pM1:  Distant metastasis'): ?> <?php echo e($distance_metastasis); ?> <?php if($distance_metastasis_site != ''): ?> Specify site: <?php echo e($distance_metastasis_site); ?> <?php endif; ?> <?php else: ?> <?php echo e($distance_metastasis); ?> <?php endif; ?> </span></p><?php endif; ?>
            <?php if($findings_ni != '' || $findings_cp != '' || $findings_ap != '' || $findings_pi != '' || $findings_ot != '' ): ?>
                <p><strong>Additional Pathologic Findings:</strong><span>
                <?php if($findings_ni != ''): ?> <?php echo e($findings_ni); ?>, <?php endif; ?>
                <?php if($findings_cp != ''): ?> <?php echo e($findings_cp); ?>, <?php endif; ?>
                <?php if($tumorsite_pb != ''): ?> <?php echo e($tumorsite_pb); ?>, <?php endif; ?>
                <?php if($findings_ap != ''): ?> <?php echo e($findings_ap); ?>, <?php endif; ?>
                <?php if($findings_pi != ''): ?> <?php echo e($findings_pi); ?>, <?php endif; ?>
                <?php if($findings_ot != ''): ?> <?php echo e($findings_ot); ?> (<?php if($findings_ot_specify != ''): ?> <?php echo e($findings_ot_specify); ?>). <?php endif; ?> <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($ancillary_studies != ''): ?> <p><strong> Ancillary Studies</strong><br/> <?php echo e($ancillary_studies); ?> <?php endif; ?>
            <?php if($comments != ''): ?> <p><strong> Comments</strong><br/> <?php echo e($comments); ?> <?php endif; ?>
            <?php if($all_notes != ''): ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">A.  Procedure</h4>
                    </div>
                    <div class="modal-body">
                    <p>This protocol applies to epithelial tumors of the exocrine pancreas. It excludes endocrine tumors and tumors of the ampulla of Vater. More than 90% to 95% of malignant tumors of the pancreas are exocrine carcinomas.&nbsp; For these tumors, surgical resection remains the only potentially curative approach, and the prognosis is primarily dependent on the anatomic extent of disease and performance status.</p>
                    <hr>
                    <h4 class="modal-title" id="myModalLabel">B.  Definition of Location</h4>
                    <p>The anatomic subdivisions defining location of tumors of the pancreas (Figure 1) are as follows<sup>1</sup>:</p>
                    <p>&nbsp;</p>
                    <ul>
                    <li>Tumors of the head of the pancreas are those arising to the right of the left border of the superior mesenteric vein. The uncinate process is part of the head.</li>
                    <li>Tumors of the body of the pancreas are those arising between the left border of the superior mesenteric vein and the left border of the aorta.</li>
                    <li>Tumors of the tail of the pancreas are those arising between the left border of the aorta and the hilum of the spleen.</li>
                    </ul>
                    <p><img src="reporting_images/pee1.png" class="img-responsive" /></p>
                    <p><strong>Figure 1</strong>. Anatomic subsites of the pancreas. From Greene et al.<sup>30</sup> Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, Illinois. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) published by Springer Science and Business Media LLC, www.springerlink.com.</p>
                    <hr>
                    <h4 class="modal-title" id="myModalLabel">C.  Histologic Type</h4>
                    <p>A classification of malignant epithelial tumors of the exocrine pancreas recommended by the World Health Organization (WHO) is shown below.<sup>2</sup> However, this protocol does not preclude the use of other histologic types or systems of classification.</p>
                    <p>&nbsp;</p>
                    <h2>WHO Classification of Epithelial Tumors of the Exocrine Pancreas</h2>
                    <p>&nbsp;</p>
                    <h3>Malignant Tumors</h3>
                    <p>Ductal adenocarcinoma</p>
                    <p>Colloid carcinoma (mucinous noncystic carcinoma)</p>
                    <p>Signet-ring cell carcinoma</p>
                    <p>Adenosquamous carcinoma</p>
                    <p>Mucinous cystic neoplasm with an associated invasive carcinoma</p>
                    <p>Intraductal papillary-mucinous neoplam with an associated invasive carcinoma</p>
                    <p>Intraductal tubulopapillary neoplasm with an associated invasive carcinoma</p>
                    <p>Neuroendocrine carcinoma (poorly differentiated)</p>
                    <p>Large cell neuroendocrine carcinoma</p>
                    <p>Small cell neuroendocrine carcinoma</p>
                    <p>Undifferentiated (anaplastic) carcinoma</p>
                    <p>Undifferentiated carcinoma with osteoclast-like giant cells</p>
                    <p>Acinar cell carcinoma</p>
                    <p>Acinar cell cystadenocarcinoma</p>
                    <p>Serous cystadenocarcinoma</p>
                    <p>Mixed acinar-ductal carcinoma</p>
                    <p>Mixed ductal-neuroendocrine carcinoma</p>
                    <p>Mixed acinar-neuroendocrine carcinoma</p>
                    <p>Mixed acinar-neuroendocrine-ductal carcinoma</p>
                    <p>Solid-pseudopapillary neoplasm</p>
                    <p><sup>&nbsp;<em>### </em></sup><em>These histologic types are not usually graded. By definition, neuroendocrine carcinomas are high grade (grade 3) based on WHO 2010 grading scheme for neuroendocrine neoplasms.</em></p>
                    <hr>
                    <h4 class="modal-title" id="myModalLabel">D. Histologic Grade</h4>
                    <p>For adenocarcinomas, a histologic grade based on the extent of glandular differentiation is shown below<sup>3</sup>:</p>
                    <p>&nbsp;</p>
                    <p>Grade X &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cannot be assessed</p>
                    <p>Grade 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Well-differentiated (greater than 95% of tumor composed of&nbsp;glands)</p>
                    <p>Grade 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Moderately differentiated (50% to 95% of tumor composed of&nbsp;glands)</p>
                    <p>Grade 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Poorly differentiated (49% or less of tumor composed of glands)</p>
                    <p>&nbsp;</p>
                    <p>Certain histologic subtypes, including acinar cell carcinoma, acinar cell cystadenocarcinoma, serous cystadenocarcinoma, and solid-pseudopapillary neoplasm, are not assigned a grade. By convention, signet-ring cell carcinomas are assigned grade 3. Undifferentiated carcinomas lack morphologic or immunohistochemical evidence of glandular, squamous, or neuroendocrine differentiation. This grading scheme is not applicable to poorly differentiated neuroendocrine carcinomas.</p>
                    <p>&nbsp;</p>
                    <p>For pancreatic ductal carcinoma, histologic grade has been shown to have prognostic significance, with high grade (grade 3) being an unfavorable prognostic factor.<sup>3,4</sup> Kloeppel grading scheme uses a combination of glandular differentiation, mucin production, mitoses, and nuclear pleomorphism. No differences in predictive value have been demonstrated in comparisons between the Kl&ouml;ppel grading system and the grading system based on glandular differentiation alone.<sup> 4</sup> Other systems based on patterns of infiltration of predominant and secondary tumor patterns have been proposed<sup>3</sup> but have not been widely adopted.</p>
                    <hr>
                    <h4 class="modal-title" id="myModalLabel">E: Margins</h4>
                    <p>The nonperitonealized surface of the uncinate process (uncinate margin) constitutes the inferior-posterior retroperitoneal margin of pancreaticoduodenectomy specimens (Figure 2) and should be inked; sections through the tumor at its closest approach to this margin should be submitted.<sup>5</sup> This margin has also been referred to as <em>retroperitoneal margin</em> and <em>superior mesenteric artery margin</em>.</p>
                    <p>&nbsp;</p>
                    <p><strong>Figure 2.</strong> Posterior view of tumor arising in the pancreatic head, with dotted line indicating the location of the confluence of the portal and superior mesenteric veins. The hatched area shows the retroperitoneal (uncinate process) margin. From Greene et al.<sup>33</sup> Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, Illinois. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) published by Springer Science and Business Media LLC, www.springerlink.com.</p>
                    <p>&nbsp;</p>
                    <p>Because local recurrences of invasive pancreatic adenocarcinoma arise in the pancreatic bed corresponding to the uncinate margin and vascular groove of, Inking of the vascular groove corresponding to portal and superior mesenteric veins and submission of sections through the tumor at its closest approach to this surface is recommended. Reporting of tumor involvement of anterior and non-uncinate posterior surfaces is recommended, but not required. The vascular groove, anterior surface and the non-uncinate posterior surface are not considered as resection margins.<sup>1,5</sup></p>
                    <p><img src="reporting_images/pee2.png" class="img-responsive" /></p>
                    <p>When dealing with an intraductal tumor, the pancreatic (neck/parenchymal) resection margin and the common bile duct margin (Whipple resection) are the most critical. Complete en face sections through the pancreatic resection margin and the common bile duct margin should be taken.<sup>5</sup> The presence of tumor at or within 1 mm of resection margin constitutes a positive margin.<sup>6,7</sup> Margin status can be reported as negative (R0, no residual disease), R1 (positive, microscopic residual disease) and R2 (positive, macroscopic residual disease).<sup>1</sup></p>

                    <hr>
                    <h4 class="modal-title" id="myModalLabel">F. Treatment Effect </h4>
                    <p>Response of tumor to previous chemotherapy or radiation therapy should be reported.&nbsp; Several scoring systems have been described, and a modified Ryan scheme<sup>8 </sup>is recommended, as below:</p>
                    <p>&nbsp;</p>
                    <p><strong>Modified Ryan Scheme for Tumor Regression Score</strong><sup>8</sup></p>
                    <table>
                    <tbody>
                    <tr>
                    <td width="462">
                    <p><strong>Description</strong></p>
                    </td>
                    <td width="192">
                    <p><strong>Tumor Regression Score </strong></p>
                    </td>
                    </tr>
                    <tr>
                    <td width="462">
                    <p>No viable cancer cells (complete response)</p>
                    </td>
                    <td width="192">
                    <p>0</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="462">
                    <p>Single cells or rare small groups of cancer cells (near complete response)</p>
                    </td>
                    <td width="192">
                    <p>1</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="462">
                    <p>Residual cancer with evident tumor regression, but more than single cells or rare small groups of cancer cells (partial response)</p>
                    </td>
                    <td width="192">
                    <p>2</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="462">
                    <p>Extensive residual cancer with no evident tumor regression (poor or no response)</p>
                    </td>
                    <td width="192">
                    <p>3</p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <p>Sizable pools of acellular mucin may be present after chemoradiation but should not be interpreted as representing residual tumor. The size of the viable tumor should be used to assign the ypT category, and requires a combined assessment of gross and microscopic findings. Multiple foci of viable tumor within the same tumor mass can be added to obtain the maximum linear dimension for staging.&nbsp;&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>This protocol does not preclude the use of other systems for assessment of tumor response,.<sup>9,10</sup> A modification of the above scoring scheme into a 3-tier scheme has been shown to correlate better with outcome: no residual carcinoma (grade 0), minimal residual carcinoma defined as single cells or small groups of cancer cells, &lt;5% residual carcinoma (grade 1), 5% or more residual carcinoma (grade 2).<sup> 11,12</sup></p>

                    <hr>
                    <h4 class="modal-title" id="myModalLabel">G. Venous/Lymphatic Vessel Invasion</h4>
                    <p>Venous as well as lymphatic (small vessel) invasion has been shown to be an adverse prognostic factor.13,14</p>
                    <hr>
                    <h4 class="modal-title" id="myModalLabel">H. Perineural Invasion</h4>
                    <p>Perineural invasion has been shown to be an adverse prognostic factor</p>

                    <hr>
                    <h4 class="modal-title" id="myModalLabel">I. Pathologic Stage Classification (pTNM, AJCC 8th Edition)</h4>
                    <p>The TNM staging system for carcinoma of the exocrine pancreas of the American Joint Committee on Cancer (AJCC) and the International Union Against Cancer (UICC) is recommended and shown below.<sup>1</sup> The postresection prognosis of a patient with pancreatic carcinoma is primarily determined by the anatomic extent of disease as defined by the TNM stage groupings.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p>According to AJCC/UICC convention, the designation &ldquo;T&rdquo; refers to a primary tumor that has not been previously treated. The symbol &ldquo;p&rdquo; refers to the pathologic classification of the TNM, as opposed to the clinical classification, and is based on gross and microscopic examination. pT entails a resection of the primary tumor or biopsy adequate to evaluate the highest pT category, pN entails removal of nodes adequate to validate lymph node metastasis, and pM implies microscopic examination of distant lesions. Clinical classification (cTNM) is usually carried out by the referring physician before treatment during initial evaluation of the patient or when pathologic classification is not possible.</p>
                    <p>&nbsp;</p>
                    <p>Pathologic staging is usually performed after surgical resection of the primary tumor. Pathologic staging depends on pathologic documentation of the anatomic extent of disease, whether or not the primary tumor has been completely removed. If a biopsied tumor is not resected for any reason (eg, when technically infeasible) and if the highest T and N categories or the M1 category of the tumor can be confirmed microscopically, the criteria for pathologic classification and staging have been satisfied without total removal of the primary cancer.</p>
                    <p>&nbsp;</p>
                    <h2>TNM Descriptors</h2>
                    <p>For identification of special cases of TNM or pTNM classifications, the &ldquo;m&rdquo; suffix and &ldquo;y,&rdquo; &ldquo;r,&rdquo; and &ldquo;a&rdquo; prefixes are used. Although they do not affect the stage grouping, they indicate cases needing separate analysis.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;m&rdquo; suffix</u> indicates the presence of multiple primary tumors in a single site and is recorded in parentheses: pT(m)NM.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;y&rdquo; prefix</u> indicates those cases in which classification is performed during or after initial multimodality therapy (ie, neoadjuvant chemotherapy, radiation therapy, or both chemotherapy and radiation therapy). The cTNM or pTNM category is identified by a &ldquo;y&rdquo; prefix. The ycTNM or ypTNM categorizes the extent of tumor actually present at the time of that examination. The &ldquo;y&rdquo; categorization is not an estimate of tumor before multimodality therapy (ie, before initiation of neoadjuvant therapy).</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;r&rdquo; prefix</u> indicates a recurrent tumor when staged after a documented disease-free interval and is identified by the &ldquo;r&rdquo; prefix: rTNM.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;a&rdquo; prefix</u> designates the stage determined at autopsy: aTNM.</p>
                    <p>&nbsp;</p>
                    <h2>Vessel Invasion</h2>
                    <p>According to AJCC/UICC convention, vessel invasion (lymphatic or venous) does not affect the T category indicating local extent of tumor unless specifically included in the definition of a T category.</p>
                    <p>&nbsp;</p>
                    <h2>T Category Considerations (Figures 3 and 4)</h2>
                    <p>If more than 1 tumor is present in the pancreas, the tumor with the highest T category should be classified according to the pT definitions and either the multiplicity (&ldquo;m&rdquo;) or the actual number of simultaneous multiple tumors (eg, &ldquo;3&rdquo;) should be indicated in parentheses after the T category of the primary tumor (eg, pT3[m] or pT3[2]).</p>
                    <p>&nbsp;</p>
                    <p>This applies only to grossly recognizable, synchronous primary carcinomas and not to a single, grossly detected tumor with multiple separate microscopic foci.<sup>14</sup></p>
                    <p>&nbsp;</p>
                    <p>Tis includes high-grade pancreatic intraepithelial neoplasia (PanIn-3), intraductal papillary mucinous neoplasm with high-grade dysplasia, intraductal tubulopapillary neoplasm with high-grade dysplasia and mucinous cystic neoplasm with high-grade dysplasia.</p>
                    <p>&nbsp;</p>
                    <p>The T categories T1-T3 are defined by tumor size as it provides better prognostic stratification than classification based on extension into peripancreatic tissue.<sup> 17-21</sup> Tumor size is determined by measurement of the gross lesion and should be corroborated on microscopic assessment. For invasive carcinoma associated with intraductal papillary mucinous neoplasms, intraductal tubulopapillary neoplasms and mucinous cystic neoplasms, only the size of the invasive component should be used to determine the T category. The synoptic report is not required for intraductal papillary mucinous neoplasms, intraductal tubulopapillary neoplasms and mucinous cystic neoplasms in the absence of an invasive component. The invasive portion in these cases can be multifocal. It is currently not clear whether size of the largest tumor focus or combined size of all invasive foci determines tumor outcome. Both measurements can be included in the pathology report, and the the maximum linear dimension of the largest invasive focus is used for staging.</p>
                    <p>&nbsp;</p>
                    <p>Extension beyond the pancreas may include invasion of peripancreatic soft tissue, peritoneum (including mesocolon, greater/lesser omentum), extrapancreatic biliary system, and/or duodenum (including the ampulla of Vater) for pancreatic head tumors, while stomach, spleen, left adrenal, and peritoneum can be involved by direct extension of body/tail tumors. Tumor extension in these areas does not affect staging, but should be noted in the pathology report. Invasion of the portal vein does not affect staging, but has been shown to be an independent prognostic factor.<sup>22</sup> T4 tumors are characterized by involvement of superior mesenteric artery, celiac axis and/or common hepatic artery. In most instances, these tumors are considered unresectable and hence T4 category is determined by radiologic studies and is not usually assigned by pathologists.</p>
                    <p><img src="reporting_images/pee3.png" class="img-responsive" /></p>
                    <p><strong>Figure 3.</strong> T1 (left of dotted line) is defined as tumor measuring 2 cm or less in greatest dimension and limited to the pancreas.&nbsp; T2 (right of dotted line) is defined as tumor measuring more than 2 cm in greatest dimension and less than 4 cm in greatest dimension. From Greene et al.<sup>33</sup> Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, Illinois. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) published by Springer Science and Business Media LLC, www.springerlink.com.</p>
                    <p><img src="reporting_images/pee4.png" class="img-responsive" /></p>
                    <p><strong>Figure 4.</strong> T4 tumor involves the celiac axis (above dotted line) or the superior mesenteric artery (below dotted line). T4 tumors are considered unresectable and are rarely encountered in surgical pathology specimens. From Greene et al.<sup>33</sup> Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, Illinois. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) published by Springer Science and Business Media LLC, www.springerlink.com.</p>
                    <p>&nbsp;</p>
                    <h2>N Category Considerations</h2>
                    <p>The regional lymph nodes for pancreatic cancers include lymph nodes along common bile duct, common hepatic artery, portal vein, pyloric, anterior and posterior pancreaticoduodenal arcades, superior mesenteric vein and right lateral wall of superior mesenteric artery (Figures 5 and 6). The regional lymph nodes for the pancreatic body and tail cancers include lymph nodes along common hepatic artery, celiac axis, splenic artery, and splenic hilum. Tumor involvement of other nodal groups is considered distant metastasis. Anatomic division of lymph nodes is not necessary, but separately submitted lymph nodes should be individually reported.</p>
                    <p>&nbsp;</p>
                    <p>Lymph node metastasis is an independent adverse prognostic factor.<sup>13,17,19,23-25</sup> Microscopic evaluation of at least 12 lymph nodes is recommended for Whipple resections.<sup>26,27</sup> Based on outcome data, tumors with positive lymph nodes are now categorized as N1 or N2.<sup>28,29 </sup></p>
                    <p><img src="reporting_images/pee5.png" class="img-responsive" /></p>
                    <p><strong>Figure 5.</strong> Regional lymph nodes of the pancreas (anterior view). From Greene et al.<sup>33</sup> Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, Illinois. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) published by Springer Science and Business Media LLC, www.springerlink.com.</p>
                    <p><img src="reporting_images/pee6.png" class="img-responsive" /></p>
                    <p><strong>Figure 6.</strong> Regional lymph nodes of the pancreas (anterior view with pancreatic body removed to reveal retroperitoneal vessels and lymph nodes). From Greene et al.<sup>32</sup> Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, Illinois. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) published by Springer Science and Business Media LLC, www.springerlink.com.</p>
                    <p>&nbsp;</p>
                    <h2>M Category Considerations</h2>
                    <p>Peritoneal seeding or positive peritoneal cytology is considered M1.</p>
                    <hr>
                    <h4 class="modal-title" id="myModalLabel">J: Additional Pathologic Findings</h4>
                    <h2>Pancreatic Intraepithelial Neoplasia (PanIN)</h2>
                    <p>Noninvasive lesions of the ductal epithelium often are found in the pancreatic parenchyma surrounding ductal adenocarcinoma. These lesions are collectively known as pancreatic intraepithelial neoplasia (PanIN). PanINs were previously classified into 3 grades.<sup>30</sup> The most recent consensus recommends a 2-tier grading scheme for better reproducibility and for better alignment of the grades with treatment options.<sup>31</sup> A similar 2-tier scheme is recommended for noninvasive MCN and intraductal papillary mucinous neoplasm (IPMN).<sup>32</sup></p>
                    <p>&nbsp;</p>
                    <p>Normal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nonmucinous flattened or cuboidal epithelium without dysplasia</p>
                    <p>PanIN, low grade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Includes flat mucinous epithelium without dysplasia (PanIN-1A), papillary mucinous epithelium without dysplasia (PanIN-1B) and flat or papillary mucinous epithelium with mild-to-moderate dysplasia featuring mild-to-moderate nuclear irregularity, hyperchromasia, and loss of polarity (PanIN-2)</p>
                    <p>PanIN, high grade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Flat or papillary mucinous epithelium with severe dysplasia (marked nuclear irregularity, hyperchromasia, and loss of polarity), often with cribriforming and intraluminal blebbing (budding off of noncohesive cells), corresponds to carcinoma in situ</p>
                    <p>&nbsp;</p>
                    <p>High-grade PanIN at the resection margins of an otherwise completely resected malignancy should be noted in the pathology report. In this setting, the biologic significance of PanIN of any grade remains unclear. The presence of dysplasia at the margin of a noninvasive IPMN is also uncertain. The highest grade even if focal determines the final grade. For IPMN and MCN, the extent of high-grade dysplasia can be recorded, but does not currently have clinical relevance.</p>
                    <h2>&nbsp;</h2>
                    <h2>Other Findings</h2>
                    <p>In addition to the examination of other tissues and organs that are part of pancreaticoduodenectomy specimens, pathologic evaluation may also include examination of the gastric antrum for gastritis (eg, <em>Helicobacter pylori</em> gastritis or chemical gastritis) and the duodenum for duodenitis, peptic ulcer disease, and ampullitis.</p>

                    <hr>
                    <h4 class="modal-title" id="myModalLabel">References</h4>
                    <ol>
                        <li>Amin MB, Edge SB, Greene FL, et al, eds. <em>AJCC Cancer Staging Manual.</em> 8th ed. New York, NY: Springer; 2017.</li>
                        <li>Bosman FT, Carneiro F, Hruban RH, Theise ND, eds. <em>WHO Classification of Tumours of the Digestive System. </em>Geneva, Switzerland: WHO Press; 2010.</li>
                        <li>Adsay NV, Basturk O, Bonnett M, et al. A proposal for a new and more practical grading scheme for pancreatic ductal adenocarcinoma. <em>Am J Surg Pathol. </em>2005;29(6):724-733.</li>
                        <li>Giulianotti PC, Boggi U, Fornaciari G, et al. Prognostic value of histological grading in ductal adenocarcinoma of the pancreas: Kloppel vs TNM grading. <em>Int J Pancreatol. </em>1995;17(3):279-289.</li>
                        <li>Adsay NV, Basturk O, Saka B, et al. Whipple made simple for surgical pathologists: orientation, dissection, and sampling of pancreaticoduodenectomy specimens for a more practical and accurate evaluation of pancreatic, distal common bile duct, and ampullary tumors. <em>Am J Surg Pathol</em>. 2014;38(4):480-493.</li>
                        <li>Campbell F, Smith RA, Whelan P, et al. Classification of R1 resections for pancreatic cancer: the prognostic relevance of tumour involvement within 1 mm of a resection margin. <em>Histopathol. </em>2009;55(3):277-283.</li>
                        <li>Verbeke CS, Menon KV. Redefining resection margin status in pancreatic cancer. <em>HPB. </em>2009;11(4):282-289.</li>
                        <li>Ryan R, Gibbons D, Hyland JMP, et al. Pathological response following long-course neoadjuvant chemoradiotherapy for locally advanced rectal cancer. <em>Histopathology. </em>2005;47:141-146.</li>
                        <li>Evans DB, Rich TA, Byrd DR, et al. Preoperative chemoradiation and pancreaticoduodenectomy for adenocarcinoma of the pancreas.<em> Arch Surg</em>. 1992;127:1335-1339.</li>
                        <li>Breslin TM, Hess KR, Harbison DB, et al. Neoadjuvant chemoradiotherapy for adenocarcinoma of the pancreas: treatment variables and survival duration. <em>Ann Surg Oncol. </em>2001;8(2):123-132.</li>
                        <li>Chatterjee D, Katz MH, Rashid A, et al. <a href="https://mail.ucsf.edu/owa/redir.aspx?C=yAqnptqTHS6PF61knndBBWN6vB1fM3AUqx6XM1XDJ5kUD_HNiY_UCA..&amp;URL=https%3a%2f%2fwww.ncbi.nlm.nih.gov%2fpubmed%2f22028089">Histologic grading of the extent of residual carcinoma following neoadjuvant chemoradiation in pancreatic ductal adenocarcinoma: a predictor for patient outcome.</a> <em>Cancer</em>. 2012;118(12):3182-3190.</li>
                        <li>Lee SM, Katz MH, Liu L, et al. Validation of a proposed tumor regression grading scheme for pancreatic ductal adenocarcinoma after neoadjuvant therapy as a prognostic indicator for survival.<em> Am J Surg Pathol.</em> 2016;40(12):1653-1660.</li>
                        <li>Garcea G, Dennison AR, Ong SL, et al. Tumour characteristics predictive of survival following resection for ductal adenocarcinoma of the head of pancreas. <em>Eur J Surg Oncol. </em>2007;33(7):892-897.</li>
                        <li>Chen JW, Bhandari M, Astill DS, et al. Predicting patient survival after pancreaticoduodenectomy for malignancy: histopathological criteria based on perineural infiltration and lymphovascular invasion. <em>HPB (Oxford). </em>2010;12(2):101-108.</li>
                        <li>Chatterjee D, Katz MH, Rashid A, et al. Perineural and intra-neural invasion in posttherapy pancreaticoduodenectomy specimens predicts poor prognosis in patients with pancreatic ductal adenocarcinoma. <em>Am J Surg Pathol</em>. 2012;36(3):409.</li>
                        <li>Wittekind C, Greene FL, Hutter RVP, Sobin LH, Henson DE, eds. <em>TNM Supplement: A Commentary on Uniform Use.</em> 3rd ed. New York, NY: Wiley-Liss; 2003.</li>
                        <li>Lim JE, Chien MW, Earle CC. Prognostic factors following curative resection for pancreatic adenocarcinoma: a population-based, linked database analysis of 396 patients. <em>Ann Surg. </em>2003;237(1):74-85.</li>
                        <li>Matsumoto G, Muta M, Tsuruta K, Horiguchi S, Karasawa K, Okamoto A. Tumor size significantly correlates with postoperative liver metastases and COX-2 expression in patients with resectable pancreatic cancer. <em>Pancreatology. </em>2007;7(2-3):167-173.</li>
                        <li>Moon HJ, An JY, Heo JS, Choi SH, Joh JW, Kim YI. Predicting survival after surgical resection for pancreatic ductal adenocarcinoma. <em>Pancreas. </em>2006;32(1):37-43.</li>
                        <li>Saka B, Balci S, Basturk O, et al. Pancreatic ductal adenocarcinoma is spread to the peripancreatic soft tissue in the majority of resected cases, rendering the AJCC T-stage protocol (7th Edition) inapplicable and insignificant: a size-based staging system&nbsp;(pT1: &le;2, pT2: &gt;2-&le;4, pT3: &gt;4 cm) is more valid and clinically relevant. <em>Ann Surg Oncol</em>. 2016;23(6):2010-2018.</li>
                        <li>Allen PJ, Kuk D, Castillo CF, et al. Multi-institutional validation study of the American Joint Commission on Cancer (8th Edition) changes for T and N staging in patients with pancreatic adenocarcinoma. <em>Ann Surg.</em> 2017;265(1):185-191.</li>
                        <li>Nakagohri T, Kinoshita T, Konishi M, Inoue K, Takahashi S. Survival benefits of portal vein resection for pancreatic cancer. <em>Am J Surg. </em>2003;186(2):149-153.</li>
                        <li>Geer RJ, Brennan MF. Prognostic indicators for survival after resection of pancreatic adenocarcinoma. <em>Am J Surg. </em>1993;165(1):68-73.</li>
                        <li>House MG, Gonen M, Jarnagin WR, et al. Prognostic significance of pathologic nodal status in patients with resected pancreatic cancer. <em>J Gastrointest Surg. </em>2007;11(11):1549-1555.</li>
                        <li>Pawlik TM, Gleisner AL, Cameron JL, et al. Prognostic relevance of lymph node ratio following pancreaticoduodenectomy for pancreatic cancer. <em>Surgery. </em>2007;141(5):610-618.</li>
                        <li>Tomlinson JS, Jain S, Bentrem DJ, et al. Accuracy of staging node-negative pancreas cancer: a potential quality measure. <em>Arch Surg. </em>2007;142(8):767-773; discussion 773-774.</li>
                        <li>Schwarz RE, Smith DD. Extent of lymph node retrieval and pancreatic cancer survival: information from a large US population database. <em>Ann Surg Oncol</em> 2006;13(9):1189-1200.</li>
                        <li>Strobel O, Hinz U, Gluth A, et al. Pancreatic adenocarcinoma: number of positive nodes allows to distinguish several N categories. <em>Ann Surg. </em>2015;261(5):961-969.</li>
                        <li>Olca B, Burcu S, Serdar B, et al. Substaging of lymph node status in resected pancreatic ductal adenocarcinoma has strong prognostic correlations: proposal for a revised N classification for TNM staging. <em>Ann Surg Oncol. </em>2015;22:1187-1195.</li>
                        <li>Hruban RHMD, Adsay NVMD, Albores-Saavedra JMD, et al. Pancreatic intraepithelial neoplasia: a new nomenclature and classification system for pancreatic duct lesions. <em>Am J Surg Pathol. </em>2001;25:579-586.</li>
                        <li>Basturk O, Hong SM, Wood LD, et al. A revised classification system and recommendations from the Baltimore consensus meeting for neoplastic precursor lesions in the pancreas. <em>Am J Surg Pathol</em>. 2015;39:1730-1741.</li>
                        <li>Adsay V, Mino-Kenudson M, Furukawa T, et al; Members of Verona Consensus Meeting, 2013. Pathologic evaluation and reporting of intraductal papillary mucinous neoplasms of the pancreas and other tumoralintraepithelial neoplasms of pancreatobiliary tract: recommendations of Verona Consensus Meeting. <em>Ann Surg</em>. 2016;263(1):162-177.</li>
                        <li>Greene FL, Compton, CC, Fritz AG, et al, eds. <em>AJCC Cancer Staging Atlas.</em> New York, NY: Springer; 2006.</li>
                    </ol>
                    </div>
                </div>

            <?php endif; ?>
		</div>
        </div>

      <div style="margin-top: 100px;" class="container">
      <br/><br/>
      <hr><hr>
        <div class="row">
                <button type="button"  class="btn btn-primary btn-block" onclick="Export2Doc('exportContent', 'COLON AND RECTUM: Resection, Including Transanal Disk Excision of Rectal Neoplasms');">Export as .doc</button>
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

<?php /* C:\Users\DELL INSPIRON 15\Desktop\Laravel Projects\CBReporting\resources\views/preview_pee.blade.php */ ?>

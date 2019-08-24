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
<title>GASTROINTESTINAL TRACT || STOMACH</title>

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
              <h2 class="title">STOMACH</h2>
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
			    <h6 class="heading-title">STOMACH</h6>
			</div>

		</div>
        <div style="margin-bottom: 100px;" class="col-md-12">
            <?php if($procedure != ''): ?>
                <p><strong>Procedure:</strong><span>
                <?php if($procedure == 'Partial gastrectomy'): ?>
                <?php echo e($procedure); ?> <?php if($procedure_gas_other != ''): ?> (<?php echo e($procedure_gas_other); ?>) <?php endif; ?>
                <?php elseif($procedure == 'Other (specify):'): ?>
                <?php echo e($procedure); ?> (<?php echo e($procedure_other); ?>)
                <?php else: ?>
                <?php echo e($procedure); ?>

                <?php endif; ?></span></p>
            <?php endif; ?>
            <?php if($tumorsite_cd != '' || $tumorsite_fd != '' || $tumorsite_by != '' || $tumorsite_at != '' || $tumorsite_py != '' || $tumorsite_ns != '' || $tumorsite_ot != '' ): ?>
                <p><strong>Tumor Site:</strong><span>
                <?php if($tumorsite_cd != ''): ?> <?php echo e($tumorsite_cd); ?>, <?php endif; ?>
                <?php if($tumorsite_fd != ''): ?> <?php echo e($tumorsite_fd); ?>

                    <?php if($tumorsite_fd_aw != ''): ?> (<?php echo e($tumorsite_fd_aw); ?>) <?php endif; ?>
                    <?php if($tumorsite_fd_pw != ''): ?> (<?php echo e($tumorsite_fd_pw); ?>) <?php endif; ?>,
                <?php endif; ?>
                <?php if($tumorsite_by != ''): ?> <?php echo e($tumorsite_by); ?>

                    <?php if($tumorsite_by_aw != ''): ?> (<?php echo e($tumorsite_by_aw); ?>) <?php endif; ?>
                    <?php if($tumorsite_by_pw != ''): ?> (<?php echo e($tumorsite_by_pw); ?>) <?php endif; ?>
                    <?php if($tumorsite_by_lc != ''): ?> (<?php echo e($tumorsite_by_lc); ?>) <?php endif; ?>
                    <?php if($tumorsite_by_gc != ''): ?> (<?php echo e($tumorsite_by_gc); ?>) <?php endif; ?>,
                <?php endif; ?>
                <?php if($tumorsite_at != ''): ?> <?php echo e($tumorsite_at); ?>

                    <?php if($tumorsite_at_aw != ''): ?> (<?php echo e($tumorsite_at_aw); ?>) <?php endif; ?>
                    <?php if($tumorsite_at_pw != ''): ?> (<?php echo e($tumorsite_at_pw); ?>) <?php endif; ?>
                    <?php if($tumorsite_at_lc != ''): ?> ( <?php echo e($tumorsite_at_lc); ?>) <?php endif; ?>
                    <?php if($tumorsite_at_gc != ''): ?> (<?php echo e($tumorsite_at_gc); ?>) <?php endif; ?>,
                <?php endif; ?>
                <?php if($tumorsite_py != ''): ?> <?php echo e($tumorsite_py); ?>, <?php endif; ?>
                <?php if($tumorsite_ns != ''): ?> <?php echo e($tumorsite_ns); ?>, <?php endif; ?>
                <?php if($tumorsite_ot != ''): ?> <?php echo e($tumorsite_ot); ?> (<?php if($tumorsite_ot_specify != ''): ?> <?php echo e($tumorsite_ot_specify); ?>). <?php endif; ?> <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($tumorsize_cd != '' || $tumorsize_gd != ''): ?>
            <p><strong>Tumor Size:</strong><?php if($tumorsize_cd != ''): ?> Cannot be determined (explain): <?php echo e($tumorsize_cd); ?> <?php else: ?>  Greatest dimension (centimeters): <?php echo e($tumorsize_gd); ?>cm <?php if($tumorsize_length != '' && $tumorsize_width != ''): ?> => Additional dimensions (centimeters): <?php echo e($tumorsize_length); ?>cm X <?php echo e($tumorsize_width); ?>cm  <?php endif; ?>  <?php endif; ?><span></span></p>
            <?php endif; ?>
            <?php if($histologic != ''): ?>
                <p><strong>Histologic Type:</strong><span>
                   <?php if($histologic == 'Adenocarcinoma'): ?> <?php echo e($histologic); ?>

                    <p><strong>Lauren classification of adenocarcinoma:</strong></p>
                    <div style="padding-left: 20px;">
                    <?php if($histologic_ad_in !=''): ?><p><?php echo e($histologic_ad_in); ?> </p><?php endif; ?>
                    <?php if($histologic_ad_dt !=''): ?><p><?php echo e($histologic_ad_dt); ?> </p><?php endif; ?>
                    <?php if($histologic_ad_ma !=''): ?><p><?php echo e($histologic_ad_ma); ?> </p><?php endif; ?>
                    </div>
                <p><strong> Alternative optional classification (based on WHO classification): </strong></p>
                    <div style="padding-left: 20px;">
                    <?php if($histologic_ao_ta !=''): ?><p><?php echo e($histologic_ao_ta); ?> </p><?php endif; ?>
                    <?php if($histologic_ao_pc !=''): ?><p><?php echo e($histologic_ao_pc); ?> </p><?php endif; ?>
                    <?php if($histologic_ao_ma !=''): ?><p><?php echo e($histologic_ao_ma); ?> </p><?php endif; ?>
                    <?php if($histologic_ao_pa !=''): ?><p><?php echo e($histologic_ao_pa); ?> </p><?php endif; ?>
                    </div>
                <?php elseif($histologic == 'Other histologic type not listed (specify):'): ?>
                <?php echo e($histologic); ?> (<?php echo e($histologic_explain); ?>)
                <?php else: ?>
                <?php echo e($histologic); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($histologic_grade != ''): ?>
                <p><strong>Histologic Grade:</strong><?php if($histologic_grade == 'Other '): ?> <?php echo e($histologic_grade); ?>: <?php echo e($histologic_grade_other); ?> <?php else: ?>  <?php echo e($histologic_grade); ?>  <?php endif; ?><span></span></p>
            <?php endif; ?>
            <?php if($tumor_extension != ''): ?>
                <p><strong>Tumor Extention:</strong> <span>
                <?php if($tumor_extension == 'Tumor invades adjacent structures/organs'): ?> <?php echo e($tumor_extension); ?> (<?php echo e($tumor_extension_others); ?>)   <?php else: ?> <?php echo e($tumor_extension); ?>  <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm != ''): ?>
                <p><strong>Margins: </strong><span> <?php echo e($icm); ?> </span></p>
            <?php endif; ?>
            <?php if($margin_examined != ''): ?>
                <p><strong>Margins:</strong><span><?php echo e($margin_examined); ?> </span></p>
            <?php endif; ?>
            <?php if($icm_distance != ''): ?>
                <p><strong>Distance of invasive carcinoma from closest margin(millimeters):</strong><span><?php echo e($icm_distance); ?> </span></p>
            <?php endif; ?>
            <?php if($icm_closest_margin != ''): ?>
                <p><strong>Specify closest margin:</strong><span><?php echo e($icm_closest_margin); ?> </span></p>
            <?php endif; ?>
            <?php if($icm_tumor_distance != ''): ?>
                <p><strong>Distance of invasive carcinoma from closest margin(millimeters):</strong><span><?php echo e($icm_tumor_distance); ?>mm </span></p>
            <?php endif; ?>
            <?php if($icm_ppm != '' || $icm_dpm != '' || $icm_opm != '' || $icm_om != '' ): ?>
            <h5><em><u>For gastrectomy specimens only:</u></em></h5>
            <?php endif; ?>
            <?php if($icm_ppm != ''): ?>
                <p><strong>Proximal Margin:</strong><span>
                <?php if($icm_ppm == 'Uninvolved by invasive carcinoma'): ?>
                <?php echo e($icm_ppm); ?> <?php if($icm_ppm_other != ''): ?> (<?php echo e($icm_ppm_other); ?>) <?php endif; ?>
                <?php else: ?>
                <?php echo e($icm_pppm); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_dpm != ''): ?>
                <p><strong>Distal Margin:</strong><span>
                <?php if($icm_dpm == 'Uninvolved by invasive carcinoma'): ?>
                <?php echo e($icm_dpm); ?> <?php if($icm_dpm_other != ''): ?> (<?php echo e($icm_dpm_other); ?>) <?php endif; ?>
                <?php else: ?>
                <?php echo e($icm_dpm); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_opm != ''): ?>
                <p><strong>Omental (Radial) Margin:</strong><span>
                <?php if($icm_opm == 'Uninvolved by invasive carcinoma'): ?>
                <?php echo e($icm_opm); ?> <?php if($icm_opm_other != ''): ?> (<?php echo e($icm_opm_other); ?>) <?php endif; ?>
                <?php else: ?>
                <?php echo e($icm_opm); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_om_specify != ''): ?>
                <p><strong>Other Margin(s):</strong><span>
                <?php if($icm_om_specify != ''): ?> <?php echo e($icm_om_specify); ?>  (<?php echo e($icm_om); ?>)   <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($icm_mpm != '' || $icm_dmpm != ''): ?>
            <h5><em><u>For endoscopic resection specimens only: </u></em></h5>
            <?php endif; ?>
            <?php if($icm_mpm != ''): ?>
                <p><strong>Mucosal Margin:</strong><span>
                <?php if($icm_mpm == 'Uninvolved by invasive carcinoma'): ?>
                <?php echo e($icm_mpm); ?> <?php if($icm_mpm_other != ''): ?> (<?php echo e($icm_mpm_other); ?>) <?php endif; ?>
                <?php else: ?>
                <?php echo e($icm_mpm); ?>

                <?php endif; ?>
            <?php endif; ?>
            <?php if($icm_dmpm != ''): ?>
                <p><strong>Deep Margin:</strong><span>
                <?php echo e($icm_dmpm); ?>

            <?php endif; ?>
            <?php if($icm_euom_specify != ''): ?>
                <p><strong>Other Margin(s): </strong><span>
                <?php if($icm_euom_specify != ''): ?>  <?php echo e($icm_euom_specify); ?>  (<?php echo e($icm_euom); ?>)   <?php endif; ?>
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
                <p><strong>Lymphovascular Invasion: </strong><span> <?php echo e($lymphovascular_invasion); ?></span></p>
            <?php endif; ?>
            <?php if($perineural_invasion != ''): ?>
                <p><strong>Perineural Invasion: </strong><span> <?php echo e($perineural_invasion); ?></span></p>
            <?php endif; ?>
            <?php if($ln != ''): ?>
                <p><strong>Regional Lymph Nodes: </strong><span> <?php echo e($ln); ?> </span></p>
            <?php endif; ?>
            <?php if($ln_involved != ''): ?>
                <p><strong>Number of Lymph Nodes Involved: </strong><span> <?php echo e($ln_involved); ?> </span></p>
                <p><strong>Number cannot be determined (explain): </strong><span> <?php echo e($ln_involved_explain); ?> </span></p>
            <?php endif; ?>
            <?php if($ln_examined != ''): ?>
                <p><strong>Number of Lymph Nodes Examined: </strong><span> <?php echo e($ln_examined); ?> </span></p>
                <p><strong>Number cannot be determined (explain):  </strong><span> <?php echo e($ln_examined_explain); ?> </span></p>
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
            <?php if($findings_ni != '' || $findings_im != '' || $findings_lg != '' || $findings_hg != '' || $findings_hp != '' || $findings_aa != '' || $findings_po != '' || $findings_ot != '' ): ?>
                <p><strong>Additional Pathologic Findings:</strong><span>
                <?php if($findings_ni != ''): ?> <?php echo e($findings_ni); ?>, <?php endif; ?>
                <?php if($findings_im != ''): ?> <?php echo e($findings_im); ?>, <?php endif; ?>
                <?php if($findings_lg != ''): ?> <?php echo e($findings_lg); ?>, <?php endif; ?>
                <?php if($findings_hg != ''): ?> <?php echo e($findings_hg); ?>, <?php endif; ?>
                <?php if($findings_hp != ''): ?> <?php echo e($findings_hp); ?>, <?php endif; ?>
                <?php if($findings_aa != ''): ?> <?php echo e($findings_aa); ?>, <?php endif; ?>
                <?php if($findings_po != ''): ?> <?php echo e($findings_po); ?> (<?php if($findings_po_specify != ''): ?> <?php echo e($findings_po_specify); ?>), <?php endif; ?> <?php endif; ?>
                <?php if($findings_ot != ''): ?> <?php echo e($findings_ot); ?> (<?php if($findings_ot_specify != ''): ?> <?php echo e($findings_ot_specify); ?>). <?php endif; ?> <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($ancillary_studies != ''): ?> <p><strong> Ancillary Studies</strong><br/> <?php echo e($ancillary_studies_main); ?> <?php endif; ?>
            <?php if($comments != ''): ?> <p><strong> Comments</strong><br/> <?php echo e($comments); ?> <?php endif; ?>
            <?php if($all_notes != ''): ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">A.  Procedure</h4>
                    </div>
                    <div class="modal-body">
                    <p>This protocol applies to all carcinomas that arise in the stomach, including:</p>
                    <ul>
                    <li>Carcinomas involving the esophagogastric junction (EGJ) with tumor midpoint &gt;2 cm into the proximal stomach</li>
                    <li>Carcinomas of the cardia/proximal stomach without involvement of the EGJ even if tumor midpoint is &le;2&nbsp;cm into the proximal stomach</li>
                    </ul>
                    <p>This protocol DOES NOT apply to:</p>
                    <ul>
                    <li>Carcinomas involves the EGJ with tumor midpoint &le;2 into the proximal stomach (use CAP protocol for esophageal cancer)</li>
                    <li>Well-differentiated neuroendocrine tumors (use CAP protocol for neuroendocrine tumors of the stomach)</li>
                    <li>Lymphomas, gastrointestinal stromal tumors, and sarcomas.</li>
                    </ul>

                    <h4 class="modal-title" id="myModalLabel">B.  Tumor Site</h4>
                    <p>Tumor location should be described in relation to the following landmarks (Figure 1):</p>
                    <ul>
                    <li>gastric region: cardia, fundus, body, antrum, pylorus</li>
                    <li>greater curvature, lesser curvature</li>
                    <li>anterior wall, posterior wall</li>
                    </ul>
                    <p><img src="reporting_images/sth_1.png" class="img-responsive" /></p>
                    <p><strong>Figure 1.</strong>&nbsp; Anatomical subsites of the stomach. Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, Illinois. The original and primary source for this information is the <em>AJCC Cancer Staging Manual</em>, Eighth Edition (2017) published by Springer Science+Business Media.</p>
                    <p>&nbsp;</p>
                    <p>Tumors involving the EGJ with epicenter &le; 2cm into the proximal stomach are classified for purposes of staging as esophageal carcinomas,<sup>1</sup> and the CAP protocol for the esophagus should be used for such tumors. Tumors involving the EGJ with epicenter &gt;2 cm into the proximal stomach and any tumors in the stomach, including cardia cancers, without involvement of the EGJ should use the CAP protocol for the stomach. &nbsp;</p>
                    <p>&nbsp;</p>
                    <p>The proximal stomach located immediately below the diaphragm is cardia. The remaining portions are the fundus and the body. The distal portion of the stomach is the antrum. The pylorus is composed of muscular ring and a connection between the antrum and the first portion of the duodenum. The medial curvature of the stomach is the lesser curvature, whereas the lateral curvature is the greater curvature. The EGJ is defined as the junction of the tubular esophagus and the stomach irrespective of the type of epithelial lining of the esophagus.</p>

                    <h4 class="modal-title" id="myModalLabel">C.  Histologic Type</h4>
                    <p>For consistency in reporting, the recently revised histologic classification proposed by the WHO is recommended<sup>2</sup> (Table 1) but not required for clinical use. However, this classification scheme does not distinguish between intestinal and diffuse types of gastric carcinoma but includes signet-ring cell carcinoma in the poorly cohesive carcinoma category. Thus, the Laur&eacute;n classification<sup>4</sup> may be used in conjunction with the WHO system.</p>
                    <p>&nbsp;</p>
                    <p>With the exception of the rare small cell carcinoma of the stomach, which has an unfavorable prognosis, most multivariate analyses show no effect of tumor type, independent of stage, on prognosis.<sup>3</sup></p>
                    <p>&nbsp;</p>
                    <p><strong>Table 1. </strong><strong>WHO Classification of Carcinoma of the Stomach</strong><sup>2</sup></p>
                    <table>
                    <thead>
                    <tr>
                    <td width="217">
                    <p><strong>Tumor Type</strong></p>
                    </td>
                    <td width="469">
                    <p><strong>Histologic Features </strong></p>
                    </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td width="217">
                    <p>Adenocarcinoma</p>
                    <p>Papillary adenocarcinoma<br /> </p>
                    <p>Tubular adenocarcinoma<br /> </p>
                    <p>Mucinous adenocarcinoma<br /> </p>
                    <p>Poorly cohesive carcinomas, including signet-ring cell carcinoma and other variants</p>
                    <p>&nbsp;</p>
                    <p>Mixed carcinoma</p>
                    </td>
                    <td width="469">
                    <p>&nbsp;</p>
                    <p>Exophytic with elongated frond-like tumor extensions with fibrovascular cores; usually low grade.</p>
                    <p>Dilated or slit-like branching tubules; usually low grade, although poorly differentiated variants are described.</p>
                    <p>Contains more than 50% extracellular mucin pools. May contain scattered signet-ring cells.</p>
                    <p>Tumor cells infiltrate as isolated single cells or small aggregates. Signet ring cell carcinoma is predominantly composed of signet-ring cells containing a clear droplet of cytoplasmic mucin displacing the nucleus. Other variants of poorly cohesive carcinoma may resemble mononuclear inflammatory cells.</p>
                    <p>Mixture of morphologically identifiable components such as tubular, papillary, and poorly cohesive patterns.</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="217">
                    <p>Adenosquamous carcinoma</p>
                    </td>
                    <td width="469">
                    <p>Mixture of glandular and squamous neoplastic components; the squamous component should comprise at least 25% of tumor volume</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="217">
                    <p>Carcinoma with lymphoid stroma (medullary carcinoma)</p>
                    </td>
                    <td width="469">
                    <p>Poorly developed glandular structures associated with a prominent lymphoid infiltrate in the stroma. Associated with Epstein-Barr virus infection and may have a more favorable prognosis.</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="217">
                    <p>Hepatoid adenocarcinoma</p>
                    </td>
                    <td width="469">
                    <p>Large polygonal eosinophilic tumor cells resembling hepatocytes; may express alpha-fetoprotein.</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="217">
                    <p>Squamous cell carcinoma</p>
                    </td>
                    <td width="469">
                    <p>Keratinizing and nonkeratinizing forms are encountered.</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="217">
                    <p>Undifferentiated carcinoma</p>
                    </td>
                    <td width="469">
                    <p>High-grade carcinoma that cannot be further classified as adenocarcinoma, squamous cell carcinoma, or other recognized variants</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="217">
                    <p>Neuroendocrine carcinoma<br /> <br /> <br /> </p>
                    <p>Large cell neuroendocrine carcinoma</p>
                    <p>Small cell neuroendocrine carcinoma</p>
                    <p>Mixed adenoneuroendocrine carcinoma</p>
                    </td>
                    <td width="469">
                    <p>Poorly differentiated high-grade carcinoma with diffuse synaptophysin expression and faint or focal positivity for chromogranin A. These tumors exhibit a high mitotic rate (&gt;20 per 10 high power fields, or Ki-67 index &gt;20%), marked nuclear atypia, and may have focal necrosis</p>
                    <p>Tumor cells are large, with moderate amount of cytoplasm, and may contain prominent nucleoli.</p>
                    <p>Tumor cells are small, with finely granular chromatin and indistinct nucleoli.<br /> </p>
                    <p>Composed of both gland-forming and neuroendocrine malignant elements, with at least 30% of each component. Identification of scattered neuroendocrine cells in adenocarcinomas by immunohistochemistry does not qualify as mixed carcinoma.&nbsp;</p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <p>For well-differentiated neuroendocrine tumors, the CAP protocol for neuroendocrine tumors (carcinoid tumors) of the stomach applies.&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>The Laur&eacute;n classification, namely intestinal, diffuse, or mixed type, and/or the Ming classification, namely expanding or infiltrating type, may also be included. In general, significant correlation is seen between the various classification systems.<sup>5</sup></p>
                    <p>&nbsp;</p>
                    <p>The&nbsp;WHO classifies premalignant lesions of the gastrointestinal tract as intraepithelial neoplasia. For purposes of data reporting, high-grade dysplasia in a gastric resection specimen is reported as &ldquo;carcinoma in situ.&rdquo;&nbsp; The term &ldquo;carcinoma in situ&rdquo; is not widely applied to glandular neoplastic lesions in the gastrointestinal tract but is retained for tumor registry reporting purposes as specified by law in many states.&nbsp; </p>


                    <h4 class="modal-title" id="myModalLabel">D. Histologic Grade</h4>
                    <p>&nbsp;</p>
                    <table>
                    <thead>
                    <tr>
                    <td width="37">
                    <p>G</p>
                    </td>
                    <td width="601">
                    <p>G Definition</p>
                    </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td width="37">
                    <p>GX</p>
                    </td>
                    <td width="601">
                    <p>Grade cannot be assessed</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="37">
                    <p>G1</p>
                    </td>
                    <td width="601">
                    <p>Well differentiated</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="37">
                    <p>G2</p>
                    </td>
                    <td width="601">
                    <p>Moderately differentiated</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="37">
                    <p>G3</p>
                    </td>
                    <td width="601">
                    <p>Poorly differentiated, undifferentiated</p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <p>For adenocarcinomas, a histologic grading system that is based on the extent of glandular differentiation is suggested, as shown below.</p>
                    <p>&nbsp;</p>
                    <p>Grade X &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cannot be assessed</p>
                    <p>Grade 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Well differentiated (greater than 95% of tumor composed of&nbsp;glands)</p>
                    <p>Grade 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Moderately differentiated (50% to 95% of tumor composed of&nbsp;glands)</p>
                    <p>Grade 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Poorly differentiated (49% or less of tumor composed of glands)</p>
                    <p>&nbsp;</p>
                    <p>Signet-ring cell carcinomas are high grade and are classified as grade 3.</p>
                    <p>&nbsp;</p>
                    <p>In the AJCC 8the edition, undifferentiated carcinoma is grouped together with poorly differentiated carcinoma as grade 3. Small cell neuroendocrine carcinomas, which were classified as grade 4, are now considered as grade 3.</p>
                    <p>&nbsp;</p>
                    <p>Although grade has been shown to have little impact on survival for patients undergoing complete tumor resection,<sup>6</sup> it has a significant impact on margin-negative resectability, with higher grade tumors less likely to be resectable.</p>


                    <h4 class="modal-title" id="myModalLabel">E: Margins</h4>
                    <p>For surgical resection specimens, margins include the proximal, distal, and radial margins. The radial margins represent the nonperitonealized soft tissue margins closest to the deepest penetration of tumor. In the stomach, the lesser omental (hepatoduodenal and hepatogastric ligaments) and greater omental resection margins are the only radial margins. For endoscopic resection specimens, margins include peripheral mucosal margins and the deep margin of resection. It may be helpful to mark the margin(s) closest to the tumor with ink. Margins marked by ink should be designated in the macroscopic description.</p>

                    <h4 class="modal-title" id="myModalLabel">F. Treatment Effect</h4>

                    <p>Response of tumor to previous chemotherapy or radiation therapy should be reported. Although grading systems for tumor response have not been established, in general, 3-category systems provide good interobserver reproducibility.<sup>7</sup> The following system is suggested:</p>
                    <p>&nbsp;</p>
                    <table>
                    <tbody>
                    <tr>
                    <td width="463">
                    <p><strong>Description</strong></p>
                    </td>
                    <td width="174">
                    <p><strong>Tumor Regression Score </strong></p>
                    </td>
                    </tr>
                    <tr>
                    <td width="463">
                    <p>No viable cancer cells (complete response)</p>
                    </td>
                    <td width="174">
                    <p>0</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="463">
                    <p>Single cells or rare small groups of cancer cells (near complete response)</p>
                    </td>
                    <td width="174">
                    <p>1</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="463">
                    <p>Residual cancer with evident tumor regression, but more than single cells or rare small groups of cancer cells (partial response)</p>
                    </td>
                    <td width="174">
                    <p>2</p>
                    </td>
                    </tr>
                    <tr>
                    <td width="463">
                    <p>Extensive residual cancer with no evident tumor regression (poor or no response)</p>
                    </td>
                    <td width="174">
                    <p>3</p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <p>Sizable pools of acellular mucin may be present after chemoradiation but should not be interpreted as representing residual tumor.</p>
                    <p>&nbsp;</p>
                    <p>This protocol does not preclude the use of other systems for assessment of tumor response, such as the schemes reported by Memorial Sloan-Kettering Cancer Center investigators and others.<sup>8,9</sup></p>



                    <h4 class="modal-title" id="myModalLabel">G. Lymphovascular Invasion</h4>
                    <p>Both venous<sup>10</sup> and lymphatic vessel<sup>3</sup> invasion have been shown to be adverse prognostic factors<sup>8</sup> and are predictive of lymph node metastases in early gastric cancers.<sup>11</sup> However, the microscopic presence of tumor in lymphatic vessels or veins does not qualify as local extension of tumor as defined by the T classification (also see Note I).<sup>1</sup></p>

                    <h4 class="modal-title" id="myModalLabel">H. Perineural  Invasion</h4>
                    <p>Perineural invasion has been shown to be an adverse prognostic factor<sup>8</sup> and has been associated with lymph node metastases in early gastric cancer in univariate but not multivariate analyses.<sup>11</sup></p>


                    <h4 class="modal-title" id="myModalLabel">I. Regional Lymph Nodes</h4>

                    <p>The specific regional nodal areas of the stomach (Figure 2) are listed below.<sup>1</sup></p>
                    <p><img src="reporting_images/sth2.png" class="img-responsive" /></p>
                    <p><img src="reporting_images/sth3.png" class="img-responsive" /></p>
                    <p><strong>Figure 2.</strong>&nbsp; Regional lymph nodes of the stomach. Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, IL. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) edited by Greene et al<sup>14</sup> and published by Springer Science and Business Media, LLC, www.springerlink.com.</p>
                    <p>&nbsp;</p>
                    <ul>
                    <li>Perigastric along the greater curvature (including greater curvature, greater omental)</li>
                    <li>Perigastric along the lesser curvature (including lesser curvature, lesser omental)</li>
                    <li>Right and left paracardial (cardioesophageal)</li>
                    <li>Suprapyloric (including gastroduodenal)</li>
                    <li>Infrapyloric (including gastroepiploic)</li>
                    <li>Left gastric artery</li>
                    <li>Celiac artery</li>
                    <li>Common hepatic artery</li>
                    <li>Hepatoduodenal (along the proper hepatic artery, including portal)</li>
                    <li>Splenic artery</li>
                    <li>Splenic hilum</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>For gastrectomy specimens, at least 16 regional lymph nodes should be removed and assessed pathologically.</p>
                    <p>&nbsp;</p>
                    <p>Involvement of other intra-abdominal lymph nodes, such as retropancreatic, pancreaticoduodenal, peripancreatic, superior mesenteric, middle colic, para-aortic, or retroperitoneal nodes, is classified as distant metastasis.<sup>1</sup></p>


                    <h4 class="modal-title" id="myModalLabel">J. Pathologic Stage Classification (pTNM, AJCC 8th Edition)</h4>
                    <p>The TNM staging system for gastric carcinoma of the American Joint Committee on Cancer (AJCC) and the International Union Against Cancer (UICC) is recommended and shown below.<sup>1</sup></p>
                    <p>&nbsp;</p>
                    <p>According to AJCC/UICC convention, the designation &ldquo;T&rdquo; refers to a primary tumor that has not been previously treated. The symbol &ldquo;p&rdquo; refers to the pathologic classification of the TNM, as opposed to the clinical classification, and is based on gross and microscopic examination. pT entails a resection of the primary tumor or biopsy adequate to evaluate the highest pT category, pN entails removal of nodes adequate to validate lymph node metastasis, and pM implies microscopic examination of distant lesions. Clinical classification (cTNM) is usually carried out by the referring physician before treatment during initial evaluation of the patient or when pathologic classification is not possible.</p>
                    <p>&nbsp;</p>
                    <p>Pathologic staging is usually performed after surgical resection of the primary tumor. Pathologic staging depends on pathologic documentation of the anatomic extent of disease, whether or not the primary tumor has been completely removed. If a biopsied tumor is not resected for any reason (eg, when technically infeasible) and if the highest T and N categories or the M1 category of the tumor can be confirmed microscopically, the criteria for pathologic classification and staging have been satisfied without total removal of the primary cancer.</p>
                    <p><strong>&nbsp;</strong></p>
                    <h2>TNM Descriptors</h2>
                    <p>For identification of special cases of TNM or pTNM classifications, the &ldquo;m&rdquo; suffix and &ldquo;y,&rdquo; &ldquo;r,&rdquo; and &ldquo;a&rdquo; prefixes are used. In the AJCC 8<sup>th</sup> edition, &ldquo;y&rdquo; affects the stage grouping.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;m&rdquo; suffix</u> indicates the presence of multiple primary tumors in a single site and is recorded in parentheses: pT(m)NM.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;y&rdquo; prefix</u> indicates those cases in which classification is performed during or after initial multimodality therapy (ie, neoadjuvant chemotherapy, radiation therapy, or both chemotherapy and radiation therapy). The cTNM or pTNM category is identified by a &ldquo;y&rdquo; prefix. The ycTNM or ypTNM categorizes the extent of tumor actually present at the time of that examination. The &ldquo;y&rdquo; categorization is not an estimate of tumor before multimodality therapy (ie, before initiation of neoadjuvant therapy).</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;r&rdquo; prefix</u> indicates a recurrent tumor when staged after a documented disease-free interval and is identified by the &ldquo;r&rdquo; prefix: rTNM.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;a&rdquo; prefix</u> designates the stage determined at autopsy: aTNM.</p>
                    <p><strong>&nbsp;</strong></p>
                    <h2><u>Lymphovascular Invasion</u></h2>
                    <h2>Lymphovascular invasion (LVI) indicates whether microscopic lymphatic and/or vascular invasion is identified in the pathology report. LVI includes lymphatic invasion, vascular invasion, or lymph-vascular invasion. By AJCC/UICC convention, LVI does not affect the T category indicating local extent of tumor unless specifically included in the definition of a T category (also see Note G).</h2>
                    <p><strong>&nbsp;</strong></p>
                    <h2>T Category Considerations (Figures 3-5)</h2>
                    <p><strong>&nbsp;</strong></p>
                    <p>&nbsp;</p>
                    <table width="100%">
                    <tbody>
                    <tr>
                    <td>
                    <p><strong>T2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T3</strong></p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <p> <img src="reporting_images/sth4.png" class="img-responsive" /> <br/> <strong>Figure 3.</strong>&nbsp; Definitions of T1, T2, and T3. Tumor invading the lamina propria is classified as T1a (left side in T1 illustration), whereas tumor invading the submucosa is classified as T1b (right side). T2 tumor invades the muscularis propria. T3 tumor invades the subserosal adipose tissue. Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, IL. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) edited by Greene et al<sup>14</sup> and published by Springer Science and Business Media, LLC, www.springerlink.com.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <table width="679">
                    <tbody>
                    <tr>
                    <td width="367">
                    <table width="100%">
                    <tbody>
                    <tr>
                    <td>
                    <p><strong>T3</strong></p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    </td>
                    <td width="312">
                    <table width="100%">
                    <tbody>
                    <tr>
                    <td>
                    <p><strong>T3</strong></p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2" width="679">
                    <p><img src="reporting_images/sth5a.png" class="img-responsive" /> <img src="reporting_images/sth5b.png" class="img-responsive" /><br/><strong>Figure 4.</strong> T3 is defined as tumor that invades the subserosa.&nbsp; A T3 tumor may penetrate the muscularis propria with extension into the gastrocolic or gastrohepatic ligaments, or into the greater or lesser omentum (upper panel), without perforation of the visceral peritoneum covering these structures. Distal extension to duodenum (lower panel) does not affect T category. Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, IL. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) edited by Greene et al<sup>14</sup> and published by Springer Science and Business Media, LLC, www.springerlink.com.</p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <table width="100%">
                    <tbody>
                    <tr>
                    <td>
                    <p><strong>T4a</strong></p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <table width="100%">
                    <tbody>
                    <tr>
                    <td>
                    <p><strong>T4b</strong></p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <p><img src="reporting_images/sth6.png" class="img-responsive" /><br/><strong>Figure 5.</strong>&nbsp; T4a tumor penetrates the serosa (visceral peritoneum) without invasion of adjacent structures, whereas T4b tumor invades adjacent structures, such as the pancreas (shown). Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, IL. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) edited by Greene et al<sup>14</sup> and published by Springer Science and Business Media, LLC, www.springerlink.com.</p>
                    <p><strong>&nbsp;</strong></p>
                    <h2>N Category Considerations</h2>
                    <p>A designation of N0 should be used if all examined lymph nodes are negative, regardless of the total number removed and examined.<sup>1</sup> Lymph nodes containing isolated tumor cells, defined as single tumor cells or small clusters of cells not more than 0.2 mm in diameter, are classified as pN0. However, in treated gastric cancers, positive lymph nodes are defined as having at least one focus of residual tumor cells in the lymph nodes regardless of size.</p>
                    <p>&nbsp;</p>
                    <p>Metastatic tumor deposits in the subserosal fat adjacent to a gastric carcinoma, without evidence of residual lymph node tissue, are considered regional lymph node metastases for purposes of gastric cancer staging<sup>1</sup>. Tumor deposits are defined as discrete tumor nodules within the lymph drainage area of the primary carcinoma without identifiable lymph node tissue or identifiable vascular or neural structure. Shape, contour, and size of the deposit are not considered in these designations. Nodules implanted on the peritoneal surface are considered distant metastases (M1).&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><strong>Stage Groupings</strong></p>
                    <p>A separate stage grouping is used to stage patients receiving preoperative therapy due to the fact that prognostic implication for ypTNM differs from those of equivalent pTNM.</p>
                    <p>&nbsp;</p>
                    <h2>Stage Groupings for pTNM</h2>
                    <p>Stage 0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>Stage IA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>Stage 1B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>T2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>Stage IIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>Stage IIB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N3a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>T4a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>Stage IIIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N3a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T4a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N1-2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>T4b&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>Stage IIIB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T1-2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N3b&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N3a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T4a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N3a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T4b&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N1-2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>Stage IIIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N3b&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T4a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N3b&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T4b&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N3a or N3b&nbsp; M0</p>
                    <p>Stage IV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Any T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Any N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M1</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <h2>Stage groupings for ypTNM</h2>
                    <p>Stage I&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T1-2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; T1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>Stage II&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N2-3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N1-2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N0-1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T4a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>Stage III&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N2-3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T4a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N1-3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T4b&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Any N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M0</p>
                    <p>Stage IV &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Any T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Any N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M1</p>

                    <h4 class="modal-title" id="myModalLabel">J: Additional Pathologic Findings</h4>
                    <p>One of the most important risk factors for development of gastric carcinoma is long-standing infection with <em>Helicobacter pylori</em>, which leads to chronic gastritis and mucosal atrophy with intestinal metaplasia; autoimmune atrophic chronic gastritis, also a chronic inflammatory condition, is also associated with increased risk.<sup>12</sup> Occasionally, gastric carcinoma arises in a preexisting gastric polyp, most commonly large hyperplastic polyps in the setting of atrophic gastritis<strong>. </strong>Previous gastric surgery, such as Bilroth I or Bilroth II procedures for both benign and malignant indications, predisposes to the development of carcinoma in the remnant stomach; such tumors typically arise approximately 25 years after surgery for benign diseases.<sup>13</sup>&nbsp;</p>

                    <h4 class="modal-title" id="myModalLabel">Reference</h4>
                    <ol>
                    <li>Amin MB, Edge SB, Greene FL, et al, eds. <em>AJCC Cancer Staging Manual.</em> 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Bosman FT, Carreiro F, Ralph H. Hruban, Teise N, eds.<em> World Health Organization Classification of Tumours of the DIgestive System.</em> 4th ed. Geneva, Switzerland: WHO Press; 2010.</li>
                    <li>Talamonti MS, Kim SP, Yao KA, et al. Surgical outcomes of patients with gastric carcinoma: the importance of primary tumor location and microvessel invasion. <em>Surgery. </em>Oct 2003;134(4):720-727; discussion 727-729.</li>
                    <li>Lauren P. The two histological main types of gastric carcinoma. <em>Acta Pathol Microbiol Scand. </em>1965;64:31-49.</li>
                    <li>Luebke T, Baldus SE, Grass G, et al. Histological grading in gastric cancer by Ming classification: correlation with histopathological subtypes, metastasis, and prognosis. <em>World J Surg. </em>2005;29(11):1422-1427; discussion 1428.</li>
                    <li>Inoue K, Nakane Y, Michiura T, et al. Histopathological grading does not affect survival after R0 surgery for gastric cancer. <em>Eur J Surg Oncol. </em>2002;28(6):633-636.</li>
                    <li>Ryan R, Gibbons D, Hyland JMP, et al. Pathological response following long-course neoadjuvant chemoradiotherapy for locally advanced rectal cancer. <em>Histopathology. </em>2005;47:141-146.</li>
                    <li>Mansour JC, Tang L, Shah M, et al. Does graded histologic response after neoadjuvant chemotherapy predict survival for completely resected gastric cancer? <em>Ann Surg Oncol. </em>2007;14(12):3412-3418.</li>
                    <li>Rohatgi PR, Mansfield PF, Crane CH, et al. Surgical pathology stage by American Joint Commission on Cancer criteria predicts patient survival after preoperative chemoradiation for localized gastric carcinoma. <em>Cancer. </em>2006;107(7):1475-1482.</li>
                    <li>Fotia G, Marrelli D, De Stefano A, Pinto E, Roviello F. Factors influencing outcome in gastric cancer involving muscularis and subserosal layer. <em>Eur J Surg Oncol. </em>2004;30(9):930-934.</li>
                    <li>An JY, Baik YH, Choi MG, Noh JH, Sohn TS, Kim S. Predictive factors for lymph node metastasis in early gastric cancer with submucosal invasion: analysis of a single institutional experience. <em>Ann Surg</em>. 2007;246(5):749-753.</li>
                    <li>Kelley JR, Duggan JM. Gastric cancer epidemiology and risk factors. <em>J Clin Epidemiol</em>. 2003;56(1):1-9.</li>
                    <li>An JY, Choi MG, Noh JH, Sohn TS, Kim S. The outcome of patients with remnant primary gastric cancer compared with those having upper one-third gastric cancer. <em>Am J Surg</em>. 2007;194(2):143-147.</li>
                    <li>Greene FL, Compton, CC, Fritz AG, et al, eds. <em>AJCC Cancer Staging Atlas.</em> New York: Springer; 2006.</li>
                    </ol>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    </div>
                </div>

            <?php endif; ?>
		</div>
        </div>

      <div style="margin-top: 100px;" class="container">
      <br/><br/>
      <hr><hr>
        <div class="row">
                <button type="button"  class="btn btn-primary btn-block" onclick="Export2Doc('exportContent', 'Stomach');">Export as .doc</button>
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

<?php /* C:\Users\DELL INSPIRON 15\Desktop\Laravel Projects\CBReporting\resources\views/preview_sth.blade.php */ ?>

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
<title>HEAD AND NECK || PHARYNX (OROPHARYNX, HYPOPHARYNX, NASOPHARYNX)</title>

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
              <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
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
                <h2 class="title">PHARYNX (OROPHARYNX, HYPOPHARYNX, NASOPHARYNX)</h2>
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
                <p>CAP Approved</p>
                <h4>Surgical Pathology Cancer Case Summary</h4>
                <hr>
			    <h4 class="heading-title">Protocol Posting Date: February 2019 </h4>
			  <h4 class="heading-title">PHARYNX (OROPHARYNX, HYPOPHARYNX, NASOPHARYNX)</h4>
			</div>
		</div>
        <div class="col-md-12">
            <?php if($procedure_excision != '' || $procedure_ton != '' || $procedure_laryn != ''  || $procedure_neck_desection != '' || $procedure_other != '' || $procedure_not_specified != '' ): ?>
                <p><strong>Procedure:</strong>
                <?php if($procedure_excision != ''): ?> <?php echo e($procedure_excision); ?>, <?php endif; ?>
                <?php if($procedure_ton != ''): ?> <?php echo e($procedure_ton); ?>, <?php endif; ?>
                <?php if($procedure_laryn != ''): ?> <?php echo e($procedure_laryn); ?>, <?php endif; ?>
                <?php if($procedure_neck_desection != ''): ?> <?php echo e($procedure_neck_desection); ?>  <?php if($procedure_neck_desection_specify != ''): ?> (<?php echo e($procedure_neck_desection_specify); ?>) <?php endif; ?>, <?php endif; ?>
                <?php if($procedure_other != ''): ?> <?php echo e($procedure_other); ?>  <?php if($procedure_other_specify != ''): ?> (<?php echo e($procedure_other_specify); ?>) <?php endif; ?>, <?php endif; ?>
                <?php if($procedure_not_specified != ''): ?> <?php echo e($procedure_not_specified); ?>, <?php endif; ?>
                </p>
            <?php endif; ?>
            <?php if($tumorsite_ox != '' || $tumorsite_nx != '' || $tumorsite_hx != ''  || $tumorsite_ns != '' || $tumorsite_ot != '' ): ?>
            <p><strong>Tumor Site:</strong>
            <?php if($tumorsite_ox != ''): ?> <?php echo e($tumorsite_ox); ?>

            (<?php if($tumorsite_ox_pt != ''): ?>  <?php echo e($tumorsite_ox_pt); ?>, <?php endif; ?>
            <?php if($tumorsite_ox_bt != ''): ?>  <?php echo e($tumorsite_ox_bt); ?>, <?php endif; ?>
            <?php if($tumorsite_ox_st != ''): ?>  <?php echo e($tumorsite_ox_st); ?>, <?php endif; ?>
            <?php if($tumorsite_ox_ul != ''): ?>  <?php echo e($tumorsite_ox_ul); ?>, <?php endif; ?>
            <?php if($tumorsite_ox_pw != ''): ?>  <?php echo e($tumorsite_ox_pw); ?> <?php endif; ?>), <?php endif; ?>
            <?php if($tumorsite_nx != ''): ?> <?php echo e($tumorsite_nx); ?>  <?php if($tumorsite_nx_nt != ''): ?> (<?php echo e($tumorsite_nx_nt); ?>) <?php endif; ?>, <?php endif; ?>
            <?php if($tumorsite_hx != ''): ?> <?php echo e($tumorsite_hx); ?>)
            (<?php if($tumorsite_hx_ps != ''): ?>  <?php echo e($tumorsite_hx_ps); ?>, <?php endif; ?>
            <?php if($tumorsite_hx_pc != ''): ?>  <?php echo e($tumorsite_hx_pc); ?>, <?php endif; ?>
            <?php if($tumorsite_hx_pw != ''): ?>  <?php echo e($tumorsite_hx_pw); ?> <?php endif; ?>), <?php endif; ?>
            <?php if($tumorsite_ns != ''): ?> <?php echo e($tumorsite_ns); ?> <?php endif; ?>
            <?php if($tumorsite_ot != ''): ?> <?php echo e($tumorsite_ot); ?>  <?php if($tumorsite_ot_specify != ''): ?> (<?php echo e($tumorsite_ot_specify); ?>) <?php endif; ?>, <?php endif; ?>
            <?php endif; ?>
            <?php if($tumorliterality != ''): ?><p><strong>Tumor Laterality:</strong> <?php echo e($tumorliterality); ?> <?php endif; ?>
            <?php if($tumorfocality != ''): ?><p><strong>Tumor Focality:</strong> <?php echo e($tumorfocality); ?><?php endif; ?>
            <?php if($tumorsize_cd != '' || $tumorsize_gd != ''): ?>
            <p><strong>Tumor Size:</strong><?php if($tumorsize_cd != ''): ?> Cannot be determined (explain): <?php echo e($tumorsize_cd); ?> <?php else: ?>  Greatest dimension (centimeters): <?php echo e($tumorsize_gd); ?>cm <?php if($tumorsize_length != '' && $tumorsize_width != ''): ?> => Additional dimensions (centimeters): <?php echo e($tumorsize_length); ?>cm X <?php echo e($tumorsize_width); ?>cm  <?php endif; ?>  <?php endif; ?></p>
            <?php endif; ?>
            <p><strong>Histologic Type</strong></p>
            <?php if($histologic_cc_on != ''): ?>
            <p><strong><u>Carcinomas of the Oropharynx and Hypopharynx:</u></strong></p> <?php echo e($histologic_cc_on); ?>

            <?php endif; ?>
            <?php if($histologic_sc_sc != '' || $histologic_sc_sn != '' || $histologic_sc_as != ''  || $histologic_sc_ac != '' || $histologic_sc_bs != '' || $histologic_sc_ps != '' || $histologic_sc_cc != '' || $histologic_sc_vs != '' || $histologic_sc_lc != '' ): ?>
            <p><strong><u>Squamous Cell Carcinoma and Variants: </u></strong></p>
                <?php if($histologic_sc_sc != ''): ?> <?php echo e($histologic_sc_sc); ?>, <?php endif; ?>
                <?php if($histologic_sc_sn != ''): ?> <?php echo e($histologic_sc_sn); ?>, <?php endif; ?>
                <?php if($histologic_sc_as != ''): ?> <?php echo e($histologic_sc_as); ?>, <?php endif; ?>
                <?php if($histologic_sc_ac != ''): ?> <?php echo e($histologic_sc_ac); ?>, <?php endif; ?>
                <?php if($histologic_sc_bs != ''): ?> <?php echo e($histologic_sc_bs); ?>, <?php endif; ?>
                <?php if($histologic_sc_ps != ''): ?> <?php echo e($histologic_sc_ps); ?>, <?php endif; ?>
                <?php if($histologic_sc_cc != ''): ?> <?php echo e($histologic_sc_cc); ?>, <?php endif; ?>
                <?php if($histologic_sc_vs != ''): ?> <?php echo e($histologic_sc_vs); ?>, <?php endif; ?>
                <?php if($histologic_sc_lc != ''): ?> <?php echo e($histologic_sc_lc); ?>, <?php endif; ?>
                </p>
            <?php endif; ?>
            <?php if($histologic_cn != ''): ?>
            <p><strong><u>Carcinomas of the Nasopharynx:</u></strong></p> <?php echo e($histologic_cn); ?>

            <?php endif; ?>
            <?php if($histologic != ''): ?>
            <p><strong><u>Carcinomas of Minor Salivary Glands:</u></strong></p>
                <?php if($histologic == 'Adenoid cystic carcinoma, tubular pattern' || $histologic == 'Adenoid cystic carcinoma, cribriform pattern' || $histologic == 'Adenoid cystic carcinoma, solid pattern'): ?>
                    <?php echo e($histologic); ?> (Specify percentage of solid component(%): <?php echo e($histologic_cent); ?>% )
                <?php else: ?>
                    <?php echo e($histologic); ?>

                <?php endif; ?>
            <?php endif; ?>
            <?php if($histologic_pp != ''): ?>
            <p><strong><u>Preexisting pleomorphic adenoma component:</u></strong></p>
            <?php echo e($histologic_pp); ?>

            <?php endif; ?>
            <?php if($histologic_nsgt != ''): ?>
            <p><strong><u>Adenocarcinomas (Non-Salivary Gland Type):</u></strong></p>
            <?php echo e($histologic_nsgt); ?>

            <?php endif; ?>
            <?php if($histologic_nc != ''): ?>
            <p><strong><u>Neuroendocrine Carcinoma:</u></strong></p>
                <?php if($histologic_nc == 'Other histologic type not listed (specify):' ): ?>
                    <?php echo e($histologic_nc); ?> (<?php echo e($histologic_explain); ?> )
                <?php else: ?>
                    <?php echo e($histologic_nc); ?>

                <?php endif; ?>
            <?php endif; ?>
            <?php if($histologic_grade != ''): ?>
                <p><strong>Histologic Grade:</strong><span><?php if($histologic_grade == 'Other '): ?> <?php echo e($histologic_grade); ?>: <?php echo e($histologic_grade_other); ?> <?php else: ?>  <?php echo e($histologic_grade); ?>  <?php endif; ?></span></p>
            <?php endif; ?>
            <?php if($tumor_extension != ''): ?>
                <p><strong>Tumor Extention:</strong><span> <?php echo e($tumor_extension); ?> </span></p>
            <?php endif; ?>
            <?php if($icm != ''): ?>
                <p><strong>Margins:</strong><span>
                <?php if($icm == 'Uninvolved by invasive tumor'): ?> <?php echo e($icm); ?>

                    <?php if($icm_closest_margin != ''): ?> (Distance from closest margin (millimeters): <?php echo e($icm_closest_margin); ?> )<?php endif; ?>
                    <?php if($icm_location_specify != ''): ?> (Specify location of closest margin, per orientation: <?php echo e($icm_location_specify); ?>) <?php endif; ?>
                    <?php if($icm_location_closest_margin != ''): ?> (Location and distance of other close margins: <?php echo e($icm_location_closest_margin); ?>) <?php endif; ?>
                <?php elseif($icm == "Involved by invasive tumor"): ?>
                    <?php if($icm_involve_distance_specify != ''): ?> (Specify location of closest margin, per orientation: <?php echo e($icm_involve_distance_specify); ?>) <?php endif; ?>
                <?php elseif($icm == "Uninvolved by high-grade dysplasia/in situ disease"): ?>
                    <?php if($icm_closest_margin != ''): ?> (Distance from closest margin (millimeters): <?php echo e($icm_closest_margin); ?> )<?php endif; ?>
                    <?php if($icm_location_specify != ''): ?> (Specify location of closest margin, per orientation: <?php echo e($icm_location_specify); ?>) <?php endif; ?>
                <?php elseif($icm == "Involved by high-grade dysplasia/in situ disease"): ?>
                    <?php if($icm_involve_distance_specify != ''): ?> (Specify location of closest margin, per orientation: <?php echo e($icm_involve_distance_specify); ?>) <?php endif; ?>
                <?php else: ?>
                    <?php echo e($icm); ?>

                <?php endif; ?>
            </span></p>
            <?php endif; ?>
            <?php if($lymphovascular_invasion != ''): ?>
                <p><strong>Lymphovascular Invasion:</strong> <?php echo e($lymphovascular_invasion); ?> <span></span></p>
            <?php endif; ?>
            <?php if($perineural_invasion != ''): ?>
                <p><strong>Perineural Invasion:</strong> <?php echo e($perineural_invasion); ?> <span></span></p>
            <?php endif; ?>
            <?php if($ln != ''): ?>
                <p><strong>Regional Lymph Nodes:</strong><span> <?php echo e($ln); ?> </span></p>
            <?php endif; ?>
            <?php if($ln_involved != ''): ?>
                <p><strong>Number of Lymph Nodes Involved:</strong><span><?php echo e($ln_involved); ?> </span></p>
                <p><strong>Number cannot be determined (explain):</strong><span><?php echo e($ln_involved_explain); ?> </span></p>
            <?php endif; ?>
            <?php if($ln_examined != ''): ?>
                <p><strong>Number of Lymph Nodes Examined: </strong><span><?php echo e($ln_examined); ?> </span></p>
                <p><strong>Number cannot be determined (explain):  </strong><span><?php echo e($ln_examined_explain); ?> </span></p>
            <?php endif; ?>
            <?php if($ln_leterality != ''): ?>
                <p><strong>Laterality of Lymph Nodes Involved:</strong><span> <?php echo e($ln_leterality); ?> </span></p>
            <?php endif; ?>
            <?php if($ln_deposit != ''): ?>
                <p><strong>Size of Largest Metastatic Deposit (centimeters):</strong><span> <?php echo e($ln_deposit); ?>cm </span></p>
            <?php endif; ?>
            <?php if($ene != ''): ?>
                <p><strong>Extranodal Extension (ENE): </strong><span>
                <?php if($ene == 'Present'): ?>
                    <?php echo e($ene); ?> => ( <?php if($ln_distance != ''): ?> Distance from lymph node capsule (millimeters): <?php echo e($ln_distance); ?> <?php endif; ?>)
                    <?php if($enema != ''): ?> (<?php echo e($enema); ?>) <?php endif; ?> <?php if($enemi != ''): ?> (<?php echo e($enemi); ?> ) <?php endif; ?>
                <?php else: ?>
                    <?php echo e($ene); ?>

                <?php endif; ?>
                </span></p>
            <?php endif; ?>
            <?php if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != '' || $distance_metastasis != '' || $primary_m_tumor != '' || $distance_metastasis_m != ''): ?><p><strong>Pathologic Stage Classification (pTNM, AJCC 8th Edition)</strong> <br/><i> Note: Reporting of pT, pN, and (when applicable) pM categories is based on information available to the pathologist at the time the report is issued. Only the applicable T, N, or M category is required for reporting; their definitions need not be included in the report. The categories (with modifiers when applicable) can be listed on 1 line or more than 1 line. </i></p><?php endif; ?>
            <?php if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != ''): ?><p><strong>TNM Descriptors: </strong><span>
            <?php if($tnm_descriptors_m != ''): ?> <?php echo e($tnm_descriptors_m); ?>, <?php endif; ?>
            <?php if($tnm_descriptors_r != ''): ?> <?php echo e($tnm_descriptors_r); ?>, <?php endif; ?>
            <?php if($tnm_descriptors_y != ''): ?> <?php echo e($tnm_descriptors_y); ?>, <?php endif; ?>
            <?php endif; ?>
            <?php if($primary_po_tumor != '' || $primary_no_tumor != '' || $primary_n_tumor != '' || $primary_t_tumor != ''): ?>
            <p><strong>For All Carcinomas</strong></p>
            <p><strong><u>Primary Tumor (pT)</u></strong></p>
            <?php if($primary_po_tumor != ''): ?>
            <p><em><i><b>For HPV-Mediated (Positive) Oropharynx:</b></i></em></p><span> <?php echo e($primary_po_tumor); ?> </span></p>
            <?php endif; ?>
            <?php if($primary_no_tumor != ''): ?>
            <p><em><i><b>For HPV-Unrelated (Negative) Oropharynx:</b></i></em></p><span> <?php echo e($primary_no_tumor); ?> </span></p>
            <?php endif; ?>
            <?php if($primary_n_tumor != ''): ?>
            <p><em><i><b>For Nasopharynx:</b></i></em></p><span> <?php echo e($primary_n_tumor); ?> </span></p>
            <?php endif; ?>
            <?php if($primary_t_tumor != ''): ?>
            <p><em><i><b>For Hypopharynx:</b></i></em></p><span> <?php echo e($primary_t_tumor); ?> </span></p>
            <?php endif; ?>
            <?php endif; ?>
            <?php if($rln_po != '' || $rln_no != '' || $rln_n != ''): ?>
            <p><strong>Regional Lymph Nodes (pN)</strong></p>
            <?php if($rln_po != ''): ?>
            <p><em><i><b>For HPV-Mediated (Positive) Oropharynx:</b></i></em></p><span> <?php echo e($rln_po); ?> </span></p>
            <?php endif; ?>
            <?php if($rln_no != ''): ?>
            <p><em><i><b>For HPV-Unrelated (Negative) Oropharynx and Hypopharynx:</b></i></em></p><span> <?php echo e($rln_no); ?> </span></p>
            <?php endif; ?>
            <?php if($rln_n != ''): ?>
            <p><em><i><b>For Nasopharynx:</b></i></em></p><span> <?php echo e($rln_n); ?> </span></p>
            <?php endif; ?>
            <?php endif; ?>
            <?php if($distance_metastasis != ''): ?><p><strong>Distance Metastasis: </strong><span> <?php if($distance_metastasis == 'pM1:  Distant metastasis'): ?> <?php echo e($distance_metastasis); ?> <?php if($distance_metastasis_site != ''): ?> Specify site: <?php echo e($distance_metastasis_site); ?> <?php endif; ?> <?php else: ?> <?php echo e($distance_metastasis); ?> <?php endif; ?> </span></p><?php endif; ?>
            <?php if($primary_m_tumor != ''): ?>
            <p><strong><u>Primary Tumor (pT):</u></strong> <?php echo e($primary_m_tumor); ?> </span></p>
            <?php endif; ?>
            <?php if($rln_m != ''): ?>
            <p><strong>Regional Lymph Nodes (pN)</strong> <?php echo e($rln_m); ?> </span></p>
            <?php endif; ?>
            <?php if($distance_metastasis_m != ''): ?><p><strong>Distance Metastasis: </strong><span> <?php if($distance_metastasis_m == 'pM1:  Distant metastasis'): ?> <?php echo e($distance_metastasis_m); ?> <?php if($distance_metastasis_site_m != ''): ?> Specify site: <?php echo e($distance_metastasis_site_m); ?> <?php endif; ?> <?php else: ?> <?php echo e($distance_metastasis_m); ?> <?php endif; ?> </span></p><?php endif; ?>
            <?php if($findings_ni != '' || $findings_sy != '' || $findings_ap != '' || $findings_sa != '' || $findings_mi != '' || $findings_mo != '' || $findings_sv != '' || $findings_ep != '' ||  $findings_cf != '' || $findings_cb != '' || $findings_if != '' || $findings_ot != ''): ?>
                <p><strong> Additional Pathologic Findings: </strong><span><?php echo e($findings_ni); ?> <?php echo e($findings_sy); ?> <?php echo e($findings_ap); ?> <?php echo e($findings_sa); ?> <?php echo e($findings_ss); ?>  <?php echo e($findings_mi); ?>  <?php echo e($findings_mo); ?>  <?php echo e($findings_sv); ?>  <?php echo e($findings_ep); ?>  <?php echo e($findings_cf); ?>  <?php echo e($findings_cb); ?>  <?php echo e($findings_if); ?>(<?php echo e($findings_if_specify); ?>) <?php echo e($findings_ot); ?> (<?php echo e($findings_ot_specify); ?>) </span></p>
            <?php endif; ?>
            <?php if($ancillary_studies != ''): ?><p><strong> Ancillary Studies: </strong><span> <?php echo e($ancillary_studies_main); ?> </p> <?php endif; ?>

            <?php if($comments != ''): ?> <p><strong> Comments</strong><br/> <?php echo e($comments); ?> <?php endif; ?>
            <?php if($all_notes != ''): ?>
                <div class="modal-content">
                    <h4 class="modal-title" id="myModalLabel">A.  Anatomic Sites and Subsites for the Larynx</h4>
                    <div class="modal-body">
                    <p>The pharynx is divided into 3 parts including the nasopharynx, oropharynx, and hypopharynx (Figure 1).</p>
                    <p><img src="reporting_images/phx1.png" class="img-responsive" /></p>
                    <p><strong>Figure 1.</strong> Anatomic subdivisions and &ldquo;contents&rdquo; of the pharynx. From Hollinshead WH. <em>Anatomy for Surgeons: The Head and Neck</em>. 3rd ed. Philadelphia, PA: Lippincott, Williams &amp; Wilkins; 1982. Reproduced with permission (<a href="http://lww.com">http://lww.com</a>).</p>
                    <p>&nbsp;</p>
                    <p><strong><br /> </strong></p>
                    <h3><strong>Oropharynx </strong>(Figure 1)</h3>
                    <p>The oropharynx is the portion of the continuity of the pharynx extending from the plane of the superior surface of the soft palate to the superior surface of the hyoid bone or floor of the vallecula.<sup>1,2</sup> The contents of the oropharynx include:</p>
                    <p>- soft palate</p>
                    <p>- palatine tonsils</p>
                    <p>- anterior and posterior tonsillar pillars</p>
                    <p>- tonsillar fossa and tonsillar (faucial) pillars</p>
                    <p>- uvula</p>
                    <p>- base of tongue, including the lingual tonsils</p>
                    <p>- vallecula</p>
                    <p>- posterior oropharyngeal wall</p>
                    <p>&nbsp;</p>
                    <h3><strong>Nasopharynx </strong>(Figure 1)</h3>
                    <p>The nasopharynx is situated behind the nasal cavity and above the soft palate; it begins anteriorly at the posterior choana and extends along the plane of the airway to the level of the free border of the soft palate.<sup>3</sup> The contents of the nasopharynx include:</p>
                    <p>- nasopharyngeal tonsils (adenoids) lie along the posterior and lateral of the nasopharynx</p>
                    <p>- orifice of Eustachian tube lies along the lateral aspects of the nasopharyngeal wall</p>
                    <p>- fossa of Rosenm&uuml;ller</p>
                    <p>&nbsp;</p>
                    <h3><strong>Hypopharynx </strong>(Figure 1)</h3>
                    <p>The hypopharynx is the portion of the pharynx extending from the plane of the superior border of the hyoid bone (or floor of the vallecula) to the plane corresponding to the lower border of the cricoid cartilage.<sup>1</sup> The contents of the hypopharynx include:</p>
                    <p>- piriform sinus (right and left) - represents part of the hypopharynx which expands bilaterally and forward around the sides of the larynx and lies between the larynx and the thyroid cartilage</p>
                    <p>- lateral and posterior hypopharyngeal walls</p>
                    <p>- postcricoid region extending from the level of the arytenoid cartilage and connecting folds to the inferior border of the cricoid cartilage; it connects the 2 piriform sinuses, thereby forming the anterior wall of the hypopharynx</p>
                    <p>&nbsp;</p>
                    <p><strong>Waldeyer ring</strong> is formed by a ring or group of extranodal lymphoid tissues about the upper end of the pharynx (Figure 2) which consists of the:</p>
                    <p>- palatine tonsils</p>
                    <p>- pharyngeal tonsils (adenoids)</p>
                    <p>- base of tongue/lingual tonsils</p>
                    <p>- adjacent submucosal lymphatics</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><img src="reporting_images/phx2.png" class="img-responsive" /></p>
                    <p><strong>Figure 2</strong>. Waldeyer tonsillar tissues. From Hollinshead WH. <em>Anatomy for Surgeons: The Head and Neck. </em>3rd ed. Philadelphia, PA: Lippincott, Williams &amp; Wilkins; 1982. Reproduced with permission (<a href="http://lww.com">http://lww.com</a>).</p>
                    <p>&nbsp;</p>
                    <p>References:</p>
                    <ol>
                    <li>Lydiatt WM, Ridge JA, Patel SG, et al. Oropharynx (p16 -) and hypopharynx. In: Amin MB, ed. <em>AJCC Cancer Staging Manual. 8th ed.</em> New York, NY: Springer; 2017.</li>
                    <li>O'Sullivan B, Lydiatt WM, Haughey BH, Brandwein-Gensler MS, Glastonbury CM, Shah JP. HPV mediated (p16+) oropharyngeal cancer. In: Amin MB, ed. <em>AJCC Cancer Staging Manual. 8th ed</em>. New York, NY: Springer; 2017.</li>
                    <li>Lee AWM, Lydiatt WM, Colevas AD, et al. Nasopharynx. In: Amin MB, ed. <em>AJCC Cancer Staging Manual. 8th ed.</em> New York, NY: Springer; 2017.</li>
                    </ol>
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">B.  Histologic Type</h4>
                    </div>
                    <p>A modification of the WHO classification of carcinomas of the oropharynx,<sup>1,2</sup> the nasopharynx,<sup>3</sup> and the hypopharynx<sup>4,5</sup> is shown below. This list may not be complete. This protocol applies only to carcinomas and melanomas and does not apply to lymphomas or sarcomas.</p>
                    <p>&nbsp;</p>
                    <h2>Carcinomas of the Oropharynx and Hypopharynx</h2>
                    <p>Squamous cell carcinoma</p>
                    <p>Human papillomavirus (HPV)-mediated (positive) squamous cell carcinoma (oropharynx only)<sup>#</sup></p>
                    <p>HPV-unrelated (negative) squamous cell carcinoma (oropharynx and hypopharynx)<sup>#</sup></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <p><em>Variants of Squamous Cell Carcinoma </em></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Keratinizing</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nonkeratinizing</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Acantholytic squamous cell carcinoma</p>
                    <p>Adenosquamous carcinoma</p>
                    <p>Basaloid squamous cell carcinoma</p>
                    <p>Papillary squamous cell carcinoma</p>
                    <p>Spindle cell squamous cell carcinoma</p>
                    <p>Verrucous squamous cell carcinoma</p>
                    <p>Lymphoepithelial carcinoma&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><em><sup># </sup></em><em>Modification based on separation of HPV-mediated (positive) and HPV-unrelated (negative) oropharyngeal squamous cell carcinoma in the AJCC 8<sup>th</sup> edition and WHO 4<sup>th</sup> edition.<sup>1,6,7</sup> </em></p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Carcinomas of the Nasopharynx</strong></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Keratinizing squamous cell carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nonkeratinizing squamous cell carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Basaloid squamous cell carcinoma</p>
                    <p><em>&nbsp;</em></p>
                    <p><strong>Adenocarcinomas Non-Salivary Gland Type</strong></p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nasopharyngeal papillary adenocarcinoma, low-grade</p>
                    <p>&nbsp;</p>
                    <h2>Carcinomas of the Minor Salivary Glands</h2>
                    <p>The histologic classification recommended is a modification of the WHO classification of salivary gland tumors.&nbsp; Additional entities are covered in the major salivary gland protocol.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Mucoepidermoid carcinoma</p>
                    <p>Adenoid cystic carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Acinic cell carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Polymorphous adenocarcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; (Mammary analogue) secretory carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Salivary duct carcinoma</p>
                    <p>Carcinoma ex pleomorphic adenoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Epithelial-myoepithelial carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; (Hyalinizing) clear cell carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Adenocarcinoma, not otherwise specified</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Basal cell adenocarcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Carcinosarcoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Intraductal carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Lymphoepithelial carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Myoepithelial carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Oncocytic carcinoma</p>
                    <p><strong>&nbsp;</strong></p>
                    <h4><strong>Neuroendocrine Carcinoma</strong></h4>
                    <p>Small cell neuroendocrine carcinoma, HPV negative</p>
                    <p>Small cell neuroendocrine carcinoma, HPV positive</p>
                    <p>Large cell neuroendocrine carcinoma, HPV negative</p>
                    <p>Large cell neuroendocrine carcinoma, HPV positive</p>
                    <p>&nbsp;</p>
                    <p><strong>Mucosal Melanoma</strong></p>
                    <p>&nbsp;</p>
                    <p>References:</p>
                    <ol>
                    <li>El-Naggar AK, Takata T. Tumours of the oropharynx (base of tongue, tonsils, adenoids). In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours.</em> Geneva, Switzerland: WHO Press; 2017:134-136.</li>
                    <li>Slootweg P, Eveson JW. Tumours of the oral cavity and oropharynx. In: Barnes L, Eveson JW, Reichart P, Sidransky D, eds. <em>World Health Organization Classification of Tumours: Pathology and Genetics of Head and Neck Tumours</em>. Lyon, France: IARC; 2005:164-167.</li>
                    <li>Chan JKC, Slootweg P. Introduction. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours.</em> Geneva, Switzerland: WHO Press; 2017:64-65.</li>
                    <li>Slootweg PJ, Grandis JR. Tumours of the hypopharynx, larynx and trachea and parapharyngeal space. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours.</em> Geneva, Switzerland: WHO Press; 2017:78-81.</li>
                    <li>Barnes L, Slootweg P, Tse LL, et al. Tumours of the hypopharynx, larynx and trachea. In: Barnes L, Eveson JW, Reichart P, Sidransky D, eds. <em>World Health Organization Classification of Tumours:</em></li>
                    <li>Lydiatt WM, Ridge JA, Patel SG, et al. Oropharynx (p16 -) and hypopharynx. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>O'Sullivan B, Lydiatt WM, Haughey BH, Brandwein-Gensler MS, Glastonbury CM, Shah JP. HPV mediated (p16+) oropharyngeal cancer. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    </ol>
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">C. Histologic Grade</h4>
                    </div>
                    <p>For histologic types of carcinomas that are amenable to grading, 3 histologic grades are suggested, as shown below. For conventional squamous cell carcinoma, histologic grading as a whole does not perform well as a prognosticator.<sup>1</sup> Nonetheless, it should be recorded when applicable, as it is a basic tumor characteristic. Specifically, it is only applicable for HPV-unrelated/negative oropharyngeal carcinomas and hypopharyngeal carcinomas. HPV-mediated/positive squamous cell carcinoma is not graded, and nasopharyngeal carcinoma is typed as above but does not otherwise require grading.<sup>2,</sup><sup>3,4</sup> Selecting either the most prevalent grade or the highest grade for this synoptic protocol is acceptable. Variants of squamous cell carcinoma (ie, verrucous, basaloid, etc) have an intrinsic biologic potential and currently do not appear to require grading.</p>
                    <p>&nbsp;</p>
                    <p>Grade 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Well differentiated</p>
                    <p>Grade 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Moderately differentiated</p>
                    <p>Grade 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Poorly differentiated</p>
                    <p>Grade X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cannot be assessed</p>
                    <p>&nbsp;</p>
                    <p>The histologic (microscopic) grading of salivary gland carcinomas has been shown to be an independent predictor of behavior and plays a role in optimizing therapy. Further, there is often a positive correlation between histologic grade and clinical stage.<sup>5-8</sup> However, most salivary gland carcinoma types have an intrinsic biologic behavior, and attempted application of a universal grading scheme is merely a crude surrogate.<sup>7</sup> Thus, a generic grading scheme is no longer recommended for salivary gland carcinomas.<sup>3</sup> Carcinoma types for which grading systems exist and are relevant are incorporated into histologic type. The 3 major categories that are amenable to grading include adenoid cystic carcinoma, mucoepidermoid carcinoma, and adenocarcinoma, not otherwise specified.<sup>6,7,9</sup></p>
                    <p>&nbsp;</p>
                    <p>In some carcinomas, histologic grading may be based on growth pattern, such as in adenoid cystic carcinoma, for which a histologic high-grade variant has been recognized based on the percentage of solid growth.<sup>9</sup> Those adenoid cystic carcinomas showing 30% or greater of solid growth pattern are considered to be histologically high-grade carcinomas. The histologic grading of mucoepidermoid carcinoma includes a combination of growth pattern characteristics (eg, cystic, solid, neurotropism) and cytomorphologic findings (eg, anaplasia, mitoses, necrosis).<sup>10-1</sup><sup>2</sup> &nbsp;Adenocarcinomas, not otherwise specified, do not have a formalized grading scheme and are graded intuitively based on cytomorphologic features.<sup>7</sup> Polymorphous adenocarcinomas are to be graded as per current WHO recommendations, though these are also graded intuitively as there are no listed criteria.</p>
                    <p>&nbsp;</p>
                    <p>Carcinoma ex pleomorphic adenoma is subclassifed by histologic type and or grade and extent of invasion, the latter including minimally invasive, widely invasive, and intracapsular (noninvasive) cancers.&nbsp; Previously the cut-off for minimal invasion was designated as 1.5 mm; however, more recent studies have shown a favorable prognosis even with cut-offs of 4 mm to 6 mm.<sup>1</sup><sup>3</sup> Thus, there is no agreement on an optimal cut-off.&nbsp; However, from a practical standpoint, the terms intracapsular, and minimally invasive should only be applied to uninodular tumors (as opposed to carcinomas arising in multinodular recurrent pleomorphic adenomas) with a well-delineated interface for which the entire lesional border has been microscopically evaluated.&nbsp; Prognosis has been linked to degree of invasion with noninvasive and minimally invasive cancers apparently having a better prognosis than invasive cancers.<sup>7,</sup><sup>13,14</sup></p>
                    <p>&nbsp;</p>
                    <p>References</p>
                    <ol>
                    <li>Barnes L, Eveson JW, Reichart P, Sidransky D. WHO histological classification of tumours of the oral cavity and oropharynx. In: Barnes L, Eveson JW, Reichart P, Sidransky D, eds. <em>World Health Organization Classification of Tumours: Pathology and Genetics of Head and Neck Tumours</em>. Lyon, France: IARC; 2005:164.</li>
                    <li>O'Sullivan B, Lydiatt WM, Haughey BH, Brandwein-Gensler MS, Glastonbury CM, Shah JP. HPV mediated (p16+) oropharyngeal cancer. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Lee AWM, Lydiatt WM, Colevas AD, et al. Nasopharynx. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Chan JKC, Slootweg P. Introduction. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours.</em> Geneva, Switzerland: WHO Press; 2017:64-65.</li>
                    <li>Spiro RH, Thaler HT, Hicks WF, Kher UA, Huvos AH, Strong EW. The importance of clinical staging of minor salivary gland carcinoma. <em>Am J Surg. </em>1991;162(4):330-336.</li>
                    <li>Spiro RH, Huvos AG, Strong EW. Adenocarcinoma of salivary origin: clinicopathologic study of 204 patients. <em>Am J Surg. </em>1982;144(4):423-431.</li>
                    <li>Seethala RR. Histologic grading and prognostic biomarkers in salivary gland carcinomas. <em>Adv Anat Pathol. </em>2011;18(1):29-45.</li>
                    <li>Kane WJ, McCaffrey TV, Olsen KD, Lewis JE. Primary parotid malignancies: a clinical and pathologic review. <em>Arch Otolaryngol Head Neck Surg. </em>1991;117(3):307-315.</li>
                    <li>Szanto PA, Luna MA, Tortoledo ME, White RA. Histologic grading of adenoid cystic carcinoma of the salivary glands. <em>Cancer. </em>1984;54(6):1062-1069.</li>
                    <li>Seethala RR, Dacic S, Cieply K, Kelly LM, Nikiforova MN. A reappraisal of the MECT1/MAML2 translocation in salivary mucoepidermoid carcinomas. <em>Am J Surg Pathol. </em>2010;34(8):1106-1121.</li>
                    <li>Brandwein MS, Ivanov K, Wallace DI, et al. Mucoepidermoid carcinoma: a clinicopathologic study of 80 patients with special reference to histological grading. <em>Am J Surg Pathol. </em>2001;25(7):835-845.</li>
                    <li>Auclair PL, Goode RK, Ellis GL. Mucoepidermoid carcinoma of intraoral salivary glands: evaluation and application of grading criteria in 143 cases. <em>Cancer. </em>1992;69(8):2021-2030.</li>
                    <li>Williams MD, Ihrler S, Seethala RR. Carcinoma ex pleomorphic adenoma. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours.</em> Geneva, Switzerland: WHO Press; 2017:176-177.</li>
                    <li>Brandwein M, Huvos AG, Dardick I, Thomas MJ, Theise ND. Noninvasive and minimally invasive carcinoma ex mixed tumor: a clinicopathologic and ploidy study of 12 patients with major salivary tumors of low (or no?) malignant potential. <em>Oral Surg Oral Med Oral Pathol Oral Radiol Endod. </em>1996;81(6):655-664.</li>
                    </ol>
                    <p>&nbsp;</p>
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">D AND E: Margins</h4>
                    </div>
                    <p>Historically, documentation of margin status for many oropharyngeal and hypopharyngeal tumors was not possible, and they were not oncologically resected but rather treated with chemotherapy and radiation. With the advent of transoral robotic and laser surgery, however, intact resections have become increasingly common.&nbsp; Limited evidence suggests that at the very minimum, a positive margin is represented by invasive carcinoma present at margin (microscopic cut-through of tumor).<sup>1-3</sup> Akin to other sites, there is no standard definition of a &ldquo;close&rdquo; margin, and definitions have ranged from 2 mm to 5 mm.<sup>2</sup> Despite the paucity of data, in keeping with other sites, the distance from the nearest margin should be recorded.</p>
                    <p>&nbsp;</p>
                    <p>For hypopharyngeal and HPV-negative oropharyngeal tumors, in situ disease and high-grade dysplasia is plausible, and if present at a margin, the margin is considered positive in line with other sites. When such lesions are identified in pharyngeal sites, it usually occurs in association with an invasive carcinoma. In this setting, the same criteria detailed in the oral cavity and laryngeal protocols apply (see Protocol for the Examination of Specimens from Patients with Carcinomas of the Lip and Oral Cavity and Protocol for the Examination of Specimens from Patients with Carcinomas of the Larynx).</p>
                    <p>&nbsp;</p>
                    <p>For HPV-positive oropharyngeal carcinoma, in situ disease for practical purposes nonexistent, likely given their derivation from the specialized &ldquo;lymphoepithelium&rdquo; of tonsillar crypt.<sup>4</sup></p>
                    <p>&nbsp;</p>
                    <p>Nasopharyngeal tumors are still generally not resected and margin status is usually not able to be documented.</p>
                    <p>&nbsp;</p>
                    <p>References:</p>
                    <ol>
                    <li>Weinstein GS, O'Malley BW, Jr., Snyder W, Sherman E, Quon H. Transoral robotic surgery: radical tonsillectomy. <em>Arch Otolaryngol Head Neck Surg. </em>2007;133(12):1220-1226.</li>
                    <li>Rubek N, Channir HI, Charabi BW, et al. Primary transoral robotic surgery with concurrent neck dissection for early stage oropharyngeal squamous cell carcinoma implemented at a Danish head and neck cancer center: a phase II trial on feasibility and tumour margin status. <em>Eur Arch Otorhinolaryngol. </em>2017;274(5):2229-2237.</li>
                    <li>Weiss BG, Ihler F, Wolff HA, et al. Transoral laser microsurgery for treatment for hypopharyngeal cancer in 211 patients. <em>Head Neck. </em>2017.</li>
                    <li>Marur S, D'Souza G, Westra WH, Forastiere AA. HPV-associated head and neck cancer: a virus-related cancer epidemic. <em>Lancet Oncol. </em>2010;11(8):781-789.</li>
                    </ol>
                    <p>&nbsp;</p>
                    <h2>E. &nbsp;Orientation of Specimen</h2>
                    <p>Complex specimens should be examined and oriented with the assistance of the operating surgeon(s). Direct communication between the surgeon and pathologist is a critical component in specimen orientation and proper sectioning. Whenever possible, the tissue examination request form should include a drawing or photograph of the resected specimen showing the extent of the tumor and its relation to the anatomic structures of the region. The lines and extent of the resection can be depicted on preprinted adhesive labels and attached to the surgical pathology request forms.</p>
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">F. Perineural Invasion</h4>
                    </div>
                    <p>Traditionally, the presence of perineural invasion (neurotropism) is an important predictor of poor prognosis in head and neck cancer of virtually all sites.<sup>1</sup> The presence of perineural invasion (neurotropism) in the primary cancer is associated with poor local disease control and regional control, as well as being associated with metastasis to regional lymph nodes.<sup>1</sup> Further, perineural invasion is associated with decrease in disease-specific survival and overall survival.<sup>1</sup> There is conflicting data relative to an association between the presence of perineural invasion and the development of distant metastasis, with some studies showing an increased association with distant metastasis, while other studies showing no correlation with distant metastasis.<sup>1</sup> The relationship between perineural invasion and prognosis is independent of nerve diameter.<sup>2</sup> Additionally, emerging evidence suggests that extratumoral perineural invasion may be more prognostically relevant.<sup>3</sup> Although perineural invasion of small unnamed nerves may not produce clinical symptoms, the reporting of perineural invasion includes nerves of all sizes including small peripheral nerves (ie, less than 1 mm in diameter). Aside from the impact on prognosis, the presence of perineural invasion also guides therapy. Concurrent adjuvant chemoradiation therapy has been shown to improve outcomes in patients with perineural invasion (as well as in patients with extranodal extension and bone invasion).<sup>4,5</sup> While oropharyngeal, hypopharyngeal, and nasopharyngeal site specific data are limited, given the significance relative to prognosis and treatment for head and neck cancers in general, perineural invasion is a required data element in the reporting at these sites as well.</p>
                    <p>&nbsp;</p>
                    <p>References:</p>
                    <ol>
                    <li>Smith BD, Haffty BG. Prognostic factoris in patients with head and neck cancer. In: Harrison LB, Sessions RB, Hong WK, eds. <em>Head and Neck Cancer: A Multidisciplinary Approach</em>. Philadelphia, PA: Lippincott Williams and Wilkins; 2009:51-75.</li>
                    <li>Fagan JJ, Collins B, Barnes L, D'Amico F, Myers EN, Johnson JT. Perineural invasion in squamous cell carcinoma of the head and neck. <em>Arch Otolaryngol Head Neck Surg. </em>1998;124(6):637-640.</li>
                    <li>Miller ME, Palla B, Chen Q, et al. A novel classification system for perineural invasion in noncutaneous head and neck squamous cell carcinoma: histologic subcategories and patient outcomes. <em>Am J Otolaryngol. </em>2012;33(2):212-215.</li>
                    <li>Cooper JS, Pajak TF, Forastiere AA, et al. Postoperative concurrent radiotherapy and chemotherapy for high-risk squamous-cell carcinoma of the head and neck. <em>N Engl J Med. </em>2004;350(19):1937-1944.</li>
                    <li>Bernier J, Domenge C, Ozsahin M, et al. Postoperative irradiation with or without concomitant chemotherapy for locally advanced head and neck cancer. <em>N Engl J Med. </em>2004;350(19):1945-1952.</li>
                    </ol>
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">G. Regional Lymph Nodes </h4>
                    </div>
                    h2>Measurement of Tumor Metastasis</h2>
                    <p>The cross-sectional diameter of the largest lymph node metastasis (not the lymph node itself) is measured in the gross specimen at the time of macroscopic examination or, if necessary, on the histologic slide at the time of microscopic examination.<sup> 1,2</sup></p>
                    <p>&nbsp;</p>
                    <p><strong>Special Procedures for Lymph Nodes</strong></p>
                    <p>The risk of regional (cervical neck) nodal spread from cancers of the pharynx is high. The majority of metastatic carcinomas to the cervical lymph nodes take origin from a head and neck primary carcinoma. The most common histologic type of carcinoma to metastasize to cervical neck lymph nodes is squamous cell carcinoma. Cervical nodal metastases may occur in the setting of an unknown primary carcinoma referred to as metastatic cervical carcinoma with an unknown primary (CUP).</p>
                    <p><sup>&nbsp;</sup></p>
                    <p>As per AJCC 8<sup>th</sup> edition guidelines,<sup>3</sup> 3 separate approaches are employed to stage patients who present with an occult primary tumor. The primary T category is described as T0 and the N category is designated according to the respective anatomic site based on Epstein-Barr virus (EBV) and HPV status:</p>
                    <ul>
                    <li>Patients with EBV-related cervical adenopathy are staged according to N staging in nasopharynx.</li>
                    <li>Patients with HPV-mediated (positive) cervical adenopathy are staged according to N staging in HPV-mediated/ p16 positive oropharyngeal cancer.</li>
                    <li>All other patients with EBV-unrelated and HPV-unrelated cervical adenopathy are staged according to the generic N stage category used for the other head and neck sites, and for unknown primary.</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>This takes into account the site-specific differences in prognostic impact for metastatic nodal disease. Both HPV- and EBV-driven nodal metastases are typically nonkeratinizing, with the former often being cystic. When encountering this morphology, HPV and EBV testing as suggested in the CAP Head and Neck Biomarker template is critical.</p>
                    <p><sup>&nbsp;</sup></p>
                    <p>Aside from these, no additional special techniques are required other than routine histology for the assessment of nodal metastases. Immunohistochemistry and polymerase chain reaction (PCR) to detect isolated tumor cells are considered investigational techniques at this time.</p>
                    <h2>&nbsp;</h2>
                    <h2>Regional Lymph Nodes (pN0): Isolated Tumor Cells</h2>
                    <p>Isolated tumor cells (ITCs) are single cells or small clusters of cells not more than 0.2 mm in greatest dimension. While the generic recommendation is that for lymph nodes with ITCs found by either histologic examination, immunohistochemistry, or nonmorphologic techniques (eg, flow cytometry, DNA analysis, PCR amplification of a specific tumor marker), they should be classified as N0 or M0, respectively.<sup>4,5</sup> Evidence for the validity of this practice in head and neck squamous cell carcinoma and other histologic subtypes is lacking. In fact, rare studies relevant to head and neck sites indicate that isolated tumor cells may actually be a poor prognosticator in terms of local control.<sup>6</sup></p>
                    <h2>&nbsp;</h2>
                    <h2>Lymph Node Number</h2>
                    <p>For assessment of pN, a selective neck dissection will ordinarily include 10 or more lymph nodes, and a comprehensive neck dissection (radical or modified radical neck dissection) will ordinarily include 15 or more lymph nodes. Examination of fewer tumor-free nodes still mandates a pN0 designation.</p>
                    <p>&nbsp;</p>
                    <p><strong>Classification of Neck Dissection</strong></p>
                    <ol>
                    <li>Radical neck dissection</li>
                    <li>Modified radical neck dissection, internal jugular vein and/or sternocleidomastoid muscle spared</li>
                    <li>Selective neck dissection (SND), as specified by the surgeon (Figure 3), defined by dissection of less than the 5 traditional levels of a radical and modified radical neck dissection. The following dissections are now under this category<sup>7-9</sup>:</li>
                    <li>Supraomohyoid neck dissection</li>
                    <li>Posterolateral neck dissection</li>
                    <li>Lateral neck dissection</li>
                    <li>Central compartment neck dissection</li>
                    <li>Superselective neck dissection (SSND), a relatively new term defined by dissection of the fibrofatty elements of 2 or less levels.<sup>10</sup></li>
                    <li>Extended radical neck dissection, as specified by the surgeon</li>
                    </ol>
                    <p>&nbsp;</p>
                    <p>For purposes of pathologic evaluation, lymph nodes are organized by levels as shown in Figure 4.</p>
                    <p>&nbsp;</p>
                    <p><img src="reporting_images/lyx4.png" class="img-responsive" /></p>
                    <p><strong>Figure 4.</strong> The six sublevels of the neck for describing the location of lymph nodes within levels I, II, and V. Level IA, submental group; level IB, submandibular group; level IIA, upper jugular nodes along the carotid sheath, including the subdigastric group; level IIB, upper jugular nodes in the submuscular recess; level VA, spinal accessory nodes; and level VB, the supraclavicular and transverse cervical nodes. From Flint PW et al, eds. <em>Cummings Otolaryngology: Head and Neck Surgery.</em> 5th ed. Philadelphia, PA; Saunders: 2010. Reproduced with permission &copy;&nbsp;Elsevier.</p>
                    <p>&nbsp;</p>
                    <p>In order for pathologists to properly identify these nodes, they must be familiar with the terminology of the regional lymph node groups and with the relationships of those groups to the regional anatomy. Which lymph node groups surgeons submit for histopathologic evaluation depends on the type of neck dissection they perform. Therefore, surgeons must supply information on the types of neck dissections that they perform and on the details of the local anatomy in the specimens they submit for examination or, in other manners, orient those specimens for pathologists.</p>
                    <p>&nbsp;</p>
                    <p>If it is not possible to assess the levels of lymph nodes (for instance, when the anatomic landmarks in the excised specimens are not specified), then the lymph node levels may be estimated as follows: level II, upper third of internal jugular (IJ) vein or neck specimen; level III, middle third of IJ vein or neck specimen; level IV, lower third of IJ vein or neck specimen, all anterior to the sternocleidomastoid muscle.</p>
                    <p>&nbsp;</p>
                    <h2>Level I. Submental Group (Sublevel IA)</h2>
                    <p>Lymph nodes within the triangular boundary of the anterior belly of the digastric muscles and the hyoid bone.</p>
                    <p>&nbsp;</p>
                    <h3><strong>Level I. Submandibular Group (Sublevel IB)</strong></h3>
                    <p>Lymph nodes within the boundaries of the anterior and posterior bellies of the digastric muscle and the body of the mandible. The submandibular gland is included in the specimen when the lymph nodes within this triangle are removed.</p>
                    <p>&nbsp;</p>
                    <h2>Level II. Upper Jugular Group (Sublevels IIA and IIB)</h2>
                    <p>Lymph nodes located around the upper third of the internal jugular vein and adjacent spinal accessory nerve extending from the level of the carotid bifurcation (surgical landmark) or hyoid bone (clinical landmark) to the skull base. The posterior boundary is the posterior border of the sternocleidomastoid muscle, and the anterior boundary is the lateral border of the stylohyoid muscle.</p>
                    <p>&nbsp;</p>
                    <h2>Level III. Middle Jugular Group</h2>
                    <p>Lymph nodes located around the middle third of the internal jugular vein extending from the carotid bifurcation superiorly to the omohyoid muscle (surgical landmark), or cricothyroid notch (clinical landmark) inferiorly. The posterior boundary is the posterior border of the sternocleidomastoid muscle, and the anterior boundary is the lateral border of the sternohyoid muscle.</p>
                    <p>&nbsp;</p>
                    <h2>Level IV. Lower Jugular Group</h2>
                    <p>Lymph nodes located around the lower third of the internal jugular vein extending from the omohyoid muscle superiorly to the clavicle inferiorly. The posterior boundary is the posterior border of the sternocleidomastoid muscle, and the anterior boundary is the lateral border of the sternohyoid muscle.</p>
                    <p>&nbsp;</p>
                    <h2>Level V. Posterior Triangle Group (Sublevels VA and VB)</h2>
                    <p>This group comprises predominantly the lymph nodes located along the lower half of the spinal accessory nerve and the transverse cervical artery. The supraclavicular nodes are also included in this group. The posterior boundary of the posterior triangle is the anterior border of the trapezius muscle, the anterior boundary of the posterior triangle is the posterior border of the sternocleidomastoid muscle, and the inferior boundary of the posterior triangle is the clavicle.</p>
                    <p>&nbsp;</p>
                    <p><strong>Level VI. Anterior (Central) Compartment</strong></p>
                    <p>Lymph nodes in this compartment include the pre- and paratracheal nodes, precricoid (Delphian) node, and the perithyroidal nodes, including the lymph nodes along the recurrent laryngeal nerve. The superior boundary is the hyoid bone, the inferior boundary is the suprasternal notch, the lateral boundaries are the common carotid arteries, and the posterior boundary by the prevertebral fascia.</p>
                    <p>&nbsp;</p>
                    <p><strong>Level VII. Superior Mediastinal Lymph Nodes</strong></p>
                    <p>Metastases at level VII are considered regional lymph node metastases; all other mediastinal lymph node metastases are considered distant metastases.</p>
                    <p>&nbsp;</p>
                    <p>Lymph node groups removed from areas not included in the above levels, eg, scalene, suboccipital, and retropharyngeal, should be identified and reported from all levels separately. When staging lymph node involvement by metastases from nasopharyngeal carcinoma, the supraclavicular fossa refers to a triangular region, the base of which is the superior margin of the clavicle between its sternal and lateral ends, and the apex of which is the point where the neck meets the shoulder. This includes caudal portions of Levels IV and V (see above). All cancers metastatic to the posterior nodes in the supraclavicular fossa are designated as N3b. Midline nodes are considered ipsilateral nodes.</p>
                    <p>&nbsp;</p>
                    <h2>Extranodal Extension</h2>
                    <p>The status of cervical lymph nodes is the single most important prognostic factor in aerodigestive cancer. All macroscopically negative or equivocal lymph nodes should be submitted in toto. Grossly positive nodes may be partially submitted for microscopic documentation of metastasis. For HPV-unrelated/p16-negative oropharyngeal cancers and hypopharyngeal cancers, reporting of lymph nodes containing metastasis should include whether there is presence or absence of extranodal extension (ENE),<sup>11</sup> which is now part of N staging for these tumor types. This finding consists of extension of metastatic tumor, present within the confines of the lymph node, through the lymph node capsule into the surrounding connective tissue, with or without associated stromal reaction. A distance of extension from the native lymph node capsule is now suggested (but not yet required) with the proposed stratification of ENE into ENE<sub>ma</sub> (greater than 2 mm) and ENE<sub>mi </sub>&nbsp;(less than or equal to 2 mm).<sup>12-15</sup> However, pitfalls in the measurement (ie, in larger, matted lymph nodes, in nodes post fine-needle aspiration, and in nodes with near total replacement of lymph node architecture) and the disposition of soft tissue deposits is still not resolved.&nbsp; In general, absence of ENE in a large (greater than 3 cm) lymph node, especially with traversing fibrous bands, should be viewed with skepticism. Soft tissue deposits for lymph node metastases based on limited studies appear to be the equivalent of a positive lymph node with ENE and should be recorded as such.<sup>16 </sup>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>However, ENE does not appear to be as prognostically relevant for HPV-mediated/p16-positive and nasopharyngeal cancers. While it may be recorded, it is not required under AJCC guidelines.<sup>17,18</sup></p>
                    <p>&nbsp;</p>
                    <p>References:</p>
                    <ol>
                    <li>Cooper JS, Pajak TF, Forastiere AA, et al. Postoperative concurrent radiotherapy and chemotherapy for high-risk squamous-cell carcinoma of the head and neck. <em>N Engl J Med. </em>2004;350(19):1937-1944.</li>
                    <li>Bernier J, Domenge C, Ozsahin M, et al. Postoperative irradiation with or without concomitant chemotherapy for locally advanced head and neck cancer. <em>N Engl J Med. </em>2004;350(19):1945-1952.</li>
                    <li>Patel SG, Lydiatt WM, Ridge JA, et al. Cervical lymph nodes and unknown primary tumors of the head and neck. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Sobin LH, Gospodarowicz MK, Wittekind CH, eds. <em>TNM Classification of Malignant Tumours.</em> New York: Wiley-Liss; 2009.</li>
                    <li>Singletary SE, Greene FL, Sobin LH. Classification of isolated tumor cells: clarification of the 6th edition of the American Joint Committee on Cancer Staging Manual. <em>Cancer. </em>2003;98(12):2740-2741.</li>
                    <li>Broglie MA, Haerle SK, Huber GF, Haile SR, Stoeckli SJ. Occult metastases detected by sentinel node biopsy in patients with early oral and oropharyngeal squamous cell carcinomas: Impact on survival. <em>Head Neck. </em>2013;35(5):660-666.</li>
                    <li>Ferlito A, Robbins KT, Shah JP, et al. Proposal for a rational classification of neck dissections. <em>Head Neck. </em>2011;33(3):445-450.</li>
                    <li>Robbins KT, Shaha AR, Medina JE, et al. Consensus statement on the classification and terminology of neck dissection. <em>Arch Otolaryngol Head Neck Surg. </em>2008;134(5):536-538.</li>
                    <li>Seethala RR. Current state of neck dissection in the United States. <em>Head Neck Pathol. </em>2009;3(3):238-245.</li>
                    <li>Suarez C, Rodrigo JP, Robbins KT, et al. Superselective neck dissection: rationale, indications, and results. <em>Eur Arch Otorhinolaryngol. </em>2013.</li>
                    <li>Ebrahimi A, Gil Z, Amit M. International Consortium for Outcome Research (ICOR) in Head and Neck Cancer. Primary tumor staging for oral cancer and a proposed modification incorporating depth of invasion: an international multicenter retrospective study. <em>JAMA Otolaryngol Head Neck Surg. </em>2014;140(12):1138-1148.</li>
                    <li>Ridge JA, Lydiatt WM, Patel SG, et al. Lip and oral cavity. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Ebrahimi A, Clark JR, Amit M, et al. Minimum nodal yield in oral squamous cell carcinoma: defining the standard of care in a multicenter international pooled validation study. <em>Ann Surg Oncol. </em>2014;21(9):3049-3055.</li>
                    <li>Prabhu RS, Hanasoge S, Magliocca KR, et al. Extent of pathologic extracapsular extension and outcomes in patients with nonoropharyngeal head and neck cancer treated with initial surgical resection. <em>Cancer. </em>2014;120(10):1499-1506.</li>
                    <li>Dunne AA, Muller HH, Eisele DW, Kessel K, Moll R, Werner JA. Meta-analysis of the prognostic significance of perinodal spread in head and neck squamous cell carcinomas (HNSCC) patients. <em>Eur J Cancer. </em>2006;42(12):1863-1868.</li>
                    <li>Jose J, Moor JW, Coatesworth AP, Johnston C, MacLennan K. Soft tissue deposits in neck dissections of patients with head and neck squamous cell carcinoma: prospective analysis of prevalence, survival, and its implications. <em>Arch Otolaryngol Head Neck Surg. </em>2004;130(2):157-160.</li>
                    <li>O'Sullivan B, Lydiatt WM, Haughey BH, Brandwein-Gensler MS, Glastonbury CM, Shah JP. HPV mediated (p16+) oropharyngeal cancer. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Lee AWM, Lydiatt WM, Colevas AD, et al. Nasopharynx. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    </ol>
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">H. TNM and Stage Groupings</h4>
                    </div>
                    <p>The protocol recommends the TNM staging system of the American Joint Committee on Cancer and the International Union Against Cancer for the oropharynx, nasopharynx, and hypopharynx.<sup>1-3</sup> AJCC 8<sup>th</sup> edition staging has introduced several changes. Notably HPV-mediated (p16-positive) squamous cell carcinomas of the oropharynx have their own staging system, with respect to both T and N stage. ENE is not relevant to this category and is not incorporated into the N stage. However, ENE is still required for N staging of HPV-unrelated (p16-negative) squamous cell carcinoma and hypopharyngeal carcinomas. For nasopharyngeal carcinomas, T stage has been revised. The extent of structural involvement for T2 and T4 in particular have been redefined. T2 denotes tumors with extension to parapharyngeal space and/or adjacent soft tissue involvement (medial pterygoid, lateral pterygoid, prevertebral muscles). T4 indicates tumor with intracranial extension, involvement of cranial nerves, hypopharynx, orbit, parotid gland, and/or extensive soft tissue infiltration beyond the lateral surface of the lateral pterygoid muscle. Additionally, N stage for nasopharyngeal squamous cell carcinoma has been simplified, removing N3a and N3b substratification. The anatomic border for defining N3 has been revised from supraclavicular fossa (Level VB) to caudal border of the cricoid cartilage (Level IV, and VB). T and N anatomic definitions are summarized in Figure 3.</p>
                    <p>&nbsp;</p>
                    <p><img src="reporting_images/phx3.png" class="img-responsive" /></p>
                    <p><strong>Figure 3.</strong> Differences in defining criteria between the 7<sup>th</sup> edition and the 8<sup>th</sup> edition for staging of NPC: (A) changing the extent of soft tissue involvement as T2 and T4 criteria. Abbreviations: CS = carotid space, LP = lateral pterygoid muscle, M = masseter muscle, MP = medial pterygoid muscle, PG = parotid gland, PPS = parapharyngeal space, PV = prevertebral muscle, T = temporalis muscle; (B) replacing supraclavicular fossa (blue) by lower neck, ie, below caudal border of cricoid cartilage (red) as N3 criteria.<sup>4</sup> From <em>AJCC Cancer Staging Manual</em>. 8th ed. New York: Springer; 2017.&nbsp; &copy; American Joint Committee on Cancer. Reproduced with permission.</p>
                    <p>&nbsp;</p>
                    <p>The 8<sup>th</sup> edition of the AJCC staging of head and neck cancers includes mucosal melanomas; this does not show significant changes from the 7<sup>th</sup> edition. Approximately two-thirds of mucosal melanomas arise in the sinonasal tract, one-quarter are found in the oral cavity, and the remainder occur only sporadically in other mucosal sites of the head and neck. Even small cancers behave aggressively with high rates of recurrence and death. To reflect this aggressive behavior, primary cancers limited to the mucosa are considered T3 lesions. Advanced mucosal melanomas are classified as T4a and T4b. The anatomic extent criteria to define <em>moderately advanced</em> (T4a) and <em>very advanced</em> (T4b) disease are given below. The AJCC staging for mucosal melanomas does not provide for the histologic definition of a T3 lesion; as the majority of mucosal melanomas are invasive at presentation, mucosal-based melanomas (T3 lesions) include those lesions that involve either the epithelium and/or lamina propria of the involved site. Rare examples of in situ mucosal melanomas occur, but in situ mucosal melanomas are excluded from staging, as they are extremely rare.<sup>5</sup></p>
                    <p>&nbsp;</p>
                    <p>Carcinomas of minor salivary glands of the upper aerodigestive tract site, including the oral cavity, are staged according to schemes corresponding to the anatomic site of occurrence. There is no currently accepted staging for central (primary intraosseous) salivary gland tumors.</p>
                    <p>&nbsp;</p>
                    <p>By AJCC/UICC convention, the designation &ldquo;T&rdquo; refers to a primary tumor that has not been previously treated. The symbol &ldquo;p&rdquo; refers to the pathologic classification of the TNM, as opposed to the clinical classification, and is based on clinical stage information supplemented/modified by operative findings and gross and microscopic evaluation of the resected specimens.<sup>1</sup> pT entails a resection of the primary tumor or biopsy adequate to evaluate the highest pT category, pN entails removal of nodes adequate to validate lymph node metastasis, and pM implies microscopic examination of distant lesions. Clinical classification (cTNM) is usually carried out by the referring physician before treatment during initial evaluation of the patient or when pathologic classification is not possible.</p>
                    <p>&nbsp;</p>
                    <p>Pathologic staging is usually performed after surgical resection of the primary tumor. Pathologic staging depends on pathologic documentation of the anatomic extent of disease, whether or not the primary tumor has been completely removed. If a biopsied tumor is not resected for any reason (eg, when technically unfeasible) and if the highest T and N categories or the M1 category of the tumor can be confirmed microscopically, the criteria for pathologic classification and staging have been satisfied without total removal of the primary cancer.</p>
                    <p>&nbsp;</p>
                    <h2>TNM Descriptors</h2>
                    <p>For identification of special cases of TNM or pTNM classifications, the &ldquo;m&rdquo; suffix and &ldquo;y&rdquo; and &ldquo;r&rdquo; prefixes are used. Although they do not affect the stage grouping, they indicate cases needing separate analysis.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;m&rdquo; suffix</u> indicates the presence of multiple primary tumors in a single site and is recorded in parentheses: pT(m)NM.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;y&rdquo; prefix</u> indicates those cases in which classification is performed during or following initial multimodality therapy (ie, neoadjuvant chemotherapy, radiation therapy, or both chemotherapy and radiation therapy). The cTNM or pTNM category is identified by a &ldquo;y&rdquo; prefix. The ycTNM or ypTNM categorizes the extent of tumor actually present at the time of that examination. The &ldquo;y&rdquo; categorization is not an estimate of tumor prior to multimodality therapy (ie, before initiation of neoadjuvant therapy).</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;r&rdquo; prefix</u> indicates a recurrent tumor when staged after a documented disease-free interval, and is identified by the &ldquo;r&rdquo; prefix: rTNM.</p>
                    <p>&nbsp;</p>
                    <h2>Additional Descriptors</h2>
                    <h2>&nbsp;</h2>
                    <h3>Residual Tumor (R)</h3>
                    <p>Tumor remaining in a patient after therapy with curative intent (eg, surgical resection for cure) is categorized by a system known as R classification, shown below.</p>
                    <p>&nbsp;</p>
                    <p>RX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Presence of residual tumor cannot be assessed</p>
                    <p>R0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No residual tumor</p>
                    <p>R1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Microscopic residual tumor</p>
                    <p>R2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Macroscopic residual tumor</p>
                    <p>&nbsp;</p>
                    <p>For the surgeon, the R classification may be useful to indicate the known or assumed status of the completeness of a surgical excision. For the pathologist, the R classification is relevant to the status of the margins of a surgical resection specimen. That is, tumor involving the resection margin on pathologic examination may be assumed to correspond to residual tumor in the patient and may be classified as macroscopic or microscopic according to the findings at the specimen margin(s).</p>
                    <p>&nbsp;</p>
                    <p>References:</p>
                    <ol>
                    <li>Lydiatt WM, Ridge JA, Patel SG, et al. Oropharynx (p16 -) and hypopharynx. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>O'Sullivan B, Lydiatt WM, Haughey BH, Brandwein-Gensler MS, Glastonbury CM, Shah JP. HPV mediated (p16+) oropharyngeal cancer. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Lee AWM, Lydiatt WM, Colevas AD, et al. Nasopharynx. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Pan JJ, Ng WT, Zong JF, et al. Proposal for the 8th edition of the AJCC/UICC staging system for nasopharyngeal cancer in the era of intensity-modulated radiotherapy. <em>Cancer. </em>2015;122(4):546-558.</li>
                    <li>Lydiatt WM, Brandwein-Gensler MS, Kraus DH, Mukherji SK, Ridge JA, Shah JP. Mucosal melanoma of the head and neck. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol>
                    <li><strong>I. Dysplasia of the Upper Aerodigestive Tract (UADT)</strong></li>
                    </ol>
                    <p>The concept of epithelial precursor lesions, including dysplasia and carcinoma in situ of the oropharyngeal (base of tongue and tonsils) and nasopharyngeal mucosa, are not well defined. In biopsies of nasopharyngeal carcinoma, only a minority of cases (less than 10%) will have an in situ component.<sup>1</sup> Further, carcinoma in situ of the oropharynx and nasopharynx as confirmed by biopsy to rule out an invasive carcinoma component is very rare. Histologically, carcinoma in situ of the oropharynx and nasopharynx may be confined to the surface or crypt epithelium without invasive carcinoma and, when present, are most often of the nonkeratinizing type. Hypopharyngeal precursor lesions are rarely identified as hypopharyngeal cancers by virtue of their anatomic site and often remain clinically quiescent commonly presenting as invasive carcinomas.&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>References:</p>
                    <ol>
                    <li>Chan JKC, Pilch BZ, Bray F, et al. Nasopharyngeal carcinoma. In: Barnes L, Eveson JW, Reichart P, Sidransky D, eds. <em>World Health Organization Classification of Tumours: Pathology and Genetics of Head and Neck Tumours</em>. Lyon, France: IARC; 2005:85-97.</li>
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
                <button type="button"  class="btn btn-primary btn-block" onclick="Export2Doc('exportContent', 'PHARYNX (OROPHARYNX, HYPOPHARYNX, NASOPHARYNX)');">Export as .doc</button>
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

<?php /* C:\Users\DELL INSPIRON 15\Desktop\Laravel Projects\CBReporting\resources\views/preview_phx.blade.php */ ?>
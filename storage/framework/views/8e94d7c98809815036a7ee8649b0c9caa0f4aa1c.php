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
              <h2 class="title">MAJOR SALIVARY GLANDS</h2>
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
			    <h6 class="heading-title">MAJOR SALIVARY GLANDS</h6>
			</div>
		</div>
        <div class="col-md-12">
            <?php if($procedure_excision != '' || $procedure_paro_super != '' || $procedure_paro_deep != '' || $procedure_paro_total != '' || $procedure_paro_ns != '' || $procedure_res_subman != '' || $procedure_res_sublin != '' || $procedure_neck_desection != '' || $procedure_other != ''): ?>
                <p><strong>Procedure:</strong><span><?php if($procedure_excision != ''): ?> <?php echo e($procedure_excision); ?>, <?php endif; ?> <?php if($procedure_paro_super != ''): ?> <?php echo e($procedure_paro_super); ?>, <?php endif; ?> <?php if($procedure_paro_deep != ''): ?> <?php echo e($procedure_paro_deep); ?>, <?php endif; ?>  <?php if($procedure_paro_total != ''): ?> <?php echo e($procedure_paro_total); ?>, <?php endif; ?> <?php if($procedure_paro_ns != ''): ?> <?php echo e($procedure_paro_ns); ?>, <?php endif; ?>  <?php if($procedure_res_subman != ''): ?> <?php echo e($procedure_res_subman); ?>, <?php endif; ?> <?php if($procedure_res_sublin != ''): ?> <?php echo e($procedure_res_sublin); ?>, <?php endif; ?> <?php if($procedure_not_specified != ''): ?> <?php echo e($procedure_not_specified); ?> ,<?php endif; ?> <?php if($procedure_neck_desection != ''): ?>  Neck (lymph node) dissection (specify): <?php echo e($procedure_neck_desection); ?>, <?php endif; ?> <?php if($procedure_other != ''): ?> Other (specify): <?php echo e($procedure_other); ?> <?php endif; ?></span></p><?php endif; ?>
            <?php if($tumorsite != ''): ?>
                <p><strong>Tumor Site:</strong><span><?php if($tumorsite == 'Parotid gland'): ?> <?php echo e($tumorsite); ?> (<?php echo e($patotid_gland_option); ?>) <?php elseif($tumorsite_other != ''): ?>  Other (specify): <?php echo e($tumorsite_other); ?> <?php else: ?> <?php echo e($tumorsite); ?> <?php endif; ?></span></p>
            <?php endif; ?>
            <?php if($tumorliterality != ''): ?>
                <p><strong>Tumor Laterality:</strong> <?php echo e($tumorliterality); ?> <span></span></p>
            <?php endif; ?>
            <?php if($tumorfocality != ''): ?>
                <p><strong>Tumor Focality:</strong> <?php echo e($tumorfocality); ?> <span></span></p>
            <?php endif; ?>
            <?php if($tumorsize_gt != '' || $tumorsize_cd != ''): ?>
                <p><strong>Tumor Size:</strong><?php if($tumorsize_cd != ''): ?> Cannot be determined (explain): <?php echo e($tumorsize_cd); ?> <?php else: ?>  Greatest dimension (centimeters): <?php echo e($tumorsize_gt); ?>cm <?php if($tumorsize_length != '' && $tumorsize_width != ''): ?> => Additional dimensions (centimeters): <?php echo e($tumorsize_length); ?>cm X <?php echo e($tumorsize_width); ?>cm  <?php endif; ?>  <?php endif; ?><span></span></p>
            <?php endif; ?>
            <?php if($histologic != ''): ?>
                <p><strong>Histologic Type:</strong><?php if($histologic == 'Adenoid cystic carcinoma, tubular pattern' || $histologic == 'Adenoid cystic carcinoma, cribriform pattern' || $histologic == 'Adenoid cystic carcinoma, solid pattern'): ?> <?php echo e($histologic); ?> (Specify percentage of solid component: <?php echo e($histologic_cent); ?>% ) <?php elseif($histologic == 'Other histologic type not listed (specify):'): ?> <?php echo e($histologic); ?>: <?php echo e($histologic_explain); ?> <?php else: ?>  <?php echo e($histologic); ?>  <?php endif; ?><span></span></p>
            <?php endif; ?>
            <?php if($transformation != ''): ?>
                <p><strong>High-Grade Transformation:</strong> <?php echo e($transformation); ?> <span></span></p>
            <?php endif; ?>
            <?php if($tumor_extension != ''): ?>
                <p><strong>Tumor Extention:</strong> <?php echo e($tumor_extension); ?> <span></span></p>
            <?php endif; ?>
            <?php if($icm != ''): ?>
                <p><strong>Margins:</strong><span><?php if($icm == 'Involved by invasive carcinoma'): ?> <?php echo e($icm); ?>  <?php if($icm_involve_distance_specify != ''): ?> Specify margin, if possible:  <?php echo e($icm_involve_distance_specify); ?>mm <?php endif; ?> <?php else: ?> <?php echo e($icm); ?> <?php if($icm_closest_margin != ''): ?> Distance of tumor from closest margin (millimeters): <?php echo e($icm_closest_margin); ?>mm <?php endif; ?> <?php if($icm_distance_specify != ''): ?> Specify margin, if possible:  <?php echo e($icm_distance_specify); ?>mm  <?php endif; ?> <?php endif; ?> </span></p>
            <?php endif; ?>
            <?php if($lymphovascular_invasion != ''): ?>
                <p><strong>Lymphovascular Invasion:</strong> <?php echo e($lymphovascular_invasion); ?> <span></span></p>
            <?php endif; ?>
            <?php if($perineural_invasion != ''): ?>
                <p><strong>Perineural Invasion:</strong> <?php echo e($perineural_invasion); ?> <span></span></p>
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
            <?php if($ln_leterality != ''): ?>
                <p><strong>Laterality of Lymph Nodes Involved:</strong><span><?php echo e($ln_leterality); ?> </span></p>
            <?php endif; ?>
            <?php if($ln_deposit != ''): ?>
                <p><strong>Size of Largest Metastatic Deposit (centimeters):</strong><span><?php echo e($ln_deposit); ?>cm </span></p>
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
            <?php if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != '' || $primary_tumor != '' || $distance_metastasis != ''): ?><p><strong>Pathologic Stage Classification (pTNM, AJCC 8th Edition)</strong> <br/><i>Note: Reporting of pT, pN, and (when applicable) pM categories is based on information available to the pathologist at the time the report is issued. Only the applicable T, N, or M category is required for reporting; their definitions need not be included in the report. The categories (with modifiers when applicable) can be listed on 1 line or more than 1 line. Assignment of Pathologic Prognostic Stage Group is the responsibility of the managing physician and not the pathologist.</i></p><?php endif; ?>
            <?php if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != ''): ?><p><strong>TNM Descriptors: </strong><span>
            <?php if($tnm_descriptors_m != ''): ?> <?php echo e($tnm_descriptors_m); ?>, <?php endif; ?>
            <?php if($tnm_descriptors_r != ''): ?> <?php echo e($tnm_descriptors_r); ?>, <?php endif; ?>
            <?php if($tnm_descriptors_y != ''): ?> <?php echo e($tnm_descriptors_y); ?>, <?php endif; ?>
            <?php endif; ?>
            </span></p>
            <?php if($primary_tumor != ''): ?><p><strong>Primary Tumor: </strong><span> <?php echo e($primary_tumor); ?> </span></p><?php endif; ?>
            <?php if($distance_metastasis != ''): ?><p><strong>Distance Metastasis: </strong><span> <?php if($distance_metastasis == 'pM1:  Distant metastasis'): ?> <?php echo e($distance_metastasis); ?> <?php if($distance_metastasis_site != ''): ?> Specify site: <?php echo e($distance_metastasis_site); ?> <?php endif; ?> <?php else: ?> <?php echo e($distance_metastasis); ?> <?php endif; ?> </span></p><?php endif; ?>
            <?php if($rln != ''): ?><p><strong>Regional Lymph Nodes (pN) : </strong><span> <?php echo e($rln); ?> </span></p><?php endif; ?>
            <?php if($ancillary_studies != ''): ?>
                <p><strong>Additional Pathologic Findings:</strong><span><?php if($ancillary_studies == 'Other'): ?> <?php echo e($ancillary_studies); ?> (<?php echo e($ancillary_studies_others); ?>) <?php else: ?> <?php echo e($ancillary_studies); ?> <?php endif; ?> </span></p>
            <?php endif; ?>
            <?php if($comments != ''): ?> <p><strong> Comments</strong><br/> <?php echo e($comments); ?> <?php endif; ?>
            <?php if($all_notes != ''): ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">A.  Tumor Site</h4>
                    </div>
                    <div class="modal-body">
                    <h2>Scope of Guidelines</h2>
                    <p>The reporting of major salivary gland cancer is facilitated by the provision of a case summary illustrating the features required for comprehensive patient care. However, there are many cases in which the individual practicalities of applying such a case summary may not be straightforward. Common examples include finding the prescribed number of lymph nodes, trying to determine the levels of the radical neck dissection, and determining if isolated tumor cells in a lymph node represent metastatic disease. Case summaries have evolved to include clinical, radiographic, morphologic, immunohistochemical, and molecular results in an effort to guide clinical management. Adjuvant and neoadjuvant therapy can significantly alter histologic findings, making accurate classification an increasingly complex and demanding task. This protocol tries to remain simple while still incorporating important pathologic features as proposed by the American Joint Committee on Cancer (AJCC) cancer staging manual,<a href="#_ENREF_1"><sup>1</sup></a> the World Health Organization (WHO) classification of tumors, the TNM classification, the American College of Surgeons Commission on Cancer, and the International Union on Cancer (UICC). This protocol is to be used as a guide and resource, an adjunct to diagnosing and managing cancers of the oral cavity in a standardized manner. It should not be used as a substitute for dissection or grossing techniques and does not give histologic parameters to reach the diagnosis. Subjectivity is always a factor, and elements listed are not meant to be arbitrary but are meant to provide uniformity of reporting across all the disciplines that use the information. It is a foundation of practical information that will help to meet the requirements of daily practice to benefit both clinicians and patients alike.</p>
                    <p>The classification applies only to carcinomas of the major salivary glands: parotid, submandibular (submaxillary), and sublingual glands.<a href="#_ENREF_2"><sup>2</sup></a> Tumors arising in minor salivary glands (mucous-secreting glands in the lining membrane of the upper aerodigestive tract) are staged according to the classification schemes corresponding to the anatomic sites in which they reside, eg, oral cavity, pharynx, sinonasal tract.</p>
                    <p><img src="reporting_images/notea.png" class="img-responsive" /><i>Figure 1. Anatomy of the major salivary glands. From: Gray’s Anatomy. 39th ed. Edinburgh: Elsevier Churchill Livingstone; 2005. Reproduced with permission © Elsevier.</i></p>
                    </div>
                </div>
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">B.  Histologic Type</h4>
                    </div>
                    <div class="modal-body">
                    <p>The histologic classification recommended is the WHO classification of salivary gland tumors.<a href="#_ENREF_3"><sup>3</sup></a></p>
                    <p>&nbsp;</p>
                    <p>Mucoepidermoid carcinoma</p>
                    <p>Adenoid cystic carcinoma</p>
                    <p>Acinic cell carcinoma</p>
                    <p>Polymorphous adenocarcinoma</p>
                    <p>(Mammary analogue) secretory carcinoma</p>
                    <p>Salivary duct carcinoma</p>
                    <p>Carcinoma ex pleomorphic adenoma</p>
                    <p>Epithelial-myoepithelial carcinoma</p>
                    <p>(Hyalinizing) clear cell carcinoma</p>
                    <p>Adenocarcinoma, not otherwise specified<sup>#</sup></p>
                    <p>Basal cell adenocarcinoma</p>
                    <p>Carcinosarcoma</p>
                    <p>Intraductal carcinoma</p>
                    <p>Lymphoepithelial carcinoma</p>
                    <p>Myoepithelial carcinoma</p>
                    <p>Oncocytic carcinoma</p>
                    <p>Poorly differentiated carcinoma</p>
                    <p>Large cell neuroendocrine carcinoma</p>
                    <p>Small cell neuroendocrine carcinoma</p>
                    <p>Undifferentiated carcinoma</p>
                    <p>Sebaceous adenocarcinoma</p>
                    <p>Squamous cell carcinoma</p>
                    <p><em><sup># </sup></em><em>Includes cystadenocarcinoma, intestinal type adenocarcinoma, and mucinous adenocarcinoma </em></p>
                    <p><sup>&nbsp;</sup></p>
                    <p>In this current classification, sialoblastoma is designated as a tumor of uncertain malignant potential.&nbsp; Metastasizing pleomorphic adenoma has been collapsed under pleomorphic adenoma.<a href="#_ENREF_3"><sup>3</sup></a>&nbsp; Since the biologic behavior of these still overlaps with the other malignant tumors, these can be reported under &ldquo;other.&rdquo;</p>
                    <p>&nbsp;</p>
                    <p><strong>Histologic Grade</strong></p>
                    <p>The histologic (microscopic) grading of salivary gland carcinomas has been shown to be an independent predictor of behavior and plays a role in optimizing therapy. Further, there is often a positive correlation between histologic grade and clinical stage.<a href="#_ENREF_4"><sup>4-7</sup></a> However, most salivary gland carcinoma types have an intrinsic biologic behavior, and attempted application of a universal grading scheme is merely a crude surrogate.<a href="#_ENREF_6"><sup>6</sup></a> Thus, a generic grading scheme is no longer recommended for salivary gland carcinomas.<a href="#_ENREF_2"><sup>2</sup></a> Carcinoma types for which grading systems exist and are relevant are incorporated into histologic type. The 3 major categories that are amenable to grading include adenoid cystic carcinoma, mucoepidermoid carcinoma, and adenocarcinoma, not otherwise specified.<sup><a href="#_ENREF_5">5</a>,<a href="#_ENREF_6">6</a>,<a href="#_ENREF_8">8</a></sup></p>
                    <p>&nbsp;</p>
                    <p>In some carcinomas, histologic grading may be based on growth pattern, such as in adenoid cystic carcinoma, for which a histologic high-grade variant has been recognized based on the percentage of solid growth.<a href="#_ENREF_8"><sup>8</sup></a> Those adenoid cystic carcinomas showing 30% or greater of solid growth pattern are considered to be histologically high-grade carcinomas. The histologic grading of mucoepidermoid carcinoma includes a combination of growth pattern characteristics (eg, cystic, solid, neurotropism) and cytomorphologic findings (eg, anaplasia, mitoses, necrosis).<a href="#_ENREF_9"><sup>9-11</sup></a> Adenocarcinomas, not otherwise specified, do not have a formalized grading scheme and are graded intuitively based on cytomorphologic features.<a href="#_ENREF_6"><sup>6</sup></a> Polymorphous adenocarcinomas are to be graded as per current WHO recommendations, though these are also graded intuitively as there are no listed criteria.</p>
                    <p>&nbsp;</p>
                    <p>Carcinoma ex pleomorphic adenoma is subclassifed by histologic type and or grade and extent of invasion, the latter including minimally invasive, widely invasive, and intracapsular (noninvasive) cancers. Previously the cut-off for minimal invasion was designated as 1.5 mm; however, more recent studies have shown a favorable prognosis even with cut-offs of 4 mm to 6 mm.<a href="#_ENREF_12"><sup>12</sup></a> Thus, there is no agreement on an optimal cut-off. However, from a practical standpoint, the terms <em>intracapsular</em> and <em>minimally invasive</em> should only be applied to uninodular tumors (as opposed to carcinomas arising in multinodular recurrent pleomorphic adenomas) with a well-delineated interface for which the entire lesional border has been microscopically evaluated. Prognosis has been linked to degree of invasion with noninvasive and minimally invasive cancers apparently having a better prognosis than invasive cancers.</p>
					</div>
                  </div>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">C.  Surgical Margins</h4>
                    </div>
                    <div class="modal-body">
                    <p>Complete surgical excision to include cancer-free surgical margins is the primary mode of therapy for salivary gland cancers, as retrospective studies have shown an increased risk for recurrence and decreased survival with positive surgical margins.<a href="#_ENREF_14"><sup>14-16</sup></a> The need for additional surgery is determined on the basis of histopathologic review; positive surgical margins are an indication for additional resection to ensure total tumor removal.&nbsp;</p>
                    <p><strong>&nbsp;</strong></p>
                    <h5>Orientation of Specimen</h5>
                    <p>Complex specimens should be examined and oriented with the assistance of attending surgeons. Direct communication between the surgeon and pathologist is a critical component in specimen orientation and proper sectioning. Whenever possible, the tissue examination request form should include a drawing of the resected specimen showing the extent of the tumor and its relation to the anatomic structures of the region. The lines and extent of the resection can be depicted on preprinted adhesive labels and attached to the surgical pathology request forms.</p>
					</div>
                  </div>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">D. Perineural Invasion</h4>
                    </div>
                    <div class="modal-body">
                    <p>The presence of perineural invasion (neurotropism) is an important predictor of poor prognosis in head and neck cancer of virtually all sites.<a href="#_ENREF_17"><sup>17</sup></a> The majority of studies evaluating the influence of perineural invasion on therapy and prognosis are limited to head and neck squamous cell carcinoma. However, relative to salivary gland carcinomas, facial nerve dysfunction and perineural involvement are factors influencing the indication for neck dissection, postoperative radiation therapy, and survival rate. Perineural invasion (neurotropism) in the primary salivary gland carcinomas, especially the facial nerve, is associated with recurrent tumor<a href="#_ENREF_18"><sup>18</sup></a> and decreased survival. Further, facial nerve involvement by carcinoma has been found to be predictive of occult metastases.<a href="#_ENREF_19"><sup>19</sup></a> Among other prognostic indicators, perineural invasion in minor salivary gland tumors has been shown to be statistically significant to the outcome.<a href="#_ENREF_20"><sup>20</sup></a> Given the significance relative to prognosis and treatment, perineural invasion is a required data element in the reporting of salivary gland carcinomas.&nbsp;</p>
					</div>
                  </div>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">E.  Regional Lymph Nodes</h4>
                    </div>
                    <div class="modal-body">
                    <h2>Measurement of Tumor Metastasis</h2>
                        <p>The cross-sectional diameter of the largest lymph node metastasis (not the lymph node itself) is measured in the gross specimen at the time of macroscopic examination or, if necessary, on the histologic slide at the time of microscopic examination.<sup><a href="#_ENREF_17">17</a>,</sup><sup>21</sup> &nbsp;</p>
                        <p><sup>&nbsp;</sup>&nbsp;</p>
                        <p><strong>Special Procedures for Lymph Nodes</strong></p>
                        <p>At the current time, no additional special techniques should be used other than routine histology for the assessment of nodal metastases. Immunohistochemistry and polymerase chain reaction (PCR) to detect isolated tumor cells are considered investigational techniques at this time.</p>
                        <p><strong>&nbsp;</strong></p>
                        <p><strong>Lymph Node Number</strong></p>
                        <p>For assessment of pN, a selective neck dissection will ordinarily include 10 or more lymph nodes, and a comprehensive neck dissection (radical or modified radical neck dissection) will ordinarily include 15 or more lymph nodes. Examination of fewer tumor-free nodes still mandates a pN0 designation.</p>
                        <p><strong>&nbsp;</strong></p>
                        <p><strong>Regional Lymph Nodes (pN0): Isolated Tumor Cells</strong></p>
                        <p>Isolated tumor cells (ITCs) are single cells or small clusters of cells not more than 0.2&nbsp;mm in greatest dimension. While the generic recommendation is that for lymph nodes with ITCs found by either histologic examination, immunohistochemistry, or nonmorphologic techniques (eg, flow cytometry, DNA analysis, PCR amplification of a specific tumor marker), they should be classified as N0 or M0, respectively.<sup><a href="#_ENREF_32">22</a>,<a href="#_ENREF_33">23</a></sup> Evidence for the validity of this practice in head and neck squamous cell carcinoma and other histologic subtypes is lacking. In fact, rare studies relevant to head and neck sites indicate that isolated tumor cells may actually be a poor prognosticator in terms of local control.<a href="#_ENREF_34"><sup>24</sup></a></p>
                        <p>&nbsp;</p>
                        <p>For purposes of pathologic evaluation, lymph nodes are organized by levels, as shown in Figure 2.</p>
                        <p><strong>&nbsp;</strong></p>
                        <p><strong>Classification of Neck Dissection</strong></p>
                        <ol>
                        <li>Radical neck dissection</li>
                        <li>Modified radical neck dissection, internal jugular vein and/or sternocleidomastoid muscle spared</li>
                        <li>Selective neck dissection (SND), as specified by the surgeon (Figure 3), defined by dissection of less than the 5 traditional levels of a radical and modified radical neck dissection. The following dissections are now under this category<sup>21,25,26</sup>:</li>
                        <li>Supraomohyoid neck dissection</li>
                        <li>Posterolateral neck dissection</li>
                        <li>Lateral neck dissection</li>
                        <li>Central compartment neck dissection</li>
                        <li>Superselective neck dissection (SSND), a relatively new term defined by dissection of the fibrofatty elements of 2 or less levels.<sup>27</sup></li>
                        <li>Extended radical neck dissection, as specified by the surgeon</li>
                        </ol>
                        <p><strong>&nbsp;</strong></p>
                        <p><img src="reporting_images/msg_notee.png" class="img-responsive" /><i><strong>Figure 2.</strong> The six sublevels of the neck for describing the location of lymph nodes within levels I, II, and V. Level IA, submental group; level IB, submandibular group; level IIA, upper jugular nodes along the carotid sheath, including the subdigastric group; level IIB, upper jugular nodes in the submuscular recess; level VA, spinal accessory nodes; and level VB, the supraclavicular and transverse cervical nodes. From: Flint PW, et al, eds. <em>Cummings Otolaryngology: Head and Neck Surgery.</em> 5th ed. Philadelphia, PA; Saunders: 2010. Reproduced with permission &copy;&nbsp;Elsevier.</p>
                        <p>&nbsp;</p>
                        <p>In order for pathologists to properly identify these nodes, they must be familiar with the terminology of the regional lymph node groups and with the relationships of those groups to the regional anatomy. Which lymph node groups surgeons submit for histopathologic evaluation depends on the type of neck dissection they perform. Therefore, surgeons must supply information on the types of neck dissections that they perform and the details of the local anatomy in the specimens they submit for examination or, in other manners, orient those specimens for pathologists.</p>
                        <p><sup>&nbsp;</sup></p>
                        <p>If it is not possible to assess the levels of lymph nodes (for instance, when the anatomic landmarks in the excised specimens are not specified), then the lymph node levels may be estimated as follows: level II, upper third of internal jugular (IJ) vein or neck specimen; level III, middle third of IJ vein or neck specimen; level IV, lower third of IJ vein or neck specimen, all anterior to the sternocleidomastoid muscle.</p>
                        <p>&nbsp;</p>
                        <p><strong>Level I. Submental Group (Sublevel IA) </strong></p>
                        <p>Lymph nodes within the triangular boundary of the anterior belly of the digastric muscles and the hyoid bone.</p>
                        <p>&nbsp;</p>
                        <p><strong>Level I. Submandibular Group (Sublevel IB) </strong></p>
                        <p>Lymph nodes within the boundaries of the anterior and posterior bellies of the digastric muscle and the body of the mandible. The submandibular gland is included in the specimen when the lymph nodes within this triangle are removed.</p>
                        <p>&nbsp;</p>
                        <p><strong>Level II. Upper Jugular Group (Sublevels IIA and IIB)</strong></p>
                        <p>Lymph nodes located around the upper third of the internal jugular vein and adjacent spinal accessory nerve extending from the level of the carotid bifurcation (surgical landmark) or hyoid bone (clinical landmark) to the skull base. The posterior boundary is the posterior border of the sternocleidomastoid muscle, and the anterior boundary is the lateral border of the sternohyoid muscle.</p>
                        <p>&nbsp;</p>
                        <p><strong>Level III. Middle Jugular Group </strong></p>
                        <p>Lymph nodes located around the middle third of the internal jugular vein extending from the carotid bifurcation superiorly to the omohyoid muscle (surgical landmark), or cricothyroid notch (clinical landmark) inferiorly. The posterior boundary is the posterior border of the sternocleidomastoid muscle, and the anterior boundary is the lateral border of the sternohyoid muscle.</p>
                        <p>&nbsp;</p>
                        <p><strong>Level IV. Lower Jugular Group </strong></p>
                        <p>Lymph nodes located around the lower third of the internal jugular vein extending from the omohyoid muscle superiorly to the clavicle inferiorly. The posterior boundary is the posterior border of the sternocleidomastoid muscle, and the anterior boundary is the lateral border of the sternohyoid muscle.</p>
                        <p>&nbsp;</p>
                        <p><strong>Level V. Posterior Triangle Group (Sublevels VA and VB)</strong></p>
                        <p>This group comprises predominantly the lymph nodes located along the lower half of the spinal accessory nerve and the transverse cervical artery. The supraclavicular nodes are also included in this group. The posterior boundary of the posterior triangle is the anterior border of the trapezius muscle, the anterior boundary of the posterior triangle is the posterior border of the sternocleidomastoid muscle, and the inferior boundary of the posterior triangle is the clavicle.</p>
                        <p>&nbsp;</p>
                        <p><strong>Level VI. Anterior (Central) Compartment</strong></p>
                        <p>Lymph nodes in this compartment include the pre- and paratracheal nodes, precricoid (Delphian) node, and the perithyroidal nodes, including the lymph nodes along the recurrent laryngeal nerve. The superior boundary is the hyoid bone, the inferior boundary is the suprasternal notch, the lateral boundaries are the common carotid arteries, and the posterior boundary by the prevertebral fascia.</p>
                        <p>&nbsp;</p>
                        <p><strong>Level VII. Superior Mediastinal Lymph Nodes</strong></p>
                        <p>Metastases at level VII are considered regional lymph node metastases; all other mediastinal lymph node metastases are considered distant metastases.</p>
                        <p>&nbsp;</p>
                        <p>Lymph node groups removed from areas not included in the above levels, eg, scalene, suboccipital, and retropharyngeal, should be identified and reported from all levels separately. Midline nodes are considered ipsilateral nodes.</p>
                        <p><strong>&nbsp;</strong></p>
                        <p><strong>Extranodal Extension</strong></p>
                        <p>The status of cervical lymph nodes is the single most important prognostic factor in aerodigestive cancer. For uniformity and based on existing evidence (albeit a much smaller scale),<a href="#_ENREF_21"><sup>2</sup></a><sup>8</sup> these principles are applied to salivary gland carcinomas as well. All macroscopically negative or equivocal lymph nodes should be submitted in toto. Grossly positive nodes may be partially submitted for microscopic documentation of metastasis. Reporting of lymph nodes containing metastasis should include whether there is presence or absence of extranodal extension (ENE),<a href="#_ENREF_22"><sup>2</sup></a><sup>9</sup> which is now part of N staging. This finding consists of extension of metastatic tumor, present within the confines of the lymph node, through the lymph node capsule into the surrounding connective tissue, with or without associated stromal reaction. A distance of extension from the native lymph node capsule is now suggested (but not yet required) with the proposed stratification of ENE into ENE<sub>ma</sub> (&gt;2 mm) and ENE<sub>mi </sub>&nbsp;(&le;2 mm).<a href="#_ENREF_23"><sup>30-33</sup></a> However, pitfalls in the measurement (ie, in larger, matted lymph nodes, in nodes post fine-needle aspiration, and in nodes with near total replacement of lymph node architecture) and the disposition of soft tissue deposits is still not resolved. In general, absence of ENE in a large (&gt;3 cm) lymph node, especially with traversing fibrous bands, should be viewed with skepticism. Soft tissue deposits for lymph node metastases based on limited studies appear to be the equivalent of a positive lymph node with ENE and should be recorded as such.</p>
					</div>
                  </div>
                  <div style="margin-bottom: 50px;" class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">F. Pathologic Stage Classification (pTNM, AJCC 8th Edition)</h4>
                    </div>
                    <div class="modal-body">
                    <p><strong>TNM and Stage Groupings</strong></p>
                    <p>The protocol recommends the TNM staging system of the American Joint Committee on Cancer and the International Union Against Cancer for salivary gland cancer.<a href="#_ENREF_2"><sup>2</sup></a></p>
                    <p>&nbsp;</p>
                    <p>There are no significant changes to T stage in the AJCC 8<sup>th</sup> edition for major salivary gland. Carcinomas for which the Tis designation may be applied include some intracapsular carcinomas ex pleomorphic adenoma, and intraductal carcinomas. &nbsp;However, as with squamous cell carcinoma of the head and neck sites (excluding nasopharynx and human papillomavirus (HPV)-related carcinomas), N stage now incorporates extranodal extension.<a href="#_ENREF_2"><sup>2</sup></a></p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Extraparenchymal Extension</strong></p>
                    <p>Extraparenchymal extension is clinical or macroscopic evidence of invasion of soft tissues or nerve (T1, T2, T3), except those listed under T4a and 4b. Microscopic evidence alone does not constitute extraparenchymal extension for classification purposes.<a href="#_ENREF_2"><sup>2</sup></a></p>
                    <p><strong>&nbsp;</strong></p>
                    <p>By AJCC/UICC convention, the designation &ldquo;T&rdquo; refers to a primary tumor that has not been previously treated. The symbol &ldquo;p&rdquo; refers to the pathologic classification of the TNM, as opposed to the clinical classification, and based on clinical stage information supplemented/modified by operative findings and gross and microscopic evaluation of the resected specimens<a href="#_ENREF_1"><sup>1</sup></a>. pT entails a resection of the primary tumor or biopsy adequate to evaluate the highest pT category, pN entails removal of nodes adequate to validate lymph node metastasis, and pM implies microscopic examination of distant lesions. Clinical classification (cTNM) is usually carried out by the referring physician before treatment during initial evaluation of the patient or when pathologic classification is not possible.</p>
                    <p>&nbsp;</p>
                    <p>Pathologic staging is usually performed after surgical resection of the primary tumor. Pathologic staging depends on pathologic documentation of the anatomic extent of disease, whether or not the primary tumor has been completely removed. If a biopsied tumor is not resected for any reason (eg, when technically unfeasible) and if the highest T and N categories or the M1 category of the tumor can be confirmed microscopically, the criteria for pathologic classification and staging have been satisfied without total removal of the primary cancer.</p>
                    <p><strong>TNM Descriptors</strong></p>
                    <p>For identification of special cases of TNM or pTNM classifications, the &ldquo;m&rdquo; suffix and &ldquo;y,&rdquo; &ldquo;r,&rdquo; and &ldquo;a&rdquo; prefixes are used. Although they do not affect the stage grouping, they indicate cases needing separate analysis.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;m&rdquo; suffix</u> indicates the presence of multiple primary tumors in a single site and is recorded in parentheses: pT(m)NM.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;y&rdquo; prefix</u> indicates those cases in which classification is performed during or following initial multimodality therapy (ie, neoadjuvant chemotherapy, radiation therapy, or both chemotherapy and radiation therapy). The cTNM or pTNM category is identified by a &ldquo;y&rdquo; prefix. The ycTNM or ypTNM categorizes the extent of tumor actually present at the time of that examination. The &ldquo;y&rdquo; categorization is not an estimate of tumor prior to multimodality therapy (ie, before initiation of neoadjuvant therapy).</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;r&rdquo; prefix</u> indicates a recurrent tumor when staged after a documented disease-free interval, and is identified by the &ldquo;r&rdquo; prefix: rTNM.</p>
                    <p>&nbsp;</p>
                    <p><u>The &ldquo;a&rdquo; prefix</u> designates the stage determined at autopsy: aTNM.</p>
                    <p>&nbsp;</p>
                    <p><strong>Additional Descriptors</strong></p>
                    <p><strong>&nbsp;</strong></p>
                    <p><u>Residual Tumor (R)</u></p>
                    <p>Tumor remaining in a patient after therapy with curative intent (eg, surgical resection for cure) is categorized by a system known as R classification, shown below.</p>
                    <p>&nbsp;</p>
                    <p>RX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Presence of residual tumor cannot be assessed</p>
                    <p>R0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No residual tumor</p>
                    <p>R1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Microscopic residual tumor</p>
                    <p>R2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Macroscopic residual tumor</p>
                    <p>&nbsp;</p>
                    <p>For the surgeon, the R classification may be useful to indicate the known or assumed status of the completeness of a surgical excision. For the pathologist, the R classification is relevant to the status of the margins of a surgical resection specimen. That is, tumor involving the resection margin on pathologic examination may be assumed to correspond to residual tumor in the patient and may be classified as macroscopic or microscopic according to the findings at the specimen margin(s).</p>
                    <p><strong>References</strong></p>
                    <ol>
                    <li>Gress DM, Edge SB, Greene FL, et al. Principles of cancer staging. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Lydiatt WM, Mukherji SK, O'Sullivan B, Patel SG, Shah JP. Major salivary glands. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>El-Naggar AK. Introduction. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours</em>. 4th ed. Geneva, Switzerland: WHO Press; 2017:160-162.</li>
                    <li>Spiro RH, Thaler HT, Hicks WF, Kher UA, Huvos AH, Strong EW. The importance of clinical staging of minor salivary gland carcinoma. <em>Am J Surg. </em>1991;162(4):330-336.</li>
                    <li>Spiro RH, Huvos AG, Strong EW. Adenocarcinoma of salivary origin. Clinicopathologic study of 204 patients. <em>Am J Surg. </em>1982;144(4):423-431.</li>
                    <li>Seethala RR. Histologic grading and prognostic biomarkers in salivary gland carcinomas. <em>Adv Anat Pathol. </em>2011;18(1):29-45.</li>
                    <li>Kane WJ, McCaffrey TV, Olsen KD, Lewis JE. Primary parotid malignancies. A clinical and pathologic review. <em>Arch Otolaryngol Head Neck Surg. </em>1991;117(3):307-315.</li>
                    <li>Szanto PA, Luna MA, Tortoledo ME, White RA. Histologic grading of adenoid cystic carcinoma of the salivary glands. <em>Cancer. </em>1984;54(6):1062-1069.</li>
                    <li>Seethala RR, Dacic S, Cieply K, Kelly LM, Nikiforova MN. A reappraisal of the MECT1/MAML2 translocation in salivary mucoepidermoid carcinomas. <em>Am J Surg Pathol. </em>2010;34(8):1106-1121.</li>
                    <li>Brandwein MS, Ivanov K, Wallace DI, et al. Mucoepidermoid carcinoma: a clinicopathologic study of 80 patients with special reference to histological grading. <em>Am J Surg Pathol. </em>2001;25(7):835-845.</li>
                    <li>Auclair PL, Goode RK, Ellis GL. Mucoepidermoid carcinoma of intraoral salivary glands. Evaluation and application of grading criteria in 143 cases. <em>Cancer. </em>1992;69(8):2021-2030.</li>
                    <li>Williams MD, Ihrler S, Seethala RR. Carcinoma ex pleomorphic adenoma. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours</em>. 4th ed. Geneva, Switzerland: WHO Press; 2017:176-177.</li>
                    <li>Brandwein M, Huvos AG, Dardick I, Thomas MJ, Theise ND. Noninvasive and minimally invasive carcinoma ex mixed tumor: a clinicopathologic and ploidy study of 12 patients with major salivary tumors of low (or no?) malignant potential. <em>Oral Surg Oral Med Oral Pathol Oral Radiol Endod. </em>1996;81(6):655-664.</li>
                    <li>Tran L, Sadeghi A, Hanson D, et al. Major salivary gland tumors: treatment results and prognostic factors. <em>Laryngoscope. </em>1986;96(10):1139-1144.</li>
                    <li>Vander Poorten VL, Balm AJ, Hilgers FJ, et al. The development of a prognostic score for patients with parotid carcinoma. <em>Cancer. </em>1999;85(9):2057-2067.</li>
                    <li>Amini A, Waxweiler TV, Brower JV, et al. Association of adjuvant chemoradiotherapy vs radiotherapy alone with survival in patients with resected major salivary gland carcinoma: data from the National Cancer Data Base. <em>JAMA Otolaryngol Head Neck Surg. </em>2016;142(11):1100-1110.</li>
                    <li>Smith BD, Haffty BG. Prognostic factoris in patients with head and neck cancer. In: Harrison LB, Sessions RB, Hong WK, eds. <em>Head and Neck Cancer: A Multidisciplinary Approach</em>. Philadelphia: Lippincott Williams and Wilkins; 2009:51-75.</li>
                    <li>Ali S, Palmer FL, Yu C, et al. A predictive nomogram for recurrence of carcinoma of the major salivary glands. <em>JAMA Otolaryngol Head Neck Surg. </em>2013;139(7):698-705.</li>
                    <li>Frankenthaler RA, Luna MA, Lee SS, et al. Prognostic variables in parotid gland cancer. <em>Arch Otolaryngol Head Neck Surg. </em>1991;117(11):1251-1256.</li>
                    <li>Copelli C, Bianchi B, Ferrari S, Ferri A, Sesenna E. Malignant tumors of intraoral minor salivary glands. <em>Oral Oncol. </em>2008;44(7):658-663.</li>
                    <li>Seethala RR. Current state of neck dissection in the United States. <em>Head Neck Pathol. </em>2009;3(3):238-245.</li>
                    <li>Sobin LH, Gospodarowicz MK, Wittekind CH, eds. <em>TNM Classification of Malignant Tumours.</em> New York: Wiley-Liss; 2009.</li>
                    <li>Singletary SE, Greene FL, Sobin LH. Classification of isolated tumor cells: clarification of the 6th edition of the American Joint Committee on Cancer Staging Manual. <em>Cancer. </em>2003;98(12):2740-2741.</li>
                    <li>Broglie MA, Haerle SK, Huber GF, Haile SR, Stoeckli SJ. Occult metastases detected by sentinel node biopsy in patients with early oral and oropharyngeal squamous cell carcinomas: Impact on survival. <em>Head Neck. </em>2013;35(5):660-666.</li>
                    <li>Ferlito A, Robbins KT, Shah JP, et al. Proposal for a rational classification of neck dissections. <em>Head Neck. </em>2011;33(3):445-450.</li>
                    <li>Robbins KT, Shaha AR, Medina JE, et al. Consensus statement on the classification and terminology of neck dissection. <em>Arch Otolaryngol Head Neck Surg. </em>2008;134(5):536-538.</li>
                    <li>Suarez C, Rodrigo JP, Robbins KT, et al. Superselective neck dissection: rationale, indications, and results. <em>Eur Arch Otorhinolaryngol. </em>2013.</li>
                    <li>Erovic BM, Shah MD, Bruch G, et al. Outcome analysis of 215 patients with parotid gland tumors: a retrospective cohort analysis. <em>J Otolaryngol Head Neck Surg. </em>2015;44:43.</li>
                    <li>Ebrahimi A, Gil Z, Amit M. International Consortium for Outcome Research (ICOR) in Head and Neck Cancer. Primary tumor staging for oral cancer and a proposed modification incorporating depth of invasion: an international multicenter retrospective study. <em>JAMA Otolaryngol Head Neck Surg. </em>2014;140(12):1138-1148.</li>
                    <li>Ridge JA, Lydiatt WM, Patel SG, et al. Lip and oral cavity. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Ebrahimi A, Clark JR, Amit M, et al. Minimum nodal yield in oral squamous cell carcinoma: defining the standard of care in a multicenter international pooled validation study. <em>Ann Surg Oncol. </em>2014;21(9):3049-3055.</li>
                    <li>Prabhu RS, Hanasoge S, Magliocca KR, et al. Extent of pathologic extracapsular extension and outcomes in patients with nonoropharyngeal head and neck cancer treated with initial surgical resection. <em>Cancer. </em>2014;120(10):1499-1506.</li>
                    <li>Dunne AA, Muller HH, Eisele DW, Kessel K, Moll R, Werner JA. Meta-analysis of the prognostic significance of perinodal spread in head and neck squamous cell carcinomas (HNSCC) patients. <em>Eur J cancer. </em>2006;42(12):1863-1868.</li>
                    <li>Jose J, Moor JW, Coatesworth AP, Johnston C, MacLennan K. Soft tissue deposits in neck dissections of patients with head and neck squamous cell carcinoma: prospective analysis of prevalence, survival, and its implications. <em>Arch Otolaryngol Head Neck Surg. </em>2004;130(2):157-160.</li>
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
                <button type="button"  class="btn btn-primary btn-block" onclick="Export2Doc('exportContent', 'Major Salivary Glandss');">Export as .doc</button>
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

<?php /* C:\Users\DELL INSPIRON 15\Desktop\Laravel Projects\CBReporting\resources\views/preview_msg.blade.php */ ?>

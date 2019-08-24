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
<title>HEAD AND NECK || LARYNX (SUPRAGLOTTIS, GLOTTIS, SUBGLOTTIS)</title>

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
              <h2 class="title">LARYNX (SUPRAGLOTTIS, GLOTTIS, SUBGLOTTIS)</h2>
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
			    <h6 class="heading-title">LARYNX (SUPRAGLOTTIS, GLOTTIS, SUBGLOTTIS)</h6>
			</div>
		</div>
        <div class="col-md-12">
            @if($procedure_excision != '' || $procedure_endo_excision != '' || $procedure_laser_excision != '' || $procedure_supra_laryn != '' || $procedure_coid_laryn != '' || $procedure_total_laryn != '' || $procedure_ver_hemi != '' || $procedure_par_laryn != '' || $procedure_neck_desection != '' || $procedure_other != '' || $procedure_not_specified != '' )
                <p><strong>Procedure:</strong><span>
                @if($procedure_other != '') {{ $procedure_other }} ({{ $procedure_other_specify }}) @endif
                @if($procedure_neck_desection != '') {{ $procedure_neck_desection }} ({{ $procedure_neck_desection_specify }}) @endif
                @if($procedure_par_laryn != '') {{ $procedure_par_laryn }} ({{ $procedure_res_subman }}) @endif
                @if($procedure_ver_hemi != '') {{ $procedure_ver_hemi }} ({{ $procedure_ver_hemi_specify }}) @endif
                @if($procedure_total_laryn != '') {{ $procedure_total_laryn }}  @endif
                @if($procedure_coid_laryn != '') {{ $procedure_coid_laryn }}  @endif
                @if($procedure_supra_laryn != '') {{ $procedure_supra_laryn }}  @endif
                @if($procedure_laser_excision != '') {{ $procedure_laser_excision }}  @endif
                @if($procedure_endo_excision != '') {{ $procedure_endo_excision }}  @endif
                @if($procedure_excision != '') {{ $procedure_excision }}  @endif
                </span></p>
            @endif
            @if($tumorsite_ls != '' || $tumorsite_lg != '' || $tumorsite_gb != '' || $tumorsite_ns != '' || $tumorsite_ot != '')
                <p><strong>Tumor Site:</strong><span>
                @if($tumorsite_ls != '') {{ $tumorsite_ls }}
                    @if($tumorsite_ls_ea != '') ({{ $tumorsite_ls_ea }}), @endif
                    @if($tumorsite_ls_el != '') ({{ $tumorsite_ls_el }}), @endif
                    @if($tumorsite_ls_af != '') ({{ $tumorsite_ls_af }}), @endif
                    @if($tumorsite_ls_ar != '') ({{ $tumorsite_ls_ar }}), @endif
                    @if($tumorsite_ls_fv != '') ({{ $tumorsite_ls_fv }}), @endif
                    @if($tumorsite_ls_vn != '') ({{ $tumorsite_ls_vn }}), @endif
                @endif
                @if($tumorsite_lg != '') {{ $tumorsite_lg }}
                    @if($tumorsite_lg_vv != '') ({{ $tumorsite_lg_vv }}), @endif
                    @if($tumorsite_lg_ac != '') ({{ $tumorsite_lg_ac }}), @endif
                    @if($tumorsite_lg_pc != '') ({{ $tumorsite_lg_pc }}), @endif
                    @if($tumorsite_lg_se != '') ({{ $tumorsite_lg_se }}), @endif
                @endif
                @if($tumorsite_gb != '') {{ $tumorsite_gb }}  @endif
                @if($tumorsite_ns != '') {{ $tumorsite_ns }}  @endif
                @if($tumorsite_ot != '') {{ $tumorsite_ot }}
                    @if($tumorsite_ot_specify != '') ({{ $tumorsite_ot_specify }}), @endif
                @endif
                </span></p>
            @endif
            @if($transglottic_extension != '')
                <p><strong>Transglottic Extension:</strong><span> {{ $transglottic_extension }} </span></p>
            @endif
            @if($tumorliterality != '')
                <p><strong>Tumor Laterality:</strong><span> {{ $tumorliterality }} </span></p>
            @endif
            @if($tumorfocality != '')
                <p><strong>Tumor Focality:</strong><span> {{ $tumorfocality }} </span></p>
            @endif
            @if($tumorsize_gd != '' || $tumorsize_cd != '')
                <p><strong>Tumor Size:</strong><span>@if($tumorsize_cd != '') Cannot be determined (explain): {{ $tumorsize_cd }} @else  Greatest dimension (centimeters): {{ $tumorsize_gd }}cm @if($tumorsize_length != '' && $tumorsize_width != '') => Additional dimensions (centimeters): {{ $tumorsize_length }}cm X {{ $tumorsize_width }}cm  @endif  @endif</span></p>
            @endif
            @if($histologic != '')
                <p><strong>Histologic Type:</strong><span>
                <p><strong><u>Squamous Cell Carcinoma and Variants</u></strong></p>
                @if($histologic_sc_sc != '') {{ $histologic_sc_sc }}, @endif
                @if($histologic_sc_sn != '') {{ $histologic_sc_sn }}, @endif
                @if($histologic_sc_as != '') {{ $histologic_sc_as }}, @endif
                @if($histologic_sc_ac != '') {{ $histologic_sc_ac }}, @endif
                @if($histologic_sc_bs != '') {{ $histologic_sc_bs }}, @endif
                @if($histologic_sc_ps != '') {{ $histologic_sc_ps }}, @endif
                @if($histologic_sc_cc != '') {{ $histologic_sc_cc }}, @endif
                @if($histologic_sc_vs != '') {{ $histologic_sc_vs }}, @endif
                @if($histologic_sc_lc != '') {{ $histologic_sc_lc }}, @endif

                <p><strong><u>Carcinomas of Minor Salivary Glands</u></strong></p>

                @if($histologic == 'Adenoid cystic carcinoma, tubular pattern' || $histologic == 'Adenoid cystic carcinoma, cribriform pattern' || $histologic == 'Adenoid cystic carcinoma, solid pattern')
                    {{ $histologic }} (Specify percentage of solid component: {{ $histologic_cent }}% )
                @elseif($histologic == 'Combined (or composite) neuroendocrine carcinoma with (specify types)')
                 {{ $histologic }}: {{ $histologic_cn_type }}
                @elseif($histologic == 'Other histologic type not listed (specify):')
                 {{ $histologic }}: {{ $histologic_explain }}
                @else
                    {{ $histologic }}
                @endif
                </span></p>
            @endif
            @if($histologic_grade != '')
                <p><strong>Histologic Grade:</strong><span>@if($histologic_grade == 'Other ') {{ $histologic_grade }}: {{ $histologic_grade_other }} @else  {{ $histologic_grade }}  @endif</span></p>
            @endif
            @if($tumor_extension != '')
                <p><strong>Tumor Extention:</strong><span> {{ $tumor_extension }} </span></p>
            @endif
            @if($icm != '')
                <p><strong>Margins:</strong><span>
                @if($icm == 'Uninvolved by invasive tumor') {{ $icm }}
                    @if($icm_closest_margin != '') (Distance from closest margin (millimeters): {{ $icm_closest_margin }} )@endif
                    @if($icm_location_specify != '') (Specify location of closest margin, per orientation: {{ $icm_location_specify }}) @endif
                    @if($icm_location_closest_margin != '') (Location and distance of other close margins: {{ $icm_location_closest_margin }}) @endif
                @elseif($icm == "Involved by invasive tumor")
                    @if($icm_involve_distance_specify != '') (Specify location of closest margin, per orientation: {{ $icm_involve_distance_specify }}) @endif
                @elseif($icm == "Uninvolved by high-grade dysplasia/in situ disease")
                    @if($icm_closest_margin != '') (Distance from closest margin (millimeters): {{ $icm_closest_margin }} )@endif
                    @if($icm_location_specify != '') (Specify location of closest margin, per orientation: {{ $icm_location_specify }}) @endif
                @elseif($icm == "Involved by high-grade dysplasia/in situ disease")
                    @if($icm_involve_distance_specify != '') (Specify location of closest margin, per orientation: {{ $icm_involve_distance_specify }}) @endif
                @else
                    {{ $icm }}
                @endif
            </span></p>
            @endif
            @if($lymphovascular_invasion != ''))
                <p><strong>Lymphovascular Invasion:</strong> {{ $lymphovascular_invasion }} <span></span></p>
            @endif
            @if($perineural_invasion != '')
                <p><strong>Perineural Invasion:</strong> {{ $perineural_invasion }} <span></span></p>
            @endif
            @if($ln != '')
                <p><strong>Regional Lymph Nodes:</strong><span>{{ $ln }} </span></p>
            @endif
            @if($ln_involved != '')
                <p><strong>Number of Lymph Nodes Involved:</strong><span>{{ $ln_involved }} </span></p>
                <p><strong>Number cannot be determined (explain):</strong><span>{{ $ln_involved_explain }} </span></p>
            @endif
            @if($ln_examined != '')
                <p><strong>Number of Lymph Nodes Examined: </strong><span>{{ $ln_examined }} </span></p>
                <p><strong>Number cannot be determined (explain):  </strong><span>{{ $ln_examined_explain }} </span></p>
            @endif
            @if($ln_leterality != '')
                <p><strong>Laterality of Lymph Nodes Involved:</strong><span>{{ $ln_leterality }} </span></p>
            @endif
            @if($ln_deposit != '')
                <p><strong>Size of Largest Metastatic Deposit (centimeters):</strong><span>{{ $ln_deposit }}cm </span></p>
            @endif
            @if($ene != '')
                <p><strong>Extranodal Extension (ENE): </strong><span>
                @if($ene == 'Present')
                    {{ $ene }} => ( @if($ln_distance != '') Distance from lymph node capsule (millimeters): {{ $ln_distance }} @endif)
                    @if($enema != '') ({{ $enema }}) @endif @if($enemi != '') ({{ $enemi }} ) @endif
                @else
                    {{ $ene }}
                @endif
                </span></p>
            @endif
            @if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != '' || $primary_tumor != '' || $distance_metastasis != '' || $primary_s_tumor != '' || $primary_g_tumor != '' || $primary_t_tumor != '' || $primary_m_tumor != '' || $distance_metastasis_m != '')<p><strong>Pathologic Stage Classification (pTNM, AJCC 8th Edition)</strong> <br/><i>Note: Reporting of pT, pN, and (when applicable) pM categories is based on information available to the pathologist at the time the report is issued. Only the applicable T, N, or M category is required for reporting; their definitions need not be included in the report. The categories (with modifiers when applicable) can be listed on 1 line or more than 1 line. Assignment of Pathologic Prognostic Stage Group is the responsibility of the managing physician and not the pathologist.</i></p>@endif
            @if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != '')<p><strong>TNM Descriptors: </strong><span>
            @if($tnm_descriptors_m != '') {{ $tnm_descriptors_m }}, @endif
            @if($tnm_descriptors_r != '') {{ $tnm_descriptors_r }}, @endif
            @if($tnm_descriptors_y != '') {{ $tnm_descriptors_y }}, @endif
            @endif
            </span></p>
            <p><strong>For All Carcinomas</strong></p>
            @if($primary_tumor != '')<p><strong>Primary Tumor: </strong><span> {{ $primary_tumor }} </span></p>@endif
            <p><em><i><b>For the Supraglottis</b></i></em></p>
            @if($primary_s_tumor != '')<p><span> {{ $primary_s_tumor }} </span></p>@endif
            <p><em><i><b>For the Glottis</b></i></em></p>
            @if($primary_g_tumor != '')<p><span> {{ $primary_g_tumor }} </span></p>@endif
            <p><em><i><b>For the Subglottis</b></i></em></p>
            @if($primary_t_tumor != '')<p><span> {{ $primary_t_tumor }} </span></p>@endif
            @if($distance_metastasis != '')<p><strong>Distance Metastasis: </strong><span> @if($distance_metastasis == 'pM1:  Distant metastasis') {{ $distance_metastasis}} @if($distance_metastasis_site != '') Specify site: {{ $distance_metastasis_site }} @endif @else {{ $distance_metastasis }} @endif </span></p>@endif
            @if($rln != '')<p><strong>Regional Lymph Nodes (pN) : </strong><span> {{ $rln }} </span></p>@endif
            <p><strong>For Mucosal Melanoma</strong></p>
            @if($primary_m_tumor != '')<p><strong>Primary Tumor: </strong><span> {{ $primary_m_tumor }} </span></p>@endif
            @if($rln_m != '')<p><strong>Regional Lymph Nodes (pN) : </strong><span> {{ $rln_m }} </span></p>@endif
            @if($distance_metastasis_m != '')<p><strong>Distance Metastasis: </strong><span> @if($distance_metastasis_m == 'pM1:  Distant metastasis') {{ $distance_metastasis}} @if($distance_metastasis_site_m != '') Specify site: {{ $distance_metastasis_site }} @endif @else {{ $distance_metastasis_m }} @endif </span></p>@endif
            @if($findings_ni != '' || $findings_dl != '' || $findings_ap != '' || $findings_sp != '' || $findings_st != '' || $findings_if != '' || $findings_cf != '' || $findings_if != '' || $findings_cb != '' || $findings_ot != '' )
                <p><strong>Additional Pathologic Findings:</strong><span>
                @if($findings_ni != '') {{ $findings_ni }}, @endif
                @if($findings_dl != '') {{ $findings_dl }}, @endif
                @if($findings_ap != '') {{ $findings_ap }}, @endif
                @if($findings_sp != '') {{ $findings_sp }}, @endif
                @if($findings_st != '') {{ $findings_st }}, @endif
                @if($findings_sm != '') {{ $findings_sm }}, @endif
                @if($findings_cf != '') {{ $findings_cf }}, @endif
                @if($findings_cb != '') {{ $findings_cb }}, @endif
                @if($findings_if != '') {{ $findings_if }} (@if($findings_if_specify != '') {{ $findings_if_specify }}), @endif @endif
                @if($findings_ot != '') {{ $findings_ot }} (@if($findings_ot_specify != '') {{ $findings_ot_specify }}). @endif @endif
                </span></p>
            @endif
            @if($ancillary_studies != '') <p><strong> Ancillary Studies</strong><br/> {{ $ancillary_studies_main }} @endif
            @if($comments != '') <p><strong> Comments</strong><br/> {{ $comments }} @endif
            @if($all_notes != '')
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                    <h4 class="modal-title" id="myModalLabel">A.  Anatomic Sites and Subsites for the Larynx</h4>
                    <h3><strong>Supraglottis</strong></h3>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Epilarynx, including marginal zone</p>
                    <p>Suprahyoid epiglottis, including tip, lingual (anterior), and laryngeal surfaces</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Aryepiglottic fold, laryngeal aspect</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Arytenoid</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Supraglottis, excluding epilarynx</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Infrahyoid epiglottis</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ventricular bands (false cords)</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ventricle</p>
                    <h3><strong>Glottis</strong></h3>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vocal cords</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Anterior commissure</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Posterior commissure</p>
                    <p>&nbsp;</p>
                    <h3><strong>Subglottis</strong></h3>
                    <p>&nbsp;</p>
                    <p>The protocol applies to all carcinomas arising at these sites.<a href="#_ENREF_2"><sup>2</sup></a> &nbsp;The piriform sinus represents part of the hypopharynx which expands bilaterally and forward around the sides of the larynx and lies between the larynx and the thyroid cartilage. Cancers of the piriform sinus are included in the protocol on pharynx cancers.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Anatomic Compartments </strong>(Figure 1)</p>
                    <p>The anatomic compartments of the larynx include:</p>
                    <p>&nbsp;</p>
                    <ol>
                    <li>Supraglottic larynx extending from the tip of the epiglottis to a horizontal line passing through the apex of the ventricle; structures included in this compartment are the epiglottis (lingual and laryngeal aspects), aryepiglottic folds, arytenoids, false vocal cords and the ventricle.</li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol start="2">
                    <li>Glottic region, which extends from the ventricle to approximately 0.5 cm to 1.0 cm below the free level of the true vocal cord and includes the anterior and posterior commissures and the true vocal cord.</li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol start="3">
                    <li>Subglottic larynx, which extends approximately 1.0 cm below the level of the true vocal cord to the inferior rim of the cricoid cartilage.</li>
                    </ol>
                    <h2>&nbsp;</h2>
                    <ol start="4">
                    <li>The paraglottic space is a potential space deep to the ventricles and saccules filled with adipose tissue and connective tissue (Figure 2). It is bounded by the conus elasticus inferiorly, the thyroid cartilage laterally, the quadrangular membrane medially, and the piriform sinus posteriorly. Like the paraglottic space, the pre-epiglottic space is filled with adipose tissue and connective tissue (Figure 3); it is triangular in shape and is bounded by the thyroid cartilage and thyrohyoid membrane anteriorly, the epiglottis and thyroepiglottic ligament posteriorly, and the hyoepiglottic ligament at its base (Figures 1 and 2).<sup> 2</sup> The paraglottic and preglottic spaces contain lymphatics and blood vessels but no lymph nodes.<sup>2</sup></li>
                    </ol>
                    <p><img src="reporting_images/lyx1.png" class="img-responsive" /></p>
                    <p><strong>Figure 1.</strong> Anatomic compartments of the larynx. From Cocke EW Jr, Wang CC. Part I - Cancer of the larynx: selecting optimum treatment. <em>CA Cancer J Clin.</em> 1976;26:194-200. Figure by J.H.&nbsp;Ogura, MD.</p>
                    <p><img src="reporting_images/lyx2.png" class="img-responsive" /></p>
                    <p><strong>Figure 2.</strong> The paraglottic space. From <em>World Health Organization Classification of Tumours: Pathology and Genetics of Head and Neck Tumours.</em> Lyon, France: IARC Press; 2005. Reproduced with permission.</p>
                    <p><img src="reporting_images/lyx3.png" class="img-responsive" /></p>
                    <p><strong>Figure 3.</strong> The pre-epiglottic space. From <em>World Health Organization Classification of Tumours: Pathology and Genetics of Head and Neck Tumours.</em> Lyon, France: IARC Press; 2005. Reproduced with permission.</p>
                    <p>&nbsp;</p>
                    <p><strong>Site-Specific Carcinomas</strong></p>
                    <p><strong>&nbsp;</strong></p>
                    <ol>
                    <li>Supraglottic squamous cell carcinoma represents a squamous cell carcinoma that involves the structures of the supraglottic larynx, including the epiglottis (laryngeal and lingual surfaces), aryepiglottic folds, arytenoids, false vocal cords, and ventricles.</li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol start="2">
                    <li>Glottic squamous cell carcinoma represents a squamous cell carcinoma that involves the structures of the glottis, including the true vocal cords, and the anterior and posterior commissures.</li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol start="3">
                    <li>Subglottic squamous cell carcinoma represents a squamous cell carcinoma that involves the subglottis, which begins 1 cm below the apex of the ventricle to its inferior border represented by the rim of the cricoid cartilage.</li>
                    </ol>
                    <p>&nbsp;</p>
                    <ol start="4">
                    <li>Transglottic carcinomas represent a carcinoma that crosses the ventricles in a vertical direction arising in either the glottic or supraglottic larynx</li>
                    </ol>

                    <h4 class="modal-title" id="myModalLabel">B.  Histologic Type</h4>

                    <p>A modification of the WHO classification of carcinomas of the larynx is shown below.<sup><a href="#_ENREF_3">3</a>,<a href="#_ENREF_4">4</a></sup> &nbsp;This list may not be complete. This protocol applies to carcinomas and melanomas and does not apply to lymphomas or sarcomas.</p>
                    <p>&nbsp;</p>
                    <h2>Carcinomas of Larynx</h2>
                    <p>Squamous cell carcinoma</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Squamous cell carcinoma, conventional (keratinizing)</p>
                    <p>Squamous cell carcinoma, nonkeratinizing</p>
                    <p>Adenosquamous carcinoma</p>
                    <p>Basaloid squamous cell carcinoma</p>
                    <p>Papillary squamous cell carcinoma</p>
                    <p>Spindle cell squamous cell carcinoma</p>
                    <p>Verrucous squamous cell carcinoma</p>
                    <p>Lymphoepithelial carcinoma</p>
                    <p>&nbsp;</p>
                    <h4>Neuroendocrine carcinoma</h4>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Well-differentiated neuroendocrine carcinoma (typical carcinoid tumor)</p>
                    <p>Moderately differentiated neuroendocrine carcinoma (atypical carcinoid tumor)</p>
                    <p>Poorly differentiated neuroendocrine carcinoma, small cell type</p>
                    <p>Poorly differentiated neuroendocrine carcinoma, large cell type</p>
                    <p>Combined (or composite) neuroendocrine carcinoma<sup>#</sup></p>
                    <p><em><sup>#</sup></em><em> Represents a carcinoma showing combined features of small cell neuroendocrine carcinoma associated with a squamous or adenocarcinomatous component.<a href="#_ENREF_3"><sup>3</sup></a> </em></p>
                    <h3>&nbsp;</h3>
                    <h3><strong>Carcinomas of Minor Salivary Glands</strong></h3>
                    <p>Adenoid cystic carcinoma</p>
                    <p>Mucoepidermoid carcinoma</p>
                    <p>Adenocarcinoma, not otherwise specified</p>
                    <p>Other<sup>#</sup></p>
                    <p><em><sup>#</sup></em><em> Please refer to the CAP protocol for major salivary glands for detailed listing of other tumor types.</em></p>
                    <p>&nbsp;</p>
                    <p><strong>Mucosal Melanoma</strong></p>

                    <h4 class="modal-title" id="myModalLabel">C. Histologic Grade</h4>
                    <h2>&nbsp;</h2>
                    <p>For histologic types of carcinomas that are amenable to grading, 3 histologic grades are suggested, as shown below. For conventional squamous cell carcinoma, histologic grading as a whole does not perform well as a prognosticator.<a href="#_ENREF_5"><sup>5</sup></a> Nonetheless, it should be recorded when applicable, as it is a basic tumor characteristic. Selecting either the most prevalent grade or the highest grade for this synoptic protocol is acceptable. Variants of squamous cell carcinoma (ie, verrucous, basaloid, etc) have an intrinsic biologic potential and currently do not appear to require grading.</p>
                    <p>Grade 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Well differentiated</p>
                    <p>Grade 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Moderately differentiated</p>
                    <p>Grade 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Poorly differentiated</p>
                    <p>Grade X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cannot be assessed</p>
                    <p>&nbsp;</p>
                    <p>The histologic (microscopic) grading of salivary gland carcinomas has been shown to be an independent predictor of behavior and plays a role in optimizing therapy. <sup>&nbsp;</sup>Further, there is often a positive correlation between histologic grade and clinical stage.<a href="#_ENREF_6"><sup>6-9</sup></a> However, most salivary gland carcinoma types have an intrinsic biologic behavior and attempted application of a universal grading scheme is merely a crude surrogate.<a href="#_ENREF_8"><sup>8</sup></a>&nbsp; Thus a generic grading scheme is no longer recommended for salivary gland carcinomas.<a href="#_ENREF_10"><sup>10</sup></a>&nbsp; Carcinoma types for which grading systems exist and are relevant are incorporated into histologic type. The 3 major categories that are amenable to grading include adenoid cystic carcinoma, mucoepidermoid carcinoma, and adenocarcinoma, not otherwise specified.<sup><a href="#_ENREF_7">7</a>,<a href="#_ENREF_8">8</a>,<a href="#_ENREF_11">11</a></sup></p>
                    <p>&nbsp;</p>
                    <p>In some carcinomas, histologic grading may be based on growth pattern, such as in adenoid cystic carcinoma, for which a histologic high-grade variant has been recognized based on the percentage of solid growth.<a href="#_ENREF_11"><sup>11</sup></a> Those adenoid cystic carcinomas showing 30% or greater of solid growth pattern are considered to be histologically high-grade carcinomas. The histologic grading of mucoepidermoid carcinoma includes a combination of growth pattern characteristics (eg, cystic, solid, neurotropism) and cytomorphologic findings (eg, anaplasia, mitoses, necrosis).<a href="#_ENREF_12"><sup>12-14</sup></a> &nbsp;Adenocarcinomas, not otherwise specified, do not have a formalized grading scheme and are graded intuitively based on cytomorphologic features.<a href="#_ENREF_8"><sup>8</sup></a></p>
                    <p>&nbsp;</p>

                    <h4 class="modal-title" id="myModalLabel">D AND E: Margins</h4>
                    <h2><strong>D. Surgical Margins</strong></h2>
                    <p>The definition of a positive margin is somewhat controversial given the varied results from prior studies.<sup><a href="#_ENREF_15">15</a>,<a href="#_ENREF_16">16</a></sup> However, overall, several studies support the definition of a positive margin to be invasive carcinoma <em>or</em> carcinoma in situ/high-grade dysplasia present at margins (microscopic cut-through of tumor).<a href="#_ENREF_17"><sup>17</sup></a> Furthermore, reporting of surgical margins should also include information regarding the distance of invasive carcinoma, carcinoma in situ, or high-grade dysplasia (moderate to severe) from the surgical margin. Tumors with &ldquo;close&rdquo; margins also carry an increased risk for local recurrence.<sup><a href="#_ENREF_16">16</a>,<a href="#_ENREF_17">17</a></sup> The definition of a &ldquo;close&rdquo; margin is not standardized as the effective cut-off varies between studies and between anatomic subsites. Commonly used cut points to define close margins are 5 mm in general and 2 mm with respect to glottic larynx.<a href="#_ENREF_16"><sup>16</sup></a> However, values ranging from 3 mm to 7 mm have been used with success,<sup><a href="#_ENREF_16">16</a>,<a href="#_ENREF_18">18</a></sup> and for glottic tumors as low as 1 mm.<a href="#_ENREF_19"><sup>19</sup></a>&nbsp; Thus, distance of tumor from the nearest margin should be recorded.&nbsp;</p>
                    <p>Reporting of surgical margins for carcinomas of the minor salivary glands should follow those used for squamous cell carcinoma of larynx.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Dysplasia</strong></p>
                    <p>The types of intraepithelial dysplasia of the upper aerodigestive tract (UADT) include nonkeratinizing (&ldquo;classic&rdquo;) dysplasia and keratinizing dysplasia. Of the 2 types of dysplasias, the keratinizing dysplasias are significantly more common than the nonkeratinizing dysplasias. The current WHO advocates a 2-tiered approach with low-grade and high-grade dysplasia categories (see below under Note M).<a href="#_ENREF_20"><sup>20</sup></a> High-grade dysplasia at a margin is regarded and reported as a positive margin, while low-grade dysplasia is not.&nbsp;</p>
                    <p>&nbsp;</p>
                    <h2>E. &nbsp;Orientation of Specimen</h2>
                    <p>Complex specimens should be examined and oriented with the assistance of the operating surgeon(s). Direct communication between the surgeon and pathologist is a critical component in specimen orientation and proper sectioning. Whenever possible, the tissue examination request form should include a drawing or photograph of the resected specimen showing the extent of the tumor and its relation to the anatomic structures of the region. The lines and extent of the resection can be depicted on preprinted adhesive labels and attached to the surgical pathology request forms.</p>

                    <h4 class="modal-title" id="myModalLabel">F. Perineural Invasion</h4>
                    <p>Traditionally, the presence of perineural invasion (neurotropism) is an important predictor of poor prognosis in head and neck cancer of virtually all sites.<a href="#_ENREF_21"><sup>21</sup></a> The presence of perineural invasion (neurotropism) in the primary cancer is associated with poor local disease control and regional control, as well as being associated with metastasis to regional lymph nodes.<a href="#_ENREF_21"><sup>21</sup></a> Further, perineural invasion is associated with decrease in disease-specific survival and overall survival.<a href="#_ENREF_21"><sup>21</sup></a> There is conflicting data relative to an association between the presence of perineural invasion and the development of distant metastasis, with some studies showing an increased association with distant metastasis, while other studies showing no correlation with distant metastasis.<a href="#_ENREF_21"><sup>21</sup></a> The relationship between perineural invasion and prognosis is independent of nerve diameter.<a href="#_ENREF_22"><sup>22</sup></a> Additionally, emerging evidence suggests that extratumoral perineural invasion may be more prognostically relevant.<a href="#_ENREF_23"><sup>23</sup></a> Although perineural invasion of small unnamed nerves may not produce clinical symptoms, the reporting of perineural invasion includes nerves of all sizes including small peripheral nerves (ie, less than 1 mm in diameter). Aside from the impact on prognosis, the presence of perineural invasion also guides therapy. Concurrent adjuvant chemoradiation therapy has been shown to improve outcomes in patients with perineural invasion (as well as in patients with extranodal extension and bone invasion).<sup><a href="#_ENREF_24">24</a>,<a href="#_ENREF_25">25</a></sup> Given the significance relative to prognosis and treatment, perineural invasion is a required data element in the reporting of head and neck cancers.&nbsp;</p>

                    <h4 class="modal-title" id="myModalLabel">G. Regional Lymph Nodes </h4>
                    <h2>Measurement of Tumor Metastasis</h2>
                    <p>The cross-sectional diameter of the largest lymph node metastasis (not the lymph node itself) is measured in the gross specimen at the time of macroscopic examination or, if necessary, on the histologic slide at the time of microscopic examination.<sup>24,25</sup></p>
                    <p>&nbsp;</p>
                    <h2>Special Procedures for Lymph Nodes</h2>
                    <p>The risk of regional (cervical neck) nodal spread from cancers varies based on anatomic subsite. At the current time, no additional special techniques are required other than routine histology for the assessment of nodal metastases. Immunohistochemistry and polymerase chain reaction (PCR) to detect isolated tumor cells are considered investigational techniques at this time.</p>
                    <h2>&nbsp;</h2>
                    <h2>Regional Lymph Nodes (pN0): Isolated Tumor Cells</h2>
                    <p>Isolated tumor cells (ITCs) are single cells or small clusters of cells not more than 0.2&nbsp;mm in greatest dimension. While the generic recommendation is that for lymph nodes with ITCs found by either histologic examination, immunohistochemistry, or nonmorphologic techniques (eg, flow cytometry, DNA analysis, PCR amplification of a specific tumor marker), they should be classified as N0 or M0, respectively.<sup>26,27</sup> Evidence for the validity of this practice in head and neck squamous cell carcinoma and other histologic subtypes is lacking. In fact, rare studies relevant to head and neck sites indicate that isolated tumor cells may actually be a poor prognosticator in terms of local control.<sup>28</sup></p>
                    <p>&nbsp;</p>
                    <h2>Lymph Node Number</h2>
                    <p>Histologic examination of a selective neck dissection specimen will ordinarily include 6 or more lymph nodes. Histologic examination of a radical or modified radical neck dissection specimen will ordinarily include 10 or more lymph nodes in the untreated neck.</p>
                    <p>&nbsp;</p>
                    <h2>Classification of Neck Dissection</h2>
                    <ol>
                    <li>Radical neck dissection</li>
                    <li>Modified radical neck dissection, internal jugular vein and/or sternocleidomastoid muscle spared</li>
                    <li>Selective neck dissection (SND), as specified by the surgeon (Figure 4), defined by dissection of less than the 5 traditional levels of a radical and modified radical neck dissection. The following dissections are now under this category<sup>29-31</sup>:</li>
                    <li>Supraomohyoid neck dissection</li>
                    <li>Posterolateral neck dissection</li>
                    <li>Lateral neck dissection</li>
                    <li>Central compartment neck dissection</li>
                    <li>Superselective neck dissection (SSND), a relatively new term defined by dissection of the fibrofatty elements of 2 or less levels<sup>32</sup></li>
                    <li>Extended radical neck dissection, as specified by the surgeon</li>
                    </ol>
                    <p>&nbsp;</p>
                    <p>For purposes of pathologic evaluation, lymph nodes are organized by levels as shown in Figure 4.</p>
                    <p><img src="reporting_images/lyx4.png" class="img-responsive" /></p>
                    <p><strong>Figure 4.</strong> The six sublevels of the neck for describing the location of lymph nodes within levels I, II, and V. Level IA, submental group; level IB, submandibular group; level IIA, upper jugular nodes along the carotid sheath, including the subdigastric group; level IIB, upper jugular nodes in the submuscular recess; level VA, spinal accessory nodes; and level VB, the supraclavicular and transverse cervical nodes. From: Flint PW, et al, eds. <em>Cummings Otolaryngology: Head and Neck Surgery.</em> 5th ed. Philadelphia, PA; Saunders: 2010. Reproduced with permission &copy;&nbsp;Elsevier.</p>
                    <p>&nbsp;</p>
                    <p>In order for pathologists to properly identify these nodes, they must be familiar with the terminology of the regional lymph node groups and with the relationships of those groups to the regional anatomy. Which lymph node groups surgeons submit for histopathologic evaluation depends on the type of neck dissection they perform. Therefore, surgeons must supply information on the types of neck dissections that they perform and the details of the local anatomy in the specimens they submit for examination or, in other manners, orient those specimens for pathologists.</p>
                    <p>&nbsp;</p>
                    <p>If it is not possible to assess the levels of lymph nodes (for instance, when the anatomic landmarks in the excised specimens are not specified), then the lymph node levels may be estimated as follows: level II, upper third of internal jugular (IJ) vein or neck specimen; level III, middle third of IJ vein or neck specimen; level IV, lower third of IJ vein or neck specimen, all anterior to the sternocleidomastoid muscle.</p>
                    <p>&nbsp;</p>
                    <h2>Level I. Submental Group (Sublevel IA)</h2>
                    <p>Lymph nodes within the triangular boundary of the anterior belly of the digastric muscles and the hyoid bone.</p>
                    <p>&nbsp;</p>
                    <h3><strong>Level I. Submandibular Group (Sublevel IB) </strong></h3>
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
                    <p>Lymph node groups removed from areas not included in the above levels, eg, scalene, suboccipital, and retropharyngeal, should be identified and reported from all levels separately. Midline nodes are considered ipsilateral nodes.</p>
                    <p>&nbsp;</p>
                    <h2>Extranodal Extension</h2>
                    <p>The status of cervical lymph nodes is the single most important prognostic factor in aerodigestive cancer. All macroscopically negative or equivocal lymph nodes should be submitted in toto. Grossly positive nodes may be partially submitted for microscopic documentation of metastasis. Reporting of lymph nodes containing metastasis should include whether there is presence or absence of extranodal extension (ENE),<sup>33</sup> which is now part of N staging. This finding consists of extension of metastatic tumor, present within the confines of the lymph node, through the lymph node capsule into the surrounding connective tissue, with or without associated stromal reaction. A distance of extension from the native lymph node capsule is now suggested (but not yet required) with the proposed stratification of ENE into ENE<sub>ma</sub> (&gt;2 mm) and ENE<sub>mi </sub>&nbsp;(&le;2 mm).<sup>34-37</sup> However, pitfalls in the measurement (ie, in larger, matted lymph nodes, in nodes post fine-needle aspiration, and in nodes with near total replacement of lymph node architecture), and the disposition of soft tissue deposits is still not resolved. In general, absence of ENE in a large (&gt;3 cm) lymph node, especially with traversing fibrous bands, should be viewed with skepticism. Soft tissue deposits for lymph node metastases based on limited studies appear to be the equivalent of a positive lymph node with ENE and should be recorded as such.<a href="#_ENREF_31"><sup>3</sup></a><sup>8 </sup>&nbsp;</p>

                    <h4 class="modal-title" id="myModalLabel">H. TNM and Stage Groupings</h4>
                    <p>The protocol recommends the TNM staging system of the American Joint Committee on Cancer.<a href="#_ENREF_2"><sup>2</sup></a> &nbsp;There are no significant alterations in the 8<sup>th</sup> edition to T stage of larynx.&nbsp; However, extranodal extension (ENE) is included in N stage. In essence, pathologic ENE(+) will increase the nodal category by 1.</p>
                    <p>&nbsp;</p>
                    <p>The 8<sup>th</sup> edition of the AJCC staging of head and neck cancers includes mucosal melanomas; this does not show significant changes from the 7<sup>th</sup> edition. Approximately two-thirds of mucosal melanomas arise in the sinonasal tract, one-quarter are found in the oral cavity, and the remainder occur only sporadically in other mucosal sites of the head and neck. Even small cancers behave aggressively with high rates of recurrence and death. To reflect this aggressive behavior, primary cancers limited to the mucosa are considered T3 lesions. Advanced mucosal melanomas are classified as T4a and T4b. The anatomic extent criteria to define <em>moderately advanced</em> (T4a) and <em>very advanced</em> (T4b) disease are given below. The AJCC staging for mucosal melanomas does not provide for the histologic definition of a T3 lesion; as the majority of mucosal melanomas are invasive at presentation, mucosal-based melanomas (T3 lesions) include those lesions that involve either the epithelium and/or lamina propria of the involved site. Rare examples of in situ mucosal melanomas occur, but In situ mucosal melanomas are excluded from staging, as they are extremely rare.<a href="#_ENREF_32"><sup>3</sup></a><sup>9 </sup></p>
                    <p>&nbsp;</p>
                    <p>By AJCC/UICC convention, the designation &ldquo;T&rdquo; refers to a primary tumor that has not been previously treated. The symbol &ldquo;p&rdquo; refers to the pathologic classification of the TNM, as opposed to the clinical classification, and is based on gross and microscopic examination. pT entails a resection of the primary tumor or biopsy adequate to evaluate the highest pT category, pN entails removal of nodes adequate to validate lymph node metastasis, and pM implies microscopic examination of distant lesions. Clinical classification (cTNM) is usually carried out by the referring physician before treatment during initial evaluation of the patient or when pathologic classification is not possible.</p>
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
                    <p>&nbsp;</p>
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
                    <p><strong>T Category Considerations</strong></p>
                    <p><u>Supraglottis</u>. Normal vocal cord mobility (T1), fixation of the larynx (T2), and vocal cord fixation (T3) may only be determined clinically.</p>
                    <p>&nbsp;</p>
                    <p><u>Glottis</u>. Normal vocal cord mobility (T1), impaired vocal cord mobility (T2), and vocal cord fixation (T3) may only be determined clinically.</p>
                    <p>&nbsp;</p>
                    <p><u>Subglottis</u>. Normal or impaired vocal cord mobility (T2) and vocal cord fixation (T3) may only be determined clinically.</p>


                    <h4 class="modal-title" id="myModalLabel">J: Dysplasia of the Upper Aerodigestive Tract (UADT)</h4>

                    <p>In contrast to the uterine cervix in which the nonkeratinizing (&ldquo;classic&rdquo;) form of epithelial dysplasia is most common resulting in a reproducible and clinically useful grading scheme of mild, moderate, and severe dysplasia (ie, carcinoma in situ), the majority of the UADT mucosal lesions fall under the designation of keratinizing dysplasias, for which the aforementioned criteria are not as easily applied.&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>The current approach indicated by the WHO for laryngeal precursor lesions is to use a 2-tiered classification of low-grade and high-grade dysplasia.&nbsp; Hyperplasias and keratoses without atypia as well as those with mild dysplasia are categorized as &ldquo;low grade,&rdquo; while lesions with moderate and severe dysplasia as well as carcinoma in situ are considered &ldquo;high grade.&rdquo;<a href="#_ENREF_20"><sup>20</sup></a> Separation of carcinoma in situ as a distinct category (ie, 3 tiers) is an acceptable option, but data are limited to support this. <sup>40</sup></p>
                    <p>&nbsp;</p>
                    <p>Morphologic criteria for the classification of laryngeal precursor lesions are summarized below.<a href="#_ENREF_20"><sup>20</sup></a></p>
                    <p>&nbsp;</p>
                    <table>
                    <tbody>
                    <tr>
                    <td colspan="2" width="686">
                    <p><strong>Low-grade dysplasia (including previous category of mild dysplasia)</strong></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow: 1; mso-prop-change: 'Raja Seethala' 20170512T1329;">
                    <td width="211">
                    <p>Architectural criteria</p>
                    </td>
                    <td width="475">
                    <p>Stratification is preserved: transition of basal cells or augmented basal/parabasal cell layer with perpendicular orientation to the basement membrane to prickle cells horizontally oriented in the upper part</p>
                    <p>&nbsp;</p>
                    <p>Spinous layer: spectrum of changes ranging from increased spinous layer in the whole thickness up to changes in which prickle cells are seen only in the upper epithelial half</p>
                    <p>&nbsp;</p>
                    <p>Basal/parabasal layer: spectrum of changes, from 2-3 unchanged layers to augmentation of basal and parabasal cells in the lower half of the epithelium</p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow: 2; mso-prop-change: 'Raja Seethala' 20170512T1331;">
                    <td width="211">
                    <p>Cytologic criteria</p>
                    </td>
                    <td width="475">
                    <p>At most minimal cellular atypia</p>
                    <p>&nbsp;</p>
                    <p>Parabasal cells; slightly increased cytoplasm compared to basal cells, enlarged nuclei, uniformly distributed chromatin, no intercellular bridges</p>
                    <p>&nbsp;</p>
                    <p>Rare regular mitoses in or near basal layer</p>
                    <p>&nbsp;</p>
                    <p>Few dyskeratotic cells present</p>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2" width="686">
                    <p><strong>High-grade dysplasia (including previous category of moderate and severe dysplasia, and carcinoma in situ)</strong></p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow: 4; mso-prop-change: 'Raja Seethala' 20170512T1332;">
                    <td width="211">
                    <p>Architectural criteria<sup>*</sup></p>
                    </td>
                    <td width="475">
                    <p>Abnormal maturation</p>
                    <p>&nbsp;</p>
                    <p>Variable degrees of disordered stratification and polarity in as much as the whole epithelium</p>
                    <p>&nbsp;</p>
                    <p>Altered epithelial cells usually occupying from half to the entire epithelial thickness</p>
                    <p>&nbsp;</p>
                    <p>Two subtypes: keratinizing (spinous-cell type) and nonkeratinizing (basal-cell type)</p>
                    <p>&nbsp;</p>
                    <p>Variable degree of irregularly shaped rete (bulbous, downwardly extending), with an intact basement membrane</p>
                    <p>&nbsp;</p>
                    <p>No stromal alterations</p>
                    </td>
                    </tr>
                    <tr style="mso-yfti-irow: 5; mso-prop-change: 'Raja Seethala' 20170512T1332;">
                    <td width="211">
                    <p>Cytologic criteria<sup>*</sup></p>
                    </td>
                    <td width="475">
                    <p>Easily identified conspicuous cellular and nuclear atypia, including marked variation in size and shape, marked variation in stain intensity with frequent hyperchromasia, nucleoli increased in number and size</p>
                    <p>&nbsp;</p>
                    <p>Increased N:C ratio</p>
                    <p>&nbsp;</p>
                    <p>Increased mitoses at or above the suprabasal level, with or without atypical forms</p>
                    <p>&nbsp;</p>
                    <p>Dyskeratotic and apoptotic cells are frequent throughout the entire epithelium</p>
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2" width="686">
                    <p><em>* Complete loss of stratification and polarity and/or severe cytological atypia and atypical mitoses qualifies as carcinoma in situ if a 3-tiered system is used.</em></p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    <p>&nbsp;</p>
                    <p>The risk off malignant progression in low-grade dysplasia is ~1.6%, while that of high-grade dysplasia is ~12.5%.&nbsp; Limited data suggest that the specific designation of carcinoma in situ carries a risk of 40%.<a href="#_ENREF_20"><sup>20</sup></a></p>

                    <h4 class="modal-title" id="myModalLabel">References</h4>

                    <ol>
                    <li>Gress DM, Edge SB, Greene FL, et al. Principles of cancer staging. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Patel SG, Lydiatt WM, Glastonbury CM, et al. Larynx. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>El-Naggar AK. Introduction. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours</em>. 4th ed. Geneva, Switzerland: WHO Press; 2017:160-162.</li>
                    <li>Slootweg PJ, Grandis JR. Tumours of the hypopharynx, larynx and trachea and parapharyngeal space. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours</em>. 4th ed. Geneva, Switzerland: WHO Press; 2017:78-81.</li>
                    <li>Barnes L, Eveson JW, Reichart P, Sidransky D. WHO histological classification of tumours of the oral cavity and oropharynx. In: Barnes L, Eveson JW, Reichart P, Sidransky D, eds. <em>World Health Organization Classification of Tumours: Pathology and Genetics of Head and Neck Tumours</em>. Lyon: IARC; 2005:164.</li>
                    <li>Spiro RH, Thaler HT, Hicks WF, Kher UA, Huvos AH, Strong EW. The importance of clinical staging of minor salivary gland carcinoma. <em>Am J Surg. </em>1991;162(4):330-336.</li>
                    <li>Spiro RH, Huvos AG, Strong EW. Adenocarcinoma of salivary origin. Clinicopathologic study of 204 patients. <em>Am J Surg. </em>1982;144(4):423-431.</li>
                    <li>Seethala RR. Histologic grading and prognostic biomarkers in salivary gland carcinomas. <em>Adv Anat Pathol. </em>2011;18(1):29-45.</li>
                    <li>Kane WJ, McCaffrey TV, Olsen KD, Lewis JE. Primary parotid malignancies: a clinical and pathologic review. <em>Arch Otolaryngol Head Neck Surg. </em>1991;117(3):307-315.</li>
                    <li>Lydiatt WM, Mukherji SK, O'Sullivan B, Patel SG, Shah JP. Major salivary glands. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Szanto PA, Luna MA, Tortoledo ME, White RA. Histologic grading of adenoid cystic carcinoma of the salivary glands. <em>Cancer. </em>1984;54(6):1062-1069.</li>
                    <li>Seethala RR, Dacic S, Cieply K, Kelly LM, Nikiforova MN. A reappraisal of the MECT1/MAML2 translocation in salivary mucoepidermoid carcinomas. <em>Am J Surg Pathol. </em>2010;34(8):1106-1121.</li>
                    <li>Brandwein MS, Ivanov K, Wallace DI, et al. Mucoepidermoid carcinoma: a clinicopathologic study of 80 patients with special reference to histological grading. <em>Am J Surg Pathol. </em>2001;25(7):835-845.</li>
                    <li>Auclair PL, Goode RK, Ellis GL. Mucoepidermoid carcinoma of intraoral salivary glands. Evaluation and application of grading criteria in 143 cases. <em>Cancer. </em>1992;69(8):2021-2030.</li>
                    <li>Brandwein-Gensler M, Teixeira MS, Lewis CM, et al. Oral squamous cell carcinoma: histologic risk assessment, but not margin status, is strongly predictive of local disease-free and overall survival. <em>Am J Surg Pathol. </em>2005;29(2):167-178.</li>
                    <li>Hinni ML, Ferlito A, Brandwein-Gensler MS, et al. Surgical margins in head and neck cancer: a contemporary review. <em>Head Neck. </em>2012.</li>
                    <li>Alicandri-Ciufelli M, Bonali M, Piccinini A, et al. Surgical margins in head and neck squamous cell carcinoma: what is 'close'? <em>Eur Arch Otorhinolaryngol. </em>2012;270(10):2603-2609</li>
                    <li>Liao CT, Chang JT, Wang HM, et al. Analysis of risk factors of predictive local tumor control in oral cavity cancer. <em>Ann Surg Oncol. </em>2008;15(3):915-922.</li>
                    <li>Ansarin M, Santoro L, Cattaneo A, et al. Laser surgery for early glottic cancer: impact of margin status on local control and organ preservation. <em>Arch Otolaryngol Head Neck Surg. </em>2009;135(4):385-390.</li>
                    <li>Gale N, Hille JJ, Jordan RC, Nadal A, Williams MD. Dysplasia. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours.</em> 4th ed. Geneva, Switzerland: WHO Press; 2017:91-93.</li>
                    <li>Smith BD, Haffty BG. Prognostic factoris in patients with head and neck cancer. In: Harrison LB, Sessions RB, Hong WK, eds. <em>Head and Neck Cancer: A Multidisciplinary Approach</em>. Philadelphia, PA: Lippincott Williams and Wilkins; 2009:51-75.</li>
                    <li>Fagan JJ, Collins B, Barnes L, D'Amico F, Myers EN, Johnson JT. Perineural invasion in squamous cell carcinoma of the head and neck. <em>Arch Otolaryngol Head Neck Surg. </em>1998;124(6):637-640.</li>
                    <li>Miller ME, Palla B, Chen Q, et al. A novel classification system for perineural invasion in noncutaneous head and neck squamous cell carcinoma: histologic subcategories and patient outcomes. <em>Am J Otolaryngol. </em>2012;33(2):212-215.</li>
                    <li>Cooper JS, Pajak TF, Forastiere AA, et al. Postoperative concurrent radiotherapy and chemotherapy for high-risk squamous-cell carcinoma of the head and neck. <em>N Engl J Med. </em>2004;350(19):1937-1944.</li>
                    <li>Bernier J, Domenge C, Ozsahin M, et al. Postoperative irradiation with or without concomitant chemotherapy for locally advanced head and neck cancer. <em>N Engl J Med. </em>2004;350(19):1945-1952.</li>
                    </ol>
                    <p>26&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sobin LH, Gospodarowicz MK, Wittekind CH, eds. <em>TNM Classification of Malignant Tumours.</em> New York, NY: Wiley-Liss; 2009.</p>
                    <ol start="27">
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
                    <li>Lydiatt WM, Brandwein-Gensler MS, Kraus DH, Mukherji SK, Ridge JA, Shah JP. Mucosal melanoma of the head and neck. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Gale N, Blagus R, El-Mofty SK, et al. Evaluation of a new grading system for laryngeal squamous intraepithelial lesions--a proposed unified classification. <em>Histopathology. </em>2014;65(4):456-464.</li>
                    </ol>
                    <p>&nbsp;</p>
                    </div>
                  </div>
            @endif
		</div>
        </div>

      <div style="margin-top: 100px;" class="container">
      <br/><br/>
      <hr><hr>
        <div class="row">
                <button type="button"  class="btn btn-primary btn-block" onclick="Export2Doc('exportContent', 'LARYNX (SUPRAGLOTTIS, GLOTTIS, SUBGLOTTIS)');">Export as .doc</button>
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

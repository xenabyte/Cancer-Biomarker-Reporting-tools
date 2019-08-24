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
<title>HEAD AND NECK || LIP AND ORAL CAVITY: </title>

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
              <h2 class="title">LIP AND ORAL CAVITY:</h2>
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
			    <h6 class="heading-title">LIP AND ORAL CAVITY:</h6>
			</div>
		</div>
        <div class="col-md-12">
            @if($procedure_excision != '' || $procedure_glo != '' || $procedure_bmr != '' || $procedure_mmy != '' || $procedure_mxy != '' || $procedure_palatectomy != ''  || $procedure_neck_desection != '' || $procedure_other != '' || $procedure_not_specified != '' )
                <p><strong>Procedure:</strong><span>
                @if($procedure_other != '') {{ $procedure_other }} ({{ $procedure_other_specify }}) @endif
                @if($procedure_neck_desection != '') {{ $procedure_neck_desection }} ({{ $procedure_neck_desection_specify }}) @endif
                @if($procedure_bmr != '') {{ $procedure_bmr }} ({{ $procedure_bmr_specify }}) @endif
                @if($procedure_glo != '') {{ $procedure_glo }} ({{ $procedure_glo_specify }}) @endif
                @if($procedure_mmy != '') {{ $procedure_mmy }} ({{ $procedure_mmy_specify }}) @endif
                @if($procedure_mxy != '') {{ $procedure_mxy }} ({{ $procedure_mxy_specify }}) @endif
                @if($procedure_palatectomy != '') {{ $procedure_palatectomy }}  @endif
                @if($procedure_excision != '') {{ $procedure_excision }}  @endif
                @if($procedure_not_specified != '') {{ $procedure_not_specified }}  @endif
                </span></p>
            @endif
            @if($tumorsite_lp != '' || $tumorsite_ol != '' || $tumorsite_ns != '' || $tumorsite_ot != '')
                <p><strong>Tumor Site:</strong><span>
                @if($tumorsite_lp != '') {{ $tumorsite_lp }}
                    @if($tumorsite_lp_ul != '') ({{ $tumorsite_lp_ul }}), @endif
                    @if($tumorsite_lp_ll != '') ({{ $tumorsite_lp_ll }}), @endif
                @endif
                @if($tumorsite_ol != '') {{ $tumorsite_ol }}
                    @if($tumorsite_ol_lbt != '') ({{ $tumorsite_ol_lbt }}), @endif
                    @if($tumorsite_ol_vst != '') ({{ $tumorsite_ol_vst }}), @endif
                    @if($tumorsite_ol_dst != '') ({{ $tumorsite_ol_dst }}), @endif
                    @if($tumorsite_ol_att != '') ({{ $tumorsite_ol_att }}), @endif
                    @if($tumorsite_ol_upg != '') ({{ $tumorsite_ol_upg }}), @endif
                    @if($tumorsite_ol_lwg != '') ({{ $tumorsite_ol_lwg }}), @endif
                    @if($tumorsite_ol_ptc != '') ({{ $tumorsite_ol_ptc }}), @endif
                    @if($tumorsite_ol_afm != '') ({{ $tumorsite_ol_afm }}), @endif
                    @if($tumorsite_ol_frm != '') ({{ $tumorsite_ol_frm }}), @endif
                    @if($tumorsite_ol_hdp != '') ({{ $tumorsite_ol_hdp }}), @endif
                    @if($tumorsite_ol_bcm != '') ({{ $tumorsite_ol_bcm }}), @endif
                    @if($tumorsite_ol_vmm != '') ({{ $tumorsite_ol_vmm }}), @endif
                    @if($tumorsite_ol_vmr != '') ({{ $tumorsite_ol_vmr }}), @endif
                    @if($tumorsite_ol_apm != '') ({{ $tumorsite_ol_apm }}), @endif
                    @if($tumorsite_ol_apr != '') ({{ $tumorsite_ol_apr }}), @endif
                    @if($tumorsite_ol_rla != '') ({{ $tumorsite_ol_rla }}), @endif
                @endif
                @if($tumorsite_ns != '') {{ $tumorsite_ns }}  @endif
                @if($tumorsite_ot != '') {{ $tumorsite_ot }}
                    @if($tumorsite_ot_specify != '') ({{ $tumorsite_ot_specify }}), @endif
                @endif
                </span></p>
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
            @if($tumordepth != '')
                <p><strong>Tumor Depth of Invasion (DOI) (millimeters):</strong><span> {{ $tumordepth }} mm </span></p>
            @endif
            @if($histologic != '')
                <p><strong>Histologic Type:</strong><span>
                <p><strong><u>Squamous Cell Carcinoma and Variants</u></strong></p>
                @if($histologic_sc_sc != '') {{ $histologic_sc_sc }}, @endif
                @if($histologic_sc_as != '') {{ $histologic_sc_as }}, @endif
                @if($histologic_sc_ac != '') {{ $histologic_sc_ac }}, @endif
                @if($histologic_sc_bs != '') {{ $histologic_sc_bs }}, @endif
                @if($histologic_sc_cc != '') {{ $histologic_sc_cc }}, @endif
                @if($histologic_sc_ps != '') {{ $histologic_sc_ps }}, @endif
                @if($histologic_sc_ca != '') {{ $histologic_sc_ca }}, @endif
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
            @if($tumor_bed != '')
                <p><strong>Tumor Bed Margin Orientation: </strong><span> {{ $tumor_bed }} </span></p>
            @endif
            @if($icm_tumorbed != '')
                <p><strong>Tumor Bed (Separately Submitted) Margins:</strong><span>
                @if($icm_tumorbed == 'Uninvolved by invasive tumor') {{ $icm }}
                    @if($icm_tumorbed_location_specify != '') (Specify distance to true margin surface (millimeters): {{ $icm_location_specify }}) @endif
                @elseif($icm == "Involved by invasive tumor")
                    @if($icm_tumorbed_involve_distance_specify != '') (Specify margin(s), per part labeling: {{ $icm_involve_distance_specify }}) @endif
                @elseif($icm == "Uninvolved by high-grade dysplasia/in situ disease")
                    @if($icm_tumorbed_location_specify != '') (Specify distance to true margin surface (millimeters): {{ $icm_location_specify }}) @endif
                @elseif($icm == "Involved by high-grade dysplasia/in situ disease")
                    @if($icm_tumorbed_involve_distance_specify != '') (Specify margin(s), per orientation: {{ $icm_involve_distance_specify }}) @endif
                @else
                    {{ $icm }}
                @endif
            </span></p>
            @endif
            @if($lymphovascular_invasion != '')
                <p><strong>Lymphovascular Invasion:</strong> {{ $lymphovascular_invasion }} <span></span></p>
            @endif
            @if($perineural_invasion != '')
                <p><strong>Perineural Invasion:</strong> {{ $perineural_invasion }} <span></span></p>
            @endif
            @if($wpoi != '')
                <p><strong>Worst Pattern of Invasion (WPOI):</strong> {{ $wpoi }} <span></span></p>
            @endif
            @if($ln != '')
                <p><strong>Regional Lymph Nodes:</strong><span> {{ $ln }} </span></p>
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
                <p><strong>Laterality of Lymph Nodes Involved:</strong><span> {{ $ln_leterality }} </span></p>
            @endif
            @if($ln_deposit != '')
                <p><strong>Size of Largest Metastatic Deposit (centimeters):</strong><span> {{ $ln_deposit }}cm </span></p>
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
            @if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != '' || $primary_tumor != '' || $distance_metastasis != '' || $primary_m_tumor != '' || $distance_metastasis_m != '')<p><strong>Pathologic Stage Classification (pTNM, AJCC 8th Edition)</strong> <br/><i>Note: Reporting of pT, pN, and (when applicable) pM categories is based on information available to the pathologist at the time the report is issued. Only the applicable T, N, or M category is required for reporting; their definitions need not be included in the report. The categories (with modifiers when applicable) can be listed on 1 line or more than 1 line. Assignment of Pathologic Prognostic Stage Group is the responsibility of the managing physician and not the pathologist.</i></p>@endif
            @if($tnm_descriptors_m != '' || $tnm_descriptors_r != '' || $tnm_descriptors_y != '')<p><strong>TNM Descriptors: </strong><span>
            @if($tnm_descriptors_m != '') {{ $tnm_descriptors_m }}, @endif
            @if($tnm_descriptors_r != '') {{ $tnm_descriptors_r }}, @endif
            @if($tnm_descriptors_y != '') {{ $tnm_descriptors_y }}, @endif
            @endif
            </span></p>
            @if($primary_tumor != '' || $primary_m_tumor != '')
            <p><strong>For All Carcinomas</strong></p>
            @endif
            @if($primary_tumor != '')<p><strong>Primary Tumor: </strong><span> {{ $primary_tumor }} </span></p>@endif
            @if($distance_metastasis != '')<p><strong>Distance Metastasis: </strong><span> @if($distance_metastasis == 'pM1:  Distant metastasis') {{ $distance_metastasis}} @if($distance_metastasis_site != '') Specify site: {{ $distance_metastasis_site }} @endif @else {{ $distance_metastasis }} @endif </span></p>@endif
            @if($rln != '')<p><strong>Regional Lymph Nodes (pN) : </strong><span> {{ $rln }} </span></p>@endif
            @if($primary_tumor != '' || $primary_m_tumor != '')
            <p><strong>For Mucosal Melanoma</strong></p>
            @endif
            @if($primary_m_tumor != '')<p><strong>Primary Tumor: </strong><span> {{ $primary_m_tumor }} </span></p>@endif
            @if($rln_m != '')<p><strong>Regional Lymph Nodes (pN) : </strong><span> {{ $rln_m }} </span></p>@endif
            @if($distance_metastasis_m != '')<p><strong>Distance Metastasis: </strong><span> @if($distance_metastasis_m == 'pM1:  Distant metastasis') {{ $distance_metastasis}} @if($distance_metastasis_site_m != '') Specify site: {{ $distance_metastasis_site }} @endif @else {{ $distance_metastasis_m }} @endif </span></p>@endif
            @if($findings_ni != '' || $findings_sy != '' || $findings_sa != '' || $findings_ss != '' || $findings_mi != '' || $findings_mo != '' || $findings_sv != '' || $findings_ep != '' || $findings_cf != '' || $findings_if != '' || $findings_cb != '' || $findings_ot != '' )
                <p><strong>Additional Pathologic Findings:</strong><span>
                @if($findings_ni != '') {{ $findings_ni }}, @endif
                @if($findings_sy != '') {{ $findings_sy }}, @endif
                @if($findings_sa != '') {{ $findings_sa }}, @endif
                @if($findings_ss != '') {{ $findings_ss }}, @endif
                @if($findings_mi != '') {{ $findings_mi }}, @endif
                @if($findings_mo != '') {{ $findings_mo }}, @endif
                @if($findings_sv != '') {{ $findings_sv }}, @endif
                @if($findings_ep != '') {{ $findings_ep }}, @endif
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
                    <h4 class="modal-title" id="myModalLabel">A.  Anatomic Sites and Subsites for Lip and Oral Cavity</h4>
                    <ol>
                    <li>
                    <h3>Lip</h3>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mucosa of upper and lower lips</p>
                    <h3>Oral Cavity</h3>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Buccal mucosa</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cheek mucosa</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Retromolar areas</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bucco-alveolar sulci, upper and lower (vestibule of mouth)</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Upper alveolus and gingiva (upper gum)</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lower alveolus and gingiva (lower gum)</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hard palate</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tongue</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dorsal surface and lateral borders anterior to circumvallate papillae <br /> (anterior two-thirds)</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inferior (ventral) surface</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Floor of mouth</p>
                    <p>&nbsp;</p>
                    <p>The protocol applies to all carcinomas arising at these sites.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Mucosal Lip</strong>. The mucosal lip begins at the junction of the vermilion border with the skin and includes only the vermilion surface or that portion of the lip that comes in contact with the opposing lip. It is well defined into an upper and lower lip joined at the commissures of the mouth. For staging purposes, tumors of the dry vermillion lip and commissure are now grouped with cutaneous sites given their shared pathogenesis and similar embryologic origin of these subsites to skin; only mucosal sites are covered by this protocol.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Buccal Mucosa (Inner Cheek)</strong>. This includes all the membrane lining of the inner surface of the cheeks and lips from the line of contact of the opposing lips to the line of attachment of mucosa of the alveolar ridge (upper and lower) and pterygomandibular raphe.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Lower Alveolar Ridge</strong>. This refers to the mucosa overlying the alveolar process of the mandible, which extends from the line of attachment of mucosa in the buccal gutter to the line of free mucosa of the floor of the mouth. Posteriorly it extends to the ascending ramus of the mandible.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Upper Alveolar Ridge</strong>. This refers to the mucosa overlying the alveolar process of the maxilla, which extends from the line of attachment of mucosa in the upper gingival buccal gutter to the junction of the hard palate. Its posterior margin is the upper end of the pterygopalatine arch.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Retromolar Gingiva (Retromolar Trigone).</strong> This is the attached mucosa overlying the ascending ramus of the mandible from the level of the posterior surface of the last molar tooth and the apex superiorly, adjacent to the tuberosity of the maxilla.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Floor of the Mouth.</strong> This is a semilunar space over the myelohyoid and hypoglossus muscles, extending from the inner surface of the lower alveolar ridge to the undersurface of the tongue. Its posterior boundary is the base of the anterior pillar of the tonsil. It is divided into 2 sides of the submaxillary and sublingual salivary glands.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Hard Palate.</strong> This is the semilunar area between the upper alveolar ridge and the mucous membrane covering the palatine process of the maxillary palatine bones. It extends from the inner surface of the superior alveolar ridge to the posterior edge of the palatine bone.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Anterior Two-Thirds of the Tongue (Oral Tongue). </strong>This is the freely mobile portion of the tongue that extends anteriorly from the line of circumvallate papillae to the undersurface of the tongue at the junction of the floor of the mouth. It is composed of 4 areas: the tip, the lateral borders, the dorsum, and the undersurface (nonvillous ventral surface of the tongue). The undersurface of the tongue is considered a separate category by the WHO.</p>
                    <p><img src="reporting_images/loc1.png" class="img-responsive" /></p>
                    <p><img src="reporting_images/loc2.png" class="img-responsive" /></p>
                    <strong>Figure 1. </strong>Diagrams illustrating the oral cavity anatomic subsites. Figure courtesy of Beth Israel Medical Center, St. Luke&rsquo;s and Roosevelt Hospitals, New York.</li>
                    </ol>

                    <h4 class="modal-title" id="myModalLabel">B.  Tumor Thickness/Depth of Invasion</h4>
                    <ol>
                    <li>
                    <p>The microscopic measurement of tumor thickness or depth of invasion (DOI) has long been considered a valuable parameter for predicting regional nodal involvement and survival in oral cavity squamous cell carcinoma.<a href="#_ENREF_2"><sup>2</sup></a><sup>,</sup><a href="#_ENREF_3"><sup>3</sup></a>&nbsp; Proper gross techniques (avoidance of tangential cuts and serial sectioning of the lesion at 2-3 mm intervals) will facilitate subsequent microscopic assessment. While thickness and DOI are often regarded as synonymous, they have slight differences.<a href="#_ENREF_3"><sup>3</sup></a> Thickness is usually measured from the mucosal surface of the tumor to the deepest point of tissue invasion in a perpendicular fashion with an optical micrometer or transparent ruler overlaid on the slide, while DOI is measured from the basement membrane of adjacent normal to the deepest point of invasion of the tumor. AJCC 8<sup>th</sup> edition now uses DOI for staging<a href="#_ENREF_4"><sup>4</sup></a> and a standard approach is outlined in Figure 2, A and B.&nbsp;</p>
                    <p><img src="reporting_images/loc3.png" class="img-responsive" /></p>

                    <h3>&nbsp;</h3>
                    <p><strong>Figure 2, A.</strong> Depth of invasion (DOI). The horizon is established at the level of the basement membrane relative to the closest intact squamous mucosa. The greatest DOI is measured by dropping a &ldquo;plumb line&rdquo; from the horizon. From <em>AJCC Cancer Staging Manual.</em> 8th ed. New York: Springer; 2017. &copy; American Joint Committee on Cancer. Reproduced with permission.</p>

                    <p><img src="reporting_images/loc4.png" class="img-responsive" /></p>
                    <h3><strong>Figure 2, B.</strong> Depth of invasion (DOI) in an ulcerated carcinoma. Notice how &ldquo;tumor thickness&rdquo; would be deceptively thinner than DOI. From <em>AJCC Cancer Staging Manual</em>. 8th ed. New York: Springer; 2017.&nbsp; &copy; American Joint Committee on Cancer. Reproduced with permission. </h3>
                    </li>

                    <h4 class="modal-title" id="myModalLabel">C.  Histologic Type</h4>

                    <ol>
                    <li>
                    <p>A modification of the WHO classification of carcinomas of the oral cavity including the lip is shown below.<a href="#_ENREF_5"><sup>5</sup></a> This list may not be complete. This protocol applies only to carcinomas and melanomas but does not apply to lymphomas or sarcomas.</p>
                    <p>&nbsp;</p>
                    <h2>Carcinomas of the Oral Cavity</h2>
                    <p>Squamous cell carcinoma, conventional</p>
                    <p>Acantholytic squamous cell carcinoma</p>
                    <p>Adenosquamous carcinoma</p>
                    <p>Basaloid squamous cell carcinoma</p>
                    <p>Carcinoma cuniculatum</p>
                    <p>Papillary squamous cell carcinoma</p>
                    <p>Spindle cell squamous cell carcinoma</p>
                    <p>Verrucous squamous cell carcinoma</p>
                    <p>Lymphoepithelial carcinoma&nbsp;</p>
                    <p>&nbsp;</p>
                    <h3><strong>Carcinomas of Minor Salivary Glands </strong></h3>
                    <p>Mucoepidermoid carcinoma</p>
                    <p>Adenoid cystic carcinoma</p>
                    <p>Acinic cell carcinoma</p>
                    <p>Polymorphous adenocarcinoma</p>
                    <p>(Mammary analogue) secretory carcinoma</p>
                    <p>Salivary duct carcinoma</p>
                    <p>Carcinoma ex pleomorphic adenoma</p>
                    <p>Epithelial-myoepithelial carcinoma</p>
                    <p>(Hyalinizing) clear cell carcinoma</p>
                    <p>Adenocarcinoma, not otherwise specified</p>
                    <p>Basal cell adenocarcinoma</p>
                    <p>Carcinosarcoma</p>
                    <p>Intraductal carcinoma</p>
                    <p>Myoepithelial carcinoma</p>
                    <p>Oncocytic carcinoma</p>
                    <p><strong>Neuroendocrine Carcinoma</strong></p>
                    <p>Well-differentiated neuroendocrine carcinoma (typical carcinoid tumor)</p>
                    <p>Moderately differentiated neuroendocrine carcinoma (atypical carcinoid tumor)</p>
                    <p>Poorly differentiated neuroendocrine carcinoma, small cell type</p>
                    <p>Poorly differentiated neuroendocrine carcinoma, large cell type</p>
                    <p>Combined (or composite) neuroendocrine carcinoma (specify types)</p>
                    <p>&nbsp;</p>
                    <p><strong>Mucosal Melanoma</strong></p>
                    </li>
                    </ol>

                    <h4 class="modal-title" id="myModalLabel">D. Histologic Grade</h4>
                    <ol>
                    <li>
                    <p>For histologic types of carcinomas that are amenable to grading, 3 histologic grades are suggested, as shown below. For conventional squamous cell carcinoma, histologic grading as a whole does not perform well as a prognosticator.<a href="#_ENREF_6"><sup>6</sup></a> Nonetheless, it should be recorded when applicable, as it is a basic tumor characteristic. Selecting either the most prevalent grade or the highest grade for this synoptic protocol is acceptable. Variants of squamous cell carcinoma (ie, verrucous, basaloid, etc) have an intrinsic biologic potential and currently do not appear to require grading.</p>
                    <p>&nbsp;</p>
                    <p>Grade 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Well differentiated</p>
                    <p>Grade 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Moderately differentiated</p>
                    <p>Grade 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Poorly differentiated</p>
                    <p>Grade X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cannot be assessed</p>
                    <p>&nbsp;</p>
                    <p>The histologic (microscopic) grading of salivary gland carcinomas has been shown to be an independent predictor of behavior and plays a role in optimizing therapy. Further, there is often a positive correlation between histologic grade and clinical stage.<a href="#_ENREF_7"><sup>7-10</sup></a> However, most salivary gland carcinoma types have an intrinsic biologic behavior, and attempted application of a universal grading scheme is merely a crude surrogate.<a href="#_ENREF_9"><sup>9</sup></a> Thus, a generic grading scheme is no longer recommended for salivary gland carcinomas.<a href="#_ENREF_11"><sup>11</sup></a> Carcinoma types for which grading systems exist and are relevant are incorporated into histologic type. The 3 major categories that are amenable to grading include adenoid cystic carcinoma, mucoepidermoid carcinoma, and adenocarcinoma, not otherwise specified.<a href="#_ENREF_8"><sup>8</sup></a><sup>,</sup><a href="#_ENREF_9"><sup>9</sup></a><sup>,</sup><a href="#_ENREF_12"><sup>12</sup></a></p>
                    <p>&nbsp;</p>
                    <p>In some carcinomas, histologic grading may be based on growth pattern, such as in adenoid cystic carcinoma, for which a histologic high-grade variant has been recognized based on the percentage of solid growth.<a href="#_ENREF_12"><sup>12</sup></a> Those adenoid cystic carcinomas showing 30% or greater of solid growth pattern are considered to be histologically high-grade carcinomas. The histologic grading of mucoepidermoid carcinoma includes a combination of growth pattern characteristics (eg, cystic, solid, neurotropism) and cytomorphologic findings (eg, anaplasia, mitoses, necrosis).<a href="#_ENREF_13"><sup>13-15</sup></a> Adenocarcinomas, not otherwise specified, do not have a formalized grading scheme and are graded intuitively based on cytomorphologic features.<a href="#_ENREF_9"><sup>9</sup></a> Polymorphous adenocarcinomas are to be graded as per current WHO recommendations, though these are also graded intuitively as there are no listed criteria.</p>
                    <p>&nbsp;</p>
                    <p>Carcinoma ex pleomorphic adenoma is subclassified by histologic type and or grade and extent of invasion, the latter including minimally invasive, widely invasive, and intracapsular (noninvasive) cancers.&nbsp; Previously the cut-off for minimal invasion was designated as 1.5 mm; however, more recent studies have shown a favorable prognosis even with cut-offs of 4 mm to 6 mm.<a href="#_ENREF_16"><sup>16</sup></a> Thus there is no agreement on an optimal cut-off.&nbsp; However, from a practical standpoint, the terms <em>intracapsular</em> and <em>minimally invasive</em> should only be applied to uninodular tumors (as opposed to carcinomas arising in multinodular recurrent pleomorphic adenomas) with a well-delineated interface for which the entire lesional border has been microscopically evaluated.&nbsp; Prognosis has been linked to degree of invasion, with noninvasive and minimally invasive cancers apparently having a better prognosis than invasive cancers.<a href="#_ENREF_9"><sup>9</sup></a><sup>,</sup><a href="#_ENREF_16"><sup>16</sup></a><sup>,</sup><a href="#_ENREF_17"><sup>17</sup></a></p>
                    </li>
                    </ol>

                    <h4 class="modal-title" id="myModalLabel">E. Surgical Margins</h4>
                    <ol>
                    <li>
                    <p>The definition of a positive margin is somewhat controversial given the varied results from prior studies.<a href="#_ENREF_18"><sup>18</sup></a><sup>,</sup><a href="#_ENREF_19"><sup>19</sup></a> However, overall, several studies support the definition of a positive margin to be invasive carcinoma <em>or</em> carcinoma in situ/high-grade dysplasia present at margins (microscopic cut-through of tumor).<a href="#_ENREF_20"><sup>20</sup></a> Furthermore, reporting of surgical margins should also include information regarding the distance of invasive carcinoma, carcinoma in situ, or high-grade dysplasia (moderate to severe) from the surgical margin. Tumors with &ldquo;close&rdquo; margins also carry an increased risk for local recurrence.<a href="#_ENREF_19"><sup>19</sup></a><sup>,</sup><a href="#_ENREF_20"><sup>20</sup></a> The definition of a &ldquo;close&rdquo; margin is not standardized as the effective cut-off varies between studies and between anatomic subsites. Commonly used cut points to define close margins are 5 mm in general and 2 mm with respect to glottic larynx.<a href="#_ENREF_19"><sup>19</sup></a> However, values ranging from 3 mm to 7 mm have been used with success,<a href="#_ENREF_19"><sup>19</sup></a><sup>,</sup><a href="#_ENREF_21"><sup>21</sup></a> and for glottic tumors as low as 1 mm.<a href="#_ENREF_22"><sup>22</sup></a> Thus, distance of tumor from the nearest margin should be recorded.&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>Regarding what actually represents the relevant margin status, it becomes increasingly clear that margins obtained from the main resection specimen are of more reliable prognostic value.<a href="#_ENREF_23"><sup>23-26</sup></a> The clinical value of tumor bed margins (ie, margins taken separately) is often undermined by their uncertain origin with respect to the main resection,<a href="#_ENREF_27"><sup>27</sup></a> infrequent orientation as to the new margin surface, and fragmentation. Biopsies of tumor bed (or tumor bed margins) have low sensitivity for detecting a positive margin from the actual resection specimen and, by definition, cannot identify &ldquo;close&rdquo; resection specimen margins. It is then justifiable to report the specimen margin status separately from the tumor bed margin status (see below). Of note, these findings have also been reported in other anatomic sites.<a href="#_ENREF_24"><sup>24</sup></a><sup>,</sup><a href="#_ENREF_28"><sup>28-30</sup></a></p>
                    <p>&nbsp;</p>
                    <p>Nonetheless, tumor bed margin status is still utilized in various practice settings for patient management.<a href="#_ENREF_31"><sup>31</sup></a><sup>,</sup><a href="#_ENREF_32"><sup>32</sup></a> However, the challenge for pathologists is to arrive at a &ldquo;final&rdquo; margin status, integrating both tumor bed and specimen margin status. As it is in multi-part resections, the pathologist&rsquo;s ability to confidently establish the relationship between the main resected specimen and additional, separately submitted parts and to assess the adequacy of excision is compromised.&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>To optimize reporting, both specimen margin and tumor bed margin status should thus be reported separately.&nbsp; The &ldquo;final&rdquo; margin status then becomes a multidisciplinary integration of these findings. For instance, in cases with differing margin statuses (ie, resection specimen margin positive, corresponding tumor bed margin negative), the small size and lack of orientation of the tumor bed margin may preclude a reliable conversion to final negative margin. Conversely, in some cases the tumor bed specimen (eg, revision of margin) may be a reliable indicator of a true final margin. This is a judgment call that requires close interaction between the surgeon and pathologist, but, generally, the following basic requirements are met: (1) tumor bed margins are quite large (ie, thick enough to be readily processed as radial margins and large enough to match the corresponding aspect of the main specimen margin); (2) are oriented as to the new true margin surface (by ink or stitch); (3) the physical relationship between the main resection specimen and additional tumor bed margins is confirmed by pathologist and surgeon (usually through unequivocal labeling, and even fitting the tumor bed margin to the main specimen).&nbsp; In such a case, the tumor bed margin could be considered a final margin.</p>
                    <p>&nbsp;</p>
                    <p>Reporting of surgical margins for carcinomas of the minor salivary glands should follow those used for squamous cell carcinoma of oral cavity.</p>
                    <p>&nbsp;</p>
                    <p><strong>Dysplasia</strong></p>
                    <p>The types of intraepithelial dysplasia of the upper aerodigestive tract (UADT) include nonkeratinizing (&ldquo;classic&rdquo;) dysplasia and keratinizing dysplasia. Of the 2 types of dysplasias, the keratinizing dysplasias are significantly more common than the nonkeratinizing dysplasias. Unlike laryngeal dysplasia, a 3-tier system for oral dysplasia is retained (see also note O).<a href="#_ENREF_33"><sup>33</sup></a> Generally, mild dysplasia at a margin is considered low risk and negative, while severe dysplasia at margin is considered high risk and positive. Moderate dysplasia at margin is implies an intermediate risk and is reported as positive.</p>
                    <p><strong>&nbsp;</strong></p>
                    <h2>Orientation of Specimen</h2>
                    <p>Complex specimens should be examined and oriented with the assistance of the operating surgeon(s). Direct communication between the surgeon and pathologist is a critical component in specimen orientation and proper sectioning. Whenever possible, the tissue examination request form should include a drawing or photograph of the resected specimen showing the extent of the tumor and its relation to the anatomic structures of the region. The lines and extent of the resection can be depicted on preprinted adhesive labels and attached to the surgical pathology request forms.</p>
                    </li>
                    </ol>


                    <h4 class="modal-title" id="myModalLabel">F. Perineural Invasion</h4>
                    <ol>
                    <li>
                    <p>Traditionally, the presence of perineural invasion (neurotropism) is an important predictor of poor prognosis in head and neck cancer of virtually all sites.<a href="#_ENREF_34"><sup>34</sup></a> The presence of perineural invasion (neurotropism) in the primary cancer is associated with poor local disease control and regional control, as well as being associated with metastasis to regional lymph nodes.<a href="#_ENREF_34"><sup>34</sup></a> Further, perineural invasion is associated with decrease in disease-specific survival and overall survival.<a href="#_ENREF_34"><sup>34</sup></a> There is conflicting data relative to an association between the presence of perineural invasion and the development of distant metastasis, with some studies showing an increased association with distant metastasis, while other studies showing no correlation with distant metastasis.<a href="#_ENREF_34"><sup>34</sup></a> The relationship between perineural invasion and prognosis is independent of nerve diameter.<a href="#_ENREF_35"><sup>35</sup></a> Additionally, emerging evidence suggests that extratumoral perineural invasion may be more prognostically relevant.<a href="#_ENREF_23"><sup>23</sup></a> Although perineural invasion of small unnamed nerves may not produce clinical symptoms, the reporting of perineural invasion includes nerves of all sizes including small peripheral nerves (ie, less than 1 mm in diameter). Aside from the impact on prognosis, the presence of perineural invasion also guides therapy. Concurrent adjuvant chemoradiation therapy has been shown to improve outcomes in patients with perineural invasion (as well as in patients with extranodal extension and bone invasion).<a href="#_ENREF_36"><sup>36</sup></a><sup>,</sup><a href="#_ENREF_37"><sup>37</sup></a> Given the significance relative to prognosis and treatment, perineural invasion is a required data element in the reporting of head and neck cancers. Extent of perineural invasion is an emerging element, and features such as extratumoral extent are suggested for reporting.</p>
                    </li>
                    </ol>

                    <h4 class="modal-title" id="myModalLabel">H. Regional Lymph Nodes </h4>
                    <ol>
                    <li>
                    <h2>Measurement of Tumor Metastasis</h2>
                    <p>The cross-sectional diameter of the largest lymph node metastasis (not the lymph node itself) is measured in the gross specimen at the time of macroscopic examination or, if necessary, on the histologic slide at the time of microscopic examination.<a href="#_ENREF_34"><sup>34</sup></a><sup>,</sup><a href="#_ENREF_45"><sup>4</sup></a><sup>1</sup></p>
                    <p>&nbsp;</p>
                    <p><strong>Special Procedures for Lymph Nodes</strong></p>
                    <p>At the current time, no additional special techniques are required other than routine histology for the assessment of nodal metastases. Immunohistochemistry and polymerase chain reaction (PCR) to detect isolated tumor cells are considered investigational techniques at this time.</p>
                    <p>&nbsp;</p>
                    <h2>Lymph Node Number</h2>
                    <p>For assessment of pN, a selective neck dissection will ordinarily include 10 or more lymph nodes, and a comprehensive neck dissection (radical or modified radical neck dissection) will ordinarily include 15 or more lymph nodes. In oral cavity, a minimal adequate dissection of 18 lymph nodes has been proposed but not yet validated.<sup>42</sup> Examination of fewer tumor-free nodes still mandates a pN0 designation.</p>
                    <h2>&nbsp;</h2>
                    <h2>Regional Lymph Nodes (pN0): Isolated Tumor Cells</h2>
                    <p>Isolated tumor cells (ITCs) are single cells or small clusters of cells not more than 0.2 mm in greatest dimension. While the generic recommendation is that for lymph nodes with ITCs found by either histologic examination, immunohistochemistry, or nonmorphologic techniques (eg, flow cytometry, DNA analysis, PCR amplification of a specific tumor marker), they should be classified as N0 or M0, respectively.<a href="#_ENREF_47"><sup>4</sup></a><sup>3,</sup><a href="#_ENREF_48"><sup>4</sup></a><sup>4</sup> Evidence for the validity of this practice in head and neck squamous cell carcinoma and other histologic subtypes is lacking. In fact, rare studies relevant to head and neck sites indicate that isolated tumor cells may actually be a poor prognosticator in terms of local control.<a href="#_ENREF_49"><sup>4</sup></a><sup>5</sup></p>
                    <p>&nbsp;</p>
                    <p>For purposes of pathologic evaluation, lymph nodes are organized by levels as shown in Figure 4.</p>
                    <h2>&nbsp;</h2>
                    <h2>Classification of Neck Dissection</h2>
                    <ol>
                    <li>Radical neck dissection</li>
                    <li>Modified radical neck dissection, internal jugular vein and/or sternocleidomastoid muscle spared</li>
                    <li>Selective neck dissection (SND), as specified by the surgeon (Figure 3), defined by dissection of less than the 5 traditional levels of a radical and modified radical neck dissection. The following dissections are now under this category<a href="#_ENREF_43"><sup>41,46,47</sup></a>:</li>
                    <li>Supraomohyoid neck dissection</li>
                    <li>Posterolateral neck dissection</li>
                    <li>Lateral neck dissection</li>
                    <li>Central compartment neck dissection</li>
                    <li>Superselective neck dissection (SSND), a relatively new term defined by dissection of the fibrofatty elements of 2 or less levels.<a href="#_ENREF_46"><sup>4</sup></a><sup>8</sup></li>
                    <li>Extended radical neck dissection, as specified by the surgeon</li>
                    </ol>
                    <p><img src="reporting_images/loc6.png" class="img-responsive" /></p>
                    <p><strong>Figure 4.</strong> The 6 sublevels of the neck for describing the location of lymph nodes within levels I, II, and V. Level IA, submental group; level IB, submandibular group; level IIA, upper jugular nodes along the carotid sheath, including the subdigastric group; level IIB, upper jugular nodes in the submuscular recess; level VA, spinal accessory nodes; and level VB, the supraclavicular and transverse cervical nodes. From: Flint PW, et al, eds. <em>Cummings Otolaryngology: Head and Neck Surgery.</em> 5th ed. Philadelphia, PA; Saunders: 2010. Reproduced with permission &copy;&nbsp;Elsevier.</p>
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
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Level VII. Superior Mediastinal Lymph Nodes</strong></p>
                    <p>Metastases at level VII are considered regional lymph node metastases; all other mediastinal lymph node metastases are considered distant metastases.</p>
                    <p>&nbsp;</p>
                    <p>Lymph node groups removed from areas not included in the above levels, eg, scalene, suboccipital, and retropharyngeal, should be identified and reported from all levels separately. Midline nodes are considered ipsilateral nodes.</p>
                    <p>&nbsp;</p>
                    <p><strong>Extranodal Extension </strong></p>
                    <p>The status of cervical lymph nodes is the single most important prognostic factor in aerodigestive cancer. All macroscopically negative or equivocal lymph nodes should be submitted in toto. Grossly positive nodes may be partially submitted for microscopic documentation of metastasis. Reporting of lymph nodes containing metastasis should include whether there is presence or absence of extranodal extension (ENE),<a href="#_ENREF_3"><sup>3</sup></a> which is now part of N staging. This finding consists of extension of metastatic tumor, present within the confines of the lymph node, through the lymph node capsule into the surrounding connective tissue, with or without associated stromal reaction. A distance of extension from the native lymph node capsule is now suggested (but not yet required) with the proposed stratification of ENE into ENE<sub>ma</sub> (&gt;2 mm) and ENE<sub>mi </sub>&nbsp;(&le;2 mm).<a href="#_ENREF_4"><sup>4</sup></a><sup>,</sup><a href="#_ENREF_50"><sup>42,49,50</sup></a> However, pitfalls in the measurement (ie, in larger, matted lymph nodes, in nodes post fine-needle aspiration, and in nodes with near total replacement of lymph node architecture) and the disposition of soft tissue deposits is still not resolved.&nbsp; In general, absence of ENE in a large (&gt;3 cm) lymph node, especially with traversing fibrous bands, should be viewed with skepticism. Soft tissue deposits for lymph node metastases based on limited studies appear to be the equivalent of a positive lymph node with ENE and should be recorded as such.<a href="#_ENREF_53"><sup>5</sup></a><sup>1</sup>&nbsp;</p>
                    </li>
                    </ol>

                    <h4 class="modal-title" id="myModalLabel">I. TNM and Stage Groupings</h4>
                    <ol>
                    <li>
                    <p>The protocol recommends the TNM staging system of the American Joint Committee on Cancer.<a href="#_ENREF_4"><sup>4</sup></a> The 2 key significant alterations in the 8<sup>th</sup> edition for lip and oral cavity are the incorporation of depth of invasion (DOI) into T stage and extranodal extension (ENE) into N stage.<a href="#_ENREF_4"><sup>4</sup></a><sup>,</sup> <sup>52</sup> In essence, DOI increases the T category by 1 for each 5 mm of tumor depth (until &ge;10 mm). Similarly, pathologic ENE(+) will increase the nodal category by 1.</p>
                    <p>&nbsp;</p>
                    <p>The 8<sup>th</sup> edition of the AJCC staging of head and neck cancers includes mucosal melanomas; this does not show significant changes from the 7<sup>th</sup> edition. Approximately two-thirds of mucosal melanomas arise in the sinonasal tract, one quarter are found in the oral cavity and the remainder occur only sporadically in other mucosal sites of the head and neck. Even small cancers behave aggressively with high rates of recurrence and death. To reflect this aggressive behavior, primary cancers limited to the mucosa are considered T3 lesions. Advanced mucosal melanomas are classified as T4a and T4b. The anatomic extent criteria to define <em>moderately advanced</em> (T4a) and <em>very advanced</em> (T4b) disease are given below. The AJCC staging for mucosal melanomas does not provide for the histologic definition of a T3 lesion; as the majority of mucosal melanomas are invasive at presentation, mucosal based melanomas (T3 lesions) include those lesions that involve either the epithelium and/or lamina propria of the involved site. Rare examples of in situ mucosal melanomas occur, but In situ mucosal melanomas are excluded from staging, as they are extremely rare.<sup>53</sup></p>
                    <p>&nbsp;</p>
                    <p>Carcinomas of minor salivary glands of the upper aerodigestive tract site, including the oral cavity, are staged according to schemes corresponding to the anatomic site of occurrence. There is no currently accepted staging for central (primary intraosseous) salivary gland tumors.</p>
                    <p>&nbsp;</p>
                    <p>By AJCC/UICC convention, the designation &ldquo;T&rdquo; refers to a primary tumor that has not been previously treated. The symbol &ldquo;p&rdquo; refers to the pathologic classification of the TNM, as opposed to the clinical classification, and based on clinical stage information supplemented/modified by operative findings and gross and microscopic evaluation of the resected specimens<a href="#_ENREF_1"><sup>1</sup></a>. pT entails a resection of the primary tumor or biopsy adequate to evaluate the highest pT category, pN entails removal of nodes adequate to validate lymph node metastasis, and pM implies microscopic examination of distant lesions. Clinical classification (cTNM) is usually carried out by the referring physician before treatment during initial evaluation of the patient or when pathologic classification is not possible.</p>
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
                    </li>
                    </ol>


                    <h4 class="modal-title" id="myModalLabel">J: Dysplasia of the Upper Aerodigestive Tract (UADT)</h4>

                    <ol>
                    <li>
                    <p>In contrast to the uterine cervix in which the nonkeratinizing (&ldquo;classic&rdquo;) form of epithelial dysplasia is most common, resulting in a reproducible and clinically useful grading scheme of mild, moderate, and severe dysplasia (ie, carcinoma in situ), the majority of the UADT mucosal lesions fall under the designation of keratinizing dysplasias, for which the aforementioned criteria are not as easily applied. Traditional assessment of dysplasia utilizes a &ldquo;rule of thirds&rdquo; approach, categorizing cytonuclear and architectural abnormalities confined to the basal one-third as mild dysplasia, mid one-third as moderate dysplasia, and upper one-third as severe dysplasia. The difficulty in applying this as the sole mechanism to assess keratinizing lesions is that there is frequent surface maturation, which may lead to downgrading a high-risk lesion with severe atypia restricted to the bottom third of the epithelium. In such instances, it is acceptable to deviate from this rule of thirds and upgrade a lesion as more biologically appropriate.</p>
                    <p>&nbsp;</p>
                    <p>While the current WHO has moved to a 2-tiered scheme for laryngeal dysplasia, oral dysplasia is still graded using 3 tiers, though a provisional 2-tier system is presented. Risk of progression for mild, moderate, and severe dysplasias in oral cavity are estimated at 6%, 18%, and 39%, respectively. <a href="#_ENREF_33"><sup>33</sup></a> </p>
                    </li>
                    </ol>

                    <h4 class="modal-title" id="myModalLabel">References</h4>

                    <ol>
                    <li>
                    <ol>
                    <li>Gress DM, Edge SB, Greene FL, et al. Principles of cancer staging. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Pentenero M, Navone R, Motta F, et al. Clinical features of microinvasive stage I oral carcinoma. <em>Oral Dis. </em>2011;17(3):298-303.</li>
                    <li>Ebrahimi A, Gil Z, Amit M. International Consortium for Outcome Research (ICOR) in Head and Neck Cancer. Primary tumor staging for oral cancer and a proposed modification incorporating depth of invasion: an international multicenter retrospective study. <em>JAMA Otolaryngol Head Neck Surg. </em>2014;140(12):1138-1148.</li>
                    <li>Ridge JA, Lydiatt WM, Patel SG, et al. Lip and oral cavity. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Takata T, Slootweg PJ. Tumors of the oral cavity and mobile tongue. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours.</em> 4th ed. Geneva, Switzerland: WHO Press; 2017:106-108.</li>
                    <li>Barnes L, Eveson JW, Reichart P, Sidransky D. WHO histological classification of tumours of the oral cavity and oropharynx. In: Barnes L, Eveson JW, Reichart P, Sidransky D, eds. <em>World Health Organization Classification of Tumours: Pathology and Genetics of Head and Neck Tumours</em>. Lyon: IARC; 2005:164.</li>
                    <li>Spiro RH, Thaler HT, Hicks WF, Kher UA, Huvos AH, Strong EW. The importance of clinical staging of minor salivary gland carcinoma. <em>Am J Surg. </em>1991;162(4):330-336.</li>
                    <li>Spiro RH, Huvos AG, Strong EW. Adenocarcinoma of salivary origin: clinicopathologic study of 204 patients. <em>Am J Surg. </em>1982;144(4):423-431.</li>
                    <li>Seethala RR. Histologic grading and prognostic biomarkers in salivary gland carcinomas. <em>Adv Anat Pathol. </em>2011;18(1):29-45.</li>
                    <li>Kane WJ, McCaffrey TV, Olsen KD, Lewis JE. Primary parotid malignancies: a clinical and pathologic review. <em>Arch Otolaryngol Head Neck Surg. </em>1991;117(3):307-315.</li>
                    <li>Lydiatt WM, Mukherji SK, O'Sullivan B, Patel SG, Shah JP. Major salivary glands. In: Amin MB, ed. <em>AJCC Cancer Staging Manual</em>. 8th ed. New York, NY: Springer; 2017.</li>
                    <li>Szanto PA, Luna MA, Tortoledo ME, White RA. Histologic grading of adenoid cystic carcinoma of the salivary glands. <em>Cancer. </em>1984;54(6):1062-1069.</li>
                    <li>Seethala RR, Dacic S, Cieply K, Kelly LM, Nikiforova MN. A reappraisal of the MECT1/MAML2 translocation in salivary mucoepidermoid carcinomas. <em>Am J Surg Pathol. </em>2010;34(8):1106-1121.</li>
                    <li>Brandwein MS, Ivanov K, Wallace DI, et al. Mucoepidermoid carcinoma: a clinicopathologic study of 80 patients with special reference to histological grading. <em>Am J Surg Pathol. </em>2001;25(7):835-845.</li>
                    <li>Auclair PL, Goode RK, Ellis GL. Mucoepidermoid carcinoma of intraoral salivary glands. Evaluation and application of grading criteria in 143 cases. <em>Cancer. </em>1992;69(8):2021-2030.</li>
                    <li>Williams MD, Ihrler S, Seethala RR. Carcinoma ex pleomorphic adenoma. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours.</em> 4th ed. Geneva, Switzerland: WHO Press; 2017:176-177.</li>
                    <li>Brandwein M, Huvos AG, Dardick I, Thomas MJ, Theise ND. Noninvasive and minimally invasive carcinoma ex mixed tumor: a clinicopathologic and ploidy study of 12 patients with major salivary tumors of low (or no?) malignant potential. <em>Oral Surg Oral Med Oral Pathol Oral Radiol Endod. </em>1996;81(6):655-664.</li>
                    <li>Brandwein-Gensler M, Teixeira MS, Lewis CM, et al. Oral squamous cell carcinoma: histologic risk assessment, but not margin status, is strongly predictive of local disease-free and overall survival. <em>Am J Surg Pathol. </em>2005;29(2):167-178.</li>
                    <li>Hinni ML, Ferlito A, Brandwein-Gensler MS, et al. Surgical margins in head and neck cancer: a contemporary review. <em>Head Neck. </em>2013;35(9):1362-1370.</li>
                    <li>Alicandri-Ciufelli M, Bonali M, Piccinini A, et al. Surgical margins in head and neck squamous cell carcinoma: what is 'close'? <em>Eur Arch Otorhinolaryngol. </em>2013;270(10):2603-2609.</li>
                    <li>Liao CT, Chang JT, Wang HM, et al. Analysis of risk factors of predictive local tumor control in oral cavity cancer. <em>Ann Surg Oncol. </em>2008;15(3):915-922.</li>
                    <li>Ansarin M, Santoro L, Cattaneo A, et al. Laser surgery for early glottic cancer: impact of margin status on local control and organ preservation. <em>Arch Otolaryngol Head Neck Surg. </em>2009;135(4):385-390.</li>
                    <li>Miller ME, Palla B, Chen Q, et al. A novel classification system for perineural invasion in noncutaneous head and neck squamous cell carcinoma: histologic subcategories and patient outcomes. <em>Am J Otolaryngol. </em>2012;33(2):212-215.</li>
                    <li>Chang AM, Kim SW, Duvvuri U, et al. Early squamous cell carcinoma of the oral tongue: comparing margins obtained from the glossectomy specimen to margins from the tumor bed. <em>Oral Oncol. </em>2013;49(11):1077-1082.</li>
                    <li>Varvares MA, Poti S, Kenyon B, Christopher K, Walker RJ. Surgical margins and primary site resection in achieving local control in oral cancer resections. <em>Laryngoscope. </em>2015;125(10):2298-2307.</li>
                    <li>Maxwell JH, Thompson LD, Brandwein-Gensler MS, et al. Early oral tongue squamous cell carcinoma: sampling of margins from tumor bed and worse local control. <em>JAMA Otolaryngol Head Neck Surg. </em>2015;141(12):1104-1110.</li>
                    <li>Kerawala CJ, Ong TK. Relocating the site of frozen sections--is there room for improvement? <em>Head Neck. </em>2001;23(3):230-232.</li>
                    <li>Hagemann IS, Lewis JS, Jr. A retrospective comparison of 2 methods of intraoperative margin evaluation during partial nephrectomy. <em>J Urol. </em>2009;181(2):500-505.</li>
                    <li>DiNardo LJ, Lin J, Karageorge LS, Powers CN. Accuracy, utility, and cost of frozen section margins in head and neck cancer surgery. <em>Laryngoscope. </em>2000;110(10 Pt 1):1773-1776.</li>
                    <li>Yahalom R, Dobriyan A, Vered M, Talmi YP, Teicher S, Bedrin L. A prospective study of surgical margin status in oral squamous cell carcinoma: a preliminary report. <em>J Surg Oncol. </em>2008;98(8):572-578.</li>
                    <li>Black C, Marotti J, Zarovnaya E, Paydarfar J. Critical evaluation of frozen section margins in head and neck cancer resections. <em>Cancer. </em>2006;107(12):2792-2800.</li>
                    <li>Meier JD, Oliver DA, Varvares MA. Surgical margin determination in head and neck oncology: current clinical practice. The results of an International American Head and Neck Society Member Survey. <em>Head Neck. </em>2005;27(11):952-958.</li>
                    <li>Reibel J, Gale N, Hille JJ, et al. Oral potentially malignant disorders and oral epithelial dysplasia. In: El-Naggar AK, Chan JKC, Grandis JR, Takata T, Slootweg PJ, eds. <em>WHO Classification of Head and Neck Tumours.</em> 4th ed. Geneva, Switzerland: WHO Press; 2017:112-115.</li>
                    <li>Smith BD, Haffty BG. Prognostic factoris in patients with head and neck cancer. In: Harrison LB, Sessions RB, Hong WK, eds. <em>Head and Neck Cancer: A Multidisciplinary Approach</em>. Philadelphia, PA: Lippincott Williams and Wilkins; 2009:51-75.</li>
                    <li>Fagan JJ, Collins B, Barnes L, D'Amico F, Myers EN, Johnson JT. Perineural invasion in squamous cell carcinoma of the head and neck. <em>Arch Otolaryngol Head Neck Surg. </em>1998;124(6):637-640.</li>
                    <li>Cooper JS, Pajak TF, Forastiere AA, et al. Postoperative concurrent radiotherapy and chemotherapy for high-risk squamous-cell carcinoma of the head and neck. <em>N Engl J Med. </em>2004;350(19):1937-1944.</li>
                    <li>Bernier J, Domenge C, Ozsahin M, et al. Postoperative irradiation with or without concomitant chemotherapy for locally advanced head and neck cancer. <em>N Engl J Med. </em>2004;350(19):1945-1952.</li>
                    <li>Brandwein-Gensler M, Smith RV, Wang B, et al. Validation of the histologic risk model in a new cohort of patients with head and neck squamous cell carcinoma. <em>Am J Surg Pathol. </em>2010;34(5):676-688.</li>
                    <li>Brandwein-Gensler M, Teixeira MS, Lewis CM, et al. Oral squamous cell carcinoma: histologic risk assessment, but not margin status, is strongly predictive of local disease-free and overall survival. <em>Am J Surg Pathol. </em>2005;29(2):167-178.</li>
                    </ol>
                    </li>
                    </ol>
                    </div>
                  </div>
            @endif
		</div>
        </div>

      <div style="margin-top: 100px;" class="container">
      <br/><br/>
      <hr><hr>
        <div class="row">
                <button type="button"  class="btn btn-primary btn-block" onclick="Export2Doc('exportContent', 'LIP AND ORAL CAVITY');">Export as .doc</button>
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

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
              <h2 class="title">LARYNX (SUPRAGLOTTIS, GLOTTIS, SUBGLOTTIS)</h2>
			  <br/>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
		<div Style="padding: 10px;" class="row">
			<div clas="col-md-12">
			<h1>Surgical Pathology Cancer Case Summary</h1>
			  <h4 class="heading-title">Protocol Posting Date: June 2017 </h4>
			  <h4 class="heading-title">LARYNX (SUPRAGLOTTIS, GLOTTIS, SUBGLOTTIS)</h4>
			  <p>Select a single response unless otherwise indicated.</p>
			</div>
		</div>
		<hr>

		 <form action="<?php echo e(route('lyx.preview')); ?>" method="POST">
		 <?php echo csrf_field(); ?>

         <div class="row">
          <div class="col-md-12">
            <div class="heading-line-bottom">
              <h4 class="heading-title">Procedure <code>*</code> </h4>
			</div>


            <div class="row">
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_excision" value="Excision" class="" notrequired> Excision
                </div>
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_endo_excision" value="Endolaryngeal excision " class="" notrequired> Endolaryngeal excision
                </div>
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_laser_excision" value="Transoral laser excision (glottis) " class="" notrequired> Transoral laser excision (glottis)
                </div>
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_supra_laryn" value="Supraglottic laryngectomy " class="" notrequired> Supraglottic laryngectomy
                </div>
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_coid_laryn" value="Supracricoid laryngectomy " class="" notrequired> Supracricoid laryngectomy
                </div>
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_total_laryn" value="Total laryngectomy " class="" notrequired> Total laryngectomy
                </div>
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_ver_hemi" value="Vertical hemilaryngectomy (specify side): " class="" notrequired> Vertical hemilaryngectomy <br/>
                    Specify side <input type="text" name="procedure_ver_hemi_specify" class="form-control" notrequired>
                </div>
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_par_laryn" value="Partial laryngectomy (specify type) " class="" notrequired> Partial laryngectomy <br/>
                    Specify side <input type="text" name="procedure_res_subman" class="form-control" notrequired>
                </div>
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_neck_desection" value="Neck (lymph node) dissection (specify): " class="" notrequired>  Neck (lymph node) dissection<br/>
                    Specify: <input type="text" name="procedure_neck_desection_specify" class="form-control" notrequired>
                </div>
                <div class="form-group col-md-4">
                 <input type="checkbox" name="procedure_other" value=" Other (specify): " class="" notrequired>  Other<br/>
                    Specify: <input type="text" name="procedure_other_specify" class="form-control" notrequired>
                </div>
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_not_specified" value="Not specified " class="" notrequired> Not specified
                </div>
		  </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Tumor Site <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-question-circle"></i></a></h4>
			</div>

            <!-- Modal -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">A.  Anatomic Sites and Subsites for the Larynx</h4>
                    </div>
                    <div class="modal-body">

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

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <input type="checkbox" name="tumorsite_ls" value="Larynx, supraglottis" class=""> Larynx, supraglottis
                    <div style="margin-left: 20px;">
                      <p><input type="checkbox" name="tumorsite_ls_ea"  value="Epiglottis, lingual aspect"> Epiglottis, lingual aspect</p>
                      <p><input type="checkbox" name="tumorsite_ls_el"  value="Epiglottis, laryngeal aspect"> Epiglottis, laryngeal aspect</p>
                      <p><input type="checkbox" name="tumorsite_ls_af"  value="Aryepiglottic folds"> Aryepiglottic folds</p>
                      <p><input type="checkbox" name="tumorsite_ls_ar"  value="Arytenoid(s)"> Arytenoid(s)</p>
                      <p><input type="checkbox" name="tumorsite_ls_fv"  value="False vocal cord"> False vocal cord</p>
                      <p><input type="checkbox" name="tumorsite_ls_vn"  value="Ventricle">Ventricle</p>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <input type="checkbox" name="tumorsite_lg" value="Larynx, glottis" class=""> Larynx, glottis
                    <div style="margin-left: 20px;">
                      <p><input type="checkbox" name="tumorsite_lg_vv"  value="True vocal cord"> True vocal cord</p>
                      <p><input type="checkbox" name="tumorsite_lg_ac"  value="Anterior commissure"> Anterior commissure</p>
                      <p><input type="checkbox" name="tumorsite_lg_pc"  value="Posterior commissure"> Posterior commissure</p>
                      <p><input type="checkbox" name="tumorsite_lg_se"  value="With subglottic extension"> With subglottic extension</p>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <input type="checkbox" name="tumorsite_gb" value="Larynx, subglottis" class=""> Larynx, subglottis
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <input type="checkbox" name="tumorsite_ns" value="Not specified" class=""> Not specified
                </div>
                <div class="form-group col-md-4">
                    <input type="checkbox" name="tumorsite_ot" value="Other (specify):" class=""> Other (specify): <br/>
                     <input type="text" name="tumorsite_ot_specify" class="form-control">
                </div>
            </div>
        </div>
	</div>

    <div class="heading-line-bottom">
        <h4 class="heading-title">Transglottic Extension </h4>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
          <input type="radio" name="transglottic_extension" value="Present"> Present
        </div>
        <div class="form-group col-md-4">
          <input type="radio" name="transglottic_extension" value="Not identified"> Not identified
        </div>
    </div>

    <div class="heading-line-bottom">
        <h4 class="heading-title">Tumor Laterality </h4>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <input type="radio" name="tumorliterality" value="Right" class=""> Right
        </div>
        <div class="form-group col-md-4">
            <input type="radio" name="tumorliterality" value="Left" class=""> Left
        </div>
        <div class="form-group col-md-4">
            <input type="radio" name="tumorliterality" value="Midline" class=""> Midline
        </div>
        <div class="form-group col-md-4">
            <input type="radio" name="tumorliterality" value=" Not specified" class=""> Not specified
        </div>
    </div>

    <div class="heading-line-bottom">
        <h4 class="heading-title">Tumor Focality </h4>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <input type="radio" name="tumorfocality" value="Unifocal" class=""> Unifocal
        </div>
        <div class="form-group col-md-4">
            <input type="radio" name="tumorfocality" value="Multifocal" class=""> Multifocal
        </div>
        <div class="form-group col-md-4">
            <input type="radio" name="tumorfocality" value="Cannot be determined" class=""> Cannot be determined
        </div>
    </div>

    <div class="heading-line-bottom">
        <h4 class="heading-title">Tumor Size </h4>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            Greatest dimension (centimeters): <input type="text" name="tumorsize_gd" class="form-control"><br/>
            <h5>Additional dimensions (centimeters):<h5>
            <div class="row">
                <div class="form-group col-md-2">
                    <input type="text" name="tumorsize_length" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <p style="padding: 10px;" class="text-center"> X </p>
                </div>
                <div class="form-group col-md-2">
                    <input type="text" name="tumorsize_width" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">
            Cannot be determined (explain): <input type="text" name="tumorsize_cd" class="form-control">
        </div>
    </div>

	<div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Histologic Type <a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-question-circle"></i></a><code>*</code> </h4>
			 </div>

			 <!-- Modal -->
              <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">B.  Histologic Type</h4>
                    </div>
                    <div class="modal-body">
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
					</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

			  <p><strong><u>Squamous Cell Carcinoma and Variants (select all that apply)</u></strong></p>

			  <div class="row">
                <div class="form-group col-md-4">
                  <input type="checkbox" name="histologic_sc_sc" value="Squamous cell carcinoma, conventional (keratinizing) " class="" notrequired> Squamous cell carcinoma, conventional (keratinizing)
                </div>
				 <div class="form-group col-md-4">
                  <input type="checkbox" name="histologic_sc_sn" value="Squamous cell carcinoma, nonkeratinizing" class=""> Squamous cell carcinoma, nonkeratinizing
                </div>
				<div class="form-group col-md-4">
                  <input type="checkbox" name="histologic_sc_as" value="Acantholytic squamous cell carcinoma" class=""> Acantholytic squamous cell carcinoma
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4">
                  <input type="checkbox" name="histologic_sc_ac" value="Adenosquamous carcinoma " class="" notrequired> Adenosquamous carcinoma
                </div>
				 <div class="form-group col-md-4">
                  <input type="checkbox" name="histologic_sc_bs" value="Basaloid squamous cell carcinoma" class=""> Basaloid squamous cell carcinoma
                </div>
				<div class="form-group col-md-4">
                  <input type="checkbox" name="histologic_sc_ps" value="Papillary squamous cell carcinoma" class=""> Papillary squamous cell carcinoma
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4">
                  <input type="checkbox" name="histologic_sc_cc" value="Spindle cell squamous cell carcinoma " class="" notrequired> Spindle cell squamous cell carcinoma
                </div>
				 <div class="form-group col-md-4">
                  <input type="checkbox" name="histologic_sc_vs" value="Verrucous squamous cell carcinoma" class=""> Verrucous squamous cell carcinoma
                </div>
				<div class="form-group col-md-4">
                  <input type="checkbox" name="histologic_sc_lc" value="Lymphoepithelial carcinoma " class=""> Lymphoepithelial carcinoma
                </div>
              </div>

              <p><strong><u>Carcinomas of Minor Salivary Glands</u></strong></p>

              <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Mucoepidermoid carcinoma, low grade " class="" notrequired> Mucoepidermoid carcinoma, low grade
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Mucoepidermoid carcinoma, intermediate grade" class=""> Mucoepidermoid carcinoma, intermediate grade
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Mucoepidermoid carcinoma, high grade " class=""> Mucoepidermoid carcinoma, high grade
                </div>
              </div>

              <div class="row">
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenoid cystic carcinoma, tubular pattern" class=""> Adenoid cystic carcinoma, tubular pattern# <br/>
                  Specify percentage of solid component(%):  <input type="text" name="histologic_cent" class="form-control">
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenoid cystic carcinoma, cribriform pattern" class=""> Adenoid cystic carcinoma, cribriform pattern# <br/>
                  Specify percentage of solid component(%):  <input type="text" name="histologic_cent" class="form-control">
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenoid cystic carcinoma, solid pattern" class=""> Adenoid cystic carcinoma, solid pattern# <br/>
                  Specify percentage of solid component(%):  <input type="text" name="histologic_cent" class="form-control">
                </div>
              </div>

              <div class="row">
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenocarcinoma, not otherwise specified, low grade " class=""> Adenocarcinoma, not otherwise specified, low grade
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenocarcinoma, not otherwise specified, intermediate grade" class=""> Adenocarcinoma, not otherwise specified, intermediate grade
                </div>
               <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenocarcinoma, not otherwise specified, high grade " class=""> Adenocarcinoma, not otherwise specified, high grade
                </div>
            </div>
            <p><strong><u>Neuroendocrine Carcinoma</u></strong></p>
            <div class="row">
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Well-differentiated neuroendocrine carcinoma (typical carcinoid tumor)" class=""> Well-differentiated neuroendocrine carcinoma (typical carcinoid tumor)
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Moderately differentiated neuroendocrine carcinoma (atypical carcinoid tumor) " class=""> Moderately differentiated neuroendocrine carcinoma (atypical carcinoid tumor)
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Poorly differentiated neuroendocrine carcinoma, small cell type" class=""> Poorly differentiated neuroendocrine carcinoma, small cell type
                </div>
            </div>
            <div class="row">
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Poorly differentiated neuroendocrine carcinoma, large cell type " class=""> Poorly differentiated neuroendocrine carcinoma, large cell type
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Combined (or composite) neuroendocrine carcinoma with (specify types)" class=""> Combined (or composite) neuroendocrine carcinoma with <br/>
                  Specify types <input type="text" name="histologic_cn_type" class="form-control">
				 </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Mucosal melanoma " class=""> Mucosal melanoma
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Carcinoma, type cannot be determined " class=""> Carcinoma, type cannot be determined
                </div>
				<div class="form-group col-md-4">
				   <input type="radio" name="histologic" value="Other histologic type not listed (specify):" class=""> Other histologic type not listed (specify)
                  <input type="text" name="histologic_explain" placeholder="Other histologic type not listed (specify):  " class="form-control">
                </div>
            </div>
        </div>
	</div>

    <div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Histologic Grade <a href="#" data-toggle="modal" data-target="#myModal4"><i class="fa fa-question-circle"></i></a>
			  </h4>
			 </div>

			 <!-- Modal -->
              <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">C. Histologic Grade</h4>
                    </div>
                    <div class="modal-body">
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
					</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

			   <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic_grade" value="G1: Well differentiated " class=""> G1: Well differentiated
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic_grade" value="G2: Moderately differentiated " class="">  G2: Moderately differentiated
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic_grade" value="G3: Poorly differentiated " class="">  G3: Poorly differentiated
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic_grade" value="GX: Cannot be assessed " class="">  GX: Cannot be assessed
                </div>
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic_grade" value="Other " class="">  Other (specify): <br/>
                  <input type="text" name="histologic_grade_other" placeholder="Other (specify):" class="form-control">
                </div>
			   </div>
		</div>
	</div>

    <div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Tumor Extension  (other structures/spaces involved)
			  </h4>
			 </div>

			   <div class="row">
                <div class="form-group col-md-4">
                  <input type="text" name="tumor_extension" class="form-control">
                </div>
             </div>
		</div>
	</div>

    <div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Margins  <a href="#" data-toggle="modal" data-target="#myModal5"><i class="fa fa-question-circle"></i></a>
			  </h4>
              <p><i>Note: Use this section only if all margins are uninvolved and all margins can be assessed.</i></p>
			 </div>

			 <!-- Modal -->
              <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">D AND E: Margins</h4>
                    </div>
                    <div class="modal-body">
                    <h2><strong>D. Surgical Margins</strong></h2>
                    <p>The definition of a positive margin is somewhat controversial given the varied results from prior studies.<sup><a href="#_ENREF_15">15</a>,<a href="#_ENREF_16">16</a></sup> However, overall, several studies support the definition of a positive margin to be invasive carcinoma <em>or</em> carcinoma in situ/high-grade dysplasia present at margins (microscopic cut-through of tumor).<a href="#_ENREF_17"><sup>17</sup></a> Furthermore, reporting of surgical margins should also include information regarding the distance of invasive carcinoma, carcinoma in situ, or high-grade dysplasia (moderate to severe) from the surgical margin. Tumors with &ldquo;close&rdquo; margins also carry an increased risk for local recurrence.<sup><a href="#_ENREF_16">16</a>,<a href="#_ENREF_17">17</a></sup> The definition of a &ldquo;close&rdquo; margin is not standardized as the effective cut-off varies between studies and between anatomic subsites. Commonly used cut points to define close margins are 5 mm in general and 2 mm with respect to glottic larynx.<a href="#_ENREF_16"><sup>16</sup></a> However, values ranging from 3 mm to 7 mm have been used with success,<sup><a href="#_ENREF_16">16</a>,<a href="#_ENREF_18">18</a></sup> and for glottic tumors as low as 1 mm.<a href="#_ENREF_19"><sup>19</sup></a>&nbsp; Thus, distance of tumor from the nearest margin should be recorded.&nbsp;</p>
                    <p>Reporting of surgical margins for carcinomas of the minor salivary glands should follow those used for squamous cell carcinoma of larynx.</p>
                    <p><strong>&nbsp;</strong></p>
                    <p><strong>Dysplasia</strong></p>
                    <p>The types of intraepithelial dysplasia of the upper aerodigestive tract (UADT) include nonkeratinizing (&ldquo;classic&rdquo;) dysplasia and keratinizing dysplasia. Of the 2 types of dysplasias, the keratinizing dysplasias are significantly more common than the nonkeratinizing dysplasias. The current WHO advocates a 2-tiered approach with low-grade and high-grade dysplasia categories (see below under Note M).<a href="#_ENREF_20"><sup>20</sup></a> High-grade dysplasia at a margin is regarded and reported as a positive margin, while low-grade dysplasia is not.&nbsp;</p>
                    <p>&nbsp;</p>
                    <h2>E. &nbsp;Orientation of Specimen</h2>
                    <p>Complex specimens should be examined and oriented with the assistance of the operating surgeon(s). Direct communication between the surgeon and pathologist is a critical component in specimen orientation and proper sectioning. Whenever possible, the tissue examination request form should include a drawing or photograph of the resected specimen showing the extent of the tumor and its relation to the anatomic structures of the region. The lines and extent of the resection can be depicted on preprinted adhesive labels and attached to the surgical pathology request forms.</p>
                   </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                    <div class="heading-line-bottom">
                    <h4 class="heading-title">Margins </h4>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                        <input type="radio" name="icm" value="Cannot be assessed " class=""> Cannot be assessed
                        </div>
                        <div class="form-group col-md-12">
                        <input type="radio" name="icm" value="Uninvolved by invasive tumor" class=""> Uninvolved by invasive tumor
                            <div style="margin-left: 50px;" class="row">
                                <div class="form-group">
                                <p><strong>Distance from closest margin (millimeters) </strong><br/><input type="text" name="icm_closest_margin" placeholder="closest margin ___mm " class="form-control"></p>
                                <p><strong>Specify location of closest margin, per orientation, if possible: </strong><br/><input type="text" name="icm_location_specify" placeholder="Specify ___ mm " class="form-control"></p>
                                <p><strong>Location and distance of other close margins </strong><br/><input type="text" name="icm_location_closest_margin" placeholder=" " class="form-control"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                        <input type="radio" name="icm" value="Involved by invasive tumor" class=""> Involved by invasive tumor
                            <div style="margin-left: 50px;" class="row">
                                <div class="form-group">
                                <p><strong>Specify margin(s), per orientation, if possible: </strong><br/><input type="text" name="icm_involve_distance_specify" placeholder="Specify ___ mm " class="form-control"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                        <input type="radio" name="icm" value="Uninvolved by high-grade dysplasia/in situ disease" class=""> Uninvolved by high-grade dysplasia/in situ disease
                            <div style="margin-left: 50px;" class="row">
                                <div class="form-group">
                                <p><strong>Distance from closest margin (millimeters) </strong><br/><input type="text" name="icm_closest_margin" placeholder="closest margin ___mm " class="form-control"></p>
                                <p><strong>Specify location of closest margin, per orientation, if possible: </strong><br/><input type="text" name="icm_location_specify" placeholder="Specify ___ mm " class="form-control"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                        <input type="radio" name="icm" value="Involved by high-grade dysplasia/in situ disease" class=""> Involved by high-grade dysplasia/in situ disease#
                            <div style="margin-left: 50px;" class="row">
                                <div class="form-group">
                                <p><strong>Specify margin(s), per orientation, if possible: </strong><br/><input type="text" name="icm_involve_distance_specify" placeholder="Specify ___ mm " class="form-control"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
		</div>
	</div>

        <div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Lymphovascular Invasion
			  </h4>
			 </div>

			   <div class="row">
            <div class="form-group col-md-12">
              <input type="radio" name="lymphovascular_invasion" value="Not identified" class=""> Not identified
            </div>
            <div class="form-group col-md-12">
              <input type="radio" name="lymphovascular_invasion" value="Present " class="">  Present
            </div>
            <div class="form-group col-md-12">
              <input type="radio" name="lymphovascular_invasion" value="Cannot be determined " class="">  Cannot be determined
            </div>
			   </div>
		</div>
	</div>

    <div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Perineural Invasion   <a href="#" data-toggle="modal" data-target="#myModal7"><i class="fa fa-question-circle"></i></a>
			  </h4>
			 </div>

			 <!-- Modal -->
              <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">F. Perineural Invasion</h4>
                    </div>
                    <div class="modal-body">
                    <p>Traditionally, the presence of perineural invasion (neurotropism) is an important predictor of poor prognosis in head and neck cancer of virtually all sites.<a href="#_ENREF_21"><sup>21</sup></a> The presence of perineural invasion (neurotropism) in the primary cancer is associated with poor local disease control and regional control, as well as being associated with metastasis to regional lymph nodes.<a href="#_ENREF_21"><sup>21</sup></a> Further, perineural invasion is associated with decrease in disease-specific survival and overall survival.<a href="#_ENREF_21"><sup>21</sup></a> There is conflicting data relative to an association between the presence of perineural invasion and the development of distant metastasis, with some studies showing an increased association with distant metastasis, while other studies showing no correlation with distant metastasis.<a href="#_ENREF_21"><sup>21</sup></a> The relationship between perineural invasion and prognosis is independent of nerve diameter.<a href="#_ENREF_22"><sup>22</sup></a> Additionally, emerging evidence suggests that extratumoral perineural invasion may be more prognostically relevant.<a href="#_ENREF_23"><sup>23</sup></a> Although perineural invasion of small unnamed nerves may not produce clinical symptoms, the reporting of perineural invasion includes nerves of all sizes including small peripheral nerves (ie, less than 1 mm in diameter). Aside from the impact on prognosis, the presence of perineural invasion also guides therapy. Concurrent adjuvant chemoradiation therapy has been shown to improve outcomes in patients with perineural invasion (as well as in patients with extranodal extension and bone invasion).<sup><a href="#_ENREF_24">24</a>,<a href="#_ENREF_25">25</a></sup> Given the significance relative to prognosis and treatment, perineural invasion is a required data element in the reporting of head and neck cancers.&nbsp;</p>
                    <p>&nbsp;</p>
					</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

			   <div class="row">
            <div class="form-group col-md-12">
              <input type="radio" name="perineural_invasion" value="Not identified" class=""> Not identified
            </div>
            <div class="form-group col-md-12">
              <input type="radio" name="perineural_invasion" value="Present " class="">  Present
            </div>
            <div class="form-group col-md-12">
              <input type="radio" name="perineural_invasion" value="Cannot be determined " class="">  Cannot be determined
            </div>
			   </div>
		</div>
	</div>

    <div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Regional Lymph Nodes <a href="#" data-toggle="modal" data-target="#myModal6"><i class="fa fa-question-circle"></i></a><code>*</code></h4>
			 </div>

             <!-- Modal -->
              <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">G. Regional Lymph Nodes </h4>
                    </div>
                    <div class="modal-body">
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
					</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

			  <div class="row">
                <div class="form-group col-md-6">
                  <input type="radio" name="ln" value="No lymph nodes submitted or found " class="" notrequired> No lymph nodes submitted or found
                </div>
              </div>
              <p><i>Lymph Node Examination (required only if lymph nodes present in specimen)</i></p>
            <div style="margin-left: 30px;" class="row">
                <div class="form-group col-md-6">
                    <label>Number of Lymph Nodes Involved:</label>
                    <input type="text" name="ln_involved" placeholder="Number of Lymph Nodes Involved " class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Number cannot be determined (explain):  </label>
                    <input type="text" name="ln_involved_explain" placeholder="Explanation " class="form-control">
                </div>
            </div>
            <div style="margin-left: 30px;" class="row">
                <div class="form-group col-md-6">
                    <label>Number of Lymph Nodes Examined::</label>
                    <input type="text" name="ln_examined" placeholder="Number of Lymph Nodes Examined " class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Number cannot be determined (explain):  </label>
                    <input type="text" name="ln_examined_explain" placeholder="Explanation " class="form-control">
                </div>
            </div>
            <h5>Lymph Node Metastasis (required for all histologies except mucosal melanoma, and only if lymph nodes involved)</h5>
            <h6>Laterality of Lymph Nodes Involved</h6>
            <div class="form-group col-md-3">
                <input type="radio" name="ln_leterality" value="Ipsilateral (including midline)" class=""> Ipsilateral (including midline)
            </div>
            <div class="form-group col-md-3">
                <input type="radio" name="ln_leterality" value="Contralateral" class=""> Contralateral
            </div>
            <div class="form-group col-md-3">
                <input type="radio" name="ln_leterality" value="Bilateral" class=""> Bilateral
            </div>
            <div class="form-group col-md-3">
                <input type="radio" name="ln_leterality" value="Cannot be determined" class=""> Cannot be determined
            </div>

            <div class="form-group col-md-12">
                Size of Largest Metastatic Deposit (centimeters): <input type="text" name="ln_deposit" class="form-control">
            </div>

            <h6>Extranodal Extension (ENE) </h6>
            <div class="form-group col-md-4">
                <input type="radio" name="ene" value="Not identified " class=""> Not identified
            </div>
            <div class="form-group col-md-4">
                <input type="radio" name="ene" value="Present" class=""> Present
                <div style="padding-left: 40px;" class="row">
                    <div class="form-group form-horizontal col-md-12">
                        <p><strong>Distance from lymph node capsule (millimeters): </strong> <input type="text" name="ln_distance" class="form-control"></p>
                        <p><input type="checkbox" name="enema" value="ENEma (>2 mm)"> <strong>ENEma (>2 mm)</strong></p>
                        <p><input type="checkbox" name="enemi" value="ENEmi (≤2 mm)" class=""> <strong>ENEmi  (≤2 mm)</strong></p>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <input type="radio" name="ene" value="Cannot be determined" class=""> Cannot be determined
            </div>
            </div>
	</div>

    <div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Pathologic Stage Classification (pTNM, AJCC 8th Edition) <a href="#" data-toggle="modal" data-target="#myModal14"><i class="fa fa-question-circle"></i></a></h4>
			 </div>
			 <p><i>Note: Reporting of pT, pN, and (when applicable) pM categories is based on information available to the pathologist at the time the report is issued. Only the applicable T, N, or M category is required for reporting; their definitions need not be included in the report. The categories (with modifiers when applicable) can be listed on 1 line or more than 1 line.
                </i></p>
			 <!-- Modal -->
              <div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">H. TNM and Stage Groupings</h4>
                    </div>
                    <div class="modal-body">
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
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

			  <br/>
				 <h4 class="heading-title"> TNM Descriptors (required only if applicable) (select all that apply)</h4>
				<hr>

			   <div class="row">
                <div class="form-group col-md-4">
                  <input type="checkbox" name="tnm_descriptors_m" value="m (multiple primary tumors)" class=""> m (multiple primary tumors)
                </div>
				<div class="form-group col-md-4">
                  <input type="checkbox" name="tnm_descriptors_r" value="r (recurrent)" class="">  r (recurrent)
                </div>
				<div class="form-group col-md-4">
                  <input type="checkbox" name="tnm_descriptors_y" value="y (posttreatment)" class="">  y (posttreatment)
                </div>
			   </div>
               <h4><strong>For All Carcinomas</strong></h4>
			   <br/>
                 <p><strong><u>Primary Tumor (pT)</u></strong></p>
				<hr>

				  <div class="row">
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_tumor" value="pTX:	Primary tumor cannot be assessed" class="" notrequired> pTX:	Primary tumor cannot be assessed
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_tumor" value="pT0:	No evidence of primary tumor" class=""> pT0:	No evidence of primary tumor#
					</div>
                  </div>
                  <p><em><i><b>For the Supraglottis</b></i></em></p>
                  <div class="row">
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_s_tumor" value="pT1:	Tumor limited to one subsite of supraglottis with normal vocal cord mobility" class=""> pT1:	Tumor limited to one subsite of supraglottis with normal vocal cord mobility
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_s_tumor" value="pT2:	Tumor invades mucosa of more than one adjacent subsite of supraglottis or glottis or region outside the supraglottis (eg, mucosa of base of tongue, vallecula, medial wall of pyriform sinus) without fixation of the larynx" class=""> pT2:	Tumor invades mucosa of more than one adjacent subsite of supraglottis or glottis or region outside the supraglottis (eg, mucosa of base of tongue, vallecula, medial wall of pyriform sinus) without fixation of the larynx
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_s_tumor" value="pT3:	Tumor limited to larynx with vocal cord fixation and/or invades any of the following: postcricoid area, preepiglottic space, paraglottic space, and/or inner cortex of thyroid cartilage" class=""> pT3:	Tumor limited to larynx with vocal cord fixation and/or invades any of the following: postcricoid area, preepiglottic space, paraglottic space, and/or inner cortex of thyroid cartilage
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_s_tumor" value="pT4a:	Moderately advanced local disease. Tumor invades through the outer cortex thyroid cartilage and/or invades tissues beyond the larynx (eg, trachea, soft tissues of neck including deep extrinsic muscle of tongue, strap muscles, thyroid, or esophagus)" class=""> pT4a:	Moderately advanced local disease. Tumor invades through the outer cortex thyroid cartilage and/or invades tissues beyond the larynx (eg, trachea, soft tissues of neck including deep extrinsic muscle of tongue, strap muscles, thyroid, or esophagus)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_s_tumor" value="pT4b:	Very advanced local disease. Tumor invades prevertebral space, encases carotid artery, or invades mediastinal structures" class=""> pT4b:	Very advanced local disease. Tumor invades prevertebral space, encases carotid artery, or invades mediastinal structures
					</div>
                  </div>
                  <p><em><i><b>For the Glottis</b></i></em></p>
                  <div class="row">
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_g_tumor" value="pT1: 	Tumor limited to the vocal cord(s) (may involve anterior or posterior commissure) with normal mobility" class=""> pT1: 	Tumor limited to the vocal cord(s) (may involve anterior or posterior commissure) with normal mobility
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_g_tumor" value="pT1a:	Tumor limited to one vocal cord " class=""> pT1a:	Tumor limited to one vocal cord
					</div>
					<div class="form-group col-md-12">
					  <input type="radio" name="primary_g_tumor" value="pT1b:	Tumor involves both vocal cords" class=""> pT1b:	Tumor involves both vocal cords
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_g_tumor" value="pT2:	Tumor extends to supraglottis and/or subglottis and/or with impaired vocal cord mobility " class=""> pT2:	Tumor extends to supraglottis and/or subglottis and/or with impaired vocal cord mobility
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_g_tumor" value="pT3:	Tumor limited to the larynx with vocal cord fixation and/or invasion of paraglottic space and/or inner cortex of the thyroid cartilage  " class="">pT3:	Tumor limited to the larynx with vocal cord fixation and/or invasion of paraglottic space and/or inner cortex of the thyroid cartilage
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_g_tumor" value="pT4:  Moderately advanced or very advanced " class=""> pT4:  Moderately advanced or very advanced
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_g_tumor" value="pT4a:	Moderately advanced local disease. Tumor invades through the outer cortex of the thyroid cartilage and/or invades tissues beyond the larynx (eg, trachea, cricoid cartilage, soft tissues of neck including deep extrinsic muscle of the tongue, strap muscles, thyroid, or esophagus) " class=""> pT4a:	Moderately advanced local disease. Tumor invades through the outer cortex of the thyroid cartilage and/or invades tissues beyond the larynx (eg, trachea, cricoid cartilage, soft tissues of neck including deep extrinsic muscle of the tongue, strap muscles, thyroid, or esophagus)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_g_tumor" value="pT4b:	Very advanced local disease. Tumor invades prevertebral space, encases carotid artery, or invades mediastinal structures " class=""> pT4b:	Very advanced local disease. Tumor invades prevertebral space, encases carotid artery, or invades mediastinal structures
					</div>
                  </div>
                  <p><em><i><b>For the Subglottis</b></i></em></p>
                  <div class="row">
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT1:	Tumor limited to subglottis " class=""> pT1:	Tumor limited to subglottis
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT2:	Tumor extends to vocal cord(s) with normal or impaired mobility " class=""> pT2:    Tumor extends to vocal cord(s) with normal or impaired mobility
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT3:	Tumor limited to larynx with vocal cord fixation and/or invasion of paraglottic space and/or inner cortex of the thyroid cartilage " class=""> pT3:	Tumor limited to larynx with vocal cord fixation and/or invasion of paraglottic space and/or inner cortex of the thyroid cartilage
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT4a:	Moderately advanced local disease. Tumor invades cricoid or thyroid cartilage and/or invades tissues beyond the larynx (eg, trachea, soft tissues of neck including deep extrinsic muscles of the tongue, strap muscles, thyroid, or esophagus) " class=""> pT4a:	Moderately advanced local disease. Tumor invades cricoid or thyroid cartilage and/or invades tissues beyond the larynx (eg, trachea, soft tissues of neck including deep extrinsic muscles of the tongue, strap muscles, thyroid, or esophagus)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT4b:	Very advanced local disease. Tumor invades prevertebral space, encases carotid artery, or invades mediastinal structures " class=""> pT4b:	Very advanced local disease. Tumor invades prevertebral space, encases carotid artery, or invades mediastinal structures
					</div>
				  </div>


                 <p><strong><u>Regional Lymph Nodes (pN) <a href="#" data-toggle="modal" data-target="#myModal6"><i class="fa fa-question-circle"></i></a></u></strong></p>
				<hr>

				<div class="row">
					<div class="form-group col-md-4">
					  <input type="radio" name="rln" value="pNX:	Regional lymph nodes cannot be assessed " class="" notrequired> pNX:	Regional lymph nodes cannot be assessed
					</div>
					<div class="form-group col-md-4">
					  <input type="radio" name="rln" value="pN0:	No regional lymph node metastasis" class="">  pN0:	No regional lymph node metastasis
					</div>
					<div class="form-group col-md-4">
					  <input type="radio" name="rln" value="pN1: 	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(-)" class="">  pN1: 	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(-)
					</div>
                    <div class="form-group col-md-4">
					  <input type="radio" name="rln" value="pN2:	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(+); or larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−); or metastases in multiple ipsilateral lymph nodes, none larger than 6 cm in greatest dimension and ENE(−); or in bilateral or contralateral lymph node(s), none larger than 6 cm in greatest dimension and ENE(−)" class=""> pN2:	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(+); or larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−); or metastases in multiple ipsilateral lymph nodes, none larger than 6 cm in greatest dimension and ENE(−); or in bilateral or contralateral lymph node(s), none larger than 6 cm in greatest dimension and ENE(−)
					</div>
                    <div class="form-group col-md-4">
					  <input type="radio" name="rln" value="pN2a:	Metastasis in a single ipsilateral node, 3 cm or smaller in greatest dimension and ENE(+); or metastasis in a single ipsilateral node, larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−)" class=""> pN2a:	Metastasis in a single ipsilateral node, 3 cm or smaller in greatest dimension and ENE(+); or metastasis in a single ipsilateral node, larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−)

					</div>
                    <div class="form-group col-md-4">
					  <input type="radio" name="rln" value="pN2b:	Metastases in multiple ipsilateral nodes, none larger than 6 cm in greatest dimension and ENE(−)" class=""> pN2b:	Metastases in multiple ipsilateral nodes, none larger than 6 cm in greatest dimension and ENE(−)
					</div>
                    <div class="form-group col-md-4">
					  <input type="radio" name="rln" value="pN2c: 	Metastases in bilateral or contralateral lymph node(s), none larger than 6 cm in greatest dimension and ENE(−)" class=""> pN2c: 	Metastases in bilateral or contralateral lymph node(s), none larger than 6 cm in greatest dimension and ENE(−)
					</div>
                    <div class="form-group col-md-4">
					  <input type="radio" name="rln" value="pN3:	Metastasis in a lymph node, larger than 6 cm in greatest dimension and ENE(−); or metastasis in a single ipsilateral node, larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral, or bilateral lymph nodes and any with ENE(+); or a single contralateral node of any size and ENE(+)" class=""> pN3:	Metastasis in a lymph node, larger than 6 cm in greatest dimension and ENE(−); or metastasis in a single ipsilateral node, larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral, or bilateral lymph nodes and any with ENE(+); or a single contralateral node of any size and ENE(+)
					</div>
                    <div class="form-group col-md-4">
					  <input type="radio" name="rln" value="pN3a: 	Metastasis in a lymph node larger than 6 cm in greatest dimension and ENE(−)" class=""> pN3a: 	Metastasis in a lymph node larger than 6 cm in greatest dimension and ENE(−)
					</div>
                    <div class="form-group col-md-4">
					  <input type="radio" name="rln" value="pN3b:	Metastasis in a single ipsilateral node, larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral, or bilateral lymph nodes and any with ENE(+); or a single contralateral node of any size and ENE(+)" class=""> pN3b:	Metastasis in a single ipsilateral node, larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral, or bilateral lymph nodes and any with ENE(+); or a single contralateral node of any size and ENE(+)
					</div>
			   </div>
               <p><em><sup>#</sup></em><em> Midline nodes are considered ipsilateral nodes.</em></p>
                <p><em>Note: Pathological ENE should be recorded as ENE(&minus;) or ENE(+).</em></p>
                <p><em>Note: Measurement of the metastatic focus in the lymph nodes is based on the largest metastatic deposit size, which may include matted or fused lymph nodes.</em></p>

                <br/><br/>
				<p><strong><u>Distant Metastasis (pM) (required only if confirmed pathologically in this case)</u></strong></p>
                <hr>
				<div class="row">
				    <div class="form-group col-md-4">
					  <input type="radio" name="distance_metastasis" value="pM0: No proven metastasis" class="" notrequired> pM0: No proven metastasis
					</div>
					<div class="form-group col-md-4">
					  <input type="radio" name="distance_metastasis" value="pM1:  Distant metastasis" class=""> pM1:  Distant metastasis
					</div>
                    <div style="padding-left: 40px;" class="form-group col-md-4">
						<label>Specify site, if known:<label>
						<input type="text" name="distance_metastasis_site" placeholder="Specify site, if known:" class="form-control">
					</div>
				</div>

                <h4><strong>For Mucosal Melanoma</strong></h4>
                <p><strong><u>Primary Tumor (pT)</u></strong></p>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="radio" name="primary_m_tumor" value="pT3:	Tumors limited to the mucosa and immediately underlying soft tissue, regardless of thickness or greatest dimension; for example, polypoid nasal disease, pigmented or nonpigmented lesions of the oral cavity, pharynx, or larynx" class=""> pT3:	Tumors limited to the mucosa and immediately underlying soft tissue, regardless of thickness or greatest dimension; for example, polypoid nasal disease, pigmented or nonpigmented lesions of the oral cavity, pharynx, or larynx
                    </div>
                    <div class="form-group col-md-6">
                        <input type="radio" name="primary_m_tumor" value="pT4: 	Moderately advanced or very advanced disease" class=""> pT4: 	Moderately advanced or very advanced disease
                    </div>
                    <div class="form-group col-md-6">
                        <input type="radio" name="primary_m_tumor" value="pT4a:	Moderately advanced disease Tumor involving deep soft tissue, cartilage, bone, or overlying skin" class=""> pT4a:	Moderately advanced disease Tumor involving deep soft tissue, cartilage, bone, or overlying skin
                    </div>
                    <div class="form-group col-md-6">
                        <input type="radio" name="primary_m_tumor" value="pT4b:	Very advanced disease Tumor involving brain, dura, skull base, lower cranial nerves (IX, X, XI, XII), masticator space, carotid artery, prevertebral space, or mediastinal structures" class=""> pT4b:	Very advanced disease Tumor involving brain, dura, skull base, lower cranial nerves (IX, X, XI, XII), masticator space, carotid artery, prevertebral space, or mediastinal structures
                    </div>
                </div>
                <br/>
                <p><strong><u>Regional Lymph Nodes (pN)</u></strong></p>
                <hr>
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="radio" name="rln_m" value="pNX:	Regional lymph nodes cannot be assessed" class=""> pNX:	Regional lymph nodes cannot be assessed
                    </div>
                    <div class="form-group col-md-6">
                        <input type="radio" name="rln_m" value="pN0:	No regional lymph node metastases" class=""> pN0:	No regional lymph node metastases
                    </div>
                    <div class="form-group col-md-6">
                        <input type="radio" name="rln_m" value="pN1:	Regional lymph node metastases present" class=""> pN1:	Regional lymph node metastases present
                    </div>
                </div>

                <br/>
                <p><strong><u>Distant Metastasis (pM) (required only if confirmed pathologically in this case)</u></strong></p>
                <hr>
				<div class="row">
				    <div class="form-group col-md-4">
					  <input type="radio" name="distance_metastasis_m" value="pM0: No proven metastasis" class="" notrequired> pM0: No proven metastasis
					</div>
					<div class="form-group col-md-4">
					  <input type="radio" name="distance_metastasis_m" value="pM1:  Distant metastasis" class=""> pM1:  Distant metastasis
					</div>
                    <div style="padding-left: 40px;" class="form-group col-md-4">
						<label>Specify site, if known:<label>
						<input type="text" name="distance_metastasis_site_m" placeholder="Specify site, if known:" class="form-control">
					</div>
				</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title"> Additional Pathologic Findings<a href="#" data-toggle="modal" data-target="#myModal8"><i class="fa fa-question-circle"></i></a></h4>
			 </div>

             <!-- Modal -->
             <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">J: Dysplasia of the Upper Aerodigestive Tract (UADT)</h4>
                    </div>
                    <div class="modal-body">
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
					</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

			   <div class="row">
                <div class="form-group col-md-4">
                  <input type="checkbox" name="findings_ni" value="None identified " class="">  None identified
                </div>
                <div class="form-group col-md-4">
                  <input type="checkbox" name="findings_mi" value="Keratinizing dysplasia, mild" class="">  Keratinizing dysplasia, mild
                </div>
                <div class="form-group col-md-4">
                  <input type="checkbox" name="findings_mo" value="Keratinizing dysplasia, moderate " class="">  Keratinizing dysplasia, moderate
                </div>
                </div>

                <div class="row">
                <div class="form-group col-md-4">
                  <input type="checkbox" name="findings_se" value="Keratinizing dysplasia, severe (carcinoma in situ) " class="">  Keratinizing dysplasia, severe (carcinoma in situ)
                </div>
                <div class="form-group col-md-4">
                  <input type="checkbox" name="findings_nm" value="Nonkeratinizing dysplasia, mild " class="">  Nonkeratinizing dysplasia, mild
                </div>
                <div class="form-group col-md-4">
                  <input type="checkbox" name="findings_od" value="Nonkeratinizing dysplasia, moderate " class=""> Nonkeratinizing dysplasia, moderate
                </div>
                </div>

                <div class="row">
                <div class="form-group col-md-3">
                  <input type="checkbox" name="findings_sv" value="Nonkeratinizing dysplasia, severe (carcinoma in situ)" class="">  Nonkeratinizing dysplasia, severe (carcinoma in situ)
                </div>
                <div class="form-group col-md-3">
                  <input type="checkbox" name="findings_pi" value="Epithelial hyperplasia " class="">  Epithelial hyperplasia
                </div>
                <div class="form-group col-md-3">
                  <input type="checkbox" name="findings_cf" value="Colonization, fungal " class="">  Colonization, fungal
                </div>
                <div class="form-group col-md-3">
                  <input type="checkbox" name="findings_cb" value="Colonization, bacterial " class=""> Colonization, bacterial
                </div>
                </div>

			   <div class="row">
               <div class="form-group col-md-6">
                  <input type="checkbox" name="findings_if" value="Inflammation (specify type): " class=""> Inflammation (specify type):
                  Specify: <input type="text" name="findings_if_specify" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <input type="checkbox" name="findings_ot" value="Other (specify): " class="">  Other (specify):
                  Specify: <input type="text" name="findings_ot_specify" class="form-control">
                </div>
			   </div>

               <div class="heading-line-bottom">
			  <h4 class="heading-title"> Ancillary Studies </a></h4>
			 </div>
             <div class="row">
                <div class="form-group col-md-12">
                    <input type="checkbox" name="ancillary_studies" value="Ancilliary Studies  " class=""> Note: For reporting molecular testing and other cancer biomarker testing results, the CAP Head and Neck Biomarker Template should be used. Pending biomarker studies should be listed in the Comments section of this report.
                    <input type="hidden" name="ancillary_studies_main" value="Note: For reporting molecular testing and other cancer biomarker testing results, the CAP Head and Neck Biomarker Template should be used. Pending biomarker studies should be listed in the Comments section of this report. " />
                </div>
                </div>


				<br/>
				 <h4 class="heading-title">Comments  </h4>
				<hr>
				  <div class="row">
					<div class="form-group col-md-12">
					  <textarea name="comments" class="form-control" col="4" rows="20"></textarea>
					</div>
				  </div>

				  <br/>
				 <h4 class="heading-title">Pathologic Notes  </h4>
				<hr>
				  <div class="row">
					<div class="form-group col-md-12">
					  <input type="checkbox" name="all_notes" value="true" class=""> Include pathologic notes in the report.
					</div>
				  </div>

                    <hr><hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Preview Report</button>
                    </div>
                </div>

            </div>
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

<?php /* C:\Users\DELL INSPIRON 15\Desktop\Laravel Projects\CBReporting\resources\views/larynx.blade.php */ ?>

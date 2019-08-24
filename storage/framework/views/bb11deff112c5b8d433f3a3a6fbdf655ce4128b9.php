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
      <div class="container">
		<div Style="padding: 10px;" class="row">
			<div clas="col-md-12">
			<h1>Surgical Pathology Cancer Case Summary</h1>
			  <h4 class="heading-title">Protocol Posting Date: February 2019 </h4>
			  <h4 class="heading-title">PHARYNX (OROPHARYNX, HYPOPHARYNX, NASOPHARYNX)</h4>
			  <p>Select a single response unless otherwise indicated.</p>
			</div>
		</div>
		<hr>

		 <form action="<?php echo e(route('phx.preview')); ?>" method="POST">
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
                <input type="checkbox" name="procedure_ton" value="Tonsillectomy " class="" notrequired> Tonsillectomy
                </div>
                <div class="form-group col-md-4">
                <input type="checkbox" name="procedure_laryn" value="Laryngopharyngectomy " class="" notrequired> Laryngopharyngectomy
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

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <input type="checkbox" name="tumorsite_ox" value="Oropharynx" class=""> Oropharynx
                    <div style="margin-left: 20px;">
                      <p><input type="checkbox" name="tumorsite_ox_pt"  value="Palatine tonsil"> Palatine tonsil</p>
                      <p><input type="checkbox" name="tumorsite_ox_bt"  value="Base of tongue, including lingual tonsi"> Base of tongue, including lingual tonsi</p>
                      <p><input type="checkbox" name="tumorsite_ox_st"  value="Soft palate"> Soft palate</p>
                      <p><input type="checkbox" name="tumorsite_ox_ul"  value="Uvula"> Uvula</p>
                      <p><input type="checkbox" name="tumorsite_ox_pw"  value="Pharyngeal wall (posterior)"> Pharyngeal wall (posterior)</p>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <input type="checkbox" name="tumorsite_nx" value="Nasopharynx" class=""> Nasopharynx
                    <div style="margin-left: 20px;">
                      <p><input type="checkbox" name="tumorsite_nx_nt"  value="Nasopharyngeal tonsils (adenoids)"> Nasopharyngeal tonsils (adenoids)</p>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <input type="checkbox" name="tumorsite_hx" value="Hypopharynx" class=""> Hypopharynx
                    <div style="margin-left: 20px;">
                      <p><input type="checkbox" name="tumorsite_hx_ps"  value="Piriform sinus"> Piriform sinus</p>
                      <p><input type="checkbox" name="tumorsite_hx_pc"  value="Postcricoid"> Postcricoid</p>
                      <p><input type="checkbox" name="tumorsite_hx_pw"  value="Pharyngeal wall (posterior and/or lateral)"> Nasopharyngeal tonsils (adenoids)</p>
                    </div>
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
					</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <p><strong><u>Carcinomas of the Oropharynx and Hypopharynx</u></strong></p>
              <div class="row">
                <div class="form-group col-md-3">
                  <input type="checkbox" name="histologic_cc_on" value="Human papillomavirus (HPV)-mediated (positive) squamous cell carcinoma (oropharynx only) " class="" notrequired> Human papillomavirus (HPV)-mediated (positive) squamous cell carcinoma (oropharynx only)
                </div>
				 <div class="form-group col-md-3">
                  <input type="checkbox" name="histologic_cc_on" value="HPV-unrelated (negative) squamous cell carcinoma (oropharynx)" class=""> HPV-unrelated (negative) squamous cell carcinoma (oropharynx)
                </div>
				<div class="form-group col-md-3">
                  <input type="checkbox" name="histologic_cc_on" value="Oropharyngeal squamous cell carcinoma, HPV status unknown" class=""> Oropharyngeal squamous cell carcinoma, HPV status unknown (see “ancillary studies” for additional notes)
                </div>
                <div class="form-group col-md-3">
                  <input type="checkbox" name="histologic_cc_on" value="Hypopharyngeal squamous cell carcinoma" class=""> Hypopharyngeal squamous cell carcinoma
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

              <p><strong><u>Carcinomas of the Nasopharynx</u></strong></p>

                <div class="row">
                <div class="form-group col-md-4">
                    <input type="radio" name="histologic_cn" value="Keratinizing squamous cell carcinoma " class="" notrequired> Keratinizing squamous cell carcinoma
                </div>
                <div class="form-group col-md-4">
                    <input type="radio" name="histologic_cn" value="Nonkeratinizing squamous cell carcinoma " class=""> Nonkeratinizing squamous cell carcinoma
                </div>
                <div class="form-group col-md-4">
                    <input type="radio" name="histologic_cn" value="Basaloid squamous cell carcinoma  " class=""> Basaloid squamous cell carcinoma
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
                  <input type="radio" name="histologic" value="Acinic cell carcinoma " class="" notrequired> Acinic cell carcinoma
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, classic, low grade" class=""> Mucoepidermoid carcinoma, intermediate grade
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, classic, intermediate grade " class=""> Polymorphous adenocarcinoma, classic, intermediate grade
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, classic, high grade " class="" notrequired> Polymorphous adenocarcinoma, classic, high grade
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, cribriform (cribriform adenocarcinoma of salivary origin), low grade" class=""> Polymorphous adenocarcinoma, cribriform (cribriform adenocarcinoma of salivary origin), low grade
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, cribriform (cribriform adenocarcinoma of salivary origin), intermediate grade " class=""> Polymorphous adenocarcinoma, cribriform (cribriform adenocarcinoma of salivary origin), intermediate grade
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="(Mammary analogue) Secretory carcinoma" class="" notrequired> (Mammary analogue) Secretory carcinoma
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Salivary duct carcinoma" class=""> Salivary duct carcinoma
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Epithelial-myoepithelial carcinoma " class=""> Epithelial-myoepithelial carcinoma
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

            <div class="row">
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Basal cell adenocarcinoma " class=""> Basal cell adenocarcinoma
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Carcinosarcoma (true malignant mixed tumor)" class=""> Carcinosarcoma (true malignant mixed tumor)
                </div>
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="(Hyalinizing) clear cell carcinoma " class=""> (Hyalinizing) clear cell carcinoma
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Intraductal carcinoma, low grade " class=""> Intraductal carcinoma, low grade
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Intraductal carcinoma, high grade" class=""> Intraductal carcinoma, high grade
                </div>
               <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Lymphoepithelial carcinoma " class=""> Lymphoepithelial carcinoma
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Myoepithelial carcinoma  " class=""> Myoepithelial carcinoma
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Oncocytic carcinoma" class=""> Oncocytic carcinoma
                </div>
            </div>

            <p><strong><u>Preexisting pleomorphic adenoma component (required in addition to salivary carcinoma type, if applicable)</u></strong></p>
            <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic_pp" value="Carcinoma ex pleomorphic adenoma, minimally invasive " class=""> Carcinoma ex pleomorphic adenoma, minimally invasive
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic_pp" value="Carcinoma ex pleomorphic adenoma, invasive" class=""> Carcinoma ex pleomorphic adenoma, invasive
                </div>
               <div class="form-group col-md-4">
                  <input type="radio" name="histologic_pp" value="Carcinoma ex pleomorphic adenoma, intracapsular (noninvasive) " class=""> Carcinoma ex pleomorphic adenoma, intracapsular (noninvasive)
                </div>
            </div>
            <p><u># Note: If multiple patterns present, select predominant pattern unless solid pattern is greater than 30%, in which case should select solid pattern</u></p>

            <p><strong><u>Adenocarcinomas (Non-Salivary Gland Type)</u></strong></p>

            <div class="row">
                <div class="form-group col-md-4">
                    <input type="checkbox" name="histologic_nsgt" value="Nasopharyngeal papillary adenocarcinoma " class="" notrequired> Nasopharyngeal papillary adenocarcinoma
                </div>
            </div>

            <p><strong><u>Neuroendocrine Carcinoma</u></strong></p>
            <div class="row">
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic_nc" value="Small cell neuroendocrine carcinoma, HPV negative" class=""> Small cell neuroendocrine carcinoma, HPV negative
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic_nc" value="Small cell neuroendocrine carcinoma, HPV positive" class=""> Small cell neuroendocrine carcinoma, HPV positive
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic_nc" value="Large cell neuroendocrine carcinoma, HPV negative" class=""> Large cell neuroendocrine carcinoma, HPV negative
                </div>
            </div>
            <div class="row">
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic_nc" value="Large cell neuroendocrine carcinoma, HPV positive" class=""> Large cell neuroendocrine carcinoma, HPV positive
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic_nc" value="Mucosal melanoma " class=""> Mucosal melanoma
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic_nc" value="Carcinoma, type cannot be determined " class=""> Carcinoma, type cannot be determined
                </div>
				<div class="form-group col-md-4">
				   <input type="radio" name="histologic_nc" value="Other histologic type not listed (specify):" class=""> Other histologic type not listed (specify)
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

                    <p><img src="reporting_images/lyx4.png" class="img-responsive" /></p>
                    
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

            <h6>Extranodal Extension (ENE) (required only for HPV-unrelated/negative oropharyngeal and hypopharyngeal carcinomas) </h6>
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
                  <p><em><i><b>For HPV-Mediated (Positive) Oropharynx</b></i></em></p>
                  <div class="row">
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_po_tumor" value="pT0:	No primary identified " class=""> pT0:	No primary identified
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_po_tumor" value="pT1:	Tumor 2 cm or smaller in greatest dimension" class=""> pT1:	Tumor 2 cm or smaller in greatest dimension
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_po_tumor" value="pT2:	Tumor larger than 2 cm but not larger than 4 cm in greatest dimension  " class=""> pT2:	Tumor larger than 2 cm but not larger than 4 cm in greatest dimension
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_po_tumor" value="pT3:	Tumor more than 4 cm in greatest dimension or extension to lingual surface of epiglottis" class=""> pT3:	Tumor more than 4 cm in greatest dimension or extension to lingual surface of epiglottis
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_po_tumor" value="pT4:	Moderately advanced local disease. Tumor invades larynx, extrinsic muscle of tongue, medial pterygoid muscles, hard palate, or mandible or beyond " class=""> pT4:	Moderately advanced local disease. Tumor invades larynx, extrinsic muscle of tongue, medial pterygoid muscles, hard palate, or mandible or beyond
					</div>
                  </div>
                  <p><u># Note:  Mucosal extension to lingual surface of epiglottis from primary tumors of the base of the tongue and vallecula does not constitute invasion of larynx</u></p>
                  <p><em><i><b>For HPV-Unrelated (Negative) Oropharynx</b></i></em></p>
                  <div class="row">
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_no_tumor" value="pTX: 	Primary tumor cannot be assessed" class=""> pTX: 	Primary tumor cannot be assessed
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_no_tumor" value="pTis: 	Carcinoma in situ " class=""> pTis: 	Carcinoma in situ
					</div>
					<div class="form-group col-md-12">
					  <input type="radio" name="primary_no_tumor" value="pT2:	Tumor larger than 2 cm but not larger than 4 cm in greatest dimension" class=""> pT2:	Tumor larger than 2 cm but not larger than 4 cm in greatest dimension
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_no_tumor" value="pT3:	Tumor larger than 4 cm in greatest dimension or extension to lingual surface of epiglottis " class=""> pT3:	Tumor larger than 4 cm in greatest dimension or extension to lingual surface of epiglottis
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_no_tumor" value="pT4:	Moderately advanced or very advanced local disease  " class="">pT4:	Moderately advanced or very advanced local disease
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_no_tumor" value="pT4a:	Moderately advanced local disease. Tumor invades the larynx, extrinsic muscle of tongue, medial pterygoid, hard palate, or mandible " class=""> pT4a:	Moderately advanced local disease. Tumor invades the larynx, extrinsic muscle of tongue, medial pterygoid, hard palate, or mandible
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_no_tumor" value="pT4b: 	Very advanced local disease. Tumor invades lateral pterygoid muscle, pterygoid plates, lateral nasopharynx, or skull base or encases carotid artery " class=""> pT4b: 	Very advanced local disease. Tumor invades lateral pterygoid muscle, pterygoid plates, lateral nasopharynx, or skull base or encases carotid artery
					</div>
                  </div>
                  <p><em><i><b>For Nasopharynx</b></i></em></p>
                  <div class="row">
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_n_tumor" value="pTX:	Primary tumor cannot be assessed " class=""> pTX:	Primary tumor cannot be assessed
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_n_tumor" value="pT0:	No tumor identified, but EBV-positive cervical node(s) involvement  " class="">pT0:	No tumor identified, but EBV-positive cervical node(s) involvement
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_n_tumor" value="pT1:	Tumor confined to nasopharynx, or extension to oropharynx and/or nasal cavity without parapharyngeal involvement " class=""> pT1:	Tumor confined to nasopharynx, or extension to oropharynx and/or nasal cavity without parapharyngeal involvement
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_n_tumor" value="pT2:	Tumor with extension to parapharyngeal space, and/or adjacent soft tissue involvement (medial pterygoid, lateral pterygoid, prevertebral muscles) " class=""> pT2:	Tumor with extension to parapharyngeal space, and/or adjacent soft tissue involvement (medial pterygoid, lateral pterygoid, prevertebral muscles)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_n_tumor" value="pT3:	Tumor with infiltration of bony structures at skull base, cervical vertebra, pterygoid structures, and/or paranasal sinuses " class=""> pT3:	Tumor with infiltration of bony structures at skull base, cervical vertebra, pterygoid structures, and/or paranasal sinuses
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_n_tumor" value="pT4: 	Tumor with intracranial extension, involvement of cranial nerves, hypopharynx, orbit, parotid gland, and/or extensive soft tissue infiltration beyond the lateral surface of the lateral pterygoid muscle " class=""> pT4: 	Tumor with intracranial extension, involvement of cranial nerves, hypopharynx, orbit, parotid gland, and/or extensive soft tissue infiltration beyond the lateral surface of the lateral pterygoid muscle
					</div>
				  </div>

                  <p><em><i><b>For Hypopharynx </b></i></em></p>
                  <div class="row">
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pTX:	Primary tumor cannot be assessed " class=""> pTX:	Primary tumor cannot be assessed
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pTis:	Carcinoma in situ " class=""> pTis:	Carcinoma in situ
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT1:	Tumor limited to one subsite of hypopharynx and/or 2 cm or smaller in greatest dimension " class=""> pT1:	Tumor limited to one subsite of hypopharynx and/or 2 cm or smaller in greatest dimension
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT2:	Tumor invades more than one subsite of hypopharynx or an adjacent site, or measures larger than 2 cm but not larger than 4 cm in greatest dimension without fixation of hemilarynx  " class="">pT2:	Tumor invades more than one subsite of hypopharynx or an adjacent site, or measures larger than 2 cm but not larger than 4 cm in greatest dimension without fixation of hemilarynx
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT3:	Tumor measures larger than 4 cm in greatest dimension or with fixation of hemilarynx or extension to esophageal mucosa " class=""> pT3:	Tumor measures larger than 4 cm in greatest dimension or with fixation of hemilarynx or extension to esophageal mucosa
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT4:	Moderately advanced and very advanced local disease " class=""> pT4:	Moderately advanced and very advanced local disease
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT4a:	Moderately advanced local disease. Tumor invades thyroid/cricoid cartilage, hyoid bone, thyroid gland, esophageal muscle or central compartment soft tissue " class=""> pT4a:	Moderately advanced local disease. Tumor invades thyroid/cricoid cartilage, hyoid bone, thyroid gland, esophageal muscle or central compartment soft tissue
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="primary_t_tumor" value="pT4b:	Very advanced local disease. Tumor invades prevertebral fascia, encases carotid artery, or involves mediastinal structures " class=""> pT4b:	Very advanced local disease. Tumor invades prevertebral fascia, encases carotid artery, or involves mediastinal structures
					</div>
				  </div>


                 <p><strong><u>Regional Lymph Nodes (pN) <a href="#" data-toggle="modal" data-target="#myModal6"><i class="fa fa-question-circle"></i></a></u></strong></p>
				<hr>

                <p><em><i><b>For HPV-Mediated (Positive) Oropharynx</b></i></em></p>
                  <div class="row">
					<div class="form-group col-md-6">
					  <input type="radio" name="rln_po" value="pNX: 	Regional lymph nodes cannot be assessed" class=""> pNX: 	Regional lymph nodes cannot be assessed
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln_po" value="pN0: 	No regional lymph node metastasis" class=""> pN0: 	No regional lymph node metastasis
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_po" value="pN1: 	Metastasis in 4 or fewer lymph nodes  " class=""> pN1: 	Metastasis in 4 or fewer lymph nodes
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_po" value="pN2:  	Metastasis in more than 4 lymph nodes" class=""> pN2:  	Metastasis in more than 4 lymph nodes
					</div>
                  </div>


                  <p><em><i><b>For HPV-Unrelated (Negative) Oropharynx and Hypopharynx</b></i></em></p>
                  <div class="row">
					<div class="form-group col-md-6">
					  <input type="radio" name="rln_no" value="pNX: 	Regional lymph nodes cannot be assessed" class=""> pNX: 	Regional lymph nodes cannot be assessed
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln_no" value="pN0: 	No regional lymph node metastasis" class=""> pN0: 	No regional lymph node metastasis
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_no" value="pN1: 	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(−) " class=""> pN1: 	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(−)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_no" value="pN2: 	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(+); or larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−); or metastases in multiple ipsilateral lymph nodes, none larger than 6 cm in greatest dimension and ENE(−); or in bilateral or contralateral lymph node(s), none larger than 6 cm in greatest dimension and ENE(−)" class=""> pN2: 	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(+); or larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−); or metastases in multiple ipsilateral lymph nodes, none larger than 6 cm in greatest dimension and ENE(−); or in bilateral or contralateral lymph node(s), none larger than 6 cm in greatest dimension and ENE(−)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_no" value="pN2a: 	Metastasis in single ipsilateral node 3 cm or smaller in greatest dimension and ENE(+); or a single ipsilateral node larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−)" class=""> pN2a: 	Metastasis in single ipsilateral node 3 cm or smaller in greatest dimension and ENE(+); or a single ipsilateral node larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−)
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln_no" value="pN2b:   Metastases in multiple ipsilateral nodes, none larger than 6 cm in greatest dimension and ENE(−)" class="">pN2b:   Metastases in multiple ipsilateral nodes, none larger than 6 cm in greatest dimension and ENE(−)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_no" value="pN2c: 	Metastases in bilateral or contralateral lymph node(s), none larger than 6 cm in greatest dimension and ENE(−)  " class=""> pN2c: 	Metastases in bilateral or contralateral lymph node(s), none larger than 6 cm in greatest dimension and ENE(−)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_no" value="pN3:	Metastasis in a lymph node larger than 6 cm in greatest dimension and ENE(−); or in a single ipsilateral node larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral or bilateral nodes, any with ENE(+); or a single contralateral node of any size and ENE(+)" class=""> pN3:	Metastasis in a lymph node larger than 6 cm in greatest dimension and ENE(−); or in a single ipsilateral node larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral or bilateral nodes, any with ENE(+); or a single contralateral node of any size and ENE(+)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_no" value="pN3a: 	Metastasis in a lymph node larger than 6 cm in greatest dimension and ENE(−)" class=""> pN3a: 	Metastasis in a lymph node larger than 6 cm in greatest dimension and ENE(−)
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln_no" value="pN3b:  	Metastasis in a single ipsilateral node larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral or bilateral nodes any with ENE(+); or a single contralateral node of any size and ENE(+)" class=""> pN3b:  	Metastasis in a single ipsilateral node larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral or bilateral nodes any with ENE(+); or a single contralateral node of any size and ENE(+)
					</div>
                  </div>
               <p><em><sup>#</sup></em><em> Midline nodes are considered ipsilateral nodes.</em></p>
                <p><em>Note: Pathological ENE should be recorded as ENE(&minus;) or ENE(+).</em></p>
                <p><em>Note: Measurement of the metastatic focus in the lymph nodes is based on the largest metastatic deposit size, which may include matted or fused lymph nodes.</em></p>

                <p><em><i><b>For Nasopharynx  </b></i></em></p>
                  <div class="row">
					<div class="form-group col-md-6">
					  <input type="radio" name="rln_n" value="pNX: 	Regional lymph nodes cannot be assessed" class=""> pNX: 	Regional lymph nodes cannot be assessed
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln_n" value="pN0: 	No regional lymph node metastasis" class=""> pN0: 	No regional lymph node metastasis
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_n" value="pN1: 	Unilateral metastasis in cervical lymph node(s) and/or unilateral or bilateral metastasis in retropharyngeal lymph node(s), 6 cm or smaller in greatest dimension, above the caudal border of cricoid cartilage  " class=""> pN1: 	Unilateral metastasis in cervical lymph node(s) and/or unilateral or bilateral metastasis in retropharyngeal lymph node(s), 6 cm or smaller in greatest dimension, above the caudal border of cricoid cartilage
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_n" value="pN2: 	Bilateral metastasis in cervical lymph node(s), 6 cm or smaller in greatest dimension, above the caudal border of cricoid cartilage " class=""> pN2: 	Bilateral metastasis in cervical lymph node(s), 6 cm or smaller in greatest dimension, above the caudal border of cricoid cartilage
                    </div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln_n" value="pN3:	Unilateral or bilateral metastasis in cervical lymph node(s), larger than 6 cm in greatest dimension, and/or extension below the caudal border of cricoid cartilage" class=""> pN3:	Unilateral or bilateral metastasis in cervical lymph node(s), larger than 6 cm in greatest dimension, and/or extension below the caudal border of cricoid cartilage
					</div>
                  </div>

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
               <div class="form-group col-md-3">
                  <input type="checkbox" name="findings_cb" value="Squamous metaplasia " class=""> Squamous metaplasia
                </div>
               <div class="form-group col-md-4">
                  <input type="checkbox" name="findings_if" value="Inflammation (specify type): " class=""> Inflammation (specify type):
                  Specify: <input type="text" name="findings_if_specify" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <input type="checkbox" name="findings_ot" value="Other (specify): " class="">  Other (specify):
                  Specify: <input type="text" name="findings_ot_specify" class="form-control">
                </div>
			   </div>

               <div class="heading-line-bottom">
			  <h4 class="heading-title"> Ancillary Studies </a></h4>
			 </div>
             <div class="row">
                <div class="form-group col-md-12">
                    <input type="checkbox" name="ancillary_studies" value="Ancilliary Studies  " class=""> Note: For reporting molecular testing and other cancer biomarker testing results, the CAP Head and Neck Biomarker Template should be used. Pending biomarker studies should be listed in the Comments section of this report. Note that some form of high risk HPV testing is required for staging of oropharyngeal squamous cell carcinoma, and p16 immunohistochemistry is acceptable as a surrogate marker of HPV status in oropharynx. Note: It is highly recommended to perform p16 or other form of HPV testing prior to submitting the pT and pN sections of the synoptic checklist rather than listing the status as pending. Using the “Oropharyngeal squamous cell carcinoma, HPV status unknown” option simply because of a lack of access to these tests is highly discouraged. A consultation to another testing center prior to sign out is highly advised in order to use the correct staging system. In the event of an equivocal p16 or HPV test, or insufficient remaining tissue, the use of “Oropharyngeal squamous cell carcinoma, HPV status unknown” is appropriate. The recommendation in these instances is to test a separate sample, if available, and otherwise the staging system defaults to the HPV negative pT and pN criteria (although the tumor should NOT be labeled HPV negative).

                    <input type="hidden" name="ancillary_studies_main" value="Note: For reporting molecular testing and other cancer biomarker testing results, the CAP Head and Neck Biomarker Template should be used. Pending biomarker studies should be listed in the Comments section of this report. Note that some form of high risk HPV testing is required for staging of oropharyngeal squamous cell carcinoma, and p16 immunohistochemistry is acceptable as a surrogate marker of HPV status in oropharynx. Note: It is highly recommended to perform p16 or other form of HPV testing prior to submitting the pT and pN sections of the synoptic checklist rather than listing the status as pending. Using the “Oropharyngeal squamous cell carcinoma, HPV status unknown” option simply because of a lack of access to these tests is highly discouraged. A consultation to another testing center prior to sign out is highly advised in order to use the correct staging system. In the event of an equivocal p16 or HPV test, or insufficient remaining tissue, the use of “Oropharyngeal squamous cell carcinoma, HPV status unknown” is appropriate. The recommendation in these instances is to test a separate sample, if available, and otherwise the staging system defaults to the HPV negative pT and pN criteria (although the tumor should NOT be labeled HPV negative)." />
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

<?php /* C:\Users\DELL INSPIRON 15\Desktop\Laravel Projects\CBReporting\resources\views/pharynx.blade.php */ ?>
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
<title>Head and Neck || Major Salivary Glands</title>

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
              <li class="active"><a href="{{ url('/') }}">Home</a></li>
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
      <div class="container">
		<div Style="padding: 10px;" class="row">
			<div clas="col-md-12">
			<h1>Surgical Pathology Cancer Case Summary</h1>
			  <h4 class="heading-title">Protocol Posting Date: June 2017 </h4>
			  <h4 class="heading-title">MAJOR SALIVARY GLANDS</h4>
			  <p>Select a single response unless otherwise indicated.</p>
			</div>
		</div>
		<hr>

		 <form action="{{ route('msg.preview') }}" method="POST">
		 @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="heading-line-bottom">
              <h4 class="heading-title">Procedure<code>*</code> </h4>
				<!-- Modal -->
			</div>


		  <div class="row">
			<div class="form-group col-md-4">
			  <input type="checkbox" name="procedure_excision" value="Excision" class="" notrequired> Excision
			</div>
            <div class="form-group col-md-4">
			  <input type="checkbox" name="procedure_paro_super" value="Parotidectomy, superficial " class="" notrequired> Parotidectomy, superficial
			</div>
            <div class="form-group col-md-4">
			  <input type="checkbox" name="procedure_paro_deep" value="Parotidectomy, deep " class="" notrequired> Parotidectomy, deep
			</div>
            <div class="form-group col-md-4">
			  <input type="checkbox" name="procedure_paro_total" value="Parotidectomy, total " class="" notrequired> Parotidectomy, total
			</div>
            <div class="form-group col-md-4">
			  <input type="checkbox" name="procedure_paro_ns" value="Parotidectomy, not specified " class="" notrequired> Parotidectomy, not specified
			</div>
            <div class="form-group col-md-4">
			  <input type="checkbox" name="procedure_res_subman" value="Resection, submandibular gland " class="" notrequired> Resection, submandibular gland
			</div>
            <div class="form-group col-md-4">
			  <input type="checkbox" name="procedure_res_sublin" value="Resection, sublingual gland " class="" notrequired> Resection, sublingual gland
			</div>
            <div class="form-group col-md-4">
                Neck (lymph node) dissection (specify): <input type="text" name="procedure_neck_desection" class="form-control" notrequired>
			</div>
            <div class="form-group col-md-4">
                Other (specify): <input type="text" name="procedure_other" class="form-control" notrequired>
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
			  <h4 class="heading-title">Tumor Site <a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-question-circle"></i></a></h4>
			</div>

            <!-- Modal -->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">A.  Tumor Site</h4>
                    </div>
                    <div class="modal-body">
                    <p>The classification applies only to carcinomas of the major salivary glands: parotid, submandibular (submaxillary), and sublingual glands.<a href="#_ENREF_2"><sup>2</sup></a> Tumors arising in minor salivary glands (mucous-secreting glands in the lining membrane of the upper aerodigestive tract) are staged according to the classification schemes corresponding to the anatomic sites in which they reside, eg, oral cavity, pharynx, sinonasal tract.</p>
                    <p><img src="reporting_images/notea.png" class="img-responsive" /><i>Figure 1. Anatomy of the major salivary glands. From: Gray’s Anatomy. 39th ed. Edinburgh: Elsevier Churchill Livingstone; 2005. Reproduced with permission © Elsevier.</i></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <input type="radio" name="tumorsite" value="Parotid gland" class=""> Parotid gland
                    <select class="form-control" name="patotid_gland_option">
                        <option value="Superficial lobe ">Superficial lobe </option>
                        <option value="Deep lobe "> Deep lobe </option>
                        <option value="Entire parotid gland"> Entire parotid gland </option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <input type="radio" name="tumorsite" value="Submandibular gland" class=""> Submandibular gland
                </div>
                <div class="form-group col-md-4">
                    <input type="radio" name="tumorsite" value="Sublingual gland" class=""> Sublingual gland
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    Other (specify):  <input type="text" name="tumorsite_other" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <input type="radio" name="tumorsite" value="Not Specified" class=""> Not Specified
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
            <input type="radio" name="tumorliterality" value="Bilateral" class=""> Bilateral
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
            Greatest dimension (centimeters): <input type="text" name="tumorsize_gt" class="form-control"><br/>
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
			  <h4 class="heading-title">Histologic Type <a href="#" data-toggle="modal" data-target="#myModal5"><i class="fa fa-question-circle"></i></a><code>*</code> </h4>
			 </div>

			 <!-- Modal -->
              <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
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
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

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
                  <input type="radio" name="histologic" value="Adenoid cystic carcinoma, tubular pattern#" class=""> Adenoid cystic carcinoma, tubular pattern# <br/>
                  Specify percentage of solid component(%):  <input type="text" name="histologic_cent" class="form-control">
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenoid cystic carcinoma, cribriform pattern# " class=""> Adenoid cystic carcinoma, cribriform pattern# <br/>
                  Specify percentage of solid component(%):  <input type="text" name="histologic_cent" class="form-control">
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenoid cystic carcinoma, solid pattern#" class=""> Adenoid cystic carcinoma, solid pattern# <br/>
                  Specify percentage of solid component(%):  <input type="text" name="histologic_cent" class="form-control">
                </div>
              </div>

              <div class="row">
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Acinic cell carcinoma " class=""> Acinic cell carcinoma
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, classic, low grade" class=""> Polymorphous adenocarcinoma, classic, low grade
                </div>
               <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, classic, intermediate grade " class=""> Polymorphous adenocarcinoma, classic, intermediate grade
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, classic, high grade" class=""> IPolymorphous adenocarcinoma, classic, high grade
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, cribriform (cribriform adenocarcinoma of salivary origin), low grade " class=""> Polymorphous adenocarcinoma, cribriform (cribriform adenocarcinoma of salivary origin), low grade
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, cribriform (cribriform adenocarcinoma of salivary origin), intermediate grade" class=""> Polymorphous adenocarcinoma, cribriform (cribriform adenocarcinoma of salivary origin), intermediate grade
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Polymorphous adenocarcinoma, cribriform (cribriform adenocarcinoma of salivary origin), high grade  " class=""> Polymorphous adenocarcinoma, cribriform (cribriform adenocarcinoma of salivary origin), high grade
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="(Mammary analogue) Secretory carcinoma " class=""> (Mammary analogue) Secretory carcinoma
				 </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Salivary duct carcinoma " class=""> Salivary duct carcinoma
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Epithelial-myoepithelial carcinoma" class=""> Epithelial-myoepithelial carcinoma
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="(Hyalinizing) clear cell carcinoma " class=""> (Hyalinizing) clear cell carcinoma
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenocarcinoma, not otherwise specified, low grade" class=""> Adenocarcinoma, not otherwise specified, low grade
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenocarcinoma, not otherwise specified, intermediate grade  " class=""> Adenocarcinoma, not otherwise specified, intermediate grade
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Adenocarcinoma, not otherwise specified, high grade " class=""> Adenocarcinoma, not otherwise specified, high grade
				 </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Basal cell adenocarcinoma " class=""> Basal cell adenocarcinoma
				 </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Intraductal carcinoma, low grade " class=""> Intraductal carcinoma, low grade
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Intraductal carcinoma, high grade" class=""> Intraductal carcinoma, high grade
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Lymphoepithelial carcinoma " class=""> Lymphoepithelial carcinoma
                </div>
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Myoepithelial carcinoma " class=""> Myoepithelial carcinoma
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Oncocytic carcinoma " class=""> Oncocytic carcinoma
                </div>
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Poorly differentiated carcinoma, small cell neuroendocrine" class=""> Poorly differentiated carcinoma, small cell neuroendocrine
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Poorly differentiated carcinoma, large cell neuroendocrine " class=""> Poorly differentiated carcinoma, large cell neuroendocrine
                </div>
				 <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Poorly differentiated carcinoma, undifferentiated " class=""> Poorly differentiated carcinoma, undifferentiated
                </div>
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Sebaceous adenocarcinoma " class=""> Sebaceous adenocarcinoma
                </div>
                </div>

                <h6><strong>Preexisting pleomorphic adenoma component (required in addition to salivary carcinoma type, if applicable)</strong></h6>
              <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Squamous cell carcinoma, primary  " class=""> Squamous cell carcinoma, primary
                </div>
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Carcinoma ex pleomorphic adenoma, minimally invasive " class=""> Carcinoma ex pleomorphic adenoma, minimally invasive
                </div>
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Carcinoma ex pleomorphic adenoma, invasive " class=""> Carcinoma ex pleomorphic adenoma, invasive
                </div>
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Carcinoma ex pleomorphic adenoma, intracapsular (noninvasive) " class=""> Carcinoma ex pleomorphic adenoma, intracapsular (noninvasive)
                </div>
                <div class="form-group col-md-4">
                  <input type="radio" name="histologic" value="Carcinoma, type cannot be determined " class=""> Carcinoma, type cannot be determined
                </div>
				<div class="form-group col-md-4">
				   <input type="radio" name="histologic" value="Other histologic type not listed (specify):" class=""> Other histologic type not listed (specify)
                  <input type="text" name="histologic_explain" placeholder="Other histologic type not listed (specify):  " class="form-control">
                </div>
            </div>
				<br/>
                <p style="padding: 10px;" class="justify"><i># Note: If multiple patterns present, select predominant pattern unless solid pattern is greater than 30%, in which case should select solid pattern.</i></p>

                <div class="heading-line-bottom">
                    <h4 class="heading-title">High-Grade Transformation (if applicable)  </h4>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <input type="radio" name="transformation" value="Present" class=""> Present
                    </div>
                    <div class="form-group col-md-4">
                        <input type="radio" name="transformation" value="Not identified" class=""> Not identified
                    </div>
                </div>

                <div class="heading-line-bottom">
                    <h4 class="heading-title">Tumor Extension </h4>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                    Macroscopic Tumor Extension (specify):  <input type="text" name="tumor_extension"class="form-control">
                    </div>
                </div>

        </div>
	</div>


	<div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Margins <a href="#" data-toggle="modal" data-target="#myModal10"><i class="fa fa-question-circle"></i></a></h4>
			 </div>

			 <!-- Modal -->
              <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
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
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

			  <h4 class="heading-title">Invasive Carcinoma Margins (required only if residual invasive carcinoma is present in specimen) </h4>
			  <hr>
			  <div class="row">
                <div class="form-group col-md-12">
                  <input type="radio" name="icm" value="Cannot be assessed  " class=""> Cannot be assessed
                </div>
				<div class="form-group col-md-12">
                  <input type="radio" name="icm" value="Uninvolved by invasive carcinoma" class=""> Uninvolved by invasive carcinoma
					 <div style="margin-left: 50px;" class="row">
						<div class="form-group">
						   <p><strong>Distance of tumor from closest margin (millimeters) </strong><br/><input type="text" name="icm_closest_margin" placeholder="closest margin ___mm " class="form-control"></p>
						   <p><strong>Specify margin, if possible: </strong><br/><input type="text" name="icm_distance_specify" placeholder="Specify ___ mm " class="form-control"></p>
						</div>
					</div>
                </div>
                <div class="form-group col-md-12">
                  <input type="radio" name="icm" value="Involved by invasive carcinoma" class=""> Involved by invasive carcinoma
					 <div style="margin-left: 50px;" class="row">
						<div class="form-group">
						   <p><strong>Specify margin, if possible: </strong><br/><input type="text" name="icm_involve_distance_specify" placeholder="Specify ___ mm " class="form-control"></p>
						</div>
					</div>
                </div>
            </div>

                <div class="heading-line-bottom">
                    <h4 class="heading-title">Lymphovascular Invasion </h4>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                    <input type="radio" name="lymphovascular_invasion" value="Not identified" class=""> Not identified
                    </div>
                    <div class="form-group col-md-4">
                    <input type="radio" name="lymphovascular_invasion" value="Present " class="">  Present
                    </div>
                    <div class="form-group col-md-4">
                    <input type="radio" name="lymphovascular_invasion" value="Cannot be determined " class="">  Cannot be determined
                    </div>
                </div>
			</div>
        </div>

        <div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Perineural Invasion <a href="#" data-toggle="modal" data-target="#myModal13"><i class="fa fa-question-circle"></i></a>
			  </h4>
			 </div>

			 <!-- Modal -->
              <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">D. Perineural Invasion</h4>
                    </div>
                    <div class="modal-body">
                    <p>The presence of perineural invasion (neurotropism) is an important predictor of poor prognosis in head and neck cancer of virtually all sites.<a href="#_ENREF_17"><sup>17</sup></a> The majority of studies evaluating the influence of perineural invasion on therapy and prognosis are limited to head and neck squamous cell carcinoma. However, relative to salivary gland carcinomas, facial nerve dysfunction and perineural involvement are factors influencing the indication for neck dissection, postoperative radiation therapy, and survival rate. Perineural invasion (neurotropism) in the primary salivary gland carcinomas, especially the facial nerve, is associated with recurrent tumor<a href="#_ENREF_18"><sup>18</sup></a> and decreased survival. Further, facial nerve involvement by carcinoma has been found to be predictive of occult metastases.<a href="#_ENREF_19"><sup>19</sup></a> Among other prognostic indicators, perineural invasion in minor salivary gland tumors has been shown to be statistically significant to the outcome.<a href="#_ENREF_20"><sup>20</sup></a> Given the significance relative to prognosis and treatment, perineural invasion is a required data element in the reporting of salivary gland carcinomas.&nbsp;</p>
					</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

			   <div class="row">
                <div class="form-group col-md-4">
                  <input type="radio" name="perineural_invasion" value="Not identified" class=""> Not identified
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="perineural_invasion" value="Present " class="">  Present
                </div>
				<div class="form-group col-md-4">
                  <input type="radio" name="perineural_invasion" value="Cannot be determined " class="">  Cannot be determined
                </div>
			   </div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title">Regional Lymph Nodes <a href="#" data-toggle="modal" data-target="#myModal11"><i class="fa fa-question-circle"></i></a><code>*</code></h4>
			 </div>

			 <!-- Modal -->
              <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
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
                        <p><img src="reporting_images/msg_notee.png" class="img-responsive" /><strong>Figure 2.</strong> The six sublevels of the neck for describing the location of lymph nodes within levels I, II, and V. Level IA, submental group; level IB, submandibular group; level IIA, upper jugular nodes along the carotid sheath, including the subdigastric group; level IIB, upper jugular nodes in the submuscular recess; level VA, spinal accessory nodes; and level VB, the supraclavicular and transverse cervical nodes. From: Flint PW, et al, eds. <em>Cummings Otolaryngology: Head and Neck Surgery.</em> 5th ed. Philadelphia, PA; Saunders: 2010. Reproduced with permission &copy;&nbsp;Elsevier.</p>
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
              <h5>Lymph Node Examination (required only if lymph nodes present in specimen)</h5>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Number of Lymph Nodes Involved:</label>
                            <input type="text" name="ln_involved" placeholder="Number of Lymph Nodes Involved " class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Number cannot be determined (explain):  </label>
                            <input type="text" name="ln_involved_explain" placeholder="Explanation " class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Number of Lymph Nodes Examined::</label>
                            <input type="text" name="ln_examined" placeholder="Number of Lymph Nodes Examined " class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Number cannot be determined (explain):  </label>
                            <input type="text" name="ln_examined_explain" placeholder="Explanation " class="form-control">
                        </div>
                    </div>
                <h5>Lymph Node Metastasis (required only if lymph nodes involved)</h5>
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
				<div class="form-group col-md-6">
                  <input type="radio" name="ene" value="Not identified " class=""> Not identified
                </div>
                <div class="form-group col-md-6">
                  <input type="radio" name="ene" value="Present" class=""> Present
                    <div style="padding-left: 40px;" class="row">
						<div class="form-group form-horizontal col-md-12">
						   <p><strong>Distance from lymph node capsule (millimeters): </strong> <input type="text" name="ln_distance" class="form-control"></p>
						   <p><input type="checkbox" name="enema" value="ENEma (>2 mm)"> <strong>ENEma (>2 mm)</strong></p>
						   <p><input type="checkbox" name="enemi" value="ENEmi (≤2 mm)" class=""> <strong>ENEmi  (≤2 mm)</strong></p>
						</div>
					</div>
                </div>
                <div class="form-group col-md-6">
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
                <br/>Note: The phrases in italics include clinical findings required for AJCC staging. This clinical information may not be available to the pathologist. However, if known, these findings should be incorporated into the pathologic staging.
            </i></p>
			 <!-- Modal -->
              <div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
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

			   <br/>
				 <h4 class="heading-title"> Primary Tumor (pT) <code>*</code></h4>
				<hr>

				  <div class="row">
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_tumor" value="pTX:	Primary tumor cannot be assessed" class="" notrequired> pTX:	Primary tumor cannot be assessed
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_tumor" value="pT0:	No evidence of primary tumor" class=""> pT0:	No evidence of primary tumor#
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_tumor" value="pTis:	Carcinoma in situ" class=""> pTis:	Carcinoma in situ
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_tumor" value="pT1: 	Tumor 2 cm or smaller in greatest dimension without extraparenchymal extension" class=""> pT1: 	Tumor 2 cm or smaller in greatest dimension without extraparenchymal extension#
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_tumor" value="pT2:	Tumor larger than 2 cm but not larger than 4 cm in greatest dimension without extraparenchymal extension" class=""> pT2: Tumor larger than 2 cm but not larger than 4 cm in greatest dimension without extraparenchymal extension#
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="primary_tumor" value="pT3:	Tumor larger than 4 cm and/or tumor having extraparenchymal extension" class=""> pT3:	Tumor larger than 4 cm and/or tumor having extraparenchymal extension
					</div>
					<div class="form-group col-md-12">
					  <input type="radio" name="primary_tumor" value="pT4:  Moderately advanced or very advanced disease" class=""> pT4:  Moderately advanced or very advanced disease
					</div>
					<div class="form-group col-md-12">
					  <input type="radio" name="primary_tumor" value="pT4a:	Moderately advanced disease. Tumor invades skin, mandible, ear canal, and/or facial nerve." class=""> pT4a:	Moderately advanced disease. Tumor invades skin, mandible, ear canal, and/or facial nerve.
					</div>
					<div class="form-group col-md-12">
					  <input type="radio" name="primary_tumor" value="pT4b: Very advanced disease. Tumor invades skull base and/or pterygoid plates and/or encases carotid artery" class=""> pT4b:	Very advanced disease. Tumor invades skull base and/or pterygoid plates and/or encases carotid artery
					</div>
				  </div>

				  <p><i># Extraparenchymal extension is clinical or macroscopic evidence of invasion of soft tissues. Microscopic evidence alone does not constitute extraparenchymal extension for classification purposes. </i></p>


				 <h4 class="heading-title"> Regional Lymph Nodes (pN) <a href="#" data-toggle="modal" data-target="#myModal113"><i class="fa fa-question-circle"></i></a><code>*</code></h4>
                <div class="modal fade" id="myModal113" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">E.  Regional Lymph Nodes (pN)</h4>
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
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
				<hr>
				<div class="row">
					<div class="form-group col-md-6">
					  <input type="radio" name="rln" value="pNX:	Regional lymph nodes cannot be assessed " class="" notrequired> pNX:	Regional lymph nodes cannot be assessed
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln" value="pN0:	No regional lymph node metastasis" class="">  pN0:	No regional lymph node metastasis
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln" value="pN1:	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(-)" class="">  pN1:	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(-)
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln" value="pN2:	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(+); or larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−); or metastases in multiple ipsilateral lymph nodes, none larger than 6 cm in greatest dimension and ENE(−); or in bilateral or contralateral lymph node(s), none larger than 6 cm in greatest dimension and ENE(−)" class="">  pN2:	Metastasis in a single ipsilateral lymph node, 3 cm or smaller in greatest dimension and ENE(+); or larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−); or metastases in multiple ipsilateral lymph nodes, none larger than 6 cm in greatest dimension and ENE(−); or in bilateral or contralateral lymph node(s), none larger than 6 cm in greatest dimension and ENE(−)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln" value="pN2a:	Metastasis in single ipsilateral node 3 cm or smaller in greatest dimension and ENE(+); or a single ipsilateral node larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−)" class=""> pN2a: Metastasis in single ipsilateral node 3 cm or smaller in greatest dimension and ENE(+); or a single ipsilateral node larger than 3 cm but not larger than 6 cm in greatest dimension and ENE(−)
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln" value="pN2b:	Metastases in multiple ipsilateral nodes, none larger than 6 cm in greatest dimension and ENE(−)" class="">  pN2b:	Metastases in multiple ipsilateral nodes, none larger than 6 cm in greatest dimension and ENE(−)
					</div>
                    <div class="form-group col-md-6">
					  <input type="radio" name="rln" value="pN2c:	Metastases in bilateral or contralateral lymph nodes, none larger than 6 cm in greatest dimension and ENE(−)" class="">  pN2c:	Metastases in bilateral or contralateral lymph nodes, none larger than 6 cm in greatest dimension and ENE(−)
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln" value="pN3:	Metastasis in a lymph node larger than 6 cm in greatest dimension and ENE(−); or in a single ipsilateral node larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral, or bilateral nodes any with ENE(+); or a single contralateral node of any size and ENE(+)" class="">  pN3:	Metastasis in a lymph node larger than 6 cm in greatest dimension and ENE(−); or in a single ipsilateral node larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral, or bilateral nodes any with ENE(+); or a single contralateral node of any size and ENE(+)
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln" value="pN3a:	Metastasis in a lymph node larger than 6 cm in greatest dimension and ENE(−)" class="">  pN3a:	Metastasis in a lymph node larger than 6 cm in greatest dimension and ENE(−)
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="rln" value="pN3b:	Metastasis in a single ipsilateral node larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral or bilateral nodes any with ENE(+); or a single contralateral node of any size and ENE(+)" class=""> pN3b:	Metastasis in a single ipsilateral node larger than 3 cm in greatest dimension and ENE(+); or multiple ipsilateral, contralateral or bilateral nodes any with ENE(+); or a single contralateral node of any size and ENE(+)
					</div>
			   </div>
			   <p><i># Midline nodes are considered ipsilateral nodes. Note: Pathological ENE should be recorded as ENE(−) or ENE(+). Note: Measurement of the metastatic focus in the lymph nodes is based on the largest metastatic deposit size, which may include matted or fused lymph nodes.</i></p>
			   <br/>
				 <h4 class="heading-title">Distant Metastasis (pM) (required only if confirmed pathologically in this case)</h4>
				<hr>

				<div class="row">
				    <div class="form-group col-md-6">
					  <input type="radio" name="distance_metastasis" value="pM0: No proven metastasis" class="" notrequired> pM0: No proven metastasis
					</div>
					<div class="form-group col-md-6">
					  <input type="radio" name="distance_metastasis" value="pM1:  Distant metastasis" class=""> pM1:  Distant metastasis
					  <div style="padding-left: 40px;" class="form-group col-md-6">
						<label>Specify site, if known:<label>
						<input type="text" name="distance_metastasis_site" placeholder="Specify site, if known:" class="form-control">
					   </div>
					</div>
				</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="heading-line-bottom">
			  <h4 class="heading-title"> Additional Pathologic Findings</a></h4>
			 </div>

			   <div class="row">
                <div class="form-group col-md-6">
                  <input type="radio" name="ancillary_studies" value="Sialadenitis  " class="">  Sialadenitis
                </div>
                <div class="form-group col-md-6">
                  <input type="radio" name="ancillary_studies" value="Tumor associated lymphoid proliferation (TALP)  " class="">  Tumor associated lymphoid proliferation (TALP)
                </div>
                <div class="form-group col-md-6">
                  <input type="radio" name="ancillary_studies" value="Other " class="">  Other (specify):
                  Specify: <input type="text" name="c" class="form-control">
                </div>
			   </div>

               <div class="heading-line-bottom">
			  <h4 class="heading-title"> Ancillary Studies </a></h4>
			 </div>
			   <p><i> Note: For reporting molecular testing and other cancer biomarker testing results, the CAP Head and Neck Biomarker Template should be used. Pending biomarker studies should be listed in the Comments section of this report</i><p>


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

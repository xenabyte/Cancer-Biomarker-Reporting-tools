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
<title>GASTROINTESTINAL TRACT || COLON AND RECTUM: Excisional Biopsy (Polypectomy)</title>

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
              <h2 class="title">COLON AND RECTUM: Excisional Biopsy (Polypectomy)</h2>
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
			    <h6 class="heading-title">COLON AND RECTUM: Excisional Biopsy (Polypectomy)</h6>
			</div>
		</div>
        <div class="col-md-12">
            @if($tumorsite != '')
                <p><strong>Tumor Site:</strong><span>@if($tumorsite == 'Other (specify):') {{ $tumorsite }} ({{ $tumorsite_other }}) @else {{ $tumorsite }} @endif</span></p>
            @endif
            @if($specimen_integrity != '')
                <p><strong>Specimen Integrity:</strong><span> {{ $specimen_integrity }} </span></p>
            @endif
            @if($polypsize_gd != '' || $polypsize_cd != '')
                <p><strong>Polyp Size:</strong>@if($polypsize_cd != '') Cannot be determined (explain): {{ $polypsize_cd }} @else  Greatest dimension (centimeters): {{ $polypsize_gd }}cm @if($polypsize_length != '' && $polypsize_width != '') => Additional dimensions (centimeters): {{ $polypsize_length }}cm X {{ $polypsize_width }}cm  @endif  @endif<span></span></p>
            @endif
            @if($polyconfig != '')
                <p><strong>Polyp Configuration</strong><span>@if($polyconfig == 'Pedunculated with stalk' ) {{ $polyconfig }} (Stalk length (centimeters): {{ $polyconfig_pedun }}cm) @else  {{ $polyconfig }}  @endif </span></p>
            @endif
            @if($sic_gd != '' || $sic_cd != '')
                <p><strong>Size of Invasive Carcinoma:</strong>@if($sic_cd != '') Cannot be determined (explain): {{ $sic_cd }} @else  Greatest dimension (centimeters): {{ $sic_gd }}cm @if($sic_length != '' && $sic_width != '') => Additional dimensions (centimeters): {{ $sic_length }}cm X {{ $sic_width }}cm  @endif  @endif<span></span></p>
            @endif
            @if($histologic != '')
                <p><strong>Histologic Type:</strong>@if($histologic == 'Other histologic type not listed (specify):') {{ $histologic }} {{ $histologic_explain }} @else  {{ $histologic }}  @endif<span></span></p>
            @endif
            @if($histologic_grade != '')
                <p><strong>Histologic Grade:</strong>@if($histologic_grade == 'Other ') {{ $histologic_grade }}: {{ $histologic_grade_other }} @else  {{ $histologic_grade }}  @endif<span></span></p>
            @endif
            @if($tumor_extension != '')
                <p><strong>Tumor Extension:</strong><span> {{ $tumor_extension }} </span></p>
            @endif
            @if($icm != '')
                <p><strong>Margins:<br/>Deep Margin (Stalk Margin):</strong><span>@if($icm == 'Uninvolved by invasive carcinoma') {{ $icm }} ( @if($icm_closest_margin != '') Distance of invasive carcinoma from margin(millimeters):  {{ $icm_closest_margin }}mm ) @endif @else {{ $icm }}  @endif </span></p>
            @endif
            @if($icm_mm != '')
                <p><strong>Margins:<br/>Mucosal Margin:</strong><span> {{ $icm_mm }} </span></p>
            @endif
            @if($lymphovascular_invasion != '')
                <p><strong>Lymphovascular Invasion:</strong>@if($lymphovascular_invasion == 'Present ') {{ $lymphovascular_invasion }} @if($lymphovascular_invasion_sv != '') ( {{ $lymphovascular_invasion_sv }} )  @endif @if($lymphovascular_invasion_lv != '') ( {{ $lymphovascular_invasion_lv }} ) @endif @else {{ $lymphovascular_invasion }} @endif<span></span></p>
            @endif
            @if($budding != '')
                <p><strong>Tumor Budding:</strong><span> @if($budding == 'Cannot be determined ') {{ $budding }}  @else Number of tumor buds in 1 “hotspot” field (specify total number in area=0.785 mm2): {{ $budding }} ({{ $budding_grade }}) @endif </span></p>
            @endif
            @if($polpytype != '')
                <p><strong>Type of Polyp in Which Invasive Carcinoma Arose:</strong>@if($polpytype == 'Other') {{ $polpytype }}: {{ $polpytype_other }} @else  {{ $polpytype }}  @endif<span></span></p>
            @endif
            @if($findings_ni != '' || $findings_uc != '' || $findings_cd != '' || $findings_op != '' || $findings_ot != '')
                <p><strong> Additional Pathologic Findings: </strong><span>{{ $findings_ni }} {{ $findings_uc }} {{ $findings_cd }}  {{ $findings_op }}({{ $findings_op_specify }}) {{ $findings_ot }} ({{ $findings_ot_specify }}) </span></p>
            @endif


            @if($comments != '') <p><strong> Comments</strong><br/> {{ $comments }} @endif
            @if($all_notes != '')
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">A.  Tumor Site</h4>
                    </div>
                    <div class="modal-body">
                    <ol>
                        <li>
                        <p>The protocol applies to all carcinomas arising in the colon and rectum.<sup>1</sup> It&nbsp;excludes carcinomas of the vermiform appendix and low-grade neuroendocrine neoplasms (carcinoid tumors).</p>
                        <p>&nbsp;</p>
                        <p>The colon is divided as shown in Figure 1. The right colon is subdivided into the cecum and the ascending colon.<sup>2</sup> The left colon is subdivided into the descending colon and sigmoid colon (see Table&nbsp;1).<sup>1</sup></p>
                        <p>&nbsp;</p>
                        <table width="100%">
                        <tbody>
                        <tr>
                        <td>
                        <p>rectum</p>
                        <p>&nbsp;</p>
                        </td>
                        </tr>
                        </tbody>
                        </table>
                        <p>&nbsp;</p>
                        <p><img src="reporting_images/cre.png" class="img-responsive" /><strong>Figure 1.</strong> Anatomic subsites of the colon. Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, Ill. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) edited by Greene et al<sup>2</sup> and published by Springer Science and Business Media, LLC, www.springerlink.com.</p>
                        <p>&nbsp;</p>
                        <p><strong>Table 1. Anatomic Subsites of the Colon and Rectum</strong></p>
                        <table>
                        <thead>
                        <tr>
                        <td width="126">
                        <p><strong>Site</strong></p>
                        </td>
                        <td width="318">
                        <p><strong>Relationship to Peritoneum </strong>(see Note J)</p>
                        </td>
                        <td width="204">
                        <p><strong>Dimensions (approximate)</strong></p>
                        </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td width="126">
                        <p>Cecum</p>
                        </td>
                        <td width="318">
                        <p>Entirely covered by peritoneum</p>
                        </td>
                        <td width="204">
                        <p>6 x 9 cm</p>
                        </td>
                        </tr>
                        <tr>
                        <td width="126">
                        <p>Ascending colon</p>
                        </td>
                        <td width="318">
                        <p>Retroperitoneal; posterior surface lacks peritoneal covering; lateral and anterior surfaces covered by visceral peritoneum (serosa)</p>
                        </td>
                        <td width="204">
                        <p>15-20 cm long</p>
                        </td>
                        </tr>
                        <tr>
                        <td width="126">
                        <p>Transverse colon</p>
                        </td>
                        <td width="318">
                        <p>Intraperitoneal; has mesentery</p>
                        </td>
                        <td width="204">
                        <p>Variable</p>
                        </td>
                        </tr>
                        <tr>
                        <td width="126">
                        <p>Descending colon</p>
                        </td>
                        <td width="318">
                        <p>Retroperitoneal; posterior surface lacks peritoneal covering; lateral and anterior surfaces covered by visceral peritoneum (serosa)</p>
                        </td>
                        <td width="204">
                        <p>10-15 cm long</p>
                        </td>
                        </tr>
                        <tr>
                        <td width="126">
                        <p>Sigmoid colon</p>
                        </td>
                        <td width="318">
                        <p>Intraperitoneal; has mesentery</p>
                        </td>
                        <td width="204">
                        <p>Variable</p>
                        </td>
                        </tr>
                        <tr>
                        <td width="126">
                        <p>Rectum</p>
                        </td>
                        <td width="318">
                        <p>Upper third covered by peritoneum on anterior and lateral surfaces; middle third covered by peritoneum only on anterior surface; lower third has no peritoneal covering</p>
                        </td>
                        <td width="204">
                        <p>12 cm long</p>
                        </td>
                        </tr>
                        </tbody>
                        </table>
                        <p>&nbsp;</p>
                        <p>The transition from sigmoid to rectum is marked by the fusion of the tenia coli of the sigmoid to form the circumferential longitudinal muscle of the rectal wall approximately 12&nbsp;to 15 cm from the dentate line. The rectum is defined clinically as the distal large intestine commencing opposite the sacral promontory and ending at the anorectal ring, which corresponds to the proximal border of the puborectalis muscle palpable on digital rectal examination<sup>1</sup> (Figure 2). When measuring below with a rigid sigmoidoscope, it extends 16 cm from the anal verge.</p>
                        <p>&nbsp;</p>
                        <p><img src="reporting_images/cre2.png" class="img-responsive" /><strong>Figure 2.</strong> Anatomic subsites of the rectum. Used with permission of the American Joint Committee on Cancer (AJCC), Chicago, Ill. The original source for this material is the <em>AJCC Cancer Staging Atlas</em> (2006) edited by Greene et al<sup>2</sup> and published by Springer Science and Business Media, LLC, www.springerlink.com.</p>
                        <p>&nbsp;</p>
                        <p>Tumors located at the border between two subsites of the colon (eg, cecum and ascending colon) are registered as tumors of the subsite that is more involved. If two subsites are involved to the same extent, the tumor is classified as an "overlapping" lesion.</p>
                        <p>&nbsp;</p>
                        <p>A tumor is classified as rectal if its inferior margin lies less than 16 cm from the anal verge or if any part of the tumor is located at least partly within the supply of the superior rectal artery.<sup>3 </sup>The rectum commences at the sacral promontory, and the junction of sigmoid colon and rectum is anatomically marked by fusion of tenia coli to form the circumferential longitudinal muscle of the rectal wall. Intraoperatively, the rectosigmoid junction corresponds to the sacral promontory. A tumor is classified as rectosigmoid when differentiation between rectum and sigmoid according to the previously mentioned guidelines is not possible.<sup>4 </sup></p>
                        <p><sup>&nbsp;</sup></p>
                        <p>Anteriorly, the peritoneal reflection is located at the junction of middle and lower third of the rectum, while laterally, it is located at the junction of upper and middle third of the rectum. Posteriorly, the reflection is located higher and most of the posterior rectum does not have a serosal covering.</p>
                        <p>&nbsp;</p>
                        <p>(a) Whether an adenocarcinoma located in the rectum has a circumferential resection (radial) margin (CRM) or a peritoneal (serosal) surface depends on its location&nbsp;in relation&nbsp;to the peritoneal reflections. Tumors below the anterior peritoneal reflection will have a 360-degree CRM, while those above it may have a CRM or a peritoneal (serosal) surface, or both, depending on the precise location.</p>
                        <p>&nbsp;</p>
                        (b) Neoadjuvant therapy and mesorectal excision&nbsp;are considered&nbsp;standard of care for rectal adenocarcinomas &ldquo;below the anterior peritoneal reflection,&rdquo; while the opinions about use of these modalities vary about rectal adenocarcinomas located above the anterior peritoneal reflection. Conservative options like transanal disc excisions are often considered for location &ldquo;below the anterior peritoneal reflection.&rdquo; In these contexts, the peritoneal reflection refers to the junction of upper and middle third of the rectum; there is ongoing debate in the surgical literature about the concept of peritoneal reflection.<sup>5</sup> If information about tumor location with respect to the peritoneal reflection is included in the report,&nbsp;the&nbsp;aspect of rectum in question (posterior, lateral, anterior)&nbsp;should also be noted.</li>
                        </ol>
                    </div>
                    </div>
                    <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">B.  Histologic Type</h4>
                    </div>
                    <div class="modal-body">
                        <p>For consistency in reporting, the histologic classification proposed by the World Health Organization (WHO) is recommended and is shown below.<sup>6</sup></p>
                        <p>&nbsp;</p>
                        <h2>WHO Classification of Colorectal Carcinoma</h2>
                        <p>Adenocarcinoma</p>
                        <p>Mucinous (colloid) adenocarcinoma (greater than 50% mucin)</p>
                        <p>Signet-ring cell carcinoma (greater than 50% signet-ring cells)</p>
                        <p>Medullary carcinoma</p>
                        <p>Squamous cell carcinoma</p>
                        <p>Adenosquamous carcinoma</p>
                        <p>Poorly differentiated neuroendocrine carcinoma</p>
                        <p>Large cell neuroendocrine carcinoma</p>
                        <p>Small cell neuroendocrine carcinoma</p>
                        <p>Mixed adenoneuroendocrine carcinoma</p>
                        <p>Undifferentiated carcinoma</p>
                        <p>&nbsp;</p>
                        <p>The histologic types of colorectal carcinoma that have been shown to have adverse prognostic significance independent of stage are signet-ring cell carcinoma<sup>7</sup> and small cell carcinoma (poorly differentiated neuroendocrine carcinoma).<sup>8</sup></p>
                        <p>&nbsp;</p>
                        <p>Medullary carcinoma is a distinctive histologic type strongly associated with high levels of microsatellite instability (MSI-H), indicative of defects in normal DNA repair gene function. Medullary carcinoma may occur either sporadically or in association with Lynch syndrome.<sup>9-11 </sup>This tumor type is characterized by solid growth in nested, organoid, or trabecular patterns, with no immunohistochemical evidence of neuroendocrine differentiation. Medullary carcinomas are also characterized by numerous tumor infiltrating lymphocytes and a better prognosis.</p>
                        <p>&nbsp;</p>
                        <p>Micropapillary carcinoma is characterized by small, tight clusters of tumor cells in cleft-like spaces, and is often present in association with conventional adenocarcinoma. This variant is strongly associated with lymphovascular invasion and lymph node metastasis.<sup>12</sup></p>
                        <p>&nbsp;</p>
                        <p>Serrated adenocarcinomas are characterized by neoplastic glands showing prominent serrations, tumor cells with basal nuclei and eosinophilic cytoplasm, and no or minimal luminal necrosis. These tumors are thought to be related to traditional serrated adenomas and may have a more aggressive course than conventional adenocarcinoma.<sup>13</sup></p>
					</div>
                  </div>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">C. Histologic Grade</h4>
                    </div>
                    <div class="modal-body">
                        <p>A number of grading systems for colorectal cancer have been suggested, but a single widely accepted and uniformly used standard for grading is lacking. Most systems stratify tumors into 3 or 4 grades as follows:</p>
                        <p>&nbsp;</p>
                        <p>Grade 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Well differentiated (&gt;95% gland formation)</p>
                        <p>Grade 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Moderately differentiated (50-95% gland formation)</p>
                        <p>Grade 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Poorly differentiated (&lt;50% gland formation)</p>
                        <p>Grade 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Undifferentiated (no gland formation or mucin; no squamous or neuroendocrine differentiation)</p>
                        <p>&nbsp;</p>
                        <p>Despite a significant degree of interobserver variability<sup>14 </sup>histologic grade has been shown to be an important prognostic factor in many studies,<sup>15,16</sup> with strong correlation between poor differentiation and adverse outcome.<sup>17</sup> While some studies have stratified grade into a two-tiered low- and high-grade system, a three- or four-tier system is more commonly used for gastrointestinal carcinomas.&nbsp; The AJCC has specified use of a four-tiered grading system for colorectal cancer for the 8<sup>th</sup> edition of the TNM manual.<sup>1</sup> Pathologists should use the four-tier histologic grading scheme as specified above to prevent errors in data recording. As per WHO, the grading scheme applies to adenocarcinoma, not otherwise specified, and not to histologic variants. For example, medullary carcinomas behave as low grade tumors even though they may appear poorly differentiated. This grading scheme is also not applicable to poorly differentiated neuroendocrine carcinomas.</p>
					</div>
                  </div>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">D AND E. Lymphovascular Invasion</h4>
                    </div>
                    <div class="modal-body">
                    <h2>D.&nbsp; Carcinoma in an Adenomatous Polyp: Microscopic Tumor Extension and High-Risk Features</h2>
                    <p>Colorectal adenomas containing invasive adenocarcinoma that extends through the muscularis mucosa into the submucosa have been defined as <em>malignant polyps.</em><sup>14</sup> This term encompasses cases in which the entire polyp head is replaced by carcinoma and adenomas with focal malignancy, but the definition excludes adenomas with high-grade dysplasia or intramucosal carcinoma (invasive carcinoma limited to the lamina propria or invading no deeper than the muscularis mucosa), because these polyps possess negligible biological potential for metastasis (see Tis in Note M).</p>
                    <p>&nbsp;</p>
                    <p>Malignant polyps removed by endoscopic polypectomy require evaluation of histologic factors related to the risk of adverse outcome (ie, lymph node metastasis or local recurrence from residual malignancy) following polypectomy.<sup>18-20</sup> Factors shown to have independent prognostic significance and are important in determining the need for further surgical treatment include:</p>
                    <ul>
                    <li>Histologic grade</li>
                    <li>Status of the resection margin</li>
                    <li>Lymphatic/venous vessel involvement</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>An increased risk of adverse outcome has been shown to be associated with:</p>
                    <ul>
                    <li>High-grade carcinoma</li>
                    <li>Tumor at or less than 1 mm from the resection margin</li>
                    <li>Lymphatic/venous vessel involvement</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Reporting of additional histologic factors that have been advocated for assessing risk include tumor budding (note F), depth or area of submucosal invasion. Submucosal involvement has been divided into superficial, mid and deep levels for sessile polyps (Kikuchi levels sm1, sm2 and sm3) for sessile polyps,<sup>21</sup> and into four levels (head, neck, stalk and beyond stalk) in pedunculated polyps (Haggitt levels).<sup>22</sup> Based on measurement, submucosal invasion more than 1mm has been recognized as an adverse prognostic factor.<sup>20</sup> However, it can be difficult to accurately assess the depth or extent of submucosal involvement due to improper orientation and absence of muscularis propria in these specimens.</p>
                    <h2>&nbsp;</h2>
                    <h2>E.&nbsp; Lymph-Vascular and Perineural Invasion</h2>
                    <p>It is recommended that small vessel vascular invasion should be reported separately from venous (large vessel) invasion. Small vessel invasion indicates tumor involvement of thin-walled structures lined by endothelium, without an identifiable smooth muscle layer or elastic lamina. Small vessels include lymphatics, capillaries, and postcapillary venules. Small vessel invasion is associated with lymph node metastasis and has been shown to be independent indicator of adverse outcome in several studies.<sup>23,24</sup> The higher prognostic significance of extramural small vessel invasion has been suggested,<sup>25</sup> but the importance of anatomic location in small vessel invasion (extramural or intramural) is not well defined.&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>Tumor involving endothelium-lined spaces with an identifiable smooth muscle layer or elastic lamina is considered venous (large vessel) invasion. Circumscribed tumor nodules surrounded by an elastic lamina on hematoxylin-eosin (H&amp;E) or elastic stain are also considered venous invasion. Venous invasion can be extramural (beyond muscularis propria) or intramural (submucosa or muscularis propria). Extramural venous invasion has been demonstrated by multivariate analysis to be an independent adverse prognostic factor in multiple studies and is a risk factor for liver metastasis.<sup>25</sup> The significance of intramural venous invasion is less clear. Histologic features like tumor deposits adjacent to arterioles (&ldquo;orphan arteriole&rdquo; sign) and elongated tumor nodules extending into pericolic fat from the muscularis propria (&ldquo;protruding tongue&rdquo; sign) can raise the suspicion for venous invasion.<sup>26</sup> Elastic stain can lead to 2- to 3-fold increase in the detection of venous invasion, and may be used to improve assessment of this feature.<sup>27</sup></p>
                    <p>&nbsp;</p>
                    <p>Perineural invasion has been shown to be independent indicator of poor prognosis.<sup>28-30</sup> While some series did not find perineural invasion to be a significant predictive factor in stage II disease,<sup>31,32</sup> many studies have confirmed its adverse effect on survival in stage II disease.<sup>24,33</sup> Extramural perineural invasion may have a greater adverse prognostic effect,<sup>29</sup> but the distinction between intramural and extramural perineural invasion has not been well studied.</p>
					</div>
                  </div>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">F. Tumor Budding </h4>
                    </div>
                    <div class="modal-body">
                    <p>The presence of single cells or small clusters of less than five cells at the advancing front of the tumor is considered as peritumoral tumor budding. Numerous studies have shown that high tumor budding in adenocarcinoma arising in polyp is a significant risk factor for nodal involvement,<sup>20,34-38</sup> with tumor budding being the most significant factor in some studies.<sup>35</sup> Similarly, the adverse prognosis of high tumor budding has been shown in stage II patients and its inclusion as a high risk factor for making chemotherapy decisions for stage II patients has been advocated.<sup>36,38</sup> Different criteria for evaluating and reporting tumor budding have been followed in literature. An international tumor budding consensus conference (ITBCC) in 2016 recommended the following criteria for evaluating tumor budding<sup>39</sup>:</p>
                    <p>(1) Tumor budding counts should be done on H&amp;E sections. In cases of obscuring factors like inflammation, immunohistochemistry for keratin can be obtained to assess the advancing edge for tumor buds, but the scoring should be done on H&amp;E sections.</p>
                    <p>(2) Tumor budding should be reported by selecting a &ldquo;hotspot&rdquo; chosen after review of all available slides with invasive tumor. The total number of buds should be reported in an area measuring 0.785 mm<sup>2</sup>, which corresponds to 20x field in some microscopes (use appropriate conversion for other microscopes, see table below).</p>
                    <p>(3) Both total number of buds and a three-tier score (based on 0.785 mm<sup>2 </sup>field area) should be reported: low (0-4 &nbsp;buds), intermediate (5-9 buds) and high (10 or more buds).</p>
                    <p>This is not a required element, but it is recommended that this feature be reported for cancers arising in polyps as well as for stage I and II cases.</p>
                    <p>&nbsp;</p>
                    <p><img src="reporting_images/table1.png" class="img-responsive" /><br/>Table. ITBCC Normalization Table for Reporting Tumor Budding According to Microscope.</p>
                    <p>To obtain tumor bud count for your field of view, divide by the normalization number.</p>
					</div>
                  </div>


            @endif
		</div>
        </div>

      <div style="margin-top: 100px;" class="container">
      <br/><br/>
      <hr><hr>
        <div class="row">
                <button type="button"  class="btn btn-primary btn-block" onclick="Export2Doc('exportContent', 'COLON AND RECTUM: Excisional Biopsy (Polypectomy)');">Export as .doc</button>
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

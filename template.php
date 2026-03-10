<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      template.php
* @Package:   GetSimple
* @Action:    Innovation theme for GetSimple CMS
*
*****************************************************/
# Get this theme's settings based on what was entered within its plugin.
# This function is in functions.php
$innov_settings = Innovation_Settings();
# Include the header template
include('header.inc.php');
?>
<section>
  <div class="breadcrumb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <div id="cabecera">
            <h2 class="title h1">Mapping Africa’s Green Mineral Partnerships:</h2>
            <h4 class="subtitle h4">Charting Africa’s Critical Mineral Partnerships</h4>
            <div class="apri-separator mb-5" style="max-width: 55%;"></div>
          </div>
          <div class="description-container mx-auto">
            <p class="description" id="descriptionText">
              This interactive map and its accompanying report illustrate bilateral and multilateral agreements made with African countries regarding access to their green or critical minerals. These minerals, essential for the energy transition, have become a key focus of geopolitical strategies worldwide in recent years.</p>
            <p class="description" id="descriptionText1">
              This strategic importance of critical minerals is increasing alongside intensifying geopolitical competition over future markets for green energy products. Consequently, multilateral and bilateral agreements between states regarding the production, access and processing of critical minerals are on the rise. Africa’s mineral wealth has attracted significant interest, positioning African states as key players in these partnerships.
              These agreements – often called “mineral partnerships,” “Memorandum of Understanding” (MoUs), or “cooperation agreements” – vary considerably in their content, format, and key actors. They may include provisions for value chain integration, joint ventures and knowledge sharing, among other areas.
              <button id="viewMoreBtn" class="text-primary fs-lg ms-2">Show more <i class="icon-arrow-down"></i></button>
            </p>
            <p class="description hidden" id="descriptionText2">
              Information about these partnerships is not always publicly available, and their broader implications remain unclear. To address this gap, APRI conducted an extensive online search using multiple search engines and databases. The search encompassed G20 and BRICS+ member states, as well as states with significant mining sectors, such as Chile, Cuba and Venezuela. Although this search yielded a significant number of partnerships,
              it is not exhaustive. The map and accompanying information will be updated regularly as knowledge of these partnerships expands.</p>
            <p class="description hidden" id="descriptionText3">
              For a comprehensive understanding, explore this interactive map in conjunction with the accompanying report (accessible via the link below), which provides an in-depth analysis of the most salient bilateral agreements with African states.
              <button id="viewLessBtn" class="text-primary fs-lg ms-2">Show less <i class="icon-arrow-up"></i></button>
            </p>
          </div>
          <hr class="pt-3 mt-3" style="max-width:20px;">
          <div class="downloadButton apri-content">
            <a href="https://afripoli.org/uploads/reports/2025/1/APRI_Mapping_Africa_Green_Mineral_Partnerships.pdf" download style="text-decoration: none; color: inherit;">
              <i class="bi bi-filetype-pdf social-link-icon ms-1 me-1"></i>
              <strong>Download report</strong>
              <i class="bi bi-download social-link-icon ms-1"></i>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-5">
  <div class="print-div">
    <div style=" display: flex; align-items: center; font-family:'Rubik',Helvetica,sans-serif; padding-top: 30px; width: 100%;
      ">
      <div class="small" style="flex-grow: 1;">
        Explore state-level agreements regarding access to Africa's critical
        minerals. Select a country on the map or a non-African partner on
        the left-hand pane to view specific agreements.
      </div>
      <div style="display: flex; height: 100%; margin-left: 12px">
        <button class="print-button" id="printPage" style="margin-left: auto; display: flex; align-items: center">
        Print
        <img src="<?php get_theme_url(); ?>/img/icons/print.svg" alt="Print Icon" class="print-icon" />
        </button>
      </div>
    </div>
    <div class="hidenthings">
      <span class="_picker-open" id="selectedText">African</span>
      <span class="_picker-open" id="africanCountry">open</span>
      <span class="_picker-open" id="blockNameNowTemp">open</span>
      <span class="_picker-open" id="blockNameTemp">open</span>
    </div>
  </div>
  <div class="container-xl">
    <div class="picker" id="picker" style="display: none">
      <div class="picker-panel">
        <div class="picker-choose">
          <span class="cancel" onclick="cancel()">Close</span>
          <span class="confirm" onclick="confirmPicker()">Select</span>
          <h1 class="picker-title"></h1>
        </div>
        <div class="picker-content">
          <div class="wheel-wrapper">
            <div class="wheel-scrollbar"></div>
            <!-- Scrollbar simulado -->
            <div class="wheel" id="wheelWrapper">
            <ul class="wheel-scroll" id="wheelList"></ul>
          </div>
        </div>
      </div>
      <div class="picker-footer"></div>
    </div>
  </div>
</div>
<script>
  // Set the theme URL for use in modules
  window.THEME_URL = "<?php get_theme_url(); ?>";
</script>
<script type="module" src="<?php get_theme_url(); ?>/modules/picker.js"></script>
<div id="printable" class="allview">
  <div class="first-col d-flex justify-content-end selectores col-4">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item divAfrican">
        <h2 class="accordion-header partner-header" id="flush-headingZero">
        <button id="africaButton" class="accordion-button2 main-select active" type="button"
        data-bs-toggle="collapse" data-bs-target="#flush-collapseZero" aria-expanded="false"
        aria-controls="flush-collapseZero" id="clickable">
        African countries overview
        <img class="triangle-icon africantriangle" src="<?php get_theme_url(); ?>/img/icons/arrowD.svg" alt="Toggle arrow" />
        </button>
        </h2>
        <div id="flush-collapseZero" class="accordion-collapse collapse" aria-labelledby="flush-headingZero"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-bilateral"></div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header partner-header" id="flush-headingOne">
        <button class="accordion-button2" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
        id="clickable">
        Bilateral partnerships
        <img class="triangle-icon" src="<?php get_theme_url(); ?>/img/icons/arrowD.svg" alt="Toggle arrow" />
        </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body accordion-bilateral custom-scroll-accordion">
            <div class="list-group list-group-flush list-partners">
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Austria</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Belarus</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Brazil</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Canada</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Chile</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">China</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Cuba</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">East Timor</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">EU</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">India</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Indonesia</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Iran</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Italy</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Japan</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Portugal</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Qatar</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Russia</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Saudi Arabia</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">South Korea</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Turkey</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">United Arab Emirates</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">United Kingdom</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">USA</a>
              <a href="#" class="list-group-item btn-outline-dark country-select" type="button" data-toggle="button"
              aria-pressed="false">Venezuela</a>
            </div>
            <!-- Línea roja añadida -->
          </div>
          <div class="line"></div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header partner-header" id="flush-headingTwo">
        <button class="accordion-button2" type="button" data-bs-toggle="collapse"
        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
        id="multilateral">
        Multilateral partnerships
        <img class="triangle-icon" src="<?php get_theme_url(); ?>/img/icons/arrowD.svg" alt="Toggle arrow" />
        </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body accordion-multilateral">
            <div class="list-group list-group-flush list-partners">
              <a href="#" class="list-group-item btn-outline-dark bloc-select" type="button">BRICS Geological Platform</a>
              <a href="#" class="list-group-item btn-outline-dark bloc-select" type="button">Minerals Security Partnership</a>
              <!-- <a href="#" class="list-group-item btn-outline-dark bloc-select" type="button">EU Raw Materials
              Club</a> -->
              <a href="#" class="list-group-item btn-outline-dark bloc-select" type="button">Energy Resource Governance Initiative</a>
              <a href="#" class="list-group-item btn-outline-dark bloc-select" type="button">Indo-Pacific Economic Framework for Prosperity (IPEF) Critical Minerals Dialogue</a>
              <a href="#" class="list-group-item btn-outline-dark bloc-select" type="button">Sustainable Critical Mineral Alliance</a>
              <a href="#" class="list-group-item btn-outline-dark bloc-select" type="button">Conference on Critical Materials and Minerals</a>
              <a href="#" class="list-group-item btn-outline-dark bloc-select" type="button">France-Germany-Italy Joint Communique on Critical Raw Materials</a>
              <a href="#" class="list-group-item btn-outline-dark bloc-select" type="button">Critical Minerals Mapping Initiative</a>
              <a href="#" class="list-group-item btn-outline-dark bloc-select" type="button">Lobito Corridor Project</a>
            </div>
          </div>
          <div class="line"></div>
          <!-- Línea roja añadida -->
        </div>
      </div>
    </div>
    <div class="nameMobile">
      <div>
        <h2 class="titleButton" id="blockName">
        African countries overview
        </h2>
      </div>
    </div>
  </div>
  <div id="map" class="second-col justify-content-center align-center center">
    <div class="overlay" id="showScrollable">
      <div class="overlay-text">
        <img class="hand" src="<?php get_theme_url(); ?>/img/icons/hand-touch.svg" alt="Zoom In" />
        <h1 class="titleBlur">Touch the screen</h1>
        <h2 class="subtitleBlur">to start exploring the map</h2>
      </div>
    </div>
    <script type="module" src="<?php get_theme_url(); ?>/main.js"></script>
    <div class="controls">
      <!-- Controles aquí -->
      <div class="control-toggle">
        <h1 class="label">Show country names</h1>
        <div class="toggle-container" id="toggleLabels">
          <div class="toggle-button active"></div>
        </div>
      </div>
      <div class="btnZoom">
        <button id="zoomIn" class="btn btnplus">
        <img src="<?php get_theme_url(); ?>/img/icons/zoom-off.svg" alt="Zoom In" />
        </button>
        <button id="zoomOut" class="btn btnminus">
        <img src="<?php get_theme_url(); ?>/img/icons/zoom-out-off.svg" alt="Zoom Out" />
        </button>
      </div>
    </div>
  </div>
  <div class="instruccions">
    <div style="flex-grow: 1;">
      Explore state-level agreements regarding access to Africa's critical
      minerals. Select a country on the map or a non-African partner to
      view specific agreements.
    </div>
  </div>
  <div class="right">
    <div class="third-col">
      <div class="card partnership"></div>
    </div>
  </div>
</div>
 <div class="container-xl pt-5">
    <div class="apri-separator pt-4 mb-4" style="max-width: 10%;"></div>
    <div class="text-secondary">This mapping was produced under the supervision and leadership of the Geopolitics and Geoeconomics Program team: Amandine Gnanguênon and Emmanuel Baba Aduku. We wish to thank Pia Beuter and Lili Gabadadze for their contributions to data collection and analysis during their internship with the team. We extend our sincere thanks to Rajneesh Bhuee and Judy Hofmeyr, Research Fellows, for their expert contributions. We are equally grateful to Chris Vandome for his careful review. We also thank Micaela Rosadio, Internet Teapot and Stephen Oloh for their technical support in designing and developing the mapping and to Vincent Reich for coordinating the communication activities supporting this initiative. Most importantly, this work is a testament to the teamwork and commitment of everyone at APRI.</div>
  </div>
<div class="lastUpdate">
  <span> Last update: 30.11.2024 </span>
</div>
</div>
</section>
<!-- <section class="section section-page pt-3 mt-2">
<?php // get_page_content(); ?>
</section>-->
<!-- include the footer template -->
<?php include('footer.inc.php'); ?>
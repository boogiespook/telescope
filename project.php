<!DOCTYPE html>
  <html lang="en-us">
    <head>
      <meta charSet="utf-8"/>
      <meta http-equiv="x-ua-compatible" content="ie=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <title data-react-helmet="true">Project Telescope</title>
      <link rel="stylesheet" href="/node_modules/@patternfly/patternfly/patternfly.css" />
      <link rel="stylesheet" href="/node_modules/@patternfly/patternfly/patternfly-addons.css" />
      <link rel="stylesheet" href="/node_modules/@patternfly/patternfly/assets/fontawesome/brands.css" />
      <link rel="stylesheet" href="style.css" />
    </head>

    <body>

<?php
#phpinfo();
$totalGood = 0;
$totalBad = 0;
$goodItems = array();
$badItems = array();

function putResults($title) {
if (!empty($_REQUEST["icon"])) {
	switch ($_REQUEST["icon"]) {
	case "aperture":
		$icon = "icon-aperture";
		$iconBad = "icon-aperture";
		break;
	case "satellite":
		$icon = "fas fa-thin fa-satellite-dish";
		$iconBad = "fas fa-thin fa-satellite";
		break;
	case "circles":
		$icon = "fas fa-check-circle";	
		$iconBad = "fas fa-exclamation-circle";	
		break;
	case "dollar":
		$icon = "fas fa-dollar-sign";
		$iconBad = "fas fa-money-bill-alt";
		break;			
	case "retail":
		$icon = "fas fa-shopping-cart";
		$iconBad = "fas fa-cart-arrow-down";
		break;			
	case "healthcare":
		$icon = "fas fa-ambulance";
		$iconBad = "fas fa-hospital";
		break;			
	case "education":
		$icon = "fas fa-graduation-cap";
		$iconBad = "fas fa-user-graduate";
		break;			
	case "redhat":
		$icon = "fab fa-redhat";
		$iconBad = "fab fa-redhat";
		break;			
	case "fire":
		$icon = "fas fa-fire";
		$iconBad = "fas fa-fire";
		break;		
	}
} else {  
$icon =     "icon-aperture";
$iconBad =  "icon-aperture";
}
$projectGood = 0;
$projectBad = 0;	
global $totalGood, $totalBad, $goodItems, $badItems, $projectBad, $projectGood;  
$content_good='
  <li class="pf-c-progress-stepper__step pf-m-success"
    aria-label="completed step,">
    <div class="pf-c-progress-stepper__step-connector">
      <span class="pf-c-progress-stepper__step-icon">
        <i class="' . $icon . '" aria-hidden="true"></i>
      </span>
    </div>
    <div class="pf-c-progress-stepper__step-main">
      <div class="pf-c-progress-stepper__step-title">' . $title . '</div>
    </div>
  </li>
';

$content_bad = '
  <li class="pf-c-progress-stepper__step pf-m-current pf-m-danger"
    aria-label="current step,step with failure,">
    <div class="pf-c-progress-stepper__step-connector">
      <span class="pf-c-progress-stepper__step-icon">
        <i class="' . $iconBad . '" aria-hidden="true"></i>
      </span>
    </div>
    <div class="pf-c-progress-stepper__step-main">
      <div class="pf-c-progress-stepper__step-title">' . $title . '</div>
    </div>
  </li>

';

$res = array("good","bad"); 
$randRes = array_rand($res);
$toUse = $res[$randRes];
print ${"content_$toUse"};
if($toUse == 'good') {
	$totalGood++;
	array_push($goodItems,$title);
	$projectGood++;
} else {
	$totalBad++;
	array_push($badItems,$title);
	$projectBad++;
}
}

function putProject($projectTitle) {
  print '<h3 class="pf-c-title pf-m-xl">Project ' . $projectTitle . '</h3>
<ol class="pf-c-progress-stepper pf-m-center">';
  putResults("Scanned Base Image");
  putResults("Proxy Configured"); 
  putResults("Logging Configured");
  putResults("SAST Testing");
  putResults("DAST Testing"); 
  putResults("Vulnerability Scan"); 
  putResults("Runtime Scan");
#  $percentage =  ($projectBad / $projectGood)*100;
#print "<ul><li>$percentage Compliant</li></ul>";

  print "</ol>";

}
?>




      <div id="___gatsby">
        <div style="outline:none" tabindex="-1" id="gatsby-focus-wrapper">
          <main class="ws-site-root">
          <div class="ws-fullscreen-example">
            <div class="pf-c-page" id="page-default-nav-example">
              <a class="pf-c-skip-to-content pf-c-button pf-m-primary" href="#main-content-page-default-nav-example">Skip to content</a>
              <header class="pf-c-page__header">
                <div class="pf-c-page__header-brand">
                  <div class="pf-c-page__header-brand-toggle">
                    <button class="pf-c-button pf-m-plain" type="button" id="page-default-nav-example-nav-toggle" aria-label="Global navigation" aria-expanded="true" data-toggle="collapse" data-target="#mainSideNav" aria-controls="mainSideNav">
                      <i class="fas fa-bars" aria-hidden="true"></i>
                    </button>
                  </div>
                  <a class="pf-c-page__header-brand-link">
                  <img class="pf-c-brand" src="/assets/images/telescope-banner.png" alt="Telescope logo" />
                  </a>
                </div>
                <div class="pf-c-page__header-tools">
                  <div class="pf-c-page__header-tools-group">
                    <div class="pf-c-page__header-tools-item pf-m-hidden pf-m-visible-on-lg">
                      <button class="pf-c-button pf-m-plain" type="button" aria-label="Settings">
                        <i class="fas fa-cog" aria-hidden="true"></i>
                      </button>
                    </div>
                    <div class="pf-c-page__header-tools-item pf-m-hidden pf-m-visible-on-lg">
                      <button class="pf-c-button pf-m-plain" type="button" aria-label="Help">
                        <i class="pf-icon pf-icon-help" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                  <div class="pf-c-page__header-tools-group">
                    <div class="pf-c-page__header-tools-item pf-m-hidden-on-lg">
                      <div class="pf-c-dropdown">
                        <button class="pf-c-dropdown__toggle pf-m-plain" type="button" id="page-default-nav-example-dropdown-kebab-right-aligned-1-button" aria-expanded="false" aria-label="Actions">
                          <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                        </button>
                        <ul class="pf-c-dropdown__menu pf-m-align-right" aria-labelledby="page-default-nav-example-dropdown-kebab-right-aligned-1-button" hidden>
                          <li>
                            <a class="pf-c-dropdown__menu-item" href="#">Link</a>
                          </li>
                          <li>
                            <button class="pf-c-dropdown__menu-item" type="button">Action</button>
                          </li>
                          <li>
                            <button class="pf-c-dropdown__menu-item" type="button" disabled>Disabled action</button>
                          </li>
                          <li class="pf-c-divider" role="separator"></li>
                          <li>
                            <a class="pf-c-dropdown__menu-item" href="#">Separated link</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="pf-c-page__header-tools-item pf-m-hidden pf-m-visible-on-md">
                      <div class="pf-c-dropdown">
                        <button class="pf-c-dropdown__toggle pf-m-plain" type="button" id="page-default-nav-example-dropdown-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="pf-c-dropdown__toggle-text">Chris Jenkins</span>
                          <span class="pf-c-dropdown__toggle-icon">
                            <i class="fas fa-caret-down" aria-hidden="true"></i>
                          </span>
                        </button>
                        <div class="pf-c-dropdown__menu" aria-labelledby="page-default-nav-example-dropdown-button">[Panel contents here]</div>
                      </div>
                    </div>
                  </div>
                  <img class="pf-c-avatar" src="/assets/images/me-cartoon.png" alt="Red Hat logo" />
                </div>
              </header>
              <div class="pf-c-page__sidebar collapse show" id="mainSideNav">
                <div class="pf-c-page__sidebar-body">
                  <nav class="pf-c-nav" id="page-default-nav-example-primary-nav" aria-label="Global">
                    <ul class="pf-c-nav__list">
                      <li class="pf-c-nav__item">
                        <a href="#" class="pf-c-nav__link pf-m-current" aria-current="page">Telescope Dashboard </a>
                      </li>
                      <li class="pf-c-nav__item">
                        <a href="#" class="pf-c-nav__link">Security Policies</a>
                      </li>
                      <li class="pf-c-nav__item">
                        <a href="#" class="pf-c-nav__link">Integration Plugins</a>
                      </li>
<form action="index.php">
<select
  class="pf-c-form-control pf-m-placeholder"
  id="icon"
  name="icon"
  aria-label="Standard select example"
>
  <option value selected>Icon Select</option>
  <option value="satellite">Satellite</option>
  <option value="aperture">Aperture</option>
  <option value="circles">Circles</option>
  <option value="dollar">Dollar</option>
  <option value="retail">Retail</option>
  <option value="healthcare">Healthcare</option>
  <option value="education">Education</option>
  <option value="redhat">Red Hat</option>
  <option value="fire">Fire</option>
  
</select>
      <button class="pf-c-button pf-m-primary" type="submit">Change Icon</button>

</form>

                    </ul>

                  </nav>
                </div>
              </div>
              <main class="pf-c-page__main" tabindex="-1" id="main-content-page-default-nav-example">
                <section class="pf-c-page__main-breadcrumb">
                  <nav class="pf-c-breadcrumb" aria-label="breadcrumb">
                    <ol class="pf-c-breadcrumb__list">
                      <li class="pf-c-breadcrumb__item">
                        <a href="#" class="pf-c-breadcrumb__link">Telescope home</a>
                      </li>
                      <li class="pf-c-breadcrumb__item">
                        <span class="pf-c-breadcrumb__item-divider">
                          <i class="fas fa-angle-right" aria-hidden="true"></i>
                        </span>
                        <a href="#" class="pf-c-breadcrumb__link">Project Lens</a>
                      </li>
                    </ol>
                  </nav>
                </section>
                <section class="pf-c-page__main-section pf-m-light">
                  <div class="pf-c-content">
                    <h1>Telescope  Dashboard </h1>
                  </div>
                </section>

<section class="pf-c-page__main-section pf-m-center">

  <?php 
include("randNames.php");
putProject(getRandomName());  
putProject(getRandomName());  
putProject(getRandomName());  
putProject(getRandomName());  

#putProject("1");  
#putProject("2");  
#putProject("3");  
#putProject("4");  

?>
<br><hr><br>  
                  <div class="pf-l-gallery pf-m-gutter">&nbsp;
                    <div class="pf-l-gallery__item">
                      <div class="pf-c-card">
                        <div class="pf-c-card__body">Status Report
<button
  class="pf-c-button pf-m-plain"
  type="button"
  aria-label="Unread notifications"
>
  <span class="pf-c-notification-badge pf-m-unread">
    <i class="pf-icon-bell" aria-hidden="true"></i>
    <span class="pf-c-notification-badge__count"><?php echo $totalGood; ?> Compliant</span>
  </span>
</button>
<br>
<button
  class="pf-c-button pf-m-plain"
  type="button"
  aria-label="Attention notifications"
>
  <span class="pf-c-notification-badge pf-m-attention">
    <i class="pf-icon-attention-bell" aria-hidden="true"></i>
    <span class="pf-c-notification-badge__count"><?php echo $totalBad; ?> Non-Compliant</span>
  </span>
</button>                       
                      </div>
                    </div>
                </div>
                </section>
              </main>
            </div>
          </div>
        </main>
      </div>

    </div>
                            </section>

    <!-- jQuery -->
    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


    <!-- Bootstrap -->
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SlimScroll -->
    <script type="text/javascript" src="/node_modules/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom Javascript -->
    <script type="text/javascript">
    <!--
      jQuery(document).ready(function() {
        jQuery('.pf-c-page__sidebar-body').slimScroll({
          height: '100%',
          width: 'var(--pf-c-page__sidebar--Width)',
        });
      });
    //-->
    </script>

  </body>
</html>
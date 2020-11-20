<meta property="og:locale" content="<?php $translations->getLocale(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $translation['meta']['title'].' - '. $translation["$page"]['title']; ?>" />
<meta property="og:description" content="<?php echo $translation['meta']['socialDescription']; ?>" />
<meta property="og:url" content="<?php echo $urls->getUrl(); ?>" />
<meta property="og:site_name" content="<?php echo $urls->getRootUrl(); ?>" />
<meta property="og:image" content="<?php echo $urls->getRootUrl(); ?>/assets/images/logo/logo_opengraph.jpg" />
<meta property="og:image:alt" content="<?php echo $translation['meta']['socialImage']; ?>" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="310" />
<meta property="og:image:height" content="310" />

<meta property="twitter:card" content="summary" />
<meta property="twitter:title" content="<?php echo $translation['meta']['title'].' - '.$translation["$page"]['title']; ?>" />
<meta property="twitter:description" content="<?php echo $translation['meta']['socialDescription']; ?>" />
<meta property="twitter:image" content="<?php echo $urls->getRootUrl(); ?>/assets/images/logo/logo_opengraph.jpg" />
<meta property="twitter:image:alt" content="<?php echo $translation['meta']['socialImage']; ?>" />
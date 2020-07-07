<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GA; ?>" data-id="cookies-script"></script>
<script data-id="cookies-script">
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', '<?php echo GA; ?>');
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-20070413-1']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_setDomainName', 'none']);
    _gaq.push(['_trackPageview']);
    <?php
if ( !$VARS['is_registered'] ) {
    ?>
    _gaq.push(['_trackEvent', 'signup', 'wordpress']);
    <?php
}
?>

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
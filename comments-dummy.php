<?php if (comments_open()) : ?>
<div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */

	var disqus_config = function () {
        this.page.url = '<?= get_permalink(); ?>';
        this.page.identifier = '<?= dsq_identifier_for_post($post); ?>';
    };

    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');

        s.src = '//EXAMPLE.disqus.com/embed.js'; //Don't forget to change EXAMPLE to your Disqus shortcode!

        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php endif; // comments_open ?>

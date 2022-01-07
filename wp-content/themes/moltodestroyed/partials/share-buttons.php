<div class="social-share-container">
  <h3 class="mobile-title">Share!</h3>

  <div class="social-share-link-container">
    <h3 class="desktop-title">Share!</h3>
    
    <a class="social-share-button" target="popupTwitter" 
       data-label='Shared <?= get_the_title(); ?> comic strip on Twitter'
       onclick="PopupCenter( '', 'popupTwitter', '600', '360' );" title="Share on Twitter"
       href="https://twitter.com/intent/tweet?text=Check out the comic &#39;<?= get_the_title(); ?>&#39; by @moltoDESTROYED : <?= get_permalink(); ?>">
      <span class="molto-sr-text">Share on Twitter</span>

      <svg width="32" height="32" viewBox="0 0 24 24">
        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
      </svg>
    </a>

    <a class="social-share-button" target="popupFacebook" 
       data-label='Shared <?= get_the_title(); ?> comic strip on Facebook'
       onclick="PopupCenter( '', 'popupFacebook', '600', '500' );" title="Share on Facebook"
       href="http://www.facebook.com/share.php?u=<?= get_permalink(); ?>">
      <span class="molto-sr-text">Share on Facebook</span>

      <svg width="32" height="32" viewBox="0 0 24 24">
        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
      </svg>
    </a>

    <a class="social-share-button" target="popupTumblr" 
       data-label='Shared <?= get_the_title(); ?> comic strip on Tumblr'
       onclick="PopupCenter( '', 'popupTumblr', '540', '600' );" title="Share on Tumblr"
       <?= 'href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=' . get_permalink() . 'posttype=photo&content=' . get_the_post_thumbnail_url() . '&caption=&#39;' . get_the_title() . '&#39; : ' . get_permalink() . '"'; ?>>
      <span class="molto-sr-text">Share on Tumblr</span>

      <svg width="32" height="32" viewBox="0 0 24 24">
        <path d="M19.512 17.489l-.096-.068h-3.274c-.153 0-.16-.467-.163-.622v-5.714c0-.056.045-.101.101-.101h3.82c.056 0 .101-.045.101-.101v-5.766c0-.055-.045-.1-.101-.1h-3.803c-.055 0-.1-.045-.1-.101v-4.816c0-.055-.045-.1-.101-.1h-7.15c-.489 0-1.053.362-1.135 1.034-.341 2.778-1.882 4.125-4.276 4.925l-.267.089-.068.096v4.74c0 .056.045.101.1.101h2.9v6.156c0 4.66 3.04 6.859 9.008 6.859 2.401 0 5.048-.855 5.835-1.891l.157-.208-1.488-4.412zm.339 4.258c-.75.721-2.554 1.256-4.028 1.281l-.165.001c-4.849 0-5.682-3.701-5.682-5.889v-7.039c0-.056-.045-.101-.1-.101h-2.782c-.056 0-.101-.045-.101-.101l-.024-3.06.064-.092c2.506-.976 3.905-2.595 4.273-5.593.021-.167.158-.171.159-.171h3.447c.055 0 .101.045.101.101v4.816c0 .056.045.101.1.101h3.803c.056 0 .101.045.101.1v3.801c0 .056-.045.101-.101.101h-3.819c-.056 0-.097.045-.097.101v6.705c.023 1.438.715 2.167 2.065 2.167.544 0 1.116-.126 1.685-.344.053-.021.111.007.13.061l.995 2.95-.024.104z" fill-rule="evenodd" clip-rule="evenodd"/>
      </svg>
    </a>

    <a class="social-share-button" target="_blank" rel="noopener" title="Share on Reddit" 
       data-label='Shared <?= get_the_title(); ?> comic strip on Reddit'
       href="http://www.reddit.com/submit?url=<?= get_permalink(); ?>&title=<?= get_the_title(); ?>">
      <span class="molto-sr-text">Share on Reddit</span>

      <svg width="32" height="32" viewBox="0 0 24 24">
        <path d="M24 11.779c0-1.459-1.192-2.645-2.657-2.645-.715 0-1.363.286-1.84.746-1.81-1.191-4.259-1.949-6.971-2.046l1.483-4.669 4.016.941-.006.058c0 1.193.975 2.163 2.174 2.163 1.198 0 2.172-.97 2.172-2.163s-.975-2.164-2.172-2.164c-.92 0-1.704.574-2.021 1.379l-4.329-1.015c-.189-.046-.381.063-.44.249l-1.654 5.207c-2.838.034-5.409.798-7.3 2.025-.474-.438-1.103-.712-1.799-.712-1.465 0-2.656 1.187-2.656 2.646 0 .97.533 1.811 1.317 2.271-.052.282-.086.567-.086.857 0 3.911 4.808 7.093 10.719 7.093s10.72-3.182 10.72-7.093c0-.274-.029-.544-.075-.81.832-.447 1.405-1.312 1.405-2.318zm-17.224 1.816c0-.868.71-1.575 1.582-1.575.872 0 1.581.707 1.581 1.575s-.709 1.574-1.581 1.574-1.582-.706-1.582-1.574zm9.061 4.669c-.797.793-2.048 1.179-3.824 1.179l-.013-.003-.013.003c-1.777 0-3.028-.386-3.824-1.179-.145-.144-.145-.379 0-.523.145-.145.381-.145.526 0 .65.647 1.729.961 3.298.961l.013.003.013-.003c1.569 0 2.648-.315 3.298-.962.145-.145.381-.144.526 0 .145.145.145.379 0 .524zm-.189-3.095c-.872 0-1.581-.706-1.581-1.574 0-.868.709-1.575 1.581-1.575s1.581.707 1.581 1.575-.709 1.574-1.581 1.574z"/>
      </svg>
    </a>

    <a class="social-share-button" target="popupMix" onclick="PopupCenter( '', 'popupMix', '600', '760' );"
       href="https://mix.com/add?url=<?= get_permalink(); ?>" title="Share to mix.com"
       data-label='Shared <?= get_the_title(); ?> comic strip on mix.com'>
      <span class="molto-sr-text">Share to mix.com</span>

      <svg width="32" height="32" viewBox="0 0 448 512">
        <path d="M0 64v348.9c0 56.2 88 58.1 88 0V174.3c7.9-52.9 88-50.4 88 6.5v175.3c0 57.9 96 58 96 0V240c5.3-54.7 88-52.5 88 4.3v23.8c0 59.9 88 56.6 88 0V64H0z"/>
      </svg>
    </a>

    <a class="social-share-button" target="_blank" rel="noopener" title="Share on WhatsApp"
       data-label='Shared <?= get_the_title(); ?> comic strip on WhatsApp'
       href="https://wa.me/?text=<?= get_permalink(); ?>">
      <span class="molto-sr-text">Share on WhatsApp</span>

      <svg width="32" height="32" viewBox="0 0 24 24">
        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
      </svg>
    </a>

    <a class="social-share-button" title="Share via E-Mail" 
       data-label='Shared <?= get_the_title(); ?> comic strip via Email'
       href="mailto:?subject=<?= get_the_title(); ?>&body=Check out the comic strip &#39;<?= get_the_title(); ?>&#39; : <?= get_permalink(); ?>">
      <span class="molto-sr-text">Share via E-Mail</span>

      <svg width="32" height="32" viewBox="0 0 24 24">
        <path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/>
      </svg>
    </a>
  </div>
</div>

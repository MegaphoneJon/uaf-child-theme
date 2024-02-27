<div class="search-form">
    <div class="search-form--visible">
        <button class="search-form--trigger" aria-label="Trigger Search Form">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25 23.0462L17.8901 15.9363C19.1483 14.2703 19.8945 12.1959 19.8945 9.94723C19.8945 4.45353 15.4409 0 9.94723 0C4.45353 0 0 4.45353 0 9.94723C0 15.4409 4.45353 19.8945 9.94723 19.8945C12.1959 19.8945 14.2703 19.1483 15.9363 17.8901L23.0462 25L25 23.0462ZM17.1299 9.94717C17.1299 13.9148 13.9135 17.1313 9.94583 17.1313C5.97815 17.1313 2.76172 13.9148 2.76172 9.94717C2.76172 5.9795 5.97815 2.76306 9.94583 2.76306C13.9135 2.76306 17.1299 5.9795 17.1299 9.94717Z" fill="black" />
            </svg>
        </button>
    </div>
    <div class="search-form--hidden">
        <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
            <label>
                <span class="screen-reader-text"><?php echo _x('Search', 'label') ?></span>
                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
            </label>
            <input type="submit" class="search-submit" value="Submit Button" />
        </form>
    </div>
</div>
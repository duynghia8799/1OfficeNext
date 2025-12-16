<form action="<?= esc_url(home_url('/')); ?>" class="form-search" method="GET" role="search">
    <input type="search" name="s" value="<?= esc_attr(get_search_query()); ?>" class="input-search" placeholder="Tìm kiếm">
    <button type="submit" class="icon-search">
        <img alt="icon" src="<?= get_template_directory_uri(); ?>/assets/images/LogoSearch.svg" />
    </button>
</form>
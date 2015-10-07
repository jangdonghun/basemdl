<form role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
    <label class="mdl-button mdl-js-button mdl-button--icon" for="search1">
      <i class="material-icons">search</i>
    </label>
    <div class="mdl-textfield__expandable-holder">
      <input class="mdl-textfield__input" type="search" id="search1" value="<?= get_search_query(); ?>" name="s" />
      <label class="mdl-textfield__label" for="search-expandable">Look here!</label>
    </div>
  </div>
</form>

// Handles hiding/showing the searchbar on mobile views

{
  const btn = document.querySelector('#mobile_search-bar-toggle button');
  const search = document.getElementById('header-search-widget');

  btn.addEventListener( 'click', function() {
    search.classList.toggle( 'toggled' );

    btn.setAttribute(
      'aria-expanded', btn.getAttribute('aria-expanded') === 'true'
        ? 'false'
        : 'true'
    );
  });
}

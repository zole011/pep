console.log('WE LOVE TYPO3');
(function ($) {
  "use strict";
  /*----------------------------
      jQuery MeanMenu
  ------------------------------ */
  //jQuery('nav#dropdown').meanmenu();
  $('nav#dropdown').meanmenu();
  var newsDisplay = document.querySelector('.newsdisplay');
  if (newsDisplay) {
    var newsItems = Array.from(newsDisplay.querySelectorAll('.single-latest-item'));
    var newsLinks = Array.from(document.querySelectorAll('.newsbrowse ul li'));
    newsLinks.forEach((n, index) => {
      if (index) newsItems[index].style.display = 'none';
      n.addEventListener('click', e => {
        e.preventDefault();
        newsItems.forEach(ni => {
          if (ni.dataset.id === e.currentTarget.dataset.id) {
            ni.style.display = 'block';
          } else {
            ni.style.display = 'none';
          }
        })
        newsLinks.forEach(nl => nl.dataset.id === e.currentTarget.dataset.id
          ? nl.classList.add('active')
          : nl.classList.remove('active'));
        return false;
      })
    });
  }
})(jQuery); 

  /*------------------------------------
    Accordion menu
  --------------------------------------*/
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("panel_active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
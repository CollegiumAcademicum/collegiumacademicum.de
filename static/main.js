document.addEventListener('DOMContentLoaded', function () {
  // Toggles
  var $burgers = getAll('.burger');

  if ($burgers.length > 0) {
    $burgers.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }

  // Modals
  var rootEl = document.documentElement;
  var $modals = getAll('.modal');
  var $modalButtons = getAll('.modal-button');
  var $modalCloses = getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');

  if ($modalButtons.length > 0) {
    $modalButtons.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        openModal(target);
      });
    });
  }

  if ($modalCloses.length > 0) {
    $modalCloses.forEach(function ($el) {
      $el.addEventListener('click', function () {
        closeModals();
      });
    });
  }

  function openModal(target) {
    var $target = document.getElementById(target);
    rootEl.classList.add('is-clipped');
    $target.classList.add('is-active');
  }

  function closeModals() {
    rootEl.classList.remove('is-clipped');
    $modals.forEach(function ($el) {
      $el.classList.remove('is-active');
    });
  }

  //Accordion
  const MOUSE_EVENTS = ['click', 'touchstart'];
  var accordions = document.querySelectorAll('.accordions');
  [].forEach.call(accordions, function(accordion) {
    var items = accordion.querySelectorAll('.accordion');
    [].forEach.call(items, function(item) {
      MOUSE_EVENTS.forEach((event) => {
        item.querySelector('.toggle, [data-action="toggle"]').addEventListener(event, e => {
          e.preventDefault();
          if (!item.classList.contains('is-active')) {
            let activeItem = accordion.querySelector('.accordion.is-active');
            if (activeItem) {
              activeItem.classList.remove('is-active');
            }
            item.classList.add('is-active');
          } else {
            item.classList.remove('is-active');
          }
        });
      });
    });
  });

  // Functions
  function getAll(selector) {
    return Array.prototype.slice.call(document.querySelectorAll(selector), 0);
  }
});
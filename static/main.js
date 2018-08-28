// Polyfilling
HTMLDocument.prototype.getAll || (HTMLDocument.prototype.getAll = function (s) {
  return Array.prototype.slice.call(this.querySelectorAll(s), 0);
});

// Burgers
var burgers = document.getAll('.burger');

if (burgers.length > 0) setBurgerListeners();

function setBurgerListeners() {
  burgers.forEach(function (burger) {
    burger.addEventListener('click', function () {
      this.classList.toggle('is-active');
      var target = document.getElementById(this.dataset.target);
      target.classList.toggle('is-active');
    });
  });
}

// Delete
var $deletes = document.getAll('.delete');

if ($deletes.length > 0) {
  $deletes.forEach(function ($el) {
    $el.addEventListener('click', function () {
      $el.parentElement.classList.toggle('is-hidden');
    });
  });
}

// Modals
var modals = document.getAll('.modal');
var modalButtons = document.getAll('.modal-button');
var modalClosers = document.getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');

if (modalButtons.length > 0 && modalClosers.length > 0) {
  setModalButtonListeners();
  setModalCloserListeners();
}

function setModalButtonListeners() {
  modalButtons.forEach(function (modalButton) {
    modalButton.addEventListener('click', function () {
      var modal = document.getElementById(this.dataset.target);
      document.documentElement.classList.add('is-clipped');
      modal.classList.add('is-active');
      var images = document.getAll('#' + modal.id + ' .modal-content img')
      images.forEach(function (image) {
        image.src = image.dataset.src;
      });
    });
  });
}

function setModalCloserListeners() {
  modalClosers.forEach(function (modalCloser) {
    modalCloser.addEventListener('click', function () {
      document.documentElement.classList.remove('is-clipped');
      modals.forEach(function (modal) {
        modal.classList.remove('is-active');
      });
    });
  });
}

//Quote Grid
var quoteGridIcons = document.getAll('.quotegrid-icon');
var quoteGrids = document.getAll('.quotegrid-overlay');

if (quoteGridIcons.length > 0 && quoteGrids.length > 0) {
  setQuoteGridListeners();
  setQuoteGridIconListeners();
}

function setQuoteGridIconListeners() {
  quoteGridIcons.forEach(function (icon) {
    icon.addEventListener('click', function (e) {
      if (e.target.tagName === 'FIGURE') {
        icon.classList.add('is-active');
        icon.querySelector('.quotegrid-overlay').classList.remove('is-hidden');
      }
    });
  });
}

function setQuoteGridListeners() {
  quoteGrids.forEach(function (quoteGrid) {
    quoteGrid.addEventListener('click', function () {
      quoteGridIcons.forEach(function (quoteGrid) {
        quoteGrid.classList.remove('is-active');
      });
    });
  });
}

//Accordion
var MOUSE_EVENTS = ['click', 'touchstart'];
var accordions = document.getAll('.accordions');

if (accordions.length > 0) {
  setAccordionListeners();
}

function setAccordionListeners() {
  accordions.forEach.call(function (accordion) {
    var items = document.getAll('.accordions .accordion');
    items.forEach.call(function (item) {
      MOUSE_EVENTS.forEach(function (event) {
        item.querySelector('.toggle, [data-action="toggle"]').addEventListener(event, e => {
          e.preventDefault();
          if (!item.classList.contains('is-active')) {
            var activeItem = accordion.querySelector('.accordion.is-active');
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
}

/*!
  * domready (c) Dustin Diaz 2014 - License MIT
  * SRC: https://github.com/ded/domready/blob/master/ready.js
  */
!function (name, definition) {

  if (typeof module != 'undefined') module.exports = definition()
  else if (typeof define == 'function' && typeof define.amd == 'object') define(definition)
  else this[name] = definition()

}('domready', function () {

  var fns = [], listener
    , doc = typeof document === 'object' && document
    , hack = doc && doc.documentElement.doScroll
    , domContentLoaded = 'DOMContentLoaded'
    , loaded = doc && (hack ? /^loaded|^c/ : /^loaded|^i|^c/).test(doc.readyState)


  if (!loaded && doc)
    doc.addEventListener(domContentLoaded, listener = function () {
      doc.removeEventListener(domContentLoaded, listener)
      loaded = 1
      while (listener = fns.shift()) listener()
    })

  return function (fn) {
    loaded ? setTimeout(fn, 0) : fns.push(fn)
  }

});

// Polyfilling
HTMLDocument.prototype.getAll || (HTMLDocument.prototype.getAll = function (s) {
  return Array.prototype.slice.call(this.querySelectorAll(s), 0);
});

function setBurgerListeners(burgers) {
  burgers.forEach(function (burger) {
    burger.addEventListener('click', function () {
      this.classList.toggle('is-active');
      var target = document.getElementById(this.dataset.target);
      target.classList.toggle('is-active');
    });
  });
}

function setDeletersListeners(deleters) {
  deleters.forEach(function (deleter) {
    deleter.addEventListener('click', function () {
      deleter.parentElement.classList.toggle('is-hidden');
    });
  });
}

function setModalButtonListeners(modalButtons) {
  modalButtons.forEach(function (modalButton) {
    modalButton.addEventListener('click', function () {
      var modal = document.getElementById(this.dataset.target);
      document.documentElement.classList.add('is-clipped');
      modal.classList.add('is-active');
      var images = document.getAll('#' + modal.id + ' .modal-content img')
      images.forEach(function (image) {
        if (image.dataset.src) image.src = image.dataset.src;
        if (image.dataset.srcset) image.srcset = image.dataset.srcset;
      });
    });
  });
}

function setModalCloserListeners(modalClosers) {
  modalClosers.forEach(function (closer) {
    closer.addEventListener('click', function () {
      document.documentElement.classList.remove('is-clipped');
      document.getAll('.modal').forEach(function (modal) {
        modal.classList.remove('is-active');
      });
    });
  });
}

function setToggleMessagesListeners(toggleMessages) {
  toggleMessages.forEach(function (toggleMessage) {
    ['click', 'touchstart'].forEach(function (event) {
      toggleMessage.querySelector('.message-header').addEventListener(event, function () {
        toggleMessage.classList.toggle('is-active')
      });
    });
  });
}

function setCarouselListeners(carousels) {
  carousels.forEach(function (carousel) {
    var itemClassName = "item";
        items = carousel.querySelectorAll(".item"),
        totalItems = items.length,
        slide = 0,
        moving = true;

    function setInitialClasses() {
      items[0].classList.add("active");
      items[1].classList.add("next");
    }

    function setEventListeners() {
      var next = carousel.querySelector('nav.next'),
        prev = carousel.querySelector('nav.prev');
      next.addEventListener('click', moveNext);
      prev.addEventListener('click', movePrev);
    }

    function moveNext() {
      if (!moving) {
        if (slide === (totalItems - 1)) {
          slide = 0;
        } else {
          slide++;
        }
        moveCarouselTo(slide);
      }
    }

    function movePrev() {
      if (!moving) {
        if (slide === 0) {
          slide = (totalItems - 1);
        } else {
          slide--;
        }
        moveCarouselTo(slide);
      }
    }

    function disableInteraction() {
      moving = true;
      setTimeout(function () {
        moving = false
      }, 500);
    }

    function moveCarouselTo(slide) {
      if (!moving) {
        disableInteraction();
        var newPrevious = slide - 1,
          newNext = slide + 1,
          oldPrevious = slide - 2,
          oldNext = slide + 2;
        if ((totalItems - 1) > 3) {
          if (newPrevious <= 0) {
            oldPrevious = (totalItems - 1);
          } else if (newNext >= (totalItems - 1)) {
            oldNext = 0;
          }
          if (slide === 0) {
            newPrevious = (totalItems - 1);
            oldPrevious = (totalItems - 2);
            oldNext = (slide + 1);
          } else if (slide === (totalItems - 1)) {
            newPrevious = (slide - 1);
            newNext = 0;
            oldNext = 1;
          }
          items[oldPrevious].className = itemClassName;
          items[oldNext].className = itemClassName;
          items[newPrevious].className = itemClassName + " prev";
          items[slide].className = itemClassName + " active";
          items[newNext].className = itemClassName + " next";
        }
      }
    }

    function initCarousel() {
      setInitialClasses();
      setEventListeners();  // Set moving to false so that the carousel becomes interactive
      moving = false;
    }

    initCarousel();

  });
}

domready(function () {
  // Burgers
  let burgers = document.getAll('.burger');
  if (burgers.length > 0) setBurgerListeners(burgers);

  // Delete
  let deleters = document.getAll('.delete');
  if (deleters.length > 0) setDeletersListeners(deleters);

  // Modals
  let modalButtons = document.getAll('.modal-button');
  let modalClosers = document.getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');
  if (modalButtons.length > 0 && modalClosers.length > 0) {
    setModalButtonListeners(modalButtons);
    setModalCloserListeners(modalClosers);
  }

  //Toggle Messages
  let toggleMessages = document.getAll('.message.toggle');
  if (toggleMessages.length > 0) setToggleMessagesListeners(toggleMessages);

  let carousels = document.getAll('.carousel');
  if (carousels.length > 0) setCarouselListeners(carousels);
});

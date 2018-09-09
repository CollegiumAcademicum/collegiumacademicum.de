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
        image.src = image.dataset.src;
      });
    });
  });
}

function setModalCloserListeners(modalClosers) {
  modalClosers.forEach(function (modalCloser) {
    modalCloser.addEventListener('click', function () {
      document.documentElement.classList.remove('is-clipped');
      document.getAll('.modal').forEach(function (modal) {
        modal.classList.remove('is-active');
      });
    });
  });
}

function setQuoteGridIconListeners(quoteGridIcons) {
  quoteGridIcons.forEach(function (icon) {
    icon.addEventListener('click', function (e) {
      if (e.target.tagName === 'FIGURE') {
        icon.classList.add('is-active');
        icon.querySelector('.quotegrid-overlay').classList.remove('is-hidden');
      }
    });
  });
}

function setQuoteGridListeners(quoteGrids, quoteGridIcons) {
  quoteGrids.forEach(function (quoteGrid) {
    quoteGrid.addEventListener('click', function () {
      quoteGridIcons.forEach(function (quoteGrid) {
        quoteGrid.classList.remove('is-active');
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

domready(function () {
  // Burgers
  var burgers = document.getAll('.burger');
  if (burgers.length > 0) setBurgerListeners(burgers);



  // Delete
  var deleters = document.getAll('.delete');
  if (deleters.length > 0) setDeletersListeners(deletes);


  // Modals
  var modalButtons = document.getAll('.modal-button');
  var modalClosers = document.getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');
  if (modalButtons.length > 0 && modalClosers.length > 0) {
    setModalButtonListeners(modalButtons);
    setModalCloserListeners(modalClosers);
  }



  //Quote Grid
  var quoteGrids = document.getAll('.quotegrid-overlay');
  var quoteGridIcons = document.getAll('.quotegrid-icon');
  if (quoteGridIcons.length > 0 && quoteGrids.length > 0) {
    setQuoteGridListeners(quoteGrids, quoteGridIcons);
    setQuoteGridIconListeners(quoteGridIcons);
  }

  //Toggle Messages
  var toggleMessages = document.getAll('.message.toggle');
  if (toggleMessages.length > 0) setToggleMessagesListeners(toggleMessages);
});

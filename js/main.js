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

domready(function () {
  // Burgers
  var burgers = document.getAll('.burger');
  if (burgers.length > 0) setBurgerListeners(burgers);



  // Delete
  var deleters = document.getAll('.delete');
  if (deleters.length > 0) setDeletersListeners(deleters);


  // Modals
  var modalButtons = document.getAll('.modal-button');
  var modalClosers = document.getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');
  if (modalButtons.length > 0 && modalClosers.length > 0) {
    setModalButtonListeners(modalButtons);
    setModalCloserListeners(modalClosers);
  }

  //Toggle Messages
  var toggleMessages = document.getAll('.message.toggle');
  if (toggleMessages.length > 0) setToggleMessagesListeners(toggleMessages);
});

function validateDKForm() {
  sofort = document.getElementById('field_sofort');
  treuhand = document.getElementById('field_treuhand');
  if (!sofort.getElementsByTagName('input')[0].checked && !treuhand.getElementsByTagName('input')[0].checked){
    sofort.getElementsByClassName('help')[0].classList.remove('is-hidden');
    treuhand.getElementsByClassName('help')[0].classList.remove('is-hidden');
    return false;
  }
  return true;
}

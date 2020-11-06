/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/scripts/card.js":
/*!********************************!*\
  !*** ./assets/scripts/card.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.addEventListener('DOMContentLoaded', function () {
  // Script to manage all cards elements
  var cards = document.querySelectorAll('[data-card]');

  if (cards) {
    cards.forEach(function (card) {
      card.addEventListener('mouseover', function () {
        var cardDetails = card.querySelector('[data-card-details]');
        cardDetails.classList.add('card__description--visible');
      });
      card.addEventListener('mouseout', function () {
        var cardDetails = card.querySelector('[data-card-details]');
        cardDetails.classList.remove('card__description--visible');
      });
      card.addEventListener('click', function () {
        var cardDetails = card.querySelector('[data-card-details]');
        cardDetails.classList.toggle('card__description--visible');
      });
    });
  }
});

/***/ }),

/***/ "./assets/scripts/collapse.js":
/*!************************************!*\
  !*** ./assets/scripts/collapse.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.addEventListener('DOMContentLoaded', function () {
  // Script to manage all collapse elements
  var collapseToggles = document.querySelectorAll('[data-collapse]');

  if (collapseToggles) {
    collapseToggles.forEach(function (collapseToggle) {
      collapseToggle.addEventListener('click', function () {
        var dataId = collapseToggle.getAttribute('data-collapse');

        if (dataId) {
          var collapseItem = document.querySelector('[data-id="' + dataId + '"]');

          if (collapseItem) {
            collapseItem.classList.toggle('hide');
            collapseToggle.classList.toggle('rotate-180');
          }
        }
      });
    });
  }
});

/***/ }),

/***/ "./assets/scripts/compatibility.js":
/*!*****************************************!*\
  !*** ./assets/scripts/compatibility.js ***!
  \*****************************************/
/*! exports provided: webpSupport */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "webpSupport", function() { return webpSupport; });
function webpSupport() {
  var webp = new Image();

  webp.onload = webp.onerror = function () {
    if (webp.height !== 2) {
      document.body.classList.add('no-webp');
    }
  };

  webp.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
}

/***/ }),

/***/ "./assets/scripts/contact.js":
/*!***********************************!*\
  !*** ./assets/scripts/contact.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _main__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./main */ "./assets/scripts/main.js");


window.addEventListener('DOMContentLoaded', function () {
  // Script to manage all labels-inputs elements
  var inputContainers = document.querySelectorAll('[data-input-container]');

  if (inputContainers) {
    inputContainers.forEach(function (inputContainer) {
      var input = inputContainer.querySelector('input, textarea, select');
      var label = inputContainer.querySelector('label');

      if (input && label) {
        input.addEventListener('focus', function () {
          label.classList.add('form__label--visible');
          input.placeholder = '';
        });
        input.addEventListener('blur', function () {
          if (input.value.length === 0) {
            label.classList.remove('form__label--visible');
            input.placeholder = input.getAttribute('data-placeholder');
          }

          if (input.nodeName === 'TEXTAREA') {
            checkTextarea(input);
          } else {
            checkInput(input);
          }
        });
      }
    });
  } // Script to check if form is correctly completed and execute it


  var contactForm = document.getElementById('contact-form');

  if (contactForm) {
    contactForm.addEventListener('submit', function (event) {
      event.preventDefault();
      var inputs = contactForm.querySelectorAll('input');
      inputs.forEach(function (input) {
        checkInput(input);
      });
      var textareas = contactForm.querySelectorAll('textarea');
      textareas.forEach(function (textarea) {
        checkTextarea(textarea);
      });
      var xhrRequest = new XMLHttpRequest();

      xhrRequest.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
          var response = JSON.parse(this.responseText);

          if (response) {
            contactForm.reset();
            var validInputs = contactForm.querySelectorAll('.input--success');

            if (validInputs) {
              validInputs.forEach(function (validInput) {
                validInput.classList.remove('input--success');
              });
            }

            Object(_main__WEBPACK_IMPORTED_MODULE_0__["popup"])('success', 'Votre message a été envoyé avec succès');
          } else {
            Object(_main__WEBPACK_IMPORTED_MODULE_0__["popup"])('error', 'Une erreur est survenue, veuillez réessayer ou envoyer un mail directement');
          }
        }
      };

      xhrRequest.open('POST', _main__WEBPACK_IMPORTED_MODULE_0__["BASE_URL"] + 'src/handlers/contactHandler.php', true);
      xhrRequest.send(new FormData(contactForm));
    });
  } // Functions


  function checkInput(input) {
    var error = false;

    if (input.value.length < 2 || input.value.length > 100) {
      error = true;
    } else {
      error = false;
    }

    if (input.type === 'email') {
      var regex = /\S+@\S+\.\S+/;

      if (regex.test(input.value)) {
        error = false;
      } else {
        error = true;
      }
    }

    if (error) {
      input.classList.remove('form__field--input-success');
      input.classList.add('form__field--input-error');
    } else {
      input.classList.remove('form__field--input-error');
      input.classList.add('form__field--input-success');
    }
  }

  function checkTextarea(textarea) {
    if (textarea.value.length < 20 || textarea.value.length > 2000) {
      textarea.classList.remove('form__fiels--textarea-success');
      textarea.classList.add('form__field--textarea-error');
    } else {
      textarea.classList.remove('form__field--textarea-error');
      textarea.classList.add('form__field--textarea-success');
    }
  }
});

/***/ }),

/***/ "./assets/scripts/cookies_banner.js":
/*!******************************************!*\
  !*** ./assets/scripts/cookies_banner.js ***!
  \******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _main__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./main */ "./assets/scripts/main.js");

window.addEventListener('DOMContentLoaded', function () {
  var cookiesBanner = document.getElementById('cookies-banner');
  var xhrRequest = new XMLHttpRequest();

  xhrRequest.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      var response = JSON.parse(this.responseText);

      if (response === '0') {
        window['ga-disable-UA-171624113-1'] = true;
        cookiesBanner.classList.add('hide');
      } else if (response === '1') {
        cookiesBanner.classList.add('hide');
      }
    }
  };

  xhrRequest.open('GET', _main__WEBPACK_IMPORTED_MODULE_0__["BASE_URL"] + 'src/handlers/cookiesHandler.php?method=getCookiesPreference', true);
  xhrRequest.send();
  var cookiesAccept = document.getElementById('cookies-accept');
  var cookiesDecline = document.getElementById('cookies-decline');

  if (cookiesAccept) {
    cookiesAccept.addEventListener('click', function () {
      setCookiesPreferences(1);
    });
  }

  if (cookiesDecline) {
    cookiesDecline.addEventListener('click', function () {
      window['ga-disable-UA-171624113-1'] = true;
      setCookiesPreferences(0);
    });
  }

  function setCookiesPreferences(preference) {
    var xhrRequest = new XMLHttpRequest();

    xhrRequest.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        var response = JSON.parse(this.responseText);

        if (response) {
          if (cookiesBanner) {
            cookiesBanner.classList.add('hide');
          }
        }
      }
    };

    xhrRequest.open('GET', _main__WEBPACK_IMPORTED_MODULE_0__["BASE_URL"] + 'src/handlers/cookiesHandler.php?method=setCookiesPreference&preference=' + preference, true);
    xhrRequest.send();
  }
});

/***/ }),

/***/ "./assets/scripts/main.js":
/*!********************************!*\
  !*** ./assets/scripts/main.js ***!
  \********************************/
/*! exports provided: BASE_URL, colors, popup */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BASE_URL", function() { return BASE_URL; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "colors", function() { return colors; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "popup", function() { return popup; });
/* harmony import */ var _compatibility__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./compatibility */ "./assets/scripts/compatibility.js");

var BASE_URL = '/portfolio/';
var colors = {
  'lightgreen': 'rgb(101, 153, 46)',
  'green': 'rgb(0, 116, 0)',
  'lightblue': 'rgb(8, 178, 227)',
  'blue': 'rgb(30, 60, 113)',
  'brown': 'rgb(118, 66, 72)',
  'orange': 'rgb(237, 93, 49)',
  'yellow': 'rgb(253, 186, 53)',
  'purple': 'rgb(190, 130, 185)'
};
function popup(type, message) {
  var popup = document.getElementById('popup');

  if (popup) {
    var popupIcon = popup.querySelector('img');
    var popupTitle = popup.querySelector('p');

    if (popupIcon && popupTitle) {
      if (type === 'success') {
        var src = popupIcon.getAttribute('src');
        popupIcon.setAttribute('src', src + 'assets/images/icons/correct.svg');
        popupIcon.setAttribute('alt', 'Icône succès');
      } else if (type === 'error') {
        var _src = popupIcon.getAttribute('src');

        popupIcon.setAttribute('src', _src + 'assets/images/icons/incorrect.svg');
        popupIcon.setAttribute('alt', 'Icône échec');
      }

      popupTitle.innerHTML = message;
    }

    popup.classList.add('visible');
    setTimeout(function () {
      popup.classList.remove('visible');
    }, 5000);
  }
}
Object(_compatibility__WEBPACK_IMPORTED_MODULE_0__["webpSupport"])();

/***/ }),

/***/ "./assets/scripts/menu.js":
/*!********************************!*\
  !*** ./assets/scripts/menu.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.addEventListener('DOMContentLoaded', function () {
  // Script to manage the menu on small devices
  var menuToggle = document.getElementById('menu-toggle');
  var menu = document.getElementById('menu');

  if (menuToggle && menu) {
    menuToggle.addEventListener('click', function () {
      menu.classList.toggle('mobile-hide');
    });
  }
});

/***/ }),

/***/ "./assets/scripts/progress.js":
/*!************************************!*\
  !*** ./assets/scripts/progress.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.addEventListener('DOMContentLoaded', function () {
  // Script to manage all progress elements
  var progressBars = document.querySelectorAll('[data-progress]');

  if (progressBars) {
    progressBars.forEach(function (progressBar) {
      var level = progressBar.getAttribute('data-progress');

      if (!level) {
        level = 75;
      }

      progressBar.classList.add('progress-bar-right-' + level);
    });
  }
});

/***/ }),

/***/ "./assets/scripts/settings-tab.js":
/*!****************************************!*\
  !*** ./assets/scripts/settings-tab.js ***!
  \****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _main__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./main */ "./assets/scripts/main.js");

var root = document.documentElement; // Script to get cookie and apply style

var xhrRequest = new XMLHttpRequest();

xhrRequest.onreadystatechange = function () {
  if (this.readyState === 4 && this.status === 200) {
    var response = JSON.parse(this.responseText);
    changeColor(_main__WEBPACK_IMPORTED_MODULE_0__["colors"][response]);
  }
};

xhrRequest.open('GET', _main__WEBPACK_IMPORTED_MODULE_0__["BASE_URL"] + 'src/handlers/cookiesHandler.php?method=getColorCookie', true);
xhrRequest.send();
window.addEventListener('DOMContentLoaded', function () {
  // Script to manage toggle from settings-tab
  var tab = document.getElementById('settings-tab');
  var tabToggle = document.getElementById('settings-tab-toggle');
  var open = false;

  if (tab && tabToggle) {
    tabToggle.addEventListener('click', function (event) {
      event.stopImmediatePropagation();
      tab.classList.toggle('settings-tab--open');
      open = !open;

      if (open) {
        document.body.addEventListener('click', function (event) {
          tab.classList.remove('settings-tab--open');
        });
      }
    });
  } // Script to manage colors of the website


  var colorsTogglers = document.querySelectorAll('[data-color]');

  if (colorsTogglers) {
    colorsTogglers.forEach(function (colorToggler) {
      colorToggler.addEventListener('click', function () {
        var color = this.getAttribute('data-color');
        changeColor(_main__WEBPACK_IMPORTED_MODULE_0__["colors"][color]);
        var xhrRequest = new XMLHttpRequest();
        xhrRequest.open('GET', _main__WEBPACK_IMPORTED_MODULE_0__["BASE_URL"] + 'src/handlers/cookiesHandler.php?method=setColorCookie&color=' + color, true);
        xhrRequest.send();
      });
    });
  }
});

function changeColor(color) {
  root.style.setProperty('--main-color', color);
  root.style.setProperty('--second-color', color.slice(0, 3) + 'a' + color.slice(3, -1) + ', 0.25)');
}

/***/ }),

/***/ "./assets/scripts/toggle.js":
/*!**********************************!*\
  !*** ./assets/scripts/toggle.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.addEventListener('DOMContentLoaded', function () {
  // Script to manage all toggle elements
  var toggleActions = document.querySelectorAll('[data-toggle]');

  if (toggleActions) {
    toggleActions.forEach(function (toggleAction) {
      toggleAction.addEventListener('click', function () {
        var dataId = toggleAction.getAttribute('data-toggle');

        if (dataId) {
          var toggleItems = this.closest('[data-toggle-parent]').querySelectorAll('[data-toggle-id]');
          toggleItems.forEach(function (toggleItem) {
            if (!toggleItem.classList.contains('hide')) {
              toggleItem.classList.add('hide');
            }
          });
          var toggleItem = document.querySelector('[data-toggle-id="' + dataId + '"]');

          if (toggleItem) {
            toggleItem.classList.remove('hide');
          }
        }
      });
    });
  }
});

/***/ }),

/***/ "./assets/styles/main.scss":
/*!*********************************!*\
  !*** ./assets/styles/main.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*****************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./assets/scripts/main.js ./assets/scripts/menu.js ./assets/scripts/collapse.js ./assets/scripts/toggle.js ./assets/scripts/progress.js ./assets/scripts/card.js ./assets/scripts/contact.js ./assets/scripts/cookies_banner.js ./assets/scripts/compatibility.js ./assets/scripts/settings-tab.js ./assets/styles/main.scss ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\main.js */"./assets/scripts/main.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\menu.js */"./assets/scripts/menu.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\collapse.js */"./assets/scripts/collapse.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\toggle.js */"./assets/scripts/toggle.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\progress.js */"./assets/scripts/progress.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\card.js */"./assets/scripts/card.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\contact.js */"./assets/scripts/contact.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\cookies_banner.js */"./assets/scripts/cookies_banner.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\compatibility.js */"./assets/scripts/compatibility.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\settings-tab.js */"./assets/scripts/settings-tab.js");
module.exports = __webpack_require__(/*! C:\wamp64\www\portfolio\assets\styles\main.scss */"./assets/styles/main.scss");


/***/ })

/******/ });
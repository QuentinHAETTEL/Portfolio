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
            collapseToggle.classList.toggle('rotate180');
          }
        }
      });
    });
  }
});

/***/ }),

/***/ "./assets/scripts/main.js":
/*!********************************!*\
  !*** ./assets/scripts/main.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {



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
          var toggleItems = document.querySelectorAll('[data-toggle-id]');
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
/*!******************************************************************************************************************************************************************************!*\
  !*** multi ./assets/scripts/main.js ./assets/scripts/menu.js ./assets/scripts/collapse.js ./assets/scripts/toggle.js ./assets/scripts/progress.js ./assets/styles/main.scss ***!
  \******************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\main.js */"./assets/scripts/main.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\menu.js */"./assets/scripts/menu.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\collapse.js */"./assets/scripts/collapse.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\toggle.js */"./assets/scripts/toggle.js");
__webpack_require__(/*! C:\wamp64\www\portfolio\assets\scripts\progress.js */"./assets/scripts/progress.js");
module.exports = __webpack_require__(/*! C:\wamp64\www\portfolio\assets\styles\main.scss */"./assets/styles/main.scss");


/***/ })

/******/ });
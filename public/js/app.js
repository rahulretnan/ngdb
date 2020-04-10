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

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// require('./bootstrap');
__webpack_require__(/*! ./current */ "./resources/js/current.js");

__webpack_require__(/*! ./voltage */ "./resources/js/voltage.js");

__webpack_require__(/*! ./power */ "./resources/js/power.js"); // require('./toggle');

/***/ }),

/***/ "./resources/js/current.js":
/*!*********************************!*\
  !*** ./resources/js/current.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var delay = 2000,
    value = 0,
    valueStore = 0,
    tick = 1,
    tickStore = 1,
    tickDiff = 0,
    tickDiffValue = 0;

function valBetween(v, min, max) {
  return Math.min(max, Math.max(min, v));
}

(function loop() {
  // value = Math.ceil(Math.random() * 100);
  tick = valBetween(Math.ceil(value / 100 * 28), 1, 28);
  tickDiff = Math.abs(tick - tickStore);
  tickDiffValue = Math.abs(value - valueStore) / tickDiff;
  console.log("tickDiff: " + tickDiffValue + " * " + tickDiff + " = " + tickDiffValue * tickDiff);
  var counter = 0,
      valueStoreTemp = valueStore,
      tickStoreTemp = tickStore;

  if (value > valueStore) {
    for (i = tickStoreTemp; i <= tick; i++) {
      (function (i) {
        setTimeout(function () {
          $('#current').css('box-shadow', '0 0 32px rgba(21, 55, 172, 0.25), inset 0 -192px 192px -240px ' + $('#current path:nth-child(' + i + ')')[0].style.fill + ', inset 0 0 2px -1px ' + $('#current path:nth-child(' + i + ')')[0].style.fill);
          $('#current path:nth-child(' + i + ')').show();
          $('#current-label').css('color', $('#current path:nth-child(' + i + ')')[0].style.fill).text(Math.ceil(valueStoreTemp + tickDiffValue * Math.abs(tickStoreTemp - i)));

          if (i == tick) {
            $('#current-label').text(value);
          } // console.log(i);

        }, 50 * counter);
        counter++;
      })(i);
    }
  } else if (value < valueStore) {
    for (i = tickStoreTemp; i >= tick; i--) {
      (function (i) {
        setTimeout(function () {
          $('#current').css('box-shadow', '0 0 32px rgba(21, 55, 172, 0.25), inset 0 -192px 192px -240px ' + $('#current path:nth-child(' + i + ')')[0].style.fill + ', inset 0 0 2px -1px ' + $('#current path:nth-child(' + i + ')')[0].style.fill);
          $('#current path:nth-child(' + i + ')').hide();
          $('#current-label').css('color', $('#current path:nth-child(' + i + ')')[0].style.fill).text(Math.floor(valueStoreTemp - tickDiffValue * Math.abs(tickStoreTemp - i)));

          if (i == tick) {
            $('#current-label').text(value);
          } // console.log(i);

        }, 50 * counter);
        counter++;
      })(i);
    }
  }

  valueStore = value;
  tickStore = tick;
  window.setTimeout(loop, delay);
})();

/***/ }),

/***/ "./resources/js/power.js":
/*!*******************************!*\
  !*** ./resources/js/power.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

var delay = 2000,
    value = 0,
    valueStore = 0,
    tick = 1,
    tickStore = 1,
    tickDiff = 0,
    tickDiffValue = 0;

function valBetween(v, min, max) {
  return Math.min(max, Math.max(min, v));
}

(function loop() {
  // value = Math.ceil(Math.random() * 100);
  tick = valBetween(Math.ceil(value / 100 * 28), 1, 28);
  tickDiff = Math.abs(tick - tickStore);
  tickDiffValue = Math.abs(value - valueStore) / tickDiff;
  console.log("tickDiff: " + tickDiffValue + " * " + tickDiff + " = " + tickDiffValue * tickDiff);
  var counter = 0,
      valueStoreTemp = valueStore,
      tickStoreTemp = tickStore;

  if (value > valueStore) {
    for (i = tickStoreTemp; i <= tick; i++) {
      (function (i) {
        setTimeout(function () {
          $('#power').css('box-shadow', '0 0 32px rgba(21, 55, 172, 0.25), inset 0 -192px 192px -240px ' + $('#power path:nth-child(' + i + ')')[0].style.fill + ', inset 0 0 2px -1px ' + $('#power path:nth-child(' + i + ')')[0].style.fill);
          $('#power path:nth-child(' + i + ')').show();
          $('#power-label').css('color', $('#power path:nth-child(' + i + ')')[0].style.fill).text(Math.ceil(valueStoreTemp + tickDiffValue * Math.abs(tickStoreTemp - i)));

          if (i == tick) {
            $('#power-label').text(value);
          } // console.log(i);

        }, 50 * counter);
        counter++;
      })(i);
    }
  } else if (value < valueStore) {
    for (i = tickStoreTemp; i >= tick; i--) {
      (function (i) {
        setTimeout(function () {
          $('#power').css('box-shadow', '0 0 32px rgba(21, 55, 172, 0.25), inset 0 -192px 192px -240px ' + $('#power path:nth-child(' + i + ')')[0].style.fill + ', inset 0 0 2px -1px ' + $('#power path:nth-child(' + i + ')')[0].style.fill);
          $('#power path:nth-child(' + i + ')').hide();
          $('#power-label').css('color', $('#power path:nth-child(' + i + ')')[0].style.fill).text(Math.floor(valueStoreTemp - tickDiffValue * Math.abs(tickStoreTemp - i)));

          if (i == tick) {
            $('#power-label').text(value);
          } // console.log(i);

        }, 50 * counter);
        counter++;
      })(i);
    }
  }

  valueStore = value;
  tickStore = tick;
  window.setTimeout(loop, delay);
})();

/***/ }),

/***/ "./resources/js/voltage.js":
/*!*********************************!*\
  !*** ./resources/js/voltage.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var delay = 2000,
    value = 0,
    valueStore = 0,
    tick = 1,
    tickStore = 1,
    tickDiff = 0,
    tickDiffValue = 0;

function valBetween(v, min, max) {
  return Math.min(max, Math.max(min, v));
}

(function loop() {
  // value = Math.ceil(Math.random() * 100);
  tick = valBetween(Math.ceil(value / 100 * 28), 1, 28);
  tickDiff = Math.abs(tick - tickStore);
  tickDiffValue = Math.abs(value - valueStore) / tickDiff;
  console.log("tickDiff: " + tickDiffValue + " * " + tickDiff + " = " + tickDiffValue * tickDiff);
  var counter = 0,
      valueStoreTemp = valueStore,
      tickStoreTemp = tickStore;

  if (value > valueStore) {
    for (i = tickStoreTemp; i <= tick; i++) {
      (function (i) {
        setTimeout(function () {
          $('#voltage').css('box-shadow', '0 0 32px rgba(21, 55, 172, 0.25), inset 0 -192px 192px -240px ' + $('#voltage path:nth-child(' + i + ')')[0].style.fill + ', inset 0 0 2px -1px ' + $('#voltage path:nth-child(' + i + ')')[0].style.fill);
          $('#voltage path:nth-child(' + i + ')').show();
          $('#voltage-label').css('color', $('#voltage path:nth-child(' + i + ')')[0].style.fill).text(Math.ceil(valueStoreTemp + tickDiffValue * Math.abs(tickStoreTemp - i)));

          if (i == tick) {
            $('#voltage-label').text(value);
          } // console.log(i);

        }, 50 * counter);
        counter++;
      })(i);
    }
  } else if (value < valueStore) {
    for (i = tickStoreTemp; i >= tick; i--) {
      (function (i) {
        setTimeout(function () {
          $('#voltage').css('box-shadow', '0 0 32px rgba(21, 55, 172, 0.25), inset 0 -192px 192px -240px ' + $('#voltage path:nth-child(' + i + ')')[0].style.fill + ', inset 0 0 2px -1px ' + $('#voltage path:nth-child(' + i + ')')[0].style.fill);
          $('#voltage path:nth-child(' + i + ')').hide();
          $('#voltage-label').css('color', $('#voltage path:nth-child(' + i + ')')[0].style.fill).text(Math.floor(valueStoreTemp - tickDiffValue * Math.abs(tickStoreTemp - i)));

          if (i == tick) {
            $('#voltage-label').text(value);
          } // console.log(i);

        }, 50 * counter);
        counter++;
      })(i);
    }
  }

  valueStore = value;
  tickStore = tick;
  window.setTimeout(loop, delay);
})();

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/rk/PhpstormProjects/ngdb/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /home/rk/PhpstormProjects/ngdb/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });

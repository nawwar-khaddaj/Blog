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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./public/assets/plugins/global/plugins.bundle.js":
/*!********************************************************!*\
  !*** ./public/assets/plugins/global/plugins.bundle.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /home/malaz/code/ta5assusi/public/assets/plugins/global/plugins.bundle.js: Identifier '_classCallCheck' has already been declared (73546:9)\n\n\u001b[0m \u001b[90m 73544 | \u001b[39m\u001b[32m\tcancelButtonColor: null\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 73545 | \u001b[39m\u001b[32m});\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 73546 | \u001b[39m\u001b[32mfunction _classCallCheck(t,i){if(!(t instanceof i))throw new TypeError(\"Cannot call a class as a function\")}function _defineProperties(t,i){for(var e=0;e<i.length;e++){var s=i[e];s.enumerable=s.enumerable||!1,s.configurable=!0,\"value\"in s&&(s.writable=!0),Object.defineProperty(t,s.key,s)}}function _createClass(t,i,e){return i&&_defineProperties(t.prototype,i),e&&_defineProperties(t,e),t}var Sticky=function(){function e(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:\"\",i=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};_classCallCheck(this,e),this.selector=t,this.elements=[],this.version=\"1.3.0\",this.vp=this.getViewportSize(),this.body=document.querySelector(\"body\"),this.options={wrap:i.wrap||!1,wrapWith:i.wrapWith||\"<span></span>\",marginTop:i.marginTop||0,marginBottom:i.marginBottom||0,stickyFor:i.stickyFor||0,stickyClass:i.stickyClass||null,stickyContainer:i.stickyContainer||\"body\"},this.updateScrollTopPosition=this.updateScrollTopPosition.bind(this),this.updateScrollTopPosition(),window.addEventListener(\"load\",this.updateScrollTopPosition),window.addEventListener(\"scroll\",this.updateScrollTopPosition),this.run()}return _createClass(e,[{key:\"run\",value:function(){var i=this,e=setInterval(function(){if(\"complete\"===document.readyState){clearInterval(e);var t=document.querySelectorAll(i.selector);i.forEach(t,function(t){return i.renderElement(t)})}},10)}},{key:\"renderElement\",value:function(t){var i=this;t.sticky={},t.sticky.active=!1,t.sticky.marginTop=parseInt(t.getAttribute(\"data-margin-top\"))||this.options.marginTop,t.sticky.marginBottom=parseInt(t.getAttribute(\"data-margin-bottom\"))||this.options.marginBottom,t.sticky.stickyFor=parseInt(t.getAttribute(\"data-sticky-for\"))||this.options.stickyFor,t.sticky.stickyClass=t.getAttribute(\"data-sticky-class\")||this.options.stickyClass,t.sticky.wrap=!!t.hasAttribute(\"data-sticky-wrap\")||this.options.wrap,t.sticky.stickyContainer=this.options.stickyContainer,t.sticky.container=this.getStickyContainer(t),t.sticky.container.rect=this.getRectangle(t.sticky.container),t.sticky.rect=this.getRectangle(t),\"img\"===t.tagName.toLowerCase()&&(t.onload=function(){return t.sticky.rect=i.getRectangle(t)}),t.sticky.wrap&&this.wrapElement(t),this.activate(t)}},{key:\"wrapElement\",value:function(t){t.insertAdjacentHTML(\"beforebegin\",t.getAttribute(\"data-sticky-wrapWith\")||this.options.wrapWith),t.previousSibling.appendChild(t)}},{key:\"activate\",value:function(t){t.sticky.rect.top+t.sticky.rect.height<t.sticky.container.rect.top+t.sticky.container.rect.height&&t.sticky.stickyFor<this.vp.width&&!t.sticky.active&&(t.sticky.active=!0),this.elements.indexOf(t)<0&&this.elements.push(t),t.sticky.resizeEvent||(this.initResizeEvents(t),t.sticky.resizeEvent=!0),t.sticky.scrollEvent||(this.initScrollEvents(t),t.sticky.scrollEvent=!0),this.setPosition(t)}},{key:\"initResizeEvents\",value:function(t){var i=this;t.sticky.resizeListener=function(){return i.onResizeEvents(t)},window.addEventListener(\"resize\",t.sticky.resizeListener)}},{key:\"destroyResizeEvents\",value:function(t){window.removeEventListener(\"resize\",t.sticky.resizeListener)}},{key:\"onResizeEvents\",value:function(t){this.vp=this.getViewportSize(),t.sticky.rect=this.getRectangle(t),t.sticky.container.rect=this.getRectangle(t.sticky.container),t.sticky.rect.top+t.sticky.rect.height<t.sticky.container.rect.top+t.sticky.container.rect.height&&t.sticky.stickyFor<this.vp.width&&!t.sticky.active?t.sticky.active=!0:(t.sticky.rect.top+t.sticky.rect.height>=t.sticky.container.rect.top+t.sticky.container.rect.height||t.sticky.stickyFor>=this.vp.width&&t.sticky.active)&&(t.sticky.active=!1),this.setPosition(t)}},{key:\"initScrollEvents\",value:function(t){var i=this;t.sticky.scrollListener=function(){return i.onScrollEvents(t)},window.addEventListener(\"scroll\",t.sticky.scrollListener)}},{key:\"destroyScrollEvents\",value:function(t){window.removeEventListener(\"scroll\",t.sticky.scrollListener)}},{key:\"onScrollEvents\",value:function(t){t.sticky&&t.sticky.active&&this.setPosition(t)}},{key:\"setPosition\",value:function(t){this.css(t,{position:\"\",width:\"\",top:\"\",left:\"\"}),this.vp.height<t.sticky.rect.height||!t.sticky.active||(t.sticky.rect.width||(t.sticky.rect=this.getRectangle(t)),t.sticky.wrap&&this.css(t.parentNode,{display:\"block\",width:t.sticky.rect.width+\"px\",height:t.sticky.rect.height+\"px\"}),0===t.sticky.rect.top&&t.sticky.container===this.body?(this.css(t,{position:\"fixed\",top:t.sticky.rect.top+\"px\",left:t.sticky.rect.left+\"px\",width:t.sticky.rect.width+\"px\"}),t.sticky.stickyClass&&t.classList.add(t.sticky.stickyClass)):this.scrollTop>t.sticky.rect.top-t.sticky.marginTop?(this.css(t,{position:\"fixed\",width:t.sticky.rect.width+\"px\",left:t.sticky.rect.left+\"px\"}),this.scrollTop+t.sticky.rect.height+t.sticky.marginTop>t.sticky.container.rect.top+t.sticky.container.offsetHeight-t.sticky.marginBottom?(t.sticky.stickyClass&&t.classList.remove(t.sticky.stickyClass),this.css(t,{top:t.sticky.container.rect.top+t.sticky.container.offsetHeight-(this.scrollTop+t.sticky.rect.height+t.sticky.marginBottom)+\"px\"})):(t.sticky.stickyClass&&t.classList.add(t.sticky.stickyClass),this.css(t,{top:t.sticky.marginTop+\"px\"}))):(t.sticky.stickyClass&&t.classList.remove(t.sticky.stickyClass),this.css(t,{position:\"\",width:\"\",top:\"\",left:\"\"}),t.sticky.wrap&&this.css(t.parentNode,{display:\"\",width:\"\",height:\"\"})))}},{key:\"update\",value:function(){var i=this;this.forEach(this.elements,function(t){t.sticky.rect=i.getRectangle(t),t.sticky.container.rect=i.getRectangle(t.sticky.container),i.activate(t),i.setPosition(t)})}},{key:\"destroy\",value:function(){var i=this;window.removeEventListener(\"load\",this.updateScrollTopPosition),window.removeEventListener(\"scroll\",this.updateScrollTopPosition),this.forEach(this.elements,function(t){i.destroyResizeEvents(t),i.destroyScrollEvents(t),delete t.sticky})}},{key:\"getStickyContainer\",value:function(t){for(var i=t.parentNode;!i.hasAttribute(\"data-sticky-container\")&&!i.parentNode.querySelector(t.sticky.stickyContainer)&&i!==this.body;)i=i.parentNode;return i}},{key:\"getRectangle\",value:function(t){this.css(t,{position:\"\",width:\"\",top:\"\",left:\"\"});for(var i=Math.max(t.offsetWidth,t.clientWidth,t.scrollWidth),e=Math.max(t.offsetHeight,t.clientHeight,t.scrollHeight),s=0,n=0;s+=t.offsetTop||0,n+=t.offsetLeft||0,t=t.offsetParent;);return{top:s,left:n,width:i,height:e}}},{key:\"getViewportSize\",value:function(){return{width:Math.max(document.documentElement.clientWidth,window.innerWidth||0),height:Math.max(document.documentElement.clientHeight,window.innerHeight||0)}}},{key:\"updateScrollTopPosition\",value:function(){this.scrollTop=(window.pageYOffset||document.scrollTop)-(document.clientTop||0)||0}},{key:\"forEach\",value:function(t,i){for(var e=0,s=t.length;e<s;e++)i(t[e])}},{key:\"css\",value:function(t,i){for(var e in i)i.hasOwnProperty(e)&&(t.style[e]=i[e])}}]),e}();!function(t,i){\"undefined\"!=typeof exports?module.exports=i:\"function\"==typeof define&&define.amd?define([],function(){return i}):t.Sticky=i}(this,Sticky);\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m       | \u001b[39m         \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 73547 | \u001b[39m\u001b[32mvar identity = function (x) {\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 73548 | \u001b[39m\u001b[32m    return x;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 73549 | \u001b[39m\u001b[32m};\u001b[39m\u001b[0m\n    at Parser._raise (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:742:17)\n    at Parser.raiseWithData (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:735:17)\n    at Parser.raise (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:729:17)\n    at ScopeHandler.checkRedeclarationInScope (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:4781:12)\n    at ScopeHandler.declareName (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:4747:12)\n    at Parser.registerFunctionStatementId (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:11849:16)\n    at Parser.parseFunction (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:11825:12)\n    at Parser.parseFunctionStatement (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:11450:17)\n    at Parser.parseStatementContent (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:11142:21)\n    at Parser.parseStatement (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:11104:17)\n    at Parser.parseBlockOrModuleBlockBody (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:11679:25)\n    at Parser.parseBlockBody (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:11665:10)\n    at Parser.parseTopLevel (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:11035:10)\n    at Parser.parse (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:12671:10)\n    at parse (/home/malaz/code/ta5assusi/node_modules/@babel/parser/lib/index.js:12722:38)\n    at parser (/home/malaz/code/ta5assusi/node_modules/@babel/core/lib/parser/index.js:54:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (/home/malaz/code/ta5assusi/node_modules/@babel/core/lib/transformation/normalize-file.js:93:38)\n    at normalizeFile.next (<anonymous>)\n    at run (/home/malaz/code/ta5assusi/node_modules/@babel/core/lib/transformation/index.js:31:50)\n    at run.next (<anonymous>)\n    at Function.transform (/home/malaz/code/ta5assusi/node_modules/@babel/core/lib/transform.js:27:41)\n    at transform.next (<anonymous>)\n    at step (/home/malaz/code/ta5assusi/node_modules/gensync/index.js:254:32)\n    at gen.next (/home/malaz/code/ta5assusi/node_modules/gensync/index.js:266:13)\n    at async.call.value (/home/malaz/code/ta5assusi/node_modules/gensync/index.js:216:11)");

/***/ }),

/***/ "./resources/js/plugins.js":
/*!*********************************!*\
  !*** ./resources/js/plugins.js ***!
  \*********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _public_assets_plugins_global_plugins_bundle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../public/assets/plugins/global/plugins.bundle */ "./public/assets/plugins/global/plugins.bundle.js");
/* harmony import */ var _public_assets_plugins_global_plugins_bundle__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_public_assets_plugins_global_plugins_bundle__WEBPACK_IMPORTED_MODULE_0__);


/***/ }),

/***/ 1:
/*!***************************************!*\
  !*** multi ./resources/js/plugins.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/malaz/code/ta5assusi/resources/js/plugins.js */"./resources/js/plugins.js");


/***/ })

/******/ });
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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 47);
/******/ })
/************************************************************************/
/******/ ({

/***/ 47:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(48);


/***/ }),

/***/ 48:
/***/ (function(module, exports) {

$('.title').each(function () {
	new Vue({
		el: this,
		methods: {
			showDemo: function showDemo(event) {
				var className = $(event.currentTarget).attr('show');
				if ($('.' + className).hasClass('is-hidden')) {
					$('.' + className).removeClass('is-hidden');
				} else {
					$('.' + className).addClass('is-hidden');
				}
			}
		}
	});
});
new Vue({
	el: "#root-1",
	data: {
		message: "Hello World"
	}
});
var app = new Vue({
	el: "#root-2",
	data: {
		newName: '',
		names: ['ganesh', 'shantanu', 'amit', 'ramesh', 'harsh'],
		style: '',
		title: 'Enter name to add into the list.'
	},
	methods: {
		addName: function addName() {
			if (this.newName !== "") {
				this.names.push(this.newName);
				this.newName = '';
			} else {
				this.style = "border-color:red";
			}
			this.title = 'Enter name to add into the list.';
		},
		onFocus: function onFocus() {
			this.style = "";
		},
		onKeyUp: function onKeyUp() {
			this.title = 'Click button to add ' + this.newName + ' into the list.';
		}
	}
});
var app2 = new Vue({
	el: "#root-3",
	data: {
		tasks: [{
			description: 'Taks 1',
			completed: false
		}, {
			description: 'Taks 2',
			completed: true
		}, {
			description: 'Taks 3',
			completed: false
		}, {
			description: 'Taks 4',
			completed: true
		}, {
			description: 'Taks 5',
			completed: false
		}, {
			description: 'Taks 6',
			completed: false
		}]
	},
	computed: {
		incompleteTasks: function incompleteTasks() {
			return this.tasks.filter(function (task) {
				return !task.completed;
			});
		}
	}
});

/***/ })

/******/ });
webpackJsonp([0],{

/***/ 204:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(211)
}
var normalizeComponent = __webpack_require__(77)
/* script */
var __vue_script__ = __webpack_require__(213)
/* template */
var __vue_template__ = __webpack_require__(218)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/Hello.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-e28e2faa", Component.options)
  } else {
    hotAPI.reload("data-v-e28e2faa", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 211:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(212);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(76)("8a47bff6", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-e28e2faa\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Hello.vue", function() {
     var newContent = require("!!../../../../node_modules/css-loader/index.js!../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-e28e2faa\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Hello.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 212:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(46)(false);
// imports


// module
exports.push([module.i, "\n.el-carousel__item h3 {\n    color: #475669;\n    font-size: 14px;\n    opacity: 0.75;\n    line-height: 200px;\n    margin: 0;\n}\n.el-carousel__item:nth-child(2n) {\n    background-color: #99a9bf;\n}\n.el-carousel__item:nth-child(2n+1) {\n    background-color: #d3dce6;\n}\n", ""]);

// exports


/***/ }),

/***/ 213:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            banners: [{
                'id': '0',
                'src': __webpack_require__(214),
                'txt': '我是第一个'
            }, {
                'id': '1',
                'src': __webpack_require__(215),
                'txt': '我是第二个'
            }, {
                'id': '2',
                'src': __webpack_require__(216),
                'txt': '我是第三个'
            }, {
                'id': '3',
                'src': __webpack_require__(217),
                'txt': '我是第四个'
            }]
        };
    }
});

/***/ }),

/***/ 214:
/***/ (function(module, exports) {

module.exports = "/images/1.jpg?418377abeb8562b19fe3138c8ee3fcd9";

/***/ }),

/***/ 215:
/***/ (function(module, exports) {

module.exports = "/images/2.jpg?2c227fade63e497e0b82db6b3bdf4694";

/***/ }),

/***/ 216:
/***/ (function(module, exports) {

module.exports = "/images/3.jpg?e8262c4167067968f1e465924830df8b";

/***/ }),

/***/ 217:
/***/ (function(module, exports) {

module.exports = "/images/4.jpg?62248aac2ca64c27d9e7294ff4933e7d";

/***/ }),

/***/ 218:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "el-row",
        [
          _c(
            "el-carousel",
            { attrs: { interval: 4000, type: "card", height: "200px" } },
            _vm._l(_vm.banners, function(item) {
              return _c("el-carousel-item", { key: item.id }, [
                _c("span", [_vm._v(_vm._s(item.txt))]),
                _vm._v(" "),
                _c("img", { attrs: { src: item.src } })
              ])
            }),
            1
          )
        ],
        1
      ),
      _vm._v(" "),
      _c("router-view")
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-e28e2faa", module.exports)
  }
}

/***/ })

});
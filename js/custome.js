function _0x192f() {
  var _0x2273cb = [
    "block",
    "3900lYdkKu",
    "1963eCmufw",
    "3418667ZMMizZ",
    "88TEkkrR",
    "10fPNOsg",
    "241047qyqcPR",
    "ArrowDown",
    "getElementById",
    "3ludwDM",
    "Code\x20Succes,\x20Please\x20Press\x20TAB",
    "1985gteIiG",
    "ArrowRight",
    "1qgdMtG",
    "ArrowUp",
    "619996pBCEzo",
    "IEMobile",
    "keydown",
    "77756dUCxCb",
    "display",
    "3702HWEgpE",
    "1249501zHxGOu",
    "addEventListener",
    "style",
    "orientation",
  ];
  _0x192f = function () {
    return _0x2273cb;
  };
  return _0x192f();
}
var _0x27a0fc = _0x1144;
(function (_0x4eee5c, _0x32fabd) {
  var _0x511b3c = _0x1144,
    _0x365214 = _0x4eee5c();
  while (!![]) {
    try {
      var _0x5b309f =
        (parseInt(_0x511b3c(0x143)) / 0x1) * (-parseInt(_0x511b3c(0x148)) / 0x2) +
        (-parseInt(_0x511b3c(0x158)) / 0x3) * (parseInt(_0x511b3c(0x145)) / 0x4) +
        (-parseInt(_0x511b3c(0x15a)) / 0x5) * (-parseInt(_0x511b3c(0x14a)) / 0x6) +
        parseInt(_0x511b3c(0x152)) / 0x7 +
        (-parseInt(_0x511b3c(0x153)) / 0x8) * (parseInt(_0x511b3c(0x155)) / 0x9) +
        (-parseInt(_0x511b3c(0x154)) / 0xa) * (-parseInt(_0x511b3c(0x14b)) / 0xb) +
        (parseInt(_0x511b3c(0x150)) / 0xc) * (-parseInt(_0x511b3c(0x151)) / 0xd);
      if (_0x5b309f === _0x32fabd) break;
      else _0x365214["push"](_0x365214["shift"]());
    } catch (_0x4129d3) {
      _0x365214["push"](_0x365214["shift"]());
    }
  }
})(_0x192f, 0x4b86c);
var expectedKeySequence = ["ArrowLeft", _0x27a0fc(0x142), _0x27a0fc(0x144), _0x27a0fc(0x156)],
  currentStep = 0x0;
function toggleShow() {
  var _0xf25f6d = _0x27a0fc,
    _0x4881e3 = document[_0xf25f6d(0x157)]("notfound");
  _0x4881e3[_0xf25f6d(0x14d)][_0xf25f6d(0x149)] = _0xf25f6d(0x14f);
}
function isMobileDevice() {
  var _0x265ba4 = _0x27a0fc;
  return typeof window[_0x265ba4(0x14e)] !== "undefined" || navigator["userAgent"]["indexOf"](_0x265ba4(0x146)) !== -0x1;
}
function _0x1144(_0x251889, _0x575d6e) {
  var _0x192f07 = _0x192f();
  return (
    (_0x1144 = function (_0x11442f, _0x336ad6) {
      _0x11442f = _0x11442f - 0x142;
      var _0x521d4c = _0x192f07[_0x11442f];
      return _0x521d4c;
    }),
    _0x1144(_0x251889, _0x575d6e)
  );
}
document[_0x27a0fc(0x14c)](_0x27a0fc(0x147), function (_0x4613b5) {
  var _0x1aaa01 = _0x27a0fc;
  _0x4613b5["key"] === expectedKeySequence[currentStep] ? (currentStep++, currentStep === expectedKeySequence["length"] && (toggleShow(), alert(_0x1aaa01(0x159)), (currentStep = 0x0))) : (currentStep = 0x0);
});
isMobileDevice() && toggleShow();

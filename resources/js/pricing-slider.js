// Hasn't been implemented yet.
"use strict";
var _value, _controllers, _elements, _shadow, _attachDragListeners, _dragStart, _dragMove, _dragEnd;
function _classPrivateMethodInitSpec(t, e) {
    _checkPrivateRedeclaration(t, e),
    e.add(t)
}
function _classPrivateFieldInitSpec(t, e, a) {
    _checkPrivateRedeclaration(t, e),
    e.set(t, a)
}
function _checkPrivateRedeclaration(t, e) {
    if (e.has(t))
        throw new TypeError("Cannot initialize the same private elements twice on an object")
}
function _classPrivateMethodGet(t, e, a) {
    if (!e.has(t))
        throw new TypeError("attempted to get private field on non-instance");
    return a
}
function _classPrivateFieldSet(t, e, a) {
    return _classApplyDescriptorSet(t, _classExtractFieldDescriptor(t, e, "set"), a),
    a
}
function _classApplyDescriptorSet(t, e, a) {
    if (e.set)
        e.set.call(t, a);
    else {
        if (!e.writable)
            throw new TypeError("attempted to set read only private field");
        e.value = a
    }
}
function _classPrivateFieldGet(t, e) {
    return _classApplyDescriptorGet(t, _classExtractFieldDescriptor(t, e, "get"))
}
function _classExtractFieldDescriptor(t, e, a) {
    if (!e.has(t))
        throw new TypeError("attempted to " + a + " private field on non-instance");
    return e.get(t)
}
function _classApplyDescriptorGet(t, e) {
    return e.get ? e.get.call(t) : e.value
}
const template = document.createElement("template");
function _attachDragListeners2() {
    var t;
    const {container: e} = _classPrivateFieldGet(this, _elements)
      , a = new AbortController
      , {signal: r} = a;
    null === (t = _classPrivateFieldGet(this, _controllers).drag) || void 0 === t || t.abort(),
    _classPrivateFieldGet(this, _controllers).drag = a,
    e.addEventListener("pointerdown", t=>_classPrivateMethodGet(this, _dragStart, _dragStart2).call(this, t), {
        signal: r
    })
}
function _dragStart2(t) {
    var e;
    t.preventDefault();
    const {track: a} = _classPrivateFieldGet(this, _elements)
      , r = this.getBoundingClientRect()
      , s = new AbortController
      , {signal: i} = s;
    null === (e = _classPrivateFieldGet(this, _controllers).dragInProgress) || void 0 === e || e.abort(),
    _classPrivateFieldGet(this, _controllers).dragInProgress = s,
    _classPrivateMethodGet(this, _dragMove, _dragMove2).call(this, t, r),
    document.addEventListener("pointermove", t=>_classPrivateMethodGet(this, _dragMove, _dragMove2).call(this, t, r), {
        signal: i
    }),
    document.addEventListener("pointerup", ()=>_classPrivateMethodGet(this, _dragEnd, _dragEnd2).call(this), {
        signal: i
    })
}
function _dragMove2(t, e) {
    t.preventDefault();
    const {top: a, left: r, width: s, height: i} = e
      , {clientX: l, clientY: n} = t;
    this.value = this.vertical ? (n - a) / i : (l - r) / s
}
function _dragEnd2() {
    _classPrivateFieldGet(this, _controllers).dragInProgress.abort()
}
template.innerHTML = '<div part="container"> <div part="track"></div> <div part="thumb"> <slot name="thumb"></slot> </div> </div> <style>:host{display:block;--bar-color:#ff6da2;--track-color:#b4bcbf}[part=container]{width:100%;height:100%;position:relative;cursor:pointer}[part=track]{width:100%;height:5px;position:absolute;inset:50% auto auto 50%;transform:translate(-50%,-50%);background:linear-gradient(var(--bar-color),var(--bar-color)) no-repeat bottom left/calc(var(--value) * 100%) 100%,var(--track-color);border-radius:100px}[part=thumb]{position:absolute;inset:50% auto auto calc(100% * var(--value));transform:translate(-50%,-50%)}:host([vertical]) [part=track]{width:5px;height:100%;background-size:100% calc(var(--value) * 100%)}</style>',
customElements.define("range-slider", (_value = new WeakMap,
_controllers = new WeakMap,
_elements = new WeakMap,
_shadow = new WeakMap,
_attachDragListeners = new WeakSet,
_dragStart = new WeakSet,
_dragMove = new WeakSet,
_dragEnd = new WeakSet,
class extends HTMLElement {
    constructor() {
        super(),
        _classPrivateMethodInitSpec(this, _dragEnd),
        _classPrivateMethodInitSpec(this, _dragMove),
        _classPrivateMethodInitSpec(this, _dragStart),
        _classPrivateMethodInitSpec(this, _attachDragListeners),
        _classPrivateFieldInitSpec(this, _value, {
            writable: !0,
            value: void 0
        }),
        _classPrivateFieldInitSpec(this, _controllers, {
            writable: !0,
            value: {}
        }),
        _classPrivateFieldInitSpec(this, _elements, {
            writable: !0,
            value: {
                container: "[part=container]",
                track: "[part=track]",
                thumb: "[part=thumb]",
                slot: "slot"
            }
        }),
        _classPrivateFieldInitSpec(this, _shadow, {
            writable: !0,
            value: this.attachShadow({
                mode: "closed"
            })
        }),
        _classPrivateFieldGet(this, _shadow).append(template.content.cloneNode(!0));
        for (const [t,e] of Object.entries(_classPrivateFieldGet(this, _elements)))
            _classPrivateFieldGet(this, _elements)[t] = _classPrivateFieldGet(this, _shadow).querySelector(e);
        this.value = 0
    }
    get vertical() {
        return this.hasAttribute("vertical")
    }
    set vertical(t) {
        this.toggleAttribute("vertical", !!t)
    }
    get value() {
        return _classPrivateFieldGet(this, _value)
    }
    set value(t) {
        if (t = Math.min(1, Math.max(0, t)),
        _classPrivateFieldGet(this, _value) === t)
            return;
        _classPrivateFieldSet(this, _value, t),
        this.dispatchEvent(new Event("change"));
        const {container: e} = _classPrivateFieldGet(this, _elements);
        e.style.setProperty("--value", t)
    }
    connectedCallback() {
        _classPrivateMethodGet(this, _attachDragListeners, _attachDragListeners2).call(this)
    }
    disconnectedCallback() {
        var t;
        null === (t = _classPrivateFieldGet(this, _controllers).drag) || void 0 === t || t.abort()
    }
}
));

﻿(function (h, e, b, i, c, g, j) {/*! Jssor */
    new (function () {
    });
    var d = h.$JssorEasing$ = {$EaseSwing: function (a) {
            return-b.cos(a * b.PI) / 2 + .5
        }, $EaseLinear: function (a) {
            return a
        }, $EaseInQuad: function (a) {
            return a * a
        }, $EaseOutQuad: function (a) {
            return-a * (a - 2)
        }, $EaseInOutQuad: function (a) {
            return(a *= 2) < 1 ? 1 / 2 * a * a : -1 / 2 * (--a * (a - 2) - 1)
        }, $EaseInCubic: function (a) {
            return a * a * a
        }, $EaseOutCubic: function (a) {
            return(a -= 1) * a * a + 1
        }, $EaseInOutCubic: function (a) {
            return(a *= 2) < 1 ? 1 / 2 * a * a * a : 1 / 2 * ((a -= 2) * a * a + 2)
        }, $EaseInQuart: function (a) {
            return a * a * a * a
        }, $EaseOutQuart: function (a) {
            return-((a -= 1) * a * a * a - 1)
        }, $EaseInOutQuart: function (a) {
            return(a *= 2) < 1 ? 1 / 2 * a * a * a * a : -1 / 2 * ((a -= 2) * a * a * a - 2)
        }, $EaseInQuint: function (a) {
            return a * a * a * a * a
        }, $EaseOutQuint: function (a) {
            return(a -= 1) * a * a * a * a + 1
        }, $EaseInOutQuint: function (a) {
            return(a *= 2) < 1 ? 1 / 2 * a * a * a * a * a : 1 / 2 * ((a -= 2) * a * a * a * a + 2)
        }, $EaseInSine: function (a) {
            return 1 - b.cos(a * b.PI / 2)
        }, $EaseOutSine: function (a) {
            return b.sin(a * b.PI / 2)
        }, $EaseInOutSine: function (a) {
            return-1 / 2 * (b.cos(b.PI * a) - 1)
        }, $EaseInExpo: function (a) {
            return a == 0 ? 0 : b.pow(2, 10 * (a - 1))
        }, $EaseOutExpo: function (a) {
            return a == 1 ? 1 : -b.pow(2, -10 * a) + 1
        }, $EaseInOutExpo: function (a) {
            return a == 0 || a == 1 ? a : (a *= 2) < 1 ? 1 / 2 * b.pow(2, 10 * (a - 1)) : 1 / 2 * (-b.pow(2, -10 * --a) + 2)
        }, $EaseInCirc: function (a) {
            return-(b.sqrt(1 - a * a) - 1)
        }, $EaseOutCirc: function (a) {
            return b.sqrt(1 - (a -= 1) * a)
        }, $EaseInOutCirc: function (a) {
            return(a *= 2) < 1 ? -1 / 2 * (b.sqrt(1 - a * a) - 1) : 1 / 2 * (b.sqrt(1 - (a -= 2) * a) + 1)
        }, $EaseInElastic: function (a) {
            if (!a || a == 1)
                return a;
            var c = .3, d = .075;
            return-(b.pow(2, 10 * (a -= 1)) * b.sin((a - d) * 2 * b.PI / c))
        }, $EaseOutElastic: function (a) {
            if (!a || a == 1)
                return a;
            var c = .3, d = .075;
            return b.pow(2, -10 * a) * b.sin((a - d) * 2 * b.PI / c) + 1
        }, $EaseInOutElastic: function (a) {
            if (!a || a == 1)
                return a;
            var c = .45, d = .1125;
            return(a *= 2) < 1 ? -.5 * b.pow(2, 10 * (a -= 1)) * b.sin((a - d) * 2 * b.PI / c) : b.pow(2, -10 * (a -= 1)) * b.sin((a - d) * 2 * b.PI / c) * .5 + 1
        }, $EaseInBack: function (a) {
            var b = 1.70158;
            return a * a * ((b + 1) * a - b)
        }, $EaseOutBack: function (a) {
            var b = 1.70158;
            return(a -= 1) * a * ((b + 1) * a + b) + 1
        }, $EaseInOutBack: function (a) {
            var b = 1.70158;
            return(a *= 2) < 1 ? 1 / 2 * a * a * (((b *= 1.525) + 1) * a - b) : 1 / 2 * ((a -= 2) * a * (((b *= 1.525) + 1) * a + b) + 2)
        }, $EaseInBounce: function (a) {
            return 1 - d.$EaseOutBounce(1 - a)
        }, $EaseOutBounce: function (a) {
            return a < 1 / 2.75 ? 7.5625 * a * a : a < 2 / 2.75 ? 7.5625 * (a -= 1.5 / 2.75) * a + .75 : a < 2.5 / 2.75 ? 7.5625 * (a -= 2.25 / 2.75) * a + .9375 : 7.5625 * (a -= 2.625 / 2.75) * a + .984375
        }, $EaseInOutBounce: function (a) {
            return a < 1 / 2 ? d.$EaseInBounce(a * 2) * .5 : d.$EaseOutBounce(a * 2 - 1) * .5 + .5
        }, $EaseGoBack: function (a) {
            return 1 - b.abs(2 - 1)
        }, $EaseInWave: function (a) {
            return 1 - b.cos(a * b.PI * 2)
        }, $EaseOutWave: function (a) {
            return b.sin(a * b.PI * 2)
        }, $EaseOutJump: function (a) {
            return 1 - ((a *= 2) < 1 ? (a = 1 - a) * a * a : (a -= 1) * a * a)
        }, $EaseInJump: function (a) {
            return(a *= 2) < 1 ? a * a * a : (a = 2 - a) * a * a
        }};
    var a = new function () {
        var f = this, xb = /\S+/g, T = 1, fb = 2, kb = 3, jb = 4, ob = 5, L, s = 0, l = 0, p = 0, bb = 0, A = 0, B = navigator, tb = B.appName, k = B.userAgent, z;
        function Eb() {
            if (!L) {
                L = {he: "ontouchstart"in h || "createTouch"in e};
                var a;
                if (B.pointerEnabled || (a = B.msPointerEnabled))
                    L.od = a ? "msTouchAction" : "touchAction"
            }
            return L
        }
        function v(i) {
            if (!s) {
                s = -1;
                if (tb == "Microsoft Internet Explorer" && !!h.attachEvent && !!h.ActiveXObject) {
                    var f = k.indexOf("MSIE");
                    s = T;
                    p = n(k.substring(f + 5, k.indexOf(";", f)));/*@cc_on bb=@_jscript_version@*/
                    ;
                    l = e.documentMode || p
                } else if (tb == "Netscape" && !!h.addEventListener) {
                    var d = k.indexOf("Firefox"), b = k.indexOf("Safari"), g = k.indexOf("Chrome"), c = k.indexOf("AppleWebKit");
                    if (d >= 0) {
                        s = fb;
                        l = n(k.substring(d + 8))
                    } else if (b >= 0) {
                        var j = k.substring(0, b).lastIndexOf("/");
                        s = g >= 0 ? jb : kb;
                        l = n(k.substring(j + 1, b))
                    } else {
                        var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(k);
                        if (a) {
                            s = T;
                            l = p = n(a[1])
                        }
                    }
                    if (c >= 0)
                        A = n(k.substring(c + 12))
                } else {
                    var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(k);
                    if (a) {
                        s = ob;
                        l = n(a[2])
                    }
                }
            }
            return i == s
        }
        function q() {
            return v(T)
        }
        function O() {
            return q() && (l < 6 || e.compatMode == "BackCompat")
        }
        function ib() {
            return v(kb)
        }
        function hb() {
            return v(jb)
        }
        function nb() {
            return v(ob)
        }
        function cb() {
            return ib() && A > 534 && A < 535
        }
        function M() {
            return q() && l < 9
        }
        function t(a) {
            if (!z) {
                m(["transform", "WebkitTransform", "msTransform", "MozTransform", "OTransform"], function (b) {
                    if (a.style[b] != j) {
                        z = b;
                        return c
                    }
                });
                z = z || "transform"
            }
            return z
        }
        function sb(a) {
            return{}.toString.call(a)
        }
        var K;
        function Cb() {
            if (!K) {
                K = {};
                m(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function (a) {
                    K["[object " + a + "]"] = a.toLowerCase()
                })
            }
            return K
        }
        function m(a, d) {
            if (sb(a) == "[object Array]") {
                for (var b = 0; b < a.length; b++)
                    if (d(a[b], b, a))
                        return c
            } else
                for (var e in a)
                    if (d(a[e], e, a))
                        return c
        }
        function D(a) {
            return a == i ? String(a) : Cb()[sb(a)] || "object"
        }
        function qb(a) {
            for (var b in a)
                return c
        }
        function G(a) {
            try {
                return D(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf"))
            } catch (b) {
            }
        }
        function y(a, b) {
            return{x: a, y: b}
        }
        function vb(b, a) {
            setTimeout(b, a || 0)
        }
        function I(b, d, c) {
            var a = !b || b == "inherit" ? "" : b;
            m(d, function (c) {
                var b = c.exec(a);
                if (b) {
                    var d = a.substr(0, b.index), e = a.substr(b.lastIndex + 1, a.length - (b.lastIndex + 1));
                    a = d + e
                }
            });
            a = c + (a.indexOf(" ") != 0 ? " " : "") + a;
            return a
        }
        function eb(b, a) {
            if (l < 9)
                b.style.filter = a
        }
        function zb(b, a, c) {
            if (bb < 9) {
                var e = b.style.filter, h = new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g), g = a ? "progid:DXImageTransform.Microsoft.Matrix(M11=" + a[0][0] + ", M12=" + a[0][1] + ", M21=" + a[1][0] + ", M22=" + a[1][1] + ", SizingMethod='auto expand')" : "", d = I(e, [h], g);
                eb(b, d);
                f.rd(b, c.y);
                f.Lc(b, c.x)
            }
        }
        f.ge = Eb;
        f.ud = q;
        f.ie = ib;
        f.de = hb;
        f.vc = nb;
        f.T = M;
        f.cd = function () {
            return l
        };
        f.uc = function () {
            v();
            return A
        };
        f.$Delay = vb;
        function W(a) {
            a.constructor === W.caller && a.ad && a.ad.apply(a, W.caller.arguments)
        }
        f.ad = W;
        f.Z = function (a) {
            if (f.fd(a))
                a = e.getElementById(a);
            return a
        };
        function r(a) {
            return a || h.event
        }
        f.kd = r;
        f.rc = function (a) {
            a = r(a);
            return a.target || a.srcElement || e
        };
        f.md = function (a) {
            a = r(a);
            return{x: a.pageX || a.clientX || 0, y: a.pageY || a.clientY || 0}
        };
        function E(c, d, a) {
            if (a != j)
                c.style[d] = a;
            else {
                var b = c.currentStyle || c.style;
                a = b[d];
                if (a == "" && h.getComputedStyle) {
                    b = c.ownerDocument.defaultView.getComputedStyle(c, i);
                    b && (a = b.getPropertyValue(d) || b[d])
                }
                return a
            }
        }
        function Y(b, c, a, d) {
            if (a != j) {
                d && (a += "px");
                E(b, c, a)
            } else
                return n(E(b, c))
        }
        function o(d, a) {
            var b = a & 2, c = a ? Y : E;
            return function (e, a) {
                return c(e, d, a, b)
            }
        }
        function Ab(b) {
            if (q() && p < 9) {
                var a = /opacity=([^)]*)/.exec(b.style.filter || "");
                return a ? n(a[1]) / 100 : 1
            } else
                return n(b.style.opacity || "1")
        }
        function Bb(c, a, f) {
            if (q() && p < 9) {
                var h = c.style.filter || "", i = new RegExp(/[\s]*alpha\([^\)]*\)/g), e = b.round(100 * a), d = "";
                if (e < 100 || f)
                    d = "alpha(opacity=" + e + ") ";
                var g = I(h, [i], d);
                eb(c, g)
            } else
                c.style.opacity = a == 1 ? "" : b.round(a * 100) / 100
        }
        function ab(e, a) {
            var d = a.$Rotate || 0, c = a.$Scale == j ? 1 : a.$Scale;
            if (M()) {
                var l = f.pe(d / 180 * b.PI, c, c);
                zb(e, !d && c == 1 ? i : l, f.se(l, a.$OriginalWidth, a.$OriginalHeight))
            } else {
                var g = t(e);
                if (g) {
                    var k = "rotate(" + d % 360 + "deg) scale(" + c + ")";
                    if (hb() && A > 535 && "ontouchstart"in h)
                        k += " perspective(2000px)";
                    e.style[g] = k
                }
            }
        }
        f.re = function (b, a) {
            if (cb())
                vb(f.L(i, ab, b, a));
            else
                ab(b, a)
        };
        f.me = function (b, c) {
            var a = t(b);
            if (a)
                b.style[a + "Origin"] = c
        };
        f.le = function (a, c) {
            if (q() && p < 9 || p < 10 && O())
                a.style.zoom = c == 1 ? "" : c;
            else {
                var b = t(a);
                if (b) {
                    var f = "scale(" + c + ")", e = a.style[b], g = new RegExp(/[\s]*scale\(.*?\)/g), d = I(e, [g], f);
                    a.style[b] = d
                }
            }
        };
        f.oe = function (a) {
            if (!a.style[t(a)] || a.style[t(a)] == "none")
                a.style[t(a)] = "perspective(2000px)"
        };
        f.Ob = function (b, a) {
            return function (c) {
                c = r(c);
                var e = c.type, d = c.relatedTarget || (e == "mouseout" ? c.toElement : c.fromElement);
                (!d || d !== a && !f.nf(a, d)) && b(c)
            }
        };
        f.c = function (a, c, d, b) {
            a = f.Z(a);
            if (a.addEventListener) {
                c == "mousewheel" && a.addEventListener("DOMMouseScroll", d, b);
                a.addEventListener(c, d, b)
            } else if (a.attachEvent) {
                a.attachEvent("on" + c, d);
                b && a.setCapture && a.setCapture()
            }
        };
        f.M = function (a, c, d, b) {
            a = f.Z(a);
            if (a.removeEventListener) {
                c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b);
                a.removeEventListener(c, d, b)
            } else if (a.detachEvent) {
                a.detachEvent("on" + c, d);
                b && a.releaseCapture && a.releaseCapture()
            }
        };
        f.Ib = function (a) {
            a = r(a);
            a.preventDefault && a.preventDefault();
            a.cancel = c;
            a.returnValue = g
        };
        f.af = function (a) {
            a = r(a);
            a.stopPropagation && a.stopPropagation();
            a.cancelBubble = c
        };
        f.L = function (d, c) {
            var a = [].slice.call(arguments, 2), b = function () {
                var b = a.concat([].slice.call(arguments, 0));
                return c.apply(d, b)
            };
            return b
        };
        f.ff = function (a, b) {
            if (b == j)
                return a.textContent || a.innerText;
            var c = e.createTextNode(b);
            f.hc(a);
            a.appendChild(c)
        };
        f.P = function (d, c) {
            for (var b = [], a = d.firstChild; a; a = a.nextSibling)
                (c || a.nodeType == 1) && b.push(a);
            return b
        };
        function rb(a, c, e, b) {
            b = b || "u";
            for (a = a?a.firstChild:i; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    if (S(a, b) == c)
                        return a;
                    if (!e) {
                        var d = rb(a, c, e, b);
                        if (d)
                            return d
                    }
                }
        }
        f.A = rb;
        function Q(a, d, f, b) {
            b = b || "u";
            var c = [];
            for (a = a?a.firstChild:i; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    S(a, b) == d && c.push(a);
                    if (!f) {
                        var e = Q(a, d, f, b);
                        if (e.length)
                            c = c.concat(e)
                    }
                }
            return c
        }
        function lb(a, c, d) {
            for (a = a?a.firstChild:i; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    if (a.tagName == c)
                        return a;
                    if (!d) {
                        var b = lb(a, c, d);
                        if (b)
                            return b
                    }
                }
        }
        f.of = lb;
        function db(a, c, e) {
            var b = [];
            for (a = a?a.firstChild:i; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    (!c || a.tagName == c) && b.push(a);
                    if (!e) {
                        var d = db(a, c, e);
                        if (d.length)
                            b = b.concat(d)
                    }
                }
            return b
        }
        f.mf = db;
        f.jf = function (b, a) {
            return b.getElementsByTagName(a)
        };
        function C() {
            var e = arguments, d, c, b, a, g = 1 & e[0], f = 1 + g;
            d = e[f - 1] || {};
            for (; f < e.length; f++)
                if (c = e[f])
                    for (b in c) {
                        a = c[b];
                        if (a !== j) {
                            a = c[b];
                            d[b] = g && G(d[b]) ? C(g, {}, a) : a
                        }
                    }
            return d
        }
        f.n = C;
        function X(f, g) {
            var d = {}, c, a, b;
            for (c in f) {
                a = f[c];
                b = g[c];
                if (a !== b) {
                    var e;
                    if (G(a) && G(b)) {
                        a = X(b);
                        e = !qb(a)
                    }
                    !e && (d[c] = a)
                }
            }
            return d
        }
        f.Ic = function (a) {
            return D(a) == "function"
        };
        f.Zb = function (a) {
            return D(a) == "array"
        };
        f.fd = function (a) {
            return D(a) == "string"
        };
        f.Hc = function (a) {
            return!isNaN(n(a)) && isFinite(a)
        };
        f.e = m;
        function P(a) {
            return e.createElement(a)
        }
        f.ab = function () {
            return P("DIV")
        };
        f.Re = function () {
            return P("SPAN")
        };
        f.jc = function () {
        };
        function U(b, c, a) {
            if (a == j)
                return b.getAttribute(c);
            b.setAttribute(c, a)
        }
        function S(a, b) {
            return U(a, b) || U(a, "data-" + b)
        }
        f.I = U;
        f.u = S;
        function w(b, a) {
            if (a == j)
                return b.className;
            b.className = a
        }
        f.Rc = w;
        function ub(b) {
            var a = {};
            m(b, function (b) {
                a[b] = b
            });
            return a
        }
        function wb(b, a) {
            return b.match(a || xb)
        }
        function N(b, a) {
            return ub(wb(b || "", a))
        }
        f.Le = wb;
        function Z(b, c) {
            var a = "";
            m(c, function (c) {
                a && (a += b);
                a += c
            });
            return a
        }
        function H(a, c, b) {
            w(a, Z(" ", C(X(N(w(a)), N(c)), N(b))))
        }
        f.zb = function (a) {
            return a.parentNode
        };
        f.J = function (a) {
            f.V(a, "none")
        };
        f.B = function (a, b) {
            f.V(a, b ? "none" : "")
        };
        f.Qc = function (b, a) {
            b.removeAttribute(a)
        };
        f.Se = function () {
            return q() && l < 10
        };
        f.Te = function (d, c) {
            if (c)
                d.style.clip = "rect(" + b.round(c.$Top) + "px " + b.round(c.$Right) + "px " + b.round(c.$Bottom) + "px " + b.round(c.$Left) + "px)";
            else {
                var g = d.style.cssText, f = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)], e = I(g, f, "");
                a.Gb(d, e)
            }
        };
        f.K = function () {
            return+new Date
        };
        f.E = function (b, a) {
            b.appendChild(a)
        };
        f.Nb = function (b, a, c) {
            (c || a.parentNode).insertBefore(b, a)
        };
        f.Db = function (a, b) {
            (b || a.parentNode).removeChild(a)
        };
        f.Me = function (a, b) {
            m(a, function (a) {
                f.Db(a, b)
            })
        };
        f.hc = function (a) {
            f.Me(f.P(a, c), a)
        };
        f.Ne = function (b, a) {
            return parseInt(b, a || 10)
        };
        var n = parseFloat;
        f.tc = n;
        f.nf = function (b, a) {
            var c = e.body;
            while (a && b !== a && c !== a)
                try {
                    a = a.parentNode
                } catch (d) {
                    return g
                }
            return b === a
        };
        function V(d, c, b) {
            var a = d.cloneNode(!c);
            !b && f.Qc(a, "id");
            return a
        }
        f.U = V;
        f.rb = function (e, g) {
            var a = new Image;
            function b(e, c) {
                f.M(a, "load", b);
                f.M(a, "abort", d);
                f.M(a, "error", d);
                g && g(a, c)
            }
            function d(a) {
                b(a, c)
            }
            if (nb() && l < 11.6 || !e)
                b(!e);
            else {
                f.c(a, "load", b);
                f.c(a, "abort", d);
                f.c(a, "error", d);
                a.src = e
            }
        };
        f.cf = function (d, a, e) {
            var c = d.length + 1;
            function b(b) {
                c--;
                if (a && b && b.src == a.src)
                    a = b;
                !c && e && e(a)
            }
            m(d, function (a) {
                f.rb(a.src, b)
            });
            b()
        };
        f.Dc = function (b, g, i, h) {
            if (h)
                b = V(b);
            var c = Q(b, g);
            if (!c.length)
                c = a.jf(b, g);
            for (var f = c.length - 1; f > -1; f--) {
                var d = c[f], e = V(i);
                w(e, w(d));
                a.Gb(e, d.style.cssText);
                a.Nb(e, d);
                a.Db(d)
            }
            return b
        };
        function Db(c) {
            var q = this, o = "", r = ["av", "pv", "ds", "dn"], d = [], p, k = 0, h = 0, g = 0;
            function i() {
                H(c, p, d[g || k || h & 2 || h])
            }
            function b() {
                k = 0;
                i();
                f.M(e, "mouseup", b);
                f.M(e, "touchend", b);
                f.M(e, "touchcancel", b)
            }
            function n(a) {
                if (g)
                    f.Ib(a);
                else {
                    k = 4;
                    i();
                    f.c(e, "mouseup", b);
                    f.c(e, "touchend", b);
                    f.c(e, "touchcancel", b)
                }
            }
            q.Ec = function (a) {
                if (a != j) {
                    h = a & 2 || a & 1;
                    i()
                } else
                    return h
            };
            q.$Enable = function (a) {
                if (a == j)
                    return!g;
                g = a ? 0 : 3;
                i()
            };
            c = f.Z(c);
            var l = a.Le(w(c));
            if (l)
                o = l.shift();
            m(r, function (a) {
                d.push(o + a)
            });
            p = Z(" ", d);
            d.unshift("");
            f.c(c, "mousedown", n);
            f.c(c, "touchstart", n)
        }
        f.Mb = function (a) {
            return new Db(a)
        };
        f.sb = E;
        f.bb = o("overflow");
        f.z = o("top", 2);
        f.C = o("left", 2);
        f.k = o("width", 2);
        f.l = o("height", 2);
        f.Lc = o("marginLeft", 2);
        f.rd = o("marginTop", 2);
        f.D = o("position");
        f.V = o("display");
        f.G = o("zIndex", 1);
        f.Ab = function (b, a, c) {
            if (a != j)
                Bb(b, a, c);
            else
                return Ab(b)
        };
        f.Gb = function (a, b) {
            if (b != j)
                a.style.cssText = b;
            else
                return a.style.cssText
        };
        var R = {$Opacity: f.Ab, $Top: f.z, $Left: f.C, hb: f.k, gb: f.l, tb: f.D, yg: f.V, $ZIndex: f.G}, u;
        function J() {
            if (!u)
                u = C({zg: f.rd, Ag: f.Lc, $Clip: f.Te, bc: f.re}, R);
            return u
        }
        function pb() {
            J();
            u.bc = u.bc;
            return u
        }
        f.Qd = J;
        f.Od = pb;
        f.zd = function (c, b) {
            J();
            var a = {};
            m(b, function (d, b) {
                if (R[b])
                    a[b] = R[b](c)
            });
            return a
        };
        f.H = function (c, b) {
            var a = J();
            m(b, function (d, b) {
                a[b] && a[b](c, d)
            })
        };
        f.Nd = function (b, a) {
            pb();
            f.H(b, a)
        };
        var F = new function () {
            var a = this;
            function b(d, g) {
                for (var j = d[0].length, i = d.length, h = g[0].length, f = [], c = 0; c < i; c++)
                    for (var k = f[c] = [], b = 0; b < h; b++) {
                        for (var e = 0, a = 0; a < j; a++)
                            e += d[c][a] * g[a][b];
                        k[b] = e
                    }
                return f
            }
            a.Lb = function (d, c) {
                var a = b(d, [[c.x], [c.y]]);
                return y(a[0][0], a[1][0])
            }
        };
        f.pe = function (d, a, c) {
            var e = b.cos(d), f = b.sin(d);
            return[[e * a, -f * c], [f * a, e * c]]
        };
        f.se = function (d, c, a) {
            var e = F.Lb(d, y(-c / 2, -a / 2)), f = F.Lb(d, y(c / 2, -a / 2)), g = F.Lb(d, y(c / 2, a / 2)), h = F.Lb(d, y(-c / 2, a / 2));
            return y(b.min(e.x, f.x, g.x, h.x) + c / 2, b.min(e.y, f.y, g.y, h.y) + a / 2)
        };
        f.vd = function (l, g, t, r, u, w, j) {
            var c = g;
            if (l) {
                c = {};
                for (var f in g) {
                    var x = w[f] || 1, s = u[f] || [0, 1], e = (t - s[0]) / s[1];
                    e = b.min(b.max(e, 0), 1);
                    e = e * x;
                    var p = b.floor(e);
                    if (e != p)
                        e -= p;
                    var v = r[f] || r.wb || d.$EaseSwing, q = v(e), h, y = l[f];
                    g[f];
                    var m = g[f];
                    if (a.Hc(m))
                        h = y + m * q;
                    else {
                        h = a.n({xb: {}}, l[f]);
                        a.e(m.xb, function (c, b) {
                            var a = c * q;
                            h.xb[b] = a;
                            h[b] += a
                        })
                    }
                    c[f] = h
                }
                if (g.$Zoom || g.$Rotate)
                    c.bc = {$Rotate: c.$Rotate || 0, $Scale: c.$Zoom, $OriginalWidth: j.$OriginalWidth, $OriginalHeight: j.$OriginalHeight}
            }
            if (g.$Clip && j.$Move) {
                var k = c.$Clip.xb, o = (k.$Top || 0) + (k.$Bottom || 0), n = (k.$Left || 0) + (k.$Right || 0);
                c.$Left = (c.$Left || 0) + n;
                c.$Top = (c.$Top || 0) + o;
                c.$Clip.$Left -= n;
                c.$Clip.$Right -= n;
                c.$Clip.$Top -= o;
                c.$Clip.$Bottom -= o
            }
            if (c.$Clip && a.Se() && !c.$Clip.$Top && !c.$Clip.$Left && c.$Clip.$Right == j.$OriginalWidth && c.$Clip.$Bottom == j.$OriginalHeight)
                c.$Clip = i;
            return c
        }
    };
    function l() {
        var b = this, d = [];
        function i(a, b) {
            d.push({lc: a, ac: b})
        }
        function g(b, c) {
            a.e(d, function (a, e) {
                a.lc == b && a.ac === c && d.splice(e, 1)
            })
        }
        b.$On = b.addEventListener = i;
        b.$Off = b.removeEventListener = g;
        b.j = function (b) {
            var c = [].slice.call(arguments, 1);
            a.e(d, function (a) {
                a.lc == b && a.ac.apply(h, c)
            })
        }
    }
    function k(o, z, k, R, P, K) {
        o = o || 0;
        var e = this, s, p, q, x, B = 0, I, J, H, D, A = 0, l = 0, n = 0, E, m = o, f, j, r, y = [], C;
        function M(a) {
            f += a;
            j += a;
            m += a;
            l += a;
            n += a;
            A = a
        }
        function Q(a, b) {
            var c = a - f + o * b;
            M(c);
            return j
        }
        function w(o, i) {
            var d = o;
            if (r && (d >= j || d <= f))
                d = ((d - f) % r + r) % r + f;
            if (!E || x || i || l != d) {
                var g = b.min(d, j);
                g = b.max(g, f);
                if (!E || x || i || g != n) {
                    if (K) {
                        var h = (g - m) / (z || 1);
                        if (k.$Reverse)
                            h = 1 - h;
                        var p = a.vd(P, K, h, I, H, J, k);
                        a.e(p, function (b, a) {
                            C[a] && C[a](R, b)
                        })
                    }
                    e.ec(n - m, g - m);
                    n = g;
                    a.e(y, function (b, c) {
                        var a = o < l ? y[y.length - c - 1] : b;
                        a.v(n - A, i)
                    });
                    var s = l, q = n;
                    l = d;
                    E = c;
                    e.Fb(s, q)
                }
            }
        }
        function F(a, c, d) {
            c && a.Hb(j, 1);
            if (!d) {
                f = b.min(f, a.Bd() + A);
                j = b.max(j, a.ib() + A)
            }
            y.push(a)
        }
        var t = h.requestAnimationFrame || h.webkitRequestAnimationFrame || h.mozRequestAnimationFrame || h.msRequestAnimationFrame;
        if (a.ie() && a.cd() < 7)
            t = i;
        t = t || function (b) {
            a.$Delay(b, k.$Interval)
        };
        function L() {
            if (s) {
                var d = a.K(), e = b.min(d - B, k.wd), c = l + e * q;
                B = d;
                if (c * q >= p * q)
                    c = p;
                w(c);
                if (!x && c * q >= p * q)
                    N(D);
                else
                    t(L)
            }
        }
        function v(d, g, h) {
            if (!s) {
                s = c;
                x = h;
                D = g;
                d = b.max(d, f);
                d = b.min(d, j);
                p = d;
                q = p < l ? -1 : 1;
                e.xd();
                B = a.K();
                t(L)
            }
        }
        function N(a) {
            if (s) {
                x = s = D = g;
                e.ed();
                a && a()
            }
        }
        e.$Play = function (a, b, c) {
            v(a ? l + a : j, b, c)
        };
        e.jd = v;
        e.fb = N;
        e.Td = function (a) {
            v(a)
        };
        e.R = function () {
            return l
        };
        e.ld = function () {
            return p
        };
        e.qb = function () {
            return n
        };
        e.v = w;
        e.$Move = function (a) {
            w(l + a)
        };
        e.$IsPlaying = function () {
            return s
        };
        e.Kd = function (a) {
            r = a
        };
        e.Hb = Q;
        e.$Shift = M;
        e.W = function (a) {
            F(a, 0)
        };
        e.kc = function (a) {
            F(a, 1)
        };
        e.Bd = function () {
            return f
        };
        e.ib = function () {
            return j
        };
        e.Fb = e.xd = e.ed = e.ec = a.jc;
        e.ic = a.K();
        k = a.n({$Interval: 16, wd: 50}, k);
        r = k.nd;
        C = a.n({}, a.Qd(), k.Yb);
        f = m = o;
        j = o + z;
        J = k.$Round || {};
        H = k.$During || {};
        I = a.n({wb: a.Ic(k.$Easing) && k.$Easing || d.$EaseSwing}, k.$Easing)
    }
    var n = h.$JssorSlideshowFormations$ = new function () {
        var h = this, d = 0, a = 1, f = 2, e = 3, s = 1, r = 2, t = 4, q = 8, w = 256, x = 512, v = 1024, u = 2048, j = u + s, i = u + r, o = x + s, m = x + r, n = w + t, k = w + q, l = v + t, p = v + q;
        function y(a) {
            return(a & r) == r
        }
        function z(a) {
            return(a & t) == t
        }
        function g(b, a, c) {
            c.push(a);
            b[a] = b[a] || [];
            b[a].push(c)
        }
        h.$FormationStraight = function (f) {
            for (var d = f.$Cols, e = f.$Rows, s = f.$Assembly, t = f.Xb, r = [], a = 0, b = 0, p = d - 1, q = e - 1, h = t - 1, c, b = 0; b < e; b++)
                for (a = 0; a < d; a++) {
                    switch (s) {
                        case j:
                            c = h - (a * e + (q - b));
                            break;
                        case l:
                            c = h - (b * d + (p - a));
                            break;
                        case o:
                            c = h - (a * e + b);
                        case n:
                            c = h - (b * d + a);
                            break;
                        case i:
                            c = a * e + b;
                            break;
                        case k:
                            c = b * d + (p - a);
                            break;
                        case m:
                            c = a * e + (q - b);
                            break;
                        default:
                            c = b * d + a
                    }
                    g(r, c, [b, a])
                }
            return r
        };
        h.$FormationSwirl = function (q) {
            var x = q.$Cols, y = q.$Rows, B = q.$Assembly, w = q.Xb, A = [], z = [], u = 0, b = 0, h = 0, r = x - 1, s = y - 1, t, p, v = 0;
            switch (B) {
                case j:
                    b = r;
                    h = 0;
                    p = [f, a, e, d];
                    break;
                case l:
                    b = 0;
                    h = s;
                    p = [d, e, a, f];
                    break;
                case o:
                    b = r;
                    h = s;
                    p = [e, a, f, d];
                    break;
                case n:
                    b = r;
                    h = s;
                    p = [a, e, d, f];
                    break;
                case i:
                    b = 0;
                    h = 0;
                    p = [f, d, e, a];
                    break;
                case k:
                    b = r;
                    h = 0;
                    p = [a, f, d, e];
                    break;
                case m:
                    b = 0;
                    h = s;
                    p = [e, d, f, a];
                    break;
                default:
                    b = 0;
                    h = 0;
                    p = [d, f, a, e]
            }
            u = 0;
            while (u < w) {
                t = h + "," + b;
                if (b >= 0 && b < x && h >= 0 && h < y && !z[t]) {
                    z[t] = c;
                    g(A, u++, [h, b])
                } else
                    switch (p[v++ % p.length]) {
                        case d:
                            b--;
                            break;
                        case f:
                            h--;
                            break;
                        case a:
                            b++;
                            break;
                        case e:
                            h++
                    }
                switch (p[v % p.length]) {
                    case d:
                        b++;
                        break;
                    case f:
                        h++;
                        break;
                    case a:
                        b--;
                        break;
                    case e:
                        h--
                }
            }
            return A
        };
        h.$FormationZigZag = function (p) {
            var w = p.$Cols, x = p.$Rows, z = p.$Assembly, v = p.Xb, t = [], u = 0, b = 0, c = 0, q = w - 1, r = x - 1, y, h, s = 0;
            switch (z) {
                case j:
                    b = q;
                    c = 0;
                    h = [f, a, e, a];
                    break;
                case l:
                    b = 0;
                    c = r;
                    h = [d, e, a, e];
                    break;
                case o:
                    b = q;
                    c = r;
                    h = [e, a, f, a];
                    break;
                case n:
                    b = q;
                    c = r;
                    h = [a, e, d, e];
                    break;
                case i:
                    b = 0;
                    c = 0;
                    h = [f, d, e, d];
                    break;
                case k:
                    b = q;
                    c = 0;
                    h = [a, f, d, f];
                    break;
                case m:
                    b = 0;
                    c = r;
                    h = [e, d, f, d];
                    break;
                default:
                    b = 0;
                    c = 0;
                    h = [d, f, a, f]
            }
            u = 0;
            while (u < v) {
                y = c + "," + b;
                if (b >= 0 && b < w && c >= 0 && c < x && typeof t[y] == "undefined") {
                    g(t, u++, [c, b]);
                    switch (h[s % h.length]) {
                        case d:
                            b++;
                            break;
                        case f:
                            c++;
                            break;
                        case a:
                            b--;
                            break;
                        case e:
                            c--
                    }
                } else {
                    switch (h[s++ % h.length]) {
                        case d:
                            b--;
                            break;
                        case f:
                            c--;
                            break;
                        case a:
                            b++;
                            break;
                        case e:
                            c++
                    }
                    switch (h[s++ % h.length]) {
                        case d:
                            b++;
                            break;
                        case f:
                            c++;
                            break;
                        case a:
                            b--;
                            break;
                        case e:
                            c--
                    }
                }
            }
            return t
        };
        h.$FormationStraightStairs = function (q) {
            var u = q.$Cols, v = q.$Rows, e = q.$Assembly, t = q.Xb, r = [], s = 0, c = 0, d = 0, f = u - 1, h = v - 1, x = t - 1;
            switch (e) {
                case j:
                case m:
                case o:
                case i:
                    var a = 0, b = 0;
                    break;
                case k:
                case l:
                case n:
                case p:
                    var a = f, b = 0;
                    break;
                default:
                    e = p;
                    var a = f, b = 0
            }
            c = a;
            d = b;
            while (s < t) {
                if (z(e) || y(e))
                    g(r, x - s++, [d, c]);
                else
                    g(r, s++, [d, c]);
                switch (e) {
                    case j:
                    case m:
                        c--;
                        d++;
                        break;
                    case o:
                    case i:
                        c++;
                        d--;
                        break;
                    case k:
                    case l:
                        c--;
                        d--;
                        break;
                    case p:
                    case n:
                    default:
                        c++;
                        d++
                }
                if (c < 0 || d < 0 || c > f || d > h) {
                    switch (e) {
                        case j:
                        case m:
                            a++;
                            break;
                        case k:
                        case l:
                        case o:
                        case i:
                            b++;
                            break;
                        case p:
                        case n:
                        default:
                            a--
                    }
                    if (a < 0 || b < 0 || a > f || b > h) {
                        switch (e) {
                            case j:
                            case m:
                                a = f;
                                b++;
                                break;
                            case o:
                            case i:
                                b = h;
                                a++;
                                break;
                            case k:
                            case l:
                                b = h;
                                a--;
                                break;
                            case p:
                            case n:
                            default:
                                a = 0;
                                b++
                        }
                        if (b > h)
                            b = h;
                        else if (b < 0)
                            b = 0;
                        else if (a > f)
                            a = f;
                        else if (a < 0)
                            a = 0
                    }
                    d = b;
                    c = a
                }
            }
            return r
        };
        h.$FormationSquare = function (i) {
            var a = i.$Cols || 1, c = i.$Rows || 1, j = [], d, e, f, h, k;
            f = a < c ? (c - a) / 2 : 0;
            h = a > c ? (a - c) / 2 : 0;
            k = b.round(b.max(a / 2, c / 2)) + 1;
            for (d = 0; d < a; d++)
                for (e = 0; e < c; e++)
                    g(j, k - b.min(d + 1 + f, e + 1 + h, a - d + f, c - e + h), [e, d]);
            return j
        };
        h.$FormationRectangle = function (f) {
            var d = f.$Cols || 1, e = f.$Rows || 1, h = [], a, c, i;
            i = b.round(b.min(d / 2, e / 2)) + 1;
            for (a = 0; a < d; a++)
                for (c = 0; c < e; c++)
                    g(h, i - b.min(a + 1, c + 1, d - a, e - c), [c, a]);
            return h
        };
        h.$FormationRandom = function (d) {
            for (var e = [], a, c = 0; c < d.$Rows; c++)
                for (a = 0; a < d.$Cols; a++)
                    g(e, b.ceil(1e5 * b.random()) % 13, [c, a]);
            return e
        };
        h.$FormationCircle = function (d) {
            for (var e = d.$Cols || 1, f = d.$Rows || 1, h = [], a, i = e / 2 - .5, j = f / 2 - .5, c = 0; c < e; c++)
                for (a = 0; a < f; a++)
                    g(h, b.round(b.sqrt(b.pow(c - i, 2) + b.pow(a - j, 2))), [a, c]);
            return h
        };
        h.$FormationCross = function (d) {
            for (var e = d.$Cols || 1, f = d.$Rows || 1, h = [], a, i = e / 2 - .5, j = f / 2 - .5, c = 0; c < e; c++)
                for (a = 0; a < f; a++)
                    g(h, b.round(b.min(b.abs(c - i), b.abs(a - j))), [a, c]);
            return h
        };
        h.$FormationRectangleCross = function (f) {
            for (var h = f.$Cols || 1, i = f.$Rows || 1, j = [], a, d = h / 2 - .5, e = i / 2 - .5, k = b.max(d, e) + 1, c = 0; c < h; c++)
                for (a = 0; a < i; a++)
                    g(j, b.round(k - b.max(d - b.abs(c - d), e - b.abs(a - e))) - 1, [a, c]);
            return j
        }
    };
    h.$JssorSlideshowRunner$ = function (o, s, q, t, y) {
        var f = this, u, h, e, x = 0, w = t.$TransitionsOrder, r, j = 8;
        function m(h, f) {
            var e = {$Interval: f, $Duration: 1, $Delay: 0, $Cols: 1, $Rows: 1, $Opacity: 0, $Zoom: 0, $Clip: 0, $Move: g, $SlideOut: g, $Reverse: g, $Formation: n.$FormationRandom, $Assembly: 1032, $ChessMode: {$Column: 0, $Row: 0}, $Easing: d.$EaseSwing, $Round: {}, Rb: [], $During: {}};
            a.n(e, h);
            e.Xb = e.$Cols * e.$Rows;
            if (a.Ic(e.$Easing))
                e.$Easing = {wb: e.$Easing};
            e.Fd = b.ceil(e.$Duration / e.$Interval);
            e.yd = function (b, a) {
                b /= e.$Cols;
                a /= e.$Rows;
                var f = b + "x" + a;
                if (!e.Rb[f]) {
                    e.Rb[f] = {hb: b, gb: a};
                    for (var c = 0; c < e.$Cols; c++)
                        for (var d = 0; d < e.$Rows; d++)
                            e.Rb[f][d + "," + c] = {$Top: d * a, $Right: c * b + b, $Bottom: d * a + a, $Left: c * b}
                }
                return e.Rb[f]
            };
            if (e.$Brother) {
                e.$Brother = m(e.$Brother, f);
                e.$SlideOut = c
            }
            return e
        }
        function p(A, i, d, v, n, l) {
            var y = this, t, u = {}, j = {}, m = [], f, e, r, p = d.$ChessMode.$Column || 0, q = d.$ChessMode.$Row || 0, h = d.yd(n, l), o = B(d), C = o.length - 1, s = d.$Duration + d.$Delay * C, w = v + s, k = d.$SlideOut, x;
            w += 50;
            function B(a) {
                var b = a.$Formation(a);
                return a.$Reverse ? b.reverse() : b
            }
            y.Wc = w;
            y.Tb = function (c) {
                c -= v;
                var e = c < s;
                if (e || x) {
                    x = e;
                    if (!k)
                        c = s - c;
                    var f = b.ceil(c / d.$Interval);
                    a.e(j, function (c, e) {
                        var d = b.max(f, c.Wd);
                        d = b.min(d, c.length - 1);
                        if (c.Pc != d) {
                            if (!c.Pc && !k)
                                a.B(m[e]);
                            else
                                d == c.ae && k && a.J(m[e]);
                            c.Pc = d;
                            a.Nd(m[e], c[d])
                        }
                    })
                }
            };
            i = a.U(i);
            if (a.T()) {
                var D = !i["no-image"], z = a.mf(i);
                a.e(z, function (b) {
                    (D || b["jssor-slider"]) && a.Ab(b, a.Ab(b), c)
                })
            }
            a.e(o, function (i, m) {
                a.e(i, function (G) {
                    var K = G[0], J = G[1], v = K + "," + J, o = g, s = g, x = g;
                    if (p && J % 2) {
                        if (p & 3)
                            o = !o;
                        if (p & 12)
                            s = !s;
                        if (p & 16)
                            x = !x
                    }
                    if (q && K % 2) {
                        if (q & 3)
                            o = !o;
                        if (q & 12)
                            s = !s;
                        if (q & 16)
                            x = !x
                    }
                    d.$Top = d.$Top || d.$Clip & 4;
                    d.$Bottom = d.$Bottom || d.$Clip & 8;
                    d.$Left = d.$Left || d.$Clip & 1;
                    d.$Right = d.$Right || d.$Clip & 2;
                    var C = s ? d.$Bottom : d.$Top, z = s ? d.$Top : d.$Bottom, B = o ? d.$Right : d.$Left, A = o ? d.$Left : d.$Right;
                    d.$Clip = C || z || B || A;
                    r = {};
                    e = {$Top: 0, $Left: 0, $Opacity: 1, hb: n, gb: l};
                    f = a.n({}, e);
                    t = a.n({}, h[v]);
                    if (d.$Opacity)
                        e.$Opacity = 2 - d.$Opacity;
                    if (d.$ZIndex) {
                        e.$ZIndex = d.$ZIndex;
                        f.$ZIndex = 0
                    }
                    var I = d.$Cols * d.$Rows > 1 || d.$Clip;
                    if (d.$Zoom || d.$Rotate) {
                        var H = c;
                        if (a.T())
                            if (d.$Cols * d.$Rows > 1)
                                H = g;
                            else
                                I = g;
                        if (H) {
                            e.$Zoom = d.$Zoom ? d.$Zoom - 1 : 1;
                            f.$Zoom = 1;
                            if (a.T() || a.vc())
                                e.$Zoom = b.min(e.$Zoom, 2);
                            var N = d.$Rotate;
                            e.$Rotate = N * 360 * (x ? -1 : 1);
                            f.$Rotate = 0
                        }
                    }
                    if (I) {
                        if (d.$Clip) {
                            var w = d.$ScaleClip || 1, i = t.xb = {};
                            if (C && z) {
                                i.$Top = h.gb / 2 * w;
                                i.$Bottom = -i.$Top
                            } else if (C)
                                i.$Bottom = -h.gb * w;
                            else if (z)
                                i.$Top = h.gb * w;
                            if (B && A) {
                                i.$Left = h.hb / 2 * w;
                                i.$Right = -i.$Left
                            } else if (B)
                                i.$Right = -h.hb * w;
                            else if (A)
                                i.$Left = h.hb * w
                        }
                        r.$Clip = t;
                        f.$Clip = h[v]
                    }
                    var L = o ? 1 : -1, M = s ? 1 : -1;
                    if (d.x)
                        e.$Left += n * d.x * L;
                    if (d.y)
                        e.$Top += l * d.y * M;
                    a.e(e, function (b, c) {
                        if (a.Hc(b))
                            if (b != f[c])
                                r[c] = b - f[c]
                    });
                    u[v] = k ? f : e;
                    var D = d.Fd, y = b.round(m * d.$Delay / d.$Interval);
                    j[v] = new Array(y);
                    j[v].Wd = y;
                    j[v].ae = y + D - 1;
                    for (var F = 0; F <= D; F++) {
                        var E = a.vd(f, r, F / D, d.$Easing, d.$During, d.$Round, {$Move: d.$Move, $OriginalWidth: n, $OriginalHeight: l});
                        E.$ZIndex = E.$ZIndex || 1;
                        j[v].push(E)
                    }
                })
            });
            o.reverse();
            a.e(o, function (b) {
                a.e(b, function (c) {
                    var f = c[0], e = c[1], d = f + "," + e, b = i;
                    if (e || f)
                        b = a.U(i);
                    a.H(b, u[d]);
                    a.bb(b, "hidden");
                    a.D(b, "absolute");
                    A.Yd(b);
                    m[d] = b;
                    a.B(b, !k)
                })
            })
        }
        function v() {
            var a = this, b = 0;
            k.call(a, 0, u);
            a.Fb = function (c, a) {
                if (a - b > j) {
                    b = a;
                    e && e.Tb(a);
                    h && h.Tb(a)
                }
            };
            a.jb = r
        }
        f.Hd = function () {
            var a = 0, c = t.$Transitions, d = c.length;
            if (w)
                a = x++ % d;
            else
                a = b.floor(b.random() * d);
            c[a] && (c[a].db = a);
            return c[a]
        };
        f.Rd = function (w, x, i, k, a) {
            r = a;
            a = m(a, j);
            var g = k.bd, d = i.bd;
            g["no-image"] = !k.Qb;
            d["no-image"] = !i.Qb;
            var l = g, n = d, v = a, c = a.$Brother || m({}, j);
            if (!a.$SlideOut) {
                l = d;
                n = g
            }
            var t = c.$Shift || 0;
            h = new p(o, n, c, b.max(t - c.$Interval, 0), s, q);
            e = new p(o, l, v, b.max(c.$Interval - t, 0), s, q);
            h.Tb(0);
            e.Tb(0);
            u = b.max(h.Wc, e.Wc);
            f.db = w
        };
        f.Eb = function () {
            o.Eb();
            h = i;
            e = i
        };
        f.Ud = function () {
            var a = i;
            if (e)
                a = new v;
            return a
        };
        if (a.T() || a.vc() || y && a.uc() < 537)
            j = 16;
        l.call(f);
        k.call(f, -1e7, 1e7)
    };
    var f = h.$JssorSlider$ = function (q, fc) {
        var n = this;
        function Dc() {
            var a = this;
            k.call(a, -1e8, 2e8);
            a.Dd = function () {
                var c = a.qb(), d = b.floor(c), f = t(d), e = c - b.floor(c);
                return{db: f, Vd: d, tb: e}
            };
            a.Fb = function (d, a) {
                var e = b.floor(a);
                if (e != a && a > d)
                    e++;
                Tb(e, c);
                n.j(f.$EVT_POSITION_CHANGE, t(a), t(d), a, d)
            }
        }
        function Cc() {
            var b = this;
            k.call(b, 0, 0, {nd: s});
            a.e(C, function (a) {
                D & 1 && a.Kd(s);
                b.kc(a);
                a.$Shift(hb / bc)
            })
        }
        function Bc() {
            var a = this, b = Sb.$Elmt;
            k.call(a, -1, 2, {$Easing: d.$EaseLinear, Yb: {tb: Zb}, nd: s}, b, {tb: 1}, {tb: -2});
            a.Jb = b
        }
        function qc(m, l) {
            var a = this, d, e, h, j, b;
            k.call(a, -1e8, 2e8, {wd: 100});
            a.xd = function () {
                P = c;
                T = i;
                n.j(f.$EVT_SWIPE_START, t(y.R()), y.R())
            };
            a.ed = function () {
                P = g;
                j = g;
                var a = y.Dd();
                n.j(f.$EVT_SWIPE_END, t(y.R()), y.R());
                !a.tb && Fc(a.Vd, r)
            };
            a.Fb = function (g, f) {
                var a;
                if (j)
                    a = b;
                else {
                    a = e;
                    if (h) {
                        var c = f / h;
                        a = p.$SlideEasing(c) * (e - d) + d
                    }
                }
                y.v(a)
            };
            a.Kb = function (b, f, c, g) {
                d = b;
                e = f;
                h = c;
                y.v(b);
                a.v(0);
                a.jd(c, g)
            };
            a.Id = function (d) {
                j = c;
                b = d;
                a.$Play(d, i, c)
            };
            a.Ld = function (a) {
                b = a
            };
            y = new Dc;
            y.W(m);
            y.W(l)
        }
        function rc() {
            var c = this, b = Xb();
            a.G(b, 0);
            a.sb(b, "pointerEvents", "none");
            c.$Elmt = b;
            c.Yd = function (c) {
                a.E(b, c);
                a.B(b)
            };
            c.Eb = function () {
                a.J(b);
                a.hc(b)
            }
        }
        function Ac(o, h) {
            var d = this, q, x, K, y, j, B = [], G, u, V, H, P, F, e, w, m;
            k.call(d, -v, v + 1, {});
            function E(a) {
                x && x.Pb();
                q && q.Pb();
                U(o, a);
                F = c;
                q = new L.$Class(o, L, 1);
                x = new L.$Class(o, L);
                x.v(0);
                q.v(0)
            }
            function X() {
                q.ic < L.ic && E()
            }
            function N(o, r, m) {
                if (!H) {
                    H = c;
                    if (j && m) {
                        var e = m.width, b = m.height, l = e, k = b;
                        if (e && b && p.$FillMode) {
                            if (p.$FillMode & 3 && (!(p.$FillMode & 4) || e > J || b > I)) {
                                var i = g, q = J / I * b / e;
                                if (p.$FillMode & 1)
                                    i = q > 1;
                                else if (p.$FillMode & 2)
                                    i = q < 1;
                                l = i ? e * I / b : J;
                                k = i ? I : b * J / e
                            }
                            a.k(j, l);
                            a.l(j, k);
                            a.z(j, (I - k) / 2);
                            a.C(j, (J - l) / 2)
                        }
                        a.D(j, "absolute");
                        n.j(f.$EVT_LOAD_END, h)
                    }
                }
                a.J(r);
                o && o(d)
            }
            function W(b, c, e, f) {
                if (f == T && r == h && Q)
                    if (!Ec) {
                        var a = t(b);
                        A.Rd(a, h, c, d, e);
                        c.Ye();
                        Z.Hb(a, 1);
                        Z.v(a);
                        z.Kb(b, b, 0)
                    }
            }
            function bb(b) {
                if (b == T && r == h) {
                    if (!e) {
                        var a = i;
                        if (A)
                            if (A.db == h)
                                a = A.Ud();
                            else
                                A.Eb();
                        X();
                        e = new xc(o, h, a, d.Ve(), d.Ke());
                        e.Mc(m)
                    }
                    !e.$IsPlaying() && e.mc()
                }
            }
            function S(f, c, g) {
                if (f == h) {
                    if (f != c)
                        C[c] && C[c].Ue();
                    else
                        !g && e && e.Xe();
                    m && m.$Enable();
                    var j = T = a.K();
                    d.rb(a.L(i, bb, j))
                } else {
                    var l = b.abs(h - f), k = v + p.$LazyLoading - 1;
                    (!P || l <= k) && d.rb()
                }
            }
            function cb() {
                if (r == h && e) {
                    e.fb();
                    m && m.$Quit();
                    m && m.$Disable();
                    e.Kc()
                }
            }
            function fb() {
                r == h && e && e.fb()
            }
            function Y(a) {
                !M && n.j(f.$EVT_CLICK, h, a)
            }
            function O() {
                m = w.pInstance;
                e && e.Mc(m)
            }
            d.rb = function (d, b) {
                b = b || y;
                if (B.length && !H) {
                    a.B(b);
                    if (!V) {
                        V = c;
                        n.j(f.$EVT_LOAD_START, h);
                        a.e(B, function (b) {
                            if (!a.I(b, "src")) {
                                b.src = a.u(b, "src2");
                                a.V(b, b["display-origin"])
                            }
                        })
                    }
                    a.cf(B, j, a.L(i, N, d, b))
                } else
                    N(d, b)
            };
            d.Ze = function () {
                if (A) {
                    var b = A.Hd(s);
                    if (b) {
                        var e = T = a.K(), c = h + Wb, d = C[t(c)];
                        return d.rb(a.L(i, W, c, d, b, e), y)
                    }
                }
                ab(r + p.$AutoPlaySteps * Wb)
            };
            d.nc = function () {
                S(h, h, c)
            };
            d.Ue = function () {
                m && m.$Quit();
                m && m.$Disable();
                d.pd();
                e && e.df();
                e = i;
                E()
            };
            d.Ye = function () {
                a.J(o)
            };
            d.pd = function () {
                a.B(o)
            };
            d.ef = function () {
                m && m.$Enable()
            };
            function U(b, e, d) {
                if (a.I(b, "jssor-slider"))
                    return;
                d = d || 0;
                if (!F) {
                    if (b.tagName == "IMG") {
                        B.push(b);
                        if (!a.I(b, "src")) {
                            P = c;
                            b["display-origin"] = a.V(b);
                            a.J(b)
                        }
                    }
                    a.T() && a.G(b, (a.G(b) || 0) + 1);
                    if (p.$HWA && a.uc())
                        (a.uc() < 534 || !eb && !a.de()) && a.oe(b)
                }
                var f = a.P(b);
                a.e(f, function (f) {
                    var i = f.tagName, k = a.u(f, "u");
                    if (k == "player" && !w) {
                        w = f;
                        if (w.pInstance)
                            O();
                        else
                            a.c(w, "dataavailable", O)
                    }
                    if (k == "caption") {
                        if (!a.ud() && !e) {
                            var h = a.U(f, g, c);
                            a.Nb(h, f, b);
                            a.Db(f, b);
                            f = h;
                            e = c
                        }
                    } else if (!F && !d && !j) {
                        if (i == "A") {
                            if (a.u(f, "u") == "image")
                                j = a.of(f, "IMG");
                            else
                                j = a.A(f, "image", c);
                            if (j) {
                                G = f;
                                a.H(G, R);
                                u = a.U(G, c);
                                a.V(u, "block");
                                a.H(u, R);
                                a.Ab(u, 0);
                                a.sb(u, "backgroundColor", "#000")
                            }
                        } else if (i == "IMG" && a.u(f, "u") == "image")
                            j = f;
                        if (j) {
                            j.border = 0;
                            a.H(j, R)
                        }
                    }
                    U(f, e, d + 1)
                })
            }
            d.ec = function (c, b) {
                var a = v - b;
                Zb(K, a)
            };
            d.Ve = function () {
                return q
            };
            d.Ke = function () {
                return x
            };
            d.db = h;
            l.call(d);
            var D = a.A(o, "thumb", c);
            if (D) {
                d.bf = a.U(D);
                a.Qc(D, "id");
                a.J(D)
            }
            a.B(o);
            y = a.U(db);
            a.G(y, 1e3);
            a.c(o, "click", Y);
            E(c);
            d.Qb = j;
            d.Yc = u;
            d.bd = o;
            d.Jb = K = o;
            a.E(K, y);
            n.$On(203, S);
            n.$On(28, fb);
            n.$On(24, cb)
        }
        function xc(E, i, p, u, t) {
            var b = this, l = 0, w = 0, m, h, d, e, j, q, v, s, o = C[i];
            k.call(b, 0, 0);
            function x() {
                a.hc(N);
                dc && j && o.Yc && a.E(N, o.Yc);
                a.B(N, !j && o.Qb)
            }
            function y() {
                if (q) {
                    q = g;
                    n.j(f.$EVT_ROLLBACK_END, i, d, l, h, d, e);
                    b.v(h)
                }
                b.mc()
            }
            function z(a) {
                s = a;
                b.fb();
                b.mc()
            }
            b.mc = function () {
                var a = b.qb();
                if (!B && !P && !s && r == i) {
                    if (!a) {
                        if (m && !j) {
                            j = c;
                            b.Kc(c);
                            n.j(f.$EVT_SLIDESHOW_START, i, l, w, m, e)
                        }
                        x()
                    }
                    var g, p = f.$EVT_STATE_CHANGE;
                    if (a != e)
                        if (a == d)
                            g = e;
                        else if (a == h)
                            g = d;
                        else if (!a)
                            g = h;
                        else if (a > d) {
                            q = c;
                            g = d;
                            p = f.$EVT_ROLLBACK_START
                        } else
                            g = b.ld();
                    n.j(p, i, a, l, h, d, e);
                    var k = Q && (!G || H);
                    if (a == e)
                        (d != e && !(G & 12) || k) && o.Ze();
                    else
                        (k || a != d) && b.jd(g, y)
                }
            };
            b.Xe = function () {
                d == e && d == b.qb() && b.v(h)
            };
            b.df = function () {
                A && A.db == i && A.Eb();
                var a = b.qb();
                a < e && n.j(f.$EVT_STATE_CHANGE, i, -a - 1, l, h, d, e)
            };
            b.Kc = function (b) {
                p && a.bb(jb, b && p.jb.$Outside ? "" : "hidden")
            };
            b.ec = function (b, a) {
                if (j && a >= m) {
                    j = g;
                    x();
                    o.pd();
                    A.Eb();
                    n.j(f.$EVT_SLIDESHOW_END, i, l, w, m, e)
                }
                n.j(f.$EVT_PROGRESS_CHANGE, i, a, l, h, d, e)
            };
            b.Mc = function (a) {
                if (a && !v) {
                    v = a;
                    a.$On($JssorPlayer$.Xd, z)
                }
            };
            p && b.kc(p);
            m = b.ib();
            b.ib();
            b.kc(u);
            h = u.ib();
            d = h + (a.tc(a.u(E, "idle")) || pc);
            t.$Shift(d);
            b.W(t);
            e = b.ib()
        }
        function Zb(g, f) {
            var e = w > 0 ? w : ib, c = Bb * f * (e & 1), d = Cb * f * (e >> 1 & 1);
            c = b.round(c);
            d = b.round(d);
            a.C(g, c);
            a.z(g, d)
        }
        function Ob() {
            qb = P;
            Kb = z.ld();
            E = y.R()
        }
        function gc() {
            Ob();
            if (B || !H && G & 12) {
                z.fb();
                n.j(f.ce)
            }
        }
        function ec(e) {
            if (!B && (H || !(G & 12)) && !z.$IsPlaying()) {
                var c = y.R(), a = b.ceil(E);
                if (e && b.abs(F) >= p.$MinDragOffsetToSlide) {
                    a = b.ceil(c);
                    a += gb
                }
                if (!(D & 1))
                    a = b.min(s - v, b.max(a, 0));
                var d = b.abs(a - c);
                d = 1 - b.pow(1 - d, 5);
                if (!M && qb)
                    z.Td(Kb);
                else if (c == a) {
                    ub.ef();
                    ub.nc()
                } else
                    z.Kb(c, a, d * Ub)
            }
        }
        function Ib(b) {
            !a.u(a.rc(b), "nodrag") && a.Ib(b)
        }
        function uc(a) {
            Yb(a, 1)
        }
        function Yb(b, d) {
            b = a.kd(b);
            var k = a.rc(b);
            if (!K && !a.u(k, "nodrag") && vc() && (!d || b.touches.length == 1)) {
                B = c;
                Ab = g;
                T = i;
                a.c(e, d ? "touchmove" : "mousemove", Db);
                a.K();
                M = 0;
                gc();
                if (!qb)
                    w = 0;
                if (d) {
                    var j = b.touches[0];
                    vb = j.clientX;
                    wb = j.clientY
                } else {
                    var h = a.md(b);
                    vb = h.x;
                    wb = h.y
                }
                F = 0;
                cb = 0;
                gb = 0;
                n.j(f.$EVT_DRAG_START, t(E), E, b)
            }
        }
        function Db(e) {
            if (B) {
                e = a.kd(e);
                var f;
                if (e.type != "mousemove") {
                    var l = e.touches[0];
                    f = {x: l.clientX, y: l.clientY}
                } else
                    f = a.md(e);
                if (f) {
                    var j = f.x - vb, k = f.y - wb;
                    if (b.floor(E) != E)
                        w = w || ib & K;
                    if ((j || k) && !w) {
                        if (K == 3)
                            if (b.abs(k) > b.abs(j))
                                w = 2;
                            else
                                w = 1;
                        else
                            w = K;
                        if (lb && w == 1 && b.abs(k) - b.abs(j) > 3)
                            Ab = c
                    }
                    if (w) {
                        var d = k, i = Cb;
                        if (w == 1) {
                            d = j;
                            i = Bb
                        }
                        if (!(D & 1)) {
                            if (d > 0) {
                                var g = i * r, h = d - g;
                                if (h > 0)
                                    d = g + b.sqrt(h) * 5
                            }
                            if (d < 0) {
                                var g = i * (s - v - r), h = -d - g;
                                if (h > 0)
                                    d = -g - b.sqrt(h) * 5
                            }
                        }
                        if (F - cb < -2)
                            gb = 0;
                        else if (F - cb > 2)
                            gb = -1;
                        cb = F;
                        F = d;
                        tb = E - F / i / (Y || 1);
                        if (F && w && !Ab) {
                            a.Ib(e);
                            if (!P)
                                z.Id(tb);
                            else
                                z.Ld(tb)
                        }
                    }
                }
            }
        }
        function ob() {
            sc();
            if (B) {
                B = g;
                a.K();
                a.M(e, "mousemove", Db);
                a.M(e, "touchmove", Db);
                M = F;
                z.fb();
                var b = y.R();
                n.j(f.$EVT_DRAG_END, t(b), b, t(E), E);
                G & 12 && Ob();
                ec(c)
            }
        }
        function kc(c) {
            if (M) {
                a.af(c);
                var b = a.rc(c);
                while (b && u !== b) {
                    b.tagName == "A" && a.Ib(c);
                    try {
                        b = b.parentNode
                    } catch (d) {
                        break
                    }
                }
            }
        }
        function oc(a) {
            C[r];
            r = t(a);
            ub = C[r];
            Tb(a);
            return r
        }
        function Fc(a, b) {
            w = 0;
            oc(a);
            n.j(f.$EVT_PARK, t(a), b)
        }
        function Tb(b, c) {
            yb = b;
            a.e(O, function (a) {
                a.yc(t(b), b, c)
            })
        }
        function vc() {
            var b = f.Zc || 0, a = X;
            if (lb)
                a & 1 && (a &= 1);
            f.Zc |= a;
            return K = a & ~b
        }
        function sc() {
            if (K) {
                f.Zc &= ~X;
                K = 0
            }
        }
        function Xb() {
            var b = a.ab();
            a.H(b, R);
            a.D(b, "absolute");
            return b
        }
        function t(a) {
            return(a % s + s) % s
        }
        function lc(a, c) {
            if (c)
                if (!D) {
                    a = b.min(b.max(a + yb, 0), s - v);
                    c = g
                } else if (D & 2) {
                    a = t(a + yb);
                    c = g
                }
            ab(a, p.$SlideDuration, c)
        }
        function zb() {
            a.e(O, function (a) {
                a.zc(a.Sb.$ChanceToShow <= H)
            })
        }
        function ic() {
            if (!H) {
                H = 1;
                zb();
                if (!B) {
                    G & 12 && ec();
                    G & 3 && C[r].nc()
                }
            }
        }
        function hc() {
            if (H) {
                H = 0;
                zb();
                B || !(G & 12) || gc()
            }
        }
        function jc() {
            R = {hb: J, gb: I, $Top: 0, $Left: 0};
            a.e(U, function (b) {
                a.H(b, R);
                a.D(b, "absolute");
                a.bb(b, "hidden");
                a.J(b)
            });
            a.H(db, R)
        }
        function nb(b, a) {
            ab(b, a, c)
        }
        function ab(f, e, k) {
            if (Qb && (!B || p.$NaviQuitDrag)) {
                P = c;
                B = g;
                z.fb();
                if (e == j)
                    e = Ub;
                var d = Eb.qb(), a = f;
                if (k) {
                    a = d + f;
                    if (f > 0)
                        a = b.ceil(a);
                    else
                        a = b.floor(a)
                }
                if (D & 2)
                    a = t(a);
                if (!(D & 1))
                    a = b.max(0, b.min(a, s - v));
                var i = (a - d) % s;
                a = d + i;
                var h = d == a ? 0 : e * b.abs(i);
                h = b.min(h, e * v * 1.5);
                z.Kb(d, a, h || 1)
            }
        }
        n.$PlayTo = ab;
        n.$GoTo = function (a) {
            ab(a, 1)
        };
        n.$Next = function () {
            nb(1)
        };
        n.$Prev = function () {
            nb(-1)
        };
        n.$Pause = function () {
            Q = g
        };
        n.$Play = function () {
            if (!Q) {
                Q = c;
                C[r] && C[r].nc()
            }
        };
        n.$SetSlideshowTransitions = function (a) {
            p.$SlideshowOptions.$Transitions = a
        };
        n.$SetCaptionTransitions = function (b) {
            L.$CaptionTransitions = b;
            L.ic = a.K()
        };
        n.$SlidesCount = function () {
            return U.length
        };
        n.$CurrentIndex = function () {
            return r
        };
        n.$IsAutoPlaying = function () {
            return Q
        };
        n.$IsDragging = function () {
            return B
        };
        n.$IsSliding = function () {
            return P
        };
        n.$IsMouseOver = function () {
            return!H
        };
        n.$LastDragSucceded = function () {
            return M
        };
        function W() {
            return a.k(x || q)
        }
        function kb() {
            return a.l(x || q)
        }
        n.$OriginalWidth = n.$GetOriginalWidth = W;
        n.$OriginalHeight = n.$GetOriginalHeight = kb;
        function Gb(c, d) {
            if (c == j)
                return a.k(q);
            if (!x) {
                var b = a.ab(e);
                a.Rc(b, a.Rc(q));
                a.Gb(b, a.Gb(q));
                a.V(b, "block");
                a.D(b, "relative");
                a.z(b, 0);
                a.C(b, 0);
                a.bb(b, "visible");
                x = a.ab(e);
                a.D(x, "absolute");
                a.z(x, 0);
                a.C(x, 0);
                a.k(x, a.k(q));
                a.l(x, a.l(q));
                a.me(x, "0 0");
                a.E(x, b);
                var h = a.P(q);
                a.E(q, x);
                a.sb(q, "backgroundImage", "");
                a.e(h, function (c) {
                    a.E(a.u(c, "noscale") ? q : b, c)
                })
            }
            Y = c / (d ? a.l : a.k)(x);
            a.le(x, Y);
            var g = d ? Y * W() : c, f = d ? c : Y * kb();
            a.k(q, g);
            a.l(q, f);
            a.e(O, function (a) {
                a.gc(g, f)
            })
        }
        n.$ScaleHeight = n.$GetScaleHeight = function (b) {
            if (b == j)
                return a.l(q);
            Gb(b, c)
        };
        n.$ScaleWidth = n.$SetScaleWidth = n.$GetScaleWidth = Gb;
        n.sd = function (a) {
            var d = b.ceil(t(hb / bc)), c = t(a - r + d);
            if (c > v) {
                if (a - r > s / 2)
                    a -= s;
                else if (a - r <= -s / 2)
                    a += s
            } else
                a = r + c - d;
            return a
        };
        l.call(n);
        n.$Elmt = q = a.Z(q);
        var p = a.n({$FillMode: 0, $LazyLoading: 1, $StartIndex: 0, $AutoPlay: g, $Loop: 1, $HWA: c, $NaviQuitDrag: c, $AutoPlaySteps: 1, $AutoPlayInterval: 3e3, $PauseOnHover: 1, $SlideDuration: 500, $SlideEasing: d.$EaseOutQuad, $MinDragOffsetToSlide: 20, $SlideSpacing: 0, $DisplayPieces: 1, $ParkingPosition: 0, $UISearchMode: 1, $PlayOrientation: 1, $DragOrientation: 1}, fc);
        if (p.$Idle != j)
            p.$AutoPlayInterval = p.$Idle;
        if (p.$Cols != j)
            p.$DisplayPieces = p.$Cols;
        var ib = p.$PlayOrientation & 3, Wb = (p.$PlayOrientation & 4) / -4 || 1, fb = p.$SlideshowOptions, L = a.n({$Class: o, $PlayInMode: 1, $PlayOutMode: 1}, p.$CaptionSliderOptions), rb = p.$BulletNavigatorOptions, V = p.$ArrowNavigatorOptions, bb = p.$ThumbnailNavigatorOptions, S = !p.$UISearchMode, x, u = a.A(q, "slides", S), db = a.A(q, "loading", S) || a.ab(e), Jb = a.A(q, "navigator", S), cc = a.A(q, "arrowleft", S), ac = a.A(q, "arrowright", S), Hb = a.A(q, "thumbnavigator", S), nc = a.k(u), mc = a.l(u), R, U = [], wc = a.P(u);
        a.e(wc, function (b) {
            if (b.tagName == "DIV" && !a.u(b, "u"))
                U.push(b);
            else
                a.T() && a.G(b, (a.G(b) || 0) + 1)
        });
        var r = -1, yb, ub, s = U.length, J = p.$SlideWidth || nc, I = p.$SlideHeight || mc, Vb = p.$SlideSpacing, Bb = J + Vb, Cb = I + Vb, bc = ib & 1 ? Bb : Cb, v = b.min(p.$DisplayPieces, s), jb, w, K, Ab, O = [], Pb, Rb, Nb, dc, Ec, Q, G = p.$PauseOnHover, pc = p.$AutoPlayInterval, Ub = p.$SlideDuration, sb, eb, hb, Qb = v < s, D = Qb ? p.$Loop : 0, X, M, H = 1, P, B, T, vb = 0, wb = 0, F, cb, gb, Eb, y, Z, z, Sb = new rc, Y;
        Q = p.$AutoPlay;
        n.Sb = fc;
        jc();
        a.I(q, "jssor-slider", c);
        a.G(u, a.G(u) || 0);
        a.D(u, "absolute");
        jb = a.U(u, c);
        a.Nb(jb, u);
        if (fb) {
            dc = fb.$ShowLink;
            sb = fb.$Class;
            eb = v == 1 && s > 1 && sb && (!a.ud() || a.cd() >= 8)
        }
        hb = eb || v >= s || !(D & 1) ? 0 : p.$ParkingPosition;
        X = (v > 1 || hb ? ib : -1) & p.$DragOrientation;
        var xb = u, C = [], A, N, Fb = a.ge(), lb = Fb.he, E, qb, Kb, tb;
        Fb.od && a.sb(xb, Fb.od, ([i, "pan-y", "pan-x", "none"])[X] || "");
        Z = new Bc;
        if (eb)
            A = new sb(Sb, J, I, fb, lb);
        a.E(jb, Z.Jb);
        a.bb(u, "hidden");
        N = Xb();
        a.sb(N, "backgroundColor", "#000");
        a.Ab(N, 0);
        a.Nb(N, xb.firstChild, xb);
        for (var pb = 0; pb < U.length; pb++) {
            var yc = U[pb], zc = new Ac(yc, pb);
            C.push(zc)
        }
        a.J(db);
        Eb = new Cc;
        z = new qc(Eb, Z);
        if (X) {
            a.c(u, "mousedown", Yb);
            a.c(u, "touchstart", uc);
            a.c(u, "dragstart", Ib);
            a.c(u, "selectstart", Ib);
            a.c(e, "mouseup", ob);
            a.c(e, "touchend", ob);
            a.c(e, "touchcancel", ob);
            a.c(h, "blur", ob)
        }
        G &= lb ? 10 : 5;
        if (Jb && rb) {
            Pb = new rb.$Class(Jb, rb, W(), kb());
            O.push(Pb)
        }
        if (V && cc && ac) {
            V.$Loop = D;
            V.$DisplayPieces = v;
            Rb = new V.$Class(cc, ac, V, W(), kb());
            O.push(Rb)
        }
        if (Hb && bb) {
            bb.$StartIndex = p.$StartIndex;
            Nb = new bb.$Class(Hb, bb);
            O.push(Nb)
        }
        a.e(O, function (a) {
            a.fc(s, C, db);
            a.$On(m.Ub, lc)
        });
        Gb(W());
        a.c(u, "click", kc);
        a.c(q, "mouseout", a.Ob(ic, q));
        a.c(q, "mouseover", a.Ob(hc, q));
        zb();
        p.$ArrowKeyNavigation && a.c(e, "keydown", function (a) {
            if (a.keyCode == 37)
                nb(-1);
            else
                a.keyCode == 39 && nb(1)
        });
        var mb = p.$StartIndex;
        if (!(D & 1))
            mb = b.max(0, b.min(mb, s - v));
        z.Kb(mb, mb, 0)
    };
    h.$JssorSlideo$ = f;
    f.$EVT_CLICK = 21;
    f.$EVT_DRAG_START = 22;
    f.$EVT_DRAG_END = 23;
    f.$EVT_SWIPE_START = 24;
    f.$EVT_SWIPE_END = 25;
    f.$EVT_LOAD_START = 26;
    f.$EVT_LOAD_END = 27;
    f.ce = 28;
    f.$EVT_POSITION_CHANGE = 202;
    f.$EVT_PARK = 203;
    f.$EVT_SLIDESHOW_START = 206;
    f.$EVT_SLIDESHOW_END = 207;
    f.$EVT_PROGRESS_CHANGE = 208;
    f.$EVT_STATE_CHANGE = 209;
    f.$EVT_ROLLBACK_START = 210;
    f.$EVT_ROLLBACK_END = 211;
    var m = {Ub: 1};
    h.$JssorBulletNavigator$ = function (d, D) {
        var f = this;
        l.call(f);
        d = a.Z(d);
        var t, u, s, r, n = 0, e, o, k, y, z, j, h, q, p, C = [], A = [];
        function x(a) {
            a != -1 && A[a].Ec(a == n)
        }
        function v(a) {
            f.j(m.Ub, a * o)
        }
        f.$Elmt = d;
        f.yc = function (a) {
            if (a != r) {
                var d = n, c = b.floor(a / o);
                n = c;
                r = a;
                x(d);
                x(c)
            }
        };
        f.zc = function (b) {
            a.B(d, b)
        };
        var B;
        f.gc = function (f, b) {
            if (!B || e.$Scale == g) {
                var f = a.zb(d).clientWidth, b = a.zb(d).clientHeight;
                e.$AutoCenter & 1 && a.C(d, (f - u) / 2);
                e.$AutoCenter & 2 && a.z(d, (b - s) / 2);
                B = c
            }
        };
        var w;
        f.fc = function (D) {
            if (!w) {
                t = b.ceil(D / o);
                n = 0;
                var m = q + y, r = p + z, l = b.ceil(t / k) - 1;
                u = q + m * (!j ? l : k - 1);
                s = p + r * (j ? l : k - 1);
                a.k(d, u);
                a.l(d, s);
                for (var f = 0; f < t; f++) {
                    var B = a.Re();
                    a.ff(B, f + 1);
                    var g = a.Dc(h, "numbertemplate", B, c);
                    a.D(g, "absolute");
                    var x = f % (l + 1);
                    a.C(g, !j ? m * x : f % k * m);
                    a.z(g, j ? r * x : b.floor(f / (l + 1)) * r);
                    a.E(d, g);
                    C[f] = g;
                    e.$ActionMode & 1 && a.c(g, "click", a.L(i, v, f));
                    e.$ActionMode & 2 && a.c(g, "mouseover", a.Ob(a.L(i, v, f), g));
                    A[f] = a.Mb(g)
                }
                w = c
            }
        };
        f.Sb = e = a.n({$SpacingX: 0, $SpacingY: 0, $Orientation: 1, $ActionMode: 1}, D);
        h = a.A(d, "prototype");
        q = a.k(h);
        p = a.l(h);
        a.Db(h, d);
        o = e.$Steps || 1;
        k = e.$Lanes || 1;
        y = e.$SpacingX;
        z = e.$SpacingY;
        j = e.$Orientation - 1;
        e.$Scale == g && a.I(d, "noscale", c)
    };
    h.$JssorArrowNavigator$ = function (b, f, j) {
        var d = this;
        l.call(d);
        var u, t, e, h, k, q = a.k(b), o = a.l(b);
        function n(a) {
            d.j(m.Ub, a, c)
        }
        function r(c) {
            a.B(b, c || !j.$Loop && e == 0);
            a.B(f, c || !j.$Loop && e >= t - j.$DisplayPieces);
            u = c
        }
        d.yc = function (b, a, c) {
            if (c)
                e = a;
            else {
                e = b;
                r(u)
            }
        };
        d.zc = r;
        var s;
        d.gc = function (i, d) {
            if (!s || h.$Scale == g) {
                var e = a.zb(b).clientWidth, d = a.zb(b).clientHeight;
                if (h.$AutoCenter & 1) {
                    a.C(b, (e - q) / 2);
                    a.C(f, (e - q) / 2)
                }
                if (h.$AutoCenter & 2) {
                    a.z(b, (d - o) / 2);
                    a.z(f, (d - o) / 2)
                }
                s = c
            }
        };
        var p;
        d.fc = function (d) {
            t = d;
            e = 0;
            if (!p) {
                a.c(b, "click", a.L(i, n, -k));
                a.c(f, "click", a.L(i, n, k));
                a.Mb(b);
                a.Mb(f);
                p = c
            }
        };
        d.Sb = h = a.n({$Steps: 1}, j);
        k = h.$Steps;
        if (h.$Scale == g) {
            a.I(b, "noscale", c);
            a.I(f, "noscale", c)
        }
    };
    h.$JssorThumbnailNavigator$ = function (k, B) {
        var i = this, y, p, d, v = [], z, x, e, q, r, u, t, o, s, h, n;
        l.call(i);
        k = a.Z(k);
        function A(l, f) {
            var g = this, b, k, j;
            function o() {
                k.Ec(p == f)
            }
            function h() {
                if (!s.$LastDragSucceded()) {
                    var a = e - f % e, b = s.sd((f + a) / e - 1), c = b * e + e - a;
                    i.j(m.Ub, c)
                }
            }
            g.db = f;
            g.Jc = o;
            j = l.bf || l.Qb || a.ab();
            g.Jb = b = a.Dc(n, "thumbnailtemplate", j, c);
            k = a.Mb(b);
            d.$ActionMode & 1 && a.c(b, "click", h);
            d.$ActionMode & 2 && a.c(b, "mouseover", a.Ob(h, b))
        }
        i.yc = function (c, d, f) {
            var a = p;
            p = c;
            a != -1 && v[a].Jc();
            v[c].Jc();
            !f && s.$PlayTo(s.sd(b.floor(d / e)))
        };
        i.zc = function (b) {
            a.B(k, b)
        };
        i.gc = a.jc;
        var w;
        i.fc = function (F, D) {
            if (!w) {
                y = F;
                b.ceil(y / e);
                p = -1;
                o = b.min(o, D.length);
                var i = d.$Orientation & 1, m = u + (u + q) * (e - 1) * (1 - i), l = t + (t + r) * (e - 1) * i, B = m + (m + q) * (o - 1) * i, n = l + (l + r) * (o - 1) * (1 - i);
                a.D(h, "absolute");
                a.bb(h, "hidden");
                d.$AutoCenter & 1 && a.C(h, (z - B) / 2);
                d.$AutoCenter & 2 && a.z(h, (x - n) / 2);
                a.k(h, B);
                a.l(h, n);
                var j = [];
                a.e(D, function (l, f) {
                    var g = new A(l, f), d = g.Jb, c = b.floor(f / e), k = f % e;
                    a.C(d, (u + q) * k * (1 - i));
                    a.z(d, (t + r) * k * i);
                    if (!j[c]) {
                        j[c] = a.ab();
                        a.E(h, j[c])
                    }
                    a.E(j[c], d);
                    v.push(g)
                });
                var E = a.n({$HWA: g, $AutoPlay: g, $NaviQuitDrag: g, $SlideWidth: m, $SlideHeight: l, $SlideSpacing: q * i + r * (1 - i), $MinDragOffsetToSlide: 12, $SlideDuration: 200, $PauseOnHover: 1, $PlayOrientation: d.$Orientation, $DragOrientation: d.$DisableDrag ? 0 : d.$Orientation}, d);
                s = new f(k, E);
                w = c
            }
        };
        i.Sb = d = a.n({$SpacingX: 3, $SpacingY: 3, $DisplayPieces: 1, $Orientation: 1, $AutoCenter: 3, $ActionMode: 1}, B);
        if (d.$Rows != j)
            d.$Lanes = d.$Rows;
        z = a.k(k);
        x = a.l(k);
        h = a.A(k, "slides", c);
        n = a.A(h, "prototype");
        u = a.k(n);
        t = a.l(n);
        a.Db(n, h);
        e = d.$Lanes || 1;
        q = d.$SpacingX;
        r = d.$SpacingY;
        o = d.$DisplayPieces;
        d.$Scale == g && a.I(k, "noscale", c)
    };
    function o() {
        k.call(this, 0, 0);
        this.Pb = a.jc
    }
    h.$JssorCaptionSlider$ = function (p, h, f) {
        var c = this, g, n = f ? h.$PlayInMode : h.$PlayOutMode, e = h.$CaptionTransitions, o = {jb: "t", $Delay: "d", $Duration: "du", x: "x", y: "y", $Rotate: "r", $Zoom: "z", $Opacity: "f", X: "b"}, d = {wb: function (b, a) {
                if (!isNaN(a.ob))
                    b = a.ob;
                else
                    b *= a.ye;
                return b
            }, $Opacity: function (b, a) {
                return this.wb(b - 1, a)
            }};
        d.$Zoom = d.$Opacity;
        k.call(c, 0, 0);
        function l(r, m) {
            var k = [], i, j = [], c = [];
            function h(c, d) {
                var b = {};
                a.e(o, function (g, h) {
                    var e = a.u(c, g + (d || ""));
                    if (e) {
                        var f = {};
                        if (g == "t")
                            f.ob = e;
                        else if (e.indexOf("%") + 1)
                            f.ye = a.tc(e) / 100;
                        else
                            f.ob = a.tc(e);
                        b[h] = f
                    }
                });
                return b
            }
            function p() {
                return e[b.floor(b.random() * e.length)]
            }
            function g(f) {
                var h;
                if (f == "*")
                    h = p();
                else if (f) {
                    var d = e[a.Ne(f)] || e[f];
                    if (a.Zb(d)) {
                        if (f != i) {
                            i = f;
                            c[f] = 0;
                            j[f] = d[b.floor(b.random() * d.length)]
                        } else
                            c[f]++;
                        d = j[f];
                        if (a.Zb(d)) {
                            d = d.length && d[c[f] % d.length];
                            if (a.Zb(d))
                                d = d[b.floor(b.random() * d.length)]
                        }
                    }
                    h = d;
                    if (a.fd(h))
                        h = g(h)
                }
                return h
            }
            var q = a.P(r);
            a.e(q, function (b) {
                var c = [];
                c.$Elmt = b;
                var e = a.u(b, "u") == "caption";
                a.e(f ? [0, 3] : [2], function (k, o) {
                    if (e) {
                        var j, f;
                        if (k != 2 || !a.u(b, "t3")) {
                            f = h(b, k);
                            if (k == 2 && !f.jb) {
                                f.$Delay = f.$Delay || {ob: 0};
                                f = a.n(h(b, 0), f)
                            }
                        }
                        if (f && f.jb) {
                            j = g(f.jb.ob);
                            if (j) {
                                var i = a.n({$Delay: 0}, j);
                                a.e(f, function (c, a) {
                                    var b = (d[a] || d.wb).apply(d, [i[a], f[a]]);
                                    if (!isNaN(b))
                                        i[a] = b
                                });
                                if (!o)
                                    if (f.X)
                                        i.X = f.X.ob || 0;
                                    else if (n & 2)
                                        i.X = 0
                            }
                        }
                        c.push(i)
                    }
                    if (m % 2 && !o)
                        c.P = l(b, m + 1)
                });
                k.push(c)
            });
            return k
        }
        function m(w, c, z) {
            var g = {$Easing: c.$Easing, $Round: c.$Round, $During: c.$During, $Reverse: f && !z}, m = w, r = a.zb(w), l = a.k(m), j = a.l(m), y = a.k(r), x = a.l(r), h = {}, e = {}, i = c.$ScaleClip || 1;
            if (c.$Opacity)
                e.$Opacity = 1 - c.$Opacity;
            g.$OriginalWidth = l;
            g.$OriginalHeight = j;
            if (c.$Zoom || c.$Rotate) {
                e.$Zoom = (c.$Zoom || 2) - 2;
                if (a.T() || a.vc())
                    e.$Zoom = b.min(e.$Zoom, 1);
                h.$Zoom = 1;
                var B = c.$Rotate || 0;
                e.$Rotate = B * 360;
                h.$Rotate = 0
            } else if (c.$Clip) {
                var s = {$Top: 0, $Right: l, $Bottom: j, $Left: 0}, v = a.n({}, s), d = v.xb = {}, u = c.$Clip & 4, p = c.$Clip & 8, t = c.$Clip & 1, q = c.$Clip & 2;
                if (u && p) {
                    d.$Top = j / 2 * i;
                    d.$Bottom = -d.$Top
                } else if (u)
                    d.$Bottom = -j * i;
                else if (p)
                    d.$Top = j * i;
                if (t && q) {
                    d.$Left = l / 2 * i;
                    d.$Right = -d.$Left
                } else if (t)
                    d.$Right = -l * i;
                else if (q)
                    d.$Left = l * i;
                g.$Move = c.$Move;
                e.$Clip = v;
                h.$Clip = s
            }
            var n = 0, o = 0;
            if (c.x)
                n -= y * c.x;
            if (c.y)
                o -= x * c.y;
            if (n || o || g.$Move) {
                e.$Left = n;
                e.$Top = o
            }
            var A = c.$Duration;
            h = a.n(h, a.zd(m, e));
            g.Yb = a.Od();
            return new k(c.$Delay, A, g, m, h, e)
        }
        function i(b, d) {
            a.e(d, function (a) {
                var e, h = a.$Elmt, d = a[0], k = a[1];
                if (d) {
                    e = m(h, d);
                    b = e.Hb(d.X == j ? b : d.X, 1)
                }
                b = i(b, a.P);
                if (k) {
                    var f = m(h, k, 1);
                    f.Hb(b, 1);
                    c.W(f);
                    g.W(f)
                }
                e && c.W(e)
            });
            return b
        }
        c.Pb = function () {
            c.v(c.ib() * (f || 0));
            g.v(0)
        };
        g = new k(0, 0);
        i(0, n ? l(p, 1) : [])
    };
})(window, document, Math, null, true, false)
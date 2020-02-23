! function() { var e = function(e) { var t = { exports: {} }; return e.call(t.exports, t, t.exports), t.exports },
        d = function(e) { return e && e.__esModule ? e : { "default": e } },
        c = function() {
            function n(e, t) { var n = [],
                    r = !0,
                    a = !1,
                    o = undefined; try { for (var i, u = e[Symbol.iterator](); !(r = (i = u.next()).done) && (n.push(i.value), !t || n.length !== t); r = !0); } catch (d) { a = !0, o = d } finally { try {!r && u["return"] && u["return"]() } finally { if (a) throw o } } return n } return function(e, t) { if (Array.isArray(e)) return e; if (Symbol.iterator in Object(e)) return n(e, t); throw new TypeError("Invalid attempt to destructure non-iterable instance") } }(),
        r = function(e) { if (Array.isArray(e)) { for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t]; return n } return Array.from(e) },
        u = e(function(e, t) { "use strict";

            function n(e) { "loading" !== document.readyState ? e() : document.addEventListener ? document.addEventListener("DOMContentLoaded", e) : document.attachEvent("onreadystatechange", function() { "loading" !== document.readyState && e() }) }
            Object.defineProperty(t, "__esModule", { value: !0 }), t["default"] = n }),
        f = e(function(e, t) { "use strict";

            function n(e) { return new Error('The feature { name: "' + e.name + '", version: "' + e.version + '"} does not exist') }

            function r(e) { return new Error("Could not create registry entry " + e) }

            function a(e) { return new Error(e + " already exists in lookup.") }

            function o(e) { return new Error("Features should be an Array. Received: " + JSON.stringify(e)) }

            function i(e) { return new Error('Features should be defined as `{ name: "name", version: "version" }`. Received: ' + JSON.stringify(e)) }

            function u(e, t) { return new Error(e + " has already been loaded at version " + t) }
            Object.defineProperty(t, "__esModule", { value: !0 }), t.featureNotFound = n, t.couldNotCreateEntry = r, t.couldNotAddToQuerySelectors = a, t.invalidFeaturesArray = o, t.invalidFeature = i, t.alreadyLoaded = u }),
        v = e(function(e, t) { "use strict";

            function n() { if (o) return o; var e = document.querySelector("#shopify-features"); if (e) try { o = JSON.parse(e.innerText) } catch (t) {} else o = {}; return o }

            function r() { var e = n(); if (e) try { return e.betas.reduce(function(e, t) { return e[t] = !0, e }, {}) } catch (t) {}
                return {} }

            function a() { return n().locale || "en" }
            Object.defineProperty(t, "__esModule", { value: !0 }), t.getBetas = r, t.getLocale = a; var o = void 0 }),
        i = e(function(e, t) { "use strict";

            function n(e) { var t = e.name,
                    n = e.version,
                    r = e.legacy,
                    a = e.baseName,
                    o = a === undefined ? null : a,
                    i = e.locale,
                    u = i === undefined ? null : i,
                    d = e.filename,
                    s = o || t,
                    l = (d === undefined ? null : d) || s; return r && (l += "-legacy"), u && (l = l + "." + u), c + "/" + s + "/v" + n + "/" + l + ".js" }
            Object.defineProperty(t, "__esModule", { value: !0 }), t["default"] = n; var c = "https://cdn.shopify.com/shopifycloud" }),
        y = e(function(e, t) { "use strict";

            function n(e) { var t = e.name,
                    n = e.baseName,
                    r = e.version,
                    a = e.betaFlag,
                    o = e.filename,
                    i = e.legacy,
                    u = e.localized,
                    d = e.props,
                    s = d === undefined ? {} : d,
                    l = t + "@" + r; if (c[l]) throw (0, f.couldNotCreateEntry)(l);
                c[l] = { props: s, betaFlag: a, scriptId: l, name: t, baseName: n, version: r, locale: (0, v.getLocale)(), localized: u, legacy: i, filename: o } }

            function r() { l = {} }

            function a(e) { window.Shopify.modules ? (e.legacy = !1, e.props = { type: "module" }, n(e)) : e.hasLegacy && (e.legacy = !0, e.props = { nomodule: "" }, n(e)) }

            function o(e) { var t = e.name + "@" + e.version,
                    n = c[t]; if (!n) throw (0, f.featureNotFound)(e); var r = n.name,
                    a = n.baseName,
                    o = n.version,
                    i = n.localized && n.locale,
                    u = n.legacy,
                    d = n.filename; if (l[r] && l[r] !== o) throw (0, f.alreadyLoaded)(t, l[r]); return l[r] = o, n.src = (0, s["default"])({ name: r, baseName: a, version: o, legacy: u, locale: i, filename: d }), n }
            Object.defineProperty(t, "__esModule", { value: !0 }), t.reset = r, t.register = a, t.getEntry = o; var s = d(i),
                c = {},
                l = {} }),
        m = e(function(e, t) { "use strict";

            function n() { a = null }

            function r(e) { return a ? a[e] : (a = (0, v.getBetas)(), r(e)) }
            Object.defineProperty(t, "__esModule", { value: !0 }), t.resetBetas = n, t["default"] = r; var a = null }),
        p = e(function(e, t) { "use strict";

            function n() {}
            Object.defineProperty(t, "__esModule", { value: !0 }), t["default"] = n }),
        h = e(function(e, t) { "use strict";

            function s(e) { return -1 < c.indexOf(e) }

            function l(e) { return -1 < f.indexOf(e) }

            function n(e, t) {
                function n() { c.push(d), o(), t(null, d) }

                function r() { f.push(d), o(), t(new Error("load error: " + i)) }

                function a() { d.addEventListener("load", n), d.addEventListener("error", r) }

                function o() { d.removeEventListener("load", n), d.removeEventListener("error", r) } var i = e.src,
                    u = e.props,
                    d = document.querySelector('script[src="' + i + '"]');
                d && s(d) ? n() : d && l(d) ? r() : d ? a() : (d = document.createElement("script"), Object.keys(u).forEach(function(e) { d.setAttribute(e, u[e]) }), null === d.getAttribute("defer") && d.setAttribute("defer", ""), d.src = i, d.crossorigin = "anonymous", a(), document.head.appendChild(d)) }
            Object.defineProperty(t, "__esModule", { value: !0 }), t["default"] = n; var c = [],
                f = [] }),
        o = e(function(e, t) { "use strict";

            function a(e, u, d) { return e.reduce(function(e, t) { var n = t.onLoad || l["default"]; try { var r = (0, y.getEntry)(t),
                            a = r.betaFlag,
                            o = !a || (0, s["default"])(a); if (d && !o) throw (0, f.featureNotFound)(t);
                        o && e.push([r, t]) } catch (i) { n(i), u.push(i) } return e }, []) }

            function o(e, a, o) { var i = e.length;
                0 !== i ? e.forEach(function(e) { var t = c(e, 2),
                        n = t[0],
                        r = t[1];
                    (0, u["default"])(n, function(e, t) { var n = r.onLoad || l["default"];
                        e && (n(e), a.push(e)), t && n(null), 0 === --i && o(a) }) }) : o(a) }

            function n(e, t, n) { var r = [];
                o(a(e, r, t), r, function(e) { var t = 0 === e.length ? null : e;
                    n(t) }) }

            function r(e, t) { n(e, !0, t) }

            function i(e, t) { n(e, !1, t) }
            Object.defineProperty(t, "__esModule", { value: !0 }), t.loadMultiple = n, t.loadMultipleErrorIfNotInBeta = r, t.loadMultipleSilentIfNotInBeta = i; var s = d(m),
                l = d(p),
                u = d(h) }),
        s = e(function(e, t) { "use strict";

            function n(e) { if (!e || "string" != typeof e.name || "string" != typeof e.version) throw (0, f.invalidFeature)(e) }
            Object.defineProperty(t, "__esModule", { value: !0 }), t["default"] = n }),
        l = e(function(e, t) { "use strict";

            function n(e, t) { var n = t || a["default"]; if (Array.isArray(e)) return e.forEach(r["default"]), void(0, o.loadMultipleErrorIfNotInBeta)(e, n); throw (0, f.invalidFeaturesArray)(e) }
            Object.defineProperty(t, "__esModule", { value: !0 }), t["default"] = n; var r = d(s),
                a = d(p) }),
        g = e(function(e, t) { "use strict";

            function n() {
                function e(e, t) {
                    function n(r) { return t.map(function(e) { var t = e.name,
                                n = e.version; return t && n ? { name: t, version: n } : { name: t, version: r.getAttribute("data-shopify-feature") } }) } if (a[e]) throw (0, f.couldNotAddToQuerySelectors)(e);
                    a[e] = n }

                function t() { return Object.keys(a).reduce(function(e, t) { var n = document.querySelector(t); if (!n) return e; var r = (0, a[t])(n); return delete a[t], e.concat(r) }, []) } var a = {}; return { add: e, getFeatures: t } }
            Object.defineProperty(t, "__esModule", { value: !0 }), t["default"] = n }),
        b = e(function(e, t) { "use strict";

            function n(e) { var t = e || r["default"];
                (0, o.loadMultipleSilentIfNotInBeta)(a.getFeatures(), t) }
            Object.defineProperty(t, "__esModule", { value: !0 }), t["default"] = n; var r = d(p),
                a = (0, d(g)["default"])();
            a.add("model-viewer[data-shopify-feature]", [{ name: "model-viewer" }]), a.add("video", [{ name: "media-analytics", version: "0.1" }]), a.add("model-viewer", [{ name: "media-analytics", version: "0.1" }]), a.add('a[rel="ar"]', [{ name: "media-analytics", version: "0.1" }]), a.add('a[href*="package=com.google.ar.core;action=android.intent.action.VIEW;"]', [{ name: "media-analytics", version: "0.1" }]), a.add("[data-shopify-xr]", [{ name: "media-analytics", version: "0.1" }]), a.add('iframe[src^="https://www.youtube.com/embed/"]', [{ name: "media-analytics", version: "0.1" }]) }),
        w = e(function(e, t) { "use strict";

            function n(r) { var e = null; return {get isObserving() { return Boolean(e) }, enable: function t() { this.isObserving || (e = new MutationObserver(function(e) { for (var t = !1, n = 0; n < e.length; n++)
                                if (e[n].addedNodes.length) { t = !0; break }
                            t && r() })).observe(document.body, { childList: !0, subtree: !0 }) }, disable: function n() { this.isObserving && (e.disconnect(), e = null) } } }
            Object.defineProperty(t, "__esModule", { value: !0 }), t["default"] = n }),
        _ = e(function(e, t) { "use strict";

            function n(e, t) { var n = window.Shopify[e] && window.Shopify[e].q;
                n && Array.isArray(n) && n.forEach(function(e) { t.apply(undefined, r(e)) }), window.Shopify[e] = t }
            Object.defineProperty(t, "__esModule", { value: !0 }), t["default"] = n });
    e(function(e, t) { "use strict";
        Object.defineProperty(t, "__esModule", { value: !0 }), t.resetRegistry = t.resetBetas = t.register = undefined; var n = d(u),
            r = d(l),
            a = d(b),
            o = d(w),
            i = d(_);
        t.register = y.register, t.resetBetas = m.resetBetas, t.resetRegistry = y.reset, window.Shopify = window.Shopify || {}, (0, y.register)({ name: "model-viewer", version: "0.6", hasLegacy: !0 }), (0, y.register)({ name: "model-viewer", version: "0.7", hasLegacy: !0 }), (0, y.register)({ name: "model-viewer", version: "0.8", hasLegacy: !0 }), (0, y.register)({ name: "model-viewer-ui", version: "1.0", hasLegacy: !0, localized: !0 }), (0, y.register)({ name: "shopify-xr", version: "1.0", baseName: "shopify-xr-js", filename: "shopify-xr", localized: !0 }), (0, y.register)({ name: "video-ui", baseName: "shopify-plyr", version: "1.0", hasLegacy: !0, localized: !0 }), (0, y.register)({ name: "media-analytics", version: "0.1", hasLegacy: !0, filename: "analytics", betaFlag: "rich-media-storefront-analytics" }), (0, n["default"])(function() {
            function e() {
                (0, a["default"])(function(e) { if (e) throw e[0] }) }(0, i["default"])("loadFeatures", r["default"]), (0, i["default"])("autoloadFeatures", a["default"]), e(), (0, o["default"])(e).enable() }) }) }("undefined" != typeof global ? global : "undefined" != typeof window && window);
function toggleTabIndex(n) {
    n.attr("tabindex") == -1 ? setTabIndex(n, 0) : setTabIndex(n, -1)
}
function setTabIndex(n, t) {
    n.attr("tabindex", t)
}
function setContactFormTabIndex(n) {
    n ? ($("#billingDistrict").is(":disabled") || setTabIndex($("#select2-billingDistrict-container").parent(), -1),
    $("#billingWard").is(":disabled") || setTabIndex($("#select2-billingWard-container").parent(), -1),
    setTabIndex($("#shipping-address input"), 0),
    $("#shippingProvince").is(":disabled") || setTabIndex($("#select2-shippingProvince-container").parent(), 0),
    $("#shippingDistrict").is(":disabled") || setTabIndex($("#select2-shippingDistrict-container").parent(), 0),
    $("#shippingWard").is(":disabled") || setTabIndex($("#select2-shippingWard-container").parent(), 0)) : ($("#billingDistrict").is(":disabled") || setTabIndex($("#select2-billingDistrict-container").parent(), 0),
    $("#billingWard").is(":disabled") || setTabIndex($("#select2-billingWard-container").parent(), 0),
    setTabIndex($("#shipping-address input"), -1),
    $("#shippingProvince").is(":disabled") || setTabIndex($("#select2-shippingProvince-container").parent(), -1),
    $("#shippingDistrict").is(":disabled") || setTabIndex($("#select2-shippingDistrict-container").parent(), -1),
    $("#shippingWard").is(":disabled") || setTabIndex($("#select2-shippingWard-container").parent(), -1))
}
function checkErrorToScroll() {
    var n = document.querySelector(".field--error");
    n && n.scrollIntoView({
        block: "center",
        behavior: "smooth"
    })
}
(function(n) {
    function h(n, t) {
        var u, f, r;
        if ($province = $("select[data-address-type='province'][data-address-zone='" + n + "']"),
        $province) {
            for (u = ['<option value="" hidden>---<\/option>'],
            f = 0; f < i.length; f++) {
                if (r = i[f],
                r.id == t) {
                    u.push("<option value='" + r.id + "' selected>" + r.name + "<\/option>");
                    continue
                }
                u.push("<option value='" + r.id + "'>" + r.name + "<\/option>")
            }
            $province.html(u.join(""))
        }
    }
    function s(n, t, i) {
        var r = $("select[data-address-type='district'][data-address-zone='" + n + "']"), s, e, o, u;
        if (r) {
            if (!t) {
                r.val("");
                r.attr("disabled", "disabled");
                r.html("");
                return
            }
            for (s = f.filter(function(n) {
                return n.province_id == t
            }),
            e = ['<option value="" hidden>---<\/option>'],
            o = 0; o < s.length; o++) {
                if (u = s[o],
                u.id == i) {
                    e.push("<option value='" + u.id + "' selected>" + u.name + "<\/option>");
                    continue
                }
                e.push("<option value='" + u.id + "'>" + u.name + "<\/option>")
            }
            r.removeAttr("disabled");
            r.html(e.join(""))
        }
    }
    function r(n, t, i) {
        var r = $("select[data-address-type='ward'][data-address-zone='" + n + "']"), f, s, o, u;
        if (r) {
            if (!t) {
                r.val("");
                r.attr("disabled", "disabled");
                r.html("");
                return
            }
            for (f = ['<option value="" hidden>---<\/option>'],
            s = e.filter(function(n) {
                return n.district_id == t
            }),
            o = 0; o < s.length; o++) {
                if (u = s[o],
                u.id == i) {
                    f.push("<option value='" + u.id + "' selected>" + u.name + "<\/option>");
                    continue
                }
                f.push("<option value='" + u.id + "'>" + u.name + "<\/option>")
            }
            r.removeAttr("disabled");
            r.html(f.join(""))
        }
    }
    function c() {
        return o ? {
            then: function(n) {
                return n()
            }
        } : fetch("/checkout/addresses.json").then(function(n) {
            return n.json()
        }).then(function(n) {
            i = n.provinces;
            f = n.districts.filter(function(n) {
                return n.id != 69
            });
            e = n.wards;
            o = !0
        })
    }
    function u() {}
    function t(n, t) {
        $('select[data-address-type="' + t + '"][data-address-zone="' + n + '"]').trigger("address:change")
    }
    var i = []
      , f = []
      , e = []
      , o = !1;
    u.prototype.bind = function() {
        $("body").on("change", "select[data-address-type]", function(n) {
            var u = n.target.getAttribute("data-address-type")
              , i = n.target.getAttribute("data-address-zone");
            u === "province" ? (t(i, "province"),
            s(i, n.target.value, undefined),
            t(i, "district"),
            r(i, "", undefined),
            t(i, "ward")) : u === "district" && (t(i, "district"),
            r(i, n.target.value, undefined),
            t(i, "ward"))
        });
        return this
    }
    ;
    u.prototype.refresh = function(n) {
        var i = {}, u;
        ($("[data-address-zone]").each(function() {
            var n = $(this), r = n.data("address-type"), t, u;
            r && (t = n.data("address-zone"),
            u = i[t] || (i[t] = {}),
            u[r] = n.val() || n.attr("value"))
        }),
        u = Object.keys(i),
        u.length != 0) && c().then(function() {
            u.forEach(function(n) {
                var u = i[n];
                h(n, u.province);
                t(n, "province");
                s(n, u.province, u.district);
                t(n, "district");
                r(n, u.district, u.ward);
                t(n, "ward")
            });
            n && n()
        })
    }
    ;
    n.Address = new u;
    n.onRecaptchaValid = function() {
        $("#grecaptchaBox .field").removeClass("field--error")
    }
    ;
    n.InputPhone = function() {
        function f(n) {
            var t = n.id.toLowerCase();
            return $('<span class="fi fi-' + t + '"><\/span>')
        }
        function t(n) {
            var t = $(n), r;
            this.$phone = t.find("input[type=tel]");
            this.$phone_region = t.find("select.select-phone-region");
            this.$phone.on("input", this._handleChangePhone.bind(this));
            this.$phone_region.on("change", this._handleChangePhoneRegion.bind(this));
            r = this;
            i ? this._initSelect2() : $.ajax({
                url: "/checkout/supported_phone_regions.json",
                dataType: "json",
                success: function(n) {
                    i = n.regions;
                    r._initSelect2()
                }
            })
        }
        var r = "ZZ", u = libphonenumber.PhoneNumberFormat.E164, n = new libphonenumber.PhoneNumberUtil, i;
        return t.prototype._initSelect2 = function() {
            this.$phone_region.select2({
                templateSelection: f,
                dropdownAutoWidth: !0,
                data: i,
                selectionCssClass: "select2-phone-region",
                dropdownCssClass: "select2-phone-region--dropdown"
            });
            var t = this.$phone_region.data("init-value")
              , n = this.$phone_region.val();
            t ? (n = t,
            this._old_region = n,
            this.$phone_region.val(n).trigger("change")) : this._old_region = n
        }
        ,
        t.prototype._handleChangePhone = function(t) {
            var u, i, f;
            u = t.target.value;
            i = this.$phone_region.val();
            try {
                f = n.parse(u, i)
            } catch (e) {
                return
            }
            i = n.getRegionCodeForCountryCode(f.getCountryCode());
            i !== r && (this._old_region = i,
            this.$phone_region.val(i).trigger("change"))
        }
        ,
        t.prototype._handleChangePhoneRegion = function(t) {
            var i, r, f, e;
            if (t.stopPropagation(),
            i = this.$phone.val(),
            r = t.target.value,
            r !== this._old_region)
                try {
                    f = n.parse(i, this._old_region);
                    e = n.getCountryCodeForRegion(r);
                    e != null && f.setCountryCode(e);
                    i = n.format(f, u);
                    this._old_region = r;
                    this.$phone.val(i).trigger("change")
                } catch (o) {}
        }
        ,
        t
    }()
}
)(window);
window.Bizweb || (window.Bizweb = {});
$(function() {
    $("body").on("click", "[data-toggle]", function() {
        var n = $(this);
        n.toggleClass("toggled");
        $(n.attr("data-toggle")).toggleClass(n.attr("data-toggle-class"))
    }).on("focus", ".field__label+input[type=text].field__input,textarea.field__input", function() {
        $(this).closest(".field").addClass("field--show-floating-label")
    }).on("blur", ".field__label+input[type=text].field__input,textarea.field__input", function() {
        this.value || $(this).closest(".field").removeClass("field--show-floating-label")
    }).on("change", ".field.field--error  .field__input", function() {
        $(this).closest(".field").removeClass("field--error")
    }).on("keypress", "#checkoutForm input", function(n) {
        n.keyCode == 13 && n.preventDefault()
    }).on("click", "#differenceAddress", function(n) {
        setContactFormTabIndex(n.target.checked)
    });
    $(document).keyup(function(n) {
        n.which === 27 && $(".modal-wrapper").addClass("hide")
    }).on("page:load", function() {
        checkErrorToScroll()
    })
});
$(function() {
    function r(t) {
        if (t)
            for (var i = 0; i < t.length; i++)
                Twine.bind(t[i]);
        else
            Twine.reset(n).bind();
        Twine.refreshImmediately()
    }
    function u() {
        var n = /iPhone|iPad|iPod/.test(navigator.userAgent) && !window.MSStream;
        n || $("select[data-address-type]").select2({
            width: "100%",
            language: {
                noResults: function() {
                    return "Không tìm thấy kết quả"
                }
            }
        })
    }
    function t(n, t) {
        return n && t && n === t
    }
    function i(n) {
        return n.differenceAddress ? f(n) : e(n)
    }
    function f(n) {
        return n.shipping.province && !n.requireDistrict && !n.requireWard || n.shipping.province && n.shipping.district && !n.requireWard || n.shipping.province && n.shipping.district && n.shipping.ward
    }
    function e(n) {
        return n.billing.province && !n.requireDistrict && !n.requireWard || n.billing.province && n.billing.district && !n.requireWard || n.billing.province && n.billing.district && n.billing.ward
    }
    Address.bind().refresh();
    u();
    setTimeout(function() {
        setContactFormTabIndex($("#differenceAddress").is(":checked"))
    }, 100);
    var n = {
        billing: {},
        shipping: {},
        isLoadingShippingMethod: !1,
        isLoadingShippingError: !1,
        isLoadingReductionCode: !1,
        isLoadingReductionCodeError: !1,
        isSubmitingCheckout: !1,
        isSubmitingCheckoutError: !1,
        shouldSaveCheckoutAbandon: !1,
        isBoundingToSaveCheckoutAbandon: !1,
        shippingMethods: [],
        timeoutIds: [],
        handleCheckoutKeyPress: function() {
            this.isBoundingToSaveCheckoutAbandon && this.setJobToSaveCheckoutAbandon(this.deadline - Date.now() + 200)
        },
        handleCheckoutChange: function(t) {
            var e = t.delegateTarget, r = t.target, u = r.dataset.addressType, f = r.dataset.addressZone, o;
            this.requireShipping && ["province", "district", "ward"].indexOf(u) >= 0 && (u == "province" && f == "billing" ? (this.billing.district = "",
            this.billing.ward = "") : u == "district" && f == "billing" ? this.billing.ward = "" : u == "province" && f == "shipping" ? (this.shipping.district = "",
            this.shipping.ward = "") : u == "district" && f == "shipping" && (this.shipping.ward = ""),
            i(n) ? (this.isLoadingShippingMethod = !0,
            this.isAddressSelecting = !1,
            o = this,
            setTimeout(function() {
                o.refreshShippingMethod(e)
            }, 0)) : this.isAddressSelecting = !0);
            (r.name == "email" || r.name == "billingPhone") && this.shouldSaveCheckoutAbandon ? this.setJobToSaveCheckoutAbandon(5e3) : this.isBoundingToSaveCheckoutAbandon && this.setJobToSaveCheckoutAbandon(Math.max(this.deadline - Date.now(), 3e3));
            r.name == "differenceAddress" && this.handleToggleDifferenceAddress(e);
            r.id == "customer-address" && this.handleCustomerAddressChange(t, e);
            this.customerAddress && ["billingName", "billingAddress", "billingPhone", "billingProvince", "billingDisitrict", "billingWard", "billingZip"].indexOf(r.name) >= 0 && (this.customerAddress = 0)
        },
        setJobToSaveCheckoutAbandon: function(n) {
            this.deadline = Date.now() + n;
            this.saveAbandonJobId && clearTimeout(this.saveAbandonJobId);
            this.isBoundingToSaveCheckoutAbandon = !0;
            this.saveAbandonJobId = setTimeout(this.submitCheckoutAbandon.bind(this), n)
        },
        submitCheckoutAbandon: function() {
            if (this.isBoundingToSaveCheckoutAbandon = !1,
            this.shouldSaveCheckoutAbandon = !1,
            this.saveAbandonJobId = null,
            !this.isSubmitingCheckout) {
                var n = $("#checkoutForm");
                $.post(n.attr("action"), n.find(":not(input[name=reductionCode])").serialize())
            }
        },
        handleCheckoutSubmit: function(t) {
            var r, i, u;
            if (n["onepayConfirm" + n.paymentMethod] === !1) {
                alert($("#onepayConfirmAlert-" + n.paymentMethod).text());
                return
            }
            r = t.target;
            this.isSubmitingCheckout = !0;
            this.isSubmitingCheckoutError = !1;
            this.isLoadingReductionCodeError = !1;
            this.isLoadingShippingError = !1;
            i = this;
            u = {
                refreshOnSuccess: "checkout",
                refreshOnError: "checkout",
                exceptKeys: ["_method", "reductionCode"],
                success: function() {
                    i.isSubmitingCheckout = !1;
                    i.shouldRefreshAddress = !0
                },
                fail: function() {
                    i.isSubmitingCheckout = !1;
                    i.isSubmitingCheckoutError = !0;
                    Twine.refresh()
                }
            };
            this.sendCheckoutForm(r, u)
        },
        handleReductionCodeKeyPress: function(n) {
            n.keyCode == 13 && (n.preventDefault(),
            n.target.value) && this.applyReductionCode()
        },
        handleShippingMethodErrorRetry: function() {
            this.isLoadingShippingMethod = !0;
            this.isLoadingReductionCodeError = !1;
            this.refreshShippingMethod(document.forms.checkoutForm)
        },
        applyReductionCode: function() {
            var r = document.forms.checkoutForm, n = ["_method", "reductionCode", "email", "differenceAddress"], t, i;
            this.differenceAddress ? n.push("shippingProvince", "shippingDistrict", "shippingWard") : n.push("billingProvince", "billingDistrict", "billingWard");
            this.requireShipping && n.push("shippingMethod");
            this.isLoadingReductionCode = !0;
            this.isLoadingReductionCodeError = !1;
            t = this;
            i = {
                refreshOnSuccess: "refreshDiscount refreshOrderTotalPrice refreshShipping refreshError",
                refreshOnError: "refreshDiscount",
                onlyKeys: n,
                success: function() {
                    t.isLoadingReductionCode = !1
                },
                fail: function() {
                    t.isLoadingReductionCode = !1;
                    t.isLoadingReductionCodeError = !0;
                    Twine.refresh()
                }
            };
            this.sendCheckoutForm(r, i)
        },
        removeReductionCode: function() {
            var i = document.forms.checkoutForm, t, n, r;
            i.elements.reductionCode.value = null;
            this.isLoadingReductionCode = !0;
            t = ["_method", "reductionCode", "email"];
            this.requireShipping && t.push("shippingMethod");
            n = this;
            this.isLoadingReductionCodeError = !1;
            r = {
                refreshOnSuccess: "refreshDiscount refreshOrderTotalPrice refreshShipping refreshError",
                refreshOnError: "refreshDiscount",
                onlyKeys: t,
                success: function() {
                    n.isLoadingReductionCode = !1
                },
                fail: function() {
                    n.isLoadingReductionCode = !1;
                    n.isLoadingReductionCodeError = !0;
                    Twine.refresh()
                }
            };
            this.sendCheckoutForm(i, r)
        },
        removeCurrentDiscountViolation: function(n) {
            $(n.target).closest(".field").remove()
        },
        refreshShippingMethod: function(n) {
            var i = this, t, r;
            this.isLoadingShippingError = !1;
            t = ["_method", "shippingMethod", "differenceAddress"];
            this.differenceAddress ? t.push("shippingProvince", "shippingDistrict", "shippingWard") : t.push("billingProvince", "billingDistrict", "billingWard");
            r = {
                refreshOnSuccess: "refreshOrderTotalPrice refreshDiscount refreshShipping refreshError",
                refreshOnError: "refreshShipping",
                onlyKeys: t,
                success: function() {
                    i.isLoadingShippingMethod = !1
                },
                fail: function() {
                    i.isLoadingShippingMethod = !1;
                    i.isLoadingShippingError = !0;
                    Twine.refresh()
                }
            };
            this.sendCheckoutForm(n, r)
        },
        getTextShippingPriceFinal: function() {
            if (!this.shippingMethods)
                return "-";
            for (var n = 0; n < this.shippingMethods.length; n++)
                if (this.shippingMethods[n].name === this.shippingMethod)
                    return this.shippingMethods[n].textPriceFinal;
            return "-"
        },
        getTextShippingPriceOriginal: function() {
            if (!this.shippingMethods)
                return "-";
            for (var n = 0; n < this.shippingMethods.length; n++)
                if (this.shippingMethods[n].name === this.shippingMethod)
                    return this.shippingMethods[n].textPriceOriginal;
            return ""
        },
        getTextTotalPrice: function() {
            if (!this.shippingMethods)
                return this.subTotalPriceText;
            for (var n = 0; n < this.shippingMethods.length; n++)
                if (this.shippingMethods[n].name === this.shippingMethod)
                    return this.shippingMethods[n].subtotalPriceWithShippingFee;
            return this.subTotalPriceText
        },
        loadRecaptcha: function() {
            $.ajax({
                url: "https://www.google.com/recaptcha/api.js",
                dataType: "script",
                "async": !0
            })
        },
        handleToggleDifferenceAddress: function(r) {
            if ((!t(this.billing.province, this.shipping.province) || !t(this.billing.district, this.shipping.district) || !t(this.billing.ward, this.shipping.ward)) && (this.shipping.province || this.shipping.district || this.shipping.ward)) {
                if (!i(n)) {
                    this.isAddressSelecting = !0;
                    return
                }
                this.isLoadingShippingMethod = !0;
                this.isAddressSelecting = !1;
                this.refreshShippingMethod(r)
            }
        },
        handleCustomerAddressChange: function(n, t) {
            var u = n.target.options[n.target.selectedIndex].dataset, r;
            this.billing.name = u.name || "";
            this.billing.address = u.address || "";
            this.billing.phone = u.phone || "";
            this.billing.province = u.province || "";
            this.billing.district = u.district || "";
            this.billing.ward = u.ward || "";
            this.billing.zip = u.zip || "";
            t.billingProvince && (t.billingProvince.value = this.billing.province,
            t.billingProvince.setAttribute("value", this.billing.province));
            t.billingDistrict && (t.billingDistrict.value = this.billing.district,
            t.billingDistrict.setAttribute("value", this.billing.district));
            t.billingWard && (t.billingWard.value = this.billing.ward,
            t.billingWard.setAttribute("value", this.billing.ward));
            r = this;
            Address.refresh(function() {
                r.requireShipping && !r.differenceAddress && (i(r) ? (r.isLoadingShippingMethod = !0,
                r.isAddressSelecting = !1,
                r.refreshShippingMethod(t)) : r.isAddressSelecting = !0)
            })
        },
        markShippingMethodSelectFirstIfNeed: function() {
            var n = this.shippingMethods.map(function(n) {
                return n.name
            });
            n.length && n.indexOf(this.shippingMethod) === -1 && (this.shippingMethod = n[0],
            Twine.refresh())
        },
        clearPollTimeOut: function() {
            for (var n = 0; n < this.timeoutIds.length; n++)
                clearTimeout(this.timeoutIds[n])
        },
        startPollingCheckoutStatus: function(n, t, i, r) {
            function f() {
                fetch(n, {
                    headers: {
                        "X-Requested-With": "FetchApiRequest"
                    }
                }).then(function(n) {
                    var t = n.headers.get("X-Next-Redirect");
                    if (t)
                        return Page.visit(t, {
                            reload: !0
                        }),
                        !0;
                    u.timeoutIds.push(setTimeout(function() {
                        f()
                    }, 1e3))
                }).catch(function() {
                    u.timeoutIds.push(setTimeout(function() {
                        f()
                    }, 3e3))
                })
            }
            function e(n) {
                n > 0 ? (u.timeoutIds.push(setTimeout(function() {
                    e(n - 1)
                }, 1e3)),
                --u.pollSeconds,
                Twine.refresh()) : Page.visit(t, {
                    reload: !0
                })
            }
            this.clearPollTimeOut();
            var u = this;
            u.pollSeconds = r;
            u.timeoutIds.push(setTimeout(function() {
                f()
            }, 1e4));
            u.timeoutIds.push(setTimeout(function() {
                e(r - 1)
            }, 1e3))
        },
        sendCheckoutForm: function(n, t) {
            for (var c, i, e, s = [].slice.call(n.querySelectorAll("input:not([type='reset']):not([type='button']):not([type='submit']):not([type='image']), select, textarea")), u = "", f = 0; f < s.length; f++) {
                var r = s[f]
                  , v = !r.disabled && (t.onlyKeys && t.onlyKeys.indexOf(r.name) >= 0 || t.exceptKeys && t.exceptKeys.indexOf(r.name) < 0 || !t.onlyKeys && !t.exceptKeys)
                  , h = r.type == "checkbox" || r.type == "radio";
                v && r.name && (h && r.checked || !h) && (u.length && (u += "&"),
                u += encodeURIComponent(r.name) + "=" + encodeURIComponent(r.value))
            }
            c = n.getAttribute("action");
            i = new XMLHttpRequest;
            i.open("POST", c, !0);
            i.setRequestHeader("X-Requested-With", "XMLHttpRequest");
            i.setRequestHeader("Accept", "text/html, application/xhtml+xml, application/xml");
            i.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
            i.setRequestHeader("X-XHR-Referer", document.location.href);
            e = CSRFToken.get().token;
            e && i.setRequestHeader("X-CSRF-Token", e);
            var o = this
              , y = t.refreshOnSuccess && t.refreshOnSuccess.split(" ")
              , l = t.refreshOnError && t.refreshOnError.split(" ")
              , p = t.refreshOnSuccessExcept && t.refreshOnSuccessExcept.split(" ")
              , a = t.refreshOnErrorExcept && t.refreshOnErrorExcept.split(" ");
            i.addEventListener("error", function() {
                t.fail && t.fail(i);
                o.onError(i, l, a)
            });
            i.addEventListener("load", function() {
                if (i.status < 400) {
                    t.success && t.success();
                    o.onSuccess(i, y, p)
                } else {
                    t.fail && t.fail(i);
                    o.onError(i, l, a)
                }
            });
            i.send(u)
        },
        onSuccess: function(n, t, i) {
            var r = n.getResponseHeader("X-Next-Redirect");
            if (r) {
                Page.visit(r, {
                    reload: !0
                });
                return
            }
            t ? Page.refresh({
                response: n,
                onlyKeys: t
            }) : i ? Page.refresh({
                response: n,
                exceptKeys: i
            }) : Page.refresh({
                response: n
            })
        },
        onError: function(n, t, i) {
            t ? Page.refresh({
                response: n,
                onlyKeys: t
            }) : i ? Page.refresh({
                response: n,
                exceptKeys: i
            }) : Page.refresh({
                response: n
            })
        }
    };
    r();
    n.email && n.shouldSaveCheckoutAbandon && n.setJobToSaveCheckoutAbandon(5e3);
    document.addEventListener("page:before-partial-replace", function(n) {
        var i = n.data, t;
        if (i)
            for (t = 0; t < i.length; t++)
                Twine.unbind(i[t])
    });
    document.addEventListener("page:load", function(t) {
        r(t.data);
        n.markShippingMethodSelectFirstIfNeed();
        n.shouldRefreshAddress && (Address.refresh(),
        u(),
        n.shouldRefreshAddress = !1)
    })
}),
function(n) {
    function i(n, t) {
        for (var r = /\$\(([^\)]+)?\)/g, i; i = r.exec(n); )
            n = t[i[1]] && t[i[1]]instanceof Array ? n.replace(i[0], t[i[1]].join("")) : n.replace(i[0], t[i[1]]),
            r.lastIndex = 0;
        return n
    }
    function t(n, t=".", i=" đ") {
        if (n) {
            var r = parseInt(n).toString();
            return r.replace(/\B(?=(\d{3})+(?!\d))/g, t) + i
        }
        return 0 + i
    }
    var r = {
        isLoadingQr: !1,
        loadedQrBank: !1,
        loadedBank: !1,
        bankQrList: [],
        bankList: [],
        isLoadingQr: !1,
        isLoadingFee: !1,
        payOnQrStep: 1,
        bankInstChoose: null,
        listFee: [],
        installmentRule: "",
        loadBank: function(n) {
            var t = this
              , r = "/payon/qr_banks.json";
            if (n === "qr") {
                if (this.loadedQrBank)
                    return
            } else if (n === "inst") {
                if (this.loadedBank)
                    return;
                r = "/payon/banks.json"
            }
            return fetch(r).then(function(n) {
                return n.json()
            }).then(function(r) {
                var o, e, s, u, f;
                if ($(".bank-list"))
                    if (o = $("#bank-list__template").text(),
                    e = [],
                    n === "qr") {
                        for (u = 0; u < r.banks.length; u++)
                            f = r.banks[u],
                            e.push(i(o, f));
                        t.bankQrList = r.banks;
                        $(".bank-list").html(e.join(""))
                    } else if (n === "inst") {
                        for (s = ["<option value hidden>Chọn ngân hàng<\/option>"],
                        u = 0; u < r.banks.length; u++)
                            f = r.banks[u],
                            e.push(i(o, f)),
                            s.push("<option value='" + f.code + "'>" + f.full_name + "<\/option>");
                        t.bankList = r.banks;
                        $(".bank-list-select").html(s.join(""));
                        $(".bank-list").html(e.join(""))
                    }
                n === "qr" ? t.loadedQrBank = !0 : n === "inst" && (t.loadedBank = !0);
                Twine.bind().refresh()
            })
        },
        changeBankCodeQr: function(n) {
            this.isLoadingQr || (this.payon_bank = n,
            $("#payon_bank").val(n))
        },
        loadQrCode: function() {
            var t = Twine.context(document.body), n, i, r;
            (t.clearPollTimeOut(),
            n = this,
            i = document.forms.payon_form,
            n.isLoadingQr) || (n.isLoadingQr = !0,
            r = {
                refreshOnSuccess: "qr-image",
                refreshOnError: "qr-image",
                success: function() {
                    n.isLoadingQr = !1;
                    n.payOnQrStep = 2
                },
                fail: function() {
                    n.isLoadingQr = !1;
                    Twine.refresh()
                }
            },
            t.sendReductionCodeForm ? t.sendReductionCodeForm(i, r) : t.sendCheckoutForm && t.sendCheckoutForm(i, r),
            Twine.refresh())
        },
        changeBankCodeInst: function(n) {
            var t = this;
            n != t.payon_bank && (t.bankInstChoose = t.bankList.find(function(t) {
                return t.code == n
            }),
            $("#payon_bank").val(n),
            $("#payon_card").val(""),
            $("#payon_cycle").val(""),
            $("#payon_userfee").val(""),
            this.payon_bank = n,
            this.payon_cycle = "",
            this.payon_userfee = "",
            this.payon_card = "",
            this.listFee = [],
            this.installmentRule = t.bankInstChoose.installment_rule,
            t.installmentRule && $(".installment-rule").text(t.installmentRule),
            Twine.refresh())
        },
        checkBankCardInst: function(n) {
            return this.bankInstChoose && this.bankInstChoose.installment_card_type && this.bankInstChoose.installment_card_type.find(function(t) {
                return t === n
            }) ? !0 : !1
        },
        changeBankCardInst: function(n) {
            n !== this.payon_card && (this.payon_card = n,
            $("#payon_card").val(n),
            this.caculateFeeInst())
        },
        caculateFeeInst: function() {
            var t = this;
            return t.isLoadingFee = !0,
            fetch("/payon/installment_fee", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    amount: parseInt($("#payon_amount").val()),
                    bank_code: t.payon_bank,
                    card_type: t.payon_card,
                    cycles: t.bankInstChoose.cycle
                })
            }).then(function(n) {
                return n.json()
            }).then(function(i) {
                t.listFee = i.data.sort(function(n, t) {
                    return n.month > t.month ? 1 : n.month < t.month ? -1 : 0
                });
                i.data.length > 0 && (n.innerWidth < 768 ? t.renderMobileInst() : t.renderDesktopInst());
                t.isLoadingFee = !1
            }).catch(function() {
                t.isLoadingFee = !1
            })
        },
        changeCycle: function(n) {
            var u = this, r, o;
            if (n != u.payon_cycle && (u.payon_cycle = n,
            r = u.listFee.find(function(t) {
                return t.month == n
            }),
            r)) {
                u.payon_userfee = r.userfee;
                var e = $(".fee-mobile")
                  , s = $("#bank-list__fee-mobile").text()
                  , f = 0;
                r.userfee === 1 && (f = r.fee);
                o = {
                    month: r.month,
                    amount_month: t((r.amount_payment + f) / r.month),
                    amount_total: t(r.amount_payment + f),
                    amount_deviant: t(f)
                };
                Twine.unbind(e[0]);
                e.html(i(s, o));
                Twine.bind(e[0]);
                Twine.refresh()
            }
        },
        renderMobileInst: function() {
            var n = this, s = $(".list-cycle-mobile"), h = $("#bank-list__cycle-mobile").text(), c = $(".fee-mobile"), l = $("#bank-list__fee-mobile").text(), f, u, e, r, o;
            for (n.payon_cycle = n.listFee[0].month,
            n.payon_userfee = n.listFee[0].userfee,
            $("#payon_cycle").val(n.listFee[0].month),
            $("#payon_userfee").val(n.listFee[0].userfee),
            f = [],
            u = 0; u < n.listFee.length; u++)
                e = n.listFee[u],
                f.push(i(h, e));
            s.html(f.join(""));
            r = 0;
            n.listFee[0].userfee === 1 && (r = n.listFee[0].fee);
            o = {
                month: n.listFee[0].month,
                amount_month: t((n.listFee[0].amount_payment + r) / n.listFee[0].month),
                amount_total: t(n.listFee[0].amount_payment + r),
                amount_deviant: t(r)
            };
            Twine.unbind($(".payon-inst__fee")[0]);
            c.html(i(l, o));
            Twine.bind($(".payon-inst__fee")[0]);
            Twine.refresh()
        },
        renderDesktopInst: function() {
            for (var n, u, e = this, o = $(".fee-desktop"), s = $("#bank-list__fee-desktop").text(), r = {
                month: [],
                amount_month: [],
                amount_total: [],
                amount_deviant: []
            }, f = 0; f < e.listFee.length; f++)
                n = e.listFee[f],
                u = 0,
                n.userfee === 1 && (u = n.fee),
                r.month.push("<th><span>" + n.month + " tháng<\/span><\/th>"),
                r.amount_month.push('<td><span class="red">' + t((n.amount_payment + u) / n.month) + "<\/span><\/td>"),
                r.amount_total.push("<td><span>" + t(n.amount_payment + u) + "<\/span><\/td>"),
                r.amount_deviant.push("<td><span>" + t(u) + '<\/span><button type="button" class="btn btn-default btn-choose-cycle" bind-event-click="PayOn.submitForm(this, ' + n.month + ')">Thanh toán<svg xmlns="http://www.w3.org/2000/svg"><use href="#spinner"><\/use><\/svg><\/button><\/td>');
            Twine.unbind($(".payon-inst__fee")[0]);
            o.html(i(s, r));
            Twine.bind($(".payon-inst__fee")[0]);
            Twine.refresh()
        },
        submitForm: function(n, t) {
            var u = this, r;
            n.classList.add("is-submit");
            $(".btn-choose-cycle").prop("disabled", !0);
            var i = Twine.context(document.body)
              , f = document.forms.payon_form
              , e = u.listFee.find(function(n) {
                return n.month == t
            });
            $("#payon_bank").val(u.payon_bank);
            $("#payon_cycle").val(e.month);
            $("#payon_userfee").val(e.userfee);
            r = {
                refreshOnSuccess: "checkout",
                refreshOnError: "checkout",
                exceptKeys: ["_method"],
                success: function() {},
                fail: function() {
                    Twine.refresh()
                }
            };
            i.sendReductionCodeForm ? i.sendReductionCodeForm(f, r) : i.sendCheckoutForm && i.sendCheckoutForm(f, r);
            Twine.refresh()
        }
    };
    n.PayOn = r
}(window),
function(n) {
    var t = {
        handlePayment: function(i, r) {
            var u = JSON.parse(i), e = null, f = null, o;
            u && u.payment_data && u.payment_data.user_no && (f = "authentication_token_".concat(u.payment_data.user_no),
            o = localStorage.getItem(f),
            e = t.decodeString(o, u.public_key));
            AfteeVn.config({
                pre_token: e,
                pub_key: u.public_key,
                terminal_id: u.sapo_terminal_id,
                payment: u.payment_data,
                authenticated: function(n) {
                    if (f) {
                        var i = t.encodeString(n, u.public_key);
                        localStorage.setItem(f, i)
                    }
                },
                cancelled: function() {
                    u && u.payment_data && u.payment_data.shop_transaction_no && t.callback({
                        shop_transaction_no: u.payment_data.shop_transaction_no,
                        error_message: "Khách hàng tắt popup thanh toán"
                    }, "error");
                    n.location.href = r
                },
                failed: function(i) {
                    i ? i.error_flag ? n.location.href = r : t.callback({
                        id: i.id,
                        shop_transaction_no: u.payment_data.shop_transaction_no,
                        error_message: i.authorization_result_ng_reason === 1 ? "Vượt quá hạn mức khả dụng" : "Khác",
                        registration_datetime: i.registration_datetime,
                        discount_amount: i.discount_amount,
                        amount: i.amount
                    }, "failed") : n.location.href = r
                },
                succeeded: function(n) {
                    t.callback(n, "success")
                },
                error: function(n, i, r) {
                    var o = n, f, e;
                    r && Array.isArray(r) && r.length > 0 && (f = r.map(function(n) {
                        return n.code
                    }).join(","),
                    e = r.map(function(n) {
                        return Array.isArray(n.messages) ? n.messages.join(", ") : n.messages
                    }).join(","),
                    o = f && e ? f.concat(" - ").concat(e) : f || e);
                    u && u.payment_data && u.payment_data.shop_transaction_no && t.callback({
                        shop_transaction_no: u.payment_data.shop_transaction_no,
                        error_message: o
                    }, "error")
                }
            });
            setTimeout(function() {
                AfteeVn.start()
            }, 1e3)
        },
        callback: function(t, i) {
            if (!t) {
                n.location.href = payment_retry_url;
                return
            }
            fetch("/aftee/callback", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    id: t.id,
                    shop_transaction_no: t.shop_transaction_no,
                    registration_datetime: t.registration_datetime,
                    discount_amount: t.discount_amount,
                    amount: t.amount,
                    transaction_status: i,
                    error_message: t.error_message
                })
            }).then(function(t) {
                t.url && i !== "error" && (n.location.href = t.url)
            })
        },
        encodeString: function(n, t) {
            var r, i, u;
            if (!n || !t)
                return n;
            for (r = "",
            i = 0; i < n.length; i++)
                u = String.fromCharCode(n.charCodeAt(i) ^ t.charCodeAt(i % t.length)),
                r += u;
            return r
        },
        decodeString: function(n, t) {
            var r, i, u;
            if (!n || !t)
                return n;
            for (r = "",
            i = 0; i < n.length; i++)
                u = String.fromCharCode(n.charCodeAt(i) ^ t.charCodeAt(i % t.length)),
                r += u;
            return r
        }
    };
    n.Aftee = t
}(window);